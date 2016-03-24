<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/pages/tracking.htm */
class __TwigTemplate_de4751fb5477f012d85c8b3905f32f9f435aa587816294629f98696a2976b8c7 extends Twig_Template
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
        echo "<section>
    <div class=\"container\">
\t\t<form class=\"form-horizontal\"  action=\"";
        // line 3
        echo $this->env->getExtension('CMS')->pageFilter("tracking-detail");
        echo "\" method=\"post\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">B/L Number</label>
\t\t\t\t<div class=\"col-sm-10\">
     \t\t\t\t<input type=\"text\" name=\"bl_no\" class=\"form-control\"  placeholder=\"B/L Number\">
    \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t    \t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t    \t";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("captcha"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "\t\t\t    \t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t <div class=\"col-sm-offset-2 col-sm-10\">
     \t \t\t \t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
   \t \t\t\t </div>
\t\t\t</div>
\t\t\t
\t\t
\t\t</form>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/pages/tracking.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  35 => 12,  23 => 3,  19 => 1,);
    }
}
/* <section>*/
/*     <div class="container">*/
/* 		<form class="form-horizontal"  action="{{'tracking-detail'|page}}" method="post">*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label">B/L Number</label>*/
/* 				<div class="col-sm-10">*/
/*      				<input type="text" name="bl_no" class="form-control"  placeholder="B/L Number">*/
/*     			</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 			    	<div class="col-sm-offset-2 col-sm-10">*/
/* 			    	{% component 'captcha' %}*/
/* 			    	</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				 <div class="col-sm-offset-2 col-sm-10">*/
/*      	 		 	<button type="submit" class="btn btn-default">Submit</button>*/
/*    	 			 </div>*/
/* 			</div>*/
/* 			*/
/* 		*/
/* 		</form>*/
/* 	</div>*/
/* </section>*/
