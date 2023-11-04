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

        public function urlUsuarios(){
            return "".$this->baseUrl."".$this->version."/users";
        }

        public function urlSocorristas(){
            return "".$this->baseUrl."".$this->version."/users/2";
        }

        public function urlTipoIncidente(){
            return "".$this->baseUrl."".$this->version."/tipoIncidente";
        }
    }
?>