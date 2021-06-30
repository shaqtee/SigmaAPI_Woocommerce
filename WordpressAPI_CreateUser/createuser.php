//NEW USER WORDPRESS
        $curl = curl_init();
        $un = 'dedi';
        $em = 'dedi@gmail.com';
        $pa = '123qweasd';
        $administrator = 'abdulbadi';
        $administrapas = '123qweasd';
        $headenc = base64_encode($administrator . ':' . $administrapas);
        //$headauth = base64_decode('YWJkdWxiYWRpOjEyM3F3ZWFzZA==');
        $headauth = 'Authorization: Basic ' . $headenc;
        //dd($headauth);
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost/sigmago/wp-json/wp/v2/users?username=' . $un . '&email=' . $em . '&password=' . $pa,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array($headauth),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
        //endNEW USER WORDPRESS