<?php

class __Mustache_a20b19ee8e14c3b48ed6f51c670a2f46 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span>
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('profileurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6387cb15aebd6b56922548f3c3d246b3($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <img height="18" src="';
        $value = $this->resolveValue($context->find('profileimageurlsmall'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" alt="" role="presentation">
';
        $buffer .= $indent . '    <span>';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        // 'hasidentity' section
        $value = $context->find('hasidentity');
        $buffer .= $this->sectionDf5c4e70b11af735d67ceffaf398e697($context, $indent, $value);
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</span>
';

        return $buffer;
    }

    private function section6387cb15aebd6b56922548f3c3d246b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewprofile';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewprofile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf5c4e70b11af735d67ceffaf398e697(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span><small>{{identity}}</small></span>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span><small>';
                $value = $this->resolveValue($context->find('identity'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
