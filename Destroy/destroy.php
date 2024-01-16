<?php
    include './db.php';
    
    if(isset($_POST["iname"]) || isset($_POST["id"])|| isset($_POST["quantity"]))
    {
        $iname=$_POST["iname"];
        $id=$_POST["id"];
        $quantity=$_POST["quantity"];

        $sql="INSERT INTO stock(`Iteam_name`, `Iteam_ID	`, `Quantity`, `Department`) VALUES ('$iname','$id','$quantity')";

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