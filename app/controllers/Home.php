<?php
require base()."\\app\\models\\Mahasiswa.php";

// class Home extends Controller{
class Home extends Controller{

    public function index(){
        // echo 'Controller Home';
        $mhs =  new Mahasiswa();
        $mhs->getAll();
        
        $data = [];
        $data['satu'] = 'Nomor 1';

        view('templates/header');
        view('login',$data);
        view('templates/footer');
    }

    public function show($satu = '78'){
        echo 'Show Home : '.$satu;
    }

}