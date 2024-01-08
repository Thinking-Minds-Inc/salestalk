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
        Subscriptions List
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
                                                    Subscription                                            </li>
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
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_659be973e0c27" bis_skin_checked="1">
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
                <select class="form-select form-select-solid" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_659be973e0c27" data-allow-clear="true" data-select2-id="select2-data-7-0zdk" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select>
                <!-- <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-6amx" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-vrzf-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-vrzf-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
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
            <!--begin::Card-->
<div class="card" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title" bis_skin_checked="1">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1" bis_skin_checked="1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Subscriptions">
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Toolbar-->
<div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base" bis_skin_checked="1">
    <!--begin::Filter-->
    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>        Filter
    </button>
    <!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Header-->
    <div class="px-7 py-5" bis_skin_checked="1">
        <div class="fs-5 text-gray-900 fw-bold" bis_skin_checked="1">Filter Options</div>
    </div>
    <!--end::Header-->

    <!--begin::Separator-->
    <div class="separator border-gray-200" bis_skin_checked="1"></div>
    <!--end::Separator-->

    <!--begin::Content-->
    <div class="px-7 py-5" data-kt-subscription-table-filter="form" bis_skin_checked="1">
        <!--begin::Input group-->
  <div class="mb-10">
    <label for="month" class="form-label fs-6 fw-semibold">Month:</label>
    <select id="month" class="form-select form-select-solid fw-bold select2-hidden-accessible" data-placeholder="Select option" data-allow-clear="true" data-kt-subscription-table-filter="month" data-hide-search="true" tabindex="-1" aria-hidden="true">
        <option></option>
        <option value="jan">January</option>
        <option value="feb">February</option>
        <option value="mar">March</option>
        <option value="apr">April</option>
        <option value="may">May</option>
        <option value="jun">June</option>
        <option value="jul">July</option>
        <option value="aug">August</option>
        <option value="sep">September</option>
        <option value="oct">October</option>
        <option value="nov">November</option>
        <option value="dec">December</option>
    </select>
</div>

        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10" bis_skin_checked="1">
            <label class="form-label fs-6 fw-semibold">Status:</label>
            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-subscription-table-filter="status" data-hide-search="true" data-select2-id="select2-data-12-vrfn" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option data-select2-id="select2-data-14-oc6n"></option>
                <option value="Active">Active</option>
                <option value="Expiring">Expiring</option>
                <option value="Suspended">Suspended</option>
            </select>
            <!-- <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-13-36lj" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-0rr7-container" aria-controls="select2-0rr7-container"><span class="select2-selection__rendered" id="select2-0rr7-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10" bis_skin_checked="1">
            <label class="form-label fs-6 fw-semibold">Billing Method:</label>
            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-subscription-table-filter="billing" data-hide-search="true" data-select2-id="select2-data-15-3xxv" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option data-select2-id="select2-data-17-a9l8"></option>
                <option value="Auto-debit">Auto-debit</option>
                <option value="Manual - Credit Card">Manual - Credit Card</option>
                <option value="Manual - Cash">Manual - Cash</option>
                <option value="Manual - Paypal">Manual - Paypal</option>
            </select>
            <!-- <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-16-nalk" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-becq-container" aria-controls="select2-becq-container"><span class="select2-selection__rendered" id="select2-becq-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
        </div>
        <!--end::Input group-->

         <!--begin::Input group-->
         <div class="mb-10" bis_skin_checked="1">
            <label class="form-label fs-6 fw-semibold">Product:</label>
            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-subscription-table-filter="product" data-hide-search="true" data-select2-id="select2-data-18-6vx7" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option data-select2-id="select2-data-20-opkr"></option>
                <option value="Basic">Basic</option>
                <option value="Basic Bundle">Basic Bundle</option>
                <option value="Teams">Teams</option>
                <option value="Teams Bundle">Teams Bundle</option>
                <option value="Enterprise">Enterprise</option>
                <option value="	Enterprise Bundle">	Enterprise Bundle</option>
            </select>
            <!-- <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-19-rimw" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6owe-container" aria-controls="select2-6owe-container"><span class="select2-selection__rendered" id="select2-6owe-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex justify-content-end" bis_skin_checked="1">
            <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-subscription-table-filter="reset">Reset</button>
            <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-subscription-table-filter="filter">Apply</button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Content-->
</div>
<!--end::Menu 1-->    <!--end::Filter-->

    <!--begin::Export-->
    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_subscriptions_export_modal">
        <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>        Export
    </button>
    <!--end::Export-->

    <!--begin::Add subscription-->
    <a href="#" class="btn btn-primary">
        <i class="ki-duotone ki-plus fs-2"></i>        Add Subscription
    </a>
    <!--end::Add subscription-->
</div>
<!--end::Toolbar-->

<!--begin::Group actions-->
<div class="d-flex justify-content-end align-items-center d-none" data-kt-subscription-table-toolbar="selected" bis_skin_checked="1">
    <div class="fw-bold me-5" bis_skin_checked="1">
        <span class="me-2" data-kt-subscription-table-select="selected_count"></span> Selected
    </div>

    <button type="button" class="btn btn-danger" data-kt-subscription-table-select="delete_selected">
        Delete Selected
    </button>
</div>
<!--end::Group actions-->        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0" bis_skin_checked="1">
        
<!--begin::Table-->
<div id="kt_subscriptions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_subscriptions_table">
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0"><th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="
                
                    
                
            " style="width: 29.8906px;">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3" bis_skin_checked="1">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1">
                </div>
            </th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 188.375px;">Customer</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 188.375px;">Status</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Billing: activate to sort column ascending" style="width: 201.312px;">Billing</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 193.203px;">Product</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 188.375px;">Created Date</th><th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 144.969px;">Actions</th></tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
            <tr class="odd">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                </td>
                <td>
                    <div class="badge badge-light-success" bis_skin_checked="1">Active</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">Auto-debit</div>
                </td>
                <td>
                    Basic                </td>
                <td data-order="2024-01-10T00:00:00+05:30">
                    Nov 10, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr><tr class="even">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                </td>
                <td>
                    <div class="badge badge-light-success" bis_skin_checked="1">Active</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">Manual - Credit Card</div>
                </td>
                <td>
                    Basic                </td>
                <td data-order="2024-01-22T00:00:00+05:30">
                    Sep 22, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr><tr class="odd">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                </td>
                <td>
                    <div class="badge badge-light-success" bis_skin_checked="1">Active</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">Manual - Cash</div>
                </td>
                <td>
                    Teams Bundle                </td>
                <td data-order="2024-01-21T00:00:00+05:30">
                    Feb 21, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr><tr class="even">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                </td>
                <td>
                    <div class="badge badge-light-warning" bis_skin_checked="1">Expiring</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">Manual - Paypal</div>
                </td>
                <td>
                    Enterprise                </td>
                <td data-order="2024-01-21T00:00:00+05:30">
                    Feb 21, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr><tr class="odd">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                </td>
                <td>
                    <div class="badge badge-light-warning" bis_skin_checked="1">Expiring</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">Auto-debit</div>
                </td>
                <td>
                    Basic                </td>
                <td data-order="2024-01-15T00:00:00+05:30">
                    Apr 15, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr><tr class="even">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                </td>
                <td>
                    <div class="badge badge-light-success" bis_skin_checked="1">Active</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">Auto-debit</div>
                </td>
                <td>
                    Enterprise Bundle                </td>
                <td data-order="2024-01-21T00:00:00+05:30">
                    Feb 21, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr><tr class="odd">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                </td>
                <td>
                    <div class="badge badge-light-success" bis_skin_checked="1">Active</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">Auto-debit</div>
                </td>
                <td>
                    Teams                </td>
                <td data-order="2024-01-10T00:00:00+05:30">
                    Nov 10, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr><tr class="even">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
                </td>
                <td>
                    <div class="badge badge-light-danger" bis_skin_checked="1">Suspended</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">--</div>
                </td>
                <td>
                    Enterprise                </td>
                <td data-order="2024-01-15T00:00:00+05:30">
                    Apr 15, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr><tr class="odd">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                </td>
                <td>
                    <div class="badge badge-light-warning" bis_skin_checked="1">Expiring</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">Auto-debit</div>
                </td>
                <td>
                    Basic                </td>
                <td data-order="2024-01-10T00:00:00+05:30">
                    Mar 10, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr><tr class="even">
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="1">
                    </div>
                </td>
                <td>
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                </td>
                <td>
                    <div class="badge badge-light-success" bis_skin_checked="1">Active</div>
                </td>
                <td>
                    <div class="badge badge-light" bis_skin_checked="1">Auto-debit</div>
                </td>
                <td>
                    Enterprise Bundle                </td>
                <td data-order="2024-01-10T00:00:00+05:30">
                    Nov 10, 2024                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 m-0"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr></tbody>
</table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_subscriptions_table_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_subscriptions_table_previous"><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_subscriptions_table_next"><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
<!--end::Table-->    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->

<!--begin::Modals-->
<!--begin::Modal - Adjust Balance-->
<div class="modal fade" id="kt_subscriptions_export_modal" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px" bis_skin_checked="1">
        <!--begin::Modal content-->
        <div class="modal-content" bis_skin_checked="1">
            <!--begin::Modal header-->
            <div class="modal-header" bis_skin_checked="1">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Export Subscriptions</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div id="kt_subscriptions_export_close" class="btn btn-icon btn-sm btn-active-icon-primary" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7" bis_skin_checked="1">
                <!--begin::Form-->
                <form id="kt_subscriptions_export_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid" data-select2-id="select2-data-21-2csi" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                            <option value="excell" data-select2-id="select2-data-23-280y">Excel</option>
                            <option value="pdf">PDF</option>
                            <option value="cvs">CVS</option>
                            <option value="zip">ZIP</option>
                        </select>
                        <!-- <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-22-734z" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-format-n2-container" aria-controls="select2-format-n2-container"><span class="select2-selection__rendered" id="select2-format-n2-container" role="textbox" aria-readonly="true" title="Excel">Excel</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10 fv-plugins-icon-container" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input class="form-control form-control-solid flatpickr-input" placeholder="Pick a date" name="date" type="hidden"><input class="form-control form-control-solid form-control input" placeholder="Pick a date" tabindex="0" type="text" readonly="readonly">
                        <!--end::Input-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                    <!--end::Input group-->

                    <!--begin::Row-->
                    <div class="row fv-row mb-15" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
                        <!--end::Label-->

                        <!--begin::Radio group-->
                        <div class="d-flex flex-column" bis_skin_checked="1">
                            <!--begin::Radio button-->
                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type">
                                <span class="form-check-label text-gray-600 fw-semibold">
                                    All
                                </span>
                            </label>
                            <!--end::Radio button-->

                            <!--begin::Radio button-->
                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type">
                                <span class="form-check-label text-gray-600 fw-semibold">
                                    Visa
                                </span>
                            </label>
                            <!--end::Radio button-->

                            <!--begin::Radio button-->
                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="3" name="payment_type">
                                <span class="form-check-label text-gray-600 fw-semibold">
                                    Mastercard
                                </span>
                            </label>
                            <!--end::Radio button-->

                            <!--begin::Radio button-->
                            <label class="form-check form-check-custom form-check-sm form-check-solid">
                                <input class="form-check-input" type="checkbox" value="4" name="payment_type">
                                <span class="form-check-label text-gray-600 fw-semibold">
                                    American Express
                                </span>
                            </label>
                            <!--end::Radio button-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Row-->

                    <!--begin::Actions-->
                    <div class="text-center" bis_skin_checked="1">
                        <button type="reset" id="kt_subscriptions_export_cancel" class="btn btn-light me-3">
                            Discard
                        </button>

                        <button type="submit" id="kt_subscriptions_export_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card--><!--end::Modals-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->	

                                    </div>
                <!--end::Content wrapper-->

                                    
<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer " bis_skin_checked="1">
            <!--begin::Footer container-->
        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 " bis_skin_checked="1">
            <!--begin::Copyright-->
<div class="text-gray-900 order-2 order-md-1" bis_skin_checked="1">
    <span class="text-muted fw-semibold me-1">2024©</span>
    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
</div>
<!--end::Copyright-->

<!--begin::Menu-->
<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
    <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>

    <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>

    <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
</ul>
<!--end::Menu-->        </div>
        <!--end::Footer container-->
    </div>
<!--end::Footer-->                            </div>

</x-default-layout>