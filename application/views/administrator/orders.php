<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Orders</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url("dashboard"); ?>">Dashboard</a></li>
                    <li class="active">Orders</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-success btn-sm btn-show-add" data-toggle="modal" data-target="#compose"><i
                    class="fa fa-plus"></i> Tambah Order</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="data">
                    <thead>
                        <tr>
                            <th style="width:10%">#</th>
                            <th style="width:20%">Tanggal pinjam</th>
                            <th style="width:20%">Tanggal kembali</th>
                            <th style="width:20%">Nama</th>
                            <th style="width:40%">Service</th>
                            <th style="width:20%">Status</th>
                            <th style="width:10%">Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="compose" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Tambah Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="composeForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Service</label>
                        <select name="service" autocomplete="new-service" class="form-control" id="service">
                            <option value="" disabled>-Pilih-</option>
                            <?php foreach ($dataProducts as $r) { ?>
                                <option value="<?= $r->id; ?>">
                                    <?= $r->category; ?> |
                                    <?= $r->name; ?> -
                                    <?= $r->transmission; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <select name="location" autocomplete="new-location" class="form-control js-select2" id="location">
                            <option value="0" selected disabled>Pilih lokasi</option>
                            <option value="Singkawang">Singkawang</option>
                            <option value="Pontianak">Pontianak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" autocomplete="off" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label>Handphone</label>
                        <input type="text" name="handphone" autocomplete="off" class="form-control" id="handphone">
                    </div>
                    <div class="form-group">
                        <label>Tanggal dipinjam</label>
                        <input type="text" name="startdate" autocomplete="off" class="form-control" onkeydown="return false"
                            id="startdate">
                    </div>
                    <div class="form-group">
                        <label>Waktu dipinjam</label>
                        <div class="input-group date" id="starttime">
                            <input type="text" class="form-control timePicker" name="starttime">
                            <span class="input-group-addon"><i class="fa fa-clock" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal kembali</label>
                        <input type="text" name="enddate" autocomplete="off" class="form-control" onkeydown="return false"
                            id="enddate">
                    </div>
                    <div class="form-group">
                        <label>Waktu kembali</label>
                        <div class="input-group date" id="endtime">
                            <input type="text" class="form-control timePicker" name="endtime">
                            <span class="input-group-addon"><i class="fa fa-clock" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" autocomplete="new-status" class="form-control js-select2" id="status">
                            <option value="0" selected disabled>Pilih status</option>
                            <option value="Waiting list">Waiting list</option>
                            <option value="Paid">Paid</option>
                            <option value="Cancel">Cancel</option>
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
        jQuery('#startdate').val("").datepicker("update");
        jQuery('#enddate').val("").datepicker("update");
        jQuery("input[name=name]").val("");
        jQuery("select[name=status]").val("0");
        jQuery("select[name=service]").val("");
        jQuery("select[name=location]").val("0");
        jQuery("input[name=handphone]").val("");
        jQuery("#compose .modal-title").html("Tambah Order");
        jQuery('#moduls').val(null).trigger('change');
        jQuery("#composeForm").attr("action", "<?= base_url("Orders/insert"); ?>");
        jQuery("#composeForm").validate().resetForm();
    });

    jQuery("#startdate").datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayBtn: 1
    });

    jQuery("#enddate").datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayBtn: 1
    });

    jQuery('#starttime').datetimepicker({
        useCurrent: false,
        format: "H:m:s"
    });

    jQuery('#endtime').datetimepicker({
        useCurrent: false,
        format: "H:m:s"
    });

    $("#data").DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": true,
        "order": [],
        "ajax": {
            "url": "<?= base_url("Orders/json"); ?>"
        },
        "drawCallback": function () {
            $('.js-select2-multiple').select2();
        }
    });

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
            service: {
                required: true
            },
            location: {
                required: true
            },
            startdate: {
                required: true
            },
            starttime: {
                required: true
            },
            enddate: {
                required: true
            },
            endtime: {
                required: true
            },
            name: {
                required: true
            },
            handphone: {
                required: true
            },
            status: {
                required: true
            }
        },
        messages: {
            service: {
                required: "*Masukkan layanan."
            },
            location: {
                required: "*Masukkan lokasi."
            },
            startdate: {
                required: "*Masukkan tanggal berangkat."
            },
            starttime: {
                required: "*Masukkan waktu berangkat."
            },
            enddate: {
                required: "*Masukkan tanggal berakhir."
            },
            endtime: {
                required: "*Masukkan waktu berakhir."
            },
            name: {
                required: "*Masukkan nama."
            },
            handphone: {
                required: "*Masukkan handphone."
            },
            status: {
                required: "*Pilih status."
            }
        },
        submitHandler: function (form) {
            var form = new FormData();

            form.append("name", jQuery('input[name=name]').val());
            form.append("service", jQuery('select[name=service]').val());
            form.append("location", jQuery('select[name=location]').val());
            form.append("handphone", jQuery('input[name=handphone]').val());
            form.append("status", jQuery('select[name=status]').val());
            form.append("startdate", jQuery('input[name=startdate]').val());
            form.append("starttime", jQuery('input[name=starttime]').val());
            form.append("enddate", jQuery('input[name=enddate]').val());
            form.append("endtime", jQuery('input[name=endtime]').val());

            console.log(form);
            var action = jQuery("#composeForm").attr("action");

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
                        jQuery("input[name=handphone]").val("");
                        jQuery("select[name=location]").val("");
                        jQuery("input[name=startdate]").val("");
                        jQuery("input[name=enddate]").val("");
                        jQuery("input[name=starttime]").val("");
                        jQuery("input[name=endtime]").val("");
                        jQuery("select[name=status]").val("");
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
        var nama = jQuery(this).attr("data-nama");
        jQuery("#delete .modal-body").html("Anda yakin ingin menghapus data ini?</b>");
        jQuery("#delete").modal("toggle");

        jQuery("#delete .btn-del-confirm").attr("onclick", "deleteData(" + id + ")");
    })

    function deleteData(id) {
        jQuery.getJSON("<?= base_url(); ?>Orders/delete/" + id, function (data) {
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

    function isNumber(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 &&
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }


    $("body").on("click", ".btn-edit", function () {

        var id = jQuery(this).attr("data-id");
        var name = jQuery(this).attr("data-name");
        var handphone = jQuery(this).attr("data-handphone");
        var status = jQuery(this).attr("data-status");
        var service = jQuery(this).attr("data-service");
        var startdate = jQuery(this).attr("data-startdate");
        var enddate = jQuery(this).attr("data-enddate");
        var starttime = jQuery(this).attr("data-starttime");
        var endtime = jQuery(this).attr("data-endtime");
        var location = jQuery(this).attr("data-location");

        jQuery("#compose .modal-title").html("Edit Order");
        jQuery("#composeForm").attr("action", "<?= base_url(); ?>Orders/update/" + id);
        jQuery("input[name=name]").val(name);
        jQuery("input[name=handphone]").val(handphone);
        jQuery("select[name=status]").val(status);
        jQuery("select[name=service]").val(service);
        jQuery("select[name=location]").val(location);
        jQuery("input[name=startdate]").val(startdate);
        jQuery("input[name=enddate]").val(enddate);
        jQuery("input[name=starttime]").val(starttime);
        jQuery("input[name=endtime]").val(endtime);

        jQuery(".form-group label.error").remove();
        jQuery(".form-group input").removeClass('.error');
        jQuery("#compose").modal("toggle");
    });

</script>