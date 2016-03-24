<?php

/* C:\xampp\htdocs\ktl-cargo/plugins/dojo/visitorcounter/components/component/default.htm */
class __TwigTemplate_3d2321f46e3169bab59ace95b5cf3536497e6ea5c831d9a127ff0d4b86013a0a extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["visitorCount"]) ? $context["visitorCount"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/plugins/dojo/visitorcounter/components/component/default.htm";
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
/* {{visitorCount}}*/
