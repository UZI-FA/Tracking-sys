<?php
require base()."\\app\\models\\User.php";

// class Home extends Controller{
class Login extends Controller{

    public function index(){
        // echo 'Controller Home';
        $mhs =  new User();
        $mhs->getAll();
        
        $data = [];
        $data['satu'] = 'Nomor 1';

        view('admin/dashboard',$data);
    }

    public function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];


    }

    public function logout(){
        SESSION::destroy();
    }

}