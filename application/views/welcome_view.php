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
        margin-top: -2px;
        margin-right: -2px;
        margin-left: -2px;
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
    .username
    {
        font-family: 'Lato', sans-serif;
        font-size: 15px;
        text-align:right;
        margin: 5px;
        position: right;
        float: right;
    }
    .dormname{
        font-family: 'Lato', sans-serif;
        font-size: 15px;
        text-align:left;
        margin: 5px;
        float: left;
    }
    .dropdown-menu 
    {
        text-align: center;
    }
    </style>
</head>
<body>
<div id = "content">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="my-dorm"><i class="fa fa-home"></i> MyDorm</h1>
            <h2 class="name-up">University of the Philippines Diliman</h2>
        </div> <!--panel heading-->
        <div class="container-fluid"> 
            <div class="pure-g">
                <div class="pure-u-1-2 l-box inline"> <div class="dormname">Kamia Residence Hall<br>1st Semester AY 2014-2015</div></div>
                <div class="pure-u-1-2 l-box">
                <div class ="username">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('first_name'); ?> <?php echo $this->session->userdata('last_name'); ?><b class="caret"></b></a>
                    <ul class="dropdown-menu pull-right">
                    <li><a href="#">Edit Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="admin/logout"><?php echo anchor('admin/logout', 'Logout'); ?></a></li>
                    </ul>
                    <br>
                    Dorm Manager    
                </div><!--dropdown--> 
                </div><!--username-->
                </div><!--pure-u-1-2-->
            </div><!--pure-g-->
        </div> <!--container fluid-->
    </div> <!--panel panel-primary-->

       <div id="wrapper">
    <div class="container-fluid" id="sidebar-wrapper">
        <ul class="nav nav-pills nav-stacked">
        <li class="active"><?php echo anchor('admin/welcome', 'Dashboard'); ?></li>
        <li ><?php echo anchor('admin/view_resident_profiles', 'Resident Profiles'); ?></li>
        <li><?php echo anchor('admin/view_financial_records', 'Financial Records'); ?></li>
        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="page-content inset">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Welcome <?php echo $this->session->userdata('first_name'); ?> <?php echo $this->session->userdata('last_name'); ?>!</h3></div>
                            <div class="panel-body">
                            <form>
                            <h1>This is will contain a summary of the collections made and modifications to the database. </h1>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container -->
    <!-- JavaScript -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.2.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js" ></script>
<!--script src="tttttjs/jquery-1.10.2.js"></script-->
<!--script src="js/bootstrap.js"></script-->
</div>
</body>
</html>