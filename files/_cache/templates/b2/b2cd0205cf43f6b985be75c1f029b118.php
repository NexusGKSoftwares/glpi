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

/* install/blocks/requirements_table.html.twig */
class __TwigTemplate_e3710f9ba629b7d4191a7f6e497553d8 extends Template
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
<table class=\"table tab_check\">
   <thead>
      <tr>
         <th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Test done"), "html", null, true);
        yield "</th>
         <th>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Results"), "html", null, true);
        yield "</th>
      </tr>
   </thead>
   <tbody>
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 43
            yield "         ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOutOfContext", [], "method", false, false, false, 43)) {
                // line 44
                yield "            ";
                $context["is_important"] = ( !CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 44) || CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isRecommendedForSecurity", [], "method", false, false, false, 44));
                // line 45
                yield "            <tr class=\"tab_bg_1\">
               <td class=\"text-start\">
                  ";
                // line 47
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 47)) {
                    // line 48
                    yield "                     <span class=\"badge bg-warning\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Required"), "html", null, true);
                    yield "</span>
                  ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 49
$context["requirement"], "isRecommendedForSecurity", [], "method", false, false, false, 49)) {
                    // line 50
                    yield "                     <span class=\"badge bg-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Security"), "html", null, true);
                    yield "</span>
                  ";
                } else {
                    // line 52
                    yield "                     <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Suggested"), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 54
                yield "                  <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getTitle", [], "method", false, false, false, 54), "html", null, true);
                yield "</strong>
                  ";
                // line 55
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 55);
                // line 56
                yield "                  ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) {
                    // line 57
                    yield "                      <br />
                      <em>";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 58), "html", null, true);
                    yield "</em>
                  ";
                }
                // line 60
                yield "                  ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 60)) {
                    // line 61
                    yield "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 61));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 62
                        yield "                          <br />
                          <strong>
                             <em class=\"";
                        // line 64
                        yield ((($context["is_important"] ?? null)) ? ("red") : ("missing"));
                        yield "\">
                                ";
                        // line 65
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                        yield "
                             </em>
                          </strong>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    yield "                  ";
                }
                // line 70
                yield "               </td>
               <td class=\"";
                // line 71
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isMissing", [], "method", false, false, false, 71)) ? (((($context["is_important"] ?? null)) ? ("red") : ("missing"))) : ("green"));
                yield "\">
                  <span data-bs-toggle=\"popover\"
                        data-bs-placement=\"right\"
                        data-bs-html=\"true\"
                        data-bs-custom-class=\"validation-messages\"
                        data-bs-content=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 76), "<br />"), "html", null, true);
                yield "\">
                     <i class=\"";
                // line 77
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 77)) ? ("fas fa-check") : (((CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 77)) ? ("fas fa-exclamation-triangle") : ("ti ti-x"))));
                yield "\"></i>
                  </span>
               </td>
            </tr>
         ";
            }
            // line 82
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "   </tbody>
</table>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/blocks/requirements_table.html.twig";
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
        return array (  166 => 83,  160 => 82,  152 => 77,  148 => 76,  140 => 71,  137 => 70,  134 => 69,  124 => 65,  120 => 64,  116 => 62,  111 => 61,  108 => 60,  103 => 58,  100 => 57,  97 => 56,  95 => 55,  90 => 54,  84 => 52,  78 => 50,  76 => 49,  71 => 48,  69 => 47,  65 => 45,  62 => 44,  59 => 43,  55 => 42,  48 => 38,  44 => 37,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/blocks/requirements_table.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\blocks\\requirements_table.html.twig");
    }
}
