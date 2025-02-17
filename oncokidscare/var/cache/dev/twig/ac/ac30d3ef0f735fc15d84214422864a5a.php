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

/* home/contact.html.twig */
class __TwigTemplate_d4ce6259e439b672936f8676c0cb4377 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Contact Us</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-4\">
                    <div class=\"h-100 bg-light rounded d-flex align-items-center p-5\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-map-marker-alt text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Address</p>
                            <h5 class=\"mb-0\">123 Street, New York, USA</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"h-100 bg-light rounded d-flex align-items-center p-5\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-phone-alt text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Call Us Now</p>
                            <h5 class=\"mb-0\">+012 345 6789</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"h-100 bg-light rounded d-flex align-items-center p-5\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-envelope-open text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Mail Us Now</p>
                            <h5 class=\"mb-0\">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                    <div class=\"bg-light rounded p-5\">
                        <p class=\"d-inline-block border rounded-pill py-1 px-4\">Contact Us</p>
                        <h1 class=\"mb-4\">Have Any Query? Please Contact Us!</h1>
                        <p class=\"mb-4\">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href=\"https://htmlcodex.com/contact-form\">Download Now</a>.</p>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                        <label for=\"name\">Your Name</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
                                        <label for=\"email\">Your Email</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject\">
                                        <label for=\"subject\">Subject</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        <textarea class=\"form-control\" placeholder=\"Leave a message here\" id=\"message\" style=\"height: 100px\"></textarea>
                                        <label for=\"message\">Message</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"h-100\" style=\"min-height: 400px;\">
                        <iframe class=\"rounded w-100 h-100\"
                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                        frameborder=\"0\" allowfullscreen=\"\" aria-hidden=\"false\"
                        tabindex=\"0\"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
        return "home/contact.html.twig";
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
        return new Source("    {% extends 'base.html.twig' %}
{% block body %}
        


    <!-- Page Header Start -->
    <div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Contact Us</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-4\">
                    <div class=\"h-100 bg-light rounded d-flex align-items-center p-5\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-map-marker-alt text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Address</p>
                            <h5 class=\"mb-0\">123 Street, New York, USA</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"h-100 bg-light rounded d-flex align-items-center p-5\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-phone-alt text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Call Us Now</p>
                            <h5 class=\"mb-0\">+012 345 6789</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"h-100 bg-light rounded d-flex align-items-center p-5\">
                        <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-envelope-open text-primary\"></i>
                        </div>
                        <div class=\"ms-4\">
                            <p class=\"mb-2\">Mail Us Now</p>
                            <h5 class=\"mb-0\">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                    <div class=\"bg-light rounded p-5\">
                        <p class=\"d-inline-block border rounded-pill py-1 px-4\">Contact Us</p>
                        <h1 class=\"mb-4\">Have Any Query? Please Contact Us!</h1>
                        <p class=\"mb-4\">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href=\"https://htmlcodex.com/contact-form\">Download Now</a>.</p>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                        <label for=\"name\">Your Name</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
                                        <label for=\"email\">Your Email</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject\">
                                        <label for=\"subject\">Subject</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        <textarea class=\"form-control\" placeholder=\"Leave a message here\" id=\"message\" style=\"height: 100px\"></textarea>
                                        <label for=\"message\">Message</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"h-100\" style=\"min-height: 400px;\">
                        <iframe class=\"rounded w-100 h-100\"
                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                        frameborder=\"0\" allowfullscreen=\"\" aria-hidden=\"false\"
                        tabindex=\"0\"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


        {% endblock %}", "home/contact.html.twig", "C:\\PIDEV\\oncokidscare\\templates\\home\\contact.html.twig");
    }
}
