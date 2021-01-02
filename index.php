<?php


require "connect.php";

?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Saki Projects Solutions (0341-5355125) | Ideas beyond the imagination</title>

<link rel="stylesheet" type="text/css" href="demo.css" />

</head>

<body style="background-color:	#330000">

<div id="main-container">

	<div class="tutorialzine">
    <h1 style="  font-family:Agency FB;">Smart Shopping cart</h1>
    <h3>The best products at the best prices</h3>
    </div>




    <div class="container">
    
    	<span class="top-label">
            <span class="label-txt" style="color:Green; font-size:12px;">Items in your Cart
			       			    <h4 style="color:red;font-size:8px;">Trolly Cart ID=</h4>

			
			</span>

	   </span>
	
	
        
        <div class="content-area">
    		<div class="content drop-here">
            	<div id="cart-icon">
	            	<img src="img/Shoppingcart_128x128.png" alt="shopping cart" class="pngfix" width="128" height="128" />
					<img src="img/ajax_load_2.gif" alt="loading.." id="ajax-loader" width="16" height="16" />
                </div>

				             
                <div class="clear"></div>

				
	<style>			

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}


.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>

				
				
				
				<table class="styled-table">
				<thead>
				<tr>
				<th>Sr#</th>
				<th>Item Name</th>
				<th>Weight (g)</th>
				<th>Price (Rs)</th>
				<th>Qty</th>
				
				</tr>
				</thead>
				<tbody>

			
		<?php
				$counter = 1;
				$weight= 0;
				$price=0;
				
				
				
				
				
				
				

$res=mysql_query("SELECT * FROM products ,purchase  WHERE products.prod_rfid=purchase.prod_rfid");
	
	
	
	
	if(mysql_num_rows($res) > 0){
		
	

while($row=mysql_fetch_array($res))
{

  		

	




	        
	?>
       <td><?php echo $counter; ?></td>
	   

    <td><?php echo $row['prod_name']; ?></td>
    <td><?php echo $row['prod_weight']; ?></td>
    <td><?php echo $row['prod_price']; ?></td>
    <td><?php echo "01"; ?></td>



	
			
		<?php echo  "</tr>"; ?>
		<?php $counter++; ?>
	
    <?php
		
	
	
	}
	
	
	

	
	
	
	}
	
	
			
?>
				

			
		
			
			
			
				<!-- and so on... -->
				</tbody>
				</table>
			

			<table class="styled-table">
			<thead>
			<tr><td style="background-color: red;"> Total Price=
		<?php		
	$res=mysql_query("SELECT * FROM products ,purchase  WHERE products.prod_rfid=purchase.prod_rfid");
	while($num = mysql_fetch_assoc ($res)) {
					 $price += $num['prod_price'];
					  $weight += $num['prod_weight'];
	}?>

		    <?php echo"<td style='background-color: red;'>"."Rs.".$price."</td>";?> </tr></td>
			<tr><td> Total Weight=
			<?php echo"<td >".$weight.".Grams"."</td>";?> </tr></td>		
		  
			</thead>
			</table>
			
			
			
			
			
       	        <div class="clear"></div>
                
              
          </div>

        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>
	
	

    <div class="container">

    
    	<span class="top-label">
            <span class="label-txt">Products</span>
        </span>
        
        <div class="content-area">
    
    		<div class="content drag-desired">

                
       	        <div class="clear"></div> </div>

			<style>			

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}


.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>

				
				
				
				<table class="styled-table">
				<thead>
				<tr>
				<th>ID</th>
				<th>Item Name</th>
				<th>Weight (g)</th>
				<th>Price (Rs)</th>
				<th>Qty</th>
				</tr>
				</thead>
				<tbody>
				<?php
	$result = mysql_query("SELECT * FROM products");
	if(mysql_num_rows($result) > 0){
	while($row=mysql_fetch_assoc($result))
	{
				
					
       
         echo"<td>"."1"."</td>";
		 echo"<td>".$row['prod_name']."</td>";
		 echo"<td>"	.$row['prod_weight'].	 "</td>";
		 
		 
		 
		 
		 
		 echo"<td>".$row['prod_price']."</td>";
		 echo"<td>"."01"."</td>";



		 echo "</tr>";
			}}?>
				<!-- and so on... -->
				</tbody>
					</table>	
				
				
				
				
				
				
				
				
				
        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>
	

	<div class="tutorial-info">	
Design & Developed by Saki Projects Solutions <a href="https://www.youtube.com/channel/UCxwuHpX8u48lFnBbWTUQBrg">More info</a>, or Contact us <a href="#">+92341-5355125</a>.</div>

</div>

</body>
</html>
