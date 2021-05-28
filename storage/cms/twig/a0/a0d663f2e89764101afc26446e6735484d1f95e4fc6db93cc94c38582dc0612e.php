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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/faq.htm */
class __TwigTemplate_e13cac73cc5b67a0993406c8a0fca746d6d6d187c7320f09767dbed7f43e979c extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 30);
        $filters = array("escape" => 3);
        $functions = array("range" => 44);

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
        $context["faq"] = twig_get_attribute($this->env, $this->source, ($context["FAQ"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["banner"] = twig_get_attribute($this->env, $this->source, ($context["Banner"] ?? null), "records", [], "any", false, false, true, 2);
        // line 3
        echo "    <div id=\"sub03_main_container\" style=\"background:url(/storage/app/media";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), 0, [], "any", false, false, true, 3), "path", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo " )\"></div>
    <div id=\"sub_m\">
        <div id=\"sub_m_1\">
            <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"/support/ultracapacitor/introduction\">Поддержка</a>>&nbsp;<a href=\"#\">FAQ&nbsp;</a></p>
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
                <h2>FAQ</h2>
                <div class=\"snsArea\" style=\"display:inline-table;text-align:right;float:right;margin-right:30px;\"></div>
                <div id=\"faq_tap\">
                </div>

                <dl class=\"faq_list\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faq"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq1"]) {
            // line 31
            echo "                    <dt><span>Q</span><a class=\"faq_click\" style=\"cursor:pointer;\" data-no=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq1"], "id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq1"], "quest", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</a></dt>
                    <dd>
                        <div class=\"faq_box\" id=\"faq_id_";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq1"], "id", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\">
                            <div class=\"faq_q1\">A</div>
                            <div class=\"faq_q2\">
                                <p><span style='color: black; font-family: sans-serif'><strong><span lang=\"EN-US\" style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\">";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq1"], "answer", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</span></font></span><span style=\"color: #ff0000;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\">  </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\">  </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span></strong></span></p><p><strong><font ><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\">
</span></font><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span></strong></p><p><br></p><p><br></p>
                            </div>
                        </div>
                    </dd>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </dl>
                <div class=\"paging\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["paginate"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "                        <a title='";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 45, $this->source), "html", null, true);
            echo "' href='http://ip.marketica-dev.ru/faq/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 45, $this->source), "html", null, true);
            echo "'><span class='on'>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 45, $this->source), "html", null, true);
            echo "</span></a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </div>
            </div>
        </div>
    </div>
    <script>
        \$(document).ready(function(){
            \$('.faq_click').on(\"click\",function(){
                \$('.faq_box').hide();
                \$('#faq_id_'+\$(this).attr(\"data-no\")).show();
            });
        });
    </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/faq.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  135 => 45,  131 => 44,  127 => 42,  115 => 36,  109 => 33,  101 => 31,  97 => 30,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set faq = FAQ.records %}
{% set banner = Banner.records %}
    <div id=\"sub03_main_container\" style=\"background:url(/storage/app/media{{ banner.0.path }} )\"></div>
    <div id=\"sub_m\">
        <div id=\"sub_m_1\">
            <p class=\"sp_01\"><a href=\"/\">Главная</a>>&nbsp;<a href=\"/support/ultracapacitor/introduction\">Поддержка</a>>&nbsp;<a href=\"#\">FAQ&nbsp;</a></p>
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
                <h2>FAQ</h2>
                <div class=\"snsArea\" style=\"display:inline-table;text-align:right;float:right;margin-right:30px;\"></div>
                <div id=\"faq_tap\">
                </div>

                <dl class=\"faq_list\">
                    {% for faq1 in faq %}
                    <dt><span>Q</span><a class=\"faq_click\" style=\"cursor:pointer;\" data-no=\"{{ faq1.id }}\">{{ faq1.quest }}</a></dt>
                    <dd>
                        <div class=\"faq_box\" id=\"faq_id_{{ faq1.id }}\">
                            <div class=\"faq_q1\">A</div>
                            <div class=\"faq_q2\">
                                <p><span style='color: black; font-family: sans-serif'><strong><span lang=\"EN-US\" style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\">{{ faq1.answer }}</span></font></span><span style=\"color: #ff0000;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\">  </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\">  </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span></strong></span></p><p><strong><font ><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\">
</span></font><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"> </span></font></span><span style=\"color: red;\"><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span><span lang=\"EN-US\" style='color: red; font-family: sans-serif;'><font  size=\"2\"><span style=\"color: rgb(18, 52, 86); font-family: Arial,sans-serif; font-size: 12pt;\"></span></font></span></strong></p><p><br></p><p><br></p>
                            </div>
                        </div>
                    </dd>
                    {% endfor %}
                </dl>
                <div class=\"paging\">
                    {% for i in 1..paginate %}
                        <a title='{{ i }}' href='http://ip.marketica-dev.ru/faq/{{ i }}'><span class='on'>{{ i }}</span></a>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    <script>
        \$(document).ready(function(){
            \$('.faq_click').on(\"click\",function(){
                \$('.faq_box').hide();
                \$('#faq_id_'+\$(this).attr(\"data-no\")).show();
            });
        });
    </script>
</body>
</html>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/faq.htm", "");
    }
}
