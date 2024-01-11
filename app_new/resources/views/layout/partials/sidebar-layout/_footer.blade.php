<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer">
	<!--begin::Footer container-->
	<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
		<!--begin::Copyright-->
		<div class="text-gray-900 order-2 order-md-1">
			<span class="text-muted fw-semibold me-1">{{ date('Y') }}&copy;</span>
			<a href="{{route('dashboard')}}" class="text-gray-800 text-hover-primary">SalesTalk</a>
		</div>
		<!--end::Copyright-->
		<!--begin::Menu-->
		<!-- <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
			<li class="menu-item">
				<a href="#" class="menu-link px-2">About</a>
			</li>
			<li class="menu-item">
				<a href="{{route('frontend.faq')}}" class="menu-link px-2">Faq</a>
			</li>
			<li class="menu-item">
				<a href="{{route('frontend.contact')}}" class="menu-link px-2">Contact</a>
			</li>
		</ul> -->
		<!--end::Menu-->
	</div>
	<!--end::Footer container-->
</div>
<!--end::Footer-->

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