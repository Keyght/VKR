function hideAllTables() {
    document.getElementById('delete_client').style.visibility = 'hidden';
    document.getElementById('delete_tarif_name').style.visibility = 'hidden';
    document.getElementById('delete_oper').style.visibility = 'hidden';
    document.getElementById('delete_otchet').style.visibility = 'hidden';
    document.getElementById('delete_plan').style.visibility = 'hidden';
    document.getElementById('delete_uslug').style.visibility = 'hidden';
    document.getElementById('delete_dogovor').style.visibility = 'hidden';
    document.getElementById('delete_position').style.visibility = 'hidden';
    document.getElementById('delete_tarif').style.visibility = 'hidden';
    document.getElementById('delete_sotrudnik').style.visibility = 'hidden';
    document.getElementById('delete_uslug_for_tarif').style.visibility = 'hidden';
    document.getElementById('delete_uslug_oper').style.visibility = 'hidden';
    document.getElementById('delete_usluga').style.visibility = 'hidden';
    document.getElementById('delete_uchet').style.visibility = 'hidden';
    document.getElementById('delete_user').style.visibility = 'hidden';
}
hideAllTables();



let a=document.getElementById('delete_table').value;

const choosePointer = document.getElementById('delete_table');


document.getElementById('delete_button').onclick=function () {

    //alert (elt.options[elt.selectedIndex].text);
    //alert(a);
    if (choosePointer.options[choosePointer.selectedIndex].text=="Клиент") {
        document.getElementById('name_delete_table_client').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_client').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Название тарифа") {
        document.getElementById('name_delete_table_tarif_name').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_tarif_name').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Оператор") {
        document.getElementById('name_delete_table_oper').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_oper').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Отчёты") {
        document.getElementById('name_delete_table_otchet').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables()
        document.getElementById('delete_otchet').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Планы") {
        document.getElementById('name_delete_table_plan').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_plan').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Предоставление услуг") {
        document.getElementById('name_delete_table_predostav_uslug').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_uslug').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Договор") {
        document.getElementById('name_delete_table_dogovor').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_dogovor').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Должность") {
        document.getElementById('name_delete_table_position').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_position').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Тариф") {
        document.getElementById('name_delete_table_tarif').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_tarif').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Сотрудник") {
        document.getElementById('name_delete_table_sotrudnik').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_sotrudnik').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Услуги для тарифа") {
        document.getElementById('name_delete_table_uslug_tarif').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_uslug_for_tarif').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Услуги оператора") {
        document.getElementById('name_delete_table_uslug_oper').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_uslug_oper').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Услуга") {
        document.getElementById('name_delete_table_usluga').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_usluga').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Учёт рабочего времени") {
        document.getElementById('name_delete_table_uchet').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_uchet').style.visibility = 'visible';
    }
    if (choosePointer.options[choosePointer.selectedIndex].text=="Пользователи") {
        document.getElementById('name_delete_table_user').value = document.getElementById('delete_table').options[choosePointer.selectedIndex].value;
        hideAllTables();
        document.getElementById('delete_user').style.visibility = 'visible';
    }
}