$(document).ready(function() {
    $.ajax({
        method: 'GET',
        cache: false,
        dataType: 'json', 
        url: "http://localhost:1337/articles"
    }).then(function(data) {
        $('.gmb-artikel').html(data.gmbArtikel);
        $('.judul-artikel').html(data.penulis);
        $('.waktu-artikel').html(data.waktu);
        $('.isi-artikel').html(data.tulisanArtikel);
  
    });
});