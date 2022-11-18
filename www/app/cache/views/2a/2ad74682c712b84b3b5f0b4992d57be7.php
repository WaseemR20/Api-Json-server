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

/* components/file.twig */
class __TwigTemplate_dd5f72aba2826756045ea57d4b7f0c14 extends Template
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
        echo "<a
    href=\"";
        // line 2
        echo twig_escape_filter($this->env, ((($context["parentDir"] ?? null)) ? (call_user_func_array($this->env->getFunction('parent_url')->getCallable(), [($context["path"] ?? null)])) : (call_user_func_array($this->env->getFunction('file_url')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "getPathname", [], "any", false, false, false, 2)]))), "html", null, true);
        echo "\"
    class=\"flex flex-col items-center rounded-lg font-mono group hover:bg-gray-100 hover:shadow dark:hover:bg-purple-700\"
>
    <div class=\"flex justify-between items-center p-4 w-full\">
        <div class=\"pr-2\">
            ";
        // line 7
        if (($context["parentDir"] ?? null)) {
            // line 8
            echo "                <i class=\"fas fa-level-up-alt fa-fw fa-lg\"></i>
            ";
        } else {
            // line 10
            echo "                ";
            echo call_user_func_array($this->env->getFunction('icon')->getCallable(), [($context["file"] ?? null)]);
            echo "
            ";
        }
        // line 12
        echo "        </div>

        <div class=\"flex-1 truncate\">
            ";
        // line 15
        ((($context["parentDir"] ?? null)) ? (print ("..")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "getRelativePathname", [], "any", false, false, false, 15), "html", null, true))));
        echo "
        </div>

        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "isFile", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <div class=\"ml-2\">
                <button title=\"";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), ["file.info"]), "html", null, true);
            echo "\" @click.prevent=\"\$dispatch('show-file-info', { file: '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "getPathname", [], "any", false, false, false, 20)]), "js"), "html", null, true);
            echo "' })\"
                    class=\"justify-center items-center rounded-full w-8 h-8 -m-1 md:invisible hover:bg-gray-300 hover:shadow dark:hover:bg-purple-900 group-hover:visible\"
                >
                    <i class=\"fas fa-info-circle\"></i>
                </button>
            </div>
        ";
        }
        // line 27
        echo "
        <div class=\"hidden whitespace-nowrap text-right mx-2 w-1/6 sm:block\">
            ";
        // line 29
        if ((($context["parentDir"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "isDir", [], "any", false, false, false, 29))) {
            // line 30
            echo "                    —
            ";
        } else {
            // line 32
            echo "                ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('size_for_humans')->getCallable(), [($context["file"] ?? null)]), "html", null, true);
            echo "
            ";
        }
        // line 34
        echo "        </div>

        <div class=\"hidden whitespace-nowrap text-right truncate ml-2 w-1/4 sm:block\">
            ";
        // line 37
        ((($context["parentDir"] ?? null)) ? (print ("—")) : (print (twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('modified_time')->getCallable(), [($context["file"] ?? null)]), "html", null, true))));
        echo "
        </div>
    </div>
</a>
";
    }

    public function getTemplateName()
    {
        return "components/file.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  104 => 34,  98 => 32,  94 => 30,  92 => 29,  88 => 27,  76 => 20,  73 => 19,  71 => 18,  65 => 15,  60 => 12,  54 => 10,  50 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/file.twig", "C:\\xampp\\htdocs\\www\\app\\views\\components\\file.twig");
    }
}
