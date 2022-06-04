<?php
$number = "11977998923";
$msg = '"'.$_POST['msg-submit'].'"';

header:"https://api.whatsapp.com/send?phone=".$number."&text=".$msg;