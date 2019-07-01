            <?php 

// Reset your password form, sends reset.php password link
// Check if form submitted with method = "post"
                
                $email = $mysqli->escape_string($_POST['email']);
                $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

                if ( $result->num_rows == 0 ) // User doesn't exist
                {
                    $_SESSION['message'] = "User with that email doesn't exist!";
                    header("Location: error.php");
                    
                } else{ // User exists (num_rows != 0)

                    // $user = $result->fetch_assoc(); // $user becomes array with user data

                    // $email = $user['email'];
                    // $hash = $user['hash'];
                    // $username = $user['username'];

                    // // Session message to display on success.php
                    // $_SESSION['message'] = "<p>Please check your email <span class'text-primary'>$email</span>"
                    // . " for a confirmation link to complete your password reset!</p>";

                    // // Send registration confirmation link (reset.php)
                    // $to         = $email;
                    // $subject    = 'Password Reset Link (myycrib.com.ng)';
                    // $message_body = '
                    // Hello '.$username.',
                    
                    // You have requested password reset!
                    
                    // Please click this link to reset your password:
                    
                    // http:myycrib.com.ng/includes/reset.php?email='.$email.'&hash='.$hash;

                    // mail($to, $subject, $message_body);

                    header("Location: success.php");

                }

            ?>