<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;
        $model = new StudentModel();
        $data['student'] = $model->orderBy('id', 'ASE')->findAll();
        return view('Student/student_list', $data);
    }

    public function create()
    {
        $session = \Config\Services::session();
        helper('form');
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ];
            if ($this->validate($rules)) {
                $file = $this->request->getFile('image');
                if ($file->isValid() && !$file->hasMoved()) {
                    $filename = $file->getName();
                    $file->move('uploads', $filename);
                }
                $data = [
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'address' => $this->request->getPost('address'),
                    'image' => $filename
                ];
                $model = new StudentModel();
                $model->save($data);
                return redirect()->to('/student/list');
            }
            $data['validation'] = $this->validator;
        }
        echo view('Student/create', $data);
    }
    public function edit($id)
    {
       $model=new StudentModel();
       $student=$model->getRow($id);
       $data['student']=$student;
       return view('Student/edit',$data);
    }
    public function update($id){
       $student=new StudentModel();
     $student_details=$student->getRow($id);
     $old_image=$student_details['image'];
     $file = $this->request->getFile('image');
     if ($file->isValid() && !$file->hasMoved()) {
      
      if(file_exists('uploads/'.$old_image)){
        unlink('uploads/'.$old_image);
      }
        $filename = $file->getName();
        $file->move('uploads', $filename);
    }else{
        $filename=$old_image;
    }
    $data = [
        'name' => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
        'phone' => $this->request->getPost('phone'),
        'address' => $this->request->getPost('address'),
        'image' => $filename
    ];
    $model = new StudentModel();
    $model->update($id,$data);
    return redirect()->to('/student/list');

    }

    public function delete($id)
    {
        $session = \Config\Services::session();
        $model = new StudentModel();
        $student = $model->getRow($id);
        if (empty($student)) {
            $session->setFlashdata('error', 'No Data found');
            return redirect()->to('/student/list');
        }
        $model->delete($id);
        $session->setFlashdata('success', 'Record Deleted Successfully');
        return redirect()->to('/student/list');
    }
}
