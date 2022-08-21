<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Repository\IStudentRepository;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public $student;

    public function __construct(IStudentRepository $student)
    {
        $this->student = $student;
    }
    
    public function studentGetAllLists()
    {
        $students = $this->student->studentGetAllLists();

        return view('students')->with('students',$students);
    }

    public function create() {

        return view('student.create');
    }

    public function store(Request $request) {

        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'gender'=>'required',
        ]);

        $data = $request->all();

        $this->student->createStudent($data);

        return redirect('/students');
    }

    public function edit($id){

        $student = $this->student->editStudent($id);
       

        return view('student.edit')->with('student', $student);
    }
    
    public function update($id, Request $request){

        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'gender'=>'required',
        ]);

        $data = $request->all();

        $this->student->updateStudent($id, $data);

        return redirect('/students');
    }

    public function delete($id){

        $this->student->deleteStudent($id);

        return redirect('/students');
    }
}
