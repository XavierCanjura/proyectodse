<?php
    class API{       
        public function get($url, $token){
            $options = [
                'http' => [
                    'method' => 'GET',
                    'header' => array("Accept: application/json", "Content-Type: application/json", "Authorization: Bearer $token"),
                ],
            ];

            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            if(!$result){
                echo "Error\n";
            }

            $json = json_decode($result);

            return $json;

        }

        public function post($url, $token, $dataForm){
            
            $ch = curl_init($url);

            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_HTTPHEADER => array(
                    "Accept: application/json", 
                    "Content-Type: application/json",
                    "Authorization: Bearer $token",
                ),
                CURLOPT_POSTFIELDS => json_encode($dataForm),
            ));

            $response = curl_exec($ch);
            curl_close($ch);

            if(!$response) {
                return false;
            }else{
                return json_decode($response);
            }
        }

        public function put($url, $token, $dataForm){
            
            $ch = curl_init($url);

            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'PUT',
                CURLOPT_HTTPHEADER => array(
                    "Accept: application/json", 
                    "Content-Type: application/json",
                    "Authorization: Bearer $token",
                ),
                CURLOPT_POSTFIELDS => json_encode($dataForm),
            ));

            $response = curl_exec($ch);
            curl_close($ch);

            if(!$response) {
                return false;
            }else{
                return json_decode($response);
            }
        }

        public function delete($url, $token){
            
            $ch = curl_init($url);

            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'DELETE',
                CURLOPT_HTTPHEADER => array(
                    "Accept: application/json", 
                    "Content-Type: application/json",
                    "Authorization: Bearer $token",
                ),
                // CURLOPT_POSTFIELDS => json_encode($dataForm),
            ));

            $response = curl_exec($ch);
            curl_close($ch);

            if(!$response) {
                return false;
            }else{
                return json_decode($response);
            }
        }
    }
    
?>