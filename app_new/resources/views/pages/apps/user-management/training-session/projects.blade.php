<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection

  <div class="d-flex flex-wrap flex-stack mb-6" bis_skin_checked="1">
    <!--begin::Heading-->
    <h3 class="fw-bold my-2">
        My Projects 
        <span class="fs-6 text-gray-500 fw-semibold ms-1">Active</span>
    </h3>
    <!--end::Heading-->

    <!--begin::Actions-->
    <div class="d-flex flex-wrap my-2" bis_skin_checked="1">
        <div class="me-4" bis_skin_checked="1">
            <!--begin::Select-->
            <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm form-select-solid w-125px select2-hidden-accessible" data-select2-id="select2-data-9-bdiy" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option value="Active" selected="" data-select2-id="select2-data-11-k5mr">Active</option>
                <option value="Approved">In Progress</option>
                <option value="Declined">To Do</option>
                <option value="In Progress">Completed</option>
            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-ssh3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-sm form-select-solid w-125px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-d4-container" aria-controls="select2-status-d4-container"><span class="select2-selection__rendered" id="select2-status-d4-container" role="textbox" aria-readonly="true" title="Active">Active</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <!--end::Select-->
        </div>

        <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">New Project</a>
    </div>
    <!--end::Actions-->
</div>



<div class="row g-6 g-xl-9" bis_skin_checked="1">
    <!--begin::Col-->
    <div class="col-md-6 col-xl-4" bis_skin_checked="1">
        
<!--begin::Card-->
<a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-9" bis_skin_checked="1">
        <!--begin::Card Title-->
        <div class="card-title m-0" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px w-50px bg-light" bis_skin_checked="1">
            <img src="{{asset('assets/media/projects/fitness_app1.svg')}}" alt="image">             
         </div>
            <!--end::Avatar-->
        </div>
        <!--end::Car Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body p-9" bis_skin_checked="1">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900" bis_skin_checked="1">
            Fitnes App        </div>
        <!--end::Name-->

        <!--begin::Description-->
        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
            CRM App application to HR efficiency        </p>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5" bis_skin_checked="1">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3" bis_skin_checked="1">            
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">Aug 19, 2024</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Due Date</div>
            </div>
            <!--end::Due-->

            <!--begin::Budget-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3" bis_skin_checked="1">
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">$284,900.00</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Budget</div>
            </div>
            <!--end::Budget-->
        </div>
        <!--end::Info-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 50% completed" data-bs-original-title="This project 50% completed" data-kt-initialized="1" bis_skin_checked="1">
            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow=" 50" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
        </div>
        <!--end::Progress-->

                    <!--begin::Users-->
            <div class="symbol-group symbol-hover" bis_skin_checked="1">
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Emma Smith" data-bs-original-title="Emma Smith" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/fit_profile_1.jpg')}}" alt="image">  
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Rudy Stone" data-bs-original-title="Rudy Stone" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/fit_profile_2.jpg')}}" alt="image">
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                            </div>
                    <!--begin::User-->
                            </div>
            <!--end::Users-->
            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4" bis_skin_checked="1">
        
<!--begin::Card-->
<a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-9" bis_skin_checked="1">
        <!--begin::Card Title-->
        <div class="card-title m-0" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px w-50px bg-light" bis_skin_checked="1">
            <img src="{{asset('assets/media/projects/leaf_crm.svg')}}" alt="image">  
            </div>
            <!--end::Avatar-->
        </div>
        <!--end::Car Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body p-9" bis_skin_checked="1">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900" bis_skin_checked="1">
            Leaf CRM        </div>
        <!--end::Name-->

        <!--begin::Description-->
        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
            CRM App application to HR efficiency        </p>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5" bis_skin_checked="1">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3" bis_skin_checked="1">            
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">May 10, 2021 </div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Due Date</div>
            </div>
            <!--end::Due-->

            <!--begin::Budget-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3" bis_skin_checked="1">
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">$36,400.00</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Budget</div>
            </div>
            <!--end::Budget-->
        </div>
        <!--end::Info-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 30% completed" data-bs-original-title="This project 30% completed" data-kt-initialized="1" bis_skin_checked="1">
            <div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow=" 30" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
        </div>
        <!--end::Progress-->

                    <!--begin::Users-->
            <div class="symbol-group symbol-hover" bis_skin_checked="1">
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Brian Cox" data-bs-original-title="Brian Cox" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/leaf_profile_1.jpg')}}" alt="image">
                                            </div>
                    <!--begin::User-->
                            </div>
            <!--end::Users-->
            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4" bis_skin_checked="1">
        
<!--begin::Card-->
<a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-9" bis_skin_checked="1">
        <!--begin::Card Title-->
        <div class="card-title m-0" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px w-50px bg-light" bis_skin_checked="1">
            <img src="{{asset('assets/media/projects/atica_1.svg')}}" alt="image">  
            </div>
            <!--end::Avatar-->
        </div>
        <!--end::Car Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body p-9" bis_skin_checked="1">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900" bis_skin_checked="1">
            Atica Banking        </div>
        <!--end::Name-->

        <!--begin::Description-->
        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
            CRM App application to HR efficiency        </p>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5" bis_skin_checked="1">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3" bis_skin_checked="1">            
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">Mar 14, 2021 </div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Due Date</div>
            </div>
            <!--end::Due-->

            <!--begin::Budget-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3" bis_skin_checked="1">
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">$605,100.00</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Budget</div>
            </div>
            <!--end::Budget-->
        </div>
        <!--end::Info-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 100% completed" data-bs-original-title="This project 100% completed" data-kt-initialized="1" bis_skin_checked="1">
            <div class="bg-success rounded h-4px" role="progressbar" style="width: 100%" aria-valuenow=" 100" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
        </div>
        <!--end::Progress-->

                    <!--begin::Users-->
            <div class="symbol-group symbol-hover" bis_skin_checked="1">
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Mad Macy" data-bs-original-title="Mad Macy" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/img33.jpg')}}" alt="image">  
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Cris Willson" data-bs-original-title="Cris Willson" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/img11.jpg')}}" alt="image">  
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Mike Garcie" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
                                            </div>
                    <!--begin::User-->
                            </div>
            <!--end::Users-->
            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4" bis_skin_checked="1">
        
<!--begin::Card-->
<a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-9" bis_skin_checked="1">
        <!--begin::Card Title-->
        <div class="card-title m-0" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px w-50px bg-light" bis_skin_checked="1">
            <img src="{{asset('assets/media/projects/finance_4.svg')}}" alt="image">
            </div>
            <!--end::Avatar-->
        </div>
        <!--end::Car Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body p-9" bis_skin_checked="1">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900" bis_skin_checked="1">
            Finance Dispatch        </div>
        <!--end::Name-->

        <!--begin::Description-->
        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
            CRM App application to HR efficiency        </p>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5" bis_skin_checked="1">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3" bis_skin_checked="1">            
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">Nov 10, 2024</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Due Date</div>
            </div>
            <!--end::Due-->

            <!--begin::Budget-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3" bis_skin_checked="1">
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">$284,900.00</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Budget</div>
            </div>
            <!--end::Budget-->
        </div>
        <!--end::Info-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 60% completed" data-bs-original-title="This project 60% completed" data-kt-initialized="1" bis_skin_checked="1">
            <div class="bg-info rounded h-4px" role="progressbar" style="width: 60%" aria-valuenow=" 60" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
        </div>
        <!--end::Progress-->

                    <!--begin::Users-->
            <div class="symbol-group symbol-hover" bis_skin_checked="1">
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Nich Warden" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">N</span>
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Rob Otto" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                            </div>
                    <!--begin::User-->
                            </div>
            <!--end::Users-->
            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4" bis_skin_checked="1">
        
<!--begin::Card-->
<a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-9" bis_skin_checked="1">
        <!--begin::Card Title-->
        <div class="card-title m-0" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px w-50px bg-light" bis_skin_checked="1">
            <img src="{{asset('assets/media/projects/9_degree.svg')}}" alt="image">
            </div>
            <!--end::Avatar-->
        </div>
        <!--end::Car Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body p-9" bis_skin_checked="1">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900" bis_skin_checked="1">
            9 Degree        </div>
        <!--end::Name-->

        <!--begin::Description-->
        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
            CRM App application to HR efficiency        </p>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5" bis_skin_checked="1">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3" bis_skin_checked="1">            
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">Jul 25, 2024</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Due Date</div>
            </div>
            <!--end::Due-->

            <!--begin::Budget-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3" bis_skin_checked="1">
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">$284,900.00</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Budget</div>
            </div>
            <!--end::Budget-->
        </div>
        <!--end::Info-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 40% completed" data-bs-original-title="This project 40% completed" data-kt-initialized="1" bis_skin_checked="1">
            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 40%" aria-valuenow=" 40" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
        </div>
        <!--end::Progress-->

                    <!--begin::Users-->
            <div class="symbol-group symbol-hover" bis_skin_checked="1">
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Francis Mitcham" data-bs-original-title="Francis Mitcham" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/crm_profile.jpg')}}" alt="image">
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michelle Swanston" data-bs-original-title="Michelle Swanston" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/9_degree_2.jpg')}}" alt="image"> 
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                            </div>
                    <!--begin::User-->
                            </div>
            <!--end::Users-->
            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4" bis_skin_checked="1">
        
<!--begin::Card-->
<a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-9" bis_skin_checked="1">
        <!--begin::Card Title-->
        <div class="card-title m-0" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px w-50px bg-light" bis_skin_checked="1">
                <img src="{{asset('assets/media/projects/go_pro_1.svg')}}" alt="image">
            </div>
            <!--end::Avatar-->
        </div>
        <!--end::Car Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body p-9" bis_skin_checked="1">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900" bis_skin_checked="1">
            GoPro App        </div>
        <!--end::Name-->

        <!--begin::Description-->
        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
            CRM App application to HR efficiency        </p>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5" bis_skin_checked="1">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3" bis_skin_checked="1">            
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">Aug 19, 2024</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Due Date</div>
            </div>
            <!--end::Due-->

            <!--begin::Budget-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3" bis_skin_checked="1">
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">$284,900.00</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Budget</div>
            </div>
            <!--end::Budget-->
        </div>
        <!--end::Info-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 70% completed" data-bs-original-title="This project 70% completed" data-kt-initialized="1" bis_skin_checked="1">
            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%" aria-valuenow=" 70" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
        </div>
        <!--end::Progress-->

                    <!--begin::Users-->
            <div class="symbol-group symbol-hover" bis_skin_checked="1">
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1" bis_skin_checked="1">
                                                        <img src="{{asset('assets/media/projects/img33.jpg')}}" alt="image">
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Robin Watterman" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                            </div>
                    <!--begin::User-->
                            </div>
            <!--end::Users-->
            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4" bis_skin_checked="1">
        
<!--begin::Card-->
<a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-9" bis_skin_checked="1">
        <!--begin::Card Title-->
        <div class="card-title m-0" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px w-50px bg-light" bis_skin_checked="1">
            <img src="{{asset('assets/media/projects/buldozer_1.svg')}}" alt="image">
            </div>
            <!--end::Avatar-->
        </div>
        <!--end::Car Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body p-9" bis_skin_checked="1">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900" bis_skin_checked="1">
            Buldozer CRM        </div>
        <!--end::Name-->

        <!--begin::Description-->
        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
            CRM App application to HR efficiency        </p>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5" bis_skin_checked="1">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3" bis_skin_checked="1">            
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">May 05, 2024</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Due Date</div>
            </div>
            <!--end::Due-->

            <!--begin::Budget-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3" bis_skin_checked="1">
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">$284,900.00</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Budget</div>
            </div>
            <!--end::Budget-->
        </div>
        <!--end::Info-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 70% completed" data-bs-original-title="This project 70% completed" data-kt-initialized="1" bis_skin_checked="1">
            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%" aria-valuenow=" 70" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
        </div>
        <!--end::Progress-->

                    <!--begin::Users-->
            <div class="symbol-group symbol-hover" bis_skin_checked="1">
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/img33.jpg')}}" alt="image">
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="John Mixin" data-bs-original-title="John Mixin" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/profile_img_4.jpg')}}" alt="image">
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Emma Smith" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                            </div>
                    <!--begin::User-->
                            </div>
            <!--end::Users-->
            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4" bis_skin_checked="1">
        
<!--begin::Card-->
<a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-9" bis_skin_checked="1">
        <!--begin::Card Title-->
        <div class="card-title m-0" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px w-50px bg-light" bis_skin_checked="1">
            <img src="{{asset('assets/media/projects/avia_sales_1.svg')}}" alt="image">
            </div>
            <!--end::Avatar-->
        </div>
        <!--end::Car Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <span class="badge badge-light-danger fw-bold me-auto px-4 py-3">Overdue</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body p-9" bis_skin_checked="1">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900" bis_skin_checked="1">
            Aviasales App        </div>
        <!--end::Name-->

        <!--begin::Description-->
        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
            CRM App application to HR efficiency        </p>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5" bis_skin_checked="1">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3" bis_skin_checked="1">            
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">Feb 21, 2024</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Due Date</div>
            </div>
            <!--end::Due-->

            <!--begin::Budget-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3" bis_skin_checked="1">
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">$284,900.00</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Budget</div>
            </div>
            <!--end::Budget-->
        </div>
        <!--end::Info-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 10% completed" data-bs-original-title="This project 10% completed" data-kt-initialized="1" bis_skin_checked="1">
            <div class="bg-danger rounded h-4px" role="progressbar" style="width: 10%" aria-valuenow=" 10" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
        </div>
        <!--end::Progress-->

                    <!--begin::Users-->
            <div class="symbol-group symbol-hover" bis_skin_checked="1">
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Brian Cox" data-bs-original-title="Brian Cox" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/leaf_profile_1.jpg')}}" alt="image">
                                            </div>
                    <!--begin::User-->
                            </div>
            <!--end::Users-->
            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4" bis_skin_checked="1">
        
<!--begin::Card-->
<a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="card border-hover-primary ">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-9" bis_skin_checked="1">
        <!--begin::Card Title-->
        <div class="card-title m-0" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px w-50px bg-light" bis_skin_checked="1">
            <img src="{{asset('assets/media/projects/oppo_crm_1.svg')}}" alt="image">
            </div>
            <!--end::Avatar-->
        </div>
        <!--end::Car Title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end:: Card header-->

    <!--begin:: Card body-->
    <div class="card-body p-9" bis_skin_checked="1">
        <!--begin::Name-->
        <div class="fs-3 fw-bold text-gray-900" bis_skin_checked="1">
            Oppo CRM        </div>
        <!--end::Name-->

        <!--begin::Description-->
        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">
            CRM App application to HR efficiency        </p>
        <!--end::Description-->

        <!--begin::Info-->
        <div class="d-flex flex-wrap mb-5" bis_skin_checked="1">
            <!--begin::Due-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3" bis_skin_checked="1">            
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">Feb 21, 2024</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Due Date</div>
            </div>
            <!--end::Due-->

            <!--begin::Budget-->
            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3" bis_skin_checked="1">
                <div class="fs-6 text-gray-800 fw-bold" bis_skin_checked="1">$284,900.00</div>
                <div class="fw-semibold text-gray-500" bis_skin_checked="1">Budget</div>
            </div>
            <!--end::Budget-->
        </div>
        <!--end::Info-->

        <!--begin::Progress-->
        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 100% completed" data-bs-original-title="This project 100% completed" data-kt-initialized="1" bis_skin_checked="1">
            <div class="bg-success rounded h-4px" role="progressbar" style="width: 100%" aria-valuenow=" 100" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
        </div>
        <!--end::Progress-->

                    <!--begin::Users-->
            <div class="symbol-group symbol-hover" bis_skin_checked="1">
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Nick Macy" data-bs-original-title="Nick Macy" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/img33.jpg')}}" alt="image">
 
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Sean Paul" data-bs-original-title="Sean Paul" data-kt-initialized="1" bis_skin_checked="1">
                    <img src="{{asset('assets/media/projects/img11.jpg')}}" alt="image"> 
                                            </div>
                    <!--begin::User-->
                                    <!--begin::User-->
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Mike Collin" data-kt-initialized="1" bis_skin_checked="1">
                                                    <span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
                                            </div>
                    <!--begin::User-->
                            </div>
            <!--end::Users-->
            </div>
    <!--end:: Card body-->
</a>
<!--end::Card-->    </div>
    <!--end::Col-->
</div>

<div class="d-flex flex-stack flex-wrap pt-10" bis_skin_checked="1">
    <div class="fs-6 fw-semibold text-gray-700" bis_skin_checked="1">
        Showing 1 to 10 of 50 entries
    </div>

    <!--begin::Pages-->
    <ul class="pagination">
        <li class="page-item previous">
            <a href="#" class="page-link"><i class="previous"></i></a>
        </li>

        <li class="page-item active">
            <a href="#" class="page-link">1</a>
        </li>

        <li class="page-item">
            <a href="#" class="page-link">2</a>
        </li>

        <li class="page-item">
            <a href="#" class="page-link">3</a>
        </li>

        <li class="page-item">
            <a href="#" class="page-link">4</a>
        </li>

        <li class="page-item">
            <a href="#" class="page-link">5</a>
        </li>

        <li class="page-item">
            <a href="#" class="page-link">6</a>
        </li>

        <li class="page-item next">
            <a href="#" class="page-link"><i class="next"></i></a>
        </li>
    </ul>
    <!--end::Pages-->
</div>



    @push('scripts')
       
        <!-- <script>
            document.getElementById('mySearchInput').addEventListener('keyup', function () {
                window.LaravelDataTables['permissions-table'].search(this.value).draw();
            });
            document.addEventListener('livewire:load', function () {
                Livewire.on('success', function () {
                    $('#kt_modal_update_permission').modal('hide');
                    window.LaravelDataTables['permissions-table'].ajax.reload();
                });
            });
        </script> -->
    @endpush

</x-default-layout>
