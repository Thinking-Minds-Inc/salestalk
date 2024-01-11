<x-default-layout>

    @section('title')
        Dashboard
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection
   
<!-- <style>
    .my-tasks-col{
    background-image:url('assets/media/patterns/top-green.png');
    background-size: cover;
    background-repeat: no-repeat;
}
</style> -->


<div class="row g-5 g-xl-10" bis_skin_checked="1">
<div class="col-md-12 col-xl-6 m-0" bis_skin_checked="1">
    <!--begin::Slider Widget 1-->
    <div id="training-session-box" class="card card-flush h-xl-100">
        <!--begin::Header-->
        <div class="card-header pt-5" bis_skin_checked="1">
            <!--begin::Title-->
            <h4 class="card-title d-flex align-items-start flex-column">            
                <span class="card-label fw-bold text-gray-800">Training Sessions Completed</span>
                <!-- <span class="text-gray-500 mt-1 fw-bold fs-7">4 lessons, 3 hours 45 minutes</span> -->
            </h4>
            <!--end::Title-->

            <!--begin::Toolbar-->
            <div class="card-toolbar" bis_skin_checked="1">            
                <a href="{{route('user-management.training-session')}}" class="btn btn-light-primary">
                    {!! getIcon('plus-square','fs-3', '', 'i') !!} ADD                       
                </a>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header--> 

        <!--begin::Body-->
        <div class="card-body py-6" bis_skin_checked="1">  
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Training Session</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Mark</th>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <th scope="row">Jacob</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">Jacob</th>
                            <td>Larry the Bird</td>
                        </tr>
                        <tr>
                            <th scope="row">Jacob</th>
                            <td>Larry the Bird</td>
                        </tr>                        
                    </tbody>
                    </table>                
            </div>
            <!--end::Table-->            
        </div>
        <!--end::Body-->     
    </div>
    <!--end::Slider Widget 1-->
</div>

<div class="col-md-12 col-xl-6 m-0" bis_skin_checked="1">                    
    <!--begin::Slider Widget 1-->
    <div id="training-session-box" class="card card-flush h-xl-100">
        <!--begin::Header-->
        <div class="card-header pt-5" bis_skin_checked="1">
            <!--begin::Title-->
            <h4 class="card-title d-flex align-items-start flex-column">            
                <span class="card-label fw-bold text-gray-800">Num Conversation Recordings</span>
                <!-- <span class="text-gray-500 mt-1 fw-bold fs-7">4 lessons, 3 hours 45 minutes</span> -->
            </h4>
            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="card-toolbar" bis_skin_checked="1">            
                <a href="{{route('user-management.conversion-review')}}" class="btn btn-light-warning">
                    {!! getIcon('plus-square','fs-3', '', 'i') !!} ADD                   
                </a>
            </div>
            <!--end::Toolbar-->            
        </div>
        <!--end::Header--> 

        <!--begin::Body-->
        <div class="card-body py-6" bis_skin_checked="1">  
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold">
                    <thead>
                        <tr>
                            <th scope="col">Contact Name</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Call Source</th>
                            <th scope="col">Direction</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Mark</th>
                            <td class="text-nowrap">+1234569870</td>
                            <td class="text-nowrap">Roleplay</td>
                            <td class="text-nowrap">Outboard</td>                            
                        </tr>
                        <tr>
                            <th scope="row">Jacob</th>
                            <td class="text-nowrap">+1234569870</td>
                            <td class="text-nowrap">Roleplay</td>
                            <td class="text-nowrap">Outboard</td>                            
                        </tr>
                        <tr>
                            <th scope="row">Jacob</th>
                            <td class="text-nowrap">+1234569870</td>
                            <td class="text-nowrap">Roleplay</td>
                            <td class="text-nowrap">Outboard</td>                              
                        </tr>
                        <tr>
                            <th scope="row">Jacob</th>
                            <td class="text-nowrap">+1234569870</td>
                            <td class="text-nowrap">Roleplay</td>
                            <td class="text-nowrap">Outboard</td>                              
                        </tr>                        
                    </tbody>
                    </table>                
            </div>
            <!--end::Table-->               
        </div>
        <!--end::Body-->     
    </div>
    <!--end::Slider Widget 1-->
</div>
</div> 




</x-default-layout>
