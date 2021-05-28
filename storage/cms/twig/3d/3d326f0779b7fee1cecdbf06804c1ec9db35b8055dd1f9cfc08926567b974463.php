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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/order.htm */
class __TwigTemplate_e5a6c7d462095ffd8761c74eeca48ac30b8136f44f21be133c55120ca6d708ae extends \Twig\Template
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
        $tags = array("set" => 1, "component" => 57);
        $filters = array("escape" => 25, "page" => 38);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component'],
                ['escape', 'page'],
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
        echo "


";
        // line 6
        echo "<script
        src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
        integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"
        crossorigin=\"anonymous\"></script>
<script>
    var captchas = [];

    var onloadCallback = function() {
        jQuery('.g-recaptcha').each(function(index, el) {
            captchas[el.id] = grecaptcha.render(el, \$(el).data());
        });
    }

    function resetReCaptcha(id) {
        var widget = captchas[id];
        grecaptcha.reset(widget);
    }

</script>
<div id=\"sub03_main_container\" style=\"background:url(/storage/app/media";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), 3, [], "any", false, false, true, 25), "path", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo " )\"></div>
<div id=\"sub_m\">
    <div id=\"sub_m_1\">
        <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"/contacts/\">Контакты</a>> <a href=\"/about-ls-mtron/outline\">О компании</a></p>
    </div>
</div>
<div id=\"s_contents\">
    <div id=\"a_contents\">
        <div id=\"lnb\">
            <div id=\"lnb_m\">
                <div id=\"lnb_m_1\">
                    <ul>
                        <li><h2><a href=\"/about-ls-mtron/outline/\">О компании</a></h2></li>
                        <li class=\"sub_m\"><a href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("korporaciya-ajpi");
        echo "\">Корпорация АйПи</a></li>
                        <li class=\"sub_m\"><a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">Контакты</a></li>
                    </ul>
                </div>
                <div id=\"lnb_m_2\">
                </div>
            </div>

        </div>
        <div id=\"sub_v\">
            <h2>Заказ</h2>
            <div id=\"con_box\">
                <p class=\"p11\">
                    <span style=\"font-weight: normal;\">
                     Заполнение и отправка данной формы не накладывают на вас никаких обязательств. Сведения, указанные вами, будут использованы исключительно для обработки вашего заказа. Мы оперативно сообщим условия поставки заинтересовавшего вас товара: цену, сроки поставки, условия оплаты. Если предложенные условия вам понравятся, мы вышлем договор и счет для оплаты.
                        </span>
                </p>
                <br>
            </div>
            ";
        // line 57
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("emptyForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 58
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
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/order.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 58,  131 => 57,  110 => 39,  106 => 38,  90 => 25,  69 => 6,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set banner = Banner.records %}



{##}
<script
        src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
        integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"
        crossorigin=\"anonymous\"></script>
<script>
    var captchas = [];

    var onloadCallback = function() {
        jQuery('.g-recaptcha').each(function(index, el) {
            captchas[el.id] = grecaptcha.render(el, \$(el).data());
        });
    }

    function resetReCaptcha(id) {
        var widget = captchas[id];
        grecaptcha.reset(widget);
    }

</script>
<div id=\"sub03_main_container\" style=\"background:url(/storage/app/media{{ banner.3.path }} )\"></div>
<div id=\"sub_m\">
    <div id=\"sub_m_1\">
        <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"/contacts/\">Контакты</a>> <a href=\"/about-ls-mtron/outline\">О компании</a></p>
    </div>
</div>
<div id=\"s_contents\">
    <div id=\"a_contents\">
        <div id=\"lnb\">
            <div id=\"lnb_m\">
                <div id=\"lnb_m_1\">
                    <ul>
                        <li><h2><a href=\"/about-ls-mtron/outline/\">О компании</a></h2></li>
                        <li class=\"sub_m\"><a href=\"{{ 'korporaciya-ajpi'|page }}\">Корпорация АйПи</a></li>
                        <li class=\"sub_m\"><a href=\"{{ 'contacts'|page }}\">Контакты</a></li>
                    </ul>
                </div>
                <div id=\"lnb_m_2\">
                </div>
            </div>

        </div>
        <div id=\"sub_v\">
            <h2>Заказ</h2>
            <div id=\"con_box\">
                <p class=\"p11\">
                    <span style=\"font-weight: normal;\">
                     Заполнение и отправка данной формы не накладывают на вас никаких обязательств. Сведения, указанные вами, будут использованы исключительно для обработки вашего заказа. Мы оперативно сообщим условия поставки заинтересовавшего вас товара: цену, сроки поставки, условия оплаты. Если предложенные условия вам понравятся, мы вышлем договор и счет для оплаты.
                        </span>
                </p>
                <br>
            </div>
            {% component 'emptyForm' %}
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
</script>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/order.htm", "");
    }
}
