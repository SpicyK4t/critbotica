<script type="text/javascript">
   $(document).ready(function() {
       $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year
            format: 'yyyy-mm-dd'
        });
        $('.datepicker2').pickadate({
             selectMonths: true, // Creates a dropdown to control month
             selectYears: 15, // Creates a dropdown of 15 years to control year
             format: 'yyyy-mm-00'
         });
   });
</script>
