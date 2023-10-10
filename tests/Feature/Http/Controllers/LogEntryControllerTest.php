<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\LogEntry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogEntryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_no_content(): void
    {
        $response = $this->get('/api');
        $response->assertExactJson([]);
    }

    public function test_list_entries(): void
    {
        $entry_created = LogEntry::factory()->createOne();

        $response = $this->get('/api');
        $response->assertExactJson([
            [
                'id' => $entry_created->id,
                'ip' => $entry_created->ip,
                'created_at' => $entry_created->created_at,
                'updated_at' => $entry_created->updated_at,
            ]
        ]);
    }
}
