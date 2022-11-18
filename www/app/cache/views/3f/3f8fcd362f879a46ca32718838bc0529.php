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

/* components/theme-toggle.twig */
class __TwigTemplate_ee2b0fb65e5cfdc0857125e367541691 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"flex flex-col justify-center items-center bg-gray-900 bg-opacity-30 rounded-full cursor-pointer w-4 h-8\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), ["toggle_theme"]), "html", null, true);
        echo "\" @click=\"toggleTheme()\">
    <div class=\"flex justify-center items-center bg-white w-5 h-5 rounded-full shadow-md duration-300 ease-in-out -translate-y-2 dark:translate-y-2\">
        <i class=\"fas fa-lightbulb fa-xs text-yellow-400 dark:text-gray-600\"></i>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/theme-toggle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/theme-toggle.twig", "C:\\xampp\\htdocs\\www\\app\\views\\components\\theme-toggle.twig");
    }
}
