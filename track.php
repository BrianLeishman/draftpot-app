<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/superheader.php';
$Title = 'Draftpot';
$Price = true;
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
$Lineups = array('Entered Contests' => array(), 'Upcoming Contests' => array(), 'Past Contests' => array());
for ($i = 0; $i < 5; $i++) {
    $Lineups['Entered Contests'][] = array(rand(5, 60), rand(1, 30), rand(45, 900), rand(1, 50), 1, rand(0, 1));
}
for ($i = 0; $i < 6; $i++) {
    $Lineups['Upcoming Contests'][] = array(rand(5, 60), rand(1, 30), rand(45, 900), rand(1, 50), 2, rand(0, 1));
}
for ($i = 0; $i < 4; $i++) {
    $Lineups['Past Contests'][] = array(rand(5, 60), rand(1, 30), rand(45, 900), rand(1, 50), 3, rand(0, 1));
}
?>
<?php
foreach ($Lineups as $Key => $Lineup) {
    ?>
    <div class="lineup-container <?php if ($Lineup[0][4] == '3') { ?>gray-background<?php } else if ($Lineup[0][4] == '2') { ?>blue-background<?php } ?>">
        <div class="lineup-text"><?php echo $Key; ?></div>
        <div class="arrow"><img class="icon" src="/images/white-arrow-down.png" /></div>
    </div>
    <div class="lineup-parent">
        <?php if ($Lineup[0][4] == '3') { ?>
            <div class="search-container" style="border-bottom:2px solid #d3d4d6;">
                <img src="/images/search.png" alt=""  class="padding-left search-icon"/>
                <div class="search-text"><input type="text" placeholder="Search"/></div>
                <div class="search-sort">Sort</div>
            </div>
        <?php } ?>
        <div class="lineup-children">
            <?php
            foreach ($Lineup as $row) {
                ?>
                <div class="lineup-row">
                    <?php if ($Lineup[0][4] == '3') { ?>
                        <div class="reg banner <?php if ($row[5]) { ?>green-background<?php } else { ?>gray-background<?php } ?>" ><?php if ($row[5]) { ?>Won<?php } else { ?>Lost<?php } ?></div>
                    <?php } ?>
                    <div class="<?php if ($Lineup[0][4] == '3') { ?>track <?php } ?>pools-text">
                        <div class="green reg">$<?php echo $row[2]; ?></div> <div class="black lite">Prize</div><br />
                        <div class="black thin">Today at 7:00 PM</div> <div class="small gray">ET</div><br />
                        <div class="small black thin">Entries: </div> <div class="small dark-gray reg bold"><?php echo $row[3]; ?>/50</div> <div class="small blue reg">Unlimited Entries</div>
                    </div>
                    <?php if ($Lineup[0][4] == '2') { ?>
                        <div class="track-streamline"><img src="/images/gray/streamline.png" class="svg" alt="" /></div>
                    <?php } else { ?>
                        <div class="delete pools-delete reg dark-gray"><img class="icon arrow right" src="/images/dark-gray-arrow-down.png" alt=""/></div>
                    <?php } ?>
                    <div class="<?php if ($Lineup[0][4] == '3') { ?>track <?php } ?>empty-photo"></div>
                    <div class="<?php if ($Lineup[0][4] == '3') { ?>track <?php } ?>position pools-empty-position">$<?php echo $row[1]; ?></div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
<?php } ?>
<div style="border-bottom:2px solid #d3d4d6;"></div>
<div class="footer">
    <table class="track-table">
        <tr>
            <td style="width:33%;">
                <div class="footer-button streamline footer-button-active "><img src="/images/green/streamline.png" class="svg" alt="" /></div>
            </td>
            <td style="width:33%;">
                <div class="footer-button trophy"><img src="/images/green/trophy.png" class="svg" alt="" /></div>
            </td>
            <td style="width:33%;">
                <div class="footer-button user"><img src="/images/gray/user.png" class="svg" alt="" /></div>
            </td>
        </tr>
    </table>
</div>
<script type="text/javascript">
    <!--
    $(function () {
        $('.lineup-children').find('.lineup-row:last-child').css('border-bottom', 'none');
        EnableSlingSections();
    });
    //-->    
</script>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
