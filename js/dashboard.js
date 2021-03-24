/*Menu responsivel*/
/*Altera o valor de sidebar-toogle do css para os valores do css toogled*/
$(document).ready(function(){
    /*Apresentar ou ocultar o menu*/
   $('.sidebar-toogle').on('click', function(){
        $('.sidebar').toggleClass('toogled');
    }); 
    
    /*Carrgar o submenu aberto*/
    var active = $('.sidebar .active');
    if (active.length && active.parent('.collapse').length) {
        var parent = active.parent('.collapse');
        
        parent.prev('a').attr('aria-expanded', true);
        parent.addClass('show');
    }
    
});
// Carregar a  modal Define
$(document).ready(function(){
    $('a[data-confirm]').click(function(ev){
        var href = $(this).attr('href');
        if($('#confirm-delete').length){
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-danger text-white">EXCLUIR ITEM<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza de que deseja excluir o item selecionado?</div><div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button><a class="btn btn-danger text-white" id="dataComfirmOK">Apagar</a></div></div></div></div>');
        }
        $('#dataComfirmOK').attr('href', href);
        $('#confirm-delete').modal({show: true});
        return false;
    });
});

//Apresentar tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

