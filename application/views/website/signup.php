<div class="limit" >
    <div class="login-container" >
        <div class="bb-login" style="border-radius: 20px; margin-right: 10px; margin-left: 10px;">
            <form class="bb-form validate-form"> <span class="bb-form-title p-b-26"> Sign Up </span> <span class="bb-form-title p-b-48"> <img src="<?php echo base_url('assets/images/logo.jpg') ?>" height="150px" width="150px" style="float:center;" style="margin:0px;"></span>
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c"> <input class="input100" type="text" name="email"> <span class="bbb-input" data-placeholder="Email"></span> </div>
                <div class="wrap-input100 validate-input" data-validate="Valid Name is: abc"> <input class="input100" type="text" name="email"> <span class="bbb-input" data-placeholder="Name"></span> </div>
                <div class="wrap-input100 validate-input" data-validate="Valid City is: ranchi"> <input class="input100" type="text" name="city"> <span class="bbb-input" data-placeholder="City"></span> </div>
                <div class="wrap-input100 validate-input" data-validate="Valid Country is: country"> <input class="input100" type="text" name="country"> <span class="bbb-input" data-placeholder="Country"></span> </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password"> <span class="btn-show-pass"> <i class="mdi mdi-eye show_password"></i> </span> <input class="input100" type="password" name="pass"> <span class="bbb-input" data-placeholder="Password"></span> </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password"> <span class="btn-show-pass"> <i class="mdi mdi-eye show_password"></i> </span> <input class="input100" type="password" name="pass"> <span class="bbb-input" data-placeholder="Confirm Password"></span> </div>
                <div class="login-container-form-btn">
                    <div class="bb-login-form-btn">
                        <div class="bb-form-bgbtn"></div> <button class="bb-form-btn"> Register </button>
                    </div>
                </div>
                <div class="text-center p-t-115"> <span class="txt1" style="color:#6B6B69"> You have an account? </span> <a class="txt2" href="<?php echo base_url('website/signin')?>" style="color:#F5C400"> Login </a> </div>
            </form>
        </div>
    </div>
</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="<?php echo base_url("assets/website/plugins/masterslider/masterslider.min.js")?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
var showPass = 0;
$('.btn-show-pass').on('click', function(){
if(showPass == 0) {
$(this).next('input').attr('type','text');
$(this).find('i').removeClass('mdi-eye');
$(this).find('i').addClass('mdi-eye-off');
showPass = 1;
}
else {
$(this).next('input').attr('type','password');
$(this).find('i').addClass('mdi-eye');
$(this).find('i').removeClass('mdi-eye-off');
showPass = 0;
}

});
});
</script>