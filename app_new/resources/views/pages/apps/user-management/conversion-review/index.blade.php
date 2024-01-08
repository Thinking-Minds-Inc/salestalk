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
        /* Style for the popup container */
        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            border-radius: 10px;
        }
        a.table-link, a.table-link i {
            color: #1b84ff;
            cursor: pointer;
        }

        a.table-link .bi-play-fill {
            font-size: 16px;
        }
        /* Style for the close button */
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        .popup-container audio {
            width: 100%;
        }
</style>
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6 d-block w-100">
        <div class="heading-part mb-5">    
            <h2 class="page-heading d-flex text-gray-900 fw-bold fs-3">Recordings</h2>
            <span>290 recordings</span>
        </div>
        <div class="row">             
        <div class="col-sm-6 col-md-2 first-col my-1">            
            <select class="form-select form-select-solid text-gray-600 fw-bold" aria-label="Default select example">
                <option selected>Call Source</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-sm-6 col-md-3 first-col  my-1">            
        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-light d-flex align-items-center px-4" data-kt-initialized="1" bis_skin_checked="1">           
                <!--begin::Display range-->
                <div class="text-gray-600 fw-bold" bis_skin_checked="1">5 Dec 2023 - 3 Jan 2024 5:53 PM</div>
                <!--end::Display range-->

                <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>       
            </div>
        </div>         
        <div class="col-sm-6 col-md-2 first-col my-1">            
            <select class="form-select form-select-solid text-gray-600 fw-bold" aria-label="Default select example">
                <option selected>Outcome</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div> 
        <div class="col-sm-6 col-md-3 first-col  my-1">            
            <select class="form-select form-select-solid text-gray-600 fw-bold" aria-label="Default select example">
                <option selected>Call duration</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>   
        <div class="col-sm-6 col-md-2 first-col  my-1">           
            <div class="d-flex align-items-center position-relative">
                    {!! getIcon('magnifier','fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid ps-13" placeholder="Search" id="mySearchInput"/>
                </div>
            </div>
            <!--begin::Card title-->
            <div class="card-title col-sm-6 col-md-2 d-none">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier','fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid ps-13" placeholder="Search training session" id="mySearchInput"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar d-none">
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
    </div>
        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold" id="permissions-table" style="width: 1040px;">
            <thead class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <tr>
                    <th class="sorting_1"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                    <th class="sorting sorting_desc" rowspan="1" colspan="1">Cobtact Name</th>
                    <th class="sorting">Contact Number</th>
                    <th class="text-nowrap sorting">Call Source</th>
                    <th class="text-nowrap sorting">Direction</th>
                    <th class="text-nowrap sorting">Date</th>     
                    <th class="text-nowrap sorting">Duration</th>       
                    <th class="text-nowrap sorting">Outcome</th>   
                    <th class="text-nowrap sorting">Recording</th>                                                                    
                    <th class="text-nowrap sorting">Transcript & Notes</th>
                    <th class="text-nowrap sorting">Feedback</th>                                        
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="sorting_1"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <td class="sorting_1">Nash</td>
                    <td class="text-nowrap">+1234569870</td>
                    <td class="text-nowrap">Roleplay</td>
                    <td class="text-nowrap">Outboard</td>
                    <td class="text-nowrap">03 Jan 2024, 06:55 am</td>
                    <td class="text-nowrap">00:00:09</td>
                    <td class="text-nowrap">Do Not Call List</td>
                    <td class="text-nowrap"><a class="table-link" onclick="openAudioPopup()"><i class="bi bi-play-fill"></i> Listion</a></td>
                    <td class="text-nowrap text-center"><a class="table-link" data-bs-toggle="modal" data-bs-target="#readmore"><i class="bi bi-file-earmark-richtext-fill"></i> Read</a></td>
                    <td class="text-nowrap"><a class="table-link"><i class="bi bi-flag-fill"></i> Feedback</a></td>                                                                                                                                            
                </tr>
                <tr>
                    <td class="sorting_1"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <td class="sorting_1">Nash</td>
                    <td class="text-nowrap">+1234569870</td>
                    <td class="text-nowrap">Roleplay</td>
                    <td class="text-nowrap">Outboard</td>
                    <td class="text-nowrap">03 Jan 2024, 06:55 am</td>
                    <td class="text-nowrap">00:00:09</td>
                    <td class="text-nowrap">Do Not Call List</td>
                    <td class="text-nowrap"><a class="table-link" onclick="openAudioPopup()"><i class="bi bi-play-fill"></i> Listion</a></td>
                    <td class="text-nowrap text-center"><a class="table-link" data-bs-toggle="modal" data-bs-target="#readmore"><i class="bi bi-file-earmark-richtext-fill"></i> Read</a></td>
                    <td class="text-nowrap"><a class="table-link"><i class="bi bi-flag-fill"></i> Feedback</a></td>                                                                                                                                            
                </tr>
                <tr>
                    <td class="sorting_1"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <td class="sorting_1">Nash</td>
                    <td class="text-nowrap">+1234569870</td>
                    <td class="text-nowrap">Roleplay</td>
                    <td class="text-nowrap">Outboard</td>
                    <td class="text-nowrap">03 Jan 2024, 06:55 am</td>
                    <td class="text-nowrap">00:00:09</td>
                    <td class="text-nowrap">Do Not Call List</td>
                    <td class="text-nowrap"><a class="table-link" onclick="openAudioPopup()"><i class="bi bi-play-fill"></i> Listion</a></td>
                    <td class="text-nowrap text-center"><a class="table-link" data-bs-toggle="modal" data-bs-target="#readmore"><i class="bi bi-file-earmark-richtext-fill"></i> Read</a></td>
                    <td class="text-nowrap"><a class="table-link"><i class="bi bi-flag-fill"></i> Feedback</a></td>                                                                                                                                            
                </tr>
                <tr>
                    <td class="sorting_1"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <td class="sorting_1">Nash</td>
                    <td class="text-nowrap">+1234569870</td>
                    <td class="text-nowrap">Roleplay</td>
                    <td class="text-nowrap">Outboard</td>
                    <td class="text-nowrap">03 Jan 2024, 06:55 am</td>
                    <td class="text-nowrap">00:00:09</td>
                    <td class="text-nowrap">Do Not Call List</td>
                    <td class="text-nowrap"><a class="table-link" onclick="openAudioPopup()"><i class="bi bi-play-fill"></i> Listion</a></td>
                    <td class="text-nowrap text-center"><a class="table-link" data-bs-toggle="modal" data-bs-target="#readmore"><i class="bi bi-file-earmark-richtext-fill"></i> Read</a></td>
                    <td class="text-nowrap"><a class="table-link"><i class="bi bi-flag-fill"></i> Feedback</a></td>                                                                                                                                            
                </tr>                                                   
                </tbody>            
            </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

<!-- Popup container with audio element -->
<div id="audioPopup" class="popup-container">
    <!-- <span class="popup-close" onclick="closeAudioPopup()">&times;</span> -->
    <div onclick="closeAudioPopup()" class="btn btn-sm btn-icon btn-active-color-primary w-100 justify-content-end" data-bs-dismiss="modal" bis_skin_checked="1"><span class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></span></div>    
    <audio controls>
        <source src="your-audio-file.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
</div>

<script>
    // Function to open the audio popup
    function openAudioPopup() {
        document.getElementById('audioPopup').style.display = 'block';
    }

    // Function to close the audio popup
    function closeAudioPopup() {
        document.getElementById('audioPopup').style.display = 'none';
    }
</script>
    <livewire:permission.permission-modal></livewire:permission.permission-modal>


<!-- Modal -->
<div class="modal fade" id="readmore" tabindex="-1" aria-labelledby="trainingSessionLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 ml-auto col-xl-12 mr-auto">

            <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Tabs-->
            <ul class="nav nav-tabs justify-content-center bg-light p-1 text-center rounded" role="tablist">
                <li class="nav-item w-50" role="presentation">
                    <a class="nav-link w-100 rounded btn btn-sm btn-color-muted btn-active fw-bold px-4 me-1 active" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#one" aria-selected="true" role="tab">Notes</a>
                </li>

                <li class="nav-item w-50" role="presentation">
                    <a class="nav-link w-100 rounded btn btn-sm btn-color-muted fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#two" aria-selected="false" role="tab" tabindex="-1">Transript</a>
                </li>
            </ul>
            <!--end::Tabs-->
        </div>
        <div class="tab-content" bis_skin_checked="1">
            <!--begin::Tab pane-->
            <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="day-tab">
            <div class="text-center my-5">
                            <h3>Notes form Roleplay</h3>
                            <span>12/05/2023 5:32 PM</span>
                        </div>
                        <div class="border p-5 my-5 rounded">
                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                        </div>
                        <div class="d-flex gap-3">
                        <button type="button" class="btn btn-primary w-50" data-bs-dismiss="modal">Copy</button>
                        <button type="button" class="btn btn-primary w-50">Download</button>            
                        </div>  
        </div>
        <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="day-tab">
        <div class="text-center my-5">
                            <h3>Transript form Roleplay</h3>
                            <span>12/05/2023 5:32 PM</span>
                        </div> 
                        <div class="border p-5 my-5 rounded">                       
                            <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                        </div>
                    <div class="d-flex gap-3">                        
                        <button type="button" class="btn btn-primary w-50" data-bs-dismiss="modal">Copy</button>
                        <button type="button" class="btn btn-primary w-50">Download</button>            
                    </div>  
        </div>        
        </div>
        </div>      
      </div>
    </div>
  </div>
</div>

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
