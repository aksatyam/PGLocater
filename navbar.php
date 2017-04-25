     <?php
            include 'ownersessioncheck.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<head>

<body class="fixed-sn mdb-skin">
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="#"><img src="logoPG.png" class="img-fluid flex-center"></a>
                </div>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">

                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i>PG Details<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a  class="waves-effect" id="viewPGDetails" name="viewPGDetails" onclick="return viewPGDetails();">View PG Details</a>
                                </li>
                                <li><a  class="waves-effect" id="addPGDetails" name="addPGDetails" onclick="return addPGDetails();">Add PG Details</a>
                                </li>
                                <li><a  class="waves-effect" id="editUpdatePGDetails" name="editUpdatePGDetails" onclick="editUpdatePGDetails();">Edit & Update PG Details</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i>PG Facility<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect" id="viewPGFacility" name="viewPGFacility" onclick="return viewPGFacility();">View PG Facility</a>
                                </li>
                                <li><a href="#" class="waves-effect" id="addPGFacility" name="addPGFacility" onclick="return addPGFacility();">Add PG Facility</a>
                                </li>
                                <li><a href="#" class="waves-effect" id="editUpdatePGFacility" name="editUpdatePGFacility" onclick="return editUpdatePGFacility();">Edit & Update PG Facility</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i>Room Facility<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect" id="viewRoomFacility" name="viewRoomFacility" onclick="return viewRoomFacility();">View Room Facility</a>
                                </li>
                                <li><a href="#" class="waves-effect" id="addRoomFacility" name="addRoomFacility" onclick="return addRoomFacility();">Add Room Facility</a>
                                </li>
                                <li><a href="#" class="waves-effect" id="editUpdateRoomFacility" name="editUpdateRoomFacility" onclick="return editUpdateRoomFacility();">Edit & Update Room Facility</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">FAQ</a>
                                </li>
                                <li><a href="#" class="waves-effect">Write a message</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->&nbsp;&nbsp;
            <div class="breadcrumb-dn mr-auto">
                <div class="logo-wrapper waves-light">
                    <a href="ownerhome.php"><img src="logoPG.png" class="img-fluid flex-center" height="100px" width="100px"></a>
                </div>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-home"></i> <span class="hidden-sm-down">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">
                    <?php 
                    	$omitemail = explode(" ",$_SESSION["userinfo"]);
                    	echo $omitemail[0]." ".$omitemail[1]; 
                    ?>
                    </span></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#" data-toggle="modal" id="myModal" data-target=".bd-example-modal-lg">Profile</a>
                        <a class="dropdown-item" href="logout.php">LogOut </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    <!--Main layout-->
    <main>
<div class="container">
            <!--Card-->
<!--<div class="card-overlay" style="background-image: url('https://mdbootstrap.com/img/Photos/Exposure/Dark/courses.jpg')">-->

    <!--Content-->
    <!--<div class="white-text text-center">
        <div class="card-block">
            <h5 class="teal-text"><i class="fa fa-institution"></i> Lovely Professional University</h5>
            <h3>PG LOCATER</h3>
            <p>Popular Locations ... PG & Hostels ... Quick Tips to Find Right Paying Guest Accommodation… </p>
            <a class="btn btn-lg btn-white-outline"><i class="fa fa-clone left"></i> View project</a>
        </div>
    </div>
</div>-->
<!--/.Card-->
            <br><br>
                <div id="DisplayDiv">
                    <!-- This is where test.php should be inserted -->

            </div>
        </div>
    </main>
    <!--/Main layout-->
    <!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Owner Profile</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
               <!--Rotating card-->
                <div class="card-wrapper ">
                        <div id="card-1" class="card-rotating effect__click">

                            <!--Front Side-->
                            <div class="face front">

                                     <!-- Image-->
                                    <div class="card-up">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%2851%29.jpg" class="img-fluid" width="100%">
                                    </div>
                                <!--Avatar-->
                                    <div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%289%29.jpg" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Content-->
                                    <div class="card-block">
                                        <h4><?php echo $omitemail[0]." ".$omitemail[1];?></h4>
                                        <p></p>
                                        <!--Triggering button-->
                                            <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click Here For Update Profile</a>
                                    </div>
                            </div>
                            <!--/.Front Side-->

                            <!--Back Side-->
                            <div class="face back">

                            <!--Content-->
                            <h2>Change Password</h2>
                            <form class="form-inline">
                                <div class="md-form form-group">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form91" class="form-control validate">
                                    <label for="form92" data-error="wrong" data-success="right">Type Old Password</label>
                                </div>

                                <div class="md-form form-group">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form92" class="form-control validate">
                                    <label for="form92" data-error="wrong" data-success="right">Type New password</label>
                                </div>
                                 <div class="md-form form-group">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form92" class="form-control validate">
                                    <label for="form92" data-error="wrong" data-success="right">Type Confirm New password</label>
                                </div>

                                <div class="md-form form-group">
                                    <a href="" class="btn btn-primary btn-lg">CHANGE</a>
                                </div>

                        </form>
                        <h2>Change Mobile No</h2>
                        <form class="form-inline">
                                <div class="md-form form-group">
                                    <i class="fa fa-mobile-phone prefix"></i>
                                    <input type="email" id="form91" class="form-control">
                                    <label for="form9">Type Your Old Mob No</label>
                                </div>

                                <div class="md-form form-group">
                                    <i class="fa fa-mobile-phone prefix"></i>
                                    <input type="email" id="form91" class="form-control">
                                    <label for="form9">Type Your New Mob No</label>
                                </div>
                                <div class="md-form form-group">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form91" class="form-control validate">
                                    <label for="form92" data-error="wrong" data-success="right">Enter Password to change mobile number</label>
                                </div>

                                <div class="md-form form-group">
                                    <a href="" class="btn btn-primary btn-lg">CHANGE</a>
                                </div>
                        </form>
                            <!--Triggering button-->
                            <br/>
                                <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a>

                            </div>
                        <!--/.Back Side-->
                </div>
            </div>
            <!--/.Rotating card-->
                    </div>
                        <!--Footer-->
                        <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                     </div>
        <!--/.Content-->
    </div>
</div>
<script>
$('#myModal').onClick('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
    <!-- SCRIPTS -->
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/compiled.min.js"></script>
    <script>
    $(".button-collapse").sideNav();
        
    var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>
</body>

</html>
