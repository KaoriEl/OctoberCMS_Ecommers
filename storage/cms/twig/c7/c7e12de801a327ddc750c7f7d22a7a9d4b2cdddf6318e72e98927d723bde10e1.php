<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/post-page.htm */
class __TwigTemplate_967df2f26b391bc202f5fd2da58ef08c00b204f8844dc14bc426813dc427fd6d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("component" => 44);
        $filters = array("escape" => 21);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<style>
    p{
        margin-bottom: 5px;
    }
    ul li{
        list-style: disc;
    }
.content{
    margin-left: 35px;
}
    .info{
        display: none;
    }
    .featured-images{
        display: block;
        margin-left: 35px;
        margin-right: auto;
        margin-top: 23px;
    }
</style>
\t\t<div id=\"sub01_main_container\" style=\"background:url(";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Banner"] ?? null), "records", [], "any", false, false, true, 21), 5, [], "any", false, false, true, 21), "Upload", [], "any", false, false, true, 21), "path", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo " )\"></div>
\t\t<div id=\"sub_m\">
\t\t\t<div id=\"sub_m_1\">
\t\t\t\t<p class=\"sp_01\"><a href=\"#\">Главная</a>>&nbsp;<a href=\"#\">Новости</a>>&nbsp;<a href=\"#\">Новость</a></p>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"s_contents\">
\t\t\t<div id=\"a_contents\">

<div id=\"lnb\">
\t\t\t\t<div id=\"lnb_m\">
\t\t\t\t\t<div id=\"lnb_m_1\">
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li><h2><a href=\"../welcome-message\">Новости
</a></h2></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
</div>
\t\t\t\t<div id=\"sub_v\">
\t\t\t\t\t<h2 style=\"text-align: left;margin-bottom: 10px;\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 42), "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<div id=\"sub3_1_1\">
                            ";
        // line 44
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 45
        echo "                            <br>
\t\t\t\t\t\t\t<div class=\"snsArea\" style=\"display:inline-table;text-align:right;float:right;margin-right:40px;\"></div>
\t\t\t\t\t\t\t<table style=\"font-size:10pt; font-weight:bold; text-align:center; color:#555555; width:765px; padding:0px 0px 0px 25px\">
\t\t\t\t\t\t\t<colgroup>
\t\t\t\t\t\t\t\t<col width=\"60px\">
\t\t\t\t\t\t\t\t<col width=\"*\">
\t\t\t\t\t\t\t\t<col width=\"120px\">
\t\t\t\t\t\t\t</colgroup>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/post-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  113 => 44,  108 => 42,  84 => 21,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    p{
        margin-bottom: 5px;
    }
    ul li{
        list-style: disc;
    }
.content{
    margin-left: 35px;
}
    .info{
        display: none;
    }
    .featured-images{
        display: block;
        margin-left: 35px;
        margin-right: auto;
        margin-top: 23px;
    }
</style>
\t\t<div id=\"sub01_main_container\" style=\"background:url({{ Banner.records.5.Upload.path}} )\"></div>
\t\t<div id=\"sub_m\">
\t\t\t<div id=\"sub_m_1\">
\t\t\t\t<p class=\"sp_01\"><a href=\"#\">Главная</a>>&nbsp;<a href=\"#\">Новости</a>>&nbsp;<a href=\"#\">Новость</a></p>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"s_contents\">
\t\t\t<div id=\"a_contents\">

<div id=\"lnb\">
\t\t\t\t<div id=\"lnb_m\">
\t\t\t\t\t<div id=\"lnb_m_1\">
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li><h2><a href=\"../welcome-message\">Новости
</a></h2></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
</div>
\t\t\t\t<div id=\"sub_v\">
\t\t\t\t\t<h2 style=\"text-align: left;margin-bottom: 10px;\">{{ blogPost.post.title }}</h2>
\t\t\t\t\t\t<div id=\"sub3_1_1\">
                            {% component 'blogPost' %}
                            <br>
\t\t\t\t\t\t\t<div class=\"snsArea\" style=\"display:inline-table;text-align:right;float:right;margin-right:40px;\"></div>
\t\t\t\t\t\t\t<table style=\"font-size:10pt; font-weight:bold; text-align:center; color:#555555; width:765px; padding:0px 0px 0px 25px\">
\t\t\t\t\t\t\t<colgroup>
\t\t\t\t\t\t\t\t<col width=\"60px\">
\t\t\t\t\t\t\t\t<col width=\"*\">
\t\t\t\t\t\t\t\t<col width=\"120px\">
\t\t\t\t\t\t\t</colgroup>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</body>
</html>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/post-page.htm", "");
    }
}
