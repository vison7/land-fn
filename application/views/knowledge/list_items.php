<nav class="accordion-list k-a-list w-dropdown-list">
    <?php
    if (isset($data->data) && !empty($data->data)) {
        foreach ($data->data as $row) {
            $link = "/knowledge/detail/" . $row->id;
    ?>

            <a href="<?php echo $link ?>" class="k-link-1 w-inline-block">
                <div class="text-block-50"><?php echo $row->title ?></div>
            </a>

        <?php }
    } else { ?>
        <div>ไม่มีข้อมูล</div>

    <?php } ?>

    <!-- <a href="#" class="k-link-1 k-link-1-end w-inline-block">
        <div class="text-block-50">รอเพิ่มเติมชุดความรู้จากหลักสูตรวัดบันดาลใจ</div>
    </a> -->
</nav>