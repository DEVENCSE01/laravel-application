<!DOCTYPE html>
<html>

<head>
    <title>Form Validation</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        h1 {
            color: rgb(20, 2, 61);
            font-size: 50px;
            text-align: center;
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
        }
        button {
            background: rgb(5, 219, 23);
            font-size: 20px;
            height: 50px;
            width: 120px;
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
            color: black;
            text-align: center;
            font-size: 30px;
        }
        .alert-error{
            background-color: rgb(255, 80, 80);
            padding: 10px;
            border-radius: 20px;
            width: fit-content;
            color: black;
            text-align: center;
            font-size: 30px;
        }
        .cardme {
            box-shadow: rgba(231, 3, 3, 0.2);
            transition: 0.2s;
            height: fit-content;
            width: 600px;
            overflow: hidden;
            display: flex;
            margin-top: 10px;
            margin-bottom: 30px;
            flex-direction: column;
            justify-content: space-around;
            border-radius: 30px;
            text-align: center;
            align-items: center;
        }

        .cardme:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 5);
            transform: scale(1.1);
        }
    </style>
</head>

<body style="background-image: url('https://lukewickstead.files.wordpress.com/2010/12/debianflow.png');">
    <div align='center' style="margin-top: 100px;">
        <?php if(session('status')): ?>
        <div class="alert-success">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
        <?php if($errors -> any()): ?>
        <div class="alert-error">
            Oops..! an error occured
        </div>
        <?php endif; ?> 
        <div class="cardme" style="border: none;">
            <h1 style="text-align: center;">FORM VALIDATION</h1>
                <form name="employee" id="employee" method="post" action="<?php echo e(url('store-form')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-item">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" id="name" name="name" class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control">
                        <?php $__errorArgs = ['name'];
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
                    <div class="form-item">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" id="email" name="email" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control">
                        <?php $__errorArgs = ['email'];
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
                    <div class="form-item">
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="number" id="contact_no" name="contact_no" class="<?php $__errorArgs = ['contact_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control">
                        <?php $__errorArgs = ['contact_no'];
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
                    <button type="submit">Submit</button>
                </form>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravelApps\lab8\resources\views/form.blade.php ENDPATH**/ ?>