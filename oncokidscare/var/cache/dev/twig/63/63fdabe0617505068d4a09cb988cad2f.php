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

/* admin_home/index.html.twig */
class __TwigTemplate_645f424cc3b285e80ae421ab7a2ebe16 extends Template
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
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/index.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "admin_home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Admin - OncoKidsCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
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
        yield "             <!-- Sale & Revenue Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Donateurs</p>
                                <h6 class=\"mb-0\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["donateurs"]) || array_key_exists("donateurs", $context) ? $context["donateurs"] : (function () { throw new RuntimeError('Variable "donateurs" does not exist.', 12, $this->source); })())), "html", null, true);
        yield "</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Patients</p>
                                <h6 class=\"mb-0\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 21, $this->source); })())), "html", null, true);
        yield "</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Médecins</p>
                                <h6 class=\"mb-0\"> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["medecins"]) || array_key_exists("medecins", $context) ? $context["medecins"] : (function () { throw new RuntimeError('Variable "medecins" does not exist.', 30, $this->source); })())), "html", null, true);
        yield "</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Admins</p>
                                <h6 class=\"mb-0\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 39, $this->source); })())), "html", null, true);
        yield "</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Worldwide Sales</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"worldwide-sales\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Salse & Revenue</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"salse-revenue\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">Recent Salse</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                            <thead>
                                <tr class=\"text-dark\">
                                    <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Invoice</th>
                                    <th scope=\"col\">Customer</th>
                                    <th scope=\"col\">Amount</th>
                                    <th scope=\"col\">Status</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <h6 class=\"mb-0\">Messages</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Calender</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div id=\"calender\"></div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">To Do List</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <input class=\"form-control bg-transparent\" type=\"text\" placeholder=\"Enter task\">
                                <button type=\"button\" class=\"btn btn-primary ms-2\">Add</button>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\" checked>
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span><del>Short task goes here...</del></span>
                                        <button class=\"btn btn-sm text-primary\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card main-card\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-end mb-3\">
                        <a href=\"";
        // line 276
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-danger\">
                            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                        </a>
                    </div>
                    <i class=\"fas fa-user-shield icon-large mb-3\"></i>
                    <h1 class=\"display-4\">Je suis Admin</h1>
                    <p class=\"lead\">Bienvenue ";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 282, $this->source); })()), "prenom", [], "any", false, false, false, 282), "html", null, true);
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 282, $this->source); })()), "nom", [], "any", false, false, false, 282), "html", null, true);
        yield "</p>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-user-md icon-large\"></i>
                <h3>";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["medecins"]) || array_key_exists("medecins", $context) ? $context["medecins"] : (function () { throw new RuntimeError('Variable "medecins" does not exist.', 293, $this->source); })())), "html", null, true);
        yield "</h3>
                <p>Médecins</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-procedures icon-large\"></i>
                <h3>";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 300, $this->source); })())), "html", null, true);
        yield "</h3>
                <p>Patients</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-hand-holding-heart icon-large\"></i>
                <h3>";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["donateurs"]) || array_key_exists("donateurs", $context) ? $context["donateurs"] : (function () { throw new RuntimeError('Variable "donateurs" does not exist.', 307, $this->source); })())), "html", null, true);
        yield "</h3>
                <p>Donateurs</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-users-cog icon-large\"></i>
                <h3>";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 314, $this->source); })())), "html", null, true);
        yield "</h3>
                <p>Admins</p>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-tasks me-2\"></i>
                        Actions Rapides
                    </h5>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-user-plus me-2\"></i>
                            Ajouter un Médecin
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-calendar-plus me-2\"></i>
                            Gérer les Rendez-vous
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-chart-line me-2\"></i>
                            Voir les Statistiques
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-bell me-2\"></i>
                        Notifications Récentes
                    </h5>
                    <div class=\"list-group\">
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-user-plus me-2\"></i>
                            Nouveau patient enregistré
                            <small class=\"text-muted d-block\">Il y a 2 heures</small>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-calendar-check me-2\"></i>
                            5 nouveaux rendez-vous aujourd'hui
                            <small class=\"text-muted d-block\">Il y a 3 heures</small>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-hand-holding-heart me-2\"></i>
                            Nouvelle donation reçue
                            <small class=\"text-muted d-block\">Il y a 5 heures</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        return "admin_home/index.html.twig";
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
        return array (  453 => 314,  443 => 307,  433 => 300,  423 => 293,  407 => 282,  398 => 276,  307 => 188,  294 => 178,  281 => 168,  268 => 158,  146 => 39,  134 => 30,  122 => 21,  110 => 12,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_admin.html.twig' %}
{% block title %}Admin - OncoKidsCare{% endblock %}
{% block body %}
             <!-- Sale & Revenue Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Donateurs</p>
                                <h6 class=\"mb-0\">{{ donateurs|length }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Patients</p>
                                <h6 class=\"mb-0\">{{ patients|length }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Médecins</p>
                                <h6 class=\"mb-0\"> {{ medecins|length }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Admins</p>
                                <h6 class=\"mb-0\">{{ admins|length }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Worldwide Sales</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"worldwide-sales\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Salse & Revenue</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"salse-revenue\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">Recent Salse</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                            <thead>
                                <tr class=\"text-dark\">
                                    <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Invoice</th>
                                    <th scope=\"col\">Customer</th>
                                    <th scope=\"col\">Amount</th>
                                    <th scope=\"col\">Status</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <h6 class=\"mb-0\">Messages</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"{{ asset('img/user.jpg') }}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"{{ asset('img/user.jpg') }}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"{{ asset('img/user.jpg') }}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"{{ asset('img/user.jpg') }}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Calender</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div id=\"calender\"></div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">To Do List</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <input class=\"form-control bg-transparent\" type=\"text\" placeholder=\"Enter task\">
                                <button type=\"button\" class=\"btn btn-primary ms-2\">Add</button>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\" checked>
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span><del>Short task goes here...</del></span>
                                        <button class=\"btn btn-sm text-primary\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card main-card\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-end mb-3\">
                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\">
                            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                        </a>
                    </div>
                    <i class=\"fas fa-user-shield icon-large mb-3\"></i>
                    <h1 class=\"display-4\">Je suis Admin</h1>
                    <p class=\"lead\">Bienvenue {{ user.prenom }}  {{ user.nom }}</p>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-user-md icon-large\"></i>
                <h3>{{ medecins|length }}</h3>
                <p>Médecins</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-procedures icon-large\"></i>
                <h3>{{ patients|length }}</h3>
                <p>Patients</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-hand-holding-heart icon-large\"></i>
                <h3>{{ donateurs|length }}</h3>
                <p>Donateurs</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-users-cog icon-large\"></i>
                <h3>{{ admins|length }}</h3>
                <p>Admins</p>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-tasks me-2\"></i>
                        Actions Rapides
                    </h5>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-user-plus me-2\"></i>
                            Ajouter un Médecin
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-calendar-plus me-2\"></i>
                            Gérer les Rendez-vous
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-chart-line me-2\"></i>
                            Voir les Statistiques
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-bell me-2\"></i>
                        Notifications Récentes
                    </h5>
                    <div class=\"list-group\">
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-user-plus me-2\"></i>
                            Nouveau patient enregistré
                            <small class=\"text-muted d-block\">Il y a 2 heures</small>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-calendar-check me-2\"></i>
                            5 nouveaux rendez-vous aujourd'hui
                            <small class=\"text-muted d-block\">Il y a 3 heures</small>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-hand-holding-heart me-2\"></i>
                            Nouvelle donation reçue
                            <small class=\"text-muted d-block\">Il y a 5 heures</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "admin_home/index.html.twig", "C:\\PIDEV\\oncokidscare\\templates\\admin_home\\index.html.twig");
    }
}
