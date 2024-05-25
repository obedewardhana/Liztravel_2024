<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Products</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url("dashboard"); ?>">Dashboard</a></li>
                    <li class="active">Products</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary btn-sm btn-show-add mr-2 my-2" data-toggle="modal" data-target="#compose"><i
                    class="fa fa-plus"></i> Tambah Product</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="data">
                    <thead>
                        <tr>
                            <th style="width:10%">#</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="previewimg" data-index="">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Preview Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-box text-center">

                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="compose" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="composeForm" autocomplete="chrome-off">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="userfile" accept="image/gif, image/jpeg, image/jpg, image/png"
                            class="dropify" data-default-file="" value="" />
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" autocomplete="new-name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label>Kategori Usaha</label>
                        <select name="category" autocomplete="new-category" class="form-control js-select2"
                            id="category">
                            <option value="0" selected disabled>Pilih kategori bisnis</option>
                            <option value="Rent car">Rent car</option>
                            <option value="Taxi/Cargo">Taxi/Cargo</option>
                            <option value="Penginapan">Penginapan</option>
                            <option value="Tempat wisata">Tempat wisata</option>
                        </select>
                    </div>
                    <div class="form-group d-none">
                        <label>Transmisi</label>
                        <select name="transmission" autocomplete="new-transmission" class="form-control js-select2"
                            id="transmission">
                            <option value="0" selected disabled>Pilih transmisi</option>
                            <option value="Matic">Matic</option>
                            <option value="Manual">Manual</option>
                        </select>
                    </div>
                    <div class="form-group d-none">
                        <label>Kursi</label>
                        <input type="text" name="seat" autocomplete="new-seat"
                            onkeypress="return isNumber(event)" maxlength="2" class="form-control no-space"
                            id="seat">
                    </div>
                    <div class="form-group d-none">
                        <label>Wifi</label>
                        <select name="wifi" autocomplete="new-wifi" class="form-control js-select2"
                            id="wifi">
                            <option value="0" selected disabled>Pilih wifi</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak ada">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group d-none">
                        <label>Air panas</label>
                        <select name="hotwater" autocomplete="new-hotwater" class="form-control js-select2"
                            id="hotwater">
                            <option value="0" selected disabled>Pilih Air panas</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak ada">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="price" autocomplete="new-price"
                            onkeypress="return isNumber(event)" maxlength="12" class="form-control no-space"
                            id="price">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="availability" autocomplete="new-availability" class="form-control js-select2"
                            id="availability">
                            <option value="0" selected disabled>Pilih status</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak tersedia">Tidak tersedia</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal" id="delete" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Konfirmasi?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-del-confirm">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(".btn-show-add").on("click", function () {
        jQuery("input[name=name]").val("");
        jQuery("select[name=category]").val("0");
        jQuery("select[name=transmission]").val("0");
        jQuery("input[name=seat]").val("");
        jQuery("select[name=wifi]").val("0");
        jQuery("select[name=hotwater]").val("0");
        jQuery("input[name=price]").val("");
        jQuery("select[name=availability]").val("0");
        jQuery('.dropify-wrapper').find('.img-fit').remove();
        jQuery(".dropify").attr('data-default-file', '');
        jQuery("#compose .modal-title").html("Tambah Product");
        jQuery("#composeForm").attr("action", "<?= base_url("Products/insert"); ?>");

        jQuery(".dropify-clear").trigger("click");
        jQuery("#composeForm").validate().resetForm();
    });

    $('#category').on('click', function () {
        var value = $(this).val();
        console.log(value);
        $('#transmission').closest('.form-group').addClass('d-none');
        $('#seat').closest('.form-group').addClass('d-none');
        $('#price').closest('.form-group').addClass('d-none');
        $('#wifi').closest('.form-group').addClass('d-none');
        $('#hotwater').closest('.form-group').addClass('d-none');

        if (value == 'Rent car') {
            $('#transmission').closest('.form-group').removeClass('d-none');
            $('#seat').closest('.form-group').removeClass('d-none');
            $('#price').closest('.form-group').removeClass('d-none');
        } else if (value == 'Taxi/Cargo') {
            $('#transmission').closest('.form-group').removeClass('d-none');
            $('#seat').closest('.form-group').removeClass('d-none');
            $('#price').closest('.form-group').removeClass('d-none');
        } else if (value == 'Penginapan') {
            $('#wifi').closest('.form-group').removeClass('d-none');
            $('#hotwater').closest('.form-group').removeClass('d-none');
            $('#price').closest('.form-group').removeClass('d-none');
        } else if (value == 'Tempat wisata') {
            $('#transmission').closest('.form-group').removeClass('d-none');
            $('#seat').closest('.form-group').removeClass('d-none');
            $('#price').closest('.form-group').removeClass('d-none');
        }
    });

    $("#data").DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": true,
        "order": [],
        "ajax": {
            "url": "<?= base_url("Products/json"); ?>"
        }
    });

    $("body").on("click", ".btn-previewimg", function () {
        var id = jQuery(this).attr("data-id");
        var photo = jQuery(this).attr("data-photo");
        var url = '<?= base_url(); ?>img/';
        var newurl = url + '' + photo;
        var html = '<img src="' + newurl + '" />';

        if (photo == '') {
            var defaultpic = 'default.png';
            var newurl = url + '' + defaultpic;
            var html = '<img src="' + newurl + '" />';
            jQuery("#previewimg").modal("toggle");
            jQuery('#previewimg').find('.img-box').empty();
            jQuery('#previewimg').find('.img-box').append(html);
        } else {
            jQuery("#previewimg").modal("toggle");
            jQuery('#previewimg').find('.img-box').empty();
            jQuery('#previewimg').find('.img-box').append(html);
        }
    });

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    $(".no-space").on({
        keydown: function (e) {
            if (e.which === 32)
                return false;
        },
        change: function () {
            this.value = this.value.replace(/\s/g, "");
        }
    });

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param * 1000000)
    }, 'File size must be less than {0} MB');

    $("#composeForm").validate({
        rules: {
            userfile: {
                filesize: 1
            },
            name: {
                required: true
            },
            category: {
                required: true
            },
            price: {
                required: true
            },
            availability: {
                required: true
            }
        },
        messages: {
            userfile: {
                filesize: "Maksimal size gambar 1MB"
            },
            name: {
                required: "*Masukkan nama produk."
            },
            category: {
                required: "*Pilih category."
            },
            price: {
                required: "*Masukkan price."
            },
            availability: {
                required: "*Pilih availability."
            }
        },
        submitHandler: function (form) {
            var form = new FormData();
            form.append("name", jQuery('input[name=name]').val());
            form.append("category", jQuery('select[name=category]').val());
            form.append("transmission", jQuery('select[name=transmission]').val());
            form.append("seat", jQuery('input[name=seat]').val());
            form.append("wifi", jQuery('select[name=wifi]').val());
            form.append("hotwater", jQuery('select[name=hotwater]').val());
            form.append("price", jQuery('input[name=price]').val());
            form.append("availability", jQuery('select[name=availability]').val());
            form.append("userfile", jQuery('.dropify')[0].files[0]);
            var action = jQuery("#composeForm").attr("action");
            jQuery('.dropify-wrapper').find('.img-fit').remove();

            console.log(jQuery('.dropify')[0].files[0]);

            jQuery.ajax({
                url: action,
                method: "POST",
                data: form,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status) {
                        jQuery("input[name=name]").val("");
                        jQuery("select[name=category]").val("");
                        jQuery("select[name=transmission]").val("");
                        jQuery("input[name=seat]").val("");
                        jQuery("select[name=wifi]").val("");
                        jQuery("select[name=hotwater]").val("");
                        jQuery("input[name=price]").val("");
                        jQuery("select[name=availability]").val("");
                        jQuery("input[name=userfile]").val("");
                        jQuery(".dropify-clear").trigger("click");

                        jQuery("#compose").modal('toggle');
                        jQuery("#data").DataTable().ajax.reload(null, true);
                        Swal.fire(
                            'Berhasil',
                            data.msg,
                            'success'
                        )
                    } else {
                        Swal.fire(
                            'Gagal',
                            data.msg,
                            'error'
                        )
                    }
                }
            });
        },
        errorPlacement: function (label, element) {
            label.addClass('error');
            element.after(label);
        }
    });

    $('body').on("click", ".btn-delete", function () {
        var id = jQuery(this).attr("data-id");
        var name = jQuery(this).attr("data-name");
        jQuery("#delete .modal-body").html("<p>Anda yakin ingin menghapus <b>" + name + "</b></p>");
        jQuery("#delete").modal("toggle");

        jQuery("#delete .btn-del-confirm").attr("onclick", "deleteData(" + id + ")");
    })

    function deleteData(id) {
        jQuery.getJSON("<?= base_url(); ?>Products/delete/" + id, function (data) {
            console.log(data.status);
            if (data.status) {
                jQuery("#delete").modal("toggle");
                jQuery("#data").DataTable().ajax.reload(null, true);
                Swal.fire(
                    'Berhasil',
                    data.msg,
                    'success'
                )
            } else {
                Swal.fire(
                    'Gagal',
                    data.msg,
                    'error'
                )
            }
        })
    }

    $("body").on("click", ".btn-edit", function () {
        jQuery(".dropify-clear").trigger("click");
        jQuery('.dropify-wrapper').find('.img-fit').remove();

        var id = jQuery(this).attr("data-id");
        var seat = jQuery(this).attr("data-seat");
        var wifi = jQuery(this).attr("data-wifi");
        var transmission = jQuery(this).attr("data-transmission");
        var hotwater = jQuery(this).attr("data-hotwater");
        var name = jQuery(this).attr("data-name");
        var category = jQuery(this).attr("data-category");
        var price = jQuery(this).attr("data-price");
        var availability = jQuery(this).attr("data-availability");
        var photo = jQuery(this).attr("data-photo");

        if (photo == '') {
            var url = '<?= base_url(); ?>img/';
            var defaultpic = 'default.png';
            var newurl = url + '' + defaultpic;
            var html = '<img src="' + newurl + '" />';
        } else {
            var url = '<?= base_url(); ?>img/';
            var newurl = url + '' + photo;

            var img = '<img src=' + newurl + '></img>'
        }

        $('#transmission').closest('.form-group').addClass('d-none');
        $('#seat').closest('.form-group').addClass('d-none');
        $('#price').closest('.form-group').addClass('d-none');
        $('#wifi').closest('.form-group').addClass('d-none');
        $('#hotwater').closest('.form-group').addClass('d-none');

        if (category == 'Rent car') {
            $('#transmission').closest('.form-group').removeClass('d-none');
            $('#seat').closest('.form-group').removeClass('d-none');
            $('#price').closest('.form-group').removeClass('d-none');
        } else if (category == 'Taxi/Cargo') {
            $('#transmission').closest('.form-group').removeClass('d-none');
            $('#seat').closest('.form-group').removeClass('d-none');
            $('#price').closest('.form-group').removeClass('d-none');
        } else if (category == 'Penginapan') {
            $('#wifi').closest('.form-group').removeClass('d-none');
            $('#hotwater').closest('.form-group').removeClass('d-none');
            $('#price').closest('.form-group').removeClass('d-none');
        } else if (category == 'Tempat wisata') {
            $('#transmission').closest('.form-group').removeClass('d-none');
            $('#seat').closest('.form-group').removeClass('d-none');
            $('#price').closest('.form-group').removeClass('d-none');
        }

        jQuery("#compose .modal-title").html("Edit Product");
        jQuery("#composeForm").attr("action", "<?= base_url(); ?>Products/update/" + id);
        jQuery("input[name=name]").val(name);
        jQuery("select[name=category]").val(category);
        jQuery("select[name=transmission]").val(transmission);
        jQuery("input[name=seat]").val(seat);
        jQuery("select[name=hotwater]").val(hotwater);
        jQuery("select[name=wifi]").val(wifi);
        jQuery("input[name=price]").val(price);
        jQuery("select[name=availability]").val(availability);

        var html = '<img class="img-fit" src="' + newurl + '" />';
        jQuery('.dropify-wrapper').find('.dropify-message').before(html);

        jQuery(".form-group label.error").remove();
        jQuery(".form-group input").removeClass('.error');
        jQuery("#compose").modal("toggle");
    });

    $('.dropify').dropify();

</script>