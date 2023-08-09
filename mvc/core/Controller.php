<?php

    class Controller {

        static function model($model) {
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }

        function view($view, $data=[]) {
            require_once "./mvc/views/".$view.".php";
        }
    }
?>