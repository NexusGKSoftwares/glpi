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

/* components/masonry_grid.html.twig */
class __TwigTemplate_8e5de48c1d310b2173a7180e518f7394 extends Template
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
        if ( !array_key_exists("grid_item_class", $context)) {
            // line 35
            yield "   ";
            $context["grid_item_class"] = "col-xl-6";
        }
        // line 37
        yield "
";
        // line 38
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 39
        yield "<div id=\"grid_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"masonry_grid row row-cards mb-5\">
   ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["grid_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            yield "      ";
            if ( !Twig\Extension\CoreExtension::testEmpty($context["item"])) {
                // line 42
                yield "         <div class=\"grid-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_item_class"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 43
                yield $context["item"];
                yield "
         </div>
      ";
            }
            // line 46
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   window.msnry_grid_";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " = new Masonry('#grid_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "', {
      \"percentPosition\": true,
      \"horizontalOrder\": true,
   });

   \$('#grid_";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on(\"layout:refresh\", function() {
       window.msnry_grid_";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
   });

   \$(document).on('masonry_grid:layout', function() {
       window.msnry_grid_";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
   })

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
        return "components/masonry_grid.html.twig";
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
        return array (  108 => 61,  101 => 57,  97 => 56,  87 => 51,  81 => 47,  75 => 46,  69 => 43,  64 => 42,  61 => 41,  57 => 40,  52 => 39,  50 => 38,  47 => 37,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/masonry_grid.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\masonry_grid.html.twig");
    }
}
