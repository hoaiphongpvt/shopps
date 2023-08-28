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

        public function login() {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = $this->UserModel->Login($username, $password);
            if ($result) {
                $_SESSION["user"] = $result;
                header('location: ../');
            }
        }

        public function logout() {
            unset($_SESSION['user']);
            header('location: ../');
        }

        public function checkLogin() {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = $this->UserModel->checkLogin($username, $password);
            echo $result;
        }
    }
?>