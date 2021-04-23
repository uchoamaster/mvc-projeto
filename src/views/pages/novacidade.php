<?php $render('header-principal'); ?>
<?php $render('navbar-header-principal'); ?>
<?php $render('navbar-sidebar-principal'); ?>

<div class="content-wrapper pt-4 ">
<section class="content">
      <div class="container-fluid">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>UF</th>
                      <th>Nome</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($cidades as $cidade): ?>
                    <tr>
                      <td><?=$cidade['codigo'];?></td>
                      <td><?=$cidade['uf'];?></td>
                      <td><?=$cidade['nome'];?></td>
                      <td>
                      <a href="<?=$base;?>/novacidade/editar/<?=$cidade['codigo'];?>"><i class="fas fa-edit"></i> </a>
                      </td>
               
                      <td>
                      <a href="<?=$base;?>/novacidade/excluir/<?=$cidade['codigo'];?>" onclick="return confirm ('Tem certeza que deseja excluir?')"><i class="fas fa-trash"></i> </a>
                      </td>
                      <!-- <td class="editar"><i class="fas fa-edit"></i></td>
                      <td class="excluir"><i class="fas fa-trash"></i></td> -->
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>


           
                </div>
                </div>

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