
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Reviewer - login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
</head>
<body>

    <!-- Masthead -->
    <header class="masthead text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-1 my-auto"></div>
          
          <div class="col-lg-5 my-auto">
            <div class="header-content mx-auto">
              <a class="mb-5">영화 리뷰의 모든 것,</a>
              <h1 class="mb-5"><span style="color:chartreuse">M</span>ovie <span style="color:chartreuse">R</span>eviewer</h1>
            </div>
          </div>

          <div class="col-lg-5 my-auto">
            <form name ="loginForm" action="includes/login.php" method="POST">
             <div class="form-group">
              <input type="text" name="username" class="form-control form-control-lg" placeholder="ID">
             </div>
             <div class="form-group"> 
              <input type="password" name="password" class="form-control form-control-lg" placeholder="password"><br>
             </div>
              <br><button name="login" type="submit" class="btn btn-block btn-lg btn-success">로그인</button>
            </form> 
              <hr color="white" width="450">
              <form>
              <input name="register" type="button" class="btn btn-block btn-lg btn-success" onclick="location.href='./registration.php'" value="회원가입"/>
              </form>    
          </div>
          <div class="col-lg-1 my-auto"></div>
        
        </div><!--row -->

      </div> <!-- container-->
    </header>    
    
</body>
</html>
