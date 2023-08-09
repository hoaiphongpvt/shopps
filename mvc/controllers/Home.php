<?php 

    class Home extends Controller {

        public $SinhVienModel;

        function __construct() {
            $this->SinhVienModel = $this->model("SinhVienModel");
        }

        function getListSV() {
            
            $list = $this->SinhVienModel->getListSV();
            $this->view("home", [
                "Page"=>"main",
                "List"=>$list
            ]);
        }

        function addSinhVien() {
            $this->view("home", [
                "Page"=>"addSV",
            ]);
        }

        function XuLyThem() {
            if (isset($_POST['btnThem'])) {
                $hoten = $_POST['hoten'];
                $ngaysinh = $_POST['ngaysinh'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];

                $result = $this->SinhVienModel->addSV($hoten, $ngaysinh, $diachi, $sdt, $email);
                $this->view("home", [
                    "Page"=>"addSV",
                    "Result"=>$result
                ]);
            }
        }

        function updateSinhVien() {
            
            $this->view("home", [
                "Page"=>"updateSV",
            ]);
        }

        function findById() {
            if (isset($_POST['btnFind'])) {
                $id = $_POST['id'];

                $result = $this->SinhVienModel->findByID($id);
                
                $this->view("home",[
                "Page"=>"updateSV",
                "Student"=>$result
                ]);
            }
        }

        function XuLySua() {
            if (isset($_POST['btnUpdate'])) {
                $id = $_POST['id'];
                $hoten = $_POST['hoten'];
                $ngaysinh = $_POST['ngaysinh'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];

                $result = $this->SinhVienModel->updateSV($id, $hoten, $ngaysinh, $diachi, $sdt, $email);

                $this->view("home",[
                    "Page"=>"updateSV",
                    "Result"=>$result
                ]);

            }
        }

        function deleteSinhVien() {
            $this->view("home", [
                "Page"=>"deleteSV",
            ]);
        }

        function XuLyXoa() {
            if(isset($_POST['btnDelete'])) {
                $id = $_POST['id'];

                $result = $this->SinhVienModel->deleteSV($id);
                $this->view("home",[
                    "Page"=>"deleteSV",
                    "Result"=>$result
                ]);
            }
        }
    }
?>