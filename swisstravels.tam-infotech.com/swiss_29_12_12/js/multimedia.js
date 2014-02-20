$(document).ready(function(){
      	var totalImages = $('#frm ul').children('li').length,
        imageWidth= 200,
			totalWidth = imageWidth * totalImages,
			visibleImages = Math.round($("#frm").width() / imageWidth),
			visibleWidth = visibleImages * imageWidth,
			stopPosition = (visibleWidth - totalWidth);
			$("#frm ul").width(totalWidth);                               
 var elements = $('#frm ul').children('li').length;
 var previewImg;
 
 $("ul.thumbnail li").each(function (i) {
       previewImg = $('ul.thumbnail a').eq(i).attr('name');
       startImg = $('ul.thumbnail a').eq(i).attr('id');
       //alert(previewImg);
       if(previewImg.toLowerCase().indexOf('.mp3') > 0) {
	$('ul.thumbnail a').eq(i).append("\
       <embed src='./multimedia-portfolio/player_mp3.swf?mp3="+previewImg+"&amp;showstop=1' style='margin-top: 90px; background: url(./multimedia-portfolio/menu_bg.gif) repeat-x; vertical-align: bottom;' height='85' width='150' wmode='transparent' showstop=1 quality='high' type='application/x-shockwave-flash' showTracker=\"true\"></embed>");
       }
       else if(previewImg.toLowerCase().indexOf('.flv') > 0){
                $('ul.thumbnail a').eq(i).append("<object type='application/x-shockwave-flash' data='./multimedia-portfolio/player_flv_maxi.swf' width='150' height='150' title='' >\
		<param name='movie' value='./multimedia-portfolio/player_flv_maxi.swf' />\
		<param name='FlashVars' value='flv="+previewImg+"&amp;bgcolor2=yellow&amp;startimage="+startImg+"' />\
		<param name='wmode' value='transparent' /><param name='scale' value='showall'/>\
		</object>");
       }
       else if(previewImg.toLowerCase().indexOf('.swf') > 0){
              $('ul.thumbnail a').eq(i).append("<embed src='"+previewImg+"' FlashVars='itemId=1.1' quality='high' type='application/x-shockwave-flash' width=170 height=145 allowfullscreen=\"true\" bgcolor=#000000 />");
       }
 });
 
 $("ul.thumbnail li img").click(function()
 {
    var previewImg = $(this).attr("src");
    document.getElementById('frm').style.zIndex=100;
   document.getElementById('ebox1').style.zIndex=200;
   document.getElementById('res').style.zIndex=2000;
    lightBox(previewImg);            
 });
 
 $("#close").click(function()
    {
	 $('#res').css("display", "none");
         $('#ebox1').css("display", "none");
    }); 

});
 
function lightBox(previewImg){
	var browserName=navigator.appName;
	var left_align = 150;
	var top_align = 190; 
	$('#res').css("display", "block");
        $('#ebox1').css("display", "block");
        $("#img_preview img").attr({ src: previewImg }).fadeIn;	
	 if(browserName == "Netscape"){
          var sleft = document.documentElement.scrollLeft;
          var stop = document.documentElement.scrollTop;  
          document.getElementById('ebox1').style.height=document.body.offsetHeight+"px";
	  document.getElementById('res').style.position = "fixed";
	}else{
	  var sleft = window.pageXOffset || document.body.scrollLeft || document.documentElement.scrollLeft;
	  var stop = window.pageYOffset || document.body.scrollTop || document.documentElement.scrollTop;
          document.getElementById('ebox1').style.height = document.body.clientHeight+"px";
          document.getElementById('ebox1').style.width = document.body.clientWidth+"px";
          window.onscroll=mveditbox;
       }          
   var top_pos = stop+top_align;
   document.getElementById('res').style.top= top_pos+"px";
   document.getElementById('res').style.left= left_align+"px";   
   return false;
}

function mveditbox(){
   var stop =window.pageYOffset || document.body.scrollTop || document.documentElement.scrollTop;
   document.getElementById('ebox1').style.top=stop+"px";
   var tot = stop+top_align;
   document.getElementById('res').style.top= tot+"px";
}
 
function next()
{
       var totalImages = $('#frm ul').children('li').length,
        imageWidth= 210,
			totalWidth = imageWidth * totalImages,
			visibleImages = Math.round($("#frm").width() / imageWidth),
			visibleWidth = visibleImages * imageWidth,
			stopPosition = (visibleWidth - totalWidth);
			$("#frm ul").width(totalWidth);
		  	 
     	  if($("#frm ul").position().left > stopPosition && !$("#frm ul").is(":animated")){
	       	$("#frm ul").animate({left : "-=" + imageWidth + "px"});       
          }
 }
 function previous()
	   {
        var imageWidth1= 210;
		 	   if($("#frm ul").position().left < 0 && !$("#frm ul").is(":animated")){
				$("#frm ul").animate({left : "+=" + imageWidth1+ "px"});
		
       
     }
	   }