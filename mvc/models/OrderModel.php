<?php 

    class OrderModel extends DB {

        public function getOrdersByUserID($ID) {
            $query = "SELECT * FROM hoadon WHERE ID_NGUOIDUNG = '$ID'";
            $result = mysqli_query($this->conn, $query);
            $oders = [];
            if ($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $oders[] = $row;
                }
                mysqli_free_result($result);
            }

            return $oders;
        }
    }

?>