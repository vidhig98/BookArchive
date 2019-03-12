<?php
session_start();

    function logout(){
        session_unset(); 
        // destroy the session 
        session_destroy(); 
        header('Location: ./login.php');
        exit();
    }

if(isset($_SESSION['ukey'])){
    $servername = "hidden.net";
    $username = "hidden";
    $password = "hidden";
    $dbname = "hidden";
    $con = new mysqli($servername, base64_decode($username), base64_decode($password), $dbname);
    if ($con->connect_errno) {

        echo "Failed to connect to MySQL: " . $con->connect_error;

    }
    if(isset($_POST['usr_name'])||isset($_POST['usr_phone'])||isset($_POST['pass'])){
        $pass =$hashpass= hash('sha256',$_POST['pass']);
        $cnfpass =$hashpass= hash('sha256',$_POST['cnfpass']);
        if ($pass == $cnfpass){
        $update_usr ="UPDATE usr SET usr_name='".$_POST['usr_name']."', phone='".$_POST['usr_phone']."', pass = '".$pass."' WHERE usr_id ='".$_POST['userid']."' || email ='".$_POST['usr_email']."'";
        $token = $con->query($update_usr);

    }else{
            echo "passwords do not match";
        }
    }
    $db_usr = "select usr_name, email, phone, usr_id, ukey   from usr where ukey = '".$_SESSION['ukey']."'";
    $token = $con->query($db_usr);

    if ($token->num_rows > 0) {
        // output data of each row
        while($row = $token->fetch_assoc()) {
           $name = $row['usr_name'];
           $email = $row['email'];
           $phone = $row['phone'];
           $uid = $row['usr_id'];
           $pass = $row['ukey'];
        }

    }
    if (isset($_GET['logout'])) {
        logout();
        }
    
} else{
        echo "Invalid Session";
        logout();
        exit();

        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#1c262f">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1c262f">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1c262f">
    <link link href="./style.css" rel="stylesheet" >
    <link link href="./login.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>MyProfile | BookArchive</title>
</head>
<body id="html">
    <div class="header" >
            <nav id="navbar">
                    <div class="title-bar">
                        <h1>My Profile | BookArchive</h1>
                    </div>         
            </nav>
        </div><!--
        --><section class="main">
        <div class="sidebar_new" id="sidebar">

            <ul>   
                <li><a href="./">Home</a></li>                     
            </ul>
        </div>
        <article id="body">
         
                <div class="profile">
                <a href='profile.php?logout=true'> <input width="100px" type="button" value="Log out" name="logout"/></a>
                       <form action="" method="post">
                            <input type="text" name="usr_name"  placeholder="Name" value="<?php echo $name ?>"/>
                            <input type="email" name="usr_email"   placeholder="Email"  value="<?php echo $email ?>" />
                            <input type="number" name="usr_phone" pattern="\d*" minlength="8" maxlength="15"  placeholder="Mobile" value="<?php echo $phone ?>" />
                            <input type="text" name="userid" minlength="4"  require placeholder="Username or Email" value="<?php echo $uid ?>" />
                            <input type="password" name="pass"  minlength="5" require placeholder="Password" value="<?php echo $pass ?>" />
                            <input type="password" name="cnfpass"  require placeholder="Confirm Password" value="<?php echo $pass ?>" />
                            <input type="submit" value="Update">
                       </form>
                </div>

                
            
    
      
        </article>
        <footer style="text-align:center">
                <p>Copyright &copy; BookArchive </p>
         </footer>
    </section>
    
    
</body>

</html>
