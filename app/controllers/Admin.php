<?php
require base()."\\app\\models\\User.php";

// class Home extends Controller{
class Admin extends Controller{

    public function __construct(){
        SESSION::start();
        if(!SESSION::has('id') || !(SESSION::get('role') == "admin")){
            redirect('login');
        }
    }

    public function index(){
        // echo 'Controller Home';
        
        $data = User::getAll();
        
        // if (!empty($mhs)) {
        //     foreach ($mhs as $u) {
        //         // var_dump($u);
        //         // print_r($u);
        //         echo "Name: " . $u['nama'] . ", Email: " . $u['email'] . ", Phone: " . $u['no_telp'] . "\n";
        //     }
        // } else {
        //     echo "No users found in the database.";
        // }
        
        $data = [];
        $data['satu'] = 'Nomor 1';

        view('admin/dashboard',$data);
    }

    public function show($satu = '78'){
        echo 'Show Home : '.$satu;
    }

    public function kelola($role = 'mahasiswa',$id=null){
        if ($id != null) {
            User::destroy($id);
        }
        if (isset($_POST['method'])) {
            switch ($_POST['method']) {
                case 'post':
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $telp = $_POST['telp'];

                    User::insert('role,nama,email,no_telp','"'. $role .'","'. $nama .'","'. $email .'","'. $telp .'"');
                    break;
                case 'put':
                    $id = $_POST['id'];
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];

                    User::update('nama="'.$nama.'" , email="'.$email.'"','id ="'.$id.'"');
                    break;
                
                default:
                    # code...
                    break;
            }
        }
        $data = User::getAll("role = '".$role."'");
        view('admin/manage',[$data,$role]);
    }

}