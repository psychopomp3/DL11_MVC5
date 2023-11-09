<?php

$routes = array(
    // array('nom de la page','Nom du controller','nom de la methode',tableau d'arguments))
    array('home','default','index'),
    array('contact','contact','contactMethode'),
    //
    array('articles','article','listArticle'),
    array('article','article','show', ['id']),
    array('delete','article','delete', ['id']),
    array('add','article','add'),
    array('edit','article','edit', ['id']),
    array('dashboard','article','dashArticleMeth'),
    //
    // array('users','article','listArticle'),
    array('profile','user','profile', ['id']),
    array('vire','user','delete', ['id']),
    array('new','user','add'),
    array('change','user','edit', ['id']),
    array('listing','user','dashUserMeth')
);
?>









