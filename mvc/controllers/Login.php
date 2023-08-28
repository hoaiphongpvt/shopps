<?php 

    class Login extends Controller{

        public $UserModel;

        function __construct() {
            $this->UserModel = $this->model("UserModel");
        }

        public function index() {
            $this->view("login", [
                "Page"=>"login"
            ]);
        }
        
        public function checkUserName() {
            $username = $_POST['username'];
            $result = $this->UserModel->getUserByUsername($username);
            echo $result;
        }

        public function checkLogin() {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = $this->UserModel->checkLogin($username, $password);
            echo $result;
        }
    }
?>