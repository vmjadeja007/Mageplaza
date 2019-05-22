<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // Show hide popover
        $(".dropdown").hover(function(){ 
            $(this).find(".dropdown-menu").slideToggle("slow");            
        });
      
  });

   

    // $(document).on("click", function(event){ 
    //     var $trigger = $(".dropdown");
    //     if($trigger !== event.target && !$trigger.has(event.target).length){
    //         $(".dropdown-menu").slideUp("fast");
    //     }            
    // });


$(document).ready(function(){ 

    $("#hide").click(function(){
      $("nav").hide();
    });

    $("#show").click(function(){
      $("nav").show();
    });

// $("button").click(function(){
//   $("#div1").delay("slow").fadeIn();
//   $("#div2").delay("fast").fadeIn();
// });
  
}); 
 

</script>

</head>
<title>Menu</title>
<style>
   ul{
        padding: 0;
        list-style: none;
        background: #f2f2f2;
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
    }
    ul li a{
        display: block;
        padding: 8px 25px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover{
        color: #fff;
        background: #939393;
    }
    ul li ul.dropdown-menu{
        min-width: 100%; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li ul.dropdown-menu li{
        display: block;
    }

    
</style>
<body>

<h2>Menu Bar123</h2>
<nav>    
<div style="width:200px;">
  <ul>
    <li class="dropdown"><a href="#"> Garment</a>
       <ul class="dropdown-menu">
           <li><a href="#">Shirt</a></li>
           <li><a href="#">Jeans</a></li>
           <li><a href="#">T-Shirt</a></li>
       </ul>
      </li>  
    <li><a href="#">Foot Wear</a></li>

  </ul>
</div>
</nav>

   <div> <input type="button" id="hide" value="Hide">  <input type="button" id="show" value="Show"> </div>

</body>
</html>