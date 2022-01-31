<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>

<!-- RS5.0 Core JS Files -->
<script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0') }}"></script>
<script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src='{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}'></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<!-- RS Configration JS Files -->
<script src="{{ asset('assets/js/rsconfig.js') }}"></script>

<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+1323688741", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>

<script type="text/javascript">
    baseUrl = "https://widgets.cryptocompare.com/";
    var scripts = document.getElementsByTagName("script");
    var embedder = scripts[scripts.length - 1];
    var cccTheme = {
        "General": {
            "background": "#000",
            "priceText": "#fff",
            "enableMarquee": true
        },
        "Currency": {
            "color": "#fff"
        }
    };
    (function() {
        var appName = encodeURIComponent(window.location.hostname);
        if (appName == "") {
            appName = "local";
        }
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        var theUrl = baseUrl + 'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=USD,EUR,CNY,GBP';
        s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
        embedder.parentNode.appendChild(s);
    })();
</script>
