// event pada saat link diklik
$('.page-scroll').on('click', function(e){
    
    //ambil isi href
    var tujuan = $(this).attr('href');
    
    //tangkep elemen ybs
    var elemenTujuan = $(tujuan);

    //pindah scroll

    $('html , body').animate({
        scrollTop: elemenTujuan.offset().top - 50
    });

    e.preventDefault();

});