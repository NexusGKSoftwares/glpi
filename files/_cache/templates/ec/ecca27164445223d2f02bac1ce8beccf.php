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

/* components/search/table.html.twig */
class __TwigTemplate_5944198f57454d83cf2bf49fae4b7de3 extends Template
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
        $context["searchform_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["searchform_id"] ?? null) : null), ("search_" . ($context["rand"] ?? null)))) : (("search_" . ($context["rand"] ?? null))));
        // line 35
        yield "
<div class=\"table-responsive-lg\">
   <table class=\"search-results table card-table table-hover ";
        // line 37
        yield (((($__internal_compile_1 = (($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["search"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["is_deleted"] ?? null) : null)) ? ("table-danger deleted-results") : ("table-striped"));
        yield "\"
          id=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchform_id"] ?? null), "html", null, true);
        yield "\">
      <thead>
         <tr ";
        // line 40
        if ((($context["count"] ?? null) == 0)) {
            yield "style=\"display: none;\"";
        }
        yield ">
            ";
        // line 41
        if (($context["showmassiveactions"] ?? null)) {
            // line 42
            yield "            <th style=\"width: 30px;\">
               <div>
                  <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" id=\"checkall_";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                        value=\"\" aria-label=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Check all as"), "html", null, true);
            yield "\"
                        onclick=\"checkAsCheckboxes(this, '";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchform_id"] ?? null), "html", null, true);
            yield "', '.massive_action_checkbox');\" />
               </div>
            </th>
            ";
        }
        // line 50
        yield "
            ";
        // line 51
        $context["sorts"] = (($__internal_compile_3 = (($__internal_compile_4 = ($context["data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["search"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sort"] ?? null) : null);
        // line 52
        yield "
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_5 = (($__internal_compile_6 = ($context["data"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["data"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["cols"] ?? null) : null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 54
            yield "               ";
            // line 55
            yield "               ";
            $context["linkto"] = "";
            // line 56
            yield "               ";
            $context["so_no_sort"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 56), "nosort", [], "array", true, true, false, 56) &&  !(null === (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 56)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["nosort"] ?? null) : null)))) ? ((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 56)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["nosort"] ?? null) : null)) : (false));
            // line 57
            yield "               ";
            $context["meta"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "meta", [], "array", true, true, false, 57) &&  !(null === (($__internal_compile_9 = $context["col"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["meta"] ?? null) : null)))) ? ((($__internal_compile_10 = $context["col"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["meta"] ?? null) : null)) : (false));
            // line 58
            yield "               ";
            $context["sort_order"] = "nosort";
            // line 59
            yield "               ";
            $context["sort_num"] = "";
            // line 60
            yield "               ";
            $context["can_sort"] = (( !($context["meta"] ?? null) &&  !($context["no_sort"] ?? null)) &&  !($context["so_no_sort"] ?? null));
            // line 61
            yield "               ";
            if (($context["can_sort"] ?? null)) {
                // line 62
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["sort_opt"]) {
                    // line 63
                    yield "                     ";
                    if (($context["sort_opt"] == (($__internal_compile_11 = $context["col"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null))) {
                        // line 64
                        yield "                        ";
                        $context["sort_order"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 64), "order", [], "array", false, true, false, 64), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 64), [], "array", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 64), "order", [], "array", false, true, false, 64)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 64)] ?? null) : null), "ASC")) : ("ASC"));
                        // line 65
                        yield "                        ";
                        $context["sort_num"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65);
                        // line 66
                        yield "                     ";
                    }
                    // line 67
                    yield "                  ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_opt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                yield "               ";
            }
            // line 69
            yield "
               ";
            // line 70
            $context["col_name"] = (($__internal_compile_13 = $context["col"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["name"] ?? null) : null);
            // line 71
            yield "               ";
            // line 72
            yield "               ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", true, true, false, 72)) {
                // line 73
                yield "                  ";
                $context["groupname"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 73), "name", [], "array", true, true, false, 73) &&  !(null === (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 73)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["name"] ?? null) : null)))) ? ((($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 73)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["name"] ?? null) : null)) : ((($__internal_compile_16 = $context["col"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["groupname"] ?? null) : null)));
                // line 74
                yield "                  ";
                $context["col_name"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), ($context["groupname"] ?? null), (($__internal_compile_17 = $context["col"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["name"] ?? null) : null));
                // line 75
                yield "               ";
            }
            // line 76
            yield "
               ";
            // line 78
            yield "               ";
            if (( !($context["itemtype"] ?? null) == (($__internal_compile_18 = $context["col"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["itemtype"] ?? null) : null))) {
                // line 79
                yield "                  ";
                $context["col_name"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_19 = $context["col"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["itemtype"] ?? null) : null)), ($context["col_name"] ?? null));
                // line 80
                yield "               ";
            }
            // line 81
            yield "
               <th data-searchopt-id=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = $context["col"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null), "html", null, true);
            yield "\" ";
            if ( !($context["can_sort"] ?? null)) {
                yield "data-nosort=\"true\"";
            }
            yield " data-sort-order=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_order"] ?? null), "html", null, true);
            yield "\"
                  ";
            // line 83
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["sort_num"] ?? null))) {
                yield "data-sort-num=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["sort_num"] ?? null) - 1), "html", null, true);
                yield "\"";
            }
            yield ">
                  ";
            // line 84
            $context["sort_icon"] = (((($context["sort_order"] ?? null) == "ASC")) ? ("fas fa-sort-up") : ((((($context["sort_order"] ?? null) == "DESC")) ? ("fas fa-sort-down") : (""))));
            // line 85
            yield "                  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_name"] ?? null), "html", null, true);
            yield "
                  ";
            // line 86
            if (($context["can_sort"] ?? null)) {
                // line 87
                yield "                     <span class=\"sort-indicator\"><i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_icon"] ?? null), "html", null, true);
                yield "\"></i><span class=\"sort-num\">";
                (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["sorts"] ?? null)) > 1)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_num"] ?? null), "html", null, true)) : (yield ""));
                yield "</span></span>
                  ";
            }
            // line 89
            yield "               </th>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "
            ";
        // line 93
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 93)) {
            // line 94
            yield "               <th>
                  ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Item type"), "html", null, true);
            yield "
               </th>
            ";
        }
        // line 98
        yield "         </tr>
      </thead>
      <tbody>
         ";
        // line 101
        if ((($context["count"] ?? null) == 0)) {
            // line 102
            yield "            <tr>
               <td colspan=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_21 = (($__internal_compile_22 = ($context["data"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["data"] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["cols"] ?? null) : null)), "html", null, true);
            yield "\">
                  <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
                     ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No item found"), "html", null, true);
            yield "
                  </div>
               </td>
            </tr>
         ";
        } else {
            // line 110
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_23 = (($__internal_compile_24 = ($context["data"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["data"] ?? null) : null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["rows"] ?? null) : null));
            foreach ($context['_seq'] as $context["rowkey"] => $context["row"]) {
                // line 111
                yield "               <tr>
                  ";
                // line 112
                if (($context["showmassiveactions"] ?? null)) {
                    // line 113
                    yield "                  <td>
                     <div>
                        ";
                    // line 116
                    yield "                        ";
                    if (((($context["itemtype"] ?? null) == "Entity") &&  !Session::haveAccessToEntity((($__internal_compile_25 = $context["row"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null)))) {
                        // line 117
                        yield "                        ";
                    } elseif ((((($context["itemtype"] ?? null) == "User") &&  !Session::canViewAllEntities()) &&  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasAccessToUserEntities((($__internal_compile_26 = $context["row"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["id"] ?? null) : null)))) {
                        // line 118
                        yield "                        ";
                    } elseif ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBTM") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 118)) &&  !Session::haveAccessToEntity((($__internal_compile_27 = $context["row"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["entities_id"] ?? null) : null)))) {
                        // line 119
                        yield "                        ";
                    } else {
                        // line 120
                        yield "                           ";
                        $context["row_itemtype"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "TYPE", [], "array", true, true, false, 120) &&  !(null === (($__internal_compile_28 = $context["row"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["TYPE"] ?? null) : null)))) ? ((($__internal_compile_29 = $context["row"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["TYPE"] ?? null) : null)) : (($context["itemtype"] ?? null)));
                        // line 121
                        yield "                           ";
                        if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((($context["row_itemtype"] ?? null) . "::isMassiveActionAllowed"), [(($__internal_compile_30 = $context["row"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["id"] ?? null) : null)])) {
                            // line 122
                            yield "                              ";
                            $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["row_itemtype"] ?? null), [], "array", false, true, false, 122), (($__internal_compile_31 = $context["row"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["id"] ?? null) : null), [], "array", true, true, false, 122) &&  !(null === (($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["row_itemtype"] ?? null), [], "array", false, true, false, 122)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[(($__internal_compile_33 = $context["row"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null)] ?? null) : null)))) ? ((($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["row_itemtype"] ?? null), [], "array", false, true, false, 122)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[(($__internal_compile_35 = $context["row"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["id"] ?? null) : null)] ?? null) : null)) : (false));
                            // line 123
                            yield "                              <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" data-glpicore-ma-tags=\"common\"
                                 value=\"1\" aria-label=\"\" ";
                            // line 124
                            if (($context["checked"] ?? null)) {
                                yield "checked=\"checked\"";
                            }
                            // line 125
                            yield "                                 name=\"item[";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "TYPE", [], "array", true, true, false, 125) &&  !(null === (($__internal_compile_36 = $context["row"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["TYPE"] ?? null) : null)))) ? ((($__internal_compile_37 = $context["row"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["TYPE"] ?? null) : null)) : (($context["itemtype"] ?? null))), "html", null, true);
                            yield "][";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_38 = $context["row"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["id"] ?? null) : null), "html", null, true);
                            yield "]\" />
                           ";
                        }
                        // line 127
                        yield "                        ";
                    }
                    // line 128
                    yield "                     </div>
                  </td>
                  ";
                }
                // line 131
                yield "
                  ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_39 = (($__internal_compile_40 = ($context["data"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["data"] ?? null) : null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["cols"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 133
                    yield "                     ";
                    $context["colkey"] = (((($__internal_compile_41 = $context["col"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["itemtype"] ?? null) : null) . "_") . (($__internal_compile_42 = $context["col"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["id"] ?? null) : null));
                    // line 134
                    yield "                     ";
                    // line 135
                    yield "                     ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "meta", [], "array", true, true, false, 135) && (($__internal_compile_43 = $context["col"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["meta"] ?? null) : null))) {
                        // line 136
                        yield "                        ";
                        yield $this->extensions['Glpi\Application\View\Extension\SearchExtension']->showItem(0, (($__internal_compile_44 = (($__internal_compile_45 = $context["row"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[($context["colkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["displayname"] ?? null) : null), 0, 0);
                        yield "
                     ";
                    } else {
                        // line 138
                        yield "                        ";
                        yield $this->extensions['Glpi\Application\View\Extension\SearchExtension']->showItem(0, (($__internal_compile_46 = (($__internal_compile_47 = $context["row"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[($context["colkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["displayname"] ?? null) : null), 0, 0, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Search::displayConfigItem", [($context["itemtype"] ?? null), (($__internal_compile_48 = $context["col"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["id"] ?? null) : null), $context["row"]]));
                        yield "
                     ";
                    }
                    // line 140
                    yield "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                yield "
                  ";
                // line 143
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 143)) {
                    // line 144
                    yield "                     <td>
                        ";
                    // line 145
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_49 = $context["row"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["TYPE"] ?? null) : null)), "html", null, true);
                    yield "
                     </td>
                  ";
                }
                // line 148
                yield "               </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rowkey'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            yield "         ";
        }
        // line 151
        yield "      </tbody>
   </table>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/search/table.html.twig";
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
        return array (  416 => 151,  413 => 150,  406 => 148,  400 => 145,  397 => 144,  394 => 143,  391 => 141,  385 => 140,  379 => 138,  373 => 136,  370 => 135,  368 => 134,  365 => 133,  361 => 132,  358 => 131,  353 => 128,  350 => 127,  342 => 125,  338 => 124,  335 => 123,  332 => 122,  329 => 121,  326 => 120,  323 => 119,  320 => 118,  317 => 117,  314 => 116,  310 => 113,  308 => 112,  305 => 111,  300 => 110,  292 => 105,  287 => 103,  284 => 102,  282 => 101,  277 => 98,  271 => 95,  268 => 94,  265 => 93,  262 => 91,  247 => 89,  239 => 87,  237 => 86,  232 => 85,  230 => 84,  222 => 83,  212 => 82,  209 => 81,  206 => 80,  203 => 79,  200 => 78,  197 => 76,  194 => 75,  191 => 74,  188 => 73,  185 => 72,  183 => 71,  181 => 70,  178 => 69,  175 => 68,  161 => 67,  158 => 66,  155 => 65,  152 => 64,  149 => 63,  131 => 62,  128 => 61,  125 => 60,  122 => 59,  119 => 58,  116 => 57,  113 => 56,  110 => 55,  108 => 54,  91 => 53,  88 => 52,  86 => 51,  83 => 50,  76 => 46,  72 => 45,  68 => 44,  64 => 42,  62 => 41,  56 => 40,  51 => 38,  47 => 37,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/table.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\search\\table.html.twig");
    }
}
