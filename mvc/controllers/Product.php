<?php 

    class Product extends Controller {

        public $ProductModel;

        function __construct() {
            $this->ProductModel = $this->model("ProductModel");
        }

        function index() {
            $ID = $_POST['ID'];
            $ID_NSX = $_POST['ID_NSX'];
            $product = $this->ProductModel->getProductByID($ID);
            $listRelated = $this->ProductModel->getListRelated($ID_NSX, $ID);
            $productDetails = $this->ProductModel->getProductDetailsByID($ID);
            $this->view("product", [
                "Page"=>"details",
                "Product"=>$product,
                "ProductDetails"=>$productDetails,
                "ListRelated"=>$listRelated
            ]);
        } 
    }
?>