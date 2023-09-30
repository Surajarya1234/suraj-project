<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "database";

$conn = mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}
// echo "connection successfull";
if(isset($_POST['name'])){
    $sql = "INSERT into data (name,age,gender,email,phone,other) VALUES ('$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[email]','$_POST[phone]','$_POST[desc]')";

    if(mysqli_query($conn,$sql)){
        // echo"New record created successfully";
    }
    else{
        echo"Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&family=Roboto:ital,wght@0,100;0,300;0,700;1,100;1,700&display=swap"
        rel="stylesheet">

</head>
<body>
<img src="bg.jpg" alt="IIT kharagpur" class="bg">
    <div class="container">
        <h1>Welcome to IIT kharagpur US trip form</h1>
        <p>Enter your details and submit your form to confirm your paticiation in trip</p>
        <p class="submitmsg">Thanks for submitting your form. We are haapy to see you joing us for US Trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->

        </form>

    </div>
    <script src="script.js"></script>
    
</body>
</html>