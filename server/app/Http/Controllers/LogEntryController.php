<?php

namespace App\Http\Controllers;

use App\Http\Resources\LogEntryResource;
use App\Models\LogEntry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LogEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return LogEntryResource::collection(LogEntry::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = LogEntry::create([
            'ip' => $request->ip(),
        ]);
        return  response(['id' => $created->id], Response::HTTP_CREATED);
    }
}
