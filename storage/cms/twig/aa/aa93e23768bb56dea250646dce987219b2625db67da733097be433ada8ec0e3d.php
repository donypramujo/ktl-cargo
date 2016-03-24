<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/partials/carousel.htm */
class __TwigTemplate_e367a1f69a374a08423c2a2d1e80f552a9241f07c0303f87b0bcd5688f7d6dcd extends Twig_Template
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
        echo "<div class=\"carousel slide\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">

                <div class=\"item active\" style=\"background-image: url(";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/bg1.jpg");
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">KTL Cargo is one of the Leading International Freight Forwarding Company</h1>
                                    <h2 class=\"animation animated-item-2\">It was first established in 2006 in Indonesia.</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("samples/about");
        echo "\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url(";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/bg2.jpg");
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Experienced in the freight forwarding business.</h1>
                                    <h2 class=\"animation animated-item-2\">KTL Cargo is led by experienced players in the business and always strive for the best</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"";
        // line 30
        echo $this->env->getExtension('CMS')->pageFilter("samples/about");
        echo "\">Read More</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url(";
        // line 39
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/bg3.jpg");
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Any possible means</h1>
                                    <h2 class=\"animation animated-item-2\">KTL Cargo uses all kind of transportation to deliver your freight</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"";
        // line 46
        echo $this->env->getExtension('CMS')->pageFilter("samples/about");
        echo "\">Read More</a>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/partials/carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 46,  71 => 39,  59 => 30,  49 => 23,  39 => 16,  29 => 9,  19 => 1,);
    }
}
/* <div class="carousel slide">*/
/*             <ol class="carousel-indicators">*/
/*                 <li data-target="#main-slider" data-slide-to="0" class="active"></li>*/
/*                 <li data-target="#main-slider" data-slide-to="1"></li>*/
/*                 <li data-target="#main-slider" data-slide-to="2"></li>*/
/*             </ol>*/
/*             <div class="carousel-inner">*/
/* */
/*                 <div class="item active" style="background-image: url({{ 'assets/images/slider/bg1.jpg'|theme }})">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">KTL Cargo is one of the Leading International Freight Forwarding Company</h1>*/
/*                                     <h2 class="animation animated-item-2">It was first established in 2006 in Indonesia.</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="{{'samples/about'|page}}">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/* */
/*                 <div class="item" style="background-image: url({{ 'assets/images/slider/bg2.jpg'|theme }})">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Experienced in the freight forwarding business.</h1>*/
/*                                     <h2 class="animation animated-item-2">KTL Cargo is led by experienced players in the business and always strive for the best</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="{{'samples/about'|page}}">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/* */
/*                 <div class="item" style="background-image: url({{ 'assets/images/slider/bg3.jpg'|theme }})">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Any possible means</h1>*/
/*                                     <h2 class="animation animated-item-2">KTL Cargo uses all kind of transportation to deliver your freight</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="{{'samples/about'|page}}">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                       */
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/*             </div><!--/.carousel-inner-->*/
/*         </div><!--/.carousel-->*/
