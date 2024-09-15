<?php 
// print "<pre>";
// print_r($wat);
// print "</pre>";
?>

<div data-delay="4000" data-animation="slide" class="slide-full w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
    <div class="w-slider-mask">
      <div class="w-slide"><img src="/assets/images/temple-main01.png" loading="lazy" srcset="/assets/images/temple-main01-p-500.png 500w, /assets/images/temple-main01-p-800.png 800w, /assets/images/temple-main01-p-1080.png 1080w, /assets/images/temple-main01-p-1600.png 1600w, /assets/images/temple-main01.png 1920w" sizes="(max-width: 1919px) 100vw, 1920px" alt=""></div>
      <div class="w-slide"><img src="/assets/images/temple-main02.png" loading="lazy" srcset="/assets/images/temple-main02-p-500.png 500w, /assets/images/temple-main02-p-800.png 800w, /assets/images/temple-main02-p-1080.png 1080w, /assets/images/temple-main02-p-1600.png 1600w, /assets/images/temple-main02.png 1920w" sizes="(max-width: 1919px) 100vw, 1920px" alt=""></div>
    </div>
    <div class="w-slider-arrow-left">
      <div class="w-icon-slider-left"></div>
    </div>
    <div class="w-slider-arrow-right">
      <div class="w-icon-slider-right"></div>
    </div>
    <div class="w-slider-nav w-round"></div>
  </div>
  <div class="wat-container w-container">
    <div class="div-block-52"></div><img src="/assets/images/temple-icon01.png" loading="lazy" width="155" alt="">
    <h1 class="heading-3">วัดในโครงการ</h1>
    <p class="paragraph-8">วัดในโครงการเป็นการพัฒนาวัดนำร่องที่กระจายอยู่ทุกภูมิภาคทั่วประเทศ เพื่อเป็นฐานการเรียนรู้ด้านการออกแบบและปรับปรุงกายภาพของวัดให้เป็นสัปปายะสถาน รวมถึงร่วมกันขับเคลื่อนเรื่องกิจกรรม การบริหารจัดการวัดให้เกิดเป็นพื้นที่ต้นแบบการสร้างสุขภาวะเชื่อมโยงกับมิติทางสังคม เศรษฐกิจ และมิติทางจิตตปัญญาตามบริบทต่างๆ ของวัด นำไปสู่การสร้างแรงบันดาลใจ ขยายผลให้กับพระและวัดอื่นๆ ทั่วประเทศ</p><img src="/assets/images/bullet-04_1bullet-04.png" loading="lazy" alt="" class="tp-bullet">
    <div class="w-layout-grid tp-grid1">
      <div>
        <div class="text-block-15"><?php echo $total?></div>
        <div class="text-block-16">วัดในโครงการ</div>
      </div>
    </div>
    <div class="tp2-div-search">
      <div data-hover="false" data-delay="0" class="tp-my-dropdown w-dropdown">
        <div class="w-dropdown-toggle">
          <div class="drop-menu-box"><img width="16" loading="lazy" src="/assets/images/hmenu_1hmenu.png" alt="" class="image-6"></div><img loading="lazy" src="/assets/images/icon-search_1icon-search.png" alt="" class="image-7">
        </div>
        <nav class="drop-menu-list w-dropdown-list">
        <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tp-dd-tab w-tabs">
            <div class="tabs-menu-2 w-tab-menu">
              <a onclick="location.href='/temple/project';" data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
                <div><strong>วัดในโครงการ</strong></div>
              </a>
              <a onclick="location.href='/temple/center';" class="tab-link-tab-2 w-inline-block w-tab-link">
                <div>วัดศูนย์การเรียนรู้</div>
              </a>
              <a onclick="location.href='/temple/education';" class="tab-link-tab-3-2 w-inline-block w-tab-link">
                <div>วัดกรณีศึกษา</div>
              </a>
              <a onclick="location.href='/temple/creative';" class="tab-link-tab-3-2 w-inline-block w-tab-link">
                <div>วัดพื้นที่สุขภาวะสร้างสรรค์</div>
              </a>
            </div>
            <div class="w-tab-content">
              <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                <div class="w-layout-grid grid-34">
                  <div>
                    <div class="text-block-65">แบ่งตามพื้นที่ (ภูมิภาค)</div>
                  </div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div>
                    <a href="#" class="tp-dd-menu-sub-link" id="tab1">ภาคเหนือ</a>
                  </div>
                  <div>
                    <a href="#" class="tp-dd-menu-sub-link" id="tab2">ภาคกลาง</a>
                  </div>
                  <div>
                    <a href="#" class="tp-dd-menu-sub-link" id="tab3">ภาคตะวันออกเฉียงเหนือ</a>
                  </div>
                  <div>
                    <a href="#" class="tp-dd-menu-sub-link" id="tab4">ภาคใต้</a>
                  </div>
                </div>
              </div>
              <div data-w-tab="Tab 2" class="w-tab-pane"></div>
              <div data-w-tab="Tab 3" class="w-tab-pane"></div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div id="content_list">
    </div>
    <img src="/assets/images/bullet-04_1bullet-04.png" loading="lazy" alt="" class="tp-bullet">
    <div>
      <a href="/temple/project" class="tp-link2">วัดในโครการ</a>
      <a href="/temple/education" class="tp-link2">วัดกรณีศึกษา</a>
      <a href="/temple/center" class="tp-link2">วัดศูนย์การเรียนรู้</a>
      <a href="/temple/creative" class="tp-link2">วัดพื้นที่สุขภาวะสร้างสรรค์</a>
      
    </div>
    <div class="div-block-54"></div>
  </div>



<script src="/assets/js/jquery.js"></script>
<script>
    var my_cate_id = '1';
    var recom = '';
    var hit = '';
    var region = '';
   
    $(document).ready(function() {
        data_page(1);

        $('#tab1').click(function() {
            hit = '';
            recom = '';
            region = 'northern';
            data_page(1);
        });
        $('#tab2').click(function() {
            hit = '';
            recom = '';
            region = 'central';
            data_page(1);
        });
        $('#tab3').click(function() {
            hit = '';
            recom = '';
            region = 'northeastern';
            data_page(1);
        });
        $('#tab4').click(function() {
            hit = '';
            recom = '';
            region = 'southern';
            data_page(1);
        });
        
    });

    function data_page(p) {

        $('#content_list').html('loading ..').load('/temple/list_project', {
            'page_no': p,
            'cate_id': my_cate_id,
            'region': region
        }, function() {});
    }
</script>