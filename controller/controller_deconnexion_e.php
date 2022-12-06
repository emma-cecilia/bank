<?php
// On détruit les variables de notre session
session_unset();
// On détruit notre session
session_destroy();

setcookie('email_emp','',time()-108000);
setcookie('motdePass_emp','',time()-108000);

//On redirige le visiteur vers la page d'accueil
header ('location:?c=cnxem');

?>