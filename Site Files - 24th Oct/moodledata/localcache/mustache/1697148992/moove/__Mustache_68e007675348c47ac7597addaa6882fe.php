<?php

class __Mustache_68e007675348c47ac7597addaa6882fe extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('text');
        $buffer .= $this->section6fb405631a92ad3be360bafb0a6bab5d($context, $indent, $value);

        return $buffer;
    }

    private function section6aff5b39481d5d347daaeead1b7c9a7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restricted, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'restricted, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a0b1333d89f62899b59b2f2c1fc388d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge badge-info">{{#str}}restricted, core{{/str}}</span> {{{text}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="badge badge-info">';
                $value = $context->find('str');
                $buffer .= $this->section6aff5b39481d5d347daaeead1b7c9a7d($context, $indent, $value);
                $buffer .= '</span> ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fb405631a92ad3be360bafb0a6bab5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="availabilityinfo {{classes}}">
    {{^isrestricted}}
    <span class="badge badge-info">{{{text}}}</span>
    {{/isrestricted}}
    {{#isrestricted}}
    <span class="badge badge-info">{{#str}}restricted, core{{/str}}</span> {{{text}}}
    {{/isrestricted}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="availabilityinfo ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('isrestricted');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <span class="badge badge-info">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span>
';
                }
                $value = $context->find('isrestricted');
                $buffer .= $this->section6a0b1333d89f62899b59b2f2c1fc388d($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
