<style>
	.menu-text-color{
		color: #bfbfbf;
	}
	.menu-text-color:hover,
	.menu-text-color.active{
		color: #ffffff;
	}
	/* training form css */
	#training-session .form-check-box {
		border: 1px solid #f1f1f4;
		border-radius: 10px;
	}

	#training-session .form-check-box .form-check {
		padding: 15px 10px 15px 3.25rem;
		border-bottom: 1px solid #f1f1f4;
	}
	#training-session .form-check-box .form-check:last-child {
		border: none;
	} 
	.table-responsive td.table-action {
		display: flex;
		align-items: center;
		gap: 2px;
	} 
	/* .table-action a .bi-pencil-square {
		color: green;
	}
	.table-action a .bi-trash3 {
		color: red;
	}	  		 */

	</style>
<!--begin::Header-->
<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
	<!--begin::Header container-->
	<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
		<!--begin::Sidebar mobile toggle-->
		<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
			<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">{!! getIcon('abstract-14', 'fs-2 fs-md-1') !!}</div>
		</div>
		<!--end::Sidebar mobile toggle-->
		<!--begin::Mobile logo-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
			<h1><a href="{{ route('dashboard') }}" class="d-lg-none">
				<!-- <img alt="Logo" src="{{ image('logos/default-small.svg') }}" class="h-30px" /> -->
				SalesTalk
			</a></h1>
		</div>
		<!--end::Mobile logo-->
		<!--begin::Header wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
			@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/header/_menu/_menu')
			@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/header/_navbar')
		</div>
		<!--end::Header wrapper-->
	</div>
	<!--end::Header container-->
</div>
<!--end::Header-->
