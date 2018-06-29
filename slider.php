
  <!-- Optionally use Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
  <link rel="stylesheet" href="css/liquid-slider.css">


  <div id="main-slider" class="liquid-slider">
    <div>
      <h2 class="title">Slide 1</h2>
          <img src="img/logo_alcivar.png" alt="" >
          <img src="img/logo_kennedy.png" alt="" >
          <img src="img/logo_mediglobal.png" alt="" >
          <img src="img/logo_negocios.png" alt="" >
    </div>
    <div>
      <h2 class="title">Slide 2</h2>
          <img src="img/logo_salud.png" alt="" >
          <img src="img/logo_sanfrancisco.png" alt="" >
          <img src="img/logo_unilever.png" alt="" >
          <img src="img/logo_wong.png" alt="" >
    </div>          
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
  <script src="js/jquery.liquid-slider.min.js"></script>  
  <script>
    /**
     * If you need to access the internal property or methods, use this:
     * var api = $.data( $('#main-slider')[0], 'liquidSlider');
     * console.log(api);
     */
    $('#main-slider').liquidSlider();
  </script>
