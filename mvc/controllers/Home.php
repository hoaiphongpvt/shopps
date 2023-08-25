<?php 
    class Home extends Controller {

        public $ProductModel;
        public $item_per_page = 12;
        public $list;
        public $totalPages;

        function __construct() {
            $this->ProductModel = $this->model("ProductModel");
        }

        function index() {
            // Phân trang
            $current_page = 0;
            if (isset($_GET['page'])) {
                $current_page = $_GET['page'];
            }
            $this->list =  $this->ProductModel->getListProductsPagition($this->item_per_page, $current_page); 
            $this->totalPages = ceil(count($this->ProductModel->getListProducts()) / $this->item_per_page);
            // Phân loại theo hãng
            if (isset($_GET['companyID'])) {
                $companyID = $_GET['companyID'];
                $this->showListProductByCompany($companyID);
            }
            $this->view('home', [
                "Page"=>"main",
                "List"=>$this->list,
                "CurrentPage"=>$current_page,
                "TotalPage"=> $this->totalPages
            ]);
        }

        public function showListProductByCompany($companyID) {
            $this->list = $this->ProductModel->getListProductsByCompany($companyID);
            $this->totalPages = ceil(count($this->ProductModel->getListProductsByCompany($companyID)) / $this->item_per_page);
        }
    }
?>