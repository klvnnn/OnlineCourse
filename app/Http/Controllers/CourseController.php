<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = course::get();
        return view('pages.courses',['course' => $course]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        course::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'durasi' => $request->durasi,
        ]);

        return redirect()->route('page', ['page' => 'courses']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = course::find($id);

        return view('pages.detail', [
            'course' => $course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
