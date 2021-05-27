<?php
session_start();
session_unset();
session_destroy();
echo "Uspesno ste se odjavili";
?>