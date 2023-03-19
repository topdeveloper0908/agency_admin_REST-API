<?php  
session_start();
error_reporting(0);

$user = $_COOKIE['name'];
$authorization = $_COOKIE['authorization'];
$agency_id = $_COOKIE['agency_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <title>REDENES</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="my-loader-element"></div>
    <div id="my-loader-wrapper"></div>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include ('sidebar.php');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php include ('header.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <form action="">
                        <div class="d-flex align-items-baseline justify-content-between">
                            <!-- Page Heading -->
                            <h1 class="h3 mb-4 text-gray-800">Agency Settings</h1>
                            <div class="d-flex align-items-center">
                                <button type="button" onClick="saveEnable()" class="btn btn-success btn-icon-split my-1 mr-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </button>
                                <button id="save-btn" type="button" onClick="saveAgencySettingData()" class="btn btn-success btn-icon-split my-1 mr-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Save</span>
                                </button>
                                <button id="cancel-btn" onClick="cancelSave()" class="btn btn-danger btn-icon-split my-1 mr-2 d-none">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Cancel</span>
                                </button>
                            </div>
                        </div>
    
                        <!-- Content Row -->
                        <div class="row">
    
                            <div class="col-lg-6">
    
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Agency Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Agency Name</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-name" placeholder="Enter Agency Name...">
                                        </div>
                                        <div class="form-group">
                                            <label>Agency Abbreviation</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-abbreviation" placeholder="Enter Agency Abbreviation...">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Physical Address</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Street</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-street" placeholder="Enter Agency Street...">
                                        </div>
                                        <div class="form-group">
                                            <label>Unit</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-unit" placeholder="Enter Agency Unit...">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-city"
                                                placeholder="Enter Agency City...">
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-state" placeholder="Enter Agency State...">
                                        </div>
                                        <div class="form-group">
                                            <label>Agency Zip Code</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-zipcode" placeholder="Enter Agency Zip Code...">
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="col-lg-6">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Contact Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Agency Phone Number</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-phone"
                                                placeholder="Enter Phone Number...">
                                        </div>
                                        <div class="form-group">
                                            <label>Agency Email Address</label>
                                            <input type="email" class="form-control form-control-user"
                                                id="agency-email" placeholder="Enter Agency Email...">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Mailing Address</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Street</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-P-street"
                                                placeholder="Enter Street...">
                                        </div>
                                        <div class="form-group">
                                            <label>Unit</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-P-unit" placeholder="Enter Unit...">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-P-city" placeholder="Enter City...">
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-P-state"
                                                placeholder="Enter State...">
                                        </div>
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="agency-P-zipcode" placeholder="Enter Zip Code...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
        // To show the loader
        document.getElementById("my-loader-element").classList.add("loader");
        init_id = <?php echo $agency_id;?>;
        function getAgencySettingData(agency_id) {
            var agency_setting_info;
            $.ajax({
                type: "GET",
                url: "https://api.redenes.org/dev/v1/agency-settings/",
                data: {
                    agency_id: agency_id,
                    authorization: <?php echo $authorization;?>
                },
                success: function (res) {
                    agency_setting_info = res.agencies_settings[0];
                    console.log(agency_setting_info);
                    document.getElementById('agency-name').value = agency_setting_info.agency_information[0].agency_name;
                    document.getElementById('agency-abbreviation').value = agency_setting_info.agency_information[0].agency_abbreviation;

                    document.getElementById('agency-phone').value = agency_setting_info.contact_information[0].phone_number;
                    document.getElementById('agency-email').value = agency_setting_info.contact_information[0].email_address;

                    document.getElementById('agency-street').value = agency_setting_info. mailing_address[0].street;
                    document.getElementById('agency-unit').value = agency_setting_info. mailing_address[0].unit;
                    document.getElementById('agency-city').value = agency_setting_info. mailing_address[0].city;
                    document.getElementById('agency-state').value = agency_setting_info. mailing_address[0].state;
                    document.getElementById('agency-zipcode').value = agency_setting_info. mailing_address[0].zipcode;

                    document.getElementById('agency-P-street').value = agency_setting_info. physical_address[0].street;
                    document.getElementById('agency-P-unit').value = agency_setting_info. physical_address[0].unit;
                    document.getElementById('agency-P-city').value = agency_setting_info. physical_address[0].city;
                    document.getElementById('agency-P-state').value = agency_setting_info. physical_address[0].state;
                    document.getElementById('agency-P-zipcode').value = agency_setting_info. physical_address[0].zipcode;
                    // To hide the loader
                    document.getElementById("my-loader-element").classList.remove("loader");                
                    document.getElementById("my-loader-wrapper").classList.add("d-none");
                }
            })
        }
        getAgencySettingData(init_id);
        function saveAgencySettingData() {
            var formData = {
                authorization: <?php echo $authorization;?>,
                agency_id: init_id,
                agency_name: document.getElementById('agency-name').value,
                agency_abbreviation: document.getElementById('agency-abbreviation').value,
                phone_number: document.getElementById('agency-phone').value,
                email_address: document.getElementById('agency-email').value
                physical_street: document.getElementById('agency-street').value,
                physical_unit: document.getElementById('agency-unit').value,
                physical_city: document.getElementById('agency-city').value,
                physical_state: document.getElementById('agency-state').value,
                physical_zip_code: document.getElementById('agency-zipcode').value
                mailing_street: document.getElementById('agency-P-street').value,
                mailing_unit: document.getElementById('agency-P-unit').value,
                mailing_city: document.getElementById('agency-P-city').value,
                mailing_state: document.getElementById('agency-P-state').value,
                mailing_zip_code: document.getElementById('agency-P-zipcode').value
            };
            $.ajax({
                type: "POST",
                url: "https://api.redenes.org/dev/v1/agency-settings/",
                data: formData,
                dataType: "json",
                success: function (res) {
                    console.log(res);
                }
            })
        }
    </script>

</body>

</html>