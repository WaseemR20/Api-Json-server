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

/* layouts/app.twig */
class __TwigTemplate_d767da839e7dc1cd96d994856ae40067 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<meta charset=\"utf-8\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), ["meta_description"]), "html", null, true);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon.light.png"]), "html", null, true);
        echo "\">
<link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["app.css"]), "html", null, true);
        echo "\">

<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["app.js"]), "html", null, true);
        echo "\" defer></script>

";
        // line 14
        if (call_user_func_array($this->env->getFunction('config')->getCallable(), ["google_analytics_id", false])) {
            // line 15
            echo "    ";
            $this->loadTemplate("components/analytics/google.twig", "layouts/app.twig", 15)->display($context);
        }
        // line 17
        echo "
";
        // line 18
        if ((call_user_func_array($this->env->getFunction('config')->getCallable(), ["matomo_analytics_url", false]) && call_user_func_array($this->env->getFunction('config')->getCallable(), ["matomo_analytics_site_id", false]))) {
            // line 19
            echo "    ";
            $this->loadTemplate("components/analytics/matomo.twig", "layouts/app.twig", 19)->display($context);
        }
        // line 21
        echo "
<title>";
        // line 22
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " &bull; ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), ["site_title"]), "html", null, true);
        echo "</title>

<div class=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "\" x-data=\"application\" x-effect=\"storeThemeCookie(theme)\" :class=\"{ 'dark': theme === 'dark' }\">
    <div class=\"flex flex-col min-h-screen font-sans dark:bg-gray-800\">
        ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "    </div>
</div>
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  97 => 27,  95 => 26,  90 => 24,  83 => 22,  80 => 21,  76 => 19,  74 => 18,  71 => 17,  67 => 15,  65 => 14,  60 => 12,  55 => 10,  49 => 7,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/app.twig", "C:\\xampp\\htdocs\\www\\app\\views\\layouts\\app.twig");
    }
}
