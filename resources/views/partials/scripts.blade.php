<!--   Core JS Files   -->
<script src="{{{ URL::asset('js/core/jquery.min.js') }}}"></script>
<script src="{{{ URL::asset('js/core/popper.min.js') }}}"></script>
<script src="{{{ URL::asset('js/bootstrap-material-design.js') }}}"></script>
<script src="{{{ URL::asset('js/plugins/perfect-scrollbar.jquery.min.js') }}}"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="{{{ URL::asset('js/plugins/chartist.min.js') }}}"></script>

<!-- Library for adding dinamically elements -->
<script src="{{{ URL::asset('js/plugins/arrive.min.js') }}}" type="text/javascript"></script>

<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="{{{ URL::asset('js/plugins/bootstrap-notify.js') }}}"></script>

<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="{{{ URL::asset('js/material-dashboard.js?v=2.0.0') }}}"></script>

<!-- demo init -->
<script src="{{{ URL::asset('js/plugins/demo.js') }}}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });
</script>
<!-- -->