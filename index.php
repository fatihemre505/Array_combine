<?php declare(strict_types=1) ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PHP || Arrays </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card bg-light">
                    <div class="card-header">
                        <h1 class="text-center fw-bold py-5">PHP Array_Combine</h1>
                        <p class="alert alert-dark"><?php
                         echo "YeniArray ="."array_combine('array1' , 'array2')"; 
                        ?></p>
                    </div>
                    <div class="card-body">

                        <?php   

            //arr_Combine 2 array  i birleştirmek için kullanılır

                    $names = array("fatih","caner","adnan","ersin");
                    $ages = array(40,40,40,39);

                    $arrCombine  = array_combine($names,$ages);

                foreach($arrCombine as $key => $value){
                    
                    echo "<p class='alert alert-success'>"."$key ". " $value "."</p>";
                
                }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>