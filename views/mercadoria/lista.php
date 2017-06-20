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
            <h2>Mercadoria > Lista</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>

            <!-- Cadastro novo mercadoria -->
            <div class="col-sm-12">
              <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                  <tr role="row">
                    <th class="text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 267px;">Codígo</th>
                    <th class="text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 422px;">Nome</th>
                    <th class="text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 202px;">Quantidade</th>
                    <th class="text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 111px;">Preço</th>
                    <th class="text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 196px;"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($mercadorias as $mercadoria) {?>
                  <tr role="row" class="odd">
                    <td class="text-center"><?php echo $mercadoria->getCodigoMercadoria(); ?></td>
                    <td class="text-center"><?php echo $mercadoria->getNomeMercadoria(); ?></td>
                    <td class="text-center"><?php echo $mercadoria->getQuantidade(); ?></td>
                    <td class="text-center"><?php echo $mercadoria->getPreco(); ?></td>
                    <td class="text-center">
                      
                      <div class="btn-group" data-toggle="">
                        <label class="btn-default">
                          <a href="<?php echo BASE_URI ?>mercadoria/editar/<?php echo $mercadoria->getIdMercadoria() ?>"><i class="fa fa-edit"></i> Editar</a>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <?php }?>
                  </tbody>
                </table>
              </div>
            <!-- Cadastro novo mercadoria -->

          </div>
        </div>
      </div>
    </div>
  </div>
