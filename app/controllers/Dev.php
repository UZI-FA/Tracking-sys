<?php
require base()."\\app\\models\\User.php";

// class Home extends Controller{
class Dev extends Controller{

    public function index(){
        // echo 'Controller Home';
        $mhs =  new User();
        $mhs->getAll();
        
        $data = [];
        $data['satu'] = 'Nomor 1';

        view('dev/dashboard',$data);
    }

    public function show($satu = '78'){
        echo 'Show Home : '.$satu;
    }

}