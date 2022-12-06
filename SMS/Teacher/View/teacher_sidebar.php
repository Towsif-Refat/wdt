<?php
    session_start();
  require_once('../Model/DatabaseConnection.php');
  $User = getUserById($_COOKIE['ID']);
    if(isset($_COOKIE['flag']))
    {
?>

<td width="190" valign="top">
			<b>&nbsp;Teacher Panel</b><hr/>
            <ul>
                 <li><a href="StudentList.php">View Student's Profile</a></li>
                    <li><a href="Schedule.php">Class Schedule</a></li>
                    <li><a href="NoticeBoard.php">Notice Board</a></li>
                    <li><a href="ViewSchoolNotice.php">School Notice</a></li>
                    <li><a href="UploadNotes.php">Upload Notes</a></li>
                    <li><a href="ViewUploadedNotes(Student).php">See Student Notes</a></li>
                    <li><a href="StudentListMarks.php">Student Marks</a></li>
                    <li><a href="LeaveRequest.php">Student Leave Request</a></li>
                    <li><a href="BookHistory.php">Book History</a></li>            </ul> 
           
                <li><a href="TeacherDashboard.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                     <li><a href="../Controller/Logout.php">Logout</a></li>
                          <li><a href="ChangePass.php">Reset Password</a></li>
            </ul>  
   
    <?php

    }else{
        header('location: LoginPage.php');
    }

?>
