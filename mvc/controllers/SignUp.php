<?php 

    class SignUp extends Controller{

        public $UserModel;

        function __construct() {
            $this->UserModel = $this->model("UserModel");
        }

        public function index() {
            $this->view("signup", [
                "Page"=>"signup"
            ]);
        }

        public function checkUserName() {
            $username = $_POST['username'];
            $result = $this->UserModel->getUserByUsername($username);
            echo $result;
        }

        public function Register() {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phoneNumber = $_POST['phoneNumber'];
            $address = $_POST['address'];
            $dayOfBirth = $_POST['dayOfBirth'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            return $this->UserModel->addUser($fullname, $email, $phoneNumber, $address, $dayOfBirth, $username, $password);
        }
    }
?>