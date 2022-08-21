<?php
namespace App\Repository;
use App\Models\Student;

class StudentRepository implements IStudentRepository{

public function studentGetAllLists(){

    return Student::all();
}

public function createStudent(array $data){

    // dd($data);

    Student::insert([
        'name'=> $data['name'],
        'age'=>$data['age'],
        'gender'=>$data['gender'],
        'reporting_teacher'=>$data['reporting_teacher']
    ]);
}

public function editStudent($id){

    return Student::find($id);
}

public function updateStudent($id, array $data){

// dd($data);

Student::find($id)->update([
        'name'=> $data['name'],
        'title'=>$data['age'],
        'gender'=>$data['gender'],
        'reporting_teacher'=>$data['reporting_teacher']
    ]);
}

public function deleteStudent($id){

    return Student::find($id)->delete();
}



}

?>