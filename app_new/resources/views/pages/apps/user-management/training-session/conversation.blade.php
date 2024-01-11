<x-default-layout>

    @section('title')
        Conversation
    @endsection

  



    <div class="app-main flex-column flex-row-fluid " id="kt_app_main" bis_skin_checked="1">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid" bis_skin_checked="1">
                                            
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " bis_skin_checked="1">

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-containers  container-xxl d-flex flex-stack " bis_skin_checked="1">
            
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
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_659d146d7c89e" bis_skin_checked="1">
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
                <select class="form-select form-select-solid" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_659d146d7c89e" data-allow-clear="true" data-select2-id="select2-data-7-z0yt" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option>Select option</option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select>
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
        <div id="kt_app_content_container" class="app-containers container-xxl " bis_skin_checked="1">
            <!--begin::Layout-->
<div class="d-flex flex-column flex-lg-row" bis_skin_checked="1">
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0" bis_skin_checked="1">
        <!--begin::Contacts-->
<div class="card card-flush" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header pt-7" id="kt_chat_contacts_header" bis_skin_checked="1">
        <!--begin::Form-->
        <form class="w-100 position-relative" autocomplete="off">	
            <!--begin::Icon-->
            <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i>            <!--end::Icon-->

            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid px-13" name="search" value="" placeholder="Search by username or email...">
            <!--end::Input-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-5" id="kt_chat_contacts_body" bis_skin_checked="1">
        <!--begin::List-->
        <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height: 187px;" bis_skin_checked="1">

                                                        <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><span class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">M</span></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">melody@altbox.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">1 day</span>

                                                    <span class="badge badge-sm badge-circle badge-light-success">2</span>
                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none" bis_skin_checked="1"></div>
                    <!--end::Separator-->
                                
                                            <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><img src="{{asset('assets/media/Profile/profile_img_small.jpg')}}" alt="image"></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">max@kt.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">1 day</span>

                                                    <span class="badge badge-sm badge-circle badge-light-danger">5</span>
                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none" bis_skin_checked="1"></div>
                    <!--end::Separator-->
                                
                                            <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><img src="{{asset('assets/media/projects/fit_profile_2.jpg')}}" alt="image"><div class="symbol-badge bg-success start-100 top-100 border-4 h-8px w-8px ms-n2 mt-n2" bis_skin_checked="1"></div></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">sean@dellito.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">1 week</span>

                                                    <span class="badge badge-sm badge-circle badge-light-warning">9</span>
                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none" bis_skin_checked="1"></div>
                    <!--end::Separator-->
                                
                                            <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><img src="{{asset('assets/media/Profile/profile_img_small.jpg')}}" alt="image"> <div class="symbol-badge bg-success start-100 top-100 border-4 h-8px w-8px ms-n2 mt-n2" bis_skin_checked="1"></div></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">brian@exchange.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">20 hrs</span>

                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none" bis_skin_checked="1"></div>
                    <!--end::Separator-->
                                
                                            <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><span class="symbol-label  bg-light-warning text-warning fs-6 fw-bolder ">C</span></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">mik@pex.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">5 hrs</span>

                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none" bis_skin_checked="1"></div>
                    <!--end::Separator-->
                                
                                            <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><img src="{{asset('assets/media/projects/fit_profile_2.jpg')}}" alt="image"></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">f.mit@kpmg.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">1 day</span>

                                                    <span class="badge badge-sm badge-circle badge-light-warning">9</span>
                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none" bis_skin_checked="1"></div>
                    <!--end::Separator-->
                                
                                            <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><span class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">O</span></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">olivia@corpmail.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">3 hrs</span>

                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none" bis_skin_checked="1"></div>
                    <!--end::Separator-->
                                
                                            <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><span class="symbol-label  bg-light-primary text-primary fs-6 fw-bolder ">N</span></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">owen.neil@gmail.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">1 day</span>

                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none" bis_skin_checked="1"></div>
                    <!--end::Separator-->
                                
                                            <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><img src="{{asset('assets/media/Profile/profile_img_small.jpg')}}" alt="image"> </div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">dam@consilting.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">5 hrs</span>

                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed d-none" bis_skin_checked="1"></div>
                    <!--end::Separator-->
                                
                                            <!--begin::User-->
                <div class="d-flex flex-stack py-4" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center" bis_skin_checked="1">
                        <!--begin::Avatar--><div class="symbol  symbol-45px symbol-circle " bis_skin_checked="1"><span class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">E</span><div class="symbol-badge bg-success start-100 top-100 border-4 h-8px w-8px ms-n2 mt-n2" bis_skin_checked="1"></div></div><!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5" bis_skin_checked="1">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                            <div class="fw-semibold text-muted" bis_skin_checked="1">emma@intenso.com</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->

                    <!--begin::Lat seen-->
                    <div class="d-flex flex-column align-items-end ms-2" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">3 hrs</span>

                                            </div>
                    <!--end::Lat seen-->
                </div>
                <!--end::User-->

                                
                    </div>
        <!--end::List-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Contacts-->    </div>
    <!--end::Sidebar-->

    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10" bis_skin_checked="1">
        <!--begin::Messenger-->
<div class="card" id="kt_chat_messenger" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header" id="kt_chat_messenger_header" bis_skin_checked="1">
        <!--begin::Title-->
        <div class="card-title" bis_skin_checked="1">
                            <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3" bis_skin_checked="1">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                    <!--begin::Info-->
                    <div class="mb-0 lh-1" bis_skin_checked="1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
                    </div>
        <!--end::Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
        <div class="m-3" bis_skin_checked="1">
    <i class="bi bi-mic-mute m-3" style="color: #1b84ff; font-size: 15px;"></i>
    <i class="bi bi-telephone-fill" style="color: #1b84ff; font-size: 15px;"></i>
</div>

            <!--begin::Menu-->
            <div class="me-n3" bis_skin_checked="1">
                <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                </button>
                
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" bis_skin_checked="1" style="">
    <!--begin::Heading-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase" bis_skin_checked="1">
            Contacts
        </div>
    </div>
    <!--end::Heading-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
            Add Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
            Invite Contacts

            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a contact email to send an invitation" data-bs-original-title="Specify a contact email to send an invitation" data-kt-initialized="1">
                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Groups</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4" bis_skin_checked="1">
            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">
                    Create Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">
                    Invite Members
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">
                    Settings
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 3-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body" id="kt_chat_messenger_body" bis_skin_checked="1">
        <!--begin::Messages-->
        <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px" style="max-height: 39px;" bis_skin_checked="1">

            
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle " bis_skin_checked="1">  <img src="{{asset('assets/media/Profile/profile_img_small.jpg')}}" alt="image">  </div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">2 mins</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text" bis_skin_checked="1">
                How likely are you to recommend our company to your friends and family ?            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                                    <!--begin::Details-->
                    <div class="me-3" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">5 mins</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>  
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle " bis_skin_checked="1"> <img src="{{asset('assets/media/projects/fit_profile_2.jpg')}}" alt="image"> </div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text" bis_skin_checked="1">
                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle " bis_skin_checked="1"> <img src="{{asset('assets/media/Profile/profile_img_small.jpg')}}" alt="image"> 
</div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">1 Hour</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text" bis_skin_checked="1">
                Ok, Understood!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                                    <!--begin::Details-->
                    <div class="me-3" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">2 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>  
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle " bis_skin_checked="1"><img src="{{asset('assets/media/projects/fit_profile_2.jpg')}}" alt="image">
</div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text" bis_skin_checked="1">
                You’ll receive notifications for all issues, pull requests!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle " bis_skin_checked="1"><img src="{{asset('assets/media/Profile/profile_img_small.jpg')}}" alt="image"> 
</div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">3 Hours</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text" bis_skin_checked="1">
                You can unwatch this repository immediately by clicking here: <a href="#">Keenthemes.com</a>            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                                    <!--begin::Details-->
                    <div class="me-3" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">4 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>  
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle " bis_skin_checked="1"><img src="{{asset('assets/media/projects/fit_profile_2.jpg')}}" alt="image"></div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text" bis_skin_checked="1">
                Most purchased Business courses during this sale!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle " bis_skin_checked="1"><img src="{{asset('assets/media/Profile/profile_img_small.jpg')}}" alt="image"> 
</div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">5 Hours</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text" bis_skin_checked="1">
                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(template for out)-->
    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out" bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                                    <!--begin::Details-->
                    <div class="me-3" bis_skin_checked="1">
                        <span class="text-muted fs-7 mb-1">Just now</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>  
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle " bis_skin_checked="1"><img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}"></div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text" bis_skin_checked="1">
                            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for out)-->
    
    <!--begin::Message(template for in)-->
    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in" bis_skin_checked="1">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2" bis_skin_checked="1">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle " bis_skin_checked="1"><img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}"></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">Just now</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text" bis_skin_checked="1">
                Right before vacation season we have the next Big Deal for you.            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for in)-->
        </div>
        <!--end::Messages-->
    </div>
    <!--end::Card body-->

    <!--begin::Card footer-->
    <div class="card-footer pt-4" id="kt_chat_messenger_footer" bis_skin_checked="1">
        <!--begin::Input-->
        <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">            
        </textarea>
        <!--end::Input-->

        <!--begin:Toolbar-->
        <div class="d-flex flex-stack" bis_skin_checked="1">
            <!--begin::Actions-->
            <div class="d-flex align-items-center me-2" bis_skin_checked="1">
                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="Coming soon" data-bs-original-title="Coming soon" data-kt-initialized="1">
                    <i class="ki-duotone ki-paper-clip fs-3"></i>                </button>
                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="Coming soon" data-bs-original-title="Coming soon" data-kt-initialized="1">
                    <i class="ki-duotone ki-exit-up fs-3"><span class="path1"></span><span class="path2"></span></i>                </button>
            </div>
            <!--end::Actions-->

            <!--begin::Send-->
            <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
            <!--end::Send-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card footer-->
</div>
<!--end::Messenger-->    </div>
    <!--end::Content-->
</div>
<!--end::Layout-->
<!--begin::Modals-->

<!--begin::Modal - View Users-->
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px" bis_skin_checked="1">
        <!--begin::Modal content-->
        <div class="modal-content" bis_skin_checked="1">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end" bis_skin_checked="1">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15" bis_skin_checked="1">
                <!--begin::Heading-->
                <div class="text-center mb-13" bis_skin_checked="1">
                    <!--begin::Title-->
                    <h1 class="mb-3">Browse Users</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5" bis_skin_checked="1">
                        If you need more info, please check out our 
                        <a href="#" class="link-primary fw-bold">Users Directory</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <!--begin::Users-->
                <div class="mb-15" bis_skin_checked="1">
                    <!--begin::List-->
                    <div class="mh-375px scroll-y me-n7 pe-7" bis_skin_checked="1">
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-6.jpg">
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Emma Smith   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Art Director                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">smith@kpmg.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$23,000</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Melody Macy   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Marketing Analytic                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">melody@altbox.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$50,500</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}">
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Max Smith   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Software Enginer                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">max@kt.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$75,900</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-5.jpg')}}">
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Sean Bean   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Web Developer                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">sean@dellito.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$10,500</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}">
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Brian Cox   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                UI/UX Designer                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">brian@exchange.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$20,000</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                C                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Mikaela Collins   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Head Of Marketing                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">mik@pex.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$9,300</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-9.jpg')}}">
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Francis Mitcham   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Software Arcitect                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">f.mit@kpmg.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$15,000</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                O                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Olivia Wild   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                System Admin                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">olivia@corpmail.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$23,000</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                N                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Neil Owen   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Account Manager                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">owen.neil@gmail.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$45,800</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-23.jpg')}}">
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Dan Wilson   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Web Desinger                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">dam@consilting.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$90,500</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                E                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Emma Bold   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Corporate Finance                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">emma@intenso.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$5,000</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-12.jpg')}}">
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Ana Crown   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Customer Relationship                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">ana.cf@limtel.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$70,000</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-5 " bis_skin_checked="1">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                A                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6" bis_skin_checked="1">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Robert Doe   

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Marketing Executive                                            </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted" bis_skin_checked="1">robert@benko.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex" bis_skin_checked="1">
                                    <!--begin::Sales-->
                                    <div class="text-end" bis_skin_checked="1">
                                        <div class="fs-5 fw-bold text-gray-900" bis_skin_checked="1">$45,500</div>

                                        <div class="fs-7 text-muted" bis_skin_checked="1">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                                            </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->

                <!--begin::Notice-->
                <div class="d-flex justify-content-between" bis_skin_checked="1">
                    <!--begin::Label-->                        
                    <div class="fw-semibold" bis_skin_checked="1">
                        <label class="fs-6">Adding Users by Team Members</label>

                        <div class="fs-7 text-muted" bis_skin_checked="1">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->   

                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" checked="checked">

                        <span class="form-check-label fw-semibold text-muted">
                            Allowed
                        </span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - View Users--><!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px" bis_skin_checked="1">
        <!--begin::Modal content-->
        <div class="modal-content" bis_skin_checked="1">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end" bis_skin_checked="1">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15" bis_skin_checked="1">
                <!--begin::Content-->
                <div class="text-center mb-13" bis_skin_checked="1">
                    <h1 class="mb-3">Search Users</h1>

                    <div class="text-muted fw-semibold fs-5" bis_skin_checked="1">
                        Invite Collaborators To Your Project
                    </div>
                </div>
                <!--end::Content-->

                <!--begin::Search-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline" data-kt-search="true" bis_skin_checked="1">

                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">	
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden">
                        <!--end::Hidden input-->

                        <!--begin::Icon-->
                        <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i>                        <!--end::Icon-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input">
                        <!--end::Input-->

                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                        <!--end::Spinner-->

                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i>                        </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->

                    <!--begin::Wrapper-->
                    <div class="py-5" bis_skin_checked="1">                            
                        <!--begin::Suggestions-->
<div data-kt-search-element="suggestions" bis_skin_checked="1">
    <!--begin::Heading-->
    <h3 class="fw-semibold mb-5">Recently searched:</h3>
    <!--end::Heading-->

    <!--begin::Users-->
    <div class="mh-375px scroll-y me-n7 pe-7" bis_skin_checked="1">
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-6.jpg')}}">
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                    <span class="badge badge-light">Art Director</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                            M                        </span>
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                    <span class="badge badge-light">Marketing Analytic</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}">
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                    <span class="badge badge-light">Software Enginer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-5.jpg')}}">
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                    <span class="badge badge-light">Web Developer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}">
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold" bis_skin_checked="1">
                    <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                    <span class="badge badge-light">UI/UX Designer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
            </div>
    <!--end::Users-->
</div>
<!--end::Suggestions-->
                        
<!--begin::Results(add d-none to below element to hide the users list by default)-->
<div data-kt-search-element="results" class="d-none" bis_skin_checked="1">
    <!--begin::Users-->
    <div class="mh-375px scroll-y me-n7 pe-7" bis_skin_checked="1">
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-6.jpg')}}">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">smith@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-9-ir6t" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2" selected="" data-select2-id="select2-data-11-5wrv">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-wd2w" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-fygu-container" aria-controls="select2-fygu-container"><span class="select2-selection__rendered" id="select2-fygu-container" role="textbox" aria-readonly="true" title="Owner">Owner</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">melody@altbox.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-12-jfdp" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1" selected="" data-select2-id="select2-data-14-vu5m">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-13-xdld" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-f5bc-container" aria-controls="select2-f5bc-container"><span class="select2-selection__rendered" id="select2-f5bc-container" role="textbox" aria-readonly="true" title="Guest">Guest</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-1.jpg">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">max@kt.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-15-krcq" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="" data-select2-id="select2-data-17-8vr2">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-16-hy0v" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-t7sa-container" aria-controls="select2-t7sa-container"><span class="select2-selection__rendered" id="select2-t7sa-container" role="textbox" aria-readonly="true" title="Can Edit">Can Edit</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-5.jpg')}}">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">sean@dellito.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-18-uxgy" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2" selected="" data-select2-id="select2-data-20-bjs6">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-19-gsvq" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-t48f-container" aria-controls="select2-t48f-container"><span class="select2-selection__rendered" id="select2-t48f-container" role="textbox" aria-readonly="true" title="Owner">Owner</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">brian@exchange.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-21-emg2" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="" data-select2-id="select2-data-23-dnf5">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-22-firw" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6hpy-container" aria-controls="select2-6hpy-container"><span class="select2-selection__rendered" id="select2-6hpy-container" role="textbox" aria-readonly="true" title="Can Edit">Can Edit</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                C                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">mik@pex.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-24-dn25" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2" selected="" data-select2-id="select2-data-26-ojtw">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-25-q7us" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-lz9b-container" aria-controls="select2-lz9b-container"><span class="select2-selection__rendered" id="select2-lz9b-container" role="textbox" aria-readonly="true" title="Owner">Owner</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-9.jpg')}}">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">f.mit@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-27-ht7s" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="" data-select2-id="select2-data-29-hhq9">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-28-qyhq" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-bbkm-container" aria-controls="select2-bbkm-container"><span class="select2-selection__rendered" id="select2-bbkm-container" role="textbox" aria-readonly="true" title="Can Edit">Can Edit</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                O                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">olivia@corpmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-30-332l" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2" selected="" data-select2-id="select2-data-32-3wxc">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-31-6z4s" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-bkyq-container" aria-controls="select2-bkyq-container"><span class="select2-selection__rendered" id="select2-bkyq-container" role="textbox" aria-readonly="true" title="Owner">Owner</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                N                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">owen.neil@gmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-33-dqe9" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1" selected="" data-select2-id="select2-data-35-nt17">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-34-f31z" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-fk89-container" aria-controls="select2-fk89-container"><span class="select2-selection__rendered" id="select2-fk89-container" role="textbox" aria-readonly="true" title="Guest">Guest</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-23.jpg')}}">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">dam@consilting.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-36-d737" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="" data-select2-id="select2-data-38-d2s7">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-37-cahv" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-2hzc-container" aria-controls="select2-2hzc-container"><span class="select2-selection__rendered" id="select2-2hzc-container" role="textbox" aria-readonly="true" title="Can Edit">Can Edit</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                E                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">emma@intenso.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-39-fg0n" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2" selected="" data-select2-id="select2-data-41-77yt">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-40-p4fm" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-9xgk-container" aria-controls="select2-9xgk-container"><span class="select2-selection__rendered" id="select2-9xgk-container" role="textbox" aria-readonly="true" title="Owner">Owner</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-12.jpg')}}">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">ana.cf@limtel.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-42-12zw" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1" selected="" data-select2-id="select2-data-44-9da8">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-43-7yh9" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-uxdu-container" aria-controls="select2-uxdu-container"><span class="select2-selection__rendered" id="select2-uxdu-container" role="textbox" aria-readonly="true" title="Guest">Guest</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                A                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">robert@benko.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-45-b5ab" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="" data-select2-id="select2-data-47-lyje">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-46-xs1n" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-qqdj-container" aria-controls="select2-qqdj-container"><span class="select2-selection__rendered" id="select2-qqdj-container" role="textbox" aria-readonly="true" title="Can Edit">Can Edit</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-13.jpg')}}">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">miller@mapple.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-48-cvkd" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="" data-select2-id="select2-data-50-rz6n">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-49-99xt" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-krhj-container" aria-controls="select2-krhj-container"><span class="select2-selection__rendered" id="select2-krhj-container" role="textbox" aria-readonly="true" title="Can Edit">Can Edit</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                L                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">lucy.m@fentech.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-51-gt39" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2" selected="" data-select2-id="select2-data-53-ig5a">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-52-zofq" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-xt8b-container" aria-controls="select2-xt8b-container"><span class="select2-selection__rendered" id="select2-xt8b-container" role="textbox" aria-readonly="true" title="Owner">Owner</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-21.jpg')}}">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">ethan@loop.com.au</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-54-onve" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1" selected="" data-select2-id="select2-data-56-lxd0">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-55-p3eh" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-tnbt-container" aria-controls="select2-tnbt-container"><span class="select2-selection__rendered" id="select2-tnbt-container" role="textbox" aria-readonly="true" title="Guest">Guest</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed" bis_skin_checked="1"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16" bis_skin_checked="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center" bis_skin_checked="1">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16">
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle" bis_skin_checked="1">
                                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-9.jpg')}}">
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5" bis_skin_checked="1">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                        <div class="fw-semibold text-muted" bis_skin_checked="1">f.mit@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px" bis_skin_checked="1">
                    <select class="form-select form-select-solid form-select-sm select2-hidden-accessible" data-control="select2" data-hide-search="true" data-select2-id="select2-data-57-6lva" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="" data-select2-id="select2-data-59-xwcw">Can Edit</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-58-754w" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-927b-container" aria-controls="select2-927b-container"><span class="select2-selection__rendered" id="select2-927b-container" role="textbox" aria-readonly="true" title="Can Edit">Can Edit</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

            
            </div>
    <!--end::Users-->

    <!--begin::Actions-->
    <div class="d-flex flex-center mt-15" bis_skin_checked="1">
        <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">
            Cancel
        </button>

        <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
            Add Selected Users
        </button>
    </div>
    <!--end::Actions-->
</div>
<!--end::Results-->
                        <!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center d-none" bis_skin_checked="1">
    <!--begin::Message-->
    <div class="fw-semibold py-10" bis_skin_checked="1">
        <div class="text-gray-600 fs-3 mb-2" bis_skin_checked="1">No users found</div>

        <div class="text-muted fs-6" bis_skin_checked="1">Try to search by username, full name or email...</div>
    </div>
    <!--end::Message-->

    <!--begin::Illustration-->
    <div class="text-center px-5" bis_skin_checked="1">
        <img src="{{asset('assets/media/illustrations/sketchy-1/1.png')}}" alt="" class="w-100 h-200px h-sm-325px">        
    </div>
    <!--end::Illustration-->
</div>
<!--end::Empty-->                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search--><!--end::Modals-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->	

                                    </div>
                <!--end::Content wrapper-->

                                    
                          </div>




</x-default-layout>