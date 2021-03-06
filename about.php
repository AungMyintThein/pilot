<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Pilot : About</title>
	<link rel="icon" href="favicon.ico" type="image/gif"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      
	  /* Sticky footer styles
      -------------------------------------------------- */
      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      
      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }
	  /* end of Sticky footer styles
      -------------------------------------------------- */
	  
      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
	<div id="wrap">
    <div class="container-narrow">
      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li><a href="home.php">Home</a></li>
          <li class="active"><a href="#">About</a></li>
        </ul>
        <h3 class="muted">INSEAD eLab Pilot Program</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Pilot Program!</h1>
        <p class="lead">This will let you choose which kind of data, which year and time series you may want to download, and will give excel sheet. Try it out! and give feedback.</p>        
      </div>
	  
      <hr>
		
      <div class="row-fluid marketing">
		<div class="span6">
		  <form action="sendFeedback.php" method="post">
			<fieldset>
			  <h4>Name</h4>
			  <input type="text" name="name" placeholder="your name">
		
			  <h4>Email</h4>
			  <input type="text" name="email" placeholder="your email">
			
			  <h4>Feedback</h4>
			  <textarea rows="3" name="feedback" placeholder="feedback"></textarea>
			  <br/>
			  <button type="submit" class="btn">Submit</button>
			</fieldset>
		</form>		
	  </div>
	
	  <div class="span6">
        <h4>Contact:</h4>
		<h5>Aung Myint Thein</h5>
		<p>Research Programmer</p>
		<p>eLab | Asia Pacific</p>
        <p>Email : <a href="mailto:myintthein.aung@insead.edu">myintthein.aung@insead.edu</a></p>
      </div>
    </div>
	
    </div> <!-- /container -->
	</div>
	
	<div id="footer">
      <div class="container">
        <p class="muted credit">&copy; INSEAD eLab 2013</p>
      </div>
    </div>
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
