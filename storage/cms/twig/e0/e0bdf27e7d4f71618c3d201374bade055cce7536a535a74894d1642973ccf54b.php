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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/emptyform/default.htm */
class __TwigTemplate_741db179e89d9abf6a5f1fc6c284c12b0dc880d3305e45db638170c2cd183d85 extends \Twig\Template
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
        $tags = array("set" => 26, "for" => 27, "partial" => 101);
        $filters = array("escape" => 32);
        $functions = array("form_ajax" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                ['escape'],
                ['form_ajax']
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
        echo "<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
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
<style>
    select{
        font-family: sans-serif;
    }
    button{
        font-family: sans-serif;
    }

</style>
";
        // line 26
        $context["get_product"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 26), "active", [], "method", false, false, true, 26), "all", [], "method", false, false, true, 26);
        // line 27
        echo "       ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["get_product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "
";
            // line 30
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", ($this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 31, $this->source) . "::onFormSubmit")]);
        echo "
<div id=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 32, $this->source), "html", null, true);
        echo "_forms_flash\" style=\"\"></div>
<br>
<br>
<div id=\"view_c\" style=\"margin-top:20px;\">
    <form name=\"IndexForm\" method=\"post\" action=\"/?enc=L19wb3N0L2NsaWVudFBvc3QuYXNw\" class=\"form-inline\"
          enctype=\"multipart/form-data\">
        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <colgroup>
                <col width=\"15%\">
                <col width=\"35%\">
                <col width=\"15%\">
                <col width=\"35%\">
            </colgroup>
            <tr>
                <td>Имя <span style=\"color:#419EFD\">*</span></td>
                <td>
                    <input type=\"text\" name=\"Имя\" class=\"search_input\" style=\"width:100%;    height: 30px;\">
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td>
                    <input type=\"text\" name=\"Телефон\" class=\"search_input\" style=\"width:100%;    height: 30px;\">
                </td>

            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td>E-mail <span style=\"color:#419EFD\">*</span></td>
                <td>
                    <input type=\"text\" name=\"email\" class=\"search_input\" style=\"width:100%;    height: 30px;\">
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>

            <tr>
                <td valign=\"top\">Продукт: <span style=\"color:#419EFD\">*</span></td>
                <td colspan=\"3\">
                    <select type=\"text\" id=\"product\" name=\"Продукт\" style=\"width:100%;resize: none;margin-left: 10px;margin-bottom: 25px;   background: #E9E9E9;  height: 30px;\">
                       ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["get_product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 79
            echo "
                        <option>";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, true, 80), "name", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "</option>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    </select>
                </td>
            </tr>

            <tr>
                <td valign=\"top\">Сообщение <span style=\"color:#419EFD\">*</span></td>
                <td colspan=\"3\">
                                    <textarea name=\"Сообщение\" class=\"search_input\"
                                              style=\"width:100%;height:400px;resize: none;\"></textarea>
                </td>
            </tr>




        </table>

        <div class=\"view_list_btn\" style=\"margin-top:30px;text-align:right;margin-bottom: 30px\">
            <div class=\"form-group\">
                ";
        // line 101
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 102
        echo "            </div>

            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Отправить</button>

            <input type=\"hidden\" name=\"recaptcha_response\" id=\"recaptchaResponse\">
";
        // line 108
        echo "
            ";
        // line 110
        echo "        </div>
    </form>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\"
            async defer>
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/emptyform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 110,  207 => 108,  200 => 102,  196 => 101,  175 => 82,  165 => 80,  162 => 79,  158 => 78,  109 => 32,  105 => 31,  99 => 30,  96 => 28,  91 => 27,  89 => 26,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
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
<style>
    select{
        font-family: sans-serif;
    }
    button{
        font-family: sans-serif;
    }

</style>
{% set get_product = ProductList.make().active().all() %}
       {% for product in get_product  %}

{#            {{ d(product.category) }}#}
       {% endfor %}
{{ form_ajax(__SELF__ ~ '::onFormSubmit') }}
<div id=\"{{ __SELF__ }}_forms_flash\" style=\"\"></div>
<br>
<br>
<div id=\"view_c\" style=\"margin-top:20px;\">
    <form name=\"IndexForm\" method=\"post\" action=\"/?enc=L19wb3N0L2NsaWVudFBvc3QuYXNw\" class=\"form-inline\"
          enctype=\"multipart/form-data\">
        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <colgroup>
                <col width=\"15%\">
                <col width=\"35%\">
                <col width=\"15%\">
                <col width=\"35%\">
            </colgroup>
            <tr>
                <td>Имя <span style=\"color:#419EFD\">*</span></td>
                <td>
                    <input type=\"text\" name=\"Имя\" class=\"search_input\" style=\"width:100%;    height: 30px;\">
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td>
                    <input type=\"text\" name=\"Телефон\" class=\"search_input\" style=\"width:100%;    height: 30px;\">
                </td>

            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td>E-mail <span style=\"color:#419EFD\">*</span></td>
                <td>
                    <input type=\"text\" name=\"email\" class=\"search_input\" style=\"width:100%;    height: 30px;\">
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>

            <tr>
                <td valign=\"top\">Продукт: <span style=\"color:#419EFD\">*</span></td>
                <td colspan=\"3\">
                    <select type=\"text\" id=\"product\" name=\"Продукт\" style=\"width:100%;resize: none;margin-left: 10px;margin-bottom: 25px;   background: #E9E9E9;  height: 30px;\">
                       {% for product in get_product  %}

                        <option>{{ product.category.name }} {{ product.name }}</option>
                       {% endfor %}
                    </select>
                </td>
            </tr>

            <tr>
                <td valign=\"top\">Сообщение <span style=\"color:#419EFD\">*</span></td>
                <td colspan=\"3\">
                                    <textarea name=\"Сообщение\" class=\"search_input\"
                                              style=\"width:100%;height:400px;resize: none;\"></textarea>
                </td>
            </tr>




        </table>

        <div class=\"view_list_btn\" style=\"margin-top:30px;text-align:right;margin-bottom: 30px\">
            <div class=\"form-group\">
                {% partial '@recaptcha' %}
            </div>

            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Отправить</button>

            <input type=\"hidden\" name=\"recaptcha_response\" id=\"recaptchaResponse\">
{#            {{ form_submit() }}#}

            {#            {{ form_close() }}#}
        </div>
    </form>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\"
            async defer>
    </script>
</div>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/emptyform/default.htm", "");
    }
}
