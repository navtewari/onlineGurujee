<?PHP session_start();

$_SESSION['contentPage']='contact.php';
$_SESSION['img']="<img src=image/contactStrip.jpg width=50px height=350px />";

        $xmlDoc=new DOMDocument();
	$xmlDoc->load("prac.xml");
	
	$x = $xmlDoc->documentElement;
	foreach ($x->childNodes AS $item){
		if($item->nodeName != "#text"){
		//print "<br>".$item->nodeName . " = " . $item->nodeValue[0] . "<br />";
		foreach ($item->childNodes AS $subItem){
			if($subItem->nodeName != "#text"){
				//echo "<br>" . $subItem->nodeValue;
			}
		}
		//echo "<br />------------<br />";
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>.:Online Guru Jee:.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
</head>
  <body>
<!--
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><h1>Online Guru Jee</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
					<input type="submit" value=" ">
				</form>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
-->	
        <div class="col-sm-3 col-md-2 sidebar">
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="images/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				  <ul class="nav nav-sidebar">
					<li class="active"><a href="#" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<li><a href="#" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>About</a></li>
					<li><a href="#" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>History</a></li>
					<li><a href="#" class="news-icon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
				  </ul>
				  <!-- script-for-menu -->
						<script>
							$( ".top-navigation" ).click(function() {
							$( ".drop-navigation" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
					<div class="side-bottom">
						<!--<div class="side-bottom-icons">
							<ul class="nav2">
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>-->
                                               <!-- 
                                                <div class="top-search">
                                                    <form class="navbar-form navbar-right">
                                                            <input type="text" class="form-control" placeholder="Search...">
                                                            <input type="submit" value=" ">
                                                    </form>
                                                </div>
                                                -->
						<div class="copyright">
                                                    <p> © 2015 Online GuruJee. All rights reserved</p>
						</div>
					</div>
				</div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="recommended">
					<div class="recommended-grids english-grid">
						<div class="recommended-info">
							<div class="heading">
								<h3>Online गुरुजी </h3>
							</div>
							<div class="clearfix"> </div>
						</div>
                                                <?PHP foreach ($x->childNodes AS $item){?>
                                                            <?PHP $data = array(); $loop1 = 0;
                                                        if($item->nodeName != "#text"){
                                                            foreach ($item->childNodes AS $subItem){
                                                                if($subItem->nodeName != "#text"){
                                                                    $data[$loop1] = $subItem->nodeValue;
                                                                    $loop1++;
                                                                }
                                                            }    
                                                        }
                                                ?>
						<div class="col-md-2 resent-grid recommended-grid">
                                                    <div class="resent-grid-img recommended-grid-img">
                                                        <a href="http://www.onlinegurujee.in/<?PHP echo $data[4];?>"><img src="members/<?PHP echo $data[5];?>" alt="" /></a>
                                                        <div class="time">
                                                            <p><a style="color:#000" href="http://www.onlinegurujee.in/<?PHP echo $data[4];?>" class="title"><?PHP echo $data[0];?></a></a</p>
                                                        </div>
                                                    </div>
                                                    <div class="resent-grid-info recommended-grid-info">
                                                        <h5 style="float:right;margin-top: 8px;"><a href="http://www.onlinegurujee.in/<?PHP echo $data[4];?>" class="title"><?PHP echo $data[2];?></a></h5>
                                                        <h5 style="float:right;"><a href="http://www.onlinegurujee.in/<?PHP echo $data[4];?>" class="title"><?PHP echo $data[3];?></a></h5>
                                                    </div>
						</div>
                                                <?php } ?>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //footer -->
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>