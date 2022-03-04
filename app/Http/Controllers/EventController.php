<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return EventResource::collection(Event::all());
    }

    public function show(Event $event)
    {
        return new EventResource($event);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            "subject" => "required",
            "description" => "required",
            "location" => "required",
            "allDay" => "required",
            "start" => "nullable",
            "end" => "nullable"
        ]);

        $event = Event::create($data);
        return new EventResource($event);
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            "subject" => "required",
            "description" => "required",
            "location" => "required",
            "allDay" => "required",
            "start" => "nullable",
            "end" => "nullable"
        ]);

        $event->update($data);
    }

    public function destroy(Event $event)
    {
        return $event->delete();
    }
}
