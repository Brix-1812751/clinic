<!DOCTYPE html>
<html>
<head >
	<title>Infirmary Management System</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style2.css" rel="stylesheet" type="text/css"  media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body >
	<div class="wrap" >
		<?php echo "<h1 >Welcome to Admin</h1>"; ?>
    <a href="{{route('home.index')}}">Logout</a>
    <br></br>
	<a href="{{route('home.index')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i>Home</a>
	

  <a href="{{route('admins.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Add New Student</a>
	<a href="{{route('diagnosis.create')}}" title='Add Diagnosis' class="btn btn-primary"><i class="fa fa-plus"></i>Add Diagnosis</a>

  <br></br>

  <!--<a href="#" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print PDF</a>-->

  <hr>

		<table class="table table-bordered table-striped table-hover" >
		<thead>
			<tr>
				<th class="text-center" scope="col">Student ID</th>
				<th class="text-center" scope="col">Name</th>
				<th class="text-center" scope="col">Email</th>
				<th class="text-center" scope="col">Delete Student</th>
			</tr>
		</thead>
	@if(count($students)>0)
	@foreach($students as $student)
				<td class='text-center'>{{$student['id']}}</td>
				<td class='text-center'>{{$student['name']}}</td>
				<td class='text-center'>{{$student['email']}}</td>

				<td class='text-center'>
					<span>
					<a href="{{ url('delete-student/'.$student->id) }}" class="btn btn-danger btn-sm">Delete</a>
						<!-- <a href="admins.destroy. $student->id" class='btn btn-danger deleteuser' title='Delete'>
						     <i class='fa fa-trash-o fa-lg'  style='' aria-hidden='true'></i>
						</a> -->
					</span>
				</td>
		</tr>
		@endforeach
		@endif
		</table>
</hr>
	




<!--VIEW-->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>



</body>
</html>
