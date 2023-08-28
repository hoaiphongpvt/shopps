<?php 

    class Profile extends Controller {
        
        public $UserModel;
        public $OrderModel;

        function __construct() {
            $this->OrderModel = $this->model("OrderModel");
        }

        public function index() {
            $user = $_SESSION['user'];
            $ID = $user['ID'];
            $listOrders = $this->getListOrdersByUser($ID);

            $this->view("profile", [
                "Page"=>"profile",
                "List"=>$listOrders
            ]);
        }

        public function getListOrdersByUser($ID) {
            return $this->OrderModel->getOrdersByUserID($ID);
        }
    }
?>