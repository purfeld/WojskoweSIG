<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $db_host="localhost";
        $db_port = "5432";
        $db_name = "test02";
        $db_user = "postgres";
        $db_pass = "misiaczeko";
        
        $conn_text = "host=$db_host port=$db_port dbname=$db_name user=$db_user password=$db_pass"
        
        pg_connect("$conn_text");
        
    echo "pies"
    ?>
        
</body>
</html>