<html>
    <head>
    <style>
    
    #logo{ 
	position:fixed; 
	top:3%;
	left:2%;
        }
        
    table{
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 320px;
    height:400px;
    margin-left: 21px;
    margin-top:300px;
        }

    td, th{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    position:center;
    background-color: none;
        }
        
    a{
    font-size:25px;
    font-family:sans-serif; 
    text-decoration:none;
    color:black;
        }

    tr:nth-child(even) {
    background-color: #dddddd;
    text-decoration-color: none;
        }
    
    </style>
    </head>

    <body>
        
    <div id="logo">
        <a href="s_mp.php"><img src="../images/logo.jpg" width="330" height="230"></a>
	</div>
        
    <div class="list">
    <table>
  <tr>
      <td><center><a class="events" href="s_events.php" >Events List</a></center></td>
  </tr>
        
  <tr>
      <td><center><a class="events" href="s_jevents.php" >Joined Events List</a></center></td>
  </tr>
        
  <tr>
      <td><center><a class="booking" href="s_booking.php" >Facility Booking List</a></center></td>
  </tr>
        
  <tr>
      <td><center><a class="info" href="s_memberlist.php" >Members List</a></center></td>
  </tr>
        
  <tr>
      <td><center><a class="feedback" href="s_feedback.php" >Member's Feedback</a></center></td>
  </tr>
        
  <tr>
      <td><center><a class="logout" href="login.php" >Exit</a></center></td>
  </tr>
        

    </table>
        </div>
    </body>
</html>
