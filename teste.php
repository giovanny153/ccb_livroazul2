<?php  
 $connect = mysqli_connect("localhost", "root", "", "db_cadastro");
 $criterio = "categoria";
 $tb="financeiro";
 $query = "SELECT $criterio, count(*) as number FROM $tb GROUP BY $criterio";  
 $result = mysqli_query($connect, $query);  
 ?> 

 <!DOCTYPE html>  
 <html>  
      <head>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>]
           <script type="text/javascript" src="js/google_graphs.js"></script>  
  
             
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  