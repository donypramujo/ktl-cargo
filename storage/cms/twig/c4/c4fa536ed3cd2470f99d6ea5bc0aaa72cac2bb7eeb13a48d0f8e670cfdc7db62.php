<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/pages/test-form.htm */
class __TwigTemplate_fca9f5c5c3cde8c3d73fafaf73a33d0e43a28124971aeab047537c2a2c879659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form  action=\"test\" method=\"post\">
      Ini Input  <input type=\"text\" name=\"testbro\"/>
    ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("captcha"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/pages/test-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <form  action="test" method="post">*/
/*       Ini Input  <input type="text" name="testbro"/>*/
/*     {% component 'captcha' %}*/
/* </form>*/
