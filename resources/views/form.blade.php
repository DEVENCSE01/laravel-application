<!DOCTYPE html>
<html>

<head>
    <title>Form Validation</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        @if(session('status'))
        <div class="alert-success">
            {{ session('status') }}
        </div>
        @endif
        @if ($errors -> any())
        <div class="alert-error">
            Oops..! an error occured
        </div>
        @endif 
        <div class="cardme" style="border: none;">
            <h1 style="text-align: center;">FORM VALIDATION</h1>
                <form name="employee" id="employee" method="post" action="{{url('store-form')}}">
                    {{ csrf_field() }}
                    <div class="form-item">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control">
                        @error('name')
                        <div class="alert-warn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-item">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control">
                        @error('email')
                        <div class="alert-warn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-item">
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="number" id="contact_no" name="contact_no" class="@error('contact_no') is-invalid @enderror form-control">
                        @error('contact_no')
                        <div class="alert-warn">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit">Submit</button>
                </form>
        </div>
    </div>
</body>

</html>