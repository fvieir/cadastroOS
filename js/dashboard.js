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

$(document).ready(function(ev){
    $().click(function(){


    });

});


