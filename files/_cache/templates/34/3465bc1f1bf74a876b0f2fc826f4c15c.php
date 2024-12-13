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

/* components/messages_after_redirect_toasts.html.twig */
class __TwigTemplate_f9495b535bb9307d7dcbc7f83addc5e1 extends Template
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
        $context["messages"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->pullMessages();
        // line 35
        yield "
";
        // line 36
        $context["toasts_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "    ";
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null))) {
                // line 38
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["type"] => $context["message"]) {
                    // line 39
                    yield "            ";
                    $context["message"] = Twig\Extension\CoreExtension::join($context["message"], "<br />");
                    // line 40
                    yield "            ";
                    $context["class"] = "";
                    // line 41
                    yield "            ";
                    $context["title"] = "";
                    // line 42
                    yield "            ";
                    if (($context["type"] == Twig\Extension\CoreExtension::constant("ERROR"))) {
                        // line 43
                        yield "                ";
                        $context["class"] = "bg-danger text-white";
                        // line 44
                        yield "                ";
                        $context["title"] = __("Error");
                        // line 45
                        yield "            ";
                    } elseif (($context["type"] == Twig\Extension\CoreExtension::constant("WARNING"))) {
                        // line 46
                        yield "                ";
                        $context["class"] = "bg-warning text-white";
                        // line 47
                        yield "                ";
                        $context["title"] = __("Warning");
                        // line 48
                        yield "            ";
                    } else {
                        // line 49
                        yield "                ";
                        $context["class"] = "bg-info text-white";
                        // line 50
                        yield "                ";
                        $context["title"] = _n("Information", "Informations", 1);
                        // line 51
                        yield "            ";
                    }
                    // line 52
                    yield "
            <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"toast-header ";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
                    yield " \">
                    <strong class=\"me-auto\">";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                    yield "</strong>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
                <div class=\"toast-body\">
                    ";
                    // line 59
                    yield $context["message"];
                    yield "
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                yield "    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "
";
        // line 66
        if (($context["display_container"] ?? null)) {
            // line 67
            yield "    <div class=\"toast-container bottom-0 end-0 p-3 messages_after_redirect\" id=\"messages_after_redirect\">
        ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toasts_html"] ?? null), "html", null, true);
            yield "

        <script type=\"text/javascript\">
        var initMessagesAfterRedirectToasts = function() {
            var toastElList = [].slice.call(document.querySelectorAll('#messages_after_redirect .toast:not(.show)'));
            var toastList = toastElList.map(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl, {
                    delay: 10000,
                })
                toast.show()

                \$(toastEl).on('hidden.bs.toast', function () {
                    \$(toastEl).remove();
                });

                return toast;
            });
        }
        \$(function() {
            initMessagesAfterRedirectToasts();
        });
        </script>
    </div>
";
        } else {
            // line 92
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toasts_html"] ?? null), "html", null, true);
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
        return "components/messages_after_redirect_toasts.html.twig";
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
        return array (  160 => 92,  133 => 68,  130 => 67,  128 => 66,  125 => 65,  120 => 63,  110 => 59,  103 => 55,  99 => 54,  95 => 52,  92 => 51,  89 => 50,  86 => 49,  83 => 48,  80 => 47,  77 => 46,  74 => 45,  71 => 44,  68 => 43,  65 => 42,  62 => 41,  59 => 40,  56 => 39,  51 => 38,  48 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/messages_after_redirect_toasts.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\messages_after_redirect_toasts.html.twig");
    }
}
