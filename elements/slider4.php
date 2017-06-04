<html>
<head>
    <link href="css/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/ninja-slider.js" type="text/javascript"></script>

</head>

    
    
    
    
    <!--start-->
    <div id="ninja-slider">
        <div class="slider-inner">
            <ul>
            
            <?php 
            $dirname = "img/slider/";
            $images = glob ( $dirname . "*.JPG" );
            foreach ( $images as $image ) {
            	echo         	'<li>
                    <a class="ns-img" href="' .$image. '"></a>
                </li>';}
    		?>
            	<!--<li>
                    <a class="ns-img" href="img/slider/slider (0).JPG"></a>
                    //<div class="caption">@colerise</div>
                </li> -->
               
            </ul>
            <div class="fs-icon" title="Expand/Close"></div>
        </div>
    </div>
    <!--end--> 

</html>
