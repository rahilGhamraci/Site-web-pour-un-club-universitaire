<?php


 $con=mysqli_connect("localhost","root","","site");

  if( mysqli_connect_errno()){
die("Connection error:");
}


    $evt=array();
    $req="SELECT `evenement`, `titreE`,  `img` FROM `evenements`";
 $result=mysqli_query($con,$req);

 while($nb=mysqli_fetch_assoc($result)){

$m=$nb['titreE'];
$n=$nb['evenement'];
$img=$nb['img'];

 $evt[]=$m;
  $evt[]=$n;
$evt[]=$img;
 }
 
  mysqli_close($con);
 
 //foreach ( $evt as $valeur) {
             //echo ($valeur . "\n");
// echo("<br/>");
// }
 // echo("<br/>");
  // echo("<br/>");
?>


<!DOCTYPE>
                          <html>
                           <head>
                          <meta charset='UTF-8'/>
      <link rel='stylesheet' href='event.css' type='text/css' />
                            </head>
                         <body>
   <!-- <div class="background-image"> </div> -->
<div class="container">

<header>
<a href="#"><img class="logo" src="..\photo\Logo_-_MC_1-01 (3).svg"  alt="Micro Club logo"></a>
<ul>
<li><a href="Accueil.html"target='_blank'>Acceuil</a></li>
<li><a href="Accueil.html" target='_blank'>Vision</a></li>
<li><a href="#">Evènements</a></li>
<li><a href="contact.html"target='_blank'>Contact</a></li>
<li><a href="pres.html"target='_blank'>Qui sommes nous</a></li>
</ul>
<a href='inscription.html'> <button type="button">s'inscrire</button>  </a>
</header>

 <div class='intro'>
     
<h1  class='intro_h1'>Nos Événements. <h1/>
<p>Au MC, on organise divers événements TECH de haute qualité ! Assurant ainsi de mieux répondre au besoins de notre chère communauté, tout en garantissant une formation complète pour tous les passionnés de technologie !</p>

 </div>

 <div class="jaune">
      <h1></h1>
    </div> 

</div>
<div id='container'>

                             </div>

                             <div class="event-back_4">
    <div class="container">
        <footer>
            <div class="foot1">

                <div class="logo">
                    <img src="..\photo\Logo_-_MC_1-01 (3).svg">
                </div>
                <div class="text">
                    <p>EMAIL</p>
                    <a href="mailto:microclub.contact@gmail.com" title="microclub.contact@gmail.com" style="right: 76%;top: 25%;">microclub.contact@gmail.com</a>
                    <p>President Phone : </p>
                    <a href="tel: 0558521145" style="right: 50%;top: 25%;">0558521145</a>
                    <p>External Relationship Phone : </p>
                    <a href="tel: 0554552890" style="right: 22%;top: 25%;">0554552890</a>
                    <p>Location : </p>
                    <a style="right: 69%;top: 26%;" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d799.5715423071597!2d3.184667529213345!3d36.715687873793634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e51447db18aa7%3A0x3c7d0a08caa6c89b!2sMicro%20Club%20USTHB!5e0!3m2!1sen!2suk!4v1609620463403!5m2!1sen!2suk">Room 148, Faculty of computer science, USTHB</a>
                </div>
            </div>
            <div class="foot2">
                <p>Contactez Nous</p>
                <div class="button">
                    <a href="contact.html"><button type="submit">Contact</button></a>
                </div>

            </div>
            <div class="foot3">
                <p>  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.079583010826!2d3.1833343147772126!3d36.72064987987435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e518cfc1752a9%3A0x2b982194dc321c1d!2sMicro%20Club!5e0!3m2!1sfr!2sdz!4v1653138181129!5m2!1sfr!2sdz" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                <img src="..\photo\asd55.png">
            </div>
        </footer>
        <div class="foot4">
            <p>Copyright © 2022 Club Scientifique de l'USTHB. All Rights Reserved.</p>
        </div>
        
    </div>
</div>

<script>
    var evt=<?php echo json_encode($evt);?>;
 const container=document.getElementById('container');
 
    for(var i = 0; i < evt.length; i++){
   console.log("for");
   
    div=document.createElement('div');
    div.setAttribute('class','class1');
   
 div1=document.createElement('div');
    div1.setAttribute('class','img');

div2=document.createElement('div');
    div2.setAttribute('class','evenement');

     titre=document.createElement('h1');
titre.innerText=evt[i];

evenement=document.createElement('p');
evenement.innerText=evt[i+1];

img=document.createElement('img');
img.setAttribute('src',evt[i+2]);

titre.setAttribute('class','titre');
evenement.setAttribute('class','text');


div.appendChild(titre);
 div.appendChild(evenement);

 
  div1.appendChild(img);
 
  div2.appendChild(div);
    div2.appendChild(div1);
container.appendChild(div2);

i++;
i++;
}



</script>
<script src="..\javascript\evenements.js"></script>	
     
                            </body>
                             </html>
