<?php 
    class AboutUs extends Controller {

        public function index() {
            $this->view("aboutus", [
                "Page"=>"aboutus"
            ]);
        }
    }
?>