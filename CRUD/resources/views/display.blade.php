<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Tasks Table</h2>
  <p>Show Daily tasks for usesers:</p>
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
  <a href="{{ url('add-task') }}" class="btn btn-info" role="button">Add Tasks</a>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Descriptions</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($task as $tasks )
      <tr>
        <td>{{ $tasks->id }}</td>
        <td>{{ $tasks->title }}</td>
        <td>{{ $tasks->description }}</td>
        <td>{{ $tasks->status }}</td>
        <td>
            <a href="{{ url('edit-task/'.$tasks->id) }}" class="btn btn-primary btn-sm">Edit</a>
        </td>
        <td>
            <a href="{{ url('delete-task/'.$tasks->id) }}" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
