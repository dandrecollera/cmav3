<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <script src="js/mdb.min.js"></script>
    <link rel="stylesheet" href="/css/mdb.min.css">

    <style>
        *{
            font-family: 'Poppins', 'sans-serif';
        }
        .wrapper{
            background: #809fc4ce;
            padding: 0 20px 0 20px;
        }
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .row{
            width: 900px;
            height: 550px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.2);

        }
        .side-image{
            background-image: url("/img/cma3.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            border-radius: 10px 0 0 10px
            
        }
        img{
            width: 35px;
            position: absolute;
            top: 30px;
            left: 30px;

        }
        .text{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        .text p{
            color: #fff;
            font-size: 18px;
        }
        .right{
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .input-box{
            width: 330px;
            box-sizing: border-box;
        }
        .input-box header{
            font-weight: 700;
            text-align: center;
            margin-bottom: 45px;
        }
        .input-field{
            display: flex;
            flex-direction: column;
            position: relative;
            padding: 0 10px 0 10px;
        }
        .input{
            height: 45px;
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(0,0,0,0.2);
            outline: none;
            margin-bottom: 20px;
            color: #343437
        }
        .input-box .input-field label{
            position: absolute;
            top: 10px;
            left: 10px;
            pointer-events: none;
            transition: .5s;
        }
        .input-field .input:focus ~ label{
            top: -10px;
            font-size: 13px;
        }
        .input-field .input:valid ~ label{
            top: -10px;
            font-size: 13px;
            color: #343437
        }
        .input-field .input:focus, .input-field .input:valid{
            border-bottom: 1px solid #100384
        }
        .submit{
            border: none;
            outline: none;
            height: 45px;
            background: #ececec;
            border-radius: 5px;
            transition: .4s;
        }
        .submit:hover{
            background: rgba(37,95,156,0.9);
            color: #fff
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <div class="text">
                    </div>
                </div>
            <div class="col-md-6 right">
                <div class="input-box">
                    <header style="font-size: 20px;">Login your Account</header>
                    <div class="input-field">
                        <input type="text" class="input" id="email" required autocomplete="on">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input" id="pass" required>
                        <label for="pass">Password</label>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="submit" value="Log in">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>