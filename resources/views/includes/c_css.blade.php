<meta charset="utf-8">
{{-- <meta name="author" content="{{ config("app.name") }}"> --}}

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<link rel="shortcut icon" type="image/png" href="{{ asset("assets/images/home/master/favicon.png") }}"/>
<link rel="stylesheet" href="{{ asset("assets/css/dashboard/dashlite.css") }}">
<link id="skin-default" rel="stylesheet" href="{{ asset("assets/css/dashboard/theme.css") }}">
<link rel="shortcut icon" type="image/png" href="{{ asset("assets/images/home/logo/ProStack_favicon.png") }}"/>
<meta name="description" content=""/>
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
  var _smartsupp = _smartsupp || {};
  _smartsupp.key = '678c0737843fa28edfca0ee319a2489bb8d9fd37';
  window.smartsupp||(function(d) {
    var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
    s=d.getElementsByTagName('script')[0];c=d.createElement('script');
    c.type='text/javascript';c.charset='utf-8';c.async=true;
    c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
  })(document);
  </script>
  

  <style>
    .processing{
      color: #3B9AFF !important;
    }

    .completed,.approve{
      color: #50B767 !important;
    }

    .cancled,.decline{
      color: #E6707B !important;
    }
  </style>