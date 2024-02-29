<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud opration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a href="{{ url('/add-data') }}" class="btn btn-primary my-3">Add Data</a>

        @if(Session::has('msg'))
        <p class="alart alart-success">{{ Session::get('msg') }}</p>
        @endif

        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($showData as $key=>$data )
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <a href="{{ url('edit-data/'.$data->id) }}"class="btn btn-success">Edit</a>
                        <a href="{{ url('delete-data/'.$data->id) }}"class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

          </table>
          {{ $showData->links() }}
    </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
