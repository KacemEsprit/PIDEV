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
class __TwigTemplate_4883df7440f3b7d34a263f98382d3d5c extends Template
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
        yield "

    <!-- Header Start -->
    <div class=\"container-fluid header bg-primary p-0 mb-5\">
        <div class=\"row g-0 align-items-center flex-column-reverse flex-lg-row\">
            <div class=\"col-lg-6 p-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                <h1 class=\"display-4 text-white mb-5\">Ensemble, luttons contre le cancer infantile</h1>
                <div class=\"row g-4\">
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">50</h2>
                            <p class=\"text-light mb-0\">Oncologues Pédiatriques</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">200</h2>
                            <p class=\"text-light mb-0\">Personnel Médical</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">1000</h2>
                            <p class=\"text-light mb-0\">Jeunes Patients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                <div class=\"owl-carousel header-carousel\">
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/child-cancer-1.png"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Espoir</h1>
                        </div>
                    </div>
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-2.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Soins</h1>
                        </div>
                    </div>
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-3.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Soutien</h1>
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
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about-1.jpg"), "html", null, true);
        yield "\" alt=\"\">
                    <img class=\"img-fluid rounded w-50 bg-white pt-3 pe-3\" src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about-2.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"margin-top: -25%;\">
                </div> 
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                <p class=\"d-inline-block border rounded-pill py-1 px-4\">A propos de nous</p>
                <h1 class=\"mb-4\">Pourquoi nous faire confiance pour votre enfant ?</h1>
                <p>À OncoKidsCare, nous comprenons que soigner les enfants atteints de cancer nécessite bien plus qu'une expertise médicale. Notre approche combine soins médicaux de pointe et soutien psychologique</p>
                <p class=\"mb-4\">Notre équipe dévouée d'oncologues pédiatriques, d'infirmières et de personnel de soutien travaille ensemble dans un environnement adapté aux enfants.</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Soins spécialisés en oncologie pédiatrique</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Environnement adapté aux enfants</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Soutien aux familles</p>
                <a class=\"btn btn-primary rounded-pill py-3 px-5 mt-3\" href=\"\">Voir plus</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
            <p class=\"d-inline-block border rounded-pill py-1 px-4\">Nos services</p>
            <h1>Soins Spécialisés en Oncologie Pédiatrique</h1>
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
        // line 223
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
        // line 242
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
        // line 258
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
        // line 274
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
        // line 290
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
        // line 396
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
        // line 404
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
        // line 412
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
        return array (  544 => 412,  533 => 404,  522 => 396,  413 => 290,  394 => 274,  375 => 258,  356 => 242,  334 => 223,  179 => 71,  175 => 70,  151 => 49,  142 => 43,  133 => 37,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - OncoKidsCare{% endblock %}

{% block body %}


    <!-- Header Start -->
    <div class=\"container-fluid header bg-primary p-0 mb-5\">
        <div class=\"row g-0 align-items-center flex-column-reverse flex-lg-row\">
            <div class=\"col-lg-6 p-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                <h1 class=\"display-4 text-white mb-5\">Ensemble, luttons contre le cancer infantile</h1>
                <div class=\"row g-4\">
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">50</h2>
                            <p class=\"text-light mb-0\">Oncologues Pédiatriques</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">200</h2>
                            <p class=\"text-light mb-0\">Personnel Médical</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"border-start border-light ps-4\">
                            <h2 class=\"text-white mb-1\" data-toggle=\"counter-up\">1000</h2>
                            <p class=\"text-light mb-0\">Jeunes Patients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                <div class=\"owl-carousel header-carousel\">
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/child-cancer-1.png') }}\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Espoir</h1>
                        </div>
                    </div>
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/carousel-2.jpg') }}\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Soins</h1>
                        </div>
                    </div>
                    <div class=\"owl-carousel-item position-relative\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/carousel-3.jpg') }}\" alt=\"\">
                        <div class=\"owl-carousel-text\">
                            <h1 class=\"display-1 text-white mb-0\">Soutien</h1>
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
                <p class=\"d-inline-block border rounded-pill py-1 px-4\">A propos de nous</p>
                <h1 class=\"mb-4\">Pourquoi nous faire confiance pour votre enfant ?</h1>
                <p>À OncoKidsCare, nous comprenons que soigner les enfants atteints de cancer nécessite bien plus qu'une expertise médicale. Notre approche combine soins médicaux de pointe et soutien psychologique</p>
                <p class=\"mb-4\">Notre équipe dévouée d'oncologues pédiatriques, d'infirmières et de personnel de soutien travaille ensemble dans un environnement adapté aux enfants.</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Soins spécialisés en oncologie pédiatrique</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Environnement adapté aux enfants</p>
                <p><i class=\"far fa-check-circle text-primary me-3\"></i>Soutien aux familles</p>
                <a class=\"btn btn-primary rounded-pill py-3 px-5 mt-3\" href=\"\">Voir plus</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
            <p class=\"d-inline-block border rounded-pill py-1 px-4\">Nos services</p>
            <h1>Soins Spécialisés en Oncologie Pédiatrique</h1>
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
", "home/index.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\home\\index.html.twig");
    }
}
