<?php 
if (isset($_POST['login'])){
    
    require_once 'conn.php';


        
        $studentTable = 'SELECT * FROM student WHERE username = "'.$_POST['id'].'" AND password = "'.$_POST['pwd'].'"';
        $teacherTable = 'SELECT * FROM teacher WHERE username = "'.$_POST['id'].'" AND password = "'.$_POST['pwd'].'"';
        $officeTable = 'SELECT * FROM office WHERE username = "'.$_POST['id'].'" AND password = "'.$_POST['pwd'].'"';

        $resultStudent = mysqli_query($conn,$studentTable);
        $resultTeacher = mysqli_query($conn,$teacherTable);
        $resultOffice = mysqli_query($conn,$officeTable);

        if(mysqli_num_rows($resultStudent) == 1){
            session_start();
            $row = mysqli_fetch_assoc($resultStudent);

            header('Location: ../../php/admin/dashboard.php');

            $_SESSION['username'] = $row['username'];

        }else if(mysqli_num_rows($resultOffice) == 1){
            session_start();
            $row = mysqli_fetch_assoc($resultOffice);
            header('Location: ../../html/office/ofdaschboard.html');

            $_SESSION['username'] = $row['username'];
 
        }else if(mysqli_num_rows($resultTeacher) == 1){
            session_start();
            $row = mysqli_fetch_assoc($resultTeacher);
            header('Location: ../../html/teacher/newsfeed.html');

        $_SESSION['username'] = $row['username'];

        }else{
            echo 'wrongggggggggg';
        }



}