<?php
    namespace lib;

    class System extends Router{
        private $url;
        private $exploder;
        private $area;
        private $controller;
        private $action;
        private $params;

        private function setUrl(){
            $this->url = isset($_GET['url']) ? $_GET['url'] : 'home/index';

        }

        private function setExploder (){
            $this->exploder = explode('/', $this->url);

        }

        private function setArea(){
            foreach ($this->routers as $i => $v){
                if ($this->onRaiz && $this->exploder[0] == $i){
                    $this->area = $v;
                    $this->onRaiz = false;
                }
            }

            $this->area = empty($this->area) ? $this->routerOnRaiz : $this->area;

            if (!defined('APP_AREA')){
                define ('APP_AREA', $this->area);
            }
        }

        private function setController(){
            $this->controller = $this->onRaiz ? $this->exploder[0] :
                (empty($this->exploder[1]) || is_null($this->exploder[1] || !isset($this->exploder[1])  ? 'home' : $this->exploder[1]));
        }

        private function setAction(){
            $this->action = $this->onRaiz ?
                (!isset($this->exploder[1]) || is_not($this->exploder[1]) || empty($this->exploder[1]) ? 'index' : $this->exploder[1]) :
                (!isset($this->exploder[2]) || is_not($this->exploder[2]) || empty($this->exploder[2]) ? 'index' : $this->exploder[2]);
        }

        private function setParams()
        {
            if ($this->onRaiz) {
                unset($this->exploder[0], $this->exploder[1]);
            } else {
                unset($this->exploder[0], $this->exploder[1], $this->exploder[2]);
            }

            ##  if (end($this->exploder) == ){

            //}
        }
    }
?>;
