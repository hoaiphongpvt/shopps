<?php 

    class  UserModel extends DB {

        public function getUserByUsername($username) {
            $query = "SELECT * FROM nguoidung WHERE TENDANGNHAP = '$username'";
            $result = mysqli_query($this->conn, $query);
            $numRows = $result->num_rows;
            return $numRows;
        }

        public function checkLogin($username, $password) {
            $query = "SELECT * FROM nguoidung WHERE TENDANGNHAP = '$username' and MATKHAU = '$password'";
            $result = mysqli_query($this->conn, $query);
            $numRows = $result->num_rows;
            return $numRows;
        }
    }

?>