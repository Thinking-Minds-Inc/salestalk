<x-default-layout>

    @section('title')
       Billing
    @endsection




    <div class="card  mb-5 mb-xl-10" bis_skin_checked="1">
    <!--begin::Card body-->
    <div class="card-body" bis_skin_checked="1">
        
<!--begin::Notice-->
<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-12 p-6" bis_skin_checked="1">
            <!--begin::Icon-->
        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 " bis_skin_checked="1">
                    <!--begin::Content-->
            <div class=" fw-semibold" bis_skin_checked="1">
                                    <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                
                                    <div class="fs-6 text-gray-700 " bis_skin_checked="1">Your payment was declined. To start using tools, please <a href="#" class="fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Add Payment Method</a>.</div>
                            </div>
            <!--end::Content-->
        
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->

        <!--begin::Row-->
        <div class="row" bis_skin_checked="1">
            <!--begin::Col-->
            <div class="col-lg-7" bis_skin_checked="1">
                <!--begin::Heading-->
                <h3 class="mb-2">Active until Dec 09, 2024</h3>
                <p class="fs-6 text-gray-600 fw-semibold mb-6 mb-lg-15">We will send you a notification upon Subscription expiration </p>
                <!--end::Heading-->

                <!--begin::Info-->
                <div class="fs-5 mb-2" bis_skin_checked="1">
                    <span class="text-gray-800 fw-bold me-1">$24.99</span> 
                    <span class="text-gray-600 fw-semibold">Per Month</span>
                </div>
                <!--end::Info-->

                <!--begin::Notice-->
                <div class="fs-6 text-gray-600 fw-semibold" bis_skin_checked="1">
                    Extended Pro Package. Up to 100 Agents &amp; 25 Projects
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-5" bis_skin_checked="1">
                <!--begin::Heading-->
                <div class="d-flex text-muted fw-bold fs-5 mb-3" bis_skin_checked="1">
                    <span class="flex-grow-1 text-gray-800">Users</span>
                    <span class="text-gray-800">86 of 100 Used</span>
                </div>
                <!--end::Heading-->

                <!--begin::Progress-->
                <div class="progress h-8px bg-light-primary mb-2" bis_skin_checked="1">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                </div>
                <!--end::Progress-->

                <!--begin::Description-->
                <div class="fs-6 text-gray-600 fw-semibold mb-10" bis_skin_checked="1">14 Users remaining until your plan requires update</div>
                <!--end::Description-->

                <!--begin::Action-->
                <div class="d-flex justify-content-end pb-0 px-0" bis_skin_checked="1">
                    <a href="#" class="btn btn-light btn-active-light-primary me-2" id="kt_account_billing_cancel_subscription_btn">Cancel Subscription</a>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Card body-->
</div>

<div class="card mb-5 mb-xl-10" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header card-header-stretch pb-0" bis_skin_checked="1">
        <!--begin::Title-->
        <div class="card-title" bis_skin_checked="1">
            <h3 class="m-0">Payment Methods</h3>
        </div>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar m-0" bis_skin_checked="1">
            <!--begin::Tab nav-->
            <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a id="kt_billing_creditcard_tab" class="nav-link fs-5 fw-bold me-5 active" data-bs-toggle="tab" role="tab" href="#kt_billing_creditcard" aria-selected="true">
                        Credit / Debit Card
                    </a>
                </li>
                <!--end::Tab item-->

                <!--begin::Tab item-->
                <li class="nav-item" role="presentation">
                    <a id="kt_billing_paypal_tab" class="nav-link fs-5 fw-bold" data-bs-toggle="tab" role="tab" href="#kt_billing_paypal" aria-selected="false" tabindex="-1">
                        Paypal
                    </a>
                </li>
                <!--end::Tab item-->
            </ul>
            <!--end::Tab nav-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Tab content-->
    <div id="kt_billing_payment_tab_content" class="card-body tab-content" bis_skin_checked="1">
        <!--begin::Tab panel-->
        <div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel" "="" bis_skin_checked="1" aria-labelledby="kt_billing_creditcard_tab">
            <!--begin::Title-->
            <h3 class="mb-5">My Cards</h3>
            <!--end::Title-->

            <!--begin::Row-->
            <div class="row gx-9 gy-6" bis_skin_checked="1">
                <!--begin::Col-->
                <div class="col-xl-6" data-kt-billing-element="card" bis_skin_checked="1">
                    <!--begin::Card-->
                    <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6" bis_skin_checked="1">
                        <!--begin::Info-->
                        <div class="d-flex flex-column py-2" bis_skin_checked="1">
                            <!--begin::Owner-->
                            <div class="d-flex align-items-center fs-4 fw-bold mb-5" bis_skin_checked="1">
                                Marcus Morris 
                                <span class="badge badge-light-success fs-7 ms-2">Primary</span>
                            </div>
                            <!--end::Owner-->

                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <!--begin::Icon-->
                                <img src="{{asset('assets/media/billing/visa.svg')}}" alt="image">  
                                <!--end::Icon-->

                                <!--begin::Details-->
                                <div bis_skin_checked="1">
                                    <div class="fs-4 fw-bold" bis_skin_checked="1">Visa **** 1679</div>
                                    <div class="fs-6 fw-semibold text-gray-500" bis_skin_checked="1">Card expires at 09/24</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2" bis_skin_checked="1">
                            <button class="btn btn-sm btn-light btn-active-light-primary me-3" data-kt-billing-action="card-delete">
                                
<!--begin::Indicator label-->
<span class="indicator-label">
    Delete</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->         
                            </button>
                            <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#payment_card">Edit</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-6" data-kt-billing-element="card" bis_skin_checked="1">
                    <!--begin::Card-->
                    <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6" bis_skin_checked="1">
                        <!--begin::Info-->
                        <div class="d-flex flex-column py-2" bis_skin_checked="1">
                            <!--begin::Owner-->
                            <div class="d-flex align-items-center fs-4 fw-bold mb-5" bis_skin_checked="1">
                                Jacob Holder 
                            </div>
                            <!--end::Owner-->

                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <!--begin::Icon-->
                                <img src="{{asset('assets/media/billing/american-express.svg')}}" alt="image">  
                                <!--end::Icon-->

                                <!--begin::Details-->
                                <div bis_skin_checked="1">
                                    <div class="fs-4 fw-bold" bis_skin_checked="1">Mastercard **** 2040</div>
                                    <div class="fs-6 fw-semibold text-gray-500" bis_skin_checked="1">Card expires at 10/22</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2" bis_skin_checked="1">
                            <button class="btn btn-sm btn-light btn-active-light-primary me-3" data-kt-billing-action="card-delete">
                                
<!--begin::Indicator label-->
<span class="indicator-label">
    Delete</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->         
                            </button>
                            <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Edit</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-6" data-kt-billing-element="card" bis_skin_checked="1">
                    <!--begin::Card-->
                    <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6" bis_skin_checked="1">
                        <!--begin::Info-->
                        <div class="d-flex flex-column py-2" bis_skin_checked="1">
                            <!--begin::Owner-->
                            <div class="d-flex align-items-center fs-4 fw-bold mb-5" bis_skin_checked="1">
                                Jhon Larson
                            </div>
                            <!--end::Owner-->

                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <!--begin::Icon-->
                                <img src="{{asset('assets/media/billing/mastercard.svg')}}" alt="image">  
                                <!--end::Icon-->

                                <!--begin::Details-->
                                <div bis_skin_checked="1">
                                    <div class="fs-4 fw-bold" bis_skin_checked="1">Mastercard **** 1290</div>
                                    <div class="fs-6 fw-semibold text-gray-500" bis_skin_checked="1">Card expires at 03/23</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2" bis_skin_checked="1">
                            <button class="btn btn-sm btn-light btn-active-light-primary me-3" data-kt-billing-action="card-delete">
                                
<!--begin::Indicator label-->
<span class="indicator-label">
    Delete</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->         
                            </button>
                            <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Edit</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-6" bis_skin_checked="1">
                    
<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6" bis_skin_checked="1">
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap" bis_skin_checked="1">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold" bis_skin_checked="1">
                                    <h4 class="text-gray-900 fw-bold">Important Note!</h4>
                
                                    <div class="fs-6 text-gray-700 pe-7" bis_skin_checked="1">Please carefully read <a href="#" class="fw-bold me-1">Product Terms</a> adding <br> your new payment card</div>
                            </div>
            <!--end::Content-->
        
                    <!--begin::Action-->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card"> 
                Add Card            </a>
            <!--end::Action-->
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Tab panel-->

        <!--begin::Tab panel-->
        <div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel" aria-labelledby="kt_billing_paypal_tab" bis_skin_checked="1">
            <!--begin::Title-->
            <h3 class="mb-5">My Paypal</h3>
            <!--end::Title--> 

            <!--begin::Description-->
            <div class="text-gray-600 fs-6 fw-semibold mb-5" bis_skin_checked="1">To use PayPal as your payment method, you will need to make pre-payments each month before your bill is due.</div>
            <!--end::Description-->

            <!--begin::Form-->
            <form class="form">
                <!--begin::Input group-->
                <div class="mb-7 mw-350px" bis_skin_checked="1">
                    <select name="timezone" data-control="select2" data-placeholder="Select an option" data-hide-search="true" class="form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700 select2-hidden-accessible" data-select2-id="select2-data-9-lkjg" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option data-select2-id="select2-data-11-unq5">Select an option</option>
                        <option value="25">US $25.00</option>
                        <option value="50">US $50.00</option>
                        <option value="100">US $100.00</option>
                        <option value="125">US $125.00</option>
                        <option value="150">US $150.00</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-x71b" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-timezone-9v-container" aria-controls="select2-timezone-9v-container"><span class="select2-selection__rendered" id="select2-timezone-9v-container" role="textbox" aria-readonly="true" title="Select an option">Select an option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!--end::Input group-->

                <button type="submit" class="btn btn-primary">Pay with Paypal</button>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Tab panel-->
        <div class="mt-10" bis_skin_checked="1">
            <h3 class="mb-3">Tax Location</h3>
            
            <div class="fw-semibold text-gray-600 fs-6" bis_skin_checked="1">
                United States - 10% VAT<br>
                <a class="fw-bold" href="#">More Info</a>
            </div>
        </div>
    </div>
    <!--end::Tab content-->
   
</div>


<div class="card " bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header card-header-stretch border-bottom border-gray-200" bis_skin_checked="1">
        <!--begin::Title-->
        <div class="card-title" bis_skin_checked="1">
            <h3 class="fw-bold m-0">Billing History</h3>
        </div>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar m-0" bis_skin_checked="1">
            <!--begin::Tab nav-->
            <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                <!--begin::Tab nav item-->
                <li class="nav-item" role="presentation">
                    <a id="kt_billing_6months_tab" class="nav-link fs-5 fw-semibold me-3 active" data-bs-toggle="tab" role="tab" href="#kt_billing_months" aria-selected="true">
                        Month
                    </a>
                </li>
                <!--end::Tab nav item-->

                <!--begin::Tab nav item-->
                <li class="nav-item" role="presentation">
                    <a id="kt_billing_1year_tab" class="nav-link fs-5 fw-semibold me-3" data-bs-toggle="tab" role="tab" href="#kt_billing_year" aria-selected="false" tabindex="-1">
                        Year
                    </a>
                </li>
                <!--end::Tab nav item-->

                <!--begin::Tab nav item-->
                <li class="nav-item" role="presentation">
                    <a id="kt_billing_alltime_tab" class="nav-link fs-5 fw-semibold" data-bs-toggle="tab" role="tab" href="#kt_billing_all" aria-selected="false" tabindex="-1">
                        All Time
                    </a>
                </li>
                <!--end::Tab nav item-->
            </ul>
            <!--end::Tab nav-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Tab Content-->
    <div class="tab-content" bis_skin_checked="1">
                        <!--begin::Tab panel-->
        <div id="kt_billing_months" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_billing_months" bis_skin_checked="1">
            <!--begin::Table container-->
            <div class="table-responsive" bis_skin_checked="1">
                <!--begin::Table-->
                <table class="table table-row-bordered align-middle gy-4 gs-9">
                    <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                        <tr>
                            <td class="min-w-150px">Date</td>
                            <td class="min-w-250px">Description</td>
                            <td class="min-w-150px">Amount</td>
                            <td class="min-w-150px">Invoice</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Nov 01, 2020</td>
                                <td><a href="#">Invoice for Ocrober 2024</a></td>
                                <td>$123.79</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Oct 08, 2020</td>
                                <td><a href="#">Invoice for September 2024</a></td>
                                <td>$98.03</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Aug 24, 2020</td>
                                <td>Paypal</td>
                                <td>$35.07</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Aug 01, 2020</td>
                                <td><a href="#">Invoice for July 2024</a></td>
                                <td>$142.80</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Jul 01, 2020</td>
                                <td><a href="#">Invoice for June 2024</a></td>
                                <td>$123.79</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Jun 17, 2020</td>
                                <td>Paypal</td>
                                <td>$523.09</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Jun 01, 2020</td>
                                <td><a href="#">Invoice for May 2024</a></td>
                                <td>$123.79</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                            </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
        <div id="kt_billing_year" class="card-body p-0 tab-pane fade " role="tabpanel" aria-labelledby="kt_billing_year" bis_skin_checked="1">
            <!--begin::Table container-->
            <div class="table-responsive" bis_skin_checked="1">
                <!--begin::Table-->
                <table class="table table-row-bordered align-middle gy-4 gs-9">
                    <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                        <tr>
                            <td class="min-w-150px">Date</td>
                            <td class="min-w-250px">Description</td>
                            <td class="min-w-150px">Amount</td>
                            <td class="min-w-150px">Invoice</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Dec 01, 2021</td>
                                <td><a href="#">Billing for Ocrober 2024</a></td>
                                <td>$250.79</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Oct 08, 2021</td>
                                <td><a href="#">Statements for September 2024</a></td>
                                <td>$98.03</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Aug 24, 2021</td>
                                <td>Paypal</td>
                                <td>$35.07</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Aug 01, 2021</td>
                                <td><a href="#">Invoice for July 2024</a></td>
                                <td>$142.80</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Jul 01, 2021</td>
                                <td><a href="#">Statements for June 2024</a></td>
                                <td>$123.79</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Jun 17, 2021</td>
                                <td>Paypal</td>
                                <td>$23.09</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                            </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
        <div id="kt_billing_all" class="card-body p-0 tab-pane fade " role="tabpanel" aria-labelledby="kt_billing_all" bis_skin_checked="1">
            <!--begin::Table container-->
            <div class="table-responsive" bis_skin_checked="1">
                <!--begin::Table-->
                <table class="table table-row-bordered align-middle gy-4 gs-9">
                    <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                        <tr>
                            <td class="min-w-150px">Date</td>
                            <td class="min-w-250px">Description</td>
                            <td class="min-w-150px">Amount</td>
                            <td class="min-w-150px">Invoice</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Nov 01, 2021</td>
                                <td><a href="#">Billing for Ocrober 2024</a></td>
                                <td>$123.79</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Aug 10, 2021</td>
                                <td>Paypal</td>
                                <td>$35.07</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Aug 01, 2021</td>
                                <td><a href="#">Invoice for July 2024</a></td>
                                <td>$142.80</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Jul 20, 2021</td>
                                <td><a href="#">Statements for June 2024</a></td>
                                <td>$123.79</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Jun 17, 2021</td>
                                <td>Paypal</td>
                                <td>$23.09</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                                    <!--begin::Table row-->
                            <tr>
                                <td>Jun 01, 2021</td>
                                <td><a href="#">Invoice for May 2024</a></td>
                                <td>$123.79</td>
                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                            </tr>
                            <!--end::Table row-->
                                            </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Tab panel-->
            </div>
    <!--end::Tab Content-->
</div>






<div class="modal fade" id="payment_card" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
      </div>
      <div class="modal-body scroll-y mx-5 mx-xl-15 my-7" bis_skin_checked="1">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
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
            <img src="/metronic8/demo1/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px">
            <img src="/metronic8/demo1/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px">
            <img src="/metronic8/demo1/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px">
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
                <select name="card_expiry_month" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Month" data-select2-id="select2-data-21-g6q6" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option data-select2-id="select2-data-23-4rjd"></option>
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
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-22-xu6i" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_month-nf-container" aria-controls="select2-card_expiry_month-nf-container"><span class="select2-selection__rendered" id="select2-card_expiry_month-nf-container" role="textbox" aria-readonly="true" title="Month"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-6" bis_skin_checked="1">
                <select name="card_expiry_year" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Year" data-select2-id="select2-data-24-t40x" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option data-select2-id="select2-data-26-t9nc"></option>
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
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-25-bdqg" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_year-kq-container" aria-controls="select2-card_expiry_year-kq-container"><span class="select2-selection__rendered" id="select2-card_expiry_year-kq-container" role="textbox" aria-readonly="true" title="Year"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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


                    <!--begin::Actions-->
                    <div class="text-center pt-15" bis_skin_checked="1">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">
                            Discard
                        </button>

                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
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
    </div>
  </div>
</div>






    </x-default-layout>
