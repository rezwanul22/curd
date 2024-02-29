<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Opration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a href="{{ url('/') }}" class="btn btn-primary my-3">Show Data</a>

        <form action="{{ url('/store-data' )}}"method='post'>
            @csrf
            <div class="fbrm-grop">
                <label  for="">Name</label>
                <input type="text" class="form-control" name='name' placeholder="Enter your name">

                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="fbrm-grop">
                <label  for="">Email</label>
                <input type="text" class="form-control" name='email' placeholder="Enter your email">

                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <input type="submit" class="btn btn-primary my-3" value="Submit">
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>
