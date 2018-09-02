      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
            <div>Mensagens
                  <small data-localize="dashboard.WELCOME"></small>
               </div>
            </div>
            <div class="row">
               <div class="col-12 text-center">
               <div class="card card-default">
               <table class="table table-striped">
                  <tbody>
                     <?php foreach($mensagens as $mensagem){ ?>
                        <tr>
                        <td class="text-center">
                           <a href="">
                              <strong><?php echo $mensagem['nomeCliente'] ?></strong>
                           </a>
                        </td>
                        <td class="text-right">em
                           <em>
                           <?php $dataMensagem = implode("/",array_reverse(explode("-",$mensagem['dataComentario'])));
                                               echo $dataMensagem ?>
                          </em>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <div class="mt-2">
                              <a href="#">
                                 <img class="rounded-circle thumb64" src="<?php echo base_url();?>content/templateAngle/img/user/avatar.png" alt="avatar">
                              </a>
                           </div>
                           <small><?php echo $mensagem['telefoneCliente'] ?></small>
                           <br>
                           <small><?php echo $mensagem['emailCliente'] ?></small>
                        </td>
                        <td>
                           <p><?php echo $mensagem['textoComentario'] ?></p>
                           <div class="text-right">
                           <a href="<?php echo base_url()?>areaRestrita/Mensagem/excluirMensagem/<?php echo $mensagem['idComentario'] ?>" class="btn btn-sm btn-secondary" >
                           <em class="fa fa-trash"></em>
                        </a>
                           </div>
                        </td>
                     </tr>
                     <?php } ?>
                     


                  </tbody>
               </table>
            </div>
               </div>
            </div>
         </div>
      </section>
      