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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
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
fieldset 
	{
		border: 1px solid #ddd !important;
		margin: 0;
		xmin-width: 0;
		padding: 5px;       
		position: relative;
		border-radius:4px;
		background-color:#f5f5f5;
		padding-left:10px!important;
	}	
	
		legend
		{
			font-size:14px;
			font-weight:bold;
			margin-bottom: 0px; 
			width: 90%; 
            text-align: center;
			border: 1px solid #ddd;
			border-radius: 4px; 
			padding: 5px 5px 5px 10px; 
			background-color: #ffffff;
		}
        #result{
            width:100%;
            height: 150px;
            overflow: scroll;
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
            <div class="form-group">
                    <div class="input-group">
					    <span class="input-group-addon">Search</span>
					    <input type="text" name="search_text" id="search_text" placeholder="Search by PG Details" class="form-control" />
				    </div>
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
                                            Clear</button>
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
            <fieldset class="row">    	
					<legend>Serach Results</legend>
					<div class="panel panel-default">
						<div class="panel-body">
							<div id="result">
                            
                            </div>
						</div>
					</div>
					
				</fieldset>	
                        <script>
                                    $(document).ready(function(){

                                    load_data();

                                    function load_data(query)
                                    {
                                    $.ajax({
                                    url:"fetch.php",
                                    method:"POST",
                                    data:{query:query},
                                    success:function(data)
                                    {
                                        $('#result').html(data);
                                    }
                                    });
                                    }
                                    $('#search_text').keyup(function(){
                                    var search = $(this).val();
                                    if(search != '')
                                    {
                                    load_data(search);
                                    }
                                    else
                                    {
                                    load_data();
                                    }
                                    });
                                    });
                        </script>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <img src="la.jpg" alt="Los Angeles">
            </div>

            <div class="item">
            <img src="chicago.jpg" alt="Chicago">
            </div>

            <div class="item">
            <img src="ny.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
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
                <img class="img-thumbnail img-responsive img-center" src="data:image/jpeg;base64,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" alt="">
                <h2>Marketing Box #1</h2>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-4">
                <img class=".img-thumbnail img-responsive img-center" src="data:image/jpeg;base64,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" alt="">
                <h2>Marketing Box #2</h2>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-4">
                <img class=".img-thumbnail img-responsive img-center" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQTEhQUEhQUFBQUFRQUFBQVFBQVFBcUFBQXFhUUFBQYHCggGBolHBQVITEhJSkrLi4uFx8zODMsNygtLiwBCgoKDg0OGhAQGiwkHCQsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsK//AABEIAMIBAwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAIDBAYBBwj/xABHEAACAQICBQgGBwUGBwEAAAABAgADEQQhBRIxQVEGImFxgZGhwQcTMlKx0UJicpLC4fAUFSOCojNTk7Kz8SQ0c3SDo9JD/8QAGQEAAwEBAQAAAAAAAAAAAAAAAQIDAAQF/8QAJREAAgICAgICAwADAAAAAAAAAAECEQMhEjETMkFRBCJhFHGR/9oADAMBAAIRAxEAPwCqiX2dZvsA4mSXUbBrdLXA7FGfjBmiMAGotUd2p0UGvUZc2Y6xSnTS+V7hj/MvYZ0LohWq03DvVw9WnUK6xKsroQCraptfbs4GebFHa5EQZd626VJ8QxN+8TrJbpB2Hj+fRBugKLYgVFWqwrKgekt11XsecpJ35rbrk2PqGkxoioXdULVDZdQVV5xVMr2Chgb7TbZaZO1ZrLgEeBAKaVqD3T1j5GTLpZ96r4/ODkghtRJVgVdMH3B328pMmmRvT+r8prRg3TlqjAVPTK+63hLlLTNPgw7B85rQTRYaH9GjZMjo3S9J2ChjrHYCp3C5z2TXaMbZAE0eHGUmkVA5SWd2L1RwS7GOIF0gkOEwPpNpH8hKy2B7AFeMwftHqncQY3Be0eqc51F5zKdcy25lKsYUZlKtKdUS5UlSqIwpVcSEiWHEiIjAGqJcwyZiV0EI4KnCFbLf7NBmMXOHjTOrbdA+OEJmgNVErOsuVVldxDQjKxEl0bS1sRQXjVpj+sTjCXuTVLWxtAfXv90FvKUitk5PTPVNSKTWinbR49Hhmi6ifs70KrFUqWAfV1tSorl1LKMypvb+Qyf97/s6UaWGYP6sOWqOhCszm51VuCALnwg2nTUXyuDkRrHMeR6fzEccCv0W7C2qR3mx7DPC8jrR73FBfC6cVUasyUziQRTRVQogp7S2057Rfq3XlblJQos5r0XU66HXQbQ7rqi/AkMSRxQnfKAwYG17dTBz2Bb+JE5WUEAAkKMwLgkneSbbdnVG8jrYvBfAHuwNrd0tIhI2HPqkVRCGNievKW6ANhn4RW9DEYptwPh849UPAywL8R3fnHLfo/3i2aiuAeHgY8kgbM+2T59HeflGgHeB3/lNYS9yYqj1ygkX51hv9k5jxnoeCxFp5to1rV6Z2G/xBHnNnSryq6MmbbB48Wzk2MxSlCCd242mPp4y0bWxxI2xlOS0mI4Rbs1GExCU6dl3lm7WYnzt2QfjcXeA0xptE2JvA232NFJdE1apHYNsz1Si9SS4SpmZghN3lOs861WVqrwoNjKjSs5jqjSBzHQtnGMZaOjqa3jAFTWEsELQroLQi1KRZwDdrL1C3neWsdoZUsUBHO4m1rcCYzTqwxlG6KVWpzYFxcN1cKYNxVC0RMrJaAlVZXZZfrLKjiVRBldhC3ImlfHJ9VXP9JHnBbCaH0e074qofdpHxZfzlIdkcnqz0S0UdaKdNnBxPnz1g4iLXEgDr0d06HXgO6eBR7JNrRhbp2RnN4DujWC8B3Q0Aq1/bOzPh1SbDNkO2VsQAGyGUlw357THfQpdUx6t8JEvb3n5xxTr72+cmwjw2ycJ+MaFHT3mIzGJsE38Wn9oeM1QeY7Ct/Fp5/SXr2zUlp0Q6FLXro16kr604WhCWFqSQVJTDR4eYxZLyXD1Nso60kpPMEImpIneQesjWaY1jnaRExExt46AOEs4dZVUy1h3sYwUejaGoalGmOi/3s/OPxqXt2wdh+UVEFKdzrMvNGX0RnnfKPxelUB1ibKMrnjtMvOS4UiEYS5XQq9EQDpFIaxGJEA6QrXnMjrjajsCYkShUl3EtKTmWiRkyFpqfRrT/iYhuAQd5b5TLNNl6M05tduLqO4E/iloLZz5PVm1inYpY5qPmT9vpqOdRbaBlXc7b/VHCdGlqX9y3+M8oY17jqt5jzlS88+v4v8Ah3Br960v7k/4ryLF6RVkfURkYIzA+sc2K57Dkd8FAyWnnrDilQd6ND/sBToaRqFwGckXXuJAmho1dtrHt8Ji6dXnA9XgZs6DbbRfyIpVQMbZOuKPu36bx64g7x47I1Hjw05GWs6tc8PGO143WiLwBO0G/iU/trw94TUkzK0WPrE+0t+8TTFpeHQg/Wi1pFedvGGJLzutItaLWmMS60cjyDWiDTGLgedLSsHjteZGJC0WtMjpzlQ9Gs1MIjBdXM6181B3HplNeXDb6I7HI/DKJMXkjdhpNTaYWny4XfRbscHylqny6o76dX+g+cNGUkegYU5g7xsO8X4GR8or6tMgObvYkEm10bVNr5c4KL9My2E5eYYbRVH8in4NDmE5e4Cw1qrA9NKpl3AzLTKWmqs1FZ7CCMVUlGryzwR2YgdqVB8VlGtyjwp2Yil2tb4zJBlNFms0rMZX/e1Ftlakeqovzi/aFOxgeogyqINkhM3vo1S2Gc+9VbwVBPPXfI9U9J9Hq2wSH3mqH+ojylYdkMnRpYoopUifK9XRiKp1FUMbAhT09PZKpw7CwItfZcj5yNdHYw7Sfvr5SVdEYv3v/Y3lONq32jquvgkGBfgO8SWjgnDAm1s758QRK37gxR//AEA/8j/KdHJiudtUfecwcf6G39GZU7OoTaUX4DrF/wAoPPI999RfumEKVI7Duyvcbt8GdprQMaaJ9f8AV/ykmt+r/lK/q24W7ROc4e6RvBb4EbJxtWVLWtn+f5Rp27fh8pCLneg6mv5R6U2tuv0X+U1M1klMc5ehgfETVM0yYpNcbTmPot8pptaWgqQCXWi1pEXkdXEKubMF6yBCEslpzWlIaQpn6afeEmFQHZnMYn1otaQ68RaYxYDxwaVg0caoAucgJgmJ5U4Gq2IqOtN2U6tiqlgbIoOzpvAFamy+0CvWCPjPSNA6Q1q7q2avmARsyytf7PjNA2jgdmfQSPlCskvoDxniYM7eeyVeTFNxzqVJutVv2GCcVyTwxNjS1T9VnHhe0PnS9k0DxM8zDRwebqryKoH2Xqr0XQj/AC38ZRr8hj9CsP5kt4hvKMs0AcJGSZ4xjNFW5GYgbDTbqYg+K+co1+TmKXbRY/ZKt4A3lFOP2I4sElolk1XB1F9um6/aVh8RIlEoiUi3h6h3EjqJn076OqGpo3CjPOkHN8zeoS+/7U+YaHVPrLk/h/V4XDp7lGkv3aajyll0SfZfiivFCY+eLxwMjvGmuo2sveJwHcWAY68hp1ARcEEcRmJ0vCAkYwNj6tNHChNZ2zC5Ab82O4ZGEmaBdM4YsQ6ZVF2dI90+MwGOLkbBSH8hbxuI9Mc4/uz/ACMviGPwg6lig4uMuI3g8DOGpIc5p7G4oPYLTKswR19Wx2Z3RuhW49BAhFnmMZgbg5g/q4O4y9oPSxLPSqEtqDmudpGVgeJz2y8JchGkgrobGsz1FdtYDNcgLC+zLbtHdDBeZfQdxWYkgBg2rfK+a7O6HH1hc5t0DyvDlSTBjviPr17TOYesbtrZuGIZjtPC3AW3QlXxO6xHXM9iK/8AxFgcimzpva8lONrQ6ewsKx4zjVSpvTOq236jdDjZ27ZXpgnYCZJ+y1TspVD1Ix+AnPG09FGkHdH48VFuMiMmU7VPCWWeBNBaJritUZqVQAqApKsAdl8j1CaKloyodo1RxyPcLzpEVkIeZ/T2NYsV3Ls6+M1raIb6LA9BBU90yfKLAOlXnKVUgZ52Y2zF9m6Kx0iromsVqBiTe/TPR8BiNZQZ5tRoAndc7hum30ICqBTnbZeGKM5IL4jSOoMhrG245DPjMdyl5WtTZNWmvO17gk7FtaxFs8z3Q/i3IBJ2DPt3CeecsxZ6Q36rE9pHyM6OEWtkZSaDGH5cIfbpMPssG+NoSw/KrDN9MqeDKw8QCPGee4HA1KtxTQuVFza17du3sja+HdDZ1ZDwZSp8ZJ4IhWSR65oyslc2p1EbK+TA/CX8XhRTXWZlsOu56phOQCGiald0yZAtMna1zdtX6vNXP84a0hji7Xc9Q4Dok3CK0UUnVk2ExJqVWTYNW4v0HPtz8JPX0Ure0tNutQfKZuhitWsHAI3G2yxymsw9e4lo40S5X2CKvJykSqimoLEDm3XblsE9/AtkN08k0cdbEUF41af+cXnrk6capEclXoyOneUgo13p39nV8UDecU8l9JuKY6TxNjkGRdvu0kXynJ1KKo53Iy2lKtR6jMtSynZZRst0ynSoOGuXZrbt3dBJxtT3jGHEMdrHvnn+N/Z1+RG80PVuhHA/GEC0x3JWsfWMLnML07yPMTW3iuPHQ6dnWMq4iTMZVxb2UngCe7OK9o1gPQuF1qlYXtZuHS3yhn9zj3m8PlM1T0hq1nZWKqy8eNvO8dU0z9dj3+cTJjnKVoMZxSpmy0ZyZpvcs79AUqO+4MfX5NJRcuLkNlrX8DuvlG8n8V/CpsN6zS4bGKws2/LoMRxdUUTRmv2OnsIB7QZNqrx77mXdJ4EIQy+wcuo8OqULicc+SdMqqoeETgO4whgdI6h9kEdAAPYd/bBtxF60RU5Lo2jX4TGJUHNPWNhHWJYBmJTF6pBBsRsImlwOlA6Bjt39c6cdy+BW0FAscElNceJxtIy6xsHJF1qd9okb0Ta2RHut85SOkCegSJ8eYyxsDmh+I0ZQYZ0lHSBqsD1raQJgtT2XuODC57xG+vJv2SjjMbqjnEAbMzYd8ooiOSLOOS42qSMxnlt3zzjlZhqgq+sqOrBzqrqgjVCjJbH9XvNSdKq7aqnW46tzkOAGf62S5iOTgxKrrgqouV9sNmNpyFpS67Jv9ujB6C0wcOWIXW1wBkbEWvsyN9s1eF5WUGFmLJutUXWHaRfxktP0c0yTeu1tyhQCOtmOfdG4v0a/3dfsdPxKfKBtNGSkglWq3zGdwLHda2VpV1L3vL2KohCFA1QAAANgsLZd0E4rF2JAOzcOHH85zxVMebso16YBBtc9I2QroXGE80nnDdBNLWY8xe07PGF8Hgcwze0M7jLv4zoxpkJM1XJga2Ow4+sW+6rN+GeuzynkDSvjlJ+hTdu8av4p6nUewJOwAnul0Sk9nzJysxGvjcU22+IrW6hUYDwAigqviS7Mx2sxY9bG/nOy3KiVGUnROTonOWCvJ7EalW9r3Rh4g+U0TaTO5RMrof8Atk6b/wCUzUeqkMrpl8atDf3ix3DukFStUa97gd17yz6uMekZLkU4mXwlEFgG2WPgbecvGkg2Be6TPgDrrZcjrXO7cc5MuiydspLJexFjLnJnSI/smOeZXp3kfEzT0qk84sVbLIg5EbiDNTonTYYBXycdzdI+UPHZr0aLE4k6jKcxa46CMxBDODnnJsTjV1doznOT2E9aTrsQq5ZWzPXuk82NaNCb6KpbzjC01eI5Ppa6XvwY5Htgp6IU21QCNuU55y4/BVRv5BaHy2Q1outZLHLO9j1CQhhOxI/kNO0hvF/QkcWJxMUpOZsOo+UH2nbGN/kzD44mho4VWFw4I6JOMCm+57flMzSJBurWPRkYTw2lmGT84cdjfIykc19gcKDCYamPo3vxJMf6mlvpoetVPxEgw+JVxzTfo2HtEmluwXRYSooyAA6AAI71wlS05Go3ItNVB6eyMLruJHV8pXJnDGoFixVNXHOUN07G74Cr8m6TNdWYHeCcj18YZMaxmoVpMDjRJTZJkBG0Qhr9sjaxlE2ScEHvRul8VVb3aVvvOv8A8zb8pcR6vB4l/coVm7RTYiZX0bJzsQeHq1/zn5Qr6SK+pozFnjT1P8RlT8UtE55+x82XE7ImihsmAbxRARwEmXLGj31aiHgw7r5zcBJglm6w1bWVTxAPeJz5l0dGIlCTuqJ0ThM52VISZG9YCdqGQMs2jAHHIQxvvuR2mU6zZds0GKoawt3HpgDEIRcHaDOjG7IzRF608SZ6Tyfqj1espuGYm/Hd5TzQCbzkxVHqVUbVuG6ySfOUmicDZ4XF8ZLisGtQZ7dx+fGCaTwhh8RaTcLKqQKxeEamcxluI2H5GQAzVc1xYgEbwYIx2itW7JcrvXeOriJyTwVtFY5AaRFOidtI0Us5edvx78py0V4VEFjle2YOfHYZfwulWGT5jjv/ADg31nSI0vfiez9foy0FJdCSaNXRqBhdTcR95mcLinpm4GW8EjMTQmuLXG/Pvnfii5IhLIkSNInMieuZBUqS3hJPMWGqyvUriV6jyLWyh8aQPKyZsVK74w7pFUbLulcNtPbNxQrmz030V50Kzn6Va33UU/iMb6Za+roxx79Wivc2v+CWfRYlsAp96pUbuIX8MB+nWvbCUE96vrfcpsPxiFEm/wBjw5m/Voo1jFFsegOBOgRsUmUJlmm0LXvTHQLdxPkRMoJouTZ5jDg3xAk8q/Urjew6rRxjEj7zmo6CCoI0pJyk4UgAU6iQZpTAlhdRzuHEfOHmpSP1caMqdoDVmTGj6m3VtbiRLmi8eaL621TYMOjiOkQ9UTI9R+EykspuRJxUT0rB4gMoINwQCCN4MuI8890Hpc0Tqtc0ic+Kk/SHRxH6O5o1gwBBBBAII2EcZRChWjWhChVvAtJ5eovKKNiOTRT05hdU66jJva4X49sFXP8AsPl1TRY0a6Mu+1x2TNVCdw2bRnt/QkMmGKlYY5ZND9m8ntNj28MhGFhGipfbIiIOCA5Nk61Ru4zpq5ZmVusxjG525RxS7Tqb+2G8FW1qano+BMzOIrgLYDM5d8N6NrfwgOvdbfL4XsSfRdYyJzGvVlao9zOgQdUqSIvI3YbSbAbzBmM0/Rp5a4J+rzj4RW0FBDEVdwzMrV6psQMzYk9GUAVuURP9lTP2my7v95VOMrNkWCg7Qo+J2+Mm5Ifiz6Q9HlLV0dhxxVm++7MPjML6fMR/yif9d/8ATA856RyXoerweFT3aFEHrFNb+M8d9OeIvjqa7kw6W62qVCfACEhF3I83LRSNpyT2XoHRTgnYgx2G+TbZuPsn4wHCvJ5v4hHFfgR84s/Vjw9jUKvTHiR05IBOU6iUCK0SzsXZhsjYSUiNKwoBA0x7CxtwmxdYB0xg/pr/ADfOViJIF3hXQmmWo81rmme9erogi8QMqtEmem6Pxy1FDKQQYXpPlPKdF6Saicswfo9PEdM2WjOVFFl57ahG0EG/ZYG8vBojJM1DVbEH9WMzmIqlXYA7GI7jKmM5X0VuEDv1DVH9ZBkVfGCoddb6rjWF8jYxcz0jRTLVTPNfaG0D4iValcEW3yv+1rTz1wp67fGcr6boWux1jwXPxEilY5OiMc9lp3W1RnaBMTyjGxENvrGx8LwdX0xVbeF6h87w8WY12Hpm+u1ugS1+/qNIc9xnmALse4TzurWZvaZm6yTGCPD9XYGrNtieWqfQps3AkhR5mBsXyprv7Oqg+qLnvb5QFEDHc5Myigpr+t/tKjueDNl2CSCko2Afrpg0SxSrnfn8ZKSbHUki5eT4WmWZVG1iFHWTbzlVXvshvkhR18bhV44ij3CopPgDNBbNJ6s+mkAUAbAot2AT5q5eafXHYpq6AqCqoFbbZLi4IyN733bZ9BcosRqYXEuNq0KzDrFNiJ8w0sMS2W6wFwbE3sBcbPynTLRxY/spNFLGIwlUMQabgjIjUb5TsjZ02BJ2cnRAE6IQ0Gf4oy2gjwv5QfC/J089hxA8D+cEvVjw7NLSElAkdISYCch0nVjxOCdmMIxsfGzGIaglZ13S6RIHSOhTK6Rwppt9U7D5SpNXi8MHUqew8DxmXrUypIO0bZSLJSIak4GnakZKomzt5K2KcgLrGwAAF7ZDqkMUxrFFFFMAUUV5yYx2IyxQwVR9inrOQ8ZfoaDP02t0DPxmMB45UO2xtxtl3zS0dF01+jfpOcZpZLUj1j4zBAIjgZwRTGJUM1/oz52ksKCPps33Kbt5THIZvPQ9TvpFT7lKs3eFT8ceCuSJzdRZ7Pyyc/sGMtt/Zq3+m0+d9EYimtXWqswAKsFA9og7z0bZ9H6TqgUapaxAp1CQdhAQ3BHCfLSVANvC17A7uB+Mrk1RHD0z1Aacwxz9cgvuLWPcdkU8uaiTndTfO4Itn0TsjyRXivsGxCdiilBCaLQaDbYXyztFFEyepSHYeSTCKKc50CEdFFMY5ENsUUxjjSN4oo6FITAHKAc9fs+cUUaIkugQ+yMiiliLFFFFMAQnDFFMYQh7Q1JbXsL8bC87FCEKiOiigCdMGadPMH2hFFMYBTk7FMBjlnonoV/52p/2z/6tKdilMfaJZfU9W5Un/gsV/wBvX/02nzJUiilMpPAS0tnf8YoopzHQf//Z" alt="">
                <h2>Marketing Box #3</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>

     <section id="contact" style="">
            <div class="container">
                <div class="row">
                    <div class="about_our_company" style="margin-bottom: 20px;">
                        <h1 style="color:#fff;">Write Your Message</h1>
                        <div class="titleline-icon"></div>
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
                            (+91) 9465185365</p>
                        <p style="color:#fff;">
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            pglocater.info@gmail.com</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </section> 

</body>

</html>