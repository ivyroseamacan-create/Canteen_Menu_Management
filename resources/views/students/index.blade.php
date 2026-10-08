<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Student list</h1>

    <ul>
    @foreach ($students as $student)
         <li>{{$student->name}}</li>
    @endforeach
    </ul>
</body>
</html>