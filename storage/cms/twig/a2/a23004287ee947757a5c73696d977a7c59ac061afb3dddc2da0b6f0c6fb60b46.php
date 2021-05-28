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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/document.htm */
class __TwigTemplate_9bcf278099be27bdf791f3c704531e7f86b85bf85381cf9feb0fa149d7debdcb extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 39);
        $filters = array("escape" => 4);
        $functions = array("range" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape'],
                ['range']
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
        $context["document"] = twig_get_attribute($this->env, $this->source, ($context["documents"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["banner"] = twig_get_attribute($this->env, $this->source, ($context["Banners"] ?? null), "records", [], "any", false, false, true, 2);
        // line 3
        $context["paginate"] = twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "lastPage", [], "any", false, false, true, 3);
        // line 4
        echo "    <div id=\"sub03_main_container\" style=\"background:url(/storage/app/media";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), 2, [], "any", false, false, true, 4), "path", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo " )\"></div>
    <div id=\"sub_m\">
        <div id=\"sub_m_1\">
            <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"/support/ultracapacitor/introduction\">Поддержка</a>>&nbsp;<a href=\"#\">Документы&nbsp;</a></p>
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
            <div id=\"sub_v\">
                <h2>Документы</h2>
                <div class=\"snsArea\" style=\"text-align:right;float:right;margin-right:35px;width:150px;margin-top:50px;\"></div>
                <table style=\"font-size:10pt; text-align:center; color:#555555; width:765px; padding:0px 0px 0px 25px\">
                    <colgroup>
                        <col width=\"*\">
                        <col width=\"120px\">
                    </colgroup>
                    <tbody>
                    <tr class=\"tb02_tr\">
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["document"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["documentOpen"]) {
            // line 40
            echo "                    <tr height=\"50px\" class=\"tr_line\">
                        <td style=\"text-align:left;\">";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["documentOpen"], "name", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"/storage/app/media";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["documentOpen"], "path", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "\">
                                PDF
                            </a>
                        </td>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documentOpen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </tr>
                    </tbody>
                </table>
                <div class=\"paging\">
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["paginate"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 53
            echo "                        <a title='";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 53, $this->source), "html", null, true);
            echo "' href='http://ip.marketica-dev.ru/document/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 53, $this->source), "html", null, true);
            echo "'><span class='on'>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 53, $this->source), "html", null, true);
            echo "</span></a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/document.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 55,  140 => 53,  136 => 52,  130 => 48,  119 => 43,  114 => 41,  111 => 40,  107 => 39,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set document = documents.records %}
{% set banner = Banners.records %}
{% set paginate = document.lastPage %}
    <div id=\"sub03_main_container\" style=\"background:url(/storage/app/media{{ banner.2.path }} )\"></div>
    <div id=\"sub_m\">
        <div id=\"sub_m_1\">
            <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"/support/ultracapacitor/introduction\">Поддержка</a>>&nbsp;<a href=\"#\">Документы&nbsp;</a></p>
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
            <div id=\"sub_v\">
                <h2>Документы</h2>
                <div class=\"snsArea\" style=\"text-align:right;float:right;margin-right:35px;width:150px;margin-top:50px;\"></div>
                <table style=\"font-size:10pt; text-align:center; color:#555555; width:765px; padding:0px 0px 0px 25px\">
                    <colgroup>
                        <col width=\"*\">
                        <col width=\"120px\">
                    </colgroup>
                    <tbody>
                    <tr class=\"tb02_tr\">
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    {% for documentOpen in document %}
                    <tr height=\"50px\" class=\"tr_line\">
                        <td style=\"text-align:left;\">{{ documentOpen.name }}</td>
                        <td>
                            <a href=\"/storage/app/media{{ documentOpen.path }}\">
                                PDF
                            </a>
                        </td>
                        {% endfor %}
                    </tr>
                    </tbody>
                </table>
                <div class=\"paging\">
                    {% for i in 1..paginate %}
                        <a title='{{ i }}' href='http://ip.marketica-dev.ru/document/{{ i }}'><span class='on'>{{ i }}</span></a>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/document.htm", "");
    }
}
