<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="titlelogo.png" type="image/png">
    <title>PG LOCATOR</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
    <link rel="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body
{
    padding-top: 60px;
}
#myCarousel .nav a small
{
    display: block;
}
#myCarousel .nav
{
    background: #eee;
}
.nav-justified > li > a
{
    border-radius: 0px;
}
.nav-pills>li[data-slide-to="0"].active a { background-color: #16a085; }
.nav-pills>li[data-slide-to="1"].active a { background-color: #e67e22; }
.nav-pills>li[data-slide-to="2"].active a { background-color: #2980b9; }
.nav-pills>li[data-slide-to="3"].active a { background-color: #8e44ad; }
h3{
    color:black;
}
    </style>

</head>

<body>

    <!-- Navigation -->
   
<nav class="navbar navbar-default navbar-fixed-top navbar navbar-inverse role="navigation">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
            <!--<img style="max-width:10%; margin-top: -15px;" src="t1.jpg">-->
            <img src="logoPG.png" width="150" height="30" class="d-inline-block align-top" alt="">
         </a>
        <div class="navbar-form navbar-left">
            <div class="form-group" ng-app="myapp" ng-controller="myctrl">
                <input type="search" class="form-control col-sm-offset-5" placeholder="Search ......" size="70" ng-model="search">
            </div>
            </div>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><i class="fa fa-user fa-fw"></i></b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                Login via
                <div class="social-buttons">
                  <a href="http://www.facebook.com" class="btn btn-fb"><i class="fa fa-facebook"></i></a>
                  <a href="http://www.gmail.com" class="btn btn-tw"><i class="fa fa-google-plus"></i></a>
                </div>
                                or
                 <form class="form" role="form" method="post" id="loginform" action="usercheck.php">
                    <div class="form-group">
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <label class="sr-only" for="loginemail">Email address</label>
                          <select class="form-control" id="logintype" required name="logintype">
                                <option value="" disabled selected>Select User</option>
                                <option value="owner">Pg Owner</option>
                                <option value="user">User</option>
                        </select>
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                            <label class="sr-only" for="loginemail">Email address</label>
                            <input type="email" class="form-control" id="loginemail" name="loginemail" placeholder="Email address">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <label class="sr-only" for="loginpassword">Password</label>
                            <input type="password" class="form-control" id="loginpassword" name="loginpassword" placeholder="Password">
                        </div>
                            <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block" name="loginsub">Log in</button>
                    </div>

                 </form>
              </div>
              <div class="bottom text-center">
                New here ? <a href="#" data-toggle="modal" data-target="#myModal"><b>Join Us</b></a>


              </div>
           </div>
        </li>
      </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a class="navbar-brand active" href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Large modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Registration</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                     <ul class="nav nav-tabs">
                            <li class="active"><a href="#ownerRegistration" data-toggle="tab">Owner Registration</a></li>
                            <li><a href="#userRegistration" data-toggle="tab">User Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                        <div class="tab-pane active" id="ownerRegistration">
                                <form role="form" class="form-horizontal"  method="post" action="registration.php" id="ownerregform">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Full Name</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="regfname" placeholder="First name" name="fname"/>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="reglname" placeholder="Last Name" name="lname"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="regemail" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="regemail" placeholder="Email" name="regemail"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="regmobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="regmobile" name="regmobile" placeholder="Mobile"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="regpassword" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="ownerregpassword" name="regpassword" placeholder="Password" />
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="regconfpassword" class="col-sm-2 control-label">
                                        Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="ownerregconfpassword"  name="regconfpassword" placeholder="Confirm Password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="adhar" class="col-sm-2 control-label">
                                        Adhar Number</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="adhar"  name="adhar"  placeholder="16 digit adhar number" />
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="pan" class="col-sm-2 control-label">
                                        Pan Number</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="pan"  name="pan"  placeholder="pan number" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" name="ownerregsubmit">
                                            Save & Continue</button>
                                        <button type="reset" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="userRegistration">
                                <form role="form" class="form-horizontal"  method="post" action="registration.php" id="userregform">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Full Name</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="userregfname" placeholder="First Name" name="fname"/>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="userreglname" placeholder="Last Name" name="lname"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="regemail" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="userregemail" placeholder="Email" name="regemail"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="regmobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="userregmobile" name="regmobile" placeholder="Mobile"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="regpassword" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="userregpassword" name="regpassword" placeholder="Password" />
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="regconfpassword" class="col-sm-2 control-label">
                                        Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="userregconfpassword"  name="regconfpassword" placeholder="Confirm Password" />
                                    </div>
                                </div>
                           
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" name="userregsubmit">
                                            Save & Continue</button>
                                        <button type="reset" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                                      <a href="http://www.facebook.com" class="btn btn-fb"><i class="fa fa-facebook"></i></a>
                                                      <a href="http://www.gmail.com" class="btn btn-tw"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Half Page Image Background Carousel Header -->
  <!--  <header id="myCarousel" class="carousel slide">-->
       <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item  active">
                <img src="location5.png">
                <div class="carousel-caption">
                    
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="location.png">
                <div class="carousel-caption">
                    
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="location2.png">
                <div class="carousel-caption">
                    
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="location3.jpg">
                <div class="carousel-caption">
                    
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
            <li data-target="#myCarousel" data-slide-to="3"  class="active"><a href="#">PG BUILDING</a></li>
            <li data-target="#myCarousel" data-slide-to="0"><a href="#">Royal PG</a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Ashiana PG</a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Rooms</a></li>  
        </ul>
    </div>
    <!-- End Carousel -->
</div>

    <!--</header>-->

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>PG IMAGES</h1>
            </div>
        </div>

        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/validate.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    

    <!-- Script to Activate the Carousel -->
    <script>
    $(document).ready( function() {
    $('#myCarousel').carousel({
    	interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});
    </script>
    <section id="about" style="">
 <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>What We Do</h2>
                <p>Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores.</p>
                <p>
                    <a class="btn btn-default btn-lg" href="#">Call to Action &raquo;</a>
                </p>
            </div>
            <!--<div class="col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>Start Bootstrap</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>(123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">name@example.com</a>
                </address>
            </div>-->
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #1</h2>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #2</h2>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #3</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <!--<footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>-->
            <!-- /.row -->
       <!-- </footer>-->

    </div>
</section>

     <section id="contact" style="">
            <div class="container">
                <div class="row">
                    <div class="about_our_company" style="margin-bottom: 20px;">
                        <h1 style="color:#fff;">Write Your Message</h1>
                        <div class="titleline-icon"></div>
                        <p style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form name="sentMessage" id="contactForm" novalidate="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <div class="input-group margin-bottom-sm">
                                             <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                             <label class="sr-only" for="name">Your name</label>
                                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                        </div>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                         <div class="input-group margin-bottom-sm">
                                             <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                             <label class="sr-only" for="email">Email address</label>
                                             <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                        </div>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group margin-bottom-sm">
                                             <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                             <label class="sr-only" for="phone">Mobile</label>
                                             <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    </div>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl get">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <p style="color:#fff;">
                            <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                            Phagwara,Punjab(India)
                        </p>
                        <p style="color:#fff;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                            (+8801)7123456</p>
                        <p style="color:#fff;">
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            Email@info.com</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </section> 

</body>

</html>
