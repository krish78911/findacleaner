<div class="container">
    <div class="row">
        <div class="col-md-7 col-lg-8 getCleanersAndPrices">
            <?php include 'getCleanersAndPrices.php'; ?>
        </div>
        <div class="col-md-5 col-lg-4 search">
            <?php include 'searchForm.php'; ?>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    $("#searchForm").on('submit', function (e)
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
                            $('.getCleanersAndPrices').html(data);
                        }, 1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('.getCleanersAndPrices').text("Error")
                    }
                });
        e.preventDefault(); //STOP default action
    });
});
</script>
