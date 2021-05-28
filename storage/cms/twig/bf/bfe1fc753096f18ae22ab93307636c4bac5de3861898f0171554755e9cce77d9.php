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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/category_product.htm */
class __TwigTemplate_e2289696c53bd2284d14831eaf15a927352725bb2e8aaf55fc8f72424ddd5bac extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 19, "if" => 21);
        $filters = array("escape" => 6, "page" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
        $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, true, 1);
        // line 2
        $context["categories"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, true, 2), "active", [], "method", false, false, true, 2);
        // line 3
        $context["propget"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 3), "active", [], "method", false, false, true, 3), "all", [], "method", false, false, true, 3);
        // line 4
        $context["banner"] = twig_get_attribute($this->env, $this->source, ($context["Banner"] ?? null), "records", [], "any", false, false, true, 4);
        // line 5
        $context["obPropertyList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["propget"] ?? null), 1, [], "any", false, false, true, 5), "property", [], "any", false, false, true, 5);
        // line 6
        echo "<div id=\"sub01_main_container\" style=\"background:url(/storage/app/media";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), 4, [], "any", false, false, true, 6), "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo " )\"></div>
<div id=\"sub_m\">
    <div id=\"sub_m_1\">
        <p class=\"sp_01\"><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Главная&nbsp;</a>&nbsp;/ ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "&nbsp;</p>
    </div>
</div>
<div id=\"s_contents\">
    <div id=\"a_contents\">
        <div id=\"lnb\">
            <div id=\"lnb_m\">
                <div id=\"lnb_m_1\">
                    <ul>
                        <li><h2><a href=\"/category/diskretnye-yachejki\">Продукция</a></h2></li>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                            ";
            $context["categoriy_child"] = twig_get_attribute($this->env, $this->source, $context["category"], "children_id_list", [], "any", false, false, true, 20);
            // line 21
            echo "                            ";
            if ((($context["categoriy_child"] ?? null) != null)) {
                // line 22
                echo "                                <li class=\"sub_m\"><a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 24
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
                    </ul>
                </div>
            </div>

        </div>
        <div id=\"sub_v\">
            <h2 style=\"float:left;width:100%;\">";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "name", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</h2>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "children", [], "any", false, false, true, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["obChildCategory"]) {
            // line 34
            echo "                ";
            $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 34), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, true, 34)], "method", false, false, true, 34), "active", [], "method", false, false, true, 34), "category", [0 => twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "id", [], "any", false, false, true, 34)], "method", false, false, true, 34);
            // line 35
            echo "                <div class=\"Div100\">
                ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, true, 36) == "Стандартные модули")) {
                // line 37
                echo "                    <div class=\"sub_t_title\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "
                    ";
            } else {
                // line 39
                echo "                        <div class=\"sub_t_title\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
                        <img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "preview_image", [], "any", false, false, true, 40), "path", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "\" style=\"width: 110px;height: 110px;\">
                    ";
            }
            // line 42
            echo "                </div>
                <div class=\"sub01_tb01\">
                    ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, true, 44) == "Стандартные модули")) {
                // line 45
                echo "<style>

    table{
        border-spacing: 0px;
        table-layout: fixed;
    }

    .sub_t_title {
        color: #06377A;
        font-weight: bold;
        margin-left: 30px;
        border-top: 2px solid #BEC5D8;
        width: 100%;
        margin-top: 40px;
        margin-bottom: 20px;
        float: left;
        font-size: 18px;
    }

    .poster {
        position: relative;
        margin: 100px auto;
        height: 200px;
        width: 150px;
    }

    .descr {
        display: none;
        margin-left: 100px;
        padding: 0;
        margin-top: -24px;
        background: #f3f3f3;
        height: auto;
        -moz-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0 5px 5px rgb(0 0 0 / 30%);
        box-shadow: 0 5px 5px rgb(0 0 0 / 30%);
    }


    .poster:hover .descr {
        display: block;
        position: absolute;
        top: 120px;
        z-index: 9999;
        width: 400px;
    }

    .sub_t_title {
        color: #06377A;
        font-weight: bold;
        margin-left: 30px !important;
        border-top: 2px solid #BEC5D8;
        width: 109% !important;
        margin-top: 40px;
        margin-bottom: 20px;
        float: left;
        font-size: 18px;
    }
    .table2 th {
        font-size: 8pt;
        text-align: center;
        color: #555;
        height: 45px;
        background: #efefef;
        width: 77px;
    }
</style>
                    <div id=\"sub_v\" style=\"margin-bottom: 50px;margin-top: -65px;\">
                        <div id=\"sub01_tb02\">
                            <table  class=\"table2\">
                                <thead>
                                <tr>
                                    <th>Модуль</th>
                                    <th>Наименование </th>
                                    <th>Ёмкость </th>
                                    <th>Напряжение</th>
                                    <th>ESR </th>
                                    <th>Ширина</th>
                                    <th>Высота</th>
                                    <th>Длина</th>
                                    <th>Выводы </th>
                                    <th>Конструктив</td>
                                    <th>Документация</td>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                // line 131
                if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, true, 131)) {
                    // line 132
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["obProductList"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                        // line 133
                        echo "                                <tr height=\"98px\">
                                    <td class=\"poster\"><img src=\"";
                        // line 134
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "preview_image", [], "any", false, false, true, 134), "path", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                        echo "\" style=\"width: 100%;\"></span>
                                        <div class=\"descr\">
                                            <img style=\"    max-width: 100%;max-height: 100%;object-fit: contain;\" src=\"";
                        // line 136
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "preview_image", [], "any", false, false, true, 136), "path", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                        echo "\">
                                        </div>
                                    </td>
                                    <td style=\"\">";
                        // line 139
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                        echo "</td>
                                    ";
                        // line 140
                        $context["ProductProp"] = twig_get_attribute($this->env, $this->source, $context["Product"], "property", [], "any", false, false, true, 140);
                        // line 141
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["ProductProp"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["key"] => $context["obProperty"]) {
                            // line 142
                            echo "                                    <td>
                                            ";
                            // line 143
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 143)) {
                                // line 144
                                echo "                                                <a href=\"/storage/app/media";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 144), "getValueString", [], "method", false, false, true, 144), 144, $this->source), "html", null, true);
                                echo "\"
                                                   target=\"_blank\">
                                                    <img src=\"/themes/ultra-cup/assets/images/sub/btn_save.png\">
                                                </a>
                                            ";
                            } else {
                                // line 149
                                echo "                                            ";
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 149), "getValueString", [], "method", false, false, true, 149) != null)) {
                                    // line 150
                                    echo "                                            ";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 150), "getValueString", [], "method", false, false, true, 150), 150, $this->source), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "measure", [], "any", false, false, true, 150), "name", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                                    echo "
                                            ";
                                }
                                // line 152
                                echo "                                            ";
                            }
                            // line 153
                            echo "                                        </td>
                                    ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['obProperty'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 155
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    echo "                                </tr>
                                </tbody>
                                ";
                }
                // line 159
                echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    </div>
                        ";
            } else {
                // line 166
                echo "                    <style>
                        .sub_t_title {
                            color: #06377a;
                            font-weight: 700;
                            margin-left: 30px;
                            border-top: 2px solid #bec5d8;
                            width: 125px;
                            margin-top: 64px !important;
                            margin-bottom: 30px;
                            float: left;
                            font-size: 18px;
                        }
                        .Div100 {
                            float: left;
                            width: 112% !important;
                        }
                        .poster {
                            position: relative;
                            margin: 100px auto;
                            height: 200px;
                            width: 150px;
                        }

                        .descr {
                            display: none;
                            margin-left: 100px;
                            padding: 0;
                            margin-top: -95px;
                            background: #f3f3f3;
                            height: auto;
                            -moz-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
                            -webkit-box-shadow: 0 5px 5px rgb(0 0 0 / 30%);
                            box-shadow: 0 5px 5px rgb(0 0 0 / 30%);
                        }

                        .poster:hover .descr {
                            display: block;
                            position: absolute;
                            top: 120px;
                            z-index: 9999;
                            width: 400px;
                        }
                        table {
                            border-spacing: 6px !important;
                        }
                    </style>

                    <table class=\"table1\">
                        <thead>
                        <tr>
                            <th>Наименование </th>
                            <th>Ёмкость </th>
                            <th>Напряжение</th>
                            <th>ESR </th>
                            <th>Ширина</th>
                            <th>Высота</th>
                            <th>Выводы </th>
                            <th>Конструктив</td>
                            <th>Документация</td>
                        </tr>
                        </thead>
                        <tbody>
                    ";
                // line 228
                if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, true, 228)) {
                    // line 229
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["obProductList"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                        // line 230
                        echo "                    <tr>
                        <td class=\"poster\"><span href=\"#\"  data-img=\"2_8V100F.jpg\" class=\"show_img\" style=\" color: #003377;   cursor: pointer;\">";
                        // line 231
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
                        echo "</span>
                            <div class=\"descr\">
                                <img style=\"    max-width: 100%;max-height: 100%;object-fit: contain;\" src=\"";
                        // line 233
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "preview_image", [], "any", false, false, true, 233), "path", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
                        echo "\">
                            </div>
                        </td>
                        ";
                        // line 236
                        $context["ProductProp"] = twig_get_attribute($this->env, $this->source, $context["Product"], "property", [], "any", false, false, true, 236);
                        // line 237
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["ProductProp"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["key"] => $context["obProperty"]) {
                            // line 238
                            echo "                            <td>
                                ";
                            // line 239
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 239)) {
                                // line 240
                                echo "                                    <a href=\"/storage/app/media";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 240), "getValueString", [], "method", false, false, true, 240), 240, $this->source), "html", null, true);
                                echo "\"
                                       target=\"_blank\">
                                        <img src=\"/themes/ultra-cup/assets/images/sub/btn_save.png\">
                                    </a>
                                ";
                            } else {
                                // line 245
                                echo "                                ";
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 245), "getValueString", [], "method", false, false, true, 245) != null)) {
                                    // line 246
                                    echo "                                ";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 246), "getValueString", [], "method", false, false, true, 246), 246, $this->source), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "measure", [], "any", false, false, true, 246), "name", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
                                    echo "
                                ";
                                }
                                // line 248
                                echo "                                ";
                            }
                            // line 249
                            echo "                            </td>
                        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['obProperty'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 251
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 252
                    echo "                    </tr>
                    </tbody>
                            ";
                }
                // line 255
                echo "                    </table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    </div>
                    </div>
                ";
            }
            // line 266
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/category_product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 267,  533 => 266,  520 => 255,  515 => 252,  509 => 251,  494 => 249,  491 => 248,  483 => 246,  480 => 245,  471 => 240,  469 => 239,  466 => 238,  448 => 237,  446 => 236,  440 => 233,  435 => 231,  432 => 230,  427 => 229,  425 => 228,  361 => 166,  352 => 159,  347 => 156,  341 => 155,  326 => 153,  323 => 152,  315 => 150,  312 => 149,  303 => 144,  301 => 143,  298 => 142,  280 => 141,  278 => 140,  274 => 139,  268 => 136,  263 => 134,  260 => 133,  255 => 132,  253 => 131,  165 => 45,  163 => 44,  159 => 42,  154 => 40,  149 => 39,  143 => 37,  141 => 36,  138 => 35,  135 => 34,  131 => 33,  127 => 32,  118 => 25,  112 => 24,  104 => 22,  101 => 21,  98 => 20,  94 => 19,  79 => 9,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set obCategory = CategoryPage.get() %}
{% set categories = CategoryList.make().active() %}
{% set propget = ProductList.make().active().all() %}
{% set banner = Banner.records %}
{% set obPropertyList = propget.1.property %}
<div id=\"sub01_main_container\" style=\"background:url(/storage/app/media{{ banner.4.path }} )\"></div>
<div id=\"sub_m\">
    <div id=\"sub_m_1\">
        <p class=\"sp_01\"><a href=\"{{ 'home'|page }}\">Главная&nbsp;</a>&nbsp;/ {{ obCategory.name }}&nbsp;</p>
    </div>
</div>
<div id=\"s_contents\">
    <div id=\"a_contents\">
        <div id=\"lnb\">
            <div id=\"lnb_m\">
                <div id=\"lnb_m_1\">
                    <ul>
                        <li><h2><a href=\"/category/diskretnye-yachejki\">Продукция</a></h2></li>
                        {% for category in categories %}
                            {% set categoriy_child = category.children_id_list %}
                            {% if categoriy_child != null %}
                                <li class=\"sub_m\"><a href=\"{{ category.slug }}\">{{ category.name }}</a></li>
                            {% endif %}
                        {% endfor %}

                    </ul>
                </div>
            </div>

        </div>
        <div id=\"sub_v\">
            <h2 style=\"float:left;width:100%;\">{{obCategory.name}}</h2>
            {% for obChildCategory in obCategory.children %}
                {% set obProductList = ProductList.make().sort(ProductList.getSorting()).active().category(obChildCategory.id) %}
                <div class=\"Div100\">
                {% if obChildCategory.name == 'Стандартные модули' %}
                    <div class=\"sub_t_title\">{{ obChildCategory.name }}
                    {% else %}
                        <div class=\"sub_t_title\">{{ obChildCategory.name }}
                        <img src=\"{{ obChildCategory.preview_image.path }}\" style=\"width: 110px;height: 110px;\">
                    {% endif %}
                </div>
                <div class=\"sub01_tb01\">
                    {% if obChildCategory.name == 'Стандартные модули' %}
<style>

    table{
        border-spacing: 0px;
        table-layout: fixed;
    }

    .sub_t_title {
        color: #06377A;
        font-weight: bold;
        margin-left: 30px;
        border-top: 2px solid #BEC5D8;
        width: 100%;
        margin-top: 40px;
        margin-bottom: 20px;
        float: left;
        font-size: 18px;
    }

    .poster {
        position: relative;
        margin: 100px auto;
        height: 200px;
        width: 150px;
    }

    .descr {
        display: none;
        margin-left: 100px;
        padding: 0;
        margin-top: -24px;
        background: #f3f3f3;
        height: auto;
        -moz-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0 5px 5px rgb(0 0 0 / 30%);
        box-shadow: 0 5px 5px rgb(0 0 0 / 30%);
    }


    .poster:hover .descr {
        display: block;
        position: absolute;
        top: 120px;
        z-index: 9999;
        width: 400px;
    }

    .sub_t_title {
        color: #06377A;
        font-weight: bold;
        margin-left: 30px !important;
        border-top: 2px solid #BEC5D8;
        width: 109% !important;
        margin-top: 40px;
        margin-bottom: 20px;
        float: left;
        font-size: 18px;
    }
    .table2 th {
        font-size: 8pt;
        text-align: center;
        color: #555;
        height: 45px;
        background: #efefef;
        width: 77px;
    }
</style>
                    <div id=\"sub_v\" style=\"margin-bottom: 50px;margin-top: -65px;\">
                        <div id=\"sub01_tb02\">
                            <table  class=\"table2\">
                                <thead>
                                <tr>
                                    <th>Модуль</th>
                                    <th>Наименование </th>
                                    <th>Ёмкость </th>
                                    <th>Напряжение</th>
                                    <th>ESR </th>
                                    <th>Ширина</th>
                                    <th>Высота</th>
                                    <th>Длина</th>
                                    <th>Выводы </th>
                                    <th>Конструктив</td>
                                    <th>Документация</td>
                                </tr>
                                </thead>
                                <tbody>
                                {% if obProductList.isNotEmpty() %}
                                {% for Product in obProductList %}
                                <tr height=\"98px\">
                                    <td class=\"poster\"><img src=\"{{ Product.preview_image.path }}\" style=\"width: 100%;\"></span>
                                        <div class=\"descr\">
                                            <img style=\"    max-width: 100%;max-height: 100%;object-fit: contain;\" src=\"{{ Product.preview_image.path }}\">
                                        </div>
                                    </td>
                                    <td style=\"\">{{ Product.name }}</td>
                                    {% set ProductProp = Product.property %}
                                    {% for key, obProperty in ProductProp %}
                                    <td>
                                            {% if loop.last %}
                                                <a href=\"/storage/app/media{{ obProperty.property_value.getValueString() }}\"
                                                   target=\"_blank\">
                                                    <img src=\"/themes/ultra-cup/assets/images/sub/btn_save.png\">
                                                </a>
                                            {% else %}
                                            {% if obProperty.property_value.getValueString() != null %}
                                            {{ obProperty.property_value.getValueString() }} {{obProperty.measure.name}}
                                            {% endif %}
                                            {% endif %}
                                        </td>
                                    {% endfor %}
                                {% endfor %}
                                </tr>
                                </tbody>
                                {% endif %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    </div>
                        {% else %}
                    <style>
                        .sub_t_title {
                            color: #06377a;
                            font-weight: 700;
                            margin-left: 30px;
                            border-top: 2px solid #bec5d8;
                            width: 125px;
                            margin-top: 64px !important;
                            margin-bottom: 30px;
                            float: left;
                            font-size: 18px;
                        }
                        .Div100 {
                            float: left;
                            width: 112% !important;
                        }
                        .poster {
                            position: relative;
                            margin: 100px auto;
                            height: 200px;
                            width: 150px;
                        }

                        .descr {
                            display: none;
                            margin-left: 100px;
                            padding: 0;
                            margin-top: -95px;
                            background: #f3f3f3;
                            height: auto;
                            -moz-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
                            -webkit-box-shadow: 0 5px 5px rgb(0 0 0 / 30%);
                            box-shadow: 0 5px 5px rgb(0 0 0 / 30%);
                        }

                        .poster:hover .descr {
                            display: block;
                            position: absolute;
                            top: 120px;
                            z-index: 9999;
                            width: 400px;
                        }
                        table {
                            border-spacing: 6px !important;
                        }
                    </style>

                    <table class=\"table1\">
                        <thead>
                        <tr>
                            <th>Наименование </th>
                            <th>Ёмкость </th>
                            <th>Напряжение</th>
                            <th>ESR </th>
                            <th>Ширина</th>
                            <th>Высота</th>
                            <th>Выводы </th>
                            <th>Конструктив</td>
                            <th>Документация</td>
                        </tr>
                        </thead>
                        <tbody>
                    {% if obProductList.isNotEmpty() %}
                    {% for Product in obProductList %}
                    <tr>
                        <td class=\"poster\"><span href=\"#\"  data-img=\"2_8V100F.jpg\" class=\"show_img\" style=\" color: #003377;   cursor: pointer;\">{{ Product.name }}</span>
                            <div class=\"descr\">
                                <img style=\"    max-width: 100%;max-height: 100%;object-fit: contain;\" src=\"{{ Product.preview_image.path }}\">
                            </div>
                        </td>
                        {% set ProductProp = Product.property %}
                        {% for key, obProperty in ProductProp %}
                            <td>
                                {% if loop.last %}
                                    <a href=\"/storage/app/media{{ obProperty.property_value.getValueString() }}\"
                                       target=\"_blank\">
                                        <img src=\"/themes/ultra-cup/assets/images/sub/btn_save.png\">
                                    </a>
                                {% else %}
                                {% if obProperty.property_value.getValueString() != null %}
                                {{ obProperty.property_value.getValueString() }} {{obProperty.measure.name}}
                                {% endif %}
                                {% endif %}
                            </td>
                        {% endfor %}
                        {% endfor %}
                    </tr>
                    </tbody>
                            {% endif %}
                    </table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
</div>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/pages/category_product.htm", "");
    }
}
