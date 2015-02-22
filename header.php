<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo $Title; ?></title>
        <link rel="stylesheet" type="text/css" href="/css/core.css" />
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/jquery-ui.min.js"></script>
        <script type="text/javascript">
            <!--
            var urlbase = '<?php echo $urlbase; ?>';
            //--></script>
        <script type="text/javascript" src="/js/core.js"></script>
    </head>
    <body>
        <div class="header">
            <meta name="viewport" content="initial-scale=.5, user-scalable=no" />
            <img class="logo" src="/images/logo.png" alt=""/>
            <div class="header-button header-button-mlb reg">MLB</div> <div class="header-button header-button-nba">NBA</div> <div class="header-button header-button-nhl">NHL</div>

            <div class="header-underline"> </div>
            <?php if ($Price) { ?><div class="header-price">$457</div><?php } ?>
        </div>
        <div class="content">