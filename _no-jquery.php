    <!-- #region Jssor Slider Begin -->

    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com/demos/scrolling-logo-thumbnail-slider.slider -->
    
    <!-- This demo works without jquery library. -->

    <script type="text/javascript" src="js/jssor.slider-21.1.5.min.js"></script>
    <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 0,
              $AutoPlaySteps: 4,
              $SlideDuration: 10000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 200,
              $Cols: 7
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>


    <div class="coda-slider-wrapper" id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; visibility: hidden;">
    <h2 class="titulos">Convenios</h2>

        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; clear:both; position: relative; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden;">

            <div style="display: none;">
                <img data-u="image" src="img/logo_alcivar.png" alt="" >
            </div>

            <div style="display: none;">
                <img data-u="image" src="img/logo_kennedy.png" alt="" >
            </div>

            <div style="display: none;">
                <img data-u="image" src="img/logo_mediglobal.png" alt="" >
            </div>

            <div style="display: none;">
                <img data-u="image" src="img/logo_negocios.png" alt="" >
            </div>

            <div style="display: none;">
                <img data-u="image" src="img/logo_salud.png" alt="" >
            </div>

            <div style="display: none;">
                <img data-u="image" src="img/logo_sanfrancisco.png" alt="" >
            </div>

            <div style="display: none;">
                <img data-u="image" src="img/logo_unilever.png" alt="" >
            </div>

            <div style="display: none;">
                <img data-u="image" src="img/logo_wong.png" alt="" >
            </div>
            <a data-u="add" href="http://www.jssor.com/demos/scrolling-logo-thumbnail-slider.slider" style="display:none">Scrolling Logo Thumbnail Slider</a>
        
        </div>
    </div>
    <script>
        jssor_1_slider_init();
    </script>

    <!-- #endregion Jssor Slider End -->
