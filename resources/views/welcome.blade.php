
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
@foreach($tasks as $task)
	<p><a href="/task/{{ $task->id }}">{{ $task->body }}</a></p>
	@endforeach
</body>
</html>