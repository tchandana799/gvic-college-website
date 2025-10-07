<?php
// Get form data safely
$fullname = $_POST['fullname'] ?? '';
$fathername = $_POST['fathername'] ?? '';
$dob = $_POST['dob'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$parentmobile = $_POST['parentmobile'] ?? '';
$course = $_POST['course'] ?? '';
$branch = $_POST['branch'] ?? '';
$rank = $_POST['rank'] ?? '';
$pastcollege = $_POST['pastcollege'] ?? '';

// Format the data
$data = "----- New Application -----\n";
$data .= "Full Name: $fullname\n";
$data .= "Father's Name: $fathername\n";
$data .= "Date of Birth: $dob\n";
$data .= "Email: $email\n";
$data .= "Mobile: $mobile\n";
$data .= "Parent's Mobile: $parentmobile\n";
$data .= "Course: $course\n";
$data .= "Branch: $branch\n";
$data .= "Entrance Rank: $rank\n";
$data .= "Past College: $pastcollege\n";
$data .= "Submitted on: " . date("Y-m-d H:i:s") . "\n\n";

// Save to a text file
file_put_contents("admission-detail.txt", $data, FILE_APPEND);

// Redirect to main.html
header("Location: main.html");
exit();
?>
