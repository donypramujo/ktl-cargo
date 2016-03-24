<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/pages/404.htm */
class __TwigTemplate_1041b61d6c7f7c8045dbaf0bc1a9d7e8dfd23a7219e39bc960679cb4f855be1f extends Twig_Template
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
        echo "<section id=\"error\" class=\"container text-center\">
        <h1>404, Page Not Found</h1>
        <p>The page you are looking for doesn't exist or another error occurred.</p>
        <a class=\"btn btn-primary\" href=\"";
        // line 4
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <section id="error" class="container text-center">*/
/*         <h1>404, Page Not Found</h1>*/
/*         <p>The page you are looking for doesn't exist or another error occurred.</p>*/
/*         <a class="btn btn-primary" href="{{ 'home'|page }}">GO BACK TO THE HOMEPAGE</a>*/
/*     </section><!--/#error-->*/
