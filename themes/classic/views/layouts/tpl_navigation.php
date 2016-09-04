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
            
            <li>
    <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Package Manager </span><span class="label label-important"> 4 </span></a>
    <ul>
        <li><a class="submenu" href="<?php echo Yii::app()->createUrl('packageMaster/admin') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Package Box </span></a></li>
        <li><a class="submenu" href="<?php echo Yii::app()->createUrl('rategroup/admin') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Rate GroupBox </span></a></li>
         <li><a class="submenu" href="<?php echo Yii::app()->createUrl('ratecards/admin') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet">  Rate CardBox </span></a></li>
        <li><a class="submenu" href="<?php echo Yii::app()->createUrl('rategroupToRatecardMap/admin') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> RateGroup RateCard Map</span></a></li>
    </ul>
</li>
        
        
        
        
        <li>
    <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Rate Manager</span><span class="label label-important"> 2 </span></a>
    <ul>
        <li><a class="submenu" href="<?php echo Yii::app()->createUrl('buyCallRates/admin') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Buy Rate</span></a></li>
        <li><a class="submenu" href="<?php echo Yii::app()->createUrl('sellCallRates/admin') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sale Rate</span></a></li>
    </ul>
</li>
        
    
        <li>
    <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> DID Manager</span><span class="label label-important"> 2 </span></a>
    <ul>
        <li><a class="submenu" href="<?php echo Yii::app()->createUrl('didbox') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> DID Box</span></a></li>
        <li><a class="submenu" href="<?php echo Yii::app()->createUrl('didsubscription') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> DID Subscription</span></a></li>
    </ul>
</li>     
        
        
        
        
	<?php } ?>        
    </ul>
</div>
<!-- end: Main Menu Navigation Inner -->
