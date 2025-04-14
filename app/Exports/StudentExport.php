<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Student::select('id', 'name', 'school', 'grade', 'parent_name', 'email', 'phone', 'address', 'created_at')->get();
    }

    public function headings(): array
    {
        return ["ID", "Név", "Iskola", "Osztály", "Szülő neve", "E-mail", "Telefonszám", "Számlázási cím", "Regisztráció ideje"];
    }

        /**
     * Map each row for export.
     *
     * @param $student
     * @return array
     */
    public function map($student): array
    {
        return [
            $student->id,
            $student->name,
            $student->school,
            $student->grade,
            $student->parent_name,
            $student->email,
            $student->phone,
            $student->address,
            $student->created_at ? $student->created_at->format('Y.m.d H:i') : ''
        ];
    }
}
