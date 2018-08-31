<?php
session_start()
?>
<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?> 
<?php include_once 'banco_de_dados/conexao.php' ?>

<?php
$tb = 'fin_mov';
// $cat     = filter_input(INPUT_POST, 'categoria');
$cat = 'conta'; 
$titulo = 'Gráfico de torta colorido!';
// $_SESSION['cat1'] =filter_input(INPUT_POST, 'categoria');
echo $cat;


//Select no banco
 $query = "SELECT $cat, count(*) as number FROM $tb GROUP BY $cat";  
 $result = mysqli_query($link, $query);
?>

<!-- <?php $cat = $_SESSION['cat1'];
$result = $_SESSION['result'];
// echo $cat1;
echo $cat;
echo $_SESSION['cat1'];
?> -->

<div class="row container">
  <p>&nbsp;</p>  
  <form action="banco_de_dados/graf_model.php" method="POST">
    <fieldset class="formulario" style="padding: 15px">
      <div class="input-field col s6">
        <i class="material-icons prefix">reorder</i>
        <select name='categoria' id='categoria' value="<?php echo $cat ?>">
          <option value="<?php echo $cat ?>" disabled selected></option>
          <option value="conta">Conta</option>
          <option value="categoria">Categoria</option>
        </select>
		<label>Coluna</label>

       <div class="input-field col s12">
        <input type="submit" value="Alterar" class="btn blue">
        <!-- <input type="submit" value="Limpar" class="btn red"> -->
      </div>
    

    
      <!-- <div class="input-field col s6">
        <i class="material-icons prefix">poll</i>
        <select name='categoria'>
          <option value="<?php echo $categoria ?>" disabled selected></option>
          <option value="Burguer King">Conta</option>
          <option value="Subway">Categoria</option>
          <option value="McDonalds">Mês</option>
        </select>
        <label>Coluna</label>       
      </div> -->

      </fieldset>
    </form>
  
</div>

<div class="row container">
  <p>&nbsp;</p>
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/graf.jpg" alt="(imagem)" width="100"></legend>
      <h3 class="light center">Gráfico de Pizza</h3>  
    
    <div id="piechart" align="center" style="width: 900px; height: 500px;"></div>  

    </fieldset>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
google.charts.load('current', {'packages':['corechart']});  
google.charts.setOnLoadCallback(drawChart);  
function drawChart()  
{  
  var data = google.visualization.arrayToDataTable([  
            ['Gender', 'Number'],  
            <?php  
            while($row = mysqli_fetch_array($result))  
            {  
                 echo "['".$row["$cat"]."', ".$row["number"]."],";  
            }  
            ?>  
       ]);  
  var options = {is3D:true };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
  chart.draw(data, options);  
}  
</script>

<?php // include_once 'includes/footer.inc.php' ?>
