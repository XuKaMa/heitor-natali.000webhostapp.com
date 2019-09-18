/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$(function(){
	
	$('#delete-modal').on('show.bs.modal', function (event) {
	  
	  var button = $(event.relatedTarget);
	  var id = button.data('produto');
	  
	  var modal = $(this);
	  modal.find('.modal-title').text('Excluir Produto #' + id);
	  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
	})
	
})