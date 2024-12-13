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

/* components/search/controls.html.twig */
class __TwigTemplate_cc5f882b3220355f2bfe9ecf67c1e24d extends Template
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
<div class=\"d-inline-flex search-controls\">
   ";
        // line 35
        if ((($context["showmassiveactions"] ?? null) && (($context["count"] ?? null) > 0))) {
            // line 36
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [($context["massiveactionparams"] ?? null)]);
            // line 37
            yield "   ";
        }
        // line 38
        yield "
   ";
        // line 39
        if ((($context["may_be_located"] ?? null) && ((($context["count"] ?? null) > 0) || ((($__internal_compile_0 = (($__internal_compile_1 = ($context["data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["search"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["as_map"] ?? null) : null) == 1)))) {
            // line 40
            yield "      <label class=\"form-check form-switch btn btn-sm btn-ghost-info me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show as map"), "html", null, true);
            yield "\">
         <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0\" role=\"button\"
                name=\"as_map\" value=\"1\" autocomplete=\"off\"
                onclick=\"toogle('as_map','','',''); document.forms['searchform";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["itemtype"] ?? null)), "html", null, true);
            yield "'].submit();\"
                ";
            // line 45
            yield ((((($__internal_compile_2 = (($__internal_compile_3 = ($context["data"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["search"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["as_map"] ?? null) : null) == 1)) ? ("checked") : (""));
            yield " />
         <span class=\"form-check-label mb-1 mb-sm-0\">
            <i class=\"ti fa-lg ti-map-2\"></i>
         </span >
      </label>
   ";
        }
        // line 51
        yield "
   ";
        // line 52
        if (($context["may_be_browsed"] ?? null)) {
            // line 53
            yield "      <label class=\"form-check form-switch btn btn-sm btn-ghost-info me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle browse"), "html", null, true);
            yield "\">
         <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0\" role=\"button\"
                name=\"browse\" value=\"1\" autocomplete=\"off\"
                onclick=\"toogle('browse','','',''); document.forms['searchform";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["itemtype"] ?? null)), "html", null, true);
            yield "'].submit();\"
                ";
            // line 58
            yield ((((($__internal_compile_4 = (($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["search"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["browse"] ?? null) : null) == 1)) ? ("checked") : (""));
            yield " />
         <span class=\"form-check-label mb-1 mb-sm-0\">
            <i class=\"ti fa-lg ti-subtask\"></i>
         </span>
      </label>
   ";
        }
        // line 64
        yield "
   ";
        // line 65
        if (($context["may_be_deleted"] ?? null)) {
            // line 66
            yield "      <label class=\"form-check form-switch btn btn-sm btn-ghost-danger me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show the trashbin"), "html", null, true);
            yield "\">
         <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0\" role=\"button\"
                name=\"is_deleted\" value=\"1\" autocomplete=\"off\"
                onclick=\"toogle('is_deleted','','',''); document.forms['searchform";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["itemtype"] ?? null)), "html", null, true);
            yield "'].submit();\"
                ";
            // line 71
            yield ((((($__internal_compile_6 = (($__internal_compile_7 = ($context["data"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_deleted"] ?? null) : null) == 1)) ? ("checked") : (""));
            yield " />
         <span class=\"form-check-label mb-1 mb-sm-0\">
            <i class=\"ti fa-lg ti-trash\"></i>
         </span>
      </label>
   ";
        }
        // line 77
        yield "
   <label class=\"form-check form-switch btn btn-sm btn-ghost-secondary me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-bs-trigger=\"hover\"
          title=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle search filters"), "html", null, true);
        yield "\">
      <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0 fold-search\" role=\"button\"
             ";
        // line 82
        yield (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpifold_search")) ? ("") : ("checked"));
        yield " autocomplete=\"off\" />
      <span class=\"form-check-label mb-1 mb-sm-0\">
         <i class=\"ti fa-lg ti-search\"></i>
      </span>
   </label>

   <div class=\"d-inline-flex\" role=\"group\">

      ";
        // line 90
        if ((($context["can_config"] ?? null) && (($context["count"] ?? null) > 0))) {
            // line 91
            yield "      <button class=\"btn btn-sm btn-icon btn-ghost-secondary show_displaypreference_modal me-0 me-sm-1\"
             title=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select default items to show"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
         <i class=\"ti fa-lg ti-tool\"></i>
      </button>
      ";
        }
        // line 96
        yield "
      ";
        // line 97
        if ((($context["count"] ?? null) > 0)) {
            // line 98
            yield "         <button class=\"dropdown-toggle btn btn-sm btn-icon btn-ghost-secondary\" type=\"button\" id=\"dropdown-export\"
               data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >
            <span class=\"py-1 px-2 my-n1 mx-n2\"data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Export"), "html", null, true);
            yield "\">
               <i id=\"export_dropdown_icon\" class=\"ti fa-lg ti-file-download\"></i>
            </span>
         </button>
      ";
            // line 104
            $context["exporthref"] = (((($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/report.dynamic.php") . "?") . Twig\Extension\CoreExtension::urlencode(["item_type" =>             // line 105
($context["itemtype"] ?? null), "sort" =>             // line 106
($context["sort"] ?? null), "order" =>             // line 107
($context["order"] ?? null), "start" =>             // line 108
($context["start"] ?? null)])) . "&") .             // line 109
($context["posthref"] ?? null));
            // line 110
            yield "      <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown-export\">
         <li><a class=\"dropdown-item\" href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page in landscape PDF"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page in portrait PDF"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::SYLK_OUTPUT")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-excel\"></i>
            ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page in SLK"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
            yield "\">
            <i class=\"fas fa-lg fa-file-csv\"></i>
            ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page in CSV"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages in landscape PDF"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages in portrait PDF"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::SYLK_OUTPUT")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-excel\"></i>
            ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages in SLK"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
            yield "\">
            <i class=\"fas fa-lg fa-file-csv\"></i>
            ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages in CSV"), "html", null, true);
            yield "
         </a></li>
         ";
            // line 143
            if ((($context["itemtype"] ?? null) != "Stat")) {
                // line 144
                yield "         <li id=\"copy_names_to_clipboard\"><a class=\"dropdown-item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::NAMES_OUTPUT")), "html", null, true);
                yield "\">
            <i class=\"far fa-lg fa-copy\"></i>
            ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy names to clipboard"), "html", null, true);
                yield "
         </a></li>
         ";
            }
            // line 149
            yield "      </ul>
      ";
        }
        // line 151
        yield "   </div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function() {
   \$('.show_displaypreference_modal').click(function(e) {
      e.preventDefault();

      var modal = '<div class=\"modal fade\" id=\"displayprefence_modal";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" role=\"dialog\">';
      modal += '<div class=\"modal-dialog modal-lg\">';
      modal += '<div class=\"modal-content\">';
      modal += '<div class=\"modal-header\">';
      modal += '<h4 class=\"modal-title\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select default items to show"), "html", null, true);
        yield "</h4>';
      modal += '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close modal"), "html", null, true);
        yield "\"></button>';
      modal += '</div>';
      modal += '<div class=\"modal-body\">';
      modal += '<div class=\"ratio ratio-4x3\">';
      modal += '<iframe src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/displaypreference.form.php?itemtype=" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "url"))), "html", null, true);
        yield "\"></iframe>'
      modal += '</div>';
      modal += '</div>';
      modal += '</div>';
      modal += '</div>';

      // remove old modal
      \$('#displayprefence_modal";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').remove();

      // create new one
      \$('body').append(modal);
      \$('#displayprefence_modal";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').modal('show');
   });

   \$(\"body\").on('hide.bs.modal', '#displayprefence_modal";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "', function() {
      location.reload();
   });

   \$('.fold-search').change(function(event) {
      var show_search = \$(this).is(\":checked\");

      // hide tooltips (issue maybe ?)
      \$('[data-toggle=\"tooltip\"]').tooltip('hide');

      event.preventDefault();
      \$.ajax({
         url: '";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/search.php"), "html", null, true);
        yield "',
         type: 'POST',
         datatype: 'json',
         data: {
            'action': 'fold_search',
            'show_search': (show_search ? 1 : 0),
         },
         success: function() {
            toggle_fold_search(show_search);

            // scroll to top to display the change
            if (show_search) {
               \$(\"html, body, .search-container\").animate({ scrollTop: 0 });
            }
         }
      });
   });

   // Callbacks for copy success/failure
   function copy_success() {
      glpi_toast_info(__('Results copied to clipboard'));
      \$('#export_dropdown_icon').removeClass('fa-circle-notch');
      \$('#export_dropdown_icon').removeClass('fa-spin');
      \$('#export_dropdown_icon').addClass('fa-file-download');
      \$('#export_dropdown_icon').parent().parent().addClass('dropdown-toggle');
   }
   function copy_error() {
      glpi_toast_error(__('Unexpected error'));
      \$('#export_dropdown_icon').removeClass('fa-circle-notch');
      \$('#export_dropdown_icon').removeClass('fa-spin');
      \$('#export_dropdown_icon').addClass('fa-file-download');
      \$('#export_dropdown_icon').parent().parent().addClass('dropdown-toggle');
   }

   \$('#copy_names_to_clipboard').click(function(e) {
      // Get target link
      var link = \$(this).find('a').prop('href');

      // Show loading indicator
      \$('#export_dropdown_icon').removeClass('fa-file-download');
      \$('#export_dropdown_icon').addClass('fa-circle-notch');
      \$('#export_dropdown_icon').addClass('fa-spin');
      \$('#export_dropdown_icon').parent().parent().removeClass('dropdown-toggle');

      // Prevent link from working
      e.preventDefault();

      // Get data using ajax
      \$.get(link, function (data) {
         navigator.clipboard.writeText(data).then(copy_success, copy_error);
      }).fail(copy_error);
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
        return "components/search/controls.html.twig";
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
        return array (  354 => 194,  339 => 182,  333 => 179,  326 => 175,  316 => 168,  309 => 164,  305 => 163,  298 => 159,  288 => 151,  284 => 149,  278 => 146,  272 => 144,  270 => 143,  265 => 141,  260 => 139,  255 => 137,  250 => 135,  245 => 133,  240 => 131,  235 => 129,  230 => 127,  225 => 125,  220 => 123,  215 => 121,  210 => 119,  205 => 117,  200 => 115,  195 => 113,  190 => 111,  187 => 110,  185 => 109,  184 => 108,  183 => 107,  182 => 106,  181 => 105,  180 => 104,  173 => 100,  169 => 98,  167 => 97,  164 => 96,  157 => 92,  154 => 91,  152 => 90,  141 => 82,  136 => 80,  131 => 77,  122 => 71,  118 => 70,  112 => 67,  109 => 66,  107 => 65,  104 => 64,  95 => 58,  91 => 57,  85 => 54,  82 => 53,  80 => 52,  77 => 51,  68 => 45,  64 => 44,  58 => 41,  55 => 40,  53 => 39,  50 => 38,  47 => 37,  44 => 36,  42 => 35,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/controls.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\search\\controls.html.twig");
    }
}
