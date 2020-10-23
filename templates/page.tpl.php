<!DOCTYPE html>
<html>
    <head>
        <title>Thought Provoking</title>
        <link rel="stylesheet" href="/bower_components/angular_material/angular-material.min.css">
    </head>
    <body>
        <!-- Angular Material requires Angular.js Libraries -->
        <script src="/bower_components/angular/angular.min.js"></script>
        <script src="/bower_components/angular-animate/angular-animate.min.js"></script>
        <script src="/bower_components/angular-aria/angular-aria.min.js"></script>
        <script src="/bower_components/angular-messages/angular-messages.min.js"></script>

        <!-- Angular Material Library -->
        <script src="/bower_components/angular_material/angular-material.min.js">
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