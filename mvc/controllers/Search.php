<?php 
    class Search extends Controller {

        public $ProductModel;

        function __construct() {
            $this->ProductModel = $this->model("ProductModel");
        }

        function index() {
            $keyword = $_POST['keyword'];
            $ResultSearch = $this->ProductModel->searchProducts($keyword); 
            $this->view("search", [
                "Page"=>"search",
                "ResultSearch"=>$ResultSearch
            ]);
        } 
    }
?>