<?php
require base()."\\app\\models\\User.php";
require base()."\\app\\models\\Developer.php";

// class Home extends Controller{
class Dev extends Controller{

    public function __construct(){
        SESSION::start();
        if(!SESSION::has('id') || !(SESSION::get('role') == "dev")){
            redirect('auth');
        }
    }

    public function index(){
        if (isset($_POST['nama'])) {
            $data['target'] = User::find('nama,Longitude,Latitude','nama = "'.$_POST['nama'].'"');
        }
        
        $data['users'] = User::get('nama');
        $data['user'] = Developer::find('api_key','id = "'.SESSION::get('id').'"');

        view('dev/dashboard',$data,'Dashboard');
    }
}