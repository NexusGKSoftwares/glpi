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

/* layout/parts/saved_searches.html.twig */
class __TwigTemplate_c5e93073665e10ccb00370eb293ad699 extends Template
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
        $context["global_pinned"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("savedsearches_pinned", true);
        // line 35
        $context["pinned"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["global_pinned"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_0 = ($context["global_pinned"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["itemtype"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["global_pinned"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["itemtype"] ?? null)] ?? null) : null)) : ("0")) == "1");
        // line 36
        $context["clean_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["itemtype"] ?? null))), "replace", ["\\", "_"], "method", false, false, false, 36);
        // line 37
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 38
        yield "
<div class=\"card col-2 d-flex flex-column responsive-toggle ";
        // line 39
        yield ((($context["pinned"] ?? null)) ? ("pinned") : ("d-none"));
        yield " saved-searches-panel ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["clean_itemtype"] ?? null), "html", null, true);
        yield "\"
     id=\"saved-searches-panel-";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
   <div class=\"card-header d-flex flex-nowrap pe-0 align-items-center text-muted\">
      <i class=\"ti ti-star\"></i>&nbsp;
      <span class=\"text-truncate\">
         ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Saved search", "Saved searches", 2), "html", null, true);
        yield "
      </span>

      <li class=\"ms-auto btn-list me-1 flex-nowrap\">
         <a href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/savedsearch.php"), "html", null, true);
        yield "\" class=\"btn btn-sm btn-icon btn-ghost-secondary\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            title=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Manage all saved searches"), "html", null, true);
        yield "\">
            <i class=\"ti ti-settings\"></i>
         </a>
         <button class=\"btn btn-sm btn-icon btn-ghost-secondary ms-1 d-none d-md-block pin-saved-searches-panel\"
                 data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                 title=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Pin this panel for the current page"), "html", null, true);
        yield "\">
            <i class=\"ti ti-pinned\"></i>
         </button>
         <button class=\"btn btn-sm btn-icon btn-ghost-secondary ms-1 close-saved-searches-panel\"
                 data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                 title=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close the panel"), "html", null, true);
        yield "\">
            <i class=\"ti ti-x\"></i>
         </button>
      </li>
   </div>

   <div class=\"saved-searches-tabs\">
      <ul class=\"nav nav-tabs border-0\" data-bs-toggle=\"tabs\">
         <li class=\"nav-item\">
            <a class=\"nav-link active\" data-bs-target=\"#itemtype-filtered\" data-bs-toggle=\"tab\"
               href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("ajax/savedsearch.php?action=display_mine&itemtype=" . ($context["itemtype"] ?? null))), "html", null, true);
        yield "\">
               ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
        yield "
            </a>
         </li>
         <li class=\"nav-item\">
            <a class=\"nav-link\" data-bs-target=\"#all-savedsearches\" data-bs-toggle=\"tab\"
               href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("ajax/savedsearch.php?action=display_mine&inverse=true&itemtype=" . ($context["itemtype"] ?? null))), "html", null, true);
        yield "\">
               ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Others"), "html", null, true);
        yield "
            </a>
         </li>
      </ul>
      <div class=\"saved-searches-panel-content tab-content\">
         <div class=\"list-group list-group-flush list-group-hoverable saved-searches-panel-lists tab-pane show active\" id=\"itemtype-filtered\">
            <i class=\"fas fa-spinner fa-spin m-3\"></i>
         </div>

         <div class=\"list-group list-group-flush list-group-hoverable saved-searches-panel-lists tab-pane\" id=\"all-savedsearches\">
            <i class=\"fas fa-spinner fa-spin m-3\"></i>
         </div>
      </div>
   </div>

   <div class=\"card-footer\">
      <div class=\"input-group input-group-flat filter_savedsearch\">
         <input type=\"text\" class=\"form-control form-control-sm\"
                placeholder=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filter list"), "html", null, true);
        yield "\" />
         <span class=\"input-group-text\">
            <a href=\"#\" class=\"link-secondary clear-text\" role=\"button\" title=\"Clear search\">
               <i class=\"ti ti-x fa-xs\"></i>
            </a>
         </span>
      </div>
   </div>
</div>

<script type=\"text/javascript\">
\$(function() {
   // init tabs
   \$('#saved-searches-panel-";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function(e) {
      if (\$(this).is(\":hidden\")) {
         return;
      }
      e.preventDefault();

      var tablink = \$(this);
      var url     = tablink.attr('href');
      var target  = tablink.attr('data-bs-target');
      var index   = tablink.closest('.nav-item').index();

      \$.get(url, function(data) {
         \$(target).html(data);

         displayAjaxMessageAfterRedirect();
      });
   });
   // load initial tab
   \$('#saved-searches-panel-";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " a[data-bs-target]:first').trigger('shown.bs.tab');

   // toggle panel
   \$(document).on('click', '.show-saved-searches', function() {
      var clean_itemtype = \$(this).data('itemtype').toLowerCase().replace('\\\\', '_');
      \$(\".saved-searches-panel.\" + clean_itemtype)
         .toggleClass('d-none')
         .toggleClass('responsive-toggle');

      \$('#saved-searches-panel-";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " a[data-bs-toggle=\"tab\"]').trigger('shown.bs.tab');
   });

   // close panel
   \$(document).on('click', '.close-saved-searches-panel', function() {
      \$(this).closest(\".saved-searches-panel\")
         .addClass('d-none')
         .toggleClass('responsive-toggle');
   });

   // set default to a list
   \$(document).on('click', '.mark-default', function() {
      var line = \$(this).closest('.search-line');
      var list = line.closest('.saved-searches-panel-lists');
      var id   = line.data('id');
      var set  = \$(this).hasClass('fas') ? 0 : 1;

      list.find(\".search-line .mark-default\")
          .removeClass('fas')
          .addClass('far')
          .parent()
            .addClass('list-item-actions');

      if (set) {
         \$(this)
            .removeClass('far')
            .addClass('fas')
            .parent()
               .removeClass('list-item-actions');
      }

      \$.ajax({
         url: CFG_GLPI.root_doc + '/ajax/savedsearch.php',
         type: 'GET',
         data: {
            mark_default: set,
            id: id,
         }
      });
   });

   // pin panel on the left
   \$(document).on('click', '.pin-saved-searches-panel', function(e) {
      e.preventDefault();
      var pin_button = \$(this);

      \$.ajax({
         url: CFG_GLPI.root_doc + '/ajax/pin_savedsearches.php',
         type: 'POST',
         data: {
            itemtype: '";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true);
        yield "'
         },
         success: function(data) {
            if (data.success === true) {
               pin_button.closest(\".saved-searches-panel\").toggleClass('pinned');
            }
         }
      });
   });

   // filter list
   \$(document).on('keyup', '.filter_savedsearch input', function(key) {
      var _this = \$(this);
      typewatch(function () {
         var searchtext = _this.val() + '';
         var searchparts = searchtext.toLowerCase().split(/\\s+/);
         var _rows = _this
            .closest('.card-footer')
            .siblings('.saved-searches-tabs')
            .find('.saved-searches-panel-content .savedsearches-item');
         _rows.each(function() {
            var _row = \$(this);
            var rowtext = _row.text().toLowerCase();

            var show = true;

            for (var i = 0; i < searchparts.length; i++) {
               if (rowtext.indexOf(searchparts[i]) == -1) {
                  show = false;
                  break;
               }
            }

            if (show) {
               _row.toggleClass('d-none', false);
            } else {
               _row.toggleClass('d-none', true);
            }
         });
      }, 250);
   });

   // clear list
   \$(document).on('click', '.filter_savedsearch .clear-text', function() {
      \$(this).closest('.filter_savedsearch').find('input').val(\"\").trigger('keyup');
   });
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/parts/saved_searches.html.twig";
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
        return array (  245 => 185,  192 => 135,  180 => 126,  159 => 108,  143 => 95,  122 => 77,  118 => 76,  110 => 71,  106 => 70,  93 => 60,  85 => 55,  77 => 50,  72 => 48,  65 => 44,  58 => 40,  52 => 39,  49 => 38,  47 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/saved_searches.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\saved_searches.html.twig");
    }
}
