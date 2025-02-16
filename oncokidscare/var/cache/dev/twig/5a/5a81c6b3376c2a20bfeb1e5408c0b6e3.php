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

/* admin_home/form.html.twig */
class __TwigTemplate_a12a23558152e450889a4be185d53128 extends Template
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
        // line 2
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_home/form.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "admin_home/form.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "
            <!-- Form Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Form</h6>
                            <form>
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>
                                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                        aria-describedby=\"emailHelp\">
                                    <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>
                                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                                </div>
                                <div class=\"mb-3 form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                    <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Horizontal Form</h6>
                            <form>
                                <div class=\"row mb-3\">
                                    <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"inputEmail3\">
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Password</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" class=\"form-control\" id=\"inputPassword3\">
                                    </div>
                                </div>
                                <fieldset class=\"row mb-3\">
                                    <legend class=\"col-form-label col-sm-2 pt-0\">Radios</legend>
                                    <div class=\"col-sm-10\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"gridRadios\"
                                                id=\"gridRadios1\" value=\"option1\" checked>
                                            <label class=\"form-check-label\" for=\"gridRadios1\">
                                                First radio
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"gridRadios\"
                                                id=\"gridRadios2\" value=\"option2\">
                                            <label class=\"form-check-label\" for=\"gridRadios2\">
                                                Second radio
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class=\"row mb-3\">
                                    <legend class=\"col-form-label col-sm-2 pt-0\">Checkbox</legend>
                                    <div class=\"col-sm-10\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck1\">
                                            <label class=\"form-check-label\" for=\"gridCheck1\">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Floating Label</h6>
                            <div class=\"form-floating mb-3\">
                                <input type=\"email\" class=\"form-control\" id=\"floatingInput\"
                                    placeholder=\"name@example.com\">
                                <label for=\"floatingInput\">Email address</label>
                            </div>
                            <div class=\"form-floating mb-3\">
                                <input type=\"password\" class=\"form-control\" id=\"floatingPassword\"
                                    placeholder=\"Password\">
                                <label for=\"floatingPassword\">Password</label>
                            </div>
                            <div class=\"form-floating mb-3\">
                                <select class=\"form-select\" id=\"floatingSelect\"
                                    aria-label=\"Floating label select example\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                                <label for=\"floatingSelect\">Works with selects</label>
                            </div>
                            <div class=\"form-floating\">
                                <textarea class=\"form-control\" placeholder=\"Leave a comment here\"
                                    id=\"floatingTextarea\" style=\"height: 150px;\"></textarea>
                                <label for=\"floatingTextarea\">Comments</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">File Input</h6>
                            <div class=\"mb-3\">
                                <label for=\"formFile\" class=\"form-label\">Default file input example</label>
                                <input class=\"form-control\" type=\"file\" id=\"formFile\">
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"formFileMultiple\" class=\"form-label\">Multiple files input example</label>
                                <input class=\"form-control\" type=\"file\" id=\"formFileMultiple\" multiple>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"formFileSm\" class=\"form-label\">Small file input example</label>
                                <input class=\"form-control form-control-sm\" id=\"formFileSm\" type=\"file\">
                            </div>
                            <div>
                                <label for=\"formFileLg\" class=\"form-label\">Large file input example</label>
                                <input class=\"form-control form-control-lg\" id=\"formFileLg\" type=\"file\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Select</h6>
                            <select class=\"form-select form-select-sm mb-3\" aria-label=\".form-select-sm example\">
                                <option selected>Open this select menu</option>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                            </select>
                            <select class=\"form-select mb-3\" aria-label=\"Default select example\">
                                <option selected>Open this select menu</option>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                            </select>
                            <select class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\">
                                <option selected>Open this select menu</option>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                            </select>
                            <select class=\"form-select\" multiple aria-label=\"multiple select example\">
                                <option selected>Open this select menu</option>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Check, Radio & Switch</h6>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                                <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                    Default checkbox
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckChecked\" checked>
                                <label class=\"form-check-label\" for=\"flexCheckChecked\">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\">
                                <label class=\"form-check-label\" for=\"inlineCheckbox1\">1</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\">
                                <label class=\"form-check-label\" for=\"inlineCheckbox2\">2</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"
                                    disabled>
                                <label class=\"form-check-label\" for=\"inlineCheckbox3\">3 (disabled)</label>
                            </div>
                            <hr>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"flexRadioDefault\"
                                    id=\"flexRadioDefault1\">
                                <label class=\"form-check-label\" for=\"flexRadioDefault1\">
                                    Default radio
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"flexRadioDefault\"
                                    id=\"flexRadioDefault2\" checked>
                                <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                    Default checked radio
                                </label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio1\"
                                    value=\"option1\">
                                <label class=\"form-check-label\" for=\"inlineRadio1\">1</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio2\"
                                    value=\"option2\">
                                <label class=\"form-check-label\" for=\"inlineRadio2\">2</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio3\"
                                    value=\"option3\" disabled>
                                <label class=\"form-check-label\" for=\"inlineRadio3\">3 (disabled)</label>
                            </div>
                            <hr>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\"
                                    id=\"flexSwitchCheckDefault\">
                                <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Default switch checkbox
                                    input</label>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\"
                                    id=\"flexSwitchCheckChecked\" checked>
                                <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\">Checked switch checkbox
                                    input</label>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\"
                                    id=\"flexSwitchCheckDisabled\" disabled>
                                <label class=\"form-check-label\" for=\"flexSwitchCheckDisabled\">Disabled switch checkbox
                                    input</label>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\"
                                    id=\"flexSwitchCheckCheckedDisabled\" checked disabled>
                                <label class=\"form-check-label\" for=\"flexSwitchCheckCheckedDisabled\">Disabled checked
                                    switch checkbox input</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Input Group</h6>
                            <div class=\"input-group mb-3\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">@</span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\"
                                    aria-describedby=\"basic-addon1\">
                            </div>
                            <div class=\"input-group mb-3\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Recipient's username\"
                                    aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                <span class=\"input-group-text\" id=\"basic-addon2\">@example.com</span>
                            </div>
                            <label for=\"basic-url\" class=\"form-label\">Your vanity URL</label>
                            <div class=\"input-group mb-3\">
                                <span class=\"input-group-text\" id=\"basic-addon3\">https://example.com/users/</span>
                                <input type=\"text\" class=\"form-control\" id=\"basic-url\" aria-describedby=\"basic-addon3\">
                            </div>
                            <div class=\"input-group mb-3\">
                                <span class=\"input-group-text\">\$</span>
                                <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
                                <span class=\"input-group-text\">.00</span>
                            </div>
                            <div class=\"input-group mb-3\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\">
                                <span class=\"input-group-text\">@</span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Server\" aria-label=\"Server\">
                            </div>
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">With textarea</span>
                                <textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Sizing</h6>
                            <input class=\"form-control form-control-lg mb-3\" type=\"text\" placeholder=\".form-control-lg\"
                                aria-label=\".form-control-lg example\">
                            <input class=\"form-control mb-3\" type=\"text\" placeholder=\"Default input\"
                                aria-label=\"default input example\">
                            <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\".form-control-sm\"
                                aria-label=\".form-control-sm example\">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->

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
        return "admin_home/form.html.twig";
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
        return array (  76 => 4,  63 => 3,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base_admin.html.twig' %}
{% block body %}

            <!-- Form Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Form</h6>
                            <form>
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>
                                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                        aria-describedby=\"emailHelp\">
                                    <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>
                                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                                </div>
                                <div class=\"mb-3 form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                    <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Horizontal Form</h6>
                            <form>
                                <div class=\"row mb-3\">
                                    <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"inputEmail3\">
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Password</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" class=\"form-control\" id=\"inputPassword3\">
                                    </div>
                                </div>
                                <fieldset class=\"row mb-3\">
                                    <legend class=\"col-form-label col-sm-2 pt-0\">Radios</legend>
                                    <div class=\"col-sm-10\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"gridRadios\"
                                                id=\"gridRadios1\" value=\"option1\" checked>
                                            <label class=\"form-check-label\" for=\"gridRadios1\">
                                                First radio
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"gridRadios\"
                                                id=\"gridRadios2\" value=\"option2\">
                                            <label class=\"form-check-label\" for=\"gridRadios2\">
                                                Second radio
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class=\"row mb-3\">
                                    <legend class=\"col-form-label col-sm-2 pt-0\">Checkbox</legend>
                                    <div class=\"col-sm-10\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck1\">
                                            <label class=\"form-check-label\" for=\"gridCheck1\">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Floating Label</h6>
                            <div class=\"form-floating mb-3\">
                                <input type=\"email\" class=\"form-control\" id=\"floatingInput\"
                                    placeholder=\"name@example.com\">
                                <label for=\"floatingInput\">Email address</label>
                            </div>
                            <div class=\"form-floating mb-3\">
                                <input type=\"password\" class=\"form-control\" id=\"floatingPassword\"
                                    placeholder=\"Password\">
                                <label for=\"floatingPassword\">Password</label>
                            </div>
                            <div class=\"form-floating mb-3\">
                                <select class=\"form-select\" id=\"floatingSelect\"
                                    aria-label=\"Floating label select example\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                                <label for=\"floatingSelect\">Works with selects</label>
                            </div>
                            <div class=\"form-floating\">
                                <textarea class=\"form-control\" placeholder=\"Leave a comment here\"
                                    id=\"floatingTextarea\" style=\"height: 150px;\"></textarea>
                                <label for=\"floatingTextarea\">Comments</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">File Input</h6>
                            <div class=\"mb-3\">
                                <label for=\"formFile\" class=\"form-label\">Default file input example</label>
                                <input class=\"form-control\" type=\"file\" id=\"formFile\">
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"formFileMultiple\" class=\"form-label\">Multiple files input example</label>
                                <input class=\"form-control\" type=\"file\" id=\"formFileMultiple\" multiple>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"formFileSm\" class=\"form-label\">Small file input example</label>
                                <input class=\"form-control form-control-sm\" id=\"formFileSm\" type=\"file\">
                            </div>
                            <div>
                                <label for=\"formFileLg\" class=\"form-label\">Large file input example</label>
                                <input class=\"form-control form-control-lg\" id=\"formFileLg\" type=\"file\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Select</h6>
                            <select class=\"form-select form-select-sm mb-3\" aria-label=\".form-select-sm example\">
                                <option selected>Open this select menu</option>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                            </select>
                            <select class=\"form-select mb-3\" aria-label=\"Default select example\">
                                <option selected>Open this select menu</option>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                            </select>
                            <select class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\">
                                <option selected>Open this select menu</option>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                            </select>
                            <select class=\"form-select\" multiple aria-label=\"multiple select example\">
                                <option selected>Open this select menu</option>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Check, Radio & Switch</h6>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                                <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                    Default checkbox
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckChecked\" checked>
                                <label class=\"form-check-label\" for=\"flexCheckChecked\">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\">
                                <label class=\"form-check-label\" for=\"inlineCheckbox1\">1</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\">
                                <label class=\"form-check-label\" for=\"inlineCheckbox2\">2</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"
                                    disabled>
                                <label class=\"form-check-label\" for=\"inlineCheckbox3\">3 (disabled)</label>
                            </div>
                            <hr>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"flexRadioDefault\"
                                    id=\"flexRadioDefault1\">
                                <label class=\"form-check-label\" for=\"flexRadioDefault1\">
                                    Default radio
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"flexRadioDefault\"
                                    id=\"flexRadioDefault2\" checked>
                                <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                    Default checked radio
                                </label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio1\"
                                    value=\"option1\">
                                <label class=\"form-check-label\" for=\"inlineRadio1\">1</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio2\"
                                    value=\"option2\">
                                <label class=\"form-check-label\" for=\"inlineRadio2\">2</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio3\"
                                    value=\"option3\" disabled>
                                <label class=\"form-check-label\" for=\"inlineRadio3\">3 (disabled)</label>
                            </div>
                            <hr>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\"
                                    id=\"flexSwitchCheckDefault\">
                                <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Default switch checkbox
                                    input</label>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\"
                                    id=\"flexSwitchCheckChecked\" checked>
                                <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\">Checked switch checkbox
                                    input</label>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\"
                                    id=\"flexSwitchCheckDisabled\" disabled>
                                <label class=\"form-check-label\" for=\"flexSwitchCheckDisabled\">Disabled switch checkbox
                                    input</label>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\"
                                    id=\"flexSwitchCheckCheckedDisabled\" checked disabled>
                                <label class=\"form-check-label\" for=\"flexSwitchCheckCheckedDisabled\">Disabled checked
                                    switch checkbox input</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Input Group</h6>
                            <div class=\"input-group mb-3\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">@</span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\"
                                    aria-describedby=\"basic-addon1\">
                            </div>
                            <div class=\"input-group mb-3\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Recipient's username\"
                                    aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                <span class=\"input-group-text\" id=\"basic-addon2\">@example.com</span>
                            </div>
                            <label for=\"basic-url\" class=\"form-label\">Your vanity URL</label>
                            <div class=\"input-group mb-3\">
                                <span class=\"input-group-text\" id=\"basic-addon3\">https://example.com/users/</span>
                                <input type=\"text\" class=\"form-control\" id=\"basic-url\" aria-describedby=\"basic-addon3\">
                            </div>
                            <div class=\"input-group mb-3\">
                                <span class=\"input-group-text\">\$</span>
                                <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
                                <span class=\"input-group-text\">.00</span>
                            </div>
                            <div class=\"input-group mb-3\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\">
                                <span class=\"input-group-text\">@</span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Server\" aria-label=\"Server\">
                            </div>
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">With textarea</span>
                                <textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Sizing</h6>
                            <input class=\"form-control form-control-lg mb-3\" type=\"text\" placeholder=\".form-control-lg\"
                                aria-label=\".form-control-lg example\">
                            <input class=\"form-control mb-3\" type=\"text\" placeholder=\"Default input\"
                                aria-label=\"default input example\">
                            <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\".form-control-sm\"
                                aria-label=\".form-control-sm example\">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->

        {% endblock %}", "admin_home/form.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\admin_home\\form.html.twig");
    }
}
