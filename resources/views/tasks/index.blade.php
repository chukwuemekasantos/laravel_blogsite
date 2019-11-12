<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    Welcome to 
      <p>
        @foreach($task as $tasks)
            <li><a href="tasks/{{$tasks->id}}">{{$tasks->body}}</a></li>
        @endforeach;
    </p>
</body>
</html>