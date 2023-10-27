<?php
    class API{
        //TODO: hacer funcion para consumir api
        
        public function get($url, $token){
            $options = [
                'http' => [
                    'method' => 'GET',
                    'header' => array("Accept: application/json", "Content-Type: application/json", "Authorization: Bearer $token"),
                    //'body' => http_build_query($body),
                ],
            ];

            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            if(!$result){
                echo "Error\n";
            }

            $json = json_decode($result);

            return $json->data;
            //var_dump($json->data);

        }


    }
?>