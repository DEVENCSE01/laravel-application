<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <title>To-Do list</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <style>
        input {
            font-size: 17px;
            /* width: 500px; */
            height: 30px;
            margin-left: 50px;
        }

        h1 {
            font-size: 40px;
        }

        td {
            font-size: 30px;
        }

        button {
            background: rgb(5, 219, 23);
            font-size: 20px;
            height: 50px;
            width: 120px;
        }
        .alert-success{
            background-color: yellowgreen;
            padding: 10px;
            width: fit-content;
            border-radius: 30px;
            color: black;
            /* text-align: center; */
            align-items: center;
            font-size: 30px;
        }
        .card {
            align-items: center;
            /* text-align: left; */
            margin-top: 100px;
        }
    </style>
</head>

<body style="background-image: url('https://lukewickstead.files.wordpress.com/2010/12/debianflow.png');">
    <div align='center'>
        <div class="card">
            @if(session('status'))
            <div style="text-align: center;" class="alert-success">
                {{ session('status') }}
            </div>
            @endif
            @if (count($tasks) > 0)

            <h1 style="text-align: center;">Tasks that are pending To-Do</h1>


            <table align="center">

                <!-- Table Headings -->
                <!-- <thead>
                      <th>Task</th>
                      <th> </th>
                  </thead> -->

                <!-- Table Body -->

                @foreach ($tasks as $task)
                <tr>
                    <!-- Task Name -->
                    <td>
                        <div style="text-align: left;">{{ $task->Task }}</div>
                    </td>

                    <td>
                        <form action="{{ url('task/'.$task->id) }}" method="get">
                        <input type="file" name="file" required>
                    </td>

                    <td>
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}

                            <button>Submit</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>


            @endif
        </div>
    </div>
</body>

</html>