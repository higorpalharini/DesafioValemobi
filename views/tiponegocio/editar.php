<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tipo Negocio</h3>
      </div>      
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cadastro Tipo Negocio > editar</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>

            <!-- Cadastro novo mercadoria -->
            <form id="form-negocio" data-parsley-validate="" class="form-horizontal form-label-left" method="POST" action="<?php echo BASE_URI ?>tiponegocio/salvar/<?php echo $tiponegocio->getIdTipoNegocio() ?>" >

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao-tiponegocio-input">Descrição <span class="required">*</span>
                </label>
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <input type="text" id="descricao-tiponegocio-input" name="descricao-tiponegocio-input" required="required"  value="<?php echo $tiponegocio->getDescricao() ?>" class="form-control col-md-3 col-xs-3">
                </div>
              </div>


              		<div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancelar</button>
                          <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                      </div>

            </form>
            <!-- Cadastro novo mercadoria -->

          </div>
        </div>
      </div>
    </div>
  </div>