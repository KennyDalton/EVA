<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.htmlheader')
</head>

<body style="background:#ededed">
    <!-- Purple Header -->
    
<div class="edge-header blue-grey darken-1" >

<div class="row" >
    <div class="col-md-3"></div>
    <h1 ><p class="white-text"></p></h1>
</div>

</div>
<!-- Main Container -->
    
    <div class="container free-bird">
    
    <div class="row" >
        <div class="col-md-8 col-lg-6 mx-auto float-none white z-depth-1 py-2 px-2">
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <!--Header-->
                        <div class="form-header  cyan darken-3">
                            <h3>
                                <i class="fa fa-lock white-text"></i> Login:
                            </h3>
                        </div>

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <label for="email">Your email</label>
                            <input type="email" id="email" class="form-control validate" name="email">
                        </div>

                        <br>

                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="password" class="form-control validate" name="password">
                            <label for="password">Your password</label>
                        </div>

                        <br>

                        <div class="text-center">
                            <button class="btn btn-  cyan darken-3 waves-effect waves-light">Login</button>
                        </div>
                    </form>
                    <!-- Form -->
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    
                    <div class="footer-copyright py-3 text-center" alig="center">
                        © 2018 Copyright:
                        <a href="#"> evaGroup.com </a>
                    </div>
                    
                </div>
            </div>
            <!--/Form with header-->
        </div>
        <div class="col-md"></div>
    </div>
<!-- /.Main Container -->
    
    <!-- SCRIPTS -->
    @include('layouts.scripts')

</body>

</html>
