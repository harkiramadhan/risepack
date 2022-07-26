<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
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
		<title>Risepack - <?= @$title ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="<?= base_url('assets/media/logos/favicon.ico') ?>" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?= base_url('assets/plugins/custom/leaflet/leaflet.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/plugins/custom/datatables/datatables.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= base_url('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Logo-->
					<div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
						<a href="../../demo9/dist/index.html">
							<img alt="Logo" src="<?= base_url('assets/media/logos/logo-demo9.svg') ?>" class="h-60px" />
						</a>
					</div>
					<!--end::Logo-->
					<!--begin::Nav-->
					<div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
						<?php $this->load->view('menus') ?>
					</div>
					<!--end::Nav-->
					<!--begin::Footer-->
					<div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
						<!--begin::Menu-->
						<div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Quick actions">
							<button type="button" class="btn btn-custom" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
								<span class="svg-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
										<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black" />
										<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--begin::Menu 2-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator mb-3 opacity-75"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">New Ticket</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">New Customer</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<!--begin::Menu item-->
									<a href="#" class="menu-link px-3">
										<span class="menu-title">New Group</span>
										<span class="menu-arrow"></span>
									</a>
									<!--end::Menu item-->
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Admin Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Staff Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Member Group</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">New Contact</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator mt-3 opacity-75"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content px-3 py-3">
										<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
									</div>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 2-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header tablet and mobile-->
					<div class="header-mobile py-3">
						<!--begin::Container-->
						<div class="container d-flex flex-stack">
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="../../demo9/dist/index.html">
									<img alt="Logo" src="assets/media/logos/logo-demo9.svg" class="h-35px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Aside toggle-->
							<button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-2x me-n1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--end::Aside toggle-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header tablet and mobile-->
					<!--begin::Header-->
					<div id="kt_header" class="header py-6 py-lg-0 my-primary" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
						<!--begin::Container-->
						<div class="header-container container-xxl">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bolder my-1">
									<span class="text-white fs-1"><?= @$title ?></span>
									<small class="text-white fs-6 fw-normal pt-2"><?= @$title_desc ?></small>
								</h1>
								<!--end::Heading-->
							</div>
							<!--end::Page title=-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center flex-wrap">
								<!--begin::Action-->
								<div class="d-flex align-items-center py-3 py-lg-0">
									<!--begin::Item-->
									<a href="<?= site_url('auth/logout') ?>" class="btn btn-success" data-bs-target="#kt_modal_create_app"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
									<!--end::Item-->
								</div>
								<!--end::Action-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
						<div class="header-offset"></div>
					</div>
					<!--end::Header-->

					<!--begin::Content-->
					<?php $this->load->view(@$page) ?>
					<!--end::Content-->

					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-gray-400 fw-bold me-1">Created by</span>
								<a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "<?= base_url('assets/') ?>";</script>
		<script>var baseUrl = "<?= site_url('') ?>";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?= base_url('assets/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/js/scripts.bundle.js') ?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="<?= base_url('assets/plugins/custom/leaflet/leaflet.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/plugins/custom/datatables/datatables.bundle.js') ?>"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?= base_url('assets/js/custom/modals/select-location.js') ?>"></script>
		<script src="<?= base_url('assets/js/widgets.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/widgets.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/apps/chat/chat.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/utilities/modals/upgrade-plan.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/utilities/modals/create-app.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/utilities/modals/users-search.js') ?>"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		<!--end::Page Custom Javascript-->

		<!--end::Javascript-->
		<script>
			$('.menu-icon').click(function(){
				var url = $(this).attr('data-url')
				window.location.href = url
			})
		</script>

		<?php if(@$ajax){
			foreach(@$ajax as $ajx){
				?>
					<script src="<?= base_url('assets/js/ajax/'.$ajx) ?>.js"></script>
				<?php
			}
		} ?>
	</body>
	<!--end::Body-->
</html>