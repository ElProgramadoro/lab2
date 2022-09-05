<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <table class="table">
        <thead>
            <?php
            for($i = 1 ; $i<101 ; $i++){
                $aleatorio = rand (0,100);
                $color = "";
                if($aleatorio < 61)
                    $color = "secondary";
                elseif($aleatorio <=70)
                    $color = "danger";
                elseif($aleatorio <=80)
                    $color = "warning";
                elseif($aleatorio <=90)
                    $color = "info";
                else
                    $color = "success";                
            ?>
            <tr>
                <th scope="col"><?php echo $i?></th>
                <th>
                    <div class="progress">
                        <div class="progress-bar bg-<?php echo $color?> progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $aleatorio?>%;" aria-valuenow="<?php echo $aleatorio?>" aria-valuemin="0" aria-valuemax="100"><?php echo $aleatorio?>%</div>
                    </div>
                </th>  
                <th scope="col">
                   <?php
                        $hash = md5($i);
                        echo $hash;
                   ?>
                </th> 
                <th scope="col">
                    <a href="resultado.php?res=<?php echo $i?>">
                    <button type="button" class="btn btn-secondary">Boton <?php echo $i?></a></button>
                </th>
                <th>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-eyeglasses"></i>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog        ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        $hash
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </th>             
            </tr>           
        </thead>
            <?php }?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>