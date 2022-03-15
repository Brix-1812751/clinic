<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Custom Authentication</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="/css/style1.css">

</head>
<body>
		<div class ="container">
			<div class="row">
				<div class= "" style="margin-top:20px;">
					<h4>Add Student</h4>
					<hr>
					<form action="{{route('admins.store')}}"  method="POST">
					<!-- @if(Session::has('success'))
					<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif
					@if(Session::has('fail'))
					<div class="alert alert-danger">{{Session::get('fail')}}</div>
					@endif -->

						@csrf
            <div class="form-group">
								<label for="name">Full Name
								</label>	
								<input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Full  Name">
								<span class="text-danger">@error('name'){{$message}} @enderror</span>
						</div>

						<div class="form-group">
								<label for="email">Email
								</label>	
								<input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Full  email">
								<span class="text-danger">@error('email'){{$message}} @enderror</span>
						</div>

						<div class="form-group">
								<label for="password">Password
								</label>	
								<input type="password"  class="form-control" name="password" value="{{old('password')}}" placeholder="Enter Password">
								<span class="text-danger">@error('password'){{$message}} @enderror</span>
						</div>
						<div class="form-group">
							<button class= "btn btn-block btn-primary" type="submit">Add Student</button>

						</div>
						<br>
					
					</form>
				</div>
			</div>
		</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>