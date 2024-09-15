<div class="wat-container w-container">
    <div class="w-layout-grid wat-grid1">
        <div class="div-map"><img src="/assets/img/map.png" loading="lazy" alt=""><img src="/assets/images/bullet-03_1bullet-03.png" loading="lazy" alt="" class="image-10"></div>
        <div id="w-node-_00c2a46d-c563-fdaa-b792-59a9c2781f5b-c1aa6f87" class="div-map2"><img src="/assets/images/bullet-03_1bullet-03.png" loading="lazy" alt="" class="image-17">
            <div class="text-block-9"><?php echo $total_project?></div>
            <div class="text-block-10">วัดบันดาลใจ</div>
            <div class="text-block-11" onclick="location.href='/temple/project';" style="cursor:pointer">วัดในโครงการ</div>
        </div>
    </div>
</div>
<div class="wat-container w-container">
    <div class="w-layout-grid grid-10">
        <div id="w-node-e5ffb4be-f058-4dbf-f3a6-277b8213b120-c1aa6f87" class="div-block-12 tem-pad">
            <div class="txt-01"><?php echo $total_center?></div>
            <img src="/assets/img/wat-01.png" loading="lazy" alt="" class="image-8">
            <div class="text-block-13">วัดศูนย์การเรียนรู้</div>
        </div>
        <div class="div-block-14">
            <p class="paragraph-1">วัดที่มีการพัฒนาร่วมกับโครงการวัดบันดาลใจจนเกิดการเปลี่ยนแปลงทางกายภาพและมีสภาพแวดล้อมที่เป็นสัปปายะอย่างชัดเจน รวมถึงมีพื้นที่ในการทำกิจกรรมที่ส่งเสริมการเรียนรู้ เพื่อพัฒนาสุขภาวะกาย ใจ ปัญญา และสังคม</p>
            <br />
            <?php
    if (isset($center->data) && !empty($center->data)) {
        foreach ($center->data as $row) {
            $link = "/temple/detail/" . $row->id;
?>
            <a href="<?php echo $link ?>" class="tem-item-link w-inline-block" style="margin-bottom:10px;font-size:18px;">
                <div class="text-block-51"><?php echo $row->title ?></div>
                <div class="tp-list-desc"><?php echo $row->address ?></div>
            </a>
            <br />
            <?php }} ?>
            
           
            <div class="div-block-13">
                <a href="/temple/center" class="btn-more w-button">อ่านเพิ่มเติม</a>
            </div>
        </div>
        <div class="div-block-15">
            <div class="txt-02"><?php echo $total_education?></div>
            <img src="/assets/images/bullet-07.png" loading="lazy" alt="" class="image-8">
            <div class="text-block-13">วัดกรณีศึกษา</div>
        </div>
        <div class="div-block-16">
            <p class="paragraph-1">วัดที่เกิดการเปลี่ยนแปลงอย่างเป็นรูปธรรม โดยมีโจทย์ ประเด็นการทำงานที่มีการถอดองค์ความรู้ร่วมกับโครงการฯ อย่างเป็นระบบ เพื่อให้วัดอื่นๆ สามารถร่วมแลกเปลี่ยนเรียนรู้ และนำไปประยุกต์ใช้กับวัดตามบริบทของตัวเองได้</p>
            
            <br />
            <?php
    if (isset($education->data) && !empty($education->data)) {
        foreach ($education->data as $row) {
            $link = "/temple/detail/" . $row->id;
?>
            <a href="<?php echo $link ?>" class="tem-item-link w-inline-block" style="margin-bottom:10px;font-size:18px;">
                <div class="text-block-51"><?php echo $row->title ?></div>
                <div class="tp-list-desc"><?php echo $row->address ?></div>
            </a>
            <br />
            <?php }} ?>

            <div class="div-block-13">
                <a href="/temple/education" class="btn-more w-button">อ่านเพิ่มเติม</a>
            </div>
        </div>

        <div class="div-block-15">
            <div class="txt-01"><?php echo $total_creative?></div><img src="/assets/images/bullet-07.png" loading="lazy" alt="" class="image-8">
            <div class="text-block-13">วัดพื้นที่สุขภาวะสร้างสรรค์สำหรับคนทุกวัย</div>
        </div>
        <div class="div-block-16">
            <p class="paragraph-1">วัดที่เกิดการเปลี่ยนแปลงอย่างเป็นรูปธรรม โดยมีโจทย์ ประเด็นการทำงานที่มีการถอดองค์ความรู้ร่วมกับโครงการฯ อย่างเป็นระบบ เพื่อให้วัดอื่นๆ สามารถร่วมแลกเปลี่ยนเรียนรู้ และนำไปประยุกต์ใช้กับวัดตามบริบทของตัวเองได้</p>
            
            <br />
            <?php
    if (isset($creative->data) && !empty($creative->data)) {
        foreach ($creative->data as $row) {
            $link = "/temple/detail/" . $row->id;
?>
            <a href="<?php echo $link ?>" class="tem-item-link w-inline-block" style="margin-bottom:10px;font-size:18px;">
                <div class="text-block-51"><?php echo $row->title ?></div>
                <div class="tp-list-desc"><?php echo $row->address ?></div>
            </a>
            <br />
            <?php }} ?>

            <div class="div-block-13">
                <a href="/temple/creative" class="btn-more w-button">อ่านเพิ่มเติม</a>
            </div>
        </div>

        <div class="div-block-15">
            <div class="txt-02"><?php echo $total_project?></div><img src="/assets/images/bullet-07.png" loading="lazy" alt="" class="image-8">
            <div class="text-block-13">วัดในโครงการ</div>
        </div>
        <div class="div-block-16">
            <p class="paragraph-1">วัดที่เกิดการเปลี่ยนแปลงอย่างเป็นรูปธรรม โดยมีโจทย์ ประเด็นการทำงานที่มีการถอดองค์ความรู้ร่วมกับโครงการฯ อย่างเป็นระบบ เพื่อให้วัดอื่นๆ สามารถร่วมแลกเปลี่ยนเรียนรู้ และนำไปประยุกต์ใช้กับวัดตามบริบทของตัวเองได้</p>
            
            <br />
            <?php
    if (isset($project->data) && !empty($project->data)) {
        foreach ($project->data as $row) {
            $link = "/temple/detail/" . $row->id;
?>
            <a href="<?php echo $link ?>" class="tem-item-link w-inline-block" style="margin-bottom:10px;font-size:18px;">
                <div class="text-block-51"><?php echo $row->title ?></div>
                <div class="tp-list-desc"><?php echo $row->address ?></div>
            </a>
            <br />
            <?php }} ?>
            
            <div class="div-block-13">
                <a href="/temple/project" class="btn-more w-button">อ่านเพิ่มเติม</a>
            </div>
        </div>
    </div>
</div>