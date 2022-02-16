<table class="cleanerTableUser">
    <tr>
        <th></th>
        <th>Lastname, Firstname</th>
        <th>Services</th>
        <th>Total Price</th>
        <th>Contact</th>
    </tr>
    <?php 
        foreach($cleaners as $key => $val) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            echo "<td>".$val->lastname." , ".$val->firstname."</td>";
            echo "<td>";
                echo "<p><strong>Vacuuming: </strong>Price:€".$val->vcpricepermeter."/&#13217;</p>";
                echo "<p><strong>Moping: </strong>Price:€".$val->mopingpricepermeter."/&#13217;</p>";
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
                if(!empty($this->meterSquare)) {
                    echo "Vacuuming: ".$this->meterSquare."&#13217; x €".$val->vcpricepermeter."<br>";
                    $totalPrice = $totalPrice + $this->meterSquare*$val->vcpricepermeter;
                }
                if(!empty($this->moping) && $this->moping == "Yes") {
                    echo "Moping: ".$this->meterSquare."&#13217; x €".$val->mopingpricepermeter."<br>";
                    $totalPrice = $totalPrice + $this->meterSquare*$val->mopingpricepermeter;
                }
                if(!empty($this->kitchenCleaning) && $this->kitchenCleaning == "Yes") {
                    echo "Kitchen Cleaning: <span class='glyphicon glyphicon-ok'></span> <br>";
                    $totalPrice = $totalPrice + $val->kitchencleaningprice;
                }
                if(!empty($this->bathroomCleaning) && $this->bathroomCleaning == "Yes") {
                    echo "Bathroom Cleaning: <span class='glyphicon glyphicon-ok'></span> <br>";
                    $totalPrice = $totalPrice + $val->bathroomcleaningprice;
                }
                
                echo ($totalPrice != 0) ?
                    "<span class='totalPrice'>€".($totalPrice)."</span>" :
                    "<span class='totalPrice'>-</span>";
                
            echo "</td>";
            
            echo "<td>
                <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>
                    <span class='glyphicon glyphicon-envelope'></span>
                </button>
            </td>";
            echo "</tr>";
        }
    ?>
</table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>