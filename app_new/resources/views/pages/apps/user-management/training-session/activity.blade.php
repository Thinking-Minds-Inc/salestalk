<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection


    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " bis_skin_checked="1">

<!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack " bis_skin_checked="1">



<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 " bis_skin_checked="1">
<!--begin::Title-->
<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
Activity
</h1>
<!--end::Title-->


<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        <a href="/metronic8/demo1/../demo1/index.html" class="text-muted text-hover-primary">
                    Home                            </a>
                                </li>
                    <!--end::Item-->
                        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-500 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
                            
                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        User Profile                                            </li>
                    <!--end::Item-->
                            
        </ul>
<!--end::Breadcrumb-->
</div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3" bis_skin_checked="1">
<!--begin::Filter menu-->
<div class="m-0" bis_skin_checked="1">
<!--begin::Menu toggle-->
<a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-filter fs-6 text-muted me-1"><span class="path1"></span><span class="path2"></span></i>               
    Filter
</a>
<!--end::Menu toggle-->



<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597a657372a7" bis_skin_checked="1">
<!--begin::Header-->
<div class="px-7 py-5" bis_skin_checked="1">
<div class="fs-5 text-gray-900 fw-bold" bis_skin_checked="1">Filter Options</div>
</div>
<!--end::Header-->

<!--begin::Menu separator-->
<div class="separator border-gray-200" bis_skin_checked="1"></div>
<!--end::Menu separator-->


<!--begin::Form-->
<div class="px-7 py-5" bis_skin_checked="1">
<!--begin::Input group-->
<div class="mb-10" bis_skin_checked="1">
<!--begin::Label-->
<label class="form-label fw-semibold">Status:</label>
<!--end::Label-->

<!--begin::Input-->
<div bis_skin_checked="1">
    <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597a657372a7" data-allow-clear="true" data-select2-id="select2-data-7-b78o" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
        <option></option>
        <option value="1">Approved</option>
        <option value="2">Pending</option>
        <option value="2">In Process</option>
        <option value="2">Rejected</option>
    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-84c2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-68id-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-68id-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>
<!--end::Input-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="mb-10" bis_skin_checked="1">
<!--begin::Label-->
<label class="form-label fw-semibold">Member Type:</label>
<!--end::Label-->

<!--begin::Options-->
<div class="d-flex" bis_skin_checked="1">
    <!--begin::Options-->    
    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
        <input class="form-check-input" type="checkbox" value="1">
        <span class="form-check-label">
            Author
        </span>
    </label>
    <!--end::Options-->    

    <!--begin::Options-->    
    <label class="form-check form-check-sm form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" value="2" checked="checked">
        <span class="form-check-label">
            Customer
        </span>
    </label>
    <!--end::Options-->    
</div>        
<!--end::Options-->    
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="mb-10" bis_skin_checked="1">
<!--begin::Label-->
<label class="form-label fw-semibold">Notifications:</label>
<!--end::Label-->

<!--begin::Switch-->
<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid" bis_skin_checked="1">
    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
    <label class="form-check-label">
        Enabled
    </label>
</div>
<!--end::Switch-->
</div>
<!--end::Input group-->

<!--begin::Actions-->
<div class="d-flex justify-content-end" bis_skin_checked="1">
<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>

<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
</div>
<!--end::Actions-->
</div>
<!--end::Form-->
</div>
<!--end::Menu 1-->        </div>
<!--end::Filter menu-->


<!--begin::Secondary button-->
<!--end::Secondary button-->

<!--begin::Primary button-->
<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
Create        </a>
<!--end::Primary button-->
</div>
<!--end::Actions-->
</div>
<!--end::Toolbar container-->
</div>





    <div class="card mb-5 mb-xxl-8" bis_skin_checked="1">
    <div class="card-body pt-9 pb-0" bis_skin_checked="1">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap" bis_skin_checked="1">
            <!--begin: Pic-->
            <div class="me-7 mb-4" bis_skin_checked="1">
                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative" bis_skin_checked="1">
                    <img src="{{asset('assets/media/Profile/profile_img.jpg')}}" alt="image">
                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px" bis_skin_checked="1"></div>
                </div>
            </div>
            <!--end::Pic-->

            <!--begin::Info-->
            <div class="flex-grow-1" bis_skin_checked="1">
                <!--begin::Title-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2" bis_skin_checked="1">
                    <!--begin::User-->
                    <div class="d-flex flex-column" bis_skin_checked="1">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
                            <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i></a>
                        </div>
                        <!--end::Name-->

                        <!--begin::Info-->                        
                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2" bis_skin_checked="1">
                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                <i class="ki-duotone ki-profile-circle fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                                Developer
                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>                                SF, Bay Area
                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                <i class="ki-duotone ki-sms fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>                                max@kt.com
                            </a>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->

                    <!--begin::Actions-->
                    <div class="d-flex my-4" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                            <i class="ki-duotone ki-check fs-3 d-none"></i>                            
<!--begin::Indicator label-->
<span class="indicator-label">
    Follow</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->                        </a>
                        
                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>

                        <!--begin::Menu-->
                        <div class="me-0" bis_skin_checked="1">
                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>                            </button>
                            
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Heading-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase" bis_skin_checked="1">
            Payments
        </div>
    </div>
    <!--end::Heading-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Create Invoice
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link flex-stack px-3">
            Create Payment

            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
                <i class="ki-duotone ki-information fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Generate Bill
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4" bis_skin_checked="1">
            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Plans
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Billing
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Statements
                </a>
            </div>
            <!--end::Menu item-->
            
            <!--begin::Menu separator-->
            <div class="separator my-2" bis_skin_checked="1"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <div class="menu-content px-3" bis_skin_checked="1">
                    <!--begin::Switch-->      
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <!--begin::Input-->   
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                        <!--end::Input-->   

                        <!--end::Label-->   
                        <span class="form-check-label text-muted fs-6">
                            Recuring
                        </span>
                        <!--end::Label-->   
                    </label>
                    <!--end::Switch-->   
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 3-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Title-->

                <!--begin::Stats-->
                <div class="d-flex flex-wrap flex-stack" bis_skin_checked="1">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1 pe-8" bis_skin_checked="1">
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap" bis_skin_checked="1">
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3" bis_skin_checked="1">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1" bis_skin_checked="1">$4,500</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-500" bis_skin_checked="1">Earnings</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3" bis_skin_checked="1">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1" bis_skin_checked="1">80</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-500" bis_skin_checked="1">Projects</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3" bis_skin_checked="1">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1" bis_skin_checked="1">%60</div>
                                </div>
                                <!--end::Number-->                                

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-500" bis_skin_checked="1">Success Rate</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Progress-->
                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3" bis_skin_checked="1">
                        <div class="d-flex justify-content-between w-100 mt-auto mb-2" bis_skin_checked="1">
                            <span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
                            <span class="fw-bold fs-6">50%</span>
                        </div>

                        <div class="h-5px mx-3 w-100 bg-light mb-3" bis_skin_checked="1">
                            <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                        </div>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Details-->   

        <!--begin::Navs-->
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="/metronic8/demo1/../demo1/pages/user-profile/overview.html">
                        Overview                    </a>
                </li>
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/pages/user-profile/projects.html">
                        Projects                    </a>
                </li>
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <!-- <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/pages/user-profile/campaigns.html">
                        Campaigns                    </a>
                </li> -->
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <!-- <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/pages/user-profile/documents.html">
                        Documents                    </a>
                </li> -->
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <!-- <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/pages/user-profile/followers.html">
                        Followers                    </a>
                </li> -->
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="#">
                        Activity                    </a>
                </li>
                <!--end::Nav item-->
                    </ul>
        <!--begin::Navs-->
    </div>
</div>

<!-- activity inner content start -->

<div class="card" bis_skin_checked="1">
    <!--begin::Card head-->
    <div class="card-header card-header-stretch" bis_skin_checked="1">
        <!--begin::Title-->
        <div class="card-title d-flex align-items-center" bis_skin_checked="1">            
            <i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i> 	

            <h3 class="fw-bold m-0 text-gray-800">Jan 23, 2024</h3>
        </div>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar m-0" bis_skin_checked="1">
            <!--begin::Tab nav-->
            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                <li class="nav-item" role="presentation">
                    <a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today" aria-selected="true">
                        Today
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week" aria-selected="false" tabindex="-1">
                        Week
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month" aria-selected="false" tabindex="-1">
                        Month
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year" aria-selected="false" tabindex="-1">
                        2024                    </a>
                </li>
            </ul>
            <!--end::Tab nav-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card head-->

    <!--begin::Card body-->
    <div class="card-body" bis_skin_checked="1">
        <!--begin::Tab Content-->
        <div class="tab-content" bis_skin_checked="1">
            <!--begin::Tab panel-->
            <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab" bis_skin_checked="1">
                <!--begin::Timeline-->
<div class="timeline timeline-border-dashed" bis_skin_checked="1">
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">There are 2 new tasks for you in “AirPlus Mobile App” project:h</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Added at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_7.jpg')}}" alt="image">  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            <!--begin::Record-->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5" bis_skin_checked="1">  
                <!--begin::Title-->                                   
                <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>                                  
                <!--end::Title-->

                <!--begin::Label-->
                <div class="min-w-175px pe-2" bis_skin_checked="1">
                    <span class="badge badge-light text-muted">Application Design</span>
                </div>
                <!--end::Label-->
                
                <!--begin::Users-->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2" bis_skin_checked="1">
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                    <img src="{{asset('assets/media/activity/profile_img_8.jpg')}}" alt="image">
                    </div>
                    <!--end::User-->

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                    <img src="{{asset('assets/media/activity/img_7.jpg')}}" alt="image">
                    </div>  
                    <!--end::User-->                                  

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary" bis_skin_checked="1">A</div>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->                                     

                <!--begin::Progress-->
                <div class="min-w-125px pe-2" bis_skin_checked="1">
                    <span class="badge badge-light-primary">In Progress</span>
                </div>
                <!--end::Progress-->
                                    
                <!--begin::Action-->
                <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>    
                <!--end::Action-->                                
            </div>
            <!--end::Record-->

            <!--begin::Record-->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0" bis_skin_checked="1">  
                <!--begin::Title-->                                   
                <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>                                  
                <!--end::Title-->

                <!--begin::Label-->
                <div class="min-w-175px" bis_skin_checked="1">
                    <span class="badge badge-light text-muted">CRM System Development</span>
                </div>
                <!--end::Label-->
                
                <!--begin::Users-->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px" bis_skin_checked="1">
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                    <img src="{{asset('assets/media/activity/crm_profile.jpg')}}" alt="image"> 
                    </div>
                    <!--end::User-->                               

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1">
                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary" bis_skin_checked="1">B</div>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->                                     

                <!--begin::Progress-->
                <div class="min-w-125px" bis_skin_checked="1">
                    <span class="badge badge-light-success">Completed</span>
                </div>
                <!--end::Progress-->
                                    
                <!--begin::Action-->
                <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>    
                <!--end::Action-->                                
            </div>
            <!--end::Record-->
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon me-4" bis_skin_checked="1">
        <i class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->       

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n2" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="overflow-auto pe-3" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">Invitation for crafting engaging designs that speak human workshop12</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Sent at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Alan Nilson" data-bs-original-title="Alan Nilson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_8.jpg')}}" alt="image">  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content--> 
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="mb-5 pe-3" bis_skin_checked="1">
            <!--begin::Title-->
            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Sent at 10:30 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Jan Hummer" data-bs-original-title="Jan Hummer" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_91.jpg')}}" alt="image">             
               </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5" bis_skin_checked="1">
                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">  
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/pdf_img.svg')}}" alt="image">  
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">1.9mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--begin::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">   
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/doc1.svg')}}" alt="image">                      <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">18kb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center" bis_skin_checked="1">
                    <!--begin::Icon-->                               
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/css1.svg')}}" alt="image">  
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">20mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Icon--> 
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

        <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                Task <a href="#" class="text-primary fw-bold me-1">#45890</a>  
                merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Initiated at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_7.jpg')}}" alt="image">           
                  </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">3 new application design concepts added:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Created at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Marcus Dotson" data-bs-original-title="Marcus Dotson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/profile_img_8.jpg')}}" alt="image">  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7" bis_skin_checked="1">
                <!--begin::Item-->
                <div class="overlay me-10" bis_skin_checked="1">  
                    <!--begin::Image-->                                      
                    <div class="overlay-wrapper" bis_skin_checked="1">  
                    <img  alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_1.jpg')}}" alt="image">  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="overlay me-10" bis_skin_checked="1">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_2.jpg')}}" alt="image">  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>        
                    <!--end::Link-->                                
                </div>
                <!--end::Item-->                        
                
                <!--begin::Item-->
                <div class="overlay" bis_skin_checked="1">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img  alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_3.jpg')}}" alt="image">  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->  
</div>
<!--end::Timeline item-->    
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                New case <a href="#" class="text-primary fw-bold me-1">#67890</a> 
                is assigned to you in Multi-platform Database Design project
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="overflow-auto pb-5" bis_skin_checked="1">
                <!--begin::Wrapper-->
                <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7" bis_skin_checked="1">Added at 4:23 PM by</div>
                    <!--end::Info-->

                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                    <!--end::User--> 
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->           
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">You have received a new order:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Placed at 5:05 AM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Robert Rich" data-bs-original-title="Robert Rich" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_99.jpg')}}" alt="image">             
                 </div>
               
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            
<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6" bis_skin_checked="1">
            <!--begin::Icon-->
        <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap" bis_skin_checked="1">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold" bis_skin_checked="1">
                                    <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                
                                    <div class="fs-6 text-gray-700 pe-7" bis_skin_checked="1">Login into Admin Dashboard to make sure the data integrity is OK</div>
                            </div>
            <!--end::Content-->
        
                    <!--begin::Action-->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"> 
                Proceed            </a>
            <!--end::Action-->
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->
                
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->   
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                New order <a href="#" class="text-primary fw-bold me-1">#67890</a> 
                is placed for Workshow Planning &amp; Budget Estimation
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Placed at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content--> 
</div>
<!--end::Timeline item--> </div>
<!--end::Timeline-->            </div>
            <!--end::Tab panel-->

            <!--begin::Tab panel-->
            <div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab" bis_skin_checked="1">
                <!--begin::Timeline-->
<div class="timeline timeline-border-dashed" bis_skin_checked="1">
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon me-4" bis_skin_checked="1">
        <i class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->       

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n2" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="overflow-auto pe-3" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">Invitation for crafting engaging designs that speak human workshop</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Sent at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Alan Nilson" data-bs-original-title="Alan Nilson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_8.jpg')}}" alt="image">             
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content--> 
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="mb-5 pe-3" bis_skin_checked="1">
            <!--begin::Title-->
            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files</a>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Sent at 10:30 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Jan Hummer" data-bs-original-title="Jan Hummer" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_91.jpg')}}" alt="image">    
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5" bis_skin_checked="1">
                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">  
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/pdf_img.svg')}}" alt="image">  

                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">1.9mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--begin::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">   
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/doc1.svg')}}" alt="image">  
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">18kb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center" bis_skin_checked="1">   
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/css1.svg')}}" alt="image">  
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">20mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Icon--> 
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

        <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                Task <a href="#" class="text-primary fw-bold me-1">#45890</a>  
                merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:dff
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Initiated at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_7.jpg')}}" alt="image">  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">3 new application design concepts added:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Created at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Marcus Dotson" data-bs-original-title="Marcus Dotson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/profile_img_8.jpg')}}" alt="image">  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7" bis_skin_checked="1">
                <!--begin::Item-->
                <div class="overlay me-10" bis_skin_checked="1">  
                    <!--begin::Image-->                                      
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_1.jpg')}}" alt="image">  

                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="overlay me-10" bis_skin_checked="1">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img alt="img" class="rounded w-150px"  src="{{asset('assets/media/activity/explore_bg_2.jpg')}}" alt="image">  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>        
                    <!--end::Link-->                                
                </div>
                <!--end::Item-->                        
                
                <!--begin::Item-->
                <div class="overlay" bis_skin_checked="1">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img alt="img" class="rounded w-150px"  src="{{asset('assets/media/activity/explore_bg_3.jpg')}}" alt="image">  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->  
</div>
<!--end::Timeline item-->    
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                New case <a href="#" class="text-primary fw-bold me-1">#67890</a> 
                is assigned to you in Multi-platform Database Design project
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="overflow-auto pb-5" bis_skin_checked="1">
                <!--begin::Wrapper-->
                <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7" bis_skin_checked="1">Added at 4:23 PM by</div>
                    <!--end::Info-->

                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                    <!--end::User--> 
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->           
</div>
<!--end::Timeline item--></div>
<!--end::Timeline-->            </div>
            <!--end::Tab panel-->

            <!--begin::Tab panel-->
            <div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab" bis_skin_checked="1">
                <!--begin::Timeline-->
<div class="timeline timeline-border-dashed" bis_skin_checked="1">
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">3 new application design concepts added:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Created at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Marcus Dotson" data-bs-original-title="Marcus Dotson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/profile_img_8.jpg')}}" alt="image">  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7" bis_skin_checked="1">
                <!--begin::Item-->
                <div class="overlay me-10" bis_skin_checked="1">  
                    <!--begin::Image-->                                      
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_1.jpg')}}" alt="image">  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="overlay me-10" bis_skin_checked="1">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_2.jpg')}}" alt="image">  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>        
                    <!--end::Link-->                                
                </div>
                <!--end::Item-->                        
                
                <!--begin::Item-->
                <div class="overlay" bis_skin_checked="1">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_3.jpg')}}" alt="image">  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->  
</div>
<!--end::Timeline item-->    
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                New case <a href="#" class="text-primary fw-bold me-1">#67890</a> 
                is assigned to you in Multi-platform Database Design project
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="overflow-auto pb-5" bis_skin_checked="1">
                <!--begin::Wrapper-->
                <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7" bis_skin_checked="1">Added at 4:23 PM by</div>
                    <!--end::Info-->

                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                    <!--end::User--> 
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->           
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                New order <a href="#" class="text-primary fw-bold me-1">#67890</a> 
                is placed for Workshow Planning &amp; Budget Estimation
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Placed at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content--> 
</div>
<!--end::Timeline item-->    

    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon me-4" bis_skin_checked="1">
        <i class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->       

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n2" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="overflow-auto pe-3" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">Invitation for crafting engaging designs that speak human workshop</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Sent at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Alan Nilson" data-bs-original-title="Alan Nilson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/Profile/profile_img_4.jpg')}}" alt="image">  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content--> 
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="mb-5 pe-3" bis_skin_checked="1">
            <!--begin::Title-->
            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Sent at 10:30 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Jan Hummer" data-bs-original-title="Jan Hummer" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_91.jpg')}}" alt="image">  
  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5" bis_skin_checked="1">
                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">  
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/pdf_img.svg')}}" alt="image">  
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">1.9mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--begin::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">   
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/doc1.svg')}}" alt="image">                      <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">18kb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center" bis_skin_checked="1">   
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/css1.svg')}}" alt="image">  
                    <!--end::Icon-->  

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">20mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Icon--> 
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

        <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                Task <a href="#" class="text-primary fw-bold me-1">#45890</a>  
                merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:fg
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Initiated at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_7.jpg')}}" alt="image">  
 

                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item--></div>
<!--end::Timeline-->            </div>
            <!--end::Tab panel-->

            <!--begin::Tab panel-->
            <div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab" bis_skin_checked="1">
                <!--begin::Timeline-->
<div class="timeline timeline-border-dashed" bis_skin_checked="1">
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="mb-5 pe-3" bis_skin_checked="1">
            <!--begin::Title-->
            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Sent at 10:30 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Jan Hummer" data-bs-original-title="Jan Hummer" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_91.jpg')}}" alt="image">      
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5" bis_skin_checked="1">
                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">  
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/pdf_img.svg')}}" alt="image">  
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">1.9mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--begin::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20" bis_skin_checked="1">   
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/doc1.svg')}}" alt="image">                      <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">18kb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center" bis_skin_checked="1">   
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="{{asset('assets/media/activity/css1.svg')}}" alt="image">  
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold" bis_skin_checked="1">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500" bis_skin_checked="1">20mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Icon--> 
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

        <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                Task <a href="#" class="text-primary fw-bold me-1">#45890</a>  
                merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Initiated at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/img_7.jpg')}}" alt="image">  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">3 new application design concepts added:12</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Created at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Marcus Dotson" data-bs-original-title="Marcus Dotson" data-kt-initialized="1" bis_skin_checked="1">
                <img src="{{asset('assets/media/activity/profile_img_8.jpg')}}" alt="image">  
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5" bis_skin_checked="1">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7" bis_skin_checked="1">
                <!--begin::Item-->
                <div class="overlay me-10" bis_skin_checked="1">  
                    <!--begin::Image-->                                      
                    <div class="overlay-wrapper" bis_skin_checked="1">
                        <img alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_1.jpg')}}" alt="image"">  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="overlay me-10" bis_skin_checked="1">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_2.jpg')}}" alt="image""> 
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>        
                    <!--end::Link-->                                
                </div>
                <!--end::Item-->                        
                
                <!--begin::Item-->
                <div class="overlay" bis_skin_checked="1">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper" bis_skin_checked="1">
                    <img alt="img" class="rounded w-150px" src="{{asset('assets/media/activity/explore_bg_3.jpg')}}" alt="image""> 
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->  
</div>
<!--end::Timeline item-->    
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                New case <a href="#" class="text-primary fw-bold me-1">#67890</a> 
                is assigned to you in Multi-platform Database Design project
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="overflow-auto pb-5" bis_skin_checked="1">
                <!--begin::Wrapper-->
                <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7" bis_skin_checked="1">Added at 4:23 PM by</div>
                    <!--end::Info-->

                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                    <!--end::User--> 
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->           
</div>
<!--end::Timeline item-->
    <!--begin::Timeline item-->
<div class="timeline-item" bis_skin_checked="1">
    <!--begin::Timeline line-->
    <div class="timeline-line" bis_skin_checked="1"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon" bis_skin_checked="1">
        <i class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mt-n1" bis_skin_checked="1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5" bis_skin_checked="1">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2" bis_skin_checked="1">
                New order <a href="#" class="text-primary fw-bold me-1">#67890</a> 
                is placed for Workshow Planning &amp; Budget Estimation
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6" bis_skin_checked="1">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7" bis_skin_checked="1">Placed at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content--> 
</div>
<!--end::Timeline item--> </div>
<!--end::Timeline-->            </div>
            <!--end::Tab panel-->
        </div>
        <!--end::Tab Content-->
    </div>
    <!--end::Card body-->
</div>
<!-- activity inner content end -->



    @push('scripts')
       
        <script>
            document.getElementById('mySearchInput').addEventListener('keyup', function () {
                window.LaravelDataTables['permissions-table'].search(this.value).draw();
            });
            document.addEventListener('livewire:load', function () {
                Livewire.on('success', function () {
                    $('#kt_modal_update_permission').modal('hide');
                    window.LaravelDataTables['permissions-table'].ajax.reload();
                });
            });
        </script>
    @endpush

</x-default-layout>
