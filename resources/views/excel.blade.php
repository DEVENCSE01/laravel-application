<!DOCTYPE html>
<html>

<head>
    <title>Import Export Excel to Database</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<style>
    .container {
        margin: auto;
        margin-top: 100px;
    }

    button {
        background: rgb(153, 255, 102);
        font-size: 20px;
        height: 45px;
        width: 150px;
        text-align: center;
        align-items: center;
    }

    button:hover {
        background: rgb(5, 219, 23);
    }

    input {
        margin: 5px 2px;
        font-size: 20px;
        height: 30px;
        width: 300px;
    }

    p {
        background-color: rgb(255, 153, 102);
        padding: 5px;
        margin: 5px 300px;
        height: 35px;
        width: 150px;
        font-size: 30px;
    }

    a {
        text-decoration: none;
    }

    p:hover {
        background-color: rgb(204, 51, 0);
    }

    .card {
        box-shadow: rgba(231, 3, 3, 0.2);
        border: solid black;
        height: fit-content;
        width: 800px;
        padding-bottom: 10px;
        border-radius: 30px;
        text-align: center;
        align-items: center;
        justify-content: space-around;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 5);
        transform: scale(1.1);
    }

    .alert-success {
        background-color: yellowgreen;
        padding: 10px;
        width: fit-content;
        border-radius: 30px;
        color: black;
        margin-left: 200px;
        text-align: center;
        font-size: 30px;
    }
</style>

<body style="background-image: url('https://lukewickstead.files.wordpress.com/2010/12/debianflow.png');">

    <div class="container" align=center>
        <div class="card">
            @if(session('status'))
            <div class="alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div>
                <h1 style="font-size: 40px;">Import Excel data to Database</h1>
                </div>
                <div>
                    <form action="{{ route('data.import') }}" method="POST" align="center" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file">
                    <button style="margin: left 20px;" type="submit">IMPORT</button>
                </form>
                
                <div>
                    <h1 style="font-size: 40px;">Export Excel file from Database</h1>
                </div>

                <div class="export">
                    <p>
                        <a href="{{ route('data.export') }}">EXPORT</a>
                    </p>
                </div>

            </div>

        </div>
    </div>

</body>

</html>