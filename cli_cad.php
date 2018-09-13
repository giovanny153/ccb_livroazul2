<?php
session_start();

if(isset($_POST['igreja'])){echo 'igreja: '. $_POST['igreja'].'<BR/>';}
if(isset($_POST['tipoRelatorio'])){echo 'tipoRelatorio: '. $_POST['tipoRelatorio'].'<BR/>';}
if(isset($_POST['data'])){echo 'data: '. $_POST['data'].'<BR/>';}
if(isset($_POST['destacador'])){echo 'destacador: '. $_POST['destacador'].'<BR/>';}
if(isset($_POST['obs'])){echo 'obs: '. $_POST['obs'].'<BR/>';}
if(isset($_POST['assinatura'])){echo 'assinatura: '. $_POST['assinatura'].'<BR/>';}
if(isset($_POST['preenchimento'])){echo 'preenchimento: '. $_POST['preenchimento'].'<BR/>';}

include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';?>  


<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/cli_create.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/download.png" alt="(imagem)" width="100"></legend>
      <h5 class="light center">Cadastro de Folha</h5>

      <!-- Exibir mensagem sobre cadastro não realizado por erro -->
      <?php
        if(isset($_SESSION['msg'])):
          echo $_SESSION['msg'];
          session_unset();
        endif
      ?>


      <div class="input-field col s12">
        <i class="material-icons prefix">home</i>
        <select name='igreja'>          
          <option disabled selected></option>
          <option value="22-1161">Almoxarifado - Vila Carvalho</option>
          <option value="22-2384">Alto do Sumarezinho</option>
          <option value="22-4347">Assentamento Indio Galdino</option>
          <option value="22-4561">Assentamento Mário Lago</option>
          <option value="22-0206">Bonfim Paulista</option>
          <option value="22-1161">Campos Elíseos - Nave/Administração</option>
          <option value="22-1161">Campos Elísios - Salões Regionais</option>
          <option value="22-4512">Recanto das Flores</option>
          <option value="22-1913">Dom Mielle</option>
          <option value="22-1826">Doutor Avelino Alves Palma</option>
          <option value="22-2977">Geraldo Correa de Carvalho</option>
          <option value="22-0546">Guatapará - Centro</option>
          <option value="22-4162">Guatapará - Dist. De Mombuca</option>
          <option value="22-1162">Ipiranga</option>
          <option value="22-3457">Jardim Aeroporto - Hípica</option>
          <option value="22-3315">Jardim Alexandre Balbo II</option>
          <option value="22-1990">Jardim Bela Vista</option>
          <option value="22-4729">Jardim Iara - Jockey Club</option>
          <option value="22-4069">Jardim Nova Aliança</option>
          <option value="22-4483">Jardim Paiva I</option>
          <option value="22-2761">Jardim Salgado Filho II</option>
          <option value="22-9998">Jd. Novo Mundo</option>
          <option value="22-4068">Parque Avelino</option>
          <option value="22-4730">Parque dos Servidores</option>
          <option value="22-4334">Parque Flamboyans</option>
          <option value="22-3932">Parque Cândido Portinari</option>
          <option value="22-2813">Parque Ribeirão Preto I</option>
          <option value="22-3878">Parque Ribeirão Preto II</option>
          <option value="22-3314">Parque São Sebastião</option>
          <option value="22-4249">Residencial Green Ville</option>
          <option value="22-3512">Ribeirão Verde</option>
          <option value="22-1165">Santa Cruz do José Jaques</option>
          <option value="22-1825">Vila Abranches</option>
          <option value="22-1582">Vila Albertina</option>
          <option value="22-1166">Vila Carvalho</option>
          <option value="22-1163">Vila Tibério</option>
          <option value="22-1164">Vila Virgínia</option>


        </select>
        <label>Igreja</label>
      </div>

      <div class="input-field col s12">
        <i class="material-icons prefix">assignment</i>
        <select name='tipoRelatorio'>          
          <option disabled selected></option>
          <option value="MAN">Manutenção</option>
          <option value="ATA">Ata Trimestral</option>
          <option value="CH-ELE">Checklist Elétrica</option>
          <option value="VSEG">Vistoria Segurança</option>
        </select>
        <label>Tipo Relatório</label>
      </div>

      <div class ="input-field col s12">
        <i class="material-icons prefix">date_range</i>
        <input type="date" name="data" id="data" maxlength="40" >
        <label for ="data">Data da Entrega</label>
      </div>

      <div class="input-field col s12">
        <i class="material-icons prefix">person</i>
        <select name='destacador'>          
          <option disabled selected></option>
          <option value="Cícero">Cícero</option>
          <option value="Giovanny">Giovanny</option>
          <option value="Rafael">Rafael</option>
          <option value="Edgar">Edgar</option>
        </select>
        <label>Destacado por:</label>
      </div>

      <div class ="input-field col s12">
        <i class="material-icons prefix">announcement</i>
        <input type="text" name="obs" id="obs" maxlength="400" >
        <label for ="obs">Observações</label>
      </div>

      


      <div class ="input-field col s6">
       <label>
        <input type="checkbox" name="assinatura"  />
        <span>Assinatura OK?</span>
      </label>
       </div>

       <div class ="input-field col s6">
       <label>
        <input type="checkbox" name="preenchimento" />
        <span>Preenchimento OK?</span>
      </label>
       </div>

<p>&nbsp;</p>
<p>&nbsp;</p>
      <!-- BOTÕES -->
      <div class="input-field col s12">
        <input type="submit" value="Cadastrar" class="btn blue">
        <input type="submit" value="Limpar" class="btn red">
      </div>


    </fieldset>
  </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>
