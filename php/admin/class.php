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

    <link type="text/css" rel="stylesheet" href="../../css/register.css">
    <link type="text/css" rel="stylesheet" href="../../css/class.css">
    <link rel="stylesheet" href="../../css/view.css " type="text/css">
</head>
<body>
    <div id="nav"></div>

        <div class="content">

            
            <h2>Class A</h2>
            



                <form class="search" action="marks.html">
                    <button type="submit">View Marks</button>
                </form>


            <div class = l-part>
				<label for="name"><b>Class Name</b></label>
				<input type="text" placeholder="Enter Name" name="id" required>                
            </div>

            <div class = r-part>
                <label for="name"><b>Class Teacher</b></label>
				<input type="text" placeholder="Enter Category" name="name" required> 
              
            </div>
                
   
        
                    
                      <div class="card">
  
                        <br>
                        <br>
                        
                        <hr>
                        <table>
                            <tr>
                                <th>Admission number</th>
                                <th>Student name</th>
                                <th>View Profile</th>
                                
                                
                            </tr>
                            <tr>
                                <td>AAA</td>
                                <td>BBB</td>
                                <td><form class="search" action="">
                                    <button type="submit">View</button>
                                </form>
                            </td>
                                
                            </tr>
                            <tr>
                                <td>AAA</td>
                                <td>BBB</td>
                                <td><form class="search" action="">
                                    <button type="submit">View</button>
                                </form>
                                </td>
                                
                            </tr>
                        </table>
                        </div>


        </div>