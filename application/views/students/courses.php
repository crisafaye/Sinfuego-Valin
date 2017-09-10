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
				<a href="index" class="btn btn-primary btn-block">Home</a>
			</div>
			<div class="">
				<a href="students" class="btn btn-primary btn-block">Student</a>
			</div>
			 <div class="">
				<a href="courses" class="btn btn-info active btn-block">Courses</a>
			</div>
		</div>
		<div class="col-md-9 contents">
			<h1>Students - Courses List</h1>
		<div class="col-md-9">
			<table class="table table-stripped">
			<thead>
					<tr>
							<th>COURSE ID</th>
							<th>COURSE</th>
							<th>COURSE DES</th>
							

					</tr>
			</thead>
			<tbody>
				<?php
						foreach($course as $s){
							echo'	<tr>
								<td>'.$s['cno'].'</td>
								<td>'.$s['course'].'</td>
								<td>'.$s['des'].'</td>
									
						</tr>
						';	
								
							
							
				}
				?>
				</tbody>
			</table>
		</div>
		<div class="">
				<a href="add_course" class="btn btn-primary">Add Course</a>
			</div>
	
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			<p> footer </p>
		</div>
	</div>
</div>
