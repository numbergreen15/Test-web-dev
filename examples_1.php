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

</head>

<body>
    <div class="container pt-2">
        <?php
        $text_input = isset($_POST['text_input']) ? $_POST['text_input'] : '';
        ?>
        <div>
            <form action="" method="post">
                <input type="text" class="form-control" name="text_input" onkeypress='return isNumbernoDot(event)' value="<?php echo $text_input; ?>" required>
                <div class="d-flex">
                <button type="submit" class="btn btn-outline-primary mt-2 ml-auto">Submit</button>
                </div>
            </form>
        </div>

        <?php
        if ($text_input != '') {
            $value =  explode(',', $text_input);
     

        ?>
        <div>
            <span>sum : <?php
                        $sum = 0;
                        $data_sum = $value;
                        foreach ($data_sum as $key => $num) {
                            if ((int)$num > 10) {
                                $sum = (int)substr((int)$num,-1) + $sum;
                            }
                            else{
                                $sum = (int)$num + $sum;
                            }
                        }
                        echo  $sum; ?></span><br>
            <span>
                shot : <?php

                        sort($value, SORT_NUMERIC);

                        $data_shot = array_count_values($value);

                        foreach ($data_shot as $key => $num) {
                            if ($key != '') {
                            echo  $key;
                            echo ',';
                            }
                        }
                        ?>
            </span><br>
            <span>
                duplicated : <?php
                                $data_duplicated = array_count_values($value);
                                foreach ($data_duplicated as $key => $num) {
                                    if ((int)$num > 1) {
                                        echo  $key;
                                        echo ',';
                                    }
                                }
                                ?>

            </span>
        </div>
        <?php } ?>
    </div>

    <script>
        var key_old = '';
        function isNumbernoDot(e) {
            var charCode;
            if (e.keyCode > 0) {
                charCode = e.which || e.keyCode;
            } else if (typeof(e.charCode) != "undefined") {
                charCode = e.which || e.keyCode;
            }

            if (key_old == 44 && charCode == 44) {
                return false
            }

            key_old = charCode;

            if (charCode == 44)
                return true
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

</body>

</html>