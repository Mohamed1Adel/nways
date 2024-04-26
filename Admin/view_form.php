<?php
include ('include/header.php');
include ('include/sidebar.php');

?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">

<?php
include ('forms/form_'.$_REQUEST['form'].'.php');
?>

    
<div class="modal effect-rotate-bottom" id="smartsedit-modal1">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content">
            <div class="modal-body text-start">
                <input type="text" class="form-control col-12" id="smart-edit1_value">
                <input type="hidden" class="form-control col-12" id="smart-edit1_row">
                <input type="hidden" class="form-control col-12" id="smart-edit1_table">
                <input type="hidden" class="form-control col-12" id="smart-edit1_form" value="form<?php echo $_REQUEST['form']; ?>">
            </div>
            <div class="modal-footer">
                <button id="modal1_save" class="btn btn-primary" >حفظ التعديل</button> <button class="btn btn-light" data-bs-dismiss="modal" >إغلاق</button>
            </div>
        </div>
    </div>
</div>


<?php
include ('include/footer.php');
?>

			
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

<script>
    $('#data-export').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        scrollX: true,
		pageLength: 25 ,
		language: {
             url: 'assets/libs/data-table/ar.json',
        },
    });
    
    $('.smart-edit1').click(function(){
        $('#smart-edit1_value').val($(this).text());
        $('#smart-edit1_row').val($(this).attr('id').split("__")[1]);
        $('#smart-edit1_table').val($(this).attr('id').split("__")[0]);
        $('#smartsedit-modal1').modal('show');
    })
    
    $('#modal1_save').click(function(){
        var PostData = { 
            action: "edit_row", 
            row: $('#smart-edit1_row').val(), 
            form: $('#smart-edit1_form').val(),
            table: $('#smart-edit1_table').val(),  
            value: $('#smart-edit1_value').val()  
        };
        $.ajax({
        	url: "controller/view_form.php" , data: PostData, type: "POST",
        		success: function (e) { 
        		    $('#smartsedit-modal1').modal('hide');
        		    var active = '#' + $('#smart-edit1_table').val() + '__' + $('#smart-edit1_row').val()
        		    $(active).text($('#smart-edit1_value').val())
        		    $('#smart-edit1_table').val('')
        		    $('#smart-edit1_row').val('')
        		    $('#smart-edit1_value').val('')
        		}
        });	
    })
</script>