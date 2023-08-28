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
    }
?>