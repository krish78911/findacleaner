<div class="container">
	<div class="row">
		<div class="col-md-7 col-lg-8 advertiseSuccessOrFail">

		</div>
		<div class="col-md-5 col-lg-4 advertisementForm">
			<label>Advertise</label>
			<form action="<?php echo base_url('Register/register'); ?>" method="POST" id="advertiseForm">
				<!--<input type="text" name="firstname" placeholder="Firstname" required />
				<input type="text" name="lastname" placeholder="Lastname" required />-->
				<input type="email" name="email" placeholder="Email" id="checkEmail" required />
				<span id="emailExistMessage"></span>
				<input type="text" name="password" placeholder="Password" required />
				<!--<input type="number" name="phone" placeholder="Phone" required />
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
				<input type="number" name="kitchencleaningprice" placeholder="Kitchen Cleaning Price (eg. 2)" required />-->
			</form>
			<button type="submit" id="registerAdvertiseButton">Submit</button>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
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
							$('.advertiseSuccessOrFail').html(data);
							setInterval(function(){ 
								var url = '<?php echo base_url('Admin') ?>';
								$(location).attr('href',url);
							}, 100);	
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
