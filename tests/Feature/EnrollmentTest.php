<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Participant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EnrollmentTest extends TestCase
{
    use RefreshDatabase;

    private function makeCourse(): Course
    {
        return Course::create([
            'code' => 'REL-01',
            'name' => 'Relational Course',
            'fee' => 300000,
            'quota' => 2,
            'start_date' => '2026-12-20',
            'status' => 'open',
        ]);
    }

    public function test_enrollment_can_be_stored_only_once(): void
    {
        $course = $this->makeCourse();
        $participant = Participant::create([
            'name' => 'Alya Test',
            'email' => 'alya-test@example.test',
        ]);

        $first = $this->post(route('enrollments.store'), [
            'participant_id' => $participant->id,
            'course_id' => $course->id,
        ]);

        $first->assertRedirect(route('enrollments.index'));
        $this->assertDatabaseHas('enrollments', [
            'participant_id' => $participant->id,
            'course_id' => $course->id,
            'status' => 'registered',
        ]);

        $second = $this->from(route('enrollments.create'))->post(route('enrollments.store'), [
            'participant_id' => $participant->id,
            'course_id' => $course->id,
        ]);

        $second->assertRedirect(route('enrollments.create'));
        $second->assertSessionHasErrors('course_id');
    }

    public function test_availability_is_json_and_course_delete_cascades_enrollment(): void
    {
        $course = $this->makeCourse();
        $participant = Participant::create([
            'name' => 'Bima Test',
            'email' => 'bima-test@example.test',
        ]);

        Enrollment::create([
            'participant_id' => $participant->id,
            'course_id' => $course->id,
            'status' => 'registered',
        ]);

        $this->getJson(route('courses.availability', $course))
            ->assertOk()
            ->assertJsonPath('remaining', 1)
            ->assertJsonPath('course', 'Relational Course');

        $course->delete();
        $this->assertDatabaseCount('enrollments', 0);
        $this->assertDatabaseHas('participants', ['id' => $participant->id]);
    }
}
