<x-default-layout>

    @section('title')
        Conversation Review
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
/* .table-action a .bi-pencil-square {
    color: green;
}
.table-action a .bi-trash3 {
    color: red;
} */
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
            <span>{{$recordings->count()}} recordings</span>
        </div>
        <form class="row">             
        </form>
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
                    <th class="sorting sorting_desc" rowspan="1" colspan="1">Agent Name</th>
                    <th class="sorting">Duration</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recordings as $recording)
                    <tr>
                        <td class="sorting_1"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                        <td class="sorting_1">Nash</td>
                        <td class="text-nowrap">1h</td>
                    </tr>
                @endforeach
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
                        <div class="border p-5 my-5 rounded h-400px overflow-y-auto">
                        <p><b>General context / background on prospect:</b></p>
                        <p>- The prespect's name is Nash.</p>
                        <p>- The rep did not speak to the right person.</p>

                        <p><b>Notes:</b></p>
                        <p>- The call starts with thr bot asking, "Hi. is this Nash?"</p>
                        <p>- The prospect responds, "no."</p>

                        <p><b>Quotes:</b></p>
                        <p>- Bot: "Hi. is this Nash?"</p>
                        <p>- Prospect: "no."</p>
                        <p>- Bot: "Alright"</p>
                        <p>BOT: I must have gotten the wrong numner then.</p>
                        <p>BOT: Goodbye. </p>                        
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
                            <p>BOT:~ "Hi. is this Nash?"
                            <p>HUMAN: no</p>
                            <p>BOT: Alright</p>
                            <p>BOT: I must have gotten the wrong numner then.</p>
                            <p>BOT: Goodbye. </p>
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
