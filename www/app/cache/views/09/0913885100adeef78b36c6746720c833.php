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

/* components/file-info-modal.twig */
class __TwigTemplate_1a6381c538d4213abadcc7d78dda8fef extends Template
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
        echo "<div class=\"fixed inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 p-4 z-50 dark:bg-gray-600 dark:bg-opacity-50\"
    x-data=\"fileInfoModal\" x-show=\"visible\" @click.self=\"hide()\" @keyup.escape.window=\"hide()\"
    @show-file-info.window=\"show(\$event.detail.file)\" x-transition:enter.opacity x-cloak
>
    <div x-show=\"!loading\" x-transition:enter @click.away=\"hide()\" class=\"bg-white rounded-lg shadow-lg overflow-hidden dark:bg-gray-800 dark:text-white\">
        <header class=\"flex justify-between items-center bg-blue-600 p-4 dark:bg-purple-700\">
            <i class=\"fas fa-info-circle fa-lg text-white\"></i>

            <div class=\"items-center text-xl text-white font-mono mx-4\" x-text=\"title\"></div>

            <button @click=\"hide()\" class=\"flex justify-center items-center rounded-full w-6 h-6 text-gray-900 text-opacity-50 text-sm hover:bg-red-700 hover:text-white hover:shadow\">
                <i class=\"fas fa-times\"></i>
            </button>
        </header>

        <content class=\"flex justify-center items-center p-4\">
            <div class=\"overflow-x-auto\">
                <p class=\"font-thin text-2xl text-gray-600 m-4\" x-if=\"error\" x-text=\"error\"></p>

                <table x-if=\"error === undefined\" class=\"table-auto\">
                    <tbody>
                        <template x-for=\"[name, value] in Object.entries(hashes)\" :key=\"name\">
                            <tr>
                                <td class=\"border font-bold px-4 py-2\" x-text=\"name\"></td>
                                <td class=\"border font-mono px-4 py-2\" x-text=\"value\"></td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </content>
    </div>

    <i class=\"fas fa-spinner fa-pulse fa-5x text-white\" x-show=\"loading\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/file-info-modal.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/file-info-modal.twig", "C:\\xampp\\htdocs\\www\\app\\views\\components\\file-info-modal.twig");
    }
}
