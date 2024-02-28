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
												<span class="card-label fw-bolder fs-3 mb-1">CREATE USER</span>
												<!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> -->
											</h3>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
										<?php
										if($this->session->flashdata('mesg') == "Success") {
										?>
										<div class="alert alert-success d-flex align-items-center" role="alert">
											
											<strong><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
											&nbsp;Data Berhasil Disimpan!</strong>
										</div>
										<?php
										}
										if($this->session->flashdata('mesg') == "Gagal") {
										?>
											<div class="alert alert-danger d-flex align-items-center" role="alert">
												
												<strong><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
												&nbsp;Data Gagal Disimpan!</strong>
											</div>
										<?php
										}
										if($this->session->flashdata('mesg') == "kosong") {
										?>
											<div class="alert alert-warning d-flex align-items-center" role="alert">
												
												<strong><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
												&nbsp;Data Harus Diisi Semua!</strong>
											</div>
										<?php
										}
										?>
											<!--begin::Table container-->
											<div class="table-responsive">
											<form class="row g-3" name="demoform" action="<?=site_url('CreateUser/insertDataUser')?>" method="post" accept-charset='UTF-8'>
												<div class="col-md-4">
													<label for="login" class="form-label">LOGIN</label>
													<input type="text" class="form-control" id="login" name="login" onkeypress="return isNumberKey(event)" required>
												</div>
												<div class="col-md-4">
													<label for="nama" class="form-label">NAMA</label>
													<input type="text" class="form-control" id="nama" name="nama" required>
												</div>
												<div class="col-md-4">
													<label for="jenis_kelamin" class="form-label">JENIS KELAMIN</label>
													<select class="form-control form-select" id="jenis_kelamin" name="jenis_kelamin" required>
														<option value=""> -- PILIH JENIS KELAMIN -- </option>
                                                        <option value="Pria">Pria</option>
                                                        <option value="Wanita">Wanita </option>
													</select>
												</div>
												<div class="col-md-4">
													<label for="area" class="form-label">REGIONAL</label>
													<select class="form-control form-select" id="area" name="area" required>
														<option value="">--PILIH REGIONAL--</option>
                                                        <option value="Treg 1">Treg 1</option>
                                                        <option value="Treg 2">Treg 2</option>
                                                        <option value="Treg 3">Treg 3</option>
                                                        <option value="Treg 4">Treg 4</option>
														<option value="Treg 5">Treg 5</option>
														<option value="Treg 6">Treg 6</option>
														<option value="Treg 7">Treg 7</option>
														
														
													</select>
												</div>
												<div class="col-md-4">
													<label for="witel" class="form-label">WITEL</label>
													<input type="text" class="form-control" id="witel" name="witel" required>
												</div>
												<div class="col-md-4">
													<label for="jabatan" class="form-label">JABATAN</label>
													<select class="form-control form-select" id="jabatan" name="jabatan" required>
														<option value=""> -- PILIH JABATAN -- </option>
                                                        <option value="Agent TAM">Agent TAM</option>
                                                        <option value="Team Leader">Team Leader</option>
                                                        <option value="QCO">QCO</option>
                                                        <option value="QA">QA</option>
                                                        <option value="SPV">SPV</option>
                                                        <option value="Duktek">Duktek</option>
													</select>
												</div>
												<div class="col-12 top-50">
													<br>
                                                    <button type="reset" class="btn btn-danger" name="reset">RESET</button>
													<button type="submit" class="btn btn-primary" name="save">SAVE</button>
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