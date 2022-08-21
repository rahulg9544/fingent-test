<?php
namespace App\Repository;
use App\Models\Mark;
use App\Models\Student;

class StudentMarkRepository implements IStudentMarkRepository{

public function studentGetMarkLists(){

  //  dd("test");

    return Mark::with('studentNames')->get();
}

public function studentGetnames(){

    $mark = new Mark;
    return $mark->StudentNames();
}

public function createStudentMark(array $data){

    // dd($data);

    $total_marks = $data['maths'] + $data['science'] + $data['history'];

    $mark = new Mark;
    $mark->name = $data['name'];
    $mark->maths = $data['maths'];
    $mark->science = $data['science'];
    $mark->history = $data['history'];
    $mark->term = $data['term'];
    $mark->total_marks = $total_marks;
    $mark->save(); // it will INSERT a new record
}

public function editStudentMark($id){

    return Mark::find($id);
}

public function updateStudentMark($id, array $data){

// dd($data);

$total_marks = $data['maths'] + $data['science'] + $data['history'];

Mark::find($id)->update([
    'maths'=>$data['maths'],
    'science'=>$data['science'],
    'history'=>$data['history'],
    'term'=>$data['term'],
    'total_marks'=>$total_marks
    ]);
}

public function deleteStudentMark($id){

    return Mark::find($id)->delete();
}




}

?>