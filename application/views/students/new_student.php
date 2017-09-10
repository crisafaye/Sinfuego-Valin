<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			
			
		</div>
		<div class="col-md-9 contents">
			<p class="lead">Add New Student</p>
			<form role="form" class="" method="post">
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="idno">ID No.:</label>
					<input type="text" class="form-control" id="idno" name="idno" />
				</div>
				<div class="form-group">
					<label for="lname">Last Name:</label>
					<input type="text" class="form-control" id="lname" name="lname" />
				</div>	
				<div class="form-group">
					<label for="fname">First Name:</label>
					<input type="text" class="form-control" id="fname" name="fname" />
				</div>
				<div class="form-group">
					<label for="mname">Middle Name:</label>
					<input type="text" class="form-control" id="mname" name="mname" />
				</div>
				<div class="form-group">
					<label for="course">Course:</label>
					<select class="form-control" id="course" name="course">
						<?php
						foreach($course as $s){
						echo '<option>'.$s['course'].' </option>';}?>		
					</select>
				</div>
				<div class="form-group">
					<label for="sex">Sex</label>
					<input type="radio" class="" id="sex" name="sex" value="Male" /> Male
					<input type="radio" class="" id="sex" name="sex" value="Female" /> Female
				</div>	
				<center><div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
					<a href="students" class="btn btn-primary btn-lg">Back</a>
				</div></center>
			</form>
	
			<hr />
			
		</div>
	</div>
</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("The new student record was successfully saved!");
	location.href = '<?php echo base_url('boot/index'); ?>';
</script>
<?php
}

?>




