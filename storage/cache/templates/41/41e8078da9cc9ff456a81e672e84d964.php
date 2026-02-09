<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* auth/login.twig */
class __TwigTemplate_89398d220b00bc7705ce59ce6fbce944 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "auth/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("auth/layout.twig", "auth/login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <section class=\"vh-100 bg-primary bg-gradient\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card bg-light text-white\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-5 text-center\">
                            <div class=\"mb-4\">
                                <h2 class=\"fw-bold mb-5 text-uppercase text-primary d-flex justify-content-center align-items-center\">
                                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\" width=\"64\" height=\"64\"
                                         alt=\"Expennies Logo\" />
                                    Login
                                </h2>
                                <form method=\"post\" action=\"/login\">
                                    <div class=\"form-outline form-white mb-4\">
                                        <input type=\"email\" name=\"email\" class=\"form-control form-control-lg ";
        // line 19
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 19)) ? ("is-invalid") : (""));
        echo "\"
                                               value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "\"
                                               placeholder=\"Email\"
                                               required />
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 24
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 24)), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-outline form-white mb-1\">
                                        <input type=\"password\" name=\"password\" class=\"form-control form-control-lg ";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 28)) ? ("is-invalid") : (""));
        echo "\"
                                               placeholder=\"Password\" required />
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 31
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 31)), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <p class=\"mb-4 text-end\"><a class=\"text-secondary fw-semibold\" href=\"#\">Forgot
                                            password?</a></p>
                                    <button class=\"btn btn-primary bg-gradient text-white btn-lg px-5\" type=\"submit\">Log
                                        In
                                    </button>
                                </form>
                            </div>
                            <div>
                                <p class=\"mb-0 text-dark\">Don't have an account?
                                    <a href=\"/register\" class=\"text-primary fw-bold\">Sign Up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 51
        $this->loadTemplate("auth/two_factor_modal.twig", "auth/login.twig", 51)->display($context);
        // line 52
        echo "    </section>
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 52,  116 => 51,  93 => 31,  87 => 28,  80 => 24,  73 => 20,  69 => 19,  60 => 13,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/login.twig", "/var/www/resources/views/auth/login.twig");
    }
}
