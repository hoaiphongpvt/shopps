<?php 
    class AboutUs extends Controller {

        public function index() {
            $this->view("home", [
                "Page"=>"aboutus"
            ]);
        }
    }
?>