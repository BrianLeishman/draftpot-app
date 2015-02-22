<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/superheader.php';
$Title = 'Draftpot';
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
$Lineups = array('Lineup 1' => array(), 'Lineup 2' => array(), 'Lineup 3' => array());
for ($i = 0; $i < 5; $i++) {
    $Lineups['Lineup 1'][] = array(rand(5, 60), rand(1, 30), rand(45, 900), rand(1, 50), rand(0, 1));
}
for ($i = 0; $i < 6; $i++) {
    $Lineups['Lineup 2'][] = array(rand(5, 60), rand(1, 30), rand(45, 900), rand(1, 50), rand(0, 1));
}
for ($i = 0; $i < 4; $i++) {
    $Lineups['Lineup 3'][] = array(rand(5, 60), rand(1, 30), rand(45, 900), rand(1, 50), rand(0, 1));
}
?>
<div class="search-container">
    <img src="/images/search.png" alt=""  class="search-icon"/>
    <div class="search-text"><input type="text" placeholder="Search"/></div>
    <div class="search-sort">Sort</div>
</div>
<?php
foreach ($Lineups as $Key => $Lineup) {
    ?>
    <div class="lineup-container">
        <div class="lineup-text"><?php echo $Key; ?></div>
        <div class="pool-total">Total: $<?php echo $Lineup[0][0]; ?></div>
        <div class="arrow"><img class="icon" src="/images/white-arrow-down.png" /></div>
    </div>
    <div class="lineup-parent">
        <div class="lineup-children">
            <?php
            foreach ($Lineup as $row) {
                ?>
                <div class="lineup-row">
                    <div class="pools-text">
                        <div class="green reg">$<?php echo $row[2]; ?></div> <div class="black lite">Prize</div><br />
                        <div class="black thin">Today at 7:00 PM</div> <div class="small gray">ET</div><br />
                        <div class="small black thin">Entries: </div> <div class="small dark-gray reg bold"><?php echo $row[3]; ?>/50</div> <div class="small blue reg">Unlimited Entries</div>
                    </div>
                    <div class="delete pools-delete"><?php echo ($row[4]) ? '<img class="icon red-x" src="/images/red-x.png" alt="X" />' : ' '; ?></div>
                    <div class="empty-photo"></div>
                    <div class="position pools-empty-position">$<?php echo $row[1]; ?></div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
<?php } ?>
<div style="border-bottom:2px solid #d3d4d6;"></div>
<div class="footer">
    <table>
        <tr>
            <td style="width:12%;">
                <div class="footer-button streamline footer-button-active "><img src="/images/green/streamline.png" class="svg" alt="" /></div>
            </td>
            <td style="width:12%;">
                <div class="footer-button trophy"><img src="/images/gray/trophy.png" class="svg" alt="" /></div>
            </td>
            <td style="width:12%;">
                <div class="footer-button user"><img src="/images/gray/user.png" class="svg" alt="" /></div>
            </td>
            <td>
                <div class="footer-button footer-button-active footer-next">Enter</div>
            </td>
        </tr>
    </table>
</div>
<script type="text/javascript">
    <!--
    $(function () {
        $('.lineup-children').find('.lineup-row:last-child').css('border-bottom', 'none');
    });
    //-->    
</script>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
