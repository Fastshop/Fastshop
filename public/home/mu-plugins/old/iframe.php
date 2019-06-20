<?php

add_action('admin_head-index.php', 'wpse_73561_dashboard_scripts');

function wpse_73561_dashboard_scripts() {
    ?>
    <style>
        .wrap h2, .postbox .handlediv, #icon-index { display: none }
        #wpcontent { margin-left: 0 !important }
    </style>
    <script type="text/javascript">
        function sizeIFrame() {
            var helpFrame = jQuery("#myframe");
            var innerDoc = (helpFrame.get(0).contentDocument)
                ? helpFrame.get(0).contentDocument
                : helpFrame.get(0).contentWindow.document;
            
            helpFrame.height(innerDoc.body.scrollHeight + 35);
        }
        
        jQuery(function() {
            sizeIFrame();
            jQuery("#myframe").load(sizeIFrame);
        });
        
        jQuery(document).ready(function($) {
            $('#wpbody').html(
                '<iframe src="/demo"' +
                ' frameborder="0" id="myframe"' +
                ' style="margin:0;padding:0;left:0;top:0"' +
                ' scrolling="auto"' + ' width="100%" height="100%"></iframe>'
            );
        });
    </script>
    <?php
}
