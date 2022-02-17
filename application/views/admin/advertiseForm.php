<div class="col-md-5 col-lg-4 advertisementForm">
	<label>Advertise</label>
	<form action="<?php echo base_url('Admin/addAdvertisement'); ?>" method="POST" id="advertiseForm">
		<input type="text" name="firstname" placeholder="Firstname" required />
		<input type="text" name="lastname" placeholder="Lastname" required />
		<input type="email" name="email" placeholder="Email" required />
		<input type="text" name="password" placeholder="Password" required />
		<input type="number" name="phone" placeholder="Phone" required />
		<input type="text" name="city" placeholder="City" required />
		<input type="number" name="vcpricepermeter" placeholder="Vacuuming Price Per Meter (eg. 2)" required />
		<select name="moping" required>
			<option value="">Moping ? </option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		<input type="number" name="mopingpricepermeter" placeholder="Moping Price Per Meter (eg. 2)" required />
		<select name="bathroomcleaning" required>
			<option value="">Bathroom Cleaning ? </option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		<input type="number" name="bathroomcleaningprice" placeholder="Bathroom Cleaning Price (eg. 2)" required />
		<select name="kitchencleaning" required>
			<option value="">Kitchen Cleaning ? </option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		<input type="number" name="kitchencleaningprice" placeholder="Kitchen Cleaning Price (eg. 2)" required />
		<button type="submit">Submit</button>
	</form>
</div>