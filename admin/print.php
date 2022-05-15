<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
?>








<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKN - Admin panel</title>

    <!-- Custom fonts for this template -->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">





                <!-- Begin Page Content -->
                <div class="container-fluid">






                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-12">
                                

                                <button onclick="window.print()"
                                    class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i>Print Data</button>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="form-inline mr-auto w-1000
                             navbar-search">
                                    <div class="input-group">
                                        <input id='myInput' onkeyup='searchTable()' type="text"
                                            class="form-control bg-light border-0 small" placeholder="Search for..."
                                            aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <br>
                                <table class="table table-bordered" name="myTable" id="myTable" width="100%"
                                    cellspacing="0">


                                    <thead>
                                        <th>No.</th>
                                        <!-- <th>SN</th> -->
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Zone</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($admin_users as $key => $user): ?>
                                        <tr>
                                            <td></td>
                                            <!-- <td><!?php echo $key + 1; ?></td> -->
                                            <td>
                                                <?php echo $user['username']; ?>
                                            </td>
                                            <td>
                                                <?php echo $user['email']; ?>
                                            </td>
                                            <td>
                                                <?php echo $user['phone']; ?>
                                            </td>
                                            <td>
                                                <?php echo $user['age']; ?>
                                            </td>
                                            <td>
                                                <?php echo $user['gender']; ?>
                                            </td>
                                            <td>
                                                <?php echo $user['optionbox']; ?>
                                            </td>


                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                                <script>
                                    function searchTable() {
                                        var input, filter, found, table, tr, td, i, j;
                                        input = document.getElementById("myInput");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById("myTable");
                                        th = table.getElementsByTagName("th");
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td");
                                            for (j = 0; j < td.length; j++) {
                                                if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                                                    found = true;
                                                }
                                            }
                                            if (found) {
                                                tr[i].style.display = "";
                                                found = false;
                                            } else {
                                                tr[i].style.display = "none";
                                            }
                                        }
                                    }
                                </script>
                                <script>
                                    $(document).ready(function () {
                                        var table = $('#myTable').DataTable({
                                            "paging": false,
                                            "processing": true,
                                            "serverSide": true,
                                            'serverMethod': 'post',
                                            "ajax": "server.php",
                                            dom: 'Bfrtip',
                                            buttons: [
                                                { extend: 'copy', attr: { id: 'allan' } }, 'csv', 'excel', 'pdf'
                                            ]
                                        });

                                    });
                                </script>
                                <!--script>
$("#myInput").change(function () {
    

    
var addMSB = function () {
    var i = 0
    $('table tr').each(function(index) {
        $(this).find('td:nth-child(1)').html(index+1);
    });
};

addMSB();
});
</script-->

                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create a User</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="dashboard.php" method="post">

                        <div class="form-row">
                            <div class="col form-group">
                                <label>Your Full Name </label>
                                <input type="text" name="username" value="<?php echo $username; ?>" class="form-control"
                                    placeholder="" required>
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>Phone Number</label>
                                <input type="text" title="invalid phone number" pattern="[1-9]{1}[0-9]{9}" name="phone"
                                    value="<?php echo $phone; ?>" class="form-control phone" placeholder=" " required>
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control"
                                placeholder="">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="MALE" required>
                                <span class="form-check-label"> Male </span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="FEMALE" required>
                                <span class="form-check-label"> Female</span>
                            </label>
                        </div> <!-- form-group end.// -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Your Age</label>
                                <input type="text" name="age" value="<?php echo $age; ?>" class="form-control" required>
                            </div> <!-- form-group end.// -->
                            <div class="form-group col-md-6">
                                <label>Zone</label>
                                <select id="inputState" name="optionbox" class="form-control" required>
                                    <option value="" disabled selected> Choose...</option>
                                    <option value="koyilandi">Koyilandi</option>
                                    <option value="balussery">Balussery</option>
                                    <option value="kuttiyadi">Kuttiyadi</option>
                                    <option value="vadakara">Vadakara</option>
                                    <option value="payyoli">Payyoli</option>
                                    <option value="nadapuram">Nadapuram</option>
                                    <option value="Mepayyur">Mepayyur</option>
                                    <option value="poonor">Poonor</option>
                                    <option value="perambra">Perambra</option>
                                </select>
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row.// --><br>

                        <div class="form-group">
                            <button type="submit" name="register-btn" class="btn btn-primary btn-block"> Register
                            </button>
                        </div> <!-- form-group// -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Users Details</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total users registered</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php 

                                            include_once(ROOT_PATH . "/app/database/connect.php");

                                            $query = "SELECT id FROM users ORDER BY id";
                                            $query_run = mysqli_query($conn, $query);
                                            $row = mysqli_num_rows($query_run);
                                            
                                            echo '<h5> '.$row.'</h5>';
                                            ?>



                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#gfg").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#geeks tr").filter(function () {
                        $(this).toggle($(this).text()
                            .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#userdata').DataTable();
            });
        </script>

        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <!-- Bootstrap core JavaScript-->
        <script src="../../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->

        <style>
            body {
                counter-reset: Count-Value;
            }

            table {
                border-collapse: separate;
            }

            tr td:first-child:before {
                counter-increment: Count-Value;
                content: counter(Count-Value);
        </style>
</body>

</html>