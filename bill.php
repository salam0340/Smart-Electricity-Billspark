<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';
	
	}
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM user where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css"  href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Electricity Billing System</title>
<style type="text/css">
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

#wrapper {
    width: 100%;
    margin: 0 auto;
    border: 3px solid rgba(0, 0, 0, 0);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 0 18px rgba(0, 0, 0, 0.4);
    -moz-box-shadow: 0 0 18px rgba(0, 0, 0, 0.4);
    box-shadow: 0 0 18px rgba(0, 0, 0, 0.4);
    margin-top: 2%;
    padding: 10px;
    height: auto;  /* Make wrapper height auto for responsiveness */
}

#header {
    width: 100%;
    height: auto;
    text-align: center;
    padding-bottom: 10px;
}

table th {
    background: #999;
}

#form, #ryt {
    width: 100%;
    float: none;  /* Removed float for better mobile handling */
    border: 3px solid rgba(0, 0, 0, 0);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 0 18px rgba(0, 0, 0, 0.4);
    -moz-box-shadow: 0 0 18px rgba(0, 0, 0, 0.4);
    box-shadow: 0 0 18px rgba(0, 0, 0, 0.4);
    margin-top: 5%;
    padding: 20px;
}

#header ul li {
    list-style: none;
    float: left;
    margin-top: 30px;
    margin-left: 10px;
}

#header ul {
    padding: 0;
    margin: 0;
}

#header ul li a {
    display: inline-block;
    padding: 5px;
}

/* Responsive Styles */
@media (max-width: 1200px) {
    /* Large devices (tablets, small laptops) */
    #wrapper {
        width: 95%;
    }

    .panel-info {
        margin-bottom: 20px;
    }

    .col-md-4 {
        margin-bottom: 20px;
    }
}

@media (max-width: 992px) {
    /* Medium devices (tablets, laptops) */
    #form,
    #ryt {
        width: 100%;
        float: none;  /* Ensure both form and right panel take full width */
        margin-top: 10px;
    }

    #wrapper {
        padding: 15px;
        height: auto;
    }

    .col-md-4 {
        margin-bottom: 20px;
    }

    #header ul li {
        margin-left: 5px;
    }
}

@media (max-width: 768px) {
    /* Small devices (tablets, large phones) */
    #header {
        text-align: center;
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .col-md-4 {
        width: 100%;
        margin-bottom: 20px;
    }

    #header ul li {
        display: inline-block;
        margin: 10px 5px;
    }

    .panel-title {
        font-size: 18px;
    }

    #form,
    #ryt {
        width: 100%;
    }

    .panel-body h1 {
        font-size: 20px;
    }
}

@media (max-width: 480px) {
    /* Small devices (phones) */
    #wrapper {
        width: 100%;
        padding: 10px;
    }

    .panel-info {
        margin-bottom: 10px;
    }

    .col-md-4 {
        width: 100%;
    }

    .panel-title {
        font-size: 16px;
    }

    #header ul li {
        font-size: 12px;
        margin: 5px 0;
    }

    .panel-body h1 {
        font-size: 18px;
    }

    #form,
    #ryt {
        width: 100%;
        float: none;
    }
}

</style>
</head>

<body>
<div class="container">
<div id="wrapper">
  <h1><center><b>Electricity Bill Management System</b></center></h1>
  <div style="color:#F00; font-size:12px; margin-left:900px;"> 
  <span><?php echo $sessionname;?></span><a href="logout.php"><span class="btn btn-danger  glyphicon glyphicon-log-out">&nbsp;Logout</span></a>
  </div>
  <ul class="nav nav-pills">
    <li><a href="billing.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
    <li class="btn btn-default btn-xs"><a href="bill.php"><span class="glyphicon glyphicon-usd"></span>&nbsp;Billing</a></li>
    <li><a href="user.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Users</a></li>
    <li><a href="clients.php"><span class="glyphicon glyphicon-list"></span>&nbsp;Clients</a></li>
  </ul>
<hr color="#999999" />
<div  style="overflow:scroll; height:350px;">
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <!-------- home panel ----------------------------->
      
      
         <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h5>Billing Sequence</h5></div>
            </div>
              <div class="panel-body">
            
               <?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM owners");

echo "<table class=\"table\" bgcolor=\"#003399\">
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Mi</th>
<th>Address</th>
<th>Contact</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['mi'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
 echo "<td><a rel='facebox' href='paybill.php?id=".$row['id']."'><span class=\"btn btn-info btn-xs glyphicon glyphicon-usd\">Run</span> </a>| ";
 echo "<a rel='facebox' href='viewbill.php?id=".$row['id']."'><span class=\"btn btn-danger  btn-xs glyphicon glyphicon-eye-open\">View</span></td>";
  echo "</tr>";
  }
echo "</table>";

?>

              
              </div>
           </div>
         </div>
      </div>
    </div>
   <!-----  ######################################### -->
   

</div>
</body>

</html>
 <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
