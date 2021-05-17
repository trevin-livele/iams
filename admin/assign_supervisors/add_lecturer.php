<?php
include "../../database_connection/database_connection.php";

if (isset($_POST["btn_add_lecturer"])) {

    $lecturer_name = $_POST["txt_lecturer_name"];
    $lecturer_department = $_POST["lecturers_department"];
    $lecturer_contact = $_POST["txt_lecturer_contact"];
    $lecturer_faculty = $_POST["lecturers_faculty"];
    $lecturer_email = $_POST["txt_lecturer_email"];
    $lecturer_region = $_POST["selected_region"];

    $conn->query("INSERT INTO `visiting_lecturers` (`lecturer_name`, `lecturer_faculty`, `lecturer_phone_number`, 
    `lecturer_region_residence`, `lecturer_department`, `lecturer_email`)
    VALUES ('$lecturer_name', '$lecturer_faculty', '$lecturer_contact', '$lecturer_region', '$lecturer_department', '$lecturer_email')") or die($conn->error);

    
        header("Location: assign_supervisors.php");
}