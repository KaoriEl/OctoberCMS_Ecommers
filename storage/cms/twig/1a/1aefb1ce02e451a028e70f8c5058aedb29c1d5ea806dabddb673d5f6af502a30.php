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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/o-kompanii.htm */
class __TwigTemplate_112d9d2beccaa409ecb6cd919279f781221e00d1a44a013019749f06bbbdd9d7 extends \Twig\Template
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
        $filters = array("escape" => 49);
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
        float:right; /* Выравнивание по левому краю */
        margin: 7px 7px 7px 0; /* Отступы вокруг картинки */
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
        margin: -13px 15px 115px 5px;

    }
    .signleft figcaption {
        margin: 0 auto 5px; /* Отступы вокруг абзаца */
    }

</style>
<div id=\"sub05_main_container\" style=\"background:url(/storage/app/media";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), 6, [], "any", false, false, true, 49), "path", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo " )\"> </div>
\t\t<div id=\"sub_m\">
\t\t\t<div id=\"sub_m_1\">
\t\t\t\t<p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"#\">О компании</a></p>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"s_contents\">
\t\t\t<div id=\"a_contents\">
            <div id=\"lnb\">
\t\t\t\t<div id=\"lnb_m\">
                <div id=\"lnb_m_1\">
                    <ul>
                        <li><h2><a href=\"/about-ls-mtron/outline/\">О компании</a></h2></li>
                        <li class=\"sub_m\"><a href=\"/korporaciya-ajpi\">Корпорация АйПи</a></li>
                        <li class=\"sub_m\"><a href=\"/contacts/\">Контакты</a></li>
                    </ul>
                </div>
\t\t\t\t</div>
                </div>
\t\t\t\t<div id=\"sub_v\">
\t\t\t\t\t<h2>LS Mtron - ваш партнер в области инновационных технологий</h2>

\t\t\t\t\t<div class=\"sub3_1_1 about\">
                        <div class=\"uk-grid\">
                            <div class=\"uk-width-3-5\">
                                <p>
                                    <div class=\"uk-width-2-5 uk-text-center\">
                                        <figure class=\"sign\">
                                <p>  <img src=\"http://ultra-cap.ru/images/lsmtron/lstower.jpg\" alt=\"LS Tower\" class=\"rightimg\"></p>
                                <figcaption>Здание штаб-квартиры LS Mtron - LS Tower</figcaption>
                                </figure>
                            </div>
                                <ul class=\"uk-list uk-list-space\">
                                    <li>Компания LS Mtron основана в июле 2008 года. До этого предприятие было подразделением LG Electronics.</li>
                                    <br>
                                    <li>Коллектив LS Mtron в 2014 году насчитывал 2&nbsp;950 сотрудников в Корее и 3&nbsp;330 сотрудников в дочерних компаниях за рубежом.</li>
                                    <br>
                                    <li>Объем продаж LS Mtron в 2014 году составил приблизительно 1,7 миллиарда долларов США, при этом доля экспортных продаж достигла 58%.</li>
                                    <br>
                                    <li>Представительства и предприятия LS Mtron открыты в 14 странах по всему миру.</li>
                                </ul>
                                </p>
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

                                <p>
                                    <strong>Штаб-квартира LS Mtron в Корее:</strong>
                                    <br>
                                <ol class=\"uk-list\">
                                    <li>11F, LS Tower, 1026-6, Hogye-dong, Dongan-gu,</li>
                                    <li>Anyang, Gyonggido, Korea</li>
                                    <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>Tel. No: 031-689-8288</li>
                                    <li><i class=\"uk-icon uk-icon-fax uk-text-muted\"></i>Facsimile No: 031-689-8298 </li>
                                </ol>
                                </p>
                            </div>

                        </div>
                        <div class=\"uk-grid\">
                            <div class=\"uk-width-1-3\" style=\"margin-top:20px;\">
                                <figure class=\"signleft\">
                                    <p><img src=\"http://ultra-cap.ru/images/lsmtron/Ja-Eun-Koo.jpg\" alt=\"Вице-президент LS Mtron Ja-Eun Koo\" class=\"leftimg\"></p>
                                    <figcaption>Вице-президент LS Mtron Ja-Eun Koo</figcaption>
                                </figure>
                            </div>
                            <div class=\"uk-width-2-3\">
                                <img src=\" https://avatanplus.com/files/resources/original/5b940e6c72f12165ba5857b7.png\" style=\"width: 50px; height: 30%;margin-left: -26px;margin-top: 10px;\" class=\"leftimg\" >
                                <img src=\"https://img2.pngio.com/quotation-clipart-communication-icon-quotation-marks-png-quotation-marks-clip-png-980_818.png\" style=\"width: 50px;margin-left: -26px;margin-top: 10px;\" class=\"leftimg\" >
                                <img src=\" https://avatanplus.com/files/resources/original/5b940e6c72f12165ba5857b7.png\" style=\"width: 50px; height: 30%;margin-left: -26px;margin-top: 10px; opacity: 0\" class=\"leftimg\" >
                                <blockquote style=\"display: contents;\">
                                <p>
                                    LS Mtron развивается, чтобы стать &quot;Глобальной Компанией №1&quot; в производстве промышленной техники
                                    и высокотехнологичных компонентов.</p>
                                <p style=\"padding-left: 55px\">Для продвижения к более комфортоному и совершенному миру, мы в LS Mtron непрестанно содействуем
                                    изменениям и инновациям, руководствуясь нашим видением прогресса, чтобы стать для вас &quot;Партнером в инновационных технологиях&quot;.
                                    Кроме того, за счет непрерывного развития технологий, мы играем свою роль в создании нового мира. Благодаря таким усилиям,
                                    LS Mtron уверенно позиционируется, как настоящий партнер для своих клиентов во всем мире.</p>
                                <p style=\"padding-left: 55px\">С духом безграничного стремления к прогрессу, мы в LS Mtron никогда не прекратим двигаться к инновациям для создания все более ценных ресурсов для наших клиентов.
                                    Мы искренне обещаем сделать все возможное, чтобы стать компанией, которой доверяют все.</p>
                                <p style=\"padding-left: 55px\">Большое спасибо.</p>

                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
\t\$(document).ready(function(){
\t\t\$('#s_contents').css(\"height\",\"1600px\");
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/o-kompanii.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 49,  66 => 3,  64 => 2,  62 => 1,);
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
        float:right; /* Выравнивание по левому краю */
        margin: 7px 7px 7px 0; /* Отступы вокруг картинки */
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
        margin: -13px 15px 115px 5px;

    }
    .signleft figcaption {
        margin: 0 auto 5px; /* Отступы вокруг абзаца */
    }

</style>
<div id=\"sub05_main_container\" style=\"background:url(/storage/app/media{{ banner.6.path }} )\"> </div>
\t\t<div id=\"sub_m\">
\t\t\t<div id=\"sub_m_1\">
\t\t\t\t<p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"#\">О компании</a></p>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"s_contents\">
\t\t\t<div id=\"a_contents\">
            <div id=\"lnb\">
\t\t\t\t<div id=\"lnb_m\">
                <div id=\"lnb_m_1\">
                    <ul>
                        <li><h2><a href=\"/about-ls-mtron/outline/\">О компании</a></h2></li>
                        <li class=\"sub_m\"><a href=\"/korporaciya-ajpi\">Корпорация АйПи</a></li>
                        <li class=\"sub_m\"><a href=\"/contacts/\">Контакты</a></li>
                    </ul>
                </div>
\t\t\t\t</div>
                </div>
\t\t\t\t<div id=\"sub_v\">
\t\t\t\t\t<h2>LS Mtron - ваш партнер в области инновационных технологий</h2>

\t\t\t\t\t<div class=\"sub3_1_1 about\">
                        <div class=\"uk-grid\">
                            <div class=\"uk-width-3-5\">
                                <p>
                                    <div class=\"uk-width-2-5 uk-text-center\">
                                        <figure class=\"sign\">
                                <p>  <img src=\"http://ultra-cap.ru/images/lsmtron/lstower.jpg\" alt=\"LS Tower\" class=\"rightimg\"></p>
                                <figcaption>Здание штаб-квартиры LS Mtron - LS Tower</figcaption>
                                </figure>
                            </div>
                                <ul class=\"uk-list uk-list-space\">
                                    <li>Компания LS Mtron основана в июле 2008 года. До этого предприятие было подразделением LG Electronics.</li>
                                    <br>
                                    <li>Коллектив LS Mtron в 2014 году насчитывал 2&nbsp;950 сотрудников в Корее и 3&nbsp;330 сотрудников в дочерних компаниях за рубежом.</li>
                                    <br>
                                    <li>Объем продаж LS Mtron в 2014 году составил приблизительно 1,7 миллиарда долларов США, при этом доля экспортных продаж достигла 58%.</li>
                                    <br>
                                    <li>Представительства и предприятия LS Mtron открыты в 14 странах по всему миру.</li>
                                </ul>
                                </p>
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

                                <p>
                                    <strong>Штаб-квартира LS Mtron в Корее:</strong>
                                    <br>
                                <ol class=\"uk-list\">
                                    <li>11F, LS Tower, 1026-6, Hogye-dong, Dongan-gu,</li>
                                    <li>Anyang, Gyonggido, Korea</li>
                                    <li><i class=\"uk-icon uk-icon-phone uk-text-muted\"></i>Tel. No: 031-689-8288</li>
                                    <li><i class=\"uk-icon uk-icon-fax uk-text-muted\"></i>Facsimile No: 031-689-8298 </li>
                                </ol>
                                </p>
                            </div>

                        </div>
                        <div class=\"uk-grid\">
                            <div class=\"uk-width-1-3\" style=\"margin-top:20px;\">
                                <figure class=\"signleft\">
                                    <p><img src=\"http://ultra-cap.ru/images/lsmtron/Ja-Eun-Koo.jpg\" alt=\"Вице-президент LS Mtron Ja-Eun Koo\" class=\"leftimg\"></p>
                                    <figcaption>Вице-президент LS Mtron Ja-Eun Koo</figcaption>
                                </figure>
                            </div>
                            <div class=\"uk-width-2-3\">
                                <img src=\" https://avatanplus.com/files/resources/original/5b940e6c72f12165ba5857b7.png\" style=\"width: 50px; height: 30%;margin-left: -26px;margin-top: 10px;\" class=\"leftimg\" >
                                <img src=\"https://img2.pngio.com/quotation-clipart-communication-icon-quotation-marks-png-quotation-marks-clip-png-980_818.png\" style=\"width: 50px;margin-left: -26px;margin-top: 10px;\" class=\"leftimg\" >
                                <img src=\" https://avatanplus.com/files/resources/original/5b940e6c72f12165ba5857b7.png\" style=\"width: 50px; height: 30%;margin-left: -26px;margin-top: 10px; opacity: 0\" class=\"leftimg\" >
                                <blockquote style=\"display: contents;\">
                                <p>
                                    LS Mtron развивается, чтобы стать &quot;Глобальной Компанией №1&quot; в производстве промышленной техники
                                    и высокотехнологичных компонентов.</p>
                                <p style=\"padding-left: 55px\">Для продвижения к более комфортоному и совершенному миру, мы в LS Mtron непрестанно содействуем
                                    изменениям и инновациям, руководствуясь нашим видением прогресса, чтобы стать для вас &quot;Партнером в инновационных технологиях&quot;.
                                    Кроме того, за счет непрерывного развития технологий, мы играем свою роль в создании нового мира. Благодаря таким усилиям,
                                    LS Mtron уверенно позиционируется, как настоящий партнер для своих клиентов во всем мире.</p>
                                <p style=\"padding-left: 55px\">С духом безграничного стремления к прогрессу, мы в LS Mtron никогда не прекратим двигаться к инновациям для создания все более ценных ресурсов для наших клиентов.
                                    Мы искренне обещаем сделать все возможное, чтобы стать компанией, которой доверяют все.</p>
                                <p style=\"padding-left: 55px\">Большое спасибо.</p>

                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
\t\$(document).ready(function(){
\t\t\$('#s_contents').css(\"height\",\"1600px\");
\t});
</script>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/o-kompanii.htm", "");
    }
}
