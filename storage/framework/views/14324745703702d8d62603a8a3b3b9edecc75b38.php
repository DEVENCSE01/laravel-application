<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <style>
        label {
            font-size: 30px;
            padding-right: 30px;
        }
        .alert-warn{
            background-color: rgb(255, 212, 82);
            padding: 5px;
            width: fit-content;
            color: black;
            text-align: center;
            margin-left: 150px;
        }
        .alert-success{
            background-color: yellowgreen;
            padding: 10px;
            width: fit-content;
            border-radius: 20px;
            color: black;
            text-align: center;
            font-size: 30px;
        }
        .alert-error{
            background-color: rgb(255, 80, 80);
            padding: 10px;
            width: fit-content;
            color: black;
            text-align: center;
            font-size: 30px;
        }
        div {
            padding: 20px;
        }
        input {
            font-size: 20px;
        }
        button {
            background: rgb(5, 219, 23);
            font-size: 20px;
            height: 50px;
            width: 120px;
        }
        .card {
            box-shadow: rgba(231, 3, 3, 0.2);
            transition: 0.2s;
            height: 300px;
            width: 600px;
            overflow: hidden;
            display: flex;
            margin-top: 100px;
            margin-bottom: 30px;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            border-radius: 30px;
            text-align: center;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 5);
            transform: scale(1.1);
        } 
    </style>
</head>

<body style="background-image: url('https://lukewickstead.files.wordpress.com/2010/12/debianflow.png');">
    <div align='center'>
    <?php if(session('status')): ?>
    <div class="alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <?php if($errors -> any()): ?>
    <div class="alert-error">
        Error/Incorrect input file
    </div>
    <?php endif; ?>
        <div class="card">
            <form action="<?php echo e(url('store-image')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div>
                    <h1>Choose the image file to upload</h1>
                </div>
                <div>
                    <input type="file" name="image" multiple>
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert-warn"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <button type="submit" value="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\laravelApps\lab8\resources\views/uploadImage.blade.php ENDPATH**/ ?>