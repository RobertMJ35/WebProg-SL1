<?php
    session_start();

    if(isset($_POST['submit'])){
        if($_SESSION["username"] != "" && $_SESSION["password2"] != ""){
            if(($_POST['usernameLogin'] == $_SESSION["username"]) && ($_POST['passwordLogin'] == $_SESSION["password2"])){
                $_SESSION["error"] = "";
                header("Location: home.php");
            }
            else if($_POST['usernameLogin'] == "" && $_POST['passwordLogin'] == ""){
                $_SESSION["error"] = "Username / Password harus di isi";
                header("Location: login.php");
            }
            else if($_POST['usernameLogin'] != $_SESSION["username"]){
                $_SESSION["error"] = "Username salah";
                $_SESSION["usernameLogin"] = "";
                header("Location: login.php");
            }
            else if($_POST['passwordLogin'] != $_SESSION["password2"]){
                $_SESSION["error"] = "Password salah";
                $_SESSION["usernameLogin"] = $_POST['usernameLogin'];
                header("Location: login.php");
            }
        }
        else{
            $_SESSION["error"] = "Silahkan melakukan registrasi..";
            header("Location: welcome.php");
        }
    }
?>