<?php
	include_once "header.php";
?>
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!-- Content Row -->
							<div class="row">
								<div class="col-xl-12 col-md-12 mb-4">
									<div class="card border-bottom-primary shadow h-100 py-2">
										<div class="card-body">
											<h5 class="card-title">FILTER :</h5><br>
                                            <!--begin::Table container-->
                                            <form class="row" method="post" id="form">
                                                <div class="col-11">
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="datetime1" id="datetime1" class="form-control form_datetime" data-date-format="yyyy-mm-dd hh:ii:ss" placeholder="Tanggal Mulai" aria-label="Username" aria-describedby="basic-addon1">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar" aria-hidden="true"></i></span>
                                                        <input type="text" name="datetime2" id="datetime2" class="form-control form_datetime" data-date-format="yyyy-mm-dd hh:ii:ss" placeholder="Tanggal Akhir" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
														CALL AGREE</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?=isset($dataDashboard->Agree)? $dataDashboard->Agree:'0'?></div>
												</div>
												<div class="col-auto">
													<i class="fa fa-handshake-o fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-success shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
														ON PROCESS (TEAM LEADER & QCO)</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?=isset($dataDashboard->OnProcess)?$dataDashboard->OnProcess:'0'?></div>
												</div>
												<div class="col-auto">
													<i class="fa fa-hourglass-start fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-info shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
														CALL CONTACTED</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?=isset($dataDashboard->Contacted)?$dataDashboard->Contacted:'0'?></div>
												</div>
												<div class="col-auto">
													<i class="fa fa-signal fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Pending Requests Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-warning shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
														CALL RECALL</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?=isset($dataDashboard->Recall)?$dataDashboard->Recall:'0'?></div>
												</div>
												<div class="col-auto">
													<i class="fa fa-volume-control-phone fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Content Row -->
							<div class="row">

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
														CALL VALID</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?=isset($dataDashboard->Valid)?$dataDashboard->Valid:'0'?></div>
												</div>
												<div class="col-auto">
													<i class="fa fa-pencil-square-o fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-success shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
														CALL NOT VALID</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?=isset($dataDashboard->NotValid)?$dataDashboard->NotValid:'0'?></div>
												</div>
												<div class="col-auto">
													<i class="fa fa-close fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-info shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
														NEED APPROVE TL</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?=isset($dataDashboard->TL)?$dataDashboard->TL:'0'?></div>
												</div>
												<div class="col-auto">
													<i class="fa fa-list fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Pending Requests Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-warning shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
														NEED APPROVE QCO</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?=isset($dataDashboard->QCO)?$dataDashboard->QCO:'0'?></div>
												</div>
												<div class="col-auto">
													<i class="fa fa-list fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
<?php
	include_once "footer.php";
?>
<script>
	$('.form_datetime').datetimepicker({
                autoclose: 1,        //language:  'fr',
                weekStart: 1,
                todayBtn:  1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1
            });
</script>
