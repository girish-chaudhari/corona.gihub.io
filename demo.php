<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include ('link.php');  ?>
</head>
<body onload="fetch()">

	<!--corona updates-->
	<section class="corona_update container-fluid">
		<div class="mb-3">
			<h3 class="text-uppercase text-center ">Covid-19 updates</h3>
		</div>
		<div class="table-responsive">
			<table class="table-bordered table-striped text-center" id="tbval">
				<tr>
					<th>country</th>
					<th>total-confirmed</th>
					<th>total-recovered</th>
					<th>total-deaths</th>
					<th>new-confirmed</th>
					<th>new-recoverd</th>
					<th>new-deaths</th>
				</tr>
			</table>
		</div>
			
		</div>
	</section>

	<script type="text/javascript">
		
	function fetch(){

		$.get("https://api.covid19api.com/summary",

			function (data){
				//console.log(data['countries'].length);
				var tbval=document.getElementById('tbval');
				for(var i=1; i<(data['Countries'].length); i++)
				{
					var x=tbval.insertRow();
					x.insertCell(0);
					tbval.rows[i].Cells[0].innerHTMl=data['Countries'][i-1]['Country'];
					tbval.rows.Cells[0].style.background='#7a4a91';
					tbval.rows.Cells[0].style.color='#fff';


					x.insertCell(1);
					tbval.rows[i].Cells[1].innerHTMl=data['Countries'][i-1]['	total-confirmed'];
					tbval.rows.Cells[1].style.background='#4bb7d8';

					x.insertCell(2);
					tbval.rows[i].Cells[2].innerHTMl=data['Countries'][i-1]['	total-recovered'];
					tbval.rows.Cells[2].style.background='#4bb7d8';

					x.insertCell(3);
					tbval.rows[i].Cells[3].innerHTMl=data['Countries'][i-1]['	total-deaths'];
					tbval.rows.Cells[3].style.background='#f36e23';

					x.insertCell(4);
					tbval.rows[i].Cells[4].innerHTMl=data['Countries'][i-1]['new-confirmed'];
					tbval.rows.Cells[4].style.background='#4bb7d8';

					x.insertCell(5);
					tbval.rows[i].Cells[5].innerHTMl=data['Countries'][i-1]['	new-recovered'];
					tbval.rows.Cells[5].style.background='#9cc850';

					x.insertCell(6);
					tbval.rows[i].Cells[6].innerHTMl=data['Countries'][i-1]['	new-deaths'];
					tbval.rows.Cells[6].style.background='#f36e23';
				}
			}
		);
	}
	</script>

</body>
</html>