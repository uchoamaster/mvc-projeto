<?php $render('header-login'); ?>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a  class="h1"><b style="color:red;">$</b><span style="color: gray">IMPLES</span><sup style="color: blue; font-size:1rem; font-weight: bold; margin-top:-40px;">ERP</sup></a><br>
      <a  class="h6"><b>12.02.00</b></a><br>
    </div>
    <div class="card-header text-center">
    <a  class="h6"><b>45.234.2334.2334.0001-00</b></a><br>
      <a  class="h6"><b>TECH STORE</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">coloque seu usuário e senha</p>
    
      <?php if(!empty($flash)):?>
        <div class="flash">  <?php echo $flash; ?></div>
        <?php endif;?>
        
      <form action="<?=$base;?>/login" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="senha" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
   
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="entrar" class="btn btn-primary btn-block">Acessar</button>

          </div>
          <!-- /.col -->
        </div>
      </form>
    
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=$base;?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$base;?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$base;?>/dist/js/adminlte.min.js"></script>
</body>
</html>