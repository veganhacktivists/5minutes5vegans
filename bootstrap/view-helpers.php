<?php

    function getCountry( $properties ) {
        return substr( $properties['regional'], 3 );
    }

    function getCurrentCountry() {
        return getCountry( LaravelLocalization::getSupportedLocales()[ LaravelLocalization::getCurrentLocale() ] );
    }

    function getCurrentCountryName() {
        return LaravelLocalization::getCurrentLocaleName();
    }
