<?php 
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
require ("config.php");
$result = $conn -> query("SELECT * FROM copythat.tblemployee");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1> Welcome Dude! </h1>
<h3> Oh my Goodness, it's you <?php echo $_SESSION['nickname'] ?> </h3>
 <table border>
 <tr>
    <th>ID</td>
    <th>First Name</td>
    <th>Last Name</td>
    <th>Gender</td>
    <th>Birthdate</td>
    <th>Department</td>
    <th>Rank</td>
    <th>Execute</td>
</tr>
<?php

echo "<a href = \"newuser.php\"> Mugamitay </a>";
echo " | ";
echo "<a href = \"add.php\"> Gipanggamit </a>";
echo " | ";
echo "<a href = \"logout.php\"onClick=\"return confirm('logout nagyud ka ha?')\"> GG na </a>";

while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['Efname']."</td>";
    echo "<td>".$row['Elname']."</td>";
    echo "<td>".$row['Egender']."</td>";	
    echo "<td>".$row['Ebirthdate']."</td>";	
    echo "<td>".$row['Edept']."</td>";	
    echo "<td>".$row['rank']."</td>";	
    echo "<td> <a href=\"edit.php?id=$row[ID]\">Edit</a> | <a href=\"delete.php?id=$row[ID]\" onClick=\"return confirm('Magsure ta ha na deletion ni?')\">Delete</a></td>";		
    echo "</tr>";		
}

?>    
</body>
</html>