<?php

namespace Foo;

class UglyCode {

    private $_underscored_Variable;

    public function waw_ugly_function_name($Badvariable = null)
    {
        if ($Badvariable !== null && is_string($Badvariable) && $Badvariable === "Really long line") {
            $Badvariable = '';
        }

        return array($Badvariable);
    }
}
