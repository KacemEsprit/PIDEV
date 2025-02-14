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

/* publication/index.html.twig */
class __TwigTemplate_2347e704b52a0a4b612aff4ebe4c8a3d extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_publication.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $this->parent = $this->loadTemplate("base_publication.html.twig", "publication/index.html.twig", 1);
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

        yield "Publications";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["info"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "        <div class=\"toast-message\">
            ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "
    ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            yield "        <div class=\"new-publication-form\">
            <div class=\"form-header\">
                <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
            yield "\" class=\"user-avatar\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "prenom", [], "any", false, false, false, 17), "html", null, true);
            yield "\">
                <h2>Créer une publication</h2>
            </div>

            ";
            // line 21
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "publication-form"]]);
            yield "
                <div class=\"form-group\">
                    ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "contenu", [], "any", false, false, false, 23), 'widget', ["attr" => ["placeholder" => "Partagez votre expérience ou posez une question...", "class" => "form-control", "maxlength" => 120, "oninput" => "this.value = this.value.slice(0, 120)"]]);
            // line 30
            yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"file-input-label\">
                        <i class=\"fas fa-camera\"></i> Photos (maximum 5)
                        ";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "imageFiles", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control-file", "accept" => "image/*", "multiple" => true, "data-max-files" => 5]]);
            // line 43
            yield "
                    </label>
                </div>
            </br></br>

        <div class=\"form-group category-select\">
                <div class=\"input-group\">
                    <span class=\"input-group-text\">
                        <i class=\"fas fa-tag\"></i>
                    </span>
                    ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "category", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-select custom-select"]]);
            // line 57
            yield "
                </div>
            </div> 
                <div class=\"form-actions\">
                    <div class=\"anonymous-option\">
                        <label class=\"anonymous-toggle\">
                            ";
            // line 63
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "isAnonymous", [], "any", false, false, false, 63), 'widget');
            yield "
                            <span class=\"toggle-slider\"></span>
                            <span class=\"toggle-label\">
                                <i class=\"fas fa-user-secret\"></i> Publier en anonyme
                            </span>
                        </label>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i> Publier
                    </button>
                </div>
            ";
            // line 75
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
            yield "
        </div>
    ";
        }
        // line 78
        yield "<div class=\"category-filters mb-4\">
    <div class=\"btn-group\" role=\"group\">
        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index");
        yield "\" 
           class=\"btn btn-outline-secondary ";
        // line 81
        yield (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "query", [], "any", false, false, false, 81), "get", ["category"], "method", false, false, false, 81)) ? ("active") : (""));
        yield "\">
            Toutes
        </a>
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Témoignage", "Question médicale", "Conseil", "Autre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 85
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index", ["category" => $context["category"]]), "html", null, true);
            yield "\" 
               class=\"btn btn-outline-secondary ";
            // line 86
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "query", [], "any", false, false, false, 86), "get", ["category"], "method", false, false, false, 86) == $context["category"])) ? ("active") : (""));
            yield "\">
                ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "    </div>    </div>


    <div class=\"publications-list\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 94, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 95
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 95) == "approved")) {
                // line 96
                yield "                <div class=\"publication-card\">
                    <div class=\"publication-header\">
                        ";
                // line 98
                if (CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isAnonymous", [], "any", false, false, false, 98)) {
                    // line 99
                    yield "                            <div class=\"anonymous-avatar\">
                                <i class=\"fas fa-user-secret\"></i>
                            </div>
                        ";
                } else {
                    // line 103
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
                    yield "\" class=\"user-avatar\" alt=\"Avatar\">
                        ";
                }
                // line 105
                yield "                        <div class=\"publication-info\">
                                <div class=\"d-flex align-items-center gap-2\">

                            <div class=\"author-name\">
                           
            </div>
                                ";
                // line 111
                if (CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isAnonymous", [], "any", false, false, false, 111)) {
                    // line 112
                    yield "                                    <span class=\"anonymous-badge\">
                                        <i class=\"fas fa-user-secret\"></i> Anonyme
                                    </span>
                                ";
                } else {
                    // line 116
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 116), "prenom", [], "any", false, false, false, 116), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 116), "nom", [], "any", false, false, false, 116), "html", null, true);
                    yield "
                                ";
                }
                // line 118
                yield "                                   <span class=\"badge category-badge badge-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "category", [], "any", false, false, false, 118)), [" " => "-"]), "html", null, true);
                yield "\">
                ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "category", [], "any", false, false, false, 119), "html", null, true);
                yield "
            </span>
                            </div>
                            <span class=\"publication-date\">
                                <i class=\"far fa-clock\"></i> ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "datePb", [], "any", false, false, false, 123), "d/m/Y H:i"), "html", null, true);
                yield "
                            </span>
                        </div>
                        ";
                // line 126
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126) && CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 126))) {
                    // line 127
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "id", [], "any", false, false, false, 127) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 127), "id", [], "any", false, false, false, 127))) {
                        // line 128
                        yield "                                <div class=\"publication-actions\">
                                    <a href=\"";
                        // line 129
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                        yield "\" class=\"btn btn-edit\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
                        // line 132
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette publication ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 133
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 133))), "html", null, true);
                        yield "\">
                                        <button type=\"submit\" class=\"btn btn-delete\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            ";
                    }
                    // line 140
                    yield "                        ";
                }
                // line 141
                yield "                    </div>
<div class=\"publication-content\">
    ";
                // line 143
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "contenu", [], "any", false, false, false, 143), "html", null, true));
                yield "
    
    ";
                // line 145
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 145)) > 0)) {
                    // line 146
                    yield "       <div class=\"publication-images\" data-publication-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 146), "html", null, true);
                    yield "\">
    ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 147), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
                        // line 148
                        yield "        <div class=\"publication-image\">
            <img src=\"";
                        // line 149
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["imageUrl"]), "html", null, true);
                        yield "\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\"
                 onclick=\"openImageModal(this.src, ";
                        // line 152
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 152), "html", null, true);
                        yield ")\">
        </div>
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['imageUrl'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    yield "    
    ";
                    // line 156
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 156)) > 3)) {
                        // line 157
                        yield "        <div class=\"publication-image more-images\" 
             onclick=\"openImageModal('";
                        // line 158
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 158), 3, [], "array", false, false, false, 158)), "html", null, true);
                        yield "', ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 158), "html", null, true);
                        yield ")\">
            <img src=\"";
                        // line 159
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 159), 3, [], "array", false, false, false, 159)), "html", null, true);
                        yield "\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\">
            <div class=\"more-overlay\">
                <span>+";
                        // line 163
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 163)) - 3), "html", null, true);
                        yield "</span>
            </div>
        </div>
    ";
                    }
                    // line 167
                    yield "</div>
    ";
                }
                // line 169
                yield "</div>

<div class=\"publication-footer\">
    <div class=\"action-buttons\">
        ";
                // line 173
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 174
                    yield "            <div class=\"like-section d-flex align-items-center\">
                <a href=\"";
                    // line 175
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 175)]), "html", null, true);
                    yield "\" class=\"btn btn-link me-1\">
                    <i class=\"";
                    // line 176
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176) && CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176)], "method", false, false, false, 176))) {
                        yield "fas";
                    } else {
                        yield "far";
                    }
                    yield " fa-heart\"></i>
                </a>
                <span class=\"like-count\" data-bs-toggle=\"modal\" data-bs-target=\"#likesModal";
                    // line 178
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 178), "html", null, true);
                    yield "\" style=\"cursor: pointer;\">
                    ";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "likes", [], "any", false, false, false, 179)), "html", null, true);
                    yield "
                </span>
            </div>
        ";
                }
                // line 183
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 183)]), "html", null, true);
                yield "\" class=\"btn btn-link\">
            <i class=\"far fa-comment\"></i> Commenter (";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "comments", [], "any", false, false, false, 184)), "html", null, true);
                yield ")
        </a>
    </div>
</div>
                </div>
            ";
            } else {
                // line 190
                yield "                 ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 190) == "pending") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190) == CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 190)))) {
                    // line 191
                    yield "        <div class=\"pending-publication-card\">
            <div class=\"pending-content\">
                <div class=\"pending-icon\">
                    <i class=\"fas fa-hourglass-half\"></i>
                </div>
                <div class=\"pending-text\">
                    <h3>Publication en cours de modération</h3>
                    <p>Votre contribution est actuellement examinée par notre équipe.</p>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill\"></div>
                    </div>
                    <small>Cette publication sera visible après approbation</small>
                </div>
            </div>
        </div>
    ";
                }
                // line 207
                yield "            ";
            }
            // line 208
            yield "        ";
            $context['_iterated'] = true;
        }
        // line 214
        if (!$context['_iterated']) {
            // line 209
            yield "            <div class=\"no-publications\">
                <i class=\"far fa-comment-dots\"></i>
                <p>Aucune publication pour le moment.</p>
                <p>Soyez le premier à partager votre expérience !</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "    </div>
</div>

<!-- Modal for likes -->
";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 219, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 220
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 220) == "approved")) {
                // line 221
                yield "        <div class=\"modal fade\" id=\"likesModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 221), "html", null, true);
                yield "\" tabindex=\"-1\" aria-labelledby=\"likesModalLabel";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 221), "html", null, true);
                yield "\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"likesModalLabel";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 225), "html", null, true);
                yield "\">Liste des utilisateurs ayant aimé la publication</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        ";
                // line 229
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "likes", [], "any", false, false, false, 229)) > 0)) {
                    // line 230
                    yield "                            <ul class=\"list-group\">
                                ";
                    // line 231
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "likes", [], "any", false, false, false, 231));
                    foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
                        // line 232
                        yield "                                    <li class=\"list-group-item d-flex align-items-center\">
                                        <img src=\"";
                        // line 233
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
                        yield "\" class=\"user-avatar me-2\" alt=\"Avatar\" style=\"width: 30px; height: 30px; border-radius: 50%;\">
                                        <span>";
                        // line 234
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["like"], "user", [], "any", false, false, false, 234), "prenom", [], "any", false, false, false, 234), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["like"], "user", [], "any", false, false, false, 234), "nom", [], "any", false, false, false, 234), "html", null, true);
                        yield "</span>
                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['like'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 237
                    yield "                            </ul>
                        ";
                } else {
                    // line 239
                    yield "                            <p class=\"text-center\">Aucun like pour le moment</p>
                        ";
                }
                // line 241
                yield "                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "
<style>

.pending-publication-card {
    background: #fff3e0;
    border-radius: 12px;
    padding: 1.5rem;
    margin: 1rem 0;
    border-left: 4px solid #ffb74d;
    position: relative;
    box-shadow: 0 3px 6px rgba(0,0,0,0.05);
}

.pending-content {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.pending-icon {
    background: #ffe0b2;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: pulse 2s infinite;
}

.pending-icon i {
    color: #ff9800;
    font-size: 1.5rem;
}

.pending-text h3 {
    color: #ff6d00;
    margin: 0 0 0.5rem 0;
    font-size: 1.1rem;
}

.pending-text p {
    color: #666;
    margin: 0 0 1rem 0;
    font-size: 0.9rem;
}

.progress-bar {
    width: 200px;
    height: 6px;
    background: #ffe0b2;
    border-radius: 3px;
    overflow: hidden;
    margin: 0.5rem 0;
}

.progress-fill {
    width: 45%;
    height: 100%;
    background: #ffb74d;
    animation: progress 2s ease-in-out infinite;
}

.pending-text small {
    color: #999;
    font-size: 0.8rem;
    display: block;
    margin-top: 0.5rem;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes progress {
    0% { width: 30%; }
    50% { width: 60%; }
    100% { width: 30%; }
}

@media (max-width: 480px) {
    .pending-content {
        flex-direction: column;
        text-align: center;
    }
    
    .progress-bar {
        width: 100%;
    }
}
.category-select .input-group-text {
    background-color: #95E1D3;
    border: none;
    color: white;
    border-radius: 8px 0 0 8px;
        padding: 0 1rem;

}

.custom-select {
     border: 2px solid #e0f3f8;
    border-left: none;
    border-radius: 0 8px 8px 0;
    padding: 0.75rem 1.5rem;
    height: auto;
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%2395E1D3' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e\");
    background-position: right 1rem center;
    background-repeat: no-repeat;
    background-size: 16px 12px;
    appearance: none;
}

.custom-select:focus {
 box-shadow: none;
    border-color: #95E1D3;
}

.custom-select option {
    padding: 0.5rem;
    background: white;
    color: #333;
}

.custom-select option:checked {
    background-color: #95E1D3 !important;
    color: white;
}

.custom-select:hover {
    cursor: pointer;
}
.category-badge {
    font-size: 0.75rem;
    padding: 0.35em 0.65em;
    border-radius: 0.25rem;
}

.badge-témoignage { background-color: #95E1D3; color: white; }
.badge-question-médicale { background-color: #ff6b6b; color: white; }
.badge-conseil { background-color: #4ecdc4; color: white; }
.badge-autre { background-color: #ffe66d; color: black; }

.category-filters .btn.active {
    background-color: #95E1D3;
    color: white;
    border-color: #95E1D3;
}
.new-publication-form {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.form-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
}

.form-header h2 {
    margin: 0 0 0 1rem;
    color: #95E1D3;
    font-size: 1.5rem;
}

.user-avatar, .anonymous-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.anonymous-avatar {
    background: #e9ecef;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c757d;
}

.form-control {
  border: 2px solid #e0f3f8;
    border-radius: 8px;
    padding: 1rem;
    resize: vertical;
    min-height: 100px;
    margin-bottom: 1rem;
    width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
    white-space: pre-wrap;
    
}
.publication-info, 
.author-name, 
.publication-date,
.action-buttons,
.btn-link {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
/* For handling long URLs or unbreakable content */
a, pre, code {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
.form-control:focus {
    border-color: #95E1D3;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
}

.file-input-label {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: #e0f3f8;
    border-radius: 4px;
    cursor: pointer;
    color: #95E1D3;
}

.file-input-label i {
    margin-right: 0.5rem;
}

.form-control-file {
    display: none;
}

.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
}

.anonymous-toggle {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
}

.toggle-slider {
    width: 40px;
    height: 20px;
    background: #e0f3f8;
    border-radius: 20px;
    position: relative;
    transition: all 0.3s ease;
}

.toggle-slider:before {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    background: white;
    border-radius: 50%;
    top: 2px;
    left: 2px;
    transition: all 0.3s ease;
}

.anonymous-toggle input[type=\"checkbox\"] {
    display: none;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider {
    background: #95E1D3;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider:before {
    transform: translateX(20px);
}

.toggle-label {
    color: #495057;
}

.btn-primary {
    background: #95E1D3;
    color: white;
    border: none;
    padding: 0.5rem 1.5rem;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: #236161;
}

.publications-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.publication-card {
 background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.publication-header {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1rem;
    position: relative;
}

.publication-info {
    flex-grow: 1;
    margin-left: 1rem;
}

.author-name {
    font-weight: 600;
    color: #95E1D3;
    margin-bottom: 0.25rem;
}

.publication-date {
    font-size: 0.875rem;
    color: #6c757d;
}

.publication-actions {
    position: absolute;
    right: 0;
    top: 0;
    display: flex;
    gap: 0.5rem;
}

.btn-edit, .btn-delete {
    padding: 0.5rem;
    border: none;
    border-radius: 4px;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-edit {
    background: #95E1D3;
}

.btn-delete {
    background: #dc3545;
}

.btn-edit:hover {
    background: #236161;
}

.btn-delete:hover {
    background: #c82333;
}

.publication-content {
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}

.publication-images {
display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1rem;
    max-height: 400px;
    overflow: hidden;
}

.publication-images.single-image {
    grid-template-columns: 1fr;
}

.publication-images.two-images {
    grid-template-columns: repeat(2, 1fr);
}

.publication-images:not(.single-image):not(.two-images) {
    grid-template-columns: repeat(2, 1fr);
}

@media (min-width: 768px) {
    .publication-images:not(.single-image):not(.two-images) {
        grid-template-columns: repeat(2, 1fr);
    }
}

.publication-image {
  position: relative;
    aspect-ratio: 1;
    height: 160px;
    border-radius: 8px;
    overflow: hidden;
}

.publication-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.publication-img:hover {
    transform: scale(1.05);
}

.more-images {
    position: relative;
    cursor: pointer;
}

.more-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 2rem;
    font-weight: bold;
}

.publication-footer {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #e0f3f8;
}

.action-buttons {
    display: flex;
    gap: 1rem;
}

.btn-link {
    color: #95E1D3;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-link:hover {
    color: #236161;
}

.no-publications {
    text-align: center;
    padding: 3rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: #6c757d;
}

.no-publications i {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #95E1D3;
}

.toast-message {
    background-color: #f8f9fa;
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    padding: 20px;
}

.modal-content {
    position: relative;
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80vh;
    object-fit: contain;
}

.modal img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}
.modal-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 15px;
    cursor: pointer;
    border-radius: 50%;
    border: none;
    font-size: 24px;
    transition: background 0.3s ease;
}

.modal-nav:hover {
    background: rgba(255, 255, 255, 0.4);
}

.modal-prev {
    left: 20px;
}

.modal-next {
    right: 20px;
}
.modal-counter {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    background: rgba(0, 0, 0, 0.5);
    padding: 5px 15px;
    border-radius: 15px;
    font-size: 14px;
}
@media (max-width: 768px) {
    .form-actions {
        flex-direction: column;
        gap: 1rem;
    }
    
    .btn-primary {
        width: 100%;
        justify-content: center;
    }
    
    .publication-actions {
        position: static;
        margin-top: 1rem;
    }
}
</style>
<script>
let currentImageIndex = 0;
let images = [];

function openImageModal(src, publicationId) {
    // Récupérer uniquement les images de la publication courante
    images = Array.from(document.querySelector(`[data-publication-id=\"\${publicationId}\"]`)
        .querySelectorAll('.publication-img'))
        .map(img => img.src);
    currentImageIndex = images.indexOf(src);
    
    var modal = document.createElement('div');
    modal.className = 'modal';
    
    var img = document.createElement('img');
    img.src = src;
    img.className = 'modal-content';
    
    var closeBtn = document.createElement('span');
    closeBtn.className = 'close';
    closeBtn.innerHTML = '&times;';
    
    var prevBtn = document.createElement('button');
    prevBtn.className = 'modal-nav modal-prev';
    prevBtn.innerHTML = '&#10094;';
    
    var nextBtn = document.createElement('button');
    nextBtn.className = 'modal-nav modal-next';
    nextBtn.innerHTML = '&#10095;';
    
    var counter = document.createElement('div');
    counter.className = 'modal-counter';
    updateCounter(counter);
    
    modal.appendChild(img);
    modal.appendChild(closeBtn);
    modal.appendChild(prevBtn);
    modal.appendChild(nextBtn);
    modal.appendChild(counter);
    document.body.appendChild(modal);
    
    setTimeout(() => modal.style.display = 'flex', 0);
    document.body.style.overflow = 'hidden';
    
    // Navigation
    prevBtn.onclick = function(e) {
        e.stopPropagation();
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        img.src = images[currentImageIndex];
        updateCounter(counter);
    }
    
    nextBtn.onclick = function(e) {
        e.stopPropagation();
        currentImageIndex = (currentImageIndex + 1) % images.length;
        img.src = images[currentImageIndex];
        updateCounter(counter);
    }
    
    // Fermeture
    closeBtn.onclick = function() {
        closeModal(modal);
    }
    
    modal.onclick = function(e) {
        if (e.target === modal) {
            closeModal(modal);
        }
    }
    
    // Navigation avec les flèches du clavier
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevBtn.click();
        } else if (e.key === 'ArrowRight') {
            nextBtn.click();
        } else if (e.key === 'Escape') {
            closeModal(modal);
        }
    });
}

function updateCounter(counter) {
    counter.textContent = `\${currentImageIndex + 1} / \${images.length}`;
}

function closeModal(modal) {
    document.body.removeChild(modal);
    document.body.style.overflow = 'auto';
}
</script>
";
        // line 918
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 919
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .like-count:hover {
        text-decoration: underline;
    }
    
    .modal-header {
        background-color: #95E1D3;
        color: white;
    }
    
    .list-group-item {
        border: none;
        border-bottom: 1px solid #eee;
    }
    
    .list-group-item:last-child {
        border-bottom: none;
    }
</style>
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
        return "publication/index.html.twig";
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
        return array (  1272 => 919,  1249 => 918,  576 => 247,  565 => 241,  561 => 239,  557 => 237,  546 => 234,  542 => 233,  539 => 232,  535 => 231,  532 => 230,  530 => 229,  523 => 225,  513 => 221,  510 => 220,  506 => 219,  500 => 215,  489 => 209,  487 => 214,  483 => 208,  480 => 207,  462 => 191,  459 => 190,  450 => 184,  445 => 183,  438 => 179,  434 => 178,  425 => 176,  421 => 175,  418 => 174,  416 => 173,  410 => 169,  406 => 167,  399 => 163,  392 => 159,  386 => 158,  383 => 157,  381 => 156,  378 => 155,  369 => 152,  363 => 149,  360 => 148,  356 => 147,  351 => 146,  349 => 145,  344 => 143,  340 => 141,  337 => 140,  327 => 133,  323 => 132,  317 => 129,  314 => 128,  311 => 127,  309 => 126,  303 => 123,  296 => 119,  291 => 118,  283 => 116,  277 => 112,  275 => 111,  267 => 105,  261 => 103,  255 => 99,  253 => 98,  249 => 96,  246 => 95,  241 => 94,  235 => 90,  226 => 87,  222 => 86,  217 => 85,  213 => 84,  207 => 81,  203 => 80,  199 => 78,  193 => 75,  178 => 63,  170 => 57,  168 => 53,  156 => 43,  154 => 36,  146 => 30,  144 => 23,  139 => 21,  130 => 17,  126 => 15,  124 => 14,  121 => 13,  112 => 10,  109 => 9,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_publication.html.twig' %}

{% block title %}Publications{% endblock %}

{% block body %}
<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">

    {% for message in app.flashes('info') %}
        <div class=\"toast-message\">
            {{ message }}
        </div>
    {% endfor %}

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <div class=\"new-publication-form\">
            <div class=\"form-header\">
                <img src=\"{{ asset('images/img2.png') }}\" class=\"user-avatar\" alt=\"{{ app.user.prenom }}\">
                <h2>Créer une publication</h2>
            </div>

            {{ form_start(form, {'attr': {'class': 'publication-form'}}) }}
                <div class=\"form-group\">
                    {{ form_widget(form.contenu, {
                        'attr': {
                            'placeholder': 'Partagez votre expérience ou posez une question...',
                            'class': 'form-control',
                                'maxlength': 120,
        'oninput': 'this.value = this.value.slice(0, 120)'
                        }
                    }) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"file-input-label\">
                        <i class=\"fas fa-camera\"></i> Photos (maximum 5)
                        {{ form_widget(form.imageFiles, {
                            'attr': {
                                'class': 'form-control-file',
                                'accept': 'image/*',
                                'multiple': true,
                                'data-max-files': 5
                            }
                        }) }}
                    </label>
                </div>
            </br></br>

        <div class=\"form-group category-select\">
                <div class=\"input-group\">
                    <span class=\"input-group-text\">
                        <i class=\"fas fa-tag\"></i>
                    </span>
                    {{ form_widget(form.category, {
                        'attr': {
                            'class': 'form-select custom-select'
                        }
                    }) }}
                </div>
            </div> 
                <div class=\"form-actions\">
                    <div class=\"anonymous-option\">
                        <label class=\"anonymous-toggle\">
                            {{ form_widget(form.isAnonymous) }}
                            <span class=\"toggle-slider\"></span>
                            <span class=\"toggle-label\">
                                <i class=\"fas fa-user-secret\"></i> Publier en anonyme
                            </span>
                        </label>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i> Publier
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    {% endif %}
<div class=\"category-filters mb-4\">
    <div class=\"btn-group\" role=\"group\">
        <a href=\"{{ path('app_publication_index') }}\" 
           class=\"btn btn-outline-secondary {{ not app.request.query.get('category') ? 'active' }}\">
            Toutes
        </a>
        {% for category in ['Témoignage', 'Question médicale', 'Conseil', 'Autre'] %}
            <a href=\"{{ path('app_publication_index', {category: category}) }}\" 
               class=\"btn btn-outline-secondary {{ app.request.query.get('category') == category ? 'active' }}\">
                {{ category }}
            </a>
        {% endfor %}
    </div>    </div>


    <div class=\"publications-list\">
        {% for publication in publications %}
            {% if publication.status == 'approved' %}
                <div class=\"publication-card\">
                    <div class=\"publication-header\">
                        {% if publication.isAnonymous %}
                            <div class=\"anonymous-avatar\">
                                <i class=\"fas fa-user-secret\"></i>
                            </div>
                        {% else %}
                            <img src=\"{{ asset('images/img2.png') }}\" class=\"user-avatar\" alt=\"Avatar\">
                        {% endif %}
                        <div class=\"publication-info\">
                                <div class=\"d-flex align-items-center gap-2\">

                            <div class=\"author-name\">
                           
            </div>
                                {% if publication.isAnonymous %}
                                    <span class=\"anonymous-badge\">
                                        <i class=\"fas fa-user-secret\"></i> Anonyme
                                    </span>
                                {% else %}
                                    {{ publication.user.prenom }} {{ publication.user.nom }}
                                {% endif %}
                                   <span class=\"badge category-badge badge-{{ publication.category|lower|replace({' ': '-'}) }}\">
                {{ publication.category }}
            </span>
                            </div>
                            <span class=\"publication-date\">
                                <i class=\"far fa-clock\"></i> {{ publication.datePb|date('d/m/Y H:i') }}
                            </span>
                        </div>
                        {% if app.user and publication.user %}
                            {% if app.user.id == publication.user.id %}
                                <div class=\"publication-actions\">
                                    <a href=\"{{ path('app_publication_edit', {'id': publication.id}) }}\" class=\"btn btn-edit\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_publication_delete', {'id': publication.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette publication ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ publication.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-delete\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            {% endif %}
                        {% endif %}
                    </div>
<div class=\"publication-content\">
    {{ publication.contenu|nl2br }}
    
    {% if publication.imageUrls|length > 0 %}
       <div class=\"publication-images\" data-publication-id=\"{{ publication.id }}\">
    {% for imageUrl in publication.imageUrls|slice(0, 3) %}
        <div class=\"publication-image\">
            <img src=\"{{ asset(imageUrl) }}\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\"
                 onclick=\"openImageModal(this.src, {{ publication.id }})\">
        </div>
    {% endfor %}
    
    {% if publication.imageUrls|length > 3 %}
        <div class=\"publication-image more-images\" 
             onclick=\"openImageModal('{{ asset(publication.imageUrls[3]) }}', {{ publication.id }})\">
            <img src=\"{{ asset(publication.imageUrls[3]) }}\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\">
            <div class=\"more-overlay\">
                <span>+{{ publication.imageUrls|length - 3 }}</span>
            </div>
        </div>
    {% endif %}
</div>
    {% endif %}
</div>

<div class=\"publication-footer\">
    <div class=\"action-buttons\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <div class=\"like-section d-flex align-items-center\">
                <a href=\"{{ path('app_publication_like', {'id': publication.id}) }}\" class=\"btn btn-link me-1\">
                    <i class=\"{% if app.user and publication.isLikedByUser(app.user) %}fas{% else %}far{% endif %} fa-heart\"></i>
                </a>
                <span class=\"like-count\" data-bs-toggle=\"modal\" data-bs-target=\"#likesModal{{ publication.id }}\" style=\"cursor: pointer;\">
                    {{ publication.likes|length }}
                </span>
            </div>
        {% endif %}
        <a href=\"{{ path('app_publication_show', {'id': publication.id}) }}\" class=\"btn btn-link\">
            <i class=\"far fa-comment\"></i> Commenter ({{ publication.comments|length }})
        </a>
    </div>
</div>
                </div>
            {% else %}
                 {% if publication.status == 'pending' and app.user and app.user == publication.user %}
        <div class=\"pending-publication-card\">
            <div class=\"pending-content\">
                <div class=\"pending-icon\">
                    <i class=\"fas fa-hourglass-half\"></i>
                </div>
                <div class=\"pending-text\">
                    <h3>Publication en cours de modération</h3>
                    <p>Votre contribution est actuellement examinée par notre équipe.</p>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill\"></div>
                    </div>
                    <small>Cette publication sera visible après approbation</small>
                </div>
            </div>
        </div>
    {% endif %}
            {% endif %}
        {% else %}
            <div class=\"no-publications\">
                <i class=\"far fa-comment-dots\"></i>
                <p>Aucune publication pour le moment.</p>
                <p>Soyez le premier à partager votre expérience !</p>
            </div>
        {% endfor %}
    </div>
</div>

<!-- Modal for likes -->
{% for publication in publications %}
    {% if publication.status == 'approved' %}
        <div class=\"modal fade\" id=\"likesModal{{ publication.id }}\" tabindex=\"-1\" aria-labelledby=\"likesModalLabel{{ publication.id }}\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"likesModalLabel{{ publication.id }}\">Liste des utilisateurs ayant aimé la publication</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        {% if publication.likes|length > 0 %}
                            <ul class=\"list-group\">
                                {% for like in publication.likes %}
                                    <li class=\"list-group-item d-flex align-items-center\">
                                        <img src=\"{{ asset('images/img2.png') }}\" class=\"user-avatar me-2\" alt=\"Avatar\" style=\"width: 30px; height: 30px; border-radius: 50%;\">
                                        <span>{{ like.user.prenom }} {{ like.user.nom }}</span>
                                    </li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            <p class=\"text-center\">Aucun like pour le moment</p>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endfor %}

<style>

.pending-publication-card {
    background: #fff3e0;
    border-radius: 12px;
    padding: 1.5rem;
    margin: 1rem 0;
    border-left: 4px solid #ffb74d;
    position: relative;
    box-shadow: 0 3px 6px rgba(0,0,0,0.05);
}

.pending-content {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.pending-icon {
    background: #ffe0b2;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: pulse 2s infinite;
}

.pending-icon i {
    color: #ff9800;
    font-size: 1.5rem;
}

.pending-text h3 {
    color: #ff6d00;
    margin: 0 0 0.5rem 0;
    font-size: 1.1rem;
}

.pending-text p {
    color: #666;
    margin: 0 0 1rem 0;
    font-size: 0.9rem;
}

.progress-bar {
    width: 200px;
    height: 6px;
    background: #ffe0b2;
    border-radius: 3px;
    overflow: hidden;
    margin: 0.5rem 0;
}

.progress-fill {
    width: 45%;
    height: 100%;
    background: #ffb74d;
    animation: progress 2s ease-in-out infinite;
}

.pending-text small {
    color: #999;
    font-size: 0.8rem;
    display: block;
    margin-top: 0.5rem;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes progress {
    0% { width: 30%; }
    50% { width: 60%; }
    100% { width: 30%; }
}

@media (max-width: 480px) {
    .pending-content {
        flex-direction: column;
        text-align: center;
    }
    
    .progress-bar {
        width: 100%;
    }
}
.category-select .input-group-text {
    background-color: #95E1D3;
    border: none;
    color: white;
    border-radius: 8px 0 0 8px;
        padding: 0 1rem;

}

.custom-select {
     border: 2px solid #e0f3f8;
    border-left: none;
    border-radius: 0 8px 8px 0;
    padding: 0.75rem 1.5rem;
    height: auto;
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%2395E1D3' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e\");
    background-position: right 1rem center;
    background-repeat: no-repeat;
    background-size: 16px 12px;
    appearance: none;
}

.custom-select:focus {
 box-shadow: none;
    border-color: #95E1D3;
}

.custom-select option {
    padding: 0.5rem;
    background: white;
    color: #333;
}

.custom-select option:checked {
    background-color: #95E1D3 !important;
    color: white;
}

.custom-select:hover {
    cursor: pointer;
}
.category-badge {
    font-size: 0.75rem;
    padding: 0.35em 0.65em;
    border-radius: 0.25rem;
}

.badge-témoignage { background-color: #95E1D3; color: white; }
.badge-question-médicale { background-color: #ff6b6b; color: white; }
.badge-conseil { background-color: #4ecdc4; color: white; }
.badge-autre { background-color: #ffe66d; color: black; }

.category-filters .btn.active {
    background-color: #95E1D3;
    color: white;
    border-color: #95E1D3;
}
.new-publication-form {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.form-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
}

.form-header h2 {
    margin: 0 0 0 1rem;
    color: #95E1D3;
    font-size: 1.5rem;
}

.user-avatar, .anonymous-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.anonymous-avatar {
    background: #e9ecef;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c757d;
}

.form-control {
  border: 2px solid #e0f3f8;
    border-radius: 8px;
    padding: 1rem;
    resize: vertical;
    min-height: 100px;
    margin-bottom: 1rem;
    width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
    white-space: pre-wrap;
    
}
.publication-info, 
.author-name, 
.publication-date,
.action-buttons,
.btn-link {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
/* For handling long URLs or unbreakable content */
a, pre, code {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
.form-control:focus {
    border-color: #95E1D3;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
}

.file-input-label {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: #e0f3f8;
    border-radius: 4px;
    cursor: pointer;
    color: #95E1D3;
}

.file-input-label i {
    margin-right: 0.5rem;
}

.form-control-file {
    display: none;
}

.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
}

.anonymous-toggle {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
}

.toggle-slider {
    width: 40px;
    height: 20px;
    background: #e0f3f8;
    border-radius: 20px;
    position: relative;
    transition: all 0.3s ease;
}

.toggle-slider:before {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    background: white;
    border-radius: 50%;
    top: 2px;
    left: 2px;
    transition: all 0.3s ease;
}

.anonymous-toggle input[type=\"checkbox\"] {
    display: none;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider {
    background: #95E1D3;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider:before {
    transform: translateX(20px);
}

.toggle-label {
    color: #495057;
}

.btn-primary {
    background: #95E1D3;
    color: white;
    border: none;
    padding: 0.5rem 1.5rem;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: #236161;
}

.publications-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.publication-card {
 background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.publication-header {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1rem;
    position: relative;
}

.publication-info {
    flex-grow: 1;
    margin-left: 1rem;
}

.author-name {
    font-weight: 600;
    color: #95E1D3;
    margin-bottom: 0.25rem;
}

.publication-date {
    font-size: 0.875rem;
    color: #6c757d;
}

.publication-actions {
    position: absolute;
    right: 0;
    top: 0;
    display: flex;
    gap: 0.5rem;
}

.btn-edit, .btn-delete {
    padding: 0.5rem;
    border: none;
    border-radius: 4px;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-edit {
    background: #95E1D3;
}

.btn-delete {
    background: #dc3545;
}

.btn-edit:hover {
    background: #236161;
}

.btn-delete:hover {
    background: #c82333;
}

.publication-content {
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}

.publication-images {
display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1rem;
    max-height: 400px;
    overflow: hidden;
}

.publication-images.single-image {
    grid-template-columns: 1fr;
}

.publication-images.two-images {
    grid-template-columns: repeat(2, 1fr);
}

.publication-images:not(.single-image):not(.two-images) {
    grid-template-columns: repeat(2, 1fr);
}

@media (min-width: 768px) {
    .publication-images:not(.single-image):not(.two-images) {
        grid-template-columns: repeat(2, 1fr);
    }
}

.publication-image {
  position: relative;
    aspect-ratio: 1;
    height: 160px;
    border-radius: 8px;
    overflow: hidden;
}

.publication-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.publication-img:hover {
    transform: scale(1.05);
}

.more-images {
    position: relative;
    cursor: pointer;
}

.more-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 2rem;
    font-weight: bold;
}

.publication-footer {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #e0f3f8;
}

.action-buttons {
    display: flex;
    gap: 1rem;
}

.btn-link {
    color: #95E1D3;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-link:hover {
    color: #236161;
}

.no-publications {
    text-align: center;
    padding: 3rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: #6c757d;
}

.no-publications i {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #95E1D3;
}

.toast-message {
    background-color: #f8f9fa;
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    padding: 20px;
}

.modal-content {
    position: relative;
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80vh;
    object-fit: contain;
}

.modal img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}
.modal-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 15px;
    cursor: pointer;
    border-radius: 50%;
    border: none;
    font-size: 24px;
    transition: background 0.3s ease;
}

.modal-nav:hover {
    background: rgba(255, 255, 255, 0.4);
}

.modal-prev {
    left: 20px;
}

.modal-next {
    right: 20px;
}
.modal-counter {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    background: rgba(0, 0, 0, 0.5);
    padding: 5px 15px;
    border-radius: 15px;
    font-size: 14px;
}
@media (max-width: 768px) {
    .form-actions {
        flex-direction: column;
        gap: 1rem;
    }
    
    .btn-primary {
        width: 100%;
        justify-content: center;
    }
    
    .publication-actions {
        position: static;
        margin-top: 1rem;
    }
}
</style>
<script>
let currentImageIndex = 0;
let images = [];

function openImageModal(src, publicationId) {
    // Récupérer uniquement les images de la publication courante
    images = Array.from(document.querySelector(`[data-publication-id=\"\${publicationId}\"]`)
        .querySelectorAll('.publication-img'))
        .map(img => img.src);
    currentImageIndex = images.indexOf(src);
    
    var modal = document.createElement('div');
    modal.className = 'modal';
    
    var img = document.createElement('img');
    img.src = src;
    img.className = 'modal-content';
    
    var closeBtn = document.createElement('span');
    closeBtn.className = 'close';
    closeBtn.innerHTML = '&times;';
    
    var prevBtn = document.createElement('button');
    prevBtn.className = 'modal-nav modal-prev';
    prevBtn.innerHTML = '&#10094;';
    
    var nextBtn = document.createElement('button');
    nextBtn.className = 'modal-nav modal-next';
    nextBtn.innerHTML = '&#10095;';
    
    var counter = document.createElement('div');
    counter.className = 'modal-counter';
    updateCounter(counter);
    
    modal.appendChild(img);
    modal.appendChild(closeBtn);
    modal.appendChild(prevBtn);
    modal.appendChild(nextBtn);
    modal.appendChild(counter);
    document.body.appendChild(modal);
    
    setTimeout(() => modal.style.display = 'flex', 0);
    document.body.style.overflow = 'hidden';
    
    // Navigation
    prevBtn.onclick = function(e) {
        e.stopPropagation();
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        img.src = images[currentImageIndex];
        updateCounter(counter);
    }
    
    nextBtn.onclick = function(e) {
        e.stopPropagation();
        currentImageIndex = (currentImageIndex + 1) % images.length;
        img.src = images[currentImageIndex];
        updateCounter(counter);
    }
    
    // Fermeture
    closeBtn.onclick = function() {
        closeModal(modal);
    }
    
    modal.onclick = function(e) {
        if (e.target === modal) {
            closeModal(modal);
        }
    }
    
    // Navigation avec les flèches du clavier
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevBtn.click();
        } else if (e.key === 'ArrowRight') {
            nextBtn.click();
        } else if (e.key === 'Escape') {
            closeModal(modal);
        }
    });
}

function updateCounter(counter) {
    counter.textContent = `\${currentImageIndex + 1} / \${images.length}`;
}

function closeModal(modal) {
    document.body.removeChild(modal);
    document.body.style.overflow = 'auto';
}
</script>
{% block stylesheets %}
{{ parent() }}
<style>
    .like-count:hover {
        text-decoration: underline;
    }
    
    .modal-header {
        background-color: #95E1D3;
        color: white;
    }
    
    .list-group-item {
        border: none;
        border-bottom: 1px solid #eee;
    }
    
    .list-group-item:last-child {
        border-bottom: none;
    }
</style>
{% endblock %}
{% endblock %}", "publication/index.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\publication\\index.html.twig");
    }
}
