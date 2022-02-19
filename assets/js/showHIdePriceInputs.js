$(document).ready(function () {

 // alert($('.moping').val());
 
    if($('.moping').val() == 'Yes') {
        $(".mopingpricepermeter").show();
        $(".mopingpricepermeterlabel").show();
    } else {
        $(".mopingpricepermeter").hide();
        $(".mopingpricepermeterlabel").hide();
    }
    if($('.bathroomcleaning').val() == 'Yes') {
        $(".bathroomcleaningprice").show();
        $(".bathroomcleaningpricelabel").show();
    } else {
        $(".bathroomcleaningprice").hide();
        $(".bathroomcleaningpricelabel").hide();
    }
    if($('.kitchencleaning').val() == 'Yes') {
        $(".kitchencleaningprice").show();
        $(".kitchencleaningpricelabel").show();
    } else {
        $(".kitchencleaningprice").hide();
        $(".kitchencleaningpricelabel").hide();
    }
    
    $('.moping').on('change', function() {
        if(this.value == 'Yes') {
            $(".mopingpricepermeter").show();
            $(".mopingpricepermeterlabel").show();
        } else {
            $(".mopingpricepermeter").hide();
            $(".mopingpricepermeterlabel").hide();
        }
    });
    $('.bathroomcleaning').on('change', function() {
        if(this.value == 'Yes') {
            $(".bathroomcleaningprice").show();
            $(".bathroomcleaningpricelabel").show();
        } else {
            $(".bathroomcleaningprice").hide();
            $(".bathroomcleaningpricelabel").hide();
        }
    });
    $('.kitchencleaning').on('change', function() {
        if(this.value == 'Yes') {
            $(".kitchencleaningprice").show();
            $(".kitchencleaningpricelabel").show();
        } else {
            $(".kitchencleaningprice").hide();
            $(".kitchencleaningpricelabel").hide();
        }
    });
});