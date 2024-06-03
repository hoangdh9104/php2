<?php

namespace Hoang9104\Setup\Commons;

use eftec\bladeone\BladeOne;

class Controller{
    protected function renderViewClient($view, $data){
        $templatePath = __DIR__ . '/../Views/Client';
        $conpiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath,$conpiledPath);

        echo  $blade->run($view, $data);
    }

    protected function renderViewAdmin($view, $data){
        $templatePath = __DIR__ . '/../Views/Admin';
        $conpiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath,$conpiledPath);

        echo  $blade->run($view, $data);
    }
}