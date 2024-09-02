<div class="footer">
    <p class="copyright">Steelcoders ©</p>
    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
</div>
</div>
</aside>


</div>
<div class="left-sidebar-hover"></div>


<!-- Javascripts -->
<script>
        // JavaScript function to update the number of entries to display
        function updateTable(entries) {
            var table = document.getElementById("example");
            var tbody = table.getElementsByTagName("tbody")[0];
            var rows = tbody.getElementsByTagName("tr");
            
            // Show all rows by default
            for (var i = 0; i < rows.length; i++) {
                rows[i].style.display = "";
            }

            // If "All" is selected, no need to hide rows
            if (entries === "all") {
                return;
            }

            // Hide rows to match the selected number of entries
            for (var i = parseInt(entries); i < rows.length; i++) {
                rows[i].style.display = "none";
            }
        }
</script>

<script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="assets/plugins/materialize/js/materialize.min.js"></script>
<script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/plugins/chart.js/chart.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/plugins/curvedlines/curvedLines.js"></script>
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/js/alpha.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
<script src="assets/js/pages/table-data.js"></script>


   
</body>

</html>