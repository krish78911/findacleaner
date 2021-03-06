<table class="cleanerTableUser">
    <tr>
        <th>Lastname, Firstname</th>
        <th>Services</th>
        <th>Total Price</th>
        <th>Contact</th>
    </tr>
    <?php
        if(count($cleaners) < 1) {
            echo "<tr><td colspan='4'><span class='totalPrice'>no cleaners found</span></td></tr>";
        }
        foreach($cleaners as $key => $val) {
            echo "<tr>";
            echo "<td>".$val->lastname." , ".$val->firstname."</td>";
            echo "<td>";
                echo "<p><strong>Vacuuming: Price:€</strong>".$val->vcpricepermeter."/&#13217;</p>";
                echo "<p><strong>Moping </strong>";
                    echo ($val->moping == "Yes") ? 
                        "<span class='glyphicon glyphicon-ok'></span>, <strong>Price: </strong>€".$val->mopingpricepermeter."/&#13217;"
                        : "<span class='glyphicon glyphicon-remove'></span>";
                    echo "";
                echo "<p><strong>Bathroom Cleaning </strong>";
                    echo ($val->bathroomcleaning == "Yes") ? 
                        "<span class='glyphicon glyphicon-ok'></span>, <strong>Price: </strong>€".$val->bathroomcleaningprice
                        : "<span class='glyphicon glyphicon-remove'></span>";
                    echo "";
                echo "</p>";
                echo "<p><strong>Kitchen Cleaning </strong>";
                    echo ($val->kitchencleaning == "Yes") ? 
                        "<span class='glyphicon glyphicon-ok'></span>, <strong>Price: </strong>€".$val->kitchencleaningprice
                        : "<span class='glyphicon glyphicon-remove'></span>";
                echo "</p>";
            echo "</td>";
            
            echo "<td>";
                $totalPrice = 0;
                if(!empty($this->metersquare)) {
                    echo "Vacuuming: ".$this->metersquare."&#13217; x €".$val->vcpricepermeter."<br>";
                    $totalPrice = $totalPrice + $this->metersquare*$val->vcpricepermeter;
                }
                if(!empty($this->moping) && $this->moping == "Yes") {
                    echo "Moping: <span class='glyphicon glyphicon-ok'></span>"
                        .$this->metersquare."&#13217; x €".$val->mopingpricepermeter."<br>";
                    $totalPrice = $totalPrice + $val->mopingpricepermeter;
                }
                if(!empty($this->kitchencleaning) && $this->kitchencleaning == "Yes") {
                    echo "Kitchen Cleaning: <span class='glyphicon glyphicon-ok'></span> <br>";
                    $totalPrice = $totalPrice + $val->kitchencleaningprice;
                }
                if(!empty($this->bathroomcleaning) && $this->bathroomcleaning == "Yes") {
                    echo "Bathroom Cleaning: <span class='glyphicon glyphicon-ok'></span> <br>";
                    $totalPrice = $totalPrice + $val->bathroomcleaningprice;
                }
                
                echo ($totalPrice != 0) ?
                    "<span class='totalPrice'>€".($totalPrice)."</span>" :
                    "<span class='totalPrice'>-</span>";
                
            echo "</td>";
            
            echo "<td>";
                echo ($totalPrice != 0) ?
                    "<button type='button' class='btn btn-info btn-lg sendEmailButton' data-toggle='modal' data-target='#myModal".$key."'>
                        <span class='glyphicon glyphicon-envelope'></span>
                    </button>" :
                    "<span class='totalPrice'>-</span>";
            echo '
            <!-- Modal -->
            <div id="myModal'.$key.'" class="modal fade" role="dialog">
                    <div class="modal-dialog">
            
                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Contact</h4>
                            <span class="messageSubmitted successMessage"></span>
                        </div>
                        <div class="modal-body">
                            <form action="'.base_url('SendMail/sendEmail').'" method="POST" class="sendMessageForm">
                                <input type="text" name="firstname" placeholder="First Name" maxlength="50" required />
                                <input type="text" name="lastname" placeholder="Last Name" maxlength="50" required />
                                <input type="email" name="email" placeholder="E-Mail" maxlength="50" required />
                                <input type="number" name="phone" placeholder="Phone" maxlength="50" required />
                                <span>(Dates) Between these dates I need cleaner</span><br>
                                <span>From Date</span>
                                <input type="text" name="fromdate" class="datepickerFrom" placeholder="From Date" required />
                                <span>To Date (select same date as from date if you need cleaner for 1 day)</span>
                                <input type="text" name="todate" class="datepickerTo" placeholder="To Date" required />

                                <span>(Hours) Between these hours I need cleaner</span><br>
                                <span>From Time (0 to 24)</span>
                                <select name="fromtime" required>
                                    <option value="">select</option>
                                ';
                                    for($i=0; $i<=24; $i++) {
                                        echo '<option>'.$i.':00</option>';
                                    }
                                echo '
                                </select>
                                <span>To Time (0 to 24)</span>
                                <select name="totime" required>
                                    <option value="">select</option>
                                ';
                                    for($i=0; $i<=24; $i++) {
                                        echo '<option>'.$i.':00</option>';
                                    }
                                echo '
                                </select>

                                <input type="text" name="city" value="'.$this->city.'" class="displayNone" />
                                <input type="text" name="advertemail" value="'.$val->email.'" class="displayNone" />
                                <input type="text" name="metersquare" value="'.$this->metersquare.'" class="displayNone" />
                                <input type="text" name="vacuuming" value="Yes" class="displayNone" />
                                <input type="text" name="moping" value="'.$this->moping.'" class="displayNone" />
                                <input type="text" name="kitchencleaning" value="'.$this->kitchencleaning.'" class="displayNone" />
                                <input type="text" name="bathroomcleaning" value="'.$this->bathroomcleaning.'" class="displayNone" />
                                <input type="text" name="totalprice" value="'.$totalPrice.'" class="displayNone" />
                                <button type="submit" class="modalButton">Send</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
            
                    </div>
                </div>
            ';
            echo "</td>";
            echo "</tr>";

            echo '
            
            ';
        }
    ?>
</table>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
$( function() {
    $( ".datepickerFrom" ).datepicker({ 
        dateFormat: 'yy-mm-dd',
        minDate: new Date(),
        onSelect: function(selectedDate) {
            var nextDay = new Date(selectedDate);
            nextDay.setDate(nextDay.getDate() + 1);
            $(".datepickerTo").datepicker("option","minDate", nextDay);
        }
    });
    $( ".datepickerTo" ).datepicker({ 
        dateFormat: 'yy-mm-dd',
        minDate: new Date(),
    });
} );
</script>

<script>
$(document).ready(function () {
    
    $('.sendMessageForm').on('submit', function (e)
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
                        $('.messageSubmitted').html('<strong>Message Sent..</strong>');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        //
                    }
                });
        e.preventDefault(); //STOP default action
    });
    
});

</script>