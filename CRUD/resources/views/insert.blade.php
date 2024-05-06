<!DOCTYPE html>
<html lang="en">
<head>

    <title>Insert Data</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif

        <div class="container">
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif
        </div>



        <h2>Insert the Tasks</h2>
        <form method="POST" action="{{ url('add-task') }}" enctype="multipart/form-data">
            @csrf
          <div class="mb-3 mt-3">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
          </div>
          <div class="mb-3">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
          </div>
          <div class="mb-3">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" placeholder="Enter status" name="status">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

          <a href="{{ url('show-tasks') }}" class="btn btn-info" role="button">Show Tasks</a>

        </form>
      </div>
</body>
</html>
