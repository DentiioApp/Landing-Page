<!-- Hotjar Tracking Code for www.dentiio.fr -->
(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:1774754,hjsv:6};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


function loadAnalytics(){
    $.getScript( "https://www.googletagmanager.com/gtag/js?id=UA-164245385-1", function( data, textStatus, jqxhr ) {
        console.log( textStatus ); // Success
    });

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-164245385-1');
}

function acceptCookies() {
    var date = new Date();
    date.setTime(date.getTime() + (365*24*60*60*1000));
    expires = "; expires=" + date.toUTCString();
    document.cookie = "accept_cookies" + "=" + ( true || "")  + expires + "; path=/";
    document.getElementById('banner-cookie').style.display = "none";
    loadAnalytics();
}
function refuseCookies() {
    var date = new Date();
    date.setTime(date.getTime() + (15*24*60*60*1000));
    expires = "; expires=" + date.toUTCString();
    document.cookie = "accept_cookies" + "=" + ( false || "")  + expires + "; path=/";

    document.getElementById('banner-cookie').style.display = "none";

}


if (getCookie("accept_cookies") === "true"){
    console.log(getCookie("accept_cookies"));
    loadAnalytics();
}
