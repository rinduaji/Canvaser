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
												<span class="card-label fw-bolder fs-3 mb-1">Report Recall Agent</span>
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
											<div class="table-responsive">
                                                <!--begin::Table-->
												<table id="table" class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bolder text-muted">
															<th class="min-w-100px">TANGGAL</th>
															<th class="min-w-50px">LOGIN AGENT</th>
															<th class="min-w-150px">NAMA AGENT</th>
															<th class="min-w-50px">REGIONAL</th>
															<th class="min-w-50px">WITEL</th>
															<th class="min-w-100px">NO FASTEL</th>
															<th class="min-w-150px">NAMA PEMILIK</th>
															<th class="min-w-50px">NO TELEPON</th>
															<th class="min-w-50px">JENIS CALL</th>
                                                            <th class="min-w-50px">STATUS CALL</th>
															<th class="min-w-100px">REASON CALL</th>
                                                            <th class="min-w-50px">KATEGORI</th>
                                                            <th class="min-w-50px">VALIDASI</th>
															<th class="min-w-100px">INPUT</th>
															<th class="min-w-150px">KETERANGAN AGENT</th>
															<th class="min-w-20px">LOGIN QCO</th>
															<th class="min-w-150px">KETERANGAN QCO</th>
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
		
<?php
	include_once "footer.php";
?>

		<script>
			var save_method; //for save method string
			var table;

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
			
			$(document).ready(function() {
			
				//datatables
				table = $('#table').DataTable({ 
                    dom: 'lBfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
					"processing": true, //Feature control the processing indicator.
					"serverSide": true, //Feature control DataTables' server-side processing mode.
					"order": [], //Initial no order.
			
					// Load data for the table's content from an Ajax source
					"ajax": {
						"url": "<?php echo site_url('ReportRecallAgent/ajax_list')?>",
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
			
			function reload_table()
			{
				table.ajax.reload(null,false); //reload datatable ajax 
			}
		</script>