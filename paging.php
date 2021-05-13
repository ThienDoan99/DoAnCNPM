<?php
$paging = array(
array("a"=>"Previous"),
array("a"=>"1"),
array("a"=>"2"),
array("a"=>"3"),
array("a"=>"4"),
array("a"=>"5"),
array("a"=>"6"),
array("a"=>"Next")
);
$header = array(
	array("text"=>"Cars","img"=>"images/car1.jpg"),
	array("text"=>"Rental","img"=>"images/car2.jpg"),
	array("text"=>"Banking","img"=>"images/car3.jpg"),
	array("text"=>"Trucks","img"=>"images/car4.jpg")
	);
?>



<div class="paging">
		            <ul>
					<?php
					foreach ($paging as $p) { ?>
                      <li><a href="#" target="_parent"><?php echo $p['a'];  ?> </a></li> 

					<?php } ?>
		                
		            </ul>
       			</div>
		</div>
		<div class="header-para">
				<div class="categories">
						<div class="list-categories">
						<?php foreach ($header as $h) { ?>
							<div class="first-list">
								<div class="div_2"><a href="#"><?php echo $h['text']  ?></a></div>
								<div class="div_img">
									<img src="<?php echo $h['img']  ?>" alt="Cars" title="Cars" width="60" height="39">
								</div><div class="clear"></div>
							</div>
						<?php } ?>


							
				</div>
				<div class="box"> 
							<div class="box-heading"><h1><a href="#">Cart:&nbsp;</a></h1></div>
							 <div class="box-content">
							Now in your cart&nbsp;<strong> 0 items</strong>
							</div>	
				</div>
				<div class="box-title">
					<h1><span class="title-icon"></span><a href="#">Specials</a></h1>
				</div>