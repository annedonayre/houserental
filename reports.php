<?php 
include 'db_connect.php';
?>

<style>
	.bg-dark {
		background: #131e2e !important;
	}
	.bg-light {
		background: #ebe5db !important;
	}
	.btn-primary {
		color: #ffffff;
		background: #7b8d41 !important;
		border: none;
	}
	.card {
		background: #ebe5db !important;
	}
	.text-green {
		color: #7b8d41;
		margin: 0;
		padding: 0;
		font-weight: bold;
	}
	.text-black {
		color: black;
		margin: 0;
		padding: 0;
		font-weight: bold;
	}
	.bg-img{
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
</style>

<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body bg-light">
									<h4><b>Monthly Payments Report</b></h4>
								</div>
								<div class="card-footer">
									<div class="col-md-12">
										<a href="index.php?page=payment_report" class="d-flex justify-content-between"> <span>View Report</span> <span class="fa fa-chevron-circle-right"></span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body bg-light">
									<h4><b>Rental Balances Report</b></h4>
								</div>
								<div class="card-footer">
									<div class="col-md-12">
										<a href="index.php?page=balance_report" class="d-flex justify-content-between"> <span>View Report</span> <span class="fa fa-chevron-circle-right"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>