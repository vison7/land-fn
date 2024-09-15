<!-- <div class="wat-container w-container">
    <div class="w-layout-grid grid-24" style="padding-top:80px">
        <div>
            <div>
            <if(isset($data->data[0]->detail) && !empty($data->data[0]->detail)) echo $data->data[0]->detail;?>
            </div>
        </div>
        <div>
            <h3 class="media-h1">
                <if(isset($data->data[0]->title) && !empty($data->data[0]->title)) echo $data->data[0]->title;?>
            </h1>
            <div class="media-txt-top1">
            <if(isset($data->data[0]->description) && !empty($data->data[0]->description)) echo $data->data[0]->description;?>
            </div>
        </div>
    </div>
</div>
<br /><br /> -->

<?php
$thumb = '';
if(isset($data->data[0]->thumb) && !empty($data->data[0]->thumb)) 
    $thumb = "<img src=\"". str_replace("//wat-bn/","//localhost:8001/",$data->data[0]->thumb) ."\" />";

?>
<div class="wat-container w-container">
    <div class="" style="padding-top:80px">
        
        <div>
            <p style="text-align:center;">
            <?php echo $thumb?>
            </p>
            <p>
            
            <div class="div-block-39">
            <a href="javascript:history.back(-1);" class="btn-more w-button">ย้อนกลับ</a>
            </div>
            </p>
            <h3 style="margin:20px 0">
                <?php if(isset($data->data[0]->title) && !empty($data->data[0]->title)) echo $data->data[0]->title;?>
            </h3>

            <div class="media-txt-top1">
            <?php if(isset($data->data[0]->detail) && !empty($data->data[0]->detail)){
                // $url = str_replace("/^http:/i", "https:", $data->data[0]->detail);
                echo $data->data[0]->detail;
            } ?>
            </div>
        </div>
    </div>
</div>
<br /><br />