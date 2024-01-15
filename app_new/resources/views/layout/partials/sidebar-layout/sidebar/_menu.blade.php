<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">	
		
		<!--begin:Menu item-->
			<div class="menu-item menu-accordions {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-11', 'fs-2') !!}</span>
					<span class="menu-title"><a class="menu-text-color {{ Route::is('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}">Dashboard</a></span>
					<!-- <span class="menu-arrow"></span> -->
				</span>
				<!--end:Menu link-->
			</div>
			<div class="menu-item menu-accordions">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-9', 'fs-2') !!}</span>
					<span class="menu-title"><a class="menu-text-color {{ Route::is('user-management.training-session') ? 'active' : '' }}" href="{{route('user-management.training-session')}}">Training Session</a></span>
					<!-- <span class="menu-arrow"></span> -->
				</span>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->			
			<div class="menu-item menu-accordions">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-12', 'fs-2') !!}</span>
					<span class="menu-title"><a class="menu-text-color {{ Route::is('user-management.conversion-review') ? 'active' : '' }}" href="{{route('user-management.conversion-review')}}">Conversation Review</a></span>
					<!-- <span class="menu-arrow"></span> -->
				</span>
				<!--end:Menu link-->
			</div>


		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
