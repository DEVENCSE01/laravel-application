<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            box-shadow: rgba(231, 3, 3, 0.2);
            transition: 0.2s;
            height: 300px;
            width: 600px;
            overflow: hidden;
            display: flex;
            margin-top: 100px;
            padding-top: 50px;
            flex-direction: column;
            border-radius: 30px;
            align-items: center;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 5);
            transform: scale(1.1);
        }
    </style>
</head>
<body style="background-image: url('https://lukewickstead.files.wordpress.com/2010/12/debianflow.png');">
    <div align='center'>
        <div class="card">
            <h1>Welcome Deven...!!</h1>
            <h1>This is your first laravel program</h1>
        </div>
    </div>
</body>
</html>