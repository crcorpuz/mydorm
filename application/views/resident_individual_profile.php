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
    <link rel="stylesheet" href="<?php echo base_url();?>css/indiv_profile.css">
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
    .input-group
    {
        margin-left: 20px;
        margin-right: 10px;
    }
    #profile_pic
    {
        margin: 20px;
    }
    #myTab
    {
        margin-top: 10px;
    }
    #profilepanel
    {
        margin-top: 40px;
    }
    #edit_button
    {
        margin-left: 30px;
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
        <li><?php echo anchor('admin/welcome', 'Dashboard'); ?></li>
        <li class="active"><?php echo anchor('admin/view_resident_profiles', 'Resident Profiles'); ?></li>
        <li><?php echo anchor('admin/view_financial_records', 'Financial Records'); ?></li>
        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="page-content inset">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="container">
                            <div class="row">
                                <div class="col-xs-2">
                                     <img id="profile_pic" class="pic img-circle" src="http://webgel.net/bf/raccoon.jpg" alt="...">
                                     <a href="<?php echo site_url('admin/edit_profile/'.$record->student_number.''); ?>">
                                        <button type="submit" id="edit_button" class="btn btn-default">Edit Profile</button>
                                     </a>
                                </div>
                                <div class="col-xs-9">
                                    <div class="panel" id="profilepanel">
                                    <?php 
                                            echo "<label>".$record->student_number."</label><br>";
                                    ?>
                                    </div>
                                    <ul class="nav nav-tabs" id="tabs">
                                        <li class="active"><a href="#profile" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
                                        <li><a href="#payments" data-toggle="tab"><i class="fa fa-book"></i> Payments</a></li>
                                        <li><a href="#events" data-toggle="tab"><i class="fa fa-clock-o"></i> Events</a></li>
                                    </ul>
                                    <div id="my-tab-content" class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <div class="panel" id="profilepanel">
                                                <h1>Basic Information</h1><hr>
                                                <label>Name: </label> 
                                                <?php echo "\t".$record->last_name.", ".$record->first_name.", ".$record->middle_name."<br>"; ?>
                                                <label>Year Level: </label>
                                                <?php echo $record->year_level."<br>"; ?>
                                                <label>Degree Program: </label>
                                                <?php echo $record->degree_program."<br>"; ?>
                                                <label>Department: </label>
                                                <?php echo $record->department."<br>"; ?>
                                                <label>College: </label>
                                                <?php echo $record->college."<br>"; ?>
                                                <label>Room Assignment: </label>
                                                <?php echo $record->room_assignment."<br>"; ?>
                                                <label>E-mail Address: </label>
                                                <?php echo $record->email."<br>"; ?>
                                                <label>Contact Number: </label>
                                                <?php echo $record->phone_number."<br>"; ?>
                                                <label>Scholarship: </label>
                                                <?php echo $record->scholarship."<br>"; ?>
                                                <label>STFAP Bracket: </label>
                                                <?php echo $record->stfap_bracket."<br>"; ?>
                                                <label>Religion: </label>
                                                <?php echo $record->religion."<br>"; ?>
                                                <label>Date of Birth: </label>
                                                <?php echo $record->birthday."<br>"; ?>
                                                <label>Place of Birth: </label>
                                                <?php echo $record->birthplace."<br>"; ?>
                                                <label>Permanent Address: </label>
                                                <?php echo $record->permanent_add."<br>"; ?>
                                                <label>Civil Status: </label>
                                                <?php echo $record->civil_status."<br>"; ?>
                                                <label>Special Tag: </label>
                                                <?php echo $record->special_tag."<br>"; ?>

                                                <h1>Guardian Information</h1><hr>
                                                <label>Father's Name: </label>
                                                <?php echo $guardian->father_name."<br>"; ?>
                                                <label>Status: </label>
                                                <?php echo $guardian->father_status."<br>"; ?>
                                                <label>Contact Number: </label>
                                                <?php echo $guardian->father_num."<br>"; ?>
                                                <label>Address: </label>
                                                <?php echo $guardian->father_add."<br><br>"; ?>

                                                <label>Mothers's Name: </label>
                                                <?php echo $guardian->mother_name."<br>"; ?>
                                                <label>Status: </label>
                                                <?php echo $guardian->mother_status."<br>"; ?>
                                                <label>Contact Number: </label>
                                                <?php echo $guardian->mother_num."<br>"; ?>
                                                <label>Address: </label>
                                                <?php echo $guardian->mother_add."<br><br>"; ?>

                                                <label>Guardian's Name: </label>
                                                <?php echo $guardian->guardian_name."<br>"; ?>
                                                <label>Status: </label>
                                                <?php echo $guardian->guardian_status."<br>"; ?>
                                                <label>Contact Number: </label>
                                                <?php echo $guardian->guardian_num."<br>"; ?>
                                                <label>Address: </label>
                                                <?php echo $guardian->guardian_add."<br><br>"; ?>

                                                <h1>Appliances Owned</h1><hr>
                                                <?php 
                                                    foreach ($appliances as $appliance) {
                                                        echo $appliance->item_name."<br>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="payments">
                                            <h1>Payments</h1>
                                            <p>Payment details go here.</p>
                                        </div>
                                        <div class="tab-pane" id="events">
                                            <h1>Events</h1>
                                            <p>Event details go here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
            $('#tabs').tab();
         });
        </script>
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