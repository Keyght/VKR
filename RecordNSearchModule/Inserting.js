function hideAllTables() {
    document.getElementById('add_client').style.visibility = 'hidden';
    document.getElementById('add_tarif_name').style.visibility = 'hidden';
    document.getElementById('add_oper').style.visibility = 'hidden';
    document.getElementById('add_otchet').style.visibility = 'hidden';
    document.getElementById('add_plan').style.visibility = 'hidden';
    document.getElementById('predostav_uslug').style.visibility = 'hidden';
    document.getElementById('add_dogovor').style.visibility = 'hidden';
    document.getElementById('add_position').style.visibility = 'hidden';
    document.getElementById('add_tarif').style.visibility = 'hidden';
    document.getElementById('add_sotrudnik').style.visibility = 'hidden';
    document.getElementById('add_uslug_for_tarif').style.visibility = 'hidden';
    document.getElementById('add_uslug_oper').style.visibility = 'hidden';
    document.getElementById('add_usluga').style.visibility = 'hidden';
    document.getElementById('add_uchet').style.visibility = 'hidden';
    document.getElementById('add_user').style.visibility = 'hidden';
}
hideAllTables();

let a=document.getElementById('add_table').value;

var elt = document.getElementById('add_table');


document.getElementById('add_button').onclick=function () {

    //alert (elt.options[elt.selectedIndex].text);
    //alert(a);
    if (elt.options[elt.selectedIndex].text=="Клиент") {
        document.getElementById('name_add_table_client').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_client').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Название тарифа") {
        document.getElementById('name_add_table_tarif_name').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_tarif_name').style.visibility = 'visible';
    }

    if (elt.options[elt.selectedIndex].text=="Оператор") {
        document.getElementById('name_add_table_oper').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_oper').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Отчёты") {
        document.getElementById('name_add_table_otchet').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables()
        document.getElementById('add_otchet').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Планы") {
        document.getElementById('name_add_table_plan').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_plan').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Предоставление услуг") {
        document.getElementById('name_add_table_predostav_uslug').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('predostav_uslug').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Договор") {
        document.getElementById('name_add_table_dogovor').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_dogovor').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Должность") {
        document.getElementById('name_add_table_position').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_position').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Тариф") {
        document.getElementById('name_add_table_tarif').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_tarif').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Сотрудник") {
        document.getElementById('name_add_table_sotrudnik').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_sotrudnik').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Услуги для тарифа") {
        document.getElementById('name_add_table_uslug_tarif').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_uslug_for_tarif').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Услуги оператора") {
        document.getElementById('name_add_table_uslug_oper').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_uslug_oper').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Услуга") {
        document.getElementById('name_add_table_usluga').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_usluga').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Учёт рабочего времени") {
        document.getElementById('name_add_table_uchet').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_uchet').style.visibility = 'visible';
    }
    if (elt.options[elt.selectedIndex].text=="Пользователи") {
        document.getElementById('name_add_table_user').value = document.getElementById('add_table').options[elt.selectedIndex].value;
        hideAllTables();
        document.getElementById('add_user').style.visibility = 'visible';
    }
}