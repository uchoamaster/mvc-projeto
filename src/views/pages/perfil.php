<?php $render('header-principal'); ?>
<?php $render('navbar-header-principal'); ?>
<?php $render('navbar-sidebar-principal'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1>Cadastros</h1> -->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Perfil</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-md-9">
                        <div class="card card-warning card-outline">

                            <!-- /.card-header -->
                            <div class="card-body p-0">

                                <div class="table-responsive mailbox-messages">


                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h3 class="card-title">PERFIS DE MENU DO USUÁRIO: (NOME DO USUÁRIO)</h3>
                                            <!-- botões topo de salvamento de arquivos -->

                                            <div class="card-tools">

                                                <button type="button" class="btn btn-success btn-sm mr-1" data-toggle="modal" data-target="#modal-lg" data-toggle="tooltip" title="Adicionar Novo">
                                                        <i class="fas fa-plus"></i>
                                                    </button>

                                                <button type="button" id="botaosalvar" class="btn btn-dark btn-sm mr-1" data-toggle="tooltip" title="Salvar">
                                                        <i class="fas fa-arrow-circle-up"></i>
                                                    </button>

                                                <button type="button" class="btn btn-warning btn-sm mr-1" data-toggle="modal" data-target="#modal-lg2" data-toggle="tooltip" title="Editar">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                <button type="button" class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#modal-lg2" data-toggle="tooltip" title="Editar">
                                                  <i class="fas fa-window-close"></i>
                                                    </button>
                                            </div>
                                            <!-- fim botões de salvamento de arquivos -->

                                            <!-- inicio modal large -->
                                            <div class="modal fade" id="modal-lg">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Adicionar novo </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <!-- div campo -->
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <!-- select -->
                                                                    <div class="form-group">
                                                                        <label>Estado:</label>
                                                                        <select class="custom-select">
                                                                                <option>AC</option>
                                                                                <option>AL</option>
                                                                                <option>AM</option>
                                                                                <option>AP</option>
                                                                                <option>BA</option>
                                                                                <option>CE</option>
                                                                                <option>DF</option>
                                                                                <option>ES</option>
                                                                                <option>EX</option>
                                                                                <option>GO</option>
                                                                                <option>MA</option>
                                                                                <option>MG</option>
                                                                                <option>MS</option>
                                                                                <option>MT</option>
                                                                                <option>PA</option>
                                                                                <option>PB</option>
                                                                                <option>PE</option>
                                                                                <option>PI</option>
                                                                                <option>RJ</option>
                                                                                <option>RN</option>
                                                                                <option>RO</option>
                                                                                <option>RR</option>
                                                                                <option>RS</option>
                                                                                <option>SC</option>
                                                                                <option>SE</option>
                                                                                <option>SP</option>
                                                                                <option>TO</option>
                                                                              </select>
                                                                    </div>

                                                                </div>

                                                                <div class="col-sm-12">

                                                                    <div class="form-group">
                                                                        <label>Código da cidade no IBGE:</label>
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                    <!-- div valor a comparar fim -->
                                                                </div>

                                                                <!-- DIV ACCORDION -->
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12">


                                                                            <!-- /.card-header -->

                                                                            <div id="accordion">
                                                                                <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                                                                                <div class="card card-primary">
                                                                                    <div class="card-header">
                                                                                        <h4 class="card-title">
                                                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                                                            Clique aqui - Dúvidas sobre Código do IBGE
                                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div id="collapseOne" class="panel-collapse collapse in">
                                                                                        <div class="card-body">
                                                                                            <p style="text-align: justify;">
                                                                                                A Tabela de Códigos de Municípios, elaborada pelo IBGE, apresenta a lista dos municípios brasileiros associados a um código composto de 7 dígitos, sendo os dois primeiros referentes ao código do estado.Esta tabela, que reflete a organização do território,
                                                                                                é utilizada não apenas pelo IBGE para o processamento das informações de suas pesquisas e cadastros, como também por outras instituições( a exemplo da Nota
                                                                                                Fiscal Eletrônica - NF-e).É atualizada sistematicamente de forma a incluir as alterações decorrentes do desdobramento de municípios e, consequentemente, da
                                                                                                criação de novos municípios, mudanças de nome dos municípios, como também de processor de fusão que resultam na extinção ou modificação de nome de algum município.
                                                                                                Para visualizar a tabela atualizada, acesse:
                                                                                                <a href="https://www.ibge.gov.br/" target="_blank">Tabela de municípios do IBGE</a>.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                            <!-- /.card-body -->

                                                                            <!-- /.card -->
                                                                        </div>
                                                                        <!-- /.card -->
                                                                    </div>

                                                                </div>
                                                                <!-- DIV ACCORDION -->
                                                                <!-- div inicio nome -->
                                                                <div class="col-sm-12">

                                                                    <div class="form-group">
                                                                        <label>Nome:</label>
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                    <!-- div nome fim -->
                                                                </div>
                                                                <!-- div cadastro de país -->
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <!-- select -->
                                                                    <div class="form-group">
                                                                        <label>País:</label>
                                                                        <select class="custom-select">
                                                                              <option>Brasil</option>
                                                                              <option>EUA</option>
                                                                              <option>Cuba</option>

                                                                            </select>
                                                                    </div>

                                                                </div>
                                                                <!-- fim div cadastro de país -->
                                                                <!-- inciio gentilico -->
                                                                <div class="col-sm-12">

                                                                    <div class="form-group">
                                                                        <label>Gentílico:</label>
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                    <!-- div nome fim -->
                                                                </div>
                                                                <!-- fim gentilico -->
                                                                <!-- div inicio status -->
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Status:</label>
                                                                        <select class="custom-select">
                                                                                      <option>Ativo</option>
                                                                                      <option>Inativo</option>
                                                                                  </select>
                                                                    </div>
                                                                </div>

                                                                <!-- div fim status -->
                                                                <!-- botões de fechar, salvar e voltar -->
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                                    <button type="button" class="btn btn-primary">Salvar</button>
                                                                    <button type="button" class="btn btn-warning">Voltar</button>
                                                                </div>
                                                                <!-- fim botoes de fechar, salvar e -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                            <!-- fim modal large -->

                                            <!-- inicio modal large 2-->
                                            <div class="modal fade" id="modal-lg2">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Editar </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                              <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <!-- div campo -->
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <!-- select -->
                                                                    <div class="form-group">
                                                                        <label>Estado:</label>
                                                                        <select class="custom-select" disabled>
                                                                                                          <option>AC</option>
                                                                                                        </select>
                                                                    </div>

                                                                </div>

                                                                <div class="col-sm-12 col-md-12 col-lg-12">

                                                                    <class class="form-group">
                                                                        <label>Código da cidade no IBGE:</label>
                                                                        <input class="form-control" type="text" placeholder="1200013" disabled>

                                                                </div>


                                                                <!-- div inicio nome -->
                                                                <div class="col-sm-12 col-md-12 col-lg-12">

                                                                    <div class="form-group">
                                                                        <label>Nome:</label>
                                                                        <input class="form-control" type="text" placeholder="Acrelândia" value="Acrelândia">
                                                                    </div>
                                                                    <!-- div nome fim -->
                                                                </div>
                                                                <!-- div cadastro de país -->
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <!-- select -->
                                                                    <div class="form-group">
                                                                        <label>País:</label>
                                                                        <select class="custom-select">
                                                                                                        <option>Brasil</option>
                                                                                                        <option>EUA</option>
                                                                                                        <option>Cuba</option>

                                                                                                      </select>
                                                                    </div>

                                                                </div>
                                                                <!-- fim div cadastro de país -->
                                                                <!-- inciio gentilico -->
                                                                <div class="col-sm-12">

                                                                    <div class="form-group">
                                                                        <label>Gentílico:</label>
                                                                        <input class="form-control" type="text" placeholder="Acrelandense" value="Acrelandense">
                                                                    </div>
                                                                    <!-- div nome fim -->
                                                                </div>
                                                                <!-- fim gentilico -->
                                                                <!-- div inicio status -->
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Status:</label>
                                                                        <select class="custom-select">
                                                                                                                <option>Ativo</option>
                                                                                                                <option>Inativo</option>
                                                                                                            </select>
                                                                    </div>
                                                                </div>

                                                                <!-- div fim status -->
                                                                <!-- botões de fechar, salvar e voltar -->
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                                    <button type="button" class="btn btn-primary">Salvar</button>
                                                                    <button type="button" class="btn btn-warning">Voltar</button>
                                                                </div>
                                                                <!-- fim botoes de fechar, salvar e -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                            <!-- fim modal large2 -->

                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">

                                            <div class="col-sm-6 col-md-10 col-lg-12">
                                                <div class="card ">

                                                    <div class="col-sm-12 col-md-12 col-lg-12">

                                                        <div class="form-group">
                                                            <label>Nome:</label>
                                                            <input class="form-control" type="text" placeholder="GERAL" value="GERAL">
                                                        </div>
                                                        <!-- div nome fim -->
                                                    </div>
                                                    <!-- div cadastro de país -->
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <!-- select -->
                                                        <div class="form-group">
                                                            <label>Atividade Inicial:</label>
                                                            <select class="custom-select">
                                                                                        <option>Sem Atividade Inicial</option>
                                                                                        <option>Aceite de Duplicatas</option>
                                                                                        <option>Acerto de Estoque</option>
                                                                                        <option>Adiantamentos</option>
                                                                                        <option>Agrupamento de Produtos para Embarque</option>

                                                                                      </select>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- /.card -->
                                                <div class="card card-default">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Botões de acesso rápido:</h3>
                                                        <br>

                                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                            <div class="card-body">

                                                                <button type="button" class="btn btn-app" active>
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </button>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-edit"></i> Editar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-play"></i> Iniciar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-pause"></i> Pausar
                                                                </a>
                                                                <a class="btn btn-app">
                                                                    <i class="fas fa-save"></i> Salvar
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-bullhorn"></i> Notificações
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-barcode"></i> Produtos
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-users"></i> Usuários
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-inbox"></i> Ordens
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-envelope"></i> E-mail
                                                                </a>
                                                                <a class="btn btn-app">

                                                                    <i class="fas fa-heart"></i> Resoluções
                                                                </a>
                                                            </div>
                                                            <!-- /.card-body -->
                                                        </div>
                                                        <!-- /.card -->
                                                    </div>

                                                </div>
                                                <!-- Main content -->
                                                <section class="content">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">jsGrid</h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div id="jsGrid1"></div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </section>
                                                <!-- /.content -->
                                            </div>
                                        </div>

                                    </div>


                                    <!-- /.table -->
                                </div>
                                <!-- /.mail-box-messages -->
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->




                    <div class="col-md-3">


                        <div class="card card-success card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Assistente</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>

                                </div>


                            </div>
                            <div class="card-body p-0" style="display: block;">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item active">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-play"></i> Perfil "GERAL"
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-play"></i> Definir Perfil Atual como Padrão
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Atalhos</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>

                                </div>
                                <div class="card-tools">

                                </div>
                            </div>
                            <div class="card-body p-0" style="display: block;">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-play "></i> Cadastro de Cidades
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-play "></i> Cadastro de Países
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Trocar Empresa</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>

                                </div>
                                <div class="card-tools">

                                </div>
                            </div>
                            <div class="card-body p-0" style="display: block;">
                                <ul class="nav nav-pills flex-column">
                                    <div class="form-group p-4">
                                        <label>Empresa:</label>
                                        <select class="custom-select">
                            <option>OFICINA DO CELULAR(CENTRO)</option>
                            <option>OFICINA DO CELULAR (G1)</option>
                            <option>OFICINA DO CELULAR (G2)</option>
                            <option>OFICINA DO CELULAR (M1)</option>
                            <option>OFICINA DO CELULAR (M2)</option>

                          </select>
                                    </div>

                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    </div>

    <!-- Main content -->

    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="https://unpkg.com/draggabilly@2.2.0/dist/draggabilly.pkgd.min.js"></script>
    <script src="<?=$base;?>/dist/js/chrome-tabs.js"></script>
    <script>
        var el = document.querySelector('.chrome-tabs')
        var chromeTabs = new ChromeTabs()

        chromeTabs.init(el)

        el.addEventListener('activeTabChange', ({
            detail
        }) => console.log('Active tab changed', detail.tabEl))
        el.addEventListener('tabAdd', ({
            detail
        }) => console.log('Tab added', detail.tabEl))
        el.addEventListener('tabRemove', ({
            detail
        }) => console.log('Tab removed', detail.tabEl))

        document.querySelector('button[data-add-tab]').addEventListener('click', _ => {
            chromeTabs.addTab({
                title: 'Nova Aba',
                favicon: false
            })
        })

        document.querySelector('button[data-add-background-tab]').addEventListener('click', _ => {
            chromeTabs.addTab({
                title: 'Nova Aba',
                favicon: false
            }, {
                background: true
            })
        })

        document.querySelector('button[data-remove-tab]').addEventListener('click', _ => {
            chromeTabs.removeTab(chromeTabs.activeTabEl)
        })

        document.querySelector('button[data-theme-toggle]').addEventListener('click', _ => {
            if (el.classList.contains('chrome-tabs-dark-theme')) {
                document.documentElement.classList.remove('dark-theme')
                el.classList.remove('chrome-tabs-dark-theme')
            } else {
                document.documentElement.classList.add('dark-theme')
                el.classList.add('chrome-tabs-dark-theme')
            }
        })

        window.addEventListener('keydown', (event) => {
            if (event.ctrlKey && event.key === 't') {
                chromeTabs.addTab({
                    title: 'New Tab',
                    favicon: false
                })
            }
        })
    </script>

    <!-- jQuery -->
    <script src="<?=$base;?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=$base;?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?=$base;?>/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?=$base;?>/plugins/toastr/toastr.min.js"></script>
    <!-- Select2 -->
    <script src="<?=$base;?>/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="<?=$base;?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="<?=$base;?>/plugins/moment/moment.min.js"></script>
    <script src="<?=$base;?>/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?=$base;?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?=$base;?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?=$base;?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?=$base;?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="<?=$base;?>/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="<?=$base;?>/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=$base;?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$base;?>/dist/js/demo.js"></script>
    <!-- jsGrid -->
    <script src="<?=$base;?>/plugins/jsgrid/demos/db.js"></script>
    <script src="<?=$base;?>/plugins/jsgrid/jsgrid.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#jsGrid1").jsGrid({
                height: "100%",
                width: "100%",

                sorting: true,
                paging: true,

                data: db.clients,

                fields: [{
                    name: "Name",
                    type: "text",
                    width: 150
                }, {
                    name: "Age",
                    type: "number",
                    width: 50
                }, {
                    name: "Address",
                    type: "text",
                    width: 200
                }, {
                    name: "Country",
                    type: "select",
                    items: db.countries,
                    valueField: "Id",
                    textField: "Name"
                }, {
                    name: "Married",
                    type: "checkbox",
                    title: "Is Married"
                }]
            });
        });
    </script>
    <script>
        $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })

                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', {
                        'placeholder': 'dd/mm/yyyy'
                    })
                    //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', {
                        'placeholder': 'mm/dd/yyyy'
                    })
                    //Money Euro
                $('[data-mask]').inputmask()

                //Date range picker
                $('#reservationdate').datetimepicker({
                    format: 'L'
                });
                //Date range picker
                $('#reservation').daterangepicker()
                    //Date range picker with time picker
                $('#reservationtime').daterangepicker({
                        timePicker: true,
                        timePickerIncrement: 30,
                        locale: {
                            format: 'MM/DD/YYYY hh:mm A'
                        }
                    })
                    //Date range as a button
                $('#daterange-btn').daterangepicker({
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function(start, end) {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                    }
                )

                //Timepicker
                $('#timepicker').datetimepicker({
                    format: 'LT'
                })

                //Bootstrap Duallistbox
                $('.duallistbox').bootstrapDualListbox()

                //Colorpicker
                $('.my-colorpicker1').colorpicker()
                    //color picker with addon
                $('.my-colorpicker2').colorpicker()

                $('.my-colorpicker2').on('colorpickerChange', function(event) {
                    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                })

                $("input[data-bootstrap-switch]").each(function() {
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                })

            })
            // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
                // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
                myDropzone.removeAllFiles(true)
            }
            // DropzoneJS Demo Code End
    </script>
    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    type: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultInfo').click(function() {
                Toast.fire({
                    type: 'info',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultError').click(function() {
                Toast.fire({
                    type: 'error',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultWarning').click(function() {
                Toast.fire({
                    type: 'warning',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultQuestion').click(function() {
                Toast.fire({
                    type: 'question',
                    title: 'teste'
                })
            });

            $('.toastrDefaultSuccess').click(function() {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultInfo').click(function() {
                toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultError').click(function() {
                toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultWarning').click(function() {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

            $('.toastsDefaultDefault').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultTopLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'topLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomRight').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomRight',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultAutohide').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    autohide: true,
                    delay: 750,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultNotFixed').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    fixed: false,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultFull').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    icon: 'fas fa-envelope fa-lg',
                })
            });
            $('.toastsDefaultFullImage').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    image: '../../dist/img/user3-128x128.jpg',
                    imageAlt: 'User Picture',
                })
            });
            $('.toastsDefaultSuccess').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultInfo').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-info',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultWarning').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultDanger').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultMaroon').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-maroon',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        });
    </script>
</body>

</html>
