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

/* central/messages.html.twig */
class __TwigTemplate_3406ae60bc0608e6f8858508326e8066 extends Template
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
<div class=\"message-area\">
   ";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "errors", [], "any", true, true, false, 35) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "errors", [], "any", false, false, false, 35)) > 0))) {
            // line 36
            yield "      <div class=\"alert alert-important alert-danger d-flex\" role=\"alert\">
         <i class=\"fas fa-3x fa-exclamation-triangle\"></i>
         <ul>
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "errors", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 40
                yield "               <li>";
                yield $context["error"];
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "         </ul>
      </div>
   ";
        }
        // line 45
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "warnings", [], "any", true, true, false, 45) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "warnings", [], "any", false, false, false, 45)) > 0))) {
            // line 46
            yield "      <div class=\"alert alert-important alert-warning d-flex\" role=\"alert\">
         <i class=\"fas fa-3x fa-exclamation-triangle\"></i>
         <ul>
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "warnings", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 50
                yield "               <li>";
                yield $context["warning"];
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "         </ul>
      </div>
   ";
        }
        // line 55
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "infos", [], "any", true, true, false, 55) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "infos", [], "any", false, false, false, 55)) > 0))) {
            // line 56
            yield "      <div class=\"alert alert-important alert-info d-flex\" role=\"alert\">
         <i class=\"fas fa-3x fa-info-circle\"></i>
         <ul>
            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "infos", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 60
                yield "               <li>";
                yield $context["info"];
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "         </ul>
      </div>
   ";
        }
        // line 65
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "central/messages.html.twig";
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
        return array (  119 => 65,  114 => 62,  105 => 60,  101 => 59,  96 => 56,  93 => 55,  88 => 52,  79 => 50,  75 => 49,  70 => 46,  67 => 45,  62 => 42,  53 => 40,  49 => 39,  44 => 36,  42 => 35,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "central/messages.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\central\\messages.html.twig");
    }
}
