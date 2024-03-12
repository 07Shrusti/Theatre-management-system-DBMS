<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main menu</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
<div class="up">
<h1 style="color:azure" font="cursive"> Menu</h1></div>
         <div class="container">
            <div class="hexagonArea first">
                <div class="hexagon">
                <a href="theatre_menu.html">
                <button class="btn">Theatre operations</button></a>
                </div>
                <div class="hexagon">
                <a href="movie_menu.html">
                <button class="btn">Movie operations</button></a>
                </div>
                <div class="hexagon">
                <a href="emp_menu.html">
                <button class="btn">Employee Operations</button></a>
                </div>
            </div>
            <div class="hexagonArea last">
            <div class="hexagon">
                <a href="assign_form.php">
                <button class="btn">Movie Assingmnet operations</button></a>
                </div>
                <div class="hexagon">
                <a href="report_menu.html">
                <!--<a href="rep_display_html.php">-->
                <button class="btn">Report</button></a>
                </div>
                <div class="right">
            <a href="index.php"> <button class="btn">Log Out</button></a>
        </div>
            </div>
         </div>
</body>
<style>

    *{
        margin: 0;
        padding: 0;

    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #161623;
    }
    .container{
        width: 950px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        flex-wrap: wrap;
    }
    .container .hexagonArea{
        display: flex;
    }
    .container .hexagonArea .last{
        transform: translateY(-45px);

    }
    .container .hexagonArea .hexagon{
        position: relative;
        width: 200px;
        height: 250px;
        margin: 0 10px;
        clip-path: polygon(0 25%, 50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%);
        background: #77DD77;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .conatiner .hexagonArea .hexagon:hover {
        background: #61f4de;
        transform: scale(0.8);
    }
    .btn {
        margin: 0px 9px;
        padding: 4px 16px;
        border-radius: 10px;
        background: #C1E1C1;
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
    .right {
        position: absolute;
        right: 34px;
        top: 20px;
        display: inline-block;
    }
    .up {
        position:absolute;
        font:Courier, monospace;
        font-size: 50px;
        left: 150px;
        font-style:italic;
        top: 20px;
        
    }

    
    </style>

</html>