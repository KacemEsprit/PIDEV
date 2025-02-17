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
use Twig\TemplateWrapper;

/* admin_home/signup.html.twig */
class __TwigTemplate_4c851ec2f4af8ef99bf336ffb9dc621b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/signup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/signup.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "admin_home/signup.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "

        <!-- Sign Up Start -->
        <div class=\"container-fluid\">
            <div class=\"row h-100 align-items-center justify-content-center\" style=\"min-height: 100vh;\">
                <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4\">
                    <div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">
                        <div class=\"d-flex align-items-center justify-content-between mb-3\">
                            <a href=\"index.html\" class=\"\">
                                <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input type=\"text\" class=\"form-control\" id=\"floatingText\" placeholder=\"jhondoe\">
                            <label for=\"floatingText\">Username</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
                            <label for=\"floatingInput\">Email address</label>
                        </div>
                        <div class=\"form-floating mb-4\">
                            <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
                            <label for=\"floatingPassword\">Password</label>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
                            </div>
                            <a href=\"\">Forgot Password</a>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary py-3 w-100 mb-4\">Sign Up</button>
                        <p class=\"text-center mb-0\">Already have an Account? <a href=\"\">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin_home/signup.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_admin.html.twig' %}
{% block body %}


        <!-- Sign Up Start -->
        <div class=\"container-fluid\">
            <div class=\"row h-100 align-items-center justify-content-center\" style=\"min-height: 100vh;\">
                <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4\">
                    <div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">
                        <div class=\"d-flex align-items-center justify-content-between mb-3\">
                            <a href=\"index.html\" class=\"\">
                                <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input type=\"text\" class=\"form-control\" id=\"floatingText\" placeholder=\"jhondoe\">
                            <label for=\"floatingText\">Username</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
                            <label for=\"floatingInput\">Email address</label>
                        </div>
                        <div class=\"form-floating mb-4\">
                            <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
                            <label for=\"floatingPassword\">Password</label>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
                            </div>
                            <a href=\"\">Forgot Password</a>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary py-3 w-100 mb-4\">Sign Up</button>
                        <p class=\"text-center mb-0\">Already have an Account? <a href=\"\">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
            {% endblock %}", "admin_home/signup.html.twig", "C:\\PIDEV\\oncokidscare\\templates\\admin_home\\signup.html.twig");
    }
}
