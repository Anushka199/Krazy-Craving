<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krazy Craving</title>

    <!-- JQuery mobile package imports-->
    <link rel="stylesheet" href="resources\css\jquery.mobile-1.4.5.min.css"/>
    <script src="resources\js\jquery.min.js"></script>
    <script src="resources\js\jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <!-- Start of first page -->
    <div data-role="page" id="mainpage">
        <div data-role="header">
            <h1>Main Page</h1>
        </div>
        <div role="main" class="ui-content">
            <p>I'm first in the source order so I'm shown as the page.</p>
            <p>View internal page called <a href="#subpage">bar</a></p>
        </div>
        <div data-role="footer" data-position="fixed">
            <h4>Footer</h4>
        </div>
    </div>

    <!-- Start of second page -->
    <div data-role="page" id="subpage">
        <div data-role="header">
            <h1>Sub Page</h1>
        </div>
        <div role="main" class="ui-content">
            <p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>
            <p><a href="#mainpage">Back to foo</a></p>
        </div>
        <div data-role="footer" data-position="fixed">
            <h4>Footer</h4>
        </div>
    </div>
</body>
</html>