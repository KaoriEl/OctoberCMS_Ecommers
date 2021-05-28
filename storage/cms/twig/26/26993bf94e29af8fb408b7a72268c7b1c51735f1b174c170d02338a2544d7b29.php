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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/spisok-novostej.htm */
class __TwigTemplate_7a86dd011b919f57f07add8ae4de5f44f6cbf353fa9e7041305afc5dc93a56b4 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 43, "if" => 54);
        $filters = array("escape" => 4, "truncate" => 46);
        $functions = array("range" => 56);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'truncate'],
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
        $context["banner"] = twig_get_attribute($this->env, $this->source, ($context["Banner"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 2);
        // line 3
        echo "\t\t<div id=\"sub04_main_container\">
            <div id=\"sub05_main_container\" style=\"background:url(/storage/app/media";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), 6, [], "any", false, false, true, 4), "path", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo " )\"> </div>

        </div>
\t\t<div id=\"sub_m\">
\t\t\t<div id=\"sub_m_1\">
\t\t\t\t<p class=\"sp_01\"><a href=\"/\">Главная&nbsp;</a>>&nbsp;<a href=\"/about-ls-mtron/outline\">О компании</a>>&nbsp;<a href=\"#\">Новости</a></p>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"s_contents\">
\t\t\t<div id=\"a_contents\">

<div id=\"lnb\">

\t\t\t\t<div id=\"lnb_m\">
\t\t\t\t\t<div id=\"lnb_m_1\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><h2><a href=\"/about-ls-mtron/outline\">О компании
</a></h2></li>
                            <li class=\"sub_m\"><a href=\"/korporaciya-ajpi\">Корпорация АйПи</a></li>
\t\t\t\t\t\t\t<li class=\"sub_m\"><a href=\"/news_feed\">Новости</a></li>
                            <li class=\"sub_m\"><a href=\"/contacts/\">Контакты</a></li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
</div>
\t\t\t\t<div id=\"sub_v\">
\t\t\t\t\t<h2>Новости</h2>
                    <br>
\t\t\t\t\t\t<div id=\"sub3_1_1\">
\t\t\t\t\t\t\t<div class=\"snsArea\" style=\"display:inline-table;text-align:right;float:right;margin-right:40px;\"></div>
\t\t\t\t\t\t\t<table style=\"font-size:10pt; font-weight:bold; text-align:center; color:#555555; width:765px; padding:0px 0px 0px 25px\">
\t\t\t\t\t\t\t<colgroup>
\t\t\t\t\t\t\t\t<col width=\"60px\">
\t\t\t\t\t\t\t\t<col width=\"*\">
\t\t\t\t\t\t\t\t<col width=\"120px\">
\t\t\t\t\t\t\t</colgroup>
\t\t\t\t\t\t\t\t<tbody>
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 44
            echo "                                        <tr height=\"50px\"  class=\"tr_line\" style=\"font-weight:normal;\">
                                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</td>
                                            <td><a href=\"../";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 46), 46, $this->source), 65, true]);
            echo "</a></td>
                                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
                            ";
        // line 53
        $context["count"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 53), "lastpage", [], "any", false, false, true, 53);
        // line 54
        echo "                            ";
        if ((($context["count"] ?? null) > 1)) {
            // line 55
            echo "                            <div class=\"paging\">
                            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["count"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 57
                echo "                                <a title='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 57, $this->source), "html", null, true);
                echo "' href='http://ip.marketica-dev.ru/news_feed/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 57, $this->source), "html", null, true);
                echo "'><span class='on'>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 57, $this->source), "html", null, true);
                echo "</span></a>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                ";
        }
        // line 61
        echo "                        </div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/spisok-novostej.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  168 => 60,  154 => 57,  150 => 56,  147 => 55,  144 => 54,  142 => 53,  137 => 50,  128 => 47,  122 => 46,  118 => 45,  115 => 44,  111 => 43,  69 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set banner = Banner.records %}
{% set posts = blogPosts.posts %}
\t\t<div id=\"sub04_main_container\">
            <div id=\"sub05_main_container\" style=\"background:url(/storage/app/media{{ banner.6.path }} )\"> </div>

        </div>
\t\t<div id=\"sub_m\">
\t\t\t<div id=\"sub_m_1\">
\t\t\t\t<p class=\"sp_01\"><a href=\"/\">Главная&nbsp;</a>>&nbsp;<a href=\"/about-ls-mtron/outline\">О компании</a>>&nbsp;<a href=\"#\">Новости</a></p>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"s_contents\">
\t\t\t<div id=\"a_contents\">

<div id=\"lnb\">

\t\t\t\t<div id=\"lnb_m\">
\t\t\t\t\t<div id=\"lnb_m_1\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><h2><a href=\"/about-ls-mtron/outline\">О компании
</a></h2></li>
                            <li class=\"sub_m\"><a href=\"/korporaciya-ajpi\">Корпорация АйПи</a></li>
\t\t\t\t\t\t\t<li class=\"sub_m\"><a href=\"/news_feed\">Новости</a></li>
                            <li class=\"sub_m\"><a href=\"/contacts/\">Контакты</a></li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
</div>
\t\t\t\t<div id=\"sub_v\">
\t\t\t\t\t<h2>Новости</h2>
                    <br>
\t\t\t\t\t\t<div id=\"sub3_1_1\">
\t\t\t\t\t\t\t<div class=\"snsArea\" style=\"display:inline-table;text-align:right;float:right;margin-right:40px;\"></div>
\t\t\t\t\t\t\t<table style=\"font-size:10pt; font-weight:bold; text-align:center; color:#555555; width:765px; padding:0px 0px 0px 25px\">
\t\t\t\t\t\t\t<colgroup>
\t\t\t\t\t\t\t\t<col width=\"60px\">
\t\t\t\t\t\t\t\t<col width=\"*\">
\t\t\t\t\t\t\t\t<col width=\"120px\">
\t\t\t\t\t\t\t</colgroup>
\t\t\t\t\t\t\t\t<tbody>
                                    {% for post in posts %}
                                        <tr height=\"50px\"  class=\"tr_line\" style=\"font-weight:normal;\">
                                            <td>{{ post.id }}</td>
                                            <td><a href=\"../{{ post.slug }}\">{{ post.excerpt|truncate(65, true) }}</a></td>
                                            <td>{{ post.title }}</td>
                                        </tr>
                                    {% endfor %}

\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
                            {% set count = blogPosts.posts.lastpage %}
                            {% if count > 1  %}
                            <div class=\"paging\">
                            {% for i in 1..count %}
                                <a title='{{ i }}' href='http://ip.marketica-dev.ru/news_feed/{{ i }}'><span class='on'>{{ i }}</span></a>

                            {% endfor %}
                                {% endif %}
                        </div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/spisok-novostej.htm", "");
    }
}
