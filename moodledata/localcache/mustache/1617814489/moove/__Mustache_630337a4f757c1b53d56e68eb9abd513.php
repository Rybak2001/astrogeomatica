<?php

class __Mustache_630337a4f757c1b53d56e68eb9abd513 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'usercompetencysummary' section
        $value = $context->find('usercompetencysummary');
        $buffer .= $this->section81fefcff155372c749b92219f33d4f33($context, $indent, $value);

        return $buffer;
    }

    private function section78cdb70ca53871b413799606279f7a8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> tool_lp/competency_summary }}
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
                
                if ($partial = $this->mustache->loadPartial('tool_lp/competency_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe460458e977857e77ad8689174cc476(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activities, tool_lp';
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
                
                $buffer .= 'activities, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5773bade75c78d5f039ebbaae2f03f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="list-inline-item"><a href="{{url}}"><img src="{{iconurl}}"> {{name}} </a></li>
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
                
                $buffer .= $indent . '            <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"> ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' </a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa4a803c089c26a0a2019bf1954e8a7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noactivities, tool_lp';
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
                
                $buffer .= 'noactivities, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9f8116799aecab2a637bf9b97e3b17a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'user';
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
                
                $buffer .= 'user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16eabfab00f9c87729b27bafb97b0403(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <dt>{{#str}}user{{/str}}</dt>
        <dd>
            {{>tool_lp/user_summary}}
        </dd>
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
                
                $buffer .= $indent . '        <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC9f8116799aecab2a637bf9b97e3b17a($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '        <dd>
';
                if ($partial = $this->mustache->loadPartial('tool_lp/user_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </dd>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0bc1e4e43f05642454f92118a093674(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#user}}
        <dt>{{#str}}user{{/str}}</dt>
        <dd>
            {{>tool_lp/user_summary}}
        </dd>
        {{/user}}
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
                
                // 'user' section
                $value = $context->find('user');
                $buffer .= $this->section16eabfab00f9c87729b27bafb97b0403($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23036d282edc5182a9c76f9ecc4307a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userplans, competency';
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
                
                $buffer .= 'userplans, competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF182fad0eb01f0350c53edfb807d2b34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="list-inline-item"><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></li>
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
                
                $buffer .= $indent . '            <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/plan.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e8fb6129006fd3f95287f62a7894bfd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nouserplanswithcompetency, competency';
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
                
                $buffer .= 'nouserplanswithcompetency, competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9cb39ef02758f9319f0f5cb5f287e99b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'proficient, tool_lp';
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
                
                $buffer .= 'proficient, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcd8df39475c954582aec8b93a5f17d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'badge-success';
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
                
                $buffer .= 'badge-success';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section557c631e6928e961f89583a6c7d31920(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rating, tool_lp';
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
                
                $buffer .= 'rating, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4598df9143a50b00e16d46dc4bb3672e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rate, tool_lp';
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
                
                $buffer .= 'rate, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fa92ca127faf09515e7834995203659(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <button class="btn btn-secondary" id="rate_{{uniqid}}">{{#str}}rate, tool_lp{{/str}}</button>
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
                
                $buffer .= $indent . '                <button class="btn btn-secondary" id="rate_';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4598df9143a50b00e16d46dc4bb3672e($context, $indent, $value);
                $buffer .= '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6936087753334b10d4dd1f20da6447c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <dt>{{#str}}proficient, tool_lp{{/str}}</dt>
        <dd>
            <span class="badge {{#proficiency}}badge-success{{/proficiency}}{{^proficiency}}badge-danger{{/proficiency}} float-left">
                {{proficiencyname}}
            </span>
        </dd>
        <dt>{{#str}}rating, tool_lp{{/str}}</dt>
        <dd>{{gradename}}
            {{#cangrade}}
                <button class="btn btn-secondary" id="rate_{{uniqid}}">{{#str}}rate, tool_lp{{/str}}</button>
            {{/cangrade}}
        </dd>
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
                
                $buffer .= $indent . '        <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9cb39ef02758f9319f0f5cb5f287e99b($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '        <dd>
';
                $buffer .= $indent . '            <span class="badge ';
                // 'proficiency' section
                $value = $context->find('proficiency');
                $buffer .= $this->sectionBcd8df39475c954582aec8b93a5f17d5($context, $indent, $value);
                // 'proficiency' inverted section
                $value = $context->find('proficiency');
                if (empty($value)) {
                    
                    $buffer .= 'badge-danger';
                }
                $buffer .= ' float-left">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('proficiencyname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        </dd>
';
                $buffer .= $indent . '        <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section557c631e6928e961f89583a6c7d31920($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '        <dd>';
                $value = $this->resolveValue($context->find('gradename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                // 'cangrade' section
                $value = $context->find('cangrade');
                $buffer .= $this->section2fa92ca127faf09515e7834995203659($context, $indent, $value);
                $buffer .= $indent . '        </dd>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a6e7b45bdafab34ec3e7b16d8191b65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chooserating, tool_lp';
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
                
                $buffer .= 'chooserating, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd5f73660b105507b21a5b72ac4a2a95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\', \'tool_lp/grade_user_competency_inline\', \'tool_lp/user_competency_info\'], function($, mod, info) {

            var inlineGrader = new mod(\'#rate_{{uniqid}}\', \'{{competency.scaleid}}\', \'{{competency.competency.id}}\', \'{{user.id}}\', \'\', \'{{course.id}}\', \'{{#str}}chooserating, tool_lp{{/str}}\');
            var competencyElement = $(\'[data-region-id="{{uniqid}}"]\');

            var displayuser = (\'{{displayuser}}\' == \'true\') ? true : false;
            var infoReloader = new info(competencyElement, \'{{competency.competency.id}}\', \'{{user.id}}\', \'\', \'{{course.id}}\', displayuser);

            inlineGrader.on(\'competencyupdated\', infoReloader.reload.bind(infoReloader));
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
                
                $buffer .= $indent . '        require([\'jquery\', \'tool_lp/grade_user_competency_inline\', \'tool_lp/user_competency_info\'], function($, mod, info) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            var inlineGrader = new mod(\'#rate_';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'';
                $value = $this->resolveValue($context->findDot('competency.scaleid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'';
                $value = $this->resolveValue($context->findDot('competency.competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'';
                $value = $this->resolveValue($context->findDot('user.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'\', \'';
                $value = $this->resolveValue($context->findDot('course.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4a6e7b45bdafab34ec3e7b16d8191b65($context, $indent, $value);
                $buffer .= '\');
';
                $buffer .= $indent . '            var competencyElement = $(\'[data-region-id="';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"]\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            var displayuser = (\'';
                $value = $this->resolveValue($context->find('displayuser'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\' == \'true\') ? true : false;
';
                $buffer .= $indent . '            var infoReloader = new info(competencyElement, \'';
                $value = $this->resolveValue($context->findDot('competency.competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'';
                $value = $this->resolveValue($context->findDot('user.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'\', \'';
                $value = $this->resolveValue($context->findDot('course.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', displayuser);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            inlineGrader.on(\'competencyupdated\', infoReloader.reload.bind(infoReloader));
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa19a28041fe677dbd2a836eb875c468(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>tool_lp/comment_area}}
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
                
                if ($partial = $this->mustache->loadPartial('tool_lp/comment_area')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC91c98f63519842d794b50855392379d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#canpostorhascomments}}
            {{>tool_lp/comment_area}}
        {{/canpostorhascomments}}
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
                
                // 'canpostorhascomments' section
                $value = $context->find('canpostorhascomments');
                $buffer .= $this->sectionEa19a28041fe677dbd2a836eb875c468($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC50967ddfc194652bfd421a12cb86d42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'evidence, tool_lp';
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
                
                $buffer .= 'evidence, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section577744619b3c15c002c68beff93cd0a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> tool_lp/evidence_summary }}
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
                
                if ($partial = $this->mustache->loadPartial('tool_lp/evidence_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEcec8460f04915287e4538d0355bdb8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noevidence, tool_lp';
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
                
                $buffer .= 'noevidence, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81fefcff155372c749b92219f33d4f33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-region="user-competency-full-info" data-node="user-competency" data-competencyid="{{usercompetency.competencyid}}" data-userid="{{usercompetency.userid}}" data-region-id="{{uniqid}}">
<div data-region="competency-summary">
    {{#competency}}
        {{> tool_lp/competency_summary }}
    {{/competency}}
    <dl>
        <dt>{{#str}}activities, tool_lp{{/str}}</dt>
        <dd data-region="coursecompetencyactivities">
        <p>
        <ul class="inline list-inline">
        {{#coursemodules}}
            <li class="list-inline-item"><a href="{{url}}"><img src="{{iconurl}}"> {{name}} </a></li>
        {{/coursemodules}}
        {{^coursemodules}}
            <li class="list-inline-item"><span class="alert">{{#str}}noactivities, tool_lp{{/str}}</span></li>
        {{/coursemodules}}
        </ul>
        </p>
        </dd>
        {{#displayuser}}
        {{#user}}
        <dt>{{#str}}user{{/str}}</dt>
        <dd>
            {{>tool_lp/user_summary}}
        </dd>
        {{/user}}
        {{/displayuser}}
        <dt>{{#str}}userplans, competency{{/str}}</dt>
        <dd>
        <p>
        <ul class="inline list-inline">
        {{#plans}}
            <li class="list-inline-item"><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></li>
        {{/plans}}
        {{^plans}}
            <li>{{#str}}nouserplanswithcompetency, competency{{/str}}</li>
        {{/plans}}
        </ul>
        </p>
        </dd>
        {{#usercompetencycourse}}
        <dt>{{#str}}proficient, tool_lp{{/str}}</dt>
        <dd>
            <span class="badge {{#proficiency}}badge-success{{/proficiency}}{{^proficiency}}badge-danger{{/proficiency}} float-left">
                {{proficiencyname}}
            </span>
        </dd>
        <dt>{{#str}}rating, tool_lp{{/str}}</dt>
        <dd>{{gradename}}
            {{#cangrade}}
                <button class="btn btn-secondary" id="rate_{{uniqid}}">{{#str}}rate, tool_lp{{/str}}</button>
            {{/cangrade}}
        </dd>
        {{/usercompetencycourse}}
        {{#js}}
        require([\'jquery\', \'tool_lp/grade_user_competency_inline\', \'tool_lp/user_competency_info\'], function($, mod, info) {

            var inlineGrader = new mod(\'#rate_{{uniqid}}\', \'{{competency.scaleid}}\', \'{{competency.competency.id}}\', \'{{user.id}}\', \'\', \'{{course.id}}\', \'{{#str}}chooserating, tool_lp{{/str}}\');
            var competencyElement = $(\'[data-region-id="{{uniqid}}"]\');

            var displayuser = (\'{{displayuser}}\' == \'true\') ? true : false;
            var infoReloader = new info(competencyElement, \'{{competency.competency.id}}\', \'{{user.id}}\', \'\', \'{{course.id}}\', displayuser);

            inlineGrader.on(\'competencyupdated\', infoReloader.reload.bind(infoReloader));
        });

        {{/js}}
    </dl>
    {{#commentarea}}
        {{#canpostorhascomments}}
            {{>tool_lp/comment_area}}
        {{/canpostorhascomments}}
    {{/commentarea}}
    <dl data-region="evidence-listing">
        <dt>{{#str}}evidence, tool_lp{{/str}}</dt>
        <dd>
            {{#evidence}}
                {{> tool_lp/evidence_summary }}
            {{/evidence}}
            {{^evidence}}
                <p>{{#str}}noevidence, tool_lp{{/str}}</p>
            {{/evidence}}
        </dd>
    </dl>
</div>
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
                
                $buffer .= $indent . '<div data-region="user-competency-full-info" data-node="user-competency" data-competencyid="';
                $value = $this->resolveValue($context->findDot('usercompetency.competencyid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-userid="';
                $value = $this->resolveValue($context->findDot('usercompetency.userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-region-id="';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '<div data-region="competency-summary">
';
                // 'competency' section
                $value = $context->find('competency');
                $buffer .= $this->section78cdb70ca53871b413799606279f7a8f($context, $indent, $value);
                $buffer .= $indent . '    <dl>
';
                $buffer .= $indent . '        <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDe460458e977857e77ad8689174cc476($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '        <dd data-region="coursecompetencyactivities">
';
                $buffer .= $indent . '        <p>
';
                $buffer .= $indent . '        <ul class="inline list-inline">
';
                // 'coursemodules' section
                $value = $context->find('coursemodules');
                $buffer .= $this->sectionA5773bade75c78d5f039ebbaae2f03f6($context, $indent, $value);
                // 'coursemodules' inverted section
                $value = $context->find('coursemodules');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li class="list-inline-item"><span class="alert">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFa4a803c089c26a0a2019bf1954e8a7d($context, $indent, $value);
                    $buffer .= '</span></li>
';
                }
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        </p>
';
                $buffer .= $indent . '        </dd>
';
                // 'displayuser' section
                $value = $context->find('displayuser');
                $buffer .= $this->sectionF0bc1e4e43f05642454f92118a093674($context, $indent, $value);
                $buffer .= $indent . '        <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section23036d282edc5182a9c76f9ecc4307a9($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '        <dd>
';
                $buffer .= $indent . '        <p>
';
                $buffer .= $indent . '        <ul class="inline list-inline">
';
                // 'plans' section
                $value = $context->find('plans');
                $buffer .= $this->sectionF182fad0eb01f0350c53edfb807d2b34($context, $indent, $value);
                // 'plans' inverted section
                $value = $context->find('plans');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li>';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4e8fb6129006fd3f95287f62a7894bfd($context, $indent, $value);
                    $buffer .= '</li>
';
                }
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        </p>
';
                $buffer .= $indent . '        </dd>
';
                // 'usercompetencycourse' section
                $value = $context->find('usercompetencycourse');
                $buffer .= $this->section6936087753334b10d4dd1f20da6447c2($context, $indent, $value);
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->sectionFd5f73660b105507b21a5b72ac4a2a95($context, $indent, $value);
                $buffer .= $indent . '    </dl>
';
                // 'commentarea' section
                $value = $context->find('commentarea');
                $buffer .= $this->sectionC91c98f63519842d794b50855392379d($context, $indent, $value);
                $buffer .= $indent . '    <dl data-region="evidence-listing">
';
                $buffer .= $indent . '        <dt>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC50967ddfc194652bfd421a12cb86d42($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '        <dd>
';
                // 'evidence' section
                $value = $context->find('evidence');
                $buffer .= $this->section577744619b3c15c002c68beff93cd0a7($context, $indent, $value);
                // 'evidence' inverted section
                $value = $context->find('evidence');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <p>';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionEcec8460f04915287e4538d0355bdb8b($context, $indent, $value);
                    $buffer .= '</p>
';
                }
                $buffer .= $indent . '        </dd>
';
                $buffer .= $indent . '    </dl>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
