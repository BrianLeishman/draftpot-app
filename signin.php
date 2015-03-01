<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/superheader.php';
$Title = 'Welcome';
$Header = false;
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>

<div class="landing-logo">dp</div>
<div class="green-stripe"></div>
<div class="landing-text">The New Way To Win A Jackpot</div>
<div class="landing-fields">
    <input type="text" placeholder="Username" />
    <input type="password" placeholder="Password" />
</div>
<div class="landing-button-container">
    <div class="landing-button">
        <div class="landing-button-text">Sign In</div> <img class="icon landing-right" src="/images/white-arrow-down.png" alt=""/>
    </div>
</div>
<div class="landing-disclaimer">
    By signing in, you maintain that you are at least 18<br />years of age and agree to the terms of service
</div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
