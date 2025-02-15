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

/* home/feature.html.twig */
class __TwigTemplate_6dbcd82cbb4c932c20d0e690dcce325f extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/feature.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/feature.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/feature.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "
    <!-- Feature Start -->
    <div class=\"container-fluid bg-primary overflow-hidden px-lg-0\" style=\"margin: 6rem 0;\">
        <div class=\"container feature px-lg-0\">
            <div class=\"row g-0 mx-lg-0\">
                <div class=\"col-lg-6 feature-text py-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                    <div class=\"p-lg-5 ps-lg-0\">
                        <p class=\"d-inline-block border rounded-pill text-light py-1 px-4\">Features</p>
                        <h1 class=\"text-white mb-4\">Why Choose Us</h1>
                        <p class=\"text-white mb-4 pb-2\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <div class=\"row g-4\">
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light\" style=\"width: 55px; height: 55px;\">
                                        <i class=\"fa fa-user-md text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"text-white mb-2\">Experience</p>
                                        <h5 class=\"text-white mb-0\">Doctors</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light\" style=\"width: 55px; height: 55px;\">
                                        <i class=\"fa fa-check text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"text-white mb-2\">Quality</p>
                                        <h5 class=\"text-white mb-0\">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light\" style=\"width: 55px; height: 55px;\">
                                        <i class=\"fa fa-comment-medical text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"text-white mb-2\">Positive</p>
                                        <h5 class=\"text-white mb-0\">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light\" style=\"width: 55px; height: 55px;\">
                                        <i class=\"fa fa-headphones text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"text-white mb-2\">24 Hours</p>
                                        <h5 class=\"text-white mb-0\">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 pe-lg-0 wow fadeIn\" data-wow-delay=\"0.5s\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/feature.jpg\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
   
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
        return "home/feature.html.twig";
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
        return array (  76 => 5,  63 => 4,  40 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% extends 'base.html.twig' %}
{% block body %}

    <!-- Feature Start -->
    <div class=\"container-fluid bg-primary overflow-hidden px-lg-0\" style=\"margin: 6rem 0;\">
        <div class=\"container feature px-lg-0\">
            <div class=\"row g-0 mx-lg-0\">
                <div class=\"col-lg-6 feature-text py-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                    <div class=\"p-lg-5 ps-lg-0\">
                        <p class=\"d-inline-block border rounded-pill text-light py-1 px-4\">Features</p>
                        <h1 class=\"text-white mb-4\">Why Choose Us</h1>
                        <p class=\"text-white mb-4 pb-2\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <div class=\"row g-4\">
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light\" style=\"width: 55px; height: 55px;\">
                                        <i class=\"fa fa-user-md text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"text-white mb-2\">Experience</p>
                                        <h5 class=\"text-white mb-0\">Doctors</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light\" style=\"width: 55px; height: 55px;\">
                                        <i class=\"fa fa-check text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"text-white mb-2\">Quality</p>
                                        <h5 class=\"text-white mb-0\">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light\" style=\"width: 55px; height: 55px;\">
                                        <i class=\"fa fa-comment-medical text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"text-white mb-2\">Positive</p>
                                        <h5 class=\"text-white mb-0\">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light\" style=\"width: 55px; height: 55px;\">
                                        <i class=\"fa fa-headphones text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"text-white mb-2\">24 Hours</p>
                                        <h5 class=\"text-white mb-0\">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 pe-lg-0 wow fadeIn\" data-wow-delay=\"0.5s\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/feature.jpg\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
   
        {% endblock %}

", "home/feature.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\home\\feature.html.twig");
    }
}
