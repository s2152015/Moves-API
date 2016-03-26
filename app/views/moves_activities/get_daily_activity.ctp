<p>Daily Activity for date 201603</p>
<table>
	<tr style="background-color: green;">
		<th>Duration</th>
		<th>Distance</th>
		<th>Steps</th>
		<th>Date</th>	
	</tr>
<?php
foreach ($movesActivities as $moves) {
 if(!empty($moves['summary'])){
	     foreach ($moves['summary'] as $summary) {
		   if($summary['activity']=='walking'){?>
			 <tr>
			 	<td><?php echo $summary['duration'];?></td>
			 	<td><?php echo $summary['distance'];?></td>
			 	<td><?php echo $summary['steps'];?></td>
			 	<td><?php echo $moves['date'];?></td>
			 </tr>
		
<?php       
		    }
	      }
       }
    }
 ?>
	
</table>	
	
