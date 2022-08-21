<?php
namespace App\Repository;

interface IStudentRepository{

    public function studentGetAllLists();

    public function createStudent(array $data);

    public function editStudent($id);  

    public function updateStudent($id, array $data);

    public function deleteStudent($id);
    
  

}

?>