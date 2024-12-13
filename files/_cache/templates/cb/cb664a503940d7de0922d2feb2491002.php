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

/* components/form/header_content.html.twig */
class __TwigTemplate_3fab3bafd024aa7c5df2b962ee9e306b extends Template
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
        $context["canedit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["canedit"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["canedit"] ?? null) : null)) : (true));
        // line 35
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 36
        $context["rand"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 37
        $context["nametype"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 37) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formtitle"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formtitle"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 37)));
        // line 38
        $context["friendlyname"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["friendlyname"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["friendlyname"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getHeaderName", [], "method", false, false, false, 38)));
        // line 39
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 39), "id", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null)))) ? ((($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null)) : ( -1));
        // line 40
        $context["in_navheader"] = ((array_key_exists("in_navheader", $context)) ? (Twig\Extension\CoreExtension::default(($context["in_navheader"] ?? null), false)) : (false));
        // line 41
        yield "
";
        // line 42
        $context["entity_name"] = ((array_key_exists("entity_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["entity_name"] ?? null), "")) : (""));
        // line 43
        if (( !array_key_exists("entity_id", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 43))) {
            // line 44
            yield "   ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 44) == "Entity") && ((($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null) == 0))) {
                // line 45
                yield "      ";
                $context["entity_id"] = null;
                // line 46
                yield "   ";
            } else {
                // line 47
                yield "      ";
                $context["entity_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 47) &&  !(null === (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null)))) ? ((($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["entities_id"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 47)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 48
                yield "   ";
            }
            // line 49
            yield "
   ";
            // line 50
            if (Session::isMultiEntitiesMode()) {
                // line 51
                yield "      ";
                $context["entity_name"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 51));
                // line 52
                yield "   ";
            }
        } elseif ( !        // line 53
array_key_exists("entity_id", $context)) {
            // line 54
            yield "   ";
            $context["entity_id"] = 0;
        }
        // line 56
        yield "
";
        // line 57
        $context["template_name"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["template_name"] ?? null) : null));
        // line 58
        if (((($context["withtemplate"] ?? null) == 2) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 58))) {
            // line 59
            yield "   <input type=\"hidden\" name=\"template_name\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["template_name"] ?? null), "html", null, true);
            yield "\" />
   ";
            // line 60
            $context["nametype"] = Twig\Extension\CoreExtension::sprintf(__("Created from the template %s"), ($context["template_name"] ?? null));
        } elseif ((        // line 61
($context["withtemplate"] ?? null) == 1)) {
            // line 62
            yield "   <input type=\"hidden\" name=\"is_template\" value=\"1\" />
";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 63)) {
            // line 64
            yield "   ";
            $context["nametype"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), __("New item"), ($context["nametype"] ?? null));
        } else {
            // line 66
            yield "   ";
            if (((($context["noid"] ?? null) == false) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiis_ids_visible") || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["nametype"] ?? null)) == 0)))) {
                // line 67
                yield "      ";
                $context["nametype"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), ($context["nametype"] ?? null), (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null));
                // line 68
                yield "   ";
            }
        }
        // line 70
        yield "
";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null)], "method", false, false, false, 71)) {
            // line 72
            yield "   <form name=\"massaction_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" id=\"massaction_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" method=\"post\"
         action=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            yield "\" data-submit-once>
      <div id=\"massive_container_";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"></div>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
   </form>
";
        }
        // line 78
        yield "
<div id=\"header_";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
     class=\"card-header main-header d-flex flex-wrap mx-n2 mt-n2 align-items-stretch ";
        // line 80
        if (($context["in_navheader"] ?? null)) {
            yield " align-self-end ";
        }
        yield " flex-grow-1\">
   ";
        // line 81
        if (((($context["withtemplate"] ?? null) == 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 81))) {
            // line 82
            yield "      <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Template name"), "html", null, true);
            yield "\"
             name=\"template_name\" id=\"textfield_template_name";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
             value=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["template_name"] ?? null), "html", null, true);
            yield "\" />
   ";
        }
        // line 86
        yield "   <h3 class=\"card-title d-flex align-items-center ";
        yield ((($context["in_navheader"] ?? null)) ? ("ps-5") : ("ps-4"));
        yield "\">
      ";
        // line 87
        $context["icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getIcon", [], "method", false, false, false, 87);
        // line 88
        yield "      ";
        if (( !($context["in_navheader"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null)) > 0))) {
            // line 89
            yield "         <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
            <i class=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield " fa-2x\"></i>
         </div>
      ";
        }
        // line 93
        yield "      <span ";
        if (($context["in_navheader"] ?? null)) {
            yield " class=\"status rounded-1\" ";
        }
        yield ">
         ";
        // line 94
        if (($context["in_navheader"] ?? null)) {
            // line 95
            yield "            <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield "\"></i>
         ";
        }
        // line 97
        yield "         ";
        if (((($context["withtemplate"] ?? null) == 1) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 97) > 0))) {
            // line 98
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Template", "Templates", 1), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nametype"] ?? null), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["template_name"] ?? null), "html", null, true);
            yield "
         ";
        } elseif ( !CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 99)) {
            // line 100
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nametype"] ?? null), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["friendlyname"] ?? null), "html", null, true);
            yield "
         ";
        } else {
            // line 102
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nametype"] ?? null), "html", null, true);
            yield "
         ";
        }
        // line 104
        yield "      </span>
      ";
        // line 105
        if (((($context["in_navheader"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 105)) && (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["is_dynamic"] ?? null) : null))) {
            // line 106
            yield "      <span class=\"mx-1 bg-secondary status rounded-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Automatic Inventory"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
         <i class=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Agent::getIcon"), "html", null, true);
            yield "\"></i>
      </span>
      ";
        }
        // line 110
        yield "      ";
        if (((($context["in_navheader"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_deleted"], "method", false, false, false, 110)) && (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["is_deleted"] ?? null) : null))) {
            // line 111
            yield "      ";
            $context["title"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_mod"], "method", false, false, false, 111)) ? (Twig\Extension\CoreExtension::sprintf(__("Item has been deleted on %s"), (($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["date_mod"] ?? null) : null))) : (__("Deleted")));
            // line 112
            yield "      <span class=\"mx-1 bg-danger status rounded-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
         <i class=\"ti ti-trash\"></i>
         ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Deleted"), "html", null, true);
            yield "
      </span>
      ";
        }
        // line 117
        yield "
      ";
        // line 118
        if (($context["header_toolbar"] ?? null)) {
            // line 119
            yield "         <div class=\"d-inline-block toolbar ms-2\">
            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header_toolbar"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                // line 121
                yield "               ";
                yield $context["raw_element"];
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raw_element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "         </div>
      ";
        }
        // line 125
        yield "   </h3>

   ";
        // line 127
        $context["single_actions_ms_auto"] = true;
        // line 128
        yield "   ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 128) && Session::isMultiEntitiesMode()) &&  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Entity"))) {
            // line 129
            yield "      ";
            $context["single_actions_ms_auto"] = false;
            // line 130
            yield "      <span class=\"badge entity-name mx-1 px-2 ms-auto align-items-center\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_name"] ?? null), "html", null, true);
            yield "\">
                  <i class=\"ti ti-stack me-2\"></i>
                  ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_name"] ?? null), "html", null, true);
            yield "
               </span>

      ";
            // line 135
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 135)) {
                // line 136
                yield "         <span class=\"badge is_recursive-toggle mx-1 px-2 align-items-center\">
            <label class=\"form-check d-flex align-items-center mb-0\">
               ";
                // line 138
                $context["disabled"] = (($context["canedit"] ?? null) == false);
                // line 139
                yield "               ";
                $context["comment"] = __("Change visibility in child entities.");
                // line 140
                yield "
               ";
                // line 141
                if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild")) {
                    // line 142
                    yield "                  ";
                    $context["comment"] = __("Can՛t change this attribute. It՛s inherited from its parent.");
                    // line 143
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 144
                    yield "               ";
                } elseif ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), "recursive"], "method", false, false, false, 144)) {
                    // line 145
                    yield "                  ";
                    $context["comment"] = __("You are not allowed to change the visibility flag for child entities.");
                    // line 146
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 147
                    yield "               ";
                } elseif ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUnrecurs", [], "method", false, false, false, 147)) {
                    // line 148
                    yield "                  ";
                    $context["comment"] = __("Flag change forbidden. Linked items found.");
                    // line 149
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 150
                    yield "               ";
                }
                // line 151
                yield "
               ";
                // line 152
                if ( !($context["disabled"] ?? null)) {
                    yield "<input type=\"hidden\" name=\"is_recursive\" value=\"0\" />";
                }
                // line 153
                yield "               <input class=\"form-check-input\" type=\"checkbox\" name=\"is_recursive\" value=\"1\"
                  ";
                // line 154
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 154)) {
                    yield "checked=\"checked\"";
                }
                // line 155
                yield "                  ";
                if (($context["disabled"] ?? null)) {
                    yield "disabled=\"disabled\"";
                }
                yield " />
               ";
                // line 156
                if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 156)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 156))) {
                    // line 157
                    yield "                                    <input type=\"hidden\" name=\"is_recursive\" value=\"1\" />
               ";
                }
                // line 160
                yield "               <span class=\"form-check-label mb-0 mx-2\">
                  ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Child entities"), "html", null, true);
                yield "
                  <i class=\"fas fa-info ms-1\" title=\"";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true);
                yield "\"></i>
               </span>
            </label>
         </span>
      ";
            }
            // line 167
            yield "   ";
        }
        // line 168
        yield "
   ";
        // line 169
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/single-action.html.twig");
        yield "

   ";
        // line 171
        if ( !array_key_exists("inside_main", $context)) {
            // line 172
            yield "      <script>
         \$(\"#header_";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " input[name='is_recursive']\").on('change', function(e) {
             const asset_form = \$(\"form[name='asset_form']\");
             // If asset form has an is_recursive checkbox, we need set the value to the one in the header
             if (asset_form.length) {
                 const chk = asset_form.find(\"input[name='is_recursive']\");
                 if (chk.length) {
                     chk.val(e.target.checked ? 1 : 0);
                 }
             }
         });
      </script>
   ";
        }
        // line 185
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/header_content.html.twig";
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
        return array (  445 => 185,  430 => 173,  427 => 172,  425 => 171,  420 => 169,  417 => 168,  414 => 167,  406 => 162,  402 => 161,  399 => 160,  395 => 157,  393 => 156,  386 => 155,  382 => 154,  379 => 153,  375 => 152,  372 => 151,  369 => 150,  366 => 149,  363 => 148,  360 => 147,  357 => 146,  354 => 145,  351 => 144,  348 => 143,  345 => 142,  343 => 141,  340 => 140,  337 => 139,  335 => 138,  331 => 136,  329 => 135,  323 => 132,  317 => 130,  314 => 129,  311 => 128,  309 => 127,  305 => 125,  301 => 123,  292 => 121,  288 => 120,  285 => 119,  283 => 118,  280 => 117,  274 => 114,  268 => 112,  265 => 111,  262 => 110,  256 => 107,  251 => 106,  249 => 105,  246 => 104,  240 => 102,  232 => 100,  230 => 99,  221 => 98,  218 => 97,  212 => 95,  210 => 94,  203 => 93,  197 => 90,  194 => 89,  191 => 88,  189 => 87,  184 => 86,  179 => 84,  175 => 83,  170 => 82,  168 => 81,  162 => 80,  158 => 79,  155 => 78,  149 => 75,  145 => 74,  141 => 73,  134 => 72,  132 => 71,  129 => 70,  125 => 68,  122 => 67,  119 => 66,  115 => 64,  113 => 63,  110 => 62,  108 => 61,  106 => 60,  101 => 59,  99 => 58,  97 => 57,  94 => 56,  90 => 54,  88 => 53,  85 => 52,  82 => 51,  80 => 50,  77 => 49,  74 => 48,  71 => 47,  68 => 46,  65 => 45,  62 => 44,  60 => 43,  58 => 42,  55 => 41,  53 => 40,  51 => 39,  49 => 38,  47 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/header_content.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\header_content.html.twig");
    }
}
