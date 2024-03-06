<?php

class __Mustache_89e40273713565c83c70550d4c5a5900 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="relatedcompetencies">
';
        $buffer .= $indent . '<p>
';
        $buffer .= $indent . '    <strong>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section73b50f72a6857e27900b874112021ea2($context, $indent, $value);
        $buffer .= ':</strong>
';
        $buffer .= $indent . '</p>
';
        $buffer .= $indent . '<ul>
';
        // 'relatedcompetencies' section
        $value = $context->find('relatedcompetencies');
        $buffer .= $this->section7c2482fb5a1d12b23682d2ca2116dc77($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        // 'relatedcompetencies' inverted section
        $value = $context->find('relatedcompetencies');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section84824cffa229db21fa3db5b4a9d2ca22($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section7657092d23e6efc54f71bd8bdf6481a3($context, $indent, $value);

        return $buffer;
    }

    private function section73b50f72a6857e27900b874112021ea2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'crossreferencedcompetencies, tool_lp';
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
                
                $buffer .= 'crossreferencedcompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
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
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1245898a9c4802f609e8da4fe72227c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core, {{#str}}delete{{/str}}';
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
                
                $buffer .= 't/delete, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe9b1b3a8887859bc1eb060d172a08bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="float-sm-right">
                    <a href="#" data-action="deleterelation" id="id-related-{{id}}">{{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
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
                
                $buffer .= $indent . '                <div class="float-sm-right">
';
                $buffer .= $indent . '                    <a href="#" data-action="deleterelation" id="id-related-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section1245898a9c4802f609e8da4fe72227c2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb1afb0e3d959123293fa5498bbe54d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{idnumber}}';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c2482fb5a1d12b23682d2ca2116dc77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li>
            {{#showdeleterelatedaction}}
                <div class="float-sm-right">
                    <a href="#" data-action="deleterelation" id="id-related-{{id}}">{{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
                </div>
            {{/showdeleterelatedaction}}
            <p>
                <a href="#" data-action="competency-dialogue" data-id="{{id}}">
                    {{{shortname}}}{{#idnumber}} {{idnumber}}{{/idnumber}}
                </a>
            </p>
        </li>
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
                
                $buffer .= $indent . '        <li>
';
                // 'showdeleterelatedaction' section
                $value = $context->find('showdeleterelatedaction');
                $buffer .= $this->sectionAe9b1b3a8887859bc1eb060d172a08bb($context, $indent, $value);
                $buffer .= $indent . '            <p>
';
                $buffer .= $indent . '                <a href="#" data-action="competency-dialogue" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= $value;
                // 'idnumber' section
                $value = $context->find('idnumber');
                $buffer .= $this->sectionDb1afb0e3d959123293fa5498bbe54d1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </p>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84824cffa229db21fa3db5b4a9d2ca22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocrossreferencedcompetencies, tool_lp';
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
                
                $buffer .= 'nocrossreferencedcompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7657092d23e6efc54f71bd8bdf6481a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/competencydialogue\'], function(Compdialogue) {
    Compdialogue.init();
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
                
                $buffer .= $indent . 'require([\'tool_lp/competencydialogue\'], function(Compdialogue) {
';
                $buffer .= $indent . '    Compdialogue.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
