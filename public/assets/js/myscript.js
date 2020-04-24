// Flash messege
const flashdata = $('.flash-data').data('flashdata');
if(flashdata){
		Swal.fire({
	  icon: 'success',
	  title: flashdata,
	  text: ''
	});
}

//tooltip
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function() {
    $('[data-toggle="popover"]').popover({
        html: true,
        content: function() {
            return $('#primary-popover-content').html();
        }
    });
});

// datatable
$(function () {
    $('#data-table').DataTable({
      "paging": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });