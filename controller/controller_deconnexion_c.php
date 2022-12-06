<?php
// On détruit les variables de notre session
session_unset();
// On détruit notre session
session_destroy();

setcookie('email_cl','',time()-108000);
setcookie('motdePass_cl','',time()-108000);

//On redirige le visiteur vers la page d'accueil
header ('location:?c=emcx');

?>