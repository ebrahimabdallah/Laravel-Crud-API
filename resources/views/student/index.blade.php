<!DOCTYPE html>
<html>
<head>
  <title>Student Information</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table td, table th {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    table th {
      background-color: #f2f2f2;
    }

    .student-image {
      max-width: 100px;
      max-height: 100px;
    }
  </style>
</head>
<body>
  <h2>Student Information</h2>
  <a href="{{ url('student/create') }}">
    <button class="btn btn-primary">Add</button>
  </a>

  

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->address }}</td>
            <td>
                <a href="{{ route('student.show', $student->id) }}" class="btn btn-xs">View</a>
                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-xs">Edit</a>
                <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-xs">Delete</button>
                </form>            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
</body>
</html>