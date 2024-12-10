<?php
$con = mysqli_connect("localhost","root","","api_data");
$response = array();
if($con){
    $sql = "select * from services";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content-Type: JSON");
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['name'] = $row['name'];
            $response[$i]['description'] = $row['description'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo"Database connection failed";
}
?>