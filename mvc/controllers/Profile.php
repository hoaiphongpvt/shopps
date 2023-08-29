<?php 

    class Profile extends Controller { 
        public $OrderModel;

        function __construct() {
            $this->OrderModel = $this->model("OrderModel");
        }

        public function index() {
            $user = $_SESSION['user'];
            $ID = $user['ID'];
            $listOrders = $this->getListOrdersByUser($ID);
            if (isset($_POST['IDHD'])) {
                $IDHD = $_POST['IDHD'];
                $orderDetails = $this->getListOrderDetails($IDHD);
                $this->view("profile", [
                    "Page"=>"profile",
                    "List"=>$listOrders,
                    "OrderDetails"=>$orderDetails
                ]);
            } else {
                $this->view("profile", [
                    "Page"=>"profile",
                    "List"=>$listOrders
                ]);
            }
            
        }

        public function getListOrdersByUser($ID) {
            return $this->OrderModel->getOrdersByUserID($ID);
        }

        public function getListOrderDetails($IDHD) {
            return $this->OrderModel->getOrderDetails($IDHD);
        }
    }
?>