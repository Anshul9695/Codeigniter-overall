<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table='student';
    protected $allowedFields =['name','email','phone','address','image'];
    
 public function getRow($id){
    $findValue=$this->where('id',$id)->first();
    return $findValue;
 }
}
