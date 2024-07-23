<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::with('contact')->get();
        //  $student =Student::withWhereHas('contact', function($query){
        //      $query->where('city', 'lahore');
        //  })->get();
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create one to one relation ship
        $student = Student::create([
            'name' => 'M.Rehan',
            'age' => '20',
            'gender' => 'M',
        ]);
        $student->contact()->create([
            'email' => 'rehan@gmail.com',
            'phone' => '03002345876',
            'address' => 'shaikhum',
            'city' => 'pattoki',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
