<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3 pr-5 pl-3">
    <div class="row">
        <div class="col-sm-6 col-lg-3 pl-4 pr-0">
            <div class="card text-white bg-theme-giok">
                <div class="card-body">
                    <h4 class="mb-0">
                        <span class="count">
                            <?= $products; ?>
                        </span>
                    </h4>
                    <p class="text-light">Products</p>
                    <div class="card-icon">
                        <i class="fa fa-car"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 pl-4 pr-0">
            <div class="card text-white bg-theme-giok">
                <div class="card-body">
                    <h4 class="mb-0">
                        <span class="count">
                            <?= $clients; ?>
                        </span>
                    </h4>
                    <p class="text-light">Clients</p>
                    <div class="card-icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 pl-4 pr-0">
            <div class="card text-white bg-theme-giok">
                <div class="card-body">
                    <h4 class="mb-0">
                        <span class="count">
                            <?= $orders; ?>
                        </span>
                    </h4>
                    <p class="text-light">Orders</p>
                    <div class="card-icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 pl-4 pr-0">
            <div class="card text-white bg-theme-giok">
                <div class="card-body">
                    <h4 class="mb-0">
                        <span class="count">
                            <?= $user; ?>
                        </span>
                    </h4>
                    <p class="text-light">Operator</p>
                    <div class="card-icon">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 pl-4 pr-0">
            <div class="card bg-primary p-3 p-xl-5 bg-white">
                <div class="calendar-box">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 pl-4 pr-0">
            <ul class="userlist-wrapper">
                <?php foreach ($allUser as $us): ?>
                    <li>
                        <div class="card-user">
                            <img src="<?= base_url('img/' . $us->photo) ?>" />
                            <h4>
                                <?= $us->name; ?>
                            </h4>
                            <p>role:
                                <?= role_name($us->role); ?>
                            </p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            // editable: true,
            locale: 'id',
            headerToolbar: {
                left: 'prev',
                center: 'title',
                right: 'next'
            },
            events: "<?php echo base_url(); ?>calendar/load",
            disableDragging: true,
            selectable: false
        });
        calendar.render();
    });
</script>