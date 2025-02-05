<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
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

    // Egy diák adatainak megjelenítése
    //public function show($id)
    //{
    //    $student = Student::findOrFail($id);
    //    return $student;
    //}

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
    public function destroy($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('student.index')->with('error', 'Diák nem található.');
        }

        if ($student->delete()) {
            return redirect()->route('student.index')->with('success', 'Diák sikeresen törölve.');
        } else {
            return redirect()->route('student.index')->with('error', 'Hiba történt a törlés során.');
        }
    }

    public function export()
    {
        return Excel::download(new StudentsExport, 'diakok.xlsx');
    }
}
