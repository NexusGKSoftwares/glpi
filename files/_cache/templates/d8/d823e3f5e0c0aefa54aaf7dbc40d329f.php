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

/* components/form/inventory_info.html.twig */
class __TwigTemplate_edadefe0411e46f6dde936b7ddce92ea extends Template
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
        if ((Session::haveRight("inventory", Twig\Extension\CoreExtension::constant("READ")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDynamic", [], "method", false, false, false, 34) != false))) {
            // line 35
            yield "<div class=\"card m-n2 border-0 shadow-none\">
   <div class=\"card-header\">
      <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
         <i class=\"fas fa-cloud-download-alt\"></i>
      </div>
      <h4 class=\"card-title ps-4\">
         ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory information"), "html", null, true);
            yield "
      </h4>
      ";
            // line 43
            $context["inventory_filename"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryFileName", [false], "method", false, false, false, 43)) : (null));
            // line 44
            yield "      ";
            if ( !(null === ($context["inventory_filename"] ?? null))) {
                // line 45
                yield "         <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/document.send.php?file=_inventory/" . ($context["inventory_filename"] ?? null))), "html", null, true);
                yield "\"
            class=\"btn btn-sm btn-secondary ms-auto\" target=\"_blank\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            title=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Download \"%1\$s\" inventory file"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["item"] ?? null))), "html", null, true);
                yield "\">
            <i class=\"fas fa-download\"></i>
         </a>
      ";
            } else {
                // line 52
                yield "         <span class=\"ms-auto\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory file missing"), "html", null, true);
                yield "\">
            <i class=\"fas fa-ban\"></i>
            <span class=\"visually-hidden\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory file missing"), "html", null, true);
                yield "</span>
         </span>
      ";
            }
            // line 57
            yield "   </div>

   ";
            // line 59
            $context["agent"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 59)) : (null));
            // line 60
            yield "   ";
            if ( !(null === ($context["agent"] ?? null))) {
                // line 61
                yield "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getTypeName", [], "method", false, false, false, 63), "html", null, true);
                yield "</label>
            <span>
               <i class=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getIcon", [], "method", false, false, false, 65), "html", null, true);
                yield "\"></i>
               ";
                // line 66
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink(($context["agent"] ?? null));
                yield "
            </span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Useragent"), "html", null, true);
                yield "</label>
            <span>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["useragent"] ?? null) : null)), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory tag"), "html", null, true);
                yield "</label>
            <span>";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tag"] ?? null) : null)), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Public contact address"), "html", null, true);
                yield "</label>
            <span>";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["remote_addr"] ?? null) : null)), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last contact"), "html", null, true);
                yield "</label>
            <span>";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["last_contact"] ?? null) : null)), "html", null, true);
                yield "</span>
         </div>

         ";
                // line 90
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["last_inventory_update"], "method", false, false, false, 90)) {
                    // line 91
                    yield "            <div class=\"mb-3 col-12 col-sm-4\">
               <label class=\"form-label\" >";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last inventory update"), "html", null, true);
                    yield "</label>
               <span>";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["last_inventory_update"] ?? null) : null)), "html", null, true);
                    yield "</span>
            </div>
         ";
                } else {
                    // line 96
                    yield "            <div class=\"mb-3 col-12 col-sm-4\">
            </div>
         ";
                }
                // line 99
                yield "
         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >
               ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Agent status"), "html", null, true);
                yield "
               <i id=\"update-status\" class=\"fas fa-sync\" role=\"button\" title=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Ask agent about its current status"), "html", null, true);
                yield "\"></i>
            </label>
            <span id='agent_status'>";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown"), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >
               ";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Request inventory"), "html", null, true);
                yield "
               <i id=\"update-inventory\" class=\"fas fa-sync\" role=\"button\" title=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Request agent to proceed an new inventory"), "html", null, true);
                yield "\"></i>
            </label>
            <span id='inventory_status'>";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown"), "html", null, true);
                yield "</span>
         </div>
      </div>

      <script>
      \$(function () {
         \$('#update-status').on('click', function() {
            var icon = \$(this);
            icon.addClass('fa-spin');
            \$.ajax({
               type: 'POST',
               url: '";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/agent.php"), "html", null, true);
                yield "',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Agent::ACTION_STATUS"), "html", null, true);
                yield "',
                  id: '";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 129)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
                yield "'
               },
               success: function(json) {
                  \$('#agent_status').text(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });

         \$('#update-inventory').on('click', function() {
            var icon = \$(this);
            icon.addClass(\"fa-spin\");
            \$.ajax({
               type: 'POST',
               url: '";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/agent.php"), "html", null, true);
                yield "',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Agent::ACTION_INVENTORY"), "html", null, true);
                yield "',
                  id: '";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
                yield "'
               },
               success: function(json) {
                  \$('#inventory_status').text(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });
      });
      </script>
   ";
            } else {
                // line 163
                yield "   <div class=\"card-body row\">
      <div class=\"mb-3 col-12 col-sm-6\">
         ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Agent information is not available."), "html", null, true);
                yield "
      </div>
   </div>
   ";
            }
            // line 169
            yield "
   ";
            // line 171
            yield "   ";
            // line 172
            yield "   ";
            if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable") && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 172) == null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["last_inventory_update"], "method", false, false, false, 172))) {
                // line 173
                yield "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last inventory"), "html", null, true);
                yield "</label>
            <span>";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 176)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["last_inventory_update"] ?? null) : null)), "html", null, true);
                yield "</span>
         </div>
      </div>
   ";
            }
            // line 180
            yield "
   ";
            // line 181
            if ((((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null) > 0) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 181))) {
                // line 182
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::AUTOINVENTORY_INFORMATION"), ($context["item"] ?? null)), "html", null, true);
                yield "
   ";
            }
            // line 184
            yield "</div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/inventory_info.html.twig";
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
        return array (  327 => 184,  321 => 182,  319 => 181,  316 => 180,  309 => 176,  305 => 175,  301 => 173,  298 => 172,  296 => 171,  293 => 169,  286 => 165,  282 => 163,  266 => 150,  262 => 149,  255 => 145,  236 => 129,  232 => 128,  225 => 124,  211 => 113,  206 => 111,  202 => 110,  194 => 105,  189 => 103,  185 => 102,  180 => 99,  175 => 96,  169 => 93,  165 => 92,  162 => 91,  160 => 90,  154 => 87,  150 => 86,  143 => 82,  139 => 81,  132 => 77,  128 => 76,  121 => 72,  117 => 71,  109 => 66,  105 => 65,  100 => 63,  96 => 61,  93 => 60,  91 => 59,  87 => 57,  81 => 54,  75 => 52,  68 => 48,  61 => 45,  58 => 44,  56 => 43,  51 => 41,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/inventory_info.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\inventory_info.html.twig");
    }
}
