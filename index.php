<?php
require_once("connection.php");
session_start();
if(count($_POST)>0) 
{
$Name = $_POST['name'];
$Email = $_POST['email'];
$Comment = $_POST['comment'];
$sql="INSERT INTO website(Name,Email,Comment) VALUES ('$Name','$Email','$Comment')";
if($link->query($sql)==TRUE){
 header("location:index.php");
}else
{
	header("location:index.php");
}}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
  
  <title>Well Come to | FAST-NUCES </title>
  
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" href="favicon.ico" type="image/x-icon"/>
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: black;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #DCDCDC;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(80%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 8px 20px;
      color: #f1f1f1;
      border-radius: 6px;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color:#9370DB ;
      color: #fff;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
     
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #29292c;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #9370DB !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
 footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding-bottom: 30px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 5px;
  }
  textarea {
      resize: none;
  }
  
  </style>
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	
      <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>   -->
	  
      <a class="navbar-brand" href="#home">FAST-NUCES</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">HOME</a></li>
	    <li><a  href="#Resources">Resources</a></li>
        <li><a href="#past_papers">Past Papers</a></li>
        <li><a href="#contact">CONTACT</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for image slider -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="c2.jpg" alt="Programming" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Programming</h3>
          <p>Programming is the technique to Develop a Software.</p>
        </div>      
      </div>

      <div class="item">
        <img src="c3.jpg" alt="Web Development" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Web Development</h3>
          <p>HTML CSS JavaScript Jquery Ajax PHP SQL Bootstrap.</p>
        </div>      
      </div>
    
	<div class="item">
        <img src="a3.jpg" alt="Binary" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Binary Numbers</h3>
          <p>10100100101010101111100001111100010101010010010011.</p>
        </div>      		
      </div>
      <div class="item">
        <img src="c1.jpg" alt="Computer Science" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Computer Science</h3>
          <p>ITC OOP DS ALGO OS DB OOAD CN SE AI HCI CLOUD.</p>
        </div> 
		</div>
      <div class="item">
        <img src="a1.jpg" alt="php" width="1200" height="700">
        <div class="carousel-caption">
          <h3>PHP Hypertext Preprocessor file</h3>
          <p>php msql xampp server wampp server.</p>
        </div>  
</div>		
      <div class="item">
        <img src="a2.jpg" alt="Coding" width="1200" height="700">
        <div class="carousel-caption">
          <h3>C++ Programming </h3>
          <p>#include<iostream.h>.</p>
        </div>      		
      </div>
	  
    </div>
</div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

<!-- Container (The Resources Section) -->
<div id="Resources" class="container text-center">

<div class="container-fluid">
<div class=" dropdown btn-group btn-group-justified">
<!--Assignments Buttons And its DropDowns-->
<div class="btn-group ">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Assignments
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="manu">
      <li> <a href="#" > Introduction to Computing</a></li>
      <li> <a href="#"> Computer Programming</a></li>
	  <li> <a href="#"> Data Structure</a></li>
      <li> <a href="#"> Operationg System</a></li> 	 
	  <li> <a href="#"> Data Base System</a></li>
      <li> <a href="#"> Theory of Autometa</a></li>
	  	  <li> <a href="#">Computer Networks</a></li>
	  <li> <a href="#"> Artificial Intelligence</a></li>
	  <li> <a href="#"> Object Oriented& Analysis Design</a></li>
	  <li> <a href="#"> Networks Forensics</a></li>
	  <li> <a href="#"> Cloud Computing</a></li>
	  <li> <a href="#">Distributed Computing</a></li>
    </ul>
  </div>
  <!--Quizes Button-->
<div class="btn-group ">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Quizes
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="manu">
      <li> <a href="#" > Introduction to Computing</a></li>
      <li> <a href="#"> Computer Programming</a></li>
	  <li> <a href="#"> Data Structure</a></li>
      <li> <a href="#"> Operationg System</a></li> 	 
	  <li> <a href="#"> Data Base System</a></li>
      <li> <a href="#"> Theory of Autometa</a></li>
	  	  <li> <a href="#">Computer Networks</a></li>
	  <li> <a href="#"> Artificial Intelligence</a></li>
	  <li> <a href="#"> Object Oriented& Analysis Design</a></li>
	  <li> <a href="#"> Networks Forensics</a></li>
	  <li> <a href="#"> Cloud Computing</a></li>
	  <li> <a href="#">Distributed Computing</a></li>
    </ul>
  </div>
  <!--Books Buttons-->
<div class="btn-group ">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Books
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="manu">
      <li> <a href="#" > Introduction to Computing</a></li>
      <li> <a href="#"> Computer Programming</a></li>
	  <li> <a href="#"> Data Structure</a></li>
      <li> <a href="#"> Operationg System</a></li> 	 
	  <li> <a href="#"> Data Base System</a></li>
      <li> <a href="#"> Theory of Autometa</a></li>
	  <li> <a href="#">Computer Networks</a></li>
	  <li> <a href="#"> Artificial Intelligence</a></li>
	  <li> <a href="#"> Object Oriented& Analysis Design</a></li>
	  <li> <a href="#"> Networks Forensics</a></li>
	  <li> <a href="#"> Cloud Computing</a></li>
	  <li> <a href="#">Distributed Computing</a></li>
    </ul>
  </div> </div></div><br>
<p><em>Bill Gates Says!</em></p>
<p align="justify"> Success is a lousy teacher. It seduces smart people into thinking they can't lose.
Your most unhappy customers are your greatest source of learning.
As we look ahead into the next century, leaders will be those who empower others.
If you can't make it good, at least make it look good.
I really had a lot of dreams when I was a kid, and I think a great deal of that grew out of the fact that I had a chance to read a lot.
Technology is just a tool. In terms of getting the kids working together and motivating them, the teacher is the most important.
I believe that if you show people the problems and you show them the solutions they will be moved to act.
If I'd had some set idea of a finish line, don't you think I would have crossed it years ago?
This is a fantastic time to be entering the business world, because business is going to change more in the next 10 years than it has in the last 50.
Television is not real life. In real life people actually have to leave the coffee shop and go to jobs.</p>
  <br>

  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Mashooque Ali</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="mashooque.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
	  <br><br>
      <div id="demo" class="collapse">
        <p>Owner And Developer.</p>
        <p>â€œThe question of whether a computer can think is no more interesting than the question of whether a submarine can swim.â€ 
â€• Edsger W. Dijkstra</p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Aamir Ali</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="aamir.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
	  <br>
        <p>Developer</p>
        <p>The rise of Google, the rise of Facebook, the rise of Apple, I think are proof that there is a place for computer science as something that solves problems that people face every day.</p>
      </div>
    </div>
	
    <div class="col-sm-4">
      <p class="text-center"><strong>Majid Ali</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="majid.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
	  
      <div id="demo3" class="collapse">
<br>
<p>Developer</p>
<p>! want to leverage the creativity of researchers across mathematics, statistics, data mining, computer science, biology, medicine, and the public at large.</p>
</div>
</div>
</div>
</div>


<!-- Container (past paper Section) -->
<div id="past_papers" class="bg-1">
  <div class="container">
    <h3 class="text-center">Past Papers</h3>
    <p class="text-center">From here you can Download past paper of FAST-NUCES.<br>These Papers are only from karachi Campus!</p>
    
<div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
         <a href= "#past_papers"> <img src="mid1.jpg" data-toggle="modal" data-target="#Mid-1" class="img-thumbnail " alt="Mid-1" width="400" height="300"></a>
          <p><strong>Mid-1</strong></p>
          <p>Mid term-1 Past Paper</p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#Mid-1">Mid-1</button>
        </div>
      </div>
	  
      <div class="col-sm-4">
        <div class="thumbnail">
         <a href ="#past_papers"> <img src="mid2.jpg" data-toggle="modal" data-target="#Mid-2" class="img-thumbnail" alt="#Mid-2" width="400" height="300"></a>
          <p><strong>Mid-2</strong></p>
          <p>Mid term-2 Past Paper</p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#Mid-2">Mid-2</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
      <a href ="#past_papers"> <img src="final.jpg " data-toggle="modal" data-target="#Finals" class="img-thumbnail" alt="Finals" width="400" height="300"></a>
          <p><strong>Finals</strong></p>
          <p>Final Exam Past Paper </p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#Finals">Finals</button>
        </div>
      </div>
    </div>
  </div>

<!-- Dialogue form Mid-1--> 
<div class="modal fade" id="Mid-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4><span class="glyphicon  glyphicon-book"></span> Mid Term-1</h4>
        </div>
		
<div class="modal-body">
<form role="form">
<div class="form-group">
<li><a  href="https://sites.google.com/site/fastianrox/past-papers/Cal1%20Final%20Pg1.jpg?attredirects=0&d=1" target="_blank" download> <span class="glyphicon glyphicon-cloud-download"> </span> Introduction to Computing</a></li> 
<li><a  href="#" target="_blank" download="image.jpg"><span class="glyphicon glyphicon-cloud-download"></span> Computer Programming </a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/Data+Structures+Mid1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Data Structure</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/OS-Mid-1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Operating System</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/Auto-Mid-1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Theory Of Autometa</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/DB-Mid-1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Data Base System </a></li>    
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/OOAD+Mid1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Object Oriented & Analysis Design</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/Artifical+IntelligenceMid-1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Artifical Intelligence</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/HCI-Mid-1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Human Computer Interaction</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/SE-MID-1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Software Engineering</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/CN-Mid-1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Computer Networks</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Operations Research</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/LAMid1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Linear Algebra</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/Cal1-Mid1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Calculus-1</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/Information+Systems+Mid1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Information Security System</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/PITMid1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Professional Issues In IT</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Probability And Statistics</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Computer Logic Design</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/COAL.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Assembly Language</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Cloud Computing</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/PM+Mid1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Project Management</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/English+Language+Mid1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> English Language</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/Eng+Composition+MID1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> English Compsition</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/TBWMid-I.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Techinical And Business Writing</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/Compiler+Construction+Mid-I.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Compiler Construction</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/Algo-Mid-1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Design And Analysis Of Algorithm</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website-Mid-1/Discrete+Structures+Batch09+Mid1.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Discrete Structure </a></li>
</div>
</form>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel
</button>
        </div>
      </div>
    </div>
  </div>
</div> <!--end of dialog mid-1 exam-->

<!-- Dialogue form Mid-2--> 
<div class="modal fade" id="Mid-2" role="dialog">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4><span class="glyphicon  glyphicon-book"></span> Mid Term-2</h4>
        </div>
		
<div class="modal-body">
<form role="form">
<div class="form-group">
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Introduction to Computing</a></li> 
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Computer Programming </a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/DS-MID-2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Data Structure</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Operating System</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Auto-Mid-2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Theory Of Autometa</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/DB-Mid-2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Data Base System </a></li>    
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/OOAD+Mid-2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Object Oriented & Analysis Design</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/AI-Mid-2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Artifical Intelligence</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/HCI-Mid-2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Human Computer Interaction</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/SE-MID-2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Software Engineering</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Computer Networks</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Operations Research</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Linear+Algebra+Mid2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Linear Algebra</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Information+Security+Mid2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Information Security System</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Calculus+II+Mid2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Calculus-2</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> History of Pakistan</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Professional+Issues+in+IT+Mid2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Professional Issues In IT</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Probability+and+Statistics+Mid2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Probability And Statistics</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Computer Logic Design</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/COAL-MID-2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Assembly Language</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Cloud Computing</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Project+Management+Mid2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Project Mahagement</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> English Language</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Eng+Composition+MID2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> English Compsition</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Techinical And Business Writing</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Compiler+Construction+Mid-II+Exam.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Compiler Construction</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/DWH-Mid-2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Data Warehousing </a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Discrete+Structures+Mid2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Discrete Structure </a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/Webste-Mid-2/Differential+Equation+MID2.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Differential Equations </a></li>
</div>
</form>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel
</button>
        </div>
      </div>
    </div>
  </div>
</div> <!--end of dialog mid-2 exam-->

<!-- Dialogue form Finals--> 
<div class="modal fade" id="Finals" role="dialog">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4><span class="glyphicon  glyphicon-book"></span> Final Exam</h4>
        </div>
		
<div class="modal-body">
<form role="form">
<div class="form-group">
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Introduction to Computing</a></li> 
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/CP-Final.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Computer Programming </a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Data Structure</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Operating System</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/Auto-Final.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Theory Of Autometa</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/DB-Final.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Data Base System </a></li>    
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Object Oriented & Analysis Design</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/AI-Final.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Artifical Intelligence</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Human Computer Interaction</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/SE-FINAL.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Software Engineering</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Computer Networks</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Operations Research</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/LA-Final.rar"><span class="glyphicon glyphicon-cloud-download"> </span> Linear Algebra</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/CALCULUS-Final.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Calculus-1</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/Project+Management-+Final.zip"><span class="glyphicon glyphicon-cloud-download"> </span>Project Management</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/Algo-Final.zip"><span class="glyphicon glyphicon-cloud-download"> </span>Design And Analysis Of Algorithm</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Professional Issues In IT</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Probability And Statistics</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Computer Logic Design</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/COAL-final.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Assembly Language</a></li>
<li><a  href="#"><span class="glyphicon glyphicon-cloud-download"> </span> Cloud Computing</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/English+Language-+final.zip"><span class="glyphicon glyphicon-cloud-download"> </span> English Language</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/English+Composition+Finals.zip"><span class="glyphicon glyphicon-cloud-download"> </span> English Compsition</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/TBW-Final.rar"><span class="glyphicon glyphicon-cloud-download"> </span> Techinical And Business Writing</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/Compiler+Construction-FNIAL.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Compiler Construction</a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/TBW-Final.rar"><span class="glyphicon glyphicon-cloud-download"> </span> Data Warehousing </a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/Discrete-final.zip"><span class="glyphicon glyphicon-cloud-download"> </span> Discrete Structure </a></li>
<li><a  href="https://s3-us-west-2.amazonaws.com/fastian/website/Information+Security-Final.zip"><span class="glyphicon glyphicon-cloud-download"></span> Information Security System</a></li>
</div>
</form>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel
</button>
        </div>
      </div>
    </div>
  </div>
</div> <!--end of dialog final exam-->

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Feel free and easy to Contact!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Feel free to Connect us.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Karachi, Pakistan</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +92 3127029381</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: ghoto-mashooque@hotmail.com</p>	   
    </div>
	
<form role="form" action = "index.php" method = "POST">
<div class="col-md-8">
          <div class="row">
          <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Enter Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email Address" type="email" required>
          </div>
          </div>
          <textarea class="form-control" id="comments" name="comment" placeholder="Comment Box" rows="5"></textarea>
          <br>
          <div class="row">
          <div class="col-md-12 form-group">
          <button class="btn pull-right btn-primary" type="submit">Send</button>
</div>
</div>	
</div>
</form>
</div>
<br>
</div>

<!-- Google Maps API -->
<div id="googleMap"></div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(24.8569361, 67.2643038)

function initialize() {
var mapProp = {
center:myCenter,
zoom:14,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

  <!-- starting of Footer -->
  <footer class="text-center">
  <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
  <span class="glyphicon glyphicon-chevron-up"></span>
 </a><br><br>
 &emsp;&emsp;&emsp;
 <p>Copyright Â© Fastian 2015 All Rights Reserved @ <a href="http://www.fastian.tk" target="_blank" data-toggle="tooltip" title="Visit fastian">fastian.tk</a> 
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <a href="https://www.facebook.com/Ghoto.mashooque" target="_blank" title="Facebook"> <img src="facebook.png" class="img-circle" alt="Cinque Terre" width="50" height="50"> </a> &emsp;
 <a href="https://twitter.com/GhotoMashooque" target="_blank" title="twitter"> <img src="twittor.jpg" class="img-circle" alt="Cinque Terre" width="50" height="50"> &emsp;</a>
 <a href ="https://pk.linkedin.com/in/ghotomashooque91"target="_blank" title="Linkdin"> <img src="linkdin.png" class="img-circle" alt="Cinque Terre" width="50" height="50"> </a>
  </p>
</footer>
<!--End of footer-->

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
    // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
  // Prevent default anchor click behavior
    event.preventDefault();
    // Store hash
    var hash = this.hash;
    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
         // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
})
</script>
</body>
</html>
<!--Mashooque Ali Ghoto FAST-NUCES -->