<?php echo "\n"; ?><!-- Footer
================================================== -->
<footer class="footer">
	<div class="container">
		<span class="badge badge-info">
		&copy; Hak Cipta Terperihara 2019. Theme <?php
$theme = ( !isset($pilih) ) ? 'Asal Bootstrap Twitter' : $pilih;
echo $theme = (isset($theme)) ? $theme : null;
		?></span>
	</div>
</footer>
<!-- khas untuk jquery dan js2 lain
================================================== -->
<?php
if (isset($urljs))
{
    foreach ($urljs as $js)
    {
        echo "\n";
		?><script type="text/javascript" src="<?php echo $js ?>"></script><?php
    }
}
echo "\n"; ?>

