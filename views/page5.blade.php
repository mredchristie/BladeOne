@extends('app')

@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="petstuff.php" method="post">
	
		<p> Enter Pet Name: <input type="text" name="name" /> </p>
		<p> Enter Pet Age: <input type="text" name="age" /> </p>
		<p> Enter Pet Type: <input type="text" name="type" /> </p> 
        <input type="submit" name="submit"/>
	
	</form>

    
</body>
</html>

@endsection
