<?php
    include_once 'db_con/dbCon.php';
    
    $okFlag = TRUE;
    if($okFlag){
        function generateRandomString() {
            $characters = '0123456789';
            $length = 5;
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $length > $i; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        if(isset($_FILES["fileToUpload"]["name"]) && $_FILES["fileToUpload"]["name"] != ''){
            $target_dir = "./images 2/upload/";
            $newName = date('YmdHis_');
            $newName .= basename($_FILES["fileToUpload"]["name"]);
            $target_file = $target_dir . $newName;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }

            if (file_exists($target_file)) {
                $uploadOk = 0;
            }

            if ($_FILES["fileToUpload"]["size"] > 5000000) {
                $uploadOk = 0;
            }

            if($imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                $checkFlag = FALSE;
            } else {
                if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                } else {
                    $checkFlag = FALSE;
                }
            }
        } else {
            $newName = $_POST['image'];
        }

        $u_id = uniqid('Client');
        $first_Name = $_REQUEST['first_name'];
        $last_Name = $_REQUEST['last_Name'];
        $email = $_REQUEST['email'];
        $contact_number = $_REQUEST['contact_number'];
        $full_address = $_REQUEST['full_address'];
        $city = $_REQUEST['city'];
        $zip_code = $_REQUEST['zip_code'];
        $password = $_REQUEST['user_password'];

        include 'send_mail_client.php';
        $conn = connect();

        $duplicate = mysqli_query($conn, "select * from user where email='$email'");
        if (mysqli_num_rows($duplicate) > 0) {
            echo "<script>
                    alert('Sorry User!! This Email already exists..Please Fill up the form again');
                    window.location.href = 'http://localhost/lawyermanagementsystem/user_register.php';
                  </script>";
        } else {
            $sql = "INSERT INTO `user` (`u_id`, `first_Name`, `last_Name`, `email`, `password`, `status`, `role`) VALUES ('$u_id', '$first_Name', '$last_Name', '$email', '$password', 'Active', 'User');";
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

            if($result == 1) {
                $sql2 = "INSERT INTO `client` (`client_id`, `contact_number`, `full_address`, `city`, `zip_code`, `image`) VALUES ('$u_id', '$contact_number', '$full_address', '$city', '$zip_code', '$newName');";
                $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

                if ($result2 == 1) {
                    // echo "<script>
                    //         alert('Dear User...Your Registration Successfully Complete! Please Check Your Email');
                    //         window.location.href = 'http://localhost/lawyermanagementsystem/user_register.php';
                    //       </script>";
					header("location:user_dashboard.php");
                }
            }
        }
    }
?>
