<?php
require base()."\\app\\models\\Admin.php";
require base()."\\app\\models\\Developer.php";

// class Home extends Controller{
class Login extends Controller{

    public function index(){
        // echo 'Controller Home';

        view('login');
    }

    public function login(){
        $email = '"'.$_POST['email'].'"';
        $password = $_POST['password'];

        $usr = Admin::find('id,password','email = ' . $email);
        if($usr["password"] == $password){
            SESSION::start();
            SESSION::set('id',$usr["id"]);
            SESSION::set('role',"admin");
            return redirect('admin');
        }
        
        $usr = Developer::find('id,password','email = ' . $email);
        if($usr["password"] == $password){
            SESSION::start();
            SESSION::set('id',$usr["id"]);
            SESSION::set('role',"dev");
            return redirect('dev');
        }
        return redirect('login');
    }

    public function logout(){
        SESSION::start();
        SESSION::destroy();
        return redirect('');
    }

}