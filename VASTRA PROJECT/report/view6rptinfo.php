<?php

// Global variable for table object
$view6 = NULL;

//
// Table class for view6
//
class crview6 extends crTableBase {
	var $ShowGroupHeaderAsRow = FALSE;
	var $ShowCompactSummaryFooter = TRUE;
	var $user_fname;
	var $user_lname;
	var $email_id;
	var $contact_number;
	var $address;
	var $password;
	var $pincode;
	var $gender;
	var $city_name;
	var $city_id1;

	//
	// Table class constructor
	//
	function __construct() {
		global $ReportLanguage, $grLanguage;
		$this->TableVar = 'view6';
		$this->TableName = 'view6';
		$this->TableType = 'VIEW';
		$this->TableReportType = 'rpt';
		$this->SourcTableIsCustomView = FALSE;
		$this->DBID = 'DB';
		$this->ExportAll = FALSE;
		$this->ExportPageBreakCount = 0;

		// user_fname
		$this->user_fname = new crField('view6', 'view6', 'x_user_fname', 'user_fname', '`user_fname`', 200, EWR_DATATYPE_STRING, -1);
		$this->user_fname->Sortable = TRUE; // Allow sort
		$this->user_fname->DateFilter = "";
		$this->user_fname->SqlSelect = "";
		$this->user_fname->SqlOrderBy = "";
		$this->fields['user_fname'] = &$this->user_fname;

		// user_lname
		$this->user_lname = new crField('view6', 'view6', 'x_user_lname', 'user_lname', '`user_lname`', 200, EWR_DATATYPE_STRING, -1);
		$this->user_lname->Sortable = TRUE; // Allow sort
		$this->user_lname->DateFilter = "";
		$this->user_lname->SqlSelect = "";
		$this->user_lname->SqlOrderBy = "";
		$this->fields['user_lname'] = &$this->user_lname;

		// email_id
		$this->email_id = new crField('view6', 'view6', 'x_email_id', 'email_id', '`email_id`', 200, EWR_DATATYPE_STRING, -1);
		$this->email_id->Sortable = TRUE; // Allow sort
		$this->email_id->DateFilter = "";
		$this->email_id->SqlSelect = "";
		$this->email_id->SqlOrderBy = "";
		$this->fields['email_id'] = &$this->email_id;

		// contact_number
		$this->contact_number = new crField('view6', 'view6', 'x_contact_number', 'contact_number', '`contact_number`', 20, EWR_DATATYPE_NUMBER, -1);
		$this->contact_number->Sortable = TRUE; // Allow sort
		$this->contact_number->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->contact_number->DateFilter = "";
		$this->contact_number->SqlSelect = "";
		$this->contact_number->SqlOrderBy = "";
		$this->fields['contact_number'] = &$this->contact_number;

		// address
		$this->address = new crField('view6', 'view6', 'x_address', 'address', '`address`', 200, EWR_DATATYPE_STRING, -1);
		$this->address->Sortable = TRUE; // Allow sort
		$this->address->DateFilter = "";
		$this->address->SqlSelect = "";
		$this->address->SqlOrderBy = "";
		$this->fields['address'] = &$this->address;

		// password
		$this->password = new crField('view6', 'view6', 'x_password', 'password', '`password`', 200, EWR_DATATYPE_STRING, -1);
		$this->password->Sortable = TRUE; // Allow sort
		$this->password->DateFilter = "";
		$this->password->SqlSelect = "";
		$this->password->SqlOrderBy = "";
		$this->fields['password'] = &$this->password;

		// pincode
		$this->pincode = new crField('view6', 'view6', 'x_pincode', 'pincode', '`pincode`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->pincode->Sortable = TRUE; // Allow sort
		$this->pincode->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->pincode->DateFilter = "";
		$this->pincode->SqlSelect = "";
		$this->pincode->SqlOrderBy = "";
		$this->fields['pincode'] = &$this->pincode;

		// gender
		$this->gender = new crField('view6', 'view6', 'x_gender', 'gender', '`gender`', 200, EWR_DATATYPE_STRING, -1);
		$this->gender->Sortable = TRUE; // Allow sort
		$this->gender->DateFilter = "";
		$this->gender->SqlSelect = "";
		$this->gender->SqlOrderBy = "";
		$this->fields['gender'] = &$this->gender;

		// city_name
		$this->city_name = new crField('view6', 'view6', 'x_city_name', 'city_name', '`city_name`', 200, EWR_DATATYPE_STRING, -1);
		$this->city_name->Sortable = TRUE; // Allow sort
		$this->city_name->DateFilter = "";
		$this->city_name->SqlSelect = "";
		$this->city_name->SqlOrderBy = "";
		$this->fields['city_name'] = &$this->city_name;

		// city_id1
		$this->city_id1 = new crField('view6', 'view6', 'x_city_id1', 'city_id1', '`city_id1`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->city_id1->Sortable = TRUE; // Allow sort
		$this->city_id1->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->city_id1->DateFilter = "";
		$this->city_id1->SqlSelect = "";
		$this->city_id1->SqlOrderBy = "";
		$this->fields['city_id1'] = &$this->city_id1;
	}

	// Set Field Visibility
	function SetFieldVisibility($fldparm) {
		global $Security;
		return $this->$fldparm->Visible; // Returns original value
	}

	// Single column sort
	function UpdateSort(&$ofld) {
		if ($this->CurrentOrder == $ofld->FldName) {
			$sSortField = $ofld->FldExpression;
			$sLastSort = $ofld->getSort();
			if ($this->CurrentOrderType == "ASC" || $this->CurrentOrderType == "DESC") {
				$sThisSort = $this->CurrentOrderType;
			} else {
				$sThisSort = ($sLastSort == "ASC") ? "DESC" : "ASC";
			}
			$ofld->setSort($sThisSort);
			if ($ofld->GroupingFieldId == 0)
				$this->setDetailOrderBy($sSortField . " " . $sThisSort); // Save to Session
		} else {
			if ($ofld->GroupingFieldId == 0) $ofld->setSort("");
		}
	}

	// Get Sort SQL
	function SortSql() {
		$sDtlSortSql = $this->getDetailOrderBy(); // Get ORDER BY for detail fields from session
		$argrps = array();
		foreach ($this->fields as $fld) {
			if ($fld->getSort() <> "") {
				$fldsql = $fld->FldExpression;
				if ($fld->GroupingFieldId > 0) {
					if ($fld->FldGroupSql <> "")
						$argrps[$fld->GroupingFieldId] = str_replace("%s", $fldsql, $fld->FldGroupSql) . " " . $fld->getSort();
					else
						$argrps[$fld->GroupingFieldId] = $fldsql . " " . $fld->getSort();
				}
			}
		}
		$sSortSql = "";
		foreach ($argrps as $grp) {
			if ($sSortSql <> "") $sSortSql .= ", ";
			$sSortSql .= $grp;
		}
		if ($sDtlSortSql <> "") {
			if ($sSortSql <> "") $sSortSql .= ", ";
			$sSortSql .= $sDtlSortSql;
		}
		return $sSortSql;
	}

	// Table level SQL
	// From

	var $_SqlFrom = "";

	function getSqlFrom() {
		return ($this->_SqlFrom <> "") ? $this->_SqlFrom : "`view6`";
	}

	function SqlFrom() { // For backward compatibility
		return $this->getSqlFrom();
	}

	function setSqlFrom($v) {
		$this->_SqlFrom = $v;
	}

	// Select
	var $_SqlSelect = "";

	function getSqlSelect() {
		return ($this->_SqlSelect <> "") ? $this->_SqlSelect : "SELECT * FROM " . $this->getSqlFrom();
	}

	function SqlSelect() { // For backward compatibility
		return $this->getSqlSelect();
	}

	function setSqlSelect($v) {
		$this->_SqlSelect = $v;
	}

	// Where
	var $_SqlWhere = "";

	function getSqlWhere() {
		$sWhere = ($this->_SqlWhere <> "") ? $this->_SqlWhere : "";
		return $sWhere;
	}

	function SqlWhere() { // For backward compatibility
		return $this->getSqlWhere();
	}

	function setSqlWhere($v) {
		$this->_SqlWhere = $v;
	}

	// Group By
	var $_SqlGroupBy = "";

	function getSqlGroupBy() {
		return ($this->_SqlGroupBy <> "") ? $this->_SqlGroupBy : "";
	}

	function SqlGroupBy() { // For backward compatibility
		return $this->getSqlGroupBy();
	}

	function setSqlGroupBy($v) {
		$this->_SqlGroupBy = $v;
	}

	// Having
	var $_SqlHaving = "";

	function getSqlHaving() {
		return ($this->_SqlHaving <> "") ? $this->_SqlHaving : "";
	}

	function SqlHaving() { // For backward compatibility
		return $this->getSqlHaving();
	}

	function setSqlHaving($v) {
		$this->_SqlHaving = $v;
	}

	// Order By
	var $_SqlOrderBy = "";

	function getSqlOrderBy() {
		return ($this->_SqlOrderBy <> "") ? $this->_SqlOrderBy : "";
	}

	function SqlOrderBy() { // For backward compatibility
		return $this->getSqlOrderBy();
	}

	function setSqlOrderBy($v) {
		$this->_SqlOrderBy = $v;
	}

	// Select Aggregate
	var $_SqlSelectAgg = "";

	function getSqlSelectAgg() {
		return ($this->_SqlSelectAgg <> "") ? $this->_SqlSelectAgg : "SELECT * FROM " . $this->getSqlFrom();
	}

	function SqlSelectAgg() { // For backward compatibility
		return $this->getSqlSelectAgg();
	}

	function setSqlSelectAgg($v) {
		$this->_SqlSelectAgg = $v;
	}

	// Aggregate Prefix
	var $_SqlAggPfx = "";

	function getSqlAggPfx() {
		return ($this->_SqlAggPfx <> "") ? $this->_SqlAggPfx : "";
	}

	function SqlAggPfx() { // For backward compatibility
		return $this->getSqlAggPfx();
	}

	function setSqlAggPfx($v) {
		$this->_SqlAggPfx = $v;
	}

	// Aggregate Suffix
	var $_SqlAggSfx = "";

	function getSqlAggSfx() {
		return ($this->_SqlAggSfx <> "") ? $this->_SqlAggSfx : "";
	}

	function SqlAggSfx() { // For backward compatibility
		return $this->getSqlAggSfx();
	}

	function setSqlAggSfx($v) {
		$this->_SqlAggSfx = $v;
	}

	// Select Count
	var $_SqlSelectCount = "";

	function getSqlSelectCount() {
		return ($this->_SqlSelectCount <> "") ? $this->_SqlSelectCount : "SELECT COUNT(*) FROM " . $this->getSqlFrom();
	}

	function SqlSelectCount() { // For backward compatibility
		return $this->getSqlSelectCount();
	}

	function setSqlSelectCount($v) {
		$this->_SqlSelectCount = $v;
	}

	// Sort URL
	function SortUrl(&$fld) {
		global $grDashboardReport;
		return "";
	}

	// Setup lookup filters of a field
	function SetupLookupFilters($fld) {
		global $grLanguage;
		switch ($fld->FldVar) {
		}
	}

	// Setup AutoSuggest filters of a field
	function SetupAutoSuggestFilters($fld) {
		global $grLanguage;
		switch ($fld->FldVar) {
		}
	}

	// Table level events
	// Page Selecting event
	function Page_Selecting(&$filter) {

		// Enter your code here
	}

	// Page Breaking event
	function Page_Breaking(&$break, &$content) {

		// Example:
		//$break = FALSE; // Skip page break, or
		//$content = "<div style=\"page-break-after:always;\">&nbsp;</div>"; // Modify page break content

	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here
	}

	// Cell Rendered event
	function Cell_Rendered(&$Field, $CurrentValue, &$ViewValue, &$ViewAttrs, &$CellAttrs, &$HrefValue, &$LinkAttrs) {

		//$ViewValue = "xxx";
		//$ViewAttrs["style"] = "xxx";

	}

	// Row Rendered event
	function Row_Rendered() {

		// To view properties of field class, use:
		//var_dump($this-><FieldName>);

	}

	// User ID Filtering event
	function UserID_Filtering(&$filter) {

		// Enter your code here
	}

	// Load Filters event
	function Page_FilterLoad() {

		// Enter your code here
		// Example: Register/Unregister Custom Extended Filter
		//ewr_RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A', 'GetStartsWithAFilter'); // With function, or
		//ewr_RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A'); // No function, use Page_Filtering event
		//ewr_UnregisterFilter($this-><Field>, 'StartsWithA');

	}

	// Page Filter Validated event
	function Page_FilterValidated() {

		// Example:
		//$this->MyField1->SearchValue = "your search criteria"; // Search value

	}

	// Page Filtering event
	function Page_Filtering(&$fld, &$filter, $typ, $opr = "", $val = "", $cond = "", $opr2 = "", $val2 = "") {

		// Note: ALWAYS CHECK THE FILTER TYPE ($typ)! Example:
		//if ($typ == "dropdown" && $fld->FldName == "MyField") // Dropdown filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "extended" && $fld->FldName == "MyField") // Extended filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "popup" && $fld->FldName == "MyField") // Popup filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "custom" && $opr == "..." && $fld->FldName == "MyField") // Custom filter, $opr is the custom filter ID
		//	$filter = "..."; // Modify the filter

	}

	// Email Sending event
	function Email_Sending(&$Email, &$Args) {

		//var_dump($Email); var_dump($Args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		// Enter your code here
	}
}
?>
