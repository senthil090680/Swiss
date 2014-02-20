function beforeCreateChatBox(path_info,chatuserid) {
		var chattitlename	=	'hello';
		$(" <div />" ).attr("id","confirmPrivateMessage"+chatuserid)
		.addClass("confirmMessage")
		.html('<div ><p class="closepbox"> <label class="closexbox"><a class="closelink" href="javascript:void(0)" onclick="javascript:return closePrivateConfirm(this,\''+chatuserid+'\');"><b><img src="images/round_red_close_button.jpg" /></b></a></label></p><p style="font-size:11px;"><img src='+path_info+' width="580" height="380" /></p><div style="clear:both"></div></div><div style="display:block;display:inline;padding-left:20px;padding-right:80px;" ><a class="firstlink" href="javascript:void(0)" onclick="javascript:return confirmChatHeartBeat(this,\''+chatuserid+'\');"><img src="resource/images/accept.png" /></a></div>&nbsp;&nbsp;<div style="display:inline;"  ><a class="secondlink" href="javascript:void(0)" onclick="javascript:return busyPrivateConfirmBox(this,\''+chatuserid+'\');"><img src="resource/images/busy.png" /></a><br/><br/></div>').appendTo($( "body" ));
		
		$("#confirmPrivateMessage"+chatuserid).css("display","block");
		$("#backgroundChatPopup").css({"opacity": "0.7"});
		$("#backgroundChatPopup").fadeIn("slow");
}

function closePrivateConfirm(abc,userid) {
	$("#backgroundChatPopup").fadeOut("slow");
	$("#confirmPrivateMessage"+userid).css('display','none');
}