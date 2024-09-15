<?php
$item = @$data->data[0];
// print "<pre>";
// print_r($data);
// print "</pre>";

$wat_cat_name='';
switch (@$item->cate_id) {
  case '1':
    $wat_cat_name = 'วัดในโครงการ';
      break;
    case '2':
      $wat_cat_name = 'วัดกรณีศึกษา';
      break;
    case '3':
      $wat_cat_name = 'วัดศูนย์การเรียนรู้';
      break;
    case '4':
      $wat_cat_name = 'วัดพื้นที่สุขภาวะสร้างสรรค์';
      break;
  default:
    $wat_cat_name = '';
}
?>


<div class="tp-wat-detail-main w-row">
  <div class="tp-main-column1 w-col w-col-6" style="background-image:url(<?php echo str_replace('//wat-bn','//localhost:8001',@$item->thumb)  ?>) !important">
    <div class="div-block-5"></div>
  </div>
  <div class="tp-main-column2 w-col w-col-6">
    <div class="tp-main-dv"><img src="/assets/images/temple-icon02_1temple-icon02.png" loading="lazy" width="54" alt="" class="image-3">
      <h1 class="tp-mian-h">
        <?php echo $wat_cat_name?>
        <br>
        <?php echo @$item->title ?>
        <br>
      </h1>
      <div class="tp-main-desc"><?php echo @$item->address ?></div>
      <!-- <div class="tp-main-desc2">“วัดโบราณสถานสำคัญของเมือง”<br></div><img src="/assets/images/bullet-doc.png" loading="lazy" width="25" alt="">
      <div class="text-block-52">เชิญชมนิทรรศการวัดศูนย์การเรียนรู้ออนไลน์</div> -->
    </div>
  </div>
</div>
<div class="wat-container w-container">
  <div class="w-layout-grid tp-detail-g1">
    <div></div>
    <div>
      <p class="paragraph-9">
        <?php echo @$item->description ?>
      </p>
    </div>
    <div></div>
  </div>
  <?php if (isset($item->gallery) && !empty($item->gallery)) { ?>
    <div data-delay="4000" data-animation="slide" class="tp-detail-slide1 w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
      <div class="w-slider-mask">
        <?php foreach ($item->gallery as $val) { ?>
          <div class="slide-9 w-slide"><img src="<?php echo str_replace('//wat-bn','//localhost:8001',$val) ?>" loading="lazy" sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 940px" srcset="<?php echo str_replace('//wat-bn','//localhost:8001',$val) ?> 500w, <?php echo str_replace('//wat-bn','//localhost:8001',$val) ?> 800w, <?php echo str_replace('//wat-bn','//localhost:8001',$val) ?> 1080w, <?php echo str_replace('//wat-bn','//localhost:8001',$val) ?> 1618w" alt=""></div>
        <?php } ?>
        <!-- <div class="slide-9 w-slide"><img src="/assets/images/05_2.jpg" loading="lazy" sizes="100vw" srcset="/assets/images/05_2-p-500.jpeg 500w, /assets/images/05_2-p-800.jpeg 800w, /assets/images/05_2.jpg 1000w" alt=""></div> -->
        <!-- <div class="w-slide"><img src="/assets/images/03_2.jpg" loading="lazy" sizes="100vw" srcset="/assets/images/03_2-p-500.jpeg 500w, /assets/images/03_2-p-800.jpeg 800w, /assets/images/03_2.jpg 1000w" alt=""></div> -->
      </div>
      <div class="w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="w-slider-nav w-round"></div>
    </div>
  <?php } ?>

  <div class="tp-content-detail">
  <?php echo @$item->detail ?>  
  </div>
  <div class="tp-detail-footer">
    <div class="div-block-55"><img src="/assets/images/bullet-04_1bullet-04.png" loading="lazy" alt=""></div>
    <!-- <div class="text-block-53">ผลงานโดยโครงการวัดบันดาลใจ</div> -->
    <div class="text-block-53">ติดต่อวัด</div>
    
    <!-- <div class="w-layout-grid tp-detail-g2">
      <div><img src="/assets/images/media-thumb.png" loading="lazy" alt="">
        <a href="#" class="link-3">ผังแม่บทและปรับปรุงภูมิทัศน์ </a>
        <div class="text-block-55">บริษัท ฉมาโซเอ็น จำกัด</div>
      </div>
      <div><img src="/assets/images/media-thumb.png" loading="lazy" alt="">
        <a href="#" class="link-3">ออกแบบผังแม่บทและปรับปรุงภูมิทัศน์ </a>
        <div class="text-block-55">บริษัท ฉมาโซเอ็น จำกัด</div>
      </div>
      <div><img src="/assets/images/media-thumb.png" loading="lazy" alt="">
        <a href="#" class="link-3">ออกแบบผังแม่บทและปรับปรุงภูมิทัศน์ </a>
        <div class="text-block-55">บริษัท ฉมาโซเอ็น จำกัด</div>
      </div>
    </div> -->
    <div>
      <div class="w-layout-grid tp-detail-g3">
        <div></div>
        <div>
          <div class="w-embed w-iframe">
          <?php echo @$item->map ?>  
            </div>
        </div>
        <div id="w-node-_43dc0474-e028-e5fa-f706-b610749866c4-6ba93e88" class="div-block-58">
          <div class="text-block-56"><?php echo @$item->title ?>  </div>
          <div class="text-block-57"><?php echo @$item->address ?>  </div>
          <div class="div-block-56"></div>
          <div class="text-block-56">ติดต่อประสานงาน</div>
          <div class="text-block-58"><?php echo @$item->phone ?>  </div>
          <div class="text-block-59"><?php echo @$item->email ?>  </div>
          <div class="text-block-59"><?php echo @$item->website ?>  </div>
        </div>
        <div></div>
      </div>
    </div>
    <div class="div-block-57"></div>
    <div><img src="/assets/images/bullet-04_1bullet-04.png" loading="lazy" alt="" class="image-18">
      <a href="/temple/project" class="link-4">วัดในโครการ</a>
      <a href="/temple/education" class="link-4">วัดกรณีศึกษา</a>
      <a href="/temple/center" class="link-4">วัดศูนย์การเรียนรู้</a>
      <a href="/temple/creative" class="link-4">วัดพื้นที่สุขภาวะสร้างสรรค์</a>
    </div>
  </div>
</div>