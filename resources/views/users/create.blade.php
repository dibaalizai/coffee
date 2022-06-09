<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Edit Index</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	<body>
		@section('content')


<body>
    
    <h1 class="text-primary" style="margin: 40px; text-align: center;">Create New Member</h1>

 
    <div style="text-align: center";>
   
        <div class="form-inline justify-content-center">
            
            <form action="/users" method = "POST"> 
                @csrf
               
                <input type="text" name="first_name" placeholder="first name"/>
                <br><br>
                <input type="text" name="last_name" placeholder="last name"/>
                <br><br>
                <input type="text" name="street_name" placeholder="street_name"/>
                <br><br>
                <input type="text" name="city" placeholder="city"/>
                <br><br>
                <input type="text" name="postal_code" placeholder="postal_code"/>
                <br><br>
                <input type="text" name="phone" placeholder="phone"/>
                <br><br>
                <input type="text" name="date_of_birth" placeholder="date_of_birth"/>
                <br><br>
                <input type="text" name="email" placeholder="email"/>
                <br><br>
                <input type="text" name="password" placeholder="password"/>
                <br><br>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form> 

    </div>
</div>







	@endsection	
</body>
</html>