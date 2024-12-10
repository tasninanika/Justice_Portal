<?php
if (isset($_POST['login'])) {
    require('dbCon.php');
    $con = connect();
    session_start();    
    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']); 
    
    $result = mysqli_query($con, "SELECT * FROM user INNER JOIN lawyer ON user.u_id=lawyer.lawyer_id WHERE email = '$email' AND password = '$password' AND role='Lawyer' AND status='Active'");
    $result2 = mysqli_query($con, "SELECT * FROM user INNER JOIN client ON user.u_id=client.client_id WHERE email = '$email' AND password = '$password' AND role='User' AND status='Active'");
    $result3 = mysqli_query($con, "SELECT * FROM user INNER JOIN administrator ON user.u_id=administrator.administrator_id WHERE email = '$email' AND password = '$password' AND role='Admin'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['email'] = $email;
        $_SESSION['first_Name'] = $row['first_Name'];
        $_SESSION['last_Name'] = $row['last_Name'];
        $_SESSION['lawyer_id'] = $row['lawyer_id'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['login'] = TRUE;
        header("Location:../lawyer_dashboard.php?done");
    } elseif ($row = mysqli_fetch_array($result2)) {
        $_SESSION['email'] = $email;
        $_SESSION['first_Name'] = $row['first_Name'];
        $_SESSION['last_Name'] = $row['last_Name'];
        $_SESSION['client_id'] = $row['client_id'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['image'] = $row['image'];
        $_SESSION['login'] = TRUE;
        header("Location:../user_dashboard.php?done");
    } elseif ($row = mysqli_fetch_array($result3)) {
        $_SESSION['email'] = $email;
        $_SESSION['first_Name'] = $row['first_Name'];
        $_SESSION['last_Name'] = $row['last_Name'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['login'] = TRUE;
        header("Location:../a_dashboard.php?done");
    } else {
        header('Location:../login.php?error');
    }
} else {
    header('Location:../login.php?deactivate');
}
?>
