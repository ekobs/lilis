<?php 

class Produk extends Controller{
    public function index(){
        $data['judul']='Produk';
        $this->view('templates/header',$data);
        // echo 'home / index';
        $this->view('produk/index');
        $this->view('templates/footer');

    }
}