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

/* pages/assets/phone.html.twig */
class __TwigTemplate_56afde864d835312fe94bf7f38613803 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/phone.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/phone.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield CoreExtension::callMacro($macros["fields"], "macro_numberField", ["number_line", (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["number_line"] ?? null) : null), _x("quantity", "Number of lines"),         // line 43
($context["field_options"] ?? null)], 39, $context, $this->getSourceContext());
        // line 44
        yield "

    ";
        // line 46
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["PhonePowerSupply", "phonepowersupplies_id", (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["phonepowersupplies_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("PhonePowerSupply"),         // line 51
($context["field_options"] ?? null)], 46, $context, $this->getSourceContext());
        // line 52
        yield "

    ";
        // line 54
        $context["flags_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 55
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/flags.html.twig");
            yield "
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "
    ";
        // line 58
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["flags_html"] ?? null)))) {
            // line 59
            yield "        ";
            $context["flags_html"] = (("<div class=\"d-flex flex-wrap\">" . ($context["flags_html"] ?? null)) . "</div>");
            // line 60
            yield "        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["",             // line 62
($context["flags_html"] ?? null), _n("Port", "Ports", Session::getPluralNumber())], 60, $context, $this->getSourceContext());
            // line 64
            yield "
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/assets/phone.html.twig";
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
        return array (  94 => 64,  92 => 62,  90 => 60,  87 => 59,  85 => 58,  82 => 57,  75 => 55,  73 => 54,  69 => 52,  67 => 51,  66 => 49,  65 => 46,  61 => 44,  59 => 43,  58 => 41,  56 => 39,  52 => 38,  47 => 34,  45 => 36,  43 => 35,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/phone.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\assets\\phone.html.twig");
    }
}
