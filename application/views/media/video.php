<div class="wat-container w-container">
    <div class="w-layout-grid media-grid-top">
        <div>
            <div style="padding-top:56.17021276595745%" class="w-embed-youtubevideo"><iframe src="https://www.youtube.com/embed/iEQhihNA6tw?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>
        </div>
        <div>
            <h1 class="media-h">ทุกวันนี้เรามีวัด<br>เพื่ออะไร?</h1>
            <div class="media-txt-top">พราะในอดีต วิถีชีวิตของเราผูกพันอยู่กับวัด วัดเป็นโรงเรียน เป็นโรงพยาบาล เป็นที่พบปะ เป็นที่เรียนรู้ธรรมะ วัดจึงเป็นเสมือนศูนย์กลางของชีวิตและจิตวิญญาณของสังคมไทย แต่เมื่อสภาพสังคมเปลี่ยนไป บทบาทของวัดก็เริ่มถูกเปลี่ยนไปด้วย วิถีชีวิตของเราก็เริ่มห่างจากวัด...และวัดก็เริ่มห่างจากชีวิต… ในวันนี้ จากความร่วมมือของพุทธบริษัทบางส่วนทั้งพระสงฆ์ ชุมชน และเหล่าภาคีเครือข่ายจากสาขาอาชีพต่าง ๆ<a href="http://localhost/media/video#w-tabs-0-data-w-pane-0"><br></a>
            </div>
        </div>
    </div>
</div>
<div class="course-container--register wat-container w-container">
    <div data-duration-in="300" data-duration-out="100" data-current="Tab 1" data-easing="ease" class="w-tabs">
        <div class="tabs-menu w-tab-menu">
            <a data-w-tab="Tab 1" id="tab1" class="tab-link w-inline-block w-tab-link w--current">
                <div>วีดีโอล่าสุด</div>
            </a>
            <a data-w-tab="Tab 2" id="tab2" class="tab-link w-inline-block w-tab-link">
                <div>วัดบันดาลใจ</div>
            </a>
            <a data-w-tab="Tab 3" id="tab3" class="tab-link w-inline-block w-tab-link">
                <div>หลักสูตรวัดบันดาลใจ</div>
            </a>
            <a data-w-tab="Tab 4" id="tab4" class="tab-link w-inline-block w-tab-link">
                <div>Talk&amp;Forum</div>
            </a>
            <a data-w-tab="Tab 5" id="tab5" class="tab-link tab-last w-inline-block w-tab-link">
                <div>Show case</div>
            </a>
        </div>
        <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active"></div>
            <div data-w-tab="Tab 2" class="w-tab-pane"></div>
            <div data-w-tab="Tab 3" class="w-tab-pane"></div>
            <div data-w-tab="Tab 4" class="w-tab-pane"></div>
            <div data-w-tab="Tab 5" class="w-tab-pane"></div>
        </div>
    </div>
</div>

<div id="content_list" style="text-align: center;min-height:200px;">Loading ...</div>

<script src="/assets/js/jquery.js"></script>
<script>
    var my_cate_id = '';
    var recom = '';
    var hit = '';

    $(document).ready(function() {
        data_page(1);

        $('#tab1').click(function() {
            hit = '';
            recom = '';
            my_cate_id = '';
            data_page(1);
        });
        $('#tab2').click(function() {
            hit = '';
            recom = '';
            my_cate_id = '1';
            data_page(1);
        });
        $('#tab3').click(function() {
            hit = '';
            recom = '';
            my_cate_id = '2';
            data_page(1);
        });
        $('#tab4').click(function() {
            hit = '';
            recom = '';
            my_cate_id = '3';
            data_page(1);
        });
        $('#tab5').click(function() {
            hit = '';
            recom = '';
            my_cate_id = '4';
            data_page(1);
        });
    });

    function data_page(p) {

        $('#content_list').html('loading ..').load('/media/list_video', {
            'page_no': p,
            'cate_id': my_cate_id
        }, function() {});
    }
</script>