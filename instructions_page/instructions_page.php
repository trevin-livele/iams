<?php

include '../database_connection/database_connection.php';

// $student_fname = $_COOKIE["student_first_name"];
// $student_lname = $_COOKIE["student_last_name"];
// $student_index_number = $_COOKIE["student_index_number"];


// $mysql_check_supervisor_assigned = "SELECT * FROM vira_registration WHERE index_number='$student_index_number' LIMIT 1";



// $execute_check_supervisor_assigned = mysqli_query($conn,$mysql_check_supervisor_assigned);


// $check_presence = mysqli_num_rows($execute_check_supervisor_assigned);

// if($check_presence == 1){

// $get_entire_results = mysqli_fetch_array($execute_check_supervisor_assigned);

// $student_faculty = $get_entire_results["faculty"];
// $student_company_region = $get_entire_results["attachment_region"];
// $student_visiting_supervisor_name = $get_entire_results["visiting_supervisor_name"];

// if($student_company_region!="unassigned" && $student_visiting_supervisor_name!="unassigned"){

// 	$contains_data = "true";

// 	$get_supervisors_contact_query = "SELECT * FROM visiting_lecturers WHERE lecturer_faculty='$student_faculty' AND lecturer_name='$student_visiting_supervisor_name' LIMIT 1";

// 	$execute_get_supervisor_contact = mysqli_query($conn,$get_supervisors_contact_query);

// 	$get_supervisors_contact = mysqli_fetch_array($execute_get_supervisor_contact);

// 	$lecturers_contact = $get_supervisors_contact["lecturer_phone_number"];

// 	$assign_contact_to_student = "UPDATE `vira_registration` SET `visiting_supervisor_contact` = '$lecturers_contact' WHERE `index_number` = '$student_index_number'";

// 	$execute_assign_contact = mysqli_query($conn,$assign_contact_to_student);

// }else{
// 	$contains_data = "false";
// }

// }else{

// 	$mysql_check_supervisor_assigned = "SELECT * FROM industrial_registration WHERE index_number='$student_index_number' LIMIT 1";

// 	$execute_check_supervisor_assigned = mysqli_query($conn,$mysql_check_supervisor_assigned);

// 	$get_entire_results = mysqli_fetch_array($execute_check_supervisor_assigned);

// 	$student_faculty = $get_entire_results["faculty"];
// 	$student_company_region = $get_entire_results["attachment_region"];
// 	$student_visiting_supervisor_name = $get_entire_results["visiting_supervisor_name"];

// 	if($student_company_region!="unassigned" && $student_visiting_supervisor_name!="unassigned"){

// 	$contains_data = "true";

// 	$get_supervisors_contact_query = "SELECT * FROM visiting_lecturers WHERE lecturer_faculty='$student_faculty' AND lecturer_name='$student_visiting_supervisor_name' LIMIT 1";

// 	$execute_get_supervisor_contact = mysqli_query($conn,$get_supervisors_contact_query);

// 	$get_supervisors_contact = mysqli_fetch_array($execute_get_supervisor_contact);

// 	$lecturers_contact = $get_supervisors_contact["lecturer_phone_number"];

// 	$assign_contact_to_student = "UPDATE `industrial_registration` SET `visiting_supervisor_contact` = '$lecturers_contact' WHERE `index_number` = '$student_index_number'";

// 	$execute_assign_contact = mysqli_query($conn,$assign_contact_to_student);

// }else{
// 		$contains_data = "false";
// 	}

// }


 ?>

<!DOCTYPE html>
<html lang="en" class="bg-pink">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IASMS</title>

  <link rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../css/main_page_style.css"/>
  <link rel="stylesheet" href="instructions_page.css"/>

  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"/></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"/></script>

</head>
<body>

<div id="top-navigation">
<div id="header_logo"><img src="img/header_log.jpg" class="img-responsive" alt="logo" style="float:left;width:150px; height:50px;position:relative;left:20px"/></div>

<!-- <div id="student_name_adjusted"><span style="color:rgb(255, 198, 0);font-size:1.1em"><em>Welcome,</em>&nbsp; </span><span style="font-family:serif"><?php echo $student_fname." ".$student_lname;?></span></div>
</div> -->

<div id="left_side_bar">
<ul id="menu_list">
  <a class="menu_items_link" href="instructions_page.php"><li class="menu_items_list" style="background-color:green;padding-left:16px">Instructions</li></a>
  <a class="menu_items_link" href="download_letter.php"><li class="menu_items_list" style="background-color:green;padding-left:16px">DOWNLOADS</li></a>
  <a class="menu_items_link" href="return_form.php"><li class="menu_items_list" style="background-color:green;padding-left:16px">Return form</li></a>
  <a class="menu_items_link" href="../e-logbook/elogbook.php"><li class="menu_items_list">E-Logbook</li></a>
  <a class="menu_items_link" href="../company_supervisor/company_supervisor_login.php"><li class="menu_items_list">Company Supervisor</li></a>
  <a class="menu_items_link" href="../visiting_supervisor/visiting_supervisor_login.php"><li class="menu_items_list">Visiting Supervisor</li></a>
  <a class="menu_items_link" href="../submit_report/submit_report.php"><li class="menu_items_list">Submit Report</li></a>
  <a class="menu_items_link" href="../index.php"><li class="menu_items_list">Logout</li></a>
</ul>
</div>


<!-- Main Body Content -->

<div id="main_content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading ">
        <h4 class = "panel-title ptitle">Step 1</h4>
     </div>

     <div class = "panel-body pbody">
        <span> Once you have been able to login into the system, click on <span style="font-weight:bold;color:green">"Downloads"</span> To download
        your attachment letter and your insuarance letter.
       </span>
        <br><br>
     </div>
  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading pheading">
        <h4 class = "panel-title ptitle">Step 2</h4>
     </div>

     <div class = "panel-body pbody">
        <span>There are two (2) Diffrent documents <span style="font-weight:bold;color:#2B3775">insuarance letter</span>
       and <span style="font-weight:bold;color:#2B3775">INDUSTRIAL attachment Letter</span>
      essential to get attachment in a company of your choice.</span>
      <br><br>
     </div>
  </div>
</div>


<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading">
        <h4 class = "panel-title ptitle"> Step 3</h4>
     </div>

     <div class = "panel-body pbody">
        <span>once you download this forms <span style="font-weight:bold;color:#2B3775">As instructed</span> in Steps above,
      you will have to print them out and look for attachment opportunities in various organisations of your choosing <span style="font-weight:bold;color:#2B3775">VALID</span>
attachment opportunities that are IT related are encouraged </span>
    <br><br>
     </div>
  </div>
</div>


<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading">
        <h4 class = "panel-title ptitle">Step 4 </h4>
     </div>

     <div class = "panel-body pbody">
       <span>In case you have complited the above processes <span style="font-weight:bold;color:#2B3775">Fill</span> the return form in the retun form
       panel indicating in a detailed and precise manner as the instructions suggest.Ensure you fill the form correctly so that we can tell where you are attached. <span style="font-weight:bold;color:#2B3775"> AND SUBMIT</span></span>
     </div>
  </div>
</div>
</div>

<br>

<div class="row">
<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading pheading">
        <h4 class = "panel-title ptitle">Step 5</h4>
     </div>

     <div class = "panel-body pbody">
        <span>After you have successfully submitted your details,
        carry on with your <span style="font-weight:bold;color:#2B3775">INDUSTRIAL ATTACHMENT</span> if you have not yet submitted your DETAILS make sure you do in the first 10 working
        days of your industrial attachment for efficiency </span>
        <br><br><br><br>
     </div>
  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading pheading">
        <h4 class = "panel-title ptitle">Step 6</h4>
     </div>

     <div class = "panel-body pbody">
        <span>Once you have done this succesfully an internal  <span style="font-weight:bold;color:#2B3775">Supervisor</span> will be</span>,
        allocated to your area or region for the first and second visit,make sure everything is set up correctly as instructed above before  <span style="font-weight:bold;color:#2B3775">SUBMITING</span>
        <br><br><br>
     </div>
  </div>
</div>


<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading">
        <h4 class = "panel-title ptitle"> Step 7</h4>
     </div>

     <div class = "panel-body pbody">
        <span>You can also click <span style="font-weight:bold;color:#2B3775">E-Logbook</span> to record all
      the activities you have done througout the day. You should make sure you click on <span style="font-weight:bold;color:#2B3775">SAVE</span> after you are done
    to avoid loosing your data</span>
    <br><br><br>
     </div>
  </div>
</div>


<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading">
        <h4 class = "panel-title ptitle">Step 8 </h4>
     </div>

     <div class = "panel-body pbody">
       <span>Clicking on <span style="font-weight:bold;color:#2B3775">Company Supervisor</span> will open a page where officials supervising interns
     can grade the student. Students cant access this page unless a <span style="font-weight:bold;color:#2B3775">Visiting Supervisor</span>
   gives the password to the supervisor accessing you </span>
     </div>
  </div>
</div>
</div>

<br>

<div class="row">
<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading pheading">
        <h4 class = "panel-title ptitle">Step 9</h4>
     </div>

     <div class = "panel-body pbody">
        <span> Clicking on the <span>Visiting Supervisors</span> would enable to graded by the Supervisor
      the school has choosen to supervise the student. This page would not be accessible by the student, only <thead>
        visiting supervisor can login with a password.
      </thead> </span>
        <br><br>
     </div>
  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading pheading">
        <h4 class = "panel-title ptitle">Step 10</h4>
     </div>

     <div class = "panel-body pbody">
        <span>Clicking on the submit report would enable you the student to submit
        your industrial attachment report to the Industrial Liason Office directly
      without having to print it and bring it to the school, now can do it online.</span>
      <br><br><br>
     </div>
  </div>
</div>


<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading">
        <h4 class = "panel-title ptitle"> Step 11</h4>
     </div>

     <div class = "panel-body pbody">
        <span>Your password is one of the few things that puts a barrier between your account and the outside world,
        In case you want to change your account password, just click on <span>Change Password</span> and fill in your details</span>
        <br><br>
     </div>
  </div>
</div>


<div class="col-lg-3 col-md-4 col-sm-6">
  <div class = "panel">
     <div class = "panel-heading">
        <h4 class = "panel-title ptitle">Step 12 </h4>
     </div>

     <div class = "panel-body pbody">
       <span>After you have finished with everything you want to do in the online management system, it is advisable
       for you to logout your account. This will prevent other users from using your account to perform
     other operations you are not even aware of.</span>
     </div>
  </div>
</div>
</div>

<br>
<br>



</div>
</div>

<?php



 ?>

</body>
</html>
