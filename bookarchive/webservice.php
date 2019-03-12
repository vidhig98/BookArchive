<?php

if(isset($_GET['user'])){
	$usr_id = $_GET['user']; 
    $servername = "hidden";
    $username = "hidden";
    $password = "hidden";
    $dbname = "hidden";
    $con = new mysqli($servername, base64_decode($username), base64_decode($password), $dbname);
    if ($con->connect_errno) {
    
        echo "Failed to connect to MySQL: " . $con->connect_error;
    
    }    
    $db_usr = "select email from usr where usr_id = '".$usr_id."'";

    $token = $con->query($db_usr);
    
    if ($token->num_rows > 0) {
        // output data of each row
        while($row = $token->fetch_assoc()) {
            $users = $row['email'];
        }
    }
    
if($users!=null){
/* output in necessary format */
header('Content-type: text/xml');
echo '<users>';
echo '<uid>';echo $usr_id ;echo '</uid>';
echo '<email>';echo $users;echo '</email>';
echo '</users>';

}else{
    header('Content-type: text/xml');
        echo '<users>';
        echo "No users Found";
		echo '</users>';

}
	

	/* disconnect from the db */
	//mysqli_close($link);
}else{
    header('Content-type: text/xml');
        echo '<error>';
        echo "user parameter not set";
		echo '</error>';

}

?>
