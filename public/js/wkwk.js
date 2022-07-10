
$(function () {

    $('.tampilUbah').on('click', function () {
        const id = $(this).data('idlaa')

        $.ajax({
            url: 'http://localhost/projek2022/twittersederhana/public/user/ubahposting',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#postingan').val(data.content);
                $('#idposting').val(data.id);
            }
        })

    })





    $('.tombolsuka').on('click', function () {
        const id_post = $(this).data('tombolsuka');
        const id_user = $(this).data('iduser');
        let konten = $(this);
        let url = ''

        if (konten.hasClass('aktif')) {
            // console.log('oke');
            konten.addClass('btn-danger');
            konten.removeClass('btn-light');
            url = 'http://localhost/projek2022/twittersederhana/public/posts/like';
        } else {
            // console.log('yah');
            konten.removeClass('btn-danger');
            konten.addClass('btn-light');
            // id like 
            url = 'http://localhost/projek2022/twittersederhana/public/posts/dislike';

        }
        konten.toggleClass('aktif');

        $.ajax({
            url: url,
            data: { id_post: id_post, id_user: id_user },
            method: 'post',
            dataType: 'json',
            success: function (data) {

            }
        })


    })

})