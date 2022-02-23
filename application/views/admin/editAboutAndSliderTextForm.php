<div class="container">
	<div class="row">
		<div class="col-lg-12 adminAboutAndSliderText">
			<label>Edit About Us and Slider Text</label>
			<form action="<?php echo base_url('Admin/editAboutAndSliderText'); ?>" method="POST" class="editAboutAndSliderTextForm" autocomplete="off">
				<?php foreach($aboutusAndSliderText as $val) { ?>
					<input type="text" name="id" placeholder="id" 
						value="<?php echo $val->idabout ?>" class="displayNone" required />
					<div class="row">	
						<div class="col-lg-12">
							<span>Title</span>
							<input type="text" name="title" placeholder="Title" maxlength="100"
								value="<?php echo $val->title ?>" required />
						</div>
					</div>
					<div class="row">	
						<div class="col-lg-12">
							<span>Description</span>
							<textarea name="aboutustext" placeholder="Description" maxlength="1000" required><?php echo $val->aboutustext ?></textarea>
						</div>
					</div>
					<div class="row">	
						<div class="col-lg-12">
							<span>Slider Text</span>
							<input type="text" name="slidertext" placeholder="SliderText" maxlength="100" 
								value="<?php echo $val->slidertext ?>" required />
						</div>
					</div>
					<div class="row">	
						<div class="col-lg-12">
							<span>Footer Address</span>
							<input type="text" name="contactaddress" placeholder="contact address" maxlength="100" 
								value="<?php echo $val->contactaddress ?>" required />
						</div>
					</div>
					<div class="row">	
						<div class="col-lg-12">
							<span>Footer Phone</span>
							<input type="text" name="contactphone" placeholder="contact phone" maxlength="100" 
								value="<?php echo $val->contactphone ?>" required />
						</div>
					</div>
					<div class="row">	
						<div class="col-lg-12">
							<span>Footer E-Mail</span>
							<input type="text" name="contactemail" placeholder="contact email" maxlength="100" 
								value="<?php echo $val->contactemail ?>" required />
						</div>
					</div>
					<div class="row">	
						<div class="col-md-12 col-lg-12">
							<button type="submit">Update</button>
						</div>
					</div>
				<?php } ?>
			</form>
			<div class="aboutAndSliderTextUpdated"></div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
        $(".editAboutAndSliderTextForm").on('submit', function (e)
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
							$('.aboutAndSliderTextUpdated').html(data);
							setTimeout(function () {
                                $('.aboutAndSliderTextUpdated').empty()
                            }, 2000);
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            $('.aboutAndSliderTextUpdated').text("Error")
                        }
                    });
            e.preventDefault(); //STOP default action
        });
    });
</script>
