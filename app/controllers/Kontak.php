<?php 

class Kontak extends Controller{
    public function index(){
        $data['judul']='Kontak';
        $this->view('templates/header',$data);
        // echo 'home / index';
        $this->view('kontak/index');
        $this->view('templates/footer');

    }
}