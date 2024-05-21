<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required|date',
            'desc' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = null;

        if($request->hasFile('image')){
            $image = $request->file('image')->store('img_event');
        }

        Event::create([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'desc' => $request->desc,
            'image' => $image
        ]);
        return redirect()->route('event.index')->with('success', "berhasil");

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $event = Event::findOrFail($id);
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required|date',
            'desc' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $event->image;

        if($request->hasFile('image')){
            $image = $request->file('image')->store('img_event');
        }

        $event->update([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'desc' => $request->desc,
            'image' => $image
        ]);

        return redirect()->route('event.index')->with('success', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('event.index')->with("success", "Event terhapus");
    }
}
