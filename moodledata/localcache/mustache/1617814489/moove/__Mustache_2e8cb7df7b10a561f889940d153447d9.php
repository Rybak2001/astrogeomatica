<?php

class __Mustache_2e8cb7df7b10a561f889940d153447d9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<a href="#" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4dc2969fe327847dcf0db7484579a6df($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        // 'grade' section
        $value = $context->find('grade');
        $buffer .= $this->sectionD007cb69d03be036e17f23880ce14c51($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'grade' inverted section
        $value = $context->find('grade');
        if (empty($value)) {
            
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section25fada2b1804ee047c3f3d0ce0a1adde($context, $indent, $value);
        }
        $buffer .= '
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function section4dc2969fe327847dcf0db7484579a6df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usercompetencysummary, report_competency';
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
                
                $buffer .= 'usercompetencysummary, report_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD007cb69d03be036e17f23880ce14c51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{gradename}}';
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
                
                $value = $this->resolveValue($context->find('gradename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25fada2b1804ee047c3f3d0ce0a1adde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notrated, report_competency';
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
                
                $buffer .= 'notrated, report_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
