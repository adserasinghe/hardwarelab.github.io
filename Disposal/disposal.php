<?php
    include './db.php';
    
    if(isset($_POST["iname"]) || isset($_POST["iid"])|| isset($_POST["quantity"])||$_POST["Department"])
    {
        $iname=$_POST["iname"];
        $iid=$_POST["iid"];
        $Quantity=$_POST["quantity"];
        $Department=$_POST["Department"];


        $sql="INSERT INTO stock(`Iteam_name`, `Iteam ID`, `Quantity`,`Department`) VALUES ('$iname','$id','$Quantity','$name')";

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