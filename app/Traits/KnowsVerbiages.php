<?php

    namespace App\Traits;

    trait KnowsVerbiages {

        public function getVerbiages () {
            return [

                [
                    'General info',
                    'fas fa-seedling',
                    function() {
                        return 'Some info';
                    }
                ],

                [
                    'Challenge 22+',
                    'fas fa-leaf',
                    function() {
                        return 'More info' + rand();
                    }
                ],

            ];
        }

    }
