<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/pages/samples/services.htm */
class __TwigTemplate_a0d147a1f5210c2c8e9c47f583dd2cf4da1f381519f3687e5d7dfd694106fe47 extends Twig_Template
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
        echo "<section id=\"feature\" class=\"transparent-bg\">
       ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("features"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    </section><!--/#feature-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/pages/samples/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section id="feature" class="transparent-bg">*/
/*        {% partial 'features' %}*/
/*     </section><!--/#feature-->*/
