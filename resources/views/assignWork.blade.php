<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <title>New Assignment</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <style>
        label {
            font-size: 20px;
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
            padding: 10px;
        }
        input {
            font-size: 17px;
            width: 500px;
            height: 30px;
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
    @if(session('status'))
    <div class="alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if ($errors -> any())
    <div class="alert-error">
        Oops..No Task Assigned
    </div>
    @endif
        <div class="card">
            <form name="assignment" action="{{url('store-task')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div>
                    <h1 style="font-size: 50px;">Upload New Assignment</h1>
                </div>
                <div>
                    <!-- <div>
                        <label>Task TO-Do</label>
                    </div> -->
                    <input type="text" name="assignment" multiple>
                    @error('assignment')
                    <div class="alert-warn">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" value="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>