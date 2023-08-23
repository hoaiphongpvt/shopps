<?php   

    class ProductModel extends DB {

        public function getListProducts() {
            $query = "SELECT * FROM sanpham";
            $result = mysqli_query($this->conn, $query);
            $products = [];
            if ($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $products[] = $row;
                }
                mysqli_free_result($result);
            }

            return $products;
        }

        public function getListProductsPagition($num_items, $num_current_page) {
            $offset = $num_current_page * $num_items;  // Tính offset dựa trên trang hiện tại và số lượng bản ghi trên mỗi trang
            $query = "SELECT * FROM sanpham ORDER BY ID ASC LIMIT $offset, $num_items";
            $result = mysqli_query($this->conn, $query);
            $products = [];
            
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $products[] = $row;
                }
                mysqli_free_result($result);
            }

            return $products;
        }

        public function getProductByID($ID) {
            $query = "SELECT * FROM sanpham WHERE ID='$ID'";
            $result = mysqli_query($this->conn, $query);

            $product = [];
            if ($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $product[] = $row;
                }
                mysqli_free_result($result);
            }
            return $product;
        }

        public function getProductDetailsByID($ID) {
            $query = "SELECT * FROM chitietsanpham WHERE ID_SP='$ID'";
            $result = mysqli_query($this->conn, $query);

            $product = [];
            if ($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $product[] = $row;
                }
                mysqli_free_result($result);
            }
            return $product;
        }

        public function getListRelated($ID_NSX, $ID) {
            $query = "SELECT * FROM sanpham WHERE ID_NSX='$ID_NSX' AND ID <> '$ID' LIMIT 4";
            $result = mysqli_query($this->conn, $query);

            $list = [];
            if ($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $list[] = $row;
                }
                mysqli_free_result($result);
            }
            return $list;
        }

        public function searchProducts($keyword) {
            $query = "SELECT * FROM sanpham WHERE TEN LIKE '%$keyword%'";
            $result = mysqli_query($this->conn, $query);

            $list = [];
            if ($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $list[] = $row;
                }
                mysqli_free_result($result);
            }
            return $list;
        }
    }
?>