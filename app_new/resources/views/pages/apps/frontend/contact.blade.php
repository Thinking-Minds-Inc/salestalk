<x-default-layout>

    @section('title')
       Contact
    @endsection

   

    <div class="card" bis_skin_checked="1">      
        <div class="card-body p-lg-15" bis_skin_checked="1"> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Contact Us
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered mw-750px">
    <div class="modal-content">
    <div class="modal-header pb-0 border-0 justify-content-end" bis_skin_checked="1">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>      
      <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
      <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" data-select2-id="select2-data-kt_modal_new_target_form">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center" bis_skin_checked="1">
                        <!--begin::Title-->
                        <h1 class="mb-3">Set First Target</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-gray-500 fw-semibold fs-5" bis_skin_checked="1">
                            If you need more info, please check <a href="" class="fw-bold link-primary">Support Guidelines</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Target Title</span>
                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a subject for your issue" data-bs-original-title="Specify a subject for your issue" data-kt-initialized="1">
                                <i class="ki-duotone ki-information fs-7">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                  <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->

                        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="subject">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                    <!--end::Input group-->
                    <div class="row g-9 mb-8" bis_skin_checked="1">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row" bis_skin_checked="1">
                              <label for="inputState" class="form-label required fs-6 fw-semibold mb-2">Assign</label>
                              <select id="inputState" class="form-select form-select-solid">
                                <option value="" data-select2-id="select2-data-14-ohsr">Select a Team Member</option>
                                <option value="1">Karina Clark</option>
                                <option value="2">Robert Doe</option>
                                <option value="3">Niel Owen</option>
                                <option value="4">Olivia Wild</option>
                                <option value="5">Sean Bean</option>                          
                              </select>
                        </div>
                        <!--end::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid" bis_skin_checked="1">
                            <label class="required fs-6 fw-semibold mb-2">Due Date</label>

                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center" bis_skin_checked="1">
                                <!--begin::Icon-->
                                <div class="symbol symbol-20px me-4 position-absolute ms-4" bis_skin_checked="1">
                                    <span class="symbol-label bg-secondary">
                                      <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
                                    </span>
                                </div>
                                <!--end::Icon-->

                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12 flatpickr-input" placeholder="Select a date" name="due_date" type="text" readonly="readonly">
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container" bis_skin_checked="1">
                        <label class="fs-6 fw-semibold mb-2">Target Details</label>
                        <textarea class="form-control form-control-solid" rows="4" name="description" spellcheck="false">                          
                        </textarea>
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tags</span>

                            
<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify a target priorty" data-bs-original-title="Specify a target priorty" data-kt-initialized="1">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>                        </label>
                        <!--end::Label-->

        <input class="form-control form-control-solid" value="Important, Urgent" name="tags" tabindex="-1">
                    </div>

                    <div class="fv-row mb-7" bis_skin_checked="1">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack" bis_skin_checked="1">
                                    <!--begin::Label-->
                                    <div class="me-5" bis_skin_checked="1">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold">Adding users by Team Members</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <div class="fs-7 fw-semibold text-muted" bis_skin_checked="1">If you need more info, please check budget planning</div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_add_customer_billing" checked="checked">
                                        <!--end::Input-->

                                        <!--begin::Label-->
                                        <span class="form-check-label fw-semibold text-muted" for="kt_modal_add_customer_billing">
                                            Allowed
                                        </span>
                                        <!--end::Label-->
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--begin::Wrapper-->
                            </div>

                    <div class="mb-15 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid" bis_skin_checked="1">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack" bis_skin_checked="1">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5" bis_skin_checked="1">
                                <label class="fs-6">Notifications</label>

                                <div class="fs-7 text-gray-500" bis_skin_checked="1">Allow Notifications by Phone or Email</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked">

                                    <span class="form-check-label fw-semibold">
                                        Email
                                    </span>
                                </label>
                                <!--end::Checkbox-->

                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone">

                                    <span class="form-check-label fw-semibold">
                                        Phone
                                    </span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                    <div class="text-center" bis_skin_checked="1">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>

                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                  </from>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/utilities/modals/new-target.js"></script>

    </x-default-layout>