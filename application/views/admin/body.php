<div class="container">
	<div class="row">
		<!-- all cleaner with Edit and Delete-->
		<div class="col-md-7 col-lg-8 allCleaners">
			<?php include 'allCleaners.php'; ?>
		</div>

		<!--Add form-->
		<?php include 'advertiseForm.php'; ?>
	</div>
</div>

<script>
	$(document).ready(function () {
        $("#advertiseForm, .editForm").on('submit', function (e)
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
					//alert('11');
					setTimeout(function () {
						$('.allCleaners').html(data);
					}, 1000);
				},
				error: function(data){
					//alert("error!");
				}
			});
		})
    });
</script>
