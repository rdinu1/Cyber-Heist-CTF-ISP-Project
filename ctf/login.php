<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cyber Heist CTF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="css/main.css">
    
    <script>
    function submitform()
    {
    document.getElementById("form").submit();
    
    }
    </script>
    
</head>

<body class="imgloaded">
    <script>
    document.cookie = "ausername1=John Doe; expires=Sat, 26 Sep 2020 00:00:00 UTC";
    </script>
    
    <div class="glitch">
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
    </div>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="index.php" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">CYBER_HEIST_CTF</span><!--<span class="color_white">CTF</span>--></h3>
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <!--<a href="index.html" class="p-3 text-decoration-none text-light bold">Home</a>
                        <a href="about.html" class="p-3 text-decoration-none text-light bold">About</a>
                        <a href="hackerboard.html" class="p-3 text-decoration-none text-light bold">Hackerboard</a>
                        <a href="login.html" class="p-3 text-decoration-none text-white bold">Login</a>
                        <a href="register.html" class="p-3 text-decoration-none text-light bold">Register</a>-->
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <h1 class="display-1 bold content__title tile">CYBER<span class="color_danger">HEIST</h1>
                    <p class="text-red text-spacey hackerFont lead mb-5">
                        Hack the page to get your invite code
                    </p>
                    <div class="row hackerFont">
                        <div class="col-md-6">
                            <form method="post" action="login2.php" id="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="team_name" name="pname" placeholder="Player name">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="pwd" placeholder="Invite code">
                                <small id="passHelp" class="form-text text-white">Make sure nobody's behind you</small>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <button class="btn btn-outline-danger px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="submitform()">
                    <h4>Login</h4>
                    </button>
                    
                </div>
                
                <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                    
        <div class="navbar-nav ml-auto">
            <a href="index.php" class="p-3 text-decoration-none text-lightcol bold bottom-nav">Home</a>
            
            <a href="leaderboard.php" class="p-3 text-decoration-none text-lightcol bold bottom-nav">Leaderboard</a>
            <a href="about.php" class="p-3 text-decoration-none text-lightcol bold bottom-nav">About</a>
        </div>
                   
                </nav>
                <div class="find">
                <h3>Do you want to login? This page has interesting file that colour up this website. See if you can find it!</h3>
                </div>
        
            </div>
                
                
                
                
           <!-- <img src="./images/001.png" class="login_pic" alt="Do you want to login" width="1" height="1">-->
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>