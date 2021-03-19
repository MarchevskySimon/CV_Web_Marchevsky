<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šimon</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=Raleway:wght@200;800&display=swap" rel="stylesheet">

    <style>
        /*
         Font:
            font-family: 'Raleway', sans-serif;
         */
        
        * {
            font-family: 'Raleway', sans-serif;
            font-size: 100%;
            margin: 0;
            padding: 0;
            cursor: none;
            text-decoration: none;
        }
        
        html,
        body {
            height: 100%;
            background-color: rgb(58, 58, 58);
        }
        
         ::-webkit-scrollbar {
            background-color: rgb(58, 58, 58);
        }
        
         ::-webkit-scrollbar-thumb {
            background-color: #3DDC84;
        }
        
        .mouse {
            position: absolute;
            transform: translate(-50%, -50%);
            transform-origin: 100% 100%;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            z-index: 10;
            background-color: rgba(61, 220, 132, .6);
            pointer-events: none;
            transition: .2s;
            transition-property: transform;
        }
        
        .mouse_border {
            position: absolute;
            transform: translate(-50%, -50%);
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            z-index: 10;
            border: 3px solid whitesmoke;
            transition: .2s;
            z-index: 5;
            pointer-events: none;
        }
        
        .mouse_over_link {
            transform: scale(2);
            background-color: #3DDC84;
            z-index: 0;
        }
        
        @media only screen and (max-width: 1000px) {
            * {
                cursor: none;
            }
            .mouse {
                display: none;
            }
            .mouse_border {
                display: none;
            }
            .mouse_over_link {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- MOUSE -->

    <div class="mouse"></div>
    <div class="mouse_border"></div>

    <!-- PHP - Call parts of webpage -->

    <?php 
    
    require 'Nav.php';

    require 'Header.php';

    require 'Main.php';

    require 'Section.php';

    require 'Footer.php';

    ?>

    <!-- Script -->
    <script>
        'use strict';

        var menuLinks = document.querySelectorAll('.menu_links a');
        var mouseCursor = document.querySelector('.mouse');
        var mouseBorder = document.querySelector('.mouse_border');

        window.addEventListener('mousemove', cursorChange);

        function cursorChange(ele) {
            mouseCursor.style.top = ele.pageY + 'px';
            mouseCursor.style.left = ele.pageX + 'px';

            mouseBorder.style.top = ele.pageY + 'px';
            mouseBorder.style.left = ele.pageX + 'px';
        }

        menuLinks.forEach(link => {
            link.addEventListener('mouseover', () => {
                mouseCursor.classList.add('mouse_over_link');
            });
            link.addEventListener('mouseleave', () => {
                mouseCursor.classList.remove('mouse_over_link');
            });
        });
    </script>

</body>

</html>