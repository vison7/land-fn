<div class="wat-container w-container">
    <div class="w-layout-grid v-grid-1">
        <div class="div-block-24"><img src="<?php if(isset($data->data[0]->thumb)) echo $data->data[0]->thumb;?>" loading="lazy" alt=""></div>
        <div>
            <h1 class="heading-5">ชื่อบริษัท</h1>
            <div class="text-block-32"><?php if(isset($data->data[0]->title)) echo $data->data[0]->title;?></div>
            <div class="text-block-31">ประวัติโดยย่อ</div>
            <p class="paragraph-7">
            <?php if(isset($data->data[0]->description)) echo $data->data[0]->description;?>
            </p>
            <div class="div-block-25"></div>
            <div class="text-block-45">ช่องทางการติดต่อ</div>
            <div class="w-layout-grid grid-21">
                <div>
                    <div class="v-icon-text v-icon-bg1"><?php if(isset($data->data[0]->address)) echo $data->data[0]->address;?></div>
                    <div class="v-icon-text v-icon-bg2"><?php if(isset($data->data[0]->email)) echo $data->data[0]->email;?></div>
                    <div class="v-icon-text v-icon-bg3"><?php if(isset($data->data[0]->phone)) echo $data->data[0]->phone;?></div>
                </div>
                <div>
                    <div class="v-icon-text v-icon-bg4"><?php if(isset($data->data[0]->website)) echo $data->data[0]->website;?></div>
                    <div class="v-icon-text v-icon-bg5"><?php if(isset($data->data[0]->ig)) echo $data->data[0]->ig;?></div>
                    <div class="v-icon-text v-icon-bg6"><?php if(isset($data->data[0]->fb)) echo $data->data[0]->fb;?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wat-container w-container">
    <div class="div-block-47">
        <div class="div-block-26"><img src="/assets/images/line03.png" loading="lazy" alt="" class="image-11"></div>
        <div class="div-block-26">
            <div class="div-block-27"><img src="/assets/images/bb_1bb.png" loading="lazy" alt=""></div>
        </div>
        <div class="div-block-26">
            <div class="text-block-34"><?php if(isset($data->data[0]->detail)) echo $data->data[0]->detail;?></div>
        </div>
        <div class="div-block-26">
            <div class="div-block-27"><img src="/assets/images/bb_1bb.png" loading="lazy" alt=""></div>
        </div>
        <div class="div-block-26"><img src="/assets/images/line02.png" loading="lazy" alt="" class="image-12"></div>
    </div>
</div>

<?php if(isset($data->data[0]->gallery) && !empty($data->data[0]->gallery)) {?>
<div class="section-slide-yellow wf-section">
    <div class="w-container">
        <div data-delay="4000" data-animation="slide" class="slider-2 w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="w-slider-mask">
                <?php foreach($data->data[0]->gallery as $val){?>
                <div class="w-slide"><img src="<?php echo $val?>" loading="lazy" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 940px" srcset="<?php echo $val?> 500w, <?php echo $val?> 800w, <?php echo $val?> 1080w, <?php echo $val?> 1618w" alt=""></div>
                <?php }?>
                <!-- <div class="w-slide"><img src="/assets/images/slide1.png" loading="lazy" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 940px" srcset="/assets/images/slide1-p-500.png 500w, /assets/images/slide1-p-800.png 800w, /assets/images/slide1-p-1080.png 1080w, /assets/images/slide1.png 1618w" alt=""></div> -->
            </div>
            <div class="w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-3 w-slider-nav w-round"></div>
        </div>
    </div>
</div>
<!-- <div class="text-block-47">วัดสุทธิกาญจนาราม อำเภอเมือง จังหวัดกาญจนบุรี : ออกแบบผังแม่บท</div> -->
<?php }?>