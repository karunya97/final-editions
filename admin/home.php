<div id="bodyright">
	<h3>Welcome to  admin Home Page </h3>
	<div class="main-section">
		<div class="dashbord">
			<div class="icon-section">
				<i class="fa fa-users" aria-hidden="true"></i><br>
				<small>Users</small>
				<p>
				<?php
					$conn=new PDO("mysql:host=localhost;dbname=onecart-test","root","");
					$result=$conn->prepare("SELECT COUNT(u_id) FROM user");
					$result->execute();
					
					for($i=0;$row=$result->fetch();$i++)
					{
						?>
						<tr>
							<td><label><?php echo $row['COUNT(u_id)'];?></label></td>
						</tr>
						<?php   
					}
					?>
				</p>
			</div>
			<div class="detail-section">
				<a href="#">More Info </a>
			</div>
		</div>
		<div class="dashbord dashbord-green">
			<div class="icon-section">
				<i class="fa fa-money" aria-hidden="true"></i><br>
				<small>Total</small>
				<p>$ 256</p>
			</div>
			<div class="detail-section">
				<a href="#">More Info </a>
			</div>
		</div>
		<div class="dashbord dashbord-orange">
			<div class="icon-section">
				<i class="fa fa-bell" aria-hidden="true"></i><br>
				<small>Orders</small>
				<p>9 </p>
			</div>
			<div class="detail-section">
				<a href="#">More Info </a>
			</div>
		</div>
		<div class="dashbord dashbord-blue">
			<div class="icon-section">
				<i class="fa fa-tasks" aria-hidden="true"></i><br>
				<small>Categories</small>
				<p>
				<?php
					$conn=new PDO("mysql:host=localhost;dbname=onecart-test","root","");
					$result=$conn->prepare("SELECT DISTINCT COUNT(cat_id) FROM main_category");
					$result->execute();
					
					for($i=0;$row=$result->fetch();$i++)
					{
						?>
						<tr>
							<td><label><?php echo $row['COUNT(cat_id)'];?></label></td>
						</tr>
						<?php   
					}
					?>
				</p>
			</div>
			<div class="detail-section">
				<a href="">More Info </a>
			</div>
		</div>
		<div class="dashbord dashbord-red">
			<div class="icon-section">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
				<small>Products</small>
				<p> 
				<?php
					$conn=new PDO("mysql:host=localhost;dbname=onecart-test","root","");
					$result=$conn->prepare("SELECT DISTINCT COUNT(pro_id) FROM products");
					$result->execute();
					
					for($i=0;$row=$result->fetch();$i++)
					{
						?>
						<tr>
							<td><label><?php echo $row['COUNT(pro_id)'];?></label></td>
						</tr>
						<?php   
					}
					?>
				</p>
			</div>
			<div class="detail-section">
				<a href="#">More Info </a>
			</div>
		</div>
		<div class="dashbord dashbord-skyblue">
			<div class="icon-section">
				<i class="fa fa-users" aria-hidden="true"></i><br>
				<small>Delivers</small>
				<p>
				<?php
					$conn=new PDO("mysql:host=localhost;dbname=onecart-test","root","");
					$result=$conn->prepare("SELECT DISTINCT COUNT(d_id) FROM deliver");
					$result->execute();
					
					for($i=0;$row=$result->fetch();$i++)
					{
						?>
						<tr>
							<td><label><?php echo $row['COUNT(d_id)'];?></label></td>
						</tr>
						<?php   
					}
					?>
					</p>
			</div>
			<div class="detail-section">
				<a href="#">More Info </a>
			</div>
		</div>
	</div>

</div>	