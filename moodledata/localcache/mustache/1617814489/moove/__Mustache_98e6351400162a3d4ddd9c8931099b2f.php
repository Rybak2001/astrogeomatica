<?php

class __Mustache_98e6351400162a3d4ddd9c8931099b2f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'enabletemplate' section
        $value = $context->find('enabletemplate');
        $buffer .= $this->sectionE8b4d66a67fbfe0f55a00758c6a2df11($context, $indent, $value);
        // 'enabletemplate' inverted section
        $value = $context->find('enabletemplate');
        if (empty($value)) {
            
            $buffer .= $indent . '    <table border="0" cellpadding="3" cellspacing="0" class="forumpost">
';
            $buffer .= $indent . '        <tr class="header">
';
            $buffer .= $indent . '            <td width="35" valign="top" class="picture left">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('authorpicture'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '            </td>
';
            $buffer .= $indent . '            <td class="topic ';
            // 'firstpost' section
            $value = $context->find('firstpost');
            $buffer .= $this->section9434d5771c4657afdd045de3a17d59b3($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                <div class="subject">
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->find('subject'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <div class="author">
';
            $buffer .= $indent . '                    ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionFcd58ca261cecf8714ba7e7181aa2658($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </td>
';
            $buffer .= $indent . '        </tr>
';
            $buffer .= $indent . '        <tr>
';
            $buffer .= $indent . '            <td class="left side" valign="top">
';
            // 'grouppicture' section
            $value = $context->find('grouppicture');
            $buffer .= $this->section9e6f0beda7f48007c4eaba0fe06566a0($context, $indent, $value);
            // 'grouppicture' inverted section
            $value = $context->find('grouppicture');
            if (empty($value)) {
                
                $buffer .= $indent . '                    &nbsp;
';
            }
            $buffer .= $indent . '            </td>
';
            $buffer .= $indent . '            <td class="content">
';
            // 'attachments' section
            $value = $context->find('attachments');
            $buffer .= $this->section5d58dfd295a87b202fe470a73db4c7a0($context, $indent, $value);
            $buffer .= $indent . '                ';
            // 'messageheader' section
            $value = $context->find('messageheader');
            $buffer .= $this->section4c7a2427944d152271e9b207ae5b5bc4($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('message'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                ';
            // 'messagefooter' section
            $value = $context->find('messagefooter');
            $buffer .= $this->section3d07429dfb1e3e69f43a37cc2fb05a81($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="commands">
';
            // 'firstpost' inverted section
            $value = $context->find('firstpost');
            if (empty($value)) {
                
                $buffer .= $indent . '                        <a target="_blank" href="';
                $value = $this->resolveValue($context->find('parentpostlink'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section08cb9137143cabe4f717457d440b51b2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                // 'canreply' section
                $value = $context->find('canreply');
                $buffer .= $this->section70bd94aa16c1bfbebf65025fdbd19cc9($context, $indent, $value);
            }
            // 'canreply' section
            $value = $context->find('canreply');
            $buffer .= $this->sectionF4282cd1bedb8d0d27d8af05220cb4b8($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="link">
';
            $buffer .= $indent . '                    <a target="_blank" href="';
            $value = $this->resolveValue($context->find('permalink'), $context);
            $buffer .= $value;
            $buffer .= '">
';
            $buffer .= $indent . '                        ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section9717eb53ad3b343a31f7f2350a5c3b05($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </a>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </td>
';
            $buffer .= $indent . '        </tr>
';
            $buffer .= $indent . '    </table>
';
        }

        return $buffer;
    }

    private function section0b3fc9d6b74450bab8b8f568d6a8b31c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div style="width: 100%;clear: both;">
                            <table width="100%">
                                <tbody>
                                <tr>
                                    <td>
                                        {{{ messageheader }}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
                
                $buffer .= $indent . '                        <div style="width: 100%;clear: both;">
';
                $buffer .= $indent . '                            <table width="100%">
';
                $buffer .= $indent . '                                <tbody>
';
                $buffer .= $indent . '                                <tr>
';
                $buffer .= $indent . '                                    <td>
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('messageheader'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </td>
';
                $buffer .= $indent . '                                </tr>
';
                $buffer .= $indent . '                                </tbody>
';
                $buffer .= $indent . '                            </table>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf82068d8f9a0bff58e4fcddc6f68203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span style="margin-right: 20px;">{{{ grouppicture }}}</span>';
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
                
                $buffer .= '<span style="margin-right: 20px;">';
                $value = $this->resolveValue($context->find('grouppicture'), $context);
                $buffer .= $value;
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbd1b83c0a2f2a46248b7e178e0d40c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <tr>
                                <td style="color: #999; padding: 5px 20px; border-top: 1px solid #e9e9e9;">
                                    {{# grouppicture }}<span style="margin-right: 20px;">{{{ grouppicture }}}</span>{{/ grouppicture }}
                                    {{{ attachments }}}
                                </td>
                            </tr>
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
                
                $buffer .= $indent . '                            <tr>
';
                $buffer .= $indent . '                                <td style="color: #999; padding: 5px 20px; border-top: 1px solid #e9e9e9;">
';
                $buffer .= $indent . '                                    ';
                // 'grouppicture' section
                $value = $context->find('grouppicture');
                $buffer .= $this->sectionEf82068d8f9a0bff58e4fcddc6f68203($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('attachments'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                </td>
';
                $buffer .= $indent . '                            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08cb9137143cabe4f717457d440b51b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' parent, forum ';
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
                
                $buffer .= ' parent, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA59b6fc4afe547eb8065750683fe8c86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' | ';
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
                
                $buffer .= ' | ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD469667440754f9f1f6f320a0cf89269(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reply, forum ';
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
                
                $buffer .= ' reply, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb5ac286f67e4eb8430d7c87cf5cb03c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <tr>
                                <td style="padding: 10px 20px; border-top: 1px solid #e9e9e9;">
                                    {{^ firstpost }}
                                        <a target="_blank" href="{{{ parentpostlink }}}"> {{# str }} parent, forum {{/ str }}</a>
                                        {{# canreply }} | {{/ canreply }}
                                    {{/ firstpost }}

                                    <a target="_blank" href="{{{ replylink }}}">{{# str }} reply, forum {{/ str }}</a>
                                </td>
                            </tr>
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
                
                $buffer .= $indent . '                            <tr>
';
                $buffer .= $indent . '                                <td style="padding: 10px 20px; border-top: 1px solid #e9e9e9;">
';
                // 'firstpost' inverted section
                $value = $context->find('firstpost');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                        <a target="_blank" href="';
                    $value = $this->resolveValue($context->find('parentpostlink'), $context);
                    $buffer .= $value;
                    $buffer .= '"> ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section08cb9137143cabe4f717457d440b51b2($context, $indent, $value);
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                                        ';
                    // 'canreply' section
                    $value = $context->find('canreply');
                    $buffer .= $this->sectionA59b6fc4afe547eb8065750683fe8c86($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <a target="_blank" href="';
                $value = $this->resolveValue($context->find('replylink'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD469667440754f9f1f6f320a0cf89269($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                </td>
';
                $buffer .= $indent . '                            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6239dd54c1dadeaf5476db1874bed6fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>';
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
                
                $buffer .= '<a target=\'_blank\' href=\'';
                $value = $this->resolveValue($context->find('authorlink'), $context);
                $buffer .= $value;
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('authorfullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE63a53b1895395e45a30eff532a83baf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ postdate }}';
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
                
                $value = $this->resolveValue($context->find('postdate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC30739db3da51e1797051b27570127d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bynameondate, forum, { "name": {{# quote }}<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>{{/ quote }}, "date": {{# quote }}{{ postdate }}{{/ quote }} } ';
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
                
                $buffer .= ' bynameondate, forum, { "name": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section6239dd54c1dadeaf5476db1874bed6fc($context, $indent, $value);
                $buffer .= ', "date": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionE63a53b1895395e45a30eff532a83baf($context, $indent, $value);
                $buffer .= ' } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9717eb53ad3b343a31f7f2350a5c3b05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postincontext, forum ';
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
                
                $buffer .= ' postincontext, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18736ac7a7e3e335e3a7c814340188f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' forums, forum ';
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
                
                $buffer .= ' forums, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section294a2a444d5ba15f6bc8509563ba8c7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    &raquo;
                                    <a target="_blank" href="{{{ discussionlink }}}">{{{ discussionname }}}</a>
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
                
                $buffer .= $indent . '                                    &raquo;
';
                $buffer .= $indent . '                                    <a target="_blank" href="';
                $value = $this->resolveValue($context->find('discussionlink'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('discussionname'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section448c28d4adec345f45acad90b8f7b3eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <tr>
                                    <td>
                                        {{{ messagefooter }}}
                                    </td>
                                </tr>
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
                
                $buffer .= $indent . '                                <tr>
';
                $buffer .= $indent . '                                    <td>
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('messagefooter'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </td>
';
                $buffer .= $indent . '                                </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8b4d66a67fbfe0f55a00758c6a2df11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <style>
        @media only screen {
            body {
                margin: 0;
                -webkit-font-smoothing: antialiased;
                width:100% !important;
                background: #f6f6f6;
                -webkit-text-size-adjust:none;
            }
        }
    </style>

    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f6f6f6" style="font-family: Arial, sans-serif;">
        <tbody>
        <tr>
            <td></td>
            <td style="display: block !important;max-width: 600px !important;margin: 0 auto !important;clear: both !important;" width="600">
                <div style="max-width: 600px;margin: 0 auto;display: block;padding:20px;">
                    {{# messageheader }}
                        <div style="width: 100%;clear: both;">
                            <table width="100%">
                                <tbody>
                                <tr>
                                    <td>
                                        {{{ messageheader }}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    {{/ messageheader }}
                    <table class="main" width="100%" cellpadding="0" cellspacing="0" style="background: #fff;border: 1px solid #e9e9e9;border-radius: 3px;">
                        <tr>
                            <td style="font-size: 18px; color: #fff; font-weight: 500; padding: 20px; text-align: center; border-radius: 3px 3px 0 0; background: #265876;">
                                {{{ subject }}}
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 16px; color: #999; font-weight: 500; padding: 20px;">
                                {{{ message }}}
                            </td>
                        </tr>
                        {{# attachments }}
                            <tr>
                                <td style="color: #999; padding: 5px 20px; border-top: 1px solid #e9e9e9;">
                                    {{# grouppicture }}<span style="margin-right: 20px;">{{{ grouppicture }}}</span>{{/ grouppicture }}
                                    {{{ attachments }}}
                                </td>
                            </tr>
                        {{/ attachments }}
                        {{# canreply }}
                            <tr>
                                <td style="padding: 10px 20px; border-top: 1px solid #e9e9e9;">
                                    {{^ firstpost }}
                                        <a target="_blank" href="{{{ parentpostlink }}}"> {{# str }} parent, forum {{/ str }}</a>
                                        {{# canreply }} | {{/ canreply }}
                                    {{/ firstpost }}

                                    <a target="_blank" href="{{{ replylink }}}">{{# str }} reply, forum {{/ str }}</a>
                                </td>
                            </tr>
                        {{/ canreply }}
                        <tr>
                            <td style="color: #000; background-color: #ebebeb; font-size: 12px; padding: 5px 20px; border-top: 1px solid #e9e9e9;">
                                {{# str }} bynameondate, forum, { "name": {{# quote }}<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>{{/ quote }}, "date": {{# quote }}{{ postdate }}{{/ quote }} } {{/ str }} <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #000; background-color: #ebebeb; font-size: 12px; padding: 5px 20px;">
                                <a target="_blank" href="{{{ permalink }}}"> {{# str }} postincontext, forum {{/ str }} </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #000; background-color: #ebebeb; font-size: 12px; padding: 5px 20px;">
                                <a target="_blank" href="{{{ courselink }}}">{{{ coursename }}}</a>
                                &raquo;
                                <a target="_blank" href="{{{ forumindexlink }}}">{{# str }} forums, forum {{/ str }}</a>
                                &raquo;
                                <a target="_blank" href="{{{ forumviewlink }}}">{{{ forumname }}}</a>
                                {{# showdiscussionname }}
                                    &raquo;
                                    <a target="_blank" href="{{{ discussionlink }}}">{{{ discussionname }}}</a>
                                {{/ showdiscussionname }}
                            </td>
                        </tr>
                    </table>

                    <div style="width: 100%;clear: both; padding: 20px 0;">
                        <table width="100%">
                            <tbody>
                            <tr>
                                <td style="font-size: 16px; color: #999; font-weight: bold; text-align: center; padding: 0 0 20px;">{{{sitename}}}</td>
                            </tr>
                            {{# messagefooter }}
                                <tr>
                                    <td>
                                        {{{ messagefooter }}}
                                    </td>
                                </tr>
                            {{/ messagefooter }}
                            </tbody>
                        </table>
                    </div>
                </div>
            </td>
            <td></td>
        </tr>
        </tbody>
    </table>
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
                
                $buffer .= $indent . '    <style>
';
                $buffer .= $indent . '        @media only screen {
';
                $buffer .= $indent . '            body {
';
                $buffer .= $indent . '                margin: 0;
';
                $buffer .= $indent . '                -webkit-font-smoothing: antialiased;
';
                $buffer .= $indent . '                width:100% !important;
';
                $buffer .= $indent . '                background: #f6f6f6;
';
                $buffer .= $indent . '                -webkit-text-size-adjust:none;
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    </style>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f6f6f6" style="font-family: Arial, sans-serif;">
';
                $buffer .= $indent . '        <tbody>
';
                $buffer .= $indent . '        <tr>
';
                $buffer .= $indent . '            <td></td>
';
                $buffer .= $indent . '            <td style="display: block !important;max-width: 600px !important;margin: 0 auto !important;clear: both !important;" width="600">
';
                $buffer .= $indent . '                <div style="max-width: 600px;margin: 0 auto;display: block;padding:20px;">
';
                // 'messageheader' section
                $value = $context->find('messageheader');
                $buffer .= $this->section0b3fc9d6b74450bab8b8f568d6a8b31c($context, $indent, $value);
                $buffer .= $indent . '                    <table class="main" width="100%" cellpadding="0" cellspacing="0" style="background: #fff;border: 1px solid #e9e9e9;border-radius: 3px;">
';
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td style="font-size: 18px; color: #fff; font-weight: 500; padding: 20px; text-align: center; border-radius: 3px 3px 0 0; background: #265876;">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td style="font-size: 16px; color: #999; font-weight: 500; padding: 20px;">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                // 'attachments' section
                $value = $context->find('attachments');
                $buffer .= $this->sectionEbd1b83c0a2f2a46248b7e178e0d40c6($context, $indent, $value);
                // 'canreply' section
                $value = $context->find('canreply');
                $buffer .= $this->sectionDb5ac286f67e4eb8430d7c87cf5cb03c($context, $indent, $value);
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td style="color: #000; background-color: #ebebeb; font-size: 12px; padding: 5px 20px; border-top: 1px solid #e9e9e9;">
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC30739db3da51e1797051b27570127d3($context, $indent, $value);
                $buffer .= ' <br>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td style="color: #000; background-color: #ebebeb; font-size: 12px; padding: 5px 20px;">
';
                $buffer .= $indent . '                                <a target="_blank" href="';
                $value = $this->resolveValue($context->find('permalink'), $context);
                $buffer .= $value;
                $buffer .= '"> ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9717eb53ad3b343a31f7f2350a5c3b05($context, $indent, $value);
                $buffer .= ' </a>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td style="color: #000; background-color: #ebebeb; font-size: 12px; padding: 5px 20px;">
';
                $buffer .= $indent . '                                <a target="_blank" href="';
                $value = $this->resolveValue($context->find('courselink'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                                &raquo;
';
                $buffer .= $indent . '                                <a target="_blank" href="';
                $value = $this->resolveValue($context->find('forumindexlink'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section18736ac7a7e3e335e3a7c814340188f4($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                &raquo;
';
                $buffer .= $indent . '                                <a target="_blank" href="';
                $value = $this->resolveValue($context->find('forumviewlink'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('forumname'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                // 'showdiscussionname' section
                $value = $context->find('showdiscussionname');
                $buffer .= $this->section294a2a444d5ba15f6bc8509563ba8c7b($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                    </table>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div style="width: 100%;clear: both; padding: 20px 0;">
';
                $buffer .= $indent . '                        <table width="100%">
';
                $buffer .= $indent . '                            <tbody>
';
                $buffer .= $indent . '                            <tr>
';
                $buffer .= $indent . '                                <td style="font-size: 16px; color: #999; font-weight: bold; text-align: center; padding: 0 0 20px;">';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '                            </tr>
';
                // 'messagefooter' section
                $value = $context->find('messagefooter');
                $buffer .= $this->section448c28d4adec345f45acad90b8f7b3eb($context, $indent, $value);
                $buffer .= $indent . '                            </tbody>
';
                $buffer .= $indent . '                        </table>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td></td>
';
                $buffer .= $indent . '        </tr>
';
                $buffer .= $indent . '        </tbody>
';
                $buffer .= $indent . '    </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9434d5771c4657afdd045de3a17d59b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'starter';
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
                
                $buffer .= 'starter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcd58ca261cecf8714ba7e7181aa2658(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bynameondate, forum, {
                        "name": {{# quote }}<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>{{/ quote }},
                        "date": {{# quote }}{{ postdate }}{{/ quote }}
                        } ';
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
                
                $buffer .= ' bynameondate, forum, {
';
                $buffer .= $indent . '                        "name": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section6239dd54c1dadeaf5476db1874bed6fc($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '                        "date": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionE63a53b1895395e45a30eff532a83baf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e6f0beda7f48007c4eaba0fe06566a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{ grouppicture }}}
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
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('grouppicture'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d58dfd295a87b202fe470a73db4c7a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="attachments">
                        {{{ attachments }}}
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
                
                $buffer .= $indent . '                    <div class="attachments">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('attachments'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c7a2427944d152271e9b207ae5b5bc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{ messageheader }}}';
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
                
                $value = $this->resolveValue($context->find('messageheader'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d07429dfb1e3e69f43a37cc2fb05a81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{ messagefooter }}}';
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
                
                $value = $this->resolveValue($context->find('messagefooter'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70bd94aa16c1bfbebf65025fdbd19cc9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            |
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
                
                $buffer .= $indent . '                            |
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4282cd1bedb8d0d27d8af05220cb4b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a target="_blank" href="{{{ replylink }}}">
                            {{# str }} reply, forum {{/ str }}
                        </a>
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
                
                $buffer .= $indent . '                        <a target="_blank" href="';
                $value = $this->resolveValue($context->find('replylink'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD469667440754f9f1f6f320a0cf89269($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
