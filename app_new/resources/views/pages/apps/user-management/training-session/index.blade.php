<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection
<style>
.form-check-box {
    border: 1px solid #f1f1f4;
    border-radius: 10px;
}

.form-check-box .form-check {
    padding: 15px 10px 15px 3.25rem;
    border-bottom: 1px solid #f1f1f4;
}
.table-action a .bi-pencil-square {
    color: green;
}
.table-action a .bi-trash3 {
    color: red;
}
.form-check-box .form-check:last-child {
    border: none;
} 
.table-responsive td.table-action {
    display: flex;
    align-items: center;
    gap: 2px;
}   
</style>
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier','fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search training session" id="mySearchInput"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#training-session">
                        {!! getIcon('plus-square','fs-3', '', 'i') !!}
                        Add Training Session
                    </button>
                </div>
                <!--end::Toolbar-->

                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-user-table-select="selected_count"></span>
                        Selected
                    </div>

                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
                        Delete Selected
                    </button>
                </div>
                <!--end::Group actions-->

                <!--begin::Modal-->
                <livewire:user.add-user-modal></livewire:user.add-user-modal>
                <!--end::Modal-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold">
                    <thead>
                        <tr>
                            <th scope="col" class="sorting sorting_desc">Name</th>
                            <th scope="col">Training Session</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Mark</th>
                            <td>Mark</td>
                            <td class="table-action">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-permission-id="write user management" data-bs-toggle="modal" data-bs-target="#training-session">
                                    <span class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </span>
                                </button>
                                
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-permission-id="write user management" data-kt-action="delete_row">
                                    <span class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Jacob</th>
                            <td>Jacob</td>
                            <td class="table-action">
                            <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-permission-id="write user management" data-bs-toggle="modal" data-bs-target="#training-session">
                                    <span class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </span>
                                </button>
                                
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-permission-id="write user management" data-kt-action="delete_row">
                                    <span class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Jacob</th>
                            <td>Larry the Bird</td>
                            <td class="table-action">
                            <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-permission-id="write user management" data-bs-toggle="modal" data-bs-target="#training-session">
                                    <span class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </span>
                                </button>
                                
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-permission-id="write user management" data-kt-action="delete_row">
                                    <span class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    </table>                
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

    <livewire:permission.permission-modal></livewire:permission.permission-modal>


<!-- Modal -->
<div class="modal fade" id="training-session" tabindex="-1" aria-labelledby="trainingSessionLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="trainingSessionLabel">Create The New Agent</h2>
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal" bis_skin_checked="1"><span class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></span></div>
      </div>
      <div class="modal-body">
        <form class="training-form">
            <div class="mb-3">
                <label for="traning-name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-solid" id="traning-name" aria-describedby="emailHelp" placeholder="Name">
            </div>
            <div class="radio-group-items">            
            <label for="choose-case" class="form-label">Choose Your Use Case</label>
                <div class="form-check-box">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Sales
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Customer Services
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Other (Custom use case)
                        </label>
                    </div>
                </div>
            </div>                             
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>


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
