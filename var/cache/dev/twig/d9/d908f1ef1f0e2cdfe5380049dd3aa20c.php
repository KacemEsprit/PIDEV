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

/* home/index.html.twig */
class __TwigTemplate_e3e41759ced6501208ad379b8f6f2155 extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Home - OncoKidsCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">OncoKidsCare</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            yield "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 16
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 17
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "isAdmin", [], "any", false, false, false, 17)) ? ("app_admin_index") : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "isMedecin", [], "any", false, false, false, 18)) ? ("app_medecin_dashboard") : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 19
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "isPatient", [], "any", false, false, false, 19)) ? ("app_patient_dashboard") : ("app_donateur_dashboard")))))));
            // line 21
            yield "\" class=\"nav-link\">Mon Dashboard</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-danger\">
                            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                        </a>
                    </li>
                ";
        } else {
            // line 29
            yield "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 30
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-link\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"nav-link\">Register</a>
                    </li>
                ";
        }
        // line 36
        yield "            </ul>
        </div>
    </div>
</nav>

    <!-- Header Start -->
    <div class=\"container-fluid header bg-primary p-0 mb-5\">
        <div class=\"row g-0 align-items-center flex-column-reverse flex-lg-row\">
            <div class=\"col-lg-6 p-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                <h1 class=\"display-4 text-white mb-5\">Good Health Is The Root Of All Happiness</h1>
                <div class=\"row g-4\">
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">123</h2>
                            <p class=\"text-light mb-0\">Expert Doctors</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">1234</h2>
                            <p class=\"text-light mb-0\">Medical Stuff</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">12345</h2>
                            <p class=\"text-light mb-0\">Total Patients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                <div class=\"owl-carousel header-carousel\">
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Cardiology</h1>
                        </div>
                    </div>
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-2.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Neurology</h1>
                        </div>
                    </div>
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-3.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Pulmonary</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </main>

    <!-- Header End -->



  <!-- About Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"row g-5\">
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                <div class=\"d-flex flex-column\">
                    <img class=\"img-fluid rounded w-75 align-self-end\" src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    <img class=\"img-fluid rounded w-50 bg-white pt-3 pe-3\" src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about-2.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"margin-top: -25%;\">
                </div> 
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                <p class=\"d-inline-block border rounded-pill py-1 px-4\">About Us</p>
                <h1 class=\"mb-4\">Why You Should Trust Us? Get Know About Us!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p class=\"mb-4\">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Quality health care</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Only Qualified Doctors</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Medical Research Professionals</p>
                <a class=\"btn btn-primary rounded-pill py-3 px-5 mt-3\" href=\"\">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
            <p class=\"d-inline-block border rounded-pill py-1 px-4\">Services</p>
            <h1>Health Care Solutions</h1>
        </div>
        <div class=\"row g-4\">
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-heartbeat text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Cardiology</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-x-ray text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb3\">Pulmonary</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-brain text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Neurology</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-wheelchair text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Orthopedics</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-tooth text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Dental Surgery</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-vials text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Laboratory</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


   
   <!-- Feature Start -->
<div class=\"container-fluid bg-primary overflow-hidden my-5 px-lg-0\">
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
                    <img class=\"position-absolute img-fluid w-100 h-100\" src=\"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/feature.jpg"), "html", null, true);
        yield "\" style=\"object-fit: cover;\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

   <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                <p class=\"d-inline-block border rounded-pill py-1 px-4\">Doctors</p>
                <h1>Our Experience Doctors</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item position-relative rounded overflow-hidden\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        </div>
                        <div class=\"team-text bg-light text-center p-4\">
                            <h5>Doctor Name</h5>
                            <p class=\"text-primary\">Department</p>
                            <div class=\"team-social text-center\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item position-relative rounded overflow-hidden\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-2.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        </div>
                        <div class=\"team-text bg-light text-center p-4\">
                            <h5>Doctor Name</h5>
                            <p class=\"text-primary\">Department</p>
                            <div class=\"team-social text-center\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item position-relative rounded overflow-hidden\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-3.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        </div>
                        <div class=\"team-text bg-light text-center p-4\">
                            <h5>Doctor Name</h5>
                            <p class=\"text-primary\">Department</p>
                            <div class=\"team-social text-center\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item position-relative rounded overflow-hidden\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-4.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        </div>
                        <div class=\"team-text bg-light text-center p-4\">
                            <h5>Doctor Name</h5>
                            <p class=\"text-primary\">Department</p>
                            <div class=\"team-social text-center\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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


     <!-- Testimonial Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
         <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
            <p class=\"d-inline-block border rounded-pill py-1 px-4\">Testimonial</p>
            <h1>What Say Our Patients!</h1>
        </div>
        <div class=\"owl-carousel testimonial-carousel wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"testimonial-item text-center\">
                <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-1.jpg"), "html", null, true);
        yield "\" style=\"width: 100px; height: 100px;\">
                <div class=\"testimonial-text rounded text-center p-4\">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class=\"mb-1\">Patient Name</h5>
                    <span class=\"fst-italic\">Profession</span>
                </div>
            </div>
            <div class=\"testimonial-item text-center\">
                <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-2.jpg"), "html", null, true);
        yield "\" style=\"width: 100px; height: 100px;\">
                <div class=\"testimonial-text rounded text-center p-4\">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class=\"mb-1\">Patient Name</h5>
                    <span class=\"fst-italic\">Profession</span>
                </div>
            </div>
            <div class=\"testimonial-item text-center\">
                <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" style=\"width: 100px; height: 100px;\">
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
        return "home/index.html.twig";
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
        return array (  598 => 445,  587 => 437,  576 => 429,  467 => 323,  448 => 307,  429 => 291,  410 => 275,  388 => 256,  233 => 104,  229 => 103,  205 => 82,  196 => 76,  187 => 70,  151 => 36,  145 => 33,  139 => 30,  136 => 29,  128 => 24,  123 => 21,  121 => 19,  120 => 18,  119 => 17,  118 => 16,  115 => 15,  113 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - OncoKidsCare{% endblock %}

{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">OncoKidsCare</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path(
                            app.user.isAdmin ? 'app_admin_index' :
                            app.user.isMedecin ? 'app_medecin_dashboard' :
                            app.user.isPatient ? 'app_patient_dashboard' :
                            'app_donateur_dashboard'
                        ) }}\" class=\"nav-link\">Mon Dashboard</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\">
                            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                        </a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_login') }}\" class=\"nav-link\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_register') }}\" class=\"nav-link\">Register</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

    <!-- Header Start -->
    <div class=\"container-fluid header bg-primary p-0 mb-5\">
        <div class=\"row g-0 align-items-center flex-column-reverse flex-lg-row\">
            <div class=\"col-lg-6 p-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                <h1 class=\"display-4 text-white mb-5\">Good Health Is The Root Of All Happiness</h1>
                <div class=\"row g-4\">
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">123</h2>
                            <p class=\"text-light mb-0\">Expert Doctors</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">1234</h2>
                            <p class=\"text-light mb-0\">Medical Stuff</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">12345</h2>
                            <p class=\"text-light mb-0\">Total Patients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                <div class=\"owl-carousel header-carousel\">
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/carousel-1.jpg') }}\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Cardiology</h1>
                        </div>
                    </div>
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/carousel-2.jpg') }}\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Neurology</h1>
                        </div>
                    </div>
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/carousel-3.jpg') }}\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Pulmonary</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </main>

    <!-- Header End -->



  <!-- About Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"row g-5\">
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                <div class=\"d-flex flex-column\">
                    <img class=\"img-fluid rounded w-75 align-self-end\" src=\"{{ asset('img/about-1.jpg') }}\" alt=\"\">
                    <img class=\"img-fluid rounded w-50 bg-white pt-3 pe-3\" src=\"{{ asset('img/about-2.jpg') }}\" alt=\"\" style=\"margin-top: -25%;\">
                </div> 
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                <p class=\"d-inline-block border rounded-pill py-1 px-4\">About Us</p>
                <h1 class=\"mb-4\">Why You Should Trust Us? Get Know About Us!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p class=\"mb-4\">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Quality health care</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Only Qualified Doctors</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Medical Research Professionals</p>
                <a class=\"btn btn-primary rounded-pill py-3 px-5 mt-3\" href=\"\">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
            <p class=\"d-inline-block border rounded-pill py-1 px-4\">Services</p>
            <h1>Health Care Solutions</h1>
        </div>
        <div class=\"row g-4\">
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-heartbeat text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Cardiology</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-x-ray text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb3\">Pulmonary</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-brain text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Neurology</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-wheelchair text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Orthopedics</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-tooth text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Dental Surgery</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"service-item bg-light rounded h-100 p-5\">
                    <div class=\"d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4\" style=\"width: 65px; height: 65px;\">
                        <i class=\"fa fa-vials text-primary fs-4\"></i>
                    </div>
                    <h4 class=\"mb-3\">Laboratory</h4>
                    <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    <a class=\"btn\" href=\"\"><i class=\"fa fa-plus text-primary me-3\"></i>Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


   
   <!-- Feature Start -->
<div class=\"container-fluid bg-primary overflow-hidden my-5 px-lg-0\">
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
                    <img class=\"position-absolute img-fluid w-100 h-100\" src=\"{{ asset('img/feature.jpg') }}\" style=\"object-fit: cover;\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

   <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                <p class=\"d-inline-block border rounded-pill py-1 px-4\">Doctors</p>
                <h1>Our Experience Doctors</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item position-relative rounded overflow-hidden\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"{{ asset('img/team-1.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"team-text bg-light text-center p-4\">
                            <h5>Doctor Name</h5>
                            <p class=\"text-primary\">Department</p>
                            <div class=\"team-social text-center\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item position-relative rounded overflow-hidden\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"{{ asset('img/team-2.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"team-text bg-light text-center p-4\">
                            <h5>Doctor Name</h5>
                            <p class=\"text-primary\">Department</p>
                            <div class=\"team-social text-center\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item position-relative rounded overflow-hidden\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"{{ asset('img/team-3.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"team-text bg-light text-center p-4\">
                            <h5>Doctor Name</h5>
                            <p class=\"text-primary\">Department</p>
                            <div class=\"team-social text-center\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item position-relative rounded overflow-hidden\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"{{ asset('img/team-4.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"team-text bg-light text-center p-4\">
                            <h5>Doctor Name</h5>
                            <p class=\"text-primary\">Department</p>
                            <div class=\"team-social text-center\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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


     <!-- Testimonial Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
         <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
            <p class=\"d-inline-block border rounded-pill py-1 px-4\">Testimonial</p>
            <h1>What Say Our Patients!</h1>
        </div>
        <div class=\"owl-carousel testimonial-carousel wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"testimonial-item text-center\">
                <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"{{ asset('img/testimonial-1.jpg') }}\" style=\"width: 100px; height: 100px;\">
                <div class=\"testimonial-text rounded text-center p-4\">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class=\"mb-1\">Patient Name</h5>
                    <span class=\"fst-italic\">Profession</span>
                </div>
            </div>
            <div class=\"testimonial-item text-center\">
                <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"{{ asset('img/testimonial-2.jpg') }}\" style=\"width: 100px; height: 100px;\">
                <div class=\"testimonial-text rounded text-center p-4\">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class=\"mb-1\">Patient Name</h5>
                    <span class=\"fst-italic\">Profession</span>
                </div>
            </div>
            <div class=\"testimonial-item text-center\">
                <img class=\"img-fluid bg-light rounded-circle p-2 mx-auto mb-4\" src=\"{{ asset('img/testimonial-3.jpg') }}\" style=\"width: 100px; height: 100px;\">
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


{% endblock %}
", "home/index.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\home\\index.html.twig");
    }
}
