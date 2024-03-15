<?php

class __Mustache_d8c57b61e568b7a5a623a88bebf52c62 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="frontpage-course-list ';
        $value = $this->resolveValue($context->find('root_class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '        <h2 class="frontpage-course-title">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('add_new_course_button'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </h2>
';
        $value = $context->find('text');
        $buffer .= $this->section3381c56a58049f04bddf17aa22ce64ba($context, $indent, $value);
        $buffer .= $indent . '        <div class="courses course-boxes">
';
        $buffer .= $indent . '            <div class="row">
';
        $value = $context->find('courses');
        $buffer .= $this->section4e82e04a00b3d72a9dbb75379cc4ee7d($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section3381c56a58049f04bddf17aa22ce64ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p class="frontpage-course-description">{{text}}</p>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p class="frontpage-course-description">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e82e04a00b3d72a9dbb75379cc4ee7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> theme_boost_magnific/frontpage-course}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_boost_magnific/frontpage-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
