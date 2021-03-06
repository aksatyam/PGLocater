<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body,html,.row-offcanvas {
  height:100%;
}

body {
  padding-top: 50px;
}

#sidebar {
  width: inherit;
  min-width: 220px;
  max-width: 220px;
  background-color:#f5f5f5;
  float: left;
  height:100%;
  position:relative;
  overflow-y:auto;
  overflow-x:hidden;
}
#main {
  height:100%;
  overflow:auto;
}

/*
 * off Canvas sidebar
 * --------------------------------------------------
 */
@media screen and (max-width: 768px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
    width:calc(100% + 220px);
  }
    
  .row-offcanvas-left
  {
    left: -220px;
  }

  .row-offcanvas-left.active {
    left: 0;
  }

  .sidebar-offcanvas {
    position: absolute;
    top: 0;
  }
}
  </style>
  <script>
  $(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});
  </script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>
  
  
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  	
  	<div class="collapse navbar-collapse">
      
  
  <!--/.nav-collapse -->
</div><!--/.navbar -->

<div class="row-offcanvas row-offcanvas-left">
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12">
        <h3>Sidebar (fixed)</h3>
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
        </ul>
      </div>
  </div>
  <div id="main">
      <div class="col-md-12">
      	  <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          <h2>Fixed + Fluid Bootstrap Template with Off-canvas Sidebar</h2>
          <div class="row">
              <div class="col-md-12"><div class="well"><p>Shrink the browser width to make the sidebar collapse off canvase.</p></div></div>
          </div>
          <div class="row">
              <div class="col-md-4"><div class="well"><p>4 cols</p></div></div>
              <div class="col-md-4"><div class="well"><p>4 cols</p></div></div>
              <div class="col-md-4"><div class="well"><p>4 cols</p></div></div>
          </div>
          <div class="row">
              <div class="col-lg-6 col-sm-6"><div class="well"><p>6 cols, 6 small cols</p></div></div>
              <div class="col-lg-6 col-sm-6"><div class="well"><p>6 cols, 6 small cols</p></div></div>
          </div>
          <div class="row">
              <div class="col-lg-4 col-sm-6"><div class="well">4 cols, 6 small cols</div></div>
              <div class="col-lg-4 col-sm-6"><div class="well">4 cols, 6 small cols</div></div>
              <div class="col-lg-4 col-sm-12"><div class="well">4 cols, 12 small cols</div></div>
          </div>
      </div>
  </div>
</div><!--/row-offcanvas -->
  
  </div>


<div id="push"></div>
</body>
<html>
        