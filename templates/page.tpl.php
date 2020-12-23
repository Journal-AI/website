<!DOCTYPE html>
<html>
    <head>
        <title>Journal-AI</title>
        <link rel="stylesheet" href="/assets/style/style.css">
        <link rel="stylesheet" href="/assets/style/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/bower_components/Font-Awesome/css/all.min.css">
        <link rel="stylesheet" href="/bower_components/flat-social-icons/flat-icons.css">
        <link rel="shortcut icon" type="image/x-icon" href="../site-images/journal-ai.ico" />
        <link rel="icon" type="image/x-icon" href="../site-images/journal-ai.ico">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
    </head>
    <body>
        <!-- Angular.js Libraries -->
        <script src="/bower_components/angular/angular.min.js"></script>
        <script src="/bower_components/angular-animate/angular-animate.min.js"></script>
        <script src="/bower_components/angular-aria/angular-aria.min.js"></script>
        <script src="/bower_components/angular-messages/angular-messages.min.js"></script>

        <div class="clearfix" id="header_fixed">
            <div id="page_header" class="container-fluid">
                <?php require_once "header.tpl.php"; ?>
            </div>
        </div>
        <div class="clearfix" id="page_full">
            <div id="page_body">
                <?php echo $html_content; ?>
            </div>

            <div id="page_footer">
                <div class="container">
                    <?php require_once "footer.tpl.php"; ?>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="/assets/style/script.js"></script>
    </body>
</html>