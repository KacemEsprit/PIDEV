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
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["info"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            yield "        <div class=\"toast-message\">
            ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
    ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            yield "        <div class=\"new-publication-form\">
            <div class=\"form-header\">
                <img src=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
            yield "\" class=\"user-avatar\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "prenom", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
                <h2>Créer une publication</h2>
            </div>

            ";
            // line 20
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "publication-form"]]);
            yield "
                <div class=\"form-group\">
                    ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "contenu", [], "any", false, false, false, 22), 'widget', ["attr" => ["placeholder" => "Partagez votre expérience ou posez une question...", "class" => "form-control", "maxlength" => 120, "oninput" => "this.value = this.value.slice(0, 120)"]]);
            // line 29
            yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"file-input-label\">
                        <i class=\"fas fa-camera\"></i> Photos (maximum 5)
                        ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "imageFiles", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control-file", "accept" => "image/*", "multiple" => true, "data-max-files" => 5]]);
            // line 42
            yield "
                    </label>
                </div>

                <div class=\"form-actions\">
                    <div class=\"anonymous-option\">
                        <label class=\"anonymous-toggle\">
                            ";
            // line 49
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "isAnonymous", [], "any", false, false, false, 49), 'widget');
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
            // line 61
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
            yield "
        </div>
    ";
        }
        // line 64
        yield "
    <div class=\"publications-list\">
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 67
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 67) == "approved")) {
                // line 68
                yield "                <div class=\"publication-card\">
                    <div class=\"publication-header\">
                        ";
                // line 70
                if (CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isAnonymous", [], "any", false, false, false, 70)) {
                    // line 71
                    yield "                            <div class=\"anonymous-avatar\">
                                <i class=\"fas fa-user-secret\"></i>
                            </div>
                        ";
                } else {
                    // line 75
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
                    yield "\" class=\"user-avatar\" alt=\"Avatar\">
                        ";
                }
                // line 77
                yield "                        <div class=\"publication-info\">
                            <div class=\"author-name\">
                                ";
                // line 79
                if (CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isAnonymous", [], "any", false, false, false, 79)) {
                    // line 80
                    yield "                                    <span class=\"anonymous-badge\">
                                        <i class=\"fas fa-user-secret\"></i> Anonyme
                                    </span>
                                ";
                } else {
                    // line 84
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 84), "prenom", [], "any", false, false, false, 84), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 84), "nom", [], "any", false, false, false, 84), "html", null, true);
                    yield "
                                ";
                }
                // line 86
                yield "                            </div>
                            <span class=\"publication-date\">
                                <i class=\"far fa-clock\"></i> ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "datePb", [], "any", false, false, false, 88), "d/m/Y H:i"), "html", null, true);
                yield "
                            </span>
                        </div>
                        ";
                // line 91
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91) && CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 91))) {
                    // line 92
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92))) {
                        // line 93
                        yield "                                <div class=\"publication-actions\">
                                    <a href=\"";
                        // line 94
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                        yield "\" class=\"btn btn-edit\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
                        // line 97
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette publication ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 98
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 98))), "html", null, true);
                        yield "\">
                                        <button type=\"submit\" class=\"btn btn-delete\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            ";
                    }
                    // line 105
                    yield "                        ";
                }
                // line 106
                yield "                    </div>
<div class=\"publication-content\">
    ";
                // line 108
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "contenu", [], "any", false, false, false, 108), "html", null, true));
                yield "
    
    ";
                // line 110
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 110)) > 0)) {
                    // line 111
                    yield "       <div class=\"publication-images\" data-publication-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 111), "html", null, true);
                    yield "\">
    ";
                    // line 112
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 112), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
                        // line 113
                        yield "        <div class=\"publication-image\">
            <img src=\"";
                        // line 114
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["imageUrl"]), "html", null, true);
                        yield "\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\"
                 onclick=\"openImageModal(this.src, ";
                        // line 117
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 117), "html", null, true);
                        yield ")\">
        </div>
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['imageUrl'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    yield "    
    ";
                    // line 121
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 121)) > 3)) {
                        // line 122
                        yield "        <div class=\"publication-image more-images\" 
             onclick=\"openImageModal('";
                        // line 123
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 123), 3, [], "array", false, false, false, 123)), "html", null, true);
                        yield "', ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 123), "html", null, true);
                        yield ")\">
            <img src=\"";
                        // line 124
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 124), 3, [], "array", false, false, false, 124)), "html", null, true);
                        yield "\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\">
            <div class=\"more-overlay\">
                <span>+";
                        // line 128
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 128)) - 3), "html", null, true);
                        yield "</span>
            </div>
        </div>
    ";
                    }
                    // line 132
                    yield "</div>
    ";
                }
                // line 134
                yield "</div>

<div class=\"publication-footer\">
    <div class=\"action-buttons\">
        ";
                // line 138
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 139
                    yield "            <div class=\"like-section d-flex align-items-center\">
                <a href=\"";
                    // line 140
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 140)]), "html", null, true);
                    yield "\" class=\"btn btn-link me-1\">
                    <i class=\"";
                    // line 141
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141) && CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141)], "method", false, false, false, 141))) {
                        yield "fas";
                    } else {
                        yield "far";
                    }
                    yield " fa-heart\"></i>
                </a>
                <span class=\"like-count\" data-bs-toggle=\"modal\" data-bs-target=\"#likesModal";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 143), "html", null, true);
                    yield "\" style=\"cursor: pointer;\">
                    ";
                    // line 144
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "likes", [], "any", false, false, false, 144)), "html", null, true);
                    yield "
                </span>
            </div>
        ";
                }
                // line 148
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                yield "\" class=\"btn btn-link\">
            <i class=\"far fa-comment\"></i> Commenter (";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "comments", [], "any", false, false, false, 149)), "html", null, true);
                yield ")
        </a>
    </div>
</div>
                </div>
            ";
            } else {
                // line 155
                yield "                ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 155) == "pending") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155) == CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 155)))) {
                    // line 156
                    yield "                    <div class=\"toast-message\">
                        Votre publication est en attente de validation.
                    </div>
                ";
                }
                // line 160
                yield "            ";
            }
            // line 161
            yield "        ";
            $context['_iterated'] = true;
        }
        // line 167
        if (!$context['_iterated']) {
            // line 162
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
        // line 168
        yield "    </div>
</div>

<!-- Modal for likes -->
";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 172, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 173
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 173) == "approved")) {
                // line 174
                yield "        <div class=\"modal fade\" id=\"likesModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 174), "html", null, true);
                yield "\" tabindex=\"-1\" aria-labelledby=\"likesModalLabel";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 174), "html", null, true);
                yield "\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"likesModalLabel";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 178), "html", null, true);
                yield "\">Liste des utilisateurs ayant aimé la publication</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        ";
                // line 182
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "likes", [], "any", false, false, false, 182)) > 0)) {
                    // line 183
                    yield "                            <ul class=\"list-group\">
                                ";
                    // line 184
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "likes", [], "any", false, false, false, 184));
                    foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
                        // line 185
                        yield "                                    <li class=\"list-group-item d-flex align-items-center\">
                                        <img src=\"";
                        // line 186
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
                        yield "\" class=\"user-avatar me-2\" alt=\"Avatar\" style=\"width: 30px; height: 30px; border-radius: 50%;\">
                                        <span>";
                        // line 187
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["like"], "user", [], "any", false, false, false, 187), "prenom", [], "any", false, false, false, 187), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["like"], "user", [], "any", false, false, false, 187), "nom", [], "any", false, false, false, 187), "html", null, true);
                        yield "</span>
                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['like'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 190
                    yield "                            </ul>
                        ";
                } else {
                    // line 192
                    yield "                            <p class=\"text-center\">Aucun like pour le moment</p>
                        ";
                }
                // line 194
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
        // line 200
        yield "
<style>


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
        // line 726
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

        // line 727
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
        return array (  1051 => 727,  1028 => 726,  500 => 200,  489 => 194,  485 => 192,  481 => 190,  470 => 187,  466 => 186,  463 => 185,  459 => 184,  456 => 183,  454 => 182,  447 => 178,  437 => 174,  434 => 173,  430 => 172,  424 => 168,  413 => 162,  411 => 167,  407 => 161,  404 => 160,  398 => 156,  395 => 155,  386 => 149,  381 => 148,  374 => 144,  370 => 143,  361 => 141,  357 => 140,  354 => 139,  352 => 138,  346 => 134,  342 => 132,  335 => 128,  328 => 124,  322 => 123,  319 => 122,  317 => 121,  314 => 120,  305 => 117,  299 => 114,  296 => 113,  292 => 112,  287 => 111,  285 => 110,  280 => 108,  276 => 106,  273 => 105,  263 => 98,  259 => 97,  253 => 94,  250 => 93,  247 => 92,  245 => 91,  239 => 88,  235 => 86,  227 => 84,  221 => 80,  219 => 79,  215 => 77,  209 => 75,  203 => 71,  201 => 70,  197 => 68,  194 => 67,  189 => 66,  185 => 64,  179 => 61,  164 => 49,  155 => 42,  153 => 35,  145 => 29,  143 => 22,  138 => 20,  129 => 16,  125 => 14,  123 => 13,  120 => 12,  111 => 9,  108 => 8,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                            <div class=\"author-name\">
                                {% if publication.isAnonymous %}
                                    <span class=\"anonymous-badge\">
                                        <i class=\"fas fa-user-secret\"></i> Anonyme
                                    </span>
                                {% else %}
                                    {{ publication.user.prenom }} {{ publication.user.nom }}
                                {% endif %}
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
                    <div class=\"toast-message\">
                        Votre publication est en attente de validation.
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
