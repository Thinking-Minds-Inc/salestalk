<x-default-layout>

    @section('title')
        Training Session
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection
<style>

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
