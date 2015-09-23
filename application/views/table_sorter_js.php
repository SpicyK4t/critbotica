<?php echo HTML::script('media/js/jquery.tablesorter.min.js'); ?>
<script type="text/javascript">
   $(document).ready(function()
       {
          $("#tabla").tablesorter({
             headers: {
                0: {
                   sorter: false
                },
                4: {
                   sorter: false
                },
                5: {
                   sorter: false
                }
             }
          });
       }
   );
</script>
