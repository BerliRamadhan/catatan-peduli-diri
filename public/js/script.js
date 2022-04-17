$(function() {

    $('.modal-view').on('click', function() {
        const id = $(this).data('id');
        
        $.ajax({
            url: '/catat/'+id,
            data: {id : id},
            method: 'GET',
            success: function(data) {
                // console.log(data);
                $('#lokasi-catatan').html(data.lokasi);
                $('#tanggal-catatan').html(data.tanggal);
                $('#tempat-catatan').html(data.lokasi);
                $('#waktu-catatan').html(data.waktu);
                $('#suhu-catatan').html(data.suhu);
            }
        });
    });

    $('.modal-edit').on('click', function() {
        const id = $(this).data('id');
        
        $.ajax({
            url: '/catat/'+id,
            data: {id : id},
            method: 'GET',
            // dataType: 'json',
            success: function(data) {
                // console.log(data);
                $('.modal-content form').attr('action', '/catat/'+data.id);
                $('#tanggal').val(data.tanggal);
                $('#waktu').val(data.waktu);
                $('#lokasi').val(data.lokasi);
                $('#suhu').val(data.suhu);
            }
        });
    });
});