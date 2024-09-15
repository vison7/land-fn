<div class="wat-container w-container">
    <div class="w-layout-grid grid-24" style="padding-top:80px">
        <div>
            <div >
            <img src="<?php echo @$data->data[0]->thumb ?>" alt="" >
            </div>
        </div>
        <div>
            <h3 class="media-h1">
                <?php if(isset($data->data[0]->title) && !empty($data->data[0]->title)) echo $data->data[0]->title;?>
            </h1>
            <div class="media-txt-top1">
            <?php if(isset($data->data[0]->description) && !empty($data->data[0]->description)) echo $data->data[0]->description;?>
            </div>
            <div class="div-block-39">
            <a href="javascript:history.back(-1);" class="btn-more w-button">ย้อนกลับ</a>
            </div>
        </div>
    </div>
</div>
<br /><br />