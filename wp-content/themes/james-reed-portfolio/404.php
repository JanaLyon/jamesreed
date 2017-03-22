<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="keywords" content="404 - page not found - reed.co.uk" />
    <meta name="description" content="Unfortunately, the page that you tried to visit no longer exists on reed.co.uk. This may be because you typed in the URL (web address) incorrectly or because you followed an out of date link to a page previously on the site." />
    <title>404 - page not found - reed.co.uk</title>
    <link href="/resources/responsive/css/common/core.css" rel="stylesheet" type="text/css" />
    <link href="/resources/responsive/css/error/404.css" rel="stylesheet" type="text/css"/>
    <script src="/resources/responsive/javascript/lib/respond/respond.min.js"></script>
    <script src="/resources/responsive/javascript/lib/modernizr/modernizr.js"></script>
</head>
<body>
<div id="main">
    <section class="content">
        <a href="/" class="logo-link" title="Go to homepage">
            <img src="/resources/responsive/images/error/responsive-404-logo.png" alt="reed.co.uk logo" class="logo">
        </a>
        <div class="inner-content">
            <h1 class="title">
                <span class="reason">Page not found.</span>This page has lost the will to work.
            </h1>
            <a href="/james-reed/" title="Go to homepage" class="button button-primary" id="back-to-homepage">
                Go to homepage
            </a>
        </div>
    </section>
    <footer class="footer-text">
        Copyright &copy; reed.co.uk <span id="footer-date"></span>
    </footer>
</div>

<script>
    (function () {
        var d = new Date(),
            y = d.getFullYear(),
            elem = document.getElementById("footer-date");
        elem.innerHTML = y;
    })();
</script>
</body>
</html>
