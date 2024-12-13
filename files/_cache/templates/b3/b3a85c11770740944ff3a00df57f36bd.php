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

/* generic_show_form.html.twig */
class __TwigTemplate_eaeadbd7647f9c5292cd12beaece295a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "generic_show_form.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_header"] ?? null), ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 36), false)) : (false))))) : (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 36), false)) : (false)))));
        // line 37
        $context["bg"] = "";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 38)) {
            // line 39
            yield "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 41
        yield "
<div class=\"asset ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        yield "

   ";
        // line 45
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 46
        yield "   ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 47
        yield "   ";
        $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 47) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 47)));
        // line 48
        yield "   ";
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 48) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 49
        yield "   ";
        $context["item_type"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 49);
        // line 50
        yield "   ";
        $context["item_has_pictures"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasItemtypeOrModelPictures", [], "method", false, false, false, 50);
        // line 51
        yield "   ";
        $context["field_options"] = ["locked_fields" => CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 52)];
        // line 54
        yield "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 56
        yield ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        yield " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 60
        yield from $this->unwrap()->yieldBlock('form_fields', $context, $blocks);
        // line 666
        yield "               </div> ";
        // line 667
        yield "            </div> ";
        // line 668
        yield "         </div> ";
        // line 669
        yield "      </div>
      ";
        // line 670
        if (($context["item_has_pictures"] ?? null)) {
            // line 671
            yield "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 673
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            yield "
            </div>
         </div>
      ";
        }
        // line 677
        yield "   </div> ";
        // line 678
        yield "
   ";
        // line 679
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 680
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/support_hours.html.twig");
            yield "
   ";
        }
        // line 682
        yield "   ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
        yield "
   ";
        // line 683
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 684
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/inventory_info.html.twig");
            yield "
   ";
        }
        // line 686
        yield "
   ";
        // line 687
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null) == true))) {
            // line 688
            yield "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 689
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/dates.html.twig");
            yield "
      </div>
   ";
        }
        // line 692
        yield "</div>
";
        return; yield '';
    }

    // line 60
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        yield "                     ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["name"], "method", false, false, false, 61)) {
            // line 62
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["name",             // line 64
($context["item"] ?? null), (((            // line 65
($context["item_type"] ?? null) == "Contact")) ? (__("Surname")) : (__("Name"))),             // line 66
($context["withtemplate"] ?? null),             // line 67
($context["field_options"] ?? null)], 62, $context, $this->getSourceContext());
            // line 68
            yield "
                     ";
        }
        // line 70
        yield "
                     ";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["firstname"], "method", false, false, false, 71)) {
            // line 72
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["firstname",             // line 74
($context["item"] ?? null), __("First name"),             // line 76
($context["withtemplate"] ?? null),             // line 77
($context["field_options"] ?? null)], 72, $context, $this->getSourceContext());
            // line 78
            yield "
                     ";
        }
        // line 80
        yield "
                     ";
        // line 81
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["template_name"], "method", false, false, false, 81) && (($context["withtemplate"] ?? null) == 1)) && ($context["no_header"] ?? null))) {
            // line 82
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["template_name",             // line 84
($context["item"] ?? null), __("Template name"), 0,             // line 87
($context["field_options"] ?? null)], 82, $context, $this->getSourceContext());
            // line 88
            yield "
                     ";
        }
        // line 90
        yield "
                     ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_active"], "method", false, false, false, 91)) {
            // line 92
            yield "                        ";
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["withtemplate"] ?? null)) || (($context["withtemplate"] ?? null) == 1))) {
                // line 93
                yield "                           ";
                yield CoreExtension::callMacro($macros["fields"], "macro_hiddenField", ["is_active", (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_active"] ?? null) : null), __("Is active"), ["add_field_html" => __("No")]], 93, $context, $this->getSourceContext());
                // line 95
                yield "
                        ";
            } else {
                // line 97
                yield "                        ";
            }
            // line 98
            yield "                     ";
        }
        // line 99
        yield "
                     ";
        // line 100
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["states_id"], "method", false, false, false, 100)) {
            // line 101
            yield "                        ";
            $context["condition"] = ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 101), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types"))) ? ([("is_visible_" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 101))) => 1]) : ([]));
            // line 102
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source,             // line 105
($context["item"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["states_id"] ?? null) : null), __("Status"), Twig\Extension\CoreExtension::merge(            // line 107
($context["field_options"] ?? null), ["entity" => (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source,             // line 108
($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" =>             // line 109
($context["condition"] ?? null)])], 102, $context, $this->getSourceContext());
            // line 111
            yield "
                     ";
        }
        // line 113
        yield "
                     ";
        // line 114
        $context["fk"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 114);
        // line 115
        yield "                     ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [($context["fk"] ?? null)], "method", false, false, false, 115) && (($context["item_type"] ?? null) != "Software"))) {
            // line 116
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", [            // line 117
($context["item_type"] ?? null),             // line 118
($context["fk"] ?? null), (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["item"] ?? null), "fields", [], "any", false, false, false, 119)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["fk"] ?? null)] ?? null) : null), __("As child of"), Twig\Extension\CoreExtension::merge(            // line 121
($context["field_options"] ?? null), ["entity" => (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source,             // line 122
($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null)])], 116, $context, $this->getSourceContext());
            // line 124
            yield "
                     ";
        }
        // line 126
        yield "
                     ";
        // line 127
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_helpdesk_visible"], "method", false, false, false, 127))) {
            // line 128
            yield "                        ";
            // line 129
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_checkboxField", ["is_helpdesk_visible", (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source,             // line 131
($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket"),             // line 133
($context["field_options"] ?? null)], 129, $context, $this->getSourceContext());
            // line 134
            yield "
                     ";
        }
        // line 136
        yield "
                     ";
        // line 137
        $context["dc_breadcrumbs"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getDcBreadcrumb", [], "method", false, false, false, 137)) : ([]));
        // line 138
        yield "                     ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["dc_breadcrumbs"] ?? null)) > 0)) {
            // line 139
            yield "                        ";
            $context["dc_breadcrumbs"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 140
                yield "                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), ($context["dc_breadcrumbs"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["dc_item"]) {
                    // line 142
                    yield "                                 <li class=\"breadcrumb-item text-nowrap\">";
                    yield $context["dc_item"];
                    yield "</li>
                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dc_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                yield "                           </ol>
                        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 146
            yield "
                        ";
            // line 147
            yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["",             // line 149
($context["dc_breadcrumbs"] ?? null), __("Data center position")], 147, $context, $this->getSourceContext());
            // line 151
            yield "

                        ";
            // line 153
            yield CoreExtension::callMacro($macros["fields"], "macro_nullField", [], 153, $context, $this->getSourceContext());
            yield " ";
            // line 154
            yield "                     ";
        }
        // line 155
        yield "
                     ";
        // line 156
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 156)) {
            // line 157
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source,             // line 160
($context["item"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(            // line 162
($context["field_options"] ?? null), ["entity" => (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source,             // line 163
($context["item"] ?? null), "fields", [], "any", false, false, false, 163)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["entities_id"] ?? null) : null)])], 157, $context, $this->getSourceContext());
            // line 165
            yield "
                     ";
        }
        // line 167
        yield "
                     ";
        // line 168
        if (((($context["item_type"] ?? null) == "Unmanaged") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["item_type"], "method", false, false, false, 168))) {
            // line 169
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownArrayField", ["item_type", (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source,             // line 171
($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itemtype"] ?? null) : null), _n("Type", "Types", 1), ["Computer", "NetworkEquipment", "Printer", "Peripheral", "Phone"],             // line 176
($context["field_options"] ?? null)], 169, $context, $this->getSourceContext());
            // line 177
            yield "
                     ";
        }
        // line 179
        yield "
                     ";
        // line 180
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_domaincreation"], "method", false, false, false, 180)) {
            // line 181
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["date_domaincreation", (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["date_domaincreation"] ?? null) : null), __("Registration date")], 181, $context, $this->getSourceContext());
            yield "
                     ";
        }
        // line 183
        yield "
                     ";
        // line 184
        $context["type_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 184);
        // line 185
        yield "                     ";
        $context["type_fk"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 185);
        // line 186
        yield "                     ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [($context["type_fk"] ?? null)], "method", false, false, false, 186)) {
            // line 187
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", [            // line 188
($context["type_itemtype"] ?? null),             // line 189
($context["type_fk"] ?? null), (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source,             // line 190
($context["item"] ?? null), "fields", [], "any", false, false, false, 190)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["type_fk"] ?? null)] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(            // line 191
($context["type_itemtype"] ?? null)),             // line 192
($context["field_options"] ?? null)], 187, $context, $this->getSourceContext());
            // line 193
            yield "
                     ";
        }
        // line 195
        yield "
                     ";
        // line 196
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["usertitles_id"], "method", false, false, false, 196)) {
            // line 197
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["UserTitle", "usertitles_id", (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source,             // line 200
($context["item"] ?? null), "fields", [], "any", false, false, false, 200)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), Twig\Extension\CoreExtension::merge(            // line 202
($context["field_options"] ?? null), ["entity" => (($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source,             // line 203
($context["item"] ?? null), "fields", [], "any", false, false, false, 203)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)])], 197, $context, $this->getSourceContext());
            // line 205
            yield "
                     ";
        }
        // line 207
        yield "
                     ";
        // line 208
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["registration_number"], "method", false, false, false, 208)) {
            // line 209
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["registration_number",             // line 211
($context["item"] ?? null), (((is_string($__internal_compile_19 =             // line 212
($context["item_type"] ?? null)) && is_string($__internal_compile_20 = "User") && str_starts_with($__internal_compile_19, $__internal_compile_20))) ? (_x("user", "Administrative number")) : (_x("infocom", "Administrative number"))),             // line 213
($context["withtemplate"] ?? null),             // line 214
($context["field_options"] ?? null)], 209, $context, $this->getSourceContext());
            // line 215
            yield "
                     ";
        }
        // line 217
        yield "
                     ";
        // line 218
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["phone"], "method", false, false, false, 218)) {
            // line 219
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["phone",             // line 221
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 223
($context["withtemplate"] ?? null),             // line 224
($context["field_options"] ?? null)], 219, $context, $this->getSourceContext());
            // line 225
            yield "
                     ";
        }
        // line 227
        yield "
                     ";
        // line 228
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["phone2"], "method", false, false, false, 228)) {
            // line 229
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["phone2",             // line 231
($context["item"] ?? null), __("Phone 2"),             // line 233
($context["withtemplate"] ?? null),             // line 234
($context["field_options"] ?? null)], 229, $context, $this->getSourceContext());
            // line 235
            yield "
                     ";
        }
        // line 237
        yield "
                     ";
        // line 238
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["phonenumber"], "method", false, false, false, 238)) {
            // line 239
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["phonenumber",             // line 241
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 243
($context["withtemplate"] ?? null),             // line 244
($context["field_options"] ?? null)], 239, $context, $this->getSourceContext());
            // line 245
            yield "
                     ";
        }
        // line 247
        yield "
                     ";
        // line 248
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["mobile"], "method", false, false, false, 248)) {
            // line 249
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["mobile",             // line 251
($context["item"] ?? null), __("Mobile phone"),             // line 253
($context["withtemplate"] ?? null),             // line 254
($context["field_options"] ?? null)], 249, $context, $this->getSourceContext());
            // line 255
            yield "
                     ";
        }
        // line 257
        yield "
                     ";
        // line 258
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["fax"], "method", false, false, false, 258)) {
            // line 259
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["fax",             // line 261
($context["item"] ?? null), __("Fax"),             // line 263
($context["withtemplate"] ?? null),             // line 264
($context["field_options"] ?? null)], 259, $context, $this->getSourceContext());
            // line 265
            yield "
                     ";
        }
        // line 267
        yield "
                     ";
        // line 268
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["website"], "method", false, false, false, 268)) {
            // line 269
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["website",             // line 271
($context["item"] ?? null), __("Website"),             // line 273
($context["withtemplate"] ?? null),             // line 274
($context["field_options"] ?? null)], 269, $context, $this->getSourceContext());
            // line 275
            yield "
                     ";
        }
        // line 277
        yield "
                     ";
        // line 278
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["email"], "method", false, false, false, 278)) {
            // line 279
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["email",             // line 281
($context["item"] ?? null), _n("Email", "Emails", 1),             // line 283
($context["withtemplate"] ?? null),             // line 284
($context["field_options"] ?? null)], 279, $context, $this->getSourceContext());
            // line 285
            yield "
                     ";
        }
        // line 287
        yield "
                     ";
        // line 288
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["address"], "method", false, false, false, 288)) {
            // line 289
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 289)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["address"] ?? null) : null), __("Address")], 289, $context, $this->getSourceContext());
            yield "
                     ";
        }
        // line 291
        yield "
                     ";
        // line 292
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["postalcode"], "method", false, false, false, 292)) {
            // line 293
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 295
($context["item"] ?? null), __("Postal code"),             // line 297
($context["withtemplate"] ?? null),             // line 298
($context["field_options"] ?? null)], 293, $context, $this->getSourceContext());
            // line 299
            yield "
                     ";
        }
        // line 301
        yield "
                     ";
        // line 302
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["town"], "method", false, false, false, 302)) {
            // line 303
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["town",             // line 305
($context["item"] ?? null), __("City"),             // line 307
($context["withtemplate"] ?? null),             // line 308
($context["field_options"] ?? null)], 303, $context, $this->getSourceContext());
            // line 309
            yield "
                     ";
        }
        // line 311
        yield "
                     ";
        // line 313
        yield "                     ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["postcode"], "method", false, false, false, 313)) {
            // line 314
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["postcode",             // line 316
($context["item"] ?? null), __("Postal code"),             // line 318
($context["withtemplate"] ?? null),             // line 319
($context["field_options"] ?? null)], 314, $context, $this->getSourceContext());
            // line 320
            yield "
                     ";
        }
        // line 322
        yield "
                     ";
        // line 323
        if (((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact"))) {
            // line 324
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["state",             // line 326
($context["item"] ?? null), _x("location", "State"),             // line 328
($context["withtemplate"] ?? null),             // line 329
($context["field_options"] ?? null)], 324, $context, $this->getSourceContext());
            // line 330
            yield "
                     ";
        }
        // line 332
        yield "
                     ";
        // line 333
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["country"], "method", false, false, false, 333)) {
            // line 334
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["country",             // line 336
($context["item"] ?? null), __("Country"),             // line 338
($context["withtemplate"] ?? null),             // line 339
($context["field_options"] ?? null)], 334, $context, $this->getSourceContext());
            // line 340
            yield "
                     ";
        }
        // line 342
        yield "
                     ";
        // line 343
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_expiration"], "method", false, false, false, 343)) {
            // line 344
            yield "                        ";
            if ((($context["item_type"] ?? null) == "Certificate")) {
                // line 345
                yield "                           ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 345)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["date_expiration"] ?? null) : null), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => false, "expiration_class" => CoreExtension::getAttribute($this->env, $this->source,                 // line 348
($context["params"] ?? null), "expiration_class", [], "any", false, false, false, 348)],                 // line 349
($context["field_options"] ?? null))], 345, $context, $this->getSourceContext());
                yield "
                        ";
            } elseif ((            // line 350
($context["item_type"] ?? null) == "ComputerAntivirus")) {
                // line 351
                yield "                           ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 351)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["date_expiration"] ?? null) : null), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                 // line 354
($context["field_options"] ?? null))], 351, $context, $this->getSourceContext());
                yield "
                        ";
            } else {
                // line 356
                yield "                           ";
                yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 356)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["date_expiration"] ?? null) : null), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                 // line 359
($context["field_options"] ?? null))], 356, $context, $this->getSourceContext());
                yield "
                        ";
            }
            // line 361
            yield "                     ";
        }
        // line 362
        yield "
                     ";
        // line 363
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["ref"], "method", false, false, false, 363)) {
            // line 364
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source,             // line 366
($context["item"] ?? null), "fields", [], "any", false, false, false, 366)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["ref"] ?? null) : null), __("Reference"),             // line 368
($context["field_options"] ?? null)], 364, $context, $this->getSourceContext());
            // line 369
            yield "
                     ";
        }
        // line 371
        yield "
                     ";
        // line 372
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["users_id_tech"], "method", false, false, false, 372)) {
            // line 373
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", (($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source,             // line 376
($context["item"] ?? null), "fields", [], "any", false, false, false, 376)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["users_id_tech"] ?? null) : null), __("Technician in charge"), Twig\Extension\CoreExtension::merge(            // line 378
($context["field_options"] ?? null), ["entity" => (($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source,             // line 379
($context["item"] ?? null), "fields", [], "any", false, false, false, 379)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["entities_id"] ?? null) : null), "right" => "own_ticket"])], 373, $context, $this->getSourceContext());
            // line 382
            yield "
                     ";
        }
        // line 384
        yield "
                     ";
        // line 385
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["manufacturers_id"], "method", false, false, false, 385)) {
            // line 386
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source,             // line 389
($context["item"] ?? null), "fields", [], "any", false, false, false, 389)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_29 =             // line 390
($context["item_type"] ?? null)) && is_string($__internal_compile_30 = "Software") && str_starts_with($__internal_compile_29, $__internal_compile_30))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))),             // line 391
($context["field_options"] ?? null)], 386, $context, $this->getSourceContext());
            // line 392
            yield "
                     ";
        }
        // line 394
        yield "
                     ";
        // line 395
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["groups_id_tech"], "method", false, false, false, 395)) {
            // line 396
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_31 = CoreExtension::getAttribute($this->env, $this->source,             // line 399
($context["item"] ?? null), "fields", [], "any", false, false, false, 399)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["groups_id_tech"] ?? null) : null), __("Group in charge"), Twig\Extension\CoreExtension::merge(            // line 401
($context["field_options"] ?? null), ["entity" => (($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source,             // line 402
($context["item"] ?? null), "fields", [], "any", false, false, false, 402)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["entities_id"] ?? null) : null), "condition" => ["is_assign" => 1]])], 396, $context, $this->getSourceContext());
            // line 405
            yield "
                     ";
        }
        // line 407
        yield "
                     ";
        // line 408
        $context["model_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 408);
        // line 409
        yield "                     ";
        $context["model_fk"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 409);
        // line 410
        yield "                     ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [($context["model_fk"] ?? null)], "method", false, false, false, 410)) {
            // line 411
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", [            // line 412
($context["model_itemtype"] ?? null),             // line 413
($context["model_fk"] ?? null), (($__internal_compile_33 = CoreExtension::getAttribute($this->env, $this->source,             // line 414
($context["item"] ?? null), "fields", [], "any", false, false, false, 414)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1),             // line 416
($context["field_options"] ?? null)], 411, $context, $this->getSourceContext());
            // line 417
            yield "
                     ";
        }
        // line 419
        yield "
                     ";
        // line 420
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["contact_num"], "method", false, false, false, 420))) {
            // line 421
            yield "                        ";
            // line 422
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["contact_num", (($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source,             // line 424
($context["item"] ?? null), "fields", [], "any", false, false, false, 424)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["contact_num"] ?? null) : null), __("Alternate username number"),             // line 426
($context["field_options"] ?? null)], 422, $context, $this->getSourceContext());
            // line 427
            yield "
                     ";
        }
        // line 429
        yield "
                     ";
        // line 430
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["serial"], "method", false, false, false, 430)) {
            // line 431
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_35 = CoreExtension::getAttribute($this->env, $this->source,             // line 433
($context["item"] ?? null), "fields", [], "any", false, false, false, 433)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["serial"] ?? null) : null), __("Serial number"),             // line 435
($context["field_options"] ?? null)], 431, $context, $this->getSourceContext());
            // line 436
            yield "
                     ";
        }
        // line 438
        yield "
                     ";
        // line 439
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["contact"], "method", false, false, false, 439))) {
            // line 440
            yield "                        ";
            // line 441
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["contact", (($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source,             // line 443
($context["item"] ?? null), "fields", [], "any", false, false, false, 443)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["contact"] ?? null) : null), __("Alternate username"),             // line 445
($context["field_options"] ?? null)], 441, $context, $this->getSourceContext());
            // line 446
            yield "
                     ";
        }
        // line 448
        yield "
                     ";
        // line 449
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["otherserial"], "method", false, false, false, 449)) {
            // line 450
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["otherserial",             // line 452
($context["item"] ?? null), __("Inventory number"),             // line 454
($context["withtemplate"] ?? null),             // line 455
($context["field_options"] ?? null)], 450, $context, $this->getSourceContext());
            // line 456
            yield "
                     ";
        }
        // line 458
        yield "
                     ";
        // line 459
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["sysdescr"], "method", false, false, false, 459)) {
            // line 460
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["sysdescr", (($__internal_compile_37 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 460)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["sysdescr"] ?? null) : null), __("Sysdescr")], 460, $context, $this->getSourceContext());
            yield "
                     ";
        }
        // line 462
        yield "
                     ";
        // line 463
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["snmpcredentials_id"], "method", false, false, false, 463)) {
            // line 464
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["SNMPCredential", "snmpcredentials_id", (($__internal_compile_38 = CoreExtension::getAttribute($this->env, $this->source,             // line 467
($context["item"] ?? null), "fields", [], "any", false, false, false, 467)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["snmpcredentials_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SNMPCredential"),             // line 469
($context["field_options"] ?? null)], 464, $context, $this->getSourceContext());
            // line 470
            yield "
                     ";
        }
        // line 472
        yield "
                     ";
        // line 473
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["users_id"], "method", false, false, false, 473)) {
            // line 474
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_39 = CoreExtension::getAttribute($this->env, $this->source,             // line 477
($context["item"] ?? null), "fields", [], "any", false, false, false, 477)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), Twig\Extension\CoreExtension::merge(            // line 479
($context["field_options"] ?? null), ["entity" => (($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source,             // line 480
($context["item"] ?? null), "fields", [], "any", false, false, false, 480)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["entities_id"] ?? null) : null), "right" => "all"])], 474, $context, $this->getSourceContext());
            // line 483
            yield "
                     ";
        }
        // line 485
        yield "
                     ";
        // line 486
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_global"], "method", false, false, false, 486)) {
            // line 487
            yield "                        ";
            $context["management_restrict"] = 0;
            // line 488
            yield "                        ";
            if ((($context["item_type"] ?? null) == "Monitor")) {
                // line 489
                yield "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("monitors_management_restrict");
                // line 490
                yield "                        ";
            } elseif ((($context["item_type"] ?? null) == "Peripheral")) {
                // line 491
                yield "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("peripherals_management_restrict");
                // line 492
                yield "                        ";
            } elseif ((($context["item_type"] ?? null) == "Phone")) {
                // line 493
                yield "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("phones_management_restrict");
                // line 494
                yield "                        ";
            } elseif ((($context["item_type"] ?? null) == "Printer")) {
                // line 495
                yield "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("printers_management_restrict");
                // line 496
                yield "                        ";
            } else {
                // line 497
                yield "                           ";
                $context["management_restrict"] = 0;
                // line 498
                yield "                        ";
            }
            // line 499
            yield "                        ";
            $context["dd_globalswitch"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 500
                yield "                           ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showGlobalSwitch", [(($__internal_compile_41 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 500)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["id"] ?? null) : null), ["withtemplate" =>                 // line 501
($context["withtemplate"] ?? null), "value" => (($__internal_compile_42 = CoreExtension::getAttribute($this->env, $this->source,                 // line 502
($context["item"] ?? null), "fields", [], "any", false, false, false, 502)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["is_global"] ?? null) : null), "management_restrict" =>                 // line 503
($context["management_restrict"] ?? null), "target" =>                 // line 504
($context["target"] ?? null), "width" => "100%"]]);
                // line 507
                yield "                        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 508
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["is_global",             // line 510
($context["dd_globalswitch"] ?? null), __("Management type")], 508, $context, $this->getSourceContext());
            // line 512
            yield "
                     ";
        }
        // line 514
        yield "
                     ";
        // line 515
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["size"], "method", false, false, false, 515)) {
            // line 516
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_43 = CoreExtension::getAttribute($this->env, $this->source,             // line 518
($context["item"] ?? null), "fields", [], "any", false, false, false, 518)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["size"] ?? null) : null), __("Size"), Twig\Extension\CoreExtension::merge(            // line 520
($context["field_options"] ?? null), ["min" => 0, "step" => 0.01])], 516, $context, $this->getSourceContext());
            // line 524
            yield "
                     ";
        }
        // line 526
        yield "
                     ";
        // line 527
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["networks_id"], "method", false, false, false, 527)) {
            // line 528
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Network", "networks_id", (($__internal_compile_44 = CoreExtension::getAttribute($this->env, $this->source,             // line 531
($context["item"] ?? null), "fields", [], "any", false, false, false, 531)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["networks_id"] ?? null) : null), _n("Network", "Networks", 1),             // line 533
($context["field_options"] ?? null)], 528, $context, $this->getSourceContext());
            // line 534
            yield "
                     ";
        }
        // line 536
        yield "
                     ";
        // line 537
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["groups_id"], "method", false, false, false, 537)) {
            // line 538
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Group", "groups_id", (($__internal_compile_45 = CoreExtension::getAttribute($this->env, $this->source,             // line 541
($context["item"] ?? null), "fields", [], "any", false, false, false, 541)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["groups_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), Twig\Extension\CoreExtension::merge(            // line 543
($context["field_options"] ?? null), ["entity" => (($__internal_compile_46 = CoreExtension::getAttribute($this->env, $this->source,             // line 544
($context["item"] ?? null), "fields", [], "any", false, false, false, 544)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["entities_id"] ?? null) : null), "condition" => ["is_itemgroup" => 1]])], 538, $context, $this->getSourceContext());
            // line 547
            yield "
                     ";
        }
        // line 549
        yield "
                     ";
        // line 550
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["uuid"], "method", false, false, false, 550)) {
            // line 551
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["uuid", (($__internal_compile_47 = CoreExtension::getAttribute($this->env, $this->source,             // line 553
($context["item"] ?? null), "fields", [], "any", false, false, false, 553)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["uuid"] ?? null) : null), __("UUID"),             // line 555
($context["field_options"] ?? null)], 551, $context, $this->getSourceContext());
            // line 556
            yield "
                     ";
        }
        // line 558
        yield "
                     ";
        // line 559
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["version"], "method", false, false, false, 559)) {
            // line 560
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", ["version",             // line 562
($context["item"] ?? null), _n("Version", "Versions", 1),             // line 564
($context["withtemplate"] ?? null),             // line 565
($context["field_options"] ?? null)], 560, $context, $this->getSourceContext());
            // line 566
            yield "
                     ";
        }
        // line 568
        yield "
                     ";
        // line 569
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["comment"], "method", false, false, false, 569)) {
            // line 570
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_48 = CoreExtension::getAttribute($this->env, $this->source,             // line 572
($context["item"] ?? null), "fields", [], "any", false, false, false, 572)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 574
($context["field_options"] ?? null)], 570, $context, $this->getSourceContext());
            // line 575
            yield "
                     ";
        }
        // line 577
        yield "
                     ";
        // line 578
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["ram"], "method", false, false, false, 578)) {
            // line 579
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_numberField", ["ram", (($__internal_compile_49 = CoreExtension::getAttribute($this->env, $this->source,             // line 581
($context["item"] ?? null), "fields", [], "any", false, false, false, 581)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["ram"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio")),             // line 583
($context["field_options"] ?? null)], 579, $context, $this->getSourceContext());
            // line 584
            yield "
                     ";
        }
        // line 586
        yield "
                     ";
        // line 587
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["alarm_threshold"], "method", false, false, false, 587)) {
            // line 588
            yield "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 589
                yield "                           ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", ["alarm_threshold", Twig\Extension\CoreExtension::merge(["value" => (($__internal_compile_50 = CoreExtension::getAttribute($this->env, $this->source,                 // line 590
($context["item"] ?? null), "fields", [], "any", false, false, false, 590)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["alarm_threshold"] ?? null) : null), "rand" =>                 // line 591
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],                 // line 597
($context["params"] ?? null))]);
                // line 598
                yield "                        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 599
            yield "                        ";
            $context["last_alert_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 600
                yield "                           <span class=\"text-muted\">
                              ";
                // line 601
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [($context["item_type"] ?? null), (($__internal_compile_51 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 601)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["id"] ?? null) : null)]);
                // line 602
                yield "                           </span>
                        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 604
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 606
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), Twig\Extension\CoreExtension::merge(            // line 608
($context["field_options"] ?? null), ["add_field_html" =>             // line 609
($context["last_alert_html"] ?? null)])], 604, $context, $this->getSourceContext());
            // line 611
            yield "
                     ";
        }
        // line 613
        yield "
                     ";
        // line 614
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["brand"], "method", false, false, false, 614)) {
            // line 615
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["brand", (($__internal_compile_52 = CoreExtension::getAttribute($this->env, $this->source,             // line 617
($context["item"] ?? null), "fields", [], "any", false, false, false, 617)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["brand"] ?? null) : null), __("Brand"),             // line 619
($context["field_options"] ?? null)], 615, $context, $this->getSourceContext());
            // line 620
            yield "
                     ";
        }
        // line 622
        yield "
                     ";
        // line 623
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["begin_date"], "method", false, false, false, 623)) {
            // line 624
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_53 = CoreExtension::getAttribute($this->env, $this->source,             // line 626
($context["item"] ?? null), "fields", [], "any", false, false, false, 626)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["begin_date"] ?? null) : null), __("Start date"),             // line 628
($context["field_options"] ?? null)], 624, $context, $this->getSourceContext());
            // line 629
            yield "
                     ";
        }
        // line 631
        yield "
                     ";
        // line 632
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["autoupdatesystems_id"], "method", false, false, false, 632)) {
            // line 633
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["AutoUpdateSystem", "autoupdatesystems_id", (($__internal_compile_54 = CoreExtension::getAttribute($this->env, $this->source,             // line 636
($context["item"] ?? null), "fields", [], "any", false, false, false, 636)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["autoupdatesystems_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AutoUpdateSystem"),             // line 638
($context["field_options"] ?? null)], 633, $context, $this->getSourceContext());
            // line 639
            yield "
                     ";
        }
        // line 641
        yield "
                     ";
        // line 642
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["pictures"], "method", false, false, false, 642)) {
            // line 643
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 643, $context, $this->getSourceContext());
            // line 646
            yield "
                     ";
        }
        // line 648
        yield "
                     ";
        // line 649
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_active"], "method", false, false, false, 649)) {
            // line 650
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_55 = CoreExtension::getAttribute($this->env, $this->source,             // line 652
($context["item"] ?? null), "fields", [], "any", false, false, false, 652)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["is_active"] ?? null) : null), __("Active"),             // line 654
($context["field_options"] ?? null)], 650, $context, $this->getSourceContext());
            // line 655
            yield "
                     ";
        }
        // line 657
        yield "
                     ";
        // line 659
        yield "                     ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["last_boot"], "method", false, false, false, 659) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 659)) && (($__internal_compile_56 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 659)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["is_dynamic"] ?? null) : null))) {
            // line 660
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["last_boot", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_57 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 660)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["last_boot"] ?? null) : null), true), __("Last boot date")], 660, $context, $this->getSourceContext());
            yield "
                     ";
        }
        // line 662
        yield "
                     ";
        // line 663
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        // line 665
        yield "                  ";
        return; yield '';
    }

    // line 663
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "                     ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "generic_show_form.html.twig";
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
        return array (  1139 => 663,  1134 => 665,  1132 => 663,  1129 => 662,  1123 => 660,  1120 => 659,  1117 => 657,  1113 => 655,  1111 => 654,  1110 => 652,  1108 => 650,  1106 => 649,  1103 => 648,  1099 => 646,  1096 => 643,  1094 => 642,  1091 => 641,  1087 => 639,  1085 => 638,  1084 => 636,  1082 => 633,  1080 => 632,  1077 => 631,  1073 => 629,  1071 => 628,  1070 => 626,  1068 => 624,  1066 => 623,  1063 => 622,  1059 => 620,  1057 => 619,  1056 => 617,  1054 => 615,  1052 => 614,  1049 => 613,  1045 => 611,  1043 => 609,  1042 => 608,  1041 => 606,  1039 => 604,  1034 => 602,  1032 => 601,  1029 => 600,  1026 => 599,  1022 => 598,  1020 => 597,  1019 => 591,  1018 => 590,  1016 => 589,  1013 => 588,  1011 => 587,  1008 => 586,  1004 => 584,  1002 => 583,  1001 => 581,  999 => 579,  997 => 578,  994 => 577,  990 => 575,  988 => 574,  987 => 572,  985 => 570,  983 => 569,  980 => 568,  976 => 566,  974 => 565,  973 => 564,  972 => 562,  970 => 560,  968 => 559,  965 => 558,  961 => 556,  959 => 555,  958 => 553,  956 => 551,  954 => 550,  951 => 549,  947 => 547,  945 => 544,  944 => 543,  943 => 541,  941 => 538,  939 => 537,  936 => 536,  932 => 534,  930 => 533,  929 => 531,  927 => 528,  925 => 527,  922 => 526,  918 => 524,  916 => 520,  915 => 518,  913 => 516,  911 => 515,  908 => 514,  904 => 512,  902 => 510,  900 => 508,  896 => 507,  894 => 504,  893 => 503,  892 => 502,  891 => 501,  889 => 500,  886 => 499,  883 => 498,  880 => 497,  877 => 496,  874 => 495,  871 => 494,  868 => 493,  865 => 492,  862 => 491,  859 => 490,  856 => 489,  853 => 488,  850 => 487,  848 => 486,  845 => 485,  841 => 483,  839 => 480,  838 => 479,  837 => 477,  835 => 474,  833 => 473,  830 => 472,  826 => 470,  824 => 469,  823 => 467,  821 => 464,  819 => 463,  816 => 462,  810 => 460,  808 => 459,  805 => 458,  801 => 456,  799 => 455,  798 => 454,  797 => 452,  795 => 450,  793 => 449,  790 => 448,  786 => 446,  784 => 445,  783 => 443,  781 => 441,  779 => 440,  777 => 439,  774 => 438,  770 => 436,  768 => 435,  767 => 433,  765 => 431,  763 => 430,  760 => 429,  756 => 427,  754 => 426,  753 => 424,  751 => 422,  749 => 421,  747 => 420,  744 => 419,  740 => 417,  738 => 416,  737 => 414,  736 => 413,  735 => 412,  733 => 411,  730 => 410,  727 => 409,  725 => 408,  722 => 407,  718 => 405,  716 => 402,  715 => 401,  714 => 399,  712 => 396,  710 => 395,  707 => 394,  703 => 392,  701 => 391,  700 => 390,  699 => 389,  697 => 386,  695 => 385,  692 => 384,  688 => 382,  686 => 379,  685 => 378,  684 => 376,  682 => 373,  680 => 372,  677 => 371,  673 => 369,  671 => 368,  670 => 366,  668 => 364,  666 => 363,  663 => 362,  660 => 361,  655 => 359,  653 => 356,  648 => 354,  646 => 351,  644 => 350,  640 => 349,  639 => 348,  637 => 345,  634 => 344,  632 => 343,  629 => 342,  625 => 340,  623 => 339,  622 => 338,  621 => 336,  619 => 334,  617 => 333,  614 => 332,  610 => 330,  608 => 329,  607 => 328,  606 => 326,  604 => 324,  602 => 323,  599 => 322,  595 => 320,  593 => 319,  592 => 318,  591 => 316,  589 => 314,  586 => 313,  583 => 311,  579 => 309,  577 => 308,  576 => 307,  575 => 305,  573 => 303,  571 => 302,  568 => 301,  564 => 299,  562 => 298,  561 => 297,  560 => 295,  558 => 293,  556 => 292,  553 => 291,  547 => 289,  545 => 288,  542 => 287,  538 => 285,  536 => 284,  535 => 283,  534 => 281,  532 => 279,  530 => 278,  527 => 277,  523 => 275,  521 => 274,  520 => 273,  519 => 271,  517 => 269,  515 => 268,  512 => 267,  508 => 265,  506 => 264,  505 => 263,  504 => 261,  502 => 259,  500 => 258,  497 => 257,  493 => 255,  491 => 254,  490 => 253,  489 => 251,  487 => 249,  485 => 248,  482 => 247,  478 => 245,  476 => 244,  475 => 243,  474 => 241,  472 => 239,  470 => 238,  467 => 237,  463 => 235,  461 => 234,  460 => 233,  459 => 231,  457 => 229,  455 => 228,  452 => 227,  448 => 225,  446 => 224,  445 => 223,  444 => 221,  442 => 219,  440 => 218,  437 => 217,  433 => 215,  431 => 214,  430 => 213,  429 => 212,  428 => 211,  426 => 209,  424 => 208,  421 => 207,  417 => 205,  415 => 203,  414 => 202,  413 => 200,  411 => 197,  409 => 196,  406 => 195,  402 => 193,  400 => 192,  399 => 191,  398 => 190,  397 => 189,  396 => 188,  394 => 187,  391 => 186,  388 => 185,  386 => 184,  383 => 183,  377 => 181,  375 => 180,  372 => 179,  368 => 177,  366 => 176,  365 => 171,  363 => 169,  361 => 168,  358 => 167,  354 => 165,  352 => 163,  351 => 162,  350 => 160,  348 => 157,  346 => 156,  343 => 155,  340 => 154,  337 => 153,  333 => 151,  331 => 149,  330 => 147,  327 => 146,  322 => 144,  313 => 142,  309 => 141,  306 => 140,  303 => 139,  300 => 138,  298 => 137,  295 => 136,  291 => 134,  289 => 133,  288 => 131,  286 => 129,  284 => 128,  282 => 127,  279 => 126,  275 => 124,  273 => 122,  272 => 121,  271 => 119,  270 => 118,  269 => 117,  267 => 116,  264 => 115,  262 => 114,  259 => 113,  255 => 111,  253 => 109,  252 => 108,  251 => 107,  250 => 105,  248 => 102,  245 => 101,  243 => 100,  240 => 99,  237 => 98,  234 => 97,  230 => 95,  227 => 93,  224 => 92,  222 => 91,  219 => 90,  215 => 88,  213 => 87,  212 => 84,  210 => 82,  208 => 81,  205 => 80,  201 => 78,  199 => 77,  198 => 76,  197 => 74,  195 => 72,  193 => 71,  190 => 70,  186 => 68,  184 => 67,  183 => 66,  182 => 65,  181 => 64,  179 => 62,  176 => 61,  172 => 60,  166 => 692,  160 => 689,  157 => 688,  155 => 687,  152 => 686,  146 => 684,  144 => 683,  139 => 682,  133 => 680,  131 => 679,  128 => 678,  126 => 677,  119 => 673,  115 => 671,  113 => 670,  110 => 669,  108 => 668,  106 => 667,  104 => 666,  102 => 60,  95 => 56,  91 => 54,  89 => 52,  87 => 51,  84 => 50,  81 => 49,  78 => 48,  75 => 47,  72 => 46,  70 => 45,  65 => 43,  61 => 42,  58 => 41,  54 => 39,  52 => 38,  50 => 37,  48 => 36,  45 => 35,  43 => 34,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "generic_show_form.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\generic_show_form.html.twig");
    }
}
