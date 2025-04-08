<?php include("header.php"); ?>
  <body style="background: url(img/Electricity-bg-3.gif); background-size: cover; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <h1 style="text-align: center; color: white; margin-bottom: 20px;">WELCOME TO ELECTRICITY PROVIDER CROP.BD</h1>

    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%;">    
        <div id="loginbox" style="width: 450px; display: flex; justify-content: center; align-items: center; flex-direction: column;" class="mainbox">                    
            <div class="panel panel-info" style="background: url(img/Electricity-bg-1.gif); background-size: cover; width: 100%; padding: 20px; border-radius: 10px;"> 
                <div class="panel-heading" style="text-align: center;">
                    <div class="panel-title">Sign In</div>
                </div>     
                <div style="padding-top: 30px; text-align: center;" class="panel-body">
                    <div style="display: none;" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form action="process.php" method="post">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" placeholder="username" style="background-color: transparent; color: #000; font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bolder;">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password" style="background-color: transparent; color: #000; font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bolder;">
                        </div>
                        <div style="margin-top: 10px;" class="form-group">
                            <div class="col-sm-12 controls" style="text-align: center;">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (isset($_GET['err'])) { ?>
                var audio = new Audio('Ding-dong-intercom.mp3');
                audio.play().catch(error => console.log("Autoplay blocked: ", error));
            <?php } ?>
        });
    </script>
  </body>
</html>
