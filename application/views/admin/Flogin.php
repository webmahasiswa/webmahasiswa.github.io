

<!DOCTYPE html>
<html>
<head>
    <title>Welvome</title>
    <style type="text/css">
h4 {
    font-size: 18px;
    color: black;
    margin-bottom: 20px;
    font-weight: bold;
}
    </style>
</head>
    <body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                
                <div class="card-body">
                    <h4>Information Sistem Pabrik Pembuatan Bus</h4>
                    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">   
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="username" name="username">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" name="password">
                        </div>                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url() ?>assets/assets_register_login/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url() ?>assets/assets_register_login/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets_register_login/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets_register_login/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ?>assets/assets_register_login/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->
