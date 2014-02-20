<?php
session_start();
require_once 'header.php'; 

?>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><img src="images/wightlin.jpg" width="5" height="2" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><div id="mySlider" class="evoslider default"> <!-- start evo slider -->

    <dl>
    
	    <dt></dt>
	    <dd>
	       <img src="slide/slide1.jpg" width="990" height="252" />	    </dd>
	
	    <dt></dt>
	    <dd>
	      <img src="slide/slide2.jpg" width="990" height="252" />	    </dd>
	
	    <dt></dt>
	   
	    <dd>        
	       <img src="slide/slide4.jpg" width="990" height="252" />    </dd> 
		   
		    <dt></dt>
	    <dd>        
	       <img src="slide/slide5.jpg" width="990" height="252" />    </dd> 
	    
	    <dt></dt>
	    <dd>        
	       <img src="slide/slide6.jpg" width="990" height="252" />    </dd> 
		   
		    <dd>	        
	        <img src="slide/slide3.png" width="990" height="252" />		    </dd>
	
	    <dt></dt>
    </dl>

</div> <!-- end evo slider -->

<script type="text/javascript">
            
    $("#mySlider").evoSlider({
        mode: "scroller",                  // Sets slider mode ("accordion", "slider", or "scroller")
        width: 990,                         // The width of slider
        height: 252,                        // The height of slider
        slideSpace: 5,                      // The space between slides
    
        mouse: true,                        // Enables mousewheel scroll navigation
        keyboard: true,                     // Enables keyboard navigation (left and right arrows)
        speed: 500,                         // Slide transition speed in ms. (1s = 1000ms)
        easing: "swing",                    // Defines the easing effect mode
        loop: true,                         // Rotate slideshow
    
        autoplay: true,                     // Sets EvoSlider to play slideshow when initialized
        interval: 5000,                     // Slideshow interval time in ms
        pauseOnHover: true,                 // Pause slideshow if mouse over the slide
        pauseOnClick: true,                 // Stop slideshow if playing
        
        directionNav: true,                 // Shows directional navigation when initialized
        directionNavAutoHide: false,        // Shows directional navigation on hover and hide it when mouseout
    
        controlNav: true,                   // Enables control navigation
        controlNavAutoHide: false           // Shows control navigation on mouseover and hide it when mouseout 
    });                                
    
</script></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td height="30" align="left" valign="top" class="rtxtr"><strong>About Swiss Travels </strong></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
        <td width="98%" align="left" valign="top" class="txt"><div align="justify">Swiss Travels is a home based airline  ticketing and tour office which is a network of travel and tour professionals  from different locations with the head office in Zofingen. Our concept creates  jobs and facilitates house women and men to work in their profession from their  home based offices. </div></td>
        <td width="1%" align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="right" valign="top" class="rtxtr"><a href="About.php" target="_self">More</a></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
 
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" align="left" valign="top">&nbsp;</td>
        <td colspan="5" align="left" valign="top" class="rtxtr"><strong>Tourist Place </strong></td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      
	<?php	$selectCount	=	"SELECT * from ".TABLE_PLAN." WHERE plan_status = '1' ORDER BY tour_id DESC";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);	
			if($num > 0 ) {
			$front_order	=	1;
			while($row = mysql_fetch_array($selectResult)) {
				$tour_id				=		$row['tour_id'];
				$thumb_path				=		$row['thumb_path'];
				$tour_desc				=		$row['tour_desc'];
	 
	 if($front_order == 1 || $front_order == 3 || $front_order == 5) { ?>
	 
	  <tr>
        <td height="19" align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
	  <?php } ?>
	 
	 <?php if($front_order == 1 || $front_order == 3 || $front_order == 5) { ?>
      <tr>
		<td height="142" align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top"><a href='javascript:void(0);' onclick="callingpage('<?php echo base64_encode($tour_id); ?>');"><img src="<?php echo 'controlend/'.$thumb_path; ?>" width="174" height="142" /></a></td>
        <td align="left" valign="top" class="txt"><div align="justify"><!--<strong>Lorem Ipsum</strong>--><?php echo $tour_desc; ?></div></td>
		<?php } ?>
		
		

		<?php if($front_order == 2 || $front_order == 4 || $front_order == 6) { ?>
		<td align="left" valign="top">&nbsp;</td>
		<td align="left" valign="top"><a href='javascript:void(0);' onclick="callingpage('<?php echo base64_encode($tour_id); ?>');"><img src="<?php echo 'controlend/'.$thumb_path; ?>" width="174" height="142" /></a></td>
        <td align="left" valign="top" class="txt"><div align="justify"><!--<strong>Lorem Ipsum</strong>--><?php echo $tour_desc; ?></div></td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
	  <?php }  //this is for if loop
		$front_order++;
		} //this is for while loop from db
	} //this is for if loop number of rows in db ?>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="63%" align="left" valign="top"><span class="style3">Flights and Cheap Flights in Europe and World-wide</span></td>
        <td width="35%" align="left" valign="top" class="style3">Latest News </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
 
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1%" align="left" valign="top">&nbsp; </td>
        <td width="62%" height="210" align="left" valign="top" class="bbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="2%" align="left" valign="top">&nbsp;</td>
            <td width="97%" align="left" valign="top">&nbsp;</td>
            <td width="1%" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
			<?php
		
		$conWhere		=	" WHERE flight_status = '1' GROUP BY continent_name LIMIT 3";

		$result			=	SingleTon::selectQuery("flight_id,continent_name,country_name,flight_cost","$conWhere",TABLE_FLIGHT,MY_ASSOC,NOR_YES);
		
		$num_rows = $result[0];
			
		//exit(0);

		$contName			=	'';
		$k					=	0;
		?>


            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
		
			 </tr>
			<tr>	
			
                <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				  
				  <tr>
				    <td width="35%" align="left" valign="top" class="txt"><strong>Asia</strong></td>
				    <td width="34%" height="30" align="left" valign="top" class="txt"><strong>Europe</strong></td>
				    <td width="31%" align="left" valign="top" class="txt"><strong>Middle East</strong></td>
				    </tr>
				  <tr>
				  
				  <td>
				  
				
				<?php $conWhere		=	" WHERE flight_status = '1' AND continent_name = 'ASI' LIMIT 5";

					$result			=	SingleTon::selectQuery("flight_id,continent_name,country_name,flight_cost","$conWhere",TABLE_FLIGHT,MY_ASSOC,NOR_YES);
					
					$num_rows = $result[0];
						
					//exit(0);

					$contName			=	'';
					$k					=	0;
					
					//pre($arr_cont);

					if($num_rows > 0) {

					foreach($result[1] as $pathVal){  ?>

				  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
				    <tr>
					
                    <td width="40%" height="27" align="left" valign="top" class="txt"><?php foreach($country_array as $coun_arr_key => $coun_arr_val) { if($coun_arr_key == $pathVal[country_name]) { echo $coun_arr_val; } } ?> </td>
                    <td width="60%" align="left" valign="top" >&nbsp;&nbsp;&nbsp;<?php echo $pathVal[flight_cost]; ?></td>
					</tr></table>
					
					<?php } } ?>					</td>
					
					<td>	
				  <?php $conWhere		=	" WHERE flight_status = '1' AND continent_name = 'EUR' LIMIT 5";

					$result			=	SingleTon::selectQuery("flight_id,continent_name,country_name,flight_cost","$conWhere",TABLE_FLIGHT,MY_ASSOC,NOR_YES);
					
					$num_rows = $result[0];
						
					//exit(0);

					$contName			=	'';
					$k					=	0;
					
					//pre($arr_cont);

					if($num_rows > 0) {

					foreach($result[1] as $pathVal){  ?>

				  <table width="100%" border="0" cellspacing="0" cellpadding="0" ><tr>
					
                    <td width="40%" height="27" align="left" valign="top" class="txt"><?php foreach($country_array as $coun_arr_key => $coun_arr_val) { if($coun_arr_key == $pathVal[country_name]) { echo $coun_arr_val; } } ?> </td>
                    <td width="60%" align="left" valign="top" >&nbsp;&nbsp;&nbsp;<?php echo $pathVal[flight_cost]; ?></td>

					</tr></table>
					
					<?php } } ?>					</td>

					
					<td>	
				 
				  <?php $conWhere		=	" WHERE flight_status = '1' AND continent_name = 'MIDEST' LIMIT 5";

					$result			=	SingleTon::selectQuery("flight_id,continent_name,country_name,flight_cost","$conWhere",TABLE_FLIGHT,MY_ASSOC,NOR_YES);
					
					$num_rows = $result[0];
						
					//exit(0);

					$contName			=	'';
					$k					=	0;
					
					//pre($arr_cont);

					if($num_rows > 0) {

					foreach($result[1] as $pathVal){  ?>

				  <table width="100%" border="0" cellspacing="0" cellpadding="0" ><tr>
					
                    <td width="47%" height="27" align="left" valign="top" class="txt"><?php foreach($country_array as $coun_arr_key => $coun_arr_val) { if($coun_arr_key == $pathVal[country_name]) { echo $coun_arr_val; } } ?> </td>
                    <td width="53%" align="left" valign="top" >&nbsp;&nbsp;&nbsp;<?php echo $pathVal[flight_cost]; ?></td>

					</tr></table>
					
					<?php } } ?>					</td>
					</tr>
					
                </table></td>
                    </tr>
					</table></td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
        <td width="1%" align="left" valign="top">&nbsp;</td>
        <td width="36%" height="211" align="left" valign="top" class="sbg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="4%" align="left" valign="top">&nbsp;</td>
            <td width="90%" align="left" valign="top">&nbsp;</td>
            <td width="6%" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="19" align="left" valign="top">&nbsp;</td>

			<td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
			<?php $selectCount	=	"SELECT * from ".TABLE_PLAN." ORDER BY tour_id DESC LIMIT 2";
			$selectResult	=	mysql_query($selectCount) or die (mysql_error());
			$num			=	mysql_num_rows($selectResult);

			$latest_inc					=		1;
			if($num > 0 ) {
			
			while($row = mysql_fetch_array($selectResult)) {

				$arrayFormLatest[]	=	$row;	
				$tour_id				=		$row['tour_id'];
				$front_order			=		$row['front_order'];
				$thumb_path				=		$row['thumb_path'];
				$tour_desc				=		$row['tour_desc']; 
				$tour_name				=		strtoupper($row['tour_name']); 
				$tour_code				=		$row['tour_code']; 
				?>          				
                <td width="50%" height="53" align="left" valign="top" class="txt"><strong><?php echo $tour_name; ?></strong><br />
                  <br /><?php echo $tour_desc; ?>                  
				</td>
			
			  <?php } } ?>			
			 </tr>
			<tr>
			<?php //singleTon::debugerr($arrayFormLatest);

			foreach($arrayFormLatest as $latest) {	?>						
			
                <td height="62" align="left" valign="middle" class="lbut"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="6%" align="left" valign="middle">&nbsp;</td>
                    <td width="94%" align="left" valign="middle" ><a class="wtxt" href='javascript:void(0);' onclick="callingpage('<?php echo base64_encode($latest[tour_id]); ?>');"><?php echo $latest[tour_code]; ?></a></td>
                  </tr>
                </table></td>

			<?php } ?>
			</tr>

            </table>              </td>

            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
        <td width="0%" align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      

	   <tr>

	   <?php
		
		$conWhere		=	" WHERE plan_status = '1' AND thumb_path != '' ORDER BY rand()";

		$result			=	SingleTon::selectQuery("tour_id,thumb_path","$conWhere",TABLE_PLAN,MY_ASSOC,NOR_YES);
		
		$num_rows = $result[0];
			
			//exit(0);

			
		?>
        <td align="left" valign="top" class="txt">&nbsp;</td>
        <td align="left" valign="top" class="txt">
<link rel="stylesheet" href="css/multimedia.css" type="text/css" media="screen" /> 
<script type="text/javascript" src='js/multimedia.js'></script>
<table class='tabstyle' border=0 height>
<tr>
<td><img src='./fancy-left.png' style='' onclick='previous()'></td><td>
<div class=view id=frm>
<ul class="thumbnail">
	<?php if($num_rows > 0) {

				foreach($result[1] as $pathVal){ ?>
	<li><a href='javascript:void(0);' onclick="callingpage('<?php echo base64_encode($pathVal[tour_id]); ?>');"><img src="<?php echo 'controlend/'.$pathVal[thumb_path]; ?>" width="174" height="142" /></a></li>
		<?php }  } ?>
</td>
<td><img src='./fancy-right.png' style='' onclick='next()'></td>
</tr>
</table><br><br>
<iframe frameborder=1 id='ebox1' width=100% height=100% bgcolor=#efefef style='display: none; position:absolute; top: 0px; left: 0px;filter:alpha(opacity=0.5);-moz-opacity: 0.5;opacity: 0.5;background-color: #efefef;'> 
</iframe>

<div id='res' align=center style='padding-left: 375px; display:none; position: absolute;'>
<table><tr>
<td align=center style='background-color: black;'>
<img src='./close-button.png' id='close' style='cursor: pointer;float: right;' align='absmiddle'>
<div id='img_preview'>
<img></img></div>
</td></tr>
</table></td>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr> 	  
    </table></td>
  </tr>
  <?php require_once('footer.php'); ?>