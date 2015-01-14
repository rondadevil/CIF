
<div class="span5 col-md-3" id="sandbox-container">


        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
        </div>			<!-- /modal-header -->
        <div class="modal-body">
            <style>
                .form-signin input[type="text"]{margin-bottom:-1px;border-bottom-left-radius:0;border-bottom-right-radius:0;}
                .form-signin input[type="password"]{margin-bottom:10px;border-top-left-radius:0;border-top-right-radius:0;}


            </style>
            <form name="login" class="form-signin" action="welcome.php" method="post">
                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="password" required>

                <textarea class="input-xlarge trololo" id="textarea" rows="4" cols="78" placeholder="Address" required ></textarea>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>

                <input id="sandbox-container" type="text" class="form-control" name="username">
            </form>

        </div>			<!-- /modal-body -->
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>			<!-- /modal-footer -->
