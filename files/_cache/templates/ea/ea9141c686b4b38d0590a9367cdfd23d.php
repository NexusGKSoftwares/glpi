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

/* pages/login.html.twig */
class __TwigTemplate_a34abb31ca78089e437c3b0b0b476e60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/login.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "   <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        yield "\" method=\"post\" autocomplete=\"off\"  data-submit-once>
      <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["noAuto"] ?? null), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect"] ?? null), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />

      <div class=\"row justify-content-center\">
         <div class=\"col-md-5\">
            <div class=\"card-header mb-4\">
               <h2 class=\"mx-auto\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Login to your account"), "html", null, true);
        yield "</h2>
            </div>
            <div class=\"mb-3\">
               <label class=\"form-label\" for=\"login_name\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Login"), "html", null, true);
        yield "</label>
               <input type=\"text\" class=\"form-control\" id=\"login_name\" name=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["namfield"] ?? null), "html", null, true);
        yield "\" placeholder=\"\" tabindex=\"1\" />
            </div>
            <div class=\"mb-4\">
               <label class=\"form-label\" for=\"login_password\">
                  ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Password"), "html", null, true);
        yield "

                  ";
        // line 55
        if (($context["show_lost_password"] ?? null)) {
            // line 56
            yield "                     <span class=\"form-label-description\">
                        <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
            yield "\">
                           ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Forgotten password?"), "html", null, true);
            yield "
                        </a>
                     </span>
                  ";
        }
        // line 62
        yield "               </label>
               <input type=\"password\" class=\"form-control\" id=\"login_password\" name=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pwdfield"] ?? null), "html", null, true);
        yield "\" placeholder=\"\" autocomplete=\"off\" tabindex=\"2\" />
            </div>

            ";
        // line 66
        if (Twig\Extension\CoreExtension::constant("GLPI_DEMO_MODE")) {
            // line 67
            yield "               <div class=\"mb-3\">
                  <label class=\"form-label\" for=\"dropdown_language";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Language"), "html", null, true);
            yield "</label>
                  ";
            // line 69
            yield ($context["languages_dropdown"] ?? null);
            yield "
               </div>
            ";
        }
        // line 72
        yield "
            ";
        // line 73
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) {
            // line 74
            yield "               <div class=\"mb-3\">
                  <label class=\"form-label\" for=\"dropdown_auth";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Login source"), "html", null, true);
            yield "</label>
                  ";
            // line 76
            yield ($context["auth_dropdown_login"] ?? null);
            yield "
               </div>
            ";
        }
        // line 79
        yield "
            ";
        // line 80
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_time")) {
            // line 81
            yield "               <div class=\"mb-2\">
                  <label class=\"form-check\" for=\"login_remember\">
                     <input type=\"checkbox\" class=\"form-check-input\" id=\"login_remember\" name=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rmbfield"] ?? null), "html", null, true);
            yield "\" ";
            yield (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_default")) ? ("checked") : (""));
            yield " />
                     <span class=\"form-check-label\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remember me"), "html", null, true);
            yield "</span>
                  </label>
               </div>
            ";
        }
        // line 88
        yield "
            <div class=\"form-footer\">
               <button type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                  ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sign in"), "html", null, true);
        yield "
               </button>
            </div>

            ";
        // line 95
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 96
            yield "               <hr />
               <div class=\"alert alert-danger\" role=\"alert\">
                  ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errors"] ?? null), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 101
        yield "         </div>

         ";
        // line 103
        if (($context["right_panel"] ?? null)) {
            // line 104
            yield "            <div class=\"col-auto px-2 text-center\">
               ";
            // line 105
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["text_login"] ?? null)) > 0)) {
                // line 106
                yield "                  <div class=\"rich_text_container\">
                     ";
                // line 107
                yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
                yield "
                  </div>
               ";
            }
            // line 110
            yield "
               ";
            // line 111
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) {
                // line 112
                yield "                  <hr />

                  <a class=\"btn btn-outline-secondary btn-icon\" href=\"front/helpdesk.faq.php\">
                     <i class=\"fas fa-question\"></i>&nbsp;
                     ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("FAQ"), "html", null, true);
                yield "
                  </a>
               ";
            }
            // line 119
            yield "
               ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            yield "
            </div>
         ";
        }
        // line 123
        yield "      </div>
   </form>
";
        return; yield '';
    }

    // line 127
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        yield "   ";
        yield ($context["copyright_message"] ?? null);
        yield "
";
        return; yield '';
    }

    // line 131
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
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
        return "pages/login.html.twig";
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
        return array (  269 => 131,  261 => 128,  257 => 127,  250 => 123,  244 => 120,  241 => 119,  235 => 116,  229 => 112,  227 => 111,  224 => 110,  218 => 107,  215 => 106,  213 => 105,  210 => 104,  208 => 103,  204 => 101,  198 => 98,  194 => 96,  192 => 95,  185 => 91,  180 => 88,  173 => 84,  167 => 83,  163 => 81,  161 => 80,  158 => 79,  152 => 76,  146 => 75,  143 => 74,  141 => 73,  138 => 72,  132 => 69,  126 => 68,  123 => 67,  121 => 66,  115 => 63,  112 => 62,  105 => 58,  101 => 57,  98 => 56,  96 => 55,  91 => 53,  84 => 49,  80 => 48,  74 => 45,  66 => 40,  62 => 39,  58 => 38,  53 => 37,  49 => 36,  38 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\login.html.twig");
    }
}
