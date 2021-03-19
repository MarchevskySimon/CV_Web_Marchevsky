<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /*
         * Footer
         */
        
        footer {
            position: relative;
            width: 80%;
            height: 100%;
            margin: auto;
        }
        
        .footer_img {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        footer svg {
            position: absolute;
            width: 70%;
        }
        
        .formular {
            position: absolute;
            width: 100%;
            height: 50%;
            top: 15%;
            z-index: 1;
            text-align: center;
        }
        
        footer h1 {
            font-size: 200%;
            color: #3DDC84;
            margin-bottom: 3%;
        }
        
        .form_design {
            background: none;
            border: 4px solid whitesmoke;
            color: whitesmoke;
            border-radius: 5px;
            padding: 1.5% 1% 1.5% 1%;
            margin-top: 3%;
            width: 40%;
            transition: .2s;
        }
        
        .form_design:last-child {
            font-size: 120%;
            width: 15%;
            background: none;
            font-weight: bold;
            margin-top: 5%;
            padding: 1% 3% 1% 3%;
            color: #3DDC84;
            text-decoration: none;
            border: 4px solid #3DDC84;
            border-radius: 5px;
            transition: .2s;
        }
        
        .form_design:last-child:hover {
            background-color: #3DDC84;
            color: rgb(58, 58, 58);
        }
        
        .form_design:focus {
            background-color: white;
            border-color: #3DDC84;
            color: rgb(58, 58, 58);
            outline: none;
            transform: scale(1.05);
            -webkit-appearance: none;
            box-shadow: 6px 4px 4px rgba(0, 0, 0, 0.7) inset;
        }
        
        .form_design:last-child:focus {
            transform: none;
            box-shadow: none;
        }
        
        footer .dark {
            position: absolute;
            background-color: rgba(58, 58, 58, .8);
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        /*
         * MEDIA Q. 
         */
        
        @media only screen and (max-width: 1200px) {
            .form_design {
                width: 60%;
                padding: 2% 1% 2% 1%;
            }
        }
        
        @media only screen and (max-width: 1000px) {
            footer {
                height: 60%;
            }
            footer .dark {
                display: none;
            }
            .formular {
                position: relative;
                height: auto;
                top: 5%;
                background-color: rgba(58, 58, 58, .8);
            }
            .footer_img {
                position: absolute;
                top: 0;
            }
            .form_design {
                padding: 2%;
                margin-top: 5%;
                width: 70%;
                padding: 3% 2% 3% 2%;
            }
            .form_design:last-child {
                width: 30%;
                padding: 2% 5% 2% 5%;
            }
        }
        /*
         * MEDIA Q. 
         */
        
        @media only screen and (max-width: 600px) {
            .form_design {
                width: 80%;
            }
            .form_design:last-child {
                width: 40%;
                padding: 3% 7% 3% 7%;
            }
        }
        /* CONTACT */
        
        .contact {
            position: relative;
            width: 100%;
            height: 25%;
            margin: auto;
            padding-top: 5%;
            border-top: 2px solid #3DDC84;
        }
        
        .contact p {
            color: whitesmoke;
            margin-top: 5%;
        }
        
        .contact li {
            display: block;
        }
        
        .first_list {
            position: absolute;
            width: 20%;
            left: 10%;
            text-align: center;
        }
        
        .second_list {
            position: absolute;
            width: 20%;
            left: 40%;
            text-align: center;
        }
        
        .second_list a {
            color: whitesmoke;
            border-bottom: 1px solid #3DDC84;
            padding-bottom: 1%;
        }
        
        .contact_a {
            position: absolute;
            text-align: center;
            width: 10%;
            left: 70%;
            font-weight: bold;
            margin-top: 0%;
            padding: 1% 3% 1% 3%;
            color: #3DDC84;
            text-decoration: none;
            border: 4px solid #3DDC84;
            border-radius: 5px;
            transition: .2s;
        }
        
        .contact_a:hover {
            background-color: #3DDC84;
            color: rgb(58, 58, 58);
        }
        /*
         * MEDIA Q. 
         */
        
        @media only screen and (max-width: 1000px) {
            .contact {
                text-align: center;
                height: 50%;
                top: 20%;
            }
            .first_list {
                position: relative;
                width: 100%;
                left: 0;
                top: 5%;
            }
            .second_list {
                position: relative;
                width: 100%;
                left: 0;
                top: 15%;
            }
            .contact_a {
                position: relative;
                display: block;
                width: 20%;
                margin: auto;
                left: 0;
                top: 30%;
                padding: 2% 5% 2% 5%;
            }
        }
        
        @media only screen and (max-width: 600px) {
            .contact_a {
                padding: 3% 7% 3% 7%;
            }
        }
    </style>

</head>

<body>

    <footer id="footer">

        <div class="dark"></div>

        <div class="formular">

            <h1>NAPÍŠTE MI</h1>

            <form action="contact_form_code.php" method="post" id="contact_form">

                <input type="email" name="mail" placeholder="Váš e-mail" class="form_design"><br>

                <input type="text" name="subject" placeholder="Predmet" class="form_design"><br>

                <textarea name="message" placeholder="Správa" class="form_design"></textarea><br>

                <button type="submit" name="submit" class="form_design">Poslať</button>

            </form>
        </div>

        <div class="footer_img">
            <svg viewBox="0 0 260 106" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.860001 0.559998L228.83 33.38L259.42 64.25L0.860001 0.559998Z" fill="#3DDC84"/>
            <path opacity="0.6" d="M0.860001 0.559998L228.83 33.38L259.42 64.25L0.860001 0.559998Z" fill="white"/>
            <path d="M0.860001 0.559998L228.83 33.38L218.25 78.02L0.860001 0.559998Z" fill="#3DDC84"/>
            <path opacity="0.2" d="M0.860001 0.559998L228.83 33.38L218.25 78.02L0.860001 0.559998Z" fill="black"/>
            <path d="M0.860001 0.559998L188.89 45.25L218.25 78.02L0.860001 0.559998Z" fill="#3DDC84"/>
            <path opacity="0.6" d="M0.860001 0.559998L188.89 45.25L218.25 78.02L0.860001 0.559998Z" fill="white"/>
            <path d="M69.449 43.6352L68.9436 44.498L89.8681 56.7548L90.3736 55.8919L69.449 43.6352Z" fill="#3DDC84"/>
            <path d="M99.6118 61.2955L99.1063 62.1584L106.631 66.5658L107.136 65.7029L99.6118 61.2955Z" fill="#3DDC84"/>
            <path d="M0.860001 0.559998L188.89 45.25L152.34 89.3L0.860001 0.559998Z" fill="#3DDC84"/>
            <path d="M252.36 105.26C252.107 105.261 251.856 105.213 251.62 105.12L221 93C220.51 92.8027 220.118 92.4196 219.91 91.9343C219.701 91.449 219.693 90.901 219.887 90.4099C220.081 89.9187 220.462 89.5242 220.946 89.3125C221.43 89.1009 221.978 89.0892 222.47 89.28L253.1 101.4C253.533 101.571 253.893 101.888 254.118 102.297C254.342 102.705 254.417 103.179 254.329 103.637C254.241 104.094 253.997 104.507 253.637 104.803C253.278 105.1 252.826 105.261 252.36 105.26Z" fill="#3DDC84"/>
            <path opacity="0.3" d="M252.36 105.26C252.107 105.261 251.856 105.213 251.62 105.12L221 93C220.51 92.8027 220.118 92.4196 219.91 91.9343C219.701 91.449 219.693 90.901 219.887 90.4099C220.081 89.9187 220.462 89.5242 220.946 89.3125C221.43 89.1009 221.978 89.0892 222.47 89.28L253.1 101.4C253.533 101.571 253.893 101.888 254.118 102.297C254.342 102.705 254.417 103.179 254.329 103.637C254.241 104.094 253.997 104.507 253.637 104.803C253.278 105.1 252.826 105.261 252.36 105.26Z" fill="black"/>
            <path d="M250.55 87.7C250.299 87.6984 250.051 87.6474 249.82 87.55L233.37 81C233.124 80.9047 232.899 80.7617 232.709 80.5792C232.519 80.3967 232.366 80.1784 232.26 79.9367C232.155 79.6951 232.098 79.4349 232.093 79.1712C232.088 78.9075 232.136 78.6454 232.233 78.4001C232.33 78.1548 232.474 77.9311 232.658 77.7419C232.842 77.5527 233.061 77.4016 233.303 77.2975C233.546 77.1934 233.806 77.1383 234.07 77.1353C234.334 77.1323 234.595 77.1814 234.84 77.28L251.29 83.8C251.783 83.994 252.179 84.3757 252.391 84.8613C252.603 85.3469 252.613 85.8967 252.42 86.39C252.279 86.7731 252.025 87.1039 251.69 87.3381C251.356 87.5722 250.958 87.6985 250.55 87.7Z" fill="#3DDC84"/>
            <path opacity="0.5" d="M250.55 87.7C250.299 87.6984 250.051 87.6474 249.82 87.55L233.37 81C233.124 80.9047 232.899 80.7617 232.709 80.5792C232.519 80.3967 232.366 80.1784 232.26 79.9367C232.155 79.6951 232.098 79.4349 232.093 79.1712C232.088 78.9075 232.136 78.6454 232.233 78.4001C232.33 78.1548 232.474 77.9311 232.658 77.7419C232.842 77.5527 233.061 77.4016 233.303 77.2975C233.546 77.1934 233.806 77.1383 234.07 77.1353C234.334 77.1323 234.595 77.1814 234.84 77.28L251.29 83.8C251.783 83.994 252.179 84.3757 252.391 84.8613C252.603 85.3469 252.613 85.8967 252.42 86.39C252.279 86.7731 252.025 87.1039 251.69 87.3381C251.356 87.5722 250.958 87.6985 250.55 87.7Z" fill="white"/>
            <path d="M216.16 105C215.91 104.997 215.663 104.95 215.43 104.86L185.56 93C185.314 92.9047 185.089 92.7617 184.899 92.5792C184.709 92.3967 184.556 92.1784 184.45 91.9367C184.345 91.6951 184.288 91.4349 184.283 91.1712C184.278 90.9075 184.326 90.6454 184.423 90.4001C184.52 90.1548 184.664 89.9311 184.848 89.7419C185.032 89.5527 185.251 89.4016 185.493 89.2975C185.736 89.1934 185.996 89.1383 186.26 89.1353C186.524 89.1323 186.785 89.1814 187.03 89.28L216.9 101.1C217.333 101.271 217.693 101.588 217.918 101.997C218.142 102.405 218.217 102.879 218.129 103.337C218.041 103.794 217.797 104.207 217.437 104.503C217.078 104.8 216.626 104.961 216.16 104.96V105Z" fill="#3DDC84"/>
            <path opacity="0.3" d="M216.16 105C215.91 104.997 215.663 104.95 215.43 104.86L185.56 93C185.314 92.9047 185.089 92.7617 184.899 92.5792C184.709 92.3967 184.556 92.1784 184.45 91.9367C184.345 91.6951 184.288 91.4349 184.283 91.1712C184.278 90.9075 184.326 90.6454 184.423 90.4001C184.52 90.1548 184.664 89.9311 184.848 89.7419C185.032 89.5527 185.251 89.4016 185.493 89.2975C185.736 89.1934 185.996 89.1383 186.26 89.1353C186.524 89.1323 186.785 89.1814 187.03 89.28L216.9 101.1C217.333 101.271 217.693 101.588 217.918 101.997C218.142 102.405 218.217 102.879 218.129 103.337C218.041 103.794 217.797 104.207 217.437 104.503C217.078 104.8 216.626 104.961 216.16 104.96V105Z" fill="black"/>
            </svg>
        </div>


        <!-- Footer kontaktné údaje -->
        <div class="contact">
            <ul class="first_list">
                <li>
                    <h1>KONTAKT</h1>
                </li>
                <li>
                    <p>simon.marchevsky@gmail.com</p>
                </li>
                <li>
                    <p>+421 917 577 385</p>
                </li>
            </ul>
            <ul class="second_list">
                <li>
                    <h1>ODKAZY</h1>
                </li>
                <li>
                    <a href="https://storyset.com/communication">Illustration by Freepik Storyset</a>
                </li>
            </ul>
            <a href="#header" class="contact_a">HORE</a>
        </div>

    </footer>

    <script>
        'use strict';

        /*
         * Contact form
         */

        var contactForm = document.querySelectorAll('#contact_form input, textarea'),
            formBtn = document.querySelector('#contact_form button');

        formBtn.addEventListener('click', () => {
            contactForm.forEach(ele => {
                if (ele.value == "") {
                    alert('Pole formulára nesmie byť prázdne');
                }
            });
        });
    </script>

</body>

</html>