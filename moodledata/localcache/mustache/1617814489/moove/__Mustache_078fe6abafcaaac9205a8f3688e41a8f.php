<?php

class __Mustache_078fe6abafcaaac9205a8f3688e41a8f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('mod_assign/loading')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
