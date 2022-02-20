<table class="cleanerTableAdmin">
	<tr>
		<th></th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Detail / Edit</th>
		<th>Delete</th>
	</tr>
		<?php 
			foreach($cleaners as $key => $val) {
				echo "<tr>";
				echo "<td>".($key+1)."</td>";
				echo "<td>".$val->firstname."</td>";
				echo "<td>".$val->lastname."</td>";
				echo "<td>".$val->email."</td>";
				echo "
					<td href='#demo".$val->id."' data-toggle='collapse'>
						<span class='glyphicon glyphicon-chevron-down'></span>
					</td>
				";
				if($_SESSION["userrights"] == 'admin') {
					echo "
						<td class='delete' id=".$val->id.">
							<span class='glyphicon glyphicon-remove'></span>
						</td>
					";
				} else {
					echo "
						<td class='' id=".$val->id.">
							<a href='".base_url('Admin/deleteAdvertisement/'.$val->id)."'>
							<span class='glyphicon glyphicon-remove'></span>
							</a>
						</td>
					";
				}
				
				echo "</tr>";

				echo "<tr> <td colspan='6' class='detail'>";
				echo "
					<div id='demo".$val->id."' class='collapse'>
					";
						include 'editForm.php';
				echo "
						</div>
				";
				echo "<td> </tr>";
			}
		?>
</table>