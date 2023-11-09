<?php

$routes = array(
    // array('nom de la page','Nom du controller','nom de la methode',tableau d'arguments))
    array('home','default','index'),
    array('contact','contact','contactMethode'),
    array('articles','article','listArticle'),
    array('article','article','show', ['id']),
    array('delete','article','delete', ['id']),
    array('add','article','add'),
    array('edit','article','edit', ['id'])
);









