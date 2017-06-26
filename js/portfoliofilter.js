 // Script om portfolio-items te filteren
$( document ).ready(function() {  // Gaat kijken of pagina ready is.
    $(".portfolio-nav").on('click',function(e){ // anonieme functie
        e.preventDefault()
        var target = $(this).data('target') // leest data-target attribuut uit en slaagt op in variabele
        console.log(target) // toont in console
        $('.portfolio-item').hide(); // verbergt alle items bij klik
        $('.portfolio-item[data-category*='+target+']').show()
        $('.portfolio-nav').removeClass('active')
        $(this).addClass('active')
        if(target=="all"){
            $('.portfolio-item').show()
        }
    })
}); 