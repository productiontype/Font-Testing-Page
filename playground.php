<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Tools Version</title>
<link type="text/css" href="css/styles-v9.css" rel="stylesheet" charset="utf-8" />
<link type="text/css" href="css/print-v9.css" rel="stylesheet" media="print" charset="utf-8" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script>localStorage.clear(); </script>
<script src="js/fontdrag.js" type="text/javascript" charset="utf-8"></script>
<script src="js/otfeatures-v9.1.js" type="text/javascript" charset="utf-8"></script>

<script>
 $(document).ready(function(){
    
    // Tabs
    var tabContainers = $('div.tabs > div');
    $('div.tabs ul.tabNavigation a').click(function () {
        tabContainers.hide().filter(this.hash).show();
        $('div.tabs ul.tabNavigation a').removeClass('selected');
        $(this).addClass('selected');
        return false;
    }).filter(':first').click();
    
    // OT Features Panel
    $('#showhide').click(function () {
        $('#otfeatures').slideToggle("fast", function() {
		    $("#showhide").text($(this).is(':visible') ? "Hide OpenType Features" : "OpenType Features");
		  });
    });

    // OT Features initial Run
    refreshFeatures();

});
</script>
</head>

<body spellcheck="false">

<?php include("includes/top.php"); ?>

<section id="custom">

	<div class="tabs">
	  <!-- Navigation -->
	  <ul class="tabNavigation">
	    <li><a href="#wordsfinder">Words finder</a></li>
	    <li><a href="#scale">Scale</a></li>
	    <li><a href="#spe01">Specimen 01</a></li>
	  </ul>

	  <!-- Words Finder -->
	  <div id="wordsfinder">
	  	<?php include("includes/playground/wordsfinder.php"); ?>
	  </div>	  

	  <!-- My Scale -->
	  <div id="scale">
	  	<?php include("includes/playground/scale.php"); ?>
	  </div>

	  <!-- Specimen Format 01 -->
	  <div id="spe01">
	  	<?php include("includes/playground/spe01.php"); ?>
	  </div>

	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>