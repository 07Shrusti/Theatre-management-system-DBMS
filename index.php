<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theatre Managment System</title>
</head>
<link rel="stylesheet" href="css/style.css">

<body>
    <div class="banner-text">
        <h1>Theatre Management System</h1>
        <p>All the world's a stage</p>
    </div>

</body>
<style>
    /* CSS Reset*/
    
    body {
        color: white;
        margin: 0px;
        padding: 0px;
        background: url("bgff.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
    }
    
    .left {
        position: absolute;
        left: 34px;
        top: 20px;
        display: inline-block;
    }
    
    .left img {
        width: 60px;
    }
    
    .left div {
        text-align: centre;
    }
    
    .right {
        position: absolute;
        right: 34px;
        top: 20px;
        display: inline-block;
    }
    
    .btn {
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 16px;
        border: 2px solid grey;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
        position: relative;
        z-index: 1;
        transition: color 0.5s;
    }
    
    .btn span {
        width: 0;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }
    
    .btn:hover {
        background-color: grey;
    }
    
    .banner-text {
        text-align: centre;
        color: white;
        padding-top: 100px;
    }
    
    .banner-text h1 {
        font-size: 100px;
    }
    
    .banner-text p {
        font-size: 20px;
        font-style: italic;
        text-align: centre;
    }
</style>

<body>
    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <img src="logo.png" alt="">







        </div>

        <!-- Right box for buttons-->
        <div class="right">
            <a href="home.php"><button class="btn">Login</button></a>
        </div>

        </div>

    </header>

</body>

</html>