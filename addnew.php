<?php include_once('config.php');
if(isset($_POST['add'])){
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $bday = $_POST['birthdate'];
    $dept = $_POST['department'];
    $rank = $_POST['rank'];

    if(empty($firstname) || empty($lastname) || empty($gender) || empty($bday) || empty($dept) || empty($rank)){
        if(empty($firstname)){
            echo "Wala kay First Name choy?" . "<br/>";
        }
        if(empty($lastname)){
            echo "Ataya! Wala kay apilyedo?" . "<br/>";
        }
        if(empty($gender)){
            echo "Toyobebang is you?" . "<br/>";
        }
        if(empty($bday)){
            echo "Anak sa liki lang ang peg?" . "<br/>";
        }
        if(empty($dept)){
            echo "Walay mudawat nmu sa?" . "<br/>";
        }
        if(empty($rank)){
            echo "walay ikasweldo gyud?" . "<br/>";
        }
        echo "<a href = \"add.php\">Balika</a> ";
    }
    else{
    $sql = "INSERT into copythat.tblemployee ";
    $sql .= "(Efname, Elname, Egender, Ebirthdate, Edept, rank ) " ;
    $sql .= "values (:fname, :lname, :gender, :bday, :dept, :rank ) " ;
    $query = $conn -> prepare($sql);
    $query -> bindparam(':fname' , $firstname);
    $query -> bindparam(':lname' , $lastname);
    $query -> bindparam(':gender' , $gender);
    $query -> bindparam(':bday' , $bday);
    $query -> bindparam(':dept' , $dept);
    $query -> bindparam(':rank' , $rank);
    $query -> execute();
    echo "WoW! Added nka Choy." . "<br/>";
    echo "<a href = \"index.php\">Added</a> ";
}
}
else{
    echo "NAA NASAD KA BRAD HA!";
}
?>

</body>
</html>