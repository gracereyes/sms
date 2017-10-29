<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable - Snap to element or grid</title>
<?php include 'header.php'; ?>


  <link rel="stylesheet" href="/resources/demos/style.css">

  <script>

  $( function() {

    $(".draggable").click(function(){
      $(this).appendTo("#snaptarget");
    });

    

    $( ".draggable" ).draggable({ snap: ".ui-widget-header", snapMode: "outer" });


      $(".draggable").draggable({

          // Find original position of dragged image.
          start: function(event, ui) {

              // Show start dragged position of image.
              var Startpos = $(this).position();
              $("div#start").text("START: \nLeft: "+ Startpos.left + "\nTop: " + Startpos.top);
          },

          // Find position where image is dropped.
          stop: function(event, ui) {
              // Show dropped position.
              var Stoppos = $(this).position();
              $("div#stop").text("STOP: \nLeft: "+ Stoppos.left + "\nTop: " + Stoppos.top);
          }
      }); // end of drag


      var newDeg = 0;
      // WHEN CLICKED DRAGGABLE:ID  // Show controls
      $( ".draggable" ).click(function() {

        var thisObj = $(this).attr('id');
        // $(".debugger").html(thisObj);
      //   $( "#"+thisObj+" .controls" ).toggle( "slow", function() { });

      });


// *******************************************************  

          $(".rotLeft").click(function(){ 
          //get current of selected
          var thisObj = $(this).closest('div.draggable').attr('id');

          var currentDeg = $(this).attr("value");

          newDeg =  parseInt(currentDeg)+10;
          //alert(currentDeg +"+10=" +newDeg);      
      
          $("#"+thisObj).css('transform','rotate('+newDeg+'deg)'); 
          $(".rotBtn").attr('value', newDeg); 

          

        });  
        // end of rotate left


        // ROTATE RIGHT
         $(".rotRight").click(function(){ 
          //get current of selected
          var thisObj = $(this).closest('div.draggable').attr('id');
          var currentDeg = $(this).attr("value");

          newDeg =  parseInt(currentDeg)-10;
         // alert(currentDeg +"-10=" +newDeg);          
      
          $("#"+thisObj).css('transform','rotate('+newDeg+'deg)'); 
          $(".rotBtn").attr('value', newDeg); 


        });  
        // end of rotate right


// *********************************************************
    
  // do not remove beyond this line 
   });

  </script>
</head>
<body>
<?php include 'navigation.php'; ?>
    
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">


          <div class="allEquipments">
              <div id="draggable1" class="draggable ui-widget-content" style="width: 250px;" >
                <img src="resources/img/opTable2.png"  />
                <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
              </div>

              <div id="draggable2" class="draggable ui-widget-content" style="width: 250px" >
                 <img src="resources/img/monitors.png"  />
                 <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
              </div>

              <div id="draggable3" class="draggable ui-widget-content" style="width: 200px" >
                <img src="resources/img/lights.png"/>
                <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
              </div>

              <div id="draggable4" class="draggable ui-widget-content" style="width:250px">
                <img src="resources/img/anesthesia.png"  />
                <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
              </div>

              <div id="draggable5" class="draggable ui-widget-content" style="width:130px">
                <img src="resources/img/anesthesia_cart.png"  />
                <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
              </div>

          </div>

        </nav>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

            <div id="snaptarget" class="ui-widget-header"></div>
        </main>
      </div>
    </div>

 
<div class="debugger"></div>
<br style="clear:both">
 


 <div id="start">Waiting for dragging the image get started...</div>
<div id="stop">Waiting image getting dropped...</div>



 
</body>
</html>