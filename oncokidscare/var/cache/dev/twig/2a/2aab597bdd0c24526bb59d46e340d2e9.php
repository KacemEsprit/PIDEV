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

/* home/appointment.html.twig */
class __TwigTemplate_c9acd9a37340b64a51a6f33e8dcb3d86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/appointment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/appointment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/appointment.html.twig", 1);
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


    <!-- Page Header Start -->
    <div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Appointment</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <p class=\"d-inline-block border rounded-pill py-1 px-4\">Appointment</p>
                    <h1 class=\"mb-4\">Make An Appointment To Visit Our Doctor</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class=\"bg-light rounded d-flex align-items-center p-5 mb-4\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-phone-alt text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Call Us Now</p>
                            <h5 class=\"mb-0\">+012 345 6789</h5>
                        </div>
                    </div>
                    <div class=\"bg-light rounded d-flex align-items-center p-5\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-envelope-open text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Mail Us Now</p>
                            <h5 class=\"mb-0\">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"bg-light rounded h-100 d-flex align-items-center p-5\">
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Mobile\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select border-0\" style=\"height: 55px;\">
                                        <option selected>Choose Doctor</option>
                                        <option value=\"1\">Doctor 1</option>
                                        <option value=\"2\">Doctor 2</option>
                                        <option value=\"3\">Doctor 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control border-0 datetimepicker-input\"
                                            placeholder=\"Choose Date\" data-target=\"#date\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"time\" id=\"time\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control border-0 datetimepicker-input\"
                                            placeholder=\"Choose Date\" data-target=\"#time\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control border-0\" rows=\"5\" placeholder=\"Describe your problem\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
        

  
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
        return "home/appointment.html.twig";
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
        return array (  87 => 12,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    {% extends 'base.html.twig' %}
{% block body %}
        


    <!-- Page Header Start -->
    <div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Appointment</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <p class=\"d-inline-block border rounded-pill py-1 px-4\">Appointment</p>
                    <h1 class=\"mb-4\">Make An Appointment To Visit Our Doctor</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class=\"bg-light rounded d-flex align-items-center p-5 mb-4\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-phone-alt text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Call Us Now</p>
                            <h5 class=\"mb-0\">+012 345 6789</h5>
                        </div>
                    </div>
                    <div class=\"bg-light rounded d-flex align-items-center p-5\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-envelope-open text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Mail Us Now</p>
                            <h5 class=\"mb-0\">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"bg-light rounded h-100 d-flex align-items-center p-5\">
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Mobile\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select border-0\" style=\"height: 55px;\">
                                        <option selected>Choose Doctor</option>
                                        <option value=\"1\">Doctor 1</option>
                                        <option value=\"2\">Doctor 2</option>
                                        <option value=\"3\">Doctor 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control border-0 datetimepicker-input\"
                                            placeholder=\"Choose Date\" data-target=\"#date\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"time\" id=\"time\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control border-0 datetimepicker-input\"
                                            placeholder=\"Choose Date\" data-target=\"#time\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control border-0\" rows=\"5\" placeholder=\"Describe your problem\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
        

  
        {% endblock %}", "home/appointment.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\projet-onco\\PIDEV\\oncokidscare\\templates\\home\\appointment.html.twig");
    }
}
