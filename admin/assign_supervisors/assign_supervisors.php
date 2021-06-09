<?php

include '../../database_connection/database_connection.php';

$regions = array(
	 "Central Region", "Eastern Region", "Western Region",
	 "Northern Region", "Nothern East Region", "Nairobi region", "coast Region", "Nyanza Region"
);

$regions_2 = array(
	"-- Select Resident Region --", "Central Region", "Eastern Region", "Western Region",
	"Northern Region", "Nothern East Region", "Nairobi region", "coast Region", "Nyanza Region"
);

$faculties = array("-- Select Lecturer Faculty --", "IT", "IT", "IT", "IT", "IT");

$departments = array("-- Select Lecturer Department -- ", "Applied Mathematics", "Computer Science", "Hospitality");

$mysql_query_1 = "SELECT * FROM visiting_lecturers";

$mysql_query_fast = "SELECT * FROM visiting_lecturers WHERE lecturer_faculty = 'IT'";
$mysql_query_fbms = "SELECT * FROM visiting_lecturers WHERE lecturer_faculty = 'IT'";
$mysql_query_foe = "SELECT * FROM visiting_lecturers WHERE lecturer_faculty = 'IT'";
$mysql_query_fbne = "SELECT * FROM visiting_lecturers WHERE lecturer_faculty = 'IT'";
$mysql_query_fhas = "SELECT * FROM visiting_lecturers WHERE lecturer_faculty = 'IT'";

?>


<!DOCTYPE html>
<html lang="en" class="bg-pink">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IASMS</title>

	<link rel="stylesheet" href="../../css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="../../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../css/main_page_style.css" />
	<link rel="stylesheet" href="assign_supervisors.css" />

	<script type="text/javascript" src="../../js/jquery-3.1.1.min.js" />
	</script>
	<script type="text/javascript" src="../../js/bootstrap.min.js" />
	</script>


</head>

<body>

	<div id="top-navigation">
		<div id="header_logo"><img src="../../img/header_log.png" class="img-responsive" alt="logo" style="float:left;width:150px; height:50px;position:relative;left:20px" /></div>
		<div id="student_name"><span style="color:rgb(255, 198, 0);font-size:1.1em"><em>Welcome,</em>&nbsp; </span><span style="font-family:serif"><?php echo "Admin" ?></span></div>
	</div>

	<div id="left_side_bar">
		<ul id="menu_list">
			<a class="menu_items_link" href="../view_registered_students/view_registered_students.php">
				<li class="menu_items_list">Registered Students</li>
			</a>
			<a class="menu_items_link" href="../students_assumptions/students_assumptions.php">
				<li class="menu_items_list">Student Assumptions</li>
			</a>
			<a class="menu_items_link" href="assign_supervisors.php">
				<li class="menu_items_list" style="background-color:orange;padding-left:16px">Assign Supervisors</li>
			</a>
			<a class="menu_items_link" href="../visiting_score/visiting_supervisors_score.php">
				<li class="menu_items_list">Visiting Superviors Score</li>
			</a>
			<a class="menu_items_link" href="../company_score/company_supervisor_score.php">
				<li class="menu_items_list">Company Supervisor Score</li>
			</a>
			<a class="menu_items_link" href="../change_password/change_password.php">
				<li class="menu_items_list">Change Password</li>
			</a>
			<a class="menu_items_link" href="../../index.php">
				<li class="menu_items_list">Logout</li>
			</a>
		</ul>
	</div>

	<div class="container-fluid">
		<div id="main_content">
			<div class="panel">
				<div class="panel-heading phead">
					<h2 class="panel-title ptitle"> Assign Supervisors</h2>
				</div>
				<div class="panel-body pbody">

					
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>


					<div class="panel">
						<div class="panel-heading phead">
							<h2 class="panel-title ptitle"> Registered Lecturers</h2>
						</div>
						<div class="panel-body pbody">

							<table class="table table-bordered table-hover">

								<thead>
									<tr>
										<th style="text-align:center">Name</th>
										<th style="text-align:center">Phone Number</th>
										<th style="text-align:center">Residence Region</th>
										<th style="text-align:center">E-mail</th>

									</tr>

								</thead>

								<tbody>
									<?php

									echo "<tr style='text-align:center;font-size:1.1em' width='100%'>";

									$mysql_query_command_1 = $mysql_query_1;
									$execute_result_query = mysqli_query($conn, $mysql_query_command_1);
									while ($row_set = mysqli_fetch_array($execute_result_query)) {

										echo "<tr style='text-align:center;font-size:1.1em'>";

										echo "<td>" . $row_set["lecturer_name"] . "</td>";
										echo "<td>" . $row_set["lecturer_phone_number"] . "</td>";
										echo "<td>" . $row_set["lecturer_region_residence"] . "</td>";
										echo "<td>" . $row_set["lecturer_email"] . "</td>";

										echo "</tr>";
									}


									echo "</tr>";

									?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="panel">
						<div class="panel-heading phead phead-adjusted">
							<h2 class="panel-title ptitle"> Add Lecturer</h2>
						</div>
						<div class="panel-body">

							<form method="post" action="add_lecturer.php">

								<div class="row">
									<div class="col-md-12">

										<div class="col-md-5 col-md-offset-1">
											<input type="text" placeholder="Enter Name" required name="txt_lecturer_name" class="form-control" />
										</div>

										<div class="col-md-5">
											<select class="form-control" id="lecturers_department" required name="lecturers_department">
												<?php
												foreach ($departments as $val) {
													echo "<option>" . $val . "</option>";
												};
												?>
											</select>
										</div>


									</div>
								</div>
								<br>

								<div class="row">
									<div class="col-md-12">

										<div class="col-md-5 col-md-offset-1">
											<input type="text" placeholder="Enter Contact (0700000000)" required name="txt_lecturer_contact" class="form-control" />
										</div>

										<div class="col-md-5">
											<select class="form-control" id="lecturers_faculty" required name="lecturers_faculty">
												<?php
												foreach ($faculties as $val) {
													echo "<option>" . $val . "</option>";
												};
												?>
											</select>
										</div>


									</div>
								</div>
								<br>

								<div class="row">
									<div class="col-md-12">

										<div class="col-md-5 col-md-offset-1">
											<input type="email" placeholder="Enter valid email address" required name="txt_lecturer_email" class="form-control" />
										</div>

										<div class="col-md-5">
											<select class="form-control" id="selected_region" required name="selected_region">
												<?php
												foreach ($regions_2 as $val) {
													echo "<option>" . $val . "</option>";
												};
												?>
											</select>
										</div>

									</div>
								</div>

								<div style="float: right">
									<input type="submit" value="Add" required name="btn_add_lecturer" class="btn btn-primary" />
								</div>

						</div>

					</div>

					</form>
				</div>

			</div>

<h1>Assign supervisors</h1>
<form method="post" action="add_lecturer.php">

								<div class="row">
									<div class="col-md-12">
										<div class="col-md-4">
											<select class="form-control" id="lecturers_department" required name="lecturers_department">
												<?php
												 $lecturer = $conn->query('SELECT * FROM visiting_lecturers') or die($conn->error);
													while ($row_set = $lecturer->fetch_assoc()){

														echo "<option value=''>". $row_set['lecturer_name'] ."</option>";	
								  
													  }
													  
												
												?>
											</select>
										</div>



										<div class="col-md-4">
											<select class="form-control" id="lecturers_department" required name="lecturers_department">
												<?php
													  $students = $conn->query('SELECT * FROM registered_students') or die($conn->error);
													while ($row_set = $students->fetch_assoc()){

														echo "<option value=''>". $row_set['first_name'] . $row_set['last_name'] . "</option>";	
								  
													  }
												
												?>
											</select>
										</div>
																<?php

																





																?>

								<div style="float: right">
									<input type="submit" value="Assign" required name="btn_add_lecturer" class="btn btn-primary" />
								</div>

						</div>

					</div>
<br>
					</form>

		
</body>

</html>