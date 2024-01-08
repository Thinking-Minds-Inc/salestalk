<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection
    <link href="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">    
    <link href="https://preview.keenthemes.com/metronic8/demo1/assets/css/style.bundle.css" rel="stylesheet" type="text/css">

    
           
    <!--begin::Content container-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " bis_skin_checked="1">

<!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" class="app-containers container-xxl d-flex flex-stack " bis_skin_checked="1">



<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 " bis_skin_checked="1">
<!--begin::Title-->
<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
Organization
</h1>
<!--end::Title-->


<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        <a href="#" class="text-muted text-hover-primary">
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
                        Organization
                    </li>
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
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6597c8d68012b" bis_skin_checked="1" style="">
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

        <!--begin::Stepper-->
<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10 first" id="kt_create_account_stepper" data-kt-stepper="true" bis_skin_checked="1">
<!--begin::Aside-->
<div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px" bis_skin_checked="1">
    <!--begin::Wrapper-->
    <div class="card-body px-6 px-lg-10 px-xxl-15 py-20" bis_skin_checked="1">
        <!--begin::Nav-->
        <div class="stepper-nav" bis_skin_checked="1">            
            <!--begin::Step 1-->
            <div class="stepper-item current" data-kt-stepper-element="nav" bis_skin_checked="1">
                <!--begin::Wrapper-->  
                <div class="stepper-wrapper" bis_skin_checked="1">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px" bis_skin_checked="1">
                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>                            
                        <span class="stepper-number">1</span>
                    </div>
                    <!--end::Icon-->

                    <!--begin::Label-->
                    <div class="stepper-label" bis_skin_checked="1">
                        <h3 class="stepper-title">
                            Account Type
                        </h3>

                        <div class="stepper-desc fw-semibold" bis_skin_checked="1">
                            Setup Your Account Details
                        </div>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Wrapper--> 

                <!--begin::Line-->
                <div class="stepper-line h-40px" bis_skin_checked="1"></div>
                <!--end::Line-->                       
            </div>
            <!--end::Step 1-->

            <!--begin::Step 2-->
            <div class="stepper-item pending" data-kt-stepper-element="nav" bis_skin_checked="1">
                <!--begin::Wrapper-->  
                <div class="stepper-wrapper" bis_skin_checked="1">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px" bis_skin_checked="1">
                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>                            <span class="stepper-number">2</span>
                    </div>
                    <!--end::Icon-->

                    <!--begin::Label-->
                    <div class="stepper-label" bis_skin_checked="1">
                        <h3 class="stepper-title">
                            Account Settings
                        </h3>
                        <div class="stepper-desc fw-semibold" bis_skin_checked="1">
                            Setup Your Account Settings
                        </div>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Wrapper--> 

                <!--begin::Line-->
                <div class="stepper-line h-40px" bis_skin_checked="1"></div>
                <!--end::Line-->                       
            </div>
            <!--end::Step 2-->

            <!--begin::Step 3-->
            <div class="stepper-item pending" data-kt-stepper-element="nav" bis_skin_checked="1">
                <!--begin::Wrapper-->  
                <div class="stepper-wrapper" bis_skin_checked="1">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px" bis_skin_checked="1">
                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>                            <span class="stepper-number">3</span>
                    </div>
                    <!--end::Icon-->

                    <!--begin::Label-->
                    <div class="stepper-label" bis_skin_checked="1">
                        <h3 class="stepper-title">
                            Business Info
                        </h3>
                        <div class="stepper-desc fw-semibold" bis_skin_checked="1">
                            Your Business Related Info
                        </div>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Wrapper--> 

                <!--begin::Line-->
                <div class="stepper-line h-40px" bis_skin_checked="1"></div>
                <!--end::Line-->                       
            </div>
            <!--end::Step 3-->

            <!--begin::Step 4-->
            <div class="stepper-item pending" data-kt-stepper-element="nav" bis_skin_checked="1">
                <!--begin::Wrapper-->  
                <div class="stepper-wrapper" bis_skin_checked="1">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px" bis_skin_checked="1">
                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>                            <span class="stepper-number">4</span>
                    </div>
                    <!--end::Icon-->

                    <!--begin::Label-->
                    <div class="stepper-label" bis_skin_checked="1">
                        <h3 class="stepper-title">
                            Billing Details
                        </h3>
                        <div class="stepper-desc fw-semibold" bis_skin_checked="1">
                            Set Your Payment Methods
                        </div>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Wrapper--> 

                <!--begin::Line-->
                <div class="stepper-line h-40px" bis_skin_checked="1"></div>
                <!--end::Line-->                       
            </div>
            <!--end::Step 4-->

            <!--begin::Step 5-->
            <div class="stepper-item mark-completed pending" data-kt-stepper-element="nav" bis_skin_checked="1">
                <!--begin::Wrapper-->  
                <div class="stepper-wrapper" bis_skin_checked="1">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px" bis_skin_checked="1">
                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>                            <span class="stepper-number">5</span>
                    </div>
                    <!--end::Icon-->

                    <!--begin::Label-->
                    <div class="stepper-label" bis_skin_checked="1">
                        <h3 class="stepper-title">
                            Completed
                        </h3>
                        <div class="stepper-desc fw-semibold" bis_skin_checked="1">
                            Woah, we are here
                        </div>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Wrapper-->                    
            </div>
            <!--end::Step 5-->         
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Wrapper-->
</div>
<!--begin::Aside-->

<!--begin::Content-->
<div class="card d-flex flex-row-fluid flex-center" bis_skin_checked="1">
    <!--begin::Form-->
    <form class="card-body py-20 w-100 mw-xl-700px px-9 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_create_account_form">
        <!--begin::Step 1-->
        <div class="current" data-kt-stepper-element="content" bis_skin_checked="1">
            <!--begin::Wrapper-->
<div class="w-100" bis_skin_checked="1">
<!--begin::Heading-->
<div class="pb-10 pb-lg-15" bis_skin_checked="1">
    <!--begin::Title-->
    <h2 class="fw-bold d-flex align-items-center text-gray-900">
        Choose Account Type

        
<span class="ms-1" data-bs-toggle="tooltip" aria-label="Billing is issued based on your selected account typ" data-bs-original-title="Billing is issued based on your selected account typ" data-kt-initialized="1">
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        </h2>
    <!--end::Title-->

    <!--begin::Notice-->
    <div class="text-muted fw-semibold fs-6" bis_skin_checked="1">
        If you need more info, please check out 
        <a href="#" class="link-primary fw-bold">Help Page</a>.
    </div>
    <!--end::Notice-->
</div>
<!--end::Heading-->

<!--begin::Input group-->
<div class="fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid" bis_skin_checked="1">
    <!--begin::Row-->
    <div class="row" bis_skin_checked="1">
        <!--begin::Col-->
        <div class="col-lg-6" bis_skin_checked="1">
            <!--begin::Option-->
            <input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal">
            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
                <i class="ki-duotone ki-badge fs-3x me-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                <!--begin::Info-->
                <span class="d-block fw-semibold text-start">                            
                    <span class="text-gray-900 fw-bold d-block fs-4 mb-2">
                        Personal Account
                    </span>
                    <span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
                </span>
                <!--end::Info-->
            </label>   
            <!--end::Option-->
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Col-->
        
        <!--begin::Col-->
        <div class="col-lg-6" bis_skin_checked="1">
            <!--begin::Option-->
            <input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate">
            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
                <i class="ki-duotone ki-briefcase fs-3x me-5"><span class="path1"></span><span class="path2"></span></i>
                <!--begin::Info-->
                <span class="d-block fw-semibold text-start">                              
                    <span class="text-gray-900 fw-bold d-block fs-4 mb-2">Corporate Account</span>
                    <span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
                </span>           
                <!--end::Info-->               
            </label>           
            <!--end::Option-->   
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->        
</div>
<!--end::Input group-->    
</div> 
<!--end::Wrapper-->            </div>
        <!--end::Step 1-->

        <!--begin::Step 2-->
        <div data-kt-stepper-element="content" bis_skin_checked="1" class="pending">
            <!--begin::Wrapper-->
<div class="w-100" bis_skin_checked="1">
<!--begin::Heading-->
<div class="pb-10 pb-lg-15" bis_skin_checked="1">
    <!--begin::Title-->
    <h2 class="fw-bold text-gray-900">Account Info</h2>
    <!--end::Title-->

    <!--begin::Notice-->
    <div class="text-muted fw-semibold fs-6" bis_skin_checked="1">
        If you need more info, please check out 
        <a href="#" class="link-primary fw-bold">Help Page</a>.
    </div>
    <!--end::Notice-->
</div>
<!--end::Heading-->

<!--begin::Input group-->
<div class="mb-10 fv-row fv-plugins-icon-container" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="d-flex align-items-center form-label mb-3">
        Specify Team Size

        
<span class="ms-1" data-bs-toggle="tooltip" aria-label="Provide your team size to help us setup your billing" data-bs-original-title="Provide your team size to help us setup your billing" data-kt-initialized="1">
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        </label>
    <!--end::Label-->

    <!--begin::Row-->
    <div class="row mb-2 team_size_options" data-kt-buttons="true" data-kt-initialized="1" bis_skin_checked="1"> 
        <!--begin::Col-->
        <div class="col" bis_skin_checked="1">
            <!--begin::Option-->
            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                <input type="radio" class="btn-check" name="account_team_size" value="1-1">    
                <span class="fw-bold fs-3">1-1</span>
            </label>       
            <!--end::Option-->     
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col" bis_skin_checked="1">
            <!--begin::Option-->
            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
                <input type="radio" class="btn-check" name="account_team_size" checked="" value="2-10">  
                <span class="fw-bold fs-3">2-10</span>
            </label>
            <!--end::Option-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col" bis_skin_checked="1">                            
            <!--begin::Option-->
            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                <input type="radio" class="btn-check" name="account_team_size" value="10-50">     
                <span class="fw-bold fs-3">10-50</span>
            </label>
            <!--end::Option-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col" bis_skin_checked="1">                                      
            <!--begin::Option-->
            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                <input type="radio" class="btn-check" name="account_team_size" value="50+"> 
                <span class="fw-bold fs-3">50+</span>
            </label>   
            <!--end::Option-->    
        </div>
        <!--end::Col-->                 
    </div>
    <!--end::Row-->

    <!--begin::Hint-->
    <div class="form-text" bis_skin_checked="1">
        Customers will see this shortened version of your statement descriptor
    </div>
    <!--end::Hint-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="mb-10 fv-row fv-plugins-icon-container" bis_skin_checked="1">      
    <!--begin::Label-->                  
    <label class="form-label mb-3">Team Account Name</label>
    <!--end::Label-->

    <!--begin::Input-->
    <input type="text" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="">
    <!--end::Input-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="mb-0 fv-row fv-plugins-icon-container" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="d-flex align-items-center form-label mb-5">
        Select Account Plan

        
<span class="ms-1" data-bs-toggle="tooltip" aria-label="Monthly billing will be based on your account plan" data-bs-original-title="Monthly billing will be based on your account plan" data-kt-initialized="1">
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        </label>
    <!--end::Label-->

    <!--begin::Options-->
    <div class="mb-0" bis_skin_checked="1">
        <!--begin:Option-->
        <label class="d-flex flex-stack mb-5 cursor-pointer">
            <!--begin:Label-->
            <span class="d-flex align-items-center me-2">
                <!--begin::Icon-->
                <span class="symbol symbol-50px me-6">
                    <span class="symbol-label">
                        <i class="ki-duotone ki-bank fs-1 text-gray-600"><span class="path1"></span><span class="path2"></span></i>                        </span>
                </span>
                <!--end::Icon-->

                <!--begin::Description-->
                <span class="d-flex flex-column">
                    <span class="fw-bold text-gray-800 text-hover-primary fs-5">Company Account</span>
                    <span class="fs-6 fw-semibold text-muted">Use images to enhance your post flow</span>
                </span>
                <!--end:Description-->
            </span>
            <!--end:Label-->

            <!--begin:Input-->
            <span class="form-check form-check-custom form-check-solid">
                <input class="form-check-input" type="radio" name="account_plan" value="1">
            </span>
            <!--end:Input-->
        </label>
        <!--end::Option-->

        <!--begin:Option-->
        <label class="d-flex flex-stack mb-5 cursor-pointer">
            <!--begin:Label-->
            <span class="d-flex align-items-center me-2">
                <!--begin::Icon-->
                <span class="symbol symbol-50px me-6">
                    <span class="symbol-label">
                        <i class="ki-duotone ki-chart fs-1 text-gray-600"><span class="path1"></span><span class="path2"></span></i>                        </span>
                </span>
                <!--end::Icon-->

                <!--begin::Description-->
                <span class="d-flex flex-column">
                    <span class="fw-bold text-gray-800 text-hover-primary fs-5">Developer Account</span>
                    <span class="fs-6 fw-semibold text-muted">Use images to your post time</span>
                </span>
                <!--end:Description-->
            </span>
            <!--end:Label-->

            <!--begin:Input-->
            <span class="form-check form-check-custom form-check-solid">
                <input class="form-check-input" type="radio" checked="" name="account_plan" value="2">
            </span>
            <!--end:Input-->
        </label>
        <!--end::Option-->

        <!--begin:Option-->
        <label class="d-flex flex-stack mb-0 cursor-pointer">
            <!--begin:Label-->
            <span class="d-flex align-items-center me-2">
                <!--begin::Icon-->
                <span class="symbol symbol-50px me-6">
                    <span class="symbol-label">
                        <i class="ki-duotone ki-chart-pie-4 fs-1 text-gray-600"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        </span>
                </span>
                <!--end::Icon-->

                <!--begin::Description-->
                <span class="d-flex flex-column">
                    <span class="fw-bold text-gray-800 text-hover-primary fs-5">Testing Account</span>
                    <span class="fs-6 fw-semibold text-muted">Use images to enhance time travel rivers</span>
                </span>
                <!--end:Description-->
            </span>
            <!--end:Label-->

            <!--begin:Input-->
            <span class="form-check form-check-custom form-check-solid">
                <input class="form-check-input" type="radio" name="account_plan" value="3">
            </span>
            <!--end:Input-->
        </label>
        <!--end::Option-->
    </div>
    <!--end::Options-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->
</div>
<!--end::Wrapper-->            </div>
        <!--end::Step 2-->

        <!--begin::Step 3-->
        <div data-kt-stepper-element="content" bis_skin_checked="1" class="pending">
            <!--begin::Wrapper-->
<div class="w-100" bis_skin_checked="1">
<!--begin::Heading-->
<div class="pb-10 pb-lg-12" bis_skin_checked="1">
    <!--begin::Title-->
    <h2 class="fw-bold text-gray-900">Business Details</h2>
    <!--end::Title-->

    <!--begin::Notice-->
    <div class="text-muted fw-semibold fs-6" bis_skin_checked="1">
        If you need more info, please check out 
        <a href="#" class="link-primary fw-bold">Help Page</a>.
    </div>
    <!--end::Notice-->
</div>
<!--end::Heading-->

<!--begin::Input group-->
<div class="fv-row mb-10 fv-plugins-icon-container" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="form-label required">Business Name</label>
    <!--end::Label-->

    <!--begin::Input-->
    <input name="business_name" class="form-control form-control-lg form-control-solid" value="Keenthemes Inc.">
    <!--end::Input-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="fv-row mb-10 fv-plugins-icon-container" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="d-flex align-items-center form-label">
        <span class="required">Shortened Descriptor</span>

        
<span class="lh-1 ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="
    <div class='p-4 rounded bg-light'>
        <div class='d-flex flex-stack text-muted mb-4'>
            <i class=&quot;ki-duotone ki-bank fs-3 me-3&quot;><span class=&quot;path1&quot;></span><span class=&quot;path2&quot;></span></i>
            <div class='fw-bold'>INCBANK **** 1245 STATEMENT</div>
        </div>

        <div class='d-flex flex-stack fw-semibold text-gray-600'>
            <div>Amount</div>
            <div>Transaction</div>
        </div>

        <div class='separator separator-dashed my-2'></div>

        <div class='d-flex flex-stack text-gray-900 fw-bold mb-2'>
            <div>USD345.00</div>
            <div>KEENTHEMES*</div>
        </div>

        <div class='d-flex flex-stack text-muted mb-2'>
            <div>USD75.00</div>
            <div>Hosting fee</div>
        </div>

        <div class='d-flex flex-stack text-muted'>
            <div>USD3,950.00</div>
            <div>Payrol</div>
        </div>
    </div>
" data-kt-initialized="1">
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        </label>
    <!--end::Label-->

    <!--begin::Input-->
    <input name="business_descriptor" class="form-control form-control-lg form-control-solid" value="KEENTHEMES">
    <!--end::Input-->

    <!--begin::Hint-->
    <div class="form-text" bis_skin_checked="1">
        Customers will see this shortened version of your statement descriptor
    </div>
    <!--end::Hint-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="fv-row mb-10 fv-plugins-icon-container" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="form-label required">Corporation Type</label>
    <!--end::Label-->

    <!--begin::Input-->
    <select name="business_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true" data-select2-id="select2-data-9-nd22" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
        <option data-select2-id="select2-data-11-95im">Select...</option>
        <option value="1">S Corporation</option>
        <option value="1">C Corporation</option>
        <option value="2">Sole Proprietorship</option>
        <option value="3">Non-profit</option>
        <option value="4">Limited Liability</option>
        <option value="5">General Partnership</option>
    </select>
    <!-- <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-quxc" style="width: 100%;">
        <span class="selection">
            <span class="select2-selection select2-selection--single form-select form-select-lg form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-business_type-en-container" aria-controls="select2-business_type-en-container">
                <span class="select2-selection__rendered" id="select2-business_type-en-container" role="textbox" aria-readonly="true" title="Select...">
                    <span class="select2-selection__placeholder">Select...</span>
                </span>
                    <span class="select2-selection__arrow" role="presentation">
                        <b role="presentation"></b>
                    </span>
                </span>
        </span>
        <span class="dropdown-wrapper" aria-hidden="true"></span>
    </span> -->
    <!--end::Input-->                             
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="fv-row mb-10" bis_skin_checked="1">
    <!--end::Label-->
    <label class="form-label">Business Description</label>
    <!--end::Label-->

    <!--begin::Input-->
    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
    <!--end::Input-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="fv-row mb-0 fv-plugins-icon-container" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="fs-6 fw-semibold form-label required">Contact Email</label>
    <!--end::Label-->

    <!--begin::Input-->
    <input name="business_email" class="form-control form-control-lg form-control-solid" value="corp@support.com">
    <!--end::Input-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->  
</div>
<!--end::Wrapper-->

        </div>
        <!--end::Step 3-->

        <!--begin::Step 4-->
        <div data-kt-stepper-element="content" bis_skin_checked="1" class="pending">
            <!--begin::Wrapper-->
<div class="w-100" bis_skin_checked="1">
<!--begin::Heading-->
<div class="pb-10 pb-lg-15" bis_skin_checked="1">
    <!--begin::Title-->
    <h2 class="fw-bold text-gray-900">Billing Details</h2>
    <!--end::Title-->

    <!--begin::Notice-->
    <div class="text-muted fw-semibold fs-6" bis_skin_checked="1">
        If you need more info, please check out 
        <a href="#" class="text-primary fw-bold">Help Page</a>.
    </div>
    <!--end::Notice-->
</div>
<!--end::Heading-->

<!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container" bis_skin_checked="1">
<!--begin::Label-->
<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
    <span class="required">Name On Card</span>

    
<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-bs-original-title="Specify a card holder's name" data-kt-initialized="1">
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>    </label>
<!--end::Label-->

<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container" bis_skin_checked="1">
<!--begin::Label-->
<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
<!--end::Label-->

<!--begin::Input wrapper-->
<div class="position-relative" bis_skin_checked="1">
    <!--begin::Input-->
    <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111">
    <!--end::Input-->

    <!--begin::Card logos-->
    <div class="position-absolute translate-middle-y top-50 end-0 me-5" bis_skin_checked="1">
        <img src="{{asset('assets/media/svg/card-logos/visa.svg')}}" alt="" class="h-25px">
        <img src="{{asset('assets/media/svg/card-logos/mastercard.svg')}}" alt="" class="h-25px">
        <img src="{{asset('assets/media/svg/card-logos/american-express.svg')}}" alt="" class="h-25px">
    </div>
    <!--end::Card logos-->
</div>
<!--end::Input wrapper-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-10" bis_skin_checked="1">
<!--begin::Col-->
<div class="col-md-8 fv-row" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
    <!--end::Label-->

    <!--begin::Row-->
    <div class="row fv-row fv-plugins-icon-container" bis_skin_checked="1">
        <!--begin::Col-->
        <div class="col-6" bis_skin_checked="1">
            <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month" data-select2-id="select2-data-12-aoqx" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option data-select2-id="select2-data-14-ix2f">Month</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
        <!-- <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-13-kb54" style="width: 100%;">
        <span class="selection">
            <span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_month-k3-container" aria-controls="select2-card_expiry_month-k3-container"><span class="select2-selection__rendered" id="select2-card_expiry_month-k3-container" role="textbox" aria-readonly="true" title="Month"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b>
        </span>
    </span>
    </span>
        <span class="dropdown-wrapper" aria-hidden="true"></span>
    </span> -->
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-6" bis_skin_checked="1">
            <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year" data-select2-id="select2-data-15-vxwi" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option data-select2-id="select2-data-17-g6ct">Year</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                </select>
                                <!-- <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-16-b8l1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_year-ep-container" aria-controls="select2-card_expiry_year-ep-container"><span class="select2-selection__rendered" id="select2-card_expiry_year-ep-container" role="textbox" aria-readonly="true" title="Year"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-md-4 fv-row fv-plugins-icon-container" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
        <span class="required">CVV</span>

        
<span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter a card CVV code" data-bs-original-title="Enter a card CVV code" data-kt-initialized="1">
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        </label>
    <!--end::Label-->

    <!--begin::Input wrapper-->
    <div class="position-relative" bis_skin_checked="1">
        <!--begin::Input-->
        <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
        <!--end::Input-->

        <!--begin::CVV icon-->
        <div class="position-absolute translate-middle-y top-50 end-0 me-3" bis_skin_checked="1">
            <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span class="path2"></span></i>            </div>
        <!--end::CVV icon-->
    </div>
    <!--end::Input wrapper-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Col-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="d-flex flex-stack" bis_skin_checked="1">
<!--begin::Label-->
<div class="me-5" bis_skin_checked="1">
    <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
    <div class="fs-7 fw-semibold text-muted" bis_skin_checked="1">If you need more info, please check budget planning</div>
</div>
<!--end::Label-->

<!--begin::Switch-->
<label class="form-check form-switch form-check-custom form-check-solid">
    <input class="form-check-input" type="checkbox" value="1" checked="checked">
    <span class="form-check-label fw-semibold text-muted">
        Save Card
    </span>
</label>
<!--end::Switch-->
</div>
<!--end::Input group-->

</div> 
<!--end::Wrapper-->            </div>            
        <!--end::Step 4-->

        <!--begin::Step 5-->
        <div data-kt-stepper-element="content" bis_skin_checked="1" class="pending">
             

<!--begin::Wrapper-->
<div class="w-100" bis_skin_checked="1">
<!--begin::Heading-->
<div class="pb-8 pb-lg-10" bis_skin_checked="1">
    <!--begin::Title-->
    <h2 class="fw-bold text-gray-900">Your Are Done!</h2>      
    <!--end::Title-->

    <!--begin::Notice-->   
    <div class="text-muted fw-semibold fs-6" bis_skin_checked="1">
        If you need more info, please  
        <a href="#" class="link-primary fw-bold">
            Sign In
        </a>
        .
    </div>
    <!--end::Notice-->
</div>
<!--end::Heading-->
                
<!--begin::Body-->
<div class="mb-0" bis_skin_checked="1">     
    <!--begin::Text-->
    <div class="fs-6 text-gray-600 mb-5" bis_skin_checked="1">
        Writing headlines for blog posts is as much an art as it is a science 
        and probably warrants its own post, but for all advise is with what 
        works for your great &amp; amazing audience. 
    </div>
    <!--end::Text-->

    <!--begin::Alert-->
    
<!--begin::Notice-->
<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6" bis_skin_checked="1">
        <!--begin::Icon-->
    <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--end::Icon-->

<!--begin::Wrapper-->
<div class="d-flex flex-stack flex-grow-1 " bis_skin_checked="1">
                <!--begin::Content-->
        <div class=" fw-semibold" bis_skin_checked="1">
                                <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
            
                                <div class="fs-6 text-gray-700 " bis_skin_checked="1">To start using great tools, please, <a href="#" class="fw-bold">Create Team Platform</a></div>
                        </div>
        <!--end::Content-->
    
        </div>
<!--end::Wrapper-->  
</div>
<!--end::Notice-->
    <!--end::Alert-->
</div>
<!--end::Body-->
</div> 
<!--end::Wrapper-->

         </div>
        <!--end::Step 5-->

        <!--begin::Actions-->
        <div class="d-flex flex-stack pt-10" bis_skin_checked="1"> 
            <!--begin::Wrapper-->
            <div class="mr-2" bis_skin_checked="1">
                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous"> 
                    <i class="ki-duotone ki-arrow-left fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>                        Back
                </button>
            </div>
            <!--end::Wrapper-->

            <!--begin::Wrapper-->
            <div bis_skin_checked="1">
                <button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                    <span class="indicator-label">
                        Submit
                        <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span class="path1"></span><span class="path2"></span></i>                        </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>

                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                    Continue
                    <i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0"><span class="path1"></span><span class="path2"></span></i>                    </button>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Content-->
</div>
<!--end::Stepper-->        


<!-- <script src="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/global/plugins.bundle.js"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    // $(document).ready(function(){
    //     $('.btn-active-light-primary').click(function(){
    //         $(this).addClass('active');
    //         $(this).siblings().removeClass('active');

    //     });

    // });

    $(document).ready(function(){
    $('.team_size_options .btn-active-light-primary').click(function(event){
        //remove all pre-existing active classes
        $('.team_size_options .btn-active-light-primary').removeClass('active');

        //add the active class to the link we clicked
        $(this).addClass('active');

        //Load the content
        //e.g.
        //load the page that the link was pointing to
        //$('#content').load($(this).find(a).attr('href'));      

        event.preventDefault();
    });
});


</script>
<script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/scripts.bundle.js"></script>

<!-- <script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/widgets.bundle.js"></script> -->

<script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/utilities/modals/create-account.js"></script>

<!-- <script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/utilities/modals/create-app.js"></script> -->
    </x-default-layout>