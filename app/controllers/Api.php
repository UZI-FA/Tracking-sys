<?php
require base()."\\app\\models\\Developer.php";

// class Home extends Controller{
class Api extends Controller{

    public function index(){
        // echo 'Controller Home';

        redirect('');
    }

    public function get($api_key = '-'){

        // $dev = Developer::find('id','api_key = "' . $api_key) . '"';

        var_dump(empty($dev));
        
        $user = new stdClass();
        $user->name = "John";
        $user->age = 30;
        $user->city = "New York";

        $json = json_encode($user);

        echo $json;

    }

    public function logout(){
        SESSION::destroy();
    }

}