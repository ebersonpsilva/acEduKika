<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dados de Academias</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Formulario de Cadastro<!-- <small>different form elements</small>--></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                            	<a class="collapse-link" id="formCadastro">
                            		<i class="fa fa-chevron-up"></i>
                            	</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                	<i class="fa fa-info"></i>
                               	</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    	Informações sobre a tela de cadastro
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="academias" data-parsley-validate class="form-horizontal form-label-left">
                        	<input type="hidden" name="ukey" id="ukey" value="27bbe372132b8cf5c69598b89d14b3103a91102c936a01d614404398f36d37a5"/>
                        	<input type="hidden" id="action" name="action"/>
                        	<input type="hidden" id="id" name="id"/>
                            <div class="x_content bs-example-popovers">
                                <div class="alert alert-success alert-dismissible fade in" role="alert" id="Success" style="display: none;">
                                    <a href="#" class="close">&times;</a>
                                    <strong>SUCESSO!</strong>
                                    <div id="rsSucess"></div>
                                </div>
                                <div class="alert alert-info alert-dismissible fade in" role="alert" id="Info" style="display: none;">
                                    <a href="#" class="close">&times;</a>
                                    <strong>ATENÇÃO!</strong><br/>
                                    <div id="rsInfo"></div>
                                </div>
                                <div class="alert alert-warning alert-dismissible fade in" role="alert" id="Warning" style="display: none;">
                                    <a href="#" class="close">&times;</a>
                                    <strong>FALHA!</strong><br/>
                                    <div id="rsWarning"></div>
                                </div>
                                <div class="alert alert-danger alert-dismissible fade in" role="alert" id="Alert" style="display: none;">
                                    <a href="#" class="close">&times;</a>
                                    <strong>ALERTA!</strong><br/>
                                    <div id="rsAlert"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">CNPJ <span class="required">*</span></label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <input id="cnpj" class="form-control col-md-7 col-xs-12" required="required"  type="text" name="cnpj" maxlength="18">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Razão Social <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="razaoSocial" required="required" class="form-control col-md-7 col-xs-12" name="razaoSocial">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="responsavel">Responsavel<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="responsavel" name="responsavel" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cep" class="control-label col-md-3 col-sm-3 col-xs-12">CEP</label>
                                <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                                    <input id="cep" class="form-control" type="text" name="cep">
                                    <input id="idCep" type="hidden" name="idCep">
                                </div>
                                <label for="bairro" class="control-label col-md-1 col-sm-1 col-xs-12">Bairro</label>
                                <div class="col-md-3 col-sm-4 col-xs-12 form-group has-feedback">
                                    <input id="bairro" class="form-control" type="text" name="bairro">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="endereco">Endereco</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="endereco" name="endereco" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cidade">Cidade</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="cidade" name="cidade" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="numero" class="control-label col-md-3 col-sm-3 col-xs-12">Numero</label>
                                <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                                    <input id="numero" class="form-control" type="text" name="numero">
                                </div>
                                <label for="complemento" class="control-label col-md-1 col-sm-1 col-xs-12">Compl.</label>
                                <div class="col-md-3 col-sm-4 col-xs-12 form-group has-feedback">
                                    <input id="complemento" class="form-control" type="text" name="complemento">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="email" class="form-control has-feedback-left col-md-7 col-xs-12" id="email" name="email" required="required">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefone | Celular <span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="telefone" name="telefone">
                                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="celular" name="celular" required="required">
                                    <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quis">Considerar com matriz?</label>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="checkbox" id="quis" name="quis" value="1">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-md" id="btnGravar">
                                    	<span class="fa fa-floppy-o aria-hidden="true"></span>&nbsp;&nbsp;Gravar
                                    </button>
                                    <button type="reset" class="btn btn-primary btn-md" id="btnLimpar" onclick="resetForm();">
                                    	<span class="fa fa-eraser aria-hidden="true"></span>&nbsp;&nbsp;Limpar
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="clearfix"></div>

                    <!-- QUADRO LISTA  -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Academias </h2>
                    <ul class="nav navbar-right panel_toolbox">
                            <li>
                            	<a class="collapse-link" id="formCadastro">
                            		<i class="fa fa-chevron-up"></i>
                            	</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                	<i class="fa fa-info"></i>
                               	</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    	Informações sobre a tela de cadastro
                                    </li>
                                </ul>
                            </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped dt-responsive nowrap jambo_table bulk_action" cellspacing="0" width="100%">
                    <!-- removido da class="" do table "table-bordered" inseri bordas no titulo da tabela  -->
                      <thead>
								<tr class="headings">
									<th><input type="checkbox" id="check-all" class="flat"></th>
									<th class="column-title">Cod.</th>
									<th class="column-title">Razão Social</th>
									<th class="column-title">Responsavel</th>
									<th class="column-title">Contato</th>
									<th class="column-title">Matriz</th>
									<th class="column-title no-link last"><span class="nobr">&nbsp;</span></th>
								</tr>
                      </thead>
                      <tbody id="lista">

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
                    <!-- FIM QUADRO LISTA -->
        </div>
    </div>
</div>
<!-- /page content -->

<!-- bootstrap-daterangepicker -->
<!-- jQuery -->
<script src="../vendors/validator/validator.js"></script>
<script src="../production/js/customizado/generic.js"></script>
<script src="../libs/js/cep.js"></script>
<script src="../cadastro/academia/js/academias.js"></script>