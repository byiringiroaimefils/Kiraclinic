<?php
session_start()
?>

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
        <h2>Patient</h2><br>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="Username" required> <br><br>
            <input type="password" name="password" placeholder="Password" required> <br> <br>
            <div class="btn">
                <input type="submit">
            </div>
        </form>
    </div>

    <script src="Form/formv.js"></script>
</body>

</html>

<?php
include("Connention.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sqli="SELECT * FROM users WHERE email='$email',password='$password'";
    // echo $sqli;
    $row=mysqli_query($conn,$sqli);
    $run=mysqli_fetch_object($row);

    if($run){
       $_SESSION['email']=$run['email'];
       $_SESSION['password']=$run['password'];
       header("Location:index.html");
    }
  
}

?>