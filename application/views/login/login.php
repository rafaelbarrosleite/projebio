<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title>Angle - Bootstrap Admin Template</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/@fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/@fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/@fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/@fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center ">
               <a href="#">
                  <img class="block-center rounded" src="<?php echo base_url();?>content/img/logo.png" alt="Image">
               </a>
            </div>
            <div class="card-body">
            <?php echo form_open(); ?>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="login" name="login" type="text" placeholder="Informe o login" autocomplete="off" required>
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-user"></em>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="senha" name="senha" type="password" placeholder="Senha" required>
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-lock"></em>
                           </span>
                        </div>
                     </div>
                  </div>
                  <button class="btn btn-block btn-primary mt-3" type="submit">Login</button>
            <?php form_close(); ?>
            </div>
         </div>
      </div>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="<?php echo base_url();?>content/templateAngle/vendor/modernizr/modernizr.custom.js"></script>
   <!-- JQUERY-->
   <script src="<?php echo base_url();?>content/templateAngle/vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="<?php echo base_url();?>content/templateAngle/vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="<?php echo base_url();?>content/templateAngle/vendor/js-storage/js.storage.js"></script>
   <!-- PARSLEY-->
   <script src="<?php echo base_url();?>content/templateAngle/vendor/parsleyjs/dist/parsley.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?php echo base_url();?>content/templateAngle/js/app.js"></script>
</body>

</html>