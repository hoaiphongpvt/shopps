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

        public function getListProductsByCompany($ID) {
            $query = "SELECT * FROM sanpham WHERE ID_NSX= ".$ID;
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

        public function getListProductsByPrice($priceRange) {
            $query = "";
            switch($priceRange) {
                case "<4":
                    $query = "SELECT * FROM sanpham WHERE GIAGOC < 4000000 OR (GIAGIAM < 4000000 AND GIAGIAM > 0)";
                    break;

                case "4-8":
                    $query = "SELECT * FROM sanpham WHERE (GIAGOC > 4000000 AND GIAGOC < 8000000) OR (GIAGIAM > 4000000 AND GIAGIAM < 8000000);";
                    break; 
                
                case "8-20":
                    $query = "SELECT * FROM sanpham WHERE (GIAGOC > 8000000 AND GIAGOC < 20000000) OR (GIAGIAM > 8000000 AND GIAGIAM < 20000000);";
                    break;

                case ">20":
                    $query = "SELECT * FROM sanpham WHERE GIAGOC > 20000000 OR GIAGIAM > 20000000;";
                    break;
            }

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

        public function getListProductsByRAM($ram) {
            $query = "";
            switch($ram) {
                case "3":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '3GB%';";
                    break;

                case "4":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '4GB%';";
                    break;

                case "6":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '6GB%';";
                    break;

                case "8":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '8GB%';";
                    break;
                
                case "12":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '12GB%';";
                    break;
            }

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
        
        public function getListProductsByStorage($storage) {
            $query = "";
            switch($storage) {
                case "64":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '%64GB';";
                    break;

                case "128":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '%128GB';";
                    break;

                case "256":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '%256GB';";
                    break;
                
                case "512":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '%512GB';";
                    break;

                case "1TB":
                    $query = "SELECT * FROM chitietsanpham JOIN sanpham ON chitietsanpham.ID_SP = sanpham.ID WHERE TS_BONHO LIKE '%1TB';";
                    break;
            }

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