<?php 

class Home extends Controller{
    public function index(){
        $data['judul']='Home';
        $this->view('templates/header',$data);
        // echo 'home / index';
        $this->view('home/index');
        $this->view('templates/footer');

    }
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}