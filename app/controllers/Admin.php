<?php
require base()."\\app\\models\\User.php";
require base()."\\app\\models\\Developer.php";
require base()."\\app\\models\\Wifi.php";

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

        view('admin/dashboard',$data,'Dashboard');
    }

    public function show($satu = '78'){
        echo 'Show Home : '.$satu;
    }

    public function kelola($role = 'mahasiswa',$id=null){
        switch ($role) {
            case 'developer':
                $data = $this->developer($role,$id);
                break;

            case 'wifi':
                $data = $this->wifi($role,$id);
                break;
            
            default:
                $data = $this->user($role,$id);
                break;
        }
        view('admin/manage',[$data,$role],'Kelola');
    }

    private function user($role,$id){
        // Delete
        if ($id != null) {
            User::destroy($id);
        }
        if (isset($_POST['method'])) {
            switch ($_POST['method']) {
                //Create
                case 'post':
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $telp = $_POST['telp'];

                    User::insert('role,nama,email,no_telp','"'. $role .'","'. $nama .'","'. $email .'","'. $telp .'"');
                    break;
                //Update
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
        //Read
        return User::getAll("role = '".$role."'");
    }

    private function developer($role,$id){
        if ($id != null) {
            Developer::destroy($id);
        }
        if (isset($_POST['method'])) {
            $nama = $_POST['nama'];
            $telp = $_POST['telp'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $api_key = $this->generateApiKey();
            
            switch ($_POST['method']) {
                case 'post':
                    Developer::insert('email,password,nama,api_key',
                    '"'. $email .'","'. $password .'","'. $nama .'","'. $api_key .'"');
                    break;
                case 'put':
                    $id = $_POST['id'];

                    Developer::update('nama="'.$nama.'" , email="'.$email.'"','id ="'.$id.'"');
                    break;
                
                default:
                    # code...
                    break;
            }
        }
        return Developer::getAll();
    }

    private function wifi($role,$id){
        if ($id != null) {
            Wifi::destroy($id);
        }
        if (isset($_POST['method'])) {
            $BSSID = $_POST['BSSID'];
            $Signal_Strength = $_POST['Signal_Strength'];
            $Latitude = $_POST['Latitude'];
            $Longitude = $_POST['Longitude'];
            switch ($_POST['method']) {
                case 'post':
                    Wifi::insert('BSSID,Signal_Strength,Latitude,Longitude',
                    '"'. $BSSID .'","'. $Signal_Strength .'","'. $Latitude .'","'. $Longitude .'"');
                    break;
                case 'put':
                    Wifi::update('BSSID="'.$BSSID.'" , Signal_Strength="'.$Signal_Strength.'" , Latitude="'.$Latitude.'" , Longitude="'.$Longitude.'"','BSSID ="'.$BSSID.'"');
                    break;
                
                default:
                    # code...
                    break;
            }
        }
        return Wifi::getAll();
    }

    function generateApiKey($length = 32) {
        // Generate random bytes
        $randomBytes = random_bytes($length);
        
        // Convert to a secure hash
        $apiKey = bin2hex($randomBytes);
        
        return $apiKey;
    }

}