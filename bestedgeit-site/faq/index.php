<?php include "header.php" ?>

<p>Select a category to view the associated Frequently Asked Questions.</p>

<ul>

<!-- Start FAQ Scripting -->
				
<?php
				
include "faq_config.php";
				
$result = mysql_query("SELECT * FROM faqcategories ORDER BY category") or die(mysql_error());

while ($row = mysql_fetch_array($result)) {
   print "<li class=\"category\"><strong><a href=\"faq.php?category_id=$row[id]&cat_name=$row[category]\" onclick=\"NewWindow(this.href,'faqs','580','480','yes');return false\">$row[category]</a></strong></li>\n";
}
				
mysql_close($link);
				
?>
				
<!-- End FAQ Scripting -->

</ul>


<?php include "footer.php" ?>
