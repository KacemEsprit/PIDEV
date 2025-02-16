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

/* security/register.html.twig */
class __TwigTemplate_cd4bad660f8146f8ea5d6bf3000c93a9 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Inscription - OncoKidsCare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "<div class=\"register-container\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"register-card\">
                    <div class=\"register-header\">
                        <h1 class=\"text-center mb-4\">
                            <i class=\"fas fa-user-plus text-primary\"></i>
                            Créer un compte
                        </h1>
                        <p class=\"text-center text-muted\">Rejoignez notre communauté et commencez à faire la différence</p>
                    </div>

                    ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["class" => "register-form"]]);
        yield "
                    
                    ";
        // line 26
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), 'errors')) {
            // line 27
            yield "                        <div class=\"alert alert-danger\">
                            ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 31
        yield "
                    <div class=\"form-section\">
                        <div class=\"form-floating mb-3\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        // line 39
        yield "
                            <label for=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "\">
                                <i class=\"fas fa-envelope\"></i> Email
                            </label>
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'errors');
        yield "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        // line 54
        yield "
                                    <label for=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
        yield "\">
                                        <i class=\"fas fa-user\"></i> Nom
                                    </label>
                                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "nom", [], "any", false, false, false, 58), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "prenom", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        // line 68
        yield "
                                    <label for=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "prenom", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
        yield "\">
                                        <i class=\"fas fa-user\"></i> Prénom
                                    </label>
                                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "prenom", [], "any", false, false, false, 72), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        <div class=\"form-floating mb-3\">
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "tel", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone"]]);
        // line 83
        yield "
                            <label for=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "tel", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
        yield "\">
                                <i class=\"fas fa-phone\"></i> Téléphone
                            </label>
                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "tel", [], "any", false, false, false, 87), 'errors');
        yield "
                        </div>

                        <div class=\"form-floating mb-3\">
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "adresse", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        // line 96
        yield "
                            <label for=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "adresse", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97), "html", null, true);
        yield "\">
                                <i class=\"fas fa-map-marker-alt\"></i> Adresse
                            </label>
                            ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "adresse", [], "any", false, false, false, 100), 'errors');
        yield "
                        </div>

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-user-tag\"></i> Type de compte
                            </label>
                            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 107, $this->source); })()), "role", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-select form-control", "onchange" => "toggleDonateurType()"]]);
        // line 112
        yield "
                            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), "role", [], "any", false, false, false, 113), 'errors');
        yield "
                        </div>

                        <div id=\"donateurTypeSection\" class=\"form-section mb-4\" style=\"display: none;\">
                            <label class=\"form-label required\">
                                <i class=\"fas fa-hand-holding-heart\"></i> Type de Donateur
                            </label>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"donor-type-card\" onclick=\"selectDonorType('individuel')\">
                                        <input type=\"radio\" id=\"type_individuel\" 
                                               name=\"donateurType\" 
                                               value=\"individuel\" class=\"donor-type-input\">
                                        <div class=\"donor-type-content\">
                                            <i class=\"fas fa-user donor-icon\"></i>
                                            <h5>Donateur Individuel</h5>
                                            <p>Pour les particuliers souhaitant faire des dons</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"donor-type-card\" onclick=\"selectDonorType('compagnie')\">
                                        <input type=\"radio\" id=\"type_compagnie\" 
                                               name=\"donateurType\" 
                                               value=\"compagnie\" class=\"donor-type-input\">
                                        <div class=\"donor-type-content\">
                                            <i class=\"fas fa-building donor-icon\"></i>
                                            <h5>Donateur Compagnie</h5>
                                            <p>Pour les entreprises et organisations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-floating mb-3\">
                            ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 149, $this->source); })()), "plainPassword", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        // line 154
        yield "
                            <label for=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 155, $this->source); })()), "plainPassword", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "id", [], "any", false, false, false, 155), "html", null, true);
        yield "\">
                                <i class=\"fas fa-lock\"></i> Mot de passe
                            </label>
                            ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 158, $this->source); })()), "plainPassword", [], "any", false, false, false, 158), 'errors');
        yield "
                        </div>

                        <div class=\"form-check mb-4\">
                            ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 162, $this->source); })()), "agreeTerms", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 164
        yield "
                            <label class=\"form-check-label\" for=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 165, $this->source); })()), "agreeTerms", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165), "html", null, true);
        yield "\">
                                J'accepte les <a href=\"#\" class=\"text-primary\">conditions d'utilisation</a>
                            </label>
                            ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 168, $this->source); })()), "agreeTerms", [], "any", false, false, false, 168), 'errors');
        yield "
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary btn-lg w-100\">
                            <i class=\"fas fa-user-plus\"></i> S'inscrire
                        </button>
                    </div>

                    ";
        // line 176
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 176, $this->source); })()), 'form_end');
        yield "

                    <div class=\"text-center mt-4\">
                        <p class=\"text-muted\">
                            Déjà inscrit ? 
                            <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-primary\">
                                Connectez-vous ici
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.register-container {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 100vh;
}

.register-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin-top: 2rem;
}

.register-header {
    margin-bottom: 2rem;
}

.register-header h1 {
    color: #2c3e50;
    font-weight: 600;
}

.form-section {
    margin-bottom: 1.5rem;
}

.form-floating > label {
    padding-left: 2.5rem;
}

.form-floating > .form-control {
    padding-left: 2.5rem;
}

.form-floating > .form-control:focus {
    border-color: #4e73df;
    box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
}

.donor-type-card {
    background: white;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.donor-type-card:hover {
    border-color: #4e73df;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.donor-type-card.selected {
    border-color: #4e73df;
    background-color: #f8f9ff;
}

.donor-type-input {
    position: absolute;
    opacity: 0;
}

.donor-type-content {
    text-align: center;
}

.donor-icon {
    font-size: 2rem;
    color: #4e73df;
    margin-bottom: 1rem;
}

.donor-type-content h5 {
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.donor-type-content p {
    color: #6c757d;
    font-size: 0.9rem;
    margin: 0;
}

.btn-primary {
    background-color: #4e73df;
    border-color: #4e73df;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #2e59d9;
    border-color: #2e59d9;
    transform: translateY(-1px);
}

.form-check-label {
    color: #6c757d;
}

.text-primary {
    color: #4e73df !important;
}

a {
    text-decoration: none;
    transition: all 0.3s ease;
}

a:hover {
    color: #2e59d9;
}
</style>

<script>
function toggleDonateurType() {
    const roleSelect = document.getElementById('";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 315, $this->source); })()), "role", [], "any", false, false, false, 315), "vars", [], "any", false, false, false, 315), "id", [], "any", false, false, false, 315), "html", null, true);
        yield "');
    const donateurTypeSection = document.getElementById('donateurTypeSection');
    
    if (roleSelect.value === '";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("App\\Entity\\User::ROLE_DONATEUR"), "html", null, true);
        yield "') {
        donateurTypeSection.style.display = 'block';
        document.querySelectorAll('[name=\"donateurType\"]').forEach(radio => {
            radio.required = true;
        });
    } else {
        donateurTypeSection.style.display = 'none';
        document.querySelectorAll('[name=\"donateurType\"]').forEach(radio => {
            radio.required = false;
            radio.checked = false;
        });
        document.querySelectorAll('.donor-type-card').forEach(card => {
            card.classList.remove('selected');
        });
    }
}

function selectDonorType(type) {
    // Déselectionner toutes les cartes
    document.querySelectorAll('.donor-type-card').forEach(card => {
        card.classList.remove('selected');
    });
    
    // Sélectionner la carte cliquée
    const radio = document.getElementById('type_' + type);
    radio.checked = true;
    radio.closest('.donor-type-card').classList.add('selected');
}

// Initialisation
document.addEventListener('DOMContentLoaded', function() {
    toggleDonateurType();
    
    // Vérifier si un type de donateur est déjà sélectionné
    document.querySelectorAll('[name=\"donateurType\"]').forEach(radio => {
        if (radio.checked) {
            radio.closest('.donor-type-card').classList.add('selected');
        }
    });
});
</script>
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
        return "security/register.html.twig";
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
        return array (  498 => 318,  492 => 315,  355 => 181,  347 => 176,  336 => 168,  330 => 165,  327 => 164,  325 => 162,  318 => 158,  312 => 155,  309 => 154,  307 => 149,  268 => 113,  265 => 112,  263 => 107,  253 => 100,  247 => 97,  244 => 96,  242 => 91,  235 => 87,  229 => 84,  226 => 83,  224 => 78,  215 => 72,  209 => 69,  206 => 68,  204 => 63,  196 => 58,  190 => 55,  187 => 54,  185 => 49,  176 => 43,  170 => 40,  167 => 39,  165 => 34,  160 => 31,  154 => 28,  151 => 27,  149 => 26,  144 => 24,  129 => 11,  116 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription - OncoKidsCare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
<div class=\"register-container\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"register-card\">
                    <div class=\"register-header\">
                        <h1 class=\"text-center mb-4\">
                            <i class=\"fas fa-user-plus text-primary\"></i>
                            Créer un compte
                        </h1>
                        <p class=\"text-center text-muted\">Rejoignez notre communauté et commencez à faire la différence</p>
                    </div>

                    {{ form_start(registrationForm, {'attr': {'class': 'register-form'}}) }}
                    
                    {% if form_errors(registrationForm) %}
                        <div class=\"alert alert-danger\">
                            {{ form_errors(registrationForm) }}
                        </div>
                    {% endif %}

                    <div class=\"form-section\">
                        <div class=\"form-floating mb-3\">
                            {{ form_widget(registrationForm.email, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Email'
                                }
                            }) }}
                            <label for=\"{{ registrationForm.email.vars.id }}\">
                                <i class=\"fas fa-envelope\"></i> Email
                            </label>
                            {{ form_errors(registrationForm.email) }}
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(registrationForm.nom, {
                                        'attr': {
                                            'class': 'form-control',
                                            'placeholder': 'Nom'
                                        }
                                    }) }}
                                    <label for=\"{{ registrationForm.nom.vars.id }}\">
                                        <i class=\"fas fa-user\"></i> Nom
                                    </label>
                                    {{ form_errors(registrationForm.nom) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(registrationForm.prenom, {
                                        'attr': {
                                            'class': 'form-control',
                                            'placeholder': 'Prénom'
                                        }
                                    }) }}
                                    <label for=\"{{ registrationForm.prenom.vars.id }}\">
                                        <i class=\"fas fa-user\"></i> Prénom
                                    </label>
                                    {{ form_errors(registrationForm.prenom) }}
                                </div>
                            </div>
                        </div>

                        <div class=\"form-floating mb-3\">
                            {{ form_widget(registrationForm.tel, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Téléphone'
                                }
                            }) }}
                            <label for=\"{{ registrationForm.tel.vars.id }}\">
                                <i class=\"fas fa-phone\"></i> Téléphone
                            </label>
                            {{ form_errors(registrationForm.tel) }}
                        </div>

                        <div class=\"form-floating mb-3\">
                            {{ form_widget(registrationForm.adresse, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Adresse'
                                }
                            }) }}
                            <label for=\"{{ registrationForm.adresse.vars.id }}\">
                                <i class=\"fas fa-map-marker-alt\"></i> Adresse
                            </label>
                            {{ form_errors(registrationForm.adresse) }}
                        </div>

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-user-tag\"></i> Type de compte
                            </label>
                            {{ form_widget(registrationForm.role, {
                                'attr': {
                                    'class': 'form-select form-control',
                                    'onchange': 'toggleDonateurType()'
                                }
                            }) }}
                            {{ form_errors(registrationForm.role) }}
                        </div>

                        <div id=\"donateurTypeSection\" class=\"form-section mb-4\" style=\"display: none;\">
                            <label class=\"form-label required\">
                                <i class=\"fas fa-hand-holding-heart\"></i> Type de Donateur
                            </label>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"donor-type-card\" onclick=\"selectDonorType('individuel')\">
                                        <input type=\"radio\" id=\"type_individuel\" 
                                               name=\"donateurType\" 
                                               value=\"individuel\" class=\"donor-type-input\">
                                        <div class=\"donor-type-content\">
                                            <i class=\"fas fa-user donor-icon\"></i>
                                            <h5>Donateur Individuel</h5>
                                            <p>Pour les particuliers souhaitant faire des dons</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"donor-type-card\" onclick=\"selectDonorType('compagnie')\">
                                        <input type=\"radio\" id=\"type_compagnie\" 
                                               name=\"donateurType\" 
                                               value=\"compagnie\" class=\"donor-type-input\">
                                        <div class=\"donor-type-content\">
                                            <i class=\"fas fa-building donor-icon\"></i>
                                            <h5>Donateur Compagnie</h5>
                                            <p>Pour les entreprises et organisations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-floating mb-3\">
                            {{ form_widget(registrationForm.plainPassword, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Mot de passe'
                                }
                            }) }}
                            <label for=\"{{ registrationForm.plainPassword.vars.id }}\">
                                <i class=\"fas fa-lock\"></i> Mot de passe
                            </label>
                            {{ form_errors(registrationForm.plainPassword) }}
                        </div>

                        <div class=\"form-check mb-4\">
                            {{ form_widget(registrationForm.agreeTerms, {
                                'attr': {'class': 'form-check-input'}
                            }) }}
                            <label class=\"form-check-label\" for=\"{{ registrationForm.agreeTerms.vars.id }}\">
                                J'accepte les <a href=\"#\" class=\"text-primary\">conditions d'utilisation</a>
                            </label>
                            {{ form_errors(registrationForm.agreeTerms) }}
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary btn-lg w-100\">
                            <i class=\"fas fa-user-plus\"></i> S'inscrire
                        </button>
                    </div>

                    {{ form_end(registrationForm) }}

                    <div class=\"text-center mt-4\">
                        <p class=\"text-muted\">
                            Déjà inscrit ? 
                            <a href=\"{{ path('app_login') }}\" class=\"text-primary\">
                                Connectez-vous ici
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.register-container {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 100vh;
}

.register-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin-top: 2rem;
}

.register-header {
    margin-bottom: 2rem;
}

.register-header h1 {
    color: #2c3e50;
    font-weight: 600;
}

.form-section {
    margin-bottom: 1.5rem;
}

.form-floating > label {
    padding-left: 2.5rem;
}

.form-floating > .form-control {
    padding-left: 2.5rem;
}

.form-floating > .form-control:focus {
    border-color: #4e73df;
    box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
}

.donor-type-card {
    background: white;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.donor-type-card:hover {
    border-color: #4e73df;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.donor-type-card.selected {
    border-color: #4e73df;
    background-color: #f8f9ff;
}

.donor-type-input {
    position: absolute;
    opacity: 0;
}

.donor-type-content {
    text-align: center;
}

.donor-icon {
    font-size: 2rem;
    color: #4e73df;
    margin-bottom: 1rem;
}

.donor-type-content h5 {
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.donor-type-content p {
    color: #6c757d;
    font-size: 0.9rem;
    margin: 0;
}

.btn-primary {
    background-color: #4e73df;
    border-color: #4e73df;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #2e59d9;
    border-color: #2e59d9;
    transform: translateY(-1px);
}

.form-check-label {
    color: #6c757d;
}

.text-primary {
    color: #4e73df !important;
}

a {
    text-decoration: none;
    transition: all 0.3s ease;
}

a:hover {
    color: #2e59d9;
}
</style>

<script>
function toggleDonateurType() {
    const roleSelect = document.getElementById('{{ registrationForm.role.vars.id }}');
    const donateurTypeSection = document.getElementById('donateurTypeSection');
    
    if (roleSelect.value === '{{ constant('App\\\\Entity\\\\User::ROLE_DONATEUR') }}') {
        donateurTypeSection.style.display = 'block';
        document.querySelectorAll('[name=\"donateurType\"]').forEach(radio => {
            radio.required = true;
        });
    } else {
        donateurTypeSection.style.display = 'none';
        document.querySelectorAll('[name=\"donateurType\"]').forEach(radio => {
            radio.required = false;
            radio.checked = false;
        });
        document.querySelectorAll('.donor-type-card').forEach(card => {
            card.classList.remove('selected');
        });
    }
}

function selectDonorType(type) {
    // Déselectionner toutes les cartes
    document.querySelectorAll('.donor-type-card').forEach(card => {
        card.classList.remove('selected');
    });
    
    // Sélectionner la carte cliquée
    const radio = document.getElementById('type_' + type);
    radio.checked = true;
    radio.closest('.donor-type-card').classList.add('selected');
}

// Initialisation
document.addEventListener('DOMContentLoaded', function() {
    toggleDonateurType();
    
    // Vérifier si un type de donateur est déjà sélectionné
    document.querySelectorAll('[name=\"donateurType\"]').forEach(radio => {
        if (radio.checked) {
            radio.closest('.donor-type-card').classList.add('selected');
        }
    });
});
</script>
{% endblock %}
", "security/register.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\projet-onco\\PIDEV\\oncokidscare\\templates\\security\\register.html.twig");
    }
}
