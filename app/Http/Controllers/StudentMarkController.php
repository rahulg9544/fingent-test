<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Repository\IStudentRepository;
use App\Repository\IStudentMarkRepository;

class StudentMarkController extends Controller
{
    public $mark;

    public $student;

    public function __construct(IStudentMarkRepository $mark, IStudentRepository $student)
    {
        $this->mark = $mark;
        $this->student = $student;
    }
    
    public function studentGetMarkLists()
    {
        $marks = $this->mark->studentGetMarkLists();
        return view('marks', compact(['marks']));

    }

    public function create() {

        $students = $this->student->studentGetAllLists();

        return view('mark.create')->with('students',$students);
    }

    public function store(Request $request) {

        $request->validate([
            'term'=>'required',
            'maths'=>'required|integer',
            'science'=>'required|integer',
            'history'=>'required|integer',
        ]);

        $data = $request->all();

        $this->mark->createStudentMark($data);

        return redirect('/students/marks');
    }

    public function edit($id){

        $students = $this->student->studentGetAllLists();

        $mark = $this->mark->editStudentMark($id);

        return view('mark.edit', compact(['students', 'mark']));
    }
    
    public function update($id, Request $request){

        $request->validate([
            'term'=>'required',
            'maths'=>'required|integer',
            'science'=>'required|integer',
            'history'=>'required|integer',
        ]);

        $data = $request->all();

        $this->mark->updateStudentMark($id, $data);

        return redirect('/students/marks');
    }

    public function delete($id){

        $this->mark->deleteStudentMark($id);

        return redirect('/students/marks');
    }

    
}
