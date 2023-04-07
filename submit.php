<?php  

date_default_timezone_set("Asia/Calcutta");

$servername = "localhost";
$username = "univer18_techb_web_user";
$password = "Techbumbles@12345";
$database = "univer18_drcarrot_web";

$conn = mysqli_connect($servername,$username,$password,$database);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

// Google reCAPTCHA API keys settings  
$secretKey     = '6Le-VAclAAAAALN_5jNDDmthvLAV4ylwFQ-ABWkC';  
  

$postData = $firstnameErr = $statusMsg = $lastnameErr = $messageErr = $emailErr = $contactmeErr = ''; 
$status = 'error'; 
 

if(isset($_POST['submit_frm']))
{  
    $postData = $_POST;  

    $firstname = $_POST['first_name']; 
    $lastname = $_POST['last_name']; 
    $hospitalname = $_POST['hospital_name'];
    $email = $_POST['email'];  
    $message = $_POST['message'];
    $contact_me = $_POST['contact_me']; 
    $notification = $_POST['notification']; 
    $date=date('Y-m-d H:i:s');

    if(empty($firstname)){  
        $firstnameErr= 'Please enter your first name.';  
    }  
    if(empty($lastname)){  
        $lastnameErr= 'Please enter your last name.';  
    }  
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){  
        $emailErr .= 'Please enter a valid email.';  
    }  
    if(empty($message)){  
        $messageErr .= 'Please type something.';  
    }
    if(empty($hospitalname)){  
        $hospitalErr= 'Please enter hospitalname.';  
    }
    
    if($contact_me == 0){  
        $contactmeErr= 'Please click the above box.';  
    } 
  
    // Check whether submitted input data is valid  
    if(empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($messageErr) && empty($hospitalErr) && empty($contactmeErr)){  
        // Validate reCAPTCHA response  
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){  
  
            // Google reCAPTCHA verification API Request  
            $api_url = 'https://www.google.com/recaptcha/api/siteverify';  
            $resq_data = array(  
                'secret' => $secretKey,  
                'response' => $_POST['g-recaptcha-response'],  
                'remoteip' => $_SERVER['REMOTE_ADDR']  
            );  
  
            $curlConfig = array(  
                CURLOPT_URL => $api_url,  
                CURLOPT_POST => true,  
                CURLOPT_RETURNTRANSFER => true,  
                CURLOPT_POSTFIELDS => $resq_data  
            );  
  
            $ch = curl_init();  
            curl_setopt_array($ch, $curlConfig);  
            $response = curl_exec($ch);  
            curl_close($ch);  
  
            // Decode JSON data of API response in array  
            $responseData = json_decode($response);  

            // If the reCAPTCHA API response is valid  
            if($responseData->success)
            {
                $insert_data = "INSERT INTO `information`(`full_name`, `last_name`, `email`, `hospital_name`,  `message`, `personal_data_access`, `notification`, `created_date`) 
                                VALUES ('$firstname', '$lastname', '$email', '$hospitalname','$message','$contact_me','$notification','$date_month')";
                $insertquery=mysqli_query($conn,$insert_data);
                
                $to = 'leads@techbumbles.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
                $email_subject = "Dr carrot's Contact Form:  $firstname";
                $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: \n$firstname\n\nEmail: \n$email\n\nHospital name: \n $hospitalname \n\nMessage:\n$message\n\n\n Submitted $time  $date ";
                $headers = 'From: WebSite Admin <admin@drcarrot.in>' . "\r\n"; // we recommend using something like noreply@yourdomain.com.
                $headers .= 'Bcc: admin@drcarrot.in' . "\r\n";
                $headers .= 'Reply-To: admin@drcarrot.in';	
                $mail=mail($to,$email_subject,$email_body,$headers);  

                $status = 'success';  
                $postData = '';  

                if($mail)
                {
                    $successMsg="Thank you! Your contact request has been submitted successfully.";
                }
                else{
                    $statusMsg="Something went wrong, please try again.";
                }
            }else{  
                $statusMsg = 'The reCAPTCHA verification failed, please try again.';  
            }  
        }else{  
            $statusMsg = 'Something went wrong, please try again.';  
        }  
    }else{  
        $firstnameErr = !empty($firstnameErr)?$firstnameErr:'';
        $lastnameErr = !empty($lastnameErr)?$lastnameErr:'';  
        $emailErr = !empty($emailErr)?$emailErr:'';  
        $industryErr = !empty($industryErr)?$industryErr:'';  
        $messageErr = !empty($messageErr)?$messageErr:''; 
        $contactmeErr= 'Please click the above box.'; 
    }  
}  
  
?>