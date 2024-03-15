<?php

class __Mustache_a8b46e5f309a2b0b5df0dda2af25e8ee extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<nav id="header" class="navbar navbar-light navbar-expand"
';
        $buffer .= $indent . '     aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '        <div class="header-menubar header-menubar-inner">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="header-logo">
';
        $buffer .= $indent . '                <a class="navbar-brand" href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/?redirect=0">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('logourl_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers"
';
        $buffer .= $indent . '                    data-action="toggle" data-target="theme_boost-drawers-primary">
';
        $buffer .= $indent . '                <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '
';
        $value = $context->find('primarymoremenu');
        $buffer .= $this->section8b7adeb075adc59aaee92d0f972c3797($context, $indent, $value);
        $buffer .= $indent . '            <div class="primary-navigation">
';
        $buffer .= $indent . '                <div class="custom-menu navigation">
';
        $buffer .= $indent . '                    <ul class="navbar-nav mr-auto">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
        $buffer .= $indent . '                <!-- page_heading_menu -->
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div id="usernavigation" class="navbar-nav ml-auto">
';
        $value = $context->findDot('output.search_box');
        $buffer .= $this->sectionE63f647c180636a74c3c339829273346($context, $indent, $value);
        $value = $context->find('langmenu');
        $buffer .= $this->sectionD81edf8769a7fe73a45b6e75800499a3($context, $indent, $value);
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <div class="d-flex align-items-center usermenu-container" data-region="usermenu">
';
        $value = $context->find('usermenu');
        $buffer .= $this->section5c7c274143b56ca3eabd09325bd17030($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_boost/primary-drawer-mobile')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section905fdc4eef49161dd980010cca15a0b9($context, $indent, $value);

        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b7adeb075adc59aaee92d0f972c3797(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="primary-navigation">
                    {{> core/moremenu}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE63f647c180636a74c3c339829273346(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{output.search_box}}}
                    <div class="divider border-left h-75 align-self-center mx-1"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.search_box'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <div class="divider border-left h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD81edf8769a7fe73a45b6e75800499a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> theme_boost/language_menu}}
                    <div class="divider border-left h-75 align-self-center mx-1"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_boost/language_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                    <div class="divider border-left h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c7c274143b56ca3eabd09325bd17030(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core/user_menu}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section905fdc4eef49161dd980010cca15a0b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\'], function($) {
        var header = $("#header");
        $(window).on(\'scroll\', window_scroll);
        window_scroll();

        function window_scroll() {
            var top = $(window).scrollTop();
            if (top > 90) {
                header.removeClass("animation");
                header.css({
                    position : "fixed",
                    top      : "-90px"
                });
                header.addClass("animation");
                header.addClass("fixed-top");
                header.css({top : 0});
            }
            if (top < 15) {
                header.removeClass("fixed-top");
                header.css({
                    position : "absolute",
                    top      : 0
                });
            }
        }
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\'], function($) {
';
                $buffer .= $indent . '        var header = $("#header");
';
                $buffer .= $indent . '        $(window).on(\'scroll\', window_scroll);
';
                $buffer .= $indent . '        window_scroll();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        function window_scroll() {
';
                $buffer .= $indent . '            var top = $(window).scrollTop();
';
                $buffer .= $indent . '            if (top > 90) {
';
                $buffer .= $indent . '                header.removeClass("animation");
';
                $buffer .= $indent . '                header.css({
';
                $buffer .= $indent . '                    position : "fixed",
';
                $buffer .= $indent . '                    top      : "-90px"
';
                $buffer .= $indent . '                });
';
                $buffer .= $indent . '                header.addClass("animation");
';
                $buffer .= $indent . '                header.addClass("fixed-top");
';
                $buffer .= $indent . '                header.css({top : 0});
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '            if (top < 15) {
';
                $buffer .= $indent . '                header.removeClass("fixed-top");
';
                $buffer .= $indent . '                header.css({
';
                $buffer .= $indent . '                    position : "absolute",
';
                $buffer .= $indent . '                    top      : 0
';
                $buffer .= $indent . '                });
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
