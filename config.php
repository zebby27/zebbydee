<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $host = 'localhost';
    $database = 'copythat';
    $username = 'root';
    $password = '';

    try{
    // $dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
    $conn = new PDO("mysql:host = ($host); dbname = ($database) ", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
}
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    ?>
</body>
</html>