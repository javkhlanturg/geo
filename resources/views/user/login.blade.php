<!DOCTYPE html>
<html lang="en">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/bootstrap.min.css">

		<!-- Website CSS style -->
    <style>
    /*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */

body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 70px;
}

h1.title {
	font-size: 30px;
	font-family: 'Passion One', cursive;
	font-weight: 300;
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

    </style>

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">{{ Voyager::setting('admin_title', 'Voyager') }}</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="/login">
             {{ csrf_field() }}
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Цахим хаяг</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Имэйл хаягаа оруулна уу"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Нууц үг</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Нууц үгээ оруулна уу"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" style="border-radius: 0;background-color:#fc7100; border-color: #BD5800;" class="btn btn-primary btn-block login-button">Нэвтрэх</button>
              @if (count($errors))
              <br/>
               <div class="error-login">
                   Нэвтрэх нэр эсвэл нууц үг буруу байна
               </div>
               <br/>
              @endif
              <a style="border-radius: 0; background-color: #8D909B; color:#fff" class="btn btn-block login-button" data-toggle="modal" data-target="#myModal">Төлбөр төлөх боломжууд</a>
              <a style="border-radius: 0; background-color: #8D909B; color:#fff" class="btn btn-block login-button">Ашиглах заавар</a>
						</div>
					</form>
				</div>
			</div>
		</div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Төлбөрөө хэрхэн хийх вэ</h4>
          </div>
          <div class="modal-body">
            <div class="alert-info" style="padding:10px;background-color: #fc7100;color: #F7EFE8;">
             {!! Voyager::setting('payment_info') !!}
            </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Хаах</button>
                      </div>
                    </div>
                  </div>
                </div>
    <script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/jquery.min.js"></script>
		<script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/bootstrap.min.js"></script>
	</body>
</html>
