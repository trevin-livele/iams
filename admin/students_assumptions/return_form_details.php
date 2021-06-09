
<?php


include '../../database_connection/database_connection.php';

 ?>


<!DOCTYPE html>
<html lang="en" class="bg-pink">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IASMS</title>

  <link rel="stylesheet" href="../../css/bootstrap-theme.min.css"/>
  <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../../css/main_page_style.css"/>
  <link rel="stylesheet" href="students_assumptions.css"/>

  <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"/></script>
  <script type="text/javascript" src="../../js/bootstrap.min.js"/></script>

</head>
<body>

<div id="top-navigation">
<div id="header_logo"><img src="../../img/header_log.png" class="img-responsive" alt="logo" style="float:left;width:150px; height:50px;position:relative;left:20px"/></div>
<div id="student_name"><span style="color:rgb(255, 198, 0);font-size:1.1em"><em>Welcome,</em>&nbsp; </span><span style="font-family:serif"><?php echo "Admin"?></span></div>
</div>

<div id="left_side_bar">
<ul id="menu_list">
  <a class="menu_items_link" href="../view_registered_students/view_registered_students.php"><li class="menu_items_list">Registered Students</li></a>
  <a class="menu_items_link" href="students_assumptions.php"><li class="menu_items_list" style="background-color:orange;padding-left:16px">Student Assumptions</li></a>
  <a class="menu_items_link" href="../assign_supervisors/assign_supervisors.php"><li class="menu_items_list">Assign Supervisors</li></a>
  <a class="menu_items_link" href="../visiting_score/visiting_supervisors_score.php"><li class="menu_items_list">Visiting Superviors Score</li></a>
  <a class="menu_items_link" href="../company_score/company_supervisor_score.php"><li class="menu_items_list">Company Supervisor Score</li></a>
  <a class="menu_items_link" href="../change_password/change_password.php"><li class="menu_items_list">Change Password</li></a>
  <a class="menu_items_link" href="../../index.php"><li class="menu_items_list">Logout</li></a>
</ul>
</div>

<div class="container-fluid">
<div id="main_content">
    <div class = "panel">
       <div class = "panel-heading phead">
          <h2 class = "panel-title ptitle"> Return Form Details </h2>
       </div>
            <div class = "panel-body pbody">

              <form method="post" action="">
                  <div class="row">
                      <div class="col-xs-5 col-xs-offset-6">
              		    <div class="input-group">
                              <div class="input-group-btn search-panel">
                                  <select class="form-control search_by_side" name="filter-by">
                                    <option>FilterBy</option>
                                    <option>First Name</option>
                                    <option>Last Name</option>
                                    <option>Reg Number</option>
                                    <option>Region</option>
                                    <option>Company</option>


                                  </select>

                              </div>
                              <input type="hidden" name="search_param" value="all" id="search_param">
                              <input type="text" class="form-control" name="txt_search_term" placeholder="Search term...">
                              <span class="input-group-btn">
                                  <input type="submit" class="btn btn-primary" value="search" name="btn_search" id="btn_search">
                              </span>
                            </form>
                          </div>
                      </div>
              	</div>

              <br>
              <table class="table table-bordered table-hover">

                  <thead>
                    <tr>
                        <th style="text-align:center">Student Name</th>
                        <th style="text-align:center">Reg Number</th>
                        <th style="text-align:center">Start date</th>
                        <th style="text-align:center">organization name</th>
                        <th style="text-align:center">address</th>
                        <th style="text-align:center">Location</th>
                        <th style="text-align:center">Floor</th>
                        <th style="text-align:center">Office name</th>
                        <th style="text-align:center">Telephone</th>
                        <th style="text-align:center">Email</th>


                    </tr>

                  </thead>

                  <tbody>
                    <?php
                    $students = $conn->query('SELECT * FROM return_form') or die($conn->error);
                    while ($row_set = $students->fetch_assoc()){

                      echo "<tr style='text-align:center;font-size:1.1em'>";

                     
                      echo "<td>".$row_set["name"]."</td>";
                       echo "<td>".$row_set["reg_no"]."</td>";
                      echo "<td>".$row_set["attachment_start_date"]."</td>";
                      echo "<td>".$row_set["org_name"]."</td>";
                      echo "<td>".$row_set["org_address"]."</td>";
                      echo "<td>".$row_set["org_location"]."</td>";
                      echo "<td>".$row_set["floor"]."</td>";
                      echo "<td>".$row_set["office_name"]."</td>";
                      echo "<td>".$row_set["telephone"]."</td>";
                      echo "<td>".$row_set["email"]."</td>";


                      echo "</tr>";

                    }

                     ?>
                  </tbody>
            </table>
     </div>
   </div>
 </div>
 </div>
 
<script src="../../js/jquery.dataTables.js"></script>
</body>

</html>
