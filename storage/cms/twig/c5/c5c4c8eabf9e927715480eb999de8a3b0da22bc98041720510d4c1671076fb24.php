<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/pages/blog/blog.htm */
class __TwigTemplate_746bddb97701eb6ca03e729a69acabfe11779cac14de802516d05b30fc86f491 extends Twig_Template
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
        echo "<section id=\"blog\" class=\"container\">
\t<div class=\"center\">
\t\t<h2>Blogs</h2>
\t\t<p class=\"lead\">Latest updates from KTL Logistics</p>
\t</div>
\t";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['blogPosts'] = (isset($context["blogPosts"]) ? $context["blogPosts"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("blog/blog-posts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/pages/blog/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  26 => 6,  19 => 1,);
    }
}
/* <section id="blog" class="container">*/
/* 	<div class="center">*/
/* 		<h2>Blogs</h2>*/
/* 		<p class="lead">Latest updates from KTL Logistics</p>*/
/* 	</div>*/
/* 	{% partial "blog/blog-posts" blogPosts=blogPosts %}*/
/* </section>*/
