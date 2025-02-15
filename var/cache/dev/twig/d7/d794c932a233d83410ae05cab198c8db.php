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

/* home/testimonial.html.twig */
class __TwigTemplate_08f84174b3c8efc6f5304d29fdf2e0dd extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/testimonial.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/testimonial.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/testimonial.html.twig", 1);
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
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Testimonial</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                <p class=\"d-inline-block border rounded-pill py-1 px-4\">Testimonial</p>
                <h1>What Say Our Patients!</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"img/testimonial-1.jpg\" style=\"width: 100px; height: 100px;\">
                    <div class=\"testimonial-text rounded text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Patient Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"img/testimonial-2.jpg\" style=\"width: 100px; height: 100px;\">
                    <div class=\"testimonial-text rounded text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Patient Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"img/testimonial-3.jpg\" style=\"width: 100px; height: 100px;\">
                    <div class=\"testimonial-text rounded text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Patient Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

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
        return "home/testimonial.html.twig";
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
        return array (  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


    <!-- Page Header Start -->
    <div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Testimonial</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                <p class=\"d-inline-block border rounded-pill py-1 px-4\">Testimonial</p>
                <h1>What Say Our Patients!</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"img/testimonial-1.jpg\" style=\"width: 100px; height: 100px;\">
                    <div class=\"testimonial-text rounded text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Patient Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"img/testimonial-2.jpg\" style=\"width: 100px; height: 100px;\">
                    <div class=\"testimonial-text rounded text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Patient Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"img/testimonial-3.jpg\" style=\"width: 100px; height: 100px;\">
                    <div class=\"testimonial-text rounded text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Patient Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

{% endblock %}", "home/testimonial.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\home\\testimonial.html.twig");
    }
}
