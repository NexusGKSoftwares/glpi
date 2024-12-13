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

/* components/search/display_data.html.twig */
class __TwigTemplate_327682e1f4b4e5ccb50fee0738ddf1a6 extends Template
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
        $context["is_ajax"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["searchform_id"] ?? null) : null)));
        // line 35
        $context["fluid_search"] = ((array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), true)) : (true));
        // line 36
        if ( !($context["is_ajax"] ?? null)) {
            // line 37
            yield "   <div class=\"ajax-container search-display-data\">
";
        }
        // line 39
        yield "
";
        // line 41
        $context["normalized_itemtype"] = Twig\Extension\CoreExtension::replace(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 42
        yield "
<form id=\"massform";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
        yield "\" method=\"get\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/massiveaction.php"), "html", null, true);
        yield "\"
      data-search-itemtype=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = ($context["data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["itemtype"] ?? null) : null), "html", null, true);
        yield "\" data-start=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["start"] ?? null), "html", null, true);
        yield "\" data-count=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["count"] ?? null), "html", null, true);
        yield "\" data-limit=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
        yield "\" data-submit-once>
   <div class=\"card card-sm mt-0 search-card\">
      <div class=\"card-header d-flex justify-content-between search-header pe-0\">
         ";
        // line 47
        if (((($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["display_type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Search::GLOBAL_SEARCH"))) {
            // line 48
            yield "            <h2>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
            yield "</h2>

            ";
            // line 50
            if ((($context["count"] ?? null) > (($context["start"] ?? null) + Twig\Extension\CoreExtension::constant("Search::GLOBAL_DISPLAY_COUNT")))) {
                // line 51
                yield "               <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
                yield "\">
                  <i class=\"far fa-eye\"></i>
                  ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View all"), "html", null, true);
                yield "
               </a>
            ";
            }
            // line 56
            yield "         ";
        } else {
            // line 57
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/search/controls.html.twig");
            yield "
         ";
        }
        // line 59
        yield "      </div>

      ";
        // line 61
        if (((($__internal_compile_3 = (($__internal_compile_4 = ($context["data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["search"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["as_map"] ?? null) : null) == 0)) {
            // line 62
            yield "         ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/search/table.html.twig");
            yield "
      ";
        }
        // line 64
        yield "      ";
        if ((($context["count"] ?? null) > 0)) {
            // line 65
            yield "         ";
            if ((((($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["display_type"] ?? null) : null) != Twig\Extension\CoreExtension::constant("Search::GLOBAL_SEARCH")) && ((($__internal_compile_6 = (($__internal_compile_7 = ($context["data"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["as_map"] ?? null) : null) == 0))) {
                // line 66
                yield "            <div class=\"card-footer search-footer\">
               ";
                // line 67
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/pager.html.twig");
                yield "
            </div>
         ";
            }
            // line 70
            yield "      ";
        } elseif (((($__internal_compile_8 = (($__internal_compile_9 = ($context["data"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["search"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["as_map"] ?? null) : null) == 1)) {
            // line 71
            yield "         <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
            ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No item found"), "html", null, true);
            yield "
         </div>
      ";
        }
        // line 75
        yield "   </div>
</form>

";
        // line 78
        if ( !($context["is_ajax"] ?? null)) {
            // line 79
            yield "   </div>

   ";
            // line 81
            if (((($__internal_compile_10 = (($__internal_compile_11 = ($context["data"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["search"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["as_map"] ?? null) : null) == 0)) {
                // line 82
                yield "      <script>
          if (typeof initFluidSearch !== \"function\") {
             window.initFluidSearch = () => {
                 new GLPI.Search.ResultsView(\"massform";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
                yield "\", GLPI.Search.Table);
             };
          }
          if (document.readyState === 'complete') {
              initFluidSearch();
          } else {
              \$(document).on('ready', initFluidSearch);
          }
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
        return "components/search/display_data.html.twig";
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
        return array (  165 => 85,  160 => 82,  158 => 81,  154 => 79,  152 => 78,  147 => 75,  141 => 72,  138 => 71,  135 => 70,  129 => 67,  126 => 66,  123 => 65,  120 => 64,  114 => 62,  112 => 61,  108 => 59,  102 => 57,  99 => 56,  93 => 53,  87 => 51,  85 => 50,  79 => 48,  77 => 47,  65 => 44,  59 => 43,  56 => 42,  54 => 41,  51 => 39,  47 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/display_data.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\search\\display_data.html.twig");
    }
}
