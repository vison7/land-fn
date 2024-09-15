<section id="cards-section" class="cards-section wf-section">
    <div class="wat-container w-container">
        <div class="cards-grid-container">
            <?php
            if (isset($data->data) && !empty($data->data)) {
                foreach ($data->data as $row) {
                    $link = "/media/ebook/detail/". $row->id;
            ?>
                    <div id="w-node-_6c35f070-506c-63da-0632-a4d7bd375df1-f12f18ee" class="card-item">
                        <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $row->thumb ?>" alt="" class="cards-image"></a></div>
                        <a href="<?php echo $link ?>" class="media-link w-inline-block">
                            <p class="card-desc"><?php echo $row->title ?></p>
                        </a>
                        <div class="card-icon"><a href="<?php echo $link ?>"><img src="/assets/images/icon-book.png" loading="lazy" alt=""></a></div>
                    </div>
                <?php }
            } else { ?>
            <div>ไม่มีข้อมูล</div>
            
            <?php } ?>
        </div>
    </div>
</section>
<?php $this->load->view('elements/paging_ajax', $data->paging) ?>
