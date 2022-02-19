<div class="container-fluid">
	<div class="row footer">
		<div class="col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php foreach($contact as $val) {
                            echo "<p>".$val->contactaddress."</p>";
                            echo "<p>".$val->contactphone."</p>";
                            echo "<p>".$val->contactemail."</p>";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>