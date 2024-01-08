<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection


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
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/pages/user-profile/campaigns.html">
                        Campaigns                    </a>
                </li>
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/pages/user-profile/documents.html">
                        Documents                    </a>
                </li>
                <!--end::Nav item-->
                            <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/pages/user-profile/followers.html">
                        Followers                    </a>
                </li>
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

<!-- overview start section -->
<div class="row">
<div class="col-xl-6" bis_skin_checked="1">
        <!--begin::Feeds Widget 1-->
<div class="card mb-5 mb-xxl-8" bis_skin_checked="1">
    <!--begin::Body-->
    <div class="card-body pb-0" bis_skin_checked="1">
        <!--begin::Header-->
        <div class="d-flex align-items-center" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center flex-grow-1" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/Profile/profile_img_small.jpg')}}" alt="image">                  </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="d-flex flex-column" bis_skin_checked="1">
                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Grace Green</a>

                    <span class="text-gray-500 fw-bold">PHP, SQLite, Artisan CLI</span>
                </div>
                <!--end::Info-->
            </div>		 
            <!--end::User-->             

            <!--begin::Menu-->    
            <div class="my-0" bis_skin_checked="1">        
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                </button>
                
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4" bis_skin_checked="1">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" bis_skin_checked="1">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4" bis_skin_checked="1">
            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content px-3 py-3" bis_skin_checked="1">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Header-->

        <!--begin::Form-->
        <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
            <!--begin::Editor-->
            <div id="kt_forms_widget_1_editor" class="py-6 ql-container ql-snow" bis_skin_checked="1"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="What is on your mind ?" bis_skin_checked="1"><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1" bis_skin_checked="1"></div><div class="ql-tooltip ql-hidden" bis_skin_checked="1"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
            <!--end::Editor-->

            <div class="separator" bis_skin_checked="1"></div>

            <!--begin::Toolbar-->
            <div id="kt_forms_widget_1_editor_toolbar" class="ql-toolbar d-flex flex-stack py-2 ql-snow" bis_skin_checked="1">
                <div class="me-2" bis_skin_checked="1">
                    <span class="ql-formats ql-size ms-0">
                        <span class="ql-size w-75px ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="small"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="large"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="huge"></span></span></span><select class="ql-size w-75px" style="display: none;"><option value="small"></option><option selected="selected"></option><option value="large"></option><option value="huge"></option></select>
                    </span>

                    <span class="ql-formats">
                        <button class="ql-bold" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button>
                        <button class="ql-italic" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button>
                        <button class="ql-underline" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button>
                        <button class="ql-strike" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line> <path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path> <path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path> </svg></button>
                        <button class="ql-image" type="button"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7" r="1"></circle> <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button>
                        <button class="ql-link" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line> <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button>
                        <button class="ql-clean" type="button"><svg class="" viewBox="0 0 18 18"> <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line> <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line> <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line> <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect> </svg></button>
                    </span>
                </div>

                <div class="me-n3" bis_skin_checked="1">
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="ki-duotone ki-paper-clip fs-2"></i>                    </span>
                    
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="ki-duotone ki-geolocation fs-2"><span class="path1"></span><span class="path2"></span></i>                    </span>
                </div>
            </div>
            <!--end::Toolbar-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Body-->
</div>
<!--end::Feeds Widget 1-->
  

        <!--begin::Feeds Widget 2-->
<div class="card mb-5 mb-xxl-8" bis_skin_checked="1">
    <!--begin::Body-->
    <div class="card-body pb-0" bis_skin_checked="1">
        <!--begin::Header-->
        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center flex-grow-1" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/Profile/profile_img_2.jpg')}}" alt="image">     </div>             <!--end::Avatar-->

                <!--begin::Info-->
                <div class="d-flex flex-column" bis_skin_checked="1">
                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick Logan</a>

                    <span class="text-gray-500 fw-bold">PHP, SQLite, Artisan CLI</span>
                </div>
                <!--end::Info-->
            </div>		 
            <!--end::User-->             

            <!--begin::Menu-->    
            <div class="my-0" bis_skin_checked="1">        
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                </button>
                
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4" bis_skin_checked="1">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" bis_skin_checked="1">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4" bis_skin_checked="1">
            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content px-3 py-3" bis_skin_checked="1">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Header-->

        <!--begin::Post-->
        <div class="mb-5" bis_skin_checked="1">
            <!--begin::Text-->
            <p class="text-gray-800 fw-normal mb-5">
                Outlines keep you honest. They stop you from indulging in
                poorly thought-out metaphors about driving and keep you
                focused on the overall structure of your post
            </p>
            <!--end::Text-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">    
                <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                    <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    120
                </a>

                <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                    <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span class="path2"></span></i>                    15
                </a>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Post-->

        <!--begin::Separator-->
        <div class="separator mb-4" bis_skin_checked="1"></div>
        <!--end::Separator-->

        <!--begin::Reply input-->
        <form class="position-relative mb-6">
            <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.." data-kt-initialized="1" style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 25px;"></textarea>

            <div class="position-absolute top-0 end-0 me-n5" bis_skin_checked="1">                          
                <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                    <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>				</span>
                
				<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                    <i class="ki-duotone ki-geolocation fs-2 mb-3"><span class="path1"></span><span class="path2"></span></i>				</span>
            </div>
        </form>
        <!--edit::Reply input-->
    </div>
    <!--end::Body-->
</div>
<!--end::Feeds Widget 2-->
  

         <!--begin::Feeds Widget 3-->
<div class="card mb-5 mb-xxl-8" bis_skin_checked="1">
    <!--begin::Body-->
    <div class="card-body pb-0" bis_skin_checked="1">
        <!--begin::Header-->
        <div class="d-flex align-items-center mb-3" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center flex-grow-1" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/Profile/profile_img_3.jpg')}}" alt="image">     
                </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="d-flex flex-column" bis_skin_checked="1">
                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
                    <span class="text-gray-500 fw-bold">Yestarday at 5:06 PM</span>
                </div>
                <!--end::Info-->
            </div>		 
            <!--end::User-->      
            
            <!--begin::Menu-->    
            <div class="my-0" bis_skin_checked="1">        
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                </button>
                
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4" bis_skin_checked="1">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" bis_skin_checked="1">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4" bis_skin_checked="1">
            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content px-3 py-3" bis_skin_checked="1">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Header-->

        <!--begin::Post-->
        <div class="mb-7" bis_skin_checked="1">
            <!--begin::Text-->
            <div class="text-gray-800 mb-5" bis_skin_checked="1">
                Outlines keep you honest. They stop you from indulging in
                poorly thought-out metaphors about driving and keep you
                focused on the overall structure of your post
            </div>
            <!--end::Text-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">    
                <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                    <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    12
                </a>

                <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                    <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span class="path2"></span></i>                    150
                </a>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Post-->

        <!--begin::Replies-->
        <div class="mb-7" bis_skin_checked="1">
            <!--begin::Reply-->
            <div class="d-flex mb-5" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/Profile/profile_img_4.jpg')}}" alt="image">     
                </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="d-flex flex-column flex-row-fluid" bis_skin_checked="1">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center flex-wrap mb-1" bis_skin_checked="1">
                        <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Alice Danchik</a>

                        <span class="text-gray-500 fw-semibold fs-7">1 day</span>

                        <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                    </div>
                    <!--end::Info-->

                    <!--begin::Post-->
                    <span class="text-gray-800 fs-7 fw-normal pt-1">
                        Long before you sit dow to put digital pen to
                        paper you need to make sure you have to sit down and write.
                    </span>
                    <!--end::Post-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Reply-->

            <!--begin::Reply-->
            <div class="d-flex" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/Profile/profile_img_5.jpg')}}" alt="image"> 
                            </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="d-flex flex-column flex-row-fluid" bis_skin_checked="1">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center flex-wrap mb-1" bis_skin_checked="1">
                        <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Harris Bold</a>

                        <span class="text-gray-500 fw-semibold fs-7">2 days</span>

                        <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                    </div>
                    <!--end::Info-->

                    <!--begin::Post-->
                    <span class="text-gray-800 fs-7 fw-normal pt-1">
                        Outlines keep you honest. They stop you from indulging in poorly
                    </span>
                    <!--end::Post-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Reply-->
        </div>
        <!--end::Replies-->

        <!--begin::Separator-->
        <div class="separator mb-4" bis_skin_checked="1"></div>
        <!--end::Separator-->

        <!--begin::Reply input-->
        <form class="position-relative mb-6">
            <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.." data-kt-initialized="1" style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 25px;"></textarea>

            <div class="position-absolute top-0 end-0 me-n5" bis_skin_checked="1">                          
                <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                    <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>				</span>
                
				<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                    <i class="ki-duotone ki-geolocation fs-2 mb-3"><span class="path1"></span><span class="path2"></span></i>				</span>
            </div>
        </form>
        <!--edit::Reply input-->
    </div>
    <!--end::Body-->
</div>
<!--end::Feeds Widget 3-->

         <!--begin::Feeds Widget 4-->
 <div class="card mb-5 mb-xxl-8" bis_skin_checked="1">
    <!--begin::Body-->
    <div class="card-body pb-0" bis_skin_checked="1">
        <!--begin::Header-->
        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center flex-grow-1" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/Profile/profile_img_6.jpg')}}" alt="image">
                            </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="d-flex flex-column" bis_skin_checked="1">
                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
                    <span class="text-gray-500 fw-bold">Last week at 10:00 PM</span>
                </div>
                <!--end::Info-->
            </div>		 
            <!--end::User-->      
            
            <!--begin::Menu-->    
            <div class="my-0" bis_skin_checked="1">        
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                </button>
                
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
        <!--end::Header-->

        <!--begin::Post-->
        <div class="mb-7" bis_skin_checked="1">
            <!--begin::Text-->
            <div class="text-gray-800 mb-5" bis_skin_checked="1">
                Outlines keep you honest. They stop you from indulging in
                poorly thought-out metaphors about driving and keep you
                focused on the overall structure of your post
            </div>
            <!--end::Text-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">    
                <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                    <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    22
                </a>

                <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                    <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span class="path2"></span></i>                    59
                </a>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Post-->

        <!--begin::Separator-->
        <div class="separator mb-4" bis_skin_checked="1"></div>
        <!--end::Separator-->

        <!--begin::Reply input-->
        <form class="position-relative mb-6">
            <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.." data-kt-initialized="1" style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 25px;"></textarea>

            <div class="position-absolute top-0 end-0 me-n5" bis_skin_checked="1">                          
                <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                    <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>				</span>
                
				<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                    <i class="ki-duotone ki-geolocation fs-2 mb-3"><span class="path1"></span><span class="path2"></span></i>				</span>
            </div>
        </form>
        <!--edit::Reply input-->
    </div>
    <!--end::Body-->
</div>
<!--end::Feeds Widget 4-->
 
<!--begin::Feeds widget 5-->
<div class="card d-none" id="kt_widget_5" bis_skin_checked="1">
    <!--begin::Body-->
    <div class="card-body pb-0" bis_skin_checked="1">
        <!--begin::Header-->
        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center flex-grow-1" bis_skin_checked="1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5" bis_skin_checked="1">
                <img src="{{asset('assets/media/Profile/profile_img_3.jpg')}}" alt="image">   
                </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="d-flex flex-column" bis_skin_checked="1">
                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">dsfdfgsdfgCarles Nilson</a>
                    <span class="text-gray-500 fw-bold">Last week at 10:00 PM</span>
                </div>
                <!--end::Info-->
            </div>		 
            <!--end::User-->      
            
            <!--begin::Menu-->    
            <div class="my-0" bis_skin_checked="1">        
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                </button>
                
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4" bis_skin_checked="1">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" bis_skin_checked="1">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4" bis_skin_checked="1">
            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content px-3 py-3" bis_skin_checked="1">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Header-->

        <!--begin::Post-->
        <div class="mb-7" bis_skin_checked="1">
            <!--begin::Image-->
            <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px mb-5" style="background-image:url('/metronic8/demo1/assets/media/stock/900x600/19.jpg');" bis_skin_checked="1">                
            </div> 
            <!--end::Image-->

            <!--begin::Text-->
            <div class="text-gray-800 mb-5" bis_skin_checked="1">
                Outlines keep you honest. They stop you from indulging in
                poorly thought-out metaphors about driving and keep you
                focused on the overall structure of your post
            </div>
            <!--end::Text-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center mb-5" bis_skin_checked="1">    
                <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                    <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    20
                </a>

                <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                    <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span class="path2"></span></i>                    50
                </a>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Post-->

        <!--begin::Separator-->
        <div class="separator mb-4" bis_skin_checked="1"></div>
        <!--end::Separator-->

        <!--begin::Reply input-->
        <form class="position-relative mb-6">
            <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.." data-kt-initialized="1" style="overflow-x: hidden; overflow-wrap: break-word;"></textarea>

            <div class="position-absolute top-0 end-0 me-n5" bis_skin_checked="1">                          
                <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                    <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>				</span>
                
				<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                    <i class="ki-duotone ki-geolocation fs-2 mb-3"><span class="path1"></span><span class="path2"></span></i>				</span>
            </div>
        </form>
        <!--edit::Reply input-->
    </div>
    <!--end::Body-->
</div>
<!--end::Feeds widget 5-->

<!--begin::Feeds widget 4, 5 load more-->
<button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
    <span class="indicator-label">
        More Feeds
    </span>
    <span class="indicator-progress">
        Loading... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
    </span>
</button>
<!--end::Feeds widget 4, 5 load more-->   
    </div>
  
    

<!-- overview end section -->

<!-- Recent Statistics right section start -->
<div class="col-xl-6" bis_skin_checked="1">
        <!--begin::Charts Widget 1-->
<div class="card mb-5 mb-xxl-8" bis_skin_checked="1">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5" bis_skin_checked="1">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
            
			<span class="text-muted fw-semibold fs-7">More than 400 new members</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
            

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6596a8f5f0dd4" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6596a8f5f0dd4" data-allow-clear="true" data-select2-id="select2-data-9-hjj9" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-ehx2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-xkvh-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-xkvh-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body" bis_skin_checked="1">
        <!--begin::Chart-->
        <div id="kt_charts_widget_1_chart" style="height: 350px; min-height: 365px;" bis_skin_checked="1"><div id="apexchartstz7x3xgy" class="apexcharts-canvas apexchartstz7x3xgy apexcharts-theme-light" style="width: 557px; height: 350px;" bis_skin_checked="1"><svg id="SvgjsSvg1104" width="557" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="557" height="350"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 175px;" bis_skin_checked="1"></div></foreignObject><g id="SvgjsG1182" class="apexcharts-yaxis" rel="0" transform="translate(17.835205078125, 0)"><g id="SvgjsG1183" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1185" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1186">120</tspan><title>120</title></text><text id="SvgjsText1188" font-family="inherit" x="20" y="101.58250000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1189">90</tspan><title>90</title></text><text id="SvgjsText1191" font-family="inherit" x="20" y="171.76500000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1192">60</tspan><title>60</title></text><text id="SvgjsText1194" font-family="inherit" x="20" y="241.94750000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1195">30</tspan><title>30</title></text><text id="SvgjsText1197" font-family="inherit" x="20" y="312.13" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1198">0</tspan><title>0</title></text></g></g><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(47.835205078125, 30)"><defs id="SvgjsDefs1105"><linearGradient id="SvgjsLinearGradient1109" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1110" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1111" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1112" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasktz7x3xgy"><rect id="SvgjsRect1114" width="505.164794921875" height="292.73" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasktz7x3xgy"></clipPath><clipPath id="nonForecastMasktz7x3xgy"></clipPath><clipPath id="gridRectMarkerMasktz7x3xgy"><rect id="SvgjsRect1115" width="503.164794921875" height="284.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1113" width="12.479119873046875" height="280.73" x="121.80580952962238" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1109)" class="apexcharts-xcrosshairs" y2="280.73" filter="none" fill-opacity="0.9" x1="121.80580952962238" x2="121.80580952962238"></rect><g id="SvgjsG1149" class="apexcharts-grid"><g id="SvgjsG1150" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1154" x1="0" y1="70.1825" x2="499.164794921875" y2="70.1825" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1155" x1="0" y1="140.365" x2="499.164794921875" y2="140.365" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1156" x1="0" y1="210.5475" x2="499.164794921875" y2="210.5475" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1151" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1159" x1="0" y1="280.73" x2="499.164794921875" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1158" x1="0" y1="1" x2="0" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1152" class="apexcharts-grid-borders"><line id="SvgjsLine1153" x1="0" y1="0" x2="499.164794921875" y2="0" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1157" x1="0" y1="280.73" x2="499.164794921875" y2="280.73" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1116" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1117" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath1122" d="M 29.11794637044271 274.731 L 29.11794637044271 183.79666666666668 C 29.11794637044271 180.79666666666668 32.11794637044271 177.79666666666668 35.11794637044271 177.79666666666668 L 35.11794637044271 177.79666666666668 C 37.357506306966144 177.79666666666668 39.597066243489586 180.79666666666668 39.597066243489586 183.79666666666668 L 39.597066243489586 274.731 C 39.597066243489586 277.731 36.597066243489586 280.731 33.597066243489586 280.731 L 33.597066243489586 280.731 C 31.357506306966147 280.731 29.11794637044271 277.731 29.11794637044271 274.731 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 29.11794637044271 274.731 L 29.11794637044271 183.79666666666668 C 29.11794637044271 180.79666666666668 32.11794637044271 177.79666666666668 35.11794637044271 177.79666666666668 L 35.11794637044271 177.79666666666668 C 37.357506306966144 177.79666666666668 39.597066243489586 180.79666666666668 39.597066243489586 183.79666666666668 L 39.597066243489586 274.731 C 39.597066243489586 277.731 36.597066243489586 280.731 33.597066243489586 280.731 L 33.597066243489586 280.731 C 31.357506306966147 280.731 29.11794637044271 277.731 29.11794637044271 274.731 Z " pathFrom="M 29.11794637044271 280.731 L 29.11794637044271 280.731 L 39.597066243489586 280.731 L 39.597066243489586 280.731 L 39.597066243489586 280.731 L 39.597066243489586 280.731 L 39.597066243489586 280.731 L 29.11794637044271 280.731 Z" cy="177.79566666666668" cx="111.31207885742188" j="0" val="44" barHeight="102.93433333333334" barWidth="12.479119873046875"></path><path id="SvgjsPath1124" d="M 112.31207885742188 274.731 L 112.31207885742188 158.06308333333334 C 112.31207885742188 155.06308333333334 115.31207885742188 152.06308333333334 118.31207885742188 152.06308333333334 L 118.31207885742188 152.06308333333334 C 120.55163879394532 152.06308333333334 122.79119873046875 155.06308333333334 122.79119873046875 158.06308333333334 L 122.79119873046875 274.731 C 122.79119873046875 277.731 119.79119873046875 280.731 116.79119873046875 280.731 L 116.79119873046875 280.731 C 114.55163879394532 280.731 112.31207885742188 277.731 112.31207885742188 274.731 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 112.31207885742188 274.731 L 112.31207885742188 158.06308333333334 C 112.31207885742188 155.06308333333334 115.31207885742188 152.06308333333334 118.31207885742188 152.06308333333334 L 118.31207885742188 152.06308333333334 C 120.55163879394532 152.06308333333334 122.79119873046875 155.06308333333334 122.79119873046875 158.06308333333334 L 122.79119873046875 274.731 C 122.79119873046875 277.731 119.79119873046875 280.731 116.79119873046875 280.731 L 116.79119873046875 280.731 C 114.55163879394532 280.731 112.31207885742188 277.731 112.31207885742188 274.731 Z " pathFrom="M 112.31207885742188 280.731 L 112.31207885742188 280.731 L 122.79119873046875 280.731 L 122.79119873046875 280.731 L 122.79119873046875 280.731 L 122.79119873046875 280.731 L 122.79119873046875 280.731 L 112.31207885742188 280.731 Z" cy="152.06208333333333" cx="194.50621134440104" j="1" val="55" barHeight="128.66791666666668" barWidth="12.479119873046875"></path><path id="SvgjsPath1126" d="M 195.50621134440104 274.731 L 195.50621134440104 153.38425 C 195.50621134440104 150.38425 198.50621134440104 147.38425 201.50621134440104 147.38425 L 201.50621134440104 147.38425 C 203.7457712809245 147.38425 205.9853312174479 150.38425 205.9853312174479 153.38425 L 205.9853312174479 274.731 C 205.9853312174479 277.731 202.9853312174479 280.731 199.9853312174479 280.731 L 199.9853312174479 280.731 C 197.7457712809245 280.731 195.50621134440104 277.731 195.50621134440104 274.731 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 195.50621134440104 274.731 L 195.50621134440104 153.38425 C 195.50621134440104 150.38425 198.50621134440104 147.38425 201.50621134440104 147.38425 L 201.50621134440104 147.38425 C 203.7457712809245 147.38425 205.9853312174479 150.38425 205.9853312174479 153.38425 L 205.9853312174479 274.731 C 205.9853312174479 277.731 202.9853312174479 280.731 199.9853312174479 280.731 L 199.9853312174479 280.731 C 197.7457712809245 280.731 195.50621134440104 277.731 195.50621134440104 274.731 Z " pathFrom="M 195.50621134440104 280.731 L 195.50621134440104 280.731 L 205.9853312174479 280.731 L 205.9853312174479 280.731 L 205.9853312174479 280.731 L 205.9853312174479 280.731 L 205.9853312174479 280.731 L 195.50621134440104 280.731 Z" cy="147.38325" cx="277.7003438313802" j="2" val="57" barHeight="133.34675000000001" barWidth="12.479119873046875"></path><path id="SvgjsPath1128" d="M 278.7003438313802 274.731 L 278.7003438313802 155.72366666666667 C 278.7003438313802 152.72366666666667 281.7003438313802 149.72366666666667 284.7003438313802 149.72366666666667 L 284.7003438313802 149.72366666666667 C 286.9399037679037 149.72366666666667 289.1794637044271 152.72366666666667 289.1794637044271 155.72366666666667 L 289.1794637044271 274.731 C 289.1794637044271 277.731 286.1794637044271 280.731 283.1794637044271 280.731 L 283.1794637044271 280.731 C 280.9399037679037 280.731 278.7003438313802 277.731 278.7003438313802 274.731 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 278.7003438313802 274.731 L 278.7003438313802 155.72366666666667 C 278.7003438313802 152.72366666666667 281.7003438313802 149.72366666666667 284.7003438313802 149.72366666666667 L 284.7003438313802 149.72366666666667 C 286.9399037679037 149.72366666666667 289.1794637044271 152.72366666666667 289.1794637044271 155.72366666666667 L 289.1794637044271 274.731 C 289.1794637044271 277.731 286.1794637044271 280.731 283.1794637044271 280.731 L 283.1794637044271 280.731 C 280.9399037679037 280.731 278.7003438313802 277.731 278.7003438313802 274.731 Z " pathFrom="M 278.7003438313802 280.731 L 278.7003438313802 280.731 L 289.1794637044271 280.731 L 289.1794637044271 280.731 L 289.1794637044271 280.731 L 289.1794637044271 280.731 L 289.1794637044271 280.731 L 278.7003438313802 280.731 Z" cy="149.72266666666667" cx="360.8944763183594" j="3" val="56" barHeight="131.00733333333335" barWidth="12.479119873046875"></path><path id="SvgjsPath1130" d="M 361.8944763183594 274.731 L 361.8944763183594 144.02658333333335 C 361.8944763183594 141.02658333333335 364.8944763183594 138.02658333333335 367.8944763183594 138.02658333333335 L 367.8944763183594 138.02658333333335 C 370.13403625488286 138.02658333333335 372.3735961914063 141.02658333333335 372.3735961914063 144.02658333333335 L 372.3735961914063 274.731 C 372.3735961914063 277.731 369.3735961914063 280.731 366.3735961914063 280.731 L 366.3735961914063 280.731 C 364.13403625488286 280.731 361.8944763183594 277.731 361.8944763183594 274.731 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 361.8944763183594 274.731 L 361.8944763183594 144.02658333333335 C 361.8944763183594 141.02658333333335 364.8944763183594 138.02658333333335 367.8944763183594 138.02658333333335 L 367.8944763183594 138.02658333333335 C 370.13403625488286 138.02658333333335 372.3735961914063 141.02658333333335 372.3735961914063 144.02658333333335 L 372.3735961914063 274.731 C 372.3735961914063 277.731 369.3735961914063 280.731 366.3735961914063 280.731 L 366.3735961914063 280.731 C 364.13403625488286 280.731 361.8944763183594 277.731 361.8944763183594 274.731 Z " pathFrom="M 361.8944763183594 280.731 L 361.8944763183594 280.731 L 372.3735961914063 280.731 L 372.3735961914063 280.731 L 372.3735961914063 280.731 L 372.3735961914063 280.731 L 372.3735961914063 280.731 L 361.8944763183594 280.731 Z" cy="138.02558333333334" cx="444.0886088053386" j="4" val="61" barHeight="142.70441666666667" barWidth="12.479119873046875"></path><path id="SvgjsPath1132" d="M 445.0886088053386 274.731 L 445.0886088053386 151.04483333333334 C 445.0886088053386 148.04483333333334 448.0886088053386 145.04483333333334 451.0886088053386 145.04483333333334 L 451.0886088053386 145.04483333333334 C 453.32816874186204 145.04483333333334 455.5677286783855 148.04483333333334 455.5677286783855 151.04483333333334 L 455.5677286783855 274.731 C 455.5677286783855 277.731 452.5677286783855 280.731 449.5677286783855 280.731 L 449.5677286783855 280.731 C 447.32816874186204 280.731 445.0886088053386 277.731 445.0886088053386 274.731 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 445.0886088053386 274.731 L 445.0886088053386 151.04483333333334 C 445.0886088053386 148.04483333333334 448.0886088053386 145.04483333333334 451.0886088053386 145.04483333333334 L 451.0886088053386 145.04483333333334 C 453.32816874186204 145.04483333333334 455.5677286783855 148.04483333333334 455.5677286783855 151.04483333333334 L 455.5677286783855 274.731 C 455.5677286783855 277.731 452.5677286783855 280.731 449.5677286783855 280.731 L 449.5677286783855 280.731 C 447.32816874186204 280.731 445.0886088053386 277.731 445.0886088053386 274.731 Z " pathFrom="M 445.0886088053386 280.731 L 445.0886088053386 280.731 L 455.5677286783855 280.731 L 455.5677286783855 280.731 L 455.5677286783855 280.731 L 455.5677286783855 280.731 L 455.5677286783855 280.731 L 445.0886088053386 280.731 Z" cy="145.04383333333334" cx="527.2827412923177" j="5" val="58" barHeight="135.68616666666668" barWidth="12.479119873046875"></path><g id="SvgjsG1119" class="apexcharts-bar-goals-markers"><g id="SvgjsG1121" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1123" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1125" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1127" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1129" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1131" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g></g><g id="SvgjsG1120" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1133" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath1138" d="M 41.597066243489586 274.731 L 41.597066243489586 108.93533333333335 C 41.597066243489586 105.93533333333335 44.597066243489586 102.93533333333335 47.597066243489586 102.93533333333335 L 47.597066243489586 102.93533333333335 C 49.83662618001303 102.93533333333335 52.07618611653646 105.93533333333335 52.07618611653646 108.93533333333335 L 52.07618611653646 274.731 C 52.07618611653646 277.731 49.07618611653646 280.731 46.07618611653646 280.731 L 46.07618611653646 280.731 C 43.83662618001303 280.731 41.597066243489586 277.731 41.597066243489586 274.731 Z " fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 41.597066243489586 274.731 L 41.597066243489586 108.93533333333335 C 41.597066243489586 105.93533333333335 44.597066243489586 102.93533333333335 47.597066243489586 102.93533333333335 L 47.597066243489586 102.93533333333335 C 49.83662618001303 102.93533333333335 52.07618611653646 105.93533333333335 52.07618611653646 108.93533333333335 L 52.07618611653646 274.731 C 52.07618611653646 277.731 49.07618611653646 280.731 46.07618611653646 280.731 L 46.07618611653646 280.731 C 43.83662618001303 280.731 41.597066243489586 277.731 41.597066243489586 274.731 Z " pathFrom="M 41.597066243489586 280.731 L 41.597066243489586 280.731 L 52.07618611653646 280.731 L 52.07618611653646 280.731 L 52.07618611653646 280.731 L 52.07618611653646 280.731 L 52.07618611653646 280.731 L 41.597066243489586 280.731 Z" cy="102.93433333333334" cx="123.79119873046875" j="0" val="76" barHeight="177.79566666666668" barWidth="12.479119873046875"></path><path id="SvgjsPath1140" d="M 124.79119873046875 274.731 L 124.79119873046875 87.88058333333333 C 124.79119873046875 84.88058333333333 127.79119873046875 81.88058333333333 130.79119873046875 81.88058333333333 L 130.79119873046875 81.88058333333333 C 133.0307586669922 81.88058333333333 135.27031860351562 84.88058333333333 135.27031860351562 87.88058333333333 L 135.27031860351562 274.731 C 135.27031860351562 277.731 132.27031860351562 280.731 129.27031860351562 280.731 L 129.27031860351562 280.731 C 127.03075866699218 280.731 124.79119873046875 277.731 124.79119873046875 274.731 Z " fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 124.79119873046875 274.731 L 124.79119873046875 87.88058333333333 C 124.79119873046875 84.88058333333333 127.79119873046875 81.88058333333333 130.79119873046875 81.88058333333333 L 130.79119873046875 81.88058333333333 C 133.0307586669922 81.88058333333333 135.27031860351562 84.88058333333333 135.27031860351562 87.88058333333333 L 135.27031860351562 274.731 C 135.27031860351562 277.731 132.27031860351562 280.731 129.27031860351562 280.731 L 129.27031860351562 280.731 C 127.03075866699218 280.731 124.79119873046875 277.731 124.79119873046875 274.731 Z " pathFrom="M 124.79119873046875 280.731 L 124.79119873046875 280.731 L 135.27031860351562 280.731 L 135.27031860351562 280.731 L 135.27031860351562 280.731 L 135.27031860351562 280.731 L 135.27031860351562 280.731 L 124.79119873046875 280.731 Z" cy="81.87958333333333" cx="206.9853312174479" j="1" val="85" barHeight="198.8504166666667" barWidth="12.479119873046875"></path><path id="SvgjsPath1142" d="M 207.9853312174479 274.731 L 207.9853312174479 50.44991666666666 C 207.9853312174479 47.44991666666666 210.9853312174479 44.44991666666666 213.9853312174479 44.44991666666666 L 213.9853312174479 44.44991666666666 C 216.22489115397133 44.44991666666666 218.46445109049478 47.44991666666666 218.46445109049478 50.44991666666666 L 218.46445109049478 274.731 C 218.46445109049478 277.731 215.46445109049478 280.731 212.46445109049478 280.731 L 212.46445109049478 280.731 C 210.22489115397133 280.731 207.9853312174479 277.731 207.9853312174479 274.731 Z " fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 207.9853312174479 274.731 L 207.9853312174479 50.44991666666666 C 207.9853312174479 47.44991666666666 210.9853312174479 44.44991666666666 213.9853312174479 44.44991666666666 L 213.9853312174479 44.44991666666666 C 216.22489115397133 44.44991666666666 218.46445109049478 47.44991666666666 218.46445109049478 50.44991666666666 L 218.46445109049478 274.731 C 218.46445109049478 277.731 215.46445109049478 280.731 212.46445109049478 280.731 L 212.46445109049478 280.731 C 210.22489115397133 280.731 207.9853312174479 277.731 207.9853312174479 274.731 Z " pathFrom="M 207.9853312174479 280.731 L 207.9853312174479 280.731 L 218.46445109049478 280.731 L 218.46445109049478 280.731 L 218.46445109049478 280.731 L 218.46445109049478 280.731 L 218.46445109049478 280.731 L 207.9853312174479 280.731 Z" cy="44.44891666666666" cx="290.1794637044271" j="2" val="101" barHeight="236.28108333333336" barWidth="12.479119873046875"></path><path id="SvgjsPath1144" d="M 291.1794637044271 274.731 L 291.1794637044271 57.468166666666654 C 291.1794637044271 54.468166666666654 294.1794637044271 51.468166666666654 297.1794637044271 51.468166666666654 L 297.1794637044271 51.468166666666654 C 299.41902364095057 51.468166666666654 301.658583577474 54.468166666666654 301.658583577474 57.468166666666654 L 301.658583577474 274.731 C 301.658583577474 277.731 298.658583577474 280.731 295.658583577474 280.731 L 295.658583577474 280.731 C 293.41902364095057 280.731 291.1794637044271 277.731 291.1794637044271 274.731 Z " fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 291.1794637044271 274.731 L 291.1794637044271 57.468166666666654 C 291.1794637044271 54.468166666666654 294.1794637044271 51.468166666666654 297.1794637044271 51.468166666666654 L 297.1794637044271 51.468166666666654 C 299.41902364095057 51.468166666666654 301.658583577474 54.468166666666654 301.658583577474 57.468166666666654 L 301.658583577474 274.731 C 301.658583577474 277.731 298.658583577474 280.731 295.658583577474 280.731 L 295.658583577474 280.731 C 293.41902364095057 280.731 291.1794637044271 277.731 291.1794637044271 274.731 Z " pathFrom="M 291.1794637044271 280.731 L 291.1794637044271 280.731 L 301.658583577474 280.731 L 301.658583577474 280.731 L 301.658583577474 280.731 L 301.658583577474 280.731 L 301.658583577474 280.731 L 291.1794637044271 280.731 Z" cy="51.46716666666666" cx="373.3735961914063" j="3" val="98" barHeight="229.26283333333336" barWidth="12.479119873046875"></path><path id="SvgjsPath1146" d="M 374.3735961914063 274.731 L 374.3735961914063 83.20175 C 374.3735961914063 80.20175 377.3735961914063 77.20175 380.3735961914063 77.20175 L 380.3735961914063 77.20175 C 382.61315612792976 77.20175 384.8527160644532 80.20175 384.8527160644532 83.20175 L 384.8527160644532 274.731 C 384.8527160644532 277.731 381.8527160644532 280.731 378.8527160644532 280.731 L 378.8527160644532 280.731 C 376.61315612792976 280.731 374.3735961914063 277.731 374.3735961914063 274.731 Z " fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 374.3735961914063 274.731 L 374.3735961914063 83.20175 C 374.3735961914063 80.20175 377.3735961914063 77.20175 380.3735961914063 77.20175 L 380.3735961914063 77.20175 C 382.61315612792976 77.20175 384.8527160644532 80.20175 384.8527160644532 83.20175 L 384.8527160644532 274.731 C 384.8527160644532 277.731 381.8527160644532 280.731 378.8527160644532 280.731 L 378.8527160644532 280.731 C 376.61315612792976 280.731 374.3735961914063 277.731 374.3735961914063 274.731 Z " pathFrom="M 374.3735961914063 280.731 L 374.3735961914063 280.731 L 384.8527160644532 280.731 L 384.8527160644532 280.731 L 384.8527160644532 280.731 L 384.8527160644532 280.731 L 384.8527160644532 280.731 L 374.3735961914063 280.731 Z" cy="77.20075" cx="456.5677286783855" j="4" val="87" barHeight="203.52925000000002" barWidth="12.479119873046875"></path><path id="SvgjsPath1148" d="M 457.5677286783855 274.731 L 457.5677286783855 41.09225 C 457.5677286783855 38.09225 460.5677286783855 35.09225 463.5677286783855 35.09225 L 463.5677286783855 35.09225 C 465.80728861490894 35.09225 468.0468485514324 38.09225 468.0468485514324 41.09225 L 468.0468485514324 274.731 C 468.0468485514324 277.731 465.0468485514324 280.731 462.0468485514324 280.731 L 462.0468485514324 280.731 C 459.80728861490894 280.731 457.5677286783855 277.731 457.5677286783855 274.731 Z " fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasktz7x3xgy)" pathTo="M 457.5677286783855 274.731 L 457.5677286783855 41.09225 C 457.5677286783855 38.09225 460.5677286783855 35.09225 463.5677286783855 35.09225 L 463.5677286783855 35.09225 C 465.80728861490894 35.09225 468.0468485514324 38.09225 468.0468485514324 41.09225 L 468.0468485514324 274.731 C 468.0468485514324 277.731 465.0468485514324 280.731 462.0468485514324 280.731 L 462.0468485514324 280.731 C 459.80728861490894 280.731 457.5677286783855 277.731 457.5677286783855 274.731 Z " pathFrom="M 457.5677286783855 280.731 L 457.5677286783855 280.731 L 468.0468485514324 280.731 L 468.0468485514324 280.731 L 468.0468485514324 280.731 L 468.0468485514324 280.731 L 468.0468485514324 280.731 L 457.5677286783855 280.731 Z" cy="35.09125" cx="539.7618611653646" j="5" val="105" barHeight="245.63875000000002" barWidth="12.479119873046875"></path><g id="SvgjsG1135" class="apexcharts-bar-goals-markers"><g id="SvgjsG1137" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1139" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1141" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1143" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1145" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g><g id="SvgjsG1147" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktz7x3xgy)"></g></g><g id="SvgjsG1136" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1118" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g><g id="SvgjsG1134" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g></g><line id="SvgjsLine1160" x1="0" y1="0" x2="499.164794921875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1161" x1="0" y1="0" x2="499.164794921875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1162" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1163" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1165" font-family="inherit" x="41.597066243489586" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1166">Feb</tspan><title>Feb</title></text><text id="SvgjsText1168" font-family="inherit" x="124.79119873046875" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1169">Mar</tspan><title>Mar</title></text><text id="SvgjsText1171" font-family="inherit" x="207.9853312174479" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1172">Apr</tspan><title>Apr</title></text><text id="SvgjsText1174" font-family="inherit" x="291.1794637044271" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1175">May</tspan><title>May</title></text><text id="SvgjsText1177" font-family="inherit" x="374.3735961914063" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1178">Jun</tspan><title>Jun</title></text><text id="SvgjsText1180" font-family="inherit" x="457.5677286783855" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1181">Jul</tspan><title>Jul</title></text></g></g><g id="SvgjsG1199" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1200" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1201" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" bis_skin_checked="1" style="left: 175.881px; top: 76.5px;"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;" bis_skin_checked="1">Mar</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;" bis_skin_checked="1"><span class="apexcharts-tooltip-marker" style="background-color: rgb(219, 223, 233);"></span><div class="apexcharts-tooltip-text" bis_skin_checked="1" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-y-label">Revenue: </span><span class="apexcharts-tooltip-text-y-value">$85 thousands</span></div><div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2; display: none;" bis_skin_checked="1"><span class="apexcharts-tooltip-marker" style="background-color: rgb(219, 223, 233);"></span><div class="apexcharts-tooltip-text" bis_skin_checked="1" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-y-label">Revenue: </span><span class="apexcharts-tooltip-text-y-value">$85 thousands</span></div><div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div></div></div></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>
<!--end::Charts Widget 1-->
   
        
        <!--begin::List Widget 5-->
<div class="card mb-5 mb-xxl-8" bis_skin_checked="1">
    <!--begin::Header-->
    <div class="card-header align-items-center border-0 mt-4" bis_skin_checked="1">
        <h3 class="card-title align-items-start flex-column">
            <span class="fw-bold mb-2 text-gray-900">Activities</span>            
            <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
        </h3>

        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
            

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6596a8f5f0e02" bis_skin_checked="1">
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
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6596a8f5f0e02" data-allow-clear="true" data-select2-id="select2-data-11-v9t8" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-12-f6au" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-2svs-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-2svs-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
<!--end::Menu 1-->            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-5" bis_skin_checked="1">
        <!--begin::Timeline-->
        <div class="timeline-label" bis_skin_checked="1">
            <!--begin::Item-->
            <div class="timeline-item" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="timeline-label fw-bold text-gray-800 fs-6" bis_skin_checked="1">08:42</div>
                <!--end::Label-->

                <!--begin::Badge-->
                <div class="timeline-badge" bis_skin_checked="1">
                    <i class="fa fa-genderless text-warning fs-1"></i>
                </div>
                <!--end::Badge-->

                <!--begin::Text-->
                <div class="fw-mormal timeline-content text-muted ps-3" bis_skin_checked="1">
                    Outlines keep you honest. And keep structure
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="timeline-item" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="timeline-label fw-bold text-gray-800 fs-6" bis_skin_checked="1">10:00</div>
                <!--end::Label-->

                <!--begin::Badge-->
                <div class="timeline-badge" bis_skin_checked="1">
                    <i class="fa fa-genderless text-success fs-1"></i>
                </div>
                <!--end::Badge-->

                <!--begin::Content-->
                <div class="timeline-content d-flex" bis_skin_checked="1">
                    <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="timeline-item" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="timeline-label fw-bold text-gray-800 fs-6" bis_skin_checked="1">14:37</div>
                <!--end::Label-->

                <!--begin::Badge-->
                <div class="timeline-badge" bis_skin_checked="1">
                    <i class="fa fa-genderless text-danger fs-1"></i>
                </div>
                <!--end::Badge-->

                <!--begin::Desc-->
                <div class="timeline-content fw-bold text-gray-800 ps-3" bis_skin_checked="1">
                    Make deposit
                    <a href="#" class="text-primary">USD 700</a>.
                    to ESL
                </div>
                <!--end::Desc-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="timeline-item" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="timeline-label fw-bold text-gray-800 fs-6" bis_skin_checked="1">16:50</div>
                <!--end::Label-->

                <!--begin::Badge-->
                <div class="timeline-badge" bis_skin_checked="1">
                    <i class="fa fa-genderless text-primary fs-1"></i>
                </div>
                <!--end::Badge-->

                <!--begin::Text-->
                <div class="timeline-content fw-mormal text-muted ps-3" bis_skin_checked="1">
                    Indulging in poorly driving and keep structure keep great
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="timeline-item" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="timeline-label fw-bold text-gray-800 fs-6" bis_skin_checked="1">21:03</div>
                <!--end::Label-->

                <!--begin::Badge-->
                <div class="timeline-badge" bis_skin_checked="1">
                    <i class="fa fa-genderless text-danger fs-1"></i>
                </div>
                <!--end::Badge-->

                <!--begin::Desc-->
                <div class="timeline-content fw-semibold text-gray-800 ps-3" bis_skin_checked="1">
                    New order placed <a href="#" class="text-primary">#XF-2356</a>.
                </div>
                <!--end::Desc-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="timeline-item" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="timeline-label fw-bold text-gray-800 fs-6" bis_skin_checked="1">16:50</div>
                <!--end::Label-->

                <!--begin::Badge-->
                <div class="timeline-badge" bis_skin_checked="1">
                    <i class="fa fa-genderless text-primary fs-1"></i>
                </div>
                <!--end::Badge-->

                <!--begin::Text-->
                <div class="timeline-content fw-mormal text-muted ps-3" bis_skin_checked="1">
                    Indulging in poorly driving and keep structure keep great
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="timeline-item" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="timeline-label fw-bold text-gray-800 fs-6" bis_skin_checked="1">21:03</div>
                <!--end::Label-->

                <!--begin::Badge-->
                <div class="timeline-badge" bis_skin_checked="1">
                    <i class="fa fa-genderless text-danger fs-1"></i>
                </div>
                <!--end::Badge-->

                <!--begin::Desc-->
                <div class="timeline-content fw-semibold text-gray-800 ps-3" bis_skin_checked="1">
                    New order placed <a href="#" class="text-primary">#XF-2356</a>.
                </div>
                <!--end::Desc-->
            </div>
            <!--end::Item-->

                            <!--begin::Item-->
                <div class="timeline-item" bis_skin_checked="1">
                    <!--begin::Label-->
                    <div class="timeline-label fw-bold text-gray-800 fs-6" bis_skin_checked="1">10:30</div>
                    <!--end::Label-->

                    <!--begin::Badge-->
                    <div class="timeline-badge" bis_skin_checked="1">
                        <i class="fa fa-genderless text-success fs-1"></i>
                    </div>
                    <!--end::Badge-->

                    <!--begin::Text-->
                    <div class="timeline-content fw-mormal text-muted ps-3" bis_skin_checked="1">
                        Finance KPI Mobile app launch preparion meeting
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                    </div>
        <!--end::Timeline-->
    </div>
    <!--end: Card Body-->
</div>
<!--end: List Widget 5-->
        
    </div>
    </div> 
    <!-- row end -->

<!-- Recent Statistics right section end -->


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


<script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
<script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
<script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
<script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
<script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>


<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
<script>
    $(document).ready(function(){
    $('.deal-type-options label').click(function(event){
        //remove all pre-existing active classes
        $('.deal-type-options label').removeClass('active');

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
<div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" bis_skin_checked="1" data-select2-id="select2-data-kt_modal_offer_a_deal" aria-modal="true" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px" bis_skin_checked="1">
        <!--begin::Modal content-->
        <div class="modal-content" bis_skin_checked="1">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between" bis_skin_checked="1">
                <!--begin::Modal title-->
                <h2>Offer a Deal</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5" bis_skin_checked="1" data-select2-id="select2-data-127-xsgn"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp"></grammarly-extension>
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column first" id="kt_modal_offer_a_deal_stepper" data-kt-stepper="true" bis_skin_checked="1">
                    <!--begin::Nav-->
                    <div class="stepper-nav justify-content-center py-2" bis_skin_checked="1">
                        <!--begin::Step 1-->
                        <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav" bis_skin_checked="1">
                            <h3 class="stepper-title">
                                Deal Type
                            </h3>
                        </div>
                        <!--end::Step 1-->

                        <!--begin::Step 2-->
                        <div class="stepper-item me-5 me-md-15 pending" data-kt-stepper-element="nav" bis_skin_checked="1">
                            <h3 class="stepper-title">
                                Deal Details
                            </h3>
                        </div>
                        <!--end::Step 2-->

                        <!--begin::Step 3-->
                        <div class="stepper-item me-5 me-md-15 pending" data-kt-stepper-element="nav" bis_skin_checked="1">
                            <h3 class="stepper-title">
                                Finance Settings
                            </h3>
                        </div>
                        <!--end::Step 3-->

                        <!--begin::Step 4-->
                        <div class="stepper-item pending" data-kt-stepper-element="nav" bis_skin_checked="1">
                            <h3 class="stepper-title">
                                Completed
                            </h3>
                        </div>
                        <!--end::Step 4-->
                    </div>
                    <!--end::Nav-->

                    <!--begin::Form-->
                    <form class="mx-auto mw-500px w-100 pt-15 pb-10 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_modal_offer_a_deal_form">
                        <!--begin::Type-->
<div class="current" data-kt-stepper-element="content" bis_skin_checked="1">
    <!--begin::Wrapper-->
    <div class="w-100" bis_skin_checked="1">
        <!--begin::Heading-->
        <div class="mb-13" bis_skin_checked="1">
            <!--begin::Title-->
            <h2 class="mb-3">Deal Type</h2>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-5" bis_skin_checked="1">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bold">FAQ Page</a>.
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-15 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid deal-type-options" data-kt-buttons="true" data-kt-initialized="1" bis_skin_checked="1">
            <!--begin::Option-->
            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                <!--begin::Input-->
                <input class="btn-check" type="radio" checked="checked" name="offer_type" value="1">
                <!--end::Input-->

                <!--begin::Label-->
                <span class="d-flex">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-profile-circle fs-3hx"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    <!--end::Icon-->

                    <!--begin::Info-->
                    <span class="ms-4">
                        <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal Deal</span>

                        <span class="fw-semibold fs-4 text-muted">
                            If you need more info, please check it out
                        </span>
                    </span>
                    <!--end::Info-->
                </span>
                <!--end::Label-->
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                <!--begin::Input-->
                <input class="btn-check" type="radio" name="offer_type" value="2">
                <!--end::Input-->

                <!--begin::Label-->
                <span class="d-flex">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-element-11 fs-3hx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                    <!--end::Icon-->

                    <!--begin::Info-->
                    <span class="ms-4">
                        <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Corporate Deal</span>

                        <span class="fw-semibold fs-4 text-muted">
                            Create corporate account to manage users
                        </span>
                    </span>
                    <!--end::Info-->
                </span>
                <!--end::Label-->
            </label>
            <!--end::Option-->
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex justify-content-end" bis_skin_checked="1">
            <button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
                <span class="indicator-label">
                    Offer Details
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Type-->
                        <!--begin::Details-->
<div data-kt-stepper-element="content" bis_skin_checked="1" class="pending" data-select2-id="select2-data-126-pipp">
    <!--begin::Wrapper-->
    <div class="w-100" bis_skin_checked="1" data-select2-id="select2-data-125-nq5y">
        <!--begin::Heading-->
        <div class="mb-13" bis_skin_checked="1">
            <!--begin::Title-->
            <h2 class="mb-3">Deal Details</h2>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-5" bis_skin_checked="1">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bold">FAQ Page</a>.
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid" bis_skin_checked="1">
            <!--begin::Label-->
            <label class="required fs-6 fw-semibold mb-2">Customer</label>
            <!--end::Label-->

            <!--begin::Input-->
            <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" name="details_customer" data-select2-id="select2-data-19-3jdr" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option data-select2-id="select2-data-129-kv5m"></option>
                <option value="1" selected="" data-select2-id="select2-data-21-dflu">Keenthemes</option>
                <option value="2" data-select2-id="select2-data-130-q7zj">CRM App</option>
            </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="ltr" data-select2-id="select2-data-20-vy64" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-details_customer-vs-container" aria-controls="select2-details_customer-vs-container"><span class="select2-selection__rendered" id="select2-details_customer-vs-container" role="textbox" aria-readonly="true" title="Keenthemes">Keenthemes</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <!--end::Input-->
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid" bis_skin_checked="1">
            <!--begin::Label-->
            <label class="required fs-6 fw-semibold mb-2">Deal Title</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" placeholder="Enter Deal Title" name="details_title" value="Marketing Campaign">
            <!--end::Input-->
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-8" bis_skin_checked="1">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">Deal Description</label>
            <!--end::Label-->

            <!--begin::Label-->
            <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description" name="details_description" spellcheck="false">                Experience share market at your fingertips with TICK PRO stock investment mobile trading app
            </textarea>
            <!--end::Label-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid" bis_skin_checked="1">
            <label class="required fs-6 fw-semibold mb-2">Activation Date</label>
            <div class="position-relative d-flex align-items-center" bis_skin_checked="1">
                <!--begin::Icon-->
                <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>                <!--end::Icon-->

                <!--begin::Datepicker-->
                <input class="form-control form-control-solid ps-12 flatpickr-input" placeholder="Pick date range" name="details_activation_date" type="text" readonly="readonly">
                <!--end::Datepicker-->
            </div>
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-15 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid" bis_skin_checked="1">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="me-5" bis_skin_checked="1">
                    <label class="required fs-6 fw-semibold">Notifications</label>
                    <div class="fs-7 fw-semibold text-muted" bis_skin_checked="1">Allow Notifications by Phone or Email</div>
                </div>
                <!--end::Label-->
                
                <!--begin::Checkboxes-->
                <div class="d-flex" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-10">
                        <!--begin::Input-->
                        <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="details_notifications[]">
                        <!--end::Input-->

                        <!--begin::Label-->
                        <span class="form-check-label fw-semibold">
                            Email
                        </span>
                        <!--end::Label-->
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="" name="details_notifications[]">
                        <!--end::Input-->

                        <!--begin::Label-->
                        <span class="form-check-label fw-semibold">
                            Phone
                        </span>
                        <!--end::Label-->
                    </label>
                    <!--end::Checkbox-->
                </div>
                <!--end::Checkboxes-->
            </div>
            <!--begin::Wrapper-->
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex flex-stack" bis_skin_checked="1">
            <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="details-previous">
                Deal Type
            </button>
            
            <button type="button" class="btn btn-lg btn-primary" data-kt-element="details-next">
                <span class="indicator-label">
                Financing
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Details-->
                        <!--begin::Budget-->
<div data-kt-stepper-element="content" bis_skin_checked="1" class="pending">
    <!--begin::Wrapper-->
    <div class="w-100" bis_skin_checked="1">
        <!--begin::Heading-->
        <div class="mb-13" bis_skin_checked="1">
            <!--begin::Title-->
            <h2 class="mb-3">Finance</h2>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-5" bis_skin_checked="1">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bold">FAQ Page</a>.
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-8 fv-plugins-icon-container" bis_skin_checked="1">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                <span class="required">Setup Budget</span>
                
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
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>            </label>
            <!--end::Label-->

            <!--begin::Dialer-->
            <div class="position-relative w-lg-250px" id="kt_modal_finance_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2" bis_skin_checked="1">

                <!--begin::Decrease control-->
                <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                    <i class="ki-duotone ki-minus-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                </button>
                <!--end::Decrease control-->

                <!--begin::Input control-->
                <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="finance_setup" readonly="" value="$50">
                <!--end::Input control-->

                <!--begin::Increase control-->
                <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                    <i class="ki-duotone ki-plus-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                </button>
                <!--end::Increase control-->
            </div>
            <!--end::Dialer-->  
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid" bis_skin_checked="1">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">Budget Usage</label>
            <!--end::Label-->

            <!--begin::Row-->
            <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1" bis_skin_checked="1">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-12 col-xxl-6" bis_skin_checked="1">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                            <input class="form-check-input" type="radio" name="finance_usage" value="1" checked="checked">
                        </span>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <span class="ms-5">
                            <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise Usage</span>

                            <span class="fw-semibold fs-7 text-gray-600">
                                Withdraw money to your bank account per transaction under $50,000 budget
                            </span>
                        </span>
                        <!--end::Info-->
                    </label>
                    <!--end::Option-->
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-md-6 col-lg-12 col-xxl-6" bis_skin_checked="1">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 active" data-kt-button="true">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                            <input class="form-check-input" type="radio" name="finance_usage" value="2">
                        </span>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <span class="ms-5">
                            <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme Usage</span>
                            <span class="fw-semibold fs-7 text-gray-600">
                                Withdraw money to your bank account per transaction under $50,000 budget
                            </span>
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

        <!--begin::Input group-->
        <div class="fv-row mb-15 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid" bis_skin_checked="1">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack" bis_skin_checked="1">
                <!--begin::Label-->
                <div class="me-5" bis_skin_checked="1">
                    <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                    <div class="fs-7 fw-semibold text-muted" bis_skin_checked="1">If you need more info, please check budget planning</div>
                </div>
                <!--end::Label-->

                <!--begin::Switch-->
                <label class="form-check form-switch form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1" name="finance_allow" checked="checked">
                    <span class="form-check-label fw-semibold text-muted">
                        Allowed
                    </span>
                </label>
                <!--end::Switch-->
            </div>
            <!--end::Wrapper-->
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex flex-stack" bis_skin_checked="1">
            <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="finance-previous">
                Project Settings
            </button>
            
            <button type="button" class="btn btn-lg btn-primary" data-kt-element="finance-next">
                <span class="indicator-label">
                    Build Team
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Budget-->
                        <!--begin::Complete-->
<div data-kt-stepper-element="content" bis_skin_checked="1" class="pending">
    <!--begin::Wrapper-->
    <div class="w-100" bis_skin_checked="1">
        <!--begin::Heading-->
        <div class="mb-13" bis_skin_checked="1">
            <!--begin::Title-->
            <h2 class="mb-3">Deal Created!</h2>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-5" bis_skin_checked="1">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bold">FAQ Page</a>.
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

         <!--begin::Actions-->
         <div class="d-flex flex-center pb-20" bis_skin_checked="1">
            <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">
                Create New Deal
            </button>

            <a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" data-bs-original-title="Coming Soon" data-kt-initialized="1">
                View Deal
            </a>
        </div>
        <!--end::Actions-->

        <!--begin::Illustration-->
        <div class="text-center px-4" bis_skin_checked="1">
            <img src="/metronic8/demo1/assets/media/illustrations/sketchy-1/20.png" alt="" class="mw-100 mh-300px"> 
        </div>
        <!--end::Illustration-->
    </div>
</div>
<!--end::Complete-->                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>