<label>Edit</label>
<form action="<?php echo base_url('Admin/editAdvertisement'); ?>" method="POST" class="editForm">
	<input type="text" name="id" placeholder="id" 
		value="<?php echo $val->id ?>" class="displayNone" required />

	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span>First Name</span>
			<input type="text" name="firstname" placeholder="Firstname" 
				value="<?php echo $val->firstname ?>" required />
		</div>
		<div class="col-md-6 col-lg-6">
			<span>Last Name</span>
			<input type="text" name="lastname" placeholder="Lastname" 
				value="<?php echo $val->lastname ?>" required />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span>E-Mail</span>
			<input type="email" name="email" placeholder="Email" 
				value="<?php echo $val->email ?>" class="displayNone" required/>
		</div>
		<div class="col-md-6 col-lg-6">
			<span>Password</span>
			<input type="text" name="password" placeholder="Password" 
				value="<?php echo $val->password ?>" class="displayNone" required/>
		</div>
	</div>
	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span>Phone</span>
			<input type="number" name="phone" placeholder="Phone" 
				value="<?php echo $val->phone ?>" required />
		</div>
		<div class="col-md-6 col-lg-6">
			<span>City</span>
			<input type="text" name="city" placeholder="City"
				value="<?php echo $val->city ?>" required />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-12 col-lg-12">
			<span>Vacuuming price per &#13217; </span>
			<input type="number" name="vcpricepermeter" placeholder="Vacuuming Price Per Meter (eg. 2)" 
				value="<?php echo $val->vcpricepermeter ?>" required />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span>Moping</span>
			<select name="moping" class="moping" required>
				<option value="">Moping ? </option>
				<option value="Yes" <?php echo ($val->moping == 'Yes') ? 'selected' : ''; ?>>Yes</option>
				<option value="No"  <?php echo ($val->moping == 'No') ? 'selected' : ''; ?>>No</option>
			</select>
		</div>
		<div class="col-md-6 col-lg-6">
			<span class="mopingpricepermeterlabel displayNone" >Moping price per &#13217; </span>
			<input type="number" name="mopingpricepermeter" class="mopingpricepermeter" placeholder="Moping Price Per Meter (eg. 2)" 
				value="<?php echo $val->mopingpricepermeter ?>" required />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span>Bathroom Cleaning</span>
			<select name="bathroomcleaning" class="bathroomcleaning" required>
				<option value="">Bathroom Cleaning ? </option>
				<option value="Yes" <?php echo ($val->bathroomcleaning == 'Yes') ? 'selected' : ''; ?>>Yes</option>
				<option value="No"  <?php echo ($val->bathroomcleaning == 'No') ? 'selected' : ''; ?>>No</option>
			</select>
		</div>
		<div class="col-md-6 col-lg-6">
			<span class="bathroomcleaningpricelabel displayNone" >Bathroom Cleaning price</span>
			<input type="number" name="bathroomcleaningprice"class="bathroomcleaningprice" placeholder="Bathroom Cleaning Price (eg. 2)" 
				value="<?php echo $val->bathroomcleaningprice ?>" required />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span>Kitchen Cleaning</span>
			<select name="kitchencleaning" class="kitchencleaning" required>
				<option value="">Kitchen Cleaning ? </option>
				<option value="Yes" <?php echo ($val->kitchencleaning == 'Yes') ? 'selected' : ''; ?> >Yes</option>
				<option value="No"  <?php echo ($val->kitchencleaning == 'No') ? 'selected' : ''; ?> >No</option>
			</select>
		</div>
		<div class="col-md-6 col-lg-6">
			<span class="kitchencleaningpricelabel displayNone" >Kitchen Cleaning Price</span>
			<input type="number" name="kitchencleaningprice" class="kitchencleaningprice" placeholder="Kitchen Cleaning Price (eg. 2)" 
				value="<?php echo $val->kitchencleaningprice ?>" required />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-12 col-lg-12">
			<button type="submit">Edit</button>
		</div>
	</div>
</form>

<script type="text/javascript" src="<?php echo base_url('assets/js/showHidePriceInputs.js'); ?>"></script>