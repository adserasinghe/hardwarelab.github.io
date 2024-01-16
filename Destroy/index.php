<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Destroy</title>
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
		  <li class="nav-item">
		  <a href="../index.html" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
		  </li>
		  <li class="nav-item">
		  <a href="../Stock/index.php" class=""><i class="material-icons">inventory</i>Stock</a>
		  </li>
		  <li class="nav-item">
		  <a href="../Disposal/index.php" class=""><i class="material-icons">diversity_3</i>Disposal </a>
		  </li>
		  <li class="active">
		  <a href="#" class=""><i class="material-icons">delete</i>Destroy </a>
		  </li>
		  <li class="nav-item">
			<a href="../contact us/index.php" class=""><i class="material-icons">contacts</i>Contact US</a>
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
								     <li><a href="../profile/index.html">
									 <span class="material-icons">person_outline</span>
									 Profile
									 </a></li>
									 <li></li>
									 <li><a href="/login page/index.html">
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
				    <h4 class="page-title">Destroy</h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="/Home Page/index1.html">Home</a></li>
					  <li class="breadcrumb-item active" aria-curent="page">Destroy</li>
					</ol>
				 </div>
			 </div>
		  </div>
		 
		  <!------top-navbar-end-----------> 

		  <!--loader start-->
		  <div id="loader-wrapper">
			<div id="loader"></div>
		 
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
		<!--loader end-->
		   <!------stock-content-start-----------> 
		   <section id="#stock"></section>
		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Manage Destroy Iteam </h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add New Disposal</span>
							   </a>
							   <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Delete</span>
							   </a>
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="selectAll">
							 <label for="selectAll"></label></th>
							 <th>Iteam Name</th>
							 <th>Iteam ID</th>
							 <th>Quantity</th>
							 <th>Department</th>
							 <th>Actions</th>
							 </tr>
						  </thead>
						  
						  <tbody>
							<tr>
							<th>
						  <?php
							include './db.php';

							$sql="SELECT * FROM destroy";
							$result=$conn->query($sql);
							if(!$result)
							{
								die("Invalid Querry" .$conn->error);
							}
							while($row=$result->fetch_assoc()){
								echo"
						    <tr>
							 <th>".$row["Iteam_name"]."</th>
							 <th>".$row["Iteam ID"]."</th>
							 <th>".$row["quantity"]."</th>
							 <th>".$row["Department"]."</th>
							 </tr>";
							}
							$conn->close();
							 ?>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
						  </tbody>
						  
					      
					   </table>
					   
					   <div class="clearfix">
					     <div class="hint-text">showing <b>1</b> out of <b>25</b></div>
					     <ul class="pagination">
						    <li class="page-item "><a href="#">Previous</a></li>
							<li class="page-item active"><a href="#"class="page-link">1</a></li>
							<li class="page-item "><a href="#"class="page-link">2</a></li>
							<li class="page-item "><a href="#"class="page-link">3</a></li>
							<li class="page-item "><a href="#"class="page-link">4</a></li>
							<li class="page-item disabled"><a href="#"class="page-link">5</a></li>
							<li class="page-item "><a href="#" class="page-link">Next</a></li>
						 </ul>
					   </div>
					   
					   
					   
					   
	
					   
					   
					   
					   
					   </div>
					</div>

							  
							  <div class="clearfix">
								<div>
									<div>
								</div>
								</div>
							  </div>
							  
							  </div>
						   </div>
						   
					
					
									   <!----add-modal start--------->
		<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
	<form action="./destroy.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Iteam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <h5>Iteam Name</h5>
			<input type="text" id="iname" class="form-control" required>
		</div>
		<div class="form-group">
		    <h5>Iteam ID</h5>
			<input type="text" id="iid" class="form-control" required>
		</div>
		<div class="form-group">
		    <h5>Quantity</h5>
			<input type="number" id="quantity" class="form-control" required>
		</div>
		<div class="form-group">
		    <h5>Department</h5>
			<input type="text" id="department" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Add</button>
</form>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->
					   
					   
					   
					   
					   
				   <!----edit-modal start--------->
		<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>Iteam Name</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Iteam ID</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Quantity</label>
			<input type="number" class="form-control" required></textarea>
		</div>
		<div class="form-group">
		    <label>Department</label>
			<input type="text" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->	   
					   
					   
					 <!----delete-modal start--------->
		<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
		<p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Delete</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->   
					   
					
					
				 
			     </div>
			  </div>
			</section>
			<div>
		    <!------stock-content-end-----------> 
		 
		 <!----footer-design------------->
			<div></div>
			<section class="footer-1">
		 <footer class="footer">
		    <div class="container-fluid">
			   <div class="footer-in">
			      <p class="mb-0">&copy Project by SLKDEV (Diploma in ICT 2023) <a target="_blank" rel="noopener" style="color:white;" href="https://web.facebook.com/profile.php?id=100046609405637">@ Matara C.O.T </a>All Rights Reserved.</p>
			   </div>
			</div>
		 </footer>
		</section>
		 
		 
		 
	  </div>
   
</div>




<!-------complete html----------->





  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
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


