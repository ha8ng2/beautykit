<section class="login-block" style="margin-top:40px">
    <div class="container" style="margin-left: 300px;">
       
        <h3 class="text-center"><b>Login Now</b></h3>
        <form action="index.php?action=dangnhap&act=login_action" class="login-form" method="post" >
            <div class="form-group">
                <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                <input type="text" class="form-control" name="txtusername" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                <input type="password" class="form-control" name="txtpassword" placeholder="">
            </div>
            <div class="form-check">
                <button class="btn btn-primary float-right" type="submit"> Login</button>

            </div>

         </form>
    <div class="copy-text"> 
       <a href="index.php?action=forgetpass">Forget Password</a>
    </div>
            
</section>