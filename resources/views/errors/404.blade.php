<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>404</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .msg > p {
                color: #636b6f;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .msg strong {
                color: deeppink;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            @keyframes bounceInUp {
                from, 60%, 75%, 90%, to {
                    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                }

                from {
                    opacity: 0;
                    transform: translate3d(0, 3000px, 0);
                }

                60% {
                    opacity: 1;
                    transform: translate3d(0, -20px, 0);
                }

                75% {
                    transform: translate3d(0, 10px, 0);
                }

                90% {
                    transform: translate3d(0, -5px, 0);
                }

                to {
                    transform: translate3d(0, 0, 0);
                }
            }

            .bounceInUp {
                animation: 1.5s bounceInUp infinite;
            }

            .fck {
                display: inline-block;
                position: relative;
                color: #ccc;
            }

            .home a {
                color: #636b6f;
                font-size: 20px;
                text-decoration: none;
                margin: 40px 0 10px 0;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="msg">
                    <p>uh-oh, <strong>404</strong>, that's really not good, but that's life as well...</p>
                </div>
                <div class="title m-b-md">
                    ( ︶︿︶)_<span class="fck animated bounceInUp">╭∩╮</span>
                </div>

                <div class="home">
                    <p><a href="http://radoslavtomas.com">radoslavtomas.com</a></p>
                </div>

                <div class="links">
                    <a href="http://radoslavtomas.com">Home</a>
                    <a href="http://radoslavtomas.com/about">About me</a>
                    <a href="http://radoslavtomas.com/books">Books</a>
                    <a href="http://radoslavtomas.com/contact">Contact</a>
                </div>
            </div>
        </div>
    </body>
</html>
