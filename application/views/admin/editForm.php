<label>Edit</label>
<form action="<?php echo base_url('Admin/editAdvertisement'); ?>" method="POST" class="editForm">
	<input type="text" name="id" placeholder="id" 
		value="<?php echo $val->id ?>" required />
	<input type="text" name="firstname" placeholder="Firstname" 
		value="<?php echo $val->firstname ?>" required />
	<input type="text" name="lastname" placeholder="Lastname" 
		value="<?php echo $val->lastname ?>" required />
	<input type="email" name="email" placeholder="Email" 
		value="<?php echo $val->email ?>" class="displayNone" required/>
	<input type="text" name="password" placeholder="Password" 
		value="<?php echo $val->password ?>" class="displayNone" required/>
	<input type="number" name="phone" placeholder="Phone" 
		value="<?php echo $val->phone ?>" required />
	<input type="text" name="city" placeholder="City"
		value="<?php echo $val->city ?>" required />
	<input type="number" name="vcpricepermeter" placeholder="Vacuuming Price Per Meter (eg. 2)" 
		value="<?php echo $val->vcpricepermeter ?>" required />
	<select name="moping" required>
		<option value="">Moping ? </option>
		<option value="Yes" <?php echo ($val->moping == 'Yes') ? 'selected' : ''; ?>>Yes</option>
		<option value="No"  <?php echo ($val->moping == 'No') ? 'selected' : ''; ?>>No</option>
	</select>
	<input type="number" name="mopingpricepermeter" placeholder="Moping Price Per Meter (eg. 2)" 
		value="<?php echo $val->mopingpricepermeter ?>" required />
	<select name="bathroomcleaning" required>
		<option value="">Bathroom Cleaning ? </option>
		<option value="Yes" <?php echo ($val->bathroomcleaning == 'Yes') ? 'selected' : ''; ?>>Yes</option>
		<option value="No"  <?php echo ($val->bathroomcleaning == 'No') ? 'selected' : ''; ?>>No</option>
	</select>
	<input type="number" name="bathroomcleaningprice" placeholder="Bathroom Cleaning Price (eg. 2)" 
		value="<?php echo $val->bathroomcleaningprice ?>" required />
	<select name="kitchencleaning" required>
		<option value="">Kitchen Cleaning ? </option>
		<option value="Yes" <?php echo ($val->kitchencleaning == 'Yes') ? 'selected' : ''; ?> >Yes</option>
		<option value="No"  <?php echo ($val->kitchencleaning == 'No') ? 'selected' : ''; ?> >No</option>
	</select>
	<input type="number" name="kitchencleaningprice" placeholder="Kitchen Cleaning Price (eg. 2)" 
		value="<?php echo $val->kitchencleaningprice ?>" required />
	<button type="submit">Edit</button>
</form>