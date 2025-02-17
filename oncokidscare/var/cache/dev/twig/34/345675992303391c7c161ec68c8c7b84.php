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

/* base.html.twig */
class __TwigTemplate_76dbbbc178281565daf91038e6d7b2aa extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        yield "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 34
        yield "</head>
<body>
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-grow text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn\" data-wow-delay=\"0.1s\">
     <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
    <h1 class=\"m-0 text-primary\">
        <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logooncokidscare.png"), "html", null, true);
        yield "\" alt=\"OncoKidsCare Logo\" class=\"me-3\" style=\"height: 70px;\">
        OncoKidsCare
    </h1>
</a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
    <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\">Home</a>
        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-item nav-link\">About</a>
        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service");
        yield "\" class=\"nav-item nav-link\">Service</a>
         <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Donation</a>
                    <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                        ";
        // line 63
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 64
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faire_don");
            yield "\" class=\"dropdown-item\">Faire don</a>
                        ";
        }
        // line 66
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_don");
        yield "\" class=\"dropdown-item\">Historique don</a>
                    </div>
                </div>

       ";
        // line 70
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MEDECIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
            // line 71
            yield "                <!-- Espace Communautaire Dropdown -->
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Espace Communautaire</a>
                    <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                        <a href=\"";
            // line 75
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index");
            yield "\" class=\"dropdown-item\">Publications</a>
                        <a href=\"";
            // line 76
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_group_index");
            yield "\" class=\"dropdown-item\">Discussions</a>
                    </div>
                </div>
            ";
        }
        // line 80
        yield "             ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT")) {
            // line 81
            yield "            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pharmacie</a>
                <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                    <a href=\"";
            // line 84
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
            yield "\" class=\"dropdown-item\">Passer commande</a>
                    <a href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
            yield "\" class=\"dropdown-item\">Consulter commande</a>
                </div>
            </div>
        ";
        }
        // line 89
        yield "        <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
            <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature");
        yield "\" class=\"dropdown-item\">Feature</a>
                <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"dropdown-item\">Our Doctor</a>
                <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment");
        yield "\" class=\"dropdown-item\">Appointment</a>
                <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
            </div>
        </div>
        ";
        // line 99
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MEDECIN")) {
            // line 100
            yield "        <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Traitements</a>
            <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                <a href=\"";
            // line 103
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_rapport");
            yield "\" class=\"dropdown-item\">Rapport Medical</a>
                <a href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medecin_rapports");
            yield "\" class=\"dropdown-item\">Liste des Rapports</a>
            </div>
        </div>  
    ";
        }
        // line 108
        yield "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT")) {
            // line 109
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_patient_rapports");
            yield "\" class=\"nav-item nav-link\">Mes Rapports</a>
            ";
        }
        // line 111
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-item nav-link\">Contact</a>
        ";
        // line 112
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112)) {
            // line 113
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-item nav-link\">Déconnexion</a>
        ";
        } else {
            // line 115
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-item nav-link\">Connexion</a>
            <a href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"nav-item nav-link\">Inscription</a>
        ";
        }
        // line 118
        yield "    </div>

    <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment");
        yield "\" class=\"btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block\">Appointment<i class=\"fa fa-arrow-right ms-3\"></i></a>
</div>
    </nav>
    <!-- Navbar End -->

  
    ";
        // line 126
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 127
        yield "
    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h5 class=\"text-light mb-4\">Address</h5>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5 class=\"text-light mb-4\">Services</h5>
                    <a class=\"btn btn-link\" href=\"\">Cardiology</a>
                    <a class=\"btn btn-link\" href=\"\">Pulmonary</a>
                    <a class=\"btn btn-link\" href=\"\">Neurology</a>
                    <a class=\"btn btn-link\" href=\"\">Orthopedics</a>
                    <a class=\"btn btn-link\" href=\"\">Laboratory</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5 class=\"text-light mb-4\">Quick Links</h5>
                    <a class=\"btn btn-link\" href=\"\">About Us</a>
                    <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link\" href=\"\">Our Services</a>
                    <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn btn-link\" href=\"\">Support</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5 class=\"text-light mb-4\">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script> 
    <script src=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
   
    ";
        // line 201
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 202
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
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

        yield "OncoKidsCare - Clinic ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 33
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 201
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  487 => 201,  465 => 126,  454 => 33,  441 => 32,  418 => 4,  405 => 202,  403 => 201,  398 => 199,  394 => 198,  390 => 197,  386 => 196,  382 => 195,  378 => 194,  374 => 193,  370 => 192,  366 => 191,  300 => 127,  298 => 126,  289 => 120,  285 => 118,  280 => 116,  275 => 115,  269 => 113,  267 => 112,  262 => 111,  256 => 109,  253 => 108,  246 => 104,  242 => 103,  237 => 100,  235 => 99,  229 => 96,  225 => 95,  221 => 94,  217 => 93,  213 => 92,  208 => 89,  201 => 85,  197 => 84,  192 => 81,  189 => 80,  182 => 76,  178 => 75,  172 => 71,  170 => 70,  162 => 66,  156 => 64,  154 => 63,  147 => 59,  143 => 58,  139 => 57,  127 => 48,  122 => 46,  108 => 34,  106 => 32,  101 => 30,  95 => 27,  89 => 24,  85 => 23,  81 => 22,  66 => 10,  57 => 4,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}OncoKidsCare - Clinic {% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('lib/animate/animate.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    {% block css %}
    {% endblock %}
</head>
<body>
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-grow text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn\" data-wow-delay=\"0.1s\">
     <a href=\"{{ path('app_home') }}\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
    <h1 class=\"m-0 text-primary\">
        <img src=\"{{ asset('img/logooncokidscare.png') }}\" alt=\"OncoKidsCare Logo\" class=\"me-3\" style=\"height: 70px;\">
        OncoKidsCare
    </h1>
</a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
    <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
        <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link active\">Home</a>
        <a href=\"{{ path('app_about') }}\" class=\"nav-item nav-link\">About</a>
        <a href=\"{{ path('app_service') }}\" class=\"nav-item nav-link\">Service</a>
         <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Donation</a>
                    <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                        {% if not is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_faire_don') }}\" class=\"dropdown-item\">Faire don</a>
                        {% endif %}
                        <a href=\"{{ path('app_historique_don') }}\" class=\"dropdown-item\">Historique don</a>
                    </div>
                </div>

       {% if is_granted('ROLE_USER') and (is_granted('ROLE_PATIENT') or is_granted('ROLE_MEDECIN') or is_granted('ROLE_ADMIN')) %}
                <!-- Espace Communautaire Dropdown -->
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Espace Communautaire</a>
                    <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                        <a href=\"{{ path('app_publication_index') }}\" class=\"dropdown-item\">Publications</a>
                        <a href=\"{{ path('app_chat_group_index') }}\" class=\"dropdown-item\">Discussions</a>
                    </div>
                </div>
            {% endif %}
             {% if is_granted('ROLE_PATIENT') %}
            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pharmacie</a>
                <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                    <a href=\"{{ path('app_commande_new') }}\" class=\"dropdown-item\">Passer commande</a>
                    <a href=\"{{ path('app_commande_index')}}\" class=\"dropdown-item\">Consulter commande</a>
                </div>
            </div>
        {% endif %}
        <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
            <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                <a href=\"{{ path('app_feature') }}\" class=\"dropdown-item\">Feature</a>
                <a href=\"{{ path('app_team') }}\" class=\"dropdown-item\">Our Doctor</a>
                <a href=\"{{ path('app_appointment') }}\" class=\"dropdown-item\">Appointment</a>
                <a href=\"{{ path('app_testimonial') }}\" class=\"dropdown-item\">Testimonial</a>
                <a href=\"{{ path('app_404') }}\" class=\"dropdown-item\">404 Page</a>
            </div>
        </div>
        {% if is_granted('ROLE_MEDECIN') %}
        <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Traitements</a>
            <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                <a href=\"{{ path('app_create_rapport') }}\" class=\"dropdown-item\">Rapport Medical</a>
                <a href=\"{{ path('app_medecin_rapports') }}\" class=\"dropdown-item\">Liste des Rapports</a>
            </div>
        </div>  
    {% endif %}
        {% if is_granted('ROLE_PATIENT') %}
                <a href=\"{{ path('app_patient_rapports') }}\" class=\"nav-item nav-link\">Mes Rapports</a>
            {% endif %}
        <a href=\"{{ path('app_contact') }}\" class=\"nav-item nav-link\">Contact</a>
        {% if app.user %}
            <a href=\"{{ path('app_logout') }}\" class=\"nav-item nav-link\">Déconnexion</a>
        {% else %}
            <a href=\"{{ path('app_login') }}\" class=\"nav-item nav-link\">Connexion</a>
            <a href=\"{{ path('app_register') }}\" class=\"nav-item nav-link\">Inscription</a>
        {% endif %}
    </div>

    <a href=\"{{ path('app_appointment') }}\" class=\"btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block\">Appointment<i class=\"fa fa-arrow-right ms-3\"></i></a>
</div>
    </nav>
    <!-- Navbar End -->

  
    {% block body %}{% endblock %}

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h5 class=\"text-light mb-4\">Address</h5>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5 class=\"text-light mb-4\">Services</h5>
                    <a class=\"btn btn-link\" href=\"\">Cardiology</a>
                    <a class=\"btn btn-link\" href=\"\">Pulmonary</a>
                    <a class=\"btn btn-link\" href=\"\">Neurology</a>
                    <a class=\"btn btn-link\" href=\"\">Orthopedics</a>
                    <a class=\"btn btn-link\" href=\"\">Laboratory</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5 class=\"text-light mb-4\">Quick Links</h5>
                    <a class=\"btn btn-link\" href=\"\">About Us</a>
                    <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link\" href=\"\">Our Services</a>
                    <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn btn-link\" href=\"\">Support</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5 class=\"text-light mb-4\">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('lib/counterup/counterup.min.js') }}\"></script> 
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
   
    {% block javascript %}{% endblock %}
</body>
</html>
", "base.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\base.html.twig");
    }
}
