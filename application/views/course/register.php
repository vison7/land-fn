<div class="course-container--register w-container">
    <div class="div-block-23">
        <div class="cource-re-h">แบบฟอร์มสมัครหลักสูตร</div>
    </div>
    <div class="w-layout-grid course-re-grid">
        <div></div>
        <div>
            <div class="w-form">
                <form id="frm-signin" name="frm-signin" data-name="Email Form" method="POST">
                    <label for="username" class="course-frm-label">ชื่อที่ใช้แสดง*</label>
                    <input type="text" class="course-re-textbox w-input" maxlength="256" name="username" data-name="username" placeholder="Username" id="username" required="">

                    <label for="email-2" class="course-frm-label">อีเมล*</label>
                    <input type="email" class="course-re-textbox w-input" maxlength="256" name="email" data-name="email" placeholder="Email" id="email" required="">

                    <label for="password" class="course-frm-label">รหัสผ่าน*</label>
                    <input type="password" class="course-re-textbox w-input" maxlength="256" name="password" data-name="password" placeholder="Password" id="password" required="">

                    <label for="confirm-password" class="course-frm-label">ยืนยันรหัสผ่าน*</label>
                    <input type="password" class="course-re-textbox w-input" maxlength="256" name="confirm_password" data-name="confirm_password" placeholder="Confirm Password" id="confirm_password" required="">

                    <label for="firstnane" class="course-frm-label">ชื่อ-ฉายา</label>
                    <input type="text" class="course-re-textbox w-input" maxlength="256" name="firstname" data-name="firstname" placeholder="" id="firstname" required="">

                    <label for="temple_name" class="course-frm-label">วัดที่สังกัด</label>
                    <input type="text" class="course-re-textbox w-input" maxlength="256" name="temple_name" data-name="temple_name" placeholder="" id="temple_name" required="">

                    <label class="w-checkbox checkbox-field"><input type="checkbox" id="agree" name="agree" data-name="Checkbox" class="w-checkbox-input"><span class="checkbox-label w-form-label" for="checkbox">ข้าพเจ้ายินยอม ตามเงื่อนไข และข้อตกลงของเว็ปไซต์</span></label>

                    <a href="javascript:Register();" class="link-block-2 w-inline-block" id="btn-submit">
                        <div class="text-block-29">สมัครหลักสูตร</div>
                    </a>

                    <a href="#" class="link-block-2 w-inline-block" id="btn-loading" style="display:none">
                        <div class="text-block-29">กรุณารอซักครู่ ...</div>
                    </a>
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
        <div></div>
    </div>
</div>


<script>
    window.onload = (event) => {

        jQuery.extend(jQuery.validator.messages, {
            required: "^ กรอกข้อมูลให้ถูกต้อง",
            equalTo: "^ กรอกข้อมูลให้ถูกต้อง",
            email: "^ กรอกอีเมล์ให้ถูกต้อง"
        });

        $("#frm-signin").validate({
            ignore: 'input[type="hidden"]',
            rules: {
                username: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 4
                },
                confirm_password: {
                    required: true,
                    equalTo: password
                },
                firstname: "required",
                lastname: "required",
                agree: "required"
            },
            submitHandler: function(form) {
                // alert('OK');
                $('#btn-submit').hide();
                $('#btn-loading').show();
                $.ajax({
                    type: 'POST',
                    url: '/member/register_member',
                    dataType: "json",
                    data: $(form).serialize(),
                    success: function(result) {
                        if(result.code==200){
                            alert("สมัครสมาชิกเรียบร้อยแล้ว");
                            window.location.href= '/course/ep';
                        }else if(result.code==400){    
                            alert("อีเมล์นี้มีอยู่ในระบบแล้ว กรุณาใส่อีเมล์ใหม่");
                        }else if(result.code==404){
                            alert("ชื่อที่ใช้แสดงนี้มีอยู่ในระบบแล้ว กรุณาใส่ชื่อที่ใช้แสดงใหม่");
                        }else{
                            alert("เกิดความผิดพลาด กรุณาลองใหม่อีกครั้ง");
                        }
                        $('#btn-submit').show();
                        $('#btn-loading').hide();
                    },
                    error : function(error) {
                        $('#btn-submit').show();
                        $('#btn-loading').hide();
                    }
                });
                return false;
            }
        });


    };

    function Register() {
        $('#frm-signin').submit();
    }
</script>