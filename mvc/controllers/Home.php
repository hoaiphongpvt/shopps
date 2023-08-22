<?php 
    class Home extends Controller {

        public $ProductModel;

        function __construct() {
            $this->ProductModel = $this->model("ProductModel");
        }

        function index() {
            $list = $this->ProductModel->getListProducts();
            $this->view("home", [
                "Page"=>"main",
                "List"=>$list
            ]);
        }  
    }
?>