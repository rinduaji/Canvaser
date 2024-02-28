<?php
	include_once "header.php";
?>
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">

							<div class="row gy-5 g-xl-12">
								<!--begin::Col-->
								<div class="col-xl-12">
									<!--begin::Tables Widget 3-->
									<div class="card card-xl-stretch mb-5 mb-xl-12">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Import CWC</span>
												<!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> -->
											</h3>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
										<?php
										if($this->session->flashdata('status')){
											echo $this->session->flashdata('status');
										}
										?>  
											<!--begin::Table container-->
											<div class="table-responsive">
												<form class="row g-3" name="demoform" action="<?=site_url('ImportCwc/import_excel')?>" method="post" enctype="multipart/form-data" accept-charset='UTF-8'>
													<div class="col-md-12">
														<label for="fastel" class="form-label"><b>Template File Excel CWC</b></label>
													</div>
													<div class="col-md-12">
														<a href="<?=base_url('uploads/file_upload/template_upload_cwc_canvaser.xlsx')?>" class="btn btn-info">Download Template CWC</a>
													</div>
													<div class="col-md-12">
														<label for="nama_dm" class="form-label"><b>File Excel Upload CWC</b></label>
														<input type="file" name="fileExcel" id="file-upload" class="form-control" placeholder="File Excel"> 
													</div>
													<div class="col-12 top-50">
														<br>
														<button type="submit" class="btn btn-primary" name="upload">UPLOAD</button>
													</div>
												</form>
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 3-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->

		
<?php
	include_once "footer.php";
?>