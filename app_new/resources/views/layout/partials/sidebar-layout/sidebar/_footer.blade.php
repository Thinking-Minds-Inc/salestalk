<!--begin::Footer-->
<!-- <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
	<a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Purchase Metronic on ThemeForest">
	<span class="btn-label">Purchase Metronic</span>{!! getIcon('document', 'btn-icon fs-2 m-0') !!}</a>
</div> -->
<!--end::Footer-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
	// $(document).ready(function() {
	// 	$(".dashboard-menus-items a").click(function () {
	// 		$(".dashboard-menus-items a").removeClass("active");
	// 		// $(".tab").addClass("active"); // instead of this do the below 
	// 		$(this).addClass("active");   
	// 	});
	// });

	$(document).ready(function () {
    $('.dashboard-menus-items a').click(function (e) {

        $('.dashboard-menus-items a').removeClass('active');

        var $parent = $(this);
        if (!$parent.hasClass('active')) {
            $parent.addClass('active');
        }
        e.preventDefault();
    });
});


</script>