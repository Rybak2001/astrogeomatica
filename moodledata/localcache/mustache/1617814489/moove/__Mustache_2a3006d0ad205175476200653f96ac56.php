<?php

class __Mustache_2a3006d0ad205175476200653f96ac56 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="border p-2 mb-2 evidence" data-region="evidence" data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'candelete' section
        $value = $context->find('candelete');
        $buffer .= $this->section3d23056475b222ab16b8392cfeec9ba9($context, $indent, $value);
        // 'actionuser' section
        $value = $context->find('actionuser');
        $buffer .= $this->section22a272d3d04c7f8aaae17d1ad1a68457($context, $indent, $value);
        $buffer .= $indent . '<strong><time datetime="';
        $value = $this->resolveValue($context->find('userdate'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('userdate'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</time></strong>
';
        // 'grade' section
        $value = $context->find('grade');
        $buffer .= $this->section5e627104e356d2fb083a18268aed8235($context, $indent, $value);
        $buffer .= $indent . '<p>';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</p>
';
        // 'note' section
        $value = $context->find('note');
        $buffer .= $this->section62b57be6892d9db68090129b3fc8cc68($context, $indent, $value);
        // 'url' section
        $value = $context->find('url');
        $buffer .= $this->section859112f5a03ab01348cfb4b119df05d2($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section348d985acaad80fc3fec95edc0685221($context, $indent, $value);

        return $buffer;
    }

    private function section164e871b9170fd2140595670ad4f9c08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete';
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
                
                $buffer .= 't/delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d23056475b222ab16b8392cfeec9ba9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="float-sm-right">
            <a href="#" data-action="delete-evidence">{{#pix}}t/delete{{/pix}}</a>
        </div>
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
                
                $buffer .= $indent . '        <div class="float-sm-right">
';
                $buffer .= $indent . '            <a href="#" data-action="delete-evidence">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section164e871b9170fd2140595670ad4f9c08($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22a272d3d04c7f8aaae17d1ad1a68457(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        {{> tool_lp/user_summary }}
    </div>
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
                
                $buffer .= $indent . '    <div>
';
                if ($partial = $this->mustache->loadPartial('tool_lp/user_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e627104e356d2fb083a18268aed8235(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <p><span class="badge badge-info">{{gradename}}</span></p>
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
                
                $buffer .= $indent . '    <p><span class="badge badge-info">';
                $value = $this->resolveValue($context->find('gradename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62b57be6892d9db68090129b3fc8cc68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <blockquote>{{note}}</blockquote>
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
                
                $buffer .= $indent . '    <blockquote>';
                $value = $this->resolveValue($context->find('note'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</blockquote>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section859112f5a03ab01348cfb4b119df05d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <p><a href="{{url}}" target="_blank" rel="noreferrer">{{url}}</a></p>
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
                
                $buffer .= $indent . '    <p><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" rel="noreferrer">';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section348d985acaad80fc3fec95edc0685221(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/evidence_delete\'], function(EvidenceDelete) {
    EvidenceDelete.register(\'[data-action="delete-evidence"]\', \'[data-region="evidence"]\');
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
                
                $buffer .= $indent . 'require([\'tool_lp/evidence_delete\'], function(EvidenceDelete) {
';
                $buffer .= $indent . '    EvidenceDelete.register(\'[data-action="delete-evidence"]\', \'[data-region="evidence"]\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
