<?php
session_start();

if(isset($_POST['igreja'])){echo 'igreja: '. $_POST['igreja'];}
if(isset($_POST['tipoRelatorio'])){echo 'tipoRelatorio: '. $_POST['tipoRelatorio'];}
if(isset($_POST['igreja'])){echo 'igreja: '. $_POST['igreja'];}
if(isset($_POST['igreja'])){echo 'igreja: '. $_POST['igreja'];}
if(isset($_POST['igreja'])){echo 'igreja: '. $_POST['igreja'];}
if(isset($_POST['igreja'])){echo 'igreja: '. $_POST['igreja'];}
if(isset($_POST['igreja'])){echo 'igreja: '. $_POST['igreja'];}

include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';?>  


<div class="row container">
  <p>&nbsp;</p>
  <form action="cli_cad.php" method="post" class="col s12">
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
          <option value="22-1163">Tibério</option>
          <option value="22-1232">Central</option>
          <option value="22-1243">Greenville</option>
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
        <select name='conta'>          
          <option disabled selected></option>
          <option value="22-1163">Cícero</option>
          <option value="22-1232">Giovanny</option>
          <option value="22-1243">Rafael</option>
          <option value="22-1243">Edgar</option>
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
        <input type="checkbox"  />
        <span>Assinatura OK?</span>
      </label>
       </div>

       <div class ="input-field col s6">
       <label>
        <input type="checkbox"  />
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
