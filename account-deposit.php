<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/superheader.php';
$Title = 'Draftpot';
$Price = true;
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<div class="search-container">
    <img src="/images/search.png" alt=""  class="padding-left search-icon"/>
    <div class="search-text"><input type="text" placeholder="Search"/></div>
    <div class="search-sort">Sort</div>
</div>
<div class="lineup-container blue-background center">
    <div class="lineup-text center">Deposit Money</div>
</div>
<div class="lineup-parent">
    <div class="lineup-children large-child center">
        $___
    </div>
</div>
<div class="lineup-container green-background center">
    <div class="lineup-text center">Deposit</div>
</div>
<div class="footer thin-top-border">
    <table class="account-table">
        <tr>
            <td style="width:16.7%;">
                <div class="footer-button streamline footer-button-active "><img src="/images/gray/leftarrow.png" class="svg" alt="" /></div>
            </td>
            <td style="width:16.7%;">
                <div class="footer-button trophy"><img src="/images/gray/clock.png" class="svg" alt="" /></div>
            </td>
            <td style="width:16.7%;">
                <div class="footer-button user"><img src="/images/green/moneyup.png" class="svg" alt="" /></div>
            </td>
            <td style="width:16.7%;">
                <div class="footer-button user"><img src="/images/gray/moneydown.png" class="svg" alt="" /></div>
            </td>
            <td style="width:16.7%;">
                <div class="footer-button user"><img src="/images/gray/addperson.png" class="svg" alt="" /></div>
            </td>
            <td style="width:16.7%;">
                <div class="footer-button user"><img src="/images/gray/cert.png" class="svg" alt="" /></div>
            </td>
        </tr>
    </table>
</div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
