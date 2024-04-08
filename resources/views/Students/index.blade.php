<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <h1>List of Student</h1>
    <ul>
        @foreach ($students as $student)

        <li>{{ $student }}</li>

        @endforeach
    </ul>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>$first_name</td>
            <td>$last_name</td>
            <td>$email</td>
          </tr>
        </tbody>
      </table>
</body>
</html>
