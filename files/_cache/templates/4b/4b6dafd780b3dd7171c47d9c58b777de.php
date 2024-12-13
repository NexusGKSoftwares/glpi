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

/* install/step8.html.twig */
class __TwigTemplate_f0400d35ee317bb0441f2e8a3d51962d extends Template
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
<h2>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The installation is finished"), "html", null, true);
        yield "</h2>

<p>
   ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default logins / passwords are:"), "html", null, true);
        yield "
</p>

<p>
   <ul>
      <li>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("glpi/glpi for the administrator account"), "html", null, true);
        yield "</li>
      <li>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("tech/tech for the technician account"), "html", null, true);
        yield "</li>
      <li>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("normal/normal for the normal account"), "html", null, true);
        yield "</li>
      <li>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("post-only/postonly for the postonly account"), "html", null, true);
        yield "</li>
   </ul>
</p>

<p>
   ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You can delete or modify these accounts as well as the initial data."), "html", null, true);
        yield "
</p>

<p class=\"center\">
   <a class=\"btn btn-primary\" href=\"../index.php\">
      <i class=\"fas fa-thumbs-up me-1\"></i>
      ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use GLPI"), "html", null, true);
        yield "
   </a>
</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/step8.html.twig";
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
        return array (  84 => 56,  75 => 50,  67 => 45,  63 => 44,  59 => 43,  55 => 42,  47 => 37,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step8.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\step8.html.twig");
    }
}
