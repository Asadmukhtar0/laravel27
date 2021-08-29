@extends('layouts.app')
@section('title','adshajg')
@section('content')

   	<form action="{{route('save')}}" method="post">
		            @csrf
    	<img src="images/img2.jpg" height="180%" width="100%">
			<div class="contact-form">
				<img alt="" class="avatar" src="images/img3.jpg">
				<h2>Personal Information</h2>
		        <div class="container">
					<p>First name</p>
		            <input placeholder="First name" type="text" class="form-control" name="firstname">
					<p>Last name</p><input placeholder="Last Name" type="text" class="form-control" name="lastname">
					<p>Phone</p><input placeholder="phone" type="number" class="form-control" name="phone">
		            <p>address</p><input placeholder="address" type="text" class="form-control" name="address">
					<p>Email</p><input placeholder="Email" type="email" class="form-control" name="email">
			</div>
			<div class="form-group">
          <p for="full name">Full Name</p>
          <input type="text" class="form-control" name="fname" id="fullname">
      </div>
      <div class="form-group">
          <p for="Qualification" name="qualification">
          	Qualification:
          </p>
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
          	<input type="submit" value="submit" class="btn btn-danger">
		</form>
    	</div>
@endsection
