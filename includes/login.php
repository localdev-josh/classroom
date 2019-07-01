<?php
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message']= "User with that email doesn't exist!";
    header("Location: usererror.php");

} else{ //User exists
    $user = $result->fetch_assoc();
    if ( password_verify($_POST['password'], $user['password'])){
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_role'] = $user['user_role'];
        
        
        if(isset($_SESSION['email'])){
                                       
           $the_user_email = $_SESSION['email'];
           $user_query = "SELECT * FROM users WHERE email = '{$the_user_email}'";
            $select_all_user_query = mysqli_query($mysqli, $user_query);
            while($row = mysqli_fetch_assoc($select_all_user_query)) {
                    

            $username = $row['username'];

            $email = $row['email'];
            
            $user_role = $row['user_role'];
                        
                if($user_role == 'admin'){
                
               header("Location: admin.php");
                
                }elseif($user_role == 'staff'){
                    header("Location: s_dashboard.php");
                }
                
            }
           
       }
        
        
    } else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("Location: passerror.php");
    }
}
?>