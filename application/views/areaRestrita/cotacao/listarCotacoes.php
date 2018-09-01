<section class="section-container">
         <!-- Page content-->
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
                              <div data-sparkline="" data-bar-color="#23b7e5" data-height="60" data-bar-width="10" data-bar-spacing="6" data-chart-range-min="0" data-values="3,6,7,8,4,5"></div>
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
                              <div data-sparkline="" data-type="line" data-height="60" data-width="80%" data-line-width="2" data-line-color="#7266ba" data-chart-range-min="0" data-spot-color="#888" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba"
                                 data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-values="7,3,4,7,5,9,4,4,7,5,9,6,4" data-resize="true"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END List group-->
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
                                    <input class="form-check-input" id="optionOleo" name="optionTipo" type="radio"  value="1">
                                    <label class="form-check-label" for="optionOleo">Óleo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="optionTorta" type="radio" name="optionTipo" value="2">
                                    <label class="form-check-label" for="optionTorta">Torta</label>
                                </div>
                            </div>
                        </div>   
                            <div class="col-auto">
                             <label class="sr-only" for="inputValorCotacao">Valor</label>
                                <input class="form-control mb-2" id="inputValorCotacao" name="inputValorCotacao" type="text" placeholder="Valor da cotação">
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
            </div>
            <div class="unwrap my-3">
               <!-- START chart-->
               <div class="card" id="cardChart9aaaa">
                  <div class="card-header">
                     <!-- START button group-->
                     <div class="float-right btn-group">
                        <button class="dropdown-toggle dropdown-toggle-nocaret btn btn-secondary btn-sm" type="button" data-toggle="dropdown">All time</button>
                        <div class="dropdown-menu dropdown-menu-right-forced fadeInLeft animated" role="menu">
                           <a class="dropdown-item" href="#">Daily</a>
                           <a class="dropdown-item" href="#">Monthly</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#">All time</a>
                        </div>
                     </div>
                     <!-- END button group-->
                     <div class="card-title">Overall progress</div>
                  </div>
                  <div class="card-wrapper">
                     <div class="card-body">
                        <div class="chart-splinev2 flot-chart"></div>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-3 col-6 text-center">
                              <p>Projects</p>
                              <div class="h1">25</div>
                           </div>
                           <div class="col-md-3 col-6 text-center">
                              <p>Teammates</p>
                              <div class="h1">85</div>
                           </div>
                           <div class="col-md-3 col-6 text-center">
                              <p>Hours</p>
                              <div class="h1">380</div>
                           </div>
                           <div class="col-md-3 col-6 text-center">
                              <p>Budget</p>
                              <div class="h1 text-truncate">$ 10,000.00</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END chart-->
            </div>
           
      </section>