<?php   
namespace App\Controllers;

use App\Models\BookModel;

class Book extends BaseController{
    public function index(){
        $session=\Config\Services::session();
        $data['session']=$session;
        $model=new BookModel();
        $data['books']=$model->orderBy('id','ASC')->findAll();
        // echo "<pre>";
        // print_r($data['books']);
        // die;
        return view('Book/list',$data);
    }
    public function create(){
        $session=\Config\Services::session();
        helper('form');
        $data=[];
        if($this->request->getMethod()=='post'){
        $input=$this->validate([
            'title'=>'required',
            'author'=>'required',
            'issbn_no'=>'required'
        ]);
        if($input==true){
            $model=new BookModel();
            $model->save([
                'title'=>$this->request->getPost('title'),
                'author'=>$this->request->getPost('author'),
                'issbn_no'=>$this->request->getPost('issbn_no'),
            ]);
            $session->setFlashdata('success','Data Inserted Successfully..');
            return redirect()->to('/books');
            //your validation successfull insert your value in database 
        }else{
            //form validation not successfull 
            $data['validation']=$this->validator;
        }
        }
        echo view('Book/create',$data);
    }

    public function edit($id){
        $session=\Config\Services::session();
        helper('form');
        $model=new BookModel();
        $book=$model->getRow($id);
        $data=[];
        $data['book']=$book;
       if(empty($book)){
        $session->setFlashdata('error','No Data Found..');
        return redirect()->to('books');
       }
       if($this->request->getMethod()=='post'){
        $input=$this->validate([
            'title'=>'required',
            'author'=>'required',
            'issbn_no'=>'required'
        ]);
        if($input==true){
            $model->update($id,[
                'title'=>$this->request->getPost('title'),
                'author'=>$this->request->getPost('author'),
                'issbn_no'=>$this->request->getPost('issbn_no'),
            ]);
            $session->setFlashdata('success','Data Updated Successfully..');
            return redirect()->to('/books');
            //your validation successfull insert your value in database 
        }else{
            //form validation not successfull 
            $data['validation']=$this->validator;
        }
        }

        echo view('Book/edit',$data);
    }
    public function delete($id){
        $session=\Config\Services::session();
        $model=new BookModel();
        $book=$model->getRow($id);
      if(empty($book)){
        $session->setFlashdata('error','No Data Found..');
        return redirect()->to('books');
      }
      $model->delete($id);
      $session->setFlashdata('success','Record Deleted SuccessFully..');
      return redirect()->to('books');
    }
}
?>