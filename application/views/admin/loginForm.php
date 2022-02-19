<div class="container">
	<div class="row">
		<div class="col-md-7 col-lg-8">

		</div>
		<div class="col-md-5 col-lg-4 advertisementForm">
			<label>Advertise</label>
			<form action="<?php echo base_url('Login/checkLogin'); ?>" method="POST" id="loginForm">
                <span>E-Mail</span>
				<input type="text" name="email" placeholder="Email" id="checkEmail" required />
                <span>Password</span>
				<input type="text" name="password" placeholder="Password" required />
				<button type="submit" id="loginFormButton">Submit</button>
			</form>
			<span id="wrongEmailOrPassword"></span>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
        $("#loginForm").on('submit', function (e)
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
							if(data == 'Yes') {
                                setInterval(function(){ 
                                    var url = '<?php echo base_url('Admin') ?>';
                                    $(location).attr('href',url);
							    }, 100);
                            } else {
                                setInterval(function(){ 
                                    $('#wrongEmailOrPassword').html(data)
							    }, 5000);  
                            }
								
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            $('#wrongEmailOrPassword').html('Error..')
                        }
                    });
            e.preventDefault(); //STOP default action
        });
    });
</script>
