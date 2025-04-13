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
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="css/bootstrap/dist/js/jquery.js"></script>
<script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
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
    #wrapper{
        width: 100%;
        margin: 0 auto;
        border: 3px solid rgba(0,0,0,0);
        border-radius: 5px;
        box-shadow: 0 0 18px rgba(0,0,0,0.4);
        margin-top: 2%;
        padding: 10px;
        height: 550px;
    }
    #header { 
        width: 100%;
        height: 100px;
    }
    table th {
        background: #999;
    }
    #form {
        width: 400px;
        float: left;
        border: 3px solid rgba(0,0,0,0);
        border-radius: 5px;
        box-shadow: 0 0 18px rgba(0,0,0,0.4);
        margin-top: 5%;
    }
    #ryt {
        float: right;
        border: 3px solid rgba(0,0,0,0);
        border-radius: 5px;
        box-shadow: 0 0 18px rgba(0,0,0,0.4);
        margin-top: 5%;
    }
    #header ul li {
        list-style: none;
        float: left; 
        margin-top: 30px; 
        margin-left: 10px;
    }
    .navbar-nav {
        flex-direction: row;
    }
    .navbar-nav .nav-item {
        margin-left: 10px;
    }
    .navbar-toggler {
        border: none;
    }
    @media (max-width: 768px) {
        #wrapper {
            padding: 15px;
            height: auto;
        }
        .navbar-nav {
            flex-direction: column;
        }
        .nav-link {
            padding: 10px 0;
        }
    }
    @media (max-width: 576px) {
        #form, #ryt {
            width: 100%;
            margin-top: 20px;
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
  <ul class="nav nav-pills navbar-expand-lg">
    <li class="nav-item"><a href="billing.php" class="nav-link"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
    <li class="nav-item"><a href="bill.php" class="nav-link"><span class="glyphicon glyphicon-usd"></span>&nbsp;Billing</a></li>
    <li class="nav-item"><a href="user.php" class="nav-link"><span class="glyphicon glyphicon-user"></span>&nbsp;Users</a></li>
    <li class="nav-item btn btn-default btn-xs"><a href="clients.php" class="nav-link"><span class="glyphicon glyphicon-list"></span>&nbsp;Clients</a></li>
  </ul>
  <hr color="#999999" />
  <div style="overflow:scroll; height:350px;">
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
      
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="width:400px;">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Electricity Bill Management System</h4>
            </div>
            <div class="modal-body">
              <p><?php include "addclient.php"; ?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                <h5>System Clients</h5>
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"> + Add client</button>
                <a href="deleteclient.php"><button class="btn btn-danger btn-xs">Delete all</button></a>
            </div>
        </div>
        <div class="panel-body">
          <?php
          include 'db.php';
          $result = mysqli_query($conn,"SELECT * FROM owners");
          echo "<table class=\"table\" bgcolor='#fff'>
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
          echo "<td><a rel='facebox' href='edit.php?id=".$row['id']."'><button class=\"btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a> | ";
          echo "<a rel='facebox' href='del.php?id=".$row['id']."'><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash \"></span></button></a></td>";
          echo "</tr>";
          }
          echo "</table>";
          ?>
        </div>
      </div>
    </div>
   </div>
</div>
</body>
</html>

<script src="js/jquery.js"></script>
<script type="text/javascript">
$(function() {
    $(".delbutton").click(function(){
        var element = $(this);
        var del_id = element.attr("id");
        var info = 'id=' + del_id;
        if(confirm("Sure you want to delete this update? There is NO undo!")) {
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
