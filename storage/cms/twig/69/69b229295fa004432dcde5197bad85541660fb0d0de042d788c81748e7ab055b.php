<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/partials/nav.htm */
class __TwigTemplate_d63c9706e840c34bf498e470c59b21a882ce571c703babf12d2eb232ae785e04 extends Twig_Template
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
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Home"), "about" => array(0 => "samples/about", 1 => "About Us"), "services" => array(0 => "samples/services", 1 => "Services"), "portfolio" => array(0 => "samples/portfolio", 1 => "Portfolio"), "blog" => array(0 => "blog/blog", 1 => "Blog"), "tracking" => array(0 => "tracking", 1 => "Tracking"), "contact" => array(0 => "samples/contact", 1 => "Contact"));
        // line 13
        echo "
";
        // line 34
        echo "
";
        // line 35
        $context["nav"] = $this;
        // line 36
        echo "
<nav class=\"navbar navbar-inverse\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t";
        // line 50
        echo $context["nav"]->getrender_menu((isset($context["links"]) ? $context["links"] : null));
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->";
    }

    // line 14
    public function getrender_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 16
                echo "        <li class=\"";
                echo ((($context["code"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 18
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('CMS')->pageFilter((($this->getAttribute($context["link"], "page", array())) ? ($this->getAttribute($context["link"], "page", array())) : ($this->getAttribute($context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 19
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 20
                echo "                class=\"";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 22
                echo twig_escape_filter($this->env, (($this->getAttribute($context["link"], "name", array())) ? ($this->getAttribute($context["link"], "name", array())) : ($this->getAttribute($context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 23
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 24
                echo "            </a>
            ";
                // line 25
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    // line 26
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 28
                    echo $this->getAttribute($this, "render_menu", array(0 => $this->getAttribute($context["link"], "sublinks", array())), "method");
                    echo "
                </ul>
            ";
                }
                // line 31
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  115 => 28,  111 => 26,  109 => 25,  106 => 24,  102 => 23,  98 => 22,  92 => 20,  88 => 19,  84 => 18,  76 => 16,  71 => 15,  59 => 14,  50 => 50,  41 => 46,  29 => 36,  27 => 35,  24 => 34,  21 => 13,  19 => 2,);
    }
}
/* {# Note: Only one levels of sublinks are supported by Bootstrap 3 #}*/
/* {% set*/
/*     links = {*/
/* 	    'home':      ['home', 'Home'],*/
/* 		'about':     ['samples/about', 'About Us'],*/
/* 		'services':  ['samples/services', 'Services'],*/
/* 		'portfolio': ['samples/portfolio', 'Portfolio'],*/
/*         'blog': ['blog/blog', 'Blog'],*/
/*         'tracking': ['tracking', 'Tracking'],*/
/*         'contact': ['samples/contact', 'Contact'],*/
/*     }*/
/* %}*/
/* */
/* {% macro render_menu(links) %}*/
/*     {% for code, link in links %}*/
/*         <li class="{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}">*/
/*             <a*/
/*                 href="{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}"*/
/*                 {% if link.sublinks %}data-toggle="dropdown"{% endif %}*/
/*                 class="{{ link.sublinks ? 'dropdown-toggle' }}"*/
/*             >*/
/*                 {{ link.name ?: link[1] }}*/
/*                 {% if link.sublinks %}<span class="caret"></span>{% endif %}*/
/*             </a>*/
/*             {% if link.sublinks %}*/
/*                 <span class="dropdown-arrow"></span>*/
/*                 <ul class="dropdown-menu">*/
/*                     {{ _self.render_menu(link.sublinks) }}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as nav %}*/
/* */
/* <nav class="navbar navbar-inverse" role="banner">*/
/* 	<div class="container">*/
/* 		<div class="navbar-header">*/
/* 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 			<span class="sr-only">Toggle navigation</span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			</button>*/
/* 			<a class="navbar-brand" href="{{ 'home'|page }}"><img src="{{ 'assets/images/logo.png'|theme }}" alt="logo"></a>*/
/* 		</div>*/
/* 		<div class="collapse navbar-collapse navbar-right">*/
/* 			<ul class="nav navbar-nav">*/
/* 				{{ nav.render_menu(links) }}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </nav><!--/nav-->*/
