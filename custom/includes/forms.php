<?php
    if($_POST['form'] === 'orderform1'){
        submitOrder1();
    }
?>



<?php

    function submitOrder1(){
        $sock = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
        socket_connect($sock,'127.0.0.1',3490);
        $id = uniqid();
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $addr = $_POST['address'];
        $time = date('d/m/y:H:i:s');
        
        
        $data = "POST [$time] $id \"$fname, $lname, $email, $number, $addr\"\n";
        
        socket_send($sock,$data,strlen($data),0);
        $nul = '';
        socket_recv($sock,$nul,1024,0);
        echo "Received ". $nul . "\n" ;
        socket_close($sock);

        $postfile = $_SERVER['DOCUMENT_ROOT'] . '/custom/logs/postdata.log';
        file_put_contents($postfile,$data,FILE_APPEND);
    }
?>