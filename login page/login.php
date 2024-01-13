<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hlsystem";

$conn = new mysqli ($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection Error!" .mysqli_connect_error());
}
if(isset($_POST["Uname"])  ||  isset($_POST["psw"])){

    $Uname = $_POST["Uname"];
    $Password = $_POST["psw"];

    $sql = "INSERT INTO login(`Username`, `Password`) VALUES ('$Uname','$Password')";

    mysqli_query($conn,$sql);
}
if($conn->query = TRUE){
    echo"<h1></h1>";
}
else{
    echo"faild" .$conn->error;

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $uniqueValue = $_POST["unique_value"];
    $otherValue = $_POST["other_value"];

    // Check if the record already exists
    $checkQuery = "SELECT username FROM login WHERE unique_column = '$uniqueValue'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows == 0) {
        // If the record doesn't exist, insert it
        $insertQuery = "INSERT INTO your_table (unique_column, other_columns) VALUES ('$uniqueValue', '$otherValue')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    } else {
        echo "Record with the same unique value already exists";
    }
}

$conn->close();
?>