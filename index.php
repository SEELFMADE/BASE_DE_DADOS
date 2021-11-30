<?php
require_once 'files/crud.php';
?>
<!DOCTYPE html>
<html lang="pt-AO">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/nosso.css">
    <title>Projecto</title>
</head>
<body>   
<section class="py-5 bg-success headers">
        <div class="container">
            <div class="row align-items-center height">
                <div class="col headerss">
                    <h1 class="text-danger font-weight-bold text-uppercase font-italic">
                        <strong>Projecto</strong>
                        <small class="text-light">Escolar</small>
                    </h1>
                    <p class="py-2 lead text-white w-75">
                        Faça a gestão dos alunos, garantindo agilidade e redução no tempo de trabalho.
                    </p>
                    <a href="index.php" class="btn btn-light btn-lg m-2 text-capitalize">Home</a>
                    <a href="#alunos" class="btn btn-outline-primary btn-lg m-2 text-capitalize">Alunos</a>
                    <a href="index.php?pdf=true" class="btn btn-outline-success btn-lg m-2 text-capitalize">Gerar pdf</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
