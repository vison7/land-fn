<section id="cards-section" class="cards-section wf-section">
    <div class="wat-container w-container">
        <div class="cards-grid-container">
            <?php
            if (isset($data->data) && !empty($data->data)) {
                foreach ($data->data as $row) {
                    $link = "/media/photo/detail/". $row->id;
            ?>
                    <div id="w-node-_6c35f070-506c-63da-0632-a4d7bd375df1-05295594" class="card-item-photo">
                        <div class="cards-image-mask-photo"><a href="<?php echo $link ?>"><img src="<?php echo $row->thumb ?>" alt="" class="cards-image-photo"></a></div>
                    </div>
                <?php }
            } else { ?>
                <div>ไม่มีข้อมูล</div>

            <?php } ?>
        </div>
    </div>
</section>
<?php $this->load->view('elements/paging_ajax', $data->paging) ?>