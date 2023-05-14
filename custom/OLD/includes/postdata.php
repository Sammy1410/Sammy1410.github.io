<html>

<link href="css/txtstyle.css" rel="stylesheet" type="text/css" />

<title>Post Data Here</title>
<body>
    <h1> Orders </h1>
<?php
    $file = fopen("post/postdata.log", "r");
    while(!feof($file)){
        $content = fgets($file);
        echo $content . "<br>";
    }
   
    fclose($file);
    
?>

</body>

</html>

