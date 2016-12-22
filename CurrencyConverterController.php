<?php
    class CurrencyConverterController {

    private $currencyConverter;

    

    public function __construct(CurrencyConverter $currencyConverter) {

        $this->currencyConverter = $currencyConverter;

    }

    

    public function convert($request) {

        if (isset($request['currency']) && isset($request['amount'])) {

            $this->currencyConverter->set($request['amount'], $request['currency']);

        }

    }

}

?>