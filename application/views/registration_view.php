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
                        <div class="panel-heading"><h3 class="panel-title">Create Dormer Profile</h3></div>
                            <div class="panel-body">
                            <div class="reg_form">
                            <div class="form" role="form">
                                <?php echo validation_errors('<p class="error">'); ?>
                                <?php echo form_open_multipart("admin/registration"); ?>
                                <label>Basic Information</label><br>
                                <div class="row">
                                <div class="col-xs-3">
                                <label>Student Number</label>
                                <input type="text" class="form-control" id="student_number" name="student_number" placeholder="20*******"value="<?php echo set_value('student_number'); ?>" />
                                </div>
                                <div class="col-xs-3">
                                <label for="year_level">Year Level</label>
                                <input class="form-control" type="number" id="year_level" name="year_level" value="<?php echo set_value('year_level'); ?>" />
                                </div>
                                </div>

                                <br>
                                <div class="form-group">
                                <div class="row">
                                <div class="col-xs-3">
                                <label>First Name</label>
                                <input class="form-control" type="text" id="first_name" name="first_name" value="<?php echo set_value('first_name'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label>Middle Name</label>
                                <input class="form-control" type="text" id="middle_name" name="middle_name" value="<?php echo set_value('middle_name'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label>Last Name</label>
                                <input class="form-control" type="text" id="last_name" name="last_name" value="<?php echo set_value('last_name'); ?>" />
                                </div>
                                </div>

                                <br>
                                <div class="form-group">
                                <div class="row">

                                <div class="col-xs-3">
                                    <label for="college">College</label>
                                    <input class="form-control" type="text" id="college" name="college" value="<?php echo set_value('college'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label for="department">Department</label>
                                <input class="form-control" type="text" id="department" name="department" value="<?php echo set_value('department'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label for="degree_program">Degree Program</label>
                                <input class="form-control" type="text" id="degree_program" name="degree_program" value="<?php echo set_value('degree_program'); ?>" />
                                </div>

                                </div>

                                <br>
                                <div class="form-group">
                                <div class="row">
                                <div class="col-xs-3">
                                <label for="room_assignment">Room Assignment</label>
                                <input class="form-control" type="text" id="room_assignment" name="room_assignment" value="<?php echo set_value('room_assignment'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label for="email_address">Email Address</label>
                                <input class="form-control" type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label for="phone_number">Contact Number</label>
                                <input class="form-control" type="text" id="phone_number" name="phone_number" value="<?php echo set_value('phone_number'); ?>" />
                                </div>
                                </div>                                    

                                <br>
                                <div class="form-group">
                                <div class="row">
                                <div class="col-xs-3">
                                <label for="scholarship">Scholarship</label>
                                <input class="form-control" type="text" id="scholarship" name="scholarship" value="<?php echo set_value('scholarship'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label for="stfap_bracket">STFAP Bracket</label><br>
                                <input class="form-control" type="text" id="stfap_bracket" name="stfap_bracket" value="<?php echo set_value('stfap_bracket'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label for="religion">Religion</label>
                                <input class="form-control" type="text" id="religion" name="religion" value="<?php echo set_value('religion'); ?>" />
                                </div>
                                </div>

                                <br>
                                <div class="form-group">
                                <div class="row">
                                <div class="col-xs-3">
                                <label for="birthday">Date of Birth</label>
                                <input class="form-control" type="date" id="birthday" name="birthday" value="<?php echo set_value('birthday'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label for="birthplace">Place of Birth</label>
                                <input class="form-control" type="text" id="birthplace" name="birthplace" value="<?php echo set_value('birthplace'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label for="civil_status">Civil Status</label>
                                <input class="form-control" type="text" id="civil_status" name="civil_status" value="<?php echo set_value('civil_status'); ?>" />
                                </div>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col-xs-9">
                                <label for="permanent_add">Permanent Address</label>
                                <input class="form-control" type="text" id="permanent_add" name="permanent_add" value="<?php echo set_value('permanent_add'); ?>" />
                                </div>
                                </div>
                                <br>

                                <div class="row">
                                <div class="col-xs-3">
                                <label for="special_tag">Special Tag</label>
                                <input class="form-control" type="text" id="special_tag" name="special_tag" value="<?php echo set_value('special_tag'); ?>" />
                                </div>

                                <div class="col-xs-3">
                                <label for="profile_picture">Profile Picture</label>
                                <input type="file" name="profile_picture" />
                                </div>
                                </div>
                                <br>

                                <label>Guardian Information</label><br>

                                <div class="row">
                                    <div class="col-xs-5">
                                        <label for="father_name">Name of Father</label>
                                        <input class="form-control" type="text" id="father_name" name="father_name" value="<?php echo set_value('father_name'); ?>" />
                                    </div>
                                    <div class="col-xs-4">
                                        <label for="father_num">Contact Number</label>
                                        <input class="form-control" type="text" id="father_num" name="father_num" value="<?php echo set_value('father_num'); ?>" />
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label for="father_add">Address</label>
                                        <input class="form-control" type="text" id="father_add" name="father_add" value="<?php echo set_value('father_add'); ?>" />
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="father_status">Status</label>
                                        <input class="form-control" type="text" id="father_status" name="father_status" value="<?php echo set_value('father_status  '); ?>" />
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-xs-5">
                                        <label for="mother_name">Name of Mother</label>
                                        <input class="form-control" type="text" id="mother_name" name="mother_name" value="<?php echo set_value('mother_name'); ?>" />
                                    </div>
                                    <div class="col-xs-4">
                                        <label for="mother_num">Contact Number</label>
                                        <input class="form-control" type="text" id="mother_num" name="mother_num" value="<?php echo set_value('mother_num'); ?>" />
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label for="mother_add">Address</label>
                                        <input class="form-control" type="text" id="mother_add" name="mother_add" value="<?php echo set_value('mother_add'); ?>" />
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="mother_status">Status</label>
                                        <input class="form-control" type="text" id="mother_status" name="mother_status" value="<?php echo set_value('mother_status'); ?>" />
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-xs-5">
                                        <label for="guardian_name">Name of Guardian</label>
                                        <input class="form-control" type="text" id="guardian_name" name="guardian_name" value="<?php echo set_value('guardian_name'); ?>" />
                                    </div>
                                    <div class="col-xs-4">
                                        <label for="guardian_num">Contact Number</label>
                                        <input class="form-control" type="text" id="guardian_num" name="guardian_num" value="<?php echo set_value('guardian_num'); ?>" />
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label for="guardian_add">Address</label>
                                        <input class="form-control" type="text" id="guardian_add" name="guardian_add" value="<?php echo set_value('guardian_add'); ?>" />
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="guardian_status">Status</label>
                                        <input class="form-control" type="text" id="guardian_status" name="guardian_status" value="<?php echo set_value('guardian_status'); ?>" />
                                    </div>
                                </div><br>

                                <label>Appliances</label><br>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-offset-1 col-xs-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="item_name[]" value="Laptop"> Laptop
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-offset-1 col-xs-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="item_name[]" value="Phone Charger"> Phone Charger
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-offset-1 col-xs-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="item_name[]" value="12in Electric Fan"> 12" Electric Fan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-offset-1 col-xs-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="item_name[]" value="14in Electric Fan"> 14" Electric Fan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-offset-1 col-xs-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="item_name[]" value="16in Electric Fan"> 16" Electric Fan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" class="btn btn-default" value="Submit" />
                                <?php echo form_close(); ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('select').selectpicker();
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