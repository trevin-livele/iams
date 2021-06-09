<?php 
include '../database_connection/database_connection.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $reg_no = $_POST['reg_no'];
    $attachment_start_date = $_POST['attachment_start_date'];
    $org_name = $_POST['org_name'];
    $org_branch = $_POST['org_branch'];
    $org_address= $_POST['org_address'];
    $org_town= $_POST['org_town'];
    $org_location= $_POST['org_location'];
    $org_street= $_POST['org_street'];
    $floor= $_POST['floor'];
    $office_name= $_POST['office_name'];
    $telephone= $_POST['telephone'];
    $email= $_POST['email'];
    $area_attached= $_POST['area_attached'];
    $tools_programs= $_POST['tools_programs'];
    $aob = $_POST['aob'];
  
   
 
   $conn->query("INSERT INTO `return_form` (`name`,`reg_no`,`attachment_start_date`,`org_name`,`org_branch`,`org_address`,
   `org_town`,`org_location`,`org_street`,`floor`,`office_name`,`telephone`,`email`,`area_attached`,`tools_programs`,`aob`)
   VALUES('$name','$reg_no','$attachment_start_date','$org_name','$org_branch',' $org_address',' $org_town','$org_location',
   '$org_street','$floor','$office_name','$telephone','$email','$area_attached','$tools_programs','$aob')") or die($conn->error);
 





}




?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="title">Name</label>
<input type="text" class="form-control" name="name">
</div>


<div class="form-group">
<label for="title">reg no</label>
<input type="text" class="form-control" name="reg_no">
</div>

<div class="form-group">
<label for="title">attachment start date</label>
<input type="date" class="form-control" name="attachment_start_date">
</div>
<h1>Attachment organization Details</h1>

<div class="form-group">
<label for="title">organization names</label>
<input type="text" class="form-control" name="org_name">
</div>
<div class="form-group">
<label for="title">branch</label>
<input type="text" class="form-control" name="org_branch">
</div>
<div class="form-group">
<label for="title">Address</label>
<input type="text" class="form-control" name="org_address">
</div>
<div class="form-group">
<label for="title">Town</label>
<input type="text" class="form-control" name="org_town">
</div>
<div class="form-group">
<label for="title">Location</label>
<input type="text" class="form-control" name="org_location">
</div>
<div class="form-group">
<label for="title">Street</label>
<input type="text" class="form-control" name="org_street">
</div>
<div class="form-group">
<label for="title">Floor</label>
<input type="text" class="form-control" name="floor">
</div>
<div class="form-group">
<label for="title">Office Name</label>
<input type="text" class="form-control" name="office_name">
</div>
<div class="form-group">
<label for="title">Telephone</label>
<input type="text" class="form-control" name="telephone">
</div>
<div class="form-group">
<label for="title">Email</label>
<input type="text" class="form-control" name="email">
</div>


<h2>Attachment Details</h2>
<div class="form-group">
<label for="post_status">Area of Attachment Tasks and Duties Description</label>
<input type="text" class="form-control" name="area_attached">
</div>



<div class="form-group">
<label for="post_tags">Main tools and programs in use</label>
<input type="text" class="form-control" name="tools_programs">
</div>

<div class="form-group">
<label for="post_content">Any other Description</label>
<textarea class="form-control" name="aob">
</textarea>
</div>

<div class="form-group">
<!-- <input class="btn btn-primary" type="submit" name="" value="submit"> -->
<button type="submit" name="submit">submit</button>
</div>
</form>