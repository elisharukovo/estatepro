<?php 
    require_once("session_status.php");
	require_once("../functions.php");
?>

<?php
$query = "select * from users where username='$_SESSION[user]'";
$result=mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
          
   while($row = mysqli_fetch_array($result))
   {
	 $username = $row["username"];
	 $name = $row["name"];
	 $surname = $row["surname"];
	 $gender = $row["gender"];
	 $address = $row["address"];
	 $contact = $row["contact"];
   }
?>

<!DOCTYPE html>
<html>
<head>
<title>Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/blog.css">
<link rel="stylesheet" type="text/css" href="../styles/blog_responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/custom.css">
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		
		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<h4>Mornef Investments</h4>
			</div>
		</div>

	</header>

	<!-- Blog -->

	<div class="blog">
	
	<?php include_once('sidebar.php'); ?>

    <div class="content">
	
	<div class="alert alert-info"><Strong>Payment Graph</strong></div>
	
	<canvas id="sales-chart"></canvas>
								
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/Chart.bundle.js"></script>
</div>
		
	</div>

</body>
</html>

<script type="text/javascript">
    ( function ( $ ) {
    "use strict";

    //Sales chart
    var ctx = document.getElementById( "sales-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ],
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [ {
                label: "Amount Paid",
                data: [ <?php echo total_paid_per_month('January') ?>,
				        <?php echo total_paid_per_month('February') ?>,
						<?php echo total_paid_per_month('March') ?>,
						<?php echo total_paid_per_month('April') ?>,
						<?php echo total_paid_per_month('May') ?>,
						<?php echo total_paid_per_month('June') ?>,
						<?php echo total_paid_per_month('July') ?>,
						<?php echo total_paid_per_month('August') ?>,
						<?php echo total_paid_per_month('September') ?>,
						<?php echo total_paid_per_month('October') ?>,
						<?php echo total_paid_per_month('November') ?>,
						<?php echo total_paid_per_month('December') ?>
                      ],
                backgroundColor: 'transparent',
                borderColor: 'rgba(220,53,69,0.75)',
                borderWidth: 3,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(220,53,69,0.75)',
                    }, {
                label: "Month",
                data: [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                backgroundColor: 'transparent',
                borderColor: 'rgba(40,167,69,0.75)',
                borderWidth: 3,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(40,167,69,0.75)',
                    } ]
        },
        options: {
            responsive: true,

            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },
            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Month'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Amount'
                    }
                        } ]
            },
            title: {
                display: false,
                text: 'Normal Legend'
            }
        }
    } );


} )( jQuery );
    </script>

