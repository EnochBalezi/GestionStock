$(document).ready(function () {
    $(document).on('change', '#classe', function () {
        var item = $(this).val();
        $.ajax({
            url: "core/functions.php",
            method: "POST",
            data: { items: item },
            success: function (data) {
                $('#place').val(data);
            }
        });
    })
    $(document).on('change', '#classe', function () {
        var item = $(this).val();
        $.ajax({
            url: "core/functions.php",
            method: "POST",
            data: { items_restant: item },
            success: function (data) {
                $('#restant').val(data);
            }
        });
    });
    $(document).on('change', '#classe', function () {
        var item = $(this).val();
        $.ajax({
            url: "core/functions.php",
            method: "POST",
            data: { items_occupe: item },
            success: function (data) {
                $('#occupe').val(data);
            }
        });
    });

    $(document).on('keyup', '#place', function () {
        var montant = $('#occupe').val();
        var somme = montant * $(this).val() / 100;
        if ($(this).val() == null) {
            $('#total').val(0);
        } else {
            $('#total').val(somme);
        }
    });
});