<?php

class __Mustache_26e71a83e9f402e62924c0713994df74 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="forumsearch">
';
        $buffer .= $indent . '    <form action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="form-inline">
';
        $buffer .= $indent . '        <input type="hidden" name="id" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="input-group">
';
        $buffer .= $indent . '            <div class="input-group-prepend">
';
        $value = $context->find('helpicon');
        $buffer .= $this->section2729f8701c7613ee81710a969814c747($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <label class="sr-only" for="search">';
        $value = $context->find('str');
        $buffer .= $this->sectionA3cc1a6d42680c1ad3eb5c6ab7d0ecf1($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <input id="search" name="search" type="text" class="form-control" value="';
        $value = $this->resolveValue($context->find('query'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="input-group-append">
';
        $buffer .= $indent . '                <button class="btn btn-secondary" id="searchforums" type="submit">';
        $value = $context->find('str');
        $buffer .= $this->section0b4d54006e1889486717387ab67606fc($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2729f8701c7613ee81710a969814c747(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>core/help_icon}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3cc1a6d42680c1ad3eb5c6ab7d0ecf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'search, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b4d54006e1889486717387ab67606fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchforums, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchforums, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
