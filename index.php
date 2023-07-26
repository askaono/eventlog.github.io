<?php
session_start();

// Cek apakah pengguna telah login, jika tidak, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil nama pengguna yang login
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EVENT LOG MSWIFI</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
    <style>
        body {
            padding-top: 20px;
            font-family: Arial, sans-serif;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }
        .navbar-right li {
            margin-left: 10px;
        }
        .tab-content {
            margin-top: 20px;
        }
        table {
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        td {
            text-align: center;
        }
        .modal-label {
            position: relative;
            top: 7px;
        }
        .PP {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">-EVENT LOG MSWIFI-</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><?php echo "Welcome, " . $username; ?></a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Tambahkan navigasi tab di sini -->
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#access-point">Access Point</a></li>
            <li><a data-toggle="tab" href="#client">Client (User)</a></li>
            <li><a data-toggle="tab" href="#switch">Switch</a></li>
        </ul>

        <div class="tab-content">
            <div id="access-point" class="tab-pane fade in active">
                <!-- Konten untuk Access Point -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                                if (isset($_SESSION['error'])) {
                                    echo
                                    "
                                    <div class='alert alert-danger text-center'>
                                        <button class='close'>&times;</button>
                                        " . $_SESSION['error'] . "
                                    </div>
                                    ";
                                    unset($_SESSION['error']);
                                }
                                if (isset($_SESSION['success'])) {
                                    echo
                                    "
                                    <div class='alert alert-success text-center'>
                                        <button class='close'>&times;</button>
                                        " . $_SESSION['success'] . "
                                    </div>
                                    ";
                                    unset($_SESSION['success']);
                                }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#addnewAP" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="print_pdf_ap.php" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> PDF</a>
                            </div>
                        </div>
                        <div class="height10"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="myTableAP" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Ticket Number</th>
                                            <th>Jenis Gangguan</th>
                                            <th>Lokasi</th>
                                            <th>Lantai</th>
                                            <th>AP Name</th>
                                            <th>AP Serial Number</th>
                                            <th>New AP Serial</th>
                                            <th>Deskripsi Gangguan</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once('connection.php');
                                            $sql_access_point = "SELECT * FROM network_devices WHERE device_type = 'access_point'";
                                            $query_access_point = $conn->query($sql_access_point);
                                            while ($row_access_point = $query_access_point->fetch_assoc()) {
                                                echo
                                                "<tr>
                                                    <td>".$row_access_point['ticket_number']."</td>
                                                    <td>".$row_access_point['jenis_gangguan']."</td>
                                                    <td>".$row_access_point['lokasi']."</td>
                                                    <td>".$row_access_point['lantai']."</td>
                                                    <td>".$row_access_point['ap_name']."</td>
                                                    <td>".$row_access_point['ap_serial_number']."</td>
                                                    <td>".$row_access_point['new_ap_serial']."</td>
                                                    <td>".$row_access_point['deskripsi_gangguan']."</td>
                                                    <td>".$row_access_point['status']."</td>
                                                    <td>".$row_access_point['timestamp']."</td>
                                                    <td>
                                                        <a href='#editAP_".$row_access_point['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                                                        <a href='#deleteAP_".$row_access_point['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                                                    </td>
                                                </tr>";
                                                include('edit_delete_modal_ap.php');
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="client" class="tab-pane fade">
                <!-- Konten untuk Client (User) -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                                // Ubah query dan konten sesuai dengan data Client (User)
                                $sql_client = "SELECT * FROM network_devices WHERE device_type = 'client'";
                                $query_client = $conn->query($sql_client);
                            ?>
                            <div class="col-md-6">
                                <a href="#addnewClient" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="print_pdf_client.php" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> PDF</a>
                            </div>
                        </div>
                        <div class="height10"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="myTableClient" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Ticket Number</th>
                                            <th>Jenis Gangguan</th>
                                            <th>Lokasi</th>
                                            <th>Lantai</th>
                                            <th>User/PN</th>
                                            <th>Deskripsi Gangguan</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row_client = $query_client->fetch_assoc()) {
                                                echo
                                                "<tr>
                                                    <td>".$row_client['ticket_number']."</td>
                                                    <td>".$row_client['jenis_gangguan']."</td>
                                                    <td>".$row_client['lokasi']."</td>
                                                    <td>".$row_client['lantai']."</td>
                                                    <td>".$row_client['user_pn']."</td>
                                                    <td>".$row_client['deskripsi_gangguan']."</td>
                                                    <td>".$row_client['status']."</td>
                                                    <td>".$row_client['timestamp']."</td>
                                                    <td>
                                                        <a href='#editClient_".$row_client['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                                                        <a href='#deleteClient_".$row_client['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                                                    </td>
                                                </tr>";
                                                include('edit_delete_modal_client.php');
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="switch" class="tab-pane fade">
                <!-- Konten untuk Switch -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                                // Ubah query dan konten sesuai dengan data Switch
                                $sql_switch = "SELECT * FROM network_devices WHERE device_type = 'switch'";
                                $query_switch = $conn->query($sql_switch);
                            ?>
                            <div class="col-md-6">
                                <a href="#addnewSwitch" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="print_pdf_switch.php" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> PDF</a>
                            </div>
                        </div>
                        <div class="height10"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="myTableSwitch" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Ticket Number</th>
                                            <th>Jenis Gangguan</th>
                                            <th>Lokasi</th>
                                            <th>Lantai</th>
                                            <th>Nama Switch</th>
                                            <th>Deskripsi Gangguan</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row_switch = $query_switch->fetch_assoc()) {
                                                echo
                                                "<tr>
                                                    <td>".$row_switch['ticket_number']."</td>
                                                    <td>".$row_switch['jenis_gangguan']."</td>
                                                    <td>".$row_switch['lokasi']."</td>
                                                    <td>".$row_switch['lantai']."</td>
                                                    <td>".$row_switch['nama_switch']."</td>
                                                    <td>".$row_switch['deskripsi_gangguan']."</td>
                                                    <td>".$row_switch['status']."</td>
                                                    <td>".$row_switch['timestamp']."</td>
                                                    <td>
                                                        <a href='#editSwitch_".$row_switch['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                                                        <a href='#deleteSwitch_".$row_switch['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                                                    </td>
                                                </tr>";
                                                include('edit_delete_modal_switch.php');
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('add_modal_ap.php') ?>
    <?php include('add_modal_client.php') ?>
    <?php include('add_modal_switch.php') ?>
    <?php include('add_client.php') ?>
    <?php include('add_switch.php') ?>

    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="datatable/jquery.dataTables.min.js"></script>
    <script src="datatable/dataTable.bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            // Initialize datatable
            $('#myTableAP').DataTable();
            $('#myTableClient').DataTable();
            $('#myTableSwitch').DataTable();

            // Hide alert
            $(document).on('click', '.close', function(){
                $('.alert').hide();
            });
        });
    </script>
    <footer>
        <div class="PP">
            <p>MadeByLove: <a>(^3^)MSWIFI</a></p>
        </div>
    </footer>
</body>
</html>
