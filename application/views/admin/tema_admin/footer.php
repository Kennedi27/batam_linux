<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url().'assets/plugins/select2/select2.full.min.js'?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.date.extensions.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.extensions.js'?>"></script>
<!-- date-range-picker -->

<!-- bootstrap datepicker -->
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable();
    $('#example2').DataTable({
    	 dom: 'Bfrtip',
        buttons: [
            {
              extend : 'pdf',
              orientation : 'potrait',
              pageSize : 'A4',
              title : 'REKAPITULASI PENGELUARAN UANG KAS BLUG',
              className : 'btn btn-primary',
              download : 'open'
            },
            {
              extend : 'print',
              className : 'btn btn-success',
              title : 'REKAPITULASI PENGELUARAN UANG KAS BLUG'
            }
        ]
    });
    $('#example3').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
              extend : 'pdf',
              orientation : 'potrait',
              pageSize : 'A4',
              title : 'REKAPITULASI PEMASUKAN UANG KAS BLUG',
              className : 'btn btn-primary',
              download : 'open'
            },
            {
              extend : 'print',
              className : 'btn btn-success',
              title : 'REKAPITULASI PEMASUKAN UANG KAS BLUG'
            }
        ]
    });
    $('#example4').DataTable({
      dom: 'Bfrtip',
        buttons: [
            {
              extend : 'pdf',
              orientation : 'potrait',
              pageSize : 'A4',
              title : 'REKAPITULASI UANG KAS BLUG',
              className : 'btn btn-primary',
              download : 'open'
            },
            {
              extend : 'print',
              className : 'btn btn-success',
              title : 'REKAPITULASI UANG KAS BLUG'
            }
        ]
    });
});  
</script>