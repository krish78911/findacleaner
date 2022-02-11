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
                        "<span class='glyphicon glyphicon-ok'></span>, <strong>Price: </strong>€".$val->bathroomcleaningprice."/&#13217;"
                        : "<span class='glyphicon glyphicon-remove'></span>";
                    echo "";
                echo "</p>";
                echo "<p><strong>Kitchen Cleaning </strong>";
                    echo ($val->kitchencleaning == "Yes") ? 
                        "<span class='glyphicon glyphicon-ok'></span>, <strong>Price: </strong>€".$val->kitchencleaningprice."/&#13217;"
                        : "<span class='glyphicon glyphicon-remove'></span>";
                echo "</p>";
            echo "</td>";
            
            echo "<td>";
                if(!empty($this->meterSquare)) {
                    echo $this->meterSquare."&#13217; x €".$val->vcpricepermeter
                    ." = <strong>€".($this->meterSquare*$val->vcpricepermeter)."</strong>";
                } else {
                    echo "-";
                }
            echo "</td>";
            
            echo "<td><span class='glyphicon glyphicon-envelope'></span></td>";
            echo "</tr>";
        }
    ?>
</table>