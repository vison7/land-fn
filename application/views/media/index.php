<div class="media-column1 w-row">
  <div class="media-column-main w-col w-col-6">
    <div class="div-block-5"></div>
  </div>
  <div class="column-5 w-col w-col-5" style="justify-content:center;display:flex">
    <div class="div-block-45">
      <div><img src="/assets/images/bullet-04_1bullet-04.png" loading="lazy" alt="" class="media-icon-top">
        <h1 class="heading">สื่อของ<br>โครงการ</h1>
        <!-- <p class="rsu-text-p-1">ขอเชิญรับชมรับฟัง สื่อของโครงการวัดบันดาลใจ 
          <br>ที่รวบรวมภาพ เสียง ตัวหนังสือ ที่มีการบันทึกเรื่องราว 
          <br>ผลงานการวิจัย การถอดความรู้ ตั้งแต่ปีที่ ๑ ของการทำงาน 
          <br>(พ.ศ.๒๕๕๘) และได้มีการสั่งสมชุดความรู้ เนื้อหา <br>ที่มีการนำเสนอในแง่มุมต่างๆของการทำ “วัดบันดาลใจ” 
          <br>จนถึงปัจจุบัน<br>
        </p> -->

        <p class="rsu-text-p-1" style="text-align:justify;max-width:450px">
          ขอเชิญรับชมรับฟัง สื่อของโครงการวัดบันดาลใจ ที่รวบรวมภาพ 
          เสียง ตัวหนังสือ การบันทึกเรื่องราว 
          ผลงานการวิจัย การถอดความรู้ ตั้งแต่ปีที่ ๑ ของการทำงาน 
          (พ.ศ. ๒๕๕๘) และได้มีการสั่งสมชุดความรู้ เนื้อหา ที่มีการนำเสนอในแง่มุมต่างๆ ของการทำ “วัดบันดาลใจ” 
          จนถึงปัจจุบัน
        </p>

      </div>
    </div>
  </div>
</div>
<?php if (isset($banner->data) && !empty($banner->data)) { ?>
  <div class="wf-section">
    <div data-delay="4000" data-animation="slide" class="a-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
      <div class="mask w-slider-mask">
        <?php
        foreach ($banner->data as $row) {
          $link = "/media/photo/detail/" . $row->id;
        ?>
          <div class="a-slide-item w-slide"><img src="<?php echo $row->thumb ?>" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" srcset="<?php echo $row->thumb ?> 500w, <?php echo $row->thumb ?> 800w, <?php echo $row->thumb ?> 1000w, <?php echo $row->thumb ?> 1190w " alt=""></div>
        <?php } ?>
        <!-- <div class="a-slide-item w-slide"><img src="/assets/images/a-slide1.png" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" srcset="/assets/images/a-slide1-p-500.png 500w, /assets/images/a-slide1-p-800.png 800w, /assets/images/a-slide1-p-1080.png 1080w, /assets/images/a-slide1.png 1190w" alt=""></div>
      <div class="a-slide-item w-slide"><img src="/assets/images/a-slide1.png" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" srcset="/assets/images/a-slide1-p-500.png 500w, /assets/images/a-slide1-p-800.png 800w, /assets/images/a-slide1-p-1080.png 1080w, /assets/images/a-slide1.png 1190w" alt=""></div>
      <div class="a-slide-item w-slide"><img src="/assets/images/a-slide1.png" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" srcset="/assets/images/a-slide1-p-500.png 500w, /assets/images/a-slide1-p-800.png 800w, /assets/images/a-slide1-p-1080.png 1080w, /assets/images/a-slide1.png 1190w" alt=""></div>
      <div class="a-slide-item w-slide"><img src="/assets/images/a-slide1.png" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" srcset="/assets/images/a-slide1-p-500.png 500w, /assets/images/a-slide1-p-800.png 800w, /assets/images/a-slide1-p-1080.png 1080w, /assets/images/a-slide1.png 1190w" alt=""></div>
      <div class="a-slide-item w-slide"><img src="/assets/images/a-slide1.png" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" srcset="/assets/images/a-slide1-p-500.png 500w, /assets/images/a-slide1-p-800.png 800w, /assets/images/a-slide1-p-1080.png 1080w, /assets/images/a-slide1.png 1190w" alt=""></div> -->
      </div>
      <div class="w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="slide-nav-4 w-slider-nav w-round"></div>
    </div>
  </div>
<?php } ?>


<div class="section-6 wf-section">
  <div class="wat-container w-container">
    <div class="w-layout-grid grid-7">
      <div>
        <div data-hover="false" data-delay="0" class="my-dropdown w-dropdown">
          <div class="w-dropdown-toggle">
            <div class="drop-menu-box"><img src="/assets/images/hmenu_1hmenu.png" loading="lazy" width="16" alt="" class="image-6"></div><img src="/assets/images/icon-search_1icon-search.png" loading="lazy" alt="" class="image-7">
          </div>
          <nav class="drop-menu-list w-dropdown-list">
            <!-- <div data-hover="false" data-delay="0" class="dropdown-2 w-dropdown">
              <div class="dropdown-toggle-2 w-dropdown-toggle">
                <div class="w-icon-dropdown-toggle"></div>
                <div>วีดีโอ</div>
              </div>
              <nav class="dropdown-list-3 w-dropdown-list">
                <a href="#" class="drop-menu-list-sub w-dropdown-link">วัดบันดาลใจ</a>
                <a href="#" class="drop-menu-list-sub w-dropdown-link">หลักสูตรวัดบันดาลใจ</a>
                <a href="#" class="drop-menu-list-sub w-dropdown-link">Talk&amp;Forum</a>
                <a href="#" class="drop-menu-list-sub w-dropdown-link">Show case</a>
              </nav>
            </div> -->
            <a href="/media/article" class="drop-menu-link w-dropdown-link">บทความ</a>
            <a href="/media/video" class="drop-menu-link w-dropdown-link">วีดีโอ</a>
            <a href="/media/photo" class="drop-menu-link w-dropdown-link">รูปภาพ</a>
            <a href="/media/ebook" class="drop-menu-link w-dropdown-link">E-Book</a>
            <a href="/media/sound" class="drop-menu-link w-dropdown-link">เสียง</a>
          </nav>
        </div>
      </div>
      <div></div>
    </div>
  </div>
</div>

<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <h2 class="media-main-h">Highlight</h2>
    <h2 class="media-main-h2">บทความ</h2>
    <div class="cards-grid-container">
    <?php if (isset($article->data) && !empty($article->data)) { ?>
      <?php
      $i = 0;
      foreach ($article->data as $row) {
        $link = "/media/article/detail/" . $row->id;
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $row->thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div>
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/media/article" class="btn-more-arrow w-button">บทความทั้งหมด</a>
    </div>
  </div>
</section>

<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <h2 class="media-main-h2">วิดีโอ</h2>
    <div class="cards-grid-container">
    <?php if (isset($video->data) && !empty($video->data)) { ?>
      <?php
      $i = 0;
      foreach ($video->data as $row) {
        $link = "/media/video/detail/" . $row->id;
      ?>
        <div id="w-node-_835305c7-3fbf-e675-fdac-304d340b3e87-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $row->thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <div class="card-icon"><img src="/assets/images/icon-play_1icon-play.png" loading="lazy" alt=""></div>
        </div>
      <?php
      }
      ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/media/video" class="btn-more-arrow w-button">วีดิโอทั้งหมด</a>
    </div>
  </div>
</section>

<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <h2 class="media-main-h2">E-Book</h2>
    <div class="cards-grid-container">
    <?php if (isset($ebook->data) && !empty($ebook->data)) { ?>
      <?php
      $i = 0;
      foreach (@$ebook->data as $row) {
        $link = "/media/ebook/detail/" . $row->id;
      ?>
        <div id="w-node-_8f7f686d-7efd-fe80-6269-b0c6ae79b9a7-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $row->thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <div class="card-icon"><img src="/assets/images/icon-book_1icon-book.png" loading="lazy" alt=""></div>
        </div>
      <?php } ?>
      <?php }?>
    </div>
    <div class="div-block-39">
      <a href="/media/ebook" class="btn-more-arrow w-button">E-Book ทั้งหมด</a>
    </div>
  </div>
</section>

<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <h2 class="media-main-h2">รูปภาพ</h2>
    <div class="cards-grid-container">
    <?php if (isset($photo->data) && !empty($photo->data)) { ?>
      <?php
      $i = 0;
      foreach (@$photo->data as $row) {
        $link = "/media/photo/detail/" . $row->id;
      ?>
        <div id="w-node-_8f7f686d-7efd-fe80-6269-b0c6ae79b9a7-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $row->thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <div class="card-icon"><img src="/assets/images/icon-photo_1icon-photo.png" loading="lazy" alt=""></div>
        </div>
      <?php } ?>
      <?php } ?>
    </div>
    <div class="div-block-39">
      <a href="/media/photo" class="btn-more-arrow w-button">รูปภาพทั้งหมด</a>
    </div>
  </div>
</section>


<section id="cards-section" class="wf-section">
  <div class="wat-container w-container">
    <h2 class="media-main-h2">เสียง</h2>
    <div class="cards-grid-container">
    <?php if (isset($sound->data) && !empty($sound->data)) { ?>
      <?php
      $i = 0;
      foreach ($sound->data as $row) {
        $link = "/media/sound/detail/" . $row->id;
      ?>
        <div id="w-node-_8f7f686d-7efd-fe80-6269-b0c6ae79b9a7-b9aa6f84" class="card-item">
          <div class="cards-image-mask"><a href="<?php echo $link ?>"><img src="<?php echo $row->thumb ?>" alt="" class="cards-image"></a></div>
          <a href="<?php echo $link ?>" class="media-link w-inline-block">
            <p class="card-desc"><?php echo $row->title ?></p>
          </a>
          <div class="card-icon"><img src="/assets/images/icon-sound_1icon-sound.png" loading="lazy" alt=""></div>
        </div>
      <?php } ?>
      <?php } ?>
    </div>
    <div class="div-block-39">
      <a href="/media/sound" class="btn-more-arrow w-button">เสียงทั้งหมด</a>
    </div>
  </div>
  <div class="div-block-46"></div>
</section>