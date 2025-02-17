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

/* home/404.html.twig */
class __TwigTemplate_ee4d21bf7483656c5ac8322081831b23 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/404.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/404.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/404.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "
    <!-- Page Header Start -->
    <div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">404 Error</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">404 Error</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container text-center\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <i class=\"bi bi-exclamation-triangle display-1 text-primary\"></i>
                    <h1 class=\"display-1\">404</h1>
                    <h1 class=\"mb-4\">Page Not Found</h1>
                    <p class=\"mb-4\">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class=\"btn btn-primary rounded-pill py-3 px-5\" href=\"\">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        

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
        return "home/404.html.twig";
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
        return array (  76 => 4,  63 => 3,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
    {% extends 'base.html.twig' %}
{% block body %}

    <!-- Page Header Start -->
    <div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">404 Error</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">404 Error</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container text-center\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <i class=\"bi bi-exclamation-triangle display-1 text-primary\"></i>
                    <h1 class=\"display-1\">404</h1>
                    <h1 class=\"mb-4\">Page Not Found</h1>
                    <p class=\"mb-4\">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class=\"btn btn-primary rounded-pill py-3 px-5\" href=\"\">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        

        {% endblock %}", "home/404.html.twig", "C:\\PIDEV\\oncokidscare\\templates\\home\\404.html.twig");
    }
}
