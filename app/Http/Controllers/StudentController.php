<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Student::query();

        // Filter by grade
        if ($request->has('grade') && $request->grade != '') {
            $query->where('grade', $request->grade);
        }

        $students = $query->paginate(10);

        return view('students', compact('students'));


        //$students = Student::paginate(10);
        //return view('students', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
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

    // Egy diák adatainak megjelenítése
    //public function show($id)
    //{
    //    $student = Student::findOrFail($id);
    //    return $student;
    //}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'grade' => 'required|string|max:10',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Diák adatai sikeresen frissítve.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('students.index')->with('error', 'Diák nem található.');
        }

        if ($student->delete()) {
            return redirect()->route('students.index')->with('success', 'Diák sikeresen törölve.');
        } else {
            return redirect()->route('students.index')->with('error', 'Hiba történt a törlés során.');
        }
    }

    public function export()
    {
        return Excel::download(new StudentExport, 'diakok.xlsx');
    }
}
