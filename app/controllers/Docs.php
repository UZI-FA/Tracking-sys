<?php
require base()."\\app\\models\\User.php";

// class Home extends Controller{
class Docs extends Controller{

    public function index(){
        // echo 'Controller Home';

        $data = [];
        $data['satu'] = 'Nomor 1';

        view('docs',$data);
    }

    public function show($satu = '78'){
        echo 'Show Home : '.$satu;
    }

}