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

/* install/step3.html.twig */
class __TwigTemplate_95fc9c2fa2b5a462ced0f92edc15dff2 extends Template
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
        $macros["alerts"] = $this->macros["alerts"] = $this->loadTemplate("components/alerts_macros.html.twig", "install/step3.html.twig", 34)->unwrap();
        // line 35
        yield "
<h3>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Test of the connection at the database"), "html", null, true);
        yield "</h3>

";
        // line 38
        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["host"] ?? null)) == 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["user"] ?? null)) == 0)) || CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "connect_error", [], "any", false, false, false, 38))) {
            // line 39
            yield "
   ";
            // line 40
            yield CoreExtension::callMacro($macros["alerts"], "macro_alert_danger", [__("Can't connect to the database"), Twig\Extension\CoreExtension::sprintf(__("The server answered: %s"), CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["link"] ?? null), "connect_error", [], "any", false, false, false, 42))], 40, $context, $this->getSourceContext());
            // line 43
            yield "

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         <i class=\"fas fa-chevron-left me-1 fa-2x alert-icon\"></i>
         ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "html", null, true);
            yield "
      </button>

      <input type=\"hidden\" name=\"update\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update"] ?? null), "html", null, true);
            yield "\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\">
   </form>
";
        } else {
            // line 56
            yield "   ";
            yield CoreExtension::callMacro($macros["alerts"], "macro_alert_success", [__("Database connection successful")], 56, $context, $this->getSourceContext());
            // line 58
            yield "

   ";
            // line 60
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 60)) {
                // line 61
                yield "      ";
                yield CoreExtension::callMacro($macros["alerts"], "macro_alert_danger", [__("Database engine is not supported."), CoreExtension::getAttribute($this->env, $this->source,                 // line 63
($context["engine_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 63)], 61, $context, $this->getSourceContext());
                // line 64
                yield "
   ";
            }
            // line 66
            yield "
   ";
            // line 67
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 67)) {
                // line 68
                yield "      ";
                yield CoreExtension::callMacro($macros["alerts"], "macro_alert_danger", [__("Database configuration is not supported."), CoreExtension::getAttribute($this->env, $this->source,                 // line 70
($context["config_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 70)], 68, $context, $this->getSourceContext());
                // line 71
                yield "
   ";
            }
            // line 73
            yield "
   ";
            // line 74
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 74) && CoreExtension::getAttribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 74))) {
                // line 75
                yield "      <div class=\"container mt-4\">
         <form action='install.php' method='post'>
            <div class=\"mb-3\">
               <h3>
                  ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["update"] ?? null) == "no")) ? (__("Please select a database:")) : (__("Please select a database to update:"))), "html", null, true);
                yield "
               </h3>
               <div class=\"form-selectgroup form-selectgroup-boxes d-flex flex-column\">
                  ";
                // line 82
                if ((($context["update"] ?? null) == "no")) {
                    // line 83
                    yield "                     <label class=\"form-selectgroup-item flex-fill\">
                        <input type=\"radio\" name=\"databasename\" value=\"0\" class=\"form-selectgroup-input\" checked=\"checked\">
                        <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                           <div class=\"me-3\">
                              <span class=\"form-selectgroup-check\"></span>
                           </div>
                           <div>
                              <label for=\"new_db\" class=\"form-label\">
                                 ";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create a new database or use an existing one:"), "html", null, true);
                    yield "
                              </label>
                              <input type=\"text\" name=\"newdatabasename\" id=\"new_db\" class=\"form-control\" autofocus>
                           </div>
                        </div>
                     </label>
                  ";
                }
                // line 98
                yield "
                  ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["databases"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 100
                    yield "                     <label class=\"form-selectgroup-item flex-fill\">
                        <input type=\"radio\" name=\"databasename\" value=\"";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["database"], "html", null, true);
                    yield "\" class=\"form-selectgroup-input\">
                        <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                           <div class=\"me-3\">
                              <span class=\"form-selectgroup-check\"></span>
                           </div>
                           <div>
                              ";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["database"], "html", null, true);
                    yield "
                           </div>
                        </div>
                     </label>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                yield "               </div>
            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
               ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
                yield "
               <i class=\"fas fa-chevron-right ms-1\"></i>
            </button>

            ";
                // line 120
                if ((($context["update"] ?? null) == "no")) {
                    // line 121
                    yield "               <input type=\"hidden\" name=\"install\" value=\"Etape_3\">
            ";
                } else {
                    // line 123
                    yield "               <input type=\"hidden\" name=\"install\" value=\"update_1\">
            ";
                }
                // line 125
                yield "
            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\">
         </form>
      </div>
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
        return "install/step3.html.twig";
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
        return array (  208 => 126,  205 => 125,  201 => 123,  197 => 121,  195 => 120,  188 => 116,  182 => 112,  171 => 107,  162 => 101,  159 => 100,  155 => 99,  152 => 98,  142 => 91,  132 => 83,  130 => 82,  124 => 79,  118 => 75,  116 => 74,  113 => 73,  109 => 71,  107 => 70,  105 => 68,  103 => 67,  100 => 66,  96 => 64,  94 => 63,  92 => 61,  90 => 60,  86 => 58,  83 => 56,  77 => 53,  72 => 51,  66 => 48,  59 => 43,  57 => 42,  56 => 40,  53 => 39,  51 => 38,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
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

{% import 'components/alerts_macros.html.twig' as alerts %}

<h3>{{ __('Test of the connection at the database') }}</h3>

{% if host|length == 0 or user|length == 0 or link.connect_error %}

   {{ alerts.alert_danger(
      __(\"Can't connect to the database\"),
      __('The server answered: %s')|format(link.connect_error)
   ) }}

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         <i class=\"fas fa-chevron-left me-1 fa-2x alert-icon\"></i>
         {{ __(\"Back\") }}
      </button>

      <input type=\"hidden\" name=\"update\" value=\"{{ update }}\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\">
   </form>
{% else %}
   {{ alerts.alert_success(
      __('Database connection successful'),
   ) }}

   {% if not engine_requirement.isValidated() %}
      {{ alerts.alert_danger(
         __('Database engine is not supported.'),
         engine_requirement.getValidationMessages()
      ) }}
   {% endif %}

   {% if not config_requirement.isValidated() %}
      {{ alerts.alert_danger(
         __('Database configuration is not supported.'),
         config_requirement.getValidationMessages()
      ) }}
   {% endif %}

   {% if engine_requirement.isValidated() and config_requirement.isValidated() %}
      <div class=\"container mt-4\">
         <form action='install.php' method='post'>
            <div class=\"mb-3\">
               <h3>
                  {{ update == \"no\" ? __('Please select a database:') : __('Please select a database to update:') }}
               </h3>
               <div class=\"form-selectgroup form-selectgroup-boxes d-flex flex-column\">
                  {% if update == \"no\" %}
                     <label class=\"form-selectgroup-item flex-fill\">
                        <input type=\"radio\" name=\"databasename\" value=\"0\" class=\"form-selectgroup-input\" checked=\"checked\">
                        <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                           <div class=\"me-3\">
                              <span class=\"form-selectgroup-check\"></span>
                           </div>
                           <div>
                              <label for=\"new_db\" class=\"form-label\">
                                 {{ __('Create a new database or use an existing one:') }}
                              </label>
                              <input type=\"text\" name=\"newdatabasename\" id=\"new_db\" class=\"form-control\" autofocus>
                           </div>
                        </div>
                     </label>
                  {% endif %}

                  {% for database in databases %}
                     <label class=\"form-selectgroup-item flex-fill\">
                        <input type=\"radio\" name=\"databasename\" value=\"{{ database }}\" class=\"form-selectgroup-input\">
                        <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                           <div class=\"me-3\">
                              <span class=\"form-selectgroup-check\"></span>
                           </div>
                           <div>
                              {{ database }}
                           </div>
                        </div>
                     </label>
                  {% endfor %}
               </div>
            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
               {{ __(\"Continue\") }}
               <i class=\"fas fa-chevron-right ms-1\"></i>
            </button>

            {% if update == \"no\" %}
               <input type=\"hidden\" name=\"install\" value=\"Etape_3\">
            {% else %}
               <input type=\"hidden\" name=\"install\" value=\"update_1\">
            {% endif %}

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\">
         </form>
      </div>
   {% endif %}
{% endif %}
", "install/step3.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\step3.html.twig");
    }
}
