<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIL</title>
    <style>
        h1 {
            color: rgb(20, 2, 61);
            font-size: 50px;
            text-align: center;
            margin-top: 50px;
        }

        .contain{
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
        }

        div {
            padding: 10px;
        }

        label {
            font-size: 30px;
            padding-right: 30px;
        }

        input {
            font-size: 20px;
            width: 600px;
        }
        textarea{
            font-size: 20px;
            width: 620px;
        }

        button {
            background: rgb(5, 219, 23);
            font-size: 20px;
            height: 50px;
            width: 120px;
        }

        p {
            font-size: x-large;
        }

        .card {
            box-shadow: rgba(231, 3, 3, 0.2);
            transition: 0.2s;
            height: 1000;
            width: 1200px;
            overflow: hidden;
            display: flex;
            margin-top: 10px;
            margin-bottom: 30px;
            flex-direction: column;
            justify-content: space-around;
            /* align-items: flex-end; */
            border-radius: 30px;
            text-align: center;
        }
        .alert-success{
            background-color: yellowgreen;
            box-shadow: rgb(0, 204, 0);
            padding: 10px;
            border-radius: 30px;
            width: fit-content;
            color: black;
            /* text-align: center; */
            align-items: center; 
            font-size: 30px;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 5);
            transform: scale(1.1);
        }
    </style>
</head>

<body style="background-image: url('https://lukewickstead.files.wordpress.com/2010/12/debianflow.png');">
    <div align=center class="contain">
        <div class="card">
            <?php if(session('status')): ?>
            <div style="text-align: center; margin-left:400px;" class="alert-success">
                <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            <form action="send-email" method="get" align="center">

                <h1>Sending Mail..!!</h1> 
                <div>
                    <label for="mailto"><b>Mail To</b></label>
                    <input type="text" placeholder="Mail to" name="mailto" required>
                </div>
                <div>
                    <label for="subject"><b>Subject</b></label>
                    <input type="text" placeholder="Subject" name="title" required>
                </div>
                <div>
                    <label for="body"><b>E-mail</b></label>
                    <!-- <textarea rows="5" columns="500" name="body" ></textarea> -->
                    <textarea name="body" rows="5" columns="200" ></textarea>
                    <!-- <input type="text-area" rows=10 columns=20 placeholder="" name="body" required> -->
                </div>
                <div>
                    <button style="background:rgb(5, 219, 23);" type="submit">Send Mail</button>
                    
                </div>
            </form>
        </div>

        

</body>

</html><?php /**PATH C:\xampp\htdocs\laravelApps\lab8\resources\views/mail.blade.php ENDPATH**/ ?>