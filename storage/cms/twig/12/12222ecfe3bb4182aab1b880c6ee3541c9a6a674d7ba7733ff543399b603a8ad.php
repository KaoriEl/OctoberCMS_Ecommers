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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/support.htm */
class __TwigTemplate_b5d78aaf5053e63aff3f6952833ea38f415b5a77b254e3384fb5fe67d30af276 extends \Twig\Template
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
        $tags = array("set" => 1);
        $filters = array("escape" => 24, "raw" => 51);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'raw'],
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
        $context["banner"] = twig_get_attribute($this->env, $this->source, ($context["Banners"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "<style>
    .sub_m{

        padding-bottom:10px;
        list-style: none !important;
    }
    #sub_v li{
        float:none;
    }
    ul li{
        list-style: disc;
    }
    ol li{
        list-style: decimal;
    }
    #sub_v h3 {
        color: #000000;
        font-size: 16pt;
        padding: 45px 0px 0px 0px;
    }

</style>
    <div id=\"sub03_main_container\" style=\"background:url(/storage/app/media";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), 5, [], "any", false, false, true, 24), "path", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo " )\"></div>
    <div id=\"sub_m\">
        <div id=\"sub_m_1\">
            <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"#\">Поддержка</a></p>
        </div>
    </div>

    <div id=\"s_contents\">
        <div id=\"a_contents\">

            <div id=\"lnb\">

                <div id=\"lnb_m\">
                    <div id=\"lnb_m_1\">
                        <ul>
                            <li class=\"sub_m\"><a href=\"/support/ultracapacitor/introduction\">Руководство по применению</a></li>
                            <li class=\"sub_m\"><a href=\"/certificates/default\">Сертификаты</a></li>
                            <li class=\"sub_m\"><a href=\"/faq/default\">Вопрос-ответ</a></li>
                            <li class=\"sub_m\"><a href=\"/document/default\">Документы</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div id=\"sub_v\" >
                <div id=\"sub3_1_1\">
                    <p class=\"p05\"><h1 class=\"\" style=\"text-align: center;\">";
        // line 50
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SupportIntro"] ?? null), "records", [], "any", false, false, true, 50), 0, [], "any", false, false, true, 50), "header", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "</h1></p><br>
                    <p class=\"p08_1\">  <span class=\"span07\"> ";
        // line 51
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["SupportIntro"] ?? null), "records", [], "any", false, false, true, 51), 0, [], "any", false, false, true, 51), "textblockone", [], "any", false, false, true, 51), 51, $this->source);
        echo "</span></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$(document).ready(function(){

            \$('#s_contents').css(\"height\",\"1050px\");
        });
    </script>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/support.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  117 => 50,  88 => 24,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set banner = Banners.records %}
<style>
    .sub_m{

        padding-bottom:10px;
        list-style: none !important;
    }
    #sub_v li{
        float:none;
    }
    ul li{
        list-style: disc;
    }
    ol li{
        list-style: decimal;
    }
    #sub_v h3 {
        color: #000000;
        font-size: 16pt;
        padding: 45px 0px 0px 0px;
    }

</style>
    <div id=\"sub03_main_container\" style=\"background:url(/storage/app/media{{ banner.5.path }} )\"></div>
    <div id=\"sub_m\">
        <div id=\"sub_m_1\">
            <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"#\">Поддержка</a></p>
        </div>
    </div>

    <div id=\"s_contents\">
        <div id=\"a_contents\">

            <div id=\"lnb\">

                <div id=\"lnb_m\">
                    <div id=\"lnb_m_1\">
                        <ul>
                            <li class=\"sub_m\"><a href=\"/support/ultracapacitor/introduction\">Руководство по применению</a></li>
                            <li class=\"sub_m\"><a href=\"/certificates/default\">Сертификаты</a></li>
                            <li class=\"sub_m\"><a href=\"/faq/default\">Вопрос-ответ</a></li>
                            <li class=\"sub_m\"><a href=\"/document/default\">Документы</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div id=\"sub_v\" >
                <div id=\"sub3_1_1\">
                    <p class=\"p05\"><h1 class=\"\" style=\"text-align: center;\">{{ SupportIntro.records.0.header }}</h1></p><br>
                    <p class=\"p08_1\">  <span class=\"span07\"> {{ SupportIntro.records.0.textblockone|raw }}</span></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$(document).ready(function(){

            \$('#s_contents').css(\"height\",\"1050px\");
        });
    </script>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/support.htm", "");
    }
}
