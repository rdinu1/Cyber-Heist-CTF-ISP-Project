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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="imgloaded">
    <div class="glitch">
        <div class="glitch__img glitch__img_leaderboard"></div>
        <!--<div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>-->
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
                        <a href="hackerboard.html" class="p-3 text-decoration-none text-white bold">Hackerboard</a>
                        <a href="login.html" class="p-3 text-decoration-none text-light bold">Login</a>
                        <a href="register.html" class="p-3 text-decoration-none text-light bold">Register</a>-->
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">LEADER</span>BOARD</h1>
                    <p class="text-grey lead text-spacey text-center hackerFont">
                        Where the world get's ranked!
                    </p>
                    <!--<div class="row justify-content-center my-5">
                        <div class="col-xl-10">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="row mt-5  justify-content-center">
                <div class="col-xl-10">
                    <table class="table table-hover table-striped">
                        <thead class="thead-dark hackerFont">
                            <tr>
                                <th>#</th>
                                <th>Team Name</th>
                                <th>Solved Challenges</th>
                                <th>Total Time Taken</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>CyberX</td>
                                <td>10</td>
                                <td>01:50:59</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Cyres</td>
                                <td>8</td>
                                <td>02:18:29</td>
                                <td>4000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>anonymousone</td>
                                <td>6</td>
                                <td>02:30:00</td>
                                <td>2650</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>slboys</td>
                                <td>5</td>
                                <td>02:40:10</td>
                                <td>2000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                    
        <div class="navbar-nav ml-auto">
            <a href="index.php" class="p-3 text-decoration-none text-lightcol bold bottom-nav">Home</a>
            
            <a href="leaderboard.php" class="p-3 text-decoration-none text-white bold bottom-nav">Leaderboard</a>
            <a href="about.php" class="p-3 text-decoration-none text-lightcol bold bottom-nav">About</a>
        </div>
                   
                </nav>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        var s1 = {
            label: 'ashawe',
            borderColor: 'blue',
            steppedLine: true,
            data: [{
                x: '2017-01-06 00:00:00',
                y: 00
            }, {
                x: '2017-01-06 00:07:00',
                y: 100
            }, {
                x: '2017-01-06 00:15:40',
                y: 300
            }, {
                x: '2017-01-06 00:18:10',
                y: 260
            }, {
                x: '2017-01-06 00:20:40',
                y: 350
            }, {
                x: '2017-01-06 00:30:20',
                y: 400
            }, {
                x: '2017-01-06 00:40:10',
                y: 550
            }, ]
        };

        var s3 = {
            label: 'anonymous',
            borderColor: 'green',
            steppedLine: true,
            data: [{
                x: '2017-01-06 00:00:00',
                y: 00
            }, {
                x: '2017-01-06 00:10:00',
                y: 120
            }, {
                x: '2017-01-06 00:15:00',
                y: 400
            }, {
                x: '2017-01-06 00:21:00',
                y: 360
            }, {
                x: '2017-01-06 00:25:00',
                y: 390
            }, {
                x: '2017-01-06 00:40:00',
                y: 650
            }, ]
        };

        var s2 = {
            label: 'CR007',
            borderColor: 'red',
            steppedLine: true,
            data: [{
                x: '2017-01-06 00:00:00',
                y: 00
            }, {
                x: '2017-01-06 00:05:00',
                y: 150
            }, {
                x: '2017-01-06 00:15:00',
                y: 350
            }, {
                x: '2017-01-06 00:21:00',
                y: 500
            }, {
                x: '2017-01-06 00:25:00',
                y: 800
            }, {
                x: '2017-01-06 00:40:00',
                y: 900
            }, {
                x: '2017-01-06 00:44:59',
                y: 1900
            }, ]
        };

        var s4 = {
            label: 'liveoverflow',
            borderColor: 'pink',
            steppedLine: true,
            data: [{
                x: '2017-01-06 00:00:00',
                y: 00
            }, {
                x: '2017-01-06 00:03:00',
                y: 100
            }, {
                x: '2017-01-06 00:07:34',
                y: 250
            }, {
                x: '2017-01-06 00:10:45',
                y: 500
            }, {
                x: '2017-01-06 00:13:29',
                y: 650
            }, {
                x: '2017-01-06 00:21:00',
                y: 900
            }, {
                x: '2017-01-06 00:33:59',
                y: 1350
            }, {
                x: '2017-01-06 00:39:00',
                y: 1680
            }, {
                x: '2017-01-06 00:42:59',
                y: 2540
            }, ]
        };

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                datasets: [s1, s2, s3, s4]
            },
            options: {
                scales: {
                    yAxes: [{
                        type: 'linear'
                    }],
                    xAxes: [{
                        type: 'time',
                        distribution: 'series', // or linear
                        time: {
                            unit: 'minute',
                            displayFormats: {
                                minute: 'mm:ss'
                            },
                            tooltipFormat: 'mm:ss'
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>