<?php
include('./Controller/autoload.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    $info = get_info();
    $dato = get_data();
    ?>
    <center>
        <br>
        <h3>LIBRO</h3>
        <p class="text-uppercase">
            <?php
            echo '<center>' . $info['title'] . '</center>';
            ?>
        </p>
        <br>
        <div class="card" style="width: 18rem;">
        <h3>Escrito por</h3>
            <?php
             echo '<center>' . $info['by_statement'] . '</center>';
            ?>
        </div>
    </center>
    <h3>Datos</h3>
    <div class="btn-group">
        <p class="fw-bold">Fecha de publicacion: </p>
        <p class="text-uppercase">
            <?php
            echo ' ' . $info['publish_date'];
            ?>
        </p>
    </div>
    <br>

    <div class="btn-group">
        <p class="fw-bold">Editorial: </p>
        <?php
        foreach (($info['publishers']) as $k => $v) {
        ?>
            <p class="text-uppercase">
                <?php
                echo $v;
                ?>
            </p>
        <?php
        }
        ?>
    </div>
    <br>

    <div class="btn-group">
        <p class="fw-bold">Páginas: </p>
        <p class="text-uppercase">
            <?php
            echo ' ' . $info['number_of_pages'];
            ?>
        </p>
    </div>
    <br>

    <div class="btn-group">
        <p class="fw-bold">Notas de Edicion: </p>
        <p class="text-uppercase">
            <?php
            echo 'Paginación ' . $info['pagination'];
            ?>
        </p>
    </div>
    <br>

    <div class="btn-group">
        <p class="fw-bold">Notas: </p>
        <p class="text-uppercase">
            <?php
            echo 'Paginación ' . $info['notes'];
            ?>
        </p>
    </div>
    <br>

    <div class="btn-group">
        <p class="fw-bold">Genero: </p>
        <?php
        foreach (($info['genres']) as $k => $v) {
        ?>
            <p class="text-uppercase">
                <?php
                echo $v;
                ?>
            </p>
        <?php
        }
        ?>
    </div>
    <br>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Library of Congress</h5>
            <?php
            foreach (($info['lc_classifications']) as $k => $v) {
            ?>
                <p class="card-text" name="">
                    <?php
                    echo $v;
                    ?>
                </p>
            <?php
            }
            ?>
        </div>
    </div>
    
</body>

</html>