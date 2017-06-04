<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

    <link href="css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <link href="css/ninja-slidergal.css" rel="stylesheet" type="text/css" />
    <script src="js/thumbnail-slider.js" type="text/javascript"></script>
    <script src="js/ninja-slidergal.js" type="text/javascript"></script>
    
<title>ENTRE MUJERES HISPANAS DE QUEENS</title>

<?php include_once 'elements/href.php';?>
</head>

<body>
		<?php include_once 'elements/header.php';?>
	 	
	 	<body>
    <!--start-->
    <div id='ninja-slider'>
        <div>
            <div class="slider-inner">
                <ul>
                
                <?php 
            $dirname = "gallery/gallery/";
            $images = glob ( $dirname . "*.JPG" );
            foreach ( $images as $image ) {
            	echo         	'<li>
                    <a class="ns-img" href="' .$image. '"></a>
                </li>';}
    		?>
    		
                    
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <?php 
            $dirname = "gallery/gallery/";
            $images = glob ( $dirname . "*.JPG" );
            foreach ( $images as $image ) {
            	echo         	'<li>
                    <a class="thumb" href="' .$image. '"></a>
                </li>';}
    		?>
    		   		</ul>
                </div>
            </div>
        </div>
    </div>
    <!--end-->

 		
 		<footer><?php include_once 'elements/footer.php';?></footer>
	 	
	 	

</body>


