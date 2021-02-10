<?php

namespace App\logging;

use Monolog\Formatter\LineFormatter;

class simpleFormater{

    public function __invoke($logger){
     foreach ($logger->getHandlers() as $handler){
         $handler->setFormatter(
             new LineFormatter('[%datetime%]: %message% %channel% %context%')
         );
     }

    }
}
