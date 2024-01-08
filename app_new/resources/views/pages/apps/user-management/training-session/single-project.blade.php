<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection

    <div class="app-main flex-column flex-row-fluid " id="kt_app_main" bis_skin_checked="1">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid" bis_skin_checked="1">
                                            
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " bis_skin_checked="1">

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack " bis_skin_checked="1">
            
    

<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 " bis_skin_checked="1">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
        View Project
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
                                                    Projects                                            </li>
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
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d68012b" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d68012b" data-allow-clear="true" data-select2-id="select2-data-7-6dpx" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-nw5f" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-wcse-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-wcse-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Toolbar-->                                        
                    
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " bis_skin_checked="1">
    
           
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl " bis_skin_checked="1">
            
<!--begin::Navbar-->
<div class="card mb-6 mb-xl-9" bis_skin_checked="1">
    <div class="card-body pt-9 pb-0" bis_skin_checked="1">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-6" bis_skin_checked="1">
            <!--begin::Image-->
            <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4" bis_skin_checked="1">
            <img class="mw-50px mw-lg-75px" src="{{asset('assets/media/project/crm_dashborad_profile.svg')}}" alt="image">
            </div>
            <!--end::Image-->

            <!--begin::Wrapper-->
            <div class="flex-grow-1" bis_skin_checked="1">
                <!--begin::Head-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex flex-column" bis_skin_checked="1">
                        <!--begin::Status-->
                        <div class="d-flex align-items-center mb-1" bis_skin_checked="1">
                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">CRM Dashboard</a>
                            <span class="badge badge-light-success me-auto">In Progress</span>
                        </div>
                        <!--end::Status-->

                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-500" bis_skin_checked="1">
                            #1 Tool to get started with Web Apps any Kind &amp; size
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Actions-->
                    <div class="d-flex mb-4" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>

                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>

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
                <!--end::Head-->

                <!--begin::Info-->
                <div class="d-flex flex-wrap justify-content-start" bis_skin_checked="1">
                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap" bis_skin_checked="1">
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3" bis_skin_checked="1">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <div class="fs-4 fw-bold" bis_skin_checked="1">29 Jan, 2024</div>
                            </div>
                            <!--end::Number-->

                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-500" bis_skin_checked="1">Due Date</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->

                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3" bis_skin_checked="1">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>                                <div class="fs-4 fw-bold counted" data-kt-countup="true" data-kt-countup-value="75" data-kt-initialized="1" bis_skin_checked="1">75</div>
                            </div>
                            <!--end::Number-->

                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-500" bis_skin_checked="1">Open Tasks</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->

                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3" bis_skin_checked="1">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>                                <div class="fs-4 fw-bold counted" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$" data-kt-initialized="1" bis_skin_checked="1">$15,000</div>
                            </div>
                            <!--end::Number-->                                

                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-500" bis_skin_checked="1">Budget Spent</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                    </div>
                    <!--end::Stats-->

                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover mb-3" bis_skin_checked="1">
                                                    <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1" bis_skin_checked="1">
                                                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                            </div>
                            <!--end::User-->
                                                    <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1" bis_skin_checked="1">
                            <img src="{{asset('assets/media/projects/top_profile_2.jpg')}}" alt="image">                                                              </div>
                            <!--end::User-->
                                                    <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michelle Swanston" data-bs-original-title="Michelle Swanston" data-kt-initialized="1" bis_skin_checked="1">
                            <img src="{{asset('assets/media/projects/9_degree_2.jpg')}}" alt="image">                                                             
 
                                                            </div>
                            <!--end::User-->
                                                    <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Francis Mitcham" data-bs-original-title="Francis Mitcham" data-kt-initialized="1" bis_skin_checked="1">
                            <img src="{{asset('assets/media/projects/crm_profile.jpg')}}" alt="image">
                                                            </div>
                            <!--end::User-->
                                                    <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1" bis_skin_checked="1">
                                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                            </div>
                            <!--end::User-->
                                                    <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1" bis_skin_checked="1">
                            <img src="{{asset('assets/media/projects/img33.jpg')}}" alt="image">
                                                            </div>
                            <!--end::User-->
                                                    <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1" bis_skin_checked="1">
                                                                    <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                                                            </div>
                            <!--end::User-->
                                                    <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1" bis_skin_checked="1">
                            <img src="{{asset('assets/media/projects/profile_imf_45.jpg')}}" alt="image">
                                                            </div>
                            <!--end::User-->
                        
                        <!--begin::All users-->
                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="View more users" data-kt-initialized="1">+42</span>
                        </a>
                        <!--end::All users-->
                    </div>
                    <!--end::Users-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Details-->

        <div class="separator" bis_skin_checked="1"></div>

        <!--begin::Nav-->
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <!--begin::Nav item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6 active" href="/metronic8/demo1/../demo1/apps/projects/project.html">
                        Overview                    </a>
                </li>
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <!-- <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6 " href="/metronic8/demo1/../demo1/apps/projects/targets.html">
                        Targets                    </a>
                </li> -->
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <!-- <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6 " href="/metronic8/demo1/../demo1/apps/projects/budget.html">
                        Budget                    </a>
                </li> -->
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <!-- <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6 " href="/metronic8/demo1/../demo1/apps/projects/users.html">
                        Users                    </a>
                </li> -->
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <!-- <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6 " href="/metronic8/demo1/../demo1/apps/projects/files.html">
                        Files                    </a>
                </li> -->
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <!-- <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6 " href="/metronic8/demo1/../demo1/apps/projects/activity.html">
                        Activity                    </a>
                </li> -->
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <!-- <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6 " href="/metronic8/demo1/../demo1/apps/projects/settings.html">
                        Settings                    </a>
                </li> -->
                <!--end::Nav item-->
                    </ul>
        <!--end::Nav-->
    </div>
</div>
<!--end::Navbar-->
<!--begin::Row-->
<div class="row gx-6 gx-xl-9" bis_skin_checked="1">
    <!--begin::Col-->
    <div class="col-lg-6" bis_skin_checked="1">
        <!--begin::Summary-->
<div class="card card-flush h-lg-100" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header mt-6" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title flex-column" bis_skin_checked="1">
            <h3 class="fw-bold mb-1">Tasks Summary</h3>
            
            <div class="fs-6 fw-semibold text-gray-500" bis_skin_checked="1">24 Overdue Tasks</div>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <a href="#" class="btn btn-light btn-sm">View Tasks</a>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-9 pt-5" bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-wrap" bis_skin_checked="1">
            <!--begin::Chart-->
            <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7" bis_skin_checked="1">
                <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center" bis_skin_checked="1">
                    <span class="fs-2qx fw-bold">237</span>
                    <span class="fs-6 fw-semibold text-gray-500">Total Tasks</span>
                </div>

                <canvas id="project_overview_chart" width="175" height="175" style="display: block; box-sizing: border-box; height: 175px; width: 175px;"></canvas>
            </div>
            <!--end::Chart-->

            <!--begin::Labels-->
            <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="d-flex fs-6 fw-semibold align-items-center mb-3" bis_skin_checked="1">
                    <div class="bullet bg-primary me-3" bis_skin_checked="1"></div>
                    <div class="text-gray-500" bis_skin_checked="1">Active</div>
                    <div class="ms-auto fw-bold text-gray-700" bis_skin_checked="1">30</div>
                </div>
                <!--end::Label-->

                <!--begin::Label-->
                <div class="d-flex fs-6 fw-semibold align-items-center mb-3" bis_skin_checked="1">
                    <div class="bullet bg-success me-3" bis_skin_checked="1"></div>
                    <div class="text-gray-500" bis_skin_checked="1">Completed</div>
                    <div class="ms-auto fw-bold text-gray-700" bis_skin_checked="1">45</div>
                </div>
                <!--end::Label-->

                <!--begin::Label-->
                <div class="d-flex fs-6 fw-semibold align-items-center mb-3" bis_skin_checked="1">
                    <div class="bullet bg-danger me-3" bis_skin_checked="1"></div>
                    <div class="text-gray-500" bis_skin_checked="1">Overdue</div>
                    <div class="ms-auto fw-bold text-gray-700" bis_skin_checked="1">0</div>
                </div>
                <!--end::Label-->

                <!--begin::Label-->
                <div class="d-flex fs-6 fw-semibold align-items-center" bis_skin_checked="1">
                    <div class="bullet bg-gray-300 me-3" bis_skin_checked="1"></div>
                    <div class="text-gray-500" bis_skin_checked="1">Yet to start</div>
                    <div class="ms-auto fw-bold text-gray-700" bis_skin_checked="1">25</div>
                </div>
                <!--end::Label-->
            </div>
            <!--end::Labels-->
        </div>
        <!--end::Wrapper-->

        
<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6" bis_skin_checked="1">
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 " bis_skin_checked="1">
                    <!--begin::Content-->
            <div class=" fw-semibold" bis_skin_checked="1">
                
                                    <div class="fs-6 text-gray-700 " bis_skin_checked="1"><a href="#" class="fw-bold me-1">Invite New .NET Collaborators</a> to create great outstanding business to business .jsp modutr class scripts</div>
                            </div>
            <!--end::Content-->
        
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Summary-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-lg-6" bis_skin_checked="1">
        <!--begin::Graph-->
<div class="card card-flush h-lg-100" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header mt-6" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title flex-column" bis_skin_checked="1">
            <h3 class="fw-bold mb-1">Tasks Over Time</h3>

            <!--begin::Labels-->
            <div class="fs-6 d-flex text-gray-500 fs-6 fw-semibold" bis_skin_checked="1">
                <!--begin::Label-->   
                <div class="d-flex align-items-center me-6" bis_skin_checked="1">
                    <span class="menu-bullet d-flex align-items-center me-2">
                        <span class="bullet bg-success"></span>
                    </span>                    
                    Complete
                </div>
                <!--end::Label-->

                <!--begin::Label-->   
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <span class="menu-bullet d-flex align-items-center me-2">
                        <span class="bullet bg-primary"></span>
                    </span>
                    Incomplete
                </div>            
                <!--end::Label-->    
            </div>
            <!--end::Labels-->
        </div>
        <!--end::Card title-->
        
        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Select-->
            <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px select2-hidden-accessible" data-select2-id="select2-data-9-zacg" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option value="1">2020 Q1</option>
                <option value="2">2020 Q2</option>
                <option value="3" selected="" data-select2-id="select2-data-11-gh0z">2020 Q3</option>
                <option value="4">2020 Q4</option>
            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-6g5o" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bold w-100px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-zf-container" aria-controls="select2-status-zf-container"><span class="select2-selection__rendered" id="select2-status-zf-container" role="textbox" aria-readonly="true" title="2020 Q3">2020 Q3</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <!--end::Select-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-10 pb-0 px-5" bis_skin_checked="1">
        <!--begin::Chart-->
        <div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px; min-height: 315px;" bis_skin_checked="1"><div id="apexcharts3msjm9fw" class="apexcharts-canvas apexcharts3msjm9fw apexcharts-theme-light" bis_skin_checked="1" style="width: 581px; height: 300px;"><svg id="SvgjsSvg1092" width="581" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="581" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" bis_skin_checked="1" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1122" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1149" class="apexcharts-yaxis" rel="0" transform="translate(12.397705078125, 0)"><g id="SvgjsG1150" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1152" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1153">84</tspan><title>84</title></text><text id="SvgjsText1155" font-family="Helvetica, Arial, sans-serif" x="20" y="77.646" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1156">77</tspan><title>77</title></text><text id="SvgjsText1158" font-family="Helvetica, Arial, sans-serif" x="20" y="123.792" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1159">70</tspan><title>70</title></text><text id="SvgjsText1161" font-family="Helvetica, Arial, sans-serif" x="20" y="169.938" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1162">63</tspan><title>63</title></text><text id="SvgjsText1164" font-family="Helvetica, Arial, sans-serif" x="20" y="216.084" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1165">56</tspan><title>56</title></text><text id="SvgjsText1167" font-family="Helvetica, Arial, sans-serif" x="20" y="262.23" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1168">49</tspan><title>49</title></text></g></g><g id="SvgjsG1094" class="apexcharts-inner apexcharts-graphical" transform="translate(42.397705078125, 30)"><defs id="SvgjsDefs1093"><clipPath id="gridRectMask3msjm9fw"><rect id="SvgjsRect1097" width="523.399169921875" height="246.73000000000002" x="-5" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask3msjm9fw"></clipPath><clipPath id="nonForecastMask3msjm9fw"></clipPath><clipPath id="gridRectMarkerMask3msjm9fw"><rect id="SvgjsRect1098" width="520.399169921875" height="234.73000000000002" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-grid"><g id="SvgjsG1111" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1115" x1="0" y1="46.146" x2="516.399169921875" y2="46.146" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1116" x1="0" y1="92.292" x2="516.399169921875" y2="92.292" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1117" x1="0" y1="138.438" x2="516.399169921875" y2="138.438" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1118" x1="0" y1="184.584" x2="516.399169921875" y2="184.584" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1112" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1121" x1="0" y1="230.73000000000002" x2="516.399169921875" y2="230.73000000000002" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1120" x1="0" y1="1" x2="0" y2="230.73000000000002" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1113" class="apexcharts-grid-borders"><line id="SvgjsLine1114" x1="0" y1="0" x2="516.399169921875" y2="0" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1119" x1="0" y1="230.73000000000002" x2="516.399169921875" y2="230.73000000000002" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1099" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1100" class="apexcharts-series" zIndex="0" seriesName="Incomplete" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1103" d="M 0 230.73000000000002 L 0 92.29199999999997C14.34442138671875, 92.29199999999997, 57.377685546875, 92.29199999999997, 86.0665283203125, 92.29199999999997S143.4442138671875, 26.369142857142833, 172.133056640625, 26.369142857142833S229.5107421875, 26.369142857142833, 258.1995849609375, 26.369142857142833S315.5772705078125, 59.33057142857143, 344.26611328125, 59.33057142857143S401.643798828125, 59.33057142857143, 430.3326416015625, 59.33057142857143S502.05474853515625, 59.33057142857143, 516.399169921875, 59.33057142857143 L 516.399169921875 230.73000000000002 L 0 230.73000000000002M 0 92.29199999999997z" fill="rgba(233,243,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3msjm9fw)" pathTo="M 0 230.73000000000002 L 0 92.29199999999997C14.34442138671875, 92.29199999999997, 57.377685546875, 92.29199999999997, 86.0665283203125, 92.29199999999997S143.4442138671875, 26.369142857142833, 172.133056640625, 26.369142857142833S229.5107421875, 26.369142857142833, 258.1995849609375, 26.369142857142833S315.5772705078125, 59.33057142857143, 344.26611328125, 59.33057142857143S401.643798828125, 59.33057142857143, 430.3326416015625, 59.33057142857143S502.05474853515625, 59.33057142857143, 516.399169921875, 59.33057142857143 L 516.399169921875 230.73000000000002 L 0 230.73000000000002M 0 92.29199999999997z" pathFrom="M -1 553.7520000000001 L -1 553.7520000000001 L 86.0665283203125 553.7520000000001 L 172.133056640625 553.7520000000001 L 258.1995849609375 553.7520000000001 L 344.26611328125 553.7520000000001 L 430.3326416015625 553.7520000000001 L 516.399169921875 553.7520000000001"></path><path id="SvgjsPath1104" d="M 0 92.29199999999997C14.34442138671875, 92.29199999999997, 57.377685546875, 92.29199999999997, 86.0665283203125, 92.29199999999997S143.4442138671875, 26.369142857142833, 172.133056640625, 26.369142857142833S229.5107421875, 26.369142857142833, 258.1995849609375, 26.369142857142833S315.5772705078125, 59.33057142857143, 344.26611328125, 59.33057142857143S401.643798828125, 59.33057142857143, 430.3326416015625, 59.33057142857143S502.05474853515625, 59.33057142857143, 516.399169921875, 59.33057142857143" fill="none" fill-opacity="1" stroke="#1b84ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3msjm9fw)" pathTo="M 0 92.29199999999997C14.34442138671875, 92.29199999999997, 57.377685546875, 92.29199999999997, 86.0665283203125, 92.29199999999997S143.4442138671875, 26.369142857142833, 172.133056640625, 26.369142857142833S229.5107421875, 26.369142857142833, 258.1995849609375, 26.369142857142833S315.5772705078125, 59.33057142857143, 344.26611328125, 59.33057142857143S401.643798828125, 59.33057142857143, 430.3326416015625, 59.33057142857143S502.05474853515625, 59.33057142857143, 516.399169921875, 59.33057142857143" pathFrom="M -1 553.7520000000001 L -1 553.7520000000001 L 86.0665283203125 553.7520000000001 L 172.133056640625 553.7520000000001 L 258.1995849609375 553.7520000000001 L 344.26611328125 553.7520000000001 L 430.3326416015625 553.7520000000001 L 516.399169921875 553.7520000000001" fill-rule="evenodd"></path><g id="SvgjsG1101" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1172" r="0" cx="0" cy="0" class="apexcharts-marker wbqahdfim no-pointer-events" stroke="#1b84ff" fill="#e9f3ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1105" class="apexcharts-series" zIndex="1" seriesName="Complete" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1108" d="M 0 230.73000000000002 L 0 191.1762857142857C14.34442138671875, 191.1762857142857, 57.377685546875, 191.1762857142857, 86.0665283203125, 191.1762857142857S143.4442138671875, 158.21485714285717, 172.133056640625, 158.21485714285717S229.5107421875, 158.21485714285717, 258.1995849609375, 158.21485714285717S315.5772705078125, 191.1762857142857, 344.26611328125, 191.1762857142857S401.643798828125, 191.1762857142857, 430.3326416015625, 191.1762857142857S503.8895445415596, 163.00574544143026, 516.399169921875, 158.21485714285717 L 516.399169921875 230.73000000000002 L 0 230.73000000000002M 0 191.1762857142857z" fill="rgba(223,255,234,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask3msjm9fw)" pathTo="M 0 230.73000000000002 L 0 191.1762857142857C14.34442138671875, 191.1762857142857, 57.377685546875, 191.1762857142857, 86.0665283203125, 191.1762857142857S143.4442138671875, 158.21485714285717, 172.133056640625, 158.21485714285717S229.5107421875, 158.21485714285717, 258.1995849609375, 158.21485714285717S315.5772705078125, 191.1762857142857, 344.26611328125, 191.1762857142857S401.643798828125, 191.1762857142857, 430.3326416015625, 191.1762857142857S503.8895445415596, 163.00574544143026, 516.399169921875, 158.21485714285717 L 516.399169921875 230.73000000000002 L 0 230.73000000000002M 0 191.1762857142857z" pathFrom="M -1 553.7520000000001 L -1 553.7520000000001 L 86.0665283203125 553.7520000000001 L 172.133056640625 553.7520000000001 L 258.1995849609375 553.7520000000001 L 344.26611328125 553.7520000000001 L 430.3326416015625 553.7520000000001 L 516.399169921875 553.7520000000001"></path><path id="SvgjsPath1109" d="M 0 191.1762857142857C14.34442138671875, 191.1762857142857, 57.377685546875, 191.1762857142857, 86.0665283203125, 191.1762857142857S143.4442138671875, 158.21485714285717, 172.133056640625, 158.21485714285717S229.5107421875, 158.21485714285717, 258.1995849609375, 158.21485714285717S315.5772705078125, 191.1762857142857, 344.26611328125, 191.1762857142857S401.643798828125, 191.1762857142857, 430.3326416015625, 191.1762857142857S503.8895445415596, 163.00574544143026, 516.399169921875, 158.21485714285717" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask3msjm9fw)" pathTo="M 0 191.1762857142857C14.34442138671875, 191.1762857142857, 57.377685546875, 191.1762857142857, 86.0665283203125, 191.1762857142857S143.4442138671875, 158.21485714285717, 172.133056640625, 158.21485714285717S229.5107421875, 158.21485714285717, 258.1995849609375, 158.21485714285717S315.5772705078125, 191.1762857142857, 344.26611328125, 191.1762857142857S401.643798828125, 191.1762857142857, 430.3326416015625, 191.1762857142857S503.8895445415596, 163.00574544143026, 516.399169921875, 158.21485714285717" pathFrom="M -1 553.7520000000001 L -1 553.7520000000001 L 86.0665283203125 553.7520000000001 L 172.133056640625 553.7520000000001 L 258.1995849609375 553.7520000000001 L 344.26611328125 553.7520000000001 L 430.3326416015625 553.7520000000001 L 516.399169921875 553.7520000000001" fill-rule="evenodd"></path><g id="SvgjsG1106" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1173" r="0" cx="0" cy="0" class="apexcharts-marker wr3lrgptug no-pointer-events" stroke="#17c653" fill="#dfffea" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1102" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1107" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1123" x1="0" y1="0" x2="0" y2="230.73000000000002" stroke="#1b84ff" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="230.73000000000002" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1124" x1="0" y1="0" x2="516.399169921875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1125" x1="0" y1="0" x2="516.399169921875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1126" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1127" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1129" font-family="Helvetica, Arial, sans-serif" x="0" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1130">Feb</tspan><title>Feb</title></text><text id="SvgjsText1132" font-family="Helvetica, Arial, sans-serif" x="86.0665283203125" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1133">Mar</tspan><title>Mar</title></text><text id="SvgjsText1135" font-family="Helvetica, Arial, sans-serif" x="172.133056640625" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1136">Apr</tspan><title>Apr</title></text><text id="SvgjsText1138" font-family="Helvetica, Arial, sans-serif" x="258.1995849609375" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1139">May</tspan><title>May</title></text><text id="SvgjsText1141" font-family="Helvetica, Arial, sans-serif" x="344.26611328125" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1142">Jun</tspan><title>Jun</title></text><text id="SvgjsText1144" font-family="Helvetica, Arial, sans-serif" x="430.3326416015625" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1145">Jul</tspan><title>Jul</title></text><text id="SvgjsText1147" font-family="Helvetica, Arial, sans-serif" x="516.399169921875" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1148">Aug</tspan><title>Aug</title></text></g></g><g id="SvgjsG1169" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1170" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1171" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1174" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1175" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-tooltip-title" bis_skin_checked="1" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" bis_skin_checked="1" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(233, 243, 255);"></span><div class="apexcharts-tooltip-text" bis_skin_checked="1" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" bis_skin_checked="1" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(223, 255, 234);"></span><div class="apexcharts-tooltip-text" bis_skin_checked="1" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-xaxistooltip-text" bis_skin_checked="1" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div></div></div></div>
        <!--end::Chart-->
    </div>
     <!--end::Card body-->
</div>
<!--end::Graph-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-lg-6" bis_skin_checked="1">
        <!--begin::Card-->
<div class="card card-flush h-lg-100" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header mt-6" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title flex-column" bis_skin_checked="1">
            <h3 class="fw-bold mb-1">What's on the road?</h3>

            <div class="fs-6 text-gray-500" bis_skin_checked="1">Total 482 participants</div>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Select-->
            <select name="status" class="form-select">
    <option value="1" selected>Options</option>
    <option value="2">Option 1</option>
    <option value="3">Option 2</option>
    <option value="4">Option 3</option>
</select>
            <!--end::Select-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-9 pt-4" bis_skin_checked="1">
        <!--begin::Dates-->
        <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2" role="tablist">
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_0" aria-selected="false" tabindex="-1" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">Su</span>
                        <span class="fs-6 fw-bold">22</span>
                    </a>
                </li>
                <!--end::Date-->
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1" aria-selected="true" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                        <span class="fs-6 fw-bold">23</span>
                    </a>
                </li>
                <!--end::Date-->
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_2" aria-selected="false" tabindex="-1" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                        <span class="fs-6 fw-bold">24</span>
                    </a>
                </li>
                <!--end::Date-->
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_3" aria-selected="false" tabindex="-1" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">We</span>
                        <span class="fs-6 fw-bold">25</span>
                    </a>
                </li>
                <!--end::Date-->
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_4" aria-selected="false" tabindex="-1" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">Th</span>
                        <span class="fs-6 fw-bold">26</span>
                    </a>
                </li>
                <!--end::Date-->
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_5" aria-selected="false" tabindex="-1" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                        <span class="fs-6 fw-bold">27</span>
                    </a>
                </li>
                <!--end::Date-->
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_6" aria-selected="false" tabindex="-1" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                        <span class="fs-6 fw-bold">28</span>
                    </a>
                </li>
                <!--end::Date-->
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_7" aria-selected="false" tabindex="-1" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">Su</span>
                        <span class="fs-6 fw-bold">29</span>
                    </a>
                </li>
                <!--end::Date-->
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_8" aria-selected="false" tabindex="-1" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                        <span class="fs-6 fw-bold">30</span>
                    </a>
                </li>
                <!--end::Date-->
                            
                <!--begin::Date-->
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary " data-bs-toggle="tab" href="#kt_schedule_day_9" aria-selected="false" tabindex="-1" role="tab">
                        
                        <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                        <span class="fs-6 fw-bold">31</span>
                    </a>
                </li>
                <!--end::Date-->
                    </ul>
        <!--end::Dates-->

        <!--begin::Tab Content-->
        <div class="tab-content" bis_skin_checked="1">
                            <!--begin::Day-->
                <div id="kt_schedule_day_0" class="tab-pane fade show " bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    16:30 - 17:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Creative Content Initiative                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Caleb Donaldson</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    10:00 - 11:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Committee Review Approvals                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Sean Bean</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    11:00 - 11:45 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Weekly Team Stand-Up                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                            <!--begin::Day-->
                <div id="kt_schedule_day_1" class="tab-pane fade show active" bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    13:00 - 14:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Sales Pitch Proposal                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    10:00 - 11:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Sales Pitch Proposal                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Sean Bean</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    11:00 - 11:45 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Committee Review Approvals                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Michael Walters</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                            <!--begin::Day-->
                <div id="kt_schedule_day_2" class="tab-pane fade show " bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    14:30 - 15:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Development Team Capacity Review                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Peter Marcus</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    14:30 - 15:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Project Review &amp; Testing                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    16:30 - 17:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Sales Pitch Proposal                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Peter Marcus</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                            <!--begin::Day-->
                <div id="kt_schedule_day_3" class="tab-pane fade show " bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    16:30 - 17:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Project Review &amp; Testing                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Peter Marcus</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    11:00 - 11:45 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Weekly Team Stand-Up                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Mark Randall</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    16:30 - 17:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    9 Degree Project Estimation Meeting                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Mark Randall</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                            <!--begin::Day-->
                <div id="kt_schedule_day_4" class="tab-pane fade show " bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    13:00 - 14:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    9 Degree Project Estimation Meeting                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Michael Walters</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    10:00 - 11:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Committee Review Approvals                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Mark Randall</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    10:00 - 11:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Team Backlog Grooming Session                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">David Stevenson</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                            <!--begin::Day-->
                <div id="kt_schedule_day_5" class="tab-pane fade show " bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    16:30 - 17:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Marketing Campaign Discussion                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Peter Marcus</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    14:30 - 15:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Creative Content Initiative                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Caleb Donaldson</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    9:00 - 10:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Sales Pitch Proposal                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Mark Randall</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                            <!--begin::Day-->
                <div id="kt_schedule_day_6" class="tab-pane fade show " bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    11:00 - 11:45 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    9 Degree Project Estimation Meeting                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Michael Walters</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    10:00 - 11:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Sales Pitch Proposal                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Karina Clarke</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    12:00 - 13:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Sales Pitch Proposal                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Walter White</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                            <!--begin::Day-->
                <div id="kt_schedule_day_7" class="tab-pane fade show " bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    13:00 - 14:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Weekly Team Stand-Up                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Sean Bean</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    9:00 - 10:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    9 Degree Project Estimation Meeting                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Yannis Gloverson</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    14:30 - 15:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    9 Degree Project Estimation Meeting                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Mark Randall</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                            <!--begin::Day-->
                <div id="kt_schedule_day_8" class="tab-pane fade show " bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    10:00 - 11:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    9 Degree Project Estimation Meeting                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Karina Clarke</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    14:30 - 15:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Lunch &amp; Learn Catch Up                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Peter Marcus</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    10:00 - 11:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Sales Pitch Proposal                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                            <!--begin::Day-->
                <div id="kt_schedule_day_9" class="tab-pane fade show " bis_skin_checked="1" role="tabpanel">
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    16:30 - 17:30 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Dashboard UI/UX Design Review                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    10:00 - 11:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        am                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Lunch &amp; Learn Catch Up                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Karina Clarke</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                                                    <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative mt-8" bis_skin_checked="1">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0" bis_skin_checked="1"></div>
                            <!--end::Bar-->

                            <!--begin::Info-->
                            <div class="fw-semibold ms-5 text-gray-600" bis_skin_checked="1">
                                <!--begin::Time-->
                                <div class="fs-5" bis_skin_checked="1">
                                    12:00 - 13:00 

                                    <span class="fs-7 text-gray-500 text-uppercase">
                                        pm                                    </span>
                                </div>
                                <!--end::Time-->

                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">
                                    Development Team Capacity Review                                </a>
                                <!--end::Title-->

                                <!--begin::User-->
                                <div class="text-gray-500" bis_skin_checked="1">
                                    Lead by <a href="#">Bob Harris</a>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Info-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Time-->
                                    </div>
                <!--end::Day-->
                    </div>
        <!--end::Tab Content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->    </div>
    <!--end::Col-->
    
    <!--begin::Col-->
    <div class="col-lg-6" bis_skin_checked="1">
        
<!--begin::Card-->
<div class="card card-flush h-lg-100" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header mt-6" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title flex-column" bis_skin_checked="1">
            <h3 class="fw-bold mb-1">Latest Files</h3>

            <div class="fs-6 text-gray-500" bis_skin_checked="1">Total 382 fiels, 2,6GB space usage</div>
        </div>  
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-9 pt-3" bis_skin_checked="1">
        <!--begin::Files-->
        <div class="d-flex flex-column mb-9" bis_skin_checked="1">
                        <!--begin::File-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
                <!--begin::Icon-->
                <div class="symbol symbol-30px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/projects/pdf_img.svg')}}" alt="image">
                </div>
                <!--end::Icon-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Project tech requirements</a>

                    <div class="text-gray-500" bis_skin_checked="1">
                        2 days ago                        <a href="#">Karina Clark</a>
                    </div>
                </div>
                <!--end::Details-->

                <!--begin::Menu-->
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

                    <i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>
                
                

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d6803d8" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d6803d8" data-allow-clear="true" data-select2-id="select2-data-15-90ak" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-16-9cjq" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-kizr-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-kizr-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->                <!--end::Menu-->
            </div>
            <!--end::File-->
                        <!--begin::File-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
                <!--begin::Icon-->
                <div class="symbol symbol-30px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/projects/doc1.svg')}}" alt="image">
                </div>
                <!--end::Icon-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Create FureStibe branding proposal</a>

                    <div class="text-gray-500" bis_skin_checked="1">
                        Due in 1 day                        <a href="#">Marcus Blake</a>
                    </div>
                </div>
                <!--end::Details-->

                <!--begin::Menu-->
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

                    <i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>
                
                

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d6803e8" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d6803e8" data-allow-clear="true" data-select2-id="select2-data-17-sx5n" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-18-wz2z" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-hqwq-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-hqwq-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->                <!--end::Menu-->
            </div>
            <!--end::File-->
                        <!--begin::File-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
                <!--begin::Icon-->
                <div class="symbol symbol-30px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/projects/css1.svg')}}" alt="image">
                </div>
                <!--end::Icon-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Completed Project Stylings</a>

                    <div class="text-gray-500" bis_skin_checked="1">
                        Due in 1 day                        <a href="#">Terry Barry</a>
                    </div>
                </div>
                <!--end::Details-->

                <!--begin::Menu-->
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

                    <i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>
                
                

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d6803f6" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d6803f6" data-allow-clear="true" data-select2-id="select2-data-19-sta7" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-20-6oo2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-iyxo-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-iyxo-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->                <!--end::Menu-->
            </div>
            <!--end::File-->
                        <!--begin::File-->
            <div class="d-flex align-items-center " bis_skin_checked="1">
                <!--begin::Icon-->
                <div class="symbol symbol-30px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/projects/ai1.svg')}}" alt="image">
                </div>
                <!--end::Icon-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Create Project Wireframes</a>

                    <div class="text-gray-500" bis_skin_checked="1">
                        Due in 3 days                        <a href="#">Roth Bloom</a>
                    </div>
                </div>
                <!--end::Details-->

                <!--begin::Menu-->
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

                    <i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>
                
                

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d680404" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d680404" data-allow-clear="true" data-select2-id="select2-data-21-jk02" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-22-toio" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-osme-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-osme-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->                <!--end::Menu-->
            </div>
            <!--end::File-->
                        
        </div>
        <!--end::Files-->

        
<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6" bis_skin_checked="1">
            <!--begin::Icon-->
        <i class="ki-duotone ki-svg/files/upload.svg fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 " bis_skin_checked="1">
                    <!--begin::Content-->
            <div class=" fw-semibold" bis_skin_checked="1">
                                    <h4 class="text-gray-900 fw-bold">Quick file uploader</h4>
                
                                    <div class="fs-6 text-gray-700 " bis_skin_checked="1">Drag &amp; Drop or choose files from computer</div>
                            </div>
            <!--end::Content-->
        
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->
    </div>
    <!--end::Card body -->
</div>
<!--end::Card-->    </div>
    <!--end::Col-->
    
    <!--begin::Col-->
    <div class="col-lg-6" bis_skin_checked="1">
        <!--begin::Card-->
<div class="card  card-flush h-lg-100" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header mt-6" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title flex-column" bis_skin_checked="1">
            <h3 class="fw-bold mb-1">New Contibutors</h3>

            <div class="fs-6 text-gray-500" bis_skin_checked="1">From total 482 Participants</div>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card toolbar-->

    <!--begin::Card body-->
    <div class="card-body d-flex flex-column p-9 pt-3 mb-9" bis_skin_checked="1">
                    
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="me-5 position-relative" bis_skin_checked="1">
                    <!--begin::Image-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/fit_profile_1.jpg')}}" alt="image">  
                                            </div>
                    <!--end::Image-->

                                    </div>
                <!--end::Avatar-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith</a>

                    <div class="text-gray-500" bis_skin_checked="1">
                        8 Pending &amp; 97 Completed Tasks                    </div>
                </div>
                <!--end::Details-->

                <!--begin::Badge-->
                <div class="badge badge-light ms-auto" bis_skin_checked="1">5</div>
                <!--end::Badge-->
            </div>
            <!--end::Item-->
                    
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="me-5 position-relative" bis_skin_checked="1">
                    <!--begin::Image-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                            </span>
                                            </div>
                    <!--end::Image-->

                                            <!--begin::Online-->
                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1" bis_skin_checked="1"></div>
                        <!--end::Online-->
                                    </div>
                <!--end::Avatar-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy</a>

                    <div class="text-gray-500" bis_skin_checked="1">
                        5 Pending &amp; 84 Completed                    </div>
                </div>
                <!--end::Details-->

                <!--begin::Badge-->
                <div class="badge badge-light ms-auto" bis_skin_checked="1">8</div>
                <!--end::Badge-->
            </div>
            <!--end::Item-->
                    
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="me-5 position-relative" bis_skin_checked="1">
                    <!--begin::Image-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/fit_profile_2.jpg')}}" alt="image">   
                                            </div>
                    <!--end::Image-->

                                    </div>
                <!--end::Avatar-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith</a>

                    <div class="text-gray-500" bis_skin_checked="1">
                        9 Pending &amp; 103 Completed                    </div>
                </div>
                <!--end::Details-->

                <!--begin::Badge-->
                <div class="badge badge-light ms-auto" bis_skin_checked="1">9</div>
                <!--end::Badge-->
            </div>
            <!--end::Item-->
                    
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="me-5 position-relative" bis_skin_checked="1">
                    <!--begin::Image-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/leaf_profile_1.jpg')}}" alt="image">  
                                            </div>
                    <!--end::Image-->

                                    </div>
                <!--end::Avatar-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean</a>

                    <div class="text-gray-500" bis_skin_checked="1">
                        3 Pending &amp; 55 Completed                    </div>
                </div>
                <!--end::Details-->

                <!--begin::Badge-->
                <div class="badge badge-light ms-auto" bis_skin_checked="1">3</div>
                <!--end::Badge-->
            </div>
            <!--end::Item-->
                    
            <!--begin::Item-->
            <div class="d-flex align-items-center " bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="me-5 position-relative" bis_skin_checked="1">
                    <!--begin::Image-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/pro_55.jpg')}}" alt="image">  
                                            </div>
                    <!--end::Image-->

                                    </div>
                <!--end::Avatar-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox</a>

                    <div class="text-gray-500" bis_skin_checked="1">
                        4 Pending &amp; 115 Completed                    </div>
                </div>
                <!--end::Details-->

                <!--begin::Badge-->
                <div class="badge badge-light ms-auto" bis_skin_checked="1">4</div>
                <!--end::Badge-->
            </div>
            <!--end::Item-->
            </div>
    <!--end::Card body-->
</div>
<!--end::Card-->    </div>
    <!--end::Col-->
    
    <!--begin::Col-->
    <div class="col-lg-6" bis_skin_checked="1">
        
<!--begin::Tasks-->
<div class="card card-flush h-lg-100" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header mt-6" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title flex-column" bis_skin_checked="1">
            <h3 class="fw-bold mb-1">My Tasks</h3>

            <div class="fs-6 text-gray-500" bis_skin_checked="1">Total 25 tasks in backlog</div>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body d-flex flex-column mb-9 p-9 pt-3" bis_skin_checked="1">
                    <!--begin::Item-->
            <div class="d-flex align-items-center position-relative mb-7" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px" bis_skin_checked="1"></div>
                <!--end::Label-->

                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid ms-6 me-4" bis_skin_checked="1">
                    <input class="form-check-input" type="checkbox" value="">
                </div>
                <!--end::Checkbox-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Create FureStibe branding logo</a>

                    <!--begin::Info-->
                    <div class="text-gray-500" bis_skin_checked="1">
                        Due in 1 day                        <a href="#">Karina Clark</a>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!--begin::Menu-->
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    
                    <i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>
                
                

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d6804a6" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d6804a6" data-allow-clear="true" data-select2-id="select2-data-23-ghem" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-24-0vlf" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-eucl-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-eucl-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->                <!--end::Menu-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center position-relative mb-7" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px" bis_skin_checked="1"></div>
                <!--end::Label-->

                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid ms-6 me-4" bis_skin_checked="1">
                    <input class="form-check-input" type="checkbox" value="">
                </div>
                <!--end::Checkbox-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>

                    <!--begin::Info-->
                    <div class="text-gray-500" bis_skin_checked="1">
                        Due in 3 days                        <a href="#">Rober Doe</a>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!--begin::Menu-->
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    
                    <i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>
                
                

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d6804b4" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d6804b4" data-allow-clear="true" data-select2-id="select2-data-25-k23h" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-26-ulj4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-f8fd-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-f8fd-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->                <!--end::Menu-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center position-relative mb-7" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px" bis_skin_checked="1"></div>
                <!--end::Label-->

                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid ms-6 me-4" bis_skin_checked="1">
                    <input class="form-check-input" type="checkbox" value="">
                </div>
                <!--end::Checkbox-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">9 Degree Porject Estimation</a>

                    <!--begin::Info-->
                    <div class="text-gray-500" bis_skin_checked="1">
                        Due in 1 week                        <a href="#">Neil Owen</a>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!--begin::Menu-->
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    
                    <i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>
                
                

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d6804c2" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d6804c2" data-allow-clear="true" data-select2-id="select2-data-27-c4wa" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-28-8zgj" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-p2og-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-p2og-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->                <!--end::Menu-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center position-relative mb-7" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px" bis_skin_checked="1"></div>
                <!--end::Label-->

                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid ms-6 me-4" bis_skin_checked="1">
                    <input class="form-check-input" type="checkbox" value="">
                </div>
                <!--end::Checkbox-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Dashgboard UI &amp; UX for Leafr CRM</a>

                    <!--begin::Info-->
                    <div class="text-gray-500" bis_skin_checked="1">
                        Due in 1 week                        <a href="#">Olivia Wild</a>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!--begin::Menu-->
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    
                    <i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>
                
                

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d6804ce" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d6804ce" data-allow-clear="true" data-select2-id="select2-data-29-4u3z" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-30-ohxm" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-hmd2-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-hmd2-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->                <!--end::Menu-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center position-relative " bis_skin_checked="1">
                <!--begin::Label-->
                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px" bis_skin_checked="1"></div>
                <!--end::Label-->

                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid ms-6 me-4" bis_skin_checked="1">
                    <input class="form-check-input" type="checkbox" value="">
                </div>
                <!--end::Checkbox-->

                <!--begin::Details-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>

                    <!--begin::Info-->
                    <div class="text-gray-500" bis_skin_checked="1">
                        Due in 2 weeks                        <a href="#">Sean Bean</a>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!--begin::Menu-->
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    
                    <i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>
                
                

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d6804dc" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6597c8d6804dc" data-allow-clear="true" data-select2-id="select2-data-31-51b7" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-32-ngir" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-8aqd-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-8aqd-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->                <!--end::Menu-->
            </div>
            <!--end::Item-->
            </div>
    <!--end::Card body-->
</div>
<!--end::Tasks-->    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Table-->
<div class="card card-flush mt-6 mt-xl-9" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header mt-5" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title flex-column" bis_skin_checked="1">
            <h3 class="fw-bold mb-1">Project Spendings</h3>

            <div class="fs-6 text-gray-500" bis_skin_checked="1">Total $260,300 sepnt so far</div>
        </div>
        <!--begin::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar my-1" bis_skin_checked="1">
            <!--begin::Select-->
            <div class="me-6 my-1" bis_skin_checked="1">
                <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm select2-hidden-accessible" data-select2-id="select2-data-kt_filter_year" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option value="All" selected="" data-select2-id="select2-data-34-mv8q">All time</option>
                    <option value="thisyear">This year</option>
                    <option value="thismonth">This month</option>
                    <option value="lastmonth">Last month</option>
                    <option value="last90days">Last 90 days</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-33-cxxf" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single w-125px form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_filter_year-container" aria-controls="select2-kt_filter_year-container"><span class="select2-selection__rendered" id="select2-kt_filter_year-container" role="textbox" aria-readonly="true" title="All time">All time</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <!--end::Select-->

            <!--begin::Select-->
            <div class="me-4 my-1" bis_skin_checked="1">
                <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm select2-hidden-accessible" data-select2-id="select2-data-kt_filter_orders" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option value="All" selected="" data-select2-id="select2-data-36-bwfu">All Orders</option>
                    <option value="Approved">Approved</option>
                    <option value="Declined">Declined</option>
                    <option value="In Progress">In Progress</option>
                    <option value="In Transit">In Transit</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-35-1m3m" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single w-125px form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_filter_orders-container" aria-controls="select2-kt_filter_orders-container"><span class="select2-selection__rendered" id="select2-kt_filter_orders-container" role="textbox" aria-readonly="true" title="All Orders">All Orders</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <!--end::Select-->

            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1" bis_skin_checked="1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3"><span class="path1"></span><span class="path2"></span></i>                <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order">
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0" bis_skin_checked="1">
        <!--begin::Table container-->
        <div class="table-responsive" bis_skin_checked="1">
            <!--begin::Table-->
            <div id="kt_profile_overview_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable no-footer">
                <thead class="fs-7 text-gray-500 text-uppercase">
                    <tr><th class="min-w-250px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Manager: activate to sort column ascending" style="width: 439.75px;">Manager</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 271.25px;">Date</th><th class="min-w-90px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 165.703px;">Amount</th><th class="min-w-90px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 175.828px;">Status</th><th class="min-w-50px text-end sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 107.969px;">Details</th></tr>
                </thead>
                <tbody class="fs-6">
                             
                                                
                                    <tr class="odd">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img src="{{asset('assets/media/projects/fit_profile_1.jpg')}}" alt="image">
                                                                                    </div>
                                        <!--end::Avatar-->

                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-02-21T00:00:00+05:30">Feb 21, 2024</td>
                            <td>$423.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr><tr class="even">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M                                                </span>
                                                                                    </div>
                                        <!--end::Avatar-->

                                                                                   <!--begin::Online-->
                                           <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1" bis_skin_checked="1"></div>
                                           <!--end::Online-->
                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">melody@altbox.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-09-22T00:00:00+05:30">Sep 22, 2024</td>
                            <td>$655.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr><tr class="odd">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img src="{{asset('assets/media/projects/fit_profile_2.jpg')}}" alt="image">
                                                                                    </div>
                                        <!--end::Avatar-->

                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">max@kt.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-08-19T00:00:00+05:30">Aug 19, 2024</td>
                            <td>$592.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr><tr class="even">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img src="{{asset('assets/media/projects/leaf_profile_1.jpg')}}" alt="image"> 
                                                                                    </div>
                                        <!--end::Avatar-->

                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">sean@dellito.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-03-10T00:00:00+05:30">Mar 10, 2024</td>
                            <td>$899.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr><tr class="odd">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img src="{{asset('assets/media/projects/pro_55.jpg')}}" alt="image"> 
                                                                                    </div>
                                        <!--end::Avatar-->

                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">brian@exchange.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-12-20T00:00:00+05:30">Dec 20, 2024</td>
                            <td>$935.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr><tr class="even">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C                                                </span>
                                                                                    </div>
                                        <!--end::Avatar-->

                                                                                   <!--begin::Online-->
                                           <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1" bis_skin_checked="1"></div>
                                           <!--end::Online-->
                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">mik@pex.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-05-05T00:00:00+05:30">May 05, 2024</td>
                            <td>$883.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr><tr class="odd">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img src="{{asset('assets/media/projects/img11.jpg')}}" alt="image">
                                                                                    </div>
                                        <!--end::Avatar-->

                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-12-20T00:00:00+05:30">Dec 20, 2024</td>
                            <td>$672.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr><tr class="even">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O                                                </span>
                                                                                    </div>
                                        <!--end::Avatar-->

                                                                                   <!--begin::Online-->
                                           <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1" bis_skin_checked="1"></div>
                                           <!--end::Online-->
                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-07-25T00:00:00+05:30">Jul 25, 2024</td>
                            <td>$637.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">
                                    Pending                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr><tr class="odd">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N                                                </span>
                                                                                    </div>
                                        <!--end::Avatar-->

                                                                                   <!--begin::Online-->
                                           <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1" bis_skin_checked="1"></div>
                                           <!--end::Online-->
                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-06-20T00:00:00+05:30">Jun 20, 2024</td>
                            <td>$997.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr><tr class="even">
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative" bis_skin_checked="1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                        <img src="{{asset('assets/media/projects/img_91.jpg')}}" alt="image">                                                                                    </div>
                                        <!--end::Avatar-->

                                                                            </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center" bis_skin_checked="1">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>

                                        <div class="fw-semibold text-gray-500" bis_skin_checked="1">dam@consilting.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td data-order="2024-02-21T00:00:00+05:30">Feb 21, 2024</td>
                            <td>$646.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr></tbody>
            </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"><div class="dataTables_length" id="kt_profile_overview_table_length" bis_skin_checked="1"><label><select name="kt_profile_overview_table_length" aria-controls="kt_profile_overview_table" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_profile_overview_table_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_profile_overview_table_previous"><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="kt_profile_overview_table_next"><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
            <!--end::Table-->
        </div>
        <!--end::Table container-->                                      
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->	

                                    </div>
                <!--end::Content wrapper-->
               




                <script src="@@path/vendor/chartist/dist/chartist.min.js"></script>
<script src="@@path/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>





        
    </x-default-layout>