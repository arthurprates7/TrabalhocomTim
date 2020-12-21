<?php

    class Sum 
    {

        public function __construct(){

            $this->showView();

        }

        public function showView(){

            require_once $_SERVER['DOCUMENT_ROOT'] . '/views/pages/sum/index.php';

        }

    }