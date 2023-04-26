function hideAllTables() {
    document.getElementById('update_client').style.visibility = 'hidden';
    document.getElementById('update_tarif_name').style.visibility = 'hidden';
    document.getElementById('update_oper').style.visibility = 'hidden';
    document.getElementById('update_otchet').style.visibility = 'hidden';
    document.getElementById('update_plan').style.visibility = 'hidden';
    document.getElementById('update_predostav_uslug').style.visibility = 'hidden';
    document.getElementById('update_dogovor').style.visibility = 'hidden';
    document.getElementById('update_position').style.visibility = 'hidden';
    document.getElementById('update_tarif').style.visibility = 'hidden';
    document.getElementById('update_sotrudnik').style.visibility = 'hidden';
    document.getElementById('update_uslug_for_tarif').style.visibility = 'hidden';
    document.getElementById('update_uslug_oper').style.visibility = 'hidden';
    document.getElementById('update_usluga').style.visibility = 'hidden';
    document.getElementById('update_uchet').style.visibility = 'hidden';
    document.getElementById('update_user').style.visibility = 'hidden';
}
hideAllTables();

let a=document.getElementById('update_table').value;

var elt = document.getElementById('update_table');


document.getElementById('update_button').onclick=function () {

    //alert (elt.options[elt.selectedIndex].text);
    //alert(a);
    if (elt.options[elt.selectedIndex].text=="Клиент") {
        document.getElementById('name_update_table_client').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_client').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Название тарифа") {
        document.getElementById('name_update_table_tarif_name').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_tarif_name').style.visibility = 'visible';
    }

    if (elt.options[elt.selectedIndex].text=="Оператор") {
        document.getElementById('name_update_table_oper').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_oper').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Отчёты") {
        document.getElementById('name_update_table_otchet').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables()
        document.getElementById('update_otchet').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Планы") {
        document.getElementById('name_update_table_plan').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_plan').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Предоставление услуг") {
        document.getElementById('name_update_table_predostav_uslug').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_predostav_uslug').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Договор") {
        document.getElementById('name_update_table_dogovor').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_dogovor').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Должность") {
        document.getElementById('name_update_table_position').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_position').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Тариф") {
        document.getElementById('name_update_table_tarif').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_tarif').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Сотрудник") {
        document.getElementById('name_update_table_sotrudnik').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_sotrudnik').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Услуги для тарифа") {
        document.getElementById('name_update_table_uslug_tarif').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_uslug_for_tarif').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Услуги оператора") {
        document.getElementById('name_update_table_uslug_oper').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_uslug_oper').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Услуга") {
        document.getElementById('name_update_table_usluga').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_usluga').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Учёт рабочего времени") {
        document.getElementById('name_update_table_uchet').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_uchet').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Пользователи") {
        document.getElementById('name_update_table_user').value = document.getElementById('update_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('update_user').style.visibility = 'visible';
    }

}