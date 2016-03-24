<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/partials/footer.htm */
class __TwigTemplate_92db1e9fe71fc45a32e3baf58ddef63c8dd0df8a428e0584836c1baf105e37e0 extends Twig_Template
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
        echo "<div class=\"container\">
      <div class=\"row\">
            <div class=\"col-sm-12\">
                Visitor Count : ";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("visitorCount"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-8\">
\t\t\t\t\t\t&copy;  ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo ". All Rights Reserved.
\t\t\t\t\t
            </div>
            <div class=\"col-sm-4\">
                <ul class=\"pull-right\">
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->pageFilter("samples/about");
        echo "\">About Us</a></li>
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("samples/contact");
        echo "\">Contact Us</a></li>
                </ul>
            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  48 => 15,  44 => 14,  34 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/*       <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 Visitor Count : {% component 'visitorCount' %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-8">*/
/* 						&copy;  {{ "now"|date("Y") }} {{ this.theme.site_name }}. All Rights Reserved.*/
/* 					*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <ul class="pull-right">*/
/*                     <li><a href="{{ 'home'|page }}">Home</a></li>*/
/*                     <li><a href="{{ 'samples/about'|page }}">About Us</a></li>*/
/*                     <li><a href="{{ 'samples/contact'|page }}">Contact Us</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* </div>*/
