<section class="section-container">
         <div class="content-wrapper">
            <div class="content-heading">
                <div>Cotações
                  <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <div class="row">
               <div class="col-xl-4">
                  <!-- START List group-->
                  <div class="list-group mb-3">
                     <div class="list-group-item">
                        <div class="d-flex align-items-center py-3">
                           <div class="w-50 px-3">
                              <p class="m-0 lead"><?php echo "R$ ".$cotacaoOleo ?></p>
                              <p class="m-0 text-sm">Cotação do óleo de algodão</p>
                           </div>
                           <div class="w-50 px-3 text-center">
                           <a class="btn btn-primary" data-toggle="collapse" href="#divOleo" role="button" aria-expanded="false" aria-controls="divOleo">
                                <em class="fa fa-check fa-fw"></em>
                                <span>Ver Histórico</span>
                            </a>
                           </div>
                        </div>
                     </div>
                     <div class="list-group-item">
                        <div class="d-flex align-items-center py-3">
                           <div class="w-50 px-3">
                              <p class="m-0 lead"><?php echo "R$ ".$cotacaoTorta ?></p>
                              <p class="m-0 text-sm">Cotação da torta de algodão</p>
                           </div>
                           <div class="w-50 px-3 text-center">
                           <a class="btn btn-primary" data-toggle="collapse" href="#divTorta" role="button" aria-expanded="false" aria-controls="divTorta">
                                <em class="fa fa-check fa-fw"></em>
                                <span>Ver Histórico</span>
                            </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="collapse" id="divOleo">
                  <div class="card card-default" id="painelVenda">
                     <div class="card-header">Histórico Cotação Óleo</div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-striped">
                              <thead>
                                 <tr>
                                    <th>Data</th>
                                    <th>Valor</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php foreach($cotacoesOleo as $cotacaoOleo){ ?>
                                <tr>
                                <td>
                                <?php $dataPropostaOleo = implode("/",array_reverse(explode("-",$cotacaoOleo['data'])));
                                               echo $dataPropostaOleo ?>
                                </td>
                                <td>
                                R$ <?php $valor_formatadoOleo = number_format($cotacaoOleo['valor'], 3, ',', '.');
                                            echo $valor_formatadoOleo."/KG";?>
                                </td>
                                </tr>
                             <?php } ?> 
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  </div>
                  
                  <div class="collapse" id="divTorta">
                  <div class="card card-default">
                     <div class="card-header">Histórico Cotação Torta</div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-striped">
                              <thead>
                                 <tr>
                                    <th>Data</th>
                                    <th>Valor</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php foreach($cotacoesTorta as $cotacaoTorta){ ?>
                                <tr>
                                <td><?php $dataPropostaTorta = implode("/",array_reverse(explode("-",$cotacaoTorta['data'])));
                                               echo $dataPropostaTorta ?></td>
                                <td>
                                R$ <?php $valor_formatadoTorta = number_format($cotacaoTorta['valor'], 2, ',', '.');
                                            echo $valor_formatadoTorta."/Ton";?>
                                </td>
                                </tr>
                             <?php } ?> 
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                </div>
               </div>
          
          
               <div class="col-xl-8">

                    <div class="card card-default">
                        <div class="card-header"> Atualizar Cotação</div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url()?>areaRestrita/Cotacao/SalvarCotacao">
                                    <div class="form-row align-items-center">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="optionOleo" name="optionTipo" type="radio"  value="1" required>
                                                    <label class="form-check-label" for="optionOleo">Óleo</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="optionTorta" type="radio" name="optionTipo" value="2" required>
                                                    <label class="form-check-label" for="optionTorta">Torta</label>
                                                </div>
                                            </div>
                                        </div>   
                                            <div class="col-auto">
                                            <label class="sr-only" for="inputValorCotacao">Valor</label>
                                                <input class="form-control mb-2" id="inputValorCotacao" name="inputValorCotacao" type="text" placeholder="Valor da cotação" required>
                                            </div>
                                            <div class="col-auto">
                                            <button class="btn btn-primary mb-2" type="submit">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   <!-- <div class="card card-default" id="cardChart9">
                        <div class="card-header">
                           <div class="card-title">Area Spline</div>
                        </div>
                        <div class="card-body">
                           <div class="graficoCotacao flot-chart"></div>
                        </div>
                     </div>-->
                </div>  
      </section>
   