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
class __TwigTemplate_e32feb9212309eb7e4ee13c8a4990f13 extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 11
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
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <style>
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        .toast {
            background: white;
            border-radius: 4px;
            padding: 15px 25px;
            margin-bottom: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            animation: slideIn 0.3s ease-in-out;
        }
        .toast.success {
            border-left: 4px solid #28a745;
        }
        .toast.error {
            border-left: 4px solid #dc3545;
        }
        @keyframes slideIn {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }
    </style>

    ";
        // line 62
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 64
        yield "</head>
<body>
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-grow text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    ";
        // line 74
        yield from $this->loadTemplate("components/toast.html.twig", "base.html.twig", 74)->unwrap()->yield($context);
        // line 75
        yield "
    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn\" data-wow-delay=\"0.1s\">
        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h1 class=\"m-0 text-primary\"><i class=\"far fa-hospital me-3\"></i>OncoKidsCare</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-item nav-link\">About</a>
                <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service");
        yield "\" class=\"nav-item nav-link\">Service</a>
                ";
        // line 89
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MEDECIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
            // line 90
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index");
            yield "\" class=\"nav-item nav-link\">Publications</a>
                ";
        }
        // line 92
        yield "                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature");
        yield "\" class=\"dropdown-item\">Feature</a>
                        <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"dropdown-item\">Our Doctor</a>
                        <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment");
        yield "\" class=\"dropdown-item\">Appointment</a>
                        <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Traitements</a>
                    <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                       
                        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_rapport");
        yield "\" class=\"dropdown-item\">Rapport Medical</a>
                      
                        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medecin_rapports");
        yield "\" class=\"dropdown-item\">Patients Rapports</a>
                     
                    </div>
                </div>
                <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-item nav-link\">Contact</a>
                ";
        // line 113
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) {
            // line 114
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-item nav-link btn btn-danger text-white\">Déconnexion</a>
                ";
        } else {
            // line 116
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-item nav-link btn btn-primary text-white me-2\">Login</a>
                    <a href=\"";
            // line 117
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"nav-item nav-link btn btn-success text-white\">Register</a>
                ";
        }
        // line 119
        yield "            </div>
            <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment");
        yield "\" class=\"btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block\">Appointment<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    ";
        // line 125
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 126
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
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        yield "\"></script>
<!-- Toastr.js -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 205, $this->source); })()), "flashes", [], "any", false, false, false, 205));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 206
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 207
                yield "                console.log(\"Flash Message:\", \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "\");
                toastr[\"";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\"](\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "\", \"\", {
                    closeButton: true,
                    progressBar: true,
                    positionClass: \"toast-top-right\",
                    timeOut: 3000
                });
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "    });
</script>


    <!-- Template Javascript -->
    <script src=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Flasher\Symfony\Twig\FlasherTwigExtension']->render(), "html", null, true);
        yield "
    ";
        // line 223
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 224
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

    // line 62
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

        // line 63
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
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

    // line 223
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
        return array (  505 => 223,  483 => 125,  472 => 63,  459 => 62,  436 => 5,  423 => 224,  421 => 223,  417 => 222,  413 => 221,  406 => 216,  400 => 215,  385 => 208,  380 => 207,  375 => 206,  371 => 205,  360 => 197,  356 => 196,  352 => 195,  348 => 194,  344 => 193,  340 => 192,  336 => 191,  332 => 190,  266 => 126,  264 => 125,  256 => 120,  253 => 119,  248 => 117,  243 => 116,  237 => 114,  235 => 113,  231 => 112,  224 => 108,  219 => 106,  209 => 99,  205 => 98,  201 => 97,  197 => 96,  193 => 95,  188 => 92,  182 => 90,  180 => 89,  176 => 88,  172 => 87,  168 => 86,  157 => 78,  152 => 75,  150 => 74,  138 => 64,  136 => 62,  102 => 31,  96 => 28,  90 => 25,  86 => 24,  82 => 23,  67 => 11,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
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

    <style>
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        .toast {
            background: white;
            border-radius: 4px;
            padding: 15px 25px;
            margin-bottom: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            animation: slideIn 0.3s ease-in-out;
        }
        .toast.success {
            border-left: 4px solid #28a745;
        }
        .toast.error {
            border-left: 4px solid #dc3545;
        }
        @keyframes slideIn {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }
    </style>

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

    {% include 'components/toast.html.twig' %}

    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn\" data-wow-delay=\"0.1s\">
        <a href=\"{{ path('app_home') }}\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h1 class=\"m-0 text-primary\"><i class=\"far fa-hospital me-3\"></i>OncoKidsCare</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"{{ path('app_about') }}\" class=\"nav-item nav-link\">About</a>
                <a href=\"{{ path('app_service') }}\" class=\"nav-item nav-link\">Service</a>
                {% if is_granted('ROLE_USER') and (is_granted('ROLE_PATIENT') or is_granted('ROLE_MEDECIN') or is_granted('ROLE_ADMIN')) %}
                    <a href=\"{{ path('app_publication_index') }}\" class=\"nav-item nav-link\">Publications</a>
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
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Traitements</a>
                    <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                       
                        <a href=\"{{ path('app_create_rapport') }}\" class=\"dropdown-item\">Rapport Medical</a>
                      
                        <a href=\"{{ path('app_medecin_rapports') }}\" class=\"dropdown-item\">Patients Rapports</a>
                     
                    </div>
                </div>
                <a href=\"{{ path('app_contact') }}\" class=\"nav-item nav-link\">Contact</a>
                {% if app.user %}
                    <a href=\"{{ path('app_logout') }}\" class=\"nav-item nav-link btn btn-danger text-white\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"nav-item nav-link btn btn-primary text-white me-2\">Login</a>
                    <a href=\"{{ path('app_register') }}\" class=\"nav-item nav-link btn btn-success text-white\">Register</a>
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
<!-- Toastr.js -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                console.log(\"Flash Message:\", \"{{ message }}\");
                toastr[\"{{ label }}\"](\"{{ message }}\", \"\", {
                    closeButton: true,
                    progressBar: true,
                    positionClass: \"toast-top-right\",
                    timeOut: 3000
                });
            {% endfor %}
        {% endfor %}
    });
</script>


    <!-- Template Javascript -->
    <script src=\"{{ asset('js/main.js') }}\"></script>
    {{ flasher_render() }}
    {% block javascript %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\base.html.twig");
    }
}
