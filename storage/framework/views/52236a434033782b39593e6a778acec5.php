<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            
        }

        .container {
            display: flex;
            background: #fff;
            border-radius: 15px;
            box-shadow: 15px 20px 15px rgba(0, 0, 0, 0.1);
        }

       

        form {
            margin: 90px auto;

        }

        h2 {
            margin: 10px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
        }

        hr {
            border-top: 3px solid #807e7c;
        }

        p {
            text-align: center;
            margin: 10px;
        }

        form label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
        }

        input {
            width: 100%;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid gray;
        }


        button {
            border: none;
            outline: none;
            padding: 8px;
            width: 252px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #807e7c;
        }

        button:hover {
            background: #30302f;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container w-50">
        <div class="vstack gap-3 col-md-1 mx-auto">
            <form action="" class="text-center">
                <h2>Login</h2>
                <hr>
                <label for="username" class="text-center ">Username</label>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

                <label for="inputPassword5" class="form-label mt-2">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <button type="button" class="btn btn-secondary mt-4">Login</button>

            </form>

        </div>
    </div>












</body>

</html><?php /**PATH E:\program\latihan_laravel\resources\views/login.blade.php ENDPATH**/ ?>