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

/* layout/parts/context_links.html.twig */
class __TwigTemplate_8820b956360082c06d063913a2e0c8b3 extends Template
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
        $context["links"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34), "links", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["links"] ?? null) : null)))) ? ((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["links"] ?? null) : null)) : ((($__internal_compile_2 = (($__internal_compile_3 = (($__internal_compile_4 = (($__internal_compile_5 = ($context["menu"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["content"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["links"] ?? null) : null)));
        // line 35
        $context["lists_itemtype"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 35), "content", [], "array", false, true, false, 35), ($context["item"] ?? null), [], "array", false, true, false, 35), "options", [], "array", false, true, false, 35), ($context["option"] ?? null), [], "array", false, true, false, 35), "lists_itemtype", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 35), "content", [], "array", false, true, false, 35), ($context["item"] ?? null), [], "array", false, true, false, 35), "options", [], "array", false, true, false, 35), ($context["option"] ?? null), [], "array", false, true, false, 35)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["lists_itemtype"] ?? null) : null)))) ? ((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 35), "content", [], "array", false, true, false, 35), ($context["item"] ?? null), [], "array", false, true, false, 35), "options", [], "array", false, true, false, 35), ($context["option"] ?? null), [], "array", false, true, false, 35)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["lists_itemtype"] ?? null) : null)) : ((($__internal_compile_8 = (($__internal_compile_9 = (($__internal_compile_10 = (($__internal_compile_11 = ($context["menu"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["content"] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["lists_itemtype"] ?? null) : null)));
        // line 36
        if (Twig\Extension\CoreExtension::testEmpty(($context["lists_itemtype"] ?? null))) {
            // line 37
            yield "    ";
            $context["lists_itemtype"] = ($context["item"] ?? null);
        }
        // line 39
        yield "
";
        // line 41
        yield "<ul class=\"nav navbar-nav border-start border-left ps-1 ps-sm-2 flex-row\">

";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 43)) {
            // line 44
            yield "<li class=\"nav-item\">
   <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_12 = ($context["links"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["add"] ?? null) : null)), "html", null, true);
            yield "\" class=\"btn btn-icon btn-sm btn-secondary me-1 pe-2\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "\">
      <i class=\"ti ti-plus\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
   </a>
</li>
";
        }
        // line 51
        yield "
";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "search", [], "array", true, true, false, 52)) {
            // line 53
            yield "<li class=\"nav-item\">
   <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_13 = ($context["links"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["search"] ?? null) : null)), "html", null, true);
            yield "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "html", null, true);
            yield "\">
      <i class=\"ti ti-search\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "html", null, true);
            yield "</span>
   </a>
</li>
";
        }
        // line 60
        yield "
";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "lists", [], "array", true, true, false, 61)) {
            // line 62
            yield "<li class=\"nav-item\">
   <a href=\"#\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 show-saved-searches\"
      data-itemtype=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lists_itemtype"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lists"), "html", null, true);
            yield "\">
      <i class=\"ti ti-star\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lists"), "html", null, true);
            yield "</span>
   </a>
</li>
";
        }
        // line 70
        yield "
";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["link"]) {
            // line 72
            yield "   ";
            if (((($context["type"] == "add") || ($context["type"] == "search")) || ($context["type"] == "lists"))) {
                // line 73
                yield "   ";
            } elseif (($context["type"] == "template")) {
                // line 74
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Manage templates..."), "html", null, true);
                yield "\">
            <i class=\"ti ti-template\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Templates"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 80
$context["type"] == "showall")) {
                // line 81
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show all"), "html", null, true);
                yield "\">
            <i class=\"ti ti-eye-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show all"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 87
$context["type"] == "summary")) {
                // line 88
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "html", null, true);
                yield "\">
            <i class=\"ti ti-notes\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 94
$context["type"] == "summary_kanban")) {
                // line 95
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global Kanban"), "html", null, true);
                yield "\">
            <i class=\"ti ti-layout-columns\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global Kanban"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 101
$context["type"] == "transfer_list")) {
                // line 102
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer list"), "html", null, true);
                yield "\">
            <i class=\"ti ti-list-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer list"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 108
$context["type"] == "config")) {
                // line 109
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setup"), "html", null, true);
                yield "\">
            <i class=\"ti ti-tool\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setup"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } else {
                // line 116
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\">
            ";
                // line 118
                yield $context["type"];
                yield "
         </a>
      </li>
   ";
            }
            // line 122
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "</ul>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/parts/context_links.html.twig";
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
        return array (  263 => 124,  256 => 122,  249 => 118,  245 => 117,  242 => 116,  235 => 112,  228 => 110,  225 => 109,  223 => 108,  217 => 105,  210 => 103,  207 => 102,  205 => 101,  199 => 98,  192 => 96,  189 => 95,  187 => 94,  181 => 91,  174 => 89,  171 => 88,  169 => 87,  163 => 84,  156 => 82,  153 => 81,  151 => 80,  145 => 77,  138 => 75,  135 => 74,  132 => 73,  129 => 72,  125 => 71,  122 => 70,  115 => 66,  108 => 64,  104 => 62,  102 => 61,  99 => 60,  92 => 56,  85 => 54,  82 => 53,  80 => 52,  77 => 51,  70 => 47,  63 => 45,  60 => 44,  58 => 43,  54 => 41,  51 => 39,  47 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/context_links.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\context_links.html.twig");
    }
}
