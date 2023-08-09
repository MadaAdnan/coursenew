<?php
interface CrudInterface{
    //create
    public function create($data=[]);
    // read
    public function getById($id);
    //update
    public function update($id,$data=[]);
    //delete
    public function delete($id);
}
