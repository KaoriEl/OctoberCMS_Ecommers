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

/* /home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/footer.htm */
class __TwigTemplate_c8d00b1f8401c3e4c742c8cc7497bf7681bd9ac1cf1b1cc9225bcce1901428b9 extends \Twig\Template
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
        $tags = array("framework" => 36);
        $filters = array("page" => 4, "theme" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['framework'],
                ['page', 'theme'],
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
        echo "<div id=\"article_03\">
    <div id=\"article_03_1\">
        <ul>
            <li style=\"border-right:1px solid #e1e7f1;\"><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("faq");
        echo "\"><img
                            src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/m_img03.png");
        echo "\"></a></li>
            <li style=\"border-right:1px solid #e1e7f1;\"><a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("certificates");
        echo "\"><img
                            src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/m_img04.png");
        echo "\"></a></li>
            <li style=\"border-right:1px solid #e1e7f1;\"><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("document");
        echo "\"><img
                            src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/m_img05.png");
        echo "\"></a></li>
            <li style=\"border-right:1px solid #e1e7f1;\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\"><img
                            src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/m_img06.png");
        echo "\"></a></li>
        </ul>
    </div>
</div>
<div id=\"footer\">
    <div id=\"none\">
    </div>

    <div id=\"footer_text\">
        <div id=\"fo_lo\">
            <img style=\"width: 56%\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo02.png");
        echo "\">
        </div>
        <p class=\"p_03\">© Корпорация АйПи <a href=\"mailto:info@ultra-cap.ru\"
                                             style=\"color: #aec4e6;text-decoration: revert;\">info@ultra-cap.ru</a> <a
                    href=\"tel:88005553361\" style=\"text-decoration: revert;color: #aec4e6;\">8-800-555-33-61</a> (в России
            звонок бесплатный)
            <br>

            Этот сайт является проектом компании Корпорация АйПи, официального партнера LS Mtron в России. <br>
            Оригинальный сайт производителя: http://lsmaterials.co.kr/ <br>
        </p>

    </div>
</div>
</div>
";
        // line 36
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 37
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  126 => 36,  108 => 21,  95 => 11,  91 => 10,  87 => 9,  83 => 8,  79 => 7,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"article_03\">
    <div id=\"article_03_1\">
        <ul>
            <li style=\"border-right:1px solid #e1e7f1;\"><a href=\"{{ 'faq'|page }}\"><img
                            src=\"{{ 'assets/images/m_img03.png'|theme }}\"></a></li>
            <li style=\"border-right:1px solid #e1e7f1;\"><a href=\"{{ 'certificates'|page }}\"><img
                            src=\"{{ 'assets/images/m_img04.png'|theme }}\"></a></li>
            <li style=\"border-right:1px solid #e1e7f1;\"><a href=\"{{ 'document'|page }}\"><img
                            src=\"{{ 'assets/images/m_img05.png'|theme }}\"></a></li>
            <li style=\"border-right:1px solid #e1e7f1;\"><a href=\"{{ 'contacts'|page }}\"><img
                            src=\"{{ 'assets/images/m_img06.png'|theme }}\"></a></li>
        </ul>
    </div>
</div>
<div id=\"footer\">
    <div id=\"none\">
    </div>

    <div id=\"footer_text\">
        <div id=\"fo_lo\">
            <img style=\"width: 56%\" src=\"{{ 'assets/images/logo02.png'|theme }}\">
        </div>
        <p class=\"p_03\">© Корпорация АйПи <a href=\"mailto:info@ultra-cap.ru\"
                                             style=\"color: #aec4e6;text-decoration: revert;\">info@ultra-cap.ru</a> <a
                    href=\"tel:88005553361\" style=\"text-decoration: revert;color: #aec4e6;\">8-800-555-33-61</a> (в России
            звонок бесплатный)
            <br>

            Этот сайт является проектом компании Корпорация АйПи, официального партнера LS Mtron в России. <br>
            Оригинальный сайт производителя: http://lsmaterials.co.kr/ <br>
        </p>

    </div>
</div>
</div>
{% framework extras %}
</body>
</html>", "/home/e/eyakeno2/ip.marketica-dev.ru/public_html/themes/ultra-cup/partials/footer.htm", "");
    }
}
