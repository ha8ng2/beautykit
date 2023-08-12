
<div class="container" style="margin-top:50px">

    <div class="row" >
        <div class="col-xs-12 col-sm-12 col-md-5 well well-sm col-md-offset-4">
            <legend> Đăng ký thành viên!
            </legend>
            <form action="index.php?action=dangky&act=dk_action" method="post" class="form" role="form">
                <div class="row">
                    <div class="col-xs-4 col-md-4"><label for="email">Name:</label>
                    </div>
                    <div class="col-xs-8 col-md-8"><input class="form-control" name="txttenkh"
                                                          placeholder="Name" required="" autofocus=""
                                                          type="text"></div>
                    <div class="col-xs-4 col-md-4"><label for="email">Address:</label>
                    </div>
                    <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi"
                                                          placeholder="Address" required="" autofocus=""
                                                          type="text"></div>
                    <div class="col-xs-4 col-md-4"><label for="email">Phone:</label>
                    </div>
                    <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt"
                                                          placeholder="Phone" required=""
                                                          autofocus="" type="text"></div>
                    <div class="col-xs-4 col-md-4"><label for="email">Username:</label>
                    </div>
                    <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername"
                                                          placeholder="Username" required="" type="text">
                    </div>
                </div>
                <label for="email">Email:</label> <input class="form-control" name="txtemail" placeholder="Email"
                                                         type="email">
                <input class="form-control" name="txtpass" placeholder="Password" type="password">
                <input class="form-control" name="retypepassword" placeholder="Confirm Password" type="password">


                <button class="btn btn-lg btn-primary btn-block" type="submit"> Register</button>
            </form>
        </div>
    </div>
</div>