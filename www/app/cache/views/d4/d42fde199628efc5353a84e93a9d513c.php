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

/* components/scroll-to-top.twig */
class __TwigTemplate_74e07df657188f74c34a055cc3ff76bb extends Template
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
        echo "<div class=\"fixed bottom-0 left-0 right-0 pointer-events-none\" x-data=\"{ visible: false }\"
    x-init=\"visible = window.scrollY > 10\" x-show=\"visible\" x-transition.opacity
>
    <div class=\"container flex justify-end mx-auto px-4 py-10 xl:max-w-screen-xl\">
        <button title=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), ["scroll_to_top"]), "html", null, true);
        echo "\" class=\"flex justify-center items-center w-12 h-12 right-0 rounded-full shadow-lg bg-blue-600 text-white cursor-pointer pointer-events-auto hover:bg-blue-700 dark:bg-purple-700 dark:hover:bg-purple-800\"
            @click=\"window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });\" @scroll.window=\"visible = window.scrollY > 10\"
        >
            <i class=\"fas fa-arrow-up fa-lg\"></i>
        </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/scroll-to-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/scroll-to-top.twig", "C:\\xampp\\htdocs\\www\\app\\views\\components\\scroll-to-top.twig");
    }
}
