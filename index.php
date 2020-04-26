<?php

    include 'logic.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'link.php'; ?>

</head>
<body onload="fetch()">

	<nav class="navbar navbar-expand-lg nav_style p-3">
	  <a class="navbar-brand pl-5" href="#">Covid 19</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#aboutid">About</a>
	      </li>
	     <li class="nav-item">
	        <a class="nav-link" href="#sympid">Symptoms</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="#preventid">prevention</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="#contactid">contacts</a>
	      </li>
	      
	    </ul>
	   
	  </div>
	</nav>

	<div class="main_header">
		<div class="row w-100 h-100">
			<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
					<img src="images/3.png" height="300px" width="300px">
				</div>
			</div>
		
			<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
				<div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
					<h1>Let's Safe & Fights together Againts virus of Cor<span class="coronrot"><img src="images/01.png" height="50px" width="50px"></span>na </h1>
				</div>
			</div>
		</div>
	</div>
	<!--corona updates-->
	<section class="corona_update container-fluid">
		<div class="mb-3">
			<h3 class="text-uppercase text-center ">Covid-19 updates</h3>
		</div>
		 <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    </div>

    <div class="container bg-light p-3 my-5 text-center">
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Countries</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $key?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?>    
                            </td>
                            <td><?php echo $value[$days_count]['recovered'];?></td>
                            <td><?php echo $value[$days_count]['deaths'];?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

			
		</div>
	</section>
	<!-- about section -->
		<div class="container-fluid pt-5 pb-5 sub_section" id="aboutid">
			<div class="section_header text-center mb-5 mt-4">
				<h1>About Covid-19</h1>
			</div>
			<div class="row pt-5">
				<div class="col-lg-5 col-md-6 col-12  text-center">
					<img src="images/5.png" height="400px" width="500px" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-12 ">
					<h2>WHAT IS CIVID-19 (CORONA VIRUS)</h2>
					<p>Government of India is taking all necessary steps to ensure that we are prepared well to face the challenge and threat posed by the growing pandemic of COVID-19 the Corona Virus.
					 With active support of the people of India, we have been able to contain the spread of the Virus in our country. The most important factor in preventing the spread of the Virus locally is to empower the citizens with the right information and taking precautions as per the advisories being issued by Ministry of Health & Family Welfare.
					 <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
					Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.</p>
				</div>
			</div>
		</div>


<!-- ////////////corona symptoms///////// -->

		<div class="container-fluid pt-5 pb-5" id="sympid">
			<div class="section_header text-center mb-5 mt-4">
				<h1>Corona virus Symptoms</h1>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/s1.jpg" class="img-fluid bg-info" height="240" width="240">
							<figcaption>cough</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/s2.jpg" class="img-fluid bg-info" height="240" width="240">
							<figcaption>cough</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/s3.jpg" class="img-fluid bg-info" height="240" width="240">
							<figcaption>cough</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/s4.jpg" class="img-fluid bg-info" height="240" width="240">
							<figcaption>cough</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
						<img src="images/s1.jpg" class="img-fluid bg-info" height="240" width="240">
							<figcaption>cough</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/s4.jpg" class="img-fluid bg-info" height="240" width="240">
							<figcaption>cough</figcaption>
						</figure>
					</div>
				</div>
			</div>



		</div>

<!-- ////////////corona symptoms///////// -->

		<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
			<div class="section_header text-center mb-5 mt-4">
				<h1>6 STEPS AGAINTS CORONA VIRUS</h1>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
								<img src="images/b2.png" class="img-fluid bg-info" height="90" width="90">	
								</figure>
							</div>
							<div class="col-md-8 col-12 col-lg-8">
								<h5>Coughing And Seneezing</h3>
								<p>
								Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
								<img src="images/b3.png" class="img-fluid bg-info" height="90" width="90">	
								</figure>
							</div>
							<div class="col-md-8 col-12 col-lg-8">
								<h5>Avoid contact with sick people</h3>
								<p>
								Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
								<img src="images/b4.png" class="img-fluid bg-info" height="90" width="90">	
								</figure>
							</div>
							<div class="col-md-8 col-12 col-lg-8">
								<h5>Ware a face mask outside</h3>
								<p>
								Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
								<img src="images/b5.png" class="img-fluid bg-info" height="90" width="90">	
								</figure>
							</div>
							<div class="col-md-8 col-12 col-lg-8">
								<h5>Avoid crowded places</h3>
								<p>
								Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
								<img src="images/b1.png" class="img-fluid bg-info" height="90" width="90">	
								</figure>
							</div>
							<div class="col-md-8 col-12 col-lg-8">
								<h5>Cover your cough tissue paper</h3>
								<p>
								Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
								<img src="images/b7.png" class="img-fluid bg-info" height="90" width="90">	
								</figure>
							</div>
							<div class="col-md-8 col-12 col-lg-8">
								<h5>Check your body regulerly</h3>
								<p>
								Libero perspiciatis delectus, maxime, voluptatum minima nam consectetur dolore
								</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

<!-- ////////////contact us///////// -->

		<div class="container-fluid  pt-5 pb-5" id="contactid">
			<div class="section_header text-center mb-5 mt-4">
				<h1>SUBMIT FORM OF CORONA VIRUS IMFORMATION</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<form action="" method="POST">
						    <div class="form-group">
							    <label >name</label>
							    <input type="text" class="form-control"  name="username" placeholder="name" autocomplete="off">
						    </div>
							 <div class="form-group">
							    <label >Email address</label>
							    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
							</div>
							<div class="form-group">
							    <label >mobile</label>
							    <input type="number" class="form-control"  name="mobile" placeholder="mobile" autocomplete="off">
							 </div>
							  
							
							 <div class="form-group">
							 	<label>select symptoms</label><br>
							 		
								    <div class="form-check custom-control-inline">
								      <input class="form-check-input" type="checkbox" id="customcheckbox1" name="coronasym[]" value="cold">
								      <label class="form-check-label" for="customcheckbox1">cold </label>
							    	</div>
							    	<div class="form-check custom-control-inline">
								      <input class="form-check-input" type="checkbox" id="customcheckbox2" name="coronasym[]" value="fever">
								      <label class="form-check-label" for="customcheckbox2">fever</label>
							    	</div>

									<div class="form-check custom-control-inline">
								      <input class="form-check-input" type="checkbox" id="customcheckbox3" name="coronasym[]" value="difficulty">
								      <label class="form-check-label" for="customcheckbox3">difficulty in both </label>
							    	</div>
							    	<div class="form-check custom-control-inline">
								      <input class="form-check-input" type="checkbox" id="customcheckbox4" name="coronasym[]" value="week">
								      <label class="form-check-label" for="customcheckbox4">feeling week </label>
							    	</div>
							 </div>
							  <div class="form-group">
							    <label>Message box</label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
							 </div>
							 <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
							</form>

					</div>
				</div>
			</div>
		</div>
		<!-- -------scroll top-------- -->
		<div class="scroll_top pr-5 float-right container">
			<i class="fa fa-chevron-circle-up" onclick="topFunction()" id="myBtn"></i>
		</div>
		<!-- ////////////////header////////////////// -->

<footer class="mt-5">
	<div class="footer_style bg-info text-white text-center container-fluid">
		<p>Copyright by Girish chaudhari</p>
	</div>

</footer>







<script type="text/javascript">
	$('.count').counterUp({
		delay:10,
		time:3000
	})

	mybutton=document.getElementById("myBtn");
	window.onscroll=function()
	{scrollFunction()};
	function scrollFunction(){
		if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
		{
			mybutton.style.display="block";

		}else{
			mybutton.style.display="none";
		}
	}
		function topFunction(){
			document.body.scrollTop=0;
			document.documentElement.scrollTop=0;
		}
	

	// function fetch(){

	// 	$.get("https://api.covid19api.com/summary",

	// 		function (data){
	// 			//console.log(data['countries'].length);
	// 			var tbval=document.getElementById('tbval');
	// 			for(var i=1; i<(data['Countries'].length); i++)
	// 			{
	// 				var x=tbval.insertRow();
	// 				x.insertCell(0);
	// 				tbval.rows[i].Cells[0].innerHTMl=data['Countries'][i-1]['Country'];
	// 				tbval.rows.Cells[0].style.background='#7a4a91';
	// 				tbval.rows.Cells[0].style.color='#fff';


	// 				x.insertCell(1);
	// 				tbval.rows[i].Cells[1].innerHTMl=data['Countries'][i-1]['total-confirmed'];
	// 				tbval.rows.Cells[1].style.background='#4bb7d8';

	// 				x.insertCell(2);
	// 				tbval.rows[i].Cells[2].innerHTMl=data['Countries'][i-1]['total-recovered'];
	// 				tbval.rows.Cells[2].style.background='#4bb7d8';

	// 				x.insertCell(3);
	// 				tbval.rows[i].Cells[3].innerHTMl=data['Countries'][i-1]['total-deaths'];
	// 				tbval.rows.Cells[3].style.background='#f36e23';

	// 				x.insertCell(4);
	// 				tbval.rows[i].Cells[4].innerHTMl=data['Countries'][i-1]['new-confirmed'];
	// 				tbval.rows.Cells[4].style.background='#4bb7d8';

	// 				x.insertCell(5);
	// 				tbval.rows[i].Cells[5].innerHTMl=data['Countries'][i-1]['new-recovered'];
	// 				tbval.rows.Cells[5].style.background='#9cc850';

	// 				x.insertCell(6);
	// 				tbval.rows[i].Cells[6].innerHTMl=data['Countries'][i-1]['new-deaths'];
	// 				tbval.rows.Cells[6].style.background='#f36e23';
	// 			}
	// 		}
	// 	);
	// }
	
</script>


	
</body>

</html>

<?php
include 'con1.php';

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$sympt=$_POST['coronasym'];
	$msg=$_POST['msg'];
	$chk="";
	foreach ($sympt as $chk1){
		$chk.=$chk1.",";
	}
$insertquery="insert into form(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg')";
$query=mysqli_query($con, $insertquery);

if($query){
	?>
<script>alert("insert success");</script>
<?php
}

}
?>