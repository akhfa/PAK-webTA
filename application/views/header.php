<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<head>
    <title>The Educare Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--slider-->
    <link href="<?php echo base_url() ?>css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <script src="<?php echo base_url() ?>js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/jquery.flexslider.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            SyntaxHighlighter.all();
        });
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 210,
                itemMargin: 5,
                minItems: 2,
                maxItems: 4,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</head>