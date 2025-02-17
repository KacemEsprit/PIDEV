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

/* base_publication.html.twig */
class __TwigTemplate_4a57e0fcfa57c34ece8526e836eadb58 extends Template
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
            'meta' => [$this, 'block_meta'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'page_stylesheets' => [$this, 'block_page_stylesheets'],
            'spinner' => [$this, 'block_spinner'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'page_javascripts' => [$this, 'block_page_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_publication.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_publication.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 12
        yield "
    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 37
        yield "
    ";
        // line 38
        yield from $this->unwrap()->yieldBlock('page_stylesheets', $context, $blocks);
        // line 39
        yield "</head>
<body>
    ";
        // line 41
        yield from $this->unwrap()->yieldBlock('spinner', $context, $blocks);
        // line 48
        yield "
    ";
        // line 49
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 116
        yield "
    ";
        // line 117
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 133
        yield "
    ";
        // line 134
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 168
        yield "
    ";
        // line 169
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 202
        yield "
    ";
        // line 203
        yield from $this->unwrap()->yieldBlock('page_javascripts', $context, $blocks);
        // line 204
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

        yield "OncoKidsCare - Clinic";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 8
        yield "        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        yield "        ";
        // line 15
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        yield "\" rel=\"icon\">

        ";
        // line 18
        yield "        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap\" rel=\"stylesheet\">

        ";
        // line 23
        yield "        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        ";
        // line 27
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        ";
        // line 32
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        ";
        // line 35
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_spinner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spinner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spinner"));

        // line 42
        yield "        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-grow text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 50
        yield "        <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn\" data-wow-delay=\"0.1s\">
            <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
                <h1 class=\"m-0 text-primary\">
                    <img src=\"";
        // line 53
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
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link\">Accueil</a>
                    <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-item nav-link\">À propos</a>

             
                    ";
        // line 66
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DONATEUR"))) {
            // line 67
            yield "                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Donation</a>
                            <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                                <a href=\"";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faire_don");
            yield "\" class=\"dropdown-item\">Faire don</a>
                                <a href=\"";
            // line 71
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_don");
            yield "\" class=\"dropdown-item\">Historique don</a>
                            </div>
                        </div>
                    ";
        }
        // line 75
        yield "
                 ";
        // line 76
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MEDECIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
            // line 77
            yield "                <!-- Espace Communautaire Dropdown -->
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Espace Communautaire</a>
                    <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                        <a href=\"";
            // line 81
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index");
            yield "\" class=\"dropdown-item\">Publications</a>
                        <a href=\"";
            // line 82
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_group_index");
            yield "\" class=\"dropdown-item\">Discussions</a>
                    </div>
                </div>
            ";
        }
        // line 86
        yield "             ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT")) {
            // line 87
            yield "            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pharmacie</a>
                <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                    <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
            yield "\" class=\"dropdown-item\">Passer commande</a>
                    <a href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
            yield "\" class=\"dropdown-item\">Consulter commande</a>
                </div>
            </div>
        ";
        }
        // line 95
        yield "                 
                    
                    ";
        // line 97
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 98
            yield "                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-user-circle\"></i> ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "prenom", [], "any", false, false, false, 100), "html", null, true);
            yield "
                            </a>
                            <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                                <a href=\"";
            // line 103
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"dropdown-item\">Déconnexion</a>
                            </div>
                        </div>
                    ";
        } else {
            // line 107
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-item nav-link\">connexion</a>
                    ";
        }
        // line 109
        yield "                </div>
<a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment");
        yield "\" class=\"btn btn-primary btn-sm rounded-0 py-2 px-3 d-flex align-items-center justify-content-center\">
    Appointment <i class=\"fa fa-arrow-right ms-2\"></i>
</a>
            </div>
        </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 118
        yield "        <div class=\"container-xxl py-5\">
            ";
        // line 119
        yield from $this->unwrap()->yieldBlock('flash_messages', $context, $blocks);
        // line 129
        yield "
            ";
        // line 130
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 131
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_flash_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 120
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "flashes", [], "any", false, false, false, 120));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 121
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 122
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 130
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

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 135
        yield "        <div class=\"container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
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
                        <a class=\"btn btn-link\" href=\"\">À propos de nous</a>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        yield "        ";
        // line 171
        yield "        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

        ";
        // line 174
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>

        ";
        // line 177
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        yield "\"></script>

        ";
        // line 187
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

        ";
        // line 190
        yield "        <script>
            \$(document).ready(function() {
                // Initialize WOW.js
                new WOW().init();

                // Handle Spinner
                setTimeout(function () {
                    \$('#spinner').removeClass('show');
                }, 1000);
            });
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_publication.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  698 => 203,  676 => 190,  670 => 187,  665 => 184,  661 => 183,  657 => 182,  653 => 181,  649 => 180,  645 => 179,  641 => 178,  636 => 177,  632 => 174,  628 => 171,  626 => 170,  613 => 169,  570 => 135,  557 => 134,  535 => 130,  524 => 128,  518 => 127,  508 => 123,  503 => 122,  498 => 121,  493 => 120,  480 => 119,  468 => 131,  466 => 130,  463 => 129,  461 => 119,  458 => 118,  445 => 117,  428 => 110,  425 => 109,  419 => 107,  412 => 103,  406 => 100,  402 => 98,  400 => 97,  396 => 95,  389 => 91,  385 => 90,  380 => 87,  377 => 86,  370 => 82,  366 => 81,  360 => 77,  358 => 76,  355 => 75,  348 => 71,  344 => 70,  339 => 67,  337 => 66,  331 => 63,  327 => 62,  315 => 53,  310 => 51,  307 => 50,  294 => 49,  278 => 42,  265 => 41,  243 => 38,  229 => 35,  223 => 32,  218 => 29,  214 => 28,  209 => 27,  204 => 23,  198 => 18,  192 => 15,  190 => 14,  177 => 13,  163 => 8,  150 => 7,  127 => 5,  114 => 204,  112 => 203,  109 => 202,  107 => 169,  104 => 168,  102 => 134,  99 => 133,  97 => 117,  94 => 116,  92 => 49,  89 => 48,  87 => 41,  83 => 39,  81 => 38,  78 => 37,  76 => 13,  73 => 12,  71 => 7,  66 => 5,  60 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}OncoKidsCare - Clinic{% endblock %}</title>
    
    {% block meta %}
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">
    {% endblock %}

    {% block stylesheets %}
        {# Favicon #}
        <link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\">

        {# Google Web Fonts #}
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap\" rel=\"stylesheet\">

        {# Icon Font Stylesheet #}
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        {# Libraries Stylesheet #}
        <link href=\"{{ asset('lib/animate/animate.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\">

        {# Customized Bootstrap Stylesheet #}
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        {# Template Stylesheet #}
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    {% endblock %}

    {% block page_stylesheets %}{% endblock %}
</head>
<body>
    {% block spinner %}
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-grow text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
    {% endblock %}

    {% block header %}
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
                    <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link\">Accueil</a>
                    <a href=\"{{ path('app_about') }}\" class=\"nav-item nav-link\">À propos</a>

             
                    {% if is_granted('ROLE_USER') and is_granted('ROLE_DONATEUR') %}
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Donation</a>
                            <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                                <a href=\"{{ path('app_faire_don') }}\" class=\"dropdown-item\">Faire don</a>
                                <a href=\"{{ path('app_historique_don') }}\" class=\"dropdown-item\">Historique don</a>
                            </div>
                        </div>
                    {% endif %}

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
                 
                    
                    {% if is_granted('ROLE_USER') %}
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-user-circle\"></i> {{ app.user.prenom }}
                            </a>
                            <div class=\"dropdown-menu rounded-0 rounded-bottom m-0\">
                                <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item\">Déconnexion</a>
                            </div>
                        </div>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\" class=\"nav-item nav-link\">connexion</a>
                    {% endif %}
                </div>
<a href=\"{{ path('app_appointment') }}\" class=\"btn btn-primary btn-sm rounded-0 py-2 px-3 d-flex align-items-center justify-content-center\">
    Appointment <i class=\"fa fa-arrow-right ms-2\"></i>
</a>
            </div>
        </nav>
    {% endblock %}

    {% block main %}
        <div class=\"container-xxl py-5\">
            {% block flash_messages %}
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}
            {% endblock %}

            {% block body %}{% endblock %}
        </div>
    {% endblock %}

    {% block footer %}
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
                        <a class=\"btn btn-link\" href=\"\">À propos de nous</a>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}

    {% block javascripts %}
        {# jQuery #}
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

        {# Bootstrap JS #}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>

        {# Template Javascript #}
        <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
        <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
        <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
        <script src=\"{{ asset('lib/counterup/counterup.min.js') }}\"></script>
        <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
        <script src=\"{{ asset('lib/tempusdominus/js/moment.min.js') }}\"></script>
        <script src=\"{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
        <script src=\"{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>

        {# Core Javascript #}
        <script src=\"{{ asset('js/main.js') }}\"></script>

        {# Initialize Template Features #}
        <script>
            \$(document).ready(function() {
                // Initialize WOW.js
                new WOW().init();

                // Handle Spinner
                setTimeout(function () {
                    \$('#spinner').removeClass('show');
                }, 1000);
            });
        </script>
    {% endblock %}

    {% block page_javascripts %}{% endblock %}
</body>
</html>
", "base_publication.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\base_publication.html.twig");
    }
}
