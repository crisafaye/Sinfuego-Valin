<h1>Students - View Students</h1>
<table border="1">
	<thead>
		<tr>
			<th>ID NO.</th>
			<th>LAST NAME</th>
			<th>FIRST NAME</th>
			<th>MIDDLE NAME</th>
			<th>COURSE</th>
			<th>SEX</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($students as $s){
		echo '	<tr>	
					<td>'.$s['idno'].'</td>
					<td>'.$s['lname'].'</td>
					<td>'.$s['fname'].'</td>
					<td>'.$s['mname'].'</td>
					<td>'.$s['course'].'</td>
					<td>'.$s['sex'].'</td>
					<td>
						<a href="'.base_url('students/profile/'.$s['idno']).'">View</a> |
						<a href="">Edit</a> |
						<a href="" class="delete">Delete</a>
					</td>
				</tr>
				';
	}
	?>
	</tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
	$('.delete').click(function(){
		var ans = confirm("Do you want to delete this record?");
		if(ans==true){
			alert("Delete");
			//redirect to delete method
			//location.href = <?php echo base_url(); ?>";
		}
	});
});
</script>
