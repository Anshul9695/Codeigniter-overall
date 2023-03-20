<?php  
namespace App\Models;
use CodeIgniter\Model;
class BookModel extends Model{
    protected $table='books';
    protected $allowedFields =['title','author','issbn_no'];

    public function getRow($id){
        $getValue=$this->where('id',$id)->first();
        return $getValue;
    }
}
?>