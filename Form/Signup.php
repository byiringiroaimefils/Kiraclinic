<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kira||Clinic||</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <h2> Signup</h2><br>
        <form action="#" method="post">
            <input type="text" name="Username" placeholder="Username"> <br><br>
            <input type="email" name="email" placeholder="Username"> <br><br>
            <input type="password" name="password" placeholder="Enter your code"> <br> <br>
            <div class="btn">
                <input type="submit">
            </div>
        </form>
    </div>

    <script src="Form/formv.js"></script>
</body>

</html>

<!-- This is backend of this Signup page. -->

<?php
include('Connention.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sqli="INSERT INTO users VALUES ('','$username',' $email','$password')";
    $row=mysqli_query($conn,$sqli);
}

?>