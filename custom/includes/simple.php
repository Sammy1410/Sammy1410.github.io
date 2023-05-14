<?php
    $data ='sadfjjioajsidjfijsadiofjoiajsdifjdjdsfasdfdsgafgafdgasfdgasdfgvadsfgvadsfgadfgadfgdafgfdgsdfghsfdfdgjidafshviudfhgvuidafusfvjhdfvujhhbdvbdfuhvbhijdsafnvjhdfvbdhsdhgjbkdfvbujfujhbsdfuvfvnjdfkshnkdjsnbjdfksnbkjdfbnkjfdbnk sfbhoidfgokdfshnfghsfiojafijsdoijfiojadsfijasiodfjiojiosdajfiojsoiadfjijifjajsdifjifiaadsfhdsfjdaiosfjd';
    
    $sock = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
    socket_connect($sock,'127.0.0.1',3490);

    socket_send($sock,$data,strlen($data),0);
    socket_close($sock);
?>