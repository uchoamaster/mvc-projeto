<?php $render('header-principal'); ?>
<?php $render('navbar-header-principal'); ?>
<?php $render('navbar-sidebar-principal'); ?>

<div class="content-wrapper pt-4 ">
<section class="content">
      <div class="container-fluid">
<div class="row">
          <div class="col-12">
            <!-- <div class="card"> -->
              <!-- <div class="card-header">
                <h3 class="card-title">Cadastro de Cidades</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
      
                      <th>Uf</th>
                      <th>Nome</th>
                      <th>Situação</th>
                  
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($cidades as $cidade): ?>
                    <tr> 
                      <td><?=$cidade['UF'];?></td>
                      <td><?=$cidade['Nome'];?></td>
                      <td><?=$cidade['Situacao'];?></td>
                    
                      <td>
                      <a href="<?=$base;?>/novacidade/editar/<?=$cidade['Codigo_Cidade'];?>"><i class="fas fa-edit"></i> </a>
                      </td>
               
                      <td>
                      <a href="<?=$base;?>/novacidade/excluir/<?=$cidade['Codigo_Cidade'];?>" onclick="return confirm ('Tem certeza que deseja excluir?')"><i class="fas fa-trash"></i> </a>
                      </td>
                     
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>


           
                </div>
                </div>

              </div> -->
              <!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Cidades</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Uf</th>
                    <th>Nome</th>
                    <th>Situação</th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($cidades as $cidade): ?>
                      <td><?=$cidade['UF'];?></td>
                      <td><?=$cidade['Nome'];?></td>
                      <td><?=$cidade['Situacao'];?></td>
                  
                      <td>
                      <a href="<?=$base;?>/novacidade/editar/<?=$cidade['Codigo_Cidade'];?>"><i class="fas fa-edit"></i> </a>
                      </td>
               
                      <td>
                      <a href="<?=$base;?>/novacidade/excluir/<?=$cidade['Codigo_Cidade'];?>" onclick="return confirm ('Tem certeza que deseja excluir?')"><i class="fas fa-trash"></i> </a>
                      </td>
                     
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
    
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div>


</section>
</div>
<?php $render('footer-principal'); ?>
