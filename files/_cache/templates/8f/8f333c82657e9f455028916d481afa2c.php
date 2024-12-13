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

/* components/alerts_macros.html.twig */
class __TwigTemplate_3f2ff35be979ce46171553654c076372 extends Template
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
        // line 62
        yield "
";
        // line 72
        yield "
";
        // line 82
        yield "
";
        // line 92
        yield "
";
        return; yield '';
    }

    // line 34
    public function macro_alert($__alert_type__ = "", $__title__ = "", $__messages__ = [], $__icon__ = "", $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "alert_type" => $__alert_type__,
            "title" => $__title__,
            "messages" => $__messages__,
            "icon" => $__icon__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 35
            yield "   <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alert_type"] ?? null), "html", null, true);
            yield " ";
            yield ((($context["important"] ?? null)) ? ("alert-important") : (""));
            yield "\" role=\"alert\">
      <div class=\"d-flex\">
         <div>
            <i class=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield " fa-2x alert-icon\"></i>
         </div>
         <div>
            ";
            // line 41
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["title"] ?? null))) {
                // line 42
                yield "               <h4 class=\"alert-title\">
                  ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "
               </h4>
            ";
            }
            // line 46
            yield "            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)) > 0)) {
                // line 47
                yield "               <div class=\"text-muted\">
                  ";
                // line 48
                if (is_iterable(($context["messages"] ?? null))) {
                    // line 49
                    yield "                     ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 50
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                        yield "
                        ";
                        // line 51
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 51)) {
                            yield "<br />";
                        }
                        // line 52
                        yield "                     ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    yield "                  ";
                } else {
                    // line 54
                    yield "                     ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messages"] ?? null), "html", null, true);
                    yield "
                  ";
                }
                // line 56
                yield "               </div>
            ";
            }
            // line 58
            yield "         </div>
      </div>
   </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function macro_alert_success($__title__ = "", $__messages__ = [], $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "messages" => $__messages__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 64
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_alert", ["success",             // line 66
($context["title"] ?? null),             // line 67
($context["messages"] ?? null), "fas fa-check",             // line 69
($context["important"] ?? null)], 64, $context, $this->getSourceContext());
            // line 70
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 73
    public function macro_alert_info($__title__ = "", $__messages__ = [], $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "messages" => $__messages__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 74
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_alert", ["info",             // line 76
($context["title"] ?? null),             // line 77
($context["messages"] ?? null), "fas fa-info-circle",             // line 79
($context["important"] ?? null)], 74, $context, $this->getSourceContext());
            // line 80
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function macro_alert_warning($__title__ = "", $__messages__ = [], $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "messages" => $__messages__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 84
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_alert", ["warning",             // line 86
($context["title"] ?? null),             // line 87
($context["messages"] ?? null), "fas fa-exclamation-triangle",             // line 89
($context["important"] ?? null)], 84, $context, $this->getSourceContext());
            // line 90
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function macro_alert_danger($__title__ = "", $__messages__ = [], $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "messages" => $__messages__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 94
            yield "   ";
            yield CoreExtension::callMacro($macros["_self"], "macro_alert", ["danger",             // line 96
($context["title"] ?? null),             // line 97
($context["messages"] ?? null), "fas fa-exclamation-circle",             // line 99
($context["important"] ?? null)], 94, $context, $this->getSourceContext());
            // line 100
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/alerts_macros.html.twig";
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
        return array (  271 => 100,  269 => 99,  268 => 97,  267 => 96,  265 => 94,  251 => 93,  244 => 90,  242 => 89,  241 => 87,  240 => 86,  238 => 84,  224 => 83,  217 => 80,  215 => 79,  214 => 77,  213 => 76,  211 => 74,  197 => 73,  190 => 70,  188 => 69,  187 => 67,  186 => 66,  184 => 64,  170 => 63,  161 => 58,  157 => 56,  151 => 54,  148 => 53,  134 => 52,  130 => 51,  125 => 50,  107 => 49,  105 => 48,  102 => 47,  99 => 46,  93 => 43,  90 => 42,  88 => 41,  82 => 38,  73 => 35,  57 => 34,  51 => 92,  48 => 82,  45 => 72,  42 => 62,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2024 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

{% macro alert(alert_type = \"\", title = \"\", messages = [], icon = \"\", important = false) %}
   <div class=\"alert alert-{{ alert_type }} {{ important ? \"alert-important\" : \"\" }}\" role=\"alert\">
      <div class=\"d-flex\">
         <div>
            <i class=\"{{ icon }} fa-2x alert-icon\"></i>
         </div>
         <div>
            {% if title|length %}
               <h4 class=\"alert-title\">
                  {{ title }}
               </h4>
            {% endif %}
            {% if messages|length > 0 %}
               <div class=\"text-muted\">
                  {% if messages is iterable %}
                     {% for message in messages %}
                        {{ message }}
                        {% if loop.last %}<br />{% endif %}
                     {% endfor %}
                  {% else %}
                     {{ messages }}
                  {% endif %}
               </div>
            {% endif %}
         </div>
      </div>
   </div>
{% endmacro %}

{% macro alert_success(title = \"\", messages = [], important = false) %}
   {{ _self.alert(
      'success',
      title,
      messages,
      \"fas fa-check\",
      important
   ) }}
{% endmacro %}

{% macro alert_info(title = \"\", messages = [], important = false) %}
   {{ _self.alert(
      'info',
      title,
      messages,
      \"fas fa-info-circle\",
      important
   ) }}
{% endmacro %}

{% macro alert_warning(title = \"\", messages = [], important = false) %}
   {{ _self.alert(
      'warning',
      title,
      messages,
      \"fas fa-exclamation-triangle\",
      important
   ) }}
{% endmacro %}

{% macro alert_danger(title = \"\", messages = [], important = false) %}
   {{ _self.alert(
      'danger',
      title,
      messages,
      \"fas fa-exclamation-circle\",
      important
   ) }}
{% endmacro %}
", "components/alerts_macros.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\alerts_macros.html.twig");
    }
}
