<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Approvedemand;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::paginate(10); // select * from students
        //dd($students);
        return view('students', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'school' => 'required|string|max:255',
            'grade' => 'required|integer|max:8',
            'email' => 'required|email|max:50',
            'phone' => 'required|max:20',
            'address' => 'required|string|max:50',
        ]);

        Student::create($request->all());

        return redirect()->back()->with('success', 'Jelentkezés sikeresen elküldve!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $id)
    {
        Student::destroy($id);
        return redirect(route('student.index'));
    }

    public function export()
    {
        return Excel::download(new Student, 'users.xlsx');
    }
}
