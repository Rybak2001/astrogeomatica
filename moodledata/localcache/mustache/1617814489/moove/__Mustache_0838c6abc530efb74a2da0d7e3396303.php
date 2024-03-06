<?php

class __Mustache_0838c6abc530efb74a2da0d7e3396303 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="float-sm-right border p-2 mb-2">
';
        $buffer .= $indent . '<p>';
        $value = $this->resolveValue($context->find('groupselector'), $context);
        $buffer .= $value;
        $buffer .= '</p>
';
        $buffer .= $indent . '<form class="user-competency-course-navigation">
';
        $buffer .= $indent . '<input type="hidden" name="userid" value="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>
';
        $buffer .= $indent . '<input type="hidden" name="competencyid" value="';
        $value = $this->resolveValue($context->find('competencyid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>
';
        $buffer .= $indent . '<input type="hidden" name="courseid" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>
';
        // 'hasusers' section
        $value = $context->find('hasusers');
        $buffer .= $this->section773f4b1502a9307657352077edf30981($context, $indent, $value);
        $buffer .= $indent . '<br>
';
        // 'hascompetencies' section
        $value = $context->find('hascompetencies');
        $buffer .= $this->section5126f8d3c040648a9e5537c655970834($context, $indent, $value);
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section8414404f253f30e231be8dd265e2c757($context, $indent, $value);

        return $buffer;
    }

    private function section849fc9ab64bd7f0299a2f9a11a92657f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'jumptouser, tool_lp';
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
                
                $buffer .= 'jumptouser, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
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
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6fde2fb59ab605de32007b6b206123e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{fullname}}</option>
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
                
                $buffer .= $indent . '<option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section773f4b1502a9307657352077edf30981(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<span>
<label for="user-nav-{{uniqid}}" class="accesshide">{{#str}}jumptouser, tool_lp{{/str}}</label>
<select id="user-nav-{{uniqid}}" class="custom-select">
{{#users}}
<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{fullname}}</option>
{{/users}}
</select>
</span>
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
                
                $buffer .= $indent . '<span>
';
                $buffer .= $indent . '<label for="user-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="accesshide">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section849fc9ab64bd7f0299a2f9a11a92657f($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '<select id="user-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="custom-select">
';
                // 'users' section
                $value = $context->find('users');
                $buffer .= $this->sectionF6fde2fb59ab605de32007b6b206123e($context, $indent, $value);
                $buffer .= $indent . '</select>
';
                $buffer .= $indent . '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section349d07d4c1cf262eb79ab6360dd26b03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'jumptocompetency, tool_lp';
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
                
                $buffer .= 'jumptocompetency, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e366042b0b3fef5640cdc50f79e178c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{{shortname}}} {{idnumber}}</option>
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
                
                $buffer .= $indent . '<option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5126f8d3c040648a9e5537c655970834(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<span>
<label for="competency-nav-{{uniqid}}" class="accesshide">{{#str}}jumptocompetency, tool_lp{{/str}}</label>
<select id="competency-nav-{{uniqid}}" class="custom-select">
{{#competencies}}
<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{{shortname}}} {{idnumber}}</option>
{{/competencies}}
</select>
</span>
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
                
                $buffer .= $indent . '<span>
';
                $buffer .= $indent . '<label for="competency-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="accesshide">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section349d07d4c1cf262eb79ab6360dd26b03($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '<select id="competency-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="custom-select">
';
                // 'competencies' section
                $value = $context->find('competencies');
                $buffer .= $this->section5e366042b0b3fef5640cdc50f79e178c($context, $indent, $value);
                $buffer .= $indent . '</select>
';
                $buffer .= $indent . '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf2536acd478d396fc92a529033db61b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{# str }}jumptouser, tool_lp{{/ str }}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section849fc9ab64bd7f0299a2f9a11a92657f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c80082b3fbc9bee8359fcb995f53b5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    autocomplete.enhance(\'#user-nav-{{uniqid}}\', false, false, {{# quote }}{{# str }}jumptouser, tool_lp{{/ str }}{{/ quote }});
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
                
                $buffer .= $indent . '    autocomplete.enhance(\'#user-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', false, false, ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionDf2536acd478d396fc92a529033db61b($context, $indent, $value);
                $buffer .= ');
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA007812b521a3f42913a2449f19655aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{# str }}jumptocompetency, tool_lp{{/ str }}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section349d07d4c1cf262eb79ab6360dd26b03($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2b8ba8c2c2435e487bce58187148de0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    autocomplete.enhance(\'#competency-nav-{{uniqid}}\', false, false, {{# quote }}{{# str }}jumptocompetency, tool_lp{{/ str }}{{/ quote }});
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
                
                $buffer .= $indent . '    autocomplete.enhance(\'#competency-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', false, false, ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionA007812b521a3f42913a2449f19655aa($context, $indent, $value);
                $buffer .= ');
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8414404f253f30e231be8dd265e2c757(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/form-autocomplete\', \'tool_lp/user_competency_course_navigation\'], function(autocomplete, nav) {
    (new nav(\'#user-nav-{{uniqid}}\', \'#competency-nav-{{uniqid}}\', \'{{baseurl}}\', {{userid}}, {{competencyid}}, {{courseid}}));
{{#hasusers}}
    autocomplete.enhance(\'#user-nav-{{uniqid}}\', false, false, {{# quote }}{{# str }}jumptouser, tool_lp{{/ str }}{{/ quote }});
{{/hasusers}}
{{#hascompetencies}}
    autocomplete.enhance(\'#competency-nav-{{uniqid}}\', false, false, {{# quote }}{{# str }}jumptocompetency, tool_lp{{/ str }}{{/ quote }});
{{/hascompetencies}}

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
                
                $buffer .= $indent . 'require([\'core/form-autocomplete\', \'tool_lp/user_competency_course_navigation\'], function(autocomplete, nav) {
';
                $buffer .= $indent . '    (new nav(\'#user-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'#competency-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', ';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('competencyid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '));
';
                // 'hasusers' section
                $value = $context->find('hasusers');
                $buffer .= $this->section1c80082b3fbc9bee8359fcb995f53b5c($context, $indent, $value);
                // 'hascompetencies' section
                $value = $context->find('hascompetencies');
                $buffer .= $this->sectionB2b8ba8c2c2435e487bce58187148de0($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
