<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Drag and Drop File Upload with Dropzone JS - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <style>
        .alert-success{
            background-color: yellowgreen;
            padding: 10px;
            width: fit-content;
            color: black;
            border-radius: 30px;
            text-align: center;
            font-size: 30px;
        }
        .dropzone{
            background: none;
        }
    </style>
</head>
<body style="background-image: url('https://lukewickstead.files.wordpress.com/2010/12/debianflow.png');">
<!-- <body> -->
<div style="margin-top: 200px;">
    <div class="container">
        @if(session('status'))
        <div style="text-align: center;" class="alert-success">
        {{ session('status') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h1>Dropzone file uploadation</h1>
        
                <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                    @csrf
                    <div>
                        <h4>Drag and drop a file here</h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
     
<script type="text/javascript">
  
        Dropzone.autoDiscover = false;
  
        var dropzone = new Dropzone('#image-upload', {
            //   thumbnailWidth: 200,
              maxFilesize: 100,
              acceptedFiles: ".csv,.txt,.xlsx,.pdf,.docx"
            //   acceptedFiles: ".pdf,.docx,.clsx,.jpeg,.jpg,.png,.gif"
            });
  
</script>
    
</body>
</html>