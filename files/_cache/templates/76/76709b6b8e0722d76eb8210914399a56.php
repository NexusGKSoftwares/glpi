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

/* install/accept_license.html.twig */
class __TwigTemplate_79b86889f2412719172c1c25e5ed34b6 extends Template
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
<div class=\"container text-center license-container\">
    <textarea id=\"license\" style=\"height:250px\" readonly=\"readonly\" class=\"form-control\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["copying"] ?? null), "html", null, true);
        yield "</textarea>

    <p>
        <a class=\"btn btn-sm btn-info\" target=\"_blank\" href=\"https://www.gnu.org/licenses/translations.html\">
            <i class=\"fas fa-external-link-alt me-1\"></i>
            ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unofficial translations are also available"), "html", null, true);
        yield "
        </a>
    </p>

    <form action=\"install.php\" method=\"post\" data-submit-once>
        <input type=\"hidden\" name=\"install\" value=\"License\" />

        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
            ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
        yield "
            <i class=\"fas fa-chevron-right ms-1\"></i>
        </button>

        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 52
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
        return "install/accept_license.html.twig";
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
        return array (  68 => 52,  61 => 48,  50 => 40,  42 => 35,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/accept_license.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\accept_license.html.twig");
    }
}
