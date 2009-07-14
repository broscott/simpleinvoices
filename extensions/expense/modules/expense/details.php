<?php
//stop the direct browsing to this file - let index.php handle which files get displayed
checkLogin();

#get the invoice id
$expense_id = $_GET['id'];

$expense = expense::get($expense_id);
$detail = expense::detail();

$taxes = getActiveTaxes();
$tax_selected = getTaxRate($product['default_tax_id']);

$smarty -> assign('expense',$expense);
$smarty -> assign('detail',$detail);
$smarty -> assign('taxes',$taxes);
$smarty -> assign('tax_selected',$tax_selected);
$smarty -> assign('customFieldLabel',$customFieldLabel);

$smarty -> assign('pageActive', 'product_manage');
$subPageActive = $_GET['action'] =="view"  ? "product_view" : "product_edit" ;
$smarty -> assign('subPageActive', $subPageActive);
$smarty -> assign('active_tab', '#product');
?>
