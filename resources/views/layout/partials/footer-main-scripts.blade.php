<!-- jQuery -->
<script src="{{ URL::asset('/assets/js/jquery-3.6.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Fearther JS -->
<script src="{{ URL::asset('/assets/js/feather.min.js')}}"></script>
		
<!-- Owl Carousel JS -->
<script src="{{ URL::asset('/assets/js/owl.carousel.min.js')}}"></script>

<!-- select JS -->
<script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js')}}"></script>

<!-- Mobile CSS-->
<script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js')}}"></script>	

<!-- Validation-->
<script src="{{ URL::asset('/assets/js/validation.js')}}"></script>

<!-- Datetimepicker JS -->
<script src="{{ URL::asset('/assets/js/moment.min.js')}}"></script>
<script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- Sticky Sidebar JS -->
<script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

<!-- Rangeslider JS -->
<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/custom-rangeslider.js')}}"></script>

<!-- Mobile Input -->
<script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js')}}"></script>	

<!-- Slimscroll JS -->
<script src="{{ URL::asset('/assets/plugins/ckeditor/ckeditor.js')}}"></script>

<!-- Bootstrap Tagsinput JS -->
<script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{ URL::asset('/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Datatables JS -->
<script src="{{ URL::asset('/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/datatables/datatables.min.js')}}"></script>	

<!-- Fullcalendar JS -->
<script src="{{ URL::asset('/assets/plugins/fullcalendar/main.min.js')}}"></script>	

<!-- Sweetalert 2 -->
<script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

<!-- Fancybox JS -->
<script src="{{ URL::asset('/assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>

<!-- Slick JS -->
<script src="{{ URL::asset('/assets/js/slick.js')}}"></script>

<!-- Aos -->
<script src="{{ URL::asset('/assets/plugins/aos/aos.js')}}"></script>
<!-- Top JS -->
<script src="{{ URL::asset('/assets/js/backToTop.js')}}"></script>

<!-- counterup JS -->
<script src="{{ URL::asset('/assets/js/jquery.waypoints.js')}}"></script>
<script src="{{ URL::asset('/assets/js/jquery.counterup.min.js')}}"></script>

<script src="{{ URL::asset('/assets/js/script.js')}}"></script>


<script>
    $(document).ready(function() {
        $('.owl-carousel.owl-theme').owlCarousel({
            items:1,
            merge:true,
            loop:true,
            margin:10,
            video:true,
            lazyLoad:true,
            center:true,
            responsive:{
                480:{
                    items:2
                },
                600:{
                    items:4
                }
            }
        });
    });
</script>
