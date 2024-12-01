<?php
require base()."\\app\\models\\Developer.php";

// class Home extends Controller{
class Dev extends Controller{

    public function __construct(){
        SESSION::start();
        if(!SESSION::has('id') || !(SESSION::get('role') == "dev")){
            redirect('login');
        }
    }

    public function index(){
        // echo 'Controller Home';
        $data = Developer::find('api_key','id = "'.SESSION::get('id').'"');

        view('dev/dashboard',$data,'Dashboard');
    }
}