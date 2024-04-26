<?php
include ('include/header.php');
include ('include/sidebar.php');

?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">



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
        scrollX: true,
		pageLength: 10 ,
	     buttons: [],
		order: [[ 0, "DESC" ]],
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

    $('.DeleBTM').click(function(){
        $('#active_row').val($(this).attr('row'));
        $('#DeleConfirm').modal('show');
    }) 
 
    $('#ConfirmDeleBTM').click(function(){
        var PostData = { 
            action: "delete", 
            row: $('#active_row').val()
        };
        $.ajax({
        	url: "controller/news.php" , data: PostData, type: "POST",
        		success: function (e) { 
        		    $('#DeleConfirm').modal('hide');
        		    $('tr[row='+$('#active_row').val()+']').remove();
                     Swal.fire({
                                    title: 'تم حذف الخبر بنجاح',
                                    text: '',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 2500
                     })          		    
        		    
        		}
        });	
    })

</script>