<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .modal-content {
            background-color: #ffffff;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        
        .container {
            padding: 16px;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        p {
            text-align: center;
            color: #666;
        }
        
        input[type=text], input[type=password], input[type=number] {
            width: 100%;
            padding: 15px;
            margin: 8px 0 20px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f9f9f9;
        }
        
        input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
            background-color: #eef;
            border-color: #66afe9;
            outline: none;
        }
        
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        
        button:hover {
            background-color: #039f5b;
        }
        
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        
        @media screen and (max-width: 400px) {
            .modal-content {
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <form class="modal-content" action="" method="post">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="age"><b>Age</b></label>
            <input type="number" placeholder="Enter Age" name="age" required>

            <div class="clearfix">
                <button type="submit" name="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</body>
</html>
<?php
include 'connect.php';



if (!isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    mysqli_query($con,"INSERT INTO `tbl_employee`(`ID`, `name`, `email`, `age`) VALUES ('','$name','$email','$age')");
}
?>