@include('layout.header')
       
<?php $values = config('constants.topics');  ?>
<!--content-->
<div class="section">
       <?php 
              foreach($values as $value){
                     ?>
                     <div class="content">
                            <a href="<?php echo $value['link'] ?>"><?php echo $value['title'] ?></a> 
                     </div>
                 <?php
              }
       ?>
</div>  
@include('layout.footer')
