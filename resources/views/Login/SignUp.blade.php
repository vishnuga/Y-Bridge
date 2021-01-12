
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Y-Bridge |                          Register 
                                              </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://192.248.56.20/match-module/asset/admin-tem/css/bootstrap.min.css">
    <!-- Font Awesome
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    Theme style -->
    <link rel="stylesheet" href="http://192.248.56.20/match-module/asset/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://192.248.56.20/match-module/asset/css/blue.css">
    <link rel="stylesheet" href="http://192.248.56.20/match-module/asset/jquery-ui/jqunery-ui.css">

     <!-- Site Icons -->
     <link rel="shortcut icon" href="images/uoj.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/uicon.png">

    
  </head>
  <body class="hold-transition register-page" style="background-image: linear-gradient(#00CED1,#FFFF66);">
  <style>
    .has-feedback .form-control-feedback{
      top:0;
    }
  </style>

      <div class="register-bo x" style="margin:5% auto"> 
    <div class="col-xs-4">
    </div>
    <div class="col-md-4">
    <div class="login-logo">
        <a href="" style="color: #FFFFFF;"><b>Registration Form</b> </a>
     </div><!-- /.login-logo -->
      <div class="register-box-body">

        <p class="login-box-msg">Register a new membership</p>

        <form method="POST" action="Login/waitingforacceptance">
            <input type="hidden" name="_token" value="XWYWaqt1fKeevb6XSuHhqIvBRThLEw14ykIUnyL4">
                        <div class="form-group has-feedback">
            <input type="hidden" name="user_type_id"value="1010">
            </div>
                <div class="form-group has-feedback">
                    <select class="form-control" id="SelectType" name="type"><option value="Lecturer">Lecturer</option><option value="Student">Student</option><option value="Industry">Industry</option></select>
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                <select class="form-control" name="level" id="level">
                    <option value="error">please select...</option>
                    <option value="1G">Level 1G</option>
                    <option value="1S">Level 1S</option>
                    <option value="2G">Level 2G</option>
                    <option value="2S">Level 2S</option>
                    <option value="3G">Level 3G</option>
                    <option value="3S">Level 3S</option>
                    <option value="3M">Level 3M</option>
                    <option value="4M">Level 4M</option>
                    <option value="4S">Level 4S</option>
                </select>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="name" class="form-control" placeholder ="First Name" value="" required>
                    <span class="fa fa-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="text" name="last_name" class="form-control"  placeholder ="Last Name" value=""  required>
                    <span class="fa fa-user form-control-feedback"></span>
                </div>


                                
                <div class="form-group has-feedback">
                    <input type="email" name="email" value="" class="form-control" placeholder ="Email"  required>
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder ="Password"  required>
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" name="password_confirmation" class="form-control" placeholder ="Confirm Password"  required>
                    <span class="fa fa-lock form-control-feedback"></span>

                </div>
                <div class="row">
                    <div class="col-xs-8">Already have account? <a href="lgn"> Login</a>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                </div>
        </form>
  </div><!-- /.form-box -->
  </div>
    </div><!-- /.register-box -->

   

      
<!-- jQuery 2.1.4 -->
    <script src="http://192.248.56.20/match-module/asset/js/jQuery-2.1.4.min.js"></script>
    <script src="http://192.248.56.20/match-module/asset/jquery-ui/jquery-ui.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="http://192.248.56.20/match-module/asset/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="http://192.248.56.20/match-module/asset/js/icheck.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
         $('#level').hide();
        $(document).on('change','#SelectType',function(){
            var value=$(this).val();
            if (value=='Student') {
                $('#level').show('slow');
            }else{
                $('#level').hide();
            }
        });
    });
</script>
    <script>
      $(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        }); 
        
        $( "#datepicker" ).datepicker();

         setTimeout(function(){
         $("#myMessage").fadeOut(1000);}, 4000);
         

        $('.formshow').hide();
        $('#1').show('slow');
        $('#selectField').change(function () {
            $('.formshow').hide('slow');
            $('#'+$(this).val()).show('slow');
        });
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });

            



      });
    </script>
  </body>
  </html>