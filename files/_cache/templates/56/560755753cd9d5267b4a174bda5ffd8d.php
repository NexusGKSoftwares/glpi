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

/* install/step1.html.twig */
class __TwigTemplate_003a738f173accd9f59f1ecca7847e1a extends Template
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
        if (($context["config_write_denied"] ?? null)) {
            // line 35
            yield "    <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Checking write access to configuration files"), "html", null, true);
            yield "</h3>
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"d-flex\">
            <div>
                <i class=\"ti ti-alert-circle me-2\"></i>
            </div>
            <div>
                <h4 class=\"alert-title\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Write access denied for configuration files"), "html", null, true);
            yield "</h4>
                <div class=\"text-secondary\">
                    ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("A temporary write access to the following files is required: %s."), (("`" . Twig\Extension\CoreExtension::join(($context["config_files_to_update"] ?? null), "`, `")) . "`")), "html", null, true);
            yield "
                    <br />
                    ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Write access to these files can be removed once the operation is finished."), "html", null, true);
            yield "
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 52
            yield "    <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Checking of the compatibility of your environment with the execution of GLPI"), "html", null, true);
            yield "</h3>
    ";
            // line 53
            yield Twig\Extension\CoreExtension::include($this->env, $context, "install/blocks/requirements_table.html.twig", ["requirements" => ($context["requirements"] ?? null)], false);
            yield "
";
        }
        // line 55
        yield "
";
        // line 56
        $context["common_hiddens"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 57
            yield "   <input type=\"hidden\" name=\"language\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpilanguage"), "html", null, true);
            yield "\">
   <input type=\"hidden\" name=\"update\" value=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update"] ?? null), "html", null, true);
            yield "\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\">
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "
";
        // line 62
        $context["continue_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 63
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
            yield "
         <i class=\"fas fa-chevron-right ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "
";
        // line 74
        $context["retry_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 75
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Try again"), "html", null, true);
            yield "
         <i class=\"fas fa-redo ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        yield "
";
        // line 86
        if ((($context["config_write_denied"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "hasMissingMandatoryRequirements", [], "method", false, false, false, 86))) {
            // line 87
            yield "   <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 91
($context["requirements"] ?? null), "hasMissingOptionalRequirements", [], "method", false, false, false, 91)) {
            // line 92
            yield "   <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
      ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } else {
            // line 98
            yield "   <div class=\"text-center\">
      ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/step1.html.twig";
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
        return array (  188 => 99,  185 => 98,  179 => 95,  175 => 94,  169 => 92,  167 => 91,  162 => 89,  156 => 87,  154 => 86,  151 => 85,  144 => 82,  136 => 77,  132 => 75,  130 => 74,  127 => 73,  120 => 70,  112 => 65,  108 => 63,  106 => 62,  103 => 61,  97 => 59,  93 => 58,  88 => 57,  86 => 56,  83 => 55,  78 => 53,  73 => 52,  64 => 46,  59 => 44,  54 => 42,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step1.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\step1.html.twig");
    }
}
