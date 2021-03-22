<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .sc_mobile {
            display: none;
        }

        .sc_web {
            display: block;
        }

        .score {
            display: inline-block;
            padding: 5px 10px;
            background-color: #0B375C;
            color: #fff;
            border-radius: .25rem;
        }

        @media only screen and (max-width: 750px) {
            .sc_web {
                font-size: 14px;
                display: none;
            }

            .sc_mobile {
                padding: 5px 0px;
                font-size: 10px;
                display: block;
            }

            .score {
                font-size: 10px;
                display: inline-block;
            padding: 5px 10px;
            background-color: #0B375C;
            color: #fff;
            border-radius: .25rem;
            }
        }
    </style>

</head>

<body style="font-family: 'Prompt', sans-serif;">
    <div class="container  pt-2">

        <?php
        // class data {
        //     public $date ;
        //     public $home_name ;
        //     public $away_name ;
        //     public $home_flag ;
        //     public $away_flag ;
        //     public $score ;
        // }

        $date = ['18/มกราคม/2020', '14/มกราคม/2020', '11/มกราคม/2020'];
        $home_name = 'ทีมชาติไทย รุ่นอายุไม่เกิน 23 ปี';
        $home_flag = 'thailand.png';
        $home_score = [0, 1, 1];

        $away_name = ['ทีมชาติซาอุดิอาระเบีย', 'ทีมชาติอิรัก', 'ทีมชาติออสเตรเลีย'];
        $away_flag = ['saudi.png', 'Iraq.png', 'australia.png'];
        $away_score = [1, 1, 2];

        for ($i = 0; $i < count($date); $i++) {
        ?>
            <div class="p-3 pr-4 pl-4 mt-2" style="background-color: #eee;">
                <div><span style="font-size: 14px;font-weight: 600;"><?php echo $date[$i]; ?></span></div>
                <div style="text-align: center;">
                    <span style="font-size: 12px;font-weight: 600;">AFC U-23 Championship 2020</span>
                </div>
                <div class="row" style="text-align: center;background-color: #fff;border-radius: 25px;">

                    <div class="col-5 col-sm-5" style="align-self: center;">

                        <div class="sc_web">
                            <img style="width: 20px;" src="img/<?php echo $home_flag; ?>" alt="<?php echo $home_flag; ?>">
                            <span><?php echo $home_name; ?></span>
                        </div>
                        <div class="sc_mobile">
                            <div><img style="width: 20px;" src="img/<?php echo $home_flag; ?>" alt="<?php echo $home_flag; ?>"></div>
                            <div> <span><?php echo $home_name; ?></span></div>
                        </div>

                    </div>
                    <div class="col-2 col-sm-2 pt-1 pb-1" style="align-self: center;">
                        <span class="score"><?php echo $home_score[$i]; ?> : <?php echo $away_score[$i]; ?></span>
                    </div>
                    <div class="col-5 col-sm-5" style="align-self: center;">

                        <div class="sc_web">
                            <span><?php echo $away_name[$i]; ?></span>
                            <img style="width: 20px;" src="img/<?php echo $away_flag[$i]; ?>" alt="<?php echo $home_flag; ?>">
                        </div>
                        <div class="sc_mobile">
                            <div><img style="width: 20px;" src="img/<?php echo $away_flag[$i]; ?>" alt="<?php echo $home_flag; ?>"></div>
                            <div> <span><?php echo $away_name[$i]; ?></span></div>
                        </div>

                    </div>
                </div>

            </div>

        <?php } ?>
    </div>
</body>

</html>