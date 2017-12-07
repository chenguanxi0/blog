
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">

    <meta name="description" content="">

    <title>Yo!</title>
    <link rel="shortcut icon" href="/images/ico/basketball.ico">

    <link rel="stylesheet" href="/css/home.css">

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }
        #particles {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .full-height {
            background-color: #fff;
            color: #6289ad;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
            overflow: hidden;
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

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            z-index: 100;
            margin-bottom: 15vh;
        }

        .title {
            font-size: 84px;
        }

        .description {
            margin: 30px 0;
            font-size: 24px;
            font-weight: bold;
        }

        .links > a {
            color: #9caebf;
            padding: 0 25px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a:hover {
            color: #52697f;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .avatar {
            width: 120px !important;
        }
    </style>

    <style>
        .login-form {
            background: #2b2b36;
            position: relative;
            width: 30%;
            margin: 3% auto 0 auto;
            text-align: center;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -o-border-radius: 15px;
        }
        .head img {
            width: 100%;
        }
        .avtar img {

            border-radius: 70px;
            margin: 2em 0 0;
        }
        .head-info {
            padding: 5px 0;
            text-align: center;
            font-weight: 600;
            font-size: 2em;
            color: #fff;
            background: #23232e;
            height: 50px;
            border-top-left-radius: 10px;
            -webkit-border-top-left-radius: 10px;
            -moz-border-top-left-radius: 10px;
            -o-border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            -webkit-border-top-right-radius: 10px;
            -moz-border-top-right-radius: 10px;
            -o-border-top-right-radius: 10p
        }
        input[name="phone"] {
            width: 70%;
            padding: 1em 2em 1em 3em;
            color: #9199aa;
            font-size: 18px;
            outline: none;
            background: url(../images/phone.png) no-repeat 10px 15px;
            border: none;
            font-weight: 100;
            border-bottom: 1px solid#484856;
            margin-top: 2em;
        }
        input[name="password"] {
            width: 70%;
            padding: 1em 2em 1em 3em;
            color: #dd3e3e;
            font-size: 18px;
            outline: none;
            background: url(../images/key.png) no-repeat 10px 23px;
            border: none;
            font-weight: 100;
            border-bottom: 1px solid #484856;
        }

        input[type="submit"]{
            font-size: 30px;
            color: #fff;
            outline: none;
            border: none;
            background: #3ea751;
            width: 100%;
            padding: 18px 0;
            border-bottom-left-radius: 15px;
            -webkit-border-bottom-left-radius: 15px;
            -moz-border-bottom-left-radius: 15px;
            -o-border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            -webkit-border-bottom-right-radius: 15px;
            -moz-border-bottom-right-radius: 15px;
            -o-border-bottom-right-radius: 15px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #ff2775;
            border-bottom-left-radius: 15px;
            -webkit-border-bottom-left-radius: 15px;
            -moz-border-bottom-left-radius: 15px;
            -o-border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            -webkit-border-bottom-right-radius: 15px;
            -moz-border-bottom-right-radius: 15px;
            -o-border-bottom-right-radius: 15px;
            transition: 1s all;
            -webkit-transition: 1s all;
            -moz-transition: 1s all;
            -o-transition: 1s all;
        }
        label.lbl-1 {
            background: #6756ea;
            width: 20px;
            height: 20px;
            display: block;
            float: right;
            border-radius: 50%;
            margin: 16px 10px 0px 0px;
        }
        label.lbl-2 {
            background: #ea569a;
            width: 20px;
            height: 20px;
            display: block;
            float: right;
            border-radius: 50%;
            margin: 16px 10px 0px 0px;
        }
        label.lbl-3 {
            background: #f1c85f;
            width: 20px;
            height: 20px;
            display: block;
            float: right;
            border-radius: 50%;
            margin: 16px 10px 0px 0px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div id="particles"></div>

        <div class="login-form">
            <div class="close"> </div>
            <div class="head-info">
                <label class="lbl-1"> </label>
                <label class="lbl-2"> </label>
                <label class="lbl-3"> </label>
            </div>
            <div class="clear"> </div>
            <div class="avtar">
                <img src="images/avtar.png"/>
            </div>
            <form  action="/login" method="post">
                {{csrf_field()}}
                <input name="phone" type="text" class="text" placeholder="Username"  >

                <input name="password" type="password" placeholder="Password"  >
                <br>
                <label >
                    <input type="checkbox" value="1" name="is_remember"> 记住我
                </label>
            <h4 ><a href="/register">还没注册呢-></a></h4>
            <div class="signin">
                <input type="submit" value="Login" >
            </div>
            </form>
            @include('layout.errors')
        </div>

</div>

<script src="//cdn.bootcss.com/particles.js/2.0.0/particles.min.js"></script>

<script>
    particlesJS("particles", {
        "particles": {
            "number": {
                "value": 10,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#52697f"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.1,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 20,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 20,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 1000,
                "color": "#52697f",
                "opacity": 0.2,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 4,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>
</body>
</html>