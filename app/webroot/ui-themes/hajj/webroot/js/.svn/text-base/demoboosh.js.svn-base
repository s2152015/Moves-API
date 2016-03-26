//Define Template URL
var url = 'http://smoothboosh.dev/';

//Read the cookie
function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

//Create the cookie
function changeSkin(name,value) {
	document.cookie = name+"="+value;
}

    //Style
    var styleStyle = readCookie('cookieStyle');
    if(!styleStyle) {
        document.writeln('<link rel="stylesheet" type="text/css" href="css/style.css">');
    } else {
	    var styleStyle = 'css/' + styleStyle;	
        document.writeln('<link rel="stylesheet" type="text/css" href="css/style.css">');
        document.writeln('<link rel="stylesheet" type="text/css" href="' + styleStyle + '">');
        //$('#logo img').attr('src') = 'images/logo1.png';
        
    }

$(document).ready(function() {
    var styleStyle = readCookie('cookieStyle');
    if(styleStyle) {
        $('body').addClass('blk');
        $('#logo img').attr('src', 'images/logo1.png');
        $('.jquery').attr('src', 'images/drk-jquery.png');
    }       

    //Buttons
    var styleButtons = readCookie('cookieButtons');
    if(styleButtons) {
	    $('#wrap').addClass(styleButtons);
    }

    //Header
    var styleHeader = readCookie('cookieHeader');
    if(styleHeader) {
        $('#backgroundtheme').addClass(styleHeader);
    }
});


/*
//Footer
var styleFooter = readCookie('cookieFooter');
if(!styleFooter) {
	var styleFooter = url + 'layout/css/footer/footerLight.css';
} else {
	var styleFooter = url + 'layout/css/footer/' + styleFooter;	
}
document.writeln('<link rel="stylesheet" type="text/css" href="' + styleFooter + '">');
*/