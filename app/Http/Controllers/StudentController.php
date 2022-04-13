<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentCollection;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::level($request->input('level'))->get();
        return (new StudentCollection($students))
            ->additional([
                'msg' => [
                    'summary' => 'Consulta de estudiantes',
                    'detail' => '',
                ]
            ])
            ->response()->setStatusCode(200);
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->birthdate = $request->input('birthdate');
        $student->father_name = $request->input('fatherName');
        $student->mother_name = $request->input('motherName');
        $student->level = $request->input('level');
        $student->section = $request->input('section');
        $student->registered_at = $request->input('registeredAt');
        $student->save();

        return (new StudentResource($student))
            ->additional([
                'msg' => [
                    'summary' => 'Estudiante creado',
                    'detail' => 'Se registró correctamente',
                ]
            ])
            ->response()->setStatusCode(201);
    }
}
