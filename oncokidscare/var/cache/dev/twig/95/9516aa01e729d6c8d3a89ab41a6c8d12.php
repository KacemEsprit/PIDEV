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

/* admin_home/button.html.twig */
class __TwigTemplate_8fb95dd717abbcca52f12a48a6c3df1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/button.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "admin_home/button.html.twig", 1);
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

            <!-- Button Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-primary m-2\">Primary</button>
                                <button type=\"button\" class=\"btn btn-secondary m-2\">Secondary</button>
                                <button type=\"button\" class=\"btn btn-success m-2\">Success</button>
                                <button type=\"button\" class=\"btn btn-danger m-2\">Danger</button>
                                <button type=\"button\" class=\"btn btn-warning m-2\">Warning</button>
                                <button type=\"button\" class=\"btn btn-info m-2\">Info</button>
                                <button type=\"button\" class=\"btn btn-light m-2\">Light</button>
                                <button type=\"button\" class=\"btn btn-dark m-2\">Dark</button>
                                <button type=\"button\" class=\"btn btn-link m-2\">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Outline Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-outline-primary m-2\">Primary</button>
                                <button type=\"button\" class=\"btn btn-outline-secondary m-2\">Secondary</button>
                                <button type=\"button\" class=\"btn btn-outline-success m-2\">Success</button>
                                <button type=\"button\" class=\"btn btn-outline-danger m-2\">Danger</button>
                                <button type=\"button\" class=\"btn btn-outline-warning m-2\">Warning</button>
                                <button type=\"button\" class=\"btn btn-outline-info m-2\">Info</button>
                                <button type=\"button\" class=\"btn btn-outline-light m-2\">Light</button>
                                <button type=\"button\" class=\"btn btn-outline-dark m-2\">Dark</button>
                                <button type=\"button\" class=\"btn btn-outline-link m-2\">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Rounded Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-primary rounded-pill m-2\">Primary</button>
                                <button type=\"button\" class=\"btn btn-secondary rounded-pill m-2\">Secondary</button>
                                <button type=\"button\" class=\"btn btn-success rounded-pill m-2\">Success</button>
                                <button type=\"button\" class=\"btn btn-danger rounded-pill m-2\">Danger</button>
                                <button type=\"button\" class=\"btn btn-warning rounded-pill m-2\">Warning</button>
                                <button type=\"button\" class=\"btn btn-info rounded-pill m-2\">Info</button>
                                <button type=\"button\" class=\"btn btn-light rounded-pill m-2\">Light</button>
                                <button type=\"button\" class=\"btn btn-dark rounded-pill m-2\">Dark</button>
                                <button type=\"button\" class=\"btn btn-link rounded-pill m-2\">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Buttons Size</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-lg btn-primary m-2\">Large Button (btn-lg)</button>
                                <button type=\"button\" class=\"btn btn-lg btn-secondary m-2\">Large Button (btn-lg)</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary m-2\">Small Button (btn-sm)</button>
                                <button type=\"button\" class=\"btn btn-sm btn-secondary m-2\">Small Button (btn-sm)</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Icon Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-square btn-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-secondary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-success m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-success m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-danger m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-danger m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-warning m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-warning m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-info m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-info m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-dark m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-dark m-2\"><i class=\"fa fa-home\"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Icon Buttons Size</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-lg btn-lg-square btn-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-lg btn-lg-square btn-outline-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-sm btn-sm-square btn-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-sm btn-sm-square btn-outline-primary m-2\"><i class=\"fa fa-home\"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Icon & Text Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-primary m-2\"><i class=\"fa fa-home me-2\"></i>Icon Left</button>
                                <button type=\"button\" class=\"btn btn-outline-primary m-2\"><i class=\"fa fa-home me-2\"></i>Icon Left</button>
                                <button type=\"button\" class=\"btn btn-primary m-2\">Icon Right<i class=\"fa fa-home ms-2\"></i></button>
                                <button type=\"button\" class=\"btn btn-outline-primary m-2\">Icon Right<i class=\"fa fa-home ms-2\"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Block Buttons</h6>
                            <div class=\"m-n2\">
                                <button class=\"btn btn-primary w-100 m-2\" type=\"button\">Button</button>
                                <button class=\"btn btn-outline-primary w-100 m-2\" type=\"button\">Button</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-primary\">Left</button>
                                <button type=\"button\" class=\"btn btn-primary\">Middle</button>
                                <button type=\"button\" class=\"btn btn-primary\">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Mixed Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-danger\">Left</button>
                                <button type=\"button\" class=\"btn btn-warning\">Middle</button>
                                <button type=\"button\" class=\"btn btn-success\">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Outlined Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-outline-primary\">Left</button>
                                <button type=\"button\" class=\"btn btn-outline-primary\">Middle</button>
                                <button type=\"button\" class=\"btn btn-outline-primary\">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Checkbox Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck1\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck1\">Checkbox 1</label>

                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck2\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck2\">Checkbox 2</label>

                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck3\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck3\">Checkbox 3</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Radio Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio1\" autocomplete=\"off\"
                                    checked>
                                <label class=\"btn btn-outline-primary\" for=\"btnradio1\">Radio 1</label>

                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio2\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btnradio2\">Radio 2</label>

                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio3\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btnradio3\">Radio 3</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Button Toolbar</h6>
                            <div class=\"btn-toolbar\" role=\"toolbar\">
                                <div class=\"btn-group me-2\" role=\"group\" aria-label=\"First group\">
                                    <button type=\"button\" class=\"btn btn-primary\">1</button>
                                    <button type=\"button\" class=\"btn btn-primary\">2</button>
                                    <button type=\"button\" class=\"btn btn-primary\">3</button>
                                    <button type=\"button\" class=\"btn btn-primary\">4</button>
                                </div>
                                <div class=\"btn-group me-2\" role=\"group\" aria-label=\"Second group\">
                                    <button type=\"button\" class=\"btn btn-secondary\">5</button>
                                    <button type=\"button\" class=\"btn btn-secondary\">6</button>
                                    <button type=\"button\" class=\"btn btn-secondary\">7</button>
                                </div>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Third group\">
                                    <button type=\"button\" class=\"btn btn-info\">8</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Vertical Button Group</h6>
                            <div class=\"btn-group-vertical me-2\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-primary\">Left</button>
                                <button type=\"button\" class=\"btn btn-primary\">Middle</button>
                                <button type=\"button\" class=\"btn btn-primary\">Right</button>
                            </div>
                            <div class=\"btn-group-vertical\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-danger\">Left</button>
                                <button type=\"button\" class=\"btn btn-warning\">Middle</button>
                                <button type=\"button\" class=\"btn btn-success\">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Vertical Button Group (Checkbox & Radio)</h6>
                            <div class=\"btn-group-vertical me-2\" role=\"group\">
                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck1\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck1\">Checkbox 1</label>

                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck2\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck2\">Checkbox 2</label>

                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck3\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck3\">Checkbox 3</label>
                            </div>
                            <div class=\"btn-group-vertical\" role=\"group\">
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio1\" autocomplete=\"off\"
                                    checked>
                                <label class=\"btn btn-outline-primary\" for=\"btnradio1\">Radio 1</label>

                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio2\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btnradio2\">Radio 2</label>

                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio3\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btnradio3\">Radio 3</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button End -->


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
        return "admin_home/button.html.twig";
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


            <!-- Button Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-primary m-2\">Primary</button>
                                <button type=\"button\" class=\"btn btn-secondary m-2\">Secondary</button>
                                <button type=\"button\" class=\"btn btn-success m-2\">Success</button>
                                <button type=\"button\" class=\"btn btn-danger m-2\">Danger</button>
                                <button type=\"button\" class=\"btn btn-warning m-2\">Warning</button>
                                <button type=\"button\" class=\"btn btn-info m-2\">Info</button>
                                <button type=\"button\" class=\"btn btn-light m-2\">Light</button>
                                <button type=\"button\" class=\"btn btn-dark m-2\">Dark</button>
                                <button type=\"button\" class=\"btn btn-link m-2\">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Outline Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-outline-primary m-2\">Primary</button>
                                <button type=\"button\" class=\"btn btn-outline-secondary m-2\">Secondary</button>
                                <button type=\"button\" class=\"btn btn-outline-success m-2\">Success</button>
                                <button type=\"button\" class=\"btn btn-outline-danger m-2\">Danger</button>
                                <button type=\"button\" class=\"btn btn-outline-warning m-2\">Warning</button>
                                <button type=\"button\" class=\"btn btn-outline-info m-2\">Info</button>
                                <button type=\"button\" class=\"btn btn-outline-light m-2\">Light</button>
                                <button type=\"button\" class=\"btn btn-outline-dark m-2\">Dark</button>
                                <button type=\"button\" class=\"btn btn-outline-link m-2\">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Rounded Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-primary rounded-pill m-2\">Primary</button>
                                <button type=\"button\" class=\"btn btn-secondary rounded-pill m-2\">Secondary</button>
                                <button type=\"button\" class=\"btn btn-success rounded-pill m-2\">Success</button>
                                <button type=\"button\" class=\"btn btn-danger rounded-pill m-2\">Danger</button>
                                <button type=\"button\" class=\"btn btn-warning rounded-pill m-2\">Warning</button>
                                <button type=\"button\" class=\"btn btn-info rounded-pill m-2\">Info</button>
                                <button type=\"button\" class=\"btn btn-light rounded-pill m-2\">Light</button>
                                <button type=\"button\" class=\"btn btn-dark rounded-pill m-2\">Dark</button>
                                <button type=\"button\" class=\"btn btn-link rounded-pill m-2\">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Buttons Size</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-lg btn-primary m-2\">Large Button (btn-lg)</button>
                                <button type=\"button\" class=\"btn btn-lg btn-secondary m-2\">Large Button (btn-lg)</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary m-2\">Small Button (btn-sm)</button>
                                <button type=\"button\" class=\"btn btn-sm btn-secondary m-2\">Small Button (btn-sm)</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Icon Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-square btn-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-secondary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-success m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-success m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-danger m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-danger m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-warning m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-warning m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-info m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-info m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-dark m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-dark m-2\"><i class=\"fa fa-home\"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Icon Buttons Size</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-lg btn-lg-square btn-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-lg btn-lg-square btn-outline-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-square btn-outline-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-sm btn-sm-square btn-primary m-2\"><i class=\"fa fa-home\"></i></button>
                                <button type=\"button\" class=\"btn btn-sm btn-sm-square btn-outline-primary m-2\"><i class=\"fa fa-home\"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Icon & Text Buttons</h6>
                            <div class=\"m-n2\">
                                <button type=\"button\" class=\"btn btn-primary m-2\"><i class=\"fa fa-home me-2\"></i>Icon Left</button>
                                <button type=\"button\" class=\"btn btn-outline-primary m-2\"><i class=\"fa fa-home me-2\"></i>Icon Left</button>
                                <button type=\"button\" class=\"btn btn-primary m-2\">Icon Right<i class=\"fa fa-home ms-2\"></i></button>
                                <button type=\"button\" class=\"btn btn-outline-primary m-2\">Icon Right<i class=\"fa fa-home ms-2\"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Block Buttons</h6>
                            <div class=\"m-n2\">
                                <button class=\"btn btn-primary w-100 m-2\" type=\"button\">Button</button>
                                <button class=\"btn btn-outline-primary w-100 m-2\" type=\"button\">Button</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-primary\">Left</button>
                                <button type=\"button\" class=\"btn btn-primary\">Middle</button>
                                <button type=\"button\" class=\"btn btn-primary\">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Mixed Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-danger\">Left</button>
                                <button type=\"button\" class=\"btn btn-warning\">Middle</button>
                                <button type=\"button\" class=\"btn btn-success\">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Outlined Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-outline-primary\">Left</button>
                                <button type=\"button\" class=\"btn btn-outline-primary\">Middle</button>
                                <button type=\"button\" class=\"btn btn-outline-primary\">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Checkbox Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck1\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck1\">Checkbox 1</label>

                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck2\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck2\">Checkbox 2</label>

                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck3\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck3\">Checkbox 3</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Radio Button Group</h6>
                            <div class=\"btn-group\" role=\"group\">
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio1\" autocomplete=\"off\"
                                    checked>
                                <label class=\"btn btn-outline-primary\" for=\"btnradio1\">Radio 1</label>

                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio2\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btnradio2\">Radio 2</label>

                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio3\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btnradio3\">Radio 3</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Button Toolbar</h6>
                            <div class=\"btn-toolbar\" role=\"toolbar\">
                                <div class=\"btn-group me-2\" role=\"group\" aria-label=\"First group\">
                                    <button type=\"button\" class=\"btn btn-primary\">1</button>
                                    <button type=\"button\" class=\"btn btn-primary\">2</button>
                                    <button type=\"button\" class=\"btn btn-primary\">3</button>
                                    <button type=\"button\" class=\"btn btn-primary\">4</button>
                                </div>
                                <div class=\"btn-group me-2\" role=\"group\" aria-label=\"Second group\">
                                    <button type=\"button\" class=\"btn btn-secondary\">5</button>
                                    <button type=\"button\" class=\"btn btn-secondary\">6</button>
                                    <button type=\"button\" class=\"btn btn-secondary\">7</button>
                                </div>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Third group\">
                                    <button type=\"button\" class=\"btn btn-info\">8</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Vertical Button Group</h6>
                            <div class=\"btn-group-vertical me-2\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-primary\">Left</button>
                                <button type=\"button\" class=\"btn btn-primary\">Middle</button>
                                <button type=\"button\" class=\"btn btn-primary\">Right</button>
                            </div>
                            <div class=\"btn-group-vertical\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-danger\">Left</button>
                                <button type=\"button\" class=\"btn btn-warning\">Middle</button>
                                <button type=\"button\" class=\"btn btn-success\">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Vertical Button Group (Checkbox & Radio)</h6>
                            <div class=\"btn-group-vertical me-2\" role=\"group\">
                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck1\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck1\">Checkbox 1</label>

                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck2\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck2\">Checkbox 2</label>

                                <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck3\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btncheck3\">Checkbox 3</label>
                            </div>
                            <div class=\"btn-group-vertical\" role=\"group\">
                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio1\" autocomplete=\"off\"
                                    checked>
                                <label class=\"btn btn-outline-primary\" for=\"btnradio1\">Radio 1</label>

                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio2\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btnradio2\">Radio 2</label>

                                <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio3\" autocomplete=\"off\">
                                <label class=\"btn btn-outline-primary\" for=\"btnradio3\">Radio 3</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button End -->


                  {% endblock %}", "admin_home/button.html.twig", "C:\\PIDEV\\oncokidscare\\templates\\admin_home\\button.html.twig");
    }
}
