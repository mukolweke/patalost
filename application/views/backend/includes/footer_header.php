</div>
<div class="row" style="background-color: black;color: white;">
    <div class="col-md-4 text-left">

    </div>
    <div class="col-md-4 text-left">
        <div class="row">
            <h4>Social Links:</h4>
            <a href="#" style="margin-top: 20px;">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Email</a>
        </div>
        <div class="row">
            <h4>Share Your Story</h4>
            <p>Have a recovery story of an item you lost or found</p>
            <form method="postFound" class="form recoveryform" action="<?php echo site_url('index'); ?>">
                <div class="row"><textarea class="form-group" type="text" id="recoveryStory" name="recoveryStory"rows="2" cols="43"></textarea></div>
                <div class="row"><input class="form-group btn sub-block" type="submit" value="Submit"/></div>
            </form>
        </div>
    </div>
    <div class="col-md-4 text-left">
        <h4>STATISTICS COUNTER</h4>
        <p style="margin-top: 20px;">Success Returned Items = </p>
        <p>Found Items = </p>
        <p>Lost Items = </p>
    </div>
</div>