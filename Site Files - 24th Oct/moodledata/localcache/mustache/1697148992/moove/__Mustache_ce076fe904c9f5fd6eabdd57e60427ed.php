<?php

class __Mustache_ce076fe904c9f5fd6eabdd57e60427ed extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="form-group row fitem" id="mod_learningmap_inlinehelp">
';
        $buffer .= $indent . '    <div class="col-md-3"></div>
';
        $buffer .= $indent . '    <div class="col-md-9">
';
        $buffer .= $indent . '        <a class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="right" data-content="<div class=&quot;no-overflow&quot;>';
        $value = $context->find('str');
        $buffer .= $this->sectionDb9989b9a1a1b30183edac6fde22dc0c($context, $indent, $value);
        $buffer .= '</div> " data-html="true" tabindex="0" data-trigger="focus">';
        $value = $context->find('str');
        $buffer .= $this->section1bc8a8c357d96b0baced496d85d45602($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        ';
        $value = $context->find('usecaselink');
        $buffer .= $this->section75c2b26cf9817512b4f721f66272f79b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionDb9989b9a1a1b30183edac6fde22dc0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' intro_help, learningmap';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' intro_help, learningmap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bc8a8c357d96b0baced496d85d45602(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editorhelp, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' editorhelp, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61418609470e684612436b26c7ebef25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usecasehelp, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' usecasehelp, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75c2b26cf9817512b4f721f66272f79b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{ usecaselink }}" class="btn btn-primary" target="_blank" rel="noreferrer noopener">{{#str}} usecasehelp, learningmap {{/str}}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('usecaselink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-primary" target="_blank" rel="noreferrer noopener">';
                $value = $context->find('str');
                $buffer .= $this->section61418609470e684612436b26c7ebef25($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
