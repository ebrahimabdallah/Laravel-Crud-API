<!DOCTYPE html>
<html>
<head>
  <title>Student Form</title>
  <style>
    .form-container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="number"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group input[type="file"] {
      margin-top: 5px;
    }

    .form-group textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group button {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Add Student</h2>
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
      <div class="form-group">
        <label for="name">Student Name:</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
      </div>
 

      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>      </div>

      <div class="form-group">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>