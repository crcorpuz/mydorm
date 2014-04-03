<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo (isset($title)) ? $title : "My Dorm" ?> </title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="Christine Balili" content="">

    <title>MyDorm</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css" />
    <!--link href="css/bootstrap.css" rel="stylesheet"-->
	
     <!-- Add custom CSS here -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/pure-auto-css.css" />
    <!--link href="css/pure-auto-css.css" rel="stylesheet"-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.1/base-min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/main-grid.css">
     <link rel="stylesheet" href="<?php echo base_url();?>css/regform.css">
    <!--fonts-->
    <!--link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'-->
    <!--link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Merriweather' type='text/css'-->
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato' type='text/css'-->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <style>
	body {
        margin-top: 60px;
    }

    .fa-home{
        font-size: 40px;
    }
    .my-dorm{
        font-family: 'Merriweather', serif;
        font-size: 30px;
        color: white;
        margin-bottom: 1px;
        text-align: center;
    }
    .name-up{
        font-family: 'Lato', sans-serif;
        font-size: 15px;
        color: white;
        margin-top: 3px;
        text-align: center;
    }
    .signin_form
    {
        margin-left: 45px;
    }
    </style>
</head><body>
<div id = "content">
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-lrg-1-3"></div>
            <div class="l-box pure-u-1 pure-u-lrg-1-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1 class="my-dorm"><i class="fa fa-home"></i> MyDorm</h1>
                        <h2 class="name-up">University of the Philippines Diliman</h2>
                    </div>
                    <div class="container-fluid">
                    <div class="panel-body">
					<?php echo form_open("admin/login"); ?>
					<div class="signin_form">
                        <form class="form-horizontal" role="form">

				            <div class="form-group">
				            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				            <div class="col-sm-10">
				                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="">
				            </div>
				            </div>

                            <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" value="">
                            </div>
  
                            <div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-default" value="Sign in">Sign in</button>
                            </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <br>
        <center>
            <script language="javascript">
                var localTime = new Date();
                document.write(localTime.toLocaleDateString() + "<br>")
                document.write(localTime.toLocaleTimeString())
            </script>
        </center>
    <!-- /.container -->

    <!-- JavaScript -->
    
    <script src="tttttjs/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</div>
</body>



</html>