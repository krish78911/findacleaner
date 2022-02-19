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
							<input type="text" name="title" placeholder="Title" 
								value="<?php echo $val->title ?>" required />
						</div>
					</div>
					<div class="row">	
						<div class="col-lg-12">
							<span>Description</span>
							<textarea name="aboutustext" placeholder="Description" required>
								<?php echo $val->aboutustext ?>
							</textarea>
						</div>
					</div>
					<div class="row">	
						<div class="col-lg-12">
							<span>Slider Text</span>
							<input type="text" name="slidertext" placeholder="SliderText" 
								value="<?php echo $val->slidertext ?>" required />
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
