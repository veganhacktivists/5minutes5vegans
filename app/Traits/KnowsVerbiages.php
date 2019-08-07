<?php

    namespace App\Traits;

    trait KnowsVerbiages {

        use Verbiages\KnowsEnglishVerbiages;

        public function getVerbiages() {

            switch( \App::getLocale() ) {
                case 'en-GB':
                default:
                    return $this->getEnglishVerbiages();
            }

        }

    }
