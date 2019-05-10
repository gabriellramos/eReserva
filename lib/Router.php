<?php
    namespace lib;

    class Router{
        ##criar várias aplicações usando as rotas
        protected $routers = array(
            'website' => 'site',
            'admin' => 'admin'
        );

        protected  $routerOnRaiz = 'site';

        protected $onRaiz = true;
    }