<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_logo')
	@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_menu')
	@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_footer')
</div>
<!--end::Sidebar-->
<style>
		@media only screen and (min-width: 992px){
		[data-kt-app-sidebar-hoverable=true][data-kt-app-sidebar-minimize=on] .app-sidebar:hover:not(.animating) {
			transition: width 0.3s ease;
			width: 75px !important;
		}
		.[data-kt-app-sidebar-hoverable=true][data-kt-app-sidebar-minimize=on] .app-sidebar:hover .menu-title{
			opacity: 0;
		}
 
		[data-kt-app-sidebar-minimize=on][data-kt-app-sidebar-hoverable=true] .app-sidebar:hover .app-sidebar-menu .menu-title {
			opacity: 0 !important;
			transition: opacity 0.3s ease !important;
		}

	}
</style>