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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/header.htm */
class __TwigTemplate_8143f29dae0d9aa287615041b89c58bd49d7ab82e68b018641caa55bf984bc5f extends \Twig\Template
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
        $tags = array("set" => 1, "component" => 27, "for" => 58, "if" => 60);
        $filters = array("escape" => 30, "theme" => 40, "page" => 70);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component', 'for', 'if'],
                ['escape', 'theme', 'page'],
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, true, 1), "active", [], "method", false, false, true, 1);
        // line 2
        echo "<style>
    .search_input {
       margin-left: 10px;
    }

    .search_input input{
        padding-left: 35px;
    }
    .flex-block {
        display: -webkit-flex;
        display: flex;
        margin-bottom: 20px;
    }
    .flex-button {
        margin-left: 5px;
        -webkit-flex-shrink: 0;
        flex-shrink: 0;
        margin-top: -2px;
    }

    #ya-site-form0 .ya-site-form__form *{
        height: 27px !important;
        font-family: sans-serif !important;
    }
</style>
<!Doctype html>";
        // line 27
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("builderList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "<html>
<head>
    <title>";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "title", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=1150\">
    <meta name=\"Subject\" content=\" \">
    <meta name=\"title\" content=\" \"/>
    <script
            src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
            integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"
            crossorigin=\"anonymous\"></script>
            <link href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/sub.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <script src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
            <script src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-ui.min.js");
        echo "\"></script>
            <script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/function.js");
        echo "\"></script>
</head>
<div id=\"wrap\">
    <div id=\"header\">
        <div id=\"section\">
            <h1 id=\"h1\"><a href=\"/\"><img style=\"padding-top:15px\" src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\"></a></h1>
            <div id=\"top\">
                <div id=\"top_01\" style=\"text-align: right; position: relative; left: -2.3%;\">
                    <a href=\"tel:88005553361\" style=\"color: #fff;\">";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Contact"] ?? null), "records", [], "any", false, false, true, 52), 0, [], "any", false, false, true, 52), "phone_first", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "</a>
                </div>
                <div id=\"top_02\">
                    <ul class=\"top_ul3 \">
                        <li class=\"dropdown\" style=\"width:140px;\"><a href=\"/category/diskretnye-yachejki\" class=\"dropbtn\">Продукция</a>
                            <div class=\"dropdown-content\" style=\"width:130px;\">
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 59
            echo "                                    ";
            $context["categoriy_child"] = twig_get_attribute($this->env, $this->source, $context["category"], "children_id_list", [], "any", false, false, true, 59);
            // line 60
            echo "                                    ";
            if ((($context["categoriy_child"] ?? null) != null)) {
                // line 61
                echo "                                        <a href=\"/category/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 63
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </div>
                        </li>

                        <li style=\"width:1px;\"><img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn_title.jpg");
        echo "\">
                        </li>

                        <li class=\"dropdown\" style=\"width:140px;\"><a href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("support");
        echo "\" class=\"dropbtn\">Поддержка</a>
                        <div class=\"dropdown-content\" style=\"width:130px;\">
                                <a href=\"/support/ultracapacitor/introduction\">Руководство по применению</a>
                                <a href=\"/certificates/default\">Сертификаты</a>
                                <a href=\"/faq/default\">Вопрос-ответ</a>
                                <a href=\"/document/default\">Документы</a>
                            </div>

                        </li>

                        <li style=\"width:1px;\"><img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn_title.jpg");
        echo "\">
                        </li>

                        <li class=\"dropdown\" style=\"width:150px;\"><a href=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("order");
        echo "\" class=\"dropbtn\">Заказ</a>
                        </li>
                        <li style=\"width:1px;\"><img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn_title.jpg");
        echo "\"></li>

                        <li class=\"dropdown\" style=\"width:140px;\"><a href=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("o-kompanii");
        echo "\" class=\"dropbtn\">О компании</a>
                        <div class=\"dropdown-content\" style=\"width:130px;\">
                            <a href=\"/about-ls-mtron/outline/\">О компании</a>
                            <a href=\"/korporaciya-ajpi\">Корпорация АйПи</a>
                            <a href=\"/news_feed/1\">Новости</a>
                            <a href=\"/contacts/\">Контакты</a>
                        </div>
                        <li style=\"width:1px;\"><img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn_title.jpg");
        echo "\"></li>
                        <li class=\"\" style=\"width:140px;\">
                            <div style=\"    margin-top: -9px !important; width: 215px;\" class=\"ya-site-form ya-site-form_inited_no\" data-bem=\"{&quot;action&quot;:&quot;http://ip.marketica-dev.ru/search&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:15,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по ip.marketica-dev.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_blank&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2449932,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#E9E9E9&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск по сайту&quot;,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}\"><form action=\"https://yandex.ru/search/site/\" method=\"get\" target=\"_blank\" accept-charset=\"utf-8\"><input type=\"hidden\" name=\"searchid\" value=\"2449932\"/><input type=\"hidden\" name=\"l10n\" value=\"ru\"/><input type=\"hidden\" name=\"reqenc\" value=\"\"/><input type=\"search\" name=\"text\" value=\"\"/><input type=\"submit\" value=\"Найти\"/></form></div><style type=\"text/css\">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type=\"text/javascript\">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 94,  215 => 87,  210 => 85,  205 => 83,  199 => 80,  186 => 70,  180 => 67,  175 => 64,  169 => 63,  161 => 61,  158 => 60,  155 => 59,  151 => 58,  142 => 52,  136 => 49,  128 => 44,  124 => 43,  120 => 42,  116 => 41,  112 => 40,  99 => 30,  95 => 28,  91 => 27,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categories = CategoryList.make().active() %}
<style>
    .search_input {
       margin-left: 10px;
    }

    .search_input input{
        padding-left: 35px;
    }
    .flex-block {
        display: -webkit-flex;
        display: flex;
        margin-bottom: 20px;
    }
    .flex-button {
        margin-left: 5px;
        -webkit-flex-shrink: 0;
        flex-shrink: 0;
        margin-top: -2px;
    }

    #ya-site-form0 .ya-site-form__form *{
        height: 27px !important;
        font-family: sans-serif !important;
    }
</style>
<!Doctype html>{% component 'builderList' %}
<html>
<head>
    <title>{{ this.page.title }}</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=1150\">
    <meta name=\"Subject\" content=\" \">
    <meta name=\"title\" content=\" \"/>
    <script
            src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
            integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"
            crossorigin=\"anonymous\"></script>
            <link href=\"{{ 'assets/css/main.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ 'assets/css/sub.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\">
            <script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
            <script src=\"{{ 'assets/js/jquery-ui.min.js'|theme }}\"></script>
            <script src=\"{{ 'assets/js/function.js'|theme }}\"></script>
</head>
<div id=\"wrap\">
    <div id=\"header\">
        <div id=\"section\">
            <h1 id=\"h1\"><a href=\"/\"><img style=\"padding-top:15px\" src=\"{{ 'assets/images/logo.png'|theme }}\"></a></h1>
            <div id=\"top\">
                <div id=\"top_01\" style=\"text-align: right; position: relative; left: -2.3%;\">
                    <a href=\"tel:88005553361\" style=\"color: #fff;\">{{ Contact.records.0.phone_first }}</a>
                </div>
                <div id=\"top_02\">
                    <ul class=\"top_ul3 \">
                        <li class=\"dropdown\" style=\"width:140px;\"><a href=\"/category/diskretnye-yachejki\" class=\"dropbtn\">Продукция</a>
                            <div class=\"dropdown-content\" style=\"width:130px;\">
                                {% for category in categories %}
                                    {% set categoriy_child = category.children_id_list %}
                                    {% if categoriy_child != null %}
                                        <a href=\"/category/{{ category.slug }}\">{{ category.name }}</a>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </li>

                        <li style=\"width:1px;\"><img src=\"{{ 'assets/images/btn_title.jpg'|theme }}\">
                        </li>

                        <li class=\"dropdown\" style=\"width:140px;\"><a href=\"{{ 'support'|page }}\" class=\"dropbtn\">Поддержка</a>
                        <div class=\"dropdown-content\" style=\"width:130px;\">
                                <a href=\"/support/ultracapacitor/introduction\">Руководство по применению</a>
                                <a href=\"/certificates/default\">Сертификаты</a>
                                <a href=\"/faq/default\">Вопрос-ответ</a>
                                <a href=\"/document/default\">Документы</a>
                            </div>

                        </li>

                        <li style=\"width:1px;\"><img src=\"{{ 'assets/images/btn_title.jpg'|theme }}\">
                        </li>

                        <li class=\"dropdown\" style=\"width:150px;\"><a href=\"{{ 'order'|page }}\" class=\"dropbtn\">Заказ</a>
                        </li>
                        <li style=\"width:1px;\"><img src=\"{{ 'assets/images/btn_title.jpg'|theme }}\"></li>

                        <li class=\"dropdown\" style=\"width:140px;\"><a href=\"{{ 'o-kompanii'|page }}\" class=\"dropbtn\">О компании</a>
                        <div class=\"dropdown-content\" style=\"width:130px;\">
                            <a href=\"/about-ls-mtron/outline/\">О компании</a>
                            <a href=\"/korporaciya-ajpi\">Корпорация АйПи</a>
                            <a href=\"/news_feed/1\">Новости</a>
                            <a href=\"/contacts/\">Контакты</a>
                        </div>
                        <li style=\"width:1px;\"><img src=\"{{ 'assets/images/btn_title.jpg'|theme }}\"></li>
                        <li class=\"\" style=\"width:140px;\">
                            <div style=\"    margin-top: -9px !important; width: 215px;\" class=\"ya-site-form ya-site-form_inited_no\" data-bem=\"{&quot;action&quot;:&quot;http://ip.marketica-dev.ru/search&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:15,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по ip.marketica-dev.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_blank&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2449932,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#E9E9E9&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск по сайту&quot;,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}\"><form action=\"https://yandex.ru/search/site/\" method=\"get\" target=\"_blank\" accept-charset=\"utf-8\"><input type=\"hidden\" name=\"searchid\" value=\"2449932\"/><input type=\"hidden\" name=\"l10n\" value=\"ru\"/><input type=\"hidden\" name=\"reqenc\" value=\"\"/><input type=\"search\" name=\"text\" value=\"\"/><input type=\"submit\" value=\"Найти\"/></form></div><style type=\"text/css\">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type=\"text/javascript\">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/header.htm", "");
    }
}
