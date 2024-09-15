<div class="w-layout-grid tp-grid2">
<?php
    if (isset($data->data) && !empty($data->data)) {
        foreach ($data->data as $row) {
            $link = "/temple/detail/" . $row->id;
?>
<a href="<?php echo $link?>" class="tem-item-link w-inline-block">
    <div class="text-block-14">
        <?php echo $row->title ?>
    </div>
    <div class="tp-list-desc">
        <?php echo $row->address ?>
    </div>
</a>
<?php }
    } else { ?>
<div>ไม่มีข้อมูล</div>

<?php } ?>
    </div>

<div>
<?php $this->load->view('elements/paging_ajax', @$data->paging) ?>
</div>