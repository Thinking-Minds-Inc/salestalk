<x-default-layout>

    @section('title')
        Dashboard
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection
    <style id="apexcharts-css">@keyframes opaque {
  0% {
      opacity: 0
  }

  to {
      opacity: 1
  }
}

@keyframes resizeanim {
  0%,to {
      opacity: 0
  }
}

.apexcharts-canvas {
  position: relative;
  user-select: none
}

.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5)
}

.apexcharts-inner {
  position: relative
}

.apexcharts-text tspan {
  font-family: inherit
}

.legend-mouseover-inactive {
  transition: .15s ease all;
  opacity: .2
}

.apexcharts-legend-text {
  padding-left: 15px;
  margin-left: -15px;
}

.apexcharts-series-collapsed {
  opacity: 0
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: .15s ease all
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: .15s ease all
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255,255,255,.96)
}

.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30,30,30,.8)
}

.apexcharts-tooltip * {
  font-family: inherit
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #eceff1;
  border-bottom: 1px solid #ddd
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0,0,0,.7);
  border-bottom: 1px solid #333
}

.apexcharts-tooltip-text-goals-value,.apexcharts-tooltip-text-y-value,.apexcharts-tooltip-text-z-value {
  display: inline-block;
  margin-left: 5px;
  font-weight: 600
}

.apexcharts-tooltip-text-goals-label:empty,.apexcharts-tooltip-text-goals-value:empty,.apexcharts-tooltip-text-y-label:empty,.apexcharts-tooltip-text-y-value:empty,.apexcharts-tooltip-text-z-value:empty,.apexcharts-tooltip-title:empty {
  display: none
}

.apexcharts-tooltip-text-goals-label,.apexcharts-tooltip-text-goals-value {
  padding: 6px 0 5px
}

.apexcharts-tooltip-goals-group,.apexcharts-tooltip-text-goals-label,.apexcharts-tooltip-text-goals-value {
  display: flex
}

.apexcharts-tooltip-text-goals-label:not(:empty),.apexcharts-tooltip-text-goals-value:not(:empty) {
  margin-top: -6px
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0;
  margin-right: 10px;
  border-radius: 50%
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1
}

.apexcharts-tooltip-series-group.apexcharts-active,.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0!important
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px
}

.apexcharts-custom-tooltip,.apexcharts-tooltip-box {
  padding: 4px 8px
}

.apexcharts-tooltip-boxPlot {
  display: flex;
  flex-direction: column-reverse
}

.apexcharts-tooltip-box>div {
  margin: 4px 0
}

.apexcharts-tooltip-box span.value {
  font-weight: 700
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: 700;
  display: block;
  margin-bottom: 5px
}

.apexcharts-xaxistooltip,.apexcharts-yaxistooltip {
  opacity: 0;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #eceff1;
  border: 1px solid #90a4ae
}

.apexcharts-xaxistooltip {
  padding: 9px 10px;
  transition: .15s ease all
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0,0,0,.7);
  border: 1px solid rgba(0,0,0,.5);
  color: #fff
}

.apexcharts-xaxistooltip:after,.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none
}

.apexcharts-xaxistooltip:after {
  border-color: transparent;
  border-width: 6px;
  margin-left: -6px
}

.apexcharts-xaxistooltip:before {
  border-color: transparent;
  border-width: 7px;
  margin-left: -7px
}

.apexcharts-xaxistooltip-bottom:after,.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%
}

.apexcharts-xaxistooltip-top:after,.apexcharts-xaxistooltip-top:before {
  top: 100%
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #eceff1
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90a4ae
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0,0,0,.5)
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #eceff1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90a4ae
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0,0,0,.5)
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: .15s ease all
}

.apexcharts-yaxistooltip {
  padding: 4px 10px
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0,0,0,.7);
  border: 1px solid rgba(0,0,0,.5);
  color: #fff
}

.apexcharts-yaxistooltip:after,.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none
}

.apexcharts-yaxistooltip:after {
  border-color: transparent;
  border-width: 6px;
  margin-top: -6px
}

.apexcharts-yaxistooltip:before {
  border-color: transparent;
  border-width: 7px;
  margin-top: -7px
}

.apexcharts-yaxistooltip-left:after,.apexcharts-yaxistooltip-left:before {
  left: 100%
}

.apexcharts-yaxistooltip-right:after,.apexcharts-yaxistooltip-right:before {
  right: 100%
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #eceff1
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90a4ae
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0,0,0,.5)
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #eceff1
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90a4ae
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0,0,0,.5)
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1
}

.apexcharts-yaxistooltip-hidden {
  display: none
}

.apexcharts-xcrosshairs,.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: .15s ease all
}

.apexcharts-xcrosshairs.apexcharts-active,.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: .15s ease all
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0
}

.apexcharts-selection-rect {
  cursor: move
}

.svg_select_boundingRect,.svg_select_points_rot {
  pointer-events: none;
  opacity: 0;
  visibility: hidden
}

.apexcharts-selection-rect+g .svg_select_boundingRect,.apexcharts-selection-rect+g .svg_select_points_rot {
  opacity: 0;
  visibility: hidden
}

.apexcharts-selection-rect+g .svg_select_points_l,.apexcharts-selection-rect+g .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible
}

.svg_select_points {
  fill: #efefef;
  stroke: #333;
  rx: 2
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
  cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
  cursor: move
}

.apexcharts-menu-icon,.apexcharts-pan-icon,.apexcharts-reset-icon,.apexcharts-selection-icon,.apexcharts-toolbar-custom-icon,.apexcharts-zoom-icon,.apexcharts-zoomin-icon,.apexcharts-zoomout-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6e8192;
  text-align: center
}

.apexcharts-menu-icon svg,.apexcharts-reset-icon svg,.apexcharts-zoom-icon svg,.apexcharts-zoomin-icon svg,.apexcharts-zoomout-icon svg {
  fill: #6e8192
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(.76)
}

.apexcharts-theme-dark .apexcharts-menu-icon svg,.apexcharts-theme-dark .apexcharts-pan-icon svg,.apexcharts-theme-dark .apexcharts-reset-icon svg,.apexcharts-theme-dark .apexcharts-selection-icon svg,.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,.apexcharts-theme-dark .apexcharts-zoom-icon svg,.apexcharts-theme-dark .apexcharts-zoomin-icon svg,.apexcharts-theme-dark .apexcharts-zoomout-icon svg {
  fill: #f3f4f5
}

.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
  fill: #008ffb
}

.apexcharts-theme-light .apexcharts-menu-icon:hover svg,.apexcharts-theme-light .apexcharts-reset-icon:hover svg,.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
  fill: #333
}

.apexcharts-menu-icon,.apexcharts-selection-icon {
  position: relative
}

.apexcharts-reset-icon {
  margin-left: 5px
}

.apexcharts-menu-icon,.apexcharts-reset-icon,.apexcharts-zoom-icon {
  transform: scale(.85)
}

.apexcharts-zoomin-icon,.apexcharts-zoomout-icon {
  transform: scale(.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px
}

.apexcharts-pan-icon {
  transform: scale(.62);
  position: relative;
  left: 1px;
  top: 0
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6e8192;
  stroke-width: 2
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008ffb
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0 6px 2px;
  display: flex;
  justify-content: space-between;
  align-items: center
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: .15s ease all;
  pointer-events: none
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: .15s ease all
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0,0,0,.7);
  color: #fff
}

@media screen and (min-width:768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
      opacity: 1
  }
}

.apexcharts-canvas .apexcharts-element-hidden,.apexcharts-datalabel.apexcharts-element-hidden,.apexcharts-hide .apexcharts-series-points {
  opacity: 0
}

.apexcharts-hidden-element-shown {
  opacity: 1;
  transition: 0.25s ease all;
}
.apexcharts-datalabel,.apexcharts-datalabel-label,.apexcharts-datalabel-value,.apexcharts-datalabels,.apexcharts-pie-label {
  cursor: default;
  pointer-events: none
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: .3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease
}

.apexcharts-annotation-rect,.apexcharts-area-series .apexcharts-area,.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,.apexcharts-gridline,.apexcharts-line,.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,.apexcharts-point-annotation-label,.apexcharts-radar-series path,.apexcharts-radar-series polygon,.apexcharts-toolbar svg,.apexcharts-tooltip .apexcharts-marker,.apexcharts-xaxis-annotation-label,.apexcharts-yaxis-annotation-label,.apexcharts-zoom-rect {
  pointer-events: none
}

.apexcharts-marker {
  transition: .15s ease all
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
  height: 100%;
  width: 100%;
  overflow: hidden
}

.contract-trigger:before,.resize-triggers,.resize-triggers>div {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0
}

.resize-triggers>div {
  height: 100%;
  width: 100%;
  background: #eee;
  overflow: auto
}

.contract-trigger:before {
  overflow: hidden;
  width: 200%;
  height: 200%
}

.apexcharts-bar-goals-markers{
  pointer-events: none
}

.apexcharts-bar-shadows{
  pointer-events: none
}

.apexcharts-rangebar-goals-markers{
  pointer-events: none
}</style>    
<!-- <style>
    .my-tasks-col{
    background-image:url('assets/media/patterns/top-green.png');
    background-size: cover;
    background-repeat: no-repeat;
}
</style> -->
<link href="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">
<link href="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css">

<div class="row g-5 g-xl-10" bis_skin_checked="1">
    <!--begin::Col-->
    <div class="col-xl-4 mb-xl-10" bis_skin_checked="1">       
        
<!--begin::Lists Widget 19-->
<div class="card card-flush h-xl-100" bis_skin_checked="1">   
    <!--begin::Heading-->
    <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('assets/media/patterns/top-green.png');" data-bs-theme="light" bis_skin_checked="1">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column text-white pt-15">
            <span class="fw-bold fs-2x mb-3">My Tasks</span>
            
            <div class="fs-4 text-white" bis_skin_checked="1">
                <span class="opacity-75">You have</span>

                <span class="position-relative d-inline-block">
                    <a href="#" class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>

                    <!--begin::Separator-->
                    <span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                    <!--end::Separator--> 
                </span>    

                <span class="opacity-75">to comlete</span>
            </div>    
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar pt-5" bis_skin_checked="1">            
            <!--begin::Menu-->
            <button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">   
                    
                <i class="ki-duotone ki-dots-square fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                             
            </button>

            
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4" bis_skin_checked="1">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" bis_skin_checked="1">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4" bis_skin_checked="1">
            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75" bis_skin_checked="1"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <div class="menu-content px-3 py-3" bis_skin_checked="1">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->
 
            <!--end::Menu-->               
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Heading-->              

    <!--begin::Body-->
    <div class="card-body mt-n20" bis_skin_checked="1">
        <!--begin::Stats-->
        <div class="mt-n20 position-relative" bis_skin_checked="1">
            <!--begin::Row-->
            <div class="row g-3 g-lg-6" bis_skin_checked="1">
                <!--begin::Col-->
                    <div class="col-6" bis_skin_checked="1">
                        <!--begin::Items-->
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5" bis_skin_checked="1">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5 mb-8" bis_skin_checked="1">
                                <span class="symbol-label">  
                                    <i class="ki-duotone ki-flask fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i>                             
                                </span>                
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Stats-->
                            <div class="m-0" bis_skin_checked="1">
                                <!--begin::Number-->
                                <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                <!--end::Number-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6">Courses</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Stats-->
                        </div>    
                        <!--end::Items-->
                    </div>    
                    <!--end::Col-->
                                    <!--begin::Col-->
                    <div class="col-6" bis_skin_checked="1">
                        <!--begin::Items-->
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5" bis_skin_checked="1">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5 mb-8" bis_skin_checked="1">
                                <span class="symbol-label">  
                                    <i class="ki-duotone ki-bank fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i>                             
                                </span>                
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Stats-->
                            <div class="m-0" bis_skin_checked="1">
                                <!--begin::Number-->
                                <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                <!--end::Number-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Stats-->
                        </div>    
                        <!--end::Items-->
                    </div>    
                    <!--end::Col-->
                                    <!--begin::Col-->
                    <div class="col-6" bis_skin_checked="1">
                        <!--begin::Items-->
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5" bis_skin_checked="1">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5 mb-8" bis_skin_checked="1">
                                <span class="symbol-label">  
                                    <i class="ki-duotone ki-award fs-1 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                             
                                </span>                
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Stats-->
                            <div class="m-0" bis_skin_checked="1">
                                <!--begin::Number-->
                                <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                <!--end::Number-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Stats-->
                        </div>    
                        <!--end::Items-->
                    </div>    
                    <!--end::Col-->
                                    <!--begin::Col-->
                    <div class="col-6" bis_skin_checked="1">
                        <!--begin::Items-->
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5" bis_skin_checked="1">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px me-5 mb-8" bis_skin_checked="1">
                                <span class="symbol-label">  
                                    <i class="ki-duotone ki-timer fs-1 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                             
                                </span>                
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Stats-->
                            <div class="m-0" bis_skin_checked="1">
                                <!--begin::Number-->
                                <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                <!--end::Number-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Stats-->
                        </div>    
                        <!--end::Items-->
                    </div>    
                    <!--end::Col-->
                         
            </div>
            <!--end::Row-->
        </div> 
        <!--end::Stats-->
    </div>    
    <!--end::Body-->        
</div>
<!--end::Lists Widget 19-->
    </div>
    <!--end::Col-->     

    <!--begin::Col-->
    <div class="col-xl-8 mb-5 mb-xl-10" bis_skin_checked="1">
        <!--begin::Row-->
        <div class="row g-5 g-xl-10" bis_skin_checked="1">
            <!--begin::Col-->
            <div class="col-xl-6 mb-xl-10" bis_skin_checked="1">       
                  

<!--begin::Slider Widget 1-->
<div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000" bis_skin_checked="1">
    <!--begin::Header-->
    <div class="card-header pt-5" bis_skin_checked="1">
        <!--begin::Title-->
        <h4 class="card-title d-flex align-items-start flex-column">            
            <span class="card-label fw-bold text-gray-800">Today’s Course</span>
            <span class="text-gray-500 mt-1 fw-bold fs-7">4 lessons, 3 hours 45 minutes</span>
        </h4>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">            
            <!--begin::Carousel Indicators-->
            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="ms-1"></li>
            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1 active" aria-current="true"></li>
            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1"></li>
                 
            </ol>
            <!--end::Carousel Indicators-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header--> 

    <!--begin::Body-->
    <div class="card-body py-6" bis_skin_checked="1">  
        <!--begin::Carousel-->
        <div class="carousel-inner mt-n5" bis_skin_checked="1">
                                            <!--begin::Item-->
                <div class="carousel-item show" bis_skin_checked="1">     
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mb-5" bis_skin_checked="1">                                 
                        <!--begin::Chart-->
                        <div class="w-80px flex-shrink-0 me-2" bis_skin_checked="1">
                            <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_1" style="height: 100px; min-height: 100px;" bis_skin_checked="1">
                                <div id="apexchartsiuw9ts56" class="apexcharts-canvas apexchartsiuw9ts56" bis_skin_checked="1" style="width: 0px; height: 100px;">
                                    <svg id="SvgjsSvg3846" width="0" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="0" height="100">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" bis_skin_checked="1">                                                
                                            </div>
                                        </foreignObject><g id="SvgjsG3848" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3847"></defs></g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!--end::Chart-->                                  

                        <!--begin::Info-->
                        <div class="m-0" bis_skin_checked="1">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                            <!--end::Subtitle-->

                            <!--begin::Items-->
                            <div class="d-flex d-grid gap-5" bis_skin_checked="1">
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0 me-4" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 3 Topics
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 1 Speakers
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item--> 
                                
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 50 Min
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 72 students
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->  
                            </div>
                            <!--end::Items-->   
                        </div>
                        <!--end::Info-->                                  
                    </div>
                    <!--end::Wrapper-->  
                    
                    <!--begin::Action-->
                    <div class="m-0" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>

                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                    </div>
                    <!--end::Action-->  
                </div>
                <!--end::Item-->  
                <!--begin::Item-->
                <div class="carousel-item active" bis_skin_checked="1">     
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mb-5" bis_skin_checked="1">                                 
                        <!--begin::Chart-->
                        <div class="w-80px flex-shrink-0 me-2" bis_skin_checked="1">
                            <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_2" style="height: 100px; min-height: 101px;" bis_skin_checked="1">
                                <div id="apexchartsgelgr19d" class="apexcharts-canvas apexchartsgelgr19d apexcharts-theme-light" style="width: 90px; height: 101px;" bis_skin_checked="1">
                                    <svg id="SvgjsSvg3829" width="90" height="101" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="90" height="101"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" bis_skin_checked="1"></div></foreignObject><g id="SvgjsG3831" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, 1)"><defs id="SvgjsDefs3830"><clipPath id="gridRectMaskgelgr19d"><rect id="SvgjsRect3832" width="106" height="110" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskgelgr19d"></clipPath><clipPath id="nonForecastMaskgelgr19d"></clipPath><clipPath id="gridRectMarkerMaskgelgr19d"><rect id="SvgjsRect3833" width="104" height="102" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3834" class="apexcharts-radialbar"><g id="SvgjsG3835"><g id="SvgjsG3836" class="apexcharts-tracks"><g id="SvgjsG3837" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 18.414634146341463 A 30.585365853658537 30.585365853658537 0 1 1 49.99466184665636 18.41463461218322 " fill="none" fill-opacity="1" stroke="rgba(233,243,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.146341463414636" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 18.414634146341463 A 30.585365853658537 30.585365853658537 0 1 1 49.99466184665636 18.41463461218322 "></path></g></g><g id="SvgjsG3839"><g id="SvgjsG3842" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3843" d="M 50 18.414634146341463 A 30.585365853658537 30.585365853658537 0 1 1 40.5486021720443 78.08841149839324 " fill="none" fill-opacity="0.85" stroke="rgba(27,132,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.146341463414636" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="198" data:value="55" index="0" j="0" data:pathOrig="M 50 18.414634146341463 A 30.585365853658537 30.585365853658537 0 1 1 40.5486021720443 78.08841149839324 "></path></g><circle id="SvgjsCircle3840" r="26.51219512195122" cx="50" cy="49" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG3841" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine3844" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3845" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg>
                                </div>
                            </div>
                        </div>
                        <!--end::Chart-->                                  

                        <!--begin::Info-->
                        <div class="m-0" bis_skin_checked="1">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                            <!--end::Subtitle-->

                            <!--begin::Items-->
                            <div class="d-flex d-grid gap-5" bis_skin_checked="1">
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0 me-4" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 3 Topics
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 1 Speakers
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item--> 
                                
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 50 Min
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 72 students
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->  
                            </div>
                            <!--end::Items-->   
                        </div>
                        <!--end::Info-->                                  
                    </div>
                    <!--end::Wrapper-->  
                    
                    <!--begin::Action-->
                    <div class="m-0" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>

                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                    </div>
                    <!--end::Action-->  
                </div>
                <!--end::Item-->  
                                            <!--begin::Item-->
                <div class="carousel-item" bis_skin_checked="1">     
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mb-5" bis_skin_checked="1">                                 
                        <!--begin::Chart-->
                        <div class="w-80px flex-shrink-0 me-2" bis_skin_checked="1">
                            <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_3" style="height: 100px; min-height: 100px;" bis_skin_checked="1">
                            <div id="apexchartsyux0q6sn" class="apexcharts-canvas apexchartsyux0q6sn" bis_skin_checked="1" style="width: 0px; height: 100px;"><svg id="SvgjsSvg3826" width="0" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="0" height="100"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" bis_skin_checked="1"></div></foreignObject><g id="SvgjsG3828" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs3827"></defs></g></svg>
                            </div>
                            </div>
                        </div>
                        <!--end::Chart-->                                  

                        <!--begin::Info-->
                        <div class="m-0" bis_skin_checked="1">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                            <!--end::Subtitle-->

                            <!--begin::Items-->
                            <div class="d-flex d-grid gap-5" bis_skin_checked="1">
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0 me-4" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 3 Topics
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 1 Speakers
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item--> 
                                
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 50 Min
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 72 students
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->  
                            </div>
                            <!--end::Items-->   
                        </div>
                        <!--end::Info-->                                  
                    </div>
                    <!--end::Wrapper-->  
                    
                    <!--begin::Action-->
                    <div class="m-0" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>

                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                    </div>
                    <!--end::Action-->  
                </div>
                <!--end::Item-->  
                          
        </div>
        <!--end::Carousel-->             
    </div>
    <!--end::Body-->     
</div>
<!--end::Slider Widget 1-->

 
             </div>
            <!--end::Col--> 
            
            <!--begin::Col-->
            <div class="col-xl-6 mb-5 mb-xl-10" bis_skin_checked="1">       
                  

<!--begin::Slider Widget 2-->
<div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500" bis_skin_checked="1">
    <!--begin::Header--> 
    <div class="card-header pt-5" bis_skin_checked="1">
        <!--begin::Title-->
        <h4 class="card-title d-flex align-items-start flex-column">            
            <span class="card-label fw-bold text-gray-800">Today’s Events</span>
            <span class="text-gray-500 mt-1 fw-bold fs-7">24 events on all activities</span>
        </h4>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">            
            <!--begin::Carousel Indicators-->
            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
            <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="ms-1"></li>
            <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
            <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1 active" aria-current="true"></li>
                 
            </ol>
            <!--end::Carousel Indicators-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header--> 
    
    <!--begin::Body-->
    <div class="card-body py-6" bis_skin_checked="1">
        <!--begin::Carousel-->
        <div class="carousel-inner" bis_skin_checked="1">
                                            <!--begin::Item-->
                <div class="carousel-item show" bis_skin_checked="1">     
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mb-9" bis_skin_checked="1">                                 
                        <!--begin::Symbol-->
                        <div class="symbol symbol-70px symbol-circle me-5" bis_skin_checked="1">
                            <span class="symbol-label bg-light-success">
                                <i class="ki-duotone ki-abstract-24 fs-3x text-success"><span class="path1"></span><span class="path2"></span></i>                               
                            </span>                
                        </div>
                        <!--end::Symbol-->                                    

                        <!--begin::Info-->
                        <div class="m-0" bis_skin_checked="1">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                            <!--end::Subtitle-->

                            <!--begin::Items-->
                            <div class="d-flex d-grid gap-5" bis_skin_checked="1">
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0 me-4" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 5 Topics
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 1 Speakers
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item--> 
                                
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 60 Min
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 137 students
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->  
                            </div>
                            <!--end::Items-->   
                        </div>
                        <!--end::Info-->                                
                    </div>
                    <!--end::Wrapper-->  
                    
                    <!--begin::Action-->
                    <div class="m-0" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                    </div>
                    <!--end::Action-->  
                </div>
                <!--end::Item-->  
                                            <!--begin::Item-->
                <div class="carousel-item active carousel-item-start" bis_skin_checked="1">     
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mb-9" bis_skin_checked="1">                                 
                        <!--begin::Symbol-->
                        <div class="symbol symbol-70px symbol-circle me-5" bis_skin_checked="1">
                            <span class="symbol-label bg-light-danger">
                                <i class="ki-duotone ki-abstract-25 fs-3x text-danger"><span class="path1"></span><span class="path2"></span></i>                               
                            </span>                
                        </div>
                        <!--end::Symbol-->                                    

                        <!--begin::Info-->
                        <div class="m-0" bis_skin_checked="1">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                            <!--end::Subtitle-->

                            <!--begin::Items-->
                            <div class="d-flex d-grid gap-5" bis_skin_checked="1">
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0 me-4" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 12 Topics
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 1 Speakers
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item--> 
                                
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 50 Min
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 72 students
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->  
                            </div>
                            <!--end::Items-->   
                        </div>
                        <!--end::Info-->                                
                    </div>
                    <!--end::Wrapper-->  
                    
                    <!--begin::Action-->
                    <div class="m-0" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                    </div>
                    <!--end::Action-->  
                </div>
                <!--end::Item-->  
                                            <!--begin::Item-->
                <div class="carousel-item carousel-item-next carousel-item-start" bis_skin_checked="1">     
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mb-9" bis_skin_checked="1">                                 
                        <!--begin::Symbol-->
                        <div class="symbol symbol-70px symbol-circle me-5" bis_skin_checked="1">
                            <span class="symbol-label bg-light-primary">
                                <i class="ki-duotone ki-abstract-36 fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>                               
                            </span>                
                        </div>
                        <!--end::Symbol-->                                    

                        <!--begin::Info-->
                        <div class="m-0" bis_skin_checked="1">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                            <!--end::Subtitle-->

                            <!--begin::Items-->
                            <div class="d-flex d-grid gap-5" bis_skin_checked="1">
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0 me-4" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 3 Topics
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 1 Speakers
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item--> 
                                
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-shrink-0" bis_skin_checked="1">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 50 Min
                                    </span>
                                    <!--end::Section-->

                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 72 students
                                    </span>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->  
                            </div>
                            <!--end::Items-->   
                        </div>
                        <!--end::Info-->                                
                    </div>
                    <!--end::Wrapper-->  
                    
                    <!--begin::Action-->
                    <div class="m-0" bis_skin_checked="1">
                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                    </div>
                    <!--end::Action-->  
                </div>
                <!--end::Item-->  
                          
        </div>
        <!--end::Carousel-->            
    </div>
    <!--end::Body-->     
</div>
<!--end::Slider Widget 2-->             </div>
            <!--end::Col-->   
        </div>
        <!--end::Row-->

        <!--begin::Engage widget 4-->
<div class="card border-transparent " data-bs-theme="light" style="background-color: #1C325E;" bis_skin_checked="1">
    <!--begin::Body-->
    <div class="card-body d-flex ps-xl-15" bis_skin_checked="1">          
        <!--begin::Wrapper--> 
        <div class="m-0" bis_skin_checked="1">
            <!--begin::Title-->      
            <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7" bis_skin_checked="1">
                <span class="me-2">
                    You have got
                    <span class="position-relative d-inline-block text-danger">
                        <a href="#" class="text-danger opacity-75-hover">2300 bonus</a>  

                        <!--begin::Separator-->
                        <span class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                        <!--end::Separator-->                        
                    </span>                     
                </span>                 
                points.<br>
                Feel free to use them in your lessons                              
            </div>
            <!--end::Title--> 

            <!--begin::Action--> 
            <div class="mb-3" bis_skin_checked="1">
                <a href="#" class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                    Get Reward
                </a> 

                <a href="#" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">
                    How to
                </a> 
            </div>
            <!--begin::Action--> 
        </div>
        <!--begin::Wrapper-->                 

        <!--begin::Illustration-->
        <img src="assets/media/patterns/17-dark.png" class="position-absolute me-3 bottom-0 end-0 h-200px" alt=""> 
        <!--end::Illustration-->
    </div>
    <!--end::Body-->
</div>
<!--end::Engage widget 4-->

           
    </div>
    <!--end::Col-->    
</div>

<div class="row g-5 g-xl-10" bis_skin_checked="1">
    <!--begin::Col-->
    <div class="col-xl-4 mb-xl-10" bis_skin_checked="1">       
        
<!--begin::List widget 20-->
<div class="card h-xl-100" bis_skin_checked="1">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5" bis_skin_checked="1">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">Recommended for you</span>

            <span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
        </h3>

        <!--begin::Toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">   
            <a href="#" class="btn btn-sm btn-light">All Courses</a>             
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-6" bis_skin_checked="1">
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4" bis_skin_checked="1">
                    <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger" bis_skin_checked="1">M</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap" bis_skin_checked="1">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2" bis_skin_checked="1">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">UI/UX Design</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">40+ Courses</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->

                            <!--begin::Separator-->
                <div class="separator separator-dashed my-4" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4" bis_skin_checked="1">
                    <div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success" bis_skin_checked="1">Q</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap" bis_skin_checked="1">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2" bis_skin_checked="1">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">QA Analysis</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">18 Courses</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->

                            <!--begin::Separator-->
                <div class="separator separator-dashed my-4" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4" bis_skin_checked="1">
                    <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info" bis_skin_checked="1">W</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap" bis_skin_checked="1">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2" bis_skin_checked="1">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Web Development</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">120+ Courses</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->

                            <!--begin::Separator-->
                <div class="separator separator-dashed my-4" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4" bis_skin_checked="1">
                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary" bis_skin_checked="1">M</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap" bis_skin_checked="1">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2" bis_skin_checked="1">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Marketing</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">50+ Courses.</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->

                            <!--begin::Separator-->
                <div class="separator separator-dashed my-4" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4" bis_skin_checked="1">
                    <div class="symbol-label fs-2 fw-semibold bg-warning text-inverse-warning" bis_skin_checked="1">P</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap" bis_skin_checked="1">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2" bis_skin_checked="1">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Philosophy</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->

                            <!--begin::Separator-->
                <div class="separator separator-dashed my-4" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4" bis_skin_checked="1">
                    <div class="symbol-label fs-2 fw-semibold bg-dark text-inverse-dark" bis_skin_checked="1">M</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap" bis_skin_checked="1">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2" bis_skin_checked="1">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Mathematics</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span class="path2"></span></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->

             
           
    </div>
    <!--end::Body-->
</div>
<!--end::List widget 20-->
    </div>
    <!--end::Col-->     

    <!--begin::Col-->
    <div class="col-xl-8 mb-5 mb-xl-10" bis_skin_checked="1">
        <!--begin::Timeline Widget 1-->
<div class="card card-flush h-xl-100" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header pt-5" bis_skin_checked="1">
        <!--begin::Card title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">Team Schedule</span>

            <span class="text-gray-500 pt-2 fw-semibold fs-6">49 Acual Tasks</span>
        </h3>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Tabs-->
            <ul class="nav" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_day" aria-selected="true" role="tab">Day</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_week" aria-selected="false" role="tab" tabindex="-1">Week</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_month" aria-selected="false" role="tab" tabindex="-1">Month</a>
                </li>
            </ul>
            <!--end::Tabs-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pb-0" bis_skin_checked="1">
        <!--begin::Tab content-->
        <div class="tab-content" bis_skin_checked="1">
            <!--begin::Tab pane-->
            <div class="tab-pane blockui active show" id="kt_timeline_widget_1_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true" style="" bis_skin_checked="1">
                <div class="table-responsive pb-10" bis_skin_checked="1">
                    <!--begin::Timeline-->
                    <div id="kt_timeline_widget_1_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/metronic8/demo1/assets/media/" style="position: relative;" bis_skin_checked="1">
                        <div class="vis-timeline vis-bottom vis-ltr" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 354px;" bis_skin_checked="1">
                            <div class="vis-panel vis-background" style="height: 354px; width: 700px; left: 0px; top: 0px;" bis_skin_checked="1">
                                
                            </div>
                            <div class="vis-panel vis-background vis-vertical" style="height: 354px; width: 574px; left: 128px; top: 0px;" bis_skin_checked="1">
                                <div class="vis-axis" style="top: 304px; left: 0px;" bis_skin_checked="1">
                                <div class="vis-group" bis_skin_checked="1"></div><div class="vis-group" bis_skin_checked="1"></div>
                                <div class="vis-group" bis_skin_checked="1"></div><div class="vis-group" bis_skin_checked="1"></div>
                            </div>
                            <div class="vis-time-axis vis-background" bis_skin_checked="1">
                                <div class="vis-grid vis-vertical vis-minor vis-h12  vis-today  vis-even" style="width: 184.667px; height: 330px; transform: translate(-144.405px, -1px);" bis_skin_checked="1"></div>
                                <div class="vis-grid vis-vertical vis-minor vis-h13  vis-today  vis-odd" style="width: 184.667px; height: 330px; transform: translate(40.2615px, -1px);" bis_skin_checked="1"></div>
                                <div class="vis-grid vis-vertical vis-minor vis-h14  vis-today  vis-even" style="width: 184.667px; height: 330px; transform: translate(224.928px, -1px);" bis_skin_checked="1"></div>
                                <div class="vis-grid vis-vertical vis-minor vis-h15  vis-today  vis-odd" style="width: 184.667px; height: 330px; transform: translate(409.595px, -1px);" bis_skin_checked="1"></div>
                            </div>
                        </div>
                        <div class="vis-panel vis-background vis-horizontal" style="height: 305px; width: 700px; left: 0px; top: -1px;" bis_skin_checked="1"></div>
                        <div class="vis-panel vis-center" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; width: 574px; left: 127px; top: -1px;" bis_skin_checked="1">
                            <div class="vis-content" style="left: 0px; transform: translateY(0px);" bis_skin_checked="1">
                            <div class="vis-itemset" style="height: 303px;" bis_skin_checked="1">
                                <div class="vis-background" bis_skin_checked="1">
                                <div class="vis-group" style="height: 0px;" bis_skin_checked="1">
                                    <div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                                </div>
                                <div class="vis-group" style="height: 75px;" bis_skin_checked="1"><div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                                </div>
                                <div class="vis-group" style="height: 75px;" bis_skin_checked="1">
                                    <div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                                </div>
                                <div class="vis-group" style="height: 75px;" bis_skin_checked="1">
                                    <div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                                </div>
                                <div class="vis-group" style="height: 78px;" bis_skin_checked="1">
                                    <div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                                </div>
                            </div>
                    <div class="vis-foreground" bis_skin_checked="1">
                        <div class="vis-group" style="height: 75px;" bis_skin_checked="1">
                            <div class="vis-item vis-range vis-readonly" style="transform: translateX(10px); width: 277px; top: 17.5px;" bis_skin_checked="1">
                                <div class="vis-item-overflow" bis_skin_checked="1">
                                    <div class="vis-item-content" style="transform: translateX(0px);" bis_skin_checked="1">
                                        <div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                                        <div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width:60%;" bis_skin_checked="1">
                                            
                                        </div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-6.jpg"></div><div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-1.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Meeting</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        60%
                    </div>
                </div>        
                </div>
            </div>
            <div class="vis-item-visible-frame" bis_skin_checked="1">
                
            </div>
        </div>
    </div>
    <div class="vis-group" style="height: 75px;" bis_skin_checked="1">
        <div class="vis-item vis-range vis-readonly" style="transform: translateX(194.667px); width: 184.667px; top: 17.5px;" bis_skin_checked="1">
                <div class="vis-item-overflow" bis_skin_checked="1">
                    <div class="vis-item-content" style="transform: translateX(0px);" bis_skin_checked="1">
                        <div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1" style="width:47%;" bis_skin_checked="1">
                        
                    </div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-2.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Testing</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        47%
                    </div>
                </div>        
                </div>
            </div>
            <div class="vis-item-visible-frame" bis_skin_checked="1">
                
            </div>
        </div>
    </div>
    <div class="vis-group" style="height: 75px;" bis_skin_checked="1">
        <div class="vis-item vis-range vis-readonly" style="transform: translateX(102.333px); width: 369.333px; top: 17.5px;" bis_skin_checked="1">
                <div class="vis-item-overflow" bis_skin_checked="1">
                    <div class="vis-item-content" style="transform: translateX(0px);" bis_skin_checked="1">
                        <div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width:55%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-5.jpg">
                            </div>
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-20.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Landing page</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        55%
                    </div>
                </div>        
                </div>
            </div>
            <div class="vis-item-visible-frame" bis_skin_checked="1"></div>
        </div>
    </div>
    <div class="vis-group" style="height: 78px;" bis_skin_checked="1"><div class="vis-item vis-range vis-readonly" style="transform: translateX(287px); width: 277px; top: 18px;" bis_skin_checked="1"><div class="vis-item-overflow" bis_skin_checked="1"><div class="vis-item-content" style="transform: translateX(0px);" bis_skin_checked="1"><div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width:75%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-23.jpg">
                            </div>
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-12.jpg">
                            </div>
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-9.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Products module</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        75%
                    </div>
                </div>        
                </div>
            </div>
            <div class="vis-item-visible-frame" bis_skin_checked="1"></div>
        </div>
    </div>
</div>
</div>
</div>
            <div class="vis-shadow vis-top" style="visibility: hidden;" bis_skin_checked="1"></div>
            <div class="vis-shadow vis-bottom" style="visibility: hidden;" bis_skin_checked="1"></div></div>
            <div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; left: 0px; top: -1px;" bis_skin_checked="1">
                <div class="vis-content" style="left: 0px; top: 0px;" bis_skin_checked="1"><div class="vis-labelset" bis_skin_checked="1">
                    <div class="vis-label vis-group-level-0" title="" style="height: 75px;" bis_skin_checked="1">
                        <div class="vis-inner" bis_skin_checked="1">Research</div>
                    </div>
                    <div class="vis-label vis-group-level-0" title="" style="height: 75px;" bis_skin_checked="1">
                        <div class="vis-inner" bis_skin_checked="1">Phase 2.6 QA</div>
                    </div>
                    <div class="vis-label vis-group-level-0" title="" style="height: 75px;" bis_skin_checked="1">
                            <div class="vis-inner" bis_skin_checked="1">UI Design</div>
                        </div>
                            <div class="vis-label vis-group-level-0" title="" style="height: 78px;" bis_skin_checked="1">
                                <div class="vis-inner" bis_skin_checked="1">Development</div></div></div>
                            </div>
                            <div class="vis-shadow vis-top" style="visibility: hidden;" bis_skin_checked="1"></div>
                            <div class="vis-shadow vis-bottom" style="visibility: hidden;" bis_skin_checked="1"></div>
                        </div>
                            <div class="vis-panel vis-right" style="height: 305px; left: 701px; top: -1px;" bis_skin_checked="1">
                                <div class="vis-content" style="left: 0px; top: 0px;" bis_skin_checked="1"></div>
                                <div class="vis-shadow vis-top" style="visibility: hidden;" bis_skin_checked="1"></div>
                                <div class="vis-shadow vis-bottom" style="visibility: hidden;" bis_skin_checked="1"></div></div>
                                <div class="vis-panel vis-top" style="width: 574px; left: 127px; top: 0px;" bis_skin_checked="1"></div>
                                <div class="vis-panel vis-bottom" style="width: 574px; left: 127px; top: 304px;" bis_skin_checked="1">
                                    <div class="vis-time-axis vis-foreground" style="height: 50px;" bis_skin_checked="1">
                                        <div class="vis-text vis-minor vis-measure" style="position: absolute;" bis_skin_checked="1">0</div>
                                        <div class="vis-text vis-major vis-measure" style="position: absolute;" bis_skin_checked="1">0</div>
                                        <div class="vis-text vis-minor vis-h12  vis-today  vis-even" style="transform: translate(-143.905px, 0px); width: 184.667px;" bis_skin_checked="1">12:00</div>
                                        <div class="vis-text vis-minor vis-h13  vis-today  vis-odd" style="transform: translate(40.7615px, 0px); width: 184.667px;" bis_skin_checked="1">13:00</div>
                                        <div class="vis-text vis-major vis-h15  vis-today  vis-odd" style="transform: translate(0px, 25px);" bis_skin_checked="1"><div bis_skin_checked="1">Wed 3 January</div>
                                    </div>
                                    <div class="vis-text vis-minor vis-h14  vis-today  vis-even" style="transform: translate(225.428px, 0px); width: 184.667px;" bis_skin_checked="1">14:00</div>
                                    <div class="vis-text vis-minor vis-h15  vis-today  vis-odd" style="transform: translate(410.095px, 0px); width: 184.667px;" bis_skin_checked="1">15:00</div>
                                </div>
                            </div>
                            <div class="vis-rolling-mode-btn" style="visibility: hidden;" bis_skin_checked="1"></div>
                        </div>
                    </div>
                    <!--end::Timeline-->
                </div>
            </div>
            <!--end::Tab pane-->

            <!--begin::Tab pane-->
            <div class="tab-pane blockui" id="kt_timeline_widget_1_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-1-blockui="true" style="" bis_skin_checked="1">
                <div class="table-responsive pb-10" bis_skin_checked="1">
                    <!--begin::Timeline-->
                    <div id="kt_timeline_widget_1_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/metronic8/demo1/assets/media/" bis_skin_checked="1" style="position: relative;">
                        <div class="vis-timeline vis-bottom vis-ltr" bis_skin_checked="1" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 354px;"><div class="vis-panel vis-background" bis_skin_checked="1" style="height: 354px; width: 700px; left: 0px; top: 0px;"></div>
                        <div class="vis-panel vis-background vis-vertical" bis_skin_checked="1" style="height: 354px; width: 574px; left: 128px; top: 0px;">
                            <div class="vis-axis" bis_skin_checked="1" style="top: 304px; left: 0px;"><div class="vis-group" bis_skin_checked="1"></div>
                            <div class="vis-group" bis_skin_checked="1"></div>
                            <div class="vis-group" bis_skin_checked="1"></div>
                            <div class="vis-group" bis_skin_checked="1"></div>
                        </div>
                        <div class="vis-time-axis vis-background" bis_skin_checked="1">
                            <div class="vis-grid vis-vertical vis-major vis-january  vis-current-month  vis-even" bis_skin_checked="1" style="width: 817.81px; height: 355px; transform: translate(-59.0341px, -1px);">
                                
                            </div>
                        </div>
                    </div>
                    <div class="vis-panel vis-background vis-horizontal" bis_skin_checked="1" style="height: 305px; width: 700px; left: 0px; top: -1px;">
                        
                    </div>
                    <div class="vis-panel vis-center" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; width: 574px; left: 127px; top: -1px;" bis_skin_checked="1"><div class="vis-content" bis_skin_checked="1" style="left: 0px; transform: translateY(0px);"><div class="vis-itemset" bis_skin_checked="1" style="height: 303px;"><div class="vis-background" bis_skin_checked="1">
                        <div class="vis-group" bis_skin_checked="1" style="height: 0px;">
                            <div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                        </div>
                        <div class="vis-group" bis_skin_checked="1" style="height: 75px;">
                            <div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                        </div>
                        <div class="vis-group" bis_skin_checked="1" style="height: 75px;">
                            <div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                        </div>
                        <div class="vis-group" bis_skin_checked="1" style="height: 75px;">
                            <div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                        </div>
                        <div class="vis-group" bis_skin_checked="1" style="height: 78px;"><div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div>
                    </div>
                </div>
                        <div class="vis-foreground" bis_skin_checked="1">
                            <div class="vis-group" bis_skin_checked="1" style="height: 75px;">
                                <div class="vis-item vis-range vis-readonly" bis_skin_checked="1" style="transform: translateX(10px); width: 184.667px; top: 17.5px;"><div class="vis-item-overflow" bis_skin_checked="1">
                                    <div class="vis-item-content" bis_skin_checked="1" style="transform: translateX(0px);">
                                        <div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width:71%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-6.jpg"></div><div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-1.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Framework</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        71%
                    </div>
                </div>        
                </div>
            </div>
            <div class="vis-item-visible-frame" bis_skin_checked="1">
                    
                </div>
            </div>
        </div>
        <div class="vis-group" bis_skin_checked="1" style="height: 75px;">
            <div class="vis-item vis-range vis-readonly" bis_skin_checked="1" style="transform: translateX(194.667px); width: 184.667px; top: 17.5px;">
                <div class="vis-item-overflow" bis_skin_checked="1">
                    <div class="vis-item-content" bis_skin_checked="1" style="transform: translateX(0px);">
                        <div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1" style="width:84%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-2.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Accessibility</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        84%
                    </div>
                </div>        
                </div>
            </div>
            <div class="vis-item-visible-frame" bis_skin_checked="1"></div>
        </div>
    </div>
    <div class="vis-group" bis_skin_checked="1" style="height: 75px;">
        <div class="vis-item vis-range vis-readonly" bis_skin_checked="1" style="transform: translateX(89.1429px); width: 448.476px; top: 17.5px;">
            <div class="vis-item-overflow" bis_skin_checked="1">
                <div class="vis-item-content" bis_skin_checked="1" style="transform: translateX(0px);">
                    <div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width:69%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-5.jpg">
                            </div>
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-20.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Microsites</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        69%
                    </div>
                </div>        
                </div>
            </div>
            <div class="vis-item-visible-frame" bis_skin_checked="1"></div>
        </div>
    </div>
    <div class="vis-group" bis_skin_checked="1" style="height: 78px;">
        <div class="vis-item vis-range vis-readonly" bis_skin_checked="1" style="transform: translateX(273.81px); width: 290.19px; top: 18px;">
                <div class="vis-item-overflow" bis_skin_checked="1">
                    <div class="vis-item-content" bis_skin_checked="1" style="transform: translateX(0px);">
                        <div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width:74%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-23.jpg">
                            </div>
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-12.jpg"></div>
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-9.jpg">
                            </div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Deployment</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        74%
                    </div>
                </div>        
                </div>
            </div>
            <div class="vis-item-visible-frame" bis_skin_checked="1"></div>
        </div>
    </div>
</div>
</div>
</div>
            <div class="vis-shadow vis-top" bis_skin_checked="1" style="visibility: hidden;"></div>
            <div class="vis-shadow vis-bottom" bis_skin_checked="1" style="visibility: hidden;"></div></div>
            <div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; left: 0px; top: -1px;" bis_skin_checked="1">
                <div class="vis-content" bis_skin_checked="1" style="left: 0px; top: 0px;">
                    <div class="vis-labelset" bis_skin_checked="1">
                        <div class="vis-label vis-group-level-0" title="" bis_skin_checked="1" style="height: 75px;">
                            <div class="vis-inner" bis_skin_checked="1">Research</div>
                        </div>
                        <div class="vis-label vis-group-level-0" title="" bis_skin_checked="1" style="height: 75px;">
                            <div class="vis-inner" bis_skin_checked="1">Phase 2.6 QA</div></div>
                            <div class="vis-label vis-group-level-0" title="" bis_skin_checked="1" style="height: 75px;">
                                <div class="vis-inner" bis_skin_checked="1">UI Design</div>
                            </div>
                            <div class="vis-label vis-group-level-0" title="" bis_skin_checked="1" style="height: 78px;">
                                <div class="vis-inner" bis_skin_checked="1">Development</div>
                            </div>
                        </div>
                    </div>
                                <div class="vis-shadow vis-top" bis_skin_checked="1" style="visibility: hidden;">
                                    
                                </div>
                                <div class="vis-shadow vis-bottom" bis_skin_checked="1" style="visibility: hidden;"></div>
                            </div>
                            <div class="vis-panel vis-right" bis_skin_checked="1" style="height: 305px; left: 701px; top: -1px;">
                                <div class="vis-content" bis_skin_checked="1" style="left: 0px; top: 0px;">
                                    
                                </div>
                                <div class="vis-shadow vis-top" bis_skin_checked="1" style="visibility: hidden;">
                                    
                                </div>
                                <div class="vis-shadow vis-bottom" bis_skin_checked="1" style="visibility: hidden;"></div>
                            </div>
                            <div class="vis-panel vis-top" bis_skin_checked="1" style="width: 574px; left: 127px; top: 0px;"></div>
                            <div class="vis-panel vis-bottom" bis_skin_checked="1" style="width: 574px; left: 127px; top: 304px;">
                                <div class="vis-time-axis vis-foreground" bis_skin_checked="1" style="height: 50px;"><div class="vis-text vis-minor vis-measure" bis_skin_checked="1" style="position: absolute;">0</div>
                                <div class="vis-text vis-major vis-measure" bis_skin_checked="1" style="position: absolute;">0</div><div class="vis-text vis-minor vis-january  vis-current-month  vis-even" bis_skin_checked="1" style="transform: translate(-58.5341px, 0px); width: 817.81px;">Jan</div><div class="vis-text vis-major vis-january  vis-current-month  vis-even" bis_skin_checked="1" style="transform: translate(0px, 25px);"><div bis_skin_checked="1">2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="vis-rolling-mode-btn" style="visibility: hidden;" bis_skin_checked="1"></div>
                </div>
            </div>
                    <!--end::Timeline-->
                </div>
            </div>
            <!--end::Tab pane-->

            <!--begin::Tab pane-->
            <div class="tab-pane blockui" id="kt_timeline_widget_1_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-1-blockui="true" style="" bis_skin_checked="1">
                <div class="table-responsive pb-10" bis_skin_checked="1">
                    <!--begin::Timeline-->
                    <div id="kt_timeline_widget_1_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/metronic8/demo1/assets/media/" bis_skin_checked="1" style="position: relative;"><div class="vis-timeline vis-bottom vis-ltr" bis_skin_checked="1" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 354px;"><div class="vis-panel vis-background" bis_skin_checked="1" style="height: 354px; width: 700px; left: 0px; top: 0px;"></div><div class="vis-panel vis-background vis-vertical" bis_skin_checked="1" style="height: 354px; width: 574px; left: 128px; top: 0px;"><div class="vis-axis" bis_skin_checked="1" style="top: 304px; left: 0px;"><div class="vis-group" bis_skin_checked="1"></div><div class="vis-group" bis_skin_checked="1"></div><div class="vis-group" bis_skin_checked="1"></div><div class="vis-group" bis_skin_checked="1"></div></div><div class="vis-time-axis vis-background" bis_skin_checked="1"><div class="vis-grid vis-vertical vis-minor vis-december  vis-odd" bis_skin_checked="1" style="width: 80.6291px; height: 330px; transform: translate(-77.8861px, -1px);"></div><div class="vis-grid vis-vertical vis-major vis-january  vis-current-month  vis-even" bis_skin_checked="1" style="width: 80.6291px; height: 355px; transform: translate(2.743px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-february  vis-odd" bis_skin_checked="1" style="width: 75.4272px; height: 330px; transform: translate(83.3721px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-march  vis-even" bis_skin_checked="1" style="width: 80.6291px; height: 330px; transform: translate(158.799px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-april  vis-odd" bis_skin_checked="1" style="width: 78.0282px; height: 330px; transform: translate(239.428px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-may  vis-even" bis_skin_checked="1" style="width: 80.6291px; height: 330px; transform: translate(317.457px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-june  vis-odd" bis_skin_checked="1" style="width: 78.0282px; height: 330px; transform: translate(398.086px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-july  vis-even" bis_skin_checked="1" style="width: 80.6291px; height: 330px; transform: translate(476.114px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-august  vis-odd" bis_skin_checked="1" style="width: 80.6291px; height: 330px; transform: translate(556.743px, -1px);"></div></div></div><div class="vis-panel vis-background vis-horizontal" bis_skin_checked="1" style="height: 305px; width: 700px; left: 0px; top: -1px;"></div><div class="vis-panel vis-center" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; width: 574px; left: 127px; top: -1px;" bis_skin_checked="1"><div class="vis-content" bis_skin_checked="1" style="left: 0px; transform: translateY(0px);"><div class="vis-itemset" bis_skin_checked="1" style="height: 303px;"><div class="vis-background" bis_skin_checked="1"><div class="vis-group" bis_skin_checked="1" style="height: 0px;"><div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div></div><div class="vis-group" bis_skin_checked="1" style="height: 75px;"><div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div></div><div class="vis-group" bis_skin_checked="1" style="height: 75px;"><div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div></div><div class="vis-group" bis_skin_checked="1" style="height: 75px;"><div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div></div><div class="vis-group" bis_skin_checked="1" style="height: 78px;"><div style="visibility: hidden; position: absolute;" bis_skin_checked="1"></div></div></div><div class="vis-foreground" bis_skin_checked="1"><div class="vis-group" bis_skin_checked="1" style="height: 75px;"><div class="vis-item vis-range vis-readonly" bis_skin_checked="1" style="transform: translateX(10px); width: 156.056px; top: 17.5px;"><div class="vis-item-overflow" bis_skin_checked="1"><div class="vis-item-content" bis_skin_checked="1" style="transform: translateX(0px);"><div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width:79%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-6.jpg"></div><div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-1.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Tags</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        79%
                    </div>
                </div>        
                </div></div><div class="vis-item-visible-frame" bis_skin_checked="1"></div></div></div><div class="vis-group" bis_skin_checked="1" style="height: 75px;"><div class="vis-item vis-range vis-readonly" bis_skin_checked="1" style="transform: translateX(90.6291px); width: 314.714px; top: 17.5px;"><div class="vis-item-overflow" bis_skin_checked="1"><div class="vis-item-content" bis_skin_checked="1" style="transform: translateX(0px);"><div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1" style="width:64%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-2.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Testing</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        64%
                    </div>
                </div>        
                </div></div><div class="vis-item-visible-frame" bis_skin_checked="1"></div></div></div><div class="vis-group" bis_skin_checked="1" style="height: 75px;"><div class="vis-item vis-range vis-readonly" bis_skin_checked="1" style="transform: translateX(166.056px); width: 397.944px; top: 17.5px;"><div class="vis-item-overflow" bis_skin_checked="1"><div class="vis-item-content" bis_skin_checked="1" style="transform: translateX(0px);"><div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width:82%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-5.jpg"></div><div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-20.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Media</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        82%
                    </div>
                </div>        
                </div></div><div class="vis-item-visible-frame" bis_skin_checked="1"></div></div></div><div class="vis-group" bis_skin_checked="1" style="height: 78px;"><div class="vis-item vis-range vis-readonly" bis_skin_checked="1" style="transform: translateX(324.714px); width: 239.286px; top: 18px;"><div class="vis-item-overflow" bis_skin_checked="1"><div class="vis-item-content" bis_skin_checked="1" style="transform: translateX(0px);"><div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden" bis_skin_checked="1">
                    <div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width:58%;" bis_skin_checked="1"></div>
        
                    <div class="d-flex align-items-center position-relative z-index-2" bis_skin_checked="1">
                        <div class="symbol-group symbol-hover flex-nowrap me-3" bis_skin_checked="1">
                            <div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-23.jpg"></div><div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-12.jpg"></div><div class="symbol symbol-circle symbol-25px" bis_skin_checked="1"><img alt="" src="assets/media/patterns/300-9.jpg"></div>
                        </div>
        
                        <a href="#" class="fw-bold text-white text-hover-dark">Plugins</a>
                    </div>
        
                    <div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2" bis_skin_checked="1">
                        58%
                    </div>
                </div>        
                </div></div><div class="vis-item-visible-frame" bis_skin_checked="1"></div></div></div></div></div></div><div class="vis-shadow vis-top" bis_skin_checked="1" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" bis_skin_checked="1" style="visibility: hidden;"></div></div><div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; left: 0px; top: -1px;" bis_skin_checked="1"><div class="vis-content" bis_skin_checked="1" style="left: 0px; top: 0px;"><div class="vis-labelset" bis_skin_checked="1"><div class="vis-label vis-group-level-0" title="" bis_skin_checked="1" style="height: 75px;"><div class="vis-inner" bis_skin_checked="1">Research</div></div><div class="vis-label vis-group-level-0" title="" bis_skin_checked="1" style="height: 75px;"><div class="vis-inner" bis_skin_checked="1">Phase 2.6 QA</div></div><div class="vis-label vis-group-level-0" title="" bis_skin_checked="1" style="height: 75px;"><div class="vis-inner" bis_skin_checked="1">UI Design</div></div><div class="vis-label vis-group-level-0" title="" bis_skin_checked="1" style="height: 78px;"><div class="vis-inner" bis_skin_checked="1">Development</div></div></div></div><div class="vis-shadow vis-top" bis_skin_checked="1" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" bis_skin_checked="1" style="visibility: hidden;"></div></div><div class="vis-panel vis-right" bis_skin_checked="1" style="height: 305px; left: 701px; top: -1px;"><div class="vis-content" bis_skin_checked="1" style="left: 0px; top: 0px;"></div><div class="vis-shadow vis-top" bis_skin_checked="1" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" bis_skin_checked="1" style="visibility: hidden;"></div></div><div class="vis-panel vis-top" bis_skin_checked="1" style="width: 574px; left: 127px; top: 0px;"></div><div class="vis-panel vis-bottom" bis_skin_checked="1" style="width: 574px; left: 127px; top: 304px;"><div class="vis-time-axis vis-foreground" bis_skin_checked="1" style="height: 50px;"><div class="vis-text vis-minor vis-measure" bis_skin_checked="1" style="position: absolute;">0</div><div class="vis-text vis-major vis-measure" bis_skin_checked="1" style="position: absolute;">0</div><div class="vis-text vis-minor vis-december  vis-odd" bis_skin_checked="1" style="transform: translate(-77.3861px, 0px); width: 80.6291px;">Dec</div><div class="vis-text vis-minor vis-january  vis-current-month  vis-even" bis_skin_checked="1" style="transform: translate(3.243px, 0px); width: 80.6291px;">Jan</div><div class="vis-text vis-major vis-january  vis-current-month  vis-even" bis_skin_checked="1" style="transform: translate(3.243px, 25px);"><div bis_skin_checked="1">2024</div></div><div class="vis-text vis-minor vis-february  vis-odd" bis_skin_checked="1" style="transform: translate(83.8721px, 0px); width: 75.4272px;">Feb</div><div class="vis-text vis-minor vis-march  vis-even" bis_skin_checked="1" style="transform: translate(159.299px, 0px); width: 80.6291px;">Mar</div><div class="vis-text vis-minor vis-april  vis-odd" bis_skin_checked="1" style="transform: translate(239.928px, 0px); width: 78.0282px;">Apr</div><div class="vis-text vis-minor vis-may  vis-even" bis_skin_checked="1" style="transform: translate(317.957px, 0px); width: 80.6291px;">May</div><div class="vis-text vis-minor vis-june  vis-odd" bis_skin_checked="1" style="transform: translate(398.586px, 0px); width: 78.0282px;">Jun</div><div class="vis-text vis-minor vis-july  vis-even" bis_skin_checked="1" style="transform: translate(476.614px, 0px); width: 80.6291px;">Jul</div><div class="vis-text vis-minor vis-august  vis-odd" bis_skin_checked="1" style="transform: translate(557.243px, 0px); width: 80.6291px;">Aug</div></div></div><div class="vis-rolling-mode-btn" style="visibility: hidden;" bis_skin_checked="1"></div></div></div>
                    <!--end::Timeline-->
                </div>
            </div>
            <!--end::Tab pane-->
        </div>
        <!--end::Tab content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Timeline Widget 1-->    </div>
    <!--end::Col-->    
</div>

<div class="row g-5 g-xl-10" bis_skin_checked="1">
    <!--begin::Col-->
    <div class="col-xl-4" bis_skin_checked="1">       
        
<!--begin::List widget 21-->
<div class="card card-flush h-xl-100" bis_skin_checked="1">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5" bis_skin_checked="1">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">Active Lessons</span>

            <span class="text-muted mt-1 fw-semibold fs-7">Avg. 72% completed lessons</span>
        </h3>

        <!--begin::Toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">   
            <a href="#" class="btn btn-sm btn-light">All Lessons</a>             
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-5" bis_skin_checked="1">                 
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">                 
                <!--begin::Wrapper-->                                  
                <div class="d-flex align-items-center me-3" bis_skin_checked="1">
                    <!--begin::Logo-->                         
                    <img src="assets/media/patterns/laravel-2.svg" class="me-4 w-30px" alt="">                  
                    <!--end::Logo-->

                    <!--begin::Section-->                                  
                    <div class="flex-grow-1" bis_skin_checked="1">
                        <!--begin::Text-->
                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Laravel</a>
                        <!--end::Text-->
                        
                        <!--begin::Description-->
                        <span class="text-gray-500 fw-semibold d-block fs-6">PHP Framework</span>
                        <!--end::Description--->
                    </div>                   
                    <!--end::Section-->
                </div>                   
                <!--end::Wrapper-->
                
                <!--begin::Statistics-->
                <div class="d-flex align-items-center w-100 mw-125px" bis_skin_checked="1">  
                    <!--begin::Progress-->                  
                    <div class="progress h-6px w-100 me-2 bg-light-success" bis_skin_checked="1">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                    </div>
                    <!--end::Progress-->

                    <!--begin::Value-->
                    <span class="text-gray-500 fw-semibold">
                        65%
                    </span>
                    <!--end::Value-->
                </div>
                <!--end::Statistics-->
            </div>
            <!--end::Item-->
            
                            <!--begin::Separator-->
                <div class="separator separator-dashed my-3" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">                 
                <!--begin::Wrapper-->                                  
                <div class="d-flex align-items-center me-3" bis_skin_checked="1">
                    <!--begin::Logo-->                         
                    <img src="assets/media/patterns/vue-9.svg" class="me-4 w-30px" alt="">                  
                    <!--end::Logo-->

                    <!--begin::Section-->                                  
                    <div class="flex-grow-1" bis_skin_checked="1">
                        <!--begin::Text-->
                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Vue 3</a>
                        <!--end::Text-->
                        
                        <!--begin::Description-->
                        <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
                        <!--end::Description--->
                    </div>                   
                    <!--end::Section-->
                </div>                   
                <!--end::Wrapper-->
                
                <!--begin::Statistics-->
                <div class="d-flex align-items-center w-100 mw-125px" bis_skin_checked="1">  
                    <!--begin::Progress-->                  
                    <div class="progress h-6px w-100 me-2 bg-light-warning" bis_skin_checked="1">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                    </div>
                    <!--end::Progress-->

                    <!--begin::Value-->
                    <span class="text-gray-500 fw-semibold">
                        87%
                    </span>
                    <!--end::Value-->
                </div>
                <!--end::Statistics-->
            </div>
            <!--end::Item-->
            
                            <!--begin::Separator-->
                <div class="separator separator-dashed my-3" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">                 
                <!--begin::Wrapper-->                                  
                <div class="d-flex align-items-center me-3" bis_skin_checked="1">
                    <!--begin::Logo-->                         
                    <img src="assets/media/patterns/bootstrap5.svg" class="me-4 w-30px" alt="">                  
                    <!--end::Logo-->

                    <!--begin::Section-->                                  
                    <div class="flex-grow-1" bis_skin_checked="1">
                        <!--begin::Text-->
                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bootstrap 5</a>
                        <!--end::Text-->
                        
                        <!--begin::Description-->
                        <span class="text-gray-500 fw-semibold d-block fs-6">CSS Framework</span>
                        <!--end::Description--->
                    </div>                   
                    <!--end::Section-->
                </div>                   
                <!--end::Wrapper-->
                
                <!--begin::Statistics-->
                <div class="d-flex align-items-center w-100 mw-125px" bis_skin_checked="1">  
                    <!--begin::Progress-->                  
                    <div class="progress h-6px w-100 me-2 bg-light-primary" bis_skin_checked="1">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                    </div>
                    <!--end::Progress-->

                    <!--begin::Value-->
                    <span class="text-gray-500 fw-semibold">
                        44%
                    </span>
                    <!--end::Value-->
                </div>
                <!--end::Statistics-->
            </div>
            <!--end::Item-->
            
                            <!--begin::Separator-->
                <div class="separator separator-dashed my-3" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">                 
                <!--begin::Wrapper-->                                  
                <div class="d-flex align-items-center me-3" bis_skin_checked="1">
                    <!--begin::Logo-->                         
                    <img src="assets/media/patterns/angular-icon.svg" class="me-4 w-30px" alt="">                  
                    <!--end::Logo-->

                    <!--begin::Section-->                                  
                    <div class="flex-grow-1" bis_skin_checked="1">
                        <!--begin::Text-->
                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Angular 16</a>
                        <!--end::Text-->
                        
                        <!--begin::Description-->
                        <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
                        <!--end::Description--->
                    </div>                   
                    <!--end::Section-->
                </div>                   
                <!--end::Wrapper-->
                
                <!--begin::Statistics-->
                <div class="d-flex align-items-center w-100 mw-125px" bis_skin_checked="1">  
                    <!--begin::Progress-->                  
                    <div class="progress h-6px w-100 me-2 bg-light-info" bis_skin_checked="1">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                    </div>
                    <!--end::Progress-->

                    <!--begin::Value-->
                    <span class="text-gray-500 fw-semibold">
                        70%
                    </span>
                    <!--end::Value-->
                </div>
                <!--end::Statistics-->
            </div>
            <!--end::Item-->
            
                            <!--begin::Separator-->
                <div class="separator separator-dashed my-3" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">                 
                <!--begin::Wrapper-->                                  
                <div class="d-flex align-items-center me-3" bis_skin_checked="1">
                    <!--begin::Logo-->                         
                    <img src="assets/media/patterns/spring-3.svg" class="me-4 w-30px" alt="">                  
                    <!--end::Logo-->

                    <!--begin::Section-->                                  
                    <div class="flex-grow-1" bis_skin_checked="1">
                        <!--begin::Text-->
                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Spring</a>
                        <!--end::Text-->
                        
                        <!--begin::Description-->
                        <span class="text-gray-500 fw-semibold d-block fs-6">Java Framework</span>
                        <!--end::Description--->
                    </div>                   
                    <!--end::Section-->
                </div>                   
                <!--end::Wrapper-->
                
                <!--begin::Statistics-->
                <div class="d-flex align-items-center w-100 mw-125px" bis_skin_checked="1">  
                    <!--begin::Progress-->                  
                    <div class="progress h-6px w-100 me-2 bg-light-danger" bis_skin_checked="1">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                    </div>
                    <!--end::Progress-->

                    <!--begin::Value-->
                    <span class="text-gray-500 fw-semibold">
                        56%
                    </span>
                    <!--end::Value-->
                </div>
                <!--end::Statistics-->
            </div>
            <!--end::Item-->
            
                            <!--begin::Separator-->
                <div class="separator separator-dashed my-3" bis_skin_checked="1"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">                 
                <!--begin::Wrapper-->                                  
                <div class="d-flex align-items-center me-3" bis_skin_checked="1">
                    <!--begin::Logo-->                         
                    <img src="assets/media/patterns/typescript-1.svg" class="me-4 w-30px" alt="">                  
                    <!--end::Logo-->

                    <!--begin::Section-->                                  
                    <div class="flex-grow-1" bis_skin_checked="1">
                        <!--begin::Text-->
                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">TypeScript</a>
                        <!--end::Text-->
                        
                        <!--begin::Description-->
                        <span class="text-gray-500 fw-semibold d-block fs-6">Better Tooling</span>
                        <!--end::Description--->
                    </div>                   
                    <!--end::Section-->
                </div>                   
                <!--end::Wrapper-->
                
                <!--begin::Statistics-->
                <div class="d-flex align-items-center w-100 mw-125px" bis_skin_checked="1">  
                    <!--begin::Progress-->                  
                    <div class="progress h-6px w-100 me-2 bg-light-success" bis_skin_checked="1">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                    </div>
                    <!--end::Progress-->

                    <!--begin::Value-->
                    <span class="text-gray-500 fw-semibold">
                        82%
                    </span>
                    <!--end::Value-->
                </div>
                <!--end::Statistics-->
            </div>
            <!--end::Item-->
            
             
           
    </div>
    <!--end::Body-->
</div>
<!--end::List widget 21--> 
    </div>
    <!--end::Col-->     

    <!--begin::Col-->
    <div class="col-xl-8" bis_skin_checked="1">
        <!--begin::Chart widget 18-->
<div class="card card-flush h-xl-100" bis_skin_checked="1">
    <!--begin::Header-->
    <div class="card-header pt-7" bis_skin_checked="1">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Learn Activity</span>
            <span class="text-gray-500 mt-1 fw-semibold fs-6">Hours per course</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">           
            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1" bis_skin_checked="1">           
                <!--begin::Display range-->
                <div class="text-gray-600 fw-bold" bis_skin_checked="1">5 Dec 2023 - 3 Jan 2024</div>
                <!--end::Display range-->

                <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>       
            </div>  
            <!--end::Daterangepicker-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex align-items-end px-0 pt-3 pb-5 overflow-hidden" bis_skin_checked="1"> 
        <!--begin::Chart-->
        <div id="kt_charts_widget_18_chart" class="h-325px w-100 min-h-auto ps-4 pe-6" bis_skin_checked="1" style="min-height: 340px;"><div id="apexcharts7hm8nfm9" class="apexcharts-canvas apexcharts7hm8nfm9 apexcharts-theme-light" bis_skin_checked="1" style="width: 686.5px; height: 325px;"><svg id="SvgjsSvg1254" width="686.5" height="325" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="686.5" height="325"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" bis_skin_checked="1" style="max-height: 162.5px;"></div></foreignObject><g id="SvgjsG1350" class="apexcharts-yaxis" rel="0" transform="translate(28.65625, 0)"><g id="SvgjsG1351" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1353" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1354">120H</tspan><title>120H</title></text><text id="SvgjsText1356" font-family="inherit" x="20" y="77.01723706054688" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1357">90H</tspan><title>90H</title></text><text id="SvgjsText1359" font-family="inherit" x="20" y="122.63447412109375" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1360">60H</tspan><title>60H</title></text><text id="SvgjsText1362" font-family="inherit" x="20" y="168.25171118164062" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1363">30H</tspan><title>30H</title></text><text id="SvgjsText1365" font-family="inherit" x="20" y="213.86894824218749" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1366">0H</tspan><title>0H</title></text></g></g><g id="SvgjsG1256" class="apexcharts-inner apexcharts-graphical" transform="translate(58.65625, 30)"><defs id="SvgjsDefs1255"><linearGradient id="SvgjsLinearGradient1260" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1261" stop-opacity="0" stop-color="rgba(216,227,240,0)" offset="0"></stop><stop id="SvgjsStop1262" stop-opacity="0" stop-color="rgba(190,209,230,0)" offset="1"></stop><stop id="SvgjsStop1263" stop-opacity="0" stop-color="rgba(190,209,230,0)" offset="1"></stop></linearGradient><clipPath id="gridRectMask7hm8nfm9"><rect id="SvgjsRect1265" width="623.84375" height="194.46894824218748" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath>
        <clipPath id="forecastMask7hm8nfm9"></clipPath>
        <clipPath id="nonForecastMask7hm8nfm9"></clipPath><clipPath id="gridRectMarkerMask7hm8nfm9"><rect id="SvgjsRect1266" width="621.84375" height="186.46894824218748" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1264" width="24.71375" height="182.46894824218748" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1260)" class="apexcharts-xcrosshairs" y2="182.46894824218748" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1314" class="apexcharts-grid"><g id="SvgjsG1315" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1319" x1="0" y1="45.61723706054687" x2="617.84375" y2="45.61723706054687" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1320" x1="0" y1="91.23447412109374" x2="617.84375" y2="91.23447412109374" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1321" x1="0" y1="136.8517111816406" x2="617.84375" y2="136.8517111816406" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1316" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1324" x1="0" y1="182.46894824218748" x2="617.84375" y2="182.46894824218748" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
        <line id="SvgjsLine1323" x1="0" y1="1" x2="0" y2="182.46894824218748" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1317" class="apexcharts-grid-borders"><line id="SvgjsLine1318" x1="0" y1="0" x2="617.84375" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1322" x1="0" y1="182.46894824218748" x2="617.84375" y2="182.46894824218748" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1267" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1268" class="apexcharts-series" rel="1" seriesName="Spentxtime" data:realIndex="0"><path id="SvgjsPath1273" d="M 31.77482142857143 177.46994824218748 L 31.77482142857143 105.35892153320312 C 31.77482142857143 102.85892153320312 34.27482142857143 100.35892153320312 36.77482142857143 100.35892153320312 L 49.48857142857143 100.35892153320312 C 51.98857142857143 100.35892153320312 54.48857142857143 102.85892153320312 54.48857142857143 105.35892153320312 L 54.48857142857143 177.46994824218748 C 54.48857142857143 179.96994824218748 51.98857142857143 182.46994824218748 49.48857142857143 182.46994824218748 L 36.77482142857143 182.46994824218748 C 34.27482142857143 182.46994824218748 31.77482142857143 179.96994824218748 31.77482142857143 177.46994824218748 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7hm8nfm9)" pathTo="M 31.77482142857143 177.46994824218748 L 31.77482142857143 105.35892153320312 C 31.77482142857143 102.85892153320312 34.27482142857143 100.35892153320312 36.77482142857143 100.35892153320312 L 49.48857142857143 100.35892153320312 C 51.98857142857143 100.35892153320312 54.48857142857143 102.85892153320312 54.48857142857143 105.35892153320312 L 54.48857142857143 177.46994824218748 C 54.48857142857143 179.96994824218748 51.98857142857143 182.46994824218748 49.48857142857143 182.46994824218748 L 36.77482142857143 182.46994824218748 C 34.27482142857143 182.46994824218748 31.77482142857143 179.96994824218748 31.77482142857143 177.46994824218748 Z " pathFrom="M 31.77482142857143 182.46994824218748 L 31.77482142857143 182.46994824218748 L 54.48857142857143 182.46994824218748 L 54.48857142857143 182.46994824218748 L 54.48857142857143 182.46994824218748 L 54.48857142857143 182.46994824218748 L 54.48857142857143 182.46994824218748 L 31.77482142857143 182.46994824218748 Z" cy="100.35792153320311" cx="119.03821428571429" j="0" val="54" barHeight="82.11102670898437" barWidth="24.71375"></path><path id="SvgjsPath1279" d="M 120.03821428571429 177.46994824218748 L 120.03821428571429 123.60581635742187 C 120.03821428571429 121.10581635742187 122.53821428571429 118.60581635742187 125.03821428571429 118.60581635742187 L 137.75196428571428 118.60581635742187 C 140.25196428571428 118.60581635742187 142.75196428571428 121.10581635742187 142.75196428571428 123.60581635742187 L 142.75196428571428 177.46994824218748 C 142.75196428571428 179.96994824218748 140.25196428571428 182.46994824218748 137.75196428571428 182.46994824218748 L 125.03821428571429 182.46994824218748 C 122.53821428571429 182.46994824218748 120.03821428571429 179.96994824218748 120.03821428571429 177.46994824218748 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7hm8nfm9)" pathTo="M 120.03821428571429 177.46994824218748 L 120.03821428571429 123.60581635742187 C 120.03821428571429 121.10581635742187 122.53821428571429 118.60581635742187 125.03821428571429 118.60581635742187 L 137.75196428571428 118.60581635742187 C 140.25196428571428 118.60581635742187 142.75196428571428 121.10581635742187 142.75196428571428 123.60581635742187 L 142.75196428571428 177.46994824218748 C 142.75196428571428 179.96994824218748 140.25196428571428 182.46994824218748 137.75196428571428 182.46994824218748 L 125.03821428571429 182.46994824218748 C 122.53821428571429 182.46994824218748 120.03821428571429 179.96994824218748 120.03821428571429 177.46994824218748 Z " pathFrom="M 120.03821428571429 182.46994824218748 L 120.03821428571429 182.46994824218748 L 142.75196428571428 182.46994824218748 L 142.75196428571428 182.46994824218748 L 142.75196428571428 182.46994824218748 L 142.75196428571428 182.46994824218748 L 142.75196428571428 182.46994824218748 L 120.03821428571429 182.46994824218748 Z" cy="118.60481635742187" cx="207.30160714285716" j="1" val="42" barHeight="63.86413188476562" barWidth="24.71375"></path><path id="SvgjsPath1285" d="M 208.30160714285716 177.46994824218748 L 208.30160714285716 73.42685559082031 C 208.30160714285716 70.92685559082031 210.80160714285716 68.42685559082031 213.30160714285716 68.42685559082031 L 226.01535714285717 68.42685559082031 C 228.51535714285717 68.42685559082031 231.01535714285717 70.92685559082031 231.01535714285717 73.42685559082031 L 231.01535714285717 177.46994824218748 C 231.01535714285717 179.96994824218748 228.51535714285717 182.46994824218748 226.01535714285717 182.46994824218748 L 213.30160714285716 182.46994824218748 C 210.80160714285716 182.46994824218748 208.30160714285716 179.96994824218748 208.30160714285716 177.46994824218748 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7hm8nfm9)" pathTo="M 208.30160714285716 177.46994824218748 L 208.30160714285716 73.42685559082031 C 208.30160714285716 70.92685559082031 210.80160714285716 68.42685559082031 213.30160714285716 68.42685559082031 L 226.01535714285717 68.42685559082031 C 228.51535714285717 68.42685559082031 231.01535714285717 70.92685559082031 231.01535714285717 73.42685559082031 L 231.01535714285717 177.46994824218748 C 231.01535714285717 179.96994824218748 228.51535714285717 182.46994824218748 226.01535714285717 182.46994824218748 L 213.30160714285716 182.46994824218748 C 210.80160714285716 182.46994824218748 208.30160714285716 179.96994824218748 208.30160714285716 177.46994824218748 Z " pathFrom="M 208.30160714285716 182.46994824218748 L 208.30160714285716 182.46994824218748 L 231.01535714285717 182.46994824218748 L 231.01535714285717 182.46994824218748 L 231.01535714285717 182.46994824218748 L 231.01535714285717 182.46994824218748 L 231.01535714285717 182.46994824218748 L 208.30160714285716 182.46994824218748 Z" cy="68.4258555908203" cx="295.56500000000005" j="2" val="75" barHeight="114.04309265136717" barWidth="24.71375"></path><path id="SvgjsPath1291" d="M 296.56500000000005 177.46994824218748 L 296.56500000000005 20.206745686848954 C 296.56500000000005 17.706745686848954 299.06500000000005 15.206745686848956 301.56500000000005 15.206745686848956 L 314.27875000000006 15.206745686848956 C 316.77875000000006 15.206745686848956 319.27875000000006 17.706745686848954 319.27875000000006 20.206745686848954 L 319.27875000000006 177.46994824218748 C 319.27875000000006 179.96994824218748 316.77875000000006 182.46994824218748 314.27875000000006 182.46994824218748 L 301.56500000000005 182.46994824218748 C 299.06500000000005 182.46994824218748 296.56500000000005 179.96994824218748 296.56500000000005 177.46994824218748 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7hm8nfm9)" pathTo="M 296.56500000000005 177.46994824218748 L 296.56500000000005 20.206745686848954 C 296.56500000000005 17.706745686848954 299.06500000000005 15.206745686848956 301.56500000000005 15.206745686848956 L 314.27875000000006 15.206745686848956 C 316.77875000000006 15.206745686848956 319.27875000000006 17.706745686848954 319.27875000000006 20.206745686848954 L 319.27875000000006 177.46994824218748 C 319.27875000000006 179.96994824218748 316.77875000000006 182.46994824218748 314.27875000000006 182.46994824218748 L 301.56500000000005 182.46994824218748 C 299.06500000000005 182.46994824218748 296.56500000000005 179.96994824218748 296.56500000000005 177.46994824218748 Z " pathFrom="M 296.56500000000005 182.46994824218748 L 296.56500000000005 182.46994824218748 L 319.27875000000006 182.46994824218748 L 319.27875000000006 182.46994824218748 L 319.27875000000006 182.46994824218748 L 319.27875000000006 182.46994824218748 L 319.27875000000006 182.46994824218748 L 296.56500000000005 182.46994824218748 Z" cy="15.205745686848957" cx="383.82839285714294" j="3" val="110" barHeight="167.26320255533852" barWidth="24.71375"></path><path id="SvgjsPath1297" d="M 384.82839285714294 177.46994824218748 L 384.82839285714294 152.49673316243488 C 384.82839285714294 149.99673316243488 387.32839285714294 147.49673316243488 389.82839285714294 147.49673316243488 L 402.54214285714295 147.49673316243488 C 405.04214285714295 147.49673316243488 407.54214285714295 149.99673316243488 407.54214285714295 152.49673316243488 L 407.54214285714295 177.46994824218748 C 407.54214285714295 179.96994824218748 405.04214285714295 182.46994824218748 402.54214285714295 182.46994824218748 L 389.82839285714294 182.46994824218748 C 387.32839285714294 182.46994824218748 384.82839285714294 179.96994824218748 384.82839285714294 177.46994824218748 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7hm8nfm9)" pathTo="M 384.82839285714294 177.46994824218748 L 384.82839285714294 152.49673316243488 C 384.82839285714294 149.99673316243488 387.32839285714294 147.49673316243488 389.82839285714294 147.49673316243488 L 402.54214285714295 147.49673316243488 C 405.04214285714295 147.49673316243488 407.54214285714295 149.99673316243488 407.54214285714295 152.49673316243488 L 407.54214285714295 177.46994824218748 C 407.54214285714295 179.96994824218748 405.04214285714295 182.46994824218748 402.54214285714295 182.46994824218748 L 389.82839285714294 182.46994824218748 C 387.32839285714294 182.46994824218748 384.82839285714294 179.96994824218748 384.82839285714294 177.46994824218748 Z " pathFrom="M 384.82839285714294 182.46994824218748 L 384.82839285714294 182.46994824218748 L 407.54214285714295 182.46994824218748 L 407.54214285714295 182.46994824218748 L 407.54214285714295 182.46994824218748 L 407.54214285714295 182.46994824218748 L 407.54214285714295 182.46994824218748 L 384.82839285714294 182.46994824218748 Z" cy="147.49573316243487" cx="472.09178571428583" j="4" val="23" barHeight="34.9732150797526" barWidth="24.71375"></path><path id="SvgjsPath1303" d="M 473.09178571428583 177.46994824218748 L 473.09178571428583 55.17996076660156 C 473.09178571428583 52.67996076660156 475.59178571428583 50.17996076660156 478.09178571428583 50.17996076660156 L 490.80553571428584 50.17996076660156 C 493.30553571428584 50.17996076660156 495.80553571428584 52.67996076660156 495.80553571428584 55.17996076660156 L 495.80553571428584 177.46994824218748 C 495.80553571428584 179.96994824218748 493.30553571428584 182.46994824218748 490.80553571428584 182.46994824218748 L 478.09178571428583 182.46994824218748 C 475.59178571428583 182.46994824218748 473.09178571428583 179.96994824218748 473.09178571428583 177.46994824218748 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7hm8nfm9)" pathTo="M 473.09178571428583 177.46994824218748 L 473.09178571428583 55.17996076660156 C 473.09178571428583 52.67996076660156 475.59178571428583 50.17996076660156 478.09178571428583 50.17996076660156 L 490.80553571428584 50.17996076660156 C 493.30553571428584 50.17996076660156 495.80553571428584 52.67996076660156 495.80553571428584 55.17996076660156 L 495.80553571428584 177.46994824218748 C 495.80553571428584 179.96994824218748 493.30553571428584 182.46994824218748 490.80553571428584 182.46994824218748 L 478.09178571428583 182.46994824218748 C 475.59178571428583 182.46994824218748 473.09178571428583 179.96994824218748 473.09178571428583 177.46994824218748 Z " pathFrom="M 473.09178571428583 182.46994824218748 L 473.09178571428583 182.46994824218748 L 495.80553571428584 182.46994824218748 L 495.80553571428584 182.46994824218748 L 495.80553571428584 182.46994824218748 L 495.80553571428584 182.46994824218748 L 495.80553571428584 182.46994824218748 L 473.09178571428583 182.46994824218748 Z" cy="50.17896076660156" cx="560.3551785714287" j="5" val="87" barHeight="132.28998747558592" barWidth="24.71375"></path><path id="SvgjsPath1309" d="M 561.3551785714287 177.46994824218748 L 561.3551785714287 111.4412198079427 C 561.3551785714287 108.9412198079427 563.8551785714287 106.4412198079427 566.3551785714287 106.4412198079427 L 579.0689285714287 106.4412198079427 C 581.5689285714287 106.4412198079427 584.0689285714287 108.9412198079427 584.0689285714287 111.4412198079427 L 584.0689285714287 177.46994824218748 C 584.0689285714287 179.96994824218748 581.5689285714287 182.46994824218748 579.0689285714287 182.46994824218748 L 566.3551785714287 182.46994824218748 C 563.8551785714287 182.46994824218748 561.3551785714287 179.96994824218748 561.3551785714287 177.46994824218748 Z " fill="rgba(27,132,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7hm8nfm9)" pathTo="M 561.3551785714287 177.46994824218748 L 561.3551785714287 111.4412198079427 C 561.3551785714287 108.9412198079427 563.8551785714287 106.4412198079427 566.3551785714287 106.4412198079427 L 579.0689285714287 106.4412198079427 C 581.5689285714287 106.4412198079427 584.0689285714287 108.9412198079427 584.0689285714287 111.4412198079427 L 584.0689285714287 177.46994824218748 C 584.0689285714287 179.96994824218748 581.5689285714287 182.46994824218748 579.0689285714287 182.46994824218748 L 566.3551785714287 182.46994824218748 C 563.8551785714287 182.46994824218748 561.3551785714287 179.96994824218748 561.3551785714287 177.46994824218748 Z " pathFrom="M 561.3551785714287 182.46994824218748 L 561.3551785714287 182.46994824218748 L 584.0689285714287 182.46994824218748 L 584.0689285714287 182.46994824218748 L 584.0689285714287 182.46994824218748 L 584.0689285714287 182.46994824218748 L 584.0689285714287 182.46994824218748 L 561.3551785714287 182.46994824218748 Z" cy="106.4402198079427" cx="648.6185714285716" j="6" val="50" barHeight="76.02872843424478" barWidth="24.71375"></path><g id="SvgjsG1270" class="apexcharts-bar-goals-markers"><g id="SvgjsG1272" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask7hm8nfm9)"></g><g id="SvgjsG1278" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask7hm8nfm9)"></g><g id="SvgjsG1284" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask7hm8nfm9)"></g><g id="SvgjsG1290" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask7hm8nfm9)"></g><g id="SvgjsG1296" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask7hm8nfm9)"></g><g id="SvgjsG1302" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask7hm8nfm9)"></g><g id="SvgjsG1308" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask7hm8nfm9)"></g></g><g id="SvgjsG1271" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1269" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"><g id="SvgjsG1275" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1277" font-family="inherit" x="43.13169642857143" y="88.35792153320311" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#071437" class="apexcharts-datalabel" cx="43.13169642857143" cy="88.35792153320311" style="font-family: inherit;">54</text></g><g id="SvgjsG1281" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1283" font-family="inherit" x="131.3950892857143" y="106.60481635742187" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#071437" class="apexcharts-datalabel" cx="131.3950892857143" cy="106.60481635742187" style="font-family: inherit;">42</text></g><g id="SvgjsG1287" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1289" font-family="inherit" x="219.6584821428572" y="56.425855590820305" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#071437" class="apexcharts-datalabel" cx="219.6584821428572" cy="56.425855590820305" style="font-family: inherit;">75</text></g><g id="SvgjsG1293" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1295" font-family="inherit" x="307.92187500000006" y="3.2057456868489567" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#071437" class="apexcharts-datalabel" cx="307.92187500000006" cy="3.2057456868489567" style="font-family: inherit;">110</text></g><g id="SvgjsG1299" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1301" font-family="inherit" x="396.18526785714295" y="135.49573316243487" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#071437" class="apexcharts-datalabel" cx="396.18526785714295" cy="135.49573316243487" style="font-family: inherit;">23</text></g><g id="SvgjsG1305" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1307" font-family="inherit" x="484.44866071428584" y="38.17896076660156" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#071437" class="apexcharts-datalabel" cx="484.44866071428584" cy="38.17896076660156" style="font-family: inherit;">87</text></g><g id="SvgjsG1311" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1313" font-family="inherit" x="572.7120535714287" y="94.4402198079427" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#071437" class="apexcharts-datalabel" cx="572.7120535714287" cy="94.4402198079427" style="font-family: inherit;">50</text></g></g></g><line id="SvgjsLine1325" x1="0" y1="0" x2="617.84375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1326" x1="0" y1="0" x2="617.84375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1327" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1328" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1330" font-family="inherit" x="44.13169642857143" y="205.46894824218748" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(-45 45.226829528808594 199.4689483642578)"><tspan id="SvgjsTspan1331">QA Analysis</tspan><title>QA Analysis</title></text><text id="SvgjsText1333" font-family="inherit" x="132.39508928571428" y="205.46894824218748" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(-45 133.43199157714844 199.4689483642578)"><tspan id="SvgjsTspan1334">Marketing</tspan><title>Marketing</title></text><text id="SvgjsText1336" font-family="inherit" x="220.6584821428571" y="205.46894824218748" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(-45 222.03559112548828 199.4689483642578)"><tspan id="SvgjsTspan1337">Web Dev</tspan><title>Web Dev</title></text><text id="SvgjsText1339" font-family="inherit" x="308.921875" y="205.46894824218748" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(-45 310.02056884765625 199.4689483642578)"><tspan id="SvgjsTspan1340">Maths</tspan><title>Maths</title></text><text id="SvgjsText1342" font-family="inherit" x="397.1852678571429" y="205.46894824218748" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(-45 398.56236267089844 199.4689483642578)"><tspan id="SvgjsTspan1343">Front-end Dev</tspan><title>Front-end Dev</title></text><text id="SvgjsText1345" font-family="inherit" x="485.4486607142858" y="205.46894824218748" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(-45 486.54522705078125 199.4689483642578)"><tspan id="SvgjsTspan1346">Physics</tspan><title>Physics</title></text><text id="SvgjsText1348" font-family="inherit" x="573.7120535714287" y="205.46894824218748" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(-45 575.0926818847656 199.4689483642578)"><tspan id="SvgjsTspan1349">Phylosophy</tspan><title>Phylosophy</title></text></g></g><g id="SvgjsG1367" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1368" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1369" class="apexcharts-point-annotations"></g></g></svg>
        <div class="apexcharts-tooltip apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-tooltip-title" bis_skin_checked="1" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" bis_skin_checked="1" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 132, 255);"></span>
        <div class="apexcharts-tooltip-text" bis_skin_checked="1" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
        <div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-yaxistooltip-text" bis_skin_checked="1">
        </div>
        </div>
    </div>
</div>
        <!--end::Chart-->                  
    </div>
    <!--end: Card Body-->
</div>
<!--end::Chart widget 18-->

     </div>
    <!--end::Col-->    
</div> 


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://preview.keenthemes.com//metronic8/demo1/assets/js/scripts.bundle.js"></script>
<script type="text/javascript" src="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script type="text/javascript" src="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script type="text/javascript" src="https://preview.keenthemes.com/metronic8/demo1/assets/js/widgets.bundle.js"></script>
<script type="text/javascript" src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/widgets.js"></script>

</x-default-layout>
