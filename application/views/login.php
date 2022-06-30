<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
        <base href="<?= base_url('') ?>">
		<title>Risepack</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="<?= base_url('assets/media/logos/favicon.ico') ?>" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= base_url('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Signup Free Trial-->
			<div class="d-flex flex-column flex-xl-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-center flex-lg-row-fluid" style="background-color: #E4620C">
					<!--begin::Content-->
					<div class="d-flex align-items-center flex-column p-5 p-lg-15">
						<!--begin::Logo-->
						<a href="<?= base_url('') ?>" class="mb-8">
							<img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-40px" />
						</a>
						<!--end::Logo-->
						<h1 class="text-white fs-2x mb-3">Welcome, To Risepack</h1>
						<!--begin::Description-->
						<div class="fw-bold fs-4 text-white mb-10">Plan your blog post by choosing a topic creating
						<br />an outline and checking facts</div>
						<!--begin::Description-->
						<!--begin::Illustration-->
						<img src="assets/media/illustrations/dozzy-1/12.png" class="h-250px h-lg-350px" />
						<!--end::Illustration-->
					</div>
					<!--end::Content-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="flex-row-fluid d-flex flex-center justfiy-content-xl-first p-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-center p-15 shadow-sm bg-body rounded w-100 w-md-550px mx-auto ms-xl-20">
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" action="<?= site_url('auth/login') ?>" method="POST">
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Sign In To Craft</h1>
								<!--end::Title-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">Email</label>
								<input class="form-control form-control-solid" type="email" placeholder="" name="email" autocomplete="on" required/>
							</div>
							<!--end::Input group-->
							<!--begin::Row-->
							<div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">Password</label>
								<input class="form-control form-control-solid" type="password" placeholder="" name="password" autocomplete="off" required/>
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="text-center pb-lg-0 pb-8 d-grid">
								<button type="submit" class="btn btn-lg btn-primary fw-bolder my-primary">
									<span class="indicator-label">Sign In</span>
								</button>
							</div>
							<!--end::Row-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Right Content-->
			</div>
			<!--end::Authentication - Signup Free Trial-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/authentication/sign-up/free-trial.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>