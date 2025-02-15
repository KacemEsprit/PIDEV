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

/* admin_home/widget.html.twig */
class __TwigTemplate_3a7eb6e5e688ee7e02b6f74d99927911 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/widget.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "admin_home/widget.html.twig", 1);
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
        yield "            <!-- Chart Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <h6 class=\"mb-0\">Messages</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
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
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Testimonial</h6>
                            <div class=\"owl-carousel testimonial-carousel\">
                                <div class=\"testimonial-item text-center\">
                                    <img class=\"img-fluid rounded-circle mx-auto mb-4\" src=\"img/testimonial-1.jpg\" style=\"width: 100px; height: 100px;\">
                                    <h5 class=\"mb-1\">Client Name</h5>
                                    <p>Profession</p>
                                    <p class=\"mb-0\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                </div>
                                <div class=\"testimonial-item text-center\">
                                    <img class=\"img-fluid rounded-circle mx-auto mb-4\" src=\"img/testimonial-2.jpg\" style=\"width: 100px; height: 100px;\">
                                    <h5 class=\"mb-1\">Client Name</h5>
                                    <p>Profession</p>
                                    <p class=\"mb-0\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <iframe class=\"position-relative rounded w-100 h-100\"
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                            frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                            tabindex=\"0\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart End -->
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
        return "admin_home/widget.html.twig";
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
            <!-- Chart Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <h6 class=\"mb-0\">Messages</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
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
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Testimonial</h6>
                            <div class=\"owl-carousel testimonial-carousel\">
                                <div class=\"testimonial-item text-center\">
                                    <img class=\"img-fluid rounded-circle mx-auto mb-4\" src=\"img/testimonial-1.jpg\" style=\"width: 100px; height: 100px;\">
                                    <h5 class=\"mb-1\">Client Name</h5>
                                    <p>Profession</p>
                                    <p class=\"mb-0\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                </div>
                                <div class=\"testimonial-item text-center\">
                                    <img class=\"img-fluid rounded-circle mx-auto mb-4\" src=\"img/testimonial-2.jpg\" style=\"width: 100px; height: 100px;\">
                                    <h5 class=\"mb-1\">Client Name</h5>
                                    <p>Profession</p>
                                    <p class=\"mb-0\">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <iframe class=\"position-relative rounded w-100 h-100\"
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                            frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                            tabindex=\"0\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart End -->
        {% endblock %}", "admin_home/widget.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\admin_home\\widget.html.twig");
    }
}
