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
												<span class="card-label fw-bolder fs-3 mb-1">Approve TL</span>
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
                                            else if($this->session->flashdata('mesg') == "Gagal") {
                                            ?>
                                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                                    
                                                    <strong><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                                    &nbsp;Data Gagal Disimpan!</strong>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table id="table" class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bolder text-muted">
															<th class="min-w-100px">TANGGAL</th>
															<th class="min-w-50px">LOGIN AGENT</th>
															<th class="min-w-150px">NAMA AGENT</th>
															<th class="min-w-50px">WITEL</th>
															<th class="min-w-100px">NO FASTEL</th>
															<th class="min-w-150px">NAMA PEMILIK</th>
															<th class="min-w-50px">NO TELEPON</th>
															<th class="min-w-50px">JENIS CALL</th>
															<th class="min-w-100px">REASON CALL</th>
															<th class="min-w-100px">INPUT</th>
															<th class="min-w-150px">KETERANGAN AGENT</th>
															<th class="min-w-20px">LOGIN QCO</th>
															<th class="min-w-150px">KETERANGAN QCO</th>
															<th class="min-w-100px text-end">ACTIONS</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
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
		<!--begin::Modal - Create App-->
		<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Form Tapping</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
						<!--begin::Stepper-->
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<!--begin::Content-->
							<div class="flex-row-fluid py-lg-5 px-lg-15">
								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
									<input type="hidden" class="form-control form-control-lg form-control-solid" name="id" placeholder="" readonly/>
                                    <input type="hidden" class="form-control form-control-lg form-control-solid" name="upd_tl" value="<?=$this->session->userdata("username")?>" readonly/>
									<input type="hidden" class="form-control form-control-lg form-control-solid" name="tgl_tl" value="<?=date("Y-m-d h:i:s")?>" readonly/>
									<!--begin::Step 1-->
									<div class="current" data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-2">
													<span class="required">Login</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="login" placeholder="" readonly/>
												<!--end::Input-->
											</div>
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-2">
													<span class="required">NO Fastel</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="fastel" placeholder="" readonly />
												<!--end::Input-->
											</div>
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-2">
													<span class="required">Campaign / Rule</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="jenis" placeholder="" readonly />
												<!--end::Input-->
											</div>
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-2">
													<span class="required">Keterangan Agent</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<textarea class="form-control form-control-lg form-control-solid" name="ket" placeholder="" readonly></textarea>
												<!--end::Input-->
											</div>
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-2">
													<span class="required">Rekomendasi QCO</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<textarea class="form-control form-control-lg form-control-solid" name="rec_qco" placeholder="" readonly></textarea>
												<!--end::Input-->
											</div>
                                            <div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-2">
													<span class="required">Rekomendasi TL</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<textarea class="form-control form-control-lg" name="rec_tl" placeholder="" required></textarea>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 1-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
					<div class="modal-footer">
						<div class="d-flex flex-stack pt-10">
										<!--begin::Wrapper-->
										<div>
											<button type="button" class="btn btn-lg btn-light-primary me-3" data-dismiss="modal">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
											<span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->Cancel</button>
										</div>
										<!--end::Wrapper-->
										<!--begin::Wrapper-->
										<div>
											<button type="button" id="btnSave" class="btn btn-lg btn-primary" onclick="save()">Tapping
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon--></button>
										</div>
										<!--end::Wrapper-->
						</div>
					</div>
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
		
<?php
	include_once "footer.php";
?>

		<script>
			var save_method; //for save method string
			var table;
			
			$(document).ready(function() {
			
				//datatables
				table = $('#table').DataTable({ 
			
					"processing": true, //Feature control the processing indicator.
					"serverSide": true, //Feature control DataTables' server-side processing mode.
					"order": [], //Initial no order.
			
					// Load data for the table's content from an Ajax source
					"ajax": {
						"url": "<?php echo site_url('ApproveTL/ajax_list')?>",
						"type": "POST"
					},
			
					//Set column definition initialisation properties.
					"columnDefs": [
					{ 
						"targets": [ -1 ], //last column
						"orderable": false, //set not orderable
					},
					],
			
				});
			
				//datepicker
				// $('.datepicker').datepicker({
				// 	autoclose: true,
				// 	format: "yyyy-mm-dd",
				// 	todayHighlight: true,
				// 	orientation: "top auto",
				// 	todayBtn: true,
				// 	todayHighlight: true,  
				// });
			
			});
			
			function tapping_data(id)
			{
				save_method = 'update';
				$('#kt_modal_create_app_form')[0].reset(); // reset form on modals
				$('.form-group').removeClass('has-error'); // clear error class
				$('.help-block').empty(); // clear error string
			
				//Ajax Load data from ajax
				$.ajax({
					url : "<?php echo site_url('ApproveTL/ajax_edit')?>/" + id,
					type: "GET",
					dataType: "JSON",
					success: function(data)
					{
			
						$('[name="id"]').val(data.id);
						$('[name="login"]').val(data.login);
						$('[name="fastel"]').val(data.fastel);
						$('[name="jenis"]').val(data.jenis);
						$('[name="ket"]').val(data.ket);
                        $('[name="rec_qco"]').val(data.rec_qco);
						// $('[name="dob"]').datepicker('update',data.dob);
						$('#kt_modal_create_app').modal('show'); // show bootstrap modal when complete loaded
						$('.modal-title').text('Form Tapping'); // Set title to Bootstrap modal title
			
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error get data from ajax');
					}
				});
			}
			
			function reload_table()
			{
				table.ajax.reload(null,false); //reload datatable ajax 
			}
			
			function save()
			{
				$('#btnSave').text('saving...'); //change button text
				$('#btnSave').attr('disabled',true); //set button disable 
				var url;
			
				if(save_method == 'add') {
					url = "<?php echo site_url('ApproveTl/ajax_add')?>";
				} else {
					url = "<?php echo site_url('ApproveTL/ajax_update')?>";
				}
			
				// ajax adding data to database
				$.ajax({
					url : url,
					type: "POST",
					data: $('#kt_modal_create_app_form').serialize(),
					dataType: "JSON",
					success: function(data)
					{
			
						if(data.status) //if success close modal and reload ajax table
						{
							$('#kt_modal_create_app').modal('hide');
							reload_table();
							swal("Success", "Data Berhasil Di Tapping oleh TL!", "success");
						}
			
						$('#btnSave').text('save'); //change button text
						$('#btnSave').attr('disabled',false); //set button enable 
			
			
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error adding / update data');
						$('#btnSave').text('save'); //change button text
						$('#btnSave').attr('disabled',false); //set button enable 
			
					}
				});
			}
		</script>