<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="css/main.css" rel="stylesheet" />
<SCRIPT TYPE="text/javascript">

function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}


var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		home_over = newImage("images/header/home-over.gif");
		demos_over = newImage("images/header/demos-over.gif");
		register_over = newImage("images/header/register-over.gif");
		payments_over = newImage("images/header/payments-over.gif");
		contactus_over = newImage("images/header/contactus-over.gif");
		preloadFlag = true;
	}
}

</SCRIPT>

</head>
<body onLoad="preloadImages();">
<div id="wrapper">
<div id="header_wrapper">
<?php include("main_header/main_header.php") ?>
</div>
<div class="clear"></div>
<div id="body_wrapper">
<div id="main_body_left"><?php include("leftmenu/main_left_menu.php") ?>
</div>
<div id="main_body_right">
<div id="body_content_top"><h2 class="m_head">COGNOS 8</h2><a href="#" name="top"></a></div>
<div id="body_content_bg">

<div class="b_content">
<h4>Introduction</h4>
<ul class="content">
<li>About Cognos 8 BI</li>
<li>Architecture</li>
<li>Cognos Features</li>
<li>Difference between Cognos Other OLAP tools</li>
<li>Cognos Release</li>
</ul>
 <h4>Cognos Connections</h4>
 <ul class="content">
<li>How to Connect to different Data Sources</li>
<li>How to Provide Security to the Package</li>
<li>Import and Export of Package (Deployment)</li>
<li>Running the Report Burn</li>
<li>Scheduling</li>
</ul>
<h4>Framework Manager</h4>
<ul class="content">
<li>About Framework Manager</li>
<li>Framework Manager,Metadata Modeling</li>
<li>Creation of Interface and Usage</li>
<li>Creating Model & Namespace (Layers)</li>
<li>Importing Metadata</li>
<li>Creating Query Subjects & Query Items</li>
<li>Merging Query Subjects</li>
<li>Creating Relationships & Setting Cardinalities</li>
<li>Creating Parameter Maps & Macros</li>
<li>Creating of Model Filters,Prompts & Calculations</li>
<li>Publishing Package</li>
</ul>
<h4>Query Studio</h4>
<ul class="content">
<li>Introduction</li>
<li>About Ad-hoc Reports</li>
<li>Types of Report(List,Cross Tab,Chart Reports & Others)</li>
<li>Applying Filters, Prompts & Calculations</li>
<li>Sorting, Grouping, Sections & Aggregate Functions</li>
</ul>
<h4>Report Studio</h4>
<ul class="content">
<li>Type of Report Templates</li>
<li>Creating list, Cross Tab, Chart & Other Reports</li>
<li>Map Reports</li>
<li>Formatting Reports</li>
<li>Generating and Creating Prompt Page</li>
<li>Types of Prompts</li>
<li>Query Calculations & Layout Calculations</li>
<li>Static Filters and Dynamic Filters</li>
<li>Conditional Block</li>
<li>Conditional Formatting</li>
<li>Master Details</li>
<li>Cascading Prompt</li>
<li>HTML Items & Hyperlinks</li>
<li>Set Operators</li>
<li>Setting Burst Options</li>
<li>Setting Variables</li>
<li>Report Functions</li>
<li>Report Validation</li>
<li>Reports Run with Options</li>
</ul>
<h4>Analysis Studio</h4>
<ul class="content">
<li>Insert Data</li>
<li>Change the number of Visible Items</li>
<li>Nest Data </li>
<li>Replace Data </li>
<li>Sort Data</li>
<li>Explore Data</li>
<li>Change the measure</li>
<li>Drill down for Details</li>
<li>Hide Items</li>
<li>Insert a calculation</li>
<li>Save a custom set</li>
<li>Define a filter </li>
<li>Compare sets of data</li>
<li>Using Dynamic Context</li>
</ul>
<a href="#top" class="top" title="Top">&nbsp;</a>
</div>

</div>
<div id="body_content_bottom"></div>
</div>
</div>
<div class="clear"></div>
<div id="footer_wrapper">
<?php include("main_footer/footer.php") ?>
</div>
</div>
</body>
</html>
