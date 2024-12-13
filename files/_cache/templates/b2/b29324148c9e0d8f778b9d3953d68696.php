<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout/parts/goto_button.html.twig */
class __TwigTemplate_1da6ce2b7240de06b927298dad1de7f9 extends Template
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
        // line 33
        yield "
";
        // line 34
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 35
            yield "    ";
            $context["shortcut"] = __("Ctrl+Alt+G");
            // line 36
            yield "    ";
            if ((($context["platform"] ?? null) == Twig\Extension\CoreExtension::constant("donatj\\UserAgent\\Platforms::MACINTOSH"))) {
                // line 37
                yield "        ";
                $context["shortcut"] = __("Option+Command+G");
                // line 38
                yield "    ";
            }
            // line 39
            yield "
   <button class=\"btn btn-icon btn-sm btn-ghost-secondary trigger-fuzzy justify-content-start mb-md-2 ps-1\"
           title=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["shortcut"] ?? null), "html", null, true);
            yield "\"
           data-bs-toggle=\"tooltip\"
           data-bs-placement=\"right\">
      <i class=\"ti ti-arrow-big-right me-1\"></i>
      <span class=\"menu-label ";
            // line 45
            yield (( !($context["is_vertical"] ?? null)) ? ("d-block d-xl-none d-xxl-block") : (""));
            yield "\">
         ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Find menu"), "html", null, true);
            yield "
      </span>
   </button>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/parts/goto_button.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  70 => 46,  66 => 45,  59 => 41,  55 => 39,  52 => 38,  49 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/goto_button.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\goto_button.html.twig");
    }
}
