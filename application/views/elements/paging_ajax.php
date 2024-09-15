<?php
// check record
if ($total_item > 0) {
    $tab = 10;
    // page tab
    if (($page_no % $tab) == 0) {
        $ptab = floor($page_no / $tab);
    } else {
        $ptab = floor($page_no / $tab) + 1;
    }

    //$page_total
    $total_tab = ceil($page_total / $tab);
?>

    <div class="my-pagination w-container">
        <?php if ($page_no > 1) { ?>
            <a href="javascript:data_page('<?php echo $page_no - 1 ?>');void(0);">
                <img src="/assets/images/page-pre.png" loading="lazy" alt="">
            </a>
        <?php } ?>

        <?php if ($ptab > 1) { ?>
            <a href="javascript:data_page('<?php echo ($tab * $ptab) - $tab ?>');void(0);"  class="p-no-link w-inline-block"> << </span></a>
        <?php } ?>

        <?php
        for ($i = ((($ptab * $tab) - $tab) + 1); $i <= ($tab * $ptab); $i++) {
            if ($i <= $page_total) {
                if ($i == $page_no) {
                    echo '<a href="#" class="p-no-link p-non-active w-inline-block">
                            <div>' . $i . '</div>
                          </a>';
                } else {
                    echo '<a href="javascript:data_page(\'' . $i . '\');" class="p-no-link w-inline-block">
                            <div>' . $i . '</div>
                          </a>';
                }
            }
        }
        ?>
        <?php if ($ptab >= 1 && $ptab < $total_tab) { ?>
            <a href="javascript:data_page('<?php echo ($tab * $ptab) + 1 ?>');void(0);" class="p-no-link w-inline-block"> >> </a>
        <?php } ?>

        <?php if ($page_no < $page_total) { ?>
            <a href="javascript:data_page('<?php echo $page_no + 1 ?>');void(0);"><img src="/assets/images/page-next.png" loading="lazy" alt=""></a>
        <?php } ?>

    </div>

<?php
}
?>