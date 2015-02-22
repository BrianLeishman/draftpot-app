<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/superheader.php';
$Title = 'Draftpot';
$Price = true;
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
$Lineups['My Lineups'][] = array(1, rand(1, 10), rand(0, 4), RandString(5), rand(100, 400) / 10);
for ($i = 0; $i < 3; $i++) {
    $Lineups['All Lineups'][] = array(2, rand(1, 10), rand(0, 4), RandString(5), rand(100, 400) / 10);
}
$User = array(array('James Harden', 'SG', '+75.9', '49c40cb6-3adb-404c-9e9d-8171d0532184.jpg'), array('Pau Gasol', 'PF', '+49.7', '0507106b-cb4e-48f3-ad2a-1213bb68934d.jpg'));
?>
<div class="search-container">
    <table>
        <tr>
            <td style="width:25%;">
                <div class="padding-left green reg">$45</div> <div class="black reg">Prize</div> 
            </td>
            <td style="width:40%;text-align:center;">
                <div class="black thin">2/13 at 7:00 PM</div> <div class="small thin gray">ET</div> 
            </td>
            <td style="width:35%;text-align:right;">
                <div class="unlimted-live small padding-right "><div class="blue reg">Unlimited Entries</div><br />
                    <div class="black lite">Entries:</div> <div class="dark-gray bold">11/25</div>
                </div>
            </td>
        </tr>
    </table>
</div>
<?php
foreach ($Lineups as $Key => $Lineup) {
    ?>
    <div class="lineup-container <?php if ($Lineup[0][0] == '2') { ?>blue-background<?php } ?>">
        <div class="lineup-text"><?php echo $Key; ?></div>
        <div class="arrow"><img class="icon" src="/images/white-arrow-down.png" /></div>
    </div>
    <div class="lineup-parent">
        <div class="lineup-children">
            <?php
            foreach ($Lineup as $row) {
                ?>
                <div class="lineup-row players-container">
                    <div class="empty-photo"><div class="arc state-<?php echo $row[2]; ?>"></div></div>
                    <div class="position pools-empty-position black large thin"><?php echo $row[1]; ?></div>
                    <div class="live-text">
                        <div class="black large"><?php echo $row[3]; ?></div><br />
                        <div class="black thin"><?php echo $row[4]; ?> Points</div>
                    </div>
                    <div class="delete pools-delete"><img class="icon down" src="/images/dark-gray-arrow-down.png" /></div>
                </div>
                <div class="players-parent">
                    <?php foreach ($User as $row) { ?>
                        <div class="players-child">
                            <img class="players-photo" src="/images/<?php echo $row[3]; ?>" alt="" />
                            <div class="players-text"><div class="green reg"><?php echo $row[1]; ?></div> <div class="black"><?php echo $row[0]; ?></div></div>
                            <div class="players-points green"><?php echo $row[2]; ?></div>
                            <div class="players-arrow"><img class="icon down" src="/images/dark-gray-arrow-down.png" alt="" /></div>
                        </div>
                        <div class="stats-parent">
                            <div class="stats-child">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>Pts</td>
                                            <td>Reb</td>
                                            <td>Ast</td>
                                            <td>Stl</td>
                                            <td>Blk</td>
                                            <td>2Pt</td>
                                            <td>3Pt</td>
                                            <td>FT</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>26</td>
                                            <td>16</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>11</td>
                                            <td>0</td>
                                            <td>4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
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
