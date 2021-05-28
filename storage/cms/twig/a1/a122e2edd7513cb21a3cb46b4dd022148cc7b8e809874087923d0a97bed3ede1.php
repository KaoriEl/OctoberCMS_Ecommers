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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/contacts.htm */
class __TwigTemplate_ac555126b69dcc3ff907668956e3ea744e2d89a69f6d22bd94ff4035b6438330 extends \Twig\Template
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
        $tags = array("set" => 1, "component" => 39);
        $filters = array("escape" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component'],
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
        $context["banner"] = twig_get_attribute($this->env, $this->source, ($context["Banner"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "<div id=\"sub03_main_container\" style=\"background:url(/storage/app/media";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), 3, [], "any", false, false, true, 2), "path", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo " )\"></div>
<div id=\"sub_m\">
    <div id=\"sub_m_1\">
\t\t\t\t<p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"/contacts/\">Контакты</a>> <a href=\"/about-ls-mtron/outline\">О компании</a></p>
    </div>
</div>
<div id=\"s_contents\">
    <div id=\"a_contents\">
        <div id=\"lnb\">
            <div id=\"lnb_m\">
                <div id=\"lnb_m_1\">
                    <ul>
                        <li><h2><a href=\"/about-ls-mtron/outline/\">О компании</a></h2></li>
                        <li class=\"sub_m\"><a href=\"/korporaciya-ajpi\">Корпорация АйПи</a></li>
                        <li class=\"sub_m\"><a href=\"/contacts/\">Контакты</a></li>
                    </ul>
                </div>
                <div id=\"lnb_m_2\">
                </div>
            </div>

        </div>
        <div id=\"sub_v\">
            <h2>Контакты</h2>
            <div id=\"con_box\">
                <p class=\"p11\">
                    Корпорация АйПи <br>
                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Contact"] ?? null), "records", [], "any", false, false, true, 29), 0, [], "any", false, false, true, 29), "adress", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo " <br><br>
                    <span style=\"font-weight: normal;\">
                       <a href=\"tel:88005553361\">";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Contact"] ?? null), "records", [], "any", false, false, true, 31), 0, [], "any", false, false, true, 31), "phone_first", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "</a> (звонок в России бесплатный) <br>
                        в Москве: <a href=\"tel:+74956496429\">";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Contact"] ?? null), "records", [], "any", false, false, true, 32), 0, [], "any", false, false, true, 32), "phone_second", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</a> <br>
                        в Санкт-Петербурге: <a href=\"tel:+78126003658\">";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Contact"] ?? null), "records", [], "any", false, false, true, 33), 0, [], "any", false, false, true, 33), "phone_third", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "</a> <br>
                        в Екатеринбурге: <a href=\"tel:+73433430132\">";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Contact"] ?? null), "records", [], "any", false, false, true, 34), 0, [], "any", false, false, true, 34), "phone_fourth", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "</a> <br>
                        в Новосибирске: <a href=\"tel:+73832075512\">";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Contact"] ?? null), "records", [], "any", false, false, true, 35), 0, [], "any", false, false, true, 35), "phone_fifth", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "</a> <br>
                        <a href=\"mailto:sales@iphold.ru\">";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Contact"] ?? null), "records", [], "any", false, false, true, 36), 0, [], "any", false, false, true, 36), "email", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "</a> <br>
                        </span>
            </div>
            ";
        // line 39
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("uploadForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 40
        echo "        </div>
    </div>
</div>
<script>
    function form_submit() {
        var f = document.IndexForm;

        if (f.name.value == \"\") {
            alert(\"Input the Name\");
            return false;
        }
        if (f.email.value == \"\") {
            alert(\"Input the Email\");
            return false;
        }

        if (f.title.value == \"\") {
            alert(\"Input the Title\");
            return false;
        }

        if (f.cont.value == \"\") {
            alert(\"Input the Comments\");
            return false;
        }
        f.submit();
    }
</script>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  126 => 39,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  95 => 29,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set banner = Banner.records %}
<div id=\"sub03_main_container\" style=\"background:url(/storage/app/media{{ banner.3.path }} )\"></div>
<div id=\"sub_m\">
    <div id=\"sub_m_1\">
\t\t\t\t<p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"/contacts/\">Контакты</a>> <a href=\"/about-ls-mtron/outline\">О компании</a></p>
    </div>
</div>
<div id=\"s_contents\">
    <div id=\"a_contents\">
        <div id=\"lnb\">
            <div id=\"lnb_m\">
                <div id=\"lnb_m_1\">
                    <ul>
                        <li><h2><a href=\"/about-ls-mtron/outline/\">О компании</a></h2></li>
                        <li class=\"sub_m\"><a href=\"/korporaciya-ajpi\">Корпорация АйПи</a></li>
                        <li class=\"sub_m\"><a href=\"/contacts/\">Контакты</a></li>
                    </ul>
                </div>
                <div id=\"lnb_m_2\">
                </div>
            </div>

        </div>
        <div id=\"sub_v\">
            <h2>Контакты</h2>
            <div id=\"con_box\">
                <p class=\"p11\">
                    Корпорация АйПи <br>
                    {{ Contact.records.0.adress }} <br><br>
                    <span style=\"font-weight: normal;\">
                       <a href=\"tel:88005553361\">{{ Contact.records.0.phone_first }}</a> (звонок в России бесплатный) <br>
                        в Москве: <a href=\"tel:+74956496429\">{{ Contact.records.0.phone_second }}</a> <br>
                        в Санкт-Петербурге: <a href=\"tel:+78126003658\">{{ Contact.records.0.phone_third }}</a> <br>
                        в Екатеринбурге: <a href=\"tel:+73433430132\">{{ Contact.records.0.phone_fourth }}</a> <br>
                        в Новосибирске: <a href=\"tel:+73832075512\">{{ Contact.records.0.phone_fifth }}</a> <br>
                        <a href=\"mailto:sales@iphold.ru\">{{ Contact.records.0.email }}</a> <br>
                        </span>
            </div>
            {% component 'uploadForm' %}
        </div>
    </div>
</div>
<script>
    function form_submit() {
        var f = document.IndexForm;

        if (f.name.value == \"\") {
            alert(\"Input the Name\");
            return false;
        }
        if (f.email.value == \"\") {
            alert(\"Input the Email\");
            return false;
        }

        if (f.title.value == \"\") {
            alert(\"Input the Title\");
            return false;
        }

        if (f.cont.value == \"\") {
            alert(\"Input the Comments\");
            return false;
        }
        f.submit();
    }
</script>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/contacts.htm", "");
    }
}
