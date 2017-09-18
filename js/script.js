//teletype eklentisi
   
	$( function() {
		$("#scrollbar").css("width","0px");
        $( '.type-text2' ).teletype( {
            text: [ 'EĞİTİME BAŞLA' ],
            typeDelay: 160,
            backDelay: 50,
			delay:7000,
			humanise:false
        } );
		$( '.sqlinjection' ).teletype( {
            text: [ 'SQL INJECTION EĞİTİMİNE BAŞLA' ],
            typeDelay: 160,
            backDelay: 50,
			delay:7000,
			humanise:false
        } );
		$( '.xsscross' ).teletype( {
			text: [ 'XSS CROSS SITE SCRIPTING EĞİTİMİNE BAŞLA' ],
			typeDelay: 160,
            backDelay: 50,
			delay:7000,
			humanise:false
        } );
		$( '.commandtext' ).teletype( {
            text: [ 'COMMAND INJECTION EĞİTİMİNE BAŞLA' ],
            typeDelay: 160,
            backDelay: 50,
			delay:7000,
			humanise:false
        } );
    } );
	
	$(window).scroll(function(){
		var height = $(this).scrollTop();
		var bodyheight = $("body").height();
		var pencereheight = $(document).height();
		var pencerewidth = $(document).width();
		var ratio = pencerewidth/(pencereheight-bodyheight)
		var yuzde = (1/ratio)*(pencerewidth)/100;
		console.log("ratio: "+ratio);
		console.log("height "+height);
		console.log("body "+bodyheight);
		console.log("pencereheight "+pencereheight);
		console.log("yuzde "+yuzde);
		var yeniyuzde = yuzde+0;
		
		if(height > 50){
		$("#scrollbar").css("width",yeniyuzde+"%");
		
		}else{
		
		$("#scrollbar").css("width","0px");
		
		}
			
		
		});