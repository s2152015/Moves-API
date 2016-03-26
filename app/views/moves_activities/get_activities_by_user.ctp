<?php echo $this->Form->create('MovesActivity');
		echo $this->Form->input('movesUsers',array('options'=>$movesUsers));
		echo $this->Form->input('types',array('options'=>array('daily'=>'daily (yyymmdd)','weekly'=>'weekly (yyyy-W01)','monthly'=>'monthly (yyymm)')));
		echo $this->Form->input('date');
       echo $this->Form->end(__('Submit', true));
     ?>
<?php 

if(isset($movesActivities)){
	?>
	<table id="activity_table" >
		<tr style="background-color: green;">
			<th>Duration</th>
			<th>Distance</th>
			<th>Steps</th>
			<th>Date</th>	
		</tr>
	<?php
	foreach ($movesActivities as $moves) {
		?>
				 <tr>
				 	<td><?php echo $moves['MovesActivity']['duration'];?></td>
				 	<td><?php echo $moves['MovesActivity']['distance'];?></td>
				 	<td><?php echo $moves['MovesActivity']['steps'];?></td>
				 	<td><?php echo $moves['MovesActivity']['created'];?></td>
				 </tr>
			
	<?php       
			  
	    }
	 ?>
		
	</table>
<?php } ?>	