<?php
 public function exportexcel()
{
	$application=$this->Adminmodel->fetchapplication();
	$html='<table><tr><td>Name</td><td>email</td><td>Mobile</td><td>Loan Type</td><td>Amount</td>';
	foreach ($application as $key) {
		$html.="<tr><td>$key->name</td><td>$key->email</td><td>$key->mobile</td><td>$key->loan_type</td><td>$key->amount</td><tr>";
	}
	$html.='<table>';
	header('Content-Type: application/xls');
	header('Content-Disposition: attachment;filename="Applications.xls"');
	echo $html;
}

?>