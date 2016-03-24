<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/pages/test.htm */
class __TwigTemplate_7883dae25cea91283e2b1e319fcb1425b5342e36eb5ab677faf2fbb7b90613f9 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["testbro"]) ? $context["testbro"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/pages/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* Hello {{testbro}}*/
