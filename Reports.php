<?php
error_reporting(0);

if(isset($_POST['create_rep'])) {
    if (!empty($_POST['rep_select'])) {
        $selected = $_POST['rep_select'];
        if ($selected == 'План_рабочей_нагрузки') {
            require('WorkingPlan.html');
        }
        if ($selected == 'Отчёт_рабочей_нагрузки') {
            require('WorkersReport.html');
        }
        if ($selected == 'План_продаж_услуг') {
            require('SellingPlan.html');
        }
        if ($selected == 'Отчёт_о_количестве_заключенных_договоров') {
            require('Contracts.html');
        }
        if ($selected == 'Отчёт_по_рентабельности_бизнеса') {
            require('Rent.html');
        }
        if ($selected == 'Отчёт_о_текущих_продажах') {
            require('ActualSells.html');
        }
    }
}