<?php

class __Mustache_d72e98d95cb215b97cbbebe4773c20aa extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<svg id="learningmap-svgmap-';
        $value = $this->resolveValue($context->find('mapid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="learningmap-scaling-svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1" baseProfile="full">
';
        if ($partial = $this->mustache->loadPartial('mod_learningmap/svgdefs')) {
            $buffer .= $partial->renderInternal($context);
        }
        if ($partial = $this->mustache->loadPartial('mod_learningmap/cssskeleton')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<g id="backgroundGroup">
';
        $buffer .= $indent . '    <image x="0" y="0" width="800" height="600" class="learningmap-background-image" id="learningmap-background-image" xlink:href=""></image>
';
        $buffer .= $indent . '</g>
';
        $buffer .= $indent . '<g id="pathsGroup">
';
        $buffer .= $indent . '</g>
';
        $buffer .= $indent . '<g id="placesGroup">
';
        $buffer .= $indent . '</g>
';
        $buffer .= $indent . '</svg>';

        return $buffer;
    }
}
