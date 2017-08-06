<html>
<head>
<?php include_once 'elements/meta.php';?>
<meta name="description" content="Some pictures from different events Entre Mujeres Hispanas De Queens">
    <link href="css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <link href="css/ninja-slidergal.css" rel="stylesheet" type="text/css" />
    <script src="js/thumbnail-slider.js" type="text/javascript"></script>
    <script src="js/ninja-slidergal.js" type="text/javascript"></script>

<title>ENTRE MUJERES HISPANAS DE QUEENS</title>

<?php include_once 'elements/href.php';?>
</head>

<body class= "page-wrap">
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


 		<?php include_once 'elements/footer.php';?>



</body>
