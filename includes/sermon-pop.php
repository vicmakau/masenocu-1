   <?php

   $sermonz=getSermons($conn);?>
<div class="popup">
  <span class="popuptext" onclick="myFunctionPop()" id="myPopup">
    <span class="upcoming-sermon1 text-white">UPCOMING SERMONS</span>
    <?php
    // data 1
     $date1=date('D',strtotime($sermonz[0]['date']));
      if ($date1=="Sun" || $date1=="sun" ) { ?>
        <span>Sunday Service</span><br>
       <span>Sermon </span>
       <span> <?= $sermonz[0]['title']?> </span><!-- sermon here -->
       <br>
       <span>by: </span>
       <span> <?= $sermonz[0]['speaker']?> </span>  <br><!-- speaker here-->  
     <?php }else if($date1=="Fri" || $date1=="Fri" ){?>
      <span>Friday Fellowship</span><br>
       <span>Sermon </span>
       <span> <?= $sermonz[0]['title']?> </span><!-- sermon here -->
       <br>
       <span>by: </span>
       <span> <?= $sermonz[0]['speaker']?> </span>  <br><!-- speaker here-->  
     <?php }      
      ?>

<?php
    // data 1
     $date2=date('D',strtotime($sermonz[1]['date']));
      if ($date2=="Sun" || $date2=="sun" ) { ?>
        <span>Sunday Service</span><br>
       <span>Sermon </span>
       <span> <?= $sermonz[1]['title']?> </span><!-- sermon here -->
       <br>
       <span>by: </span>
       <span> <?= $sermonz[1]['speaker']?> </span>  <br><!-- speaker here-->  
     <?php }else if($date2=="Fri" || $date2=="Fri" ){?>
      <span>Friday Fellowship</span><br>
       <span>Sermon </span>
       <span> <?= $sermonz[1]['title']?> </span><!-- sermon here -->
       <br>
       <span>by: </span>
       <span> <?= $sermonz[1]['speaker']?> </span>  <br><!-- speaker here-->  
     <?php }      
      ?>
    
      
     
</div>
