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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/uploadform/default.htm */
class __TwigTemplate_cf217577ddeb0806ffc137cc6dcdc3a4c3fb96d58c06c8ba34748d4187fe600c extends \Twig\Template
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
        $tags = array("partial" => 82);
        $filters = array("escape" => 20);
        $functions = array("form_ajax" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", ($this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 1, $this->source) . "::onFormSubmit")]);
        echo "

<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
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

<div id=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 20, $this->source), "html", null, true);
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
                    <input type=\"text\" name=\"Имя\" class=\"search_input\" style=\"width:100%;\">
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td>
                    <input type=\"text\" name=\"Телефон\" class=\"search_input\" style=\"width:100%;\">
                </td>

            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td>E-mail <span style=\"color:#419EFD\">*</span></td>
                <td>
                    <input type=\"text\" name=\"email\" class=\"search_input\" style=\"width:100%;\">
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td valign=\"top\">Сообщение <span style=\"color:#419EFD\">*</span></td>
                <td colspan=\"3\">
                                    <textarea name=\"Сообщение\" class=\"search_input\"
                                              style=\"width:100%;height:400px;resize: none;\"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
";
        // line 78
        echo "
        </table>
        <div class=\"view_list_btn\" style=\"margin-top:30px;text-align:right;margin-bottom: 30px\">
            <div class=\"form-group\">
                ";
        // line 82
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "            </div>

            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

            <input type=\"hidden\" name=\"recaptcha_response\" id=\"recaptchaResponse\">
        </div>
";
        // line 90
        echo "        </div>
    </form>
<script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\"
        async defer>
</script>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/uploadform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 90,  148 => 83,  144 => 82,  138 => 78,  84 => 20,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax(__SELF__ ~ '::onFormSubmit') }}

<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
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
                    <input type=\"text\" name=\"Имя\" class=\"search_input\" style=\"width:100%;\">
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td>
                    <input type=\"text\" name=\"Телефон\" class=\"search_input\" style=\"width:100%;\">
                </td>

            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td>E-mail <span style=\"color:#419EFD\">*</span></td>
                <td>
                    <input type=\"text\" name=\"email\" class=\"search_input\" style=\"width:100%;\">
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
            <tr>
                <td valign=\"top\">Сообщение <span style=\"color:#419EFD\">*</span></td>
                <td colspan=\"3\">
                                    <textarea name=\"Сообщение\" class=\"search_input\"
                                              style=\"width:100%;height:400px;resize: none;\"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan=\"4\">&nbsp;</td>
            </tr>
{#            <tr>#}
{#                <td valign=\"top\">Файл</td>#}
{#                <td colspan=\"3\">#}
{#                            {% partial '@file-upload' %}#}
{#                    <input type=\"file\" name=\"file_file1\">#}
{#                </td>#}
{#            </tr>#}

        </table>
        <div class=\"view_list_btn\" style=\"margin-top:30px;text-align:right;margin-bottom: 30px\">
            <div class=\"form-group\">
                {% partial '@recaptcha' %}
            </div>

            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

            <input type=\"hidden\" name=\"recaptcha_response\" id=\"recaptchaResponse\">
        </div>
{#            {{ form_close() }}#}
        </div>
    </form>
<script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\"
        async defer>
</script>
</div>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/uploadform/default.htm", "");
    }
}
