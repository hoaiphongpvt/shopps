<?php 
    class Home extends Controller {

        public $ProductModel;

        function __construct() {
            $this->ProductModel = $this->model("ProductModel");
        }

        function index() {
            $current_page = 0;
            if (isset($_GET['page'])) {
                $current_page = $_GET['page'];
            }
            $item_per_page = 12;
            $list =  $this->ProductModel->getListProductsPagition($item_per_page, $current_page); 
            $total = $this->ProductModel->getListProducts();
            $this->view('home', [
                "Page"=>"main",
                "List"=>$list,
                "CurrentPage"=>$current_page,
                "TotalPage"=> ceil(count($total) / $item_per_page)
            ]);
        }
    }
?>