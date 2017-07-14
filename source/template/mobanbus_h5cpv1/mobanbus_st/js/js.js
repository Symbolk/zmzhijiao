// 模板巴士
//Power By diesto
function lazyload(option){
	var settings={
		defObj:null,
		defHeight:0
	};
	settings=jQuery.extend(settings,option||{});
	var defHeight=settings.defHeight,defObj=(typeof settings.defObj=="object")?settings.defObj.find("img"):jQuery(settings.defObj).find("img");
	var pageTop=function(){
		return document.documentElement.clientHeight+Math.max(document.documentElement.scrollTop,document.body.scrollTop)-settings.defHeight;
	};
	var imgLoad=function(){
		defObj.each(function(){				
			if (jQuery(this).offset().top<=pageTop()){
				var src2=jQuery(this).attr("src2");
				if (src2){
					jQuery(this).attr("src",src2).removeAttr("src2");
				}
			}
		});
	};
	imgLoad();
	jQuery(window).bind("scroll",function(){			
		imgLoad();
	});
}
lazyload({
	defObj:".mobanbus"
});