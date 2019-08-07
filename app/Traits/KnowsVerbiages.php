<?php

    namespace App\Traits;

    trait KnowsVerbiages {

        use Verbiages\KnowsEnglishVerbiages;

        public function getVerbiages() {

            switch( \App::getLocale() ) {
                case 'en-GB':
                    return $this->getEnglishVerbiages();
                default:
                    return $this->getEnglishVerbiages();
            }

        }

    }
