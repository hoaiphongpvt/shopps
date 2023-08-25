<?php 
    class Search extends Controller {

        public $ProductModel;
        public $ResultSearch;

        function __construct() {
            $this->ProductModel = $this->model("ProductModel");
        }

        function index() {
            // Tìm kiếm theo từ khóa
            if (isset($_POST['keyword'])) {
                $keyword = $_POST['keyword'];
                $this->ResultSearch = $this->ProductModel->searchProducts($keyword); 
            }
            
            // Lọc theo giá
            if (isset($_POST['price'])) {
                if ($_POST['price'] !== '') {
                    $priceRange = $_POST['price'];
                    $this->ResultSearch = $this->ProductModel->getListProductsByPrice($priceRange); 
                }
            }

            // Lọc theo RAM
            if (isset($_POST['ram'])) {
                if ($_POST['ram'] !== '') {
                    $ram = $_POST['ram'];
                    $this->ResultSearch = $this->ProductModel->getListProductsByRAM($ram); 
                }  
            }   

            // Lọc theo dung lượng
            if (isset($_POST['storage'])) {
                if ($_POST['storage'] !== '') {
                    $storage = $_POST['storage'];
                    $this->ResultSearch = $this->ProductModel->getListProductsByStorage($storage); 
                }  
            } 

            $this->view("search", [
                "Page"=>"search",
                "ResultSearch"=>$this->ResultSearch,
                "Total"=>count($this->ResultSearch),
            ]);
        } 
    }
?>