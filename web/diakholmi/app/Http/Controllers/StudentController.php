<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'school' => 'required|string|max:255',
            'grade' => 'required|integer|max:2',
            'email' => 'required|email|max:50',
            'address' => 'required|string|max:50',
        ]);

        Student::create($request->all());

        return redirect()->back()->with('success', 'Jelentkezés sikeresen elküldve!');
    }
}
