<?php if (($width1>371 && $height1>270) || ($width1<381 && $height1>270) || ($width1>381 && $height1<270)) {
        if (($height1 > $width1) || ($width1<381 && $height1>270)) { 
            
            $count = 0;
            while ($height1>=270) {
                $diff = $height1-270;
                $fraction = ($diff/$height1);
                $height1 = intval($height1)*$fraction;
                $count = $count+1;
            }
            while ($width1>=381 || $count>=1) {
                $wdiff = $width1-381;
                $wfraction = ($wdiff/$width1);
                $width1 = intval($width1)*$wfraction;
                $count = $count-1;
            }
            ?>
                <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail" style="background-image: url(dashboard/imageone/<?php echo $image ?>); background-repeat: no-repeat; background-size: <?php echo intval($width1) ?> <?php echo intval($height1) ?>; background-position: center;">
													<img src="dashboard/imageone/black.jpg" style="visibility:hidden;"  class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png">
													</a>
    <?php } 
        else { 
            $diff = $width1-371;
            $fraction = ($diff/$width1);
            $width2 = 371;
            $height2 = $height1*$fraction;
            ?>
                <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail" style="background-image: url(dashboard/imageone/<?php echo $image ?>); background-repeat: no-repeat; background-size: <?php echo $width2 ?> <?php echo intval($height2) ?>; background-position: center;">
													<img src="dashboard/imageone/black.jpg" style="visibility:hidden;"  class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png">
													</a>
        <?php } 
    }
    else { ?>
            <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail" style="background-image: url(dashboard/imageone/<?php echo $image ?>); background-repeat: no-repeat; background-size: <?php echo $width1 ?> <?php echo $height1 ?>; background-position: center;">
													<img src="dashboard/imageone/black.jpg" style="visibility:hidden;"  class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png">
													</a>
        
    <?php } ?> 
    style="background-image: url(dashboard/imageone/<?php echo $image ?>); background-repeat: no-repeat; background-size: auto; background-position: center;"