@jquery
@toastr_js
@toastr_render
<!-- jQuery -->
<script type="text/javascript" src="/client/js/jquery.min.js"></script>

<!-- sticky -->
<script type="text/javascript" src="/client/js/jquery.sticky.js"></script>

<!-- OWL CAROUSEL Slider -->
<script type="text/javascript" src="/client/js/owl.carousel.min.js"></script>

<!-- Boostrap -->
<script type="text/javascript" src="/client/js/bootstrap.min.js"></script>

<!-- Countdown -->
<script type="text/javascript" src="/client/js/jquery.countdown.min.js"></script>

<!--jquery Bxslider  -->
<script type="text/javascript" src="/client/js/jquery.bxslider.min.js"></script>

<!-- actual -->
<script type="text/javascript" src="/client/js/jquery.actual.min.js"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="/client/js/jquery-ui.min.js"></script>

<!-- Chosen jquery-->
<script type="text/javascript" src="/client/js/chosen.jquery.min.js"></script>

<!-- parallax jquery-->
<script type="text/javascript" src="/client/js/jquery.parallax-1.1.3.js"></script>

<!-- elevatezoom -->
<script type="text/javascript" src="/client/js/jquery.elevateZoom.min.js"></script>

<!-- fancybox -->
<script src="/client/js/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="/client/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
<script src="/client/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

<!-- arcticmodal -->
<script src="/client/js/arcticmodal/jquery.arcticmodal.js"></script>

<!-- Main -->
<script type="text/javascript" src="/client/js/main.js"></script>
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
