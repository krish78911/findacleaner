<label>Edit</label>
<form action="<?php echo base_url('Admin/editAdvertisement'); ?>" method="POST" class="editForm" autocomplete="off">
	<input type="text" name="id" placeholder="id" 
		value="<?php echo $val->id ?>" class="displayNone" required />
	<input type="text" name="userright" placeholder="userright" 
		value="<?php echo $val->userright ?>" class="displayNone" required />

	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span>First Name</span>
			<input type="text" name="firstname" placeholder="Firstname" maxlength="50"
				value="<?php echo $val->firstname ?>" required />
		</div>
		<div class="col-md-6 col-lg-6">
			<span>Last Name</span>
			<input type="text" name="lastname" placeholder="Lastname" maxlength="50" 
				value="<?php echo $val->lastname ?>" required />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span class="displayNone">E-Mail</span>
			<input type="email" name="email" placeholder="Email" 
				value="<?php echo $val->email ?>" class="displayNone" required/>
		</div>
		<div class="col-md-6 col-lg-6">
			<span class="displayNone">Password</span>
			<input type="text" name="password" placeholder="Password" 
				value="<?php echo $val->password ?>" class="displayNone" required/>
		</div>
	</div>
	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span>Phone</span>
			<input type="number" name="phone" placeholder="Phone" maxlength="50" 
				value="<?php echo $val->phone ?>" required />
		</div>
		<div class="col-md-6 col-lg-6">
			<span>City</span>
			<select name="city" required>
				<option value="">City</option>
					<?php foreach($cities as $city) { ?>
						<option value="<?php echo $city->city ?>" 
							<?php echo ($val->city == $city->city) ? 'selected':'' ?> ><?php echo $city->city ?>
						</option>';
					<?php } ?>
			</select>
		</div>
	</div>
	<div class="row">	
		<div class="col-md-12 col-lg-12">
			<span>Vacuuming price per &#13217; € </span>
			<input type="number" name="vcpricepermeter" placeholder="Vacuuming Price Per Meter (eg. 2)" maxlength="50" 
				value="<?php echo $val->vcpricepermeter ?>" required />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-6 col-lg-6">
			<span>Moping</span>
			<select name="moping" class="moping" required>
				<option value="">Moping ? </option>
				<option value="Yes" <?php echo ($val->moping === 'Yes') ? 'selected' : ''; ?>>Yes</option>
				<option value="No"  <?php echo ($val->moping === 'No') ? 'selected' : ''; ?>>No</option>
			</select>
		</div>
		<div class="col-md-6 col-lg-6">
			<span class="mopingpricepermeterlabel <?php echo ($val->moping == 'No') ? 'displayNone' : ''; ?>" >
				Moping price per &#13217; € 
			</span>
			<input type="number" name="mopingpricepermeter" maxlength="50" 
				class="mopingpricepermeter <?php echo ($val->moping == 'No') ? 'displayNone' : ''; ?>" 
				placeholder="Moping Price Per Meter (eg. 2)" 
				value="<?php echo $val->mopingpricepermeter ?>" />
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
			<span class="bathroomcleaningpricelabel <?php echo ($val->bathroomcleaning == 'No') ? 'displayNone' : ''; ?>" >
				Bathroom Cleaning price €
			</span>
			<input type="number" name="bathroomcleaningprice" maxlength="50" 
				class="bathroomcleaningprice <?php echo ($val->bathroomcleaning == 'No') ? 'displayNone' : ''; ?>" 
				placeholder="Bathroom Cleaning Price (eg. 2)" 
				value="<?php echo $val->bathroomcleaningprice ?>" />
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
			<span class="kitchencleaningpricelabel <?php echo ($val->kitchencleaning == 'No') ? 'displayNone' : ''; ?>" >
				Kitchen Cleaning Price €
			</span>
			<input type="number" name="kitchencleaningprice" maxlength="50" 
				class="kitchencleaningprice <?php echo ($val->kitchencleaning == 'No') ? 'displayNone' : ''; ?>"
				placeholder="Kitchen Cleaning Price (eg. 2)" 
				value="<?php echo $val->kitchencleaningprice ?>" />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-12 col-lg-12">
			<button type="submit">Edit</button>
		</div>
	</div>
</form>

<script type="text/javascript" src="<?php echo base_url('assets/js/showHidePriceInputs.js'); ?>"></script>

<script>
	$(document).ready(function () {
        $(".editForm").on('submit', function (e)
        {
            var postData = $(this).serializeArray();
            var formURL = $(this).attr("action");
            $.ajax(
                    {
                        url: formURL,
                        type: "POST",
                        data: postData,
                        success: function (data, textStatus, jqXHR)
                        {
							setTimeout(function () {
                                $('.allCleaners').html(data);
                            }, 1000);
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            $('.allCleaners').text("Error")
                        }
                    });
            e.preventDefault(); //STOP default action
        });

		$('.delete').on('click', function() {
			$.ajax({
				url: 'Admin/deleteAdvertisement/'+$(this).attr('id'),
				type: "POST",
				success: function(data){
					$('.allCleaners').html(data);
					/*
					setTimeout(function () {
						$('.allCleaners').html(data);
					}, 1000);
					*/
				},
				error: function(data){
					//alert("error!");
				}
			});
		})
    });
</script>
