<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Class Annex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="../assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/plugins.min.css" rel="stylesheet">
    <link href="../assets/css/style.min.css" rel="stylesheet">
    <link href="../assets/summernote/summernote.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <script src="../assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body data-page="blank_page">
    <!-- BEGIN TOP MENU -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="index.php">
                    <!-- <img src="../assets/img/logo.png" alt="logo" width="79" height="26"> -->
                    PASSCO
                </a>
            </div>
            <div class="navbar-center">Welcome </div>
           <!-- <div class="navbar-center">Welcome <?php echo $_SESSION['name'];?></div>-->
            <div class="navbar-collapse collapse">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right header-menu">
                    
                    <!-- BEGIN USER DROPDOWN -->
                    <li class="dropdown" id="user-header">
                        <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <!-- <img src="../assets/img/avatars/avatar2.png" alt="user avatar" width="30" class="p-r-5"> -->
                            <span class="username">Lecturer</span>
                            <i class="fa fa-angle-down p-r-10"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php">
                                    <i class="glyph-icon flaticon-settings21"></i> Profile
                                </a>
                            </li> 
                            <li>
                                <a href="../logout.php">
                                    <i class="glyph-icon flaticon-settings21"></i> Logout
                                </a>
                            </li>

                            
                            <li class="dropdown-footer clearfix">
							<a href="javascript:;" class="toggle_fullscreen" title="Fullscreen">
								<i class="glyph-icon flaticon-fullscreen3"></i>
							</a>
							<a href="#" title="Lock Screen">
								<i class="glyph-icon flaticon-padlock23"></i>
							</a>
							<a href="../logout.php" title="Logout">
								<i class="fa fa-power-off"></i>
							</a>
						</li>
                        </ul>
                    </li>
                    <!-- END USER DROPDOWN -->
 
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </nav>
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        <nav id="sidebar">
            <div id="main-menu">
                <ul class="sidebar-nav">
                    <?php foreach (find_subjects_by_examtype('WASSCE') as $navSubject) :?> 
                        <li>
                            <a href="subjects_info.php?subject_id=<?=$navSubject['id'];?>" alt=""><i class="fa fa-dashboard"></i> <?php $navSubject['subject_name'];?></span></a>
                        </li>
                    <?php endforeach ?>
                    
                    <!-- <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="add_lecturer.php" ><i class="glyph-icon flaticon-frontend"></i><span class="sidebar-text">Add Lecturer</span></a>
                    </li>
                    <li>
                        <a href="lecturers.php"><i class="glyph-icon flaticon-widgets"></i><span class="sidebar-text">CS Lecturers </span></a>
                    </li>
                    <li>
                        <a href="add_course.php" ><i class="glyph-icon flaticon-frontend"></i><span class="sidebar-text">Add Course</span></a>
                    </li>
                    <li>
                        <a href="courses.php"><i class="glyph-icon flaticon-charts2"></i><span class="sidebar-text">CS Courses</span></a>
                    </li> -->
                     
                </ul>
            </div>
 
        </nav>
        <!-- END MAIN SIDEBAR -->
        <?php echo feedback_message(); ?>