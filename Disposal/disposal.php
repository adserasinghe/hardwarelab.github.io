<?php
    include './db.php';
    
    if(isset($_POST["iname"]) || isset($_POST["id"])|| isset($_POST["quantity"])||$_POST["name"]||$_POST["stid"])
    {
        $iname=$_POST["iname"];
        $id=$_POST["id"];
        $Quantity=$_POST["quantity"];
        $name=$_POST["name"];
        $stid=$_POST["stid"];

        $sql="INSERT INTO stock(`Iteam_name`, `Iteam ID`, `Quantity`,`Name`,`ID`) VALUES ('$iname','$id','$Quantity','$name','$stid')";

        mysqli_query($conn,$sql);
    }
    if($conn->query =TRUE)
    {
        echo "New record created successfully";
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();
    ?>