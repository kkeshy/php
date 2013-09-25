<?php error_reporting(E_ALL ^E_NOTICE);
if ($_POST['addNew']) {
    $pageTitle = 'Форма за въвеждане';
} else {
    $pageTitle = 'Разходи';
}

if ($_POST['delete']) { // итриване
	include 'delete.php';
}

include 'includes/header.php';

if (!$_POST['addNew']) { // ако не е натиснат бутона Нов разход
   include 'includes/add_expense_button.php';
   
   if ($_POST['filter']) {
        include 'filter.php';
   } elseif ($_POST['start_date'] && $_POST['end_date']) {
       include 'date_filter.php';
   } else {
        include 'default.php';
   }
} else {
    include 'form.php';
}

include 'includes/footer.php';
?>
