<!DOCTYPE html>
<html>
<head>
<?php
include_once '../../php/includes/session.php'
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function(){
            $("#nav").load("nav.html");
    });
        </script>
    <link type="text/css" rel="stylesheet" href="../../css/main.css">
	<link type="text/css" rel="stylesheet" href="../../css/dashboard.css">
</head>
<body>
    <div id="nav"></div>

        <div class="content">
            <h2>Grades</h2>
            
            <ul>
                <li>Grade 1</li>
                    <ul>
                        <li><a href = "Class A"></a></li>
                    </ul>
                <li>Grade 2</li>
                <li>Grade 3</li>
                <li>Grade 4</li>
                <li>Grade 5</li>
                <li>Grade 6</li>
                <li>Grade 7</li>
                <li>Grade 8</li>
                <li>Grade 9</li>
                <li>Grade 10</li>
                <li>Grade 11</li>
                <li>Grade 12</li>
                <li>Grade 13</li>
            </ul>


        </div>