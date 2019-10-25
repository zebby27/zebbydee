<?php include_once("config.php");
echo "Unsay Details nmu Brad? ";

$sql = "Select * From copythat.tblusers where id = :id";
$query = $conn->prepare($sql);
while ($row = $query->fetch(PDO::FETCH_ASSOC)){
    $uname = $row['username'];
    $pass = $row['password'];
    $role = $row['role'];
    $nickname = $row['nickname'];
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action = "addnewuser.php" method = "POST">
        <label for = "">Username</label><br>
        <input type = "text" name = "username"><br>
        <label for = "">Password</label><br>
        <input type = "text" name = "password"><br>
        <label for = "">Role</label><br>
        <input type = "text" name = "role" ><br>
        <label for = "">nickname</label><br>
        <input type = "text" name = "nickname" ><br>
        <input type = "hidden" name = "id">
        <input type = "submit" name = "add" value = "ADD">
    </form>  
</body>
</html>