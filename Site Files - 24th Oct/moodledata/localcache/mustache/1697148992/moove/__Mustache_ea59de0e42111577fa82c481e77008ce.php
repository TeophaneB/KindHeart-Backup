<?php

class __Mustache_ea59de0e42111577fa82c481e77008ce extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid">
';
        $buffer .= $indent . '    <div class="row mb-2">
';
        $buffer .= $indent . '        <div class="col">';
        $value = $context->find('str');
        $buffer .= $this->sectionB677bb4603c97e8a2898c4f6f74731de($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '<form method="post" action="editdefaultcompletion.php" class="mform" id="theform">
';
        $buffer .= $indent . '    <div class="row mb-2">
';
        $buffer .= $indent . '        <div class="col">
';
        $buffer .= $indent . '            <input type="submit" value="';
        $value = $context->find('str');
        $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
        $buffer .= '" class="btn btn-primary" name="submitbutton" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section46ed94fc67d37db95d2c79bd289ec008($context, $indent, $value);
        $buffer .= '" disabled/>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="row mb-1">
';
        $buffer .= $indent . '        <div class="col-6">
';
        $buffer .= $indent . '            <input type="checkbox" class="mastercheck mr-1" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionE60299a98d737e5927b8b3cbb25b5973($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <label class="font-weight-bold">';
        $value = $context->find('str');
        $buffer .= $this->section0ec703e4b4acc6dde3c5dbe2a45a0068($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-6">
';
        $buffer .= $indent . '            <label class="font-weight-bold">';
        $value = $context->find('str');
        $buffer .= $this->section9722c348cbabcd3c31bb23e79176c20b($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <span>';
        $value = $this->resolveValue($context->find('helpicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <hr class="row">
';
        $buffer .= $indent . '    <div class="modules">
';
        $value = $context->find('modules');
        $buffer .= $this->sectionAed74ff742835da33e06694b13d3cfac($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <input type="hidden" name="id" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" />
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col">
';
        $buffer .= $indent . '            <input type="submit" value="';
        $value = $context->find('str');
        $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
        $buffer .= '" class="btn btn-primary" name="submitbutton" disabled/>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section185f5895886dc7bfbfeffcc01962c978($context, $indent, $value);

        return $buffer;
    }

    private function sectionB677bb4603c97e8a2898c4f6f74731de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'bulkactivitydetail, core_completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'bulkactivitydetail, core_completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46ed94fc67d37db95d2c79bd289ec008(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'updateactivities, completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'updateactivities, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE60299a98d737e5927b8b3cbb25b5973(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checkall, completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checkall, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ec703e4b4acc6dde3c5dbe2a45a0068(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activitieslabel, core_completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activitieslabel, core_completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9722c348cbabcd3c31bb23e79176c20b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion, core_completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion, core_completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d53b406e787633e3ce167e6976308bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'select, core_completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'select, core_completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8fb5ee069e15bcef5fbe7aa0478dec7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checkactivity, completion, {{{formattedname}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checkactivity, completion, ';
                $value = $this->resolveValue($context->find('formattedname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f19e8a0b5fac2bcfaddbfa85793e648(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{{completionstatus.icon}}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->findDot('completionstatus.icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2a238786ceb1843adfaaea3d4927d57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
             <div class="mb-1">
                <div class="row mb-1 row-fluid">
                    <div class="col-6">
                        <label class="accesshide" for="modtype_{{id}}">{{#str}}select, core_completion{{/str}} {{formattedname}}</label>
                        <input id="modtype_{{id}}" type="checkbox" class="mr-1" name="modids[]" value="{{id}}" aria-label="{{#str}}checkactivity, completion, {{{formattedname}}}{{/str}}">
                        <img class="iconlarge activityicon" src="{{icon}}" alt=" " role="presentation" />
                        <span>{{{formattedname}}}</span>
                    </div>
                    <div class="activity-completionstatus col-6">
                        <div class="col-sm-1 p-l-0">
                            {{#completionstatus.icon}}
                                {{{completionstatus.icon}}}
                            {{/completionstatus.icon}}
                            {{^completionstatus.icon}}
                                <span class="mr-3"></span>
                            {{/completionstatus.icon}}
                        </div>
                        <div class="col-sm-11 p-l-0">
                            <span class="text-muted muted">{{{completionstatus.string}}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="row">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '             <div class="mb-1">
';
                $buffer .= $indent . '                <div class="row mb-1 row-fluid">
';
                $buffer .= $indent . '                    <div class="col-6">
';
                $buffer .= $indent . '                        <label class="accesshide" for="modtype_';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section3d53b406e787633e3ce167e6976308bb($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('formattedname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>
';
                $buffer .= $indent . '                        <input id="modtype_';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" type="checkbox" class="mr-1" name="modids[]" value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section8fb5ee069e15bcef5fbe7aa0478dec7c($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <img class="iconlarge activityicon" src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt=" " role="presentation" />
';
                $buffer .= $indent . '                        <span>';
                $value = $this->resolveValue($context->find('formattedname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="activity-completionstatus col-6">
';
                $buffer .= $indent . '                        <div class="col-sm-1 p-l-0">
';
                $value = $context->findDot('completionstatus.icon');
                $buffer .= $this->section5f19e8a0b5fac2bcfaddbfa85793e648($context, $indent, $value);
                $value = $context->findDot('completionstatus.icon');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <span class="mr-3"></span>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-sm-11 p-l-0">
';
                $buffer .= $indent . '                            <span class="text-muted muted">';
                $value = $this->resolveValue($context->findDot('completionstatus.string'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <hr class="row">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAed74ff742835da33e06694b13d3cfac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#canmanage}}
             <div class="mb-1">
                <div class="row mb-1 row-fluid">
                    <div class="col-6">
                        <label class="accesshide" for="modtype_{{id}}">{{#str}}select, core_completion{{/str}} {{formattedname}}</label>
                        <input id="modtype_{{id}}" type="checkbox" class="mr-1" name="modids[]" value="{{id}}" aria-label="{{#str}}checkactivity, completion, {{{formattedname}}}{{/str}}">
                        <img class="iconlarge activityicon" src="{{icon}}" alt=" " role="presentation" />
                        <span>{{{formattedname}}}</span>
                    </div>
                    <div class="activity-completionstatus col-6">
                        <div class="col-sm-1 p-l-0">
                            {{#completionstatus.icon}}
                                {{{completionstatus.icon}}}
                            {{/completionstatus.icon}}
                            {{^completionstatus.icon}}
                                <span class="mr-3"></span>
                            {{/completionstatus.icon}}
                        </div>
                        <div class="col-sm-11 p-l-0">
                            <span class="text-muted muted">{{{completionstatus.string}}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="row">
            {{/canmanage}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('canmanage');
                $buffer .= $this->sectionD2a238786ceb1843adfaaea3d4927d57($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section185f5895886dc7bfbfeffcc01962c978(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
], function($) {
    $(\'.mastercheck\').click(function() {
        var checked = $(\'.mastercheck\').is(\':checked\');
        $(\'input[type=checkbox]\').each(function() {
            $(this).prop(\'checked\', checked);
            $(this).trigger(\'change\');
        });
    });

    $(\'input[type=checkbox][id^=modtype_]\').change(function() {
        if ($(this).is(\':checked\')) {
            $(\'[name=submitbutton]\').removeAttr(\'disabled\');
        } else {
            // Is this the last activity checkbox to be un-checked? If so, disable the edit button.
            var somechecked = false;
            $(\'input[type=checkbox][id^=modtype_]\').each(function() {
                if ($(this).is(\':checked\')) {
                    somechecked = true;
                    return false;
                }
                return true;
            });
            if (!somechecked) {
                $(\'[name=submitbutton]\').attr(\'disabled\', \'disabled\');
            }
        }
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '], function($) {
';
                $buffer .= $indent . '    $(\'.mastercheck\').click(function() {
';
                $buffer .= $indent . '        var checked = $(\'.mastercheck\').is(\':checked\');
';
                $buffer .= $indent . '        $(\'input[type=checkbox]\').each(function() {
';
                $buffer .= $indent . '            $(this).prop(\'checked\', checked);
';
                $buffer .= $indent . '            $(this).trigger(\'change\');
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'input[type=checkbox][id^=modtype_]\').change(function() {
';
                $buffer .= $indent . '        if ($(this).is(\':checked\')) {
';
                $buffer .= $indent . '            $(\'[name=submitbutton]\').removeAttr(\'disabled\');
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            // Is this the last activity checkbox to be un-checked? If so, disable the edit button.
';
                $buffer .= $indent . '            var somechecked = false;
';
                $buffer .= $indent . '            $(\'input[type=checkbox][id^=modtype_]\').each(function() {
';
                $buffer .= $indent . '                if ($(this).is(\':checked\')) {
';
                $buffer .= $indent . '                    somechecked = true;
';
                $buffer .= $indent . '                    return false;
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                return true;
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '            if (!somechecked) {
';
                $buffer .= $indent . '                $(\'[name=submitbutton]\').attr(\'disabled\', \'disabled\');
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
