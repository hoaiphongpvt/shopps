<?php 
    class  UserModel extends DB {

        public function getUserByUsername($username) {
            $query = "SELECT * FROM nguoidung WHERE TENDANGNHAP = '$username'";
            $result = mysqli_query($this->conn, $query);
            $numRows = $result->num_rows;
            return $numRows;
        }

        public function checkLogin($username, $password) {
            $query = "SELECT * FROM nguoidung WHERE TENDANGNHAP = '$username' and MATKHAU = '$password' AND TRANGTHAI=1";
            $result = mysqli_query($this->conn, $query);
            $numRows = $result->num_rows;
            return $numRows;
        }

        public function Login($username, $password) {
            $query = "SELECT * FROM nguoidung WHERE TENDANGNHAP = '$username' and MATKHAU = '$password' AND TRANGTHAI=1";
            $result = mysqli_query($this->conn, $query);
            $data = mysqli_fetch_assoc($result);
            return $data;
        }

        public function addUser($fullname, $email, $phoneNumber, $address, $dayOfBirth, $username, $password) {
            $status = 1;
            $img = './public/assets/img/users/avatar-default.png';
            $query = "INSERT INTO nguoidung(HOTEN, EMAIL, DIENTHOAI, DIACHI, NGAYSINH, HINHANH, TENDANGNHAP, MATKHAU, TRANGTHAI)
                        VALUES ('$fullname', '$email', '$phoneNumber', '$address', '$dayOfBirth', '$img', '$username', '$password', '$status')";

            $result = mysqli_query($this->conn, $query);
            return $result;
        }
    }

?>