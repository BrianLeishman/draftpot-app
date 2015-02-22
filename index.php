<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/superheader.php';
$Title = 'Draftpot';
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
$Lineups = array('Lineup 1' => array(), 'Lineup 2' => array(), 'Lineup 3' => array());
for ($i = 0; $i < 5; $i++) {
    $Lineups['Lineup 1'][] = array(strtoupper(RandString(2)), RandString(5) . ' ' . RandString(7), strtoupper(RandString(3)), strtoupper(RandString(3)), rand(1, 12), rand(150, 500) / 10, rand(0, 1));
}
for ($i = 0; $i < 6; $i++) {
    $Lineups['Lineup 2'][] = array(RandString(RandString(2)), RandString(5) . ' ' . RandString(7), strtoupper(RandString(3)), strtoupper(RandString(3)), rand(1, 12), rand(150, 500) / 10, rand(0, 1));
}
for ($i = 0; $i < 4; $i++) {
    $Lineups['Lineup 3'][] = array(RandString(RandString(2)), RandString(5) . ' ' . RandString(7), strtoupper(RandString(3)), strtoupper(RandString(3)), rand(1, 12), rand(150, 500) / 10, rand(0, 1));
}
?>
<div class="search-container">
    <img src="/images/search.png" alt=""  class="padding-left search-icon"/>
    <div class="search-text"><input type="text" placeholder="Search"/></div>
    <div class="search-sort">Sort</div>
</div>
<?php
foreach ($Lineups as $Key => $Lineup) {
    ?>
    <div class="lineup-container">
        <div class="lineup-text"><?php echo $Key; ?></div>
        <div class="arrow"><img class="icon" src="/images/white-arrow-down.png" /></div>
    </div>
    <div class="lineup-parent">
        <div class="lineup-children">
            <?php
            foreach ($Lineup as $row) {
                ?>
                <div class="lineup-row">

                    <?php
                    if ($row[6]) {
                        ?>
                        <img src="/images/0507106b-cb4e-48f3-ad2a-1213bb68934d.jpg" alt="" class="photo"/>
                        <div class="position"><?php echo $row[0]; ?>&nbsp;<div class="name"><?php echo $row[1]; ?></div></div>     
                        <div class="away"><?php echo $row[2]; ?><div class="home">&nbsp;@ <?php echo $row[3]; ?></div></div>
                        <div class="time"><?php echo $row[4]; ?>:00 PM&nbsp;<div class="time-zone">ET</div></div>
                        <div class="ppg">PPG&nbsp;<div class="ppg-number"><?php echo $row[5]; ?></div></div>
                        <div class = "delete"><img class="icon" src="/images/red-x.png" alt="X" /></div>
                    <?php } else { ?>
                        <div class="empty-photo"></div>
                        <img src="/images/empty.png" alt="" class="empty"/>
                        <div class="position empty-position"><?php echo $row[0]; ?></div>
                        <div class="add">ADD</div>
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
    <table>
        <tr>
            <td style="width:17%;">
                <div class="footer-button streamline footer-button-active "><img src="/images/green/streamline.png" class="svg" alt="" /></div>
            </td>
            <td style="width:17%;">
                <div class="footer-button trophy"><img src="/images/gray/trophy.png" class="svg" alt="" /></div>
            </td>
            <td style="width:17%;">
                <div class="footer-button user"><img src="/images/gray/user.png" class="svg" alt="" /></div>
            </td>
            <td style="width:32%;">
                <div class="footer-button plus footer-button-active"><img src="/images/green/plus.png" class="svg" alt="" /></div>
            </td>
            <td>
                <div class="footer-button footer-button-active footer-next">Next</div>
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
