<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection
    

    <div id="kt_app_content" class="app-content  flex-column-fluid " bis_skin_checked="1">
    
           
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl " bis_skin_checked="1">
        
<!--begin::Pricing card-->
<div class="card" id="kt_pricing" bis_skin_checked="1">
    <!--begin::Card body-->
    <div class="card-body p-lg-17" bis_skin_checked="1">
        <!--begin::Plans-->
        <div class="d-flex flex-column" bis_skin_checked="1">
            <!--begin::Heading-->
            <div class="mb-13 text-center" bis_skin_checked="1">
                <h1 class="fs-2hx fw-bold mb-5">Choose Your Plan</h1>

                <div class="text-gray-600 fw-semibold fs-5" bis_skin_checked="1">
                    If you need more info about our pricing, please check <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                </div>
            </div>
            <!--end::Heading-->

            <!--begin::Nav group-->
            <ul class="nav nav-tabs nav-group justify-content-center bg-transparent" id="myTab" role="tablist">
    <!-- Your tab items go here -->
            <div class="nav-group nav-group-outline mx-auto d-flex p-3" data-kt-buttons="true" data-kt-initialized="1" bis_skin_checked="1">
  <li class="nav-item" role="presentation">
    <button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3 me-2 nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Monthly</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3 nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Annual</button>
  </li>
  </div>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="row g-10 mt-5">
  <div class="col-xl-4" bis_skin_checked="1">
                        <div class="d-flex h-100 align-items-center" bis_skin_checked="1">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-5 fw-bolder">Startup</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-600 fw-semibold mb-5" bis_skin_checked="1">
                                        Optimal for 10+ team size<br> and new startup                                                 
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Price-->
                                    <div class="text-center" bis_skin_checked="1">
                                        <span class="mb-2 text-primary">$</span>

                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                            39                                        </span>
                                        
                                        <span class="fs-7 fw-semibold opacity-50">/ 
                                            <span data-kt-element="period">Mon</span>
                                        </span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Features-->
                                <div class="w-100 mb-10" bis_skin_checked="1">  
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 10 Active Users                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 30 Project Integrations                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Analytics Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Finance Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Accounting Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Network Platform                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center " bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Unlimited Cloud Space                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                            
                                </div>
                                <!--end::Features-->         

                                <!--begin::Select-->
                                <button type="button" class="btn btn-primary1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <a href="#" class="btn btn-sm btn-primary">Select</a> </button>
                                <!--end::Select-->
                            </div>
                            <!--end::Option-->
                        </div>
                </div> 

        

                   

                    <div class="col-xl-4" bis_skin_checked="1">
                        <div class="d-flex h-100 align-items-center" bis_skin_checked="1">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-5 fw-bolder">Advanced</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-600 fw-semibold mb-5" bis_skin_checked="1">
                                    Optimal for 100+ team size<br> and grown company                                                 
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Price-->
                                    <div class="text-center" bis_skin_checked="1">
                                        <span class="mb-2 text-primary">$</span>

                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                        339                                         </span>
                                        
                                        <span class="fs-7 fw-semibold opacity-50">/ 
                                            <span data-kt-element="period">Mon</span>
                                        </span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Features-->
                                <div class="w-100 mb-10" bis_skin_checked="1">  
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 10 Active Users                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 30 Project Integrations                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                     <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Analytics Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                    <span class="fw-semibold fs-6 text-gray-800 flex-grow-1">
                                                    Finance Module                                                </span> 
                                                    <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                    <span class="fw-semibold fs-6 text-gray-800 flex-grow-1">
                                                    Accounting Module                                                </span> 
                                                    <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Network Platform                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center " bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Unlimited Cloud Space                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                            
                                </div>
                                <!--end::Features-->         

                                <!--begin::Select-->
                                <button type="button" class="btn btn-primary1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <a href="#" class="btn btn-sm btn-primary">Select</a> </button>
                                <!--end::Select-->
                            </div>



                            <!--end::Option-->
                        </div>
                    </div>

                    <div class="col-xl-4" bis_skin_checked="1">
                        <div class="d-flex h-100 align-items-center" bis_skin_checked="1">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-5 fw-bolder">Enterprise</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-600 fw-semibold mb-5" bis_skin_checked="1">
                                        Optimal for 10+ team size<br> and enterpise                                                
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Price-->
                                    <div class="text-center" bis_skin_checked="1">
                                        <span class="mb-2 text-primary">$</span>

                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                        999                                         </span>
                                        
                                        <span class="fs-7 fw-semibold opacity-50">/ 
                                            <span data-kt-element="period">Mon</span>
                                        </span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Features-->
                                <div class="w-100 mb-10" bis_skin_checked="1">  
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 10 Active Users                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 30 Project Integrations                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Analytics Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1">
                                                    Finance Module                                                </span> 
                                                    <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1">
                                                    Accounting Module                                                </span> 
                                                    <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1">
                                                    Network Platform                                                </span> 
                                                    <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center " bis_skin_checked="1">             
                                                  <span class="fw-semibold fs-6 text-gray-800 flex-grow-1">
                                                    Unlimited Cloud Space                                                </span> 
                                                    <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                            
                                </div>
                                <!--end::Features-->         

                                <!--begin::Select-->
                                <button type="button" class="btn btn-primary1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <a href="#" class="btn btn-sm btn-primary">Select</a> </button>
                                <!--end::Select-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>
                    

                    </div>
                    </div>

  
  
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row g-10 mt-5">
  <div class="col-xl-4" bis_skin_checked="1">
                        <div class="d-flex h-100 align-items-center" bis_skin_checked="1">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-5 fw-bolder">Startup</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-600 fw-semibold mb-5" bis_skin_checked="1">
                                        Optimal for 10+ team size<br> and new startup                                                 
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Price-->
                                    <div class="text-center" bis_skin_checked="1">
                                        <span class="mb-2 text-primary">$</span>

                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                            39                                        </span>
                                        
                                        <span class="fs-7 fw-semibold opacity-50">/ 
                                            <span data-kt-element="period">Mon</span>
                                        </span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Features-->
                                <div class="w-100 mb-10" bis_skin_checked="1">  
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 10 Active Users                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 30 Project Integrations                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Analytics Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Finance Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                    
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Accounting Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Network Platform                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center " bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Unlimited Cloud Space                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                            
                                </div>
                                <!--end::Features-->         

                                <!--begin::Select-->
                                <button type="button" class="btn btn-primary1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <a href="#" class="btn btn-sm btn-primary">Select</a> </button>
                                <!--end::Select-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>

                    <div class="col-xl-4" bis_skin_checked="1">
                        <div class="d-flex h-100 align-items-center" bis_skin_checked="1">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-5 fw-bolder">Startup</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-600 fw-semibold mb-5" bis_skin_checked="1">
                                        Optimal for 10+ team size<br> and new startup                                                 
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Price-->
                                    <div class="text-center" bis_skin_checked="1">
                                        <span class="mb-2 text-primary">$</span>

                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                            39                                        </span>
                                        
                                        <span class="fs-7 fw-semibold opacity-50">/ 
                                            <span data-kt-element="period">Mon</span>
                                        </span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Features-->
                                <div class="w-100 mb-10" bis_skin_checked="1">  
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 10 Active Users                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 30 Project Integrations                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Analytics Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Finance Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Accounting Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Network Platform                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center " bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Unlimited Cloud Space                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                            
                                </div>
                                <!--end::Features-->         

                                <!--begin::Select-->
                                <button type="button" class="btn btn-primary1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <a href="#" class="btn btn-sm btn-primary">Select</a> </button>
                                <!--end::Select-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>


                    <div class="col-xl-4 5" bis_skin_checked="1">
                        <div class="d-flex h-100 align-items-center" bis_skin_checked="1">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-5 fw-bolder">Startup</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-600 fw-semibold mb-5" bis_skin_checked="1">
                                        Optimal for 10+ team size<br> and new startup                                                 
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Price-->
                                    <div class="text-center" bis_skin_checked="1">
                                        <span class="mb-2 text-primary">$</span>

                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                            39                                        </span>
                                        
                                        <span class="fs-7 fw-semibold opacity-50">/ 
                                            <span data-kt-element="period">Mon</span>
                                        </span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Features-->
                                <div class="w-100 mb-10" bis_skin_checked="1">  
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 10 Active Users                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 30 Project Integrations                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Analytics Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Finance Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Accounting Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Network Platform                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center " bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Unlimited Cloud Space                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                            
                                </div>
                                <!--end::Features-->         

                                <!--begin::Select-->
                                <button type="button" class="btn btn-primary1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <a href="#" class="btn btn-sm btn-primary">Select</a> </button>
                                <!--end::Select-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>

                    </div>
  </div>
</div>

            <!--end::Tab content-->
        </div>
        <!--end::Plans-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Pricing card-->
</div>
<!--end::Content container-->
</div>

<!--end::Pricing card-->
</div>
<!--end::Content container-->
</div>


   






        <!-- model popup start -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header py-7 d-flex justify-content-between" bis_skin_checked="1">
                <!--begin::Modal title-->
                <div class="title">
                <h2>Billing Details</h2>
                <!--end::Modal title-->
                If you need more info, please check out 
        <a href="#" class="text-primary fw-bold">Help Page</a>.
</div>
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
      <div class="modal-body">
       

      <form class="card-body py-9 w-100 mw-xl-700px px-9 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_create_account_form">

        <!--begin::Step 4-->
        <div data-kt-stepper-element="content" bis_skin_checked="1" class="current">
            <!--begin::Wrapper-->
<div class="w-100" bis_skin_checked="1">
<!--begin::Heading-->
<!-- <div class="pb-10 pb-lg-15" bis_skin_checked="1"> -->
    <!--begin::Title-->
    <!-- <h2 class="fw-bold text-gray-900">Billing Details</h2> -->
    <!--end::Title-->

    <!--begin::Notice-->
    <!-- <div class="text-muted fw-semibold fs-6" bis_skin_checked="1"> -->
        <!-- If you need more info, please check out  -->
        <!-- <a href="#" class="text-primary fw-bold">Help Page</a>. -->
    <!-- </div> -->
    <!--end::Notice-->
<!-- </div> -->
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
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div><div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
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
        <img class="w-25" src="{{asset('assets/media/svg/card-logos/visa.svg')}}" alt="image">  
        <img class="w-25" src="{{asset('assets/media/svg/card-logos/mastercard.svg')}}" alt="image">  
        <img class="w-25" src="{{asset('assets/media/svg/card-logos/american-express.svg')}}" alt="image">  
    </div>
    <!--end::Card logos-->
</div>
<!--end::Input wrapper-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div><div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
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
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div><div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
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
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div><div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
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
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div><div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
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

        <!--begin::Actions-->
        <div class="d-flex flex-stack pt-10" bis_skin_checked="1"> 
            <!--begin::Wrapper-->
            <!-- <div class="mr-2" bis_skin_checked="1">
                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous"> 
                    <i class="ki-duotone ki-arrow-left fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>                        Back
                </button>
            </div> -->
            <!--end::Wrapper-->

            <!--begin::Wrapper-->
            <div bis_skin_checked="1">
                <button type="button" class="btn btn-lg btn-primary me-3 d-inline-block" data-kt-stepper-action="submit">
                    <span class="indicator-label">
                        Submit
                        <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span class="path1"></span><span class="path2"></span></i>                        </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>

                <button type="button" class="btn btn-lg btn-primary d-none" data-kt-stepper-action="next">
                    Continue
                    <i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0"><span class="path1"></span><span class="path2"></span></i>                    </button>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Actions-->
    </form>



      </div>
    </div>
  </div>
</div>
   <!-- model popup end -->



</x-default-layout>