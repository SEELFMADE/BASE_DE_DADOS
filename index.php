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

    
    <!-- CADASTRO -->
    <section class="py-5 bg-light" id="cadastro">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 height">
                <div class="card card-body bg-secondary">
                    <div class="card-title text-center text-white">
                        <h2 class="text-capitalize">Estu
                            dantes</h2>
                        <p>Cadastro</p>
                    </div>
                    <form action="files/crud.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="form-group  mt-3">
                            <input type="nome" name="nome" class="form-control" value="<?php echo $nome ?>" placeholder="Nome">
                        </div>
                        <div class="form-group  mt-3">
                            <input type="bi" name="bi" value="<?php echo $bi ?>" class="form-control" placeholder="BI">
                        </div>
                        <div class="form-group  mt-3">
                            <select name="turma" class="form-control">
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                                <option value="A4">A4</option>
                            </select>
                        </div>
                        <div class="form-group  mt-3">
                            <?php if($actualiza==true){
                            ?>                           
                            <input type="submit" name="salvar" class="btn btn-primary" value="Cadastrar">
                            <?php }else{
                                ?>
                                 <input type="submit" name="actualizar" class="btn btn-primary" value="actualizar">
                           <?php } ?>
                        </div>                     
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 height" style="background-image: url(./dist/img/fundoHeader.jpg);">
            </div>
        </div>
        </div>
        </section>
</body>
</html>
