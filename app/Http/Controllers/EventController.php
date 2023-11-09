<?php

namespace App\Http\Controllers;

use App\Models\CalendarEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class EventController extends Controller
{
    //
    public function index()
    {
        $allEvents = CalendarEvent::all();
        return view('admin-dashboard.pages.manage-event')
            ->with('allEvents', $allEvents);
    }

    public function add()
    {
        return view('admin-dashboard.pages.add-event');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_date' => 'required|date',
            'title' => 'required',
            'sub_title' => 'required',
            'content' => 'required',
            'event_image' => 'required|file|mimes:jpg,png',
        ]);

        try {
            DB::beginTransaction();

            $getEventImage = $request->file('event_image');
            $newFileName = Str::uuid() . '-' . date('Y-m-d His') . '.' . $getEventImage->getClientOriginalExtension();

            $getEventImage->storeAs('public/event_images', $newFileName);

            $newEvent = new CalendarEvent([
                'event_date' => $request->event_date,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'content' => $request->content,
                'event_image' => $newFileName,
            ]);

            $newEvent->save();

            DB::commit();

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function api_get($mode, $date = "")
    {
        try {
            $data = null;
            if ($mode === "thumbnail") {
                $data = CalendarEvent::where('event_date', $date)->select(['title'])->first();
            } elseif ($mode === "month") {
                $data = CalendarEvent::whereMonth('event_date', $date)->select(['title', 'event_date', 'id'])->get();
            } else {
                $data = CalendarEvent::find($date);
            }
            return response()->json([
                'success' => true,
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Cannot fetch events.'
            ], 400);
        }
    }

    public function edit($eventId)
    {
        $event = CalendarEvent::find($eventId);

        return view('admin-dashboard.pages.view-event')
            ->with('event', $event);
    }

    public function update(Request $request, $eventId)
    {
        $request->validate([
            'event_date' => 'required|date',
            'title' => 'required',
            'sub_title' => 'required',
            'content' => 'required',
            'event_image' => 'file|mimes:jpg,png',
        ]);

        try {
            $eventToEdit = CalendarEvent::find($eventId);

            DB::beginTransaction();

            if ($request->hasFile('event_image')) {
                File::delete('storage/event_images/' . $eventToEdit->event_image);
                $getEventImage = $request->file('event_image');
                $newFileName = Str::uuid() . '-' . date('Y-m-d His') . '.' . $getEventImage->getClientOriginalExtension();
                $getEventImage->storeAs('public/event_images', $newFileName);
                $eventToEdit->event_image = $newFileName;
            }

            $eventToEdit->event_date = $request->event_date;
            $eventToEdit->title = $request->title;
            $eventToEdit->sub_title = $request->sub_title;
            $eventToEdit->content = $request->content;

            $eventToEdit->save();

            DB::commit();

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function destroy($eventId)
    {
        try {
            DB::beginTransaction();
            $eventToDelete = CalendarEvent::find($eventId);
            File::delete('storage/event_images/' . $eventToDelete->event_image);

            $eventToDelete->delete();

            DB::commit();
            return redirect()->route('events.index');
        } catch (\Exception $e) {
            return redirect()->route('events.index');
        }
    }
}
