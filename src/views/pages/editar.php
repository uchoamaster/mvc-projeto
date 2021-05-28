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
              <form role="form" method="POST" action="<?=$base;?>/novacidade">
                <div class="card-body">
               
                  <div class="form-group">
                    <label for="Codigo_Cidade">Código da Cidade</label>
                    <input type="text" class="form-control" name="Codigo_Cidade" id="Codigo_Cidade" placeholder="Codigo da Cidade" required>
                  </div>
                  <div class="form-group">
                    <label for="Codigo_Pais">Código do País</label>
                    <input type="text" class="form-control" name="Codigo_Pais" id="Codigo_Pais" placeholder="Codigo do País" required>
                  </div>
                  <div class="form-group">
                    <label for="UF">UF</label>
                    <input type="text" class="form-control" name="UF" id="UF" placeholder="UF" required>
                  </div>
                  <div class="form-group">
                    <label for="Nome">Nome</label>
                    <input type="text" class="form-control" name="Nome" id="Nome" placeholder="Nome" required>
                  </div>
                  <div class="form-group">
                    <label for="Situacao">Situação</label>
                    <input type="text" class="form-control" name="Situacao" id="Situacao" placeholder="Situacão" required>
                  </div>
                  
            
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->