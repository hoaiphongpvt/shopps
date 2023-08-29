<?php 

    class OrderModel extends DB {

        public function getOrdersByUserID($ID) {
            $query = "SELECT * FROM hoadon WHERE ID_NGUOIDUNG = '$ID'";
            $result = mysqli_query($this->conn, $query);
            $orders = [];
            if ($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $orders[] = $row;
                }
                mysqli_free_result($result);
            }

            return $orders;
        }

        public function getOrderDetails($IDHD) {
            $query = "SELECT * FROM chitiethoadon INNER JOIN sanpham ON chitiethoadon.ID_SP = sanpham.ID WHERE ID_HOADON=".$IDHD;
            $result = mysqli_query($this->conn, $query);
            $orderDetails = [];
            if ($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $orderDetails[] = $row;
                }
                mysqli_free_result($result);
            }

            return $orderDetails;
        }
    }

?>