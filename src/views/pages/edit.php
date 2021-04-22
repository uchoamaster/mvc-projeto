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
                <h3 class="card-title">Edição de Exemplo MVC</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="<?=$base;?>/cidade/<?=$cidade['codigo'];?></editar>
                <div class="card-body">
               
                  <div class="form-group">
                    <label for="uf">UF</label>
                    <input type="text" class="form-control"  value="<?php echo $cidade['uf'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  value="<?php echo $cidade['nome'];?>" required>
                  </div>
                  
            
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="submit" class="btn btn-primary">Editar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

<?php $render('footer-principal'); ?>
