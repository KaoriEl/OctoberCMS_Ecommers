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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/korporaciya-ajpi.htm */
class __TwigTemplate_66fdc28a216650424f1178f86309b6e08573865f1e3c9cfe119c225a576d79fc extends \Twig\Template
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
        $filters = array("escape" => 54);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["Company"] ?? null), "records", [], "any", false, false, true, 2);
        // line 3
        echo "<style>
    #sub_v li{
        float:none;
    }

    ol li{
        list-style: disc;
    }
    #sub_v h3 {
        color: #000000;
        font-size: 16pt;
        padding: 45px 0px 0px 0px;
    }

    .rightimg {
        float: right;
        margin: 2px 68px 7px 0;
    }
    .leftimg {
        float: left;
        margin: 57px 7px 7px 11px;

    }

    .sign {
        float: right; /* Выравнивание по правому краю */
        padding: 7px; /* Поля внутри блока */
        margin: -20px 0px 5px 5px

    }
    .sign figcaption {
        margin: 0 auto 5px; /* Отступы вокруг абзаца */
    }


    .signleft {
        float: left;
        padding: 7px;
        margin: -86px 15px 9px 5px;

    }
    .signleft figcaption {
        margin: 0 auto 5px; /* Отступы вокруг абзаца */
        text-align: center;
    }

    #s_contents{
        height: 1100px !important;
    }

</style>
<div id=\"sub05_main_container\" style=\"background:url(/storage/app/media";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), 6, [], "any", false, false, true, 54), "path", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo " )\"> </div>
<!--contents의 시작-->
<div id=\"sub_m\">
    <div id=\"sub_m_1\">
        <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"#\">О компании</a></p>
    </div>
</div>
<div id=\"s_contents\" style=\"height: 1100px;\">
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
            </div>
        </div>
        <div id=\"sub_v\">
            <h2>Корпорация IP - российский дистрибьютор компонентов и решений в области силовой электроники.</h2>

            <div class=\"sub3_1_1 about\">
                ";
        // line 81
        echo "                <div class=\"uk-grid\">
                    <div class=\"uk-width-3-5\">
                        <p>
                            <div class=\"uk-width-2-5 uk-text-center\">
                                <figure class=\"sign\">
                        <p>  <img src=\"http://ultra-cap.ru/images/ipcorp/andreyserdyukov.jpg\" alt=\"LS Tower\" class=\"rightimg\" style=\"    height: 218px;\"></p>
                        <figcaption>Директор Корпорации АйПи Андрей Сердюков</figcaption>
                        </figure>
                    </div>
                    <ul class=\"uk-list uk-list-space\">
                        <li>Компания основана в 2006 году в Новосибирске. Благодаря грамотно сформированной продуктовой линейке, активной позиции и ответственному подходу компания завоевала известность и доверие крупных российских предприятий, как надежный поставщик компонентной базы для производства. Так, Корпорация IP является одним из крупнейших поставщиков силовых полупроводниковых приборов SEMIKRON и Fuji Electric.</li>
                        <br>
                        <li>Дружный коллектив компании в основном состоит из молодых специалистов с профильным техническим образованием. Корпорация IP динамично развивается, как за счет планомерного роста партнерской базы и расширения географии поставок (установились прочные деловые отношения с партнерами в Белоруссии, Казахстане, Украине), так и благодаря освоению новых перспективных направлений. Например, компания заняла уверенные позиции в области поставок силовых конденсаторов, суперконденсаторов (ионисторов), аккумуляторных батарей на основе лития.</li>
                        <br>
                        <li>Деятельность Корпорации IP не ограничена только поставками компонентов. Большая работа ведется по продвижению новых продуктов и решений: мы регулярно проводим технические семинары, участвуем в профильных выставках. Инженерный департамент осуществляет техническую поддержку наших постоянных клиентов, участвует в НИОКР в качестве консультантов и экспертов, занимается собственными разработками.</li>
                        <br>
                    </ul>
                    </p>
                </div>
            </div>
            <div class=\"uk-grid\">
                <div class=\"uk-width-1-3\" style=\"margin-top:20px;\">
                    <figure class=\"signleft\">
                        <p><img src=\"http://ultra-cap.ru/images/ipcorp/stuff.jpg\" alt=\"Вице-президент LS Mtron Ja-Eun Koo\" class=\"leftimg\" style=\"width: 350px;height: 350px;\"></p>
                        <figcaption>Звоните, пишите и приходите в гости!</figcaption>
                    </figure>
                </div>
                <div class=\"uk-width-2-3\">
                    <blockquote style=\"display: contents;\">
                        <p>
                            <br>
                            <strong>Официальный представитель LS Mtron в России:</strong>
                        <ol class=\"uk-list\">
                            ООО &quot;Корпорация АйПи&quot;
                            г. Новосибирск, ул. Плахотного, 131
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;8-800-555-3361 (звонок в России бесплатный)</li>
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;в Москве: +7 (495) 649-64-29</li>
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;в Санкт-Петербурге: +7 (812) 600-36-58</li>
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;в Екатеринбурге: +7 (343) 343-01-32</li>
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;в Новосибирске: +7 (383) 207-55-12</li>
                        </ol>
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    \$(document).ready(function(){
        \$('#s_contents').css(\"height\",\"1600px\");
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/korporaciya-ajpi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 81,  119 => 54,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set banner = Banner.records %}
{% set company = Company.records %}
<style>
    #sub_v li{
        float:none;
    }

    ol li{
        list-style: disc;
    }
    #sub_v h3 {
        color: #000000;
        font-size: 16pt;
        padding: 45px 0px 0px 0px;
    }

    .rightimg {
        float: right;
        margin: 2px 68px 7px 0;
    }
    .leftimg {
        float: left;
        margin: 57px 7px 7px 11px;

    }

    .sign {
        float: right; /* Выравнивание по правому краю */
        padding: 7px; /* Поля внутри блока */
        margin: -20px 0px 5px 5px

    }
    .sign figcaption {
        margin: 0 auto 5px; /* Отступы вокруг абзаца */
    }


    .signleft {
        float: left;
        padding: 7px;
        margin: -86px 15px 9px 5px;

    }
    .signleft figcaption {
        margin: 0 auto 5px; /* Отступы вокруг абзаца */
        text-align: center;
    }

    #s_contents{
        height: 1100px !important;
    }

</style>
<div id=\"sub05_main_container\" style=\"background:url(/storage/app/media{{ banner.6.path }} )\"> </div>
<!--contents의 시작-->
<div id=\"sub_m\">
    <div id=\"sub_m_1\">
        <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"#\">О компании</a></p>
    </div>
</div>
<div id=\"s_contents\" style=\"height: 1100px;\">
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
            </div>
        </div>
        <div id=\"sub_v\">
            <h2>Корпорация IP - российский дистрибьютор компонентов и решений в области силовой электроники.</h2>

            <div class=\"sub3_1_1 about\">
                {#\t\t\t\t\t\t<p> {{ company.0.text1|raw }}</p>#}
                <div class=\"uk-grid\">
                    <div class=\"uk-width-3-5\">
                        <p>
                            <div class=\"uk-width-2-5 uk-text-center\">
                                <figure class=\"sign\">
                        <p>  <img src=\"http://ultra-cap.ru/images/ipcorp/andreyserdyukov.jpg\" alt=\"LS Tower\" class=\"rightimg\" style=\"    height: 218px;\"></p>
                        <figcaption>Директор Корпорации АйПи Андрей Сердюков</figcaption>
                        </figure>
                    </div>
                    <ul class=\"uk-list uk-list-space\">
                        <li>Компания основана в 2006 году в Новосибирске. Благодаря грамотно сформированной продуктовой линейке, активной позиции и ответственному подходу компания завоевала известность и доверие крупных российских предприятий, как надежный поставщик компонентной базы для производства. Так, Корпорация IP является одним из крупнейших поставщиков силовых полупроводниковых приборов SEMIKRON и Fuji Electric.</li>
                        <br>
                        <li>Дружный коллектив компании в основном состоит из молодых специалистов с профильным техническим образованием. Корпорация IP динамично развивается, как за счет планомерного роста партнерской базы и расширения географии поставок (установились прочные деловые отношения с партнерами в Белоруссии, Казахстане, Украине), так и благодаря освоению новых перспективных направлений. Например, компания заняла уверенные позиции в области поставок силовых конденсаторов, суперконденсаторов (ионисторов), аккумуляторных батарей на основе лития.</li>
                        <br>
                        <li>Деятельность Корпорации IP не ограничена только поставками компонентов. Большая работа ведется по продвижению новых продуктов и решений: мы регулярно проводим технические семинары, участвуем в профильных выставках. Инженерный департамент осуществляет техническую поддержку наших постоянных клиентов, участвует в НИОКР в качестве консультантов и экспертов, занимается собственными разработками.</li>
                        <br>
                    </ul>
                    </p>
                </div>
            </div>
            <div class=\"uk-grid\">
                <div class=\"uk-width-1-3\" style=\"margin-top:20px;\">
                    <figure class=\"signleft\">
                        <p><img src=\"http://ultra-cap.ru/images/ipcorp/stuff.jpg\" alt=\"Вице-президент LS Mtron Ja-Eun Koo\" class=\"leftimg\" style=\"width: 350px;height: 350px;\"></p>
                        <figcaption>Звоните, пишите и приходите в гости!</figcaption>
                    </figure>
                </div>
                <div class=\"uk-width-2-3\">
                    <blockquote style=\"display: contents;\">
                        <p>
                            <br>
                            <strong>Официальный представитель LS Mtron в России:</strong>
                        <ol class=\"uk-list\">
                            ООО &quot;Корпорация АйПи&quot;
                            г. Новосибирск, ул. Плахотного, 131
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;8-800-555-3361 (звонок в России бесплатный)</li>
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;в Москве: +7 (495) 649-64-29</li>
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;в Санкт-Петербурге: +7 (812) 600-36-58</li>
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;в Екатеринбурге: +7 (343) 343-01-32</li>
                            <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>&emsp;в Новосибирске: +7 (383) 207-55-12</li>
                        </ol>
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    \$(document).ready(function(){
        \$('#s_contents').css(\"height\",\"1600px\");
    });
</script>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/korporaciya-ajpi.htm", "");
    }
}
