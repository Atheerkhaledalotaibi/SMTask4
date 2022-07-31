
<!DOCTYPE html>
<html lang="ar" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Sensor Value AKU</title>
    <style>
        body {
            font-family: arial;
            font-size: 16px;
            margin: 0;
            background: #0000;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: #000;
        }
        
        h1 {
            font-size: 50px;
            color: #000;
        }
    </style>
</head>

<body>
    <div>
        <h1> أرسل قيمة للحساس</h1>
        <input type = "number" name = "d" />
        <input type="submit" >
</body>

</html>
<?php

$data = $_GET["d"];

$servername = "localhost";
$username = "";
$password = "";
$dbname = "sensor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sensor_data (id, data)
VALUES ('', '$data')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>