<?php declare(strict_types=1);

namespace EventManagerTest\Service;

use Shopware\Storefront\Page\GenericPageLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Storefront\Event\ThemeCompilerEnrichScssVariablesEvent;
use Shopware\Core\Framework\Struct\ArrayEntity;

class MySubscriber implements EventSubscriberInterface
    {
        private $blbabla = "";
        public static function getSubscribedEvents(): array
        {
            return [
                GenericPageLoadedEvent::class => 'onAddVariables',
                ThemeCompilerEnrichScssVariablesEvent::class => 'onAddVariablesTwo'
            ];
        }
    
        public function onAddVariables(GenericPageLoadedEvent  $event): void
        {
            // Will render: $sass-plugin-header-bg-color: "#59ccff";
       
            

                    //declare an array
            $array = ['EvName' => 'QWERTZ'];

            //assign the array to the page
            $event->getPage()->assign($array);

            //add the array to the page as an extension
            $event->getPage()->addExtension('testPageExtension', new ArrayEntity($array));

            //assign the array to the context
            $event->getContext()->assign($array);

            //add the array to the context as an extension
            $event->getContext()->addExtension('testContextExtension', new ArrayEntity($array));

        }
        public function onAddVariablesTwo(ThemeCompilerEnrichScssVariablesEvent $event): void
        {
            $event->addVariable('sass-plugin-main-color', '#000000');
            $event->addVariable('sass-plugin-secondary-color', '#FFFFFF');
        }
        public function getEvName () {
            
            return $this->blbabla;
        }
    }