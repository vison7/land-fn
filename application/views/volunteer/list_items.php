<nav class="accordion-list w-dropdown-list">
    <div class="w-layout-grid grid-15">
        <?php
        if (isset($data->data) && !empty($data->data)) {
            foreach ($data->data as $row) {
                $link = "/volunteer/detail/" . $row->id;
        ?>
                <div class="accordion-volunteer-item">
                    <a href="<?php echo $link ?>" class="w-inline-block"><img src="<?php echo $row->thumb ?>" loading="lazy" alt=""></a>
                    <div class="text-block-18"><?php echo $row->title ?></div>
                    <!-- <div class="text-block-19">(Kaizentopia Co.,Ltd.)</div> -->
                </div>
                <!-- <a href="<?php echo $link ?>" class="k-link-1 w-inline-block">
                    <div class="text-block-50"><?php echo $row->title ?></div>
                </a> -->

            <?php }
        } else { ?>
            <div>ไม่มีข้อมูล</div>

        <?php } ?>

    </div>
</nav>