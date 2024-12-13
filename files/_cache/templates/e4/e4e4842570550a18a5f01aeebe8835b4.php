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

/* install/step0.html.twig */
class __TwigTemplate_a4baacd298f3e1105a7838dc9b68b8ef extends Template
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
        $macros["alerts"] = $this->macros["alerts"] = $this->loadTemplate("components/alerts_macros.html.twig", "install/step0.html.twig", 34)->unwrap();
        // line 35
        yield "
<div class=\"container text-center\">
   <div class=\"text-start\">
      ";
        // line 38
        $context["alert_messages"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "         ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Choose 'Install' for a completely new installation of GLPI."), "html", null, true);
            yield "<br>
         ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select 'Upgrade' to update your version of GLPI from an earlier version"), "html", null, true);
            yield "
      ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "
      ";
        // line 43
        yield CoreExtension::callMacro($macros["alerts"], "macro_alert_info", [__("Installation or update of GLPI"),         // line 45
($context["alert_messages"] ?? null)], 43, $context, $this->getSourceContext());
        // line 46
        yield "
   </div>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Install"), "html", null, true);
        yield "
         <i class=\"fas fa-download ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"no\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
   </form>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Upgrade"), "html", null, true);
        yield "
         <i class=\"fas fa-caret-square-up ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"yes\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
   </form>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/step0.html.twig";
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
        return array (  100 => 68,  91 => 62,  83 => 57,  74 => 51,  67 => 46,  65 => 45,  64 => 43,  61 => 42,  55 => 40,  50 => 39,  48 => 38,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step0.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\step0.html.twig");
    }
}
