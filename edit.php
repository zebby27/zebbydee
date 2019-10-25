<?php include_once("config.php");
if(!isset($_GET['id'])){
    header("location: index.php");
}
$eid = $_GET['id'];
echo "Unsay Problema Brad Employee ID: " . $eid;

$sql = "Select * From copythat.tblemployee where id = :id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $eid));
while ($row = $query->fetch(PDO::FETCH_ASSOC)){
    $firstname = $row['Efname'];
    $lastname = $row['Elname'];
    $gender = $row['Egender'];
    $bday = $row['Ebirthdate'];
    $dept = $row['Edept'];
    $rank = $row['rank'];
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
    <form action = "update.php" method = "POST">
        <label for = "">First Name</label><br>
        <input type = "text" name = "firstname" value = "<?php echo $firstname ?>"><br>
        <label for = "">Last Name</label><br>
        <input type = "text" name = "lastname" value = "<?php echo $lastname ?>"><br>
        <label for = "">Gender</label><br>
        <input type = "text" name = "gender" value = "<?php echo $gender ?>"><br>
        <label for = "">Birthdate</label><br>
        <input type = "text" name = "birthdate" value = "<?php echo $bday ?>"><br>
        <label for = "">Department</label><br>
        <input type = "text" name = "department" value = "<?php echo $dept ?>"><br>
        <label for = "">Rank</label><br>
        <input type = "text" name = "rank" value = "<?php echo $rank ?>"><br>
        <input type = "hidden" name = "id" value = "<?php echo $eid?>">
        <input type = "submit" name = "update" value = "Execute">
    </form>  
</body>
</html>
