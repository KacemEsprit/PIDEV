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

/* admin_home/table.html.twig */
class __TwigTemplate_86c5e081d4dc5b7bf388acb10821cc24 extends Template
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
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/table.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "admin_home/table.html.twig", 1);
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
            <!-- Table Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Table</h6>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Accented Table</h6>
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Hoverable Table</h6>
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Color Table</h6>
                            <table class=\"table table-dark\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Bordered Table</h6>
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Table Without Border</h6>
                            <table class=\"table table-borderless\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Responsive Table</h6>
                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\">#</th>
                                            <th scope=\"col\">First Name</th>
                                            <th scope=\"col\">Last Name</th>
                                            <th scope=\"col\">Email</th>
                                            <th scope=\"col\">Country</th>
                                            <th scope=\"col\">ZIP</th>
                                            <th scope=\"col\">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope=\"row\">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                            <td>UK</td>
                                            <td>456</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">3</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                            <td>AU</td>
                                            <td>789</td>
                                            <td>Member</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->

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
        return "admin_home/table.html.twig";
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
        return array (  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_admin.html.twig' %}
{% block body %}

            <!-- Table Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Table</h6>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Accented Table</h6>
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Hoverable Table</h6>
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Color Table</h6>
                            <table class=\"table table-dark\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Bordered Table</h6>
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Table Without Border</h6>
                            <table class=\"table table-borderless\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First Name</th>
                                        <th scope=\"col\">Last Name</th>
                                        <th scope=\"col\">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Responsive Table</h6>
                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\">#</th>
                                            <th scope=\"col\">First Name</th>
                                            <th scope=\"col\">Last Name</th>
                                            <th scope=\"col\">Email</th>
                                            <th scope=\"col\">Country</th>
                                            <th scope=\"col\">ZIP</th>
                                            <th scope=\"col\">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope=\"row\">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                            <td>UK</td>
                                            <td>456</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">3</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                            <td>AU</td>
                                            <td>789</td>
                                            <td>Member</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->

        {% endblock %}", "admin_home/table.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\admin_home\\table.html.twig");
    }
}
