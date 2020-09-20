<?php

// Menu
$RootMenu = new crMenu("RootMenu", TRUE);
$RootMenu->AddMenuItem(26, "mi_view1", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("26", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "view1rpt.php", -1, "", TRUE, FALSE, FALSE, "");
$RootMenu->AddMenuItem(27, "mi_view2", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("27", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "view2rpt.php", -1, "", TRUE, FALSE, FALSE, "");
$RootMenu->AddMenuItem(28, "mi_view3", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("28", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "view3rpt.php", -1, "", TRUE, FALSE, FALSE, "");
$RootMenu->AddMenuItem(29, "mi_view5", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("29", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "view5rpt.php", -1, "", TRUE, FALSE, FALSE, "");
$RootMenu->AddMenuItem(30, "mi_view6", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("30", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "view6rpt.php", -1, "", TRUE, FALSE, FALSE, "");
$RootMenu->AddMenuItem(31, "mi_view7", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("31", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "view7rpt.php", -1, "", TRUE, FALSE, FALSE, "");
$RootMenu->AddMenuItem(32, "mi_view8", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("32", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "view8rpt.php", -1, "", TRUE, FALSE, FALSE, "");
$RootMenu->AddMenuItem(34, "mi_view4", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("34", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "view4rpt.php", -1, "", TRUE, FALSE, FALSE, "");
echo $RootMenu->ToScript();
?>
<div class="ewVertical" id="ewMenu"></div>
