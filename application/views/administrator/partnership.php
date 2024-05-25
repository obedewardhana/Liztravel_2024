<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Partnership</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url("dashboard"); ?>">Dashboard</a></li>
                    <li class="active">Partnership</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary btn-sm btn-show-add mr-2 my-2" data-toggle="modal" data-target="#compose"><i
                    class="fa fa-plus"></i> Tambah Partner</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="data">
                    <thead>
                        <tr>
                            <th style="width:10%">#</th>
                            <th>Name</th>
                            <th>Nomer</th>
                            <th>Type</th>
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
                <h5 class="modal-title" id="largeModalLabel">Tambah Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="composeForm" autocomplete="chrome-off">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" autocomplete="new-name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label>Nomor</label>
                        <input type="text" name="no" autocomplete="new-no" onkeypress="return isNumber(event)"
                            maxlength="13" class="form-control no-space" id="no">
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select name="type" autocomplete="new-type" class="form-control js-select2" id="type">
                            <option value="0" selected disabled>Pilih tipe kerjasama</option>
                            <option value="Titip unit">Titip unit</option>
                            <option value="Agen kota">Agen kota</option>
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
        jQuery("input[name=no]").val("");
        jQuery("select[name=type]").val("0");
        jQuery("#compose .modal-title").html("Tambah Partner");
        jQuery("#composeForm").attr("action", "<?= base_url("Partnership/insert"); ?>");

        jQuery("#composeForm").validate().resetForm();
    });

    $("#data").DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": true,
        "order": [],
        "ajax": {
            "url": "<?= base_url("Partnership/json"); ?>"
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
            name: {
                required: true
            },
            no: {
                required: true
            },
            type: {
                required: true
            }
        },
        messages: {
            name: {
                required: "*Masukkan name."
            },
            no: {
                required: "*Masukkan no."
            },
            type: {
                required: "*Pilih type."
            }
        },
        submitHandler: function (form) {
            var form = new FormData();
            form.append("name", jQuery('input[name=name]').val());
            form.append("no", jQuery('input[name=no]').val());
            form.append("type", jQuery('select[name=type]').val());
            var action = jQuery("#composeForm").attr("action");

            console.log(form);

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
                        jQuery("input[name=no]").val("");
                        jQuery("select[name=type]").val("");

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
        jQuery.getJSON("<?= base_url(); ?>Partnership/delete/" + id, function (data) {
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

        var id = jQuery(this).attr("data-id");
        var name = jQuery(this).attr("data-name");
        var no = jQuery(this).attr("data-no");
        var type = jQuery(this).attr("data-type");

        jQuery("#compose .modal-title").html("Edit Client");
        jQuery("#composeForm").attr("action", "<?= base_url(); ?>Partnership/update/" + id);
        jQuery("input[name=name]").val(name);
        jQuery("input[name=no]").val(no);
        jQuery("select[name=type]").val(type);

        jQuery(".form-group label.error").remove();
        jQuery(".form-group input").removeClass('.error');
        jQuery("#compose").modal("toggle");
    });


</script>