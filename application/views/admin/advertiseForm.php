<div class="container">
	<div class="row">
		<div class="col-md-12 col-lg-12 advertisementForm">
			<label>Advertise/Register</label>
			<form action="<?php echo base_url('Register/register'); ?>" method="POST" id="advertiseForm">
				<div class="row">	
					<div class="col-md-6 col-lg-6">
						<span>First Name</span>
						<input type="text" name="firstname" placeholder="Firstname" maxlength="50" required />
					</div>
					<div class="col-md-6 col-lg-6">
						<span>Last Name</span>
						<input type="text" name="lastname" placeholder="Lastname" maxlength="50" required />
					</div>
				</div>
				<div class="row">	
					<div class="col-md-6 col-lg-6">
						<span>E-Mail</span>
						<input type="email" name="email" placeholder="Email" maxlength="50" id="checkEmail" required />
						<span id="emailExistMessage"></span>
					</div>
					<div class="col-md-6 col-lg-6">
						<span>Password</span>
						<input type="text" name="password" placeholder="Password" maxlength="50" required />
					</div>
				</div>
				<div class="row">	
					<div class="col-md-6 col-lg-6">
						<span>Phone</span>
						<input type="number" name="phone" placeholder="Phone" maxlength="50" required />
					</div>
					<div class="col-md-6 col-lg-6">
						<span>City</span>
						<select name="city" required>
							<option value="">City</option>
								<?php foreach($cities as $city) {
									echo '<option value="'.$city->city.'">'.$city->city.'</option>';
								} ?>
						</select>
					</div>
				</div>
				<div class="row">	
					<div class="col-md-12 col-lg-12">
						<span>Vacuuming price per &#13217; €</span>
						<input type="number" name="vcpricepermeter" maxlength="50" placeholder="Vacuuming Price Per Meter (eg. 2)" required />
					</div>
				</div>
				<div class="row">	
					<div class="col-md-6 col-lg-6">
						<span>Moping</span>
						<select name="moping" class="moping" required>
							<option value="">Moping ? </option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-md-6 col-lg-6">
						<span class="mopingpricepermeterlabel displayNone" >Moping price per &#13217; €</span>
						<input type="number" name="mopingpricepermeter" maxlength="50" class="mopingpricepermeter displayNone" 
							placeholder="Moping Price Per Meter (eg. 2)" />
					</div>
				</div>
				<div class="row">	
					<div class="col-md-6 col-lg-6">
						<span>Bathroom Cleaning</span>
						<select name="bathroomcleaning" class="bathroomcleaning" required>
							<option value="">Bathroom Cleaning ? </option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-md-6 col-lg-6">
						<span class="bathroomcleaningpricelabel displayNone" >Bathroom Cleaning price €</span>
						<input type="number" name="bathroomcleaningprice" maxlength="50" class="bathroomcleaningprice displayNone" 
							placeholder="Bathroom Cleaning Price (eg. 2)" />
					</div>
				</div>
				<div class="row">	
					<div class="col-md-6 col-lg-6">
						<span>Kitchen Cleaning</span>
						<select name="kitchencleaning" class="kitchencleaning" required>
							<option value="">Kitchen Cleaning ? </option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-md-6 col-lg-6">
						<span class="kitchencleaningpricelabel displayNone" >Kitchen Cleaning Price €</span>
						<input type="number" name="kitchencleaningprice" maxlength="50" class="kitchencleaningprice displayNone" 
							placeholder="Kitchen Cleaning Price (eg. 2)" />
					</div>
				</div>
				<div class="row">	
					<div class="col-md-12 col-lg-12">
						<button type="submit" id="registerAdvertiseButton">Submit</button>
					</div>
				</div>
			</form>
			
			<span class="advertiseSuccessOrFail"></span>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/showHidePriceInputs.js'); ?>"></script>

<script>
	$(document).ready(function () {
		/*
		$('#registerAdvertiseButton').on('click', function() {
			$.ajax({  
				type: 'POST',  
				url: '<?php echo base_url('CheckIfEmailExists') ?>', 
				data: { email: $('#checkEmail').val()},
				success: function(data) {
					if (data == 'Yes') {
						$('#emailExistMessage').html('Email exists..')
						setInterval(function(){ 
							$('#emailExistMessage').html('')
						}, 5000);	
					} else {
						$("#advertiseForm").submit();
					}
				}
			});
		});
		*/

        $("#advertiseForm").on('submit', function (e)
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
							if(data == 'Email Exists') {
								$('#emailExistMessage').html(data);
							} else {
								$('.advertiseSuccessOrFail').html(data);
								var url = '<?php echo base_url('Admin') ?>';
								$(location).attr('href',url);
								
								/*
								setInterval(function(){ 
									var url = '<?php echo base_url('Admin') ?>';
									$(location).attr('href',url);
								}, 100);
								*/	
							}
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            $('.advertiseSuccessOrFail').html(data)
                        }
                    });
            e.preventDefault(); //STOP default action
        });
    });
</script>
