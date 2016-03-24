<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/pages/home.htm */
class __TwigTemplate_6f35b08e561410895cbe18209f2fbb1820ad9ecf709c6d1c61d3ef41b373a73c extends Twig_Template
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
        echo "<section id=\"main-slider\" class=\"no-margin\">
\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("carousel"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>

<section id=\"feature\">
\t";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("features"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  37 => 12,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section id="main-slider" class="no-margin">*/
/* 	{% partial "carousel" %}*/
/*     <a class="prev hidden-xs" href="#main-slider" data-slide="prev">*/
/*         <i class="fa fa-chevron-left"></i>*/
/*     </a>*/
/*     <a class="next hidden-xs" href="#main-slider" data-slide="next">*/
/*         <i class="fa fa-chevron-right"></i>*/
/*     </a>*/
/* </section>*/
/* */
/* <section id="feature">*/
/* 	{% partial "features" %}*/
/* </section>*/
