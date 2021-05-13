<?php
$hinh = array(
array("img"=>"images/pic21.jpg"),
array("img"=>"images/pic24.jpg"),
array("img"=>"images/pic25.jpg"),
array("img"=>"images/pic27.jpg")
);
$hinh2 = array(
	array("img"=>"images/pic22.jpg"),
	array("img"=>"images/pic23.jpg"),
	array("img"=>"images/pic26.jpg"),
	array("img"=>"images/pic28.jpg")
	);
?>


<div class="section group example">
					<div class="col_1_of_2 span_1_of_2">
					<?php foreach($hinh as $h){ ?>
					<img src="<?php echo $h['img'] ?>" alt=""/>
					
					<?php  }  ?>
	 				</div>
					<div class="col_1_of_2 span_1_of_2">
					<?php foreach($hinh2 as $h){ ?>
					<img src="<?php echo $h['img'] ?>" alt=""/>
					
					<?php  }  ?>
					  </div><div class="clear"></div>
		   		 </div>
				</div>
		</div>
		<div class="clear"></div>