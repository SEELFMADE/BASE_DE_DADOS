<?php
//IMPORTAR CONEXÃO
include "conexao.class.php";
//IMPORTAR DOMPDF
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
//INSTANCIAR A CLASSE DE CONEXAO
$conect=new Conexao();
$conect-> openConnection();

$actualiza=true;
$nome='';
$bi='';
$turma='';
$ano='';
$id='';

//SALVAR UM ALUNO
if(isset($_POST["salvar"])){
    $nome=$_POST['nome'];
    $bi=$_POST['bi'];
    $turma=$_POST['turma'];

    $query="Insert into tbAluno(Nome,Bi,Turma)values('$nome','$bi','$turma')";
    $deu=mysqli_query($conect->conexao,$query) or die("Erro");
    header("Location: ../index.php");

}else if(isset($_POST["actualizar"])){ //ACTUALIZAR UM ALUNO
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $bi=$_POST['bi'];
    $turma=$_POST['turma'];
    
    $query="update tbAluno set Nome='$nome',Bi='$bi',Turma='$turma' where Id='$id'";
    $deu=mysqli_query($conect->conexao,$query) or die(0);

    header("Location: ../index.php");
}else if(isset($_GET["idUserDelete"])){ //APAGAR UM ALUNO
    $id=$_GET["idUserDelete"];
      
    $query="delete from tbAluno where id='$id'";
    $deu=mysqli_query($conect->conexao,$query) or die("Erro");
    header("Location: index.php");

}else if(isset($_GET["editarUser"])){ //EDITAR ALUNO
    $id=$_GET["editarUser"];
      
   $query="select * from tbAluno where id='$id'";
    $deu=mysqli_query($conect->conexao,$query) or die(0);
    if(count(array($deu))==1){
        $linha=mysqli_fetch_array($deu);

        $id=$linha['Id'];
        $nome=$linha['Nome'];
        $bi=$linha['Bi'];
        $turma=$linha['Turma'];
        $ano=$linha['Ano'];
        $actualiza=false;
    }
 }else if(isset($_GET["pdf"])){ //GERAR PDF

    $consulta="SELECT Id,Bi,Turma,Nome,Ano FROM TBALUNO";
    $registros=mysqli_query($conect->conexao,$consulta);

    $html='  
    <!DOCTYPE html>
       <html lang="pt-Ao">
        <head>
       <meta charset="UTF-8">
       <style>
       ';
        $html.= file_get_contents("dist/css/bootstrap.min.css");        
      $html.= '</style>
       </head>
      <body>
      <h1 class="display-4 text-center text-muted">Alunos</h1>
      <table class="table">
      <thead>
          <tr class="bg-primary text-light">
              <th scope="col">ID</th>
              <th scope="col" class="text-center">Nome</th>
              <th scope="col" class="text-center">BI</th>
              <th scope="col" class="text-center">Turma</th>
              <th scope="col" class="text-center">Ano</th>
           </tr>
      </thead>
      <tbody>     
      ';
      while($linhas = mysqli_fetch_assoc($registros)){
         $html.='<tr class="text-center">
         <th scope="row">'. $linhas['Id'].'</th>
         <th>'.$linhas['Nome'].'</th>
         <th>'.$linhas['Bi'].'</th>
         <th>'.$linhas['Turma'].'</th>
         <th>'.$linhas['Ano'].'</th>
         </tr> ';
         }
    $html.='
    </tbody>
    </table>
     </body>            
    </html>
    ';

$dompdf->loadHtml($html); 
$dompdf->setPaper('A4', 'landscape'); 
$dompdf->render(); 
$dompdf->stream("alunos.pdf", array("Attachment" => 0));

 }




