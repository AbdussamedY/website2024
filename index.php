<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/head.php';?>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            opacity: 1;
            transition: opacity 0.5s;
        }
        .all-screen{
            position: fixed;
            width: 100vw;
            height: 100vh;
            /* background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(175,0,255,1) 100%); */
            background-image: linear-gradient(
                to right,
                hsl(210, 100%, 7%) 0%,
                hsl(240, 90%, 25%) 35%,
                hsl(270, 100%, 50%) 100%
            );
            z-index: 1;
            transition: width 0.5s linear;
        }
        .all-screen.fade-out {
            width: 210px;
        }
        .all-screen::before {
            position: absolute;
            content: "";
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: linear-gradient(
                to bottom,
                hsl(210, 100%, 7%) 0%,
                hsl(240, 83%, 18%) 75%,
                hsl(270, 100%, 33%) 100%
            );
            z-index: -1;
            transition: opacity 0.5s linear, width 0.5s linear;
            opacity: 0;
            width: 100dvw;
        }
        .all-screen.fade-out::before {
            opacity: 1;
            width: 210px;
        }
        /* .all-screen.fade-out{
            width: 210px;
            background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(13,13,83,1) 75%, rgba(115,0,167,1) 100%);
        } */
        body.fade-out {
            opacity: 0;
            background: white;
        }
        .navbar{
            width: 0px;
        }
        .main {
            all: unset;
            z-index: 100;
            /* background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(175,0,255,1) 100%); */
            position: fixed;
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
            color: white;
            font-size: 1.5rem;
            transition: all 0.5s;
        }
        .main.invisible {
            opacity: 0;
        }

        #change-page{
            all: unset;
            cursor: pointer;
            transition: color 1s ease;
        }
        #change-page:hover{
            cursor: pointer;
            color: hsl(270, 100%, 72%);
        }
    </style>
</head>

<body>
    <div class="all-screen" id="all-screen"></div>
    <div class="container">
        <?php include "common/navbar.php";?>
    
        <div class="main" id="main">
            <span style="display: flex; align-items:center; justify-content: center; flex-wrap: wrap; white-space: nowrap;">
                WELCOME TO&nbsp;
                <span style="font-weight:600;">SENSO<span style="color:#bcbcbc;">MOTION</span></span>&nbsp;
                WEBSITE
            </span>

            <span style="display: flex; align-items:center; justify-content: center; text-align:center; flex-wrap: wrap; white-space: normal; font-size:0.8rem; font-style: italic; color:#a7a7a7;">"We must perceive in order to move, but we also move in order to perceive" (James Gibson)</span>


            <?php include 'includes/dynamic-logo.html';?>

            <!-- <div style="text-align:center;" id="Btn"><i class="bi bi-caret-right-fill"></i> Click to explore</div> -->
            <div style="text-align:center;" id="change-page"><i class="bi bi-caret-right-fill"></i> Click to explore</div>
        </div>
    </div>

    <script src="js/basic-functions.js"></script>
    <!-- <script>
        document.getElementById('change-page').addEventListener('click', () => {
            document.getElementById('all-screen').classList.add('fade-out');
            document.getElementById('main').classList.add('invisible');

            setTimeout(() => {
                window.location.href = 'home.php';
            }, 500);
        });
    </script> -->
    <script src="js/transition.js"></script>
</body>
</html>