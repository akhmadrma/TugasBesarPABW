<?php

require ('location : /TugasBesar/conf/connection.php');

if (isset ($_POST['submit'])){

    if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['handphone'] )){
        $name = $_POST['name'];
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $handphone = $_POST ['handphone'];
    
        $query = 'INSERT INTO user_data (name, username, password, handphone) values("'.$name.'" , "'.$username.'" , "'.$password.'" , "'.$handphone.'" )';
    
        $run = mysqli_query($koneksi,$query) or die(mysqli_error($query));

        if ($run){
            header("location: /TugasBesar/AboutPage/index.php");
        }else{
            echo "database tidak keisi";
        }
    }else{
        echo "masih kosong sob";
    }
    

}

?>