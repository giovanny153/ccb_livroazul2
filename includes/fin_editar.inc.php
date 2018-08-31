<!-- CAMPO NOME -->  
      <div class ="input-field col s6">
        <i class="material-icons prefix">money_gram</i>
        <input type="text" name="valor" id="valor" maxlength="40" value="<?php echo $valor ?>" autofocus data-length='50'>
        <label for ="valor">Valor</label>
      </div>

      <div class ="input-field col s6">
        <i class="material-icons prefix">date_range</i>
        <input type="text" name="data" id="data" maxlength="40" value="<?php echo $data ?>" autofocus>
        <label for ="data">Data</label>
      </div>

      <div class ="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="descricao" id="descricao" maxlength="40" value="<?php echo $descricao ?>" autofocus>
        <label for ="descricao">Descrição</label>
      </div>      

      <!-- <div class ="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="categoria" id="categoria" maxlength="40" value="<?php echo $categoria ?>" autofocus>
        <label for ="categoria">Categoria</label>
      </div> -->

      <!-- <div class ="input-field col s12">
        <i class="material-icons prefix">credit_card</i>
        <input type="text" name="conta" id="conta" maxlength="40"  value="<?php echo $conta ?>" autofocus>
        <label for ="conta">Conta</label>        
      </div> -->

      <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <select name='conta'>          
          <option value="<?php echo $conta ?>" disabled selected><?php echo $conta ?></option>
          <option value="Santander">Santander</option>
          <option value="Bradesco">Bradesco</option>
          <option value="Itaú">Itaú</option>
        </select>
        <label>Conta</label>
      </div>

      <div class="input-field col s6">
        <i class="material-icons prefix">credit_card</i>
        <select name='categoria'>
          <option value="<?php echo $categoria ?>" disabled selected><?php echo $categoria ?></option>
          <option value="Burguer King">Burguer King</option>
          <option value="Subway">Subway</option>
          <option value="McDonalds">McDonalds</option>
        </select>
        <label>Conta</label>
      </div>

      <!-- BOTÕES -->
      <div class="input-field col s12">
        <input type="submit" value="Cadastrar" class="btn blue">
        <!-- <input type="submit" value="Limpar" class="btn red"> -->
      </div>

    </fieldset>
  </form>
</div>