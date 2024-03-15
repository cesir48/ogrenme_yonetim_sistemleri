<?php

class __Mustache_2e91594f6c4217acbff1004a9efb824b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('maintenancefooter');
        $buffer .= $this->section73c49a230bcb0c42e0d056988a076e61($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('maintenancefooter');
        if (empty($value)) {
            
            $buffer .= $indent . '    <footer id="page-footer" class="footer-block">
';
            $buffer .= $indent . '        <div id="footer">
';
            $value = $context->find('footer_enable_block');
            $buffer .= $this->section6b355cf382b2d8c38cebfd443e8f2d86($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '        <div class="footer-content-debugging footer-dark bg-dark text-light">
';
            $buffer .= $indent . '            <div class="container-fluid footer-dark-inner">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </footer>
';
        }
        $value = $context->find('js');
        $buffer .= $this->section6869a313ac27c4d94e184497408b9a45($context, $indent, $value);

        return $buffer;
    }

    private function section73c49a230bcb0c42e0d056988a076e61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
        <div id="footer">
            <div class="footer-bootom">
                <p class="text-center">
                    Feito com ❤️ Por <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
                    Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
                </p>
            </div>
        </div>
    </footer>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
';
                $buffer .= $indent . '        <div id="footer">
';
                $buffer .= $indent . '            <div class="footer-bootom">
';
                $buffer .= $indent . '                <p class="text-center">
';
                $buffer .= $indent . '                    Feito com ❤️ Por <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
';
                $buffer .= $indent . '                    Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
';
                $buffer .= $indent . '                </p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </footer>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section042e4403524071c5561e8ce9f11d1d5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit, theme_boost_magnific';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit, theme_boost_magnific';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d34a10f1babc5c5defd189da125d6a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                {{#pix}}edit, theme_boost_magnific{{/pix}}
                                            </a>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <a class="settings-edit" href="';
                $value = $this->resolveValue($context->find('footer_settings_edit'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                ';
                $value = $context->find('pix');
                $buffer .= $this->section042e4403524071c5561e8ce9f11d1d5a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b116c586728e4ba341f0efa5f5a36c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{{footer_block_class}}}">
                                    <div class="footer-desc">
                                        <div class="logo-footer">
                                            <a href="{{{config.wwwroot}}}/?redirect=0">
                                                {{{logourl_footer}}}
                                            </a>
                                        </div>
                                        <p>{{{footer_description}}}</p>

                                        {{#footer_settings_edit}}
                                            <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                {{#pix}}edit, theme_boost_magnific{{/pix}}
                                            </a>
                                        {{/footer_settings_edit}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('footer_block_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="footer-desc">
';
                $buffer .= $indent . '                                        <div class="logo-footer">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/?redirect=0">
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('logourl_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <p>';
                $value = $this->resolveValue($context->find('footer_description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '
';
                $value = $context->find('footer_settings_edit');
                $buffer .= $this->section6d34a10f1babc5c5defd189da125d6a9($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section673749b9b9c733e7f22dd8634961316a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{{footer_block_class}}}">
                                    <div class="footer-nav">
                                        <h4>{{{footer_links_title}}}</h4>
                                        <ul>
                                            {{{footer_links}}}
                                        </ul>
                                        {{#footer_settings_edit}}
                                            <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                {{#pix}}edit, theme_boost_magnific{{/pix}}
                                            </a>
                                        {{/footer_settings_edit}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('footer_block_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="footer-nav">
';
                $buffer .= $indent . '                                        <h4>';
                $value = $this->resolveValue($context->find('footer_links_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                        <ul>
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('footer_links'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </ul>
';
                $value = $context->find('footer_settings_edit');
                $buffer .= $this->section6d34a10f1babc5c5defd189da125d6a9($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32220dec2ec55a6acd604bad6f14e18e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li class="smedia-02">
                                                    <a href="{{{social_youtube}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-youtube"></i>
                                                        </span>
                                                        <span class="media-name">{{{youtube_name}}}</span>
                                                    </a>
                                                </li>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <li class="smedia-02">
';
                $buffer .= $indent . '                                                    <a href="';
                $value = $this->resolveValue($context->find('social_youtube'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                        <span class="media-icon">
';
                $buffer .= $indent . '                                                            <i class="fa fa-youtube"></i>
';
                $buffer .= $indent . '                                                        </span>
';
                $buffer .= $indent . '                                                        <span class="media-name">';
                $value = $this->resolveValue($context->find('youtube_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    </a>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7cbb219002b633b42e79a441df31008(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li class="smedia-02">
                                                    <a href="{{{social_linkedin}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-linkedin"></i>
                                                        </span>
                                                        <span class="media-name">{{{linkedin_name}}}</span>
                                                    </a>
                                                </li>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <li class="smedia-02">
';
                $buffer .= $indent . '                                                    <a href="';
                $value = $this->resolveValue($context->find('social_linkedin'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                        <span class="media-icon">
';
                $buffer .= $indent . '                                                            <i class="fa fa-linkedin"></i>
';
                $buffer .= $indent . '                                                        </span>
';
                $buffer .= $indent . '                                                        <span class="media-name">';
                $value = $this->resolveValue($context->find('linkedin_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    </a>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC713e253d1e9e9d6b09f3cf560950d61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li class="smedia-02">
                                                    <a href="{{{social_twitter}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-twitter"></i>
                                                        </span>
                                                        <span class="media-name">{{{twitter_name}}}</span>
                                                    </a>
                                                </li>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <li class="smedia-02">
';
                $buffer .= $indent . '                                                    <a href="';
                $value = $this->resolveValue($context->find('social_twitter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                        <span class="media-icon">
';
                $buffer .= $indent . '                                                            <i class="fa fa-twitter"></i>
';
                $buffer .= $indent . '                                                        </span>
';
                $buffer .= $indent . '                                                        <span class="media-name">';
                $value = $this->resolveValue($context->find('twitter_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    </a>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7408d1d5b7edaffa9a0bd16e838deb5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li class="smedia-04">
                                                    <a href="{{{social_instagram}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-instagram"></i>
                                                        </span>
                                                        <span class="media-name">{{{instagram_name}}}</span>
                                                    </a>
                                                </li>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <li class="smedia-04">
';
                $buffer .= $indent . '                                                    <a href="';
                $value = $this->resolveValue($context->find('social_instagram'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                        <span class="media-icon">
';
                $buffer .= $indent . '                                                            <i class="fa fa-instagram"></i>
';
                $buffer .= $indent . '                                                        </span>
';
                $buffer .= $indent . '                                                        <span class="media-name">';
                $value = $this->resolveValue($context->find('instagram_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    </a>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6317c05dde13663525cbad72163c7eda(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li class="smedia-01">
                                                    <a href="{{{social_facebook}}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-facebook"></i>
                                                </span>
                                                        <span class="media-name">{{{facebook_name}}}</span>
                                                    </a>
                                                </li>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <li class="smedia-01">
';
                $buffer .= $indent . '                                                    <a href="';
                $value = $this->resolveValue($context->find('social_facebook'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                <span class="media-icon">
';
                $buffer .= $indent . '                                                <i class="fa fa-facebook"></i>
';
                $buffer .= $indent . '                                                </span>
';
                $buffer .= $indent . '                                                        <span class="media-name">';
                $value = $this->resolveValue($context->find('facebook_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    </a>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cf1a70008046bf9994707cfd626bc4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_boost_magnific{{/pix}}
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a class="settings-edit" href="';
                $value = $this->resolveValue($context->find('footer_settings_edit'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                    ';
                $value = $context->find('pix');
                $buffer .= $this->section042e4403524071c5561e8ce9f11d1d5a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFead9b3adae23f3fb5de9ee7e33ea534(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{{footer_block_class}}}">
                                    <div class="social-media">
                                        <h4>{{{footer_social_title}}}</h4>
                                        <ul>
                                            {{#social_youtube}}
                                                <li class="smedia-02">
                                                    <a href="{{{social_youtube}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-youtube"></i>
                                                        </span>
                                                        <span class="media-name">{{{youtube_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_youtube}}

                                            {{#social_linkedin}}
                                                <li class="smedia-02">
                                                    <a href="{{{social_linkedin}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-linkedin"></i>
                                                        </span>
                                                        <span class="media-name">{{{linkedin_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_linkedin}}

                                            {{#social_twitter}}
                                                <li class="smedia-02">
                                                    <a href="{{{social_twitter}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-twitter"></i>
                                                        </span>
                                                        <span class="media-name">{{{twitter_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_twitter}}

                                            {{#social_instagram}}
                                                <li class="smedia-04">
                                                    <a href="{{{social_instagram}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-instagram"></i>
                                                        </span>
                                                        <span class="media-name">{{{instagram_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_instagram}}

                                            {{#social_facebook}}
                                                <li class="smedia-01">
                                                    <a href="{{{social_facebook}}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-facebook"></i>
                                                </span>
                                                        <span class="media-name">{{{facebook_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_facebook}}

                                            {{#footer_settings_edit}}
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_boost_magnific{{/pix}}
                                                </a>
                                            {{/footer_settings_edit}}
                                        </ul>
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('footer_block_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="social-media">
';
                $buffer .= $indent . '                                        <h4>';
                $value = $this->resolveValue($context->find('footer_social_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                        <ul>
';
                $value = $context->find('social_youtube');
                $buffer .= $this->section32220dec2ec55a6acd604bad6f14e18e($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('social_linkedin');
                $buffer .= $this->sectionB7cbb219002b633b42e79a441df31008($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('social_twitter');
                $buffer .= $this->sectionC713e253d1e9e9d6b09f3cf560950d61($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('social_instagram');
                $buffer .= $this->section7408d1d5b7edaffa9a0bd16e838deb5e($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('social_facebook');
                $buffer .= $this->section6317c05dde13663525cbad72163c7eda($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('footer_settings_edit');
                $buffer .= $this->section0cf1a70008046bf9994707cfd626bc4b($context, $indent, $value);
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23590aabce1f804499e54fff5ded43a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <p>{{{contact_address}}}</p>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <p>';
                $value = $this->resolveValue($context->find('contact_address'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc5ef8974fdea4a92aae864c8a1d4186(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <p><i class="fa fa-phone-square"></i>{{{contact_phone}}}</p>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <p><i class="fa fa-phone-square"></i>';
                $value = $this->resolveValue($context->find('contact_phone'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE42fb0c68d85938ff5677b451a39905a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <p><i class="fa fa-envelope"></i>
                                                <a class="mail-link"
                                                   href="mailto:{{{contact_email}}}">{{{contact_email}}}</a>
                                            </p>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <p><i class="fa fa-envelope"></i>
';
                $buffer .= $indent . '                                                <a class="mail-link"
';
                $buffer .= $indent . '                                                   href="mailto:';
                $value = $this->resolveValue($context->find('contact_email'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('contact_email'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                            </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86092e54b5fd5a06c91cf9f236f6a781(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{{footer_block_class}}}">
                                    <div class="footer-contact">
                                        <h4>{{{contact_footer_title}}}</h4>

                                        {{#contact_phone}}
                                            <p>{{{contact_address}}}</p>
                                        {{/contact_phone}}
                                        {{#contact_phone}}
                                            <p><i class="fa fa-phone-square"></i>{{{contact_phone}}}</p>
                                        {{/contact_phone}}

                                        {{#contact_email}}
                                            <p><i class="fa fa-envelope"></i>
                                                <a class="mail-link"
                                                   href="mailto:{{{contact_email}}}">{{{contact_email}}}</a>
                                            </p>
                                        {{/contact_email}}

                                        {{#footer_settings_edit}}
                                            <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                {{#pix}}edit, theme_boost_magnific{{/pix}}
                                            </a>
                                        {{/footer_settings_edit}}

                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('footer_block_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="footer-contact">
';
                $buffer .= $indent . '                                        <h4>';
                $value = $this->resolveValue($context->find('contact_footer_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '
';
                $value = $context->find('contact_phone');
                $buffer .= $this->section23590aabce1f804499e54fff5ded43a2($context, $indent, $value);
                $value = $context->find('contact_phone');
                $buffer .= $this->sectionCc5ef8974fdea4a92aae864c8a1d4186($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('contact_email');
                $buffer .= $this->sectionE42fb0c68d85938ff5677b451a39905a($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('footer_settings_edit');
                $buffer .= $this->section6d34a10f1babc5c5defd189da125d6a9($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC12314c953870fb987fc275a63d51b0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-foot">
                            <div class="container">
                                <p class="text-center">
                                    {{{footerblock_copywriter_text}}}
                                    <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
                                    Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
                                </p>
                            </div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-foot">
';
                $buffer .= $indent . '                            <div class="container">
';
                $buffer .= $indent . '                                <p class="text-center">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('footerblock_copywriter_text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
';
                $buffer .= $indent . '                                    Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
';
                $buffer .= $indent . '                                </p>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b355cf382b2d8c38cebfd443e8f2d86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-main">
                    <div class="container-fluid">
                        <div class="row">
                            {{#enable_block_description}}
                                <div class="{{{footer_block_class}}}">
                                    <div class="footer-desc">
                                        <div class="logo-footer">
                                            <a href="{{{config.wwwroot}}}/?redirect=0">
                                                {{{logourl_footer}}}
                                            </a>
                                        </div>
                                        <p>{{{footer_description}}}</p>

                                        {{#footer_settings_edit}}
                                            <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                {{#pix}}edit, theme_boost_magnific{{/pix}}
                                            </a>
                                        {{/footer_settings_edit}}
                                    </div>
                                </div>
                            {{/enable_block_description}}
                            {{#enable_block_links}}
                                <div class="{{{footer_block_class}}}">
                                    <div class="footer-nav">
                                        <h4>{{{footer_links_title}}}</h4>
                                        <ul>
                                            {{{footer_links}}}
                                        </ul>
                                        {{#footer_settings_edit}}
                                            <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                {{#pix}}edit, theme_boost_magnific{{/pix}}
                                            </a>
                                        {{/footer_settings_edit}}
                                    </div>
                                </div>
                            {{/enable_block_links}}
                            {{#enable_block_social}}
                                <div class="{{{footer_block_class}}}">
                                    <div class="social-media">
                                        <h4>{{{footer_social_title}}}</h4>
                                        <ul>
                                            {{#social_youtube}}
                                                <li class="smedia-02">
                                                    <a href="{{{social_youtube}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-youtube"></i>
                                                        </span>
                                                        <span class="media-name">{{{youtube_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_youtube}}

                                            {{#social_linkedin}}
                                                <li class="smedia-02">
                                                    <a href="{{{social_linkedin}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-linkedin"></i>
                                                        </span>
                                                        <span class="media-name">{{{linkedin_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_linkedin}}

                                            {{#social_twitter}}
                                                <li class="smedia-02">
                                                    <a href="{{{social_twitter}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-twitter"></i>
                                                        </span>
                                                        <span class="media-name">{{{twitter_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_twitter}}

                                            {{#social_instagram}}
                                                <li class="smedia-04">
                                                    <a href="{{{social_instagram}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fa fa-instagram"></i>
                                                        </span>
                                                        <span class="media-name">{{{instagram_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_instagram}}

                                            {{#social_facebook}}
                                                <li class="smedia-01">
                                                    <a href="{{{social_facebook}}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fa fa-facebook"></i>
                                                </span>
                                                        <span class="media-name">{{{facebook_name}}}</span>
                                                    </a>
                                                </li>
                                            {{/social_facebook}}

                                            {{#footer_settings_edit}}
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_boost_magnific{{/pix}}
                                                </a>
                                            {{/footer_settings_edit}}
                                        </ul>
                                    </div>
                                </div>
                            {{/enable_block_social}}
                            {{#enable_block_contact}}
                                <div class="{{{footer_block_class}}}">
                                    <div class="footer-contact">
                                        <h4>{{{contact_footer_title}}}</h4>

                                        {{#contact_phone}}
                                            <p>{{{contact_address}}}</p>
                                        {{/contact_phone}}
                                        {{#contact_phone}}
                                            <p><i class="fa fa-phone-square"></i>{{{contact_phone}}}</p>
                                        {{/contact_phone}}

                                        {{#contact_email}}
                                            <p><i class="fa fa-envelope"></i>
                                                <a class="mail-link"
                                                   href="mailto:{{{contact_email}}}">{{{contact_email}}}</a>
                                            </p>
                                        {{/contact_email}}

                                        {{#footer_settings_edit}}
                                            <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                {{#pix}}edit, theme_boost_magnific{{/pix}}
                                            </a>
                                        {{/footer_settings_edit}}

                                    </div>
                                </div>
                            {{/enable_block_contact}}
                        </div>
                    </div>
                    {{#enable_copywriter}}
                        <div class="footer-foot">
                            <div class="container">
                                <p class="text-center">
                                    {{{footerblock_copywriter_text}}}
                                    <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
                                    Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
                                </p>
                            </div>
                        </div>
                    {{/enable_copywriter}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-main">
';
                $buffer .= $indent . '                    <div class="container-fluid">
';
                $buffer .= $indent . '                        <div class="row">
';
                $value = $context->find('enable_block_description');
                $buffer .= $this->section9b116c586728e4ba341f0efa5f5a36c3($context, $indent, $value);
                $value = $context->find('enable_block_links');
                $buffer .= $this->section673749b9b9c733e7f22dd8634961316a($context, $indent, $value);
                $value = $context->find('enable_block_social');
                $buffer .= $this->sectionFead9b3adae23f3fb5de9ee7e33ea534($context, $indent, $value);
                $value = $context->find('enable_block_contact');
                $buffer .= $this->section86092e54b5fd5a06c91cf9f236f6a781($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $value = $context->find('enable_copywriter');
                $buffer .= $this->sectionC12314c953870fb987fc275a63d51b0f($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6869a313ac27c4d94e184497408b9a45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
