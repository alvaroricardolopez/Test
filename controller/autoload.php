<?php

    function get_info(){
            $api = curl_init();
            curl_setopt($api, CURLOPT_URL, 'https://openlibrary.org/books/OL1017798M.json');
            curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($api, CURLOPT_HEADER, false);
            $response=curl_exec($api);
            curl_close($api);
            //var_dump($response);
            //echo $response;
            $json = json_decode($response, TRUE);
            //echo $json['info_url'];
            //echo '<center><img src="' . $json['ISBN:0451526538']['thumbnail_url'] . '" width="200"></center>';
            //var_dump($json);
            return $json;
    }

    function get_data(){
        $api = curl_init();
            curl_setopt($api, CURLOPT_URL, 'https://openlibrary.org/api/books?bibkeys=ISBN:0451526538&callback=mycallback');
            curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($api, CURLOPT_HEADER, false);
            $response=curl_exec($api);
            curl_close($api);
            $json = json_decode($response, TRUE);
            return $json;
    }
    
    
?>
