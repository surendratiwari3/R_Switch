<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 8/14/2016
 * Time: 12:20 AM
 */
?>

<!-- start: Main Menu Navigation Inner -->
<div class="nav-collapse sidebar-nav">
    <ul class="nav nav-tabs nav-stacked main-menu">
        <?php if (Yii::app()->user->user_type === 'admin') { ?>
            <li><a href="<?php echo Yii::app()->createUrl('dashboard') ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
            <li><a href="<?php echo Yii::app()->createUrl('userMaster/admin') ?>"><i class="icon-user"></i><span class="hidden-tablet"> Users</span></a></li>
            <li><a href="<?php echo Yii::app()->createUrl('didbox') ?>"><i class="icon-folder-close"></i><span class="hidden-tablet"> DID Box</span></a></li>
            <li><a href="<?php echo Yii::app()->createUrl('didsubscription') ?>"><i class="icon-rss"></i><span class="hidden-tablet"> DID Subscription</span></a></li>
        <li><a href="<?php echo Yii::app()->createUrl('packageMaster/admin') ?>"><i class="icon-user"></i><span class="hidden-tablet"> Package Manager  </span></a></li>
	<?php } ?>        
    </ul>
</div>
<!-- end: Main Menu Navigation Inner -->
