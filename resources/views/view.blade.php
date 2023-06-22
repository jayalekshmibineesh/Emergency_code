
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('view') }}">view</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
    </ul>
   </div>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
            <table class="table table-bordered table-danger table-stripped">
    <tr>
        <th>Employee name</th>
        <th>Place</th>
        <th>email</th>
        <th colspan="2"> Action</th>
    </tr>
    
  @foreach($view as $views)
  <tr> 
    <td>{{ $views->employee_name }}</td>
    <td> {{ $views->place }}</td>
    <td>{{ $views->email }}</td>
    <td><a  class="btn btn-primary"href="{{route('edit',$views->id)}}">Edit</a></td>
   <td><a class="btn btn-primary" href="{{route('delete',$views->id)}}">delete</a></td>
    </tr>
    @endforeach

</table>

</div>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>