<?php 
  session_start();
    if (isset($_POST['welcome'])) {
      require 'db_conex.php';

      $email=$_POST['email'];
      $pass=$_POST['pass'];

      $query=$cnnPDO->prepare('SELECT * from bd_cafe WHERE email=:email and pass=:pass');

      $query->bindParam(':email',$email);
      $query->bindParam(':pass',$pass);

      $query->execute();

      $count=$query->rowCount();
      $campo = $query->fetch();
     
      if ($count) 
      {
        $_SESSION['Nombres'] = $campo['Nombres'];
        $_SESSION['Apellidos'] = $campo['Apellidos'];
        $_SESSION['email'] = $campo['email'];
        $_SESSION['pass'] = $campo['pass'];
        $_SESSION['cpass'] = $campo['cpass'];
        $_SESSION['RFC'] = $campo['RFC'];
        $_SESSION['Direccion'] = $campo['Direccion'];
        header("Location:usuario.php");
}
}
?>
<!doctype html>
<!--[if IE 9]> <html class="ie9 no-js supports-no-cookies" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]-->
<html class="no-js supports-no-cookies " lang="en">
  <head>
    <!-- Basic and Helper page needs -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#222222">
    <link rel="canonical" href="https://labella-store-coffee.myshopify.com/account/login"><link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/0557/1965/7630/files/favicon_32x32.png?v=1630567860" type="image/png" /><!-- Title and description -->
    
    <title>
    Iniciar Sessión
    
    
    </title><!-- Helpers -->
    <!-- /snippets/social-meta-tags.liquid -->


  <meta property="og:type" content="website">
  <meta property="og:title" content="Account">
  <meta name="twitter:card" content="summary">



    <!-- CSS -->
    <link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/timber.scss.css?v=108634357225618580301656113963" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/bootstrap.min.css?v=66654331482714394831617597736" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/animate.min.css?v=169615475114364703181617597734" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/font-awesome.min.css?v=21869632697367095781617597740" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/slick.css?v=98340474046176884051617597763" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/owl.carousel.min.css?v=70516089817612781961617597757" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/owl.theme.default.min.css?v=135046118358282713361617597758" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/swiper.min.css?v=168954572340863736781617597764" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/themify-icons.css?v=17828378678609318721617597767" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/simple-line-icons.css?v=49402511247700599821617597760" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/ionicons.min.css?v=184364306120675196201617597750" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/plugins.css?v=104516409424669372401617597758" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/magnific-popup.css?v=52593353302364675501617597755" rel="stylesheet" type="text/css" media="all" />

<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/theme-default.css?v=97773438547344552751617597766" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/cart.api.css?v=11854453784134112241617708479" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/style.css?v=106645346863384282091620893460" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/theme-custom.css?v=5053947515441097001617597766" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/theme-responsive.css?v=118839616431396979691617597766" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/skin-theme.css?v=118712774603256485051631773750" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/theme-color.css?v=4441136674806530721620893838" rel="stylesheet" type="text/css" media="all" />


<!-- Header hook for plugins -->
    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/55719657630/digital_wallets/dialog">
<script id="shopify-features" type="application/json">{"accessToken":"d08fb5c33b9900cbb32e58e77cc7f9b4","betas":["rich-media-storefront-analytics"],"domain":"labella-store-coffee.myshopify.com","predictiveSearch":true,"shopId":55719657630,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js?v=2","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js?v=2","locale":"en"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "labella-store-coffee.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"GBP","rate":"1.0"};
Shopify.country = "GB";
Shopify.theme = {"name":"labella coffee","id":121472221342,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "cdn.shopify.com";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/embed\/loader.js?shop=labella-store-coffee.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":55719657630,"offset":19800,"reqid":"e172180b-9e27-4a62-93dc-7f39993791c9","pageurl":"labella-store-coffee.myshopify.com\/account\/login","u":"196874f55796"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
<script integrity="sha256-qzgBevPPdZ2wrwu9HnUin2oYn1vx8ttCFpYwmYuWkCE=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-ab38017af3cf759db0af0bbd1e75229f6a189f5bf1f2db42169630998b969021.js" crossorigin="anonymous"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>


<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
    <!-- /snippets/oldIE-js.liquid -->


<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/respond.min.js?v=52248677837542619231617597760" type="text/javascript"></script>
<link href="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
<link href="//labella-store-coffee.myshopify.com/search?q=9c507b0526f1202cc72e77fdb34ed6dc" id="respond-redirect" rel="respond-redirect" />
<script src="//labella-store-coffee.myshopify.com/search?q=9c507b0526f1202cc72e77fdb34ed6dc" type="text/javascript"></script>
<![endif]-->


    <!-- JS --><script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/modernizr-2.8.3.min.js?v=174727525422211915231617597756"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/jquery-1.12.0.min.js?v=180303338299147220221617597751"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/popper.min.js?v=183925064573163857831617597759"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/bootstrap.min.js?v=137179542109231419321617597737"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/plugins.js?v=97052848807353690521617597759"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/jquery.elevateZoom-3.0.8.min.js?v=123299089282303306721617597752"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/slick.min.js?v=71779134894361685811617597763"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/owl.carousel.min.js?v=97891440811553454251617597758"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/swiper.min.js?v=125509845551321791351617597765"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/elevatezoom.js?v=168016520294856791651617597739"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/instafeed.min.js?v=14758435275696030451617597750"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/jquery.magnific-popup.min.js?v=62953174224872963371617597753"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/jquery.lazyload.min.js?v=52017726365333097691617597753"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/imagesloaded.pkgd.min.js?v=58209854333173575541617597749"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/jquery.isotope.min.js?v=91911861347149225011617597753"></script>
<!-- Ajax Cart js -->
<script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-9f517843f664ad329c689020fb1e45d03cac979f64b9eb1651ea32858b0ff452.js"></script>
<script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/cart.api.js?v=107944456663985809791617597738"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/counter.js?v=91558200207281618801617597739"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/jquery.countTo.js?v=114738705482761559801617597752"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/main.js?v=43716673983012734641617597755"></script>

    <script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js" type="text/javascript"></script>
    

<script>window.BOLD = window.BOLD || {};
    window.BOLD.common = window.BOLD.common || {};
    window.BOLD.common.Shopify = window.BOLD.common.Shopify || {};
    window.BOLD.common.Shopify.shop = {
      domain: 'labella-store-coffee.myshopify.com',
      permanent_domain: 'labella-store-coffee.myshopify.com',
      url: 'https://labella-store-coffee.myshopify.com',
      secure_url: 'https://labella-store-coffee.myshopify.com',
      money_format: "\u003cspan class=money\u003e£{{amount}}\u003c\/span\u003e",
      currency: "GBP"
    };
    window.BOLD.common.Shopify.customer = {
      id: null,
      tags: null,
    };
    window.BOLD.common.Shopify.cart = {"note":null,"attributes":{},"original_total_price":0,"total_price":0,"total_discount":0,"total_weight":0.0,"item_count":0,"items":[],"requires_shipping":false,"currency":"GBP","items_subtotal_price":0,"cart_level_discount_applications":[]};
    window.BOLD.common.template = 'customers/login';window.BOLD.common.Shopify.formatMoney = function(money, format) {
        function n(t, e) {
            return "undefined" == typeof t ? e : t
        }
        function r(t, e, r, i) {
            if (e = n(e, 2),
                r = n(r, ","),
                i = n(i, "."),
            isNaN(t) || null == t)
                return 0;
            t = (t / 100).toFixed(e);
            var o = t.split(".")
                , a = o[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + r)
                , s = o[1] ? i + o[1] : "";
            return a + s
        }
        "string" == typeof money && (money = money.replace(".", ""));
        var i = ""
            , o = /\{\{\s*(\w+)\s*\}\}/
            , a = format || window.BOLD.common.Shopify.shop.money_format || window.Shopify.money_format || "$ {{ amount }}";
        switch (a.match(o)[1]) {
            case "amount":
                i = r(money, 2, ",", ".");
                break;
            case "amount_no_decimals":
                i = r(money, 0, ",", ".");
                break;
            case "amount_with_comma_separator":
                i = r(money, 2, ".", ",");
                break;
            case "amount_no_decimals_with_comma_separator":
                i = r(money, 0, ".", ",");
                break;
            case "amount_with_space_separator":
                i = r(money, 2, " ", ",");
                break;
            case "amount_no_decimals_with_space_separator":
                i = r(money, 0, " ", ",");
                break;
            case "amount_with_apostrophe_separator":
                i = r(money, 2, "'", ".");
                break;
        }
        return a.replace(o, i);
    };
    window.BOLD.common.Shopify.saveProduct = function (handle, product) {
      if (typeof handle === 'string' && typeof window.BOLD.common.Shopify.products[handle] === 'undefined') {
        if (typeof product === 'number') {
          window.BOLD.common.Shopify.handles[product] = handle;
          product = { id: product };
        }
        window.BOLD.common.Shopify.products[handle] = product;
      }
    };
    window.BOLD.common.Shopify.saveVariant = function (variant_id, variant) {
      if (typeof variant_id === 'number' && typeof window.BOLD.common.Shopify.variants[variant_id] === 'undefined') {
        window.BOLD.common.Shopify.variants[variant_id] = variant;
      }
    };window.BOLD.common.Shopify.products = window.BOLD.common.Shopify.products || {};
    window.BOLD.common.Shopify.variants = window.BOLD.common.Shopify.variants || {};
    window.BOLD.common.Shopify.handles = window.BOLD.common.Shopify.handles || {};window.BOLD.common.Shopify.saveProduct(null, null);window.BOLD.apps_installed = {} || {};window.BOLD.common.Shopify.metafields = window.BOLD.common.Shopify.metafields || {};window.BOLD.common.Shopify.metafields["bold_rp"] = {};window.BOLD.common.Shopify.metafields["bold_csp_defaults"] = {};window.BOLD.common.cacheParams = window.BOLD.common.cacheParams || {};
</script><link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 55719657630,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "customers/login"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'GBP';
var meta = {"page":{}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var hasLoggedConversion = function(token) {
    if (token) {
      return document.cookie.indexOf('loggedConversion=' + token) !== -1;
    }
    return false;
  }

  var setCookieIfConversion = function(token) {
    if (token) {
      var twoMonthsFromNow = new Date(Date.now());
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config || {};
    trekkie.config.initialDocumentCookie = document.cookie;
    var first = document.getElementsByTagName('script')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      var scriptFallback = document.createElement('script');
      scriptFallback.type = 'text/javascript';
      scriptFallback.onerror = function(error) {
              var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });
    
          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful
    
        } // XHR beacon   
    
        var xhr = new XMLHttpRequest();
    
        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }
    
        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 55719657630,
      theme_id: 121472221342,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https://cdn.shopify.com/s/trekkie.storefront.e695302c3cd17296c85e559451c496db44e32e17.min.js"});

      };
      scriptFallback.async = true;
      scriptFallback.src = 'https://cdn.shopify.com/s/trekkie.storefront.e695302c3cd17296c85e559451c496db44e32e17.min.js';
      first.parentNode.insertBefore(scriptFallback, first);
    };
    script.async = true;
    script.src = 'https://cdn.shopify.com/s/trekkie.storefront.e695302c3cd17296c85e559451c496db44e32e17.min.js';
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":55719657630,"isMerchantRequest":null,"themeId":121472221342,"themeCityHash":"8646901673841484282","contentLanguage":"en","currency":"GBP"},"isServerSideCookieWritingEnabled":true},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer"}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    window.ShopifyAnalytics.lib.page(null,{});

    var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
    var token = match? match[1]: undefined;
    if (!hasLoggedConversion(token)) {
      setCookieIfConversion(token);
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "";
  window.BOOMR.themeVersion = "";
  window.BOOMR.shopId = 55719657630;
  window.BOOMR.themeId = 121472221342;
  window.BOOMR.renderRegion = "gcp-us-east1";
  window.BOOMR.url =
    "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
          ResourceTiming: {
            enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
<script id="web-pixels-manager-publish">
  window.Shopify = window.Shopify || {};
  window.Shopify.analytics = window.Shopify.analytics || {};
  window.Shopify.analytics.replayQueue = [];
  window.Shopify.analytics.publish = function publish(eventName, payload, options) {
    window.Shopify.analytics.replayQueue.push([eventName, payload, options]);
  }
</script>
<script id="web-pixels-manager-setup-esm" type="module">
  import webPixelsManager from "https://cdn.shopify.com/shopifycloud/web-pixels-manager/0.0.164/esm/browser.js";
const webPixelsManagerAPI = webPixelsManager.init({
  shopId: 55719657630,
  storefrontBaseUrl: "https://labella-store-coffee.myshopify.com",
  cdnBaseUrl: "https://cdn.shopify.com",
  surface: "storefront-renderer",
  webPixelExtensionBaseUrl: "https://cdn.shopify.com",
  webPixelsConfigList: [],
  initData: {"customer":null,"cart":null,"productVariants":[],"checkout":null},
});
window.Shopify.analytics.replayQueue.forEach(function(event) {
  webPixelsManagerAPI.publishCustomEvent(event[0], event[1], event[2]);
});
window.Shopify.analytics.replayQueue = [];
window.Shopify.analytics.publish = webPixelsManagerAPI.publishCustomEvent;
webPixelsManagerAPI.publish("page_viewed");

</script>
<script id="web-pixels-manager-setup-legacy" nomodule>
  (function setup(initConfig, pageEvents, web_pixels_manager_asset_url) {
  var script = document.createElement("script");
  script.setAttribute("src", web_pixels_manager_asset_url);
  script.setAttribute("async", true);
  var head = document.getElementsByTagName("head")[0];
  head.appendChild(script);
  script.onload = function onload() {
    var webPixelsManagerAPI = window.webPixelsManager.init(initConfig);
    pageEvents(webPixelsManagerAPI);
    window.Shopify.analytics.replayQueue.forEach(function(event) {
      webPixelsManagerAPI.publishCustomEvent(event[0], event[1], event[2]);
    });
    window.Shopify.analytics.publish = webPixelsManagerAPI.publishCustomEvent;
  };
}
)(
  {
    shopId: 55719657630,
    storefrontBaseUrl: "https://labella-store-coffee.myshopify.com",
    cdnBaseUrl: "https://cdn.shopify.com",
    surface: "storefront-renderer",
    webPixelExtensionBaseUrl: "https://cdn.shopify.com",
    webPixelsConfigList: [],
    initData: {"customer":null,"cart":null,"productVariants":[],"checkout":null},
  },
  function pageEvents(webPixelsManagerAPI) {
    webPixelsManagerAPI.publish("page_viewed");
  },
  "https://cdn.shopify.com/shopifycloud/web-pixels-manager/0.0.164/iife/browser.js"
);

</script>
</head>
  <body id="account" class="template-login">
<div class="popup_wrapper" id="one-time-newsletter">
  <div class="modal fade" id="newsModal">
    <div class="newsletter_popup_inner modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal"><i class="ti-close"></i></button>
          <div class="newsletter-info">
            <div class="newsletter-image" style="background-image: url('//cdn.shopify.com/s/files/1/0557/1965/7630/files/popup.jpg?v=1617771134');">
            </div>
            <div class="subscribe_area">
              <div class="subscribe-heading">
                <h2>Newsletter</h2>
                <p>Sign up here to get 20% off on your next purchase, special offers and other discount information.</p>
              </div>
              <div class="popup-newsletter"><div class="news-content">
  <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
  
  
  <input type="hidden" name="contact[tags]" value="newsletter">
  <div class="subscribe-block">
    <input type="email" name="contact[email]" class="email mail" id="E-mail" value="" placeholder="Enter Your Email ID" autocapitalize="off">
    <div class="email-submit">
      <button type="submit" class="btn btn-style2 newsletter-btn" name="commit" id="Subscribe">Subscribe</button>
      <button type="submit" class="newsletter-icon-btn" name="commit" id="Subscribe"><i class="fa fa-paper-plane"></i></button>
    </div>
  </div>
  </form>
</div>
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .popup_wrapper .modal{
    display: none!important;
  }
  .popup_wrapper .modal.show{
    display: flex!important;
    align-items: center;
    justify-content: center;
  }
  .popup_wrapper .modal-dialog{
    max-width: 700px;
  }
  .popup_wrapper .modal-content{
    border: none;
    border-radius: 5px;
    overflow: hidden;
  }
  .popup_wrapper .modal-body{
    padding: 0px;
  }
  .popup_wrapper .modal-body button.close{
    float: none;
    color: #ffffff;
    font-size: 14px;
    position: absolute;
    top: 0px;
    
    right: 0px;
    
    height: 30px;
    width: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #53a16e;
    text-shadow: none;
    opacity: 1;
  }
  .popup_wrapper .modal-body button.close:hover{
    opacity: 1;
    color: #ffffff;
    background-color: #222222;
  }
  .popup_wrapper .newsletter-info{
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 700px;
  }
  .popup_wrapper .newsletter-info .newsletter-image{
    width: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    min-height: 460px;
  }
  .popup_wrapper .newsletter-info .subscribe_area{
    width: 50%;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .newsletter-info .subscribe_area .subscribe-heading h2{
    color: #333333;
    font-size: 44px;
    text-transform: capitalize;
    font-weight: 900;
    line-height: 1;
  }
  .newsletter-info .subscribe_area .subscribe-heading p{
    font-size: 16px;
    margin-top: 16px;
  }
  .newsletter-info .subscribe_area .popup-newsletter{
    margin-top: 23px;
  }
  .newsletter-info .subscribe_area .popup-newsletter .news-content p.text-success{
    font-size: 16px;
    margin: -7px 0 15px;
  }
  .newsletter-info .subscribe_area .popup-newsletter .news-content p.text-success span.subsribe-text span.subsribe-code{
    text-decoration: underline;
  }
  .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input{
    height: 50px;
    width: 100%;
    border: 1px solid #e2e2e2;
  }
  .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input::-webkit-input-placeholder,
  .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input::-moz-placeholder,
  .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input::-ms-input-placeholder,
  .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input::placeholder{
    color: #000000;
  }
  .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block .email-submit{
    margin-top: 20px;
  }
  .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block .email-submit button.newsletter-icon-btn{
    display: none;
  }
  @media (max-width : 1199px) {
    .newsletter-info .subscribe_area .subscribe-heading h2{
      font-size: 30px;
    }
    .newsletter-info .subscribe_area .popup-newsletter{
      margin-top: 21px;
    }
  }
  @media (max-width : 767px) {
    .popup_wrapper .modal-dialog{
      max-width: 100%;
      margin: 15px;
    }
    .popup_wrapper .newsletter-info{
      flex-direction: column;
      width: 100%;
    }
    .popup_wrapper .newsletter-info .newsletter-image{
      display: none;
      width: 100%;
    }
    .popup_wrapper .newsletter-info .subscribe_area{
      width: 100%;
    }
    .newsletter-info .subscribe_area .subscribe-heading h2{
      font-size: 20px;
    }
    .newsletter-info .subscribe_area .subscribe-heading p{
      margin-top: 10px;
    }
  }
</style>
</div>
          </li>   
        </ul>
      </div>
    </div>
  </div>
</section>
<style>
  /* top notification bar css */
  .top-notification-bar{
    position: relative;
    
    
    background-color: #222222;
    
    
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    z-index: 4;
  }
  .top-notification-bar ul.notification-entry{
    display: flex;
    justify-content: space-between;
  }
  .top-notification-bar ul li.notify-wrap{
    display: flex;
  }
  .top-notification-bar ul li.notify-wrap .top-noci-cont{
    padding: 12px 30px 12px 30px;
    position: relative;
    cursor: pointer;
  }
  .top-notification-bar ul li.notify-wrap.noti-con .top-noci-cont{
    
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    
  }
  .top-notification-bar ul li.notify-wrap.noti-acc .top-noci-cont{
    
    border-left: 1px solid rgba(255, 255, 255, 0.2);
    
  }
  .top-notification-bar ul li.notify-wrap.noti-con .top-noci-cont:first-child{
    
    padding: 12px 30px 12px 0px;
    
  }
  .top-notification-bar ul li.notify-wrap.noti-acc .top-noci-cont:last-child{
    
    padding: 12px 0px 12px 30px;
    
  }
  .top-notification-bar ul li.notify-wrap .top-noci-cont a{
    color: #e5e5e5;
    font-size: 15px;
  }
  @media (max-width: 991px){
    .top-notification-bar ul li.notify-wrap .top-noci-cont.check-wrap,
    .top-notification-bar ul li.notify-wrap .top-noci-cont.help-wrap{
      display: none;
    }
    .top-notification-bar ul li.notify-wrap.noti-con .top-noci-cont:last-child{
      
      border-right: 1px solid rgba(255, 255, 255, 0.2);
      border-left: none;
      
    }
  }
  @media (max-width : 767px){
    .top-notification-bar ul li.notify-wrap .top-noci-cont.sale-wrap,
    .top-notification-bar ul li.notify-wrap .top-noci-cont.track-wrap{
      display: none;
    }
    .top-notification-bar ul li.notify-wrap.noti-con .top-noci-cont:first-child{
      
      padding: 12px 15px 12px 0px;
      
    }
    .top-notification-bar ul li.notify-wrap.noti-acc .top-noci-cont:last-child{
      
      padding: 12px 0px 12px 15px;
      
    }
  }

  /* currency css */
  .top-notification-bar .BOLD-mc-picker-mnt{
    position: unset;
  }
  .top-notification-bar .BOLD-mc-picker {
    height: auto;
  }
  .top-notification-bar .BOLD-mc-picker.open {
    width: auto;
  }
  .top-notification-bar .BOLD-mc-picker > .currencyList > .option:hover {
    background-color: #f5f5f5;
  }
  .top-notification-bar .BOLD-mc-picker > .currentCurrency{
    color: #e5e5e5;
    font-size: 15px;
    display: flex;
    align-items: center;
    
    padding: 0 15px 0 30px;
    
    width: auto;
    position: relative;
    border: none;
  }
  .top-notification-bar .BOLD-mc-picker > .currentCurrency,
  .top-notification-bar .BOLD-mc-picker > .currencyList > .option {
    height: auto;
    background-color: transparent;
    line-height: normal;
    box-shadow: none;
  }
  .top-notification-bar .BOLD-mc-picker > .currentCurrency > .chevron {
    
    right: 5px;
    
    top: 50%;
    margin-left: 0;
    display: none;
  }
  .top-notification-bar .BOLD-mc-picker > .currentCurrency::after {
    content: "\f107";
    font-family: FontAwesome;
    position: absolute;
    
    right: 0;
    
    bottom: 50%;
    transform: translateY(50%);
  }
  .top-notification-bar .BOLD-mc-picker-mnt[data-open="up"] > .BOLD-mc-picker > .currencyList {
    top: 100%;
    bottom: auto;
    
    left: 0;
    
  }
  .top-notification-bar .BOLD-mc-picker-mnt[data-open="down"] > .BOLD-mc-picker > .currencyList {
    bottom: auto;
    top: 31px;
  }  
  .top-notification-bar .BOLD-mc-picker > .currencyList::-webkit-scrollbar {
    width: 1px;
    background-color: #e2e2e2;
  }
  .top-notification-bar .BOLD-mc-picker > .currencyList {
    display: block!important;
    
    left: auto;
    right: 0;
    
    -webkit-transform: translateX(0%);
    transform: translateX(0%);
    padding: 0;
    width: 100%;
    background-color: #fff;
    max-height: 0;
    z-index: 2;
    border: none;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
  }
  .top-notification-bar .BOLD-mc-picker.open > .currencyList{
    max-height: 103px;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
  }
  .top-notification-bar .BOLD-mc-picker > .currencyList > .option {
    display: flex;
    align-items: center;
    color: #666666;
    font-size: 13px;
    
    padding: 10px 15px 10px 30px;
    
    width: 100%;
    border: 1px solid #e2e2e2;
    margin-top: -1px;
    
    text-align: left;
    
    line-height: 1;
  }
  .top-notification-bar .BOLD-mc-picker > .currencyList > .option:first-child{
    margin-top: 0;
  }
  .top-notification-bar .BOLD-mc-picker > .currentCurrency > .flag,
  .top-notification-bar .BOLD-mc-picker > .currencyList > .option > .flag{
    top: auto;
    
    left: 6px;
    
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
</style>

<div id="shopify-section-header" class="shopify-section"><!-- header-area start -->
<div class="header-kaj">
  <div class="header-area">
    <div class="header-main-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col header-col">
            <div class="header-main">
              <div class="header-element toggler-wrap">
                <button class="navbar-toggler" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
              </div>
              <div class="header-element search-wrap"><!-- /snippets/search-bar.liquid -->

<div class="search-rap">
  <a class="search-crap" data-toggle="collapse" href="#search-crap">
    <span class="search-svg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
    <span class="close-svg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
  </a>
  <div class="crap-search collapse" id="search-crap">
    <form action="/search" method="get" class="search-bar" role="search">
      <div class="form-search">
        <input type="hidden" name="type" value="product">
        <input type="hidden" name="options[unavailable_products]" value="show">
        <input type="hidden" name="options[prefix]" value="last">
        <input type="search" name="q" value="" placeholder="Search Product" id="search" class="input-text" aria-label="Search our store">
        <button class="search-btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
      </div>
    </form>
  </div>
</div>


<style>
  .search-rap a.search-crap{
    display: block;
    color: #fff;
    font-size: 24px;
    line-height: 0;
  }

  /* svg icon css */
  
  .search-rap a.search-crap svg{
    width: 24px;
    height: 24px;
  }
  

  .search-rap .form-search{
    position: relative;
  }
  .search-rap .form-search input.input-text{
    font-size: 15px;
    width: 100%;
    height: 45px;
    font-weight: 400;
  }
  .search-rap .form-search input.input-text::placeholder{
    color: #666666;
  }
  .search-rap .form-search button{
    font-size: 18px;
    color: #222;
    position: absolute;
    top: 0px;
    
    right: 0;
    
    height: 100%;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .search-rap .form-search button:hover{
    color: #53a16e;
  }

  /* svg icon css */
  
  .search-rap .form-search button svg{
    width: 18px;
    height: 18px;
  }
  
</style>
</div>
              <div class="header-element logo"><a href="/" class="theme-logo">
  <img src="//cdn.shopify.com/s/files/1/0557/1965/7630/files/coffee-logo.png?v=1630566019" alt="demo-store">
</a><style>
	.logo a.shop-name span {
	    color: #000;
	    font-size: 24px;
	    font-weight: 600;
	}
</style></div>             
              <div class="header-element right-block-box">
                <ul class="shop-element">
                  <li class="side-wrap user-wrap"><div class="acc-desk">
</div>
<style>
  .acc-desk{
    display: flex;
    align-items: center;
  }
  .acc-desk a.acc-ti{
    display: flex;
    align-items: center;
    position: relative;
  }
  .acc-desk a.acc-ti::after{
    display: none;
    content: "\f107";
    font-family: FontAwesome;
    position: absolute;
    
    right: 0;
    
    bottom: 50%;
    transform: translateY(50%);
  }
  .acc-desk a.acc-ti span.acc-icon{
    color: #fff;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    border: 2px solid #fff;
    border-radius: 100%;
    line-height: 0;
  }
  .acc-desk a.acc-ti span.acc-icon svg{
    width: 18px;
    height: 18px;
  }
  .acc-desk a.acc-ti span.acc-icon,
  .acc-desk a.acc-ti[aria-expanded="false"] span.acc-icon{}

  .acc-desk a.acc-ti:hover span.acc-icon,
  .acc-desk a.acc-ti[aria-expanded="true"] span.acc-icon{}

  .acc-desk a.acc-ti span.acc-icon,
  .acc-desk a.acc-ti:hover span.acc-icon{
    -webkit-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
  }
  
  .acc-desk .acc-re-lo{
    position: absolute;
    top: calc(100% + 30px);
    
    right: 0;
    
    width: 130px;
    background-color: #fff;
    border: 1px solid #e2e2e2;
    z-index: 2;
  }
  .acc-desk .acc-re-lo a{
    display: block;
    color: #222;
    font-size: 13px;
    padding: 10px 15px;
    
    text-align: right;
    
    border-top: 1px solid #e2e2e2;
  }
  .acc-desk .acc-re-lo a:first-child{
    border-top: none;
  }
  .acc-desk .acc-re-lo a:hover{
    background-color: #f5f5f5;
  }
  @media (max-width: 1199px) {
    .acc-desk .acc-re-lo{
      top: calc(100% + 15px);
    }
  }
  @media (max-width: 767px) {
    .acc-desk .acc-re-lo{
      
      left: 0;
      right: auto;
      
    }
    .acc-desk .acc-re-lo a{
      
      text-align: left;
      
    }
  }
</style></li>
                  <li class="side-wrap wishlist-wrap"><div class="wishlist">
    
    <a class="header-wishlist" href="/account/login" title="Wishlist">
        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></span>
        <span class="wishlist-counter">0</span>
    </a>    
    
</div>
<style>
    .wishlist{
        position: relative;
    }
    .wishlist a.header-wishlist{
        display: block;
        align-items: center;
        position: relative;
    }
    .wishlist a.header-wishlist span.wishlist-icon{
        display: block;
        color: #fff;
        font-size: 24px;
        
        padding-right: 5px;
        
        line-height: 0;
    }

    /* svg icon css */
    
    .wishlist a.header-wishlist span.wishlist-icon svg{
        width: 24px;
        height: 24px;
    }
    

    .wishlist a.header-wishlist:hover span.wishlist-icon{
        color: #fff;
    }
    .wishlist a.header-wishlist span.wishlist-counter{
        color: #fff;
        font-size: 12px;
        position: absolute;
        bottom: -5px;
        
        right: 0px;
        
        width: 16px;
        height: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #53a16e;
        border-radius: 100%;
        line-height: 1;
    }
    .wishlist a.header-wishlist span.wishlist-icon,
    .wishlist a.header-wishlist:hover span.wishlist-icon,
    .wishlist a.header-wishlist span.wishlist-counter,
    .wishlist a.header-wishlist:hover span.wishlist-counter{
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }
</style></li>
                  <li class="side-wrap cart-wrap">
                    

<div class="shopping-widget">
  <div class="shopping-cart">
    <a class="cart-count" data-toggle="collapse" href="#cart">
      <span class="cart-icon-wrap">
        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
        <span id="cart-total" class="bigcounter">0</span>
      </span>
      <span class="cart-detail">
        <span class="cart-title">My cart</span>
        <span id="cart-total" class="subtotal-price"><span class=money>£0.00</span></span>
      </span>
    </a>
    <div class="mini-cart collapse" id="cart">
    <!--<a href="javascript:void(0)" class="shopping-cart-close">
        <i class="ion-close-round"></i>
      </a> -->
      <div class="cart-tempty-title"  style="display:block;">
        <p>No products in the cart.</p>
        <ul class="cart-item-loop-empty">
          <li class="cart-item-empty">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></span>
            <a href="/collections/all" class="btn btn-style2">Continue shopping</a>
          </li>
        </ul>
      </div>
      <div class="cart-item-title"  style="display:none;">
        <p>
          <span class="cart-count-desc">There are</span>
          <span id="cart-total" class="cart-count-item bigcounter">0</span>
          <span class="cart-count-desc">products</span>
        </p>
      </div>
      <ul class="cart-item-loop"  style="display:none;">
        
      </ul>
      <ul class="subtotal-title-area"  style="display:none;">
        <li class="subtotal-info">
          <div class="subtotal-titles">
            <h3>Sub Total:</h3>
            <span id="cart-total" class="subtotal-price"><span class=money>£0.00</span></span>
          </div>
        </li>
        <li class="mini-cart-btns">
          <div class="cart-btns">
            <a href="/cart" class="btn btn-style2">View Cart</a>
            <a href="/checkout" class="btn btn-style2">Checkout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<style>
  .shopping-widget .shopping-cart{
    position: relative;
  }
  .shopping-widget .shopping-cart a{
    display: block;
    align-items: center;
  }
  .shopping-widget .shopping-cart a span.cart-icon-wrap{
    display: block;
    position: relative;
  }
  .shopping-widget .shopping-cart a span.cart-icon-wrap span.cart-icon{
    display: block;
    font-size: 24px;
    
    padding-right: 5px;
    
    line-height: 0;
  }
  
  /* svg icon css */
  
  .shopping-widget .shopping-cart a span.cart-icon-wrap span.cart-icon svg{
    width: 24px;
    height: 24px;
  }
  
  .shopping-widget .shopping-cart a span.cart-icon-wrap span.cart-icon,
  .shopping-widget .shopping-cart a[aria-expanded="false"] span.cart-icon-wrap span.cart-icon{
    color: #fff;
  }
  .shopping-widget .shopping-cart a:hover span.cart-icon-wrap span.cart-icon,
  .shopping-widget .shopping-cart a[aria-expanded="true"] span.cart-icon-wrap span.cart-icon{
    color: #fff;
  }
  .shopping-widget .shopping-cart a span.cart-icon-wrap span.bigcounter{
    color: #fff;
    font-size: 12px;
    position: absolute;
    bottom: -5px;
    
    right: 0px;
    
    width: 16px;
    height: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #53a16e;
    border-radius: 100%;
    line-height: 1;
  }
  .shopping-widget .shopping-cart a span.cart-icon-wrap span.bigcounter,
  .shopping-widget .shopping-cart a[aria-expanded="false"] span.cart-icon-wrap span.bigcounter{
    background-color: #53a16e;
  }
  .shopping-widget .shopping-cart a:hover span.cart-icon-wrap span.bigcounter,
  .shopping-widget .shopping-cart a[aria-expanded="true"] span.cart-icon-wrap span.bigcounter{
    background-color: #53a16e;
  }
  .shopping-widget .shopping-cart a span.cart-icon-wrap span.cart-icon,
  .shopping-widget .shopping-cart a:hover span.cart-icon-wrap span.cart-icon,
  .shopping-widget .shopping-cart a span.cart-icon-wrap span.bigcounter,
  .shopping-widget .shopping-cart a:hover span.cart-icon-wrap span.bigcounter{
    -webkit-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
  }
  .shopping-widget .shopping-cart a span.cart-detail{
    display: none;
    
    margin-left: 10px;
    
  }
  .shopping-widget .shopping-cart a span.cart-detail span.cart-title{
    display: block;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
  }
  .shopping-widget .shopping-cart a span.cart-detail span.subtotal-price{
    display: block;
    color: #ddd;
    margin-top: 5px;
    text-transform: capitalize;
  }
  @media (max-width: 1199px) {
    .shopping-widget .shopping-cart a span.cart-icon-wrap span.cart-icon{
      font-size: 24px;
    }
    .shopping-widget .shopping-cart a span.cart-detail{
      display: none;
    }
  }

  /* mini cart item css */
  .shopping-cart .mini-cart {
    position: absolute;
    top: calc(100% + 30px);
    
    right: 0;
    
    width: 290px;
    background-color: #fff;
    border: 1px solid #e2e2e2;
    z-index: 3;
  }
  .shopping-cart .mini-cart .cart-tempty-title p,
  .shopping-cart .mini-cart .cart-item-title p{
    font-size: 16px;
    padding: 10px 15px;
    line-height: normal;
  }
  .shopping-cart .mini-cart .cart-item-title p span.cart-count-item{
    color: #53a16e;
    font-weight: 700;
  }
  @media (max-width: 1199px) {
    .shopping-cart .mini-cart {
      top: calc(100% + 15px);
    }
  }

  /* mini cart empty css */
  .mini-cart .cart-tempty-title ul.cart-item-loop-empty{
    text-align: center;
  }
  .mini-cart .cart-tempty-title ul.cart-item-loop-empty li.cart-item-empty{
    padding: 15px;
    display: flex;
    align-items: center;
    flex-direction: column;
    border-top: 1px solid #e2e2e2;
  }
  .mini-cart .cart-tempty-title ul.cart-item-loop-empty li.cart-item-empty span{
    display: block;
    font-size: 90px;
    opacity: 0.5;
    line-height: 0;
  }
  .mini-cart .cart-tempty-title ul.cart-item-loop-empty li.cart-item-empty span svg{
    width: 50px;
    height: 50px;
  }
  .mini-cart .cart-tempty-title ul.cart-item-loop-empty li.cart-item-empty a{
    width: 100%;
    margin-top: 15px;
  }

  /* scroll css */
  .mini-cart ul.cart-item-loop{
    display: flex;
    flex-direction: column;
    max-height: 202px;
    overflow-y: auto;
    border-top: 1px solid #e2e2e2;
  }
  .mini-cart ul.cart-item-loop li.cart-item {
    width: 100%;
    display: flex;
    padding: 15px;
    border-bottom: 1px solid #e2e2e2;
  }
  .mini-cart ul.cart-item-loop li.cart-item:last-child{
    border-bottom: none;
  }
  .mini-cart ul.cart-item-loop li.cart-item .cart-image {
    width: 70px;
  }
  .mini-cart ul.cart-item-loop li.cart-item .cart-image a{
    border: 1px solid #e2e2e2;
  }
  .mini-cart ul.cart-item-loop li.cart-item .cart-title {
    width: calc(100% - 85px);
    
    margin-left: 15px;
    
    overflow: hidden;
  }
  .mini-cart ul.cart-item-loop li.cart-item .cart-title h6 {
    font-size: 15px;
    text-transform: capitalize;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
  }
  .mini-cart ul.cart-item-loop li.cart-item .cart-title h6 a{
    display: block;
    color: #222;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .mini-cart ul.cart-item-loop li.cart-item .cart-title .cart-pro-info {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    margin-top: 5px;
  }
  .mini-cart ul.cart-item-loop li.cart-item .cart-title .price-box .new-price {
    color: #53a16e;
    font-size: 14px;
  }
  .mini-cart ul.cart-item-loop li.cart-item .cart-title .cart-pro-info .delete-item-cart a {
    display: block;
    font-size: 18px;
    font-weight: 600;
    line-height: 0;
  }
  .mini-cart ul.cart-item-loop li.cart-item .cart-title .cart-pro-info .delete-item-cart a svg{
    width: 18px;
    height: 18px;
  }
  .mini-cart ul.subtotal-title-area {
    display: flex;
    flex-direction: column;
    background-color: #fff;
  }
  .mini-cart ul.subtotal-title-area li {
    padding: 15px;
    border-top: 1px solid #e2e2e2;
  }
  .mini-cart ul.subtotal-title-area li.subtotal-info{
    padding: 10px 15px;
  }
  .mini-cart ul.subtotal-title-area li .subtotal-titles {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .mini-cart ul.subtotal-title-area li .subtotal-titles h3 {
    font-size: 16px;
    font-weight: 500;
  }
  .mini-cart ul.subtotal-title-area li .subtotal-titles span.subtotal-price {
    color: #53a16e;
    font-weight: 700;
  }
  .mini-cart ul.subtotal-title-area li .cart-btns {
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    
    margin-left: -15px;
    
  }
  .mini-cart ul.subtotal-title-area li .cart-btns a {
    width: calc(100% - 15px);
    margin-top: 15px;
    
    margin-left: 15px;
    
  }
  .mini-cart ul.subtotal-title-area li .cart-btns a:first-child {
    margin-top: 0;
  }
</style>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-bottom-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="main-menu-area">
            <nav class="main-navigation navbar-expand-xl">
              <div class="box-header">
                <button class="close-box" type="button"><i class="ti-close"></i></button>
              </div>
              <div class="navbar-collapse" id="navbarContent">
                
                <div class="megamenu-content">
                  <a href="#main-collapse" class="browse-cat" data-toggle="collapse" aria-expanded="true">
                    <i class="ti-menu"></i>
                    <span>Menu</span>
                  </a>
                  <div class="mainwrap collapse show" id="main-collapse">
                    <ul class="main-menu">
                      
                      
                      
                      

<li class="menu-link">
  <a href="index.php" class="link-title">
    <span class="sp-link-title">Home</span>
  </a>
  <a href="index.php" class="link-title link-title-lg">
    <span class="sp-link-title">Home</span>
  </a>
</li>

<script>
  $('.megamenu-li').parent('ul').addClass('mega-menu');
  $('.menu-banner').parent('ul').addClass('banner-menu');
  $('.submenu-li').parent('ul').addClass('sub-menu');
</script>
                      
                      
                      
                      

<li class="menu-link parant">
  <a class="link-title" href="JavaScript:void(0)">
    <span class="sp-link-title">Collections</span>
    <i class="fa fa-angle-down"></i>
  </a>
  <a data-toggle="collapse" href="#collapse-collections" class="link-title link-title-lg">
    <span class="sp-link-title">Collections</span>
    <i class="fa fa-angle-down"></i>
  </a>
  <ul class="dropdown-submenu collapse" id="collapse-collections">
    
    
    
    <li class="megamenu-li parant">
      <h2 class="sublink-title">Arabica green</h2>
      <a data-toggle="collapse" href="#collapse-arabica-green" class="sublink-title">
        <span>Arabica green</span>
        <i class="fa fa-angle-down"></i>
      </a>
      <ul class="dropdown-supmenu collapse" id="collapse-arabica-green">
        
        <li class="supmenu-li">
          <a href="/products/mango-caramel-crunch" class="suplink-title">Americano</a>
        </li>
        
        <li class="supmenu-li">
          <a href="/products/espresso-macchiato-coffee" class="suplink-title">Cappuccino</a>
        </li>
        
        <li class="supmenu-li">
          <a href="/products/iced-latte-coffee" class="suplink-title">Double esdresso</a>
        </li>
        
      </ul>
    </li>
    
    
    
    
    <li class="megamenu-li parant">
      <h2 class="sublink-title">Light roasted coffee</h2>
      <a data-toggle="collapse" href="#collapse-light-roasted-coffee" class="sublink-title">
        <span>Light roasted coffee</span>
        <i class="fa fa-angle-down"></i>
      </a>
      <ul class="dropdown-supmenu collapse" id="collapse-light-roasted-coffee">
        
        <li class="supmenu-li">
          <a href="/products/iced-chocolate-mocha" class="suplink-title">Latte</a>
        </li>
        
        <li class="supmenu-li">
          <a href="/products/chocolate-caramel-crunch-1" class="suplink-title">Macchiato</a>
        </li>
        
        <li class="supmenu-li">
          <a href="/products/vietnamese-cold-brew" class="suplink-title">Mint chocolate</a>
        </li>
        
      </ul>
    </li>
    
    
    
    
    <li class="megamenu-li parant">
      <h2 class="sublink-title">Medium roasted coffee</h2>
      <a data-toggle="collapse" href="#collapse-medium-roasted-coffee" class="sublink-title">
        <span>Medium roasted coffee</span>
        <i class="fa fa-angle-down"></i>
      </a>
      <ul class="dropdown-supmenu collapse" id="collapse-medium-roasted-coffee">
        
        <li class="supmenu-li">
          <a href="/products/double-chocolate-chip" class="suplink-title">Mocha</a>
        </li>
        
        <li class="supmenu-li">
          <a href="/products/caramel-cloud-macchiato-1" class="suplink-title">Caramel</a>
        </li>
        
        <li class="supmenu-li">
          <a href="/products/caramel-cloud-macchiato" class="suplink-title">White mocha</a>
        </li>
        
      </ul>
    </li>
    
    
    
    
    <li class="megamenu-li parant">
      <h2 class="sublink-title">Daek roasted coffee</h2>
      <a data-toggle="collapse" href="#collapse-daek-roasted-coffee" class="sublink-title">
        <span>Daek roasted coffee</span>
        <i class="fa fa-angle-down"></i>
      </a>
      <ul class="dropdown-supmenu collapse" id="collapse-daek-roasted-coffee">
        
        <li class="supmenu-li">
          <a href="/products/salted-caramel-mocha" class="suplink-title">Mocha</a>
        </li>
        
        <li class="supmenu-li">
          <a href="/products/oats-cocoa-frappuccino" class="suplink-title">Vanilla</a>
        </li>
        
        <li class="supmenu-li">
          <a href="/products/vanilla-latte-coffee" class="suplink-title">White mocha</a>
        </li>
        
      </ul>
    </li>
    
    
    
    
    
    
    <div class="menu-banner bottom">
      <a href="/collections/kenya-beans" class="banner-hover">
        <img src="//cdn.shopify.com/s/files/1/0557/1965/7630/collections/1.jpg?v=1617865628" class="img-fluid">
      </a>
    </div>
    
    
    
    
    
    
    
    
    <div class="menu-banner bottom">
      <a href="/collections/robusta-roast" class="banner-hover">
        <img src="//cdn.shopify.com/s/files/1/0557/1965/7630/collections/2.jpg?v=1617865596" class="img-fluid">
      </a>
    </div>
    
    
    
    
  </ul>
</li>

<script>
  $('.megamenu-li').parent('ul').addClass('mega-menu');
  $('.menu-banner').parent('ul').addClass('banner-menu');
  $('.submenu-li').parent('ul').addClass('sub-menu');
</script>
                      
                      
                      
                      

<li class="menu-link parant">
  <a class="link-title" href="JavaScript:void(0)">
    <span class="sp-link-title">Rich aroma</span>
    <i class="fa fa-angle-down"></i>
  </a>
  <a data-toggle="collapse" href="#collapse-rich-aroma" class="link-title link-title-lg">
    <span class="sp-link-title">Rich aroma</span>
    <i class="fa fa-angle-down"></i>
  </a>
  <ul class="dropdown-submenu collapse" id="collapse-rich-aroma">
    
    
    
    
    
    <li class="menu-banner">
      <div class="banner-wrap">
        <a href="/collections/arabica-roast" class="menu-banner-img banner-hover">
          <img src="//cdn.shopify.com/s/files/1/0557/1965/7630/collections/1_368070d7-c1f2-4dfd-b974-9dba2c8760dd.jpg?v=1617775512" class="img-fluid">
        </a>
        <a href="/collections/arabica-roast" class="menu-banner-title">
          <span>Arabica roast</span>
        </a>
      </div>
    </li>
    
    
    
    
    
    
    
    
    <li class="menu-banner">
      <div class="banner-wrap">
        <a href="/collections/arabic-green" class="menu-banner-img banner-hover">
          <img src="//cdn.shopify.com/s/files/1/0557/1965/7630/collections/2_8990bd67-7775-4e32-b117-d77148a1dc7d.jpg?v=1617775529" class="img-fluid">
        </a>
        <a href="/collections/arabic-green" class="menu-banner-title">
          <span>Arabica green</span>
        </a>
      </div>
    </li>
    
    
    
    
  </ul>
</li>

<script>
  $('.megamenu-li').parent('ul').addClass('mega-menu');
  $('.menu-banner').parent('ul').addClass('banner-menu');
  $('.submenu-li').parent('ul').addClass('sub-menu');
</script>
                      
                      
                      
                      

<li class="menu-link">
  <a href="/collections/roasted" class="link-title">
    <span class="sp-link-title">Roasted</span>
  </a>
  <a href="/collections/roasted" class="link-title link-title-lg">
    <span class="sp-link-title">Roasted</span>
  </a>
</li>

<script>
  $('.megamenu-li').parent('ul').addClass('mega-menu');
  $('.menu-banner').parent('ul').addClass('banner-menu');
  $('.submenu-li').parent('ul').addClass('sub-menu');
</script>
                      
                      
                      
                      

<li class="menu-link">
  <a href="/collections/coffee-bean" class="link-title">
    <span class="sp-link-title">Coffee bean</span>
  </a>
  <a href="/collections/coffee-bean" class="link-title link-title-lg">
    <span class="sp-link-title">Coffee bean</span>
  </a>
</li>

<script>
  $('.megamenu-li').parent('ul').addClass('mega-menu');
  $('.menu-banner').parent('ul').addClass('banner-menu');
  $('.submenu-li').parent('ul').addClass('sub-menu');
</script>
                      
                      
                      
                      

<li class="menu-link">
  <a href="/blogs/news" class="link-title">
    <span class="sp-link-title">Blog</span>
  </a>
  <a href="/blogs/news" class="link-title link-title-lg">
    <span class="sp-link-title">Blog</span>
  </a>
</li>

<script>
  $('.megamenu-li').parent('ul').addClass('mega-menu');
  $('.menu-banner').parent('ul').addClass('banner-menu');
  $('.submenu-li').parent('ul').addClass('sub-menu');
</script>
                      
                      
                      
                      

<li class="menu-link parant">
  <a class="link-title" href="JavaScript:void(0)">
    <span class="sp-link-title">Pages</span>
    <i class="fa fa-angle-down"></i>
  </a>
  <a data-toggle="collapse" href="#collapse-pages" class="link-title link-title-lg">
    <span class="sp-link-title">Pages</span>
    <i class="fa fa-angle-down"></i>
  </a>
  <ul class="dropdown-submenu collapse" id="collapse-pages">
    
    
    
    
    <li class="submenu-li parant">
      <a href="/pages/about-us" class="sublink-title">About us</a>
    </li>      
    
    
    
    
    
    
    <li class="submenu-li parant">
      <a href="/pages/contact-us" class="sublink-title">Contact us</a>
    </li>      
    
    
    
    
    
    
    <li class="submenu-li parant">
      <a href="/pages/faqs" class="sublink-title">Faq's</a>
    </li>      
    
    
    
    
    
    
    <li class="submenu-li parant">
      <a href="/pages/payment-policy" class="sublink-title">Payment policy</a>
    </li>      
    
    
    
    
    
    
    <li class="submenu-li parant">
      <a href="/pages/sitemap" class="sublink-title">Sitemap</a>
    </li>      
    
    
    
    
    
    
    <li class="submenu-li parant">
      <a href="/pages/terms-condition" class="sublink-title">Terms & condition</a>
    </li>      
    
    
    
  </ul>
</li>

<script>
  $('.megamenu-li').parent('ul').addClass('mega-menu');
  $('.menu-banner').parent('ul').addClass('banner-menu');
  $('.submenu-li').parent('ul').addClass('sub-menu');
</script>
                      
                      
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- header-area end -->
<script>
  $(window).scroll(function() {
    var sticky = $('.header-area'),
    scroll = $(window).scrollTop();
    if (scroll >= 150) {
      sticky.addClass('is-sticky');
    }
    else {
      sticky.removeClass('is-sticky');
    }
  });
</script>

<style>
  

  
  .header-area,
  .header-bottom-area{
    
    background-color: #222222;
    
  }
  
  
  /* sticky menu css */
  
  
  

  /* box-header size */
  

  /* accout css */
  @media (max-width: 1199px) {
    .header-area .header-main .search-wrap .search-rap .crap-search{
      position: absolute;
      top: calc(100% + 15px);left: 0;width: 240px;
      z-index: 2;    
    }
  }
  @media (max-width: 767px) {
    .header-area .header-main .search-wrap .search-rap .crap-search{
      width: 100%;
    }
  }
</style>
</div>
    </div>
    <!-- breadcrumb-area start -->


<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-index">
                    <!-- breadcrumb main-title start-->
                    <div class="breadcrumb-title">
                        
                        <h2>Cuenta</h2>
                        
                    </div>
                    <!-- breadcrumb main-title end-->

                    <!-- breadcrumb-list start -->
                    
<ul class="breadcrumb-list">

  <li class="breadcrumb-item">
    <a href="/" title="Back to the home page">Inicio</a>
  </li>
  

  <li class="breadcrumb-item">
    <span>Cuenta</span>
  </li>

  
</ul>

<style>
  ul.breadcrumb-list {
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    align-items: center;
  }
  ul.breadcrumb-list li {
    position: relative;
    display: flex;
    align-items: baseline;
  }
  ul.breadcrumb-list li::after{
    content: "\f105";
    font: normal normal normal 15px/1 FontAwesome;
    display: inline-block;
    color: #999999;
    margin: 0 15px;}
  ul.breadcrumb-list li:last-child::after{
    display: none;
  }
  ul.breadcrumb-list li.breadcrumb-item + li.breadcrumb-item {
    padding-left: 0;
  }
  ul.breadcrumb-list li.breadcrumb-item + li.breadcrumb-item::before{
    content: "";
    display: block;
    padding-right: 0;
  }
  ul.breadcrumb-list li a{
    color: #999999;
    font-size: 16px;
  }
  ul.breadcrumb-list li a:hover{
    color: #53a16e;
  }
  ul.breadcrumb-list li span{
    
    color: #999999;
    
    font-size: 16px;
  }
  @media (max-width: 767px) {
    ul.breadcrumb-list li::after{
      margin: 0 10px;
    }
  }
</style>

                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- breadcrumb-area end -->
<style>
.breadcrumb-area {
    padding-top: 70px;
    padding-bottom: 70px;
    
    background-color: #ffffff;
    
    position: relative;

    
}

@media (max-width: 1199px) {
    .breadcrumb-area {
        padding-top: 60px;
        padding-bottom: 60px;
    }
}
@media (max-width: 767px) {
    .breadcrumb-area {
        padding-top: 50px;
        padding-bottom: 50px;
    }
}

/* breadcrumb title css */
.breadcrumb-area .breadcrumb-index{
    display: flex;
    align-items: center;
    flex-direction: column;
    text-align: center;
}
.breadcrumb-area .breadcrumb-index .breadcrumb-title{
    margin-bottom: 10px;
}
.breadcrumb-area .breadcrumb-index .breadcrumb-title h2{
    font-size: 44px;
    text-transform: capitalize;
    font-weight: 900;
    line-height: 1;
}
@media (max-width: 1199px) {
    .breadcrumb-area .breadcrumb-index .breadcrumb-title h2{
        font-size: 30px;
    }
}
@media (max-width: 767px) {
    .breadcrumb-area .breadcrumb-index .breadcrumb-title h2{
        font-size: 20px;
    }
}
</style>
    
    <main role="main">
      <form method="post" action="" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="✓" />
      <section class="customer-page section-ptb">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="acc-form">
          <div class="log-acc-page" id="CustomerLoginForm">
            <div class="acc-page">
              <div class="login">
                <div class="login-form-container">
                  <div class="content-main-title">
                    <div class="content-cont-title">
                      <h2>
                        <span>Inicio de Sesión</span>
                      </h2>
                    </div><p>Ingresa tu Correo para el siguiente Paso</p></div>
                  <ul class="fill-form">
                    <li class="log-email">
                      
                      <input type="email" require name="email" id="CustomerEmail" class="input-full" placeholder="Correo" autocorrect="off" autocapitalize="off" autofocus>
                    </li>
                  </ul>
                  <div class="form-action-button">
                 <center><a href="#recover" class="btn btn-style2"id="RecoverPassword">Siguiente</a></center>
                  </div>
                </div>
              </div>
              <div class="acc-wrapper">
                <h6>No tienes cuenta?</h6>
                <div class="account-optional-action">
                  <a href="registro.php" id="customer_register_link">Crear Cuenta</a>
                </div>
              </div>
            </div>
          </div>
          <div class="log-acc-page" id="RecoverPasswordForm" style="display: none;">
            <div class="acc-page">
                <div class="login-form-container">
                  <div class="content-main-title">
                    <div class="content-cont-title">
                      <h2>
                        <span>Inicio de Sesión</span>
                      </h2>

                      
                    </div><p>Ingresa tu Contraseña</p></div>
                  
                  <ul class="fill-form">   
                    <li class="log-pwd">
                      
                      <input type="password" value="" name="pass" id="CustomerPassword" class="input-full" placeholder="Contraseña">
                    </li>
                    <div class="form-action-button">
                    <center><button id="welcome" name="welcome" class="btn btn-style2" type="submit">INGRESAR</button></center>
                  </div>
                  <div class="form-action-button">
                 <center><a href="#CustomerLoginForm" class="btn btn-style2"id="CustomerLogin">Paso anterior</a></center>
                  </div>
                  </ul>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
      </form>
<style>
  .customer-page .acc-form{
    max-width: 40%;
    margin: 0 auto;
  }
  .customer-page .acc-form .log-acc-page{
    padding: 45px;
    background-color: #fff;
    border: 1px solid #e2e2e2;
  }
  @media (max-width: 1199px){
    .customer-page .acc-form{
      max-width: 50%;
    }
  }
  @media (max-width: 991px){
    .customer-page .acc-form{
      padding: 30px;
      max-width: 70%;
    }
  }
  @media (max-width: 767px){
    .customer-page .acc-form{
      max-width: 100%;
    }
  }

  /* form css */
  .customer-page .log-acc-page .login-form-container ul.fill-form li{
    margin-top: 10px;
  }
  .customer-page .log-acc-page .login-form-container ul.fill-form li:first-child{
    margin-top: 0px;
  }
  .customer-page .log-acc-page .login-form-container ul.fill-form li label{
    display: block;
    font-size: 16px;
    margin-bottom: 10px;
    cursor: auto;
    line-height: 1;
  }
  .customer-page .log-acc-page .login-form-container input{
    width: 100%;
    background-color: #ffffff;
  }
  .customer-page .log-acc-page .login-form-container .form-action-button{
    margin-top: 10px;
  }
  .customer-page .log-acc-page .login-form-container .form-action-button a{
    display: block;
    color: #53a16e;
    font-size: 16px;
    margin-top: 16px;
    text-decoration: underline;
    line-height: 1;
  }
  .customer-page .log-acc-page .login-form-container .form-action-button a:hover{
    color: #222222;
  }
  @media (max-width: 767px){}

  /* acc-link css */
  .customer-page .log-acc-page .acc-wrapper{
    margin-top: 37px;
    text-align: center;
  }
  .customer-page .log-acc-page .acc-wrapper h6{
    font-size: 18px;
    line-height: 1;
  }
  .customer-page .log-acc-page .acc-wrapper .account-optional-action{
    margin-top: 13px;
    line-height: 1;
  }
  .customer-page .log-acc-page .acc-wrapper .account-optional-action a{
    color: #53a16e;
    font-size: 16px;
    text-decoration: underline;
  }
  .customer-page .log-acc-page .acc-wrapper .account-optional-action a:hover{
    color: #222222;
  }
  @media (max-width: 991px){
    .customer-page .log-acc-page .acc-wrapper{
      margin-top: 27px;
    }
  }

  /* error css */
  .customer-page .log-acc-page .errors{
    padding: 10px 15px;
    
    text-align: left;
    
  }
  .customer-page .log-acc-page .errors ul{
    
    margin-left: 15px;
    
    list-style: square;
  }
  .customer-page .log-acc-page .errors ul li{
    margin-top: 5px;
  }
  .customer-page .log-acc-page .errors ul li:first-child{
    margin-top: 0px;
  }
</style>
    </main>
    <div class="mm-fullscreen-bg"></div>
<style>
.mm-fullscreen-bg {
    position: fixed;
    top: 0;
    
	left: 0;
	
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 4;
    opacity: 0;
    visibility: hidden;
}
.mm-fullscreen-bg.active {
    opacity: 1;
    visibility: visible;
}
.mm-fullscreen-bg,
.mm-fullscreen-bg.active {
	-webkit-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}
</style>
    <div class="footer-bottom-bgimg">
      <div id="shopify-section-footer" class="shopify-section"><section class="footer-top-area" >
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="footer-list-wrap">
          <ul class="footer-list">
            <li class="ftlink-li ft-com-info">
              <div class="footer-info">
                <div class="logo"><a href="/" class="theme-logo">
  <img src="//cdn.shopify.com/s/files/1/0557/1965/7630/files/coffee-logo.png?v=1630566019" alt="demo-store">
</a><style>
	.logo a.shop-name span {
	    color: #000;
	    font-size: 24px;
	    font-weight: 600;
	}
</style><p>A quality apparels will make use of premium
materials to create a piece of clothings that
you will be proud to call your own.</p>
                </div>
              </div>
              <div class="footer-user-rating">
                <h5>User Ratings</h5>
                <div class="product-ratting">
                  <div class="review-star">
                    <a href="javascript:void(0)">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </a>
                    <div class="review-text">
                      <span class="rating-count">(5.0)</span>
                      <span class="rating-text">review based on 3550</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-social"><ul class="social-icon">
  
  
  <li class="gplus">
    <a href="#">
      <i class="ti-linkedin"></i>
      
    </a>
  </li>        
  

  
  <li class="dribbble">
    <a href="">
      <i class="fa fa-dribbble"></i>
      
    </a>
  </li>        
  

  
  <li class="twitter">
    <a href="#">
      <i class="fa fa-twitter"></i>
      
    </a>
  </li>        
  


  
  <li class="pinterest">
    <a href="#">
      <i class="ti-flickr"></i>
      
    </a>
  </li>        
  

  
  <li class="insta">
    <a href="#">
      <i class="fa fa-tumblr"></i>
      
    </a>
  </li>        
  

  
  <li class="facebook">
    <a href="#">
      <i class="fa fa-facebook"></i>
      
    </a>
  </li>        
  
</ul>
<style>
  /* social icon css */
  ul.social-icon{
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    align-items: center;
  }
  ul.social-icon li{
    line-height: 1;
    
    margin-right: 15px;
    
  }
  ul.social-icon li:last-child{
    
    margin-right: 0px;
    
  }
  ul.social-icon li a{
    font-size: 22px;
    color: #b8b8b8;
    line-height: 1;
  }
  ul.social-icon li a:hover{
    color: #53a16e;
  }
  @media (max-width: 1199px) {
    ul.social-icon li{
      
      margin-right: 10px;
      
    }
  }
</style></div>
            </li>
            
            <li class="ftlink-li">
              <h2 class="ft-title">Quick Links</h2>
              <a data-toggle="collapse" href="#collapse-Quick-Links" class="ft-title">
                <span>Quick Links</span>
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="footer-sublist collapse" id="collapse-Quick-Links">
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/about-us" class="ft-sublink">About company</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/robusta-roast" class="ft-sublink">Labella professional</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/roasted" class="ft-sublink">Customer reviews</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/mexican-beans" class="ft-sublink">Modern slavery act</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/rich-aroma" class="ft-sublink">Gifts & vouchers</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections" class="ft-sublink">Careers</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/contact-us" class="ft-sublink">Contact us</a>
                </li>
                
                
              </ul>
            </li>
            
            <li class="ftlink-li">
              <h2 class="ft-title">Top categories</h2>
              <a data-toggle="collapse" href="#collapse-Top-categories" class="ft-title">
                <span>Top categories</span>
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="footer-sublist collapse" id="collapse-Top-categories">
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/roasted" class="ft-sublink">Arabica green</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/roasted" class="ft-sublink">Arabica roast</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/arabica-roast" class="ft-sublink">Robusta roast</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/mexican-beans" class="ft-sublink">Kenya beans</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/kenya-beans" class="ft-sublink">Mexican bean</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/flavors" class="ft-sublink">Light roasted</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/coffee-bean" class="ft-sublink">Medium roasted</a>
                </li>
                
                
              </ul>
            </li>
            
            <li class="ftlink-li">
              <h2 class="ft-title">My account</h2>
              <a data-toggle="collapse" href="#collapse-My-account" class="ft-title">
                <span>My account</span>
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="footer-sublist collapse" id="collapse-My-account">
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/wishlist" class="ft-sublink">My order</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/rich-aroma" class="ft-sublink">Track my order</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/robusta-roast" class="ft-sublink">Help center</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/return-policy" class="ft-sublink">Return policy</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/terms-condition" class="ft-sublink">Terms & condition</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/collections/mexican-beans" class="ft-sublink">Report a bug</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/blogs/news" class="ft-sublink">Blog</a>
                </li>
                
                
              </ul>
            </li>
            
            <li class="ftlink-li">
              <h2 class="ft-title">Useful links</h2>
              <a data-toggle="collapse" href="#collapse-Useful-links" class="ft-title">
                <span>Useful links</span>
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="footer-sublist collapse" id="collapse-Useful-links">
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/about-us" class="ft-sublink">About us</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/contact-us" class="ft-sublink">Contact us</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/faqs" class="ft-sublink">Faq's</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/payment-policy" class="ft-sublink">Payment policy</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/privacy-policy" class="ft-sublink">Privacy policy</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/shipping-policy" class="ft-sublink">Shipping policy</a>
                </li>
                
                
                
                <li class="ftsublink-li">
                  <a href="/pages/sitemap" class="ft-sublink">Sitemap</a>
                </li>
                
                
              </ul>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .footer-top-area {
    

    
  }
  .footer-top-area .footer-list-wrap{
    padding-top: 100px;
    padding-bottom: 80px;
    margin-top: 220px;
    position: relative;
  }
  .footer-top-area .footer-list-wrap::after{
    content: "";
    background-image: url('//cdn.shopify.com/s/files/1/0557/1965/7630/files/footer-img.png?v=1617627148');
    background-repeat: no-repeat;
    background-size: contain;
    position: absolute;
    top: 0;
    
    right: 0;
    
    width: 511px;
    height: 399px;-webkit-transform: translateY(calc(-50% - 120px));
    -o-transform: translateY(calc(-50% - 120px));
    transform: translateY(calc(-50% - 120px));}
  @media (max-width: 1599px) and (min-width: 1360px) {
    .footer-top-area .footer-list-wrap::after{
      width: 411px;
      height: 250px;
    }
  }
  @media (max-width: 1359px) and (min-width: 1200px) {
    .footer-top-area .footer-list-wrap::after{
      width: 320px;
      height: 250px;
    }
  }
  @media (max-width: 1199px) {
    .footer-top-area .footer-list-wrap{
      padding-top: 70px;
      padding-bottom: 70px;
      margin-top: 160px;
    }
    .footer-top-area .footer-list-wrap::after{
      width: 350px;
      height: 260px;
    }
  }
  @media (max-width: 991px) {
    .footer-top-area .footer-list-wrap::after{
      width: 290px;
      height: 225px;
    }
  }
  @media (max-width: 767px) {
    .footer-top-area .footer-list-wrap{
      padding-top: 50px;
      padding-bottom: 50px;
      margin-top: 50px;
    }
    .footer-top-area .footer-list-wrap::after{
      width: 250px;
      height: 195px;
      transform: translateY(calc(-50% - 30px));
    }
  }
  @media (max-width: 479px) {
    .footer-top-area .footer-list-wrap::after{
      width: 170px;
      height: 133px;
    }
  }

  /* footer menu css */
  .footer-list-wrap ul.footer-list{
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    
    margin-left: -20px;
    
  }
  .footer-list-wrap ul.footer-list li.ftlink-li{
    width: calc(17.50% - 20px);
    
    margin-left: 20px;
    
  }
  .footer-list-wrap ul.footer-list li.ftlink-li.ft-com-info{
    width: calc(30% - 20px);
  }
  @media (max-width : 991px) {
    .footer-list-wrap ul.footer-list li.ftlink-li{
      width: calc(100% - 20px);
      margin-top: 15px;
    }
    .footer-list-wrap ul.footer-list li.ftlink-li.ft-com-info{
      width: calc(100% - 30px);
    }
    .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(1),
    .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(2){
      margin-top: 0px;
    }
  }

  /* footer info css */
  .footer-list-wrap ul.footer-list li.ft-com-info .footer-info p{
    color: #b2b2b2;
    font-size: 15px;
    margin-top: 40px;
    max-width: 80%;
  }
  .footer-list-wrap ul.footer-list li.ft-com-info .footer-user-rating{
    margin-top: 30px;
  }
  .footer-list-wrap ul.footer-list li.ft-com-info .footer-user-rating h5{
    color: #ffffff;
    font-size: 17px;
    font-family: 'DM Sans Bold';
    font-weight: 700;
    line-height: 1;
  }
  .footer-list-wrap ul.footer-list li.ft-com-info .footer-user-rating .review-star{
    margin-top: 15px;
  }
  .footer-list-wrap ul.footer-list li.ft-com-info .footer-user-rating .review-star a i{ 
    color: #18c495;
    font-size: 16px;
  }
  .footer-list-wrap ul.footer-list li.ft-com-info .footer-user-rating .review-star .review-text{
    margin-top: 10px;
  } 
  .footer-list-wrap ul.footer-list li.ft-com-info .footer-user-rating .review-star .review-text span{
    color: #b2b2b2;
    font-size: 15px;
  }
  .footer-list-wrap ul.footer-list li.ft-com-info .footer-user-rating .review-star .review-text span.rating-count{
    color: #18c495;
  }
  .footer-list-wrap ul.footer-list li.ft-com-info .footer-social{
    margin-top: 35px;
  }
  @media (max-width: 1199px){
    .footer-list-wrap ul.footer-list li.ft-com-info .footer-info p{
      max-width: 100%;
    }
  }
  @media (max-width : 991px){
    .footer-list-wrap ul.footer-list li.ft-com-info .footer-info{
      text-align: center;
    }
    .footer-list-wrap ul.footer-list li.ft-com-info .footer-info p{
      margin-top: 24px;
    }
    .footer-list-wrap ul.footer-list li.ft-com-info .footer-user-rating{
      margin-top: 20px;
      text-align: center;
    }
    .footer-list-wrap ul.footer-list li.ft-com-info .footer-social{
      margin-top: 25px;
      margin-bottom: 25px;
    }
    .footer-list-wrap ul.footer-list li.ft-com-info .footer-social ul.social-icon{
      justify-content: center;
    }
  }

  /* footer link css */
  .footer-list-wrap ul.footer-list li.ftlink-li .ft-title{
    color: #ffffff;
    font-size: 17px;
    font-weight: 700;
    text-transform: capitalize;
    font-family: 'DM Sans Bold';
  }
  .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title{
    display: none;
  }
  .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist.collapse:not(.show){
    display: block;
  }
  .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li{
    margin-top: 16px;
  }
  .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li:first-child{
    margin-top: 29px;
  }
  .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a{
    color: #b2b2b2;
    font-size: 15px;
  }
  .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a:hover{
    color: #53a16e;
  }
  @media (max-width : 991px) {
    .footer-list-wrap ul.footer-list li.ftlink-li h2.ft-title{
      display: none;
    }
    .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title{
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-bottom: 15px;
      border-bottom: 2px solid rgba(255, 255, 255, 0.2);
    }
    .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title[aria-expanded="true"]{
      color: #53a16e;
    }
    .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title[aria-expanded="true"] i{
      transform: rotate(-180deg);
    }
    .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist.collapse:not(.show){
      display: none;
    }
    .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li,
    .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li:first-child{
      margin-top: 15px;
    }
  }
</style>
</div>
      <div id="shopify-section-copy-right" class="shopify-section"><footer class="footer-bottom-area">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul class="ft-bottom">
            <li class="copy-right">
                <p>
                    <span>Copyright</span>
                    <i class="fa fa-copyright"></i>
                    <span>2021 Labella.com All Rights Reserved.</span>
                </p>
            </li>
            <li class="payment-img">
              <a href="javascript:void(0)" class="payment-icon">

	<img src="//cdn.shopify.com/s/files/1/0557/1965/7630/files/logo-5.jpg?v=1617771637" class="img-fluid" alt="demo-store">
	<img src="//cdn.shopify.com/s/files/1/0557/1965/7630/files/logo-1.jpg?v=1617771637" class="img-fluid" alt="demo-store">
	<img src="//cdn.shopify.com/s/files/1/0557/1965/7630/files/logo-4.jpg?v=1617771638" class="img-fluid" alt="demo-store">
	<img src="//cdn.shopify.com/s/files/1/0557/1965/7630/files/logo-6.jpg?v=1617771637" class="img-fluid" alt="demo-store">
    <img src="//cdn.shopify.com/s/files/1/0557/1965/7630/files/logo-2.jpg?v=1617771637" class="img-fluid" alt="demo-store">
    <img src="//cdn.shopify.com/s/files/1/0557/1965/7630/files/logo-3.jpg?v=1617771637" class="img-fluid" alt="demo-store">
    
</a>
<style>
	.payment-icon{
		display: flex;
		flex-wrap: wrap;
	    margin-top: -5px;
	    
		margin-left: -5px;
		
	}
	.payment-icon img{
		margin-top: 5px;
		
		margin-left: 5px;
		
		border-radius: 5px;
	}
	.payment-icon a img:first-child{
		
		margin-left: 0px;
		
	}
</style>
            </li>
        </ul>
      </div>
    </div>
  </div>
</footer>


<style>
    .footer-bottom-area {
        
    }
    .footer-bottom-area ul.ft-bottom{
        padding-top: 15px;
        padding-bottom: 15px;
        border-top: 2px solid rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .footer-bottom-area li.copy-right p {
        color: #b2b2b2;
        font-size: 15px;
    }
    @media (max-width: 767px) {
        .footer-bottom-area ul.ft-bottom{
            padding-top: 15px;
            padding-bottom: 15px;
        }
    }
    @media (max-width: 991px) {
        .footer-bottom-area ul.ft-bottom{
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        .footer-bottom-area ul.ft-bottom li{
            margin-top: 10px;
        }
        .footer-bottom-area ul.ft-bottom li:first-child{
            margin-top: 0;
        }
        .footer-bottom-area li.payment-img a.payment-icon{
            justify-content: center;

        }
    }
</style></div>
    </div>
    <a href="javascript:void(0)" id="top" class="scroll">
    <span><i class="ti-arrow-up"></i></span>
</a>
<script>
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 600) { 
            $('#top').addClass('show'); 
        } else { 
            $('#top').removeClass('show'); 
        } 
    }); 
    $('#top').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    });
</script>
<style>
    a#top{
        position: fixed;
        bottom: 30px;
        
        right: 30px;
        
        z-index: 2;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0s ease-in-out 0s;
        -o-transition: all 0s ease-in-out 0s;
        transition: all 0s ease-in-out 0s;
    }
    a#top.show{
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    a.scroll span{
        color: #fff;
        font-size: 14px;
        height: 30px;
        width: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #53a16e;
        border-radius: 100%;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
    }
    a.scroll span i{
        display: block;
        line-height: 0;
    }
    a.scroll:hover span{
        color: #222;
        background-color: #fff;
    }
    a.scroll span,
    a.scroll:hover span{
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }
    @media (max-width : 767px){
        a#top{
            bottom: 15px;
            
            right: 15px;
            
        }
    }
</style>
    <!-- Necessary JS -->
    <script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/fastclick.min.js?v=29723458539410922371617597740" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/timber.js?v=140139336520658570171617597794" type="text/javascript"></script>


<script>
  
</script><div class="productmodal">
  <div class="modal fade" id="quickViewModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-quickview">Quickview</h6>
          <button type="button" class="close" data-dismiss="modal"><i class="ti-close"></i></button>
        </div>
        <div class="modal-body">
          <div class="quick-view-img">
            <div class="quick-view-tab-content tab-content">
              <div class="product-main-image__item">
                <div class="img_box_1"></div>
              </div>
            </div>
          </div>
          <div class="quick-view-content">
            <div class="product-title">
              <h6 class="product_title">FROM_JS</h6>
            </div>

            <div class="price-box price-part">
              <span class="old-price">jsprice</span>
              <span class="new-price">jsprice</span>
            </div>

            <div class="product-ratting">
              <div class="rating">FROM_JS</div>
            </div>

            <div class="product-desc">
              <p class="product-short-desc"></p>
            </div>

            <form id="add-item-qv" action="/cart/add" method="post">
              <div class="quick-view-select variants select-option-part"></div>
              <div class="product-quantity-action">
                <h6>Quantity</h6>
                <div class="product-quantity">
                  <div class="cart-plus-minus">
                    <input value="1" type="text" name="quantity" min="1" pattern="[0-9]*">
                  </div>
                </div>
              </div>
              <div class="quickview-buttons">
                <button type="submit" class="addtocartqv">
                  <span class="tooltip-text">Add to cart</span>
                  <span class="cart-title" id="AddToCartText">Add to cart</span>
                </button>
                

<a href="/account/login" class="btn wishlist">
    <span class="tooltip-text">Wishlist</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

<style>
    .pro-detail-button a.wishlist{
        color: #222;
        font-size: 14px;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        text-align: center;
        text-transform: uppercase;
        font-weight: 500;
        border: 1px solid #e2e2e2;
        border-radius: 5px;
        line-height: 0;        
    }
    .pro-detail-button a.wishlist:hover{
        background-color: #53a16e;
        border: 1px solid #53a16e;
    }
    .pro-detail-button a.wishlist svg{
        color: #222;
        width: 16px;
        height: 16px;
    }
    .pro-detail-button a.wishlist:hover svg{
        color: #fff;
    }
    .pro-detail-button a.wishlist svg,
    .pro-detail-button a.wishlist:hover svg{
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }
</style>
              </div>
              <script>
                jQuery('.addtocartqv').click(function(e) {
                  e.preventDefault();
                  Shopify.addItemFromForm('add-item-qv');
                  jQuery('#quickViewModal').modal('hide');
                });
              </script> 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="quickViewModal_info" style="display: none;">
  <div class="button"></div>
  <div class="button_added"></div>
  <div class="button_error"></div>
  <div class="button_wait"></div>
</div>

<script>
  var mainImage = '';
  jQuery(function ($) {
    quiqview = function(product_handle) {
      Shopify.getProduct(product_handle);
    }
    Shopify.onProduct = function(product) {
      $('.viewfullinfo').attr('href', product.url);

      // product description without shortcode
      text_truncate = function(str, length, ending) {
        if (length == null) {
          length = 500;
        }
        if (ending == null) {
          ending = '...';
        }
        if (str.length > length) {
          return str.substring(0, length - ending.length) + ending;
        }
        else {
          return str;
        }
      };
      var _parent = '#quickViewModal';
      $(_parent+' .product_title').text(product.title);

      // product rating
      $(_parent+' .rating').empty();
      $(_parent+' .rating').append("<span class=\"shopify-product-reviews-badge\" data-id=\""+product.id+"\"></span>");

      //check variants
      var variant = '';
      for (i = 0; i < product.variants.length; i++) {
        if(product.variants[i].inventory_quantity > 0) {
          variant = product.variants[i];
          break;
        }
      }
      if(variant == '') {
        for (i = 0; i < product.variants.length; i++) {
          if(product.variants[i].inventory_policy == "continue") {
            variant = product.variants[i];
            break;
          }
        }
        if(variant == '') {
          variant = product.variants[0];
        }
      }

      mainImage = product.featured_image;
      var shopifyimgurl = variant.featured_image ? variant.featured_image.src : product.featured_image;
      var imgurl = "<img class=\"full-width img-fluid\" alt=\"\" src = \""+shopifyimgurl+"\" >";
      jQuery(_parent+' .product-main-image__item .img_box_1').empty();
      jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);
      jQuery(_parent+' .product-main-image__item .img_box_2').empty();
      jQuery(_parent+' .product-main-image__item .img_box_2').append(imgurl);

      // product description with shortcode
      var desc = product.description;

      if (desc.indexOf("[short_description]") >= 0) {
        desc = desc.split("[short_description]");
        desc = desc[1].split("[/short_description]");
        $(_parent+' .product-short-desc').show();
        $(_parent+' .product-short-desc').html(desc[0]);
      }
      else {
        $(_parent+' .product-short-desc').html(text_truncate(product.description, 120));
      }

      //set variants property
      var inv_qua = variant.inventory_quantity;

      //price
      if(variant.price < variant.compare_at_price) {
        $('.price-part .new-price').addClass('amount');
        $('.price-part .old-price').show();
        changePriceValue('.price-part .new-price', variant.compare_at_price);
        changePriceValue('.price-part .old-price', variant.price);
      }
      else {
        $('.price-part .old-price').hide();
        $('.price-part .new-price').removeClass('amount');
        changePriceValue('.price-part .new-price', variant.price);
      }

      // Variants select
      if(product.variants.length > 1) {
        var variants_margin = product.options.length == 2 ? 'variants_margin' : '';
        var select = '<select id="product-select-qv" name="id">';
        var selected = 'selected';
        for (i = 0; i < product.variants.length; i++) {
          var _var = product.variants[i];
          if(_var.available) {
            select += '<option value="' + _var.id + '"' + selected +'>' + _var.title + ' - ' + Shopify.formatMoney(_var.price, "<span class=money>£{{amount}}</span>") + '</option>'
            selected = '';
          }
        }
        select += '</select>';
        var variant_select = '<div class="variants_selects ' + variants_margin + '">';
        variant_select += select;
        variant_select += '</div><div class="divider divider--sm"></div>';
        select = variant_select;
      }
      else {
        var select = '<input type="hidden" name="id" value="' + product.variants[0].id + '" />';
      }

      $('.variants').empty();
      $('.variants').html(select);

      //parametres
      setParametresText(_parent+' .product-sku', variant.sku);
      if(jQuery(_parent + ' .product-sku').length) {
        var $ava = jQuery(_parent + " .product-info__availabilitu");
        if(variant.sku != "") {
          if($ava.hasClass('pull-left')) {
            $ava.removeClass('pull-left')
          }
        }
        else {
          if(!$ava.hasClass('pull-left')) {
            $ava.addClass('pull-left')
          }
        }
      }

      //quantity
      var out_of_stock = false;
      if(variant.inventory_management) {
        if(inv_qua > 0) {
          $(_parent+' .product-availability').text(inv_qua + " In Stock");
        }
        else {
          out_of_stock = true;
          $(_parent+' .product-availability').text("In Stock");
        }
      }
      else {
        $(_parent+' .product-availability').text("Many in stock");
      }

      // button
      if(!out_of_stock || variant.inventory_policy == "continue") {
        $('.product-available').show();
        $('.product-disable').hide();
        $('.addtocartqv').attr('id', product.id );
      }
      else {
        $('.product-available').hide();
        $('.product-disable').show();
      }

      if (product.available && product.variants.length > 1) {
        new Shopify.OptionSelectors("product-select-qv", { product: product, onVariantSelected: selectCallbackQv, enableHistoryState: true });
        if($('#quickViewModal .variants_selects .selector-wrapper').length > 0) {
          $.each( jQuery('#quickViewModal .variants_selects .selector-wrapper'), function(index) {
            //alert('fdf43');
            //console.log($(this).find('label'));
            $(this).find('label').text(product.options[index].name);
          });
        }
      }
      else {
        jQuery('.currency .active').trigger('click');
      }

      selectGrid(_parent,product);
      if($(".spr-badge").length > 0) {
        $.getScript(window.location.protocol + "//productreviews.shopifycdn.com/assets/v4/spr.js");
      }
      if($(".selector-wrapper label").length) {
        $(".selector-wrapper label").each(function( index ) {
          
          $(this).text(jQuery(this).text() + ":");
        });
      }

      $(_parent).modal('show');

      if( !( 'ontouchstart' in window ) &&
        !navigator.msMaxTouchPoints &&
        !navigator.userAgent.toLowerCase().match( /windows phone os 7/i ))
        return false;
      $j('body').css("top", -$j('body').scrollTop());
      $j('body').addClass("no-scroll");
      $j('.close').click(function() {
        var top = parseInt($j('body').css("top").replace("px", ""))*-1;
        $j('body').removeAttr("style");
        $j('body').removeClass("no-scroll");
        $j('body').scrollTop(top);
      });
    }

    function setParametresText(obj, value) {
      if(value != '') {
        $(obj).parent().show();
        $(obj).text(value);
      }
      else {
        $(obj).parent().hide();
      }
    }

    function changePriceValue (cell, value) {
      $(cell).html(Shopify.formatMoney(value, "<span class=money>£{{amount}}</span>"));
    };
  });

  var selectCallbackQv = function(variant, selector) {
    var _parent = '#quickViewModal';
    var _parentprice = _parent + ' .price-part';
    if (!variant) {
      jQuery(_parent + " .price-box").hide();
      jQuery(_parent + " .qwt").hide();
      jQuery(_parent + " .control-console").hide();
      jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
      jQuery(_parent + ' .addtocartqv').text('Unavailable');
      return false;
    }
    jQuery(_parent + " .price-box").show();
    jQuery(_parent + " .qwt").show();
    jQuery(_parent + " .control-console").show();
    if(variant.price < variant.compare_at_price) {
      jQuery(_parentprice + ' .new-price').addClass('price-box__old');
      jQuery(_parentprice + ' .old-price').show();
      changePriceValue(_parentprice + ' .new-price', variant.price);
      changePriceValue(_parentprice + ' .old-price', variant.compare_at_price);
    }
    else {
      jQuery(_parentprice + ' .old-price').hide();
      jQuery(_parentprice + ' .new-price').removeClass('price-box__old');
      changePriceValue(_parentprice + ' .new-price', variant.price);
    }
    newVariantTextDataQv(_parent + ' .product-sku', variant.sku);
    if(jQuery(_parent + ' .product-sku').length) {
      var $ava = jQuery(_parent + " .product-info__availabilitu");
      if(variant.sku != "") {
        if($ava.hasClass('pull-left')) {
          $ava.removeClass('pull-left')
        }
      }
      else {
        if(!$ava.hasClass('pull-left')) {
          $ava.addClass('pull-left')
        }
      }
    }
    if (variant.available) {
      if (variant.inventory_management == null) {
        jQuery(_parent + " .product-availability").text("Many in stock");
      }
      else {
        jQuery(_parent + " .product-availability").text(" Many in stock");
      }
    }
    else {
      jQuery(_parent + " .product-availability").text("Sold Out");
    }

    var shopifyimgurl = variant.featured_image ? variant.featured_image.src : mainImage;
    var imgurl = "<img class=\"full-width img-fluid lazyload\" alt=\"\" src = \""+"data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20360%20459%22%3E%3C/svg%3E"+"\" data-src = \""+shopifyimgurl+"\" >";
    if(jQuery(_parent+' .product-main-image__item .img_box_1').children().length > 0) {
      var detach = jQuery(_parent+' .product-main-image__item .img_box_1 img').detach();
      jQuery(_parent+' .product-main-image__item .img_box_2').empty();
      jQuery(_parent+' .product-main-image__item .img_box_2').append(detach);
    }
    jQuery(_parent+' .product-main-image__item .img_box_1').empty();
    jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);
    if (variant && variant.available) {
      jQuery(_parent + ' .addtocartqv').removeAttr('disabled');
      jQuery(_parent + " .control-console").show();
    }
    else {
      jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
      jQuery(_parent + ' .addtocartqv').text('Unavailable');
      jQuery(_parent + " .control-console").hide();
    }
    jQuery('.currency .active').trigger('click');
  };

  function changePriceValue (cell, value) {
    jQuery(cell).html(Shopify.formatMoney(value, "<span class=money>£{{amount}}</span>"));
  };

  function newVariantTextDataQv (obj, value) {
    if(value != '') {
      jQuery(obj).parent().show();
      jQuery(obj).text(value);
    }
    else {
      jQuery(obj).parent().hide();
    }
  };

  function selectGrid(_parent,product) {
    setTimeout(timeout, 5);
    function timeout() {
      if(jQuery(_parent + " .selector-wrapper").length > 2){
        
        jQuery(_parent + " .single-option-selector").addClass("select--wd");
      }
      else if(jQuery(_parent + " .selector-wrapper").length == 1) {
        
          $.each( jQuery('#quickViewModal .variants_selects .selector-wrapper'), function(index) {
            //alert('fdf43');
            //console.log($(this).find('label'));
            jQuery(_parent + " .single-option-selector").before("<label>"+product.options[index].name+"</label>");
            //$(this).find('label').text(product.options[index].name);
          });
        
        //
        jQuery(_parent + " .single-option-selector").addClass("select--wd");
      }
    }
  };
</script>
<style>
  /* modal css */
  .productmodal .modal {
    display: none !important;
  }
  .productmodal .modal.show {
    display: flex !important;
    align-items: center;
    justify-content: center;
  }
  .productmodal .modal-dialog {
    max-width: 650px;
  }
  .productmodal .modal-dialog .modal-content {
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
    border: none;
    border-radius: 0px;
  }
  @media (max-width: 767px) {
    .productmodal .modal-dialog {
      display: flex;
      max-width: 100%;
      height: 100%;
      margin: 0 0;
      padding: 15px;
    }
  }

  /* modal-header css */
  .productmodal .modal-dialog .modal-header {
    padding: 15px;
    border-bottom: 1px solid #e2e2e2;
  }
  .productmodal .modal-dialog .modal-header h6 {
    font-size: 20px;
    text-transform: capitalize;
    line-height: 1;
  }
  .productmodal .modal-dialog .modal-header .close {
    font-size: 14px;
    color: #000;
    position: relative;
    top: 0;
    
    right: 0;
    
    float: none;
    padding: 0;
    margin: 0;
    opacity: 1;
    line-height: 0;
  }
  .productmodal .modal-dialog .modal-header .close:hover {
    color: #222222;
  }

  /* modal-body css */
  .productmodal .modal-dialog{
    max-width: 800px;
  }
  .productmodal .modal-dialog .modal-body {
    padding: 15px 0px;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }
  .productmodal .modal-dialog .modal-body .quick-view-img {
    width: 350px;
    
    padding-left: 15px;
    
  }
  .productmodal .modal-dialog .modal-body .quick-view-content {
    padding: 0 15px;
    width: calc(100% - 350px);
    max-height: 335px;
    overflow-y: auto;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .product-title h6 {
    font-size: 20px;
    text-transform: capitalize;
    line-height: 1;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .price-box {
    margin-top: 12px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .price-box span.new-price{
    font-size: 18px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .price-box span.old-price{
    font-size: 16px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .product-ratting {
    margin-top: 15px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .product-ratting .rating .spr-badge {
    display: flex;
    align-items: center;
    line-height: 1;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .product-ratting .rating .spr-badge .spr-starrating i.spr-icon {
    font-size: 14px !important;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .product-ratting .rating .spr-badge .spr-badge-caption {
    display: block;
    
    margin-left: 15px;
    
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .product-desc {
    margin-top: 10px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content .product-desc p{
    font-size: 16px;
  }
  @media (max-width: 991px){
    .productmodal .modal-dialog{
      max-width: 710px;
    }
  }

  /* modal variant css */
  .productmodal .modal-dialog .modal-body .quick-view-content form {
    margin-top: 20px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .quick-view-select .variants_selects .selector-wrapper {
    margin-top: 27px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .quick-view-select .variants_selects .selector-wrapper:first-of-type {
    margin-top: 0px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .quick-view-select .variants_selects .selector-wrapper label {
    display: block;
    color: #222;
    font-size: 18px;
    margin-bottom: 15px;
    font-weight: 600;
    line-height: 1;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .quick-view-select .variants_selects .selector-wrapper select {
    width: 100%;
    
    background-position: right 30px center;
    
    text-transform: capitalize;
  }

  /* modal quantity css */
  .productmodal .modal-dialog .modal-body .quick-view-content form .product-quantity-action {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-top: 27px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .product-quantity-action h6{
    font-size: 18px;
    text-transform: capitalize;
    line-height: 1;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .product-quantity-action .product-quantity {
    margin-top: 15px;
  }

  /* modal button css */
  .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons{
    display: flex;
    margin-top: 18px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons button,
  .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons a{
    color: #fff;
    font-size: 15px;
    background-color: #222222;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons button{
    padding: 12px 45px;
    height: 50px;
    display: flex;
    align-items: center;
    text-transform: capitalize;
    font-weight: 500;
    
    margin-right: 5px;
    
    border-radius: 5px;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons a{
    width: 50px;
    height: 50px;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    border-radius: 5px;
    line-height: 0;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons button:hover,
  .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons a:hover{
    background-color: #53a16e;
  }
  .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons a svg{
    width: 18px;
    height: 18px;
  }
  @media (max-width: 767px) {
    .productmodal .modal-dialog .modal-body{
      padding: 15px;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      flex-direction: column;
      overflow: auto;
    }
    .productmodal .modal-dialog .modal-body .quick-view-img{
      width: 100%;
      
      padding-left: 0px;
      
    }
    .productmodal .modal-dialog .modal-body .quick-view-content{
      width: 100%;
      padding: 0 0;
      margin-top: 15px;
      max-height: 100%;
      overflow-y: unset;
    }
  }
</style>

<script>
  $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
  $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
  $(".qtybutton").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    $button.parent().find("input").val(newVal);
  });
</script><script>
  $('.ajax-spin-cart').on('click', function() {
    $(this).addClass('loading add-item');
    setTimeout(function () {
      $('.ajax-spin-cart').removeClass('loading');
    },1000);
    setTimeout(function () {
      $('.ajax-spin-cart').removeClass("add-item");
    },2000);

  });
</script><script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/wishlist.js?v=137053905310824768321617597770" type="text/javascript"></script>
<script>  
  /* Ajax Wishlist */
  $(".action-wishlist").on('click', function(){
    $(this).addClass("loading-wishlist adding-wishlist");
    setTimeout(function () {
      $(".action-wishlist").removeClass("loading-wishlist");
    },1000);
    setTimeout(function () {
      $(".adding-wishlist").removeClass("adding-wishlist");
    },2000);

  });

  (function() {
    Wishlist.init();
  }());
</script><!-- Recently Viewed Products --><script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/jquery.currencies.min.js?v=35452912321688254271617597752" type="text/javascript"></script>

<script>

  // Pick your format here:
  // money_format or money_with_currency_format
  Currency.format = 'money_format';

  var shopCurrency = 'GBP';

  /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
  Currency.moneyFormats[shopCurrency].money_with_currency_format = "£{{amount}} GBP";
  Currency.moneyFormats[shopCurrency].money_format = "£{{amount}}";

  var cookieCurrency;
  try {cookieCurrency = Currency.cookie.read();} catch (err) {} // ignore errors reading cookies

  // Fix for customer account pages.
  jQuery('span.money span.money').each(function() {
    jQuery(this).parents('span.money').removeClass('money');
  });

  // Saving the current price.
  jQuery('span.money').each(function() {
    jQuery(this).attr('data-currency-GBP', jQuery(this).html());
                      });

    // Select all your currencies buttons.
    var buttons = jQuery('.currency li');

    // If there's no cookie or it's the shop currency.
    if (cookieCurrency == null || cookieCurrency === shopCurrency) {
      buttons.removeClass('active');
      jQuery('.currency li[data-currency=' + shopCurrency + ']').addClass('active');
      Currency.currentCurrency = shopCurrency;
      jQuery(".current-currency").text(shopCurrency);
    }
    else {
      Currency.convertAll(shopCurrency, cookieCurrency);
      buttons.removeClass('active');
      jQuery('.currency li[data-currency=' + cookieCurrency + ']').addClass('active');
      jQuery(".current-currency").text(cookieCurrency);
    }

    // When customer clicks on a currency button.
    buttons.click(function() {
      buttons.removeClass('active');
      var cur = jQuery(this).attr('data-currency');
      jQuery( ".currency li[data-currency='" + cur + "']" ).addClass('active');

      var newCurrency =  jQuery(this).attr('data-currency');
      if(newCurrency == Currency.currentCurrency)
      {
        Currency.convertAll(shopCurrency, newCurrency);
      }
      else
      {
        Currency.convertAll(Currency.currentCurrency, newCurrency);
      }

      jQuery(".current-currency").text(cur);
    });

    // For product options.
    var main_selectCallback = window.selectCallback;
    var selectCallback = function(variant, selector) {
      main_selectCallback(variant, selector);
      Currency.convertAll(shopCurrency, jQuery(".currency .active").attr('data-currency'));
    };
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-110326897-1', 'auto');
     ga('send', 'pageview');

</script>



<script>
    // ensure these are available to the global window, for use in the bootstrap js asset
    window.BOLD_mc_bootstrapSettings = {
        shopDomainUrl: 'https://mc.boldapps.net/labella-store-coffee.myshopify.com',
        flagsAssetUrl: '//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/flags.min.css?v=96997777027052313421617597740',
        pickerCssAssetUrl: '//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/bold-currency-picker.css?v=139973479117655874991617597736',
        productOriginalPrice: ""
    };
</script>
<script src="https://mc.boldapps.net/install_assets/bold.multicurrency.js" defer></script>
<script src="//cdn.shopify.com/s/files/1/0557/1965/7630/t/2/assets/bold-currency-bootstrap.js?v=172784488555041320471617597735" defer></script>
<script type="text/template" id="bold-currency-picker-template">
    <div class="BOLD-mc-picker multi">
        <div class="currentCurrency loading" data-current-currency>
            <span class="flag flag-loading" data-flag></span>
            <span class="name" data-name>&bull;&bull;&bull;</span>
            <span class="chevron">
                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path d="M13.148 10.398l-1.297 1.289q-0.148 0.148-0.352 0.148t-0.352-0.148l-4.148-4.148-4.148 4.148q-0.148 0.148-0.352 0.148t-0.352-0.148l-1.297-1.289q-0.148-0.148-0.148-0.355t0.148-0.355l5.797-5.789q0.148-0.148 0.352-0.148t0.352 0.148l5.797 5.789q0.148 0.148 0.148 0.355t-0.148 0.355z" /></svg>
            </span>
        </div>
        <ul class="currencyList" data-currency-list></ul>
    </div>
</script>

<script type="text/template" id="bold-currency-picker-mount-template">

<span style="display:none;" class="BOLD-mc-picker-mnt" data-open="up" g-bold-mc-picker-mnt></span>
</script>
<style>
      
      .top-bg-img{
        background-color: #222222;
      }
      
      
      .footer-bottom-bgimg{
        background-image: url('//cdn.shopify.com/s/files/1/0557/1965/7630/files/foter.jpg?v=1617627989');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        position: relative;
        z-index: 1;
      }
      
      .footer-bottom-bgimg::before{
        content: "";
        background-image: url('//cdn.shopify.com/s/files/1/0557/1965/7630/files/pattern-footer.png?v=1617625160');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 228px;}
      
      .footer-bottom-bgimg::after{
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #000000;
        opacity: 0.8;
        z-index: -1;
      }
      @media (max-width: 1599px) and (min-width: 1360px) {
        .footer-bottom-bgimg::before{
          height: 170px;
        }
      }
      @media (max-width: 1366px) and (min-width: 767px) {
        .footer-bottom-bgimg::before{
          height: 162px;
        }
      }
      @media (max-width: 1359px) and (min-width: 1200px) {
        .footer-bottom-bgimg::before{
          height: 150px;
        }
      }
      @media (max-width: 1199px) {
        .footer-bottom-bgimg::before{
          height: 122px;
        }
      }
      @media (max-width: 991px) {
        .footer-bottom-bgimg::before{
          height: 91px;
        }
      }
      @media (max-width: 767px) {
        .footer-bottom-bgimg::before{
          height: 71px;
        }
      }
      @media (max-width: 479px) {
        .footer-bottom-bgimg::before{
          height: 50px;
        }
      }
      
    </style>
  </body>
</html>
