<?php

class __Mustache_743a632ad48bfdaf7c58a7abeb81f102 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('completiondisabled');
        $buffer .= $this->section4f9ea771eda363443b857f0f14250be9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '<div class="form-group row fitem" id="mod_learningmap_editor">
';
        $buffer .= $indent . '    <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
';
        $buffer .= $indent . '        <label class="d-inline word-break">';
        $value = $context->find('str');
        $buffer .= $this->sectionBc8207648c70b76c1f76953af08ce52e($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        <div class="form-label-addon d-flex align-items-center align-self-start">';
        $value = $this->resolveValue($context->find('help'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="col-md-9 form-inline align-items-start felement">
';
        $buffer .= $indent . '        <div class="learningmap-menubar container border-left border-top border-right border-dark">
';
        $buffer .= $indent . '            <div class="row m-1">
';
        $buffer .= $indent . '                <div class="col">
';
        $buffer .= $indent . '                    <label for="learningmap-color-place">';
        $value = $context->find('str');
        $buffer .= $this->sectionCf83cbbfcb16c9d03e0df9483f9bf6e8($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col border-right border-dark">
';
        $buffer .= $indent . '                    <input type="color" id="learningmap-color-place"/>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col">
';
        $buffer .= $indent . '                    <label for="learningmap-color-visited">';
        $value = $context->find('str');
        $buffer .= $this->sectionF92a45a98dac53cdf07024544569ee84($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col border-right border-dark">
';
        $buffer .= $indent . '                    <input type="color" id="learningmap-color-visited"/>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col">
';
        $buffer .= $indent . '                    <label for="learningmap-color-stroke">';
        $value = $context->find('str');
        $buffer .= $this->section3487d467989a44be18114b708bb983f7($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col border-right border-dark">
';
        $buffer .= $indent . '                    <input type="color" id="learningmap-color-stroke"/>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-sm text-center">
';
        $buffer .= $indent . '                    <i class="fa fa-cog" id="learningmap-advanced-settings-icon"></i>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="learningmap-editor-main">
';
        if ($partial = $this->mustache->loadPartial('mod_learningmap/activityselector')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('mod_learningmap/advancedsettings')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '            <div class="learningmap-mapcontainer learningmap-scaling-svg-container" id="learningmap-editor-map">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionFd4aa664601c9f251af95fea5adf65f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completiondisabled, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completiondisabled, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f9ea771eda363443b857f0f14250be9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="alert alert-danger row">{{#str}} completiondisabled, learningmap {{/str}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="alert alert-danger row">';
                $value = $context->find('str');
                $buffer .= $this->sectionFd4aa664601c9f251af95fea5adf65f9($context, $indent, $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc8207648c70b76c1f76953af08ce52e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' learningmap, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' learningmap, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf83cbbfcb16c9d03e0df9483f9bf6e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' places, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' places, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF92a45a98dac53cdf07024544569ee84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' visited, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' visited, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3487d467989a44be18114b708bb983f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' paths, learningmap ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' paths, learningmap ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
