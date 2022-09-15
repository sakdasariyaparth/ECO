<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <?php include 'link.inc.php'; ?> -->
    <title>SIGN IN</title>
    <style>
       #hed{
	        font-size: 300%;
	        background-color: #FBCEB1;
	        color: black;
	        margin-top: 25px;
            border-radius: 10px;
        }
        form{
            border: 1px solid white;
            border-radius: 10px;
        }
        .btn{
            background-color: #FBCEB1;
            color: black;
            border-radius: 8px;
        }
        .btn:hover{
            background-color: #FBCEB1;
            color: black;
            font-size: 16px;
            border: 1px solid #FBCEB1;
            border-radius: 20px;
        }
        label{
            font-size: 13px;
        }
        .form-control {
            font-size: 1.5rem;
        }
        #next{
            font-size: 13px;
            text-decoration: none;
        }
        .set{
            margin-top: 80px;
        }
        #next:hover{
            font-size: 15px;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <header id="hed">
                   &nbsp;&nbsp; a b a y
                </header>
            </div>
        </div>
</div>
<div class="container">
<div class="row">
            <div class="set">
			<div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="POST" class="row g-3"> 
                        <h2>SIGN IN</h2>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="mail2" id="mail2" class="form-control" placeholder="Username" maxlength="15" required>
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                        <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" value="SIGN UP" id="b1" name="b1" class="btn mt-4 color">
                                </div><br><br><br>
                                <div class="col-sm-8">
                                    <a href="#" id="next" class="mt-2">Create A New Account ?</a>  
                                </div>
                            </div>
                        </div>                  
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
  <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->     