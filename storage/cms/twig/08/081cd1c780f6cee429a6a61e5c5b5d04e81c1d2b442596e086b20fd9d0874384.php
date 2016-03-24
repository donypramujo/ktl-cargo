<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/pages/tracking-detail.htm */
class __TwigTemplate_3785f71a6658ac34e8a6023fa1b568ab7575e121f3fc540026dedbd9ca55aa01 extends Twig_Template
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
\t<div class=\"container\">
\t\t";
        // line 3
        if (twig_test_empty((isset($context["bl"]) ? $context["bl"] : null))) {
            // line 4
            echo "\t\t<div class=\"center wow fadeInDown\">
\t\t\t<h2>Data not found</h2>
\t\t</div>
\t\t";
        }
        // line 8
        echo "\t\t
\t\t";
        // line 9
        if ( !twig_test_empty((isset($context["bl"]) ? $context["bl"] : null))) {
            // line 10
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<form class=\"form-horizontal \" action=\"#\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">B/L Number</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "bill_of_lading_number", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Shipper</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "shipper", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Consignee</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "consignee", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Date of Shipment</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "date_of_shipment", array()), "d M Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<form class=\"form-horizontal \" action=\"#\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Origin</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "origin", array()), "name", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Destination</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "destination", array()), "name", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Mother Vessel</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "mother_vessel", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Feeder Vessel</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "feeder_vessel", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t</div>
\t\t</div>

\t\t<hr>
\t\t<h2>Containers</h2>
\t\t<table class=\"table table-responsive table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Container No.</th>
\t\t\t\t\t<th>Seal No.</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "containers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
                // line 82
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["container"], "container_number", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["container"], "seal_number", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t</tbody>
\t\t</table>

\t\t<h2>Status</h2>
\t\t<table class=\"table table-responsive table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Location</th>
\t\t\t\t\t<th>Status</th>
\t\t\t\t\t<th>Updated Date</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bl"]) ? $context["bl"] : null), "statuses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 101
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["status"], "location", array()), "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["status"], "status", array()), "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 104
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["status"], "updated_date", array()), "d M Y"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t</tbody>
\t\t</table>
\t\t";
        }
        // line 110
        echo "\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/pages/tracking-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 110,  192 => 107,  183 => 104,  179 => 103,  175 => 102,  172 => 101,  168 => 100,  153 => 87,  144 => 84,  140 => 83,  137 => 82,  133 => 81,  112 => 63,  103 => 57,  94 => 51,  85 => 45,  71 => 34,  62 => 28,  53 => 22,  44 => 16,  36 => 10,  34 => 9,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <section>*/
/* 	<div class="container">*/
/* 		{% if bl is empty %}*/
/* 		<div class="center wow fadeInDown">*/
/* 			<h2>Data not found</h2>*/
/* 		</div>*/
/* 		{% endif%}*/
/* 		*/
/* 		{% if bl is not empty %}*/
/* 		<div class="row">*/
/* 			<div class="col-sm-6">*/
/* 				<form class="form-horizontal " action="#">*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-4 control-label">B/L Number</label>*/
/* 						<div class="col-sm-8">*/
/* 							<p class="form-control-static">{{bl.bill_of_lading_number}}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-4 control-label">Shipper</label>*/
/* 						<div class="col-sm-8">*/
/* 							<p class="form-control-static">{{bl.shipper}}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-4 control-label">Consignee</label>*/
/* 						<div class="col-sm-8">*/
/* 							<p class="form-control-static">{{bl.consignee}}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-4 control-label">Date of Shipment</label>*/
/* 						<div class="col-sm-8">*/
/* 							<p class="form-control-static">{{bl.date_of_shipment|date('d M Y')}}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* */
/* 			</div>*/
/* 			<div class="col-sm-6">*/
/* 				<form class="form-horizontal " action="#">*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-4 control-label">Origin</label>*/
/* 						<div class="col-sm-8">*/
/* 							<p class="form-control-static">{{bl.origin.name}}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-4 control-label">Destination</label>*/
/* 						<div class="col-sm-8">*/
/* 							<p class="form-control-static">{{bl.destination.name}}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-4 control-label">Mother Vessel</label>*/
/* 						<div class="col-sm-8">*/
/* 							<p class="form-control-static">{{bl.mother_vessel}}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-4 control-label">Feeder Vessel</label>*/
/* 						<div class="col-sm-8">*/
/* 							<p class="form-control-static">{{bl.feeder_vessel}}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<hr>*/
/* 		<h2>Containers</h2>*/
/* 		<table class="table table-responsive table-striped table-hover">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th>Container No.</th>*/
/* 					<th>Seal No.</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 				{% for container in bl.containers %}*/
/* 				<tr>*/
/* 					<td>{{container.container_number}}</td>*/
/* 					<td>{{container.seal_number}}</td>*/
/* 				</tr>*/
/* 				{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* */
/* 		<h2>Status</h2>*/
/* 		<table class="table table-responsive table-striped table-hover">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th>Location</th>*/
/* 					<th>Status</th>*/
/* 					<th>Updated Date</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 				{% for status in bl.statuses %}*/
/* 				<tr>*/
/* 					<td>{{status.location.name}}</td>*/
/* 					<td>{{status.status.name}}</td>*/
/* 					<td>{{status.updated_date|date('d M Y')}}</td>*/
/* 				</tr>*/
/* 				{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 		{% endif %}*/
/* 	</div>*/
/* </section>*/
