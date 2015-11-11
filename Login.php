<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link type="text/css" rel="stylesheet" href="Bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="MyStyle/Mystyle.css"
    </head>
    <body>
        <div id="scope">
            <form action="Dash.php" class="form-horizontal" role="form"> <div class="form-group">

                <label for="user" class="col-sm-2 control-label">User</label> <div class="col-sm-10">

                    <input required type="text" class="form-control" id="user" placeholder="Enter User Name">

                </div>

            </div>

            <div class="form-group">

                <label for="password" class="col-sm-2 control-label">Password</label> <div class="col-sm-10">

                    <input required type="password" class="form-control" id="password" placeholder="Enter The Password">

                </div>

            </div>

            <div class="form-group">

                <div class="col-sm-offset-2 col-sm-10"> <div class="checkbox">

                        <label>

                            <input type="checkbox"> Remember me </label>

                    </div>

                </div>

            </div>

            <div class="form-group">

                <div class="col-sm-offset-2 col-sm-10">

                    <button type="submit" class="btn btn-default">Sign in</button> </div>
            </div>

        </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
