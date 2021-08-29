@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <title>Student Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://f@extends('layouts.app')onts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/mystyle.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>
<body>
    <img src="images/img2.jpg" height="180%" width="100%">
	<div class="contact-form">
		<img alt="" class="avatar" src="images/img3.jpg">
		<h2>educational Information</h2>
		<form action="{{ route('save2') }}" method="post">
            @csrf
			<div class="form-group">
                <p for="full name">Full Name</p>
                <input type="text" class="form-control" name="firstname" id="fullname">
            </div>
            <div class="form-group">
                <p for="Qualification" name="qualification">Qualification:</p>
            </div>
            <div class="form-group">
                <select class="custom-select" name="qualification" id="select1">
                    <option value="X">X</option>
                    <option value="XII">XII</option> 
                    <option value="Graduate">Graduate</option> 
                    <option value="Masters">Master</option> 
                </select>
            </div>
            <div class="form-group">
                <p for="full name" name="comp">Completed/Continued</p>
                <select class="custom-select" name="course" id="select">
                    <option value="completed">completed</option>
                        <option value="continued">continued</option> 
                </select>         
            </div>
            <input type="submit" value="Sign in"> 
		</form>
	</div>
</body>
</html>

@endsection
