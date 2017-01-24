<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="images/ppap.png" rel="shortcut icon" type="image/x-icon"/>
	
	<title>Meet The People</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="creative.min.css" rel="stylesheet">
	<link href="creative.css" rel="stylesheet">
		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<style>
.dropbtn {
    background-color: white;
    color: #ed2f3f;
    padding: 16px;
    border: none;
    cursor: pointer;
}

.casedropbtn {
    background-color: white;
    color: #ed2f3f;
    padding: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.casedropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.casedropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.casedropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn .casedropbtn{
    background-color: #3e8e41;
}


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 65%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
	padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
  border: none;
  border-radius: 300px;
  font-weight: 700;
  text-transform: uppercase;
}

button:hover{
	background-color:white;
	
    }

/* Extra styles for the register button */
.registerbtn {
    width: 65%;
    padding: 10px 50px;
	color:  black;
	background-color: #ffa01c;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 50px;
	color: black;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
	background-color: #f1f1f1;
	color: Black;
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
	padding: 40px 50px; 
}

.container {
    padding: 16px;
}

.modalfooter {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
	padding: 40px 50px; 
	background-color: #f1f1f1;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}
    .hide {
        display: none;
    }
    .show {
        display: block;
    }
</style>


<body id="page-top">

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><font color="#ed2f3f"><b>T GRC</b></font></a>
				<img src="images/ppap.png" width="45" height="50" alt="" />
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav navbar-right">	 
					  <li><a href="logout.php" class="button"><font color="#ed2f3f"><font size='3'><b>LOGOUT</b></font></font></a></li>
				</ul>
			</div>
		<!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<div id="nav">
	
		<?php
		$caseId = $_GET["CaseId"];
		
		if (isset($_GET['CaseId']) && is_numeric($_GET['CaseId']) && $_GET['CaseId'] > 0)
		{
			
			$mysqli = new mysqli("localhost", "null", "null", "null"); 
	
			$stmt = $mysqli->prepare("SELECT AuthorityName FROM Authority WHERE CaseId='$caseId'");
			
			$stmt->execute();
			
			$stmt->store_result();
			
			$stmt->bind_result($an);
			
			 if($stmt -> num_rows >= 1){
				  echo "<script type='text/javascript'>alert('Authority added')</script>";
				
				while($stmt->fetch()){
				echo "<div align=inherit>$an</div>";
				
			}
		}
			
		
			$stmt -> close();
			
			$mysqli -> close();
		}
		?>
		
		<?php
		$error = array(
			"AuthorityName" => "",
			"Address" => "",
			"Telephone" => "",
			"Fax" => "",
			"MatchName" => ""
			
);
		$caseId = $_GET['CaseId'];
		
		if(isset($_POST['submit'])) 
		{
			
		$link = mysqli_connect("localhost", "null", "null", "null");
	
		if (!empty($_POST['authorityname'])){
			$authorityname1=$_POST['authorityname'];
		}
		else {
			$authorityname1 = NULL;
			$error['AuthorityName'] = " <br> You forgot to enter the Authority Name!";
		}
		
		if (!preg_match("/^[a-zA-Z ]*$/",$authorityname)) {	
			$error['MatchName'] = " &nbsp Only alphabets are allowed";
			}
			
		if (!empty($_POST['address'])){
			$address=$_POST['address'];
		}
		else {
			$address = NULL;
			$error['Address'] = " <br> You forgot to enter the Address!";
		}
		
		if (!empty($_POST['telephoneNo'])){
			$telephoneNo=$_POST['telephoneNo'];
		}
		else {
			$telephoneNo = NULL;
			$error['Telephone'] = " <br> You forgot to enter the Telephone Number!";
		}
		
		if (!empty($_POST['faxNo'])){
			$faxNo=$_POST['faxNo'];
		}
		else {
			$faxNo = NULL;
			$error['Fax'] = " <br> You forgot to enter the Fax Number!";
		}
			
		if ($authorityname && $address && $telephoneNo && $faxNo != NULL){
		
			
			$order = "INSERT INTO Authority(AuthorityId, AuthorityName, Address, TelephoneNo, FaxNo, CaseId)
					  VALUES (NULL, '$authorityname', '$address', '$telephoneNo', '$faxNo', '$caseId')";
			
						
			$retval = mysqli_query($link, $order);
			
								
			if($retval){
				header("Location:http://null.php");
		
			}
			$result = true;
		}
		else{
			$result = false;
		}

		mysqli_close($link);
		}
		
	?>
					
		<br>
	</div>
	
	<?php if(isset($_POST['submit']) && $result == false) { ?>
	<script>$(document).ready(function(){
         $('#id01').modal('show')
      });
	</script>
	<?php } ?>
	
	<script>
function goBack() {
    window.history.back();
}
</script>

<script>
function myFunction() {
    window.print();
}
</script>
	
	<section id="services">
        <div class="container">
				<i onclick="goBack()" class="fa fa-3x fa-angle-double-left text-primary sr-icons"></i>
				<p align="right"><i onclick="myFunction()" class="fa fa-2x fa-print text-primary sr-icons"></i></p>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">ADD AUTHORITY</h2>
					<hr>

					<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >Update</button>

                </div>
            </div>
        </div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <hr> ADD AUTHORITY</hr>
    </div>

    <div class="container">
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<div>
    <?php
    $con = mysqli_connect("localhost", "null", "null", "null");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $query = "SELECT AuthorityId FROM AuthorityList";
    $row = mysqli_query($con,$query);
    ?>
    <label>Authority Code</label>
    <select name="auth" id="auth">
        <option value="">Select Auth</option>
        <?php while($data = mysqli_fetch_assoc($row)) { ?>
        <option value="<?php echo $data['AuthorityId']; ?>"><?php echo $data['AuthorityId']; ?></option>
        <?php } ?>
    </select>
</div>
<div id="name" class="hide">
    <label>Authority Name</label>
    <textarea id="auth_name" name="name"></textarea>
</div>
<div id="address" class="hide">
    <label>Address</label>
    <textarea id="auth_address" name="address"></textarea>
</div>
<div id="phone" class="hide">
    <label>Telephone</label>
    <textarea id="auth_phone" name="phone"></textarea>
</div>
<div id="fax" class="hide">
    <label>Fax</label>
    <textarea id="auth_fax" name="fax"></textarea>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#auth').change(function(){
            $.ajax({
                url:'getData.php',
                type:'POST',
                dataType: 'json',
                data:{
                    val: $('#auth').val()
                },
                success:function(result){
                    console.log(result.Address);
                    if(result != ''){
						$('#auth_name').html(result.AuthorityName);
                        $('#auth_address').html(result.Address);
                        $('#auth_phone').html(result.TelephoneNo);
						$('#auth_fax').html(result.FaxNo);
						$('#name').removeClass('hide');
                        $('#name').addClass('show');
                        $('#address').removeClass('hide');
                        $('#address').addClass('show');
                        $('#phone').removeClass('hide');
                        $('#phone').addClass('show');
						$('#fax').removeClass('hide');
                        $('#fax').addClass('show');
                    } else {
                        $('#auth_address').html('');
						$('#name').removeClass('show');
                        $('#name').addClass('hide');
                        $('#address').removeClass('show');
                        $('#address').addClass('hide');
                        $('#phone').removeClass('show');
                        $('#phone').addClass('hide');
						$('#fax').removeClass('show');
                        $('#fax').addClass('hide');
                    }
                }
            })
        });
    });
</script>

<button type="submit" name="submit"  class="registerbtn">Update</button><br>
	  </center>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <center>
	  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
	  </center>
    </div>
  </form>
</div>


<script type="text/javascript">

var modal = document.getElementById('id01');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>





    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2><font size='1'>Copyright &copy; TGRC</font></h2>
            </div>
        </div>
    </aside>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="creative.min.js"></script>

</body>

</html>
