<title>Industry 4.0</title>

<body>
    <h1>Orders List</h1>

    <script src="/js/function.js"></script>

<?php
//phpinfo()
//clean();
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
        case 'clean':
            clean();
            break;
        // Add more cases for other actions here
        }
    }
    $filepath = $_SERVER['DOCUMENT_ROOT'] . '/logs/postdata.log';
    
    $file = fopen($filepath, "r");
    while(!feof($file)){
        $content = fgets($file);
        echo $content . "<br>";
    }
    fclose($file);


    function clean() {
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/logs/msg.log', '');
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/logs/postdata.log', '');
        return true;
    }
?>
<p>
    <button type="submit" onclick="cleanLogs()">Clear Orders</button>
</p>
</body>
