<?php

/* C:\xampp\htdocs\ktl-cargo/plugins/alxy/captcha/components/captcha/default.htm */
class __TwigTemplate_866ac6f78164578fe3d3f490cfcf8b83726d89be7348d6c585409bcd3121cc17 extends Twig_Template
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
        echo "<div class=\"g-recaptcha\" data-sitekey=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "site_key", array()), "html", null, true);
        echo "\"></div>
<script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?hl=";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "lang", array()), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ktl-cargo/plugins/alxy/captcha/components/captcha/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <div class="g-recaptcha" data-sitekey="{{ settings.site_key }}"></div>*/
/* <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl={{ settings.lang }}"></script>*/
