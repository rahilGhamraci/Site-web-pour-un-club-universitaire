
 <?php
     
     $nom=$_POST["nom"];
     $emailSender=$_POST["email"];
     $message=isset($_POST['message']) ? $_POST['message'] : '';
     //contact@microclub.net
           $destinataire='contact@microclub.net';
            $subject='Ce mail a été envoyé depuis le site MC';
       $msg="$message";
      
       if(! empty($_POST["email"]) && ! empty($_POST["nom"])){
            
       $headers="From: $nom $emailSender \r\n";
            $headers .="Content-type: text/html\r\n";
     
       try{
       $send=mail($destinataire,$subject,$msg,$headers);
      
       }catch(Exception $e){
      
       echo("ERROR :{$mail->RrrorInfo}");
       }
      
       if($send){
            echo("
       <!DOCTYPE>
                               <html>
                                <head>
                               <link rel='stylesheet' href='..\css\styleContact.css' type='text/css' />
                                 </head>
                                <body id='id1'>
        <div class='background-image'> </div>
     
     
     <div id='container'>
                                  <p style='position: relative;bottom: 133px;right: 110px;font-size: 34px;color: #064663;font-weight: 600;width: 107%;'> message envoyé à $destinataire</p>
                                   </div>
     <div class='container1'>  
     <div class='curved'>
       <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 319'><path fill='#003366' fill-opacity='0.8' d='M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z'></path></svg>
     </div>
     <br/>
     
     
     <div class='resaux'>
 
	<div id='id1'>
        <a  class='link' href='https://www.facebook.com/Micro.Club.USTHB/' target='_blank'><img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d620bda615c00014ad687_font-awesome_4-7-0_facebook_100_0_ffffff_none.png'alt='logo'\> facebook </a>	</div>
  
  <div id='id2' > 
           <a class='link' href='https://twitter.com/club_micro' target='_blank'> <img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d620bdcda0a0001b0ce1f_font-awesome_4-7-0_twitter_100_0_ffffff_none.png' alt='logo'\> twitter  </a></div>
   
   <div id='id3' > 
                  <a class='link' href='https://www.instagram.com/microclub_usthb/?hl=fr' target='_blank'> <img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d620b2c064e00011e0e26_font-awesome_4-7-0_instagram_100_0_ffffff_none.png' alt='logo'\> instagram </a></div>   


     <div id='id4' > 
                  <a class='link' href='https://dz.linkedin.com/in/micro-club-usthb' target='_blank'> <img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d6240a2f0dc0001b6b716_font-awesome_4-7-0_linkedin_100_0_ffffff_none%20(1).png' alt='logo'\> linkedin </a></div>
				   


				  
				  
				  </div>
      
      </div>
                                 </body>
                                  </html>
      
     ");
       }else{
     echo("  <!DOCTYPE>
                               <html>
                                <head>
                                 <link rel='stylesheet' href='..\css\styleContact.css' type='text/css' />
                                 </head>
                                <body id='id1'>
       <div class='background-image'> </div>
     <div id='container'>
                                  <p style='position: relative;bottom: 133px;right: 110px;font-size: 34px;color: #064663;font-weight: 600;width: 107%;'>Le messsage n'a pas été envoyé, veuillez réesayer</p>
                                   </div>
     <div class='container1'>  
     <div class='curved'>
       <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 319'><path fill='#003366' fill-opacity='0.8' d='M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z'></path></svg>
     </div>
     <br/>
     
     
     <div class='resaux'>
 
     <div id='id1'>
           <a  class='link' href='https://www.facebook.com/Micro.Club.USTHB/' target='_blank'><img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d620bda615c00014ad687_font-awesome_4-7-0_facebook_100_0_ffffff_none.png'alt='logo'\> facebook </a>	</div>
     
     <div id='id2' > 
              <a class='link' href='https://twitter.com/club_micro' target='_blank'> <img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d620bdcda0a0001b0ce1f_font-awesome_4-7-0_twitter_100_0_ffffff_none.png' alt='logo'\> twitter  </a></div>
      
      <div id='id3' > 
                     <a class='link' href='https://www.instagram.com/microclub_usthb/?hl=fr' target='_blank'> <img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d620b2c064e00011e0e26_font-awesome_4-7-0_instagram_100_0_ffffff_none.png' alt='logo'\> instagram </a></div>   
   
   
        <div id='id4' > 
                     <a class='link' href='https://dz.linkedin.com/in/micro-club-usthb' target='_blank'> <img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d6240a2f0dc0001b6b716_font-awesome_4-7-0_linkedin_100_0_ffffff_none%20(1).png' alt='logo'\> linkedin </a></div>
              
   
   
             
             
             </div>
      
      </div>
                                 </body>
                                  </html>");
       }
       }else{
      
       echo(" <!DOCTYPE>
                               <html>
                                <head>
                                <link rel='stylesheet' href='..\css\styleContact.css' type='text/css' />
                                 </head>
                                <body id='id1'>
       <div class='background-image'> </div>
     <div id='container'>
                                  <p style='position: relative;bottom: 133px;right: 8px;font-size: 34px;color: #064663;font-weight: 600;width: 107%;'>Remplissez tous les champs svp </p>
                                   </div>
     <div class='container1'>  
     <div class='curved'>
       <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 319'><path fill='#003366' fill-opacity='0.8' d='M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z'></path></svg>
     </div>
     <br/>
     
     
     <div class='resaux'>
 
     <div id='id1'>
           <a  class='link' href='https://www.facebook.com/Micro.Club.USTHB/' target='_blank'><img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d620bda615c00014ad687_font-awesome_4-7-0_facebook_100_0_ffffff_none.png'alt='logo'\> facebook </a>	</div>
     
     <div id='id2' > 
              <a class='link' href='https://twitter.com/club_micro' target='_blank'> <img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d620bdcda0a0001b0ce1f_font-awesome_4-7-0_twitter_100_0_ffffff_none.png' alt='logo'\> twitter  </a></div>
      
      <div id='id3' > 
                     <a class='link' href='https://www.instagram.com/microclub_usthb/?hl=fr' target='_blank'> <img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d620b2c064e00011e0e26_font-awesome_4-7-0_instagram_100_0_ffffff_none.png' alt='logo'\> instagram </a></div>   
   
   
        <div id='id4' > 
                     <a class='link' href='https://dz.linkedin.com/in/micro-club-usthb' target='_blank'> <img src='https://assets.website-files.com/5a957df3fff1bf00015f8ae3/5a9d6240a2f0dc0001b6b716_font-awesome_4-7-0_linkedin_100_0_ffffff_none%20(1).png' alt='logo'\> linkedin </a></div>
              
   
   
             
             
             </div>
      
      </div>
                                 </body>
                                  </html>");
       }
      
      
      
      
      
      
      
      
      
      
      ?>