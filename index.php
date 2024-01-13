<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Admin dashboard</title>
		<link rel="icon" type="images/x-icon" href="logo.jpeg">
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

		<!--calender css-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.min.css">
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
	  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' rel="stylesheet"/>
	  
  </head>
  <body>
  


<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
			<h3><a href="https://dtet.gov.lk/"target="_blank"><img src="logo.jpeg" class="img-fluid"/></h3></a><h3>Hardware Lab Equipment Management System</h3>
			
		</div>
		<div class="menues px-3">
		<ul class="nav flex-column">
		  <li class="active">
		  <a href="#" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
		  </li>
		  <li class="nav-item">
		  <a href="./Stock/index.php" class=""><i class="material-icons">inventory</i>Stock</a>
		  </li>
		  <li class="nav-item">
		  <a href="./Disposal/index.php" class=""><i class="material-icons">diversity_3</i>Disposal </a>
		  </li>
		  <li class="nav-item">
		  <a href="./Destroy/index.php" class=""><i class="material-icons">delete</i>Destroy </a>
		  </li>
		  <li class="nav-item">
			<a href="./contact us/index.php" class=""><i class="material-icons">contacts</i>Contact US</a>
		  </li>
		  <li class="active">
			<label id="dark-change"></label>
		</ul>
		
		</div>
	 </div>
	 
   <!-------sidebar--design- close----------->
   

   
      <!-------page-content start----------->
   
      <div id="content">
	     
		  <!------top-navbar-start-----------> 
		     
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">menu</span>
						</div>
					 </div>
					 
					 <div class="col-md-5 col-lg-3 order-3 order-md-2">
					     <div class="xp-searchbar">
						     <form>
							    <div class="input-group">
								  <input type="search" class="form-control"
								  placeholder="Search">
								  <div class="input-group-append">
								     <button class="btn" type="submit" id="button-addon2"><i class="material-icons">search</i></a>
									 </button>
									 
								  </div>
								</div>
									

							 </form>
						 </div>
					 </div>
					 
					
					 <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					     <div class="xp-profilebar text-right">
							
						    <nav class="navbar p-0">
							   <ul class="nav navbar-nav flex-row ml-auto">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								 </a>
								 
								  <ul class="dropdown-menu">
								  </ul>
							   </li>
							   
							   <li class="nav-item">
								
								 </a>
							   </li>
							   
							   <li class="dropdown nav-item">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								  <img src="profile-user.png" style="width:40px; border-radius:50%;"/>
								  <a href="#">
								 </a>
								  <ul class="dropdown-menu small-menu">
								     <li><a href="./profile/index.html">
									 <span class="material-icons">person_outline</span>
									 Profile
									 </a></li>
									 <li></li>
									 <li><a href="../login page/index.html">
									 <span class="material-icons">logout</span>
									 Logout
									 </a></li>
									 
								  </ul>
							   </li>
							   
							   
							   </ul>
							   
							</nav>
						 </div>
						 
					 </div>
					 
				 </div>
					
				 <div class="xp-breadcrumbbar text-center">
				    <h4 class="page-title">Dashboard</h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="../Home Page/index1.html">Home</a></li>
					  <li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
					</ol>
				 </div>
			 </div>
		  </div>
		 
		  <!------top-navbar-end-----------> 
<!--Logout popup window-->

<div class="modal-body">

</div>
		  <!--loader start-->
		  <div id="loader-wrapper">
			<div id="loader"></div>
		 
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
		<!--loader end-->

		</section>	
		<section class="main">
			<center>
			<div class="main-skills">
			  <div class="card">
				<i class="material-icons">inventory</i>
				<h3>Stock</h3>
				<h5>#</h5>
			  </div>
			  <div class="card">
				<i class="material-icons">diversity_3</i>
				<h3>Disposal</h3>
				<h5>#</h5>
			  </div>
			  <div class="card">
				<i class="material-icons">delete</i>
				<h3>Destroy</h3>
				<h5>#</h5>
			  </div>
			</div>
		</center>
			     </div>
			  </div>
			</section>
			<section class="calander-1">
			<div class="calendar">
				<p class="month">January</p>
				<p class="day">Saturday</p>
				<br>
				<p class="date">15</p>
				<br>
				<p class="year">2000</p>
		   </div>
		   </section>
		
			<div>
				<div>
			</div>
			<div>
				
		    <!------stock-content-end-----------> 
		 <br><br><br><br><br><br><br><br><br>
		 
		 		 <!----footer-design------------->
			<section class="footer-1">
		 <footer class="footer">
		    <div class="container-fluid">
			   <div class="footer-in">
			      <p class="mb-0">&copy Project by SLKDEV (Diploma in ICT 2023) <a target="_blank" rel="noopener" style="color:white;" href="https://web.facebook.com/profile.php?id=100046609405637">@ Matara C.O.T </a>All Rights Reserved.</p>
			   </div>
			</div>
		 </footer>
	
		
		 
		 
		 
	  </div>
   
</div>




<!-------complete html----------->





  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/calander.js"></script>
   <script src="js/popup window.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  <script>
	var content = document.getElementsByTagName('body')[0];
	var darkMode = document.getElementById('dark-change');
	darkMode.addEventListener('click', function(){
		darkMode.classList.toggle('active');
		content.classList.toggle('night');
	})
</script>
<script>
	$(window).on("load",function(){
	  $(".loader-wrapper").fadeOut("slow");
	});
</script>
<script>
	$('body').toggleClass('loaded');
	$(document).ready(function() {
 
 setTimeout(function(){
	 $('body').addClass('loaded');
	 $('h1').css('color','#222222');
 }, 3000);

});
</script>



  </body>
  
  </html>


