<?php
require base()."\\app\\models\\User.php";

// class Home extends Controller{
class Admin extends Controller{

    public function index(){
        // echo 'Controller Home';
        
        $mhs = User::getAll();
        
        if (!empty($mhs)) {
            foreach ($mhs as $u) {
                // var_dump($u);
                // print_r($u);
                echo "Name: " . $u['nama'] . ", Email: " . $u['email'] . ", Phone: " . $u['no_telp'] . "\n";
            }
        } else {
            echo "No users found in the database.";
        }
        
        $data = [];
        $data['satu'] = 'Nomor 1';

        // view('admin/dashboard',$data);
    }

    public function show($satu = '78'){
        echo 'Show Home : '.$satu;
    }

}