<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Seven HTML Free  - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme
Upgrade to Pro: https://keenthemes.com/products/seven-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Canvaser</title>
		<meta name="description" content="Seven admin dashboard live demo. Check out all the features of the admin panel. Light &amp; dark skins. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Seven, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Seven HTML Free - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/products/seven-html-pro" />
		<meta property="og:site_name" content="Keenthemes | Seven HTML Free" />
		<link rel="canonical" href="Https://preview.keenthemes.com/seven-html-free" />
		<link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-default.png" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?=base_url()?>assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?=base_url()?>assets/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

		<!-- <link href="<?=base_url()?>assets/admin/datatable/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
		<link href="<?=base_url()?>assets/admin/datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/admin/datatable/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/admin/datatable/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/admin/datatable/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/admin/datatable/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/admin/datatable/bootstrap-glyphicons.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/admin/datatable/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/admin/datatable/sb-admin-2.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			label.error {
				color: red;
				font-size: 1rem;
				display: block;
				margin-top: 5px;
			}

			input.error, textarea.error, select.error {
				border: 1px dashed red;
				font-weight: 300;
				color: red;
			}
		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Primary-->
					<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
						<!--begin::Logo-->
						<div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
							<a href="../dist/index.html">
								<img alt="Logo" src="<?=base_url()?>assets/img/logo-default.png" class="h-50px" />
							</a>
						</div>
						<!--end::Logo-->
						<!--begin::Nav-->
						<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
							<!--begin::Wrapper-->
							<div class="hover-scroll-y mb-10" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
								<!--begin::Nav-->
								<ul class="nav flex-column">
									<!--begin::Nav item-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Dashboard">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-custom btn-icon <?php if($nama_tipe=="DASHBOARD") { echo "active"; } ?>" data-bs-toggle="tab" id="v-pills-dashboard" data-bs-target="#kt_aside_nav_tab_dashboard" aria-controls="v-pills-dashboard" aria-selected="true">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
													<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
													<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
													<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--end::Nav link-->
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Menu">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-custom btn-icon <?php if($nama_tipe=="MENU") { echo "active"; } ?>" data-bs-toggle="tab" id="v-pills-menu" data-bs-target="#kt_aside_nav_tab_menu" aria-controls="v-pills-menu" aria-selected="false">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--end::Nav link-->
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Report">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-custom btn-icon <?php if($nama_tipe=="REPORT") { echo "active"; } ?>" data-bs-toggle="tab" id="v-pills-report" data-bs-target="#kt_aside_nav_tab_report" aria-controls="v-pills-report" aria-selected="false">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="black" />
													<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--end::Nav link-->
									</li>
									<!--end::Nav item-->
								</ul>
								<!--end::Tabs-->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Nav-->
					</div>
					<!--end::Primary-->
					<!--begin::Secondary-->
					<div class="aside-secondary d-flex flex-row-fluid">
						<!--begin::Workspace-->
						<div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
							<div class="d-flex h-100 flex-column">
								<!--begin::Wrapper-->
								<div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab pane-->
										<div class="tab-pane fade <?php if($nama_tipe=="MENU") { echo "show active"; } ?>" id="kt_aside_nav_tab_menu" role="tabpanel" aria-labelledby="v-pills-menu">
											<!--begin::Wrapper-->
											<div class="m-0">
												<!--begin::Projects-->
												<div class="m-0">
													<!--begin::Heading-->
													<h1 class="text-gray-800 fw-bold mb-6 mx-5">Menu <?=ucfirst($this->session->userdata("jabatan"))?></h1>
													<!--end::Heading-->
													<!--begin::Items-->
													<div class="mb-10">

														<?php
														$jb = $this->session->userdata("jabatan");
														if($jb == "Agent TAM" OR $jb == "Duktek") {
														?>

															<!--begin::Item-->
															<a href="<?=site_url('InputCwc')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/add-friend.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Input Manual CWC</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ImportCreateCwc')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/input.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Input Upload CWC</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('RecallAgent')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																	<img src="<?=base_url()?>assets/img/clipart4272133.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Recall Agent</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('FollowupAgent')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/recall.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Follow Up Agent</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->

														<?php
														}
														if($jb == "Team Leader") {
														?>
															<!--begin::Item-->
															<a href="<?=site_url('ImportCwc')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/folder.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Import CWC</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ApproveTL')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/stamp.png" class="h-100 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Approve TL</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
														<?php
														}
														if($jb == "SPV") {
														?>
															<!--begin::Item-->
															<a href="<?=site_url('ImportCwc')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/folder.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Import CWC</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
														<?php
														}
														if($jb == "QCO" OR $jb == "Duktek") {
														?>
															<!--begin::Item-->
															<a href="<?=site_url('ImportCwc')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/folder.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Import CWC</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('Approve')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/verified.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Approve QCO</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
														<?php
														}
														if($jb == "Duktek") {
														?>
														
															<!--begin::Item-->
															<a href="<?=site_url('ApproveTL')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/stamp.png" class="h-100 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Approve TL</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ImportCwc')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/folder.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Import CWC</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('CreateUser')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/create.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Create User</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
														<?php
														}
														?>
													</div>
													<!--end::Items-->
												</div>
												<!--end::Projects-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Tab pane-->
										<!--begin::Tab pane-->
										<div class="tab-pane fade <?php if($nama_tipe=="REPORT") { echo "show active"; } ?>" id="kt_aside_nav_tab_report" role="tabpanel" aria-labelledby="v-pills-report">
											<!--begin::Wrapper-->
											<div class="m-0">
												<!--begin::Projects-->
												<div class="m-0">
													<!--begin::Heading-->
													<h1 class="text-gray-800 fw-bold mb-6 mx-5">Report <?=ucfirst($this->session->userdata("jabatan"))?></h1>
													<!--end::Heading-->
													<!--begin::Items-->
													<div class="mb-10">
														<!--begin::Item-->

														<?php
														if($jb == "Agent TAM" OR $jb == "Duktek") {
														?>

															<a href="<?=site_url('ReportCallAgent')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/report.png" class="h-100 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Call Agent</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ReportRecallAgent')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/support.svg" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Recall Agent</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															
															<!--begin::Item-->
															<a href="<?=site_url('ReportFollowAgent')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/clipboard.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Follow UP Agent</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->

														<?php
														}
														if($jb == "Team Leader" OR $jb == "SPV" OR $jb == "Duktek" OR $jb == "QA") {
														?>

															<!--begin::Item-->
															<a href="<?=site_url('ReportCall')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/document.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Call</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ReportCallAgree')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/immigration.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Call Agree</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ReportRecall')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/schedule.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Recall</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ReportFollow')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/dashboard.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Follow UP</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
														
														<?php
														}
														if($jb == "QCO" OR $jb == "QA" OR $jb == "Duktek" OR $jb == "SPV") {
														?>
															<a href="<?=site_url('ReportTapUpdQco')?>" class="custom-list d-flex align-items-center px-5 py-4">
																
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/quality-control.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<div class="d-flex flex-column flex-grow-1">
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Jumlah Tapping QCO</h5>
																	
																</div>
															</a>
															
															<!--begin::Item-->
															<a href="<?=site_url('ReportCall')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/document.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Call</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ReportCallAgree')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/immigration.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Call Agree</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ReportRecall')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/schedule.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Recall</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="<?=site_url('ReportFollow')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/dashboard.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Follow UP</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->
															
															<!-- <a href="<?=site_url('ReportValidQCO')?>" class="custom-list d-flex align-items-center px-5 py-4">
																
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/admin/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																	</span>
																</div>
																<div class="d-flex flex-column flex-grow-1">
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Valid QCO</h5>
																	
																</div>
															</a>
															<a href="<?=site_url('ReportNotValidQCO')?>" class="custom-list d-flex align-items-center px-5 py-4">
																
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																	<img src="<?=base_url()?>assets/admin/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																	</span>
																</div>
																<div class="d-flex flex-column flex-grow-1">
																	
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Not Valid QCO</h5>
																	
																</div>
															</a>
															<a href="<?=site_url('ReportReturnTLQCO')?>" class="custom-list d-flex align-items-center px-5 py-4">
																
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																	<img src="<?=base_url()?>assets/admin/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																	</span>
																</div>
																<div class="d-flex flex-column flex-grow-1">
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Return TL QCO</h5>
																
																</div>
															</a> -->
														
														<?php
														}
														if($jb == "QA" OR $jb == "Duktek" OR $jb == "SPV") {
														?>

															<!--begin::Item-->
															<a href="<?=site_url('ReportTappingQCO')?>" class="custom-list d-flex align-items-center px-5 py-4">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-5">
																	<span class="symbol-label">
																		<img src="<?=base_url()?>assets/img/seo.png" class="h-75 align-self-center" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Description-->
																<div class="d-flex flex-column flex-grow-1">
																	<!--begin::Title-->
																	<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Report Tapping QCO</h5>
																	<!--end::Link-->
																</div>
																<!--begin::Description-->
															</a>
															<!--end::Item-->

														<?php
														}
														?>
													</div>
													<!--end::Items-->
												</div>
												<!--end::Projects-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Tab pane-->
										<!--begin::Tab pane-->
										<div class="tab-pane fade <?php if($nama_tipe=="DASHBOARD") { echo "show active"; } ?>" id="kt_aside_nav_tab_dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard">
											<!--begin::Wrapper-->
											<div class="m-0">
												<!--begin::Projects-->
												<div class="m-0">
													<!--begin::Heading-->
													<h1 class="text-gray-800 fw-bold mb-6 mx-5">Dashboard</h1>
													<!--end::Heading-->
													<!--begin::Items-->
													<div class="mb-10">
														<!--begin::Item-->
														<a href="<?=site_url('Dashboard')?>" class="custom-list d-flex align-items-center px-5 py-4">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-5">
																<span class="symbol-label">
																	<img src="<?=base_url()?>assets/img/business-report.png" class="h-75 align-self-center" alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Description-->
															<div class="d-flex flex-column flex-grow-1">
																<!--begin::Title-->
																<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Dashboard</h5>
																<!--end::Link-->
															</div>
															<!--begin::Description-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Projects-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Tab pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Footer-->
								<div class="flex-column-auto pt-10 px-5" id="kt_aside_secondary_footer">
									<a href="<?=site_url('Login/logout')?>" class="btn btn-danger btn-lg btn-color-white btn-flex flex-center w-100" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-trigger="hover" data-bs-offset="0,5" data-bs-dismiss-="click" title="Logout">
									<i class="fas fa-sign-out-alt"></i>Logout
									</a>
								</div>
								<!--end::Footer-->
							</div>
						</div>
						<!--end::Workspace-->
					</div>
					<!--end::Secondary-->
					<!--begin::Aside Toggle-->
					<button class="btn btn-sm btn-icon bg-body btn-color-gray-600 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize" style="margin-bottom: 1.35rem">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
						<span class="svg-icon svg-icon-2 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
								<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					<!--end::Aside Toggle-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="text-dark fw-bold my-0 fs-2"><?=$title?></h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-line text-muted fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="../dist/index.html" class="text-muted"><?=$nama_tipe?> <?=$this->session->userdata("jabatan")?></a>
									</li>
									<li class="breadcrumb-item text-dark"><?=$title?></li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title=-->
							<!--begin::Wrapper-->
							<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
								<!--begin::Aside mobile toggle-->
								<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Aside mobile toggle-->
								<!--begin::Logo-->
								<a href="../dist/index.html" class="d-flex align-items-center">
									<img alt="Logo" src="<?=base_url()?>assets/img/logo-default.png" class="h-40px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Toolbar wrapper-->
							<div class="d-flex flex-shrink-0">
								<!--begin::Invite user-->
								<!-- <div class="d-flex ms-3">
									<a href="#" class="btn bg-body btn-color-gray-600 btn-active-info" tooltip="New Member" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">New User</a>
								</div> -->
								<!--end::Invite user-->
								<!--begin::Create app-->
								<div class="d-flex ms-3">
									<span><?php echo $this->session->userdata('name').' | '.$this->session->userdata('jabatan').' | '.$this->session->userdata('area').' | '.$this->session->userdata('regional') ?></span>
								</div>
								<!--end::Create app-->
							</div>
							<!--end::Toolbar wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->