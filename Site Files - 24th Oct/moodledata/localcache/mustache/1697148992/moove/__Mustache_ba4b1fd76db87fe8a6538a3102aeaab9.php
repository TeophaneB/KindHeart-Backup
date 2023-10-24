<?php

class __Mustache_ba4b1fd76db87fe8a6538a3102aeaab9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style id="learningmap-svgstyle" type="text/css">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#learningmap-svgmap-';
        $value = $this->resolveValue($context->find('mapid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' .learningmap-place {
';
        $buffer .= $indent . '    fill: ';
        $value = $this->resolveValue($context->find('placecolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    stroke-width: 3px;
';
        $buffer .= $indent . '    stroke: ';
        $value = $this->resolveValue($context->find('strokecolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    stroke-opacity: ';
        $value = $this->resolveValue($context->find('strokeopacity'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $value = $context->find('editmode');
        if (empty($value)) {
            
            $value = $context->find('showall');
            if (empty($value)) {
                
                $buffer .= $indent . '    visibility: hidden;
';
            }
        }
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#learningmap-svgmap-';
        $value = $this->resolveValue($context->find('mapid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' .learningmap-place.learningmap-visited {
';
        $buffer .= $indent . '    visibility: visible;
';
        $buffer .= $indent . '    opacity: 1;
';
        $buffer .= $indent . '    fill: ';
        $value = $this->resolveValue($context->find('visitedcolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#learningmap-svgmap-';
        $value = $this->resolveValue($context->find('mapid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' .learningmap-path {
';
        $buffer .= $indent . '    stroke: ';
        $value = $this->resolveValue($context->find('strokecolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    stroke-width: 3px;
';
        $buffer .= $indent . '    stroke-linecap: round;
';
        $buffer .= $indent . '    fill: none;
';
        $value = $context->find('hidepaths');
        $buffer .= $this->section04011766ea19b8b77d8a603cfe21bf38($context, $indent, $value);
        $value = $context->find('hidepaths');
        if (empty($value)) {
            
            $value = $context->find('editmode');
            if (empty($value)) {
                
                $value = $context->find('showall');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    visibility: hidden;
';
                }
                $value = $context->find('showall');
                $buffer .= $this->section57827a59c8c1de5fa8deba1499366c97($context, $indent, $value);
            }
        }
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#learningmap-svgmap-';
        $value = $this->resolveValue($context->find('mapid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' text {
';
        $buffer .= $indent . '    fill: ';
        $value = $this->resolveValue($context->find('textcolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    stroke: none;
';
        $buffer .= $indent . '    font-family: FreeSans;
';
        $buffer .= $indent . '    font-size: 20px;
';
        $buffer .= $indent . '    ';
        $value = $context->find('showtext');
        if (empty($value)) {
            
            $buffer .= 'display: none;';
        }
        $buffer .= '
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#learningmap-svgmap-';
        $value = $this->resolveValue($context->find('mapid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' .learningmap-targetplace {
';
        $buffer .= $indent . '    stroke-dasharray: 1,1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#learningmap-svgmap-';
        $value = $this->resolveValue($context->find('mapid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' .learningmap-checkmark {
';
        $buffer .= $indent . '    stroke-width: 3px;
';
        $buffer .= $indent . '    stroke-linecap: round;
';
        $buffer .= $indent . '    stroke: ';
        $value = $this->resolveValue($context->find('strokecolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    fill: none;
';
        $buffer .= $indent . '}
';
        $value = $context->find('editmode');
        if (empty($value)) {
            
            $buffer .= $indent . '#learningmap-svgmap-';
            $value = $this->resolveValue($context->find('mapid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' .learningmap-hidden * {
';
            $value = $context->find('showall');
            if (empty($value)) {
                
                $buffer .= $indent . '    visibility: hidden;
';
            }
            $value = $context->find('showall');
            $buffer .= $this->section67f0bdb678c0588254d4c67410f8dc5e($context, $indent, $value);
            $buffer .= $indent . '}
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '#learningmap-svgmap-';
            $value = $this->resolveValue($context->find('mapid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' .learningmap-place.learningmap-reachable,
';
            $buffer .= $indent . '#learningmap-svgmap-';
            $value = $this->resolveValue($context->find('mapid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' .learningmap-path.learningmap-reachable {
';
            $buffer .= $indent . '    visibility: visible;
';
            $buffer .= $indent . '    opacity: 1;
';
            $buffer .= $indent . '}
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '#learningmap-svgmap-';
            $value = $this->resolveValue($context->find('mapid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' .learningmap-waygone {
';
            $buffer .= $indent . '    stroke: ';
            $value = $this->resolveValue($context->find('visitedcolor'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ';
';
            $buffer .= $indent . '}
';
            $buffer .= $indent . '
';
            $value = $context->find('hover');
            $buffer .= $this->sectionEe2a9d6f8cc5027ab6730c5bc07cdfd9($context, $indent, $value);
            $value = $context->find('pulse');
            $buffer .= $this->section2a2a82b4a0a5e5c7b044573797d5a601($context, $indent, $value);
        }
        $value = $context->find('editmode');
        $buffer .= $this->section81c43d83d534fd1b4f341e91716595bb($context, $indent, $value);
        $buffer .= $indent . '</style>';

        return $buffer;
    }

    private function section84454f0aac143ca734c6d89001bf0843(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    opacity: 0.5;
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    opacity: 0.5;
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04011766ea19b8b77d8a603cfe21bf38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#editmode}}
    opacity: 0.5;
    {{/editmode}}
    {{^editmode}}
    visibility: hidden;
    {{/editmode}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('editmode');
                $buffer .= $this->section84454f0aac143ca734c6d89001bf0843($context, $indent, $value);
                $value = $context->find('editmode');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    visibility: hidden;
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57827a59c8c1de5fa8deba1499366c97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    filter: grayscale(50%);
    opacity: 0.2;
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    filter: grayscale(50%);
';
                $buffer .= $indent . '    opacity: 0.2;
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67f0bdb678c0588254d4c67410f8dc5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    filter: grayscale(50%);
    opacity: 0.5;
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    filter: grayscale(50%);
';
                $buffer .= $indent . '    opacity: 0.5;
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe2a9d6f8cc5027ab6730c5bc07cdfd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
#learningmap-svgmap-{{mapid}} .learningmap-place:hover,
#learningmap-svgmap-{{mapid}} .learningmap-place:not(.learningmap-visited):hover {
    animation: none;
    stroke-width: 5px;
    stroke-opacity: 1;
}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '#learningmap-svgmap-';
                $value = $this->resolveValue($context->find('mapid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .learningmap-place:hover,
';
                $buffer .= $indent . '#learningmap-svgmap-';
                $value = $this->resolveValue($context->find('mapid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .learningmap-place:not(.learningmap-visited):hover {
';
                $buffer .= $indent . '    animation: none;
';
                $buffer .= $indent . '    stroke-width: 5px;
';
                $buffer .= $indent . '    stroke-opacity: 1;
';
                $buffer .= $indent . '}
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a2a82b4a0a5e5c7b044573797d5a601(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
#learningmap-svgmap-{{mapid}} .learningmap-place:not(.learningmap-visited) {
    animation: pulse 1.5s infinite;
    stroke-opacity: 1;
}

@keyframes pulse {
    0% {
        stroke-width: 3px;
    }
    50% {
        stroke-width: 7px;
    }
    100% {
        stroke-width: 3px;
    }
}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '#learningmap-svgmap-';
                $value = $this->resolveValue($context->find('mapid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .learningmap-place:not(.learningmap-visited) {
';
                $buffer .= $indent . '    animation: pulse 1.5s infinite;
';
                $buffer .= $indent . '    stroke-opacity: 1;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '@keyframes pulse {
';
                $buffer .= $indent . '    0% {
';
                $buffer .= $indent . '        stroke-width: 3px;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    50% {
';
                $buffer .= $indent . '        stroke-width: 7px;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    100% {
';
                $buffer .= $indent . '        stroke-width: 3px;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '}
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81c43d83d534fd1b4f341e91716595bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
#learningmap-svgmap-{{mapid}} .learningmap-place:hover {
    fill: blue;
}
#learningmap-svgmap-{{mapid}} .learningmap-path:hover {
    stroke: blue;
    stroke-width: 6px;
}
#learningmap-svgmap-{{mapid}} .learningmap-selected {
    stroke: green;
}
#learningmap-svgmap-{{mapid}} .learningmap-selected-activity-selector {stroke-dasharray: 10; animation: dashdraw 4s linear infinite;}
       @keyframes dashdraw {to {stroke-dashoffset: 200;}}

#learningmap-svgmap-{{mapid}} .learningmap-emptyplace {
    opacity: 0.5;
}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '#learningmap-svgmap-';
                $value = $this->resolveValue($context->find('mapid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .learningmap-place:hover {
';
                $buffer .= $indent . '    fill: blue;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '#learningmap-svgmap-';
                $value = $this->resolveValue($context->find('mapid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .learningmap-path:hover {
';
                $buffer .= $indent . '    stroke: blue;
';
                $buffer .= $indent . '    stroke-width: 6px;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '#learningmap-svgmap-';
                $value = $this->resolveValue($context->find('mapid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .learningmap-selected {
';
                $buffer .= $indent . '    stroke: green;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '#learningmap-svgmap-';
                $value = $this->resolveValue($context->find('mapid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .learningmap-selected-activity-selector {stroke-dasharray: 10; animation: dashdraw 4s linear infinite;}
';
                $buffer .= $indent . '       @keyframes dashdraw {to {stroke-dashoffset: 200;}}
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '#learningmap-svgmap-';
                $value = $this->resolveValue($context->find('mapid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' .learningmap-emptyplace {
';
                $buffer .= $indent . '    opacity: 0.5;
';
                $buffer .= $indent . '}
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
