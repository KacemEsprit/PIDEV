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

/* base_admin.html.twig */
class __TwigTemplate_5f00b4854b8306a8017a6371c37d3d73 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_admin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        yield "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styleadmin.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 32
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 33
        yield "
</head>


<body>
<div class=\"container-fluid position-relative bg-white d-flex p-0\">
         <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> 
    
<!-- Sidebar Start -->
<div class=\"sidebar pe-4 pb-3\">
    <nav class=\"navbar bg-light navbar-light\">
        <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"navbar-brand mx-4 mb-3\">
            <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
        </a>
        <div class=\"d-flex align-items-center ms-4 mb-4\">
            <div class=\"position-relative\">
                <img class=\"rounded-circle\" src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
            </div>
            <div class=\"ms-3\">
                <h6 class=\"mb-0\">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class=\"navbar-nav w-100\">
            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"nav-item nav-link active\"><i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Elements</a>
                <div class=\"dropdown-menu bg-transparent border-0\">
                    <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_buttons");
        yield "\" class=\"dropdown-item\">Buttons</a>
                    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_typography");
        yield "\" class=\"dropdown-item\">Typography</a>
                    <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_other_elements");
        yield "\" class=\"dropdown-item\">Other Elements</a>
                </div>
            </div>
            <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_widgets");
        yield "\" class=\"nav-item nav-link\"><i class=\"fa fa-th me-2\"></i>Widgets</a>
            <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forms");
        yield "\" class=\"nav-item nav-link\"><i class=\"fa fa-keyboard me-2\"></i>Forms</a>
            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tables");
        yield "\" class=\"nav-item nav-link\"><i class=\"fa fa-table me-2\"></i>Tables</a>
            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_charts");
        yield "\" class=\"nav-item nav-link\"><i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"far fa-file-alt me-2\"></i>Pages</a>
                <div class=\"dropdown-menu bg-transparent border-0\">
                    <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
        yield "\" class=\"dropdown-item\">Sign In</a>
                    <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        yield "\" class=\"dropdown-item\">Sign Up</a>
                    <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404_admin");
        yield "\" class=\"dropdown-item\">404 Error</a>
                    <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment");
        yield "\" class=\"dropdown-item\">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->

 <div class=\"content\">
            <!-- Navbar Start -->
            <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
                <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"navbar-brand d-flex d-lg-none me-4\">
                    <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
                </a>
                <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                    <i class=\"fa fa-bars\"></i>
                </a>
                <form class=\"d-none d-md-flex ms-4\">
                    <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
                </form>
                <div class=\"navbar-nav align-items-center ms-auto\">
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Message</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        yield "\"alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Notificatin</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <img class=\"rounded-circle me-lg-2\" src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <span class=\"d-none d-lg-inline-flex\">John Doe</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">My Profile</a>
                            <a href=\"#\" class=\"dropdown-item\">Settings</a>
                            <a href=\"#\" class=\"dropdown-item\">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


";
        // line 183
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 186
        yield "
             <!-- Footer Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light rounded-top p-4\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                            &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                            Designed By <a href=\"https://htmlcodex.com\">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div> 
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>
    ";
        // line 209
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 226
        yield "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 183
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

        // line 184
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 209
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

        // line 210
        yield "
  <!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/chart/chart.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        yield "\"></script>

<!-- Template Javascript -->
 <script src=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        yield "\"></script>
 
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
        return "base_admin.html.twig";
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
        return array (  449 => 223,  443 => 220,  439 => 219,  435 => 218,  431 => 217,  427 => 216,  423 => 215,  419 => 214,  413 => 210,  400 => 209,  388 => 184,  375 => 183,  353 => 32,  339 => 226,  337 => 209,  312 => 186,  310 => 183,  293 => 169,  253 => 132,  240 => 122,  227 => 112,  206 => 94,  192 => 83,  188 => 82,  184 => 81,  180 => 80,  173 => 76,  169 => 75,  165 => 74,  161 => 73,  155 => 70,  151 => 69,  147 => 68,  140 => 64,  128 => 55,  120 => 50,  101 => 33,  99 => 32,  95 => 31,  89 => 28,  83 => 25,  79 => 24,  64 => 12,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('css/styleadmin.css') }}\" rel=\"stylesheet\">
        {% block css %}{% endblock %}

</head>


<body>
<div class=\"container-fluid position-relative bg-white d-flex p-0\">
         <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> 
    
<!-- Sidebar Start -->
<div class=\"sidebar pe-4 pb-3\">
    <nav class=\"navbar bg-light navbar-light\">
        <a href=\"{{ path('app_admin') }}\" class=\"navbar-brand mx-4 mb-3\">
            <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
        </a>
        <div class=\"d-flex align-items-center ms-4 mb-4\">
            <div class=\"position-relative\">
                <img class=\"rounded-circle\" src=\"{{ asset('img/user.jpg') }}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
            </div>
            <div class=\"ms-3\">
                <h6 class=\"mb-0\">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class=\"navbar-nav w-100\">
            <a href=\"{{ path('app_admin') }}\" class=\"nav-item nav-link active\"><i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Elements</a>
                <div class=\"dropdown-menu bg-transparent border-0\">
                    <a href=\"{{ path('app_buttons') }}\" class=\"dropdown-item\">Buttons</a>
                    <a href=\"{{ path('app_typography') }}\" class=\"dropdown-item\">Typography</a>
                    <a href=\"{{ path('app_other_elements') }}\" class=\"dropdown-item\">Other Elements</a>
                </div>
            </div>
            <a href=\"{{ path('app_widgets') }}\" class=\"nav-item nav-link\"><i class=\"fa fa-th me-2\"></i>Widgets</a>
            <a href=\"{{ path('app_forms') }}\" class=\"nav-item nav-link\"><i class=\"fa fa-keyboard me-2\"></i>Forms</a>
            <a href=\"{{ path('app_tables') }}\" class=\"nav-item nav-link\"><i class=\"fa fa-table me-2\"></i>Tables</a>
            <a href=\"{{ path('app_charts') }}\" class=\"nav-item nav-link\"><i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"far fa-file-alt me-2\"></i>Pages</a>
                <div class=\"dropdown-menu bg-transparent border-0\">
                    <a href=\"{{ path('app_signin') }}\" class=\"dropdown-item\">Sign In</a>
                    <a href=\"{{ path('app_signup') }}\" class=\"dropdown-item\">Sign Up</a>
                    <a href=\"{{ path('app_404_admin') }}\" class=\"dropdown-item\">404 Error</a>
                    <a href=\"{{ path('app_appointment') }}\" class=\"dropdown-item\">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->

 <div class=\"content\">
            <!-- Navbar Start -->
            <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
                <a href=\"{{ path('app_admin') }}\" class=\"navbar-brand d-flex d-lg-none me-4\">
                    <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
                </a>
                <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                    <i class=\"fa fa-bars\"></i>
                </a>
                <form class=\"d-none d-md-flex ms-4\">
                    <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
                </form>
                <div class=\"navbar-nav align-items-center ms-auto\">
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Message</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"{{ asset('img/user.jpg') }}\"alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"{{ asset('img/user.jpg') }}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"{{ asset('img/user.jpg') }}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Notificatin</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <img class=\"rounded-circle me-lg-2\" src=\"{{ asset('img/user.jpg') }}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <span class=\"d-none d-lg-inline-flex\">John Doe</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">My Profile</a>
                            <a href=\"#\" class=\"dropdown-item\">Settings</a>
                            <a href=\"#\" class=\"dropdown-item\">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


{% block body %}

{% endblock %}

             <!-- Footer Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light rounded-top p-4\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                            &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                            Designed By <a href=\"https://htmlcodex.com\">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div> 
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>
    {% block javascript %}

  <!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('lib/chart/chart.min.js') }}\"></script>
<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('lib/tempusdominus/js/moment.min.js') }}\"></script>
<script src=\"{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
<script src=\"{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>

<!-- Template Javascript -->
 <script src=\"{{ asset('js/admin.js') }}\"></script>
 
        {% endblock %}

</body>

</html>", "base_admin.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\base_admin.html.twig");
    }
}
