<?php

/* C:\xampp\htdocs\ktl-cargo/themes/ktl-logistics/partials/blog/blog-posts.htm */
class __TwigTemplate_19dfe841b52e96ccdfd852ca2238552c156250d297b9d743cb7d4e2450d81e53 extends Twig_Template
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
        $context["posts"] = $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array());
        // line 2
        $context["categories"] = $this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array());
        // line 3
        $context["currentCategorySlug"] = $this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "currentCategorySlug", array());
        // line 4
        echo "
";
        // line 5
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "count", array()) == 0)) {
            // line 6
            echo "<div class=\"center\">
\t<p class=\"lead\">";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
            echo "</p>
</div>
";
        } else {
            // line 10
            echo "<div class=\"blog\">
    <div class=\"row\">
        <div class=\"col-md-8\">
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 14
                echo "\t\t<div class=\"blog-item\">
\t\t\t<div class=\"row\">                                
\t\t\t\t<div class=\"col-xs-12 col-sm-12 blog-content\">
\t\t\t\t\t";
                // line 17
                if (($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array()) > 0)) {
                    // line 18
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                    echo "\"><img class=\"img-responsive img-blog\" data-src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                    echo "\" width=\"100%\" alt=\"\" /></a>
\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t<h2><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a></h2>
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> Posted 
\t\t\t\t\t\t";
                // line 22
                if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                    echo " in ";
                }
                // line 23
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 24
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 25
                    echo "\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " on ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t\t<h3 style=\"text-align:justify;text-justify:inter-word;\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t<a class=\"btn btn-primary readmore\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t
\t\t";
            // line 34
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
                // line 35
                echo "\t\t\t<ul class=\"pagination pagination-lg\">
\t\t\t
\t\t\t\t";
                // line 37
                if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                    // line 38
                    echo "\t\t\t\t<li><a href=\"";
                    echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                    echo "\"><i class=\"fa fa-long-arrow-left\"></i>Previous Page</a></a></li>
\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t
\t\t\t\t";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 42
                    echo "\t\t\t\t<li class=\"";
                    echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                    echo "\">
                <a href=\"";
                    // line 43
                    echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "\t\t\t\t
\t\t\t\t";
                // line 47
                if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                    // line 48
                    echo "\t\t\t\t<li><a href=\"";
                    echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                    echo "\">Next Page<i class=\"fa fa-long-arrow-right\"></i></a></li>
\t\t\t\t";
                }
                // line 50
                echo "
\t\t\t</ul><!--/.pagination-->
\t\t";
            }
            // line 53
            echo "\t\t
\t\t</div>
\t\t
\t\t<aside class=\"col-md-4\">
\t\t    <!-- 
\t\t\t<div class=\"widget search\">
\t\t\t\t<form role=\"form\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Search Here\">
\t\t\t\t</form>
\t\t\t</div>
\t\t\t-->
\t\t\t
\t\t\t<div class=\"widget categories\">
\t\t\t\t<h3>Categories</h3>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<ul class=\"blog_category\">
\t\t\t\t\t\t";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 71
                echo "\t\t\t\t\t\t\t";
                $context["postCount"] = $this->getAttribute($context["category"], "post_count", array());
                // line 72
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["category"], "slug", array()) == (isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null))) {
                }
                // line 73
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ((isset($context["postCount"]) ? $context["postCount"] : null)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, (isset($context["postCount"]) ? $context["postCount"] : null), "html", null, true);
                    echo "</span>";
                }
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>                     
\t\t\t</div><!--/.categories-->
\t\t</aside>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/themes/ktl-logistics/partials/blog/blog-posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 75,  226 => 73,  222 => 72,  219 => 71,  215 => 70,  196 => 53,  191 => 50,  185 => 48,  183 => 47,  180 => 46,  169 => 43,  164 => 42,  160 => 41,  157 => 40,  151 => 38,  149 => 37,  145 => 35,  143 => 34,  140 => 33,  129 => 28,  125 => 27,  106 => 25,  97 => 24,  79 => 23,  75 => 22,  67 => 20,  55 => 18,  53 => 17,  48 => 14,  44 => 13,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set posts = blogPosts.posts %}*/
/* {% set categories = blogCategories.categories %}*/
/* {% set currentCategorySlug = blogCategories.currentCategorySlug %}*/
/* */
/* {% if posts.count == 0 %}*/
/* <div class="center">*/
/* 	<p class="lead">{{ noPostsMessage }}</p>*/
/* </div>*/
/* {% else %}*/
/* <div class="blog">*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/* 		{% for post in posts %}*/
/* 		<div class="blog-item">*/
/* 			<div class="row">                                */
/* 				<div class="col-xs-12 col-sm-12 blog-content">*/
/* 					{% if post.featured_images.count > 0 %}*/
/* 					<a href="{{ post.url }}"><img class="img-responsive img-blog" data-src="{{ post.featured_images[0].filename }}" alt="{{ post.featured_images[0].description }}" src="{{post.featured_images[0].path}}" width="100%" alt="" /></a>*/
/* 					{% endif%}*/
/* 					<h2><a href="{{ post.url }}">{{ post.title }}</a></h2>*/
/* 					<p><i class="fa fa-clock-o"></i> Posted */
/* 						{% if post.categories.count %} in {% endif %}*/
/* 						{% for category in post.categories %}*/
/* 						<a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/* 						{% endfor %} on {{ post.published_at|date('M d, Y') }}*/
/* 					</p>*/
/* 					<h3 style="text-align:justify;text-justify:inter-word;">{{ post.summary }}</h3>*/
/* 					<a class="btn btn-primary readmore" href="{{ post.url }}">Read More <i class="fa fa-angle-right"></i></a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% endfor %}*/
/* 		*/
/* 		{% if posts.lastPage > 1 %}*/
/* 			<ul class="pagination pagination-lg">*/
/* 			*/
/* 				{% if posts.currentPage > 1 %}*/
/* 				<li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}"><i class="fa fa-long-arrow-left"></i>Previous Page</a></a></li>*/
/* 				{% endif %}*/
/* 				*/
/* 				{% for page in 1..posts.lastPage %}*/
/* 				<li class="{{ posts.currentPage == page ? 'active' : null }}">*/
/*                 <a href="{{ this.page.baseFileName|page({ (pageParam): page }) }}">{{ page }}</a>*/
/* 				</li>*/
/* 				{% endfor %}*/
/* 				*/
/* 				{% if posts.lastPage > posts.currentPage %}*/
/* 				<li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}">Next Page<i class="fa fa-long-arrow-right"></i></a></li>*/
/* 				{% endif %}*/
/* */
/* 			</ul><!--/.pagination-->*/
/* 		{% endif %}*/
/* 		*/
/* 		</div>*/
/* 		*/
/* 		<aside class="col-md-4">*/
/* 		    <!-- */
/* 			<div class="widget search">*/
/* 				<form role="form">*/
/* 						<input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">*/
/* 				</form>*/
/* 			</div>*/
/* 			-->*/
/* 			*/
/* 			<div class="widget categories">*/
/* 				<h3>Categories</h3>*/
/* 				<div class="row">*/
/* 					<div class="col-sm-12">*/
/* 						<ul class="blog_category">*/
/* 						{% for category in categories %}*/
/* 							{% set postCount = category.post_count %}*/
/* 							{% if category.slug == currentCategorySlug %}{% endif %}*/
/* 							<li><a href="{{ category.url }}">{{ category.name }}{% if postCount %}<span class="badge">{{ postCount }}</span>{% endif %}</a></li>*/
/* 						{% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>                     */
/* 			</div><!--/.categories-->*/
/* 		</aside>*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
