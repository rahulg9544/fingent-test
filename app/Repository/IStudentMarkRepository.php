<?php
namespace App\Repository;

interface IStudentMarkRepository{

    public function studentGetMarkLists();

    public function studentGetNames();

    public function createStudentMark(array $data);

    public function editStudentMark($id);  

    public function updateStudentMark($id, array $data);

    public function deleteStudentMark($id);


    
  

}

?>