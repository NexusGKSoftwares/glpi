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

/* components/form/buttons.html.twig */
class __TwigTemplate_77d565985ec9e899c6e265eaa838907e extends Template
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
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["withtemplate"] ?? null) : null)) : (""));
        // line 35
        $context["candel"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "candel", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["candel"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["candel"] ?? null) : null)) : (true));
        // line 36
        $context["canedit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["canedit"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["canedit"] ?? null) : null)) : (true));
        // line 37
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 37), "id", [], "array", true, true, false, 37) &&  !(null === (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 37)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null)))) ? ((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 37)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null)) : ( -1));
        // line 38
        yield "
         <div class=\"row\">
         ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "
         </div>

";
        // line 43
        if ((($context["canedit"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null)], "method", false, false, false, 43))) {
            // line 44
            yield "      <div class=\"card-body mx-n2 mb-4 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
         ";
            // line 45
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["withtemplate"] ?? null)) > 0) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [($context["id"] ?? null)], "method", false, false, false, 45))) {
                // line 46
                yield "            ";
                if (((($context["id"] ?? null) <= 0) || (($context["withtemplate"] ?? null) == 2))) {
                    // line 47
                    yield "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\" value=\"1\">
                  <i class=\"fas fa-plus\"></i>
                  <span>";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                    yield "</span>
               </button>
            ";
                } else {
                    // line 52
                    yield "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"far fa-save\"></i>
                  <span>";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "</span>
               </button>
            ";
                }
                // line 57
                yield "         ";
            } else {
                // line 58
                yield "            ";
                if (((($context["candel"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 58)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 58))) {
                    // line 59
                    yield "               ";
                    $context["candel"] = false;
                    // line 60
                    yield "            ";
                }
                // line 61
                yield "
            ";
                // line 62
                if ((($context["canedit"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("UPDATE")], "method", false, false, false, 62))) {
                    // line 63
                    yield "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"far fa-save\"></i>
                  <span>";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "</span>
               </button>
            ";
                }
                // line 68
                yield "
            ";
                // line 69
                if (($context["candel"] ?? null)) {
                    // line 70
                    yield "               ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 70)) {
                        // line 71
                        yield "                  ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 71)) {
                            // line 72
                            yield "                     <button class=\"btn btn-outline-secondary me-2\" type=\"submit\"
                             name=\"restore\" value=\"1\">
                        <i class=\"ti ti-trash-off\"></i>
                        <span>";
                            // line 75
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                            yield "</span>
                     </button>
                  ";
                        }
                        // line 78
                        yield "
                  ";
                        // line 79
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 79)) {
                            // line 80
                            yield "                    ";
                            $context["item_devices"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Devices::getConcernedItems");
                            // line 81
                            yield "                    ";
                            $context["show_keep_devices"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 81), ($context["item_devices"] ?? null));
                            // line 82
                            yield "
                    ";
                            // line 83
                            $context["span_cls"] = "";
                            // line 84
                            yield "                    ";
                            if (($context["show_keep_devices"] ?? null)) {
                                // line 85
                                yield "                        ";
                                $context["span_cls"] = "border border-danger d-flex align-items-start flex-wrap p-1 px-2 me-2";
                                // line 86
                                yield "                    ";
                            }
                            // line 87
                            yield "
                     <span class=\"";
                            // line 88
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["span_cls"] ?? null), "html", null, true);
                            yield "\">
                        <button class=\"btn btn-danger me-2\" type=\"submit\" name=\"purge\"
                              value=\"1\"
                              onclick=\"return confirm('";
                            // line 91
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "html", null, true);
                            yield "');\">
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                            // line 93
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                            yield "</span>
                        </button>
                        ";
                            // line 95
                            if (($context["show_keep_devices"] ?? null)) {
                                // line 96
                                yield "                            <span class=\"mt-2\">
                                <label class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"keep_devices\" value=\"1\" />
                                    <span class=\"form-check-label text-danger\">
                                        ";
                                // line 100
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Keep the devices while deleting this item"), "html", null, true);
                                yield "
                                    </span>
                                </label>
                            </span>
                        ";
                            }
                            // line 105
                            yield "                     <span>
                  ";
                        }
                        // line 107
                        yield "               ";
                    } else {
                        // line 108
                        yield "                  ";
                        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeDeleted", [], "method", false, false, false, 108) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "useDeletedToLockIfDynamic", [], "method", false, false, false, 108))) {
                            // line 109
                            yield "                     ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 109)) {
                                // line 110
                                yield "                        <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                                onclick=\"return confirm('";
                                // line 111
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "html", null, true);
                                yield "');\"
                                value=\"1\">
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                                // line 114
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                yield "</span>
                        </button>
                     ";
                            }
                            // line 117
                            yield "                  ";
                        } elseif (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 117) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 117))) {
                            // line 118
                            yield "                     <button class=\"btn btn-outline-warning me-2\" type=\"submit\"
                             name=\"delete\" value=\"1\">
                        <i class=\"ti ti-trash\"></i>
                        <span>";
                            // line 121
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Put in trashbin"), "html", null, true);
                            yield "</span>
                     </button>
                  ";
                        }
                        // line 124
                        yield "               ";
                    }
                    // line 125
                    yield "            ";
                }
                // line 126
                yield "
            ";
                // line 127
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_mod"], "method", false, false, false, 127)) {
                    // line 128
                    yield "               <input type=\"hidden\" name=\"_read_date_mod\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date_mod"] ?? null) : null), "html", null, true);
                    yield "\" />
            ";
                }
                // line 130
                yield "         ";
            }
            // line 131
            yield "
         ";
            // line 132
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [($context["id"] ?? null)], "method", false, false, false, 132)) {
                // line 133
                yield "            <input type=\"hidden\" name=\"id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" />
         ";
            }
            // line 135
            yield "
         ";
            // line 136
            if ((($context["canedit"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["addbuttons"] ?? null) : null)) > 0))) {
                // line 137
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["addbuttons"] ?? null) : null));
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 138
                    yield "               <button class=\"btn btn-outline-secondary me-2\" type=\"submit\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" value=\"1\">
                  ";
                    // line 139
                    if (is_iterable($context["val"])) {
                        // line 140
                        yield "                     ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["val"], "icon", [], "any", true, true, false, 140)) {
                            // line 141
                            yield "                        <i class=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "icon", [], "any", false, false, false, 141), "html", null, true);
                            yield "\"></i>
                     ";
                        }
                        // line 143
                        yield "                     <span>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "text", [], "any", true, true, false, 143)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "text", [], "any", false, false, false, 143), "")) : ("")), "html", null, true);
                        yield "</span>
                  ";
                    } else {
                        // line 145
                        yield "                     ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                        yield "
                  ";
                    }
                    // line 147
                    yield "               </button>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                yield "         ";
            }
            // line 150
            yield "
      </div>

      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
   </div> ";
            // line 155
            yield "</form> ";
        } else {
            // line 157
            yield "   </div> ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/buttons.html.twig";
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
        return array (  331 => 157,  328 => 155,  324 => 153,  319 => 150,  316 => 149,  309 => 147,  303 => 145,  297 => 143,  291 => 141,  288 => 140,  286 => 139,  281 => 138,  276 => 137,  274 => 136,  271 => 135,  265 => 133,  263 => 132,  260 => 131,  257 => 130,  251 => 128,  249 => 127,  246 => 126,  243 => 125,  240 => 124,  234 => 121,  229 => 118,  226 => 117,  220 => 114,  214 => 111,  211 => 110,  208 => 109,  205 => 108,  202 => 107,  198 => 105,  190 => 100,  184 => 96,  182 => 95,  177 => 93,  172 => 91,  166 => 88,  163 => 87,  160 => 86,  157 => 85,  154 => 84,  152 => 83,  149 => 82,  146 => 81,  143 => 80,  141 => 79,  138 => 78,  132 => 75,  127 => 72,  124 => 71,  121 => 70,  119 => 69,  116 => 68,  110 => 65,  106 => 63,  104 => 62,  101 => 61,  98 => 60,  95 => 59,  92 => 58,  89 => 57,  83 => 54,  79 => 52,  73 => 49,  69 => 47,  66 => 46,  64 => 45,  61 => 44,  59 => 43,  53 => 40,  49 => 38,  47 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/buttons.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\buttons.html.twig");
    }
}
