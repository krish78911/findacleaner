<div class="container-fluid">
    <div class="row aboutus">
        <div class="col-lg-12">
            <div class="container">
                <div class="row">
                    <?php foreach ($aboutus as $au) { ?>
                    <div class="col-lg-12 headings">
                        <?php echo $au->title; ?>
                    </div>
                    <div class="col-lg-12 aboutusText">
                        <?php echo $au->aboutustext; ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
