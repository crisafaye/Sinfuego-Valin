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
			<p class="lead">Add Course</p>
			<form role="form" class="" method="post">
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				<div class="form-group">
					<label for="cno">Course ID:</label>
					<input type="text" class="form-control" id="cno" name="cno" />
				</div>
				
				<div class="form-group">
					<label for="course">Course:</label>
					<input type="text" class="form-control" id="course" name="course" />
				</div>
				<div class="form-group">
					<label for="des">Description:</label>
					<input type="text" class="form-control" id="des" name="des" />
				</div>	
				<center><div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
					<a href="courses" class="btn btn-primary btn-lg">Back</a>
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
	location.href = '<?php echo base_url('boot/courses'); ?>';
</script>
<?php
}

?>




