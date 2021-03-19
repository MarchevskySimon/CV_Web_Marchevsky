<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=Raleway:wght@200;800&display=swap" rel="stylesheet">

    <style>
        /*
         Fonty:
            font-family: 'Qwigley', cursive;
            font-family: 'Raleway', sans-serif;
         */
        
        * {
            font-family: 'Raleway', sans-serif;
            font-size: 100%;
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        
        html,
        body {
            height: 100%;
            background-color: rgb(58, 58, 58);
        }
        /*
         * SECTION
         */
        
        section {
            width: 80%;
            margin: auto;
            text-align: center;
            border-bottom: 2px solid #3DDC84;
        }
        
        section h1 {
            font-size: 200%;
            color: #3DDC84;
            margin: 5% 0 5%;
        }
        
        section p {
            font-size: 120%;
            color: whitesmoke;
            margin: 5% 0 5%;
            line-height: 200%;
        }
        
        section a {
            font-weight: bold;
            padding: 1% 3% 1% 3%;
            color: #3DDC84;
            border: 4px solid #3DDC84;
            border-radius: 5px;
            transition: .2s;
        }
        
        .link {
            animation: rot 1.5s ease-in-out infinite;
        }
        
        @keyframes rot {
            0% {
                transform: rotate(-5deg);
            }
            50% {
                transform: rotate(5deg);
            }
            100% {
                transform: rotate(-5deg);
            }
        }
        
        section a:hover {
            background-color: #3DDC84;
            color: rgb(58, 58, 58);
        }
        
        @media only screen and (max-width: 1000px) {
            section a {
                padding: 2% 5% 2% 5%;
            }
        }
        
        @media only screen and (max-width: 600px) {
            section {
                padding-bottom: 5%;
            }
            section a {
                padding: 3% 7% 3% 7%;
            }
        }
    </style>
</head>

<body>

    <section id="section">
        <div class="section_txt">
            <h1>JAVASCRIPT SNAKE</h1>
            <p>Osobne si myslím, že je lepšie raz videiť ako stokrát počuť, a preto by som Vám namiesto zdĺhavého opisovanie svojich schopností v JavaScripte, radšej predstavil reálny priklad v takejto zábavnej forme.</p>

            <!-- Link na hru -->
            <p class="link"><a href="Had.html">Hrať</a></p>
        </div>
    </section>

</body>

</html>