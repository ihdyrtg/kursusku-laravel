<?php

namespace Tests\Feature;

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_course_can_be_created_and_shown(): void
    {
        $response = $this->post(route('courses.store'), [
            'code' => 'WEB-TEST',
            'name' => 'Web Testing',
            'description' => 'Course untuk feature test.',
            'fee' => 250000,
            'quota' => 30,
            'start_date' => '2026-12-20',
            'status' => 'open',
        ]);

        $course = Course::where('code', 'WEB-TEST')->firstOrFail();

        $response->assertRedirect(route('courses.index'));
        $this->assertDatabaseHas('courses', ['code' => 'WEB-TEST']);
        $this->get(route('courses.show', $course))->assertOk()->assertSee('Web Testing');
    }

    public function test_duplicate_code_is_rejected(): void
    {
        Course::create([
            'code' => 'DUP-01',
            'name' => 'Course Awal',
            'fee' => 0,
            'quota' => 20,
            'start_date' => '2026-12-20',
            'status' => 'open',
        ]);

        $response = $this->from(route('courses.create'))->post(route('courses.store'), [
            'code' => 'DUP-01',
            'name' => 'Course Duplikat',
            'fee' => 0,
            'quota' => 20,
            'start_date' => '2026-12-21',
            'status' => 'open',
        ]);

        $response->assertRedirect(route('courses.create'));
        $response->assertSessionHasErrors('code');
    }

    public function test_update_allows_current_code_and_delete_works(): void
    {
        $course = Course::create([
            'code' => 'EDIT-01',
            'name' => 'Course Edit',
            'fee' => 100000,
            'quota' => 20,
            'start_date' => '2026-12-20',
            'status' => 'draft',
        ]);

        $update = $this->put(route('courses.update', $course), [
            'code' => 'EDIT-01',
            'name' => 'Course Edit Baru',
            'description' => null,
            'fee' => 150000,
            'quota' => 25,
            'start_date' => '2026-12-22',
            'status' => 'open',
        ]);

        $update->assertRedirect(route('courses.show', $course));
        $this->assertDatabaseHas('courses', ['id' => $course->id, 'name' => 'Course Edit Baru']);

        $this->delete(route('courses.destroy', $course))->assertRedirect(route('courses.index'));
        $this->assertDatabaseMissing('courses', ['id' => $course->id]);
    }
}
