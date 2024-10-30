<?php
session_start();
session_destroy();  
header('Location: /midterm/loginSection/login.html');