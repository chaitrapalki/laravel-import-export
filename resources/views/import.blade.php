<!DOCTYPE html>
<html>
<head>
    <title>laravel Import/Export</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
          <h2>Laravel Import/Export Example</h2>
          @if (session('alert'))
			     <p class="alert alert-success alert success">{{ session('alert') }}</p>
			     @endif
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control" ><br>
                <button class="btn btn-success">Import User Data</button>

                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
            </form>
        </div>
    </div>
</div>
<script>
$(function() {
    var timeout = 3000;
    $('.success').delay(timeout).fadeOut(1000);
  });
</script>
</body>
</html>
