<?php 

class About extends Controller{
    public function index(){
        $data['judul']='About';
        $this->view('templates/header',$data);
        // echo 'home / index';
        $this->view('about/index');
        $this->view('templates/footer');
    }
    public function page(){
        echo 'About/page';
    }
}