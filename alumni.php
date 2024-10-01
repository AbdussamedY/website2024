<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/head.php';?>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .main .banner {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            margin-bottom: 50px;
        }
        .main .banner img{
            width: 100%;
            height: 35dvh;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
        }
        .main .banner .gradient {
            position: absolute;
            width: 100%;
            height: 35dvh;
            background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 42%, rgba(255,255,255,0) 100%);
            border-radius: 10px;
        }
        .main .banner .title {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .main .banner .title h1{
            color: white;
            font-size: 2rem;
            text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }
        .main .banner .title h2{
            color: white;
            font-size: 1rem;
            font-weight: 300;
            text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }
        .main .banner .title h4{
            color: white;
            font-size: 0.8rem;
            text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }
        .main .banner .title hr {
            border: none;
            height: 1px;
            width: 40px;
            background-color: white;
            margin: 10px 0;
        }

        .main .section {
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: baseline;
            gap: 20px;
            text-align: justify;
            padding: 0 40px 0;
        }
        .main .section .section-title{
            color: #4b4b4b;
            font: 1rem monospace;
        }
        .main .section a{
            all: unset;
            cursor: pointer;
            transition: color 1s ease;
        }
        .main .section a:hover{
            text-decoration: underline;
            cursor: pointer;
            color: #69007e;
        }

    </style>
</head>

<body>
    <div class="container">
        <?php include "common/navbar.php";?>
    
        <div class="main">
            <div class="banner">
                <img src="images/neuropsi-night.png" alt="banner">
                <div class="gradient"></div>
                <div class="title">
                    <h4>UMR 9197</h4>
                    <hr>
                    <h1>SENSOMOTION LAB</h1>
                    <h2>Institut des Neurosciences Paris-Saclay | CNRS</h2>
                </div>
            </div>

            <div class="section">
                <div class="section-title">
                    <h3>Our Research</h3>
                </div>
                <div class="section-content">

                </div>
            </div>
        </div>
    </div>

    <script src="js/basic-functions.js"></script>
</body>
</html>