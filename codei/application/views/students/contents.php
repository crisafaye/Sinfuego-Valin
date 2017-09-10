
<div class= "container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> Header </h1>
		</div>
	</div>
	<div class="row">
		<div class = "col-md-4 col-xs-4 col-sm-4">
			<p class= "lead"> Menu </p>
			<div class= "btn-group">
				<button type="button" class="btn btn-primary">Apple</button>
				<button type="button" class="btn btn-danger">PineApple</button>
				<button type="button" class="btn btn-info">GreenApple</button>
				<button type="button" class="btn btn-success">GreenApple</button>
				<button type="button" class="btn btn-warning">GreenApple</button>
				<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"> 
				appel
				<span class="caret"></span>
				</button>
				<ul class="dropdown-menu"role="menu">
					<li> blue </li>
					<li> green </li>
				</ul>
			</div>
		</div>
		<div class="col-mid-8 col-xs-8 col-sm-8 contents">
			<h1>Students - View Students</h1>
			<table class="table table-stripped">
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
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			<p> footer </p>
		</div>
	</div>
</div>
