<?php
/*

include 'config.php';

session_start();

if(!issset($_SESSION['username'])){
    header('location:login.php');
}
*/

?>


<html>
    <head>
        <!--Webpage title on browser -->
        <title>Klinik Haiwan Alby</title>

        <!--CSS Bootstrap 5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--JS Bootstrap 5-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <?php include 'header_dashboard.php';?>

        <!--parking for designation -->
        <!-- Welcome, --> <?php //echo $_POST["name"]; ?>

        <div>
            <div class="d-flex flex-row">

                <!-- LEFT SIDEBAR SETTINGS -->
                <div class="col-md-3">
                    <div class="card card1 p-3">
                    
                        <!-- navbar dashboard --> 
                        <a href="dashboard_admin.php" class="btn btn-primary">Dashboard</a><br>
                        <a href="appointment_admin.php" class="btn btn-primary">Buat Temu Janji</a><br>
                        <a href="appointment_status_admin.php" class="btn btn-primary">Status Temu Janji</a><br>
                        <hr class="hline">
                        <a href="customer_list.php" class="btn btn-primary">Senarai Pelanggan</a><br>
                        <a href="staff_list.php" class="btn btn-primary">Senarai Staf</a><br>
                        <a href="treatment_list.php" class="btn btn-primary">Senarai Ubat Haiwan</a><br>
                    </div>
                </div>

                <!-- MAIN CONTENT SETTINGS -->

                
                <div class="col-md-9">
                    <!--header kecil di bawah header utama -->
                    <div class="card card2 p-3">
                        <div class="hello d-flex justify-content-end align-items-center mt-3">Selamat Sejahtera, Pentadbir</div>
                    </div>

                    <div class="container mt-3">

                        <h2>Buat Temu Janji</h2>
                
                        <form action="">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="date" class="form-control" placeholder="Enter Date">
                                </div>
                                <div class="col-md-6">
                                    <input type="time" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="col-12">
                                    <select class="form-select">
                                        <option selected>Tujuan Temu Janji</option>
                                        <option value="tujuan_rawatan">Rawatan</option>
                                        <option value="tujuan_vaksin">Vaksinasi</option>
                                        <option value="tujuan_mandul">Pemandulan</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select class="form-select">
                                        <option selected>Pilih haiwan yang didaftarkan</option>
                                        <option value="1">Haiwan 1</option>
                                        <option value="2">Haiwan 2</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-5">                        
                                    <button type="submit" class="btn btn-primary float-end">Buat Temu Janji</button>
                                    <a href="dashboard.php" type="button" class="btn btn-outline-secondary float-end me-2">Batal</a>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>

                
            </div>
        </div>


    <?php include 'footer.php'; ?>

    </body>
</html>

<style>

    /* left sidebar settings */
    .card1 {
        background-color: #0a4275;
        border-radius: 0px;
    }

    /* header kecil di bawah header utama settings */
    .card2 {
        background-color: 646FD4;
        border-radius: 0px;
    }

    /* setting statistik */
    .cardchild {
        height: 150px;
        width: 350px;
        border: 0px;
        position: relative;
        border-radius: 20px;
        background-color: #9BA3EB;
    }

    /* setting tulisan untuk greeting user */
    .hello {
        font-size: 25px;
        color: white;
        font-family: Helvetica;
        font-weight: bold;
    }

    /* setting untuk column sebelah left sidebar (main content) */
    .col-md-9{
        padding: 10px 15px 10px 15px;
    }


</style>