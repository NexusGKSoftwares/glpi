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

/* components/user/picture.html.twig */
class __TwigTemplate_853481795c75f496bd32ce5504bb49bb extends Template
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
        $context["enable_anonymization"] = (($context["enable_anonymization"]) ?? (false));
        // line 35
        $context["avatar_size"] = (($context["avatar_size"]) ?? ("avatar-md"));
        // line 36
        $context["anonymized"] = (($context["enable_anonymization"] ?? null) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
        // line 37
        $context["user"] = (($context["user_object"]) ?? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))));
        // line 38
        $context["with_link"] = (($context["with_link"]) ?? (true));
        // line 39
        $context["user_thumbnail"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getThumbnailPicturePath", [($context["enable_anonymization"] ?? null)], "method", false, false, false, 39);
        // line 40
        if (((($context["user_thumbnail"] ?? null) == null) &&  !$this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("display_users_initials", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))) {
            // line 41
            yield "    ";
            $context["user_thumbnail"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getPicturePath", [($context["enable_anonymization"] ?? null)], "method", false, false, false, 41);
        }
        // line 43
        yield "
";
        // line 44
        if ((($context["with_link"] ?? null) &&  !($context["anonymized"] ?? null))) {
            // line 45
            yield "   <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getLinkURL", [], "method", false, false, false, 45), "html", null, true);
            yield "\" class=\"d-flex align-items-center\">
";
        }
        // line 47
        yield "
<span class=\"avatar ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_size"] ?? null), "html", null, true);
        yield " rounded\"
      style=\"";
        // line 49
        if ( !(null === ($context["user_thumbnail"] ?? null))) {
            yield "background-image: url(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_thumbnail"] ?? null), "html", null, true);
            yield "); background-color: inherit; ";
        } else {
            yield " background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserInitialsBgColor", [], "method", false, false, false, 49), "html", null, true);
        }
        yield "\">
   ";
        // line 50
        if ((null === ($context["user_thumbnail"] ?? null))) {
            // line 51
            yield "         ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserInitials", [($context["enable_anonymization"] ?? null)], "method", false, false, false, 51), "html", null, true);
            yield "
   ";
        }
        // line 53
        yield "</span>

";
        // line 55
        if ((($context["with_link"] ?? null) &&  !($context["anonymized"] ?? null))) {
            // line 56
            yield "   ";
            if (($context["display_login"] ?? null)) {
                // line 57
                yield "      <span class=\"ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), "html", null, true);
                yield "</span>
   ";
            }
            // line 59
            yield "
   </a>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/user/picture.html.twig";
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
        return array (  111 => 59,  105 => 57,  102 => 56,  100 => 55,  96 => 53,  90 => 51,  88 => 50,  77 => 49,  73 => 48,  70 => 47,  64 => 45,  62 => 44,  59 => 43,  55 => 41,  53 => 40,  51 => 39,  49 => 38,  47 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/picture.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\user\\picture.html.twig");
    }
}
