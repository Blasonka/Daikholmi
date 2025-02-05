<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Student::select('id', 'name', 'school', 'grade', 'email', 'phone', 'address')->get();
        //return Student::all();
    }

    public function headings(): array
    {
        return ["ID", "Név", "Iskola", "Osztály", "E-mail", "Telefonszám", "Számlázási cím"];
    }
}
