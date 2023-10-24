<?php

class __Mustache_ff2ad5fdecb4fd4867f59b8520b3cdf5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="content-bank-container ';
        $value = $context->find('viewlist');
        $buffer .= $this->section19dda5f76a8e3fbe9fbc9198731628ca($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('viewlist');
        if (empty($value)) {
            
            $buffer .= 'view-grid';
        }
        $buffer .= '"
';
        $buffer .= $indent . 'data-region="contentbank">
';
        $buffer .= $indent . '    <div class="d-flex justify-content-between flex-column flex-sm-row">
';
        $buffer .= $indent . '        <div class="cb-search-container mb-2">
';
        if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/search')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="cb-toolbar-container mb-2 d-flex">
';
        if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/toolbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="pb-3 border">
';
        $buffer .= $indent . '        <div class="content-bank">
';
        $buffer .= $indent . '            <div class="cb-navbar bg-light p-2 border-bottom">
';
        $buffer .= $indent . '                <div class="cb-navbar-breadbrumb">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->section4ec86c7bf92eb63a8dd66d116814df49($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="cb-navbar-totalsearch d-none">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="cb-content-wrapper d-flex px-2" data-region="filearea">
';
        $buffer .= $indent . '                <div class="cb-heading bg-white">
';
        $buffer .= $indent . '                    <div class="cb-file cb-column d-flex">
';
        $buffer .= $indent . '                        <div class="title">';
        $value = $context->find('str');
        $buffer .= $this->sectionEfb060e8e340aeef038a9f361ae84863($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                        <button class="btn btn-sm cb-btnsort dir-none ml-auto" data-string="contentname" data-action="sortname"
';
        $buffer .= $indent . '                            title="';
        $value = $context->find('str');
        $buffer .= $this->section09e81649e361630dba5bdcdc8f81f0df($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                            <span class="default">';
        $value = $context->find('pix');
        $buffer .= $this->section9d6c07b0be067a50671617b1991bcdfc($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="desc">';
        $value = $context->find('pix');
        $buffer .= $this->sectionBb5507e234c3cb9b14a9761b7c57e70c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="asc">';
        $value = $context->find('pix');
        $buffer .= $this->section362293b74c466473190b79e0bd3f5f7c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        </button>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="cb-date cb-column d-flex">
';
        $buffer .= $indent . '                        <div class="title">';
        $value = $context->find('str');
        $buffer .= $this->sectionD991ac8c3a8732e5beba939c72b9b033($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                        <button class="btn btn-sm cb-btnsort dir-none ml-auto" data-string="lastmodified" data-action="sortdate"
';
        $buffer .= $indent . '                        title="';
        $value = $context->find('str');
        $buffer .= $this->section16861daffd416dd352c34f90b67af6ed($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                            <span class="default">';
        $value = $context->find('pix');
        $buffer .= $this->section9d6c07b0be067a50671617b1991bcdfc($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="desc">';
        $value = $context->find('pix');
        $buffer .= $this->sectionBb5507e234c3cb9b14a9761b7c57e70c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="asc">';
        $value = $context->find('pix');
        $buffer .= $this->section362293b74c466473190b79e0bd3f5f7c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        </button>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="cb-size cb-column d-flex">
';
        $buffer .= $indent . '                        <div class="title">';
        $value = $context->find('str');
        $buffer .= $this->section9f3049b376b3c382ea32b3d74c46c120($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                        <button class="btn btn-sm cb-btnsort dir-none ml-auto" data-string="size" data-action="sortsize"
';
        $buffer .= $indent . '                        title="';
        $value = $context->find('str');
        $buffer .= $this->sectionBee1cbe9c7e14fb1a44fc8da0f4dda49($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                            <span class="default">';
        $value = $context->find('pix');
        $buffer .= $this->section9d6c07b0be067a50671617b1991bcdfc($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="desc">';
        $value = $context->find('pix');
        $buffer .= $this->sectionBb5507e234c3cb9b14a9761b7c57e70c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="asc">';
        $value = $context->find('pix');
        $buffer .= $this->section362293b74c466473190b79e0bd3f5f7c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        </button>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="cb-type cb-column d-flex last">
';
        $buffer .= $indent . '                        <div class="title">';
        $value = $context->find('str');
        $buffer .= $this->section01b2c4e2861d98a63b5cea7e807c6c31($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                        <button class="btn btn-sm cb-btnsort dir-none ml-auto" data-string="type" data-action="sorttype"
';
        $buffer .= $indent . '                        title="';
        $value = $context->find('str');
        $buffer .= $this->section0c1371b59553fb5335a576b903796d65($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                            <span class="default">';
        $value = $context->find('pix');
        $buffer .= $this->section9d6c07b0be067a50671617b1991bcdfc($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="desc">';
        $value = $context->find('pix');
        $buffer .= $this->sectionBb5507e234c3cb9b14a9761b7c57e70c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="asc">';
        $value = $context->find('pix');
        $buffer .= $this->section362293b74c466473190b79e0bd3f5f7c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        </button>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $value = $context->find('contents');
        $buffer .= $this->section9b554d7f1d6b8592c975633c075aebc2($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section19dda5f76a8e3fbe9fbc9198731628ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'view-list';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'view-list';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ec86c7bf92eb63a8dd66d116814df49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/folder ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/folder ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfb060e8e340aeef038a9f361ae84863(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contentname, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contentname, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09e81649e361630dba5bdcdc8f81f0df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} contentname, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionEfb060e8e340aeef038a9f361ae84863($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7aad3f9ff5c904928092fcc3d44ec8f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sort, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sort, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d6c07b0be067a50671617b1991bcdfc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/sort, core, {{#str}}sort, core {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/sort, core, ';
                $value = $context->find('str');
                $buffer .= $this->section7aad3f9ff5c904928092fcc3d44ec8f4($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61fd71a6b4af5bef754e61152bc3e899(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'desc, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'desc, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb5507e234c3cb9b14a9761b7c57e70c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/sort_desc, core, {{#str}}desc, core{{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/sort_desc, core, ';
                $value = $context->find('str');
                $buffer .= $this->section61fd71a6b4af5bef754e61152bc3e899($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA27af5852a97444d420eb51cb1ac1990(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'asc, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'asc, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section362293b74c466473190b79e0bd3f5f7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/sort_asc, core, {{#str}}asc, core{{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/sort_asc, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionA27af5852a97444d420eb51cb1ac1990($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD991ac8c3a8732e5beba939c72b9b033(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastmodified, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastmodified, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16861daffd416dd352c34f90b67af6ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} lastmodified, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionD991ac8c3a8732e5beba939c72b9b033($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f3049b376b3c382ea32b3d74c46c120(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' size, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' size, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBee1cbe9c7e14fb1a44fc8da0f4dda49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} size, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->section9f3049b376b3c382ea32b3d74c46c120($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01b2c4e2861d98a63b5cea7e807c6c31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' type, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' type, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c1371b59553fb5335a576b903796d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} type, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->section01b2c4e2861d98a63b5cea7e807c6c31($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c16870499a70829fcce540bcae4c23e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedatetimeshort, core_langconfig ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strftimedatetimeshort, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC65fb0e3104962a85688b3451c5eaa8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{ timemodified }}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('timemodified'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $context->find('str');
                $buffer .= $this->section3c16870499a70829fcce540bcae4c23e($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b554d7f1d6b8592c975633c075aebc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="cb-listitem"
                    data-file="{{ title }}"
                    data-name="{{ name }}"
                    data-bytes="{{ bytes }}"
                    data-timemodified="{{ timemodified }}"
                    data-type="{{ type }}">
                    <div class="cb-file cb-column position-relative">
                        <div class="cb-thumbnail" role="img" aria-label="{{ name }}"
                        style="background-image: url(\'{{{ icon }}}\');">
                        </div>
                        <a href="{{{ link }}}" class="cb-link stretched-link" title="{{ name }}">
                            <span class="cb-name word-break-all clamp-2" data-region="cb-content-name">
                                {{{ name }}}
                            </span>
                        </a>
                    </div>
                    <div class="cb-date cb-column small">
                        {{#userdate}} {{ timemodified }}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}
                    </div>
                    <div class="cb-size cb-column small">
                        {{ size }}
                    </div>
                    <div class="cb-type cb-column last small">
                        {{{ type }}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="cb-listitem"
';
                $buffer .= $indent . '                    data-file="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    data-bytes="';
                $value = $this->resolveValue($context->find('bytes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    data-timemodified="';
                $value = $this->resolveValue($context->find('timemodified'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="cb-file cb-column position-relative">
';
                $buffer .= $indent . '                        <div class="cb-thumbnail" role="img" aria-label="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                        style="background-image: url(\'';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');">
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="cb-link stretched-link" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            <span class="cb-name word-break-all clamp-2" data-region="cb-content-name">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="cb-date cb-column small">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('userdate');
                $buffer .= $this->sectionC65fb0e3104962a85688b3451c5eaa8e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="cb-size cb-column small">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('size'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="cb-type cb-column last small">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
