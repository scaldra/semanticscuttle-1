<!--following code is generated by templates/bottom.inc.php-->
<div id="bottom">
<?php echo $GLOBALS['footerMessage'].' ';?>
<?php
echo '<div class="copyright"><a title="All content licensed under a Creative Commons Attribution 4.0 International License unless otherwise noted." rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a></div>';
echo '<div class="generator">' . T_("Powered by ");
echo "<a href=\"https://sourceforge.net/projects/semanticscuttle/\">SemanticScuttle</a>";
echo '</div>';
?>

</div>


<?php if(isset($GLOBALS['googleAnalyticsCode']) && $GLOBALS['googleAnalyticsCode']!= ''):?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("<?php echo $GLOBALS['googleAnalyticsCode']?>");
pageTracker._trackPageview();
} catch(err) {}</script>

<?php endif;?>

</body>
</html>
