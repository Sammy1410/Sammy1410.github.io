<html lang="en">
    
    <script src="/custom/js/function.js"></script>
    <link rel="stylesheet" href="/custom/css/all.css">

    <!--#include virtual="/custom/includes/header.php" -->

    <body>
    
        <p></p>
        <h2 style="display:block;text-decoration: underline;">All Orders</h2>
        <p></p>
        <h4 style="text-align:center; font-size: large;">
        <?php

            OrderList(); 
            
            function OrderList(){
                $socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
                socket_connect($socket,'127.0.0.1',3490);

                //$dataRecv = ' ';

                $request = 'GET_ALL sam';
                socket_send($socket,$request,strlen($request),0);
                socket_recv($socket,$dataRecv,1200,0);
                echo $dataRecv;
                socket_close($socket);
            }
            
        ?>
        <p></p>
        <p>--END OF LIST--</p>
        </h4>    

    </body>
    
    <!--#include virtual="/custom/includes/footer.php" -->    
</html>
