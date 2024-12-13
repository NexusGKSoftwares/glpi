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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_f4e80e330eeaed32e76552af39a29644 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "
";
        // line 53
        yield "
";
        // line 70
        yield "
";
        // line 86
        yield "

";
        // line 107
        yield "

";
        // line 129
        yield "

";
        // line 158
        yield "

";
        // line 183
        yield "

";
        // line 198
        yield "

";
        // line 280
        yield "
";
        // line 314
        yield "
";
        // line 348
        yield "
";
        // line 383
        yield "
";
        // line 413
        yield "
";
        // line 452
        yield "
";
        // line 457
        yield "
";
        // line 479
        yield "
";
        // line 504
        yield "
";
        // line 532
        yield "
";
        // line 549
        yield "
";
        // line 572
        yield "
";
        // line 596
        yield "
";
        // line 619
        yield "
";
        // line 641
        yield "
";
        // line 666
        yield "
";
        // line 677
        yield "
";
        // line 699
        yield "
";
        // line 722
        yield "
";
        // line 756
        yield "
";
        // line 767
        yield "
";
        // line 802
        yield "
";
        // line 813
        yield "
";
        // line 823
        yield "

";
        // line 841
        yield "

";
        // line 903
        yield "

";
        // line 934
        yield "

";
        return; yield '';
    }

    // line 34
    public function macro_largeTitle($__label__ = null, $__icon__ = "", $__first__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "first" => $__first__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 35
            yield "   ";
            $context["margins"] = "mt-3";
            // line 36
            yield "   ";
            if (($context["first"] ?? null)) {
                // line 37
                yield "      ";
                $context["margins"] = "mt-n2";
                // line 38
                yield "   ";
            }
            // line 39
            yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["margins"] ?? null), "html", null, true);
            yield "\">
      <div class=\"card-header mb-3\">
         <h4 class=\"card-title ";
            // line 42
            yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) ? ("ms-4") : (""));
            yield "\">
            ";
            // line 43
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) {
                // line 44
                yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
               </div>
            ";
            }
            // line 48
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
         </h4>
      </div>
   </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function macro_smallTitle($__label__ = null, $__icon__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 55
            yield "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 56
            yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["margins"] ?? null), "html", null, true);
            yield "\">
      <div class=\"card-header mb-1 p-0 ps-3\">
         <h4 class=\"card-subtitle ";
            // line 59
            yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) ? ("ms-4") : (""));
            yield "\">
            ";
            // line 60
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) {
                // line 61
                yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
               </div>
            ";
            }
            // line 65
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
         </h4>
      </div>
   </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function macro_autoNameField($__name__ = null, $__item__ = null, $__label__ = "", $__withtemplate__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "item" => $__item__,
            "label" => $__label__,
            "withtemplate" => $__withtemplate__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 72
            yield "   ";
            $context["tpl_value"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) : ($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["name"] ?? null)] ?? null) : null))));
            // line 73
            yield "   ";
            $context["tplmark"] = "";
            // line 74
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 74)) {
                yield " ";
                // line 75
                yield "      ";
                $context["tplmark"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getAutofillMark", [($context["name"] ?? null), ["withtemplate" => ($context["withtemplate"] ?? null)], ($context["tpl_value"] ?? null)], "method", false, false, false, 75);
                // line 76
                yield "   ";
            }
            // line 77
            yield "   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 77), ($context["name"] ?? null), [], "array", true, true, false, 77) &&  !(null === (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["name"] ?? null)] ?? null) : null)))) {
                // line 78
                yield "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["name"] ?? null)] ?? null) : null)), ($context["name"] ?? null), (($context["withtemplate"] ?? null) == 2), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 78), (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null)]);
                // line 79
                yield "   ";
            } else {
                // line 80
                yield "      ";
                $context["value"] = null;
                // line 81
                yield "   ";
            }
            // line 82
            yield "   ";
            $context["label"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s%2\$s"), ($context["label"] ?? null), ($context["tplmark"] ?? null));
            // line 83
            yield "
   ";
            // line 84
            yield CoreExtension::callMacro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 84, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 88
    public function macro_textField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 89
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["type" => "text"], ($context["options"] ?? null));
            // line 90
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 90), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 90)) {
                // line 91
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 92
                yield "   ";
            }
            // line 93
            yield "
   ";
            // line 94
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 95
                yield "      <input type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 95), "html", null, true);
                yield "\" id=\"%id%\"
             class=\"form-control ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 96), "html", null, true);
                yield "\"
             name=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                yield "\"
             ";
                // line 98
                ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 98)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("maxlength=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 98)), "html", null, true)) : (yield ""));
                yield "
             ";
                // line 99
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 99)) ? ("readonly") : (""));
                yield "
             ";
                // line 100
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 100)) ? ("disabled") : (""));
                yield "
             ";
                // line 101
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 101)) ? ("multiple") : (""));
                yield " ";
                // line 102
                yield "             ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 102)) ? ("required") : (""));
                yield " />
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 104
            yield "
   ";
            // line 105
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 105, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function macro_checkboxField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 110
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 110), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 110)) {
                // line 111
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 112
                yield "   ";
            }
            // line 113
            yield "
   ";
            // line 114
            $context["options"] = Twig\Extension\CoreExtension::merge(["center" => true],             // line 116
($context["options"] ?? null));
            // line 117
            yield "
   ";
            // line 118
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 119
                yield "      <input type=\"hidden\"   name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"0\" />
      <input type=\"checkbox\" name=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
             ";
                // line 121
                yield (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
                yield "
             ";
                // line 122
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 122)) ? ("readonly") : (""));
                yield "
             ";
                // line 123
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 123)) ? ("required") : (""));
                yield "
             ";
                // line 124
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 124)) ? ("disabled") : (""));
                yield " />
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            yield "
   ";
            // line 127
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 127, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function macro_sliderField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 132
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 132), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 132)) {
                // line 133
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true],                 // line 135
($context["options"] ?? null));
                // line 136
                yield "   ";
            }
            // line 137
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["no_value" => 0, "yes_value" => 1],             // line 140
($context["options"] ?? null));
            // line 141
            yield "
   ";
            // line 142
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 143
                yield "      <label class=\"form-check form-switch mt-2\">
         <input type=\"hidden\"   name=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 144), "html", null, true);
                yield "\" />
         <input type=\"checkbox\" name=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 145), "html", null, true);
                yield "\" class=\"form-check-input\" id=\"%id%\"
                ";
                // line 146
                yield (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
                yield "
                ";
                // line 147
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 147)) ? ("readonly") : (""));
                yield "
                ";
                // line 148
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 148)) ? ("required") : (""));
                yield "
                ";
                // line 149
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 149)) ? ("disabled") : (""));
                yield " />
         ";
                // line 150
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 150)) {
                    // line 151
                    yield "            <span class=\"form-check-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 151), "html", null, true);
                    yield "</span>
         ";
                }
                // line 153
                yield "      </label>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 155
            yield "
   ";
            // line 156
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 156, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 160
    public function macro_numberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 161
            yield "   ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161) != "any") && (Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161), 0, "floor") != CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161)))) {
                // line 162
                yield "      ";
                // line 163
                yield "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true]);
                // line 164
                yield "   ";
            }
            // line 165
            yield "
   ";
            // line 166
            if ((($context["value"] ?? null) == "")) {
                // line 167
                yield "      ";
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 167)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 167)) : (0));
                // line 168
                yield "   ";
            }
            // line 169
            yield "
   ";
            // line 170
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 171
                yield "      <input type=\"number\" id=\"%id%\"
             class=\"form-control ";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 172), "html", null, true);
                yield "\"
             name=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\"
         ";
                // line 174
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 174)) ? ("readonly") : (""));
                yield "
         ";
                // line 175
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 175)) ? ("disabled") : (""));
                yield "
         ";
                // line 176
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 176)) ? ("required") : (""));
                yield "
         ";
                // line 177
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 177)) {
                    yield "min=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 177), "html", null, true);
                    yield "\"";
                }
                // line 178
                yield "         ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 178)) {
                    yield "max=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 178), "html", null, true);
                    yield "\"";
                }
                // line 179
                yield "         ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 179)) {
                    yield "step=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 179), "html", null, true);
                    yield "\"";
                }
                yield " />
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 181
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 181, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 185
    public function macro_readOnlyField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 186
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
            // line 187
            yield "   ";
            $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 188
                yield "      <span class=\"form-control ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 188), "html", null, true);
                yield "\" readonly>
         ";
                // line 189
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                    // line 190
                    yield "            &nbsp;
         ";
                } else {
                    // line 192
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                    yield "
         ";
                }
                // line 194
                yield "      </span>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 196
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 196, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 200
    public function macro_textareaField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 201
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "enable_mentions" => false, "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => []],             // line 209
($context["options"] ?? null));
            // line 210
            yield "
   ";
            // line 211
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 211), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 211)) {
                // line 212
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 213
                yield "   ";
            }
            // line 214
            yield "   ";
            $context["id"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 214)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 214)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 214))));
            // line 215
            yield "
   ";
            // line 216
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 217
                yield "      ";
                // line 218
                yield "      <textarea class=\"form-control ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 218), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" rows=\"3\"
                style=\"width: 100%;\"
                ";
                // line 220
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 220)) ? ("disabled") : (""));
                yield "
                ";
                // line 221
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 221)) ? ("readonly") : (""));
                yield "
                ";
                // line 222
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 222)) ? ("required") : (""));
                yield ">";
                ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 222)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null)))) : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true)));
                yield "</textarea>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 224
            yield "
   ";
            // line 225
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 225)) {
                // line 226
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [                // line 227
($context["id"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                 // line 228
($context["options"] ?? null), "rand", [], "any", false, false, false, 228), true, ((CoreExtension::getAttribute($this->env, $this->source,                 // line 230
($context["options"] ?? null), "disabled", [], "any", true, true, false, 230)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 230), false)) : (false)), CoreExtension::getAttribute($this->env, $this->source,                 // line 231
($context["options"] ?? null), "enable_images", [], "any", false, false, false, 231)]);
                // line 233
                yield "   ";
            }
            // line 234
            yield "
   ";
            // line 235
            $context["add_html"] = "";
            // line 236
            yield "   ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 236) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 236))) {
                // line 237
                yield "      ";
                $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 238
                    yield "         ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" =>                     // line 239
($context["id"] ?? null), "multiple" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                     // line 241
($context["options"] ?? null), "uploads", [], "any", false, false, false, 241), "required" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 242
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 242), "isMandatoryField", ["_documents_id"], "method", false, false, false, 242)]]);
                    // line 244
                    yield "      ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 245
                yield "   ";
            } elseif (((( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 245) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 245)) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 245)) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 245))) {
                // line 246
                yield "      ";
                $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 247
                    yield "         ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" =>                     // line 248
($context["id"] ?? null), "name" =>                     // line 249
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                     // line 251
($context["options"] ?? null), "uploads", [], "any", false, false, false, 251), "required" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 252
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 252), "isMandatoryField", ["_documents_id"], "method", false, false, false, 252)]]);
                    // line 254
                    yield "      ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 255
                yield "   ";
            }
            // line 256
            yield "
   ";
            // line 257
            if ((($context["add_html"] ?? null) != "")) {
                // line 258
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 258)) {
                    // line 259
                    yield "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 259));
                    // line 260
                    yield "      ";
                }
                // line 261
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 262
                yield "   ";
            }
            // line 263
            yield "
   ";
            // line 264
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 264, $context, $this->getSourceContext());
            yield "
   ";
            // line 265
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 265) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 266
                yield "      <script>
         \$(
            function() {
               const user_mention = new GLPI.RichText.UserMention(
                  tinymce.get('";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "'),
                  ";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 271), "html", null, true);
                yield ",
                  '";
                // line 272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 272)]), "html", null, true);
                yield "'
               );
               user_mention.register();
            }
         )
      </script>
   ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 281
    public function macro_flatpickrHtmlInput($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 282
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 282), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 282)) {
                // line 283
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 284
                yield "   ";
            }
            // line 285
            yield "
   ";
            // line 286
            if ((($context["value"] ?? null) == "NULL")) {
                // line 287
                yield "      ";
                $context["value"] = null;
                // line 288
                yield "   ";
            }
            // line 289
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 289)) {
                // line 290
                yield "      ";
                if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["value"] ?? null), "Y-m-d H:i:s") < $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s"))) {
                    // line 291
                    yield "         ";
                    $context["class"] = "warn";
                    // line 292
                    yield "      ";
                }
                // line 293
                yield "   ";
            } else {
                // line 294
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 294)) {
                    // line 295
                    yield "         ";
                    $context["class"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 295);
                    // line 296
                    yield "      ";
                } else {
                    // line 297
                    yield "         ";
                    $context["class"] = "";
                    // line 298
                    yield "      ";
                }
                // line 299
                yield "   ";
            }
            // line 300
            yield "
   <div class=\"input-group flex-grow-1 flatpickr\" id=\"";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 301), "html", null, true);
            yield "\">
      ";
            // line 303
            yield "      ";
            // line 304
            yield "      <input type=\"text\" class=\"form-control rounded-start ps-2 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 304), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" data-input
             name=\"";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            yield "\"
             ";
            // line 306
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 306)) ? ("required") : (""));
            yield "
             ";
            // line 307
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 307)) ? ("readonly") : (""));
            yield "
             ";
            // line 308
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 308)) ? ("disabled") : (""));
            yield " />
      ";
            // line 309
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 309)) {
                // line 310
                yield "         <i class=\"input-group-text far fa-calendar-alt\" data-toggle role=\"button\"></i>
      ";
            }
            // line 312
            yield "   </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 315
    public function macro_dateField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 316
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())], ($context["options"] ?? null));
            // line 317
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 317))], ($context["options"] ?? null));
            // line 318
            yield "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 319
            yield "
   ";
            // line 320
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 321
                yield "      ";
                yield CoreExtension::callMacro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 321, $context, $this->getSourceContext());
                yield "
      <script>
      \$(function() {
         \$(\"#";
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 324), "html", null, true);
                yield "\").flatpickr({
            wrap: true,
            altInput: true,
            altFormat: '";
                // line 327
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]), "html", null, true);
                yield "',
            dateFormat: 'Y-m-d',
            enableTime: false,
            weekNumbers: true,
            time_24hr: true,
            allowInput: ";
                // line 332
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 332)) ? ("false") : ("true"));
                yield ",
            clickOpens: ";
                // line 333
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 333)) ? ("false") : ("true"));
                yield ",
            locale: getFlatPickerLocale(\"";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = ($context["locale"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["language"] ?? null) : null), "html", null, true);
                yield "\", \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = ($context["locale"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["region"] ?? null) : null), "html", null, true);
                yield "\"),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 345
            yield "
   ";
            // line 346
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 346, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 349
    public function macro_datetimeField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 350
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())], ($context["options"] ?? null));
            // line 351
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 351))], ($context["options"] ?? null));
            // line 352
            yield "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 353
            yield "
   ";
            // line 354
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 355
                yield "      ";
                yield CoreExtension::callMacro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 355, $context, $this->getSourceContext());
                yield "
      <script>
      \$(function() {
         \$('#";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 358), "html", null, true);
                yield "').flatpickr({
            altInput: true,
            dateFormat: 'Y-m-d H:i:S',
            altFormat: '";
                // line 361
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]), "html", null, true);
                yield " H:i:S',
            enableTime: true,
            wrap: true,
            enableSeconds: true,
            weekNumbers: true,
            time_24hr: true,
            allowInput: ";
                // line 367
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 367)) ? ("false") : ("true"));
                yield ",
            clickOpens: ";
                // line 368
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 368)) ? ("false") : ("true"));
                yield ",
            locale: getFlatPickerLocale('";
                // line 369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = ($context["locale"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["language"] ?? null) : null), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_7 = ($context["locale"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["region"] ?? null) : null), "html", null, true);
                yield "'),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 380
            yield "
   ";
            // line 381
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 381, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 384
    public function macro_colorField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 385
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 386
                yield "      <input id=\"%id%\"
             class=\"form-control ";
                // line 387
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 387), "html", null, true);
                yield "\"
             name=\"";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                yield "\"
         ";
                // line 389
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 389)) ? ("readonly") : (""));
                yield "
         ";
                // line 390
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 390)) ? ("disabled") : (""));
                yield "
         ";
                // line 391
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 391)) ? ("required") : (""));
                yield " />
      <script>
      \$(function() {
        \$(\"#%id%\").spectrum({
            showInput: true,
            preferredFormat: \"hex\",
            type: \"text\",
            cancelText: \"";
                // line 398
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "html", null, true);
                yield "\",
            chooseText: \"";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Validate"), "html", null, true);
                yield "\",
            change: function(color) {
                if (color !== null && color.getAlpha() !== 1) {
                    let hex = color.toHexString();
                    hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                    this.value = hex;
                }
            }
        });
      });
      </script>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 411
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 411, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 414
    public function macro_passwordField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 415
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["autocomplete" => "new-password", "is_disclosable" => false, "rand" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 418
($context["options"] ?? null), "rand", [], "any", true, true, false, 418) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 418)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 418)) : (Twig\Extension\CoreExtension::random($this->env->getCharset())))],             // line 419
($context["options"] ?? null));
            // line 420
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 421
($context["options"] ?? null), "id", [], "any", true, true, false, 421)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 421)) : ((($context["name"] ?? null) . Twig\Extension\CoreExtension::random($this->env->getCharset())))), "clearable" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 422
($context["options"] ?? null), "clearable", [], "any", true, true, false, 422)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 422)) : ( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 422)))],             // line 423
($context["options"] ?? null));
            // line 424
            yield "
   ";
            // line 425
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 426
                yield "      <input type=\"password\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 426), "html", null, true);
                yield "\"
             class=\"form-control ";
                // line 427
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 427), "html", null, true);
                yield "\"
             name=\"";
                // line 428
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\"
             value=\"";
                // line 429
                ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 429)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true)) : (yield ""));
                yield "\"
         ";
                // line 430
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 430)) ? ("readonly") : (""));
                yield "
         ";
                // line 431
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 431)) ? ("disabled") : (""));
                yield "
         ";
                // line 432
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 432)) ? ("required") : (""));
                yield " />
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 434
            yield "   ";
            $context["btn_group"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 435
                yield "      &nbsp;<i class=\"far fa-eye pointer disclose\" onmousedown=\"showDisclosablePasswordField('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 435), "html", null, true);
                yield "')\"
               onmouseup=\"hideDisclosablePasswordField('";
                // line 436
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 436), "html", null, true);
                yield "')\"
               onmouseout=\"hideDisclosablePasswordField('";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 437), "html", null, true);
                yield "')\"></i>
      &nbsp;<i class=\"fa fa-paste pointer disclose\" onclick=\"copyDisclosablePasswordFieldToClipboard('";
                // line 438
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 438), "html", null, true);
                yield "')\"></i>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 440
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 440)) {
                // line 441
                yield "      ";
                $context["label"] = (($context["label"] ?? null) . ($context["btn_group"] ?? null));
                // line 442
                yield "   ";
            }
            // line 443
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 443)) {
                // line 444
                yield "      ";
                $context["clear_chk"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 445
                    yield "         <input type=\"checkbox\" name=\"_blank_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" id=\"_blank_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\">&nbsp;<label for=\"_blank_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear"), "html", null, true);
                    yield "</label>
      ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 447
                yield "      ";
                $context["field"] = (($context["field"] ?? null) . ($context["clear_chk"] ?? null));
                // line 448
                yield "   ";
            }
            // line 449
            yield "
   ";
            // line 450
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 450, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 453
    public function macro_emailField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 454
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["type" => "email"], ($context["options"] ?? null));
            // line 455
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 455, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 458
    public function macro_fileField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 459
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "name" =>             // line 461
($context["name"] ?? null), "simple" => false],             // line 463
($context["options"] ?? null));
            // line 464
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 465
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 465)) {
                    // line 466
                    yield "        <input type=\"file\" id=\"%id%\"
               class=\"form-control ";
                    // line 467
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 467), "html", null, true);
                    yield "\"
               name=\"";
                    // line 468
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\"
               ";
                    // line 469
                    yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 469)) ? ("multiple") : (""));
                    yield "
               ";
                    // line 470
                    yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 470)) ? ("readonly") : (""));
                    yield "
               ";
                    // line 471
                    yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 471)) ? ("disabled") : (""));
                    yield "
               ";
                    // line 472
                    yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 472)) ? ("required") : (""));
                    yield " />
      ";
                } else {
                    // line 474
                    yield "        ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [($context["options"] ?? null)]);
                    // line 475
                    yield "      ";
                }
                // line 476
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 477
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 477, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 480
    public function macro_imageField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], $__link_options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "link_options" => $__link_options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 481
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 482
                yield "      <div class=\"img-overlay-wrapper position-relative\">
         ";
                // line 483
                $context["clearable"] = (($__internal_compile_8 = ($context["options"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["clearable"] ?? null) : null);
                // line 484
                yield "         ";
                $context["url"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 484) &&  !(null === (($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["url"] ?? null) : null)))) ? ((($__internal_compile_10 = ($context["options"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["url"] ?? null) : null)) : (null));
                // line 485
                yield "         ";
                $context["options"] = Twig\Extension\CoreExtension::filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
                // line 486
                yield "         ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) {
                    // line 487
                    yield "            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["link_options"] ?? null)]);
                    yield ">
         ";
                }
                // line 489
                yield "               <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                yield "\" ";
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["options"] ?? null)]);
                yield " />
         ";
                // line 490
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) {
                    // line 491
                    yield "            </a>
         ";
                }
                // line 493
                yield "         ";
                if (($context["clearable"] ?? null)) {
                    // line 494
                    yield "            <input type=\"hidden\" name=\"_blank_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" />
            <button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                    // line 495
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
                    yield "\"
                    onclick=\"const blank_input = \$('input[name=\\'_blank_";
                    // line 496
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\\']'); blank_input.val(blank_input.val() ? '' : true); \$(this).toggleClass('btn-danger')\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
                }
                // line 500
                yield "      </div>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 502
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 502, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 505
    public function macro_imageGalleryField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 506
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 507
                yield "      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
                // line 508
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                    // line 509
                    yield "            <div style=\"position: relative; width: fit-content\">
               ";
                    // line 510
                    yield CoreExtension::callMacro($macros["_self"], "macro_imageField", [((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($__internal_compile_11 =                     // line 513
($context["options"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["clearable"] ?? null) : null), "no_label" => true]], 510, $context, $this->getSourceContext());
                    // line 515
                    yield "
            </div>
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 518
                yield "      </div>
      ";
                // line 519
                yield CoreExtension::callMacro($macros["_self"], "macro_fileField", [($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]], 519, $context, $this->getSourceContext());
                // line 522
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 524
            yield "
   ";
            // line 525
            $context["id"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 525)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 525)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 525))));
            // line 526
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)], 526, $context, $this->getSourceContext());
            yield "
   ";
            // line 527
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])], 527, $context, $this->getSourceContext());
            // line 530
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 533
    public function macro_hiddenField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 534
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 534)) {
                // line 535
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["mb" => "mb-0"],                 // line 537
($context["options"] ?? null));
                // line 538
                yield "   ";
            }
            // line 539
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 540
                yield "      <input type=\"hidden\" id=\"%id%\"
             class=\"form-control ";
                // line 541
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 541), "html", null, true);
                yield "\"
             name=\"";
                // line 542
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                yield "\"
         ";
                // line 543
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 543)) ? ("readonly") : (""));
                yield "
         ";
                // line 544
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 544)) ? ("disabled") : (""));
                yield "
         ";
                // line 545
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 545)) ? ("required") : (""));
                yield " />
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 547
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 547, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 550
    public function macro_dropdownNumberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 551
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 554
($context["options"] ?? null));
            // line 555
            yield "
   ";
            // line 556
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 556)) {
                // line 557
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 558
                yield "   ";
            }
            // line 559
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 559), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 559)) {
                // line 560
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 561
                yield "   ";
            }
            // line 562
            yield "
   ";
            // line 563
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 564
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 565
($context["value"] ?? null), "rand" =>                 // line 566
($context["rand"] ?? null)],                 // line 567
($context["options"] ?? null))]);
                // line 568
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 569
            yield "
   ";
            // line 570
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 570))])], 570, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 573
    public function macro_dropdownArrayField($__name__ = null, $__value__ = null, $__elements__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "elements" => $__elements__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 574
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 577
($context["options"] ?? null));
            // line 578
            yield "
   ";
            // line 579
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 579)) {
                // line 580
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 581
                yield "   ";
            }
            // line 582
            yield "
   ";
            // line 583
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 583), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 583)) {
                // line 584
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 585
                yield "   ";
            }
            // line 586
            yield "
   ";
            // line 587
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 588
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [($context["name"] ?? null), ($context["elements"] ?? null), Twig\Extension\CoreExtension::merge(["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(                // line 589
($context["value"] ?? null)), "rand" =>                 // line 590
($context["rand"] ?? null)],                 // line 591
($context["options"] ?? null))]);
                // line 592
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 593
            yield "
   ";
            // line 594
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 594))])], 594, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 597
    public function macro_dropdownTimestampField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 598
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 601
($context["options"] ?? null));
            // line 602
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 602), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 602)) {
                // line 603
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 604
                yield "   ";
            }
            // line 605
            yield "
   ";
            // line 606
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 606)) {
                // line 607
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 608
                yield "   ";
            }
            // line 609
            yield "
   ";
            // line 610
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 611
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 612
($context["value"] ?? null), "rand" =>                 // line 613
($context["rand"] ?? null)],                 // line 614
($context["options"] ?? null))]);
                // line 615
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 616
            yield "
   ";
            // line 617
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 617))])], 617, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 620
    public function macro_dropdownYesNo($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 621
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 624
($context["options"] ?? null));
            // line 625
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 625), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 625)) {
                // line 626
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 627
                yield "   ";
            }
            // line 628
            yield "
   ";
            // line 629
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 629)) {
                // line 630
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 631
                yield "   ";
            }
            // line 632
            yield "
   ";
            // line 633
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 634
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [($context["name"] ?? null), ($context["value"] ?? null),  -1, Twig\Extension\CoreExtension::merge(["rand" =>                 // line 635
($context["rand"] ?? null)],                 // line 636
($context["options"] ?? null))]);
                // line 637
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 638
            yield "
   ";
            // line 639
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 639))])], 639, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 642
    public function macro_dropdownItemTypes($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 643
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 646
($context["options"] ?? null));
            // line 647
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 647), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 647)) {
                // line 648
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 649
                yield "   ";
            }
            // line 650
            yield "
   ";
            // line 651
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 651)) {
                // line 652
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 653
                yield "   ";
            }
            // line 654
            yield "
   ";
            // line 655
            $context["types"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 655)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_12 = ($context["options"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["types"] ?? null) : null), [])) : ([]));
            // line 656
            yield "
   ";
            // line 657
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 658
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [($context["name"] ?? null), ($context["types"] ?? null), Twig\Extension\CoreExtension::merge(["rand" =>                 // line 659
($context["rand"] ?? null), "value" =>                 // line 660
($context["value"] ?? null)],                 // line 661
($context["options"] ?? null))]);
                // line 662
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 663
            yield "
   ";
            // line 664
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 664))])], 664, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 667
    public function macro_dropdownItemsFromItemtypes($__name__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 668
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())],             // line 670
($context["options"] ?? null));
            // line 671
            yield "
   ";
            // line 672
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 673
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [($context["options"] ?? null)]);
                // line 674
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 675
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 675))])], 675, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 678
    public function macro_dropdownIcons($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 679
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 682
($context["options"] ?? null));
            // line 683
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 683), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 683)) {
                // line 684
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 685
                yield "   ";
            }
            // line 686
            yield "
   ";
            // line 687
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 687)) {
                // line 688
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 689
                yield "   ";
            }
            // line 690
            yield "
   ";
            // line 691
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 692
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [($context["name"] ?? null), ($context["value"] ?? null), (Twig\Extension\CoreExtension::constant("GLPI_ROOT") . "/pics/icones"), Twig\Extension\CoreExtension::merge(["rand" =>                 // line 693
($context["rand"] ?? null)],                 // line 694
($context["options"] ?? null))]);
                // line 695
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 696
            yield "
   ";
            // line 697
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 697))])], 697, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 700
    public function macro_dropdownHoursField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 701
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 704
($context["options"] ?? null));
            // line 705
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 705), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 705)) {
                // line 706
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 707
                yield "   ";
            }
            // line 708
            yield "
   ";
            // line 709
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 709)) {
                // line 710
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 711
                yield "   ";
            }
            // line 712
            yield "
   ";
            // line 713
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 714
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["rand" =>                 // line 715
($context["rand"] ?? null), "value" =>                 // line 716
($context["value"] ?? null)],                 // line 717
($context["options"] ?? null))]);
                // line 718
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 719
            yield "
   ";
            // line 720
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 720))])], 720, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 723
    public function macro_dropdownField($__itemtype__ = null, $__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "itemtype" => $__itemtype__,
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 724
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 724)) {
                // line 725
                yield "      ";
                // line 726
                yield "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 727
                yield "      <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defined_input_name"] ?? null), "html", null, true);
                yield "\" value=\"1\"></input>

      ";
                // line 730
                yield "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 731
                yield "   ";
            }
            // line 732
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 735
($context["options"] ?? null));
            // line 736
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 736), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 736)) {
                // line 737
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 738
                yield "   ";
            }
            // line 739
            yield "
   ";
            // line 740
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 740)) {
                // line 741
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 742
                yield "   ";
            }
            // line 743
            yield "
   ";
            // line 744
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 745
                yield "      ";
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), Twig\Extension\CoreExtension::merge(["name" =>                 // line 746
($context["name"] ?? null), "value" =>                 // line 747
($context["value"] ?? null), "rand" =>                 // line 748
($context["rand"] ?? null)],                 // line 749
($context["options"] ?? null)));
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 751
            yield "
   ";
            // line 752
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["field"] ?? null)))) {
                // line 753
                yield "      ";
                yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 753))])], 753, $context, $this->getSourceContext());
                yield "
   ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 757
    public function macro_htmlField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 758
            yield "   ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                // line 759
                yield "      ";
                $context["value"] = "&nbsp;";
                // line 760
                yield "   ";
            }
            // line 761
            yield "
   ";
            // line 762
            $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 763
                yield "      <span class=\"form-control-plaintext\">";
                yield ($context["value"] ?? null);
                yield "</span>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 765
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 765, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 768
    public function macro_field($__name__ = null, $__field__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 769
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => []],             // line 776
($context["options"] ?? null));
            // line 777
            yield "
   ";
            // line 778
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 778), ($context["name"] ?? null), [], "array", true, true, false, 778)) {
                // line 779
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 779)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["name"] ?? null)] ?? null) : null)]);
                // line 780
                yield "   ";
            } elseif (CoreExtension::inFilter(($context["name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 780))) {
                // line 781
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true]);
                // line 782
                yield "   ";
            }
            // line 783
            yield "
   ";
            // line 784
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 784)) {
                // line 785
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field"] ?? null), "html", null, true);
                yield "
   ";
            } else {
                // line 787
                yield "      ";
                $context["id"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 787)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 787)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 787))));
                // line 788
                yield "      ";
                $context["field"] = Twig\Extension\CoreExtension::replace(($context["field"] ?? null), ["%id%" => ($context["id"] ?? null)]);
                // line 789
                yield "      ";
                $context["add_field_html"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 789)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 789)) : (""));
                // line 790
                yield "
      ";
                // line 791
                if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", true, true, false, 791) ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 791), "isHiddenField", [($context["name"] ?? null)], "method", false, false, false, 791))) {
                    // line 792
                    yield "         ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 792)) {
                        // line 793
                        yield "            ";
                        yield CoreExtension::callMacro($macros["_self"], "macro_noLabelField", [($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 793, $context, $this->getSourceContext());
                        yield "
         ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 794
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 794)) {
                        // line 795
                        yield "            ";
                        yield CoreExtension::callMacro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 795, $context, $this->getSourceContext());
                        yield "
         ";
                    } else {
                        // line 797
                        yield "            ";
                        yield CoreExtension::callMacro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 797, $context, $this->getSourceContext());
                        yield "
         ";
                    }
                    // line 799
                    yield "      ";
                }
                // line 800
                yield "   ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 803
    public function macro_ajaxField($__id__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 804
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 805
                yield "      <div id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" class=\"form-field-ajax\">
         ";
                // line 806
                if ( !(null === ($context["value"] ?? null))) {
                    // line 807
                    yield "            ";
                    yield ($context["value"] ?? null);
                    yield "
         ";
                }
                // line 809
                yield "      </div>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 811
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_field", [($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 811))])], 811, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 814
    public function macro_nullField($__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 815
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 816
            yield "
   ";
            // line 817
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 817)) {
                // line 818
                yield "      ";
                yield CoreExtension::callMacro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 818, $context, $this->getSourceContext());
                yield "
   ";
            } else {
                // line 820
                yield "      ";
                yield CoreExtension::callMacro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 820, $context, $this->getSourceContext());
                yield "
   ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 825
    public function macro_noLabelField($__field__ = null, $__id__ = "", $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 826
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-3"],             // line 829
($context["options"] ?? null));
            // line 830
            yield "
   ";
            // line 831
            $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 831) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 831)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 831)) : ("col-12 col-sm-6"));
            // line 832
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 832)) {
                // line 833
                yield "      ";
                $context["class"] = "col-12";
                // line 834
                yield "   ";
            }
            // line 835
            yield "
   <div class=\"";
            // line 836
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 836), "html", null, true);
            yield "\">
      ";
            // line 837
            yield ($context["field"] ?? null);
            yield "
      ";
            // line 838
            yield ($context["add_field_html"] ?? null);
            yield "
   </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 843
    public function macro_horizontalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 844
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "full_width_adapt_column" => true, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => [], "center" => false],             // line 853
($context["options"] ?? null));
            // line 854
            yield "
   ";
            // line 855
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 855)) {
                // line 856
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-2", "input_class" => "col-10"],                 // line 859
($context["options"] ?? null));
                // line 860
                yield "   ";
            }
            // line 861
            yield "
   ";
            // line 862
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 862)) {
                // line 863
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 866
                yield "
      ";
                // line 867
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width_adapt_column", [], "any", false, false, false, 867)) {
                    // line 868
                    yield "         ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"],                     // line 871
($context["options"] ?? null));
                    // line 872
                    yield "      ";
                }
                // line 873
                yield "   ";
            }
            // line 874
            yield "
   ";
            // line 875
            $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-xxl-5", "input_class" => "col-xxl-7"],             // line 878
($context["options"] ?? null));
            // line 879
            yield "
   ";
            // line 880
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 880)) {
                // line 881
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["label_class" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 882
($context["options"] ?? null), "label_class", [], "any", false, false, false, 882) . " text-xxl-end")]);
                // line 884
                yield "   ";
            }
            // line 885
            yield "
   ";
            // line 886
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 886))) {
                // line 887
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 887)]);
                // line 888
                yield "   ";
            } else {
                // line 889
                yield "      ";
                $context["extra_attribs"] = "";
                // line 890
                yield "   ";
            }
            // line 891
            yield "
   <div class=\"form-field row ";
            // line 892
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 892), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 892), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 892), "html", null, true);
            yield "\" ";
            yield ($context["extra_attribs"] ?? null);
            yield ">
      ";
            // line 893
            yield CoreExtension::callMacro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 893))], 893, $context, $this->getSourceContext());
            yield "
      ";
            // line 894
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 894)) {
                // line 895
                yield "         ";
                $context["flex_class"] = "d-flex align-items-center";
                // line 896
                yield "      ";
            }
            // line 897
            yield "      <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 897), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["flex_class"] ?? null), "html", null, true);
            yield " field-container\">
         ";
            // line 898
            yield ($context["field"] ?? null);
            yield "
         ";
            // line 899
            yield ($context["add_field_html"] ?? null);
            yield "
      </div>
   </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 905
    public function macro_verticalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 906
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => []],             // line 912
($context["options"] ?? null));
            // line 913
            yield "
   ";
            // line 914
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 914)) {
                // line 915
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 918
                yield "   ";
            }
            // line 919
            yield "
   ";
            // line 920
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 920))) {
                // line 921
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 921)]);
                // line 922
                yield "   ";
            } else {
                // line 923
                yield "      ";
                $context["extra_attribs"] = "";
                // line 924
                yield "   ";
            }
            // line 925
            yield "
   <div class=\"form-field ";
            // line 926
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 926), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 926), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 926), "html", null, true);
            yield "\" ";
            yield ($context["extra_attribs"] ?? null);
            yield ">
      ";
            // line 927
            yield CoreExtension::callMacro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 927))], 927, $context, $this->getSourceContext());
            yield "
      <div class=\"";
            // line 928
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 928), "html", null, true);
            yield " field-container\">
         ";
            // line 929
            yield ($context["field"] ?? null);
            yield "
      </div>
      ";
            // line 931
            yield ($context["add_field_html"] ?? null);
            yield "
   </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 936
    public function macro_label($__label__ = null, $__id__ = null, $__options__ = [], $__class__ = "form-label", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "id" => $__id__,
            "options" => $__options__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 937
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["locked" => false, "locked_value" => null],             // line 940
($context["options"] ?? null));
            // line 941
            yield "
   ";
            // line 942
            $context["required_mark"] = "";
            // line 943
            yield "   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 943), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 943)], "method", false, false, false, 943) || CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 943))) {
                // line 944
                yield "      ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 945
                yield "   ";
            }
            // line 946
            yield "
   ";
            // line 947
            $context["helper"] = "";
            // line 948
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 948)) {
                // line 949
                yield "      ";
                $context["helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 950
                    yield "         <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
               data-bs-content=\"";
                    // line 951
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 951), "html", null, true);
                    yield "\">
            ?
         </span>
      ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 955
                yield "   ";
            }
            // line 956
            yield "
   ";
            // line 957
            $context["locked_mark"] = "";
            // line 958
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 958)) {
                // line 959
                yield "      ";
                $context["locked_mark"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 960
                    yield "        ";
                    $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Field will not be updated from inventory"), "html", null, true);
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 961
                    yield "        ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 961))) {
                        // line 962
                        yield "            ";
                        $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                            yield " - ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((__("Last inventory value was:") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 962)), "html", null, true);
                            return; yield '';
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 963
                        yield "        ";
                    }
                    // line 964
                    yield "        <i class=\"ti ti-lock\"
           title=\"";
                    // line 965
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                    yield "\"
           data-bs-toggle=\"tooltip\"></i>
      ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 968
                yield "   ";
            }
            // line 969
            yield "
   <label class=\"";
            // line 970
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">
      ";
            // line 971
            yield ($context["label"] ?? null);
            yield "
      ";
            // line 972
            yield ($context["locked_mark"] ?? null);
            yield "
      ";
            // line 973
            yield ($context["required_mark"] ?? null);
            yield "
      ";
            // line 974
            yield ($context["helper"] ?? null);
            yield "
   </label>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/fields_macros.html.twig";
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
        return array (  2927 => 974,  2923 => 973,  2919 => 972,  2915 => 971,  2909 => 970,  2906 => 969,  2903 => 968,  2896 => 965,  2893 => 964,  2890 => 963,  2882 => 962,  2879 => 961,  2873 => 960,  2870 => 959,  2867 => 958,  2865 => 957,  2862 => 956,  2859 => 955,  2851 => 951,  2848 => 950,  2845 => 949,  2842 => 948,  2840 => 947,  2837 => 946,  2834 => 945,  2831 => 944,  2828 => 943,  2826 => 942,  2823 => 941,  2821 => 940,  2819 => 937,  2804 => 936,  2795 => 931,  2790 => 929,  2786 => 928,  2782 => 927,  2772 => 926,  2769 => 925,  2766 => 924,  2763 => 923,  2760 => 922,  2757 => 921,  2755 => 920,  2752 => 919,  2749 => 918,  2746 => 915,  2744 => 914,  2741 => 913,  2739 => 912,  2737 => 906,  2721 => 905,  2711 => 899,  2707 => 898,  2700 => 897,  2697 => 896,  2694 => 895,  2692 => 894,  2688 => 893,  2678 => 892,  2675 => 891,  2672 => 890,  2669 => 889,  2666 => 888,  2663 => 887,  2661 => 886,  2658 => 885,  2655 => 884,  2653 => 882,  2651 => 881,  2649 => 880,  2646 => 879,  2644 => 878,  2643 => 875,  2640 => 874,  2637 => 873,  2634 => 872,  2632 => 871,  2630 => 868,  2628 => 867,  2625 => 866,  2622 => 863,  2620 => 862,  2617 => 861,  2614 => 860,  2612 => 859,  2610 => 856,  2608 => 855,  2605 => 854,  2603 => 853,  2601 => 844,  2585 => 843,  2576 => 838,  2572 => 837,  2566 => 836,  2563 => 835,  2560 => 834,  2557 => 833,  2554 => 832,  2552 => 831,  2549 => 830,  2547 => 829,  2545 => 826,  2530 => 825,  2520 => 820,  2514 => 818,  2512 => 817,  2509 => 816,  2506 => 815,  2494 => 814,  2485 => 811,  2480 => 809,  2474 => 807,  2472 => 806,  2467 => 805,  2464 => 804,  2449 => 803,  2442 => 800,  2439 => 799,  2433 => 797,  2427 => 795,  2425 => 794,  2420 => 793,  2417 => 792,  2415 => 791,  2412 => 790,  2409 => 789,  2406 => 788,  2403 => 787,  2397 => 785,  2395 => 784,  2392 => 783,  2389 => 782,  2386 => 781,  2383 => 780,  2380 => 779,  2378 => 778,  2375 => 777,  2373 => 776,  2371 => 769,  2356 => 768,  2347 => 765,  2340 => 763,  2338 => 762,  2335 => 761,  2332 => 760,  2329 => 759,  2326 => 758,  2311 => 757,  2301 => 753,  2299 => 752,  2296 => 751,  2290 => 749,  2289 => 748,  2288 => 747,  2287 => 746,  2285 => 745,  2283 => 744,  2280 => 743,  2277 => 742,  2274 => 741,  2272 => 740,  2269 => 739,  2266 => 738,  2263 => 737,  2260 => 736,  2258 => 735,  2256 => 732,  2253 => 731,  2250 => 730,  2244 => 727,  2241 => 726,  2239 => 725,  2236 => 724,  2220 => 723,  2212 => 720,  2209 => 719,  2205 => 718,  2203 => 717,  2202 => 716,  2201 => 715,  2199 => 714,  2197 => 713,  2194 => 712,  2191 => 711,  2188 => 710,  2186 => 709,  2183 => 708,  2180 => 707,  2177 => 706,  2174 => 705,  2172 => 704,  2170 => 701,  2155 => 700,  2147 => 697,  2144 => 696,  2140 => 695,  2138 => 694,  2137 => 693,  2135 => 692,  2133 => 691,  2130 => 690,  2127 => 689,  2124 => 688,  2122 => 687,  2119 => 686,  2116 => 685,  2113 => 684,  2110 => 683,  2108 => 682,  2106 => 679,  2091 => 678,  2082 => 675,  2078 => 674,  2075 => 673,  2073 => 672,  2070 => 671,  2068 => 670,  2066 => 668,  2052 => 667,  2044 => 664,  2041 => 663,  2037 => 662,  2035 => 661,  2034 => 660,  2033 => 659,  2031 => 658,  2029 => 657,  2026 => 656,  2024 => 655,  2021 => 654,  2018 => 653,  2015 => 652,  2013 => 651,  2010 => 650,  2007 => 649,  2004 => 648,  2001 => 647,  1999 => 646,  1997 => 643,  1982 => 642,  1974 => 639,  1971 => 638,  1967 => 637,  1965 => 636,  1964 => 635,  1962 => 634,  1960 => 633,  1957 => 632,  1954 => 631,  1951 => 630,  1949 => 629,  1946 => 628,  1943 => 627,  1940 => 626,  1937 => 625,  1935 => 624,  1933 => 621,  1918 => 620,  1910 => 617,  1907 => 616,  1903 => 615,  1901 => 614,  1900 => 613,  1899 => 612,  1897 => 611,  1895 => 610,  1892 => 609,  1889 => 608,  1886 => 607,  1884 => 606,  1881 => 605,  1878 => 604,  1875 => 603,  1872 => 602,  1870 => 601,  1868 => 598,  1853 => 597,  1845 => 594,  1842 => 593,  1838 => 592,  1836 => 591,  1835 => 590,  1834 => 589,  1832 => 588,  1830 => 587,  1827 => 586,  1824 => 585,  1821 => 584,  1819 => 583,  1816 => 582,  1813 => 581,  1810 => 580,  1808 => 579,  1805 => 578,  1803 => 577,  1801 => 574,  1785 => 573,  1777 => 570,  1774 => 569,  1770 => 568,  1768 => 567,  1767 => 566,  1766 => 565,  1764 => 564,  1762 => 563,  1759 => 562,  1756 => 561,  1753 => 560,  1750 => 559,  1747 => 558,  1744 => 557,  1742 => 556,  1739 => 555,  1737 => 554,  1735 => 551,  1720 => 550,  1711 => 547,  1705 => 545,  1701 => 544,  1697 => 543,  1691 => 542,  1687 => 541,  1684 => 540,  1681 => 539,  1678 => 538,  1676 => 537,  1674 => 535,  1671 => 534,  1656 => 533,  1649 => 530,  1647 => 527,  1642 => 526,  1640 => 525,  1637 => 524,  1632 => 522,  1630 => 519,  1627 => 518,  1619 => 515,  1617 => 513,  1616 => 510,  1613 => 509,  1609 => 508,  1606 => 507,  1603 => 506,  1588 => 505,  1579 => 502,  1574 => 500,  1567 => 496,  1563 => 495,  1558 => 494,  1555 => 493,  1551 => 491,  1549 => 490,  1542 => 489,  1534 => 487,  1531 => 486,  1528 => 485,  1525 => 484,  1523 => 483,  1520 => 482,  1517 => 481,  1501 => 480,  1492 => 477,  1488 => 476,  1485 => 475,  1482 => 474,  1477 => 472,  1473 => 471,  1469 => 470,  1465 => 469,  1461 => 468,  1457 => 467,  1454 => 466,  1451 => 465,  1448 => 464,  1446 => 463,  1445 => 461,  1443 => 459,  1428 => 458,  1419 => 455,  1416 => 454,  1401 => 453,  1393 => 450,  1390 => 449,  1387 => 448,  1384 => 447,  1371 => 445,  1368 => 444,  1365 => 443,  1362 => 442,  1359 => 441,  1356 => 440,  1350 => 438,  1346 => 437,  1342 => 436,  1337 => 435,  1334 => 434,  1328 => 432,  1324 => 431,  1320 => 430,  1316 => 429,  1312 => 428,  1308 => 427,  1303 => 426,  1301 => 425,  1298 => 424,  1296 => 423,  1295 => 422,  1294 => 421,  1292 => 420,  1290 => 419,  1289 => 418,  1287 => 415,  1272 => 414,  1263 => 411,  1247 => 399,  1243 => 398,  1233 => 391,  1229 => 390,  1225 => 389,  1219 => 388,  1215 => 387,  1212 => 386,  1209 => 385,  1194 => 384,  1186 => 381,  1183 => 380,  1166 => 369,  1162 => 368,  1158 => 367,  1149 => 361,  1143 => 358,  1136 => 355,  1134 => 354,  1131 => 353,  1128 => 352,  1125 => 351,  1122 => 350,  1107 => 349,  1099 => 346,  1096 => 345,  1079 => 334,  1075 => 333,  1071 => 332,  1063 => 327,  1057 => 324,  1050 => 321,  1048 => 320,  1045 => 319,  1042 => 318,  1039 => 317,  1036 => 316,  1021 => 315,  1014 => 312,  1010 => 310,  1008 => 309,  1004 => 308,  1000 => 307,  996 => 306,  990 => 305,  983 => 304,  981 => 303,  977 => 301,  974 => 300,  971 => 299,  968 => 298,  965 => 297,  962 => 296,  959 => 295,  956 => 294,  953 => 293,  950 => 292,  947 => 291,  944 => 290,  941 => 289,  938 => 288,  935 => 287,  933 => 286,  930 => 285,  927 => 284,  924 => 283,  921 => 282,  906 => 281,  892 => 272,  888 => 271,  884 => 270,  878 => 266,  876 => 265,  872 => 264,  869 => 263,  866 => 262,  863 => 261,  860 => 260,  857 => 259,  854 => 258,  852 => 257,  849 => 256,  846 => 255,  842 => 254,  840 => 252,  839 => 251,  838 => 249,  837 => 248,  835 => 247,  832 => 246,  829 => 245,  825 => 244,  823 => 242,  822 => 241,  821 => 239,  819 => 238,  816 => 237,  813 => 236,  811 => 235,  808 => 234,  805 => 233,  803 => 231,  802 => 230,  801 => 228,  800 => 227,  798 => 226,  796 => 225,  793 => 224,  785 => 222,  781 => 221,  777 => 220,  767 => 218,  765 => 217,  763 => 216,  760 => 215,  757 => 214,  754 => 213,  751 => 212,  749 => 211,  746 => 210,  744 => 209,  742 => 201,  727 => 200,  718 => 196,  713 => 194,  707 => 192,  703 => 190,  701 => 189,  696 => 188,  693 => 187,  690 => 186,  675 => 185,  666 => 181,  655 => 179,  648 => 178,  642 => 177,  638 => 176,  634 => 175,  630 => 174,  624 => 173,  620 => 172,  617 => 171,  615 => 170,  612 => 169,  609 => 168,  606 => 167,  604 => 166,  601 => 165,  598 => 164,  595 => 163,  593 => 162,  590 => 161,  575 => 160,  567 => 156,  564 => 155,  559 => 153,  553 => 151,  551 => 150,  547 => 149,  543 => 148,  539 => 147,  535 => 146,  529 => 145,  523 => 144,  520 => 143,  518 => 142,  515 => 141,  513 => 140,  511 => 137,  508 => 136,  506 => 135,  504 => 133,  501 => 132,  486 => 131,  478 => 127,  475 => 126,  469 => 124,  465 => 123,  461 => 122,  457 => 121,  453 => 120,  448 => 119,  446 => 118,  443 => 117,  441 => 116,  440 => 114,  437 => 113,  434 => 112,  431 => 111,  428 => 110,  413 => 109,  405 => 105,  402 => 104,  395 => 102,  392 => 101,  388 => 100,  384 => 99,  380 => 98,  374 => 97,  370 => 96,  365 => 95,  363 => 94,  360 => 93,  357 => 92,  354 => 91,  351 => 90,  348 => 89,  333 => 88,  325 => 84,  322 => 83,  319 => 82,  316 => 81,  313 => 80,  310 => 79,  307 => 78,  304 => 77,  301 => 76,  298 => 75,  294 => 74,  291 => 73,  288 => 72,  272 => 71,  260 => 65,  254 => 62,  251 => 61,  249 => 60,  245 => 59,  240 => 57,  237 => 56,  234 => 55,  221 => 54,  209 => 48,  203 => 45,  200 => 44,  198 => 43,  194 => 42,  189 => 40,  186 => 39,  183 => 38,  180 => 37,  177 => 36,  174 => 35,  160 => 34,  153 => 934,  149 => 903,  145 => 841,  141 => 823,  138 => 813,  135 => 802,  132 => 767,  129 => 756,  126 => 722,  123 => 699,  120 => 677,  117 => 666,  114 => 641,  111 => 619,  108 => 596,  105 => 572,  102 => 549,  99 => 532,  96 => 504,  93 => 479,  90 => 457,  87 => 452,  84 => 413,  81 => 383,  78 => 348,  75 => 314,  72 => 280,  68 => 198,  64 => 183,  60 => 158,  56 => 129,  52 => 107,  48 => 86,  45 => 70,  42 => 53,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/fields_macros.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\fields_macros.html.twig");
    }
}
