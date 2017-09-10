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
				<a href="students" class="btn btn-info active btn-block">Student</a>
			</div>
			 <div class="">
				<a href="courses" class="btn btn-primary btn-block">Courses</a>
			</div>
		</div>
		<div class="col-md-9 contents">
			<h1>Students - Students List</h1>
		<div class="col-md-9">
			<table class="table table-stripped">
			<thead>
					<tr>
							<th>NAME</th>
				

					</tr>
			</thead>
			<tbody>
				<?php
						foreach($students as $s){
							echo '	<tr>	
									<td>'.$s['lname'].', '.$s['fname'].' '.$s['mname'].'</td>
									<td>
										<a href="'.base_url('boot/profile/'.$s['idno']).'">View</a> 
									</td>
						</tr>
							';
				}
				?>
				</tbody>
			</table>
		</div>
		
		<div class="">
				<a href="add_student" class="btn btn-primary">New Student</a>
			</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			<p> footer </p>
		</div>
	</div>
</div>
