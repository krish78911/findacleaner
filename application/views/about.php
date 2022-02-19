<div class="container">
    <div class="row aboutus">
        <?php foreach ($aboutus as $au) { ?>
        <div class="col-lg-12 heading">
            <?php echo $au->title; ?>
        </div>
        <div class="col-lg-12 aboutusText">
            <?php echo $au->aboutustext; ?>
        </div>
        <?php } ?>
    </div>
</div>