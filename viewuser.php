
<!DOCTYPE html>
<html>
<head>
<title>Calao Water Billing System</title>
<link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/jquery1.js" type="text/javascript"></script>
<script src="js/facebox.js" type="text/javascript"></script>

  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calao Billing System</title>
<style>

    body {
        color: #566787;
        background: #f5f5f5;
		
	}
    .table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px;        
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }    
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<nav class="navbar navbar-default">
	<div id="mynav"class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="https://www.sourcecodester.com">Calao</a>
		</div>
		<ul class="nav navbar-nav">
		<li class="nav"><a href="home.php">Home</a></li>
		<li class="nav"><a href="bill.php">Manage Bills</a></li>
    <li class="nav"><a href="history.php">Log In History</a></li>
		
		<li class="nav active"><a href="viewuser.php">Pending Accounts</a></li>
		<li><a id="logout" name="logout" href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>
<div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2><b>Details</b></h2></div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input id="myInput" onkeyup="myFunction()" type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
                <table id="myTable" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                             <th>Acct. No.</th>
                             <th>Name</th>
                            
                             <th>Meter No.</th>
                             <th>Mobile Number</th>
                             <th>Email</th>
            
                             <th>Type</th>
          
                             <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                       
                        <?php
                      
                        
                        include('includes/dbconfig.php');
         $ref = "Pending Accounts/Consumer";
        

         $fetchdata = $database ->getReference($ref)->getValue();
        
     
         foreach ($fetchdata as $key => $row)
         {
            

      ?>
        <td name="c_no"><?php echo $row['c_no']; ?></td>
        <td name="name"><?php echo $row['name']; ?></td>
        
        <td name="meter_no"><?php echo $row['meter_no']; ?></td>
        <td name="mo_no"><?php echo $row['mo_no']; ?></td>
        <td name="email"><?php echo $row['email']; ?></td>
        <td name="customer_type"><?php echo $row['customer_type']; ?></td>
        <td type="hidden" name="username"><?php echo $row['username']; ?></td>
        <td type="hidden" name="password"><?php echo $row['password']; ?></td>

                            <td>
                                <a  href="addconsumer.php?username=<?php echo $key ?>" class="view" title="Add Consumer" data-toggle="tooltip"><i class="material-icons"><span class="material-icons-outlined">
person_add_alt
</span></i></a>
                               
                            </td>
                        </tr>
                        
                    </tbody>
                    <?php
  } 

  ?>
  
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>     
</body>
</html>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {
 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");
 }
return false;
});
});
</script>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("mynav");
var btns = header.getElementsByClassName("nav");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>