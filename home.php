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
            /* position: absolute; */
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
            /* justify-content: baseline; */
            gap: 20px;
            text-align: justify;
            padding: 0 40px 0;
        }
        .main .section .section-title{
            color: #4b4b4b;
            font: 1rem monospace;
            font-weight: 900;
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
                    Our Research
                </div>
                <div class="section-content">
                    <p>The Sensomotion Lab is a research group at the <a href="https://neuropsi.cnrs.fr/"><b>Institut des Neurosciences Paris-Saclay (NeuroPSI)</b></a> in Saclay, France.</p>
                    <p style="font-style:italic; margin-top:3px; color:#69007e;font-weight:450;">How do our movements shape the way we perceive the world?</p>
                    
                    <p>The survival of any organism is closely tied to its ability to explore and make sense of its surrounding environment. A substantial amount of the sensory stimuli we experience is generated not by external changes in the world around us, but by our own movements. For instance, the retina can receive identical stimuli whether we move our head or whether an object in our surroundings moves. As such, the brain must be able to account for our movements in order to accurately interpret these sensory inputs. In other words, <i>what we perceive is not merely a direct reflection of what we see</i>. Our brain processes and decodes sensory information by factoring in our own movements and spatial position. The focus of our research is to unravel the neural circuits and computational algorithms responsible for integrating sensory and motor signals within the sensory systems themselves.</p>
                    
                    <p>In pursuit of this goal, we employ a <b>multidisciplinary methodology</b> that combines a range of advanced techniques, including <b>neuronal tracing</b>, <b>optogenetic manipulations</b>, <b>2-Photon imaging</b> (both calcium and voltage), and <b>extracellular recordings in awake mice</b>. Additionally, we track eye and head movements and carry out in-depth theoretical analyses of the collected data.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/basic-functions.js"></script>
</body>
</html>