<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable - Constrain movement</title>




<?php include 'header.php'; ?>



  <script>
  $( function() {

    $( ".draggable" ).draggable({
      containment: "#containment-wrapper",
      scroll: false,
    });



    $(".loader").click(function(){
      var thisId = $(this).attr("value");
      var thisElem = $("#"+thisId).html();
  

      $("#containment-wrapper").append("<div class='cloned' style='position: absolute; top:2%; left: 2%;' >"+thisElem+"</div>");

      $(".cloned").draggable({

        cursor: "move",
        containment: "#containment-wrapper", 
        start: function (event, ui) {
        },

        stop: function (event, ui) {
        }

      }); // end of cloned draggabl

      
      $(".rotRight").click(function(){
         $(this).closest('div.cloned').addClass('flip');
         $(this).closest('div.controls').addClass('flip');
      });

      $(".rotLeft").click(function(){
        // alert("oy");
         $(this).closest('div.cloned').removeClass('flip');
         $(this).closest('div.controls').removeClass('flip');
      });

      $(".trash").click(function(){
         $(this).closest('div.cloned').remove();
      });



    }); // end of loader


 
      $(".cloned").mouseover(function(){
        $(this).closest("div.controls").toggle("slow");

      });

      $(".snaptarget").click(function(){
        $('.controls').toggle("slow");
      });

  });// main function
  </script>
</head>
<body>
<?php include 'navigation.php'; ?> 

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        <h5>Surgical Instruments:</h5>
        <p></p>
        <ul class="list-group">
             <li class="loader list-group-item" value="eq1" >Surgical Table</li>
             <li class="loader list-group-item" value="eq2" >Monitors</li>
             <li class="loader list-group-item" value="eq3" >Mobile Surgical Lights</li>
             <li class="loader list-group-item" value="eq4" >Anesthesia Cart</li>
        </ul>
        </nav>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <div id="containment-wrapper" class="ui-widget-header drop snaptarget">
  
          <!-- ready equipments pictures  -->
          
            <div id="eq1" class="draggable ui-widget-content hidden" >
              <img src="resources/img/opTable2.png" class="sm" />
                <div class="controls">
                <button class='rotLeft rotBtn btn btn-sm' ><span class="glyphicon glyphicon-arrow-left"></span></button>
                <button class='rotRight rotBtn btn btn-sm' ><span class="glyphicon glyphicon-arrow-right"></span></button>
                <button class='trash rotBtn btn btn-sm' ><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </div>

            <div id="eq2" class="draggable ui-widget-content hidden" >
              <img src="resources/img/monitors.png" class="sm"  />
              <div class="controls">
                <button class='rotLeft rotBtn btn btn-sm' ><span class="glyphicon glyphicon-arrow-left"></span></button>
                <button class='rotRight rotBtn btn btn-sm' ><span class="glyphicon glyphicon-arrow-right"></span></button>
                <button class='trash rotBtn btn btn-sm' ><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </div>

            <div id="eq3" class="draggable ui-widget-content hidden" >
              <img src="resources/img/lights.png" class="sm"  />
              <div class="controls">
                <button class='rotLeft rotBtn btn btn-sm' ><span class="glyphicon glyphicon-arrow-left"></span></button>
                <button class='rotRight rotBtn btn btn-sm' ><span class="glyphicon glyphicon-arrow-right"></span></button>
                <button class='trash rotBtn btn btn-sm' ><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </div>

            <div id="eq4" class="draggable ui-widget-content hidden" >
              <img src="resources/img/anesthesia_cart.png" class="sm" style="width: 150px"  />
              <div class="controls">
                <button class='rotLeft rotBtn btn btn-sm' ><span class="glyphicon glyphicon-arrow-left"></span></button>
                <button class='rotRight rotBtn btn btn-sm' ><span class="glyphicon glyphicon-arrow-right"></span></button>
                <button class='trash rotBtn btn btn-sm' ><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </div>



          </div>


        </main>

      </div>
    </div>

 
</body>
</html>