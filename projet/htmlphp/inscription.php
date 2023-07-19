<?php
  //.................. recuperation des données à partir du forum.................
     $mat=$_POST["matricule"];
     $nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
     $tel=$_POST["tel"];
     $année=$_POST["annéeEtude"];
     $sp=$_POST["specialite"];
     $fac=$_POST["faculte"];
$motif=$_POST["motif"];
$objectif=$_POST["objectif"];
     //$motif=isset($_POST['motif']) ? $_POST['motif'] : '';
     //$objectif=isset($_POST['objectif']) ? $_POST['objectif'] : '';
       
if(!empty($_POST["matricule"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) &&!empty($_POST["email"]) &&!empty($_POST["tel"]) &&!empty($_POST["annéeEtude"]) &&!empty($_POST["specialite"]) &&!empty($_POST["faculte"]) &&!empty($_POST["motif"]) &&!empty($_POST["objectif"]) ){

//................ etablir une connection  avec data base...............................................
             $con=mysqli_connect("localhost","root","","site");
         if( mysqli_connect_errno()){
die("Connection error:");
}


// echo("conection etablie");
//................ajout de l'inscription à la base de données.................
$requete="INSERT INTO `inscriptions`(`mat`, `nom`, `prenom`, `email`, `tel`, `année`, `specialite`, `faculte`, `motif`, `objectif`) VALUES ('$mat','$nom','$prenom','$email','$tel','$année','$fac','$sp','$motif','$objectif')";
$run=mysqli_query($con,$requete);
           
 
 //.............................Affichage du nombre des inscrits par années.......................................................
    $req="SELECT `nb_inscrits`  FROM `année` WHERE `année_etude`='L1'";
 $result=mysqli_query($con,$req);
 //print_r($result);
 $nb=mysqli_fetch_assoc($result);
 $n=intval($nb['nb_inscrits']);
 //echo("nombre des etudiants de L1 inscrits $n");
// echo("<br/>");
 
   $req1="SELECT `nb_inscrits`  FROM `année` WHERE `année_etude`='L2'";
 $result1=mysqli_query($con,$req1);
 //print_r($result);
 $nb1=mysqli_fetch_assoc($result1);
 $n1=intval($nb1['nb_inscrits']);
 //echo("nombre des etudiants de L2 inscrits $n1");
 //echo("<br/>");
 
  $req2="SELECT `nb_inscrits`  FROM `année` WHERE `année_etude`='L3'";
 $result2=mysqli_query($con,$req2);
 //print_r($result);
 $nb2=mysqli_fetch_assoc($result2);
 $n2=intval($nb2['nb_inscrits']);
// echo("nombre des etudiants de L3 inscrits $n2");
// echo("<br/>");
 
 
  $req3="SELECT `nb_inscrits`  FROM `année` WHERE `année_etude`='M1'";
 $result3=mysqli_query($con,$req3);
 //print_r($result);
 $nb3=mysqli_fetch_assoc($result3);
 $n3=intval($nb3['nb_inscrits']);
 //echo("nombre des etudiants de M1 inscrits $n3");
 //echo("<br/>");
 
 $req4="SELECT `nb_inscrits`  FROM `année` WHERE `année_etude`='M2'";
 $result4=mysqli_query($con,$req4);
 //print_r($result);
 $nb4=mysqli_fetch_assoc($result4);
 $n4=intval($nb4['nb_inscrits']);
// echo("nombre des etudiants de M2 inscrits $n4");
 //echo("<br/>");
 if($run){
              $req5="SELECT `nb_inscrits`  FROM `année` WHERE `année_etude`='$année'";
 $result5=mysqli_query($con,$req5);
 //print_r($result);
 $nb5=mysqli_fetch_assoc($result5);
 $n5=intval($nb5['nb_inscrits']);
   $n5=$n5+1;
    // echo("nombre des etudiants de $année apres votre inscription inscrits $n5");
             $requete2="UPDATE `année` SET `nb_inscrits`=$n5 WHERE `année_etude`='$année'";
 $run=mysqli_query($con,$requete2);
 // echo("<br/>");
 }
 //......................Affichafge par faculté.............................................
 
   $sql="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='Faculté des Sciences Biologiques'";
 $res=mysqli_query($con,$sql);
 //print_r($result);
 $ins=mysqli_fetch_assoc($res);
 $m=intval($ins['nb_inscrits']);
 //echo("nombre des etudiants de Faculté des Sciences Biologiques inscrits $m");
// echo("<br/>");
 
 
 
   $sql1="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='Faculté de Chimie'";
 $res1=mysqli_query($con,$sql1);
 //print_r($result);
 $ins1=mysqli_fetch_assoc($res1);
 $m1=intval($ins1['nb_inscrits']);
 //echo("nombre des etudiants de Faculté de Chimie inscrits $m1");
 //echo("<br/>");
 
 
 
 
 
   $sql2="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='Faculté de Physique'";
 $res2=mysqli_query($con,$sql2);
 //print_r($result);
 $ins2=mysqli_fetch_assoc($res2);
 $m2=intval($ins2['nb_inscrits']);
// echo("nombre des etudiants de Faculté de Physique inscrits $m2");
// echo("<br/>");
 
 
 
  $sql3="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='Faculté de Génie Civil'";
 $res3=mysqli_query($con,$sql3);

 $ins3=mysqli_fetch_assoc($res3);
 $m3=intval($ins3['nb_inscrits']);
 //echo("nombre des etudiants de Faculté de Génie Civil inscrits $m3");
 //echo("<br/>");
 
 
 
    $sql4="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='Faculté de génie électrique'";
 $res4=mysqli_query($con,$sql4);
 //print_r($result);
 $ins4=mysqli_fetch_assoc($res4);
 $m4=intval($ins4['nb_inscrits']);
// echo("nombre des etudiants de Faculté de génie électrique inscrits $m4");
 //echo("<br/>");
  // echo("<br/>");
 
 
    $sql5="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='Faculté d informatique'";
 $res5=mysqli_query($con,$sql5);
 //print_r($result);
 
 $ins5=mysqli_fetch_assoc($res5);
 $m5=intval($ins5['nb_inscrits']);
// echo("nombre des etudiants de Faculté d'informatique inscrits $m5");
// echo("<br/>");
 
 
 
   $sql6="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='Faculté des Mathématiques'";
 $res6=mysqli_query($con,$sql6);

 $ins6=mysqli_fetch_assoc($res6);
 $m6=intval($ins6['nb_inscrits']);
//  echo("nombre des etudiants de Faculté des Mathématiques inscrits $m6");
// echo("<br/>");
 
 
   $sql7="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='Faculté des Sciences de la terre et Aménagement du Territoire'";
 $res7=mysqli_query($con,$sql7);

 
 $ins7=mysqli_fetch_assoc($res7);

 
 $m7=intval($ins7['nb_inscrits']);
 //echo("nombre des etudiants de Faculté des Sciences de la terre et Aménagement du Territoire inscrits $m7");
// echo("<br/>");
 
   $sql8="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='Faculté de Génie Mécanique et Génie de Procédés'";
 $res8=mysqli_query($con,$sql8);
 //print_r($result);
 $ins8=mysqli_fetch_assoc($res8);
 $m8=intval($ins8['nb_inscrits']);
 //echo("nombre des etudiants de Faculté de Génie Mécanique et Génie de Procédés inscrits $m8");
 //echo("<br/>");
 
 if($run){
 $sql9="SELECT `nb_inscrits`  FROM `facultés` WHERE `fac`='$fac'";
 $res9=mysqli_query($con,$sql9);
 //print_r($result);
 
 $ins9=mysqli_fetch_assoc($res9);
 $m9=intval($ins9['nb_inscrits']);
   $m9=$m9+1;
     //echo("nombre des etudiants de $fac apres votre inscription inscrits $m9");
             $requete3="UPDATE `facultés` SET `nb_inscrits`=$m9 WHERE `fac`='$fac'";
 $run1=mysqli_query($con,$requete3);
 // echo("<br/>");
 
 }
 if($run){
 echo(" <!DOCTYPE>
                       <html>
                       <head>
<link rel='stylesheet' href='stat.css' type='text/css' />
<meta charset='UTF-8'/>
    </head>
                        <body id='id1'>
<div class='container'>
<header>
        <a href='#'><img class='logo' src='..\photo\Logo_-_MC_1-01 (3).svg'  alt='Micro Club logo'></a>
        <ul>
        <li><a href='Accueil.html' >Acceuil</a></li>
        <li><a href='Accueil.html' >Vision</a></li>
        <li><a href='event.php'>Evènements</a></li>
        <li><a href='contact.html' >Contact</a></li>
        <li><a href='pres.html'>Qui sommes nous</a></li>
        </ul>
       
    </header>
  </div>

<div class='msg' style='position: absolute;left: 34%;'>
<p style='font-size: 28px;font-style: italic;color: #ecb365;'>Votre inscription est bien effectuer</p>
</div>
   
                <table class='table'>

                
<tr id='id1'>
                 <td >Année/Faculté<td>
 <td>nombre des inscrits<td>
</tr>
  <tr id='id2'>
        <td>L1<td>
<td>$n</td>
 </tr>
 
 <tr id='id3'>
<td>L2<td>
<td>$n1</td>
</tr>

<tr id='id4'>
<td>L3<td>
<td>$n2</td>
</tr>

<tr>
<td>M1<td>
<td>$n3</td>
</tr>

<tr>
<td>M2<td>
<td>$n4</td>
</tr>

<tr>
 <td>Faculté des Sciences Biologiques<td>
<td>$m</td>
</tr>

<tr>
 <td>Faculté de Chimie<td>
<td>$m1</td>
</tr>
 
 <tr>
  <td>Faculté de Physique<td>
<td>$m2</td>
</tr>

<tr>
 <td>aculté de Génie Civil<td>
<td>$m3</td>
</tr>

<tr>
 <td>Faculté de génie électrique<td>
<td>$m4</td>
</tr>

<tr>
 <td>Faculté d'informatique<td>
<td>$m5</td>
</tr>

<tr> 
 <td>Faculté des Mathématiques<td>
<td>$m6</td>
</tr>

<tr>
 <td>Faculté des Sciences de la terre et Aménagement du Territoire<td>
<td>$m7</td>
</tr>

<tr>
 <td>Faculté de Génie Mécanique et Génie de Procédés<td>
<td>$m8</td>
</tr>

            <tr>
					  <td>$année apres votre inscription inscrits<td> 
					 <td>$n5</td>
			 </tr>
				
				 <tr>
					  <td>$fac apres votre inscription inscrits<td> 
					  <td>$m9</td>
				 </tr>



 </table>
<script>
let header = document.querySelector('header'),
inter = document.querySelector('.inter'),
headerImg = document.querySelector('.inter a'),
eventBack = document.querySelector('.event-back'),
eventText = document.querySelector('.event-back .text'),
scrollBtn = document.querySelector('.inter .box-one .mouse_scroll');



window.onscroll = () => {
    if (window.scrollY > 0) {
        header.classList.add('sticky');
       
       
    } else {
        header.classList.remove('sticky');
     
    }
    if (window.scrollY > 1222 && window.scrollY <1307 ) {
        header.classList.add('stickyy');
     
       
    } else {
        header.classList.remove('stickyy');
       
    }


}



</script>

</body>
                       </html>
 
 
 
 ");
 }else{
 
  echo("<!DOCTYPE>
                          <html>
                           <head>
                          <link rel='stylesheet' href='inscription4.css' type='text/css' />
  <meta charset='UTF-8'/>
                            </head>
                           <body id='id1'>
   
   <div class='curved1'>
<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 319'><path fill='#0e2a47' fill-opacity='1' d='M0,96L60,90.7C120,85,240,75,360,90.7C480,107,600,149,720,144C840,139,960,85,1080,69.3C1200,53,1320,75,1380,85.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z'></path></svg>
</div>
<br/>

<div id='container'>
                             <p>vous êtes deja inscrits</p>
                              </div>

 
<div class='curved'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 319'><path fill='#0e2a47' fill-opacity='1' d='M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z'></path></svg>
</div>
<br/>
                            </body>
                             </html>
 
 
 
 
  ");
 
 }
 
 
 
}else{

echo("<!DOCTYPE>
                          <html>
                           <head>
                          <link rel='stylesheet' href='inscription4.css' type='text/css' />
  <meta charset='UTF-8'/>
                            </head>
                           <body id='id1'>
 
   <div class='curved1'>
<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 319'><path fill='#0e2a47' fill-opacity='1' d='M0,96L60,90.7C120,85,240,75,360,90.7C480,107,600,149,720,144C840,139,960,85,1080,69.3C1200,53,1320,75,1380,85.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z'></path></svg>
</div>
<br/>
   
   
 

<div id='container'>
                             <p>certains champs sont obligatoires (*)</p>
                              </div>


 
<div class='curved'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 319'><path fill='#0e2a47' fill-opacity='1' d='M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z'></path></svg>
</div>
<br/>
   
 
                            </body>
                             </html>
  ");
}
              mysqli_close($con);
  ?>
