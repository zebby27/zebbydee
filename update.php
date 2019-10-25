<?php include_once('config.php');
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $bday = $_POST['birthdate'];
    $dept = $_POST['department'];
    $rank = $_POST['rank'];
   
    if(empty($firstname) || empty($lastname) || empty($gender) || empty($bday) || empty($dept) || empty($rank)){
        if(empty($firstname)){
            echo "Jah First Name choy?" . "<br/>";
        }
        if(empty($lastname)){
            echo "Apilyedo please?" . "<br/>";
        }
        if(empty($gender)){
            echo "LGBTQ?" . "<br/>";
        }
        if(empty($bday)){
            echo "Merry Christmas lang?" . "<br/>";
        }
        if(empty($dept)){
            echo "Freelance?" . "<br/>";
        }
        if(empty($rank)){
            echo "DATU?" . "<br/>";
        }
        echo "<a href = \"index.php\">Balika</a> ";
    }
    else{
    $sql = "UPDATE copythat.tblemployee ";
    $sql .= "set Efname = :fname, Elname = :lname, Egender = :gender, Ebirthdate = :bday, Edept = :dept, rank = :rank ";
    $sql .= "where ID = :id";
    $query = $conn -> prepare($sql);
    $query -> bindparam(':id' , $id);
    $query -> bindparam(':fname' , $firstname);
    $query -> bindparam(':lname' , $lastname);
    $query -> bindparam(':gender' , $gender);
    $query -> bindparam(':bday' , $bday);
    $query -> bindparam(':dept' , $dept);
    $query -> bindparam(':rank' , $rank);
    $query -> execute();
    echo "Char, Updated na ang iyaha HAHAHA!" . "<br/>";
    echo "<a href = \"index.php\">Back</a> ";
}
}
else{
    echo "AYAW PATAKA BRAD!";
}
?>

</body>
</html>