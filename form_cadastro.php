<?php

include_once 'includes/navbar.php';

?>

      <!-- Form NOVO CADASTRO -->
      <div class="container " style="width: 50%;">
      <form class="form-area" id="form_contato" action="cadastro.php" method="post" style="padding-top:150px;">  
                            <!--<img class="mb-4" src="img/cadastro.png" alt="" width="100" height="100">-->
                            <!--<h1 class="h3 mb-3 fw-normal" style="text-align: center;">Cadastro de Patrimônios</h1>-->
      
                            <div class="row d-flex ">	
                                <div class="col-lg-12 form-group justify-content-center ">
                                    <h3><i><img src="img/edit.png" alt="Bootstrap" width="33" height="33" style="padding-bottom: 5px;"> Novo cadastro</i></h3>
                                    <h6 style="font-style: italic;">*Se não souber o patrimônio, estiver ilegivel ou não tiver inserir 0 (zero) apenas!</h6>
                                    <label><i><img src="img/id-card.png" alt="Bootstrap" width="20" height="20" style="padding-bottom: 5px;"> Nome</i>
                                    <input type="text" class="common-input mb-20 form-control" id="nome" name="nome" placeholder="nome"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome completo'"  required=""></label>

                                    <label><i><img src="img/id-card.png" alt="Bootstrap" width="20" height="20" style="padding-bottom: 5px;"> Sobrenome</i>
                                    <input type="text" class="common-input mb-20 form-control" id="nome" name="sobrenome" placeholder="sobrenome"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome completo'"  required=""></label>
                                    
                                    <label><i><img src="img/tower-pc.png" alt="Bootstrap" width="20" height="20" style="padding-bottom: 5px;"> Maquina</i>
                                    <input type="text" class="common-input mb-20 form-control" name="maquina" id="maquina" placeholder="maquina"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'maquina'"  required="" ></label>

                                    <label><i class="bi bi-display"> Monitor 1</i>
                                    <input type="text" class="common-input mb-20 form-control" id="monitor1" name="monitor1" placeholder="monitor"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'monitor1'"  required=""></label>

                                    <label><i class="bi bi-display"> Monitor 2</i>
                                    <input type="text" class="common-input mb-20 form-control" id="monitor2" name="monitor2" placeholder="monitor"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'monitor2'"  required=""></label>

                                    <label><i class="bi bi-keyboard" > Teclado</i>
                                    <input type="text" class="common-input mb-20 form-control" id="teclado" name="teclado" placeholder="teclado"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'teclado'"  required=""></label>

                                    <label><i class="bi bi-mouse2"> Mouse</i>
                                    <input type="text" class="common-input mb-20 form-control" id="mouse" name="mouse" placeholder="mouse"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'mouse'"  required=""></label>

                                    <label><i><img src="img/uninterrupted-power-supply.png" alt="Bootstrap" width="20" height="20" style="padding-bottom: 5px;"> Estabilizador</i>
                                    <input type="text" class="common-input mb-20 form-control" id="estabilizador" name="estabilizador" placeholder="Estabilizador"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'estabilizador'"  required=""></label><br><br>
                                    <!-- botão enviar inicio -->
                                    <div class="col-lg-12">
                                      <div class="alert-msg" style="text-align: left;"></div>
                                        <button class="btn" style="float: left;background-color:;padding-top:5px;
                                        border-color:darkgreen;color:black;" type="submit"><i><img src="img/check-mark.png" alt="Bootstrap" width="22" height="22"> Enviar</i></button>											
                                  </div>
                                  <!-- botão enviar fim -->

                                </div>
                          </div><br>

                          </div>
                          
                        </form><br><br>
                          <!-- fim do form de cadastro -->
</body>
</html>