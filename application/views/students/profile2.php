<div class= "container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> Student Management System </h1>
		</div>
	</div>
	<div class="row">
		<div class = "col-md-3">
			<center><h1 class= "lead"> Menu </h1></center>
			<div class="">
				<a href="index" class="btn btn-info active btn-block">Home</a>
			</div>
			 <div class="">
				<a href="students" class="btn btn-primary btn-block">Student</a>
			</div>
			 <div class="">
				<a href="courses" class="btn btn-primary  btn-block">Courses</a>
			</div>
		</div>
		<div class="col-md-9 contents">
			<h1>Students - Student Info</h1>
		<div>

	
	<div class="">
		<p><b>ID No: </b><?php echo $student[0]['idno']; ?></p>
		<p><b>Name: </b><?php echo $student[0]['lname'].', '.$student[0]['fname'].' '.$student[0]['mname']; ?></p>
		<p><b>Course: </b><?php echo $student[0]['course']; ?></p>
		<p><b>Sex: </b><?php echo $student[0]['sex']; ?></p>
		
	</div><div class="">
				<a href="students" class="btn btn-primary btn-lg">Back</a>
			</div>
	
</div>

	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			<p> footer </p>
		</div>
	</div>
</div>
