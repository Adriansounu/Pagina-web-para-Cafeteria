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
        $GLOBALS['RFC'] = $campo['RFC'];
        $GLOBALS['Direccion'] = $campo['Direccion'];
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
    Usuario
    
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
  <a class="acc-ti" data-toggle="collapse" href="#store-account">
    <span class="acc-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
  </a>
  
  <div class="acc-re-lo collapse" id="store-account">
   <p><?php
     $usuario=$_SESSION;
     if(!isset($usuario)){
     header("location:index.php");
     }else{
       echo"<a href='destruir.php'> salir </a>";
     }
     ?></p>
    <a href="datos.php">Mis datos</a>
  </div>  
  
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
                        
                        <h2>Bienvenido <?php
     echo $_SESSION['Nombres']?>&nbsp;<?php echo $_SESSION['Apellidos']?></h2>
                        
                    </div>
                    <!-- breadcrumb main-title end-->

                    <!-- breadcrumb-list start -->
                    
<ul class="breadcrumb-list">
  

  <li class="breadcrumb-item">
    <span>Ten un Excelente dia</span>
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
</div><div id="ofertas" class="shopify-section"><section class="best-category">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="collection-category">
          <div class="side-section-capture side-left">
            <div class="side-section-title">
              
              <h2>
                
                <span>Tus Productos</span>
                

                
                <span class="main-title">Favoritos</span>
                
              </h2>
              

              
            </div>
            <div class="view-all-wrap">
              </a>
            </div>
          </div>
          
          <div class="collection-slider owl-carousel owl-theme" id="pro-best-1617702898bd336dba">
            
            
            <div class="item">
              <div class="single-product-wrap">
    <div class="product-image">
        <a class="pro-img" href="/products/mango-caramel-crunch">
            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/1-min_510X510_crop_center.jpg?v=1617711775" alt="Mango Caramel Crunch">
            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/5-min_510X510_crop_center.jpg?v=1617711779" alt="Mango Caramel Crunch" />
        </a>
        <div class="product-label">
<span class="percent-count">-5%</span>



</div>

        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

            
            <a href="javascript:void(0);" onclick="quiqview('mango-caramel-crunch')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748614814, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
    <div class="product-content">
        <h6>
           <a href="/products/mango-caramel-crunch" title="Mango Caramel Crunch">Mango Caramel Crunch</a>
        </h6>
        <div class="price-box">
            
            <span class="old-price"><span class=money>$210.00</span></span>
            
            <span class="new-price"><span class=money>$200.00</span></span>
        </div>
        <div class="product-ratting">
            <span class="shopify-product-reviews-badge" data-id="6633826746526"></span>
        </div>
        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
</p>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>


            <a href="javascript:void(0);" onclick="quiqview('mango-caramel-crunch')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748614814, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
</div>
            </div>
            
            <div class="item">
              <div class="single-product-wrap">
    <div class="product-image">
        <a class="pro-img" href="/products/caramel-cloud-macchiato-1">
            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/9-min_a8455c65-98ca-41cf-81ac-2c5d6cddff67_510X510_crop_center.jpg?v=1617712214" alt="Caramel Cloud Macchiato">
            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/13-min_e5703df9-8921-48fd-a899-aa97bdcc4c07_510X510_crop_center.jpg?v=1617712218" alt="Caramel Cloud Macchiato" />
        </a>
        <div class="product-label">

<span class="percent-count">-3%</span>
</div>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

            
            <a href="javascript:void(0);" onclick="quiqview('caramel-cloud-macchiato-1')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748516510, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
    <div class="product-content">
        <h6>
           <a href="/products/caramel-cloud-macchiato-1" title="Caramel Cloud Macchiato">Caramel Cloud Macchiato</a>
        </h6>
        <div class="price-box">
            
            <span class="old-price"><span class=money>$180.00</span></span>
            
            <span class="new-price"><span class=money>$174.00</span></span>
        </div>
        <div class="product-ratting">
            <span class="shopify-product-reviews-badge" data-id="6633826680990"></span>
        </div>
        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
</p>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>


            <a href="javascript:void(0);" onclick="quiqview('caramel-cloud-macchiato-1')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748516510, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
</div>
            </div>
            
            <div class="item">
              <div class="single-product-wrap">
    <div class="product-image">
        <a class="pro-img" href="/products/double-chocolate-chip">
            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/7-min_9fc89350-7a36-4414-9f9b-0d9306e5e43c_510X510_crop_center.jpg?v=1617712137" alt="Double Chocolate Chip">
            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/12-min_510X510_crop_center.jpg?v=1617712142" alt="Double Chocolate Chip" />
        </a>
        <div class="product-label">
<span class="percent-count">-17%</span>



</div>

        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

            
            <a href="javascript:void(0);" onclick="quiqview('double-chocolate-chip')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748385438, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
    <div class="product-content">
        <h6>
           <a href="/products/double-chocolate-chip" title="Double Chocolate Chip">Double Chocolate Chip</a>
        </h6>
        <div class="price-box">
            
            <span class="old-price"><span class=money>$138.00</span></span>
            
            <span class="new-price"><span class=money>$115.00</span></span>
        </div>
        <div class="product-ratting">
            <span class="shopify-product-reviews-badge" data-id="6633826615454"></span>
        </div>
        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
</p>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>


            <a href="javascript:void(0);" onclick="quiqview('double-chocolate-chip')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748385438, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
</div>
            </div>
            
            <div class="item">
              <div class="single-product-wrap">
    <div class="product-image">
        <a class="pro-img" href="/products/espresso-macchiato-coffee">
            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/2-min_a948a515-5b21-4921-80a6-260a5645ea2b_510X510_crop_center.jpg?v=1617711905" alt="Espresso Macchiato Coffee">
            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/14-min_510X510_crop_center.jpg?v=1617711906" alt="Espresso Macchiato Coffee" />
        </a>
        <div class="product-label">
<span class="percent-count">-7%</span>
</div>

        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

            
            <a href="javascript:void(0);" onclick="quiqview('espresso-macchiato-coffee')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748188830, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
    <div class="product-content">
        <h6>
           <a href="/products/espresso-macchiato-coffee" title="Espresso Macchiato Coffee">Espresso Macchiato Coffee</a>
        </h6>
        <div class="price-box">
            
            <span class="old-price"><span class=money>$215.00</span></span>
            
            <span class="new-price"><span class=money>$200.00</span></span>
        </div>
        <div class="product-ratting">
            <span class="shopify-product-reviews-badge" data-id="6633826549918"></span>
        </div>
        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
</p>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>


            <a href="javascript:void(0);" onclick="quiqview('espresso-macchiato-coffee')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748188830, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
</div>
            </div>
            
            <div class="item">
              <div class="single-product-wrap">
    <div class="product-image">
        <a class="pro-img" href="/products/chocolate-caramel-crunch-1">
            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/5-min_2be9cf66-7d48-419d-ac56-0a3325da6f6f_510X510_crop_center.jpg?v=1617712054" alt="Chocolate Caramel Crunch">
            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/1-min_452e0ec3-69b8-4e4d-af1e-90b437891243_510X510_crop_center.jpg?v=1617712054" alt="Chocolate Caramel Crunch" />
        </a>
        <div class="product-label">
</div>

        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

            
            <a href="javascript:void(0);" onclick="quiqview('chocolate-caramel-crunch-1')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748090526, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
    <div class="product-content">
        <h6>
           <a href="/products/chocolate-caramel-crunch-1" title="Chocolate Caramel Crunch">Chocolate Caramel Crunch</a>
        </h6>
        <div class="price-box">
            
            <span class="new-price"><span class=money>$230.00</span></span>
        </div>
        <div class="product-ratting">
            <span class="shopify-product-reviews-badge" data-id="6633826517150"></span>
        </div>
        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
</p>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>


            <a href="javascript:void(0);" onclick="quiqview('chocolate-caramel-crunch-1')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566748090526, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
</div>
            </div>
            
            <div class="item">
              <div class="single-product-wrap">
    <div class="product-image">
        <a class="pro-img" href="/products/iced-chocolate-mocha">
            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/4-min_70d1b2f5-a11a-4ec0-95e4-a1e2cceff6a8_510X510_crop_center.jpg?v=1617712000" alt="Iced Chocolate Mocha">
            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/10-min_510X510_crop_center.jpg?v=1617712014" alt="Iced Chocolate Mocha" />
        </a>
        <div class="product-label">
</div>

        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

            
            <a href="javascript:void(0);" onclick="quiqview('iced-chocolate-mocha')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566747992222, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
    <div class="product-content">
        <h6>
           <a href="/products/iced-chocolate-mocha" title="Iced Chocolate Mocha">Iced Chocolate Mocha</a>
        </h6>
        <div class="price-box">
            
            <span class="old-price"><span class=money>$150.00</span></span>
            
            <span class="new-price"><span class=money>$150.00</span></span>
        </div>
        <div class="product-ratting">
            <span class="shopify-product-reviews-badge" data-id="6633826451614"></span>
        </div>
        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
</p>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>


            <a href="javascript:void(0);" onclick="quiqview('iced-chocolate-mocha')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566747992222, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
</div>
            </div>
            
            <div class="item">
              <div class="single-product-wrap">
    <div class="product-image">
        <a class="pro-img" href="/products/caramel-cloud-macchiato">
            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/8-min_b82d3683-3973-4400-a66e-446f7bb06898_510X510_crop_center.jpg?v=1617712172" alt="Caramel Cloud Macchiato">
            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/12-min_90c6afc2-dd6d-427e-b869-c59a22a554a3_510X510_crop_center.jpg?v=1617712175" alt="Caramel Cloud Macchiato" />
        </a>
        <div class="product-label">







</div>

        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

            
            <a href="javascript:void(0);" onclick="quiqview('caramel-cloud-macchiato')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566747795614, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
    <div class="product-content">
        <h6>
           <a href="/products/caramel-cloud-macchiato" title="Caramel Cloud Macchiato">Caramel Cloud Macchiato</a>
        </h6>
        <div class="price-box">
            
            <span class="new-price"><span class=money>$60.00</span></span>
        </div>
        <div class="product-ratting">
            <span class="shopify-product-reviews-badge" data-id="6633826386078"></span>
        </div>
        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
</p>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>


            <a href="javascript:void(0);" onclick="quiqview('caramel-cloud-macchiato')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566747795614, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
</div>
            </div>
            
            <div class="item">
              <div class="single-product-wrap">
    <div class="product-image">
        <a class="pro-img" href="/products/vietnamese-cold-brew">
            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/6-min_8b86823a-2402-4489-b2ed-fee2fe11d4bb_510X510_crop_center.jpg?v=1617712088" alt="Vietnamese Cold Brew">
            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/11-min_510X510_crop_center.jpg?v=1617712090" alt="Vietnamese Cold Brew" />
        </a>
        <div class="product-label">
        span class="percent-count">-11%</span>



</div>

        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

            
            <a href="javascript:void(0);" onclick="quiqview('vietnamese-cold-brew')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566747533470, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
    <div class="product-content">
        <h6>
           <a href="/products/vietnamese-cold-brew" title="Vietnamese Cold Brew">Vietnamese Cold Brew</a>
        </h6>
        <div class="price-box">
            
            <span class="old-price"><span class=money>$140.00</span></span>
            
            <span class="new-price"><span class=money>$125.00</span></span>
        </div>
        <div class="product-ratting">
            <span class="shopify-product-reviews-badge" data-id="6633826320542"></span>
        </div>
        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
</p>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>


            <a href="javascript:void(0);" onclick="quiqview('vietnamese-cold-brew')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566747533470, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
</div>
            </div>
            
            <div class="item">
              <div class="single-product-wrap">
    <div class="product-image">
        <a class="pro-img" href="/products/iced-latte-coffee">
            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/3-min_0b3892fe-5995-4152-b2e4-8fbf8ec9d0b3_510X510_crop_center.jpg?v=1617711961" alt="Iced Latte Coffee">
            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0557/1965/7630/products/6-min_f7b6ca1b-948f-4c74-801c-ebe11134c683_510X510_crop_center.jpg?v=1617711966" alt="Iced Latte Coffee" />
        </a>
        <div class="product-label">







<span class="percent-count">-17%</span>



</div>

        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>

            
            <a href="javascript:void(0);" onclick="quiqview('iced-latte-coffee')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566747238558, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
    <div class="product-content">
        <h6>
           <a href="/products/iced-latte-coffee" title="Iced Latte Coffee">Iced Latte Coffee</a>
        </h6>
        <div class="price-box">
            
            <span class="old-price"><span class=money>£36.00</span></span>
            
            <span class="new-price"><span class=money>£30.00</span></span>
        </div>
        <div class="product-ratting">
            <span class="shopify-product-reviews-badge" data-id="6633826189470"></span>
        </div>
        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
</p>
        <div class="product-action">
            
<a href="/account/login" class="wishlist">
	<span class="tooltip-text">Wishlist</span>
  	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
</a>


            <a href="javascript:void(0);" onclick="quiqview('iced-latte-coffee')" class="quick-view">
                <span class="tooltip-text">Quickview</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>

            
            <a href="javascript:void(0);" onclick="Shopify.addItem(39566747238558, 1); return false;" class="add-to-cart ajax-spin-cart">
                <span class="tooltip-text">Add to cart</span>
                <span>
                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                    <span class="cart-loading animated infinite rotateOut"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg></span>
                    <span class="cart-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
            </a>
            
        </div>
    </div>
</div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  $( document ).ready(function() {
    $('#pro-best-1617702898bd336dba').owlCarousel({
      loop: false,
      rewind: true,
      margin: 20,
      nav: true,
      navText: ['<i class="ti-arrow-left"></i>','<i class="ti-arrow-right"></i>'],
      dots: false,autoplay: true,
      sautoplayTimeout: 5000,
      autoplayHoverPause: true,
      responsive:{
        0:{
          items: 1,
          margin: 15
        },
        479:{
          items: 1,
          margin: 15
        },
        540:{
          items: 2,
          margin: 15
        },
        768:{
          items: 2
        },
        979:{
          items: 3
        },
        1199:{
          items: 4
        },
        1599:{
          items: 5
        }
      }
    });
  });
</script>


<style>
  .best-category {
    padding-top: 100px;
    padding-bottom: 100px;

    
  }
  @media (max-width: 1199px) {
    .best-category {
      padding-top: 70px;
      padding-bottom: 70px;
    }
  }
  @media (max-width: 767px) {
    .best-category {
      padding-top: 50px;
      padding-bottom: 50px;
    }
  }

  /* view all css */
  .view-all-wrap a{
    display: flex;
    color: #333;
    font-size: 16px;
    text-transform: capitalize;
    font-weight: 500;
    line-height: 1;
    -webkit-transition: all 0s ease-in-out 0s;
    -o-transition: all 0s ease-in-out 0s;
    transition: all 0s ease-in-out 0s;
  }
  .view-all-wrap a:hover{
    color: #53a16e;
  }
  .view-all-wrap a span{
    display: block;margin-right: 5px;}
  .view-all-wrap a i{
    display: block;
    font-weight: 600;}
  @media (max-width: 479px) {
    .view-all-wrap{
      margin-top: 15px;
    }
  }