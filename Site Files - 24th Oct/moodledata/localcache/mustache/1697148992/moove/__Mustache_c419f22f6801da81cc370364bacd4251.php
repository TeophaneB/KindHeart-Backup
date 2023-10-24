<?php

class __Mustache_c419f22f6801da81cc370364bacd4251 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="learningmap-activity-setting" class="card border-dark">
';
        $buffer .= $indent . '    <div class="card-body">
';
        $buffer .= $indent . '    <div class="card-title alert alert-dark">';
        $value = $context->find('str');
        $buffer .= $this->sectionB9fdb4f4d35c5f384120ed285a68e1cc($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="card-text">';
        $value = $context->find('str');
        $buffer .= $this->sectionA284ae135ad7c3e009c2e48ef069b871($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <select id="learningmap-activity-selector">
';
        $value = $context->find('sections');
        $buffer .= $this->section2f7c5606f96c3b547ff93e353122b6c8($context, $indent, $value);
        $buffer .= $indent . '    </select><br/>
';
        $buffer .= $indent . '    <div class="alert alert-warning mt-3" hidden id="learningmap-activity-hidden-warning">';
        $value = $context->find('str');
        $buffer .= $this->section97c649109e2259c90618b7fe3f48e90d($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    <input type="checkbox" id="learningmap-activity-starting"/> ';
        $value = $context->find('str');
        $buffer .= $this->section8b83a244706a4a279c893b2c8435f445($context, $indent, $value);
        $buffer .= '<br/>
';
        $buffer .= $indent . '    <input type="checkbox" id="learningmap-activity-target"/> ';
        $value = $context->find('str');
        $buffer .= $this->section82f1f5fbeedf3128692f66e6351ae665($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionB9fdb4f4d35c5f384120ed285a68e1cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editplace, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' editplace, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA284ae135ad7c3e009c2e48ef069b871(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activity, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activity, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2da0969fa1006adc90d973c2141dfc1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 30, {{{name}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' 30, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ca741b68bd9e5815f30209dcef91743(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocompletionenabled, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nocompletionenabled, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section034e8d8bb94b29b2d12f470cf4e9bb2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <option value="{{id}}" title="{{name}}" data-activity-hidden="{{hidden}}">{{#shortentext}} 30, {{{name}}} {{/shortentext}}</option>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-activity-hidden="';
                $value = $this->resolveValue($context->find('hidden'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('shortentext');
                $buffer .= $this->sectionA2da0969fa1006adc90d973c2141dfc1($context, $indent, $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97bc2f13a9d3ab82c387605b9672c4f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^completionenabled}}
        <option value="{{id}}" disabled class="learningmap-disabled-activity" title="{{#str}} nocompletionenabled, learningmap {{/str}}">{{#shortentext}} 30, {{{name}}} {{/shortentext}}</option>
        {{/completionenabled}}
        {{#completionenabled}}
        <option value="{{id}}" title="{{name}}" data-activity-hidden="{{hidden}}">{{#shortentext}} 30, {{{name}}} {{/shortentext}}</option>
        {{/completionenabled}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('completionenabled');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <option value="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" disabled class="learningmap-disabled-activity" title="';
                    $value = $context->find('str');
                    $buffer .= $this->section2ca741b68bd9e5815f30209dcef91743($context, $indent, $value);
                    $buffer .= '">';
                    $value = $context->find('shortentext');
                    $buffer .= $this->sectionA2da0969fa1006adc90d973c2141dfc1($context, $indent, $value);
                    $buffer .= '</option>
';
                }
                $value = $context->find('completionenabled');
                $buffer .= $this->section034e8d8bb94b29b2d12f470cf4e9bb2f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f7c5606f96c3b547ff93e353122b6c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <option disabled title="{{name}}">-- {{#shortentext}} 30, {{{name}}} {{/shortentext}} --</option>
        {{#coursemodules}}
        {{^completionenabled}}
        <option value="{{id}}" disabled class="learningmap-disabled-activity" title="{{#str}} nocompletionenabled, learningmap {{/str}}">{{#shortentext}} 30, {{{name}}} {{/shortentext}}</option>
        {{/completionenabled}}
        {{#completionenabled}}
        <option value="{{id}}" title="{{name}}" data-activity-hidden="{{hidden}}">{{#shortentext}} 30, {{{name}}} {{/shortentext}}</option>
        {{/completionenabled}}
        {{/coursemodules}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <option disabled title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">-- ';
                $value = $context->find('shortentext');
                $buffer .= $this->sectionA2da0969fa1006adc90d973c2141dfc1($context, $indent, $value);
                $buffer .= ' --</option>
';
                $value = $context->find('coursemodules');
                $buffer .= $this->section97bc2f13a9d3ab82c387605b9672c4f1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97c649109e2259c90618b7fe3f48e90d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hiddenactivitywarning, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hiddenactivitywarning, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b83a244706a4a279c893b2c8435f445(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' startingplace, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' startingplace, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82f1f5fbeedf3128692f66e6351ae665(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' targetplace, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' targetplace, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
