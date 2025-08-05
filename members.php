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

        .main .members{
            width: 100%;
            padding: 50px;
            display: flex;
            gap: 50px;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .main .card{
            position: relative;
            width: 250px;
            height: 300px;
            overflow: hidden;
            border-radius: 10px;
            border: 1px solid black;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
            transition: all 0.15s ease;
        }
        .main .card:hover{
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.8);
        }

        .main .card .photo{
            position: absolute;
            width: 100%;
            height: 100%;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .main .card .photo img{
            height: 100%;
            object-fit: cover;
            transition: all 1.5s ease;
        }
        .main .card .filter{
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 42%, rgba(255,255,255,0) 100%);
            border-radius: 10px;
        }
        .main .card .infos{
            position: absolute;
            /* transform: translateY(0%); */
            bottom: 0;
            color: white;
            padding: 10px;
            opacity: 1;
            /* transition:  0.75s ease; */
        }
        
        .main .card .infos .name{
            display: relative;
            transition: all 0.75s ease;
            font-size: 1.2em;
            font-weight: 500;
        }
        .main .card .infos .name::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.4s ease-in-out;
        }
        .main .card:hover .infos .name::after {
            width: 100%;
        }

        .main .card .infos .status{
            transition: all 0.75s ease;
            font-size: 0.85em;
            margin-top: 5px;
        }
        .main .card .infos .description{
            padding-top: 10px;
            opacity: 0;
            transition: all 0.75s ease;
            font-size: 0.7em;
            text-align: justify;
            display: inline;
            -webkit-line-clamp: 4;
            text-overflow: ellipsis;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            word-wrap: break-word;
        }
        .main .card:hover .photo img{
            transform: scale(1.1);
        }
        
        .main .card:hover .infos .description{
            transform: translateY(0%);
            opacity: 1;
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

            <div class="members">
                <div class="card">
                    <div class="photo">
                        <img src="images/abdussamed.jpeg" alt="">
                    </div>
                    <div class="filter"></div>
                    <div class="infos">
                        <div class="name">
                            Abdussamed Yazici
                        </div>
                        <div class="status">
                            PhD Student
                        </div>
                        <!-- <div class="description">
                        Guy has always been fascinated by how brain circuits enable us to build stable yet adaptable representations of our environment, from receptors, synapses, and circuits to behaviors. This fundamental process involves integrating diverse types of information through microcircuits and long-range connections and is central to key brain functions such as perception and cognition, making it a major challenge in neuroscience. More specifically, Guy has always been fascinated by our capacity to continuously update our representation of the world by combining internal senses, which use muscles and head motion sensors to locate our body in space, and external senses, such as vision, touch, or audition to explore our environment. 
During his doctoral thesis, Guy worked with Boris Barbour and Mariano Casado at IBENS, Paris, to investigate synaptic plasticity rules and their impact on motor learning, focusing on the parallel fibre-Purkinje cell synapse in the cerebellum. After earning his PhD, he joined Massimo Scanziani's laboratory at the University of California, San Francisco/HHMI, where he explored how the vestibulo-cerebellar circuits modulate the activity of the primary visual cortex in mice.
In September 2023, Guy established the SensoMotion Lab at the Neuroscience Institute of Paris-Saclay, with support from the European Research Council. His lab aims to unravel how our own motion impacts sensory processing and, ultimately, our internal model of the world.
 

                        </div> -->
                    </div>
                </div>

                <div class="card">
                    <div class="photo">
                        <img src="images/abdussamed.jpeg" alt="">
                    </div>
                    <div class="filter"></div>
                    <div class="infos">
                        <div class="name">
                            Abdussamed Yazici
                        </div>
                        <div class="status">
                            PhD Student
                        </div>
                        <div class="description">
                        Guy has always been fascinated by 

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="photo">
                        <img src="images/abdussamed.jpeg" alt="">
                    </div>
                    <div class="filter"></div>
                    <div class="infos">
                        <div class="name">
                            Abdussamed Yazici
                        </div>
                        <div class="status">
                            PhD Student
                        </div>
                        <div class="description">
                        Guy has always been fascinated by 

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="photo">
                        <img src="images/abdussamed.jpeg" alt="">
                    </div>
                    <div class="filter"></div>
                    <div class="infos">
                        <div class="name">
                            Abdussamed Yazici
                        </div>
                        <div class="status">
                            PhD Student
                        </div>
                        <div class="description">
                        Guy has always been fascinated by 

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="photo">
                        <img src="images/abdussamed.jpeg" alt="">
                    </div>
                    <div class="filter"></div>
                    <div class="infos">
                        <div class="name">
                            Abdussamed Yazici
                        </div>
                        <div class="status">
                            PhD Student
                        </div>
                        <div class="description">
                        Guy has always been fascinated by 

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="photo">
                        <img src="images/abdussamed.jpeg" alt="">
                    </div>
                    <div class="filter"></div>
                    <div class="infos">
                        <div class="name">
                            Abdussamed Yazici
                        </div>
                        <div class="status">
                            PhD Student
                        </div>
                        <div class="description">
                        Guy has always been fascinated by 

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="photo">
                        <img src="images/abdussamed.jpeg" alt="">
                    </div>
                    <div class="filter"></div>
                    <div class="infos">
                        <div class="name">
                            Abdussamed Yazici
                        </div>
                        <div class="status">
                            PhD Student
                        </div>
                        <div class="description">
                        Guy has always been fascinated by 

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="js/basic-functions.js"></script>
    <!-- <script>
        window.onload = function() {
            const parents = document.querySelectorAll('.infos'); // Sélectionner tous les éléments parents

            parents.forEach(parent => {
                const thirdChild = parent.querySelector('.description'); // Sélectionner le 3ème enfant de chaque parent
                const thirdChildHeight = thirdChild.offsetHeight;
                
                // Appliquer la translation Y à chaque élément parent
                parent.style.transform = `translateY(${thirdChildHeight}px)`;

                parent.style.opacity = 1;
            });
        };

    </script> -->
</body>
</html>