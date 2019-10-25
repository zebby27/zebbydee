<?php include_once('config.php');
if(isset($_POST['add'])){
    $id = $_POST['id'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];
    $nickname = $_POST['nickname'];

    if(empty($uname) || empty($pass) || empty($role) || empty($nickname)){
        if(empty($uname)){
            echo "Username po?" . "<br/>";
        }
        if(empty($pass)){
            echo "Unsay password bah?" . "<br/>";
        }
        if(empty($role)){
            echo "wala kay role sa iyaha?" . "<br/>";
        }
        if(empty($nickname)){
                echo "angga gane?" . "<br/>";
        }
        echo "<a href = \"newuser.php\">Turnback</a> ";
    }
    else{
    $sql = "INSERT into copythat.tblusers ";
    $sql .= "( username, password, role, nickname ) " ;
    $sql .= "values (:username, :password, :role, :nickname ) " ;
    $query = $conn -> prepare($sql);
    $query -> bindparam(':username' , $uname);
    $query -> bindparam(':password' , $pass);
    $query -> bindparam(':role' , $role);
    $query -> bindparam(':nickname' , $nickname);
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