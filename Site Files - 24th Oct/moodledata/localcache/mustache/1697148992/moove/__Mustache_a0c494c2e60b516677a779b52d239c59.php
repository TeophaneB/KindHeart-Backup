<?php

class __Mustache_a0c494c2e60b516677a779b52d239c59 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="learningmap-advanced-settings" class="card border border-dark" hidden>
';
        $buffer .= $indent . '    <div class="card-body">
';
        $buffer .= $indent . '        <div class="card-title alert alert-dark">';
        $value = $context->find('str');
        $buffer .= $this->section08aca5a9ee27512ae427b8d32509c71f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <button type="button" class="ml-2 mb-1 close" aria-label="Close" id="learningmap-advanced-settings-close">
';
        $buffer .= $indent . '                <span>&times;</span>
';
        $buffer .= $indent . '             </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="card-text">
';
        $value = $context->find('features');
        $buffer .= $this->sectionEbcdc1298da7890c9d80be9bdc186b40($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section08aca5a9ee27512ae427b8d32509c71f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' advancedsettings, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' advancedsettings, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbcdc1298da7890c9d80be9bdc186b40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="row border-top border-bottom border-light">
                <div class="col-10">
                    <label for="learningmap-advanced-setting-{{name}}">{{title}}</label>
                    {{>core/help_icon}}
                </div>
                <div class="col">
                    <input type="checkbox" id="learningmap-advanced-setting-{{name}}"/>
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="row border-top border-bottom border-light">
';
                $buffer .= $indent . '                <div class="col-10">
';
                $buffer .= $indent . '                    <label for="learningmap-advanced-setting-';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>
';
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col">
';
                $buffer .= $indent . '                    <input type="checkbox" id="learningmap-advanced-setting-';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"/>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
