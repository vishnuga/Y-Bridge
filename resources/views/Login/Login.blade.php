
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Y-Bridge |  
                          Login
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

  <style type="text/css">
  
</style>

    <div class="login-box">
      <div class="login-logo">
        <a href="" style="color: #FFFFFF;"><b>Login</b> </a>

      </div><!-- /.login-logo -->
      <div class="login-box-body" style="background: rgba(25, 255, 255, 0.52) none repeat scroll 0% 0%; color: #FFF;">
        <div class="pull-right close">
          <a href="home"style="color: black" title="close">X</a>
          
        </div>
      <p id="msgbox" class="login-box-msg">
        <img style="display:none" id="loader" class="pull-right" src="http://192.248.56.20/match-module/images/loader.gif"> 
        <span id="msg" style="color: black" >Sign in to start your session</span>
      </p>

      <form method="POST" id="login_form" action="http://192.248.56.20/match-module/auth/login">
        <input type="hidden" name="_token" value="XWYWaqt1fKeevb6XSuHhqIvBRThLEw14ykIUnyL4">
              <div class="form-group">
          <input type="email" name="email" value="" class="form-control" placeholder ="Email">
        </div>

        <div class="form-group">
          <input type="password" name="password" id="password" placeholder="Password" class="form-control">
        </div>

        <div class="row">
          <div class="col-xs-8">
            <div class="chekckbox icheck">
              <label><input type="checkbox" name="remember"> Remember Me</label>
            </div>
          </div>
        

        <div class="col-xs-4">
            <button type="submit" id="sign_in" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        </div>
        </form>

      <a href="fp">I forgot my password</a><br>
        <a href="sg" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->


      
<!-- jQuery 2.1.4 -->
    <script src="http://192.248.56.20/match-module/asset/js/jQuery-2.1.4.min.js"></script>
    <script src="http://192.248.56.20/match-module/asset/jquery-ui/jquery-ui.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="http://192.248.56.20/match-module/asset/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="http://192.248.56.20/match-module/asset/js/icheck.min.js"></script>
    
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