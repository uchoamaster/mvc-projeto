<?php $render('header-principal'); ?>
<?php $render('navbar-header-principal'); ?>
<?php $render('navbar-sidebar-principal'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pt-4 ">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Exemplo MVC</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?=$base;?>/novacidade">
                <div class="card-body">
                  <div class="form-group">
                    <label for="codigo">Código</label>
                    <input type="number" class="form-control" id="codigo" placeholder="Seu Código">
                  </div>
                  <div class="form-group">
                    <label for="uf">UF</label>
                    <input type="text" class="form-control" id="uf" placeholder="UF">
                  </div>
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="nome">
                  </div>
                  
            
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

<?php $render('footer-principal'); ?>
