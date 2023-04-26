<?php
if (array_keys($_POST['type'])[0]=='create_client') {
    include('Client.html');
}
if (array_keys($_POST['type'])[0]=='create_dog') {
    include('Contract.html');
}