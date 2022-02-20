<div class="container">
    <div class="row">
        <div class="col-md-7 col-lg-8">
            <div class="getCleanersAndPrices">
                <?php include 'getCleanersAndPrices.php'; ?>
            </div>
            <div class="prevNextButtons">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button class="prev displayNone" >
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            Previous
                        </button>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button class="next displayNone" >
                            Next
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-lg-4 search">
            <?php include 'searchForm.php'; ?>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    var start = 0;
    var last = 5;
    var total = '<?php echo $cleanersAll; ?>';
    var limit = 5;
    var dataPost = '';

    $("#searchForm").on('submit', function (e)
    {
        $('#searchForm button').append('<span>Loading..</span>');
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        //postData.push({limit: limit, start: start});
        dataPost = postData;
        $.ajax(
                {
                    url: formURL,
                    type: "POST",
                    data: postData,
                    success: function (data, textStatus, jqXHR)
                    {
                        $('.getCleanersAndPrices').html(data);
                        $('.next').show();
                        $('#searchForm button span').remove();
                        /*
                        setTimeout(function () {
                            $('.getCleanersAndPrices').html(data);
                        }, 1000);
                        */
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('.getCleanersAndPrices').text("Error")
                    }
                });
        e.preventDefault(); //STOP default action
    });



    if(start <= 0) {
        $('.prev').hide();
    }
    if(last >= total) {
        $('.next').hide();
    }
    $('.prev').on('click', function() {
        $(this).append('<a>Loading..</a>');
        start = start - 5;
        last = last - 5;
        if(start <= 0) {
            $('.prev').hide();
        }
        if(last < total) {
            $('.next').show();
        }
        $.ajax({  
            type: 'POST',  
            url: '<?php echo base_url('Home/findCleaners/') ?>'+limit+'/'+start, 
            data: dataPost,
            success: function(data) {
                $('.getCleanersAndPrices').html(data);
                $('.prev a').remove();
            }
        });

    });
    $('.next').on('click', function() {
        $(this).append('<a>Loading..</a>');
        start = start + 5;
        last = last + 5;
        if(start > 0) {
            $('.prev').show();
        }
        if(last >= total) {
            $('.next').hide();
        }
        $.ajax({  
            type: 'POST',  
            url: '<?php echo base_url('Home/findCleaners/') ?>'+limit+'/'+start, 
            data: dataPost,
            success: function(data) {
                $('.getCleanersAndPrices').html(data);
                $('.next a').remove();
            }
        });
    });
});
</script>
