<?php

namespace Tests\Feature;

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchPaginationTest extends TestCase
{
    use RefreshDatabase;

    public function test_search_filter_pagination_and_partial_response_work(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            Course::create([
                'code' => sprintf('WEB-%02d', $i),
                'name' => sprintf('Web Course %02d', $i),
                'fee' => 200000,
                'quota' => 20,
                'start_date' => '2026-12-20',
                'status' => 'open',
            ]);
        }

        Course::create([
            'code' => 'PHP-X',
            'name' => 'PHP Closed',
            'fee' => 200000,
            'quota' => 20,
            'start_date' => '2026-12-21',
            'status' => 'closed',
        ]);

        $response = $this->get(route('courses.index', ['q' => 'Web', 'status' => 'open']));
        $response->assertOk()->assertSee('Web Course 01')->assertDontSee('PHP Closed');
        $response->assertSee('page=2', false);

        $partial = $this->get(route('courses.index', ['q' => 'Web', 'status' => 'open', 'partial' => 1]));
        $partial->assertOk()->assertSee('course-results')->assertDontSee('<html', false);
    }
}
