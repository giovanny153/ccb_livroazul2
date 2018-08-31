    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
                console.log( "ready!" );
                $(".dropdown-trigger").dropdown();
          });

      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, options);
  });
  
  $(document).ready(function(){
    $('.slider').slider();
  });

//Dropdown para Select
  $(document).ready(function(){
    $('select').formSelect();
  });
      
       
  </script>
    
    </body>
  </html>