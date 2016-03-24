<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/layouts/default.htm */
class __TwigTemplate_d2f0a46720329fa25a640592d03440d6b015105588b6d7127d2beabebba3bc5e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>
\t
\t<!-- core CSS -->
\t";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "\t<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/prettyPhoto.css", 4 => "assets/css/main.css", 5 => "assets/css/responsive.css"));
        // line 20
        echo "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/ktl.ico");
        echo "\">

</head><!--/head-->

<body class=\"homepage\">

<header id=\"header\">
\t\t
        ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "</header><!--/header-->

    ";
        // line 32
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 33
        echo "

<footer id=\"footer\" class=\"midnight-blue\">
\t";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "</footer><!--/#footer-->

<!-- Scripts -->
<script type=\"text/javascript\" src=\"";
        // line 40
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/html5shiv.js", 1 => "assets/js/respond.min.js", 2 => "assets/js/jquery.js", 3 => "assets/js/bootstrap.min.js", 4 => "assets/js/jquery.prettyPhoto.js", 5 => "assets/js/jquery.isotope.min.js", 6 => "assets/js/main.js", 7 => "assets/js/wow.min.js"));
        // line 42
        echo "\"></script>
";
        // line 43
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 44
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        echo "             
         
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  96 => 43,  93 => 42,  91 => 40,  86 => 37,  82 => 36,  77 => 33,  75 => 32,  71 => 30,  67 => 29,  56 => 21,  53 => 20,  50 => 14,  47 => 13,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/* 	<meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/* 	<meta name="keywords" content="{{ this.page.meta_keywords }}">*/
/*     <meta name="author" content="{{ this.page.meta_author }}">*/
/*     <title>{{ this.page.title }} | {{ this.theme.site_name }}</title>*/
/* 	*/
/* 	<!-- core CSS -->*/
/* 	{% styles %}*/
/* 	<link href="{{ ['assets/css/bootstrap.min.css',*/
/* 		'assets/css/font-awesome.min.css',*/
/* 		'assets/css/animate.min.css',*/
/* 		'assets/css/prettyPhoto.css',*/
/* 		'assets/css/main.css',*/
/* 		'assets/css/responsive.css',*/
/* 	]|theme }}" rel="stylesheet">*/
/*     <link rel="shortcut icon" href="{{ 'assets/images/ico/ktl.ico'|theme }}">*/
/* */
/* </head><!--/head-->*/
/* */
/* <body class="homepage">*/
/* */
/* <header id="header">*/
/* 		*/
/*         {% partial "nav" %}*/
/* </header><!--/header-->*/
/* */
/*     {% page %}*/
/* */
/* */
/* <footer id="footer" class="midnight-blue">*/
/* 	{% partial "footer" %}*/
/* </footer><!--/#footer-->*/
/* */
/* <!-- Scripts -->*/
/* <script type="text/javascript" src="{{ ['assets/js/html5shiv.js','assets/js/respond.min.js','assets/js/jquery.js'*/
/* ,'assets/js/bootstrap.min.js','assets/js/jquery.prettyPhoto.js',*/
/* 'assets/js/jquery.isotope.min.js','assets/js/main.js','assets/js/wow.min.js']|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}             */
/*          */
/* </body>*/
/* </html>*/
