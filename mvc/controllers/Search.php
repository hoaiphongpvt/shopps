<?php 
    class Search extends Controller {

        public $ProductModel;

        function __construct() {
            $this->ProductModel = $this->model("ProductModel");
        }

        function index() {
            $keyword = $_POST['keyword'];
            $ResultSearch = $this->ProductModel->searchProducts($keyword); 
            $current_page = 0;
            if (isset($_GET['page'])) {
                $current_page = $_GET['page'];
            }
            $item_per_page = 4;
            $this->view("search", [
                "Page"=>"search",
                "ResultSearch"=>$ResultSearch,
                "CurrentPage"=>$current_page,
                "TotalPage"=> ceil(count($ResultSearch) / $item_per_page)
            ]);
        } 
    }
?>