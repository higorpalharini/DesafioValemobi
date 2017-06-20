<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Mercadoria</h3>
      </div>      
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cadastro Mercadoria > editar</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>

            <!-- Cadastro novo mercadoria -->
            <form id="form-mercadoria" data-parsley-validate="" class="form-horizontal form-label-left" method="POST" action="<?php echo BASE_URI ?>mercadoria/salvar/<?php echo $mercadoria->getIdMercadoria() ?>" >

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo-mercadoria-input">Código da Mercadoria <span class="required">*</span>
                </label>
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <input type="text" id="codigo-mercadoria-input" name="codigo-mercadoria-input" required="required" value="<?php echo $mercadoria->getCodigoMercadoria() ?>" class="form-control col-md-3 col-xs-3">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome-mercadoria-input">Nome da Mercadoria <span class="required">*</span>
                </label>
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <input type="text" id="nome-mercadoria-input" name="nome-mercadoria-input" required="required" value="<?php echo $mercadoria->getNomeMercadoria() ?>" class="form-control col-md-3 col-xs-3">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo-mercadoria-select">Tipo da Mercadoria <span class="required">*</span>
                </label>
               	<div class="col-md-3 col-sm-3 col-xs-6">
	               	<select id="tipo-mercadoria-select" name="tipo-mercadoria-select" class="form-control" required="">
	               		<?php
	               		foreach($tiposMercadoria as $tipo)
	               		{
                      if($tipo->getIdTipoMercadoria() == $mercadoria->getIdTipoMercadoria())
                      {
                         ?>
                         <option selected="selected" value="<?php echo $tipo->getIdTipoMercadoria();?>"> <?php echo $tipo->getDescricao();?></option>
                         <?php
                      }
                      else
                      {
                         ?> <option value="<?php echo $tipo->getIdTipoMercadoria();?>"> <?php echo $tipo->getDescricao();?></option>
                         <?php
                      }
                    }
	               		?>


	                </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo-negocio-select">Tipo de Negócio <span class="required">*</span>
                </label>
               	<div class="col-md-3 col-sm-3 col-xs-6">
	               	<select id="tipo-negocio-select" name="tipo-negocio-select" class="form-control" required="">
	                   <?php
	               		foreach($tiposNegocio as $tipo)
                    {
                      if($tipo->getIdTipoNegocio() == $mercadoria->getIdTipoNegocio())
                      {
                         ?>
                         <option selected="selected" value="<?php echo $tipo->getIdTipoNegocio();?>"> <?php echo $tipo->getDescricao();?></option>
                         <?php
                      }
                      else
                      {
                         ?> <option value="<?php echo $tipo->getIdTipoNegocio();?>"> <?php echo $tipo->getDescricao();?></option>
                         <?php
                      }
                    }
                    ?>
	                </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantidade-mercadoria-input">Quantidade <span class="required">*</span>
                </label>
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <input type="text" id="quantidade-mercadoria-input" name="quantidade-mercadoria-input" required="required" value="<?php echo $mercadoria->getQuantidade() ?>" class="form-control col-md-3 col-xs-3">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="preco-mercadoria-input">Preço <span class="required">*</span>
                </label>
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <input type="text" id="preco-mercadoria-input" name="preco-mercadoria-input" required="required" value="<?php echo $mercadoria->getPreco() ?>" class="form-control col-md-3 col-xs-3">
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