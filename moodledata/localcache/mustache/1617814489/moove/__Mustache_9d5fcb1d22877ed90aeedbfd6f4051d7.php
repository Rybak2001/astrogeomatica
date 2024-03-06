<?php

class __Mustache_9d5fcb1d22877ed90aeedbfd6f4051d7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<button
';
        $buffer .= $indent . '    class="btn btn-secondary"
';
        $buffer .= $indent . '    data-grade-action="view"
';
        $buffer .= $indent . '    data-contextid="';
        $value = $this->resolveValue($context->find('contextid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-cmid="';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-group="';
        $value = $this->resolveValue($context->find('groupid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-grading-component="';
        $value = $this->resolveValue($context->find('gradingcomponent'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-grading-component-subtype="';
        $value = $this->resolveValue($context->find('gradingcomponentsubtype'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-gradable-itemtype="forum"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section09d1380b75b0f7025590a8168b931a98($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</button>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionE183ba6a624571254fa10f8b18aa36ce($context, $indent, $value);

        return $buffer;
    }

    private function section09d1380b75b0f7025590a8168b931a98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewgrades, forum';
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
                
                $buffer .= 'viewgrades, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE183ba6a624571254fa10f8b18aa36ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'mod_forum/grades/grader\'], function(Grader) {
    Grader.registerLaunchListeners();
    });
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
                
                $buffer .= $indent . '    require([\'mod_forum/grades/grader\'], function(Grader) {
';
                $buffer .= $indent . '    Grader.registerLaunchListeners();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
