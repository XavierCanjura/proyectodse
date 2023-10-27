<?php
    class URLs{
        private $baseUrl = "http://18.206.154.80/api";
        private $version = "/v1";

        public function urlLogin(){
            return "".$this->baseUrl."/login";
        }

        public function urlHospitales(){
            return "".$this->baseUrl."".$this->version."/hospitales";
        }

        public function urlCategoryEmergencias(){
            return "".$this->baseUrl."".$this->version."/catEmergencias";
        }
    }
?>