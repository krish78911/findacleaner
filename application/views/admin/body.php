<div class="container-fluid">
	<div class="row navigation">
		<div class="col-lg-12">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav>
							<a>LOGO</a>
							<a>Logout</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- all cleaner with Edit and Delete-->
		<div class="col-md-7 col-lg-8">
			<table>
				<tr>
					<th></th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
					<th>Detail</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
					<?php 
						foreach($cleaners as $key => $val) {
							echo "<tr>";
							echo "<td>".($key+1)."</td>";
							echo "<td>".$val->firstname."</td>";
							echo "<td>".$val->lastname."</td>";
							echo "<td>".$val->email."</td>";
							echo "<td><span class='glyphicon glyphicon-chevron-down'></span></td>";
							echo "<td><span class='glyphicon glyphicon-edit'></span></td>";
							echo "<td><span class='glyphicon glyphicon-remove'></span></td>";
							echo "</tr>";
						}
					?>
			</table>
		</div>

		<!--Add form-->
		<div class="col-md-5 col-lg-4 advertiseForm">
			<label>Advertise</label>
			<form action="" method="post">
				<input type="text" name="firstname" placeholder="Firstname" />
				<input type="text" name="lastname" placeholder="Lastname" />
				<input type="email" name="email" placeholder="Email" />
				<input type="number" name="phone" placeholder="Phone" />
				<input type="number" name="vcpricepermeter" placeholder="Vacuuming Price Per Meter (eg. 2)" />
				<input type="number" name="mopingpricepermeter" placeholder="Moping Price Per Meter (eg. 2)" />
				<select name="bathroomcleaning" required>
					<option value="">Bathroom Cleaning ? </option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
				<input type="number" name="bathroomcleaningprice" placeholder="Bathroom Cleaning Price (eg. 2)" />
				<select name="kitchencleaning" required>
					<option value="">Kitchen Cleaning ? </option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
				<input type="number" name="kitchencleaningprice" placeholder="Kitchen Cleaning Price (eg. 2)" />
				<button>Submit</button>
			</form>
		</div>

	</div>
</div>

