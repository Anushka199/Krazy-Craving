<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krazy Craving</title>

    <!-- JQuery Mobile import-->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <!-- Start of first page -->
    <div data-role="page" id="foo">
        <div data-role="header">
            <h1>Foo</h1>
        </div>
        <div role="main" class="ui-content">
            <p>I'm first in the source order so I'm shown as the page.</p>
            <p>View internal page called <a href="#bar">bar</a></p>
        </div>
        <div data-role="footer">
            <h4>Page Footer</h4>
        </div>
    </div>

    <!-- Start of second page -->
    <div data-role="page" id="bar">
        <div data-role="header">
            <h1>Bar</h1>
        </div>
        <div role="main" class="ui-content">
            <p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>
            <p><a href="#foo">Back to foo</a></p>
        </div>
        <div data-role="footer">
            <h4>Page Footer</h4>
        </div>
    </div>
</body>
</html>