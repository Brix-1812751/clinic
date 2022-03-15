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
			<a href="{{route('admins.index')}}" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i>Back</a>
				<div class= "" style="margin-top:20px;">
					<h4>Add Diagnosis</h4>
					<hr>
					<form action="{{ route('diagnosis.store')}}"  method="POST">
					<!-- @if(Session::has('success'))
					<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif
					@if(Session::has('fail'))
					<div class="alert alert-danger">{{Session::get('fail')}}</div>
					@endif -->

						@csrf
						
                         <div class="form-group">
						 <label for="name">User_id
								</label>	
								<input type="text" class="form-control" name="user_id" value="{{old('$uadd')}}" placeholder="Enter Diagnosis">
								<span class="text-danger">@error('uadd'){{$message}} @enderror</span>
								<br>
								<label for="name">Diagnosis
								</label>	
								<input type="text" class="form-control" name="diagnosis" value="{{old('$diag')}}" placeholder="Enter Diagnosis">
								<span class="text-danger">@error('diag'){{$message}} @enderror</span>

								
						</div>
						<br>
						<div class="form-group">
							<button class= "btn btn-block btn-primary" type="submit">Add Diagnosis</button>

						</div>
					
						</div>
						<br>
					
					</form>
				</div>
			</div>
		</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>