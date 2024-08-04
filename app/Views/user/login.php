<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">

    <title>Login</title>






    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




    <style>
        a {
            text-decoration: none;
        }

        body {
            background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
            background-repeat: no-repeat;
        }

        label {
            font-family: "Raleway", sans-serif;
            font-size: 11pt;
        }

        #forgot-pass {
            color: #2dbd6e;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 3px;
            text-align: right;
        }

        #card {
            background: #fbfbfb;
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 410px;
            margin: 6rem auto 8.1rem auto;
            width: 329px;
        }

        #card-content {
            padding: 12px 44px;
        }

        #card-title {
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 4px;
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;
        }

        #signup {
            color: #2dbd6e;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 16px;
            text-align: center;
        }

        #submit-btn {
            background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #24c64f;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
        }

        #submit-btn:hover {
            box-shadow: 0px 1px 18px #24c64f;
        }

        .form {
            align-items: left;
            display: flex;
            flex-direction: column;
        }

        .form-border {
            background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
            height: 1px;
            width: 100%;
        }

        .form-content {
            background: #fbfbfb;
            border: none;
            outline: none;
            padding-top: 14px;
        }

        .underline-title {
            background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
            height: 2px;
            margin: -1.1rem auto 0 auto;
            width: 89px;
        }
    </style>


    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">

</head>

<body class="text-center">

    <main class="form-signin">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/UserController/process">
            <div id="card">
                <div id="card-content">
                    <div id="card-title">
                        <h2>LOGIN</h2>
                        <div class="underline-title"></div>
                    </div>
                    <form method="post" class="form">
                        <label for="user-email" style="padding-top:13px">

                        </label>
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
                        <div class="form-border"></div>
                        <label for="user-password" style="padding-top:22px">
                        </label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                        <div class="form-border"></div>
                        <a href="#">
                            <legend id="forgot-pass">Forgot password?</legend>
                        </a>
                        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                        <br><a href="register" id="signup">Don't have an account yet?</a>
                    </form>
                    <br><a href="/" class="submit-btn">Home</a>

                </div>
            </div>


            <p class="mt-5 mb-3 text-muted">&copy; MovieLAB</p>

    </main>



</body>

</html>