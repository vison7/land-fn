<div class="media-column1 w-row">
  <div class="activity-column-main w-col w-col-6">
    <div class="div-block-5"></div>
  </div>
  <div class="column-5 w-col w-col-5" style="justify-content:center;display:flex">
    <div class="div-block-45">
      <div><img src="/assets/images/bullet-04_1bullet-04.png" loading="lazy" alt="" class="media-icon-top">
        <h1 class="heading">กิจกรรม</h1>
        <p class="rsu-text-p-1" style="text-align:justify;max-width:450px">
        การจัดกิจกรรมของโครงการ มีวัตถุประสงค์เพื่อนําเสนอตัวอย่างในการจัดกิจกรรมที่ใช้ฐานทุนจากศักยภาพ ของวัดในบริบทต่างๆ มาออกแบบให้เกิดการบูรณาการเรียนรู้การพัฒนาทักษะชีวิตอย่างเป็นองค์รวม ร่วมสมัย ตอบโจทย์ของคนได้ทุกเพศทุกวัย รวมถึงกิจกรรมที่สร้างแรงบันดาลใจ สร้างองค์ความรู้ และสร้าง ความสัมพันธ์ของภาคส่วนต่างๆ ให้เกิดพลังการขับเคลื่อนการพัฒนาวัดร่วมกันอย่างเป็นรูปธรรม
        </p>

      </div>
    </div>
  </div>
</div>

<br /><br /><br /><br />

<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <h2 class="media-main-h" style="color:#fcb542;">กิจกรรมส่งเสริมสุขภาวะทางกาย ใจ สังคม ปัญญา</h2>
    <h4 class="media-main-h2" style="font-size:16px">กิจกรรมเด็ก</h4>
    <div class="cards-grid-container">
    <?php if (isset($activity1->data) && !empty($activity1->data)) { ?>
      <?php
      $i = 0;
      foreach ($activity1->data as $row) {
        $link = "/activity/article/detail/" . $row->id;
        $thumb = str_replace("//wat-bn/","//localhost:8001/",$row->thumb);
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <!-- <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div> -->
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/activity/article/1" class="btn-more-arrow w-button">อ่านทั้งหมด</a>
    </div>
  </div>
</section>

<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <!-- <h2 class="media-main-h">กิจกรรมส่งเสริมสุขภาวะทางกาย ใจ สังคม ปัญญา</h2> -->
    <h4 class="media-main-h2" style="font-size:16px">กิจกรรมผู้สูงอายุ</h4>
    <div class="cards-grid-container">
    <?php if (isset($activity2->data) && !empty($activity2->data)) { ?>
      <?php
      $i = 0;
      foreach ($activity2->data as $row) {
        $link = "/activity/article/detail/" . $row->id;
        $thumb = str_replace("//wat-bn/","//localhost:8001/",$row->thumb);
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <!-- <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div> -->
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/activity/article/2" class="btn-more-arrow w-button">อ่านทั้งหมด</a>
    </div>
  </div>
</section>

<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <!-- <h2 class="media-main-h">กิจกรรมส่งเสริมสุขภาวะทางกาย ใจ สังคม ปัญญา</h2> -->
    <h4 class="media-main-h2" style="font-size:16px">กิจกรรมคนวัยทํางาน</h4>
    <div class="cards-grid-container">
    <?php if (isset($activity3->data) && !empty($activity3->data)) { ?>
      <?php
      $i = 0;
      foreach ($activity3->data as $row) {
        $link = "/activity/article/detail/" . $row->id;
        $thumb = str_replace("//wat-bn/","//localhost:8001/",$row->thumb);
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <!-- <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div> -->
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/activity/article/3" class="btn-more-arrow w-button">อ่านทั้งหมด</a>
    </div>
  </div>
</section>

<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <h2 class="media-main-h" style="color:#fcb542;">กิจกรรมจิตอาสา</h2>
    <!-- <h4 class="media-main-h2" style="font-size:16px">กิจกรรมคนวัยทํางาน</h4> -->
    <div class="cards-grid-container">
    <?php if (isset($activity4->data) && !empty($activity4->data)) { ?>
      <?php
      $i = 0;
      foreach ($activity4->data as $row) {
        $link = "/activity/article/detail/" . $row->id;
        $thumb = str_replace("//wat-bn/","//localhost:8001/",$row->thumb);
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <!-- <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div> -->
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/activity/article/4" class="btn-more-arrow w-button">อ่านทั้งหมด</a>
    </div>
  </div>
</section>


<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <h2 class="media-main-h" style="color:#fcb542;">กิจกรรมถวายความรู้พระสงฆ์</h2>
    <h4 class="media-main-h2" style="font-size:16px">กิจกรรมดูงานวัดนําร่อง/พื้นที่การเรียนรู้ </h4>
    <div class="cards-grid-container">
    <?php if (isset($activity5->data) && !empty($activity5->data)) { ?>
      <?php
      $i = 0;
      foreach ($activity5->data as $row) {
        $link = "/activity/article/detail/" . $row->id;
        $thumb = str_replace("//wat-bn/","//localhost:8001/",$row->thumb);
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <!-- <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div> -->
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/activity/article/5" class="btn-more-arrow w-button">อ่านทั้งหมด</a>
    </div>
  </div>
</section>


<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <!-- <h2 class="media-main-h">กิจกรรมถวายความรู้พระสงฆ์</h2> -->
    <h4 class="media-main-h2" style="font-size:16px">กิจกรรมอบรม</h4>
    <div class="cards-grid-container">
    <?php if (isset($activity6->data) && !empty($activity6->data)) { ?>
      <?php
      $i = 0;
      foreach ($activity6->data as $row) {
        $link = "/activity/article/detail/" . $row->id;
        $thumb = str_replace("//wat-bn/","//localhost:8001/",$row->thumb);
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <!-- <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div> -->
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/activity/article/6" class="btn-more-arrow w-button">อ่านทั้งหมด</a>
    </div>
  </div>
</section>


<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <h2 class="media-main-h" style="color:#fcb542;">กิจกรรมแรกเปลี่ยนการเรียนรู้</h2>
    <h4 class="media-main-h2" style="font-size:16px">ฟอรั่มวัดบันดาลใจ</h4>
    <div class="cards-grid-container">
    <?php if (isset($activity7->data) && !empty($activity7->data)) { ?>
      <?php
      $i = 0;
      foreach ($activity7->data as $row) {
        $link = "/activity/article/detail/" . $row->id;
        $thumb = str_replace("//wat-bn/","//localhost:8001/",$row->thumb);
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <!-- <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div> -->
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/activity/article/7" class="btn-more-arrow w-button">อ่านทั้งหมด</a>
    </div>
  </div>
</section>

<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <!-- <h2 class="media-main-h">กิจกรรมแรกเปลี่ยนการเรียนรู้</h2> -->
    <h4 class="media-main-h2" style="font-size:16px">งานเสวนา</h4>
    <div class="cards-grid-container">
    <?php if (isset($activity8->data) && !empty($activity8->data)) { ?>
      <?php
      $i = 0;
      foreach ($activity8->data as $row) {
        $link = "/activity/article/detail/" . $row->id;
        $thumb = str_replace("//wat-bn/","//localhost:8001/",$row->thumb);
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <!-- <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div> -->
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/activity/article/8" class="btn-more-arrow w-button">อ่านทั้งหมด</a>
    </div>
  </div>
</section>