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

/* components/form/single-action.html.twig */
class __TwigTemplate_2566a3f1ed762237ba5ce17d129228b3 extends Template
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
        if ( !array_key_exists("onlyicon", $context)) {
            // line 35
            yield "   ";
            $context["onlyicon"] = false;
        }
        // line 37
        yield "
";
        // line 38
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 38) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 38) . "::isMassiveActionAllowed"), [(($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null)]))) {
            // line 39
            yield "   ";
            $context["input"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getMassiveActionsForItem", [], "method", false, false, false, 39), "getInput", [], "method", false, false, false, 39);
            // line 40
            yield "   ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_1 = ($context["input"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["actions"] ?? null) : null)) > 0)) {
                // line 41
                yield "   ";
                $context["ms_auto"] = ((($context["single_actions_ms_auto"] ?? null)) ? ("ms-auto") : (""));
                // line 42
                yield "<div class=\"d-none d-sm-block btn-group ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ms_auto"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actions"), "html", null, true);
                yield "\"
     ";
                // line 43
                if (($context["onlyicon"] ?? null)) {
                    yield "data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"";
                }
                yield ">
   <button class=\"btn ";
                // line 44
                yield ((($context["onlyicon"] ?? null)) ? ("btn-icon") : ("dropdown-toggle"));
                yield " btn-outline-secondary\" type=\"button\"
           id=\"single-action\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
           aria-expanded=\"false\">
      <i class=\"ti ti-dots-vertical\"></i>
      ";
                // line 48
                if ( !($context["onlyicon"] ?? null)) {
                    // line 49
                    yield "         <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actions"), "html", null, true);
                    yield "</span>
      ";
                }
                // line 51
                yield "   </button>

   <div id=\"single-ma-action-menu\" class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow mt-2\" aria-labelledby=\"single-action\">
      ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_2 = ($context["input"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["actions"] ?? null) : null));
                foreach ($context['_seq'] as $context["key"] => $context["action"]) {
                    // line 55
                    yield "         <a class=\"dropdown-item\" data-action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" href=\"#\">";
                    yield $context["action"];
                    yield "</a>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "   </div>
</div>
<script>
\$(function () {
   var ma = ";
                // line 61
                yield json_encode(($context["input"] ?? null));
                yield ";

   \$(document).on('click', '#single-ma-action-menu .moreactions', function () {
      \$('.moreactions + .dropdown-menu').toggle();
   });

   \$(document).on('click', function (event) {
      var target = \$(event.target);
      var parent = target.parent();

      if (!target.hasClass('moreactions')
         && !parent.hasClass('moreactions')) {
         \$('.moreactions + .dropdown-menu').hide();
      }
   });

   \$(document).on('click', '#single-ma-action-menu [data-action]', function () {
      \$('.moreactions + .dropdown-menu').hide();

      var current_action = \$(this).data('action');

      glpi_ajax_dialog({
         url: '";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/dropdownMassiveAction.php"), "html", null, true);
                yield "',
         title: ma.actions[current_action],
         params: Object.assign(
            { action: current_action },
            ma
         ),
         appendTo: '#massive_container_";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "',
      });
   });
});
</script>
   ";
            }
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/single-action.html.twig";
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
        return array (  149 => 89,  140 => 83,  115 => 61,  109 => 57,  98 => 55,  94 => 54,  89 => 51,  83 => 49,  81 => 48,  74 => 44,  68 => 43,  61 => 42,  58 => 41,  55 => 40,  52 => 39,  50 => 38,  47 => 37,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/single-action.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\single-action.html.twig");
    }
}
