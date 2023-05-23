<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container-fluid text-danger ">
        <div class="row">
        <div class="col-1">
            <div class="col" style="margin-left: 10px;">
                <img src="./donorimg1.jpeg" style="height: 100px; width: 100px;">
            </div>
        </div>
        <div class="col-11 mt-5 text-white">
            <center><h1><b>ORGAN DONOR SYSTEM</b></h1></center>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 text-white">
            <nav class="navbar nanbar-inverse nanbar-light bg-danger">
                <nav class="nav">
                    <a class="nav-link active text-white" href="#"><u><B>HOME</B></u></a>
                    <a class="nav-link text-white" href="#"><u><b>DONOR</b></u></a>
                    <a class="nav-link text-white" href="#"><u><b>ACCEPTOR</b></u></a>
                    <a class="nav-link text-white" href="#"><u><b>HOSPITALS</b></u></a>
                    <a class="nav-link text-white" href="#"><u><b>CAMP</b></u></a>
                    <a class="nav-link text-white" href="#"><u><b>CONTACT US</b></u></a>
                </nav>
            </nav>
        </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-white">
                <nav class="navbar nanbar-inverse nanbar-light bg-violet">
                    <nav class="nav">
                        <a class="nav-link active text-white" href="#"><u><B>Donor signup</B></u></a>
                        <a class="nav-link text-white" href="#"><u><b>user signup</b></u></a>
                        <a class="nav-link text-white" href="#"><u><b>Admin login</b></u></a>
                    </nav>
            </div>
        </div>
    </div>
    <div class="container" style="margin-left: 0px; width: 700;">
        <div class="row">
            <div class="col">
                <div class="main">
                    <input type="checkbox" id="check" aria-hidden="true">
                    <div class="Signup">
                        <form method="POST" action="">
                            
                            <label for="check" aria-hidden="true">Signup</label>
                            <input type="text" name="username" placeholder="username" required="">
                            <input type="password" name="password" placeholder="password" required="">
                            <button name="sign_up">Sign up</button>
                            <a class="nav-link active text-white" href="#"><u><B><center>Forgot password</center></B></u></a>
                            <button>Donor Signin</button>
                            <button>User Signin</button>
                        </form>
                    </div>        
                </div>
            </div>
            <div class="col">
                <img src="./donor5.jpg" style="height: 500px; width: 500px;">
            </div>
            <div class="col">
                <p style="color: azure;"><b><h1>WHO CAN DONATE ORGAN</h1></b></p>
                <P style="color: azure;">*There is no age limit to donate the organ.
                all people should consier themselves potential organ,eye, and tissue, or donors.<br>
                *Anyone can register a decision to become an organ donor after death, there is no age limit.
                To donate organs after death, a person needs to die in hospital in specific circumstances.<br>
                *The donor has not had alcohol 48 hours before the donation.</P>
            </div>
        </div>
    </div>
    <?php
if(isset($_POST)){
    $username=$_POST['username'];
    $password=$_POST['password'];
    echo $username,"</br>",$password;
}
    ?>
</body>
</html>