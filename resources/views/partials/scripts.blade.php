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
<script src="{{{ URL::asset('js/material-dashboard.js') }}}"></script>

<!-- demo init -->
<script src="{{{ URL::asset('js/plugins/demo.js') }}}"></script>

<!-- JsPdf Generar PDF -->

<script src="{{{ URL::asset('js/core/jspdf.min.js') }}}" type="text/javascript"></script>

<script src="{{{ URL::asset('js/core/html2pdf.js') }}}" type="text/javascript"></script>

<!-- Datatables -->
<script src="{{{ URL::asset('js/jquery.dataTables.min.js') }}}"></script>

<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<!-- Archivo de funciones JS -->
<script src="{{{ URL::asset('js/custom.js') }}}"></script>


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



