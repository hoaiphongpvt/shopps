<?php

    class SinhVienModel extends DB{

        function getListSV() {
            $sql = "SELECT * FROM sinhvien";
            $result = mysqli_query($this->conn, $sql);
            $students = [];
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $students[] = $row; // Thêm thông tin sinh viên vào mảng
                }
                mysqli_free_result($result); // Giải phóng bộ nhớ của kết quả truy vấn
            }
            return $students;
        }

        function findByID($id) {
            $id = mysqli_real_escape_string($this->conn, $id);
            $sql = "SELECT * FROM sinhvien WHERE id = ".$id;
            $result = mysqli_query($this->conn, $sql);
            $student = [];
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $student[] = $row;
                }
                mysqli_free_result($result); 
            }
            return $student;
        }

        function addSV($hoten, $ngaysinh, $diachi, $sdt, $email) {
            $hoten = mysqli_real_escape_string($this->conn, $hoten);
            $ngaysinh = mysqli_real_escape_string($this->conn, $ngaysinh);
            $diachi = mysqli_real_escape_string($this->conn, $diachi);
            $sdt = mysqli_real_escape_string($this->conn, $sdt);
            $email = mysqli_real_escape_string($this->conn, $email);
            $sql = "INSERT INTO sinhvien(hoten, ngaysinh, diachi, sdt, email) VALUES ('".$hoten."', '".$ngaysinh."', '".$diachi."', '".$sdt."','".$email."')";
            $result = false;
            if(mysqli_query($this->conn, $sql)) {
                $result = true;
            }

            return json_encode($result);
        }

        function updateSV($id, $hoten, $ngaysinh, $diachi, $sdt, $email) {
            $id = mysqli_real_escape_string($this->conn, $id);
            $hoten = mysqli_real_escape_string($this->conn, $hoten);
            $ngaysinh = mysqli_real_escape_string($this->conn, $ngaysinh);
            $diachi = mysqli_real_escape_string($this->conn, $diachi);
            $sdt = mysqli_real_escape_string($this->conn, $sdt);
            $email = mysqli_real_escape_string($this->conn, $email);

            $sql = "UPDATE sinhvien SET hoten = '".$hoten."', ngaysinh = '".$ngaysinh."', diachi = '".$diachi."', sdt = '".$sdt."', email = '".$email."' WHERE id = ".$id;
                
            $result = false;
            if(mysqli_query($this->conn, $sql)) {
                $result = true;
            }

            return json_encode($result);
        }

        function deleteSV($id) {
            $id = mysqli_real_escape_string($this->conn, $id);

            $sql = "DELETE FROM sinhvien WHERE id = ". $id;
            $result = false;
            if(mysqli_query($this->conn, $sql) && mysqli_affected_rows($this->conn) > 0) {
                $result = true;
            }

            return json_encode($result);
        }
    }
?>