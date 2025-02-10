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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            yield "        <div class=\"new-publication-form\">
            <div class=\"form-header\">
                <img src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
            yield "\" class=\"user-avatar\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "prenom", [], "any", false, false, false, 10), "html", null, true);
            yield "\">
                <h2>Créer une publication</h2>
            </div>

            ";
            // line 14
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "publication-form"]]);
            yield "
                <div class=\"form-group\">
                    ";
            // line 16
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "contenu", [], "any", false, false, false, 16), 'widget', ["attr" => ["placeholder" => "Partagez votre expérience ou posez une question...", "class" => "form-control"]]);
            // line 21
            yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"file-input-label\">
                        <i class=\"fas fa-camera\"></i> Photos (maximum 5)
                        ";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "imageFiles", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control-file", "accept" => "image/*", "multiple" => true, "data-max-files" => 5]]);
            // line 34
            yield "
                    </label>
                </div>

                <div class=\"form-actions\">
                    <div class=\"anonymous-option\">
                        <label class=\"anonymous-toggle\">
                            ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "isAnonymous", [], "any", false, false, false, 41), 'widget');
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
            // line 53
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
            yield "
        </div>
    ";
        }
        // line 56
        yield "
    <div class=\"publications-list\">
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 59
            yield "            <div class=\"publication-card\">
                <div class=\"publication-header\">
                    ";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isAnonymous", [], "any", false, false, false, 61)) {
                // line 62
                yield "                        <div class=\"anonymous-avatar\">
                            <i class=\"fas fa-user-secret\"></i>
                        </div>
                    ";
            } else {
                // line 66
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
                yield "\" class=\"user-avatar\" alt=\"Avatar\">
                    ";
            }
            // line 68
            yield "                    <div class=\"publication-info\">
                        <div class=\"author-name\">
                            ";
            // line 70
            if (CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isAnonymous", [], "any", false, false, false, 70)) {
                // line 71
                yield "                                <span class=\"anonymous-badge\">
                                    <i class=\"fas fa-user-secret\"></i> Anonyme
                                </span>
                            ";
            } else {
                // line 75
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 75), "prenom", [], "any", false, false, false, 75), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75), "html", null, true);
                yield "
                            ";
            }
            // line 77
            yield "                        </div>
                        <span class=\"publication-date\">
                            <i class=\"far fa-clock\"></i> ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "datePb", [], "any", false, false, false, 79), "d/m/Y H:i"), "html", null, true);
            yield "
                        </span>
                    </div>
                    ";
            // line 82
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82) && CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 82))) {
                // line 83
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                    // line 84
                    yield "                            <div class=\"publication-actions\">
                                <a href=\"";
                    // line 85
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                    yield "\" class=\"btn btn-edit\" title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <form method=\"post\" action=\"";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette publication ?');\" style=\"display: inline-block;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 89))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"btn btn-delete\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            </div>
                        ";
                }
                // line 96
                yield "                    ";
            }
            // line 97
            yield "                </div>

                <div class=\"publication-content\">
                    ";
            // line 100
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "contenu", [], "any", false, false, false, 100), "html", null, true));
            yield "
                    
                    ";
            // line 102
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 102)) > 0)) {
                // line 103
                yield "                        <div class=\"publication-images ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 103)) == 1)) {
                    yield "single-image";
                } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 103)) == 2)) {
                    yield "two-images";
                }
                yield "\">
                            ";
                // line 104
                $context["maxDisplayImages"] = 4;
                // line 105
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 105), 0, (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 105)) > (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 105, $this->source); })()))) ? ((isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 105, $this->source); })())) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 105))))));
                foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
                    // line 106
                    yield "                                <div class=\"publication-image\">
                                    <img src=\"";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["imageUrl"]), "html", null, true);
                    yield "\" 
                                         alt=\"Image de publication\" 
                                         class=\"publication-img\"
                                         onclick=\"openImageModal(this.src)\">
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['imageUrl'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                yield "                            
                            ";
                // line 114
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 114)) > (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 114, $this->source); })()))) {
                    // line 115
                    yield "                                <div class=\"publication-image more-images\" onclick=\"openImageModal('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 115), (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 115, $this->source); })()), [], "array", false, false, false, 115)), "html", null, true);
                    yield "')\">
                                    <img src=\"";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 116), (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 116, $this->source); })()), [], "array", false, false, false, 116)), "html", null, true);
                    yield "\" 
                                         alt=\"Image de publication\" 
                                         class=\"publication-img\">
                                    <div class=\"more-overlay\">
                                        <span>+";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 120)) - (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 120, $this->source); })())), "html", null, true);
                    yield "</span>
                                    </div>
                                </div>
                            ";
                }
                // line 124
                yield "                        </div>
                    ";
            }
            // line 126
            yield "                </div>

                <div class=\"publication-footer\">
                    ";
            // line 129
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 130
                yield "                        <button class=\"like-btn like-publication-btn ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130) && CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130)], "method", false, false, false, 130))) ? ("liked") : (""));
                yield "\"
                                data-publication-id=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 131), "html", null, true);
                yield "\">
                            <i class=\"";
                // line 132
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132) && CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132)], "method", false, false, false, 132))) ? ("fas") : ("far"));
                yield " fa-heart\"></i>
                            <span class=\"like-count\">";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "getLikeCount", [], "method", false, false, false, 133), "html", null, true);
                yield "</span>
                        </button>
                    ";
            }
            // line 136
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"btn btn-link\">
                        <i class=\"far fa-comment\"></i> Commenter (";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "comments", [], "any", false, false, false, 137)), "html", null, true);
            yield ")
                    </a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 147
        if (!$context['_iterated']) {
            // line 142
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
        // line 148
        yield "    </div>
</div>

<style>
.container {
    background-color: #f8f9fa;
    min-height: 100vh;
    padding-top: 2rem;
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
    color: #2d7a7a;
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
}

.form-control:focus {
    border-color: #2d7a7a;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
}

.file-input-label {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: #e0f3f8;
    border-radius: 4px;
    cursor: pointer;
    color: #2d7a7a;
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
    background: #2d7a7a;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider:before {
    transform: translateX(20px);
}

.toggle-label {
    color: #495057;
}

.btn-primary {
    background: #2d7a7a;
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
    color: #2d7a7a;
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
    background: #2d7a7a;
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
    margin: 1rem 0;
    white-space: pre-line;
}

.publication-images {
    display: grid;
    gap: 0.5rem;
    margin-top: 1rem;
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
    padding-top: 100%; /* 1:1 Aspect Ratio */
    overflow: hidden;
    border-radius: 12px;
}

.publication-img {
    position: absolute;
    top: 0;
    left: 0;
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
    border-top: 1px solid #eee;
    display: flex;
    gap: 1rem;
    align-items: center;
}

.like-btn {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px 10px;
    color: #666;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.like-btn:hover {
    color: #ff4b4b;
    transform: scale(1.1);
}

.like-btn.liked {
    color: #ff4b4b;
}

.like-count {
    font-size: 0.9em;
    font-weight: 500;
}

@keyframes likeAnimation {
    0% { transform: scale(1); }
    50% { transform: scale(1.3); }
    100% { transform: scale(1); }
}

.btn-link {
    color: #2d7a7a;
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
    color: #2d7a7a;
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
    max-width: 90%;
    max-height: 90vh;
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
function openImageModal(src) {
    var modal = document.createElement('div');
    modal.className = 'modal';
    modal.style.display = 'flex';
    modal.style.justifyContent = 'center';
    modal.style.alignItems = 'center';
    
    var img = document.createElement('img');
    img.src = src;
    img.className = 'modal-content';
    
    var closeBtn = document.createElement('span');
    closeBtn.className = 'close';
    closeBtn.innerHTML = '&times;';
    
    modal.appendChild(img);
    modal.appendChild(closeBtn);
    document.body.appendChild(modal);
    
    document.body.style.overflow = 'hidden';
    
    closeBtn.onclick = function() {
        document.body.removeChild(modal);
        document.body.style.overflow = 'auto';
    }
    
    modal.onclick = function(e) {
        if (e.target === modal) {
            document.body.removeChild(modal);
            document.body.style.overflow = 'auto';
        }
    }
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && document.contains(modal)) {
            document.body.removeChild(modal);
            document.body.style.overflow = 'auto';
        }
    });
}
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
        return array (  377 => 148,  366 => 142,  364 => 147,  355 => 137,  350 => 136,  344 => 133,  340 => 132,  336 => 131,  331 => 130,  329 => 129,  324 => 126,  320 => 124,  313 => 120,  306 => 116,  301 => 115,  299 => 114,  296 => 113,  284 => 107,  281 => 106,  276 => 105,  274 => 104,  265 => 103,  263 => 102,  258 => 100,  253 => 97,  250 => 96,  240 => 89,  236 => 88,  230 => 85,  227 => 84,  224 => 83,  222 => 82,  216 => 79,  212 => 77,  204 => 75,  198 => 71,  196 => 70,  192 => 68,  186 => 66,  180 => 62,  178 => 61,  174 => 59,  169 => 58,  165 => 56,  159 => 53,  144 => 41,  135 => 34,  133 => 27,  125 => 21,  123 => 16,  118 => 14,  109 => 10,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_publication.html.twig' %}

{% block title %}Publications{% endblock %}

{% block body %}
<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">
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
                            'class': 'form-control'
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
                        {% if app.user.id == publication.user.id or is_granted('ROLE_ADMIN') %}
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
                        <div class=\"publication-images {% if publication.imageUrls|length == 1 %}single-image{% elseif publication.imageUrls|length == 2 %}two-images{% endif %}\">
                            {% set maxDisplayImages = 4 %}
                            {% for imageUrl in publication.imageUrls|slice(0, publication.imageUrls|length > maxDisplayImages ? maxDisplayImages : publication.imageUrls|length) %}
                                <div class=\"publication-image\">
                                    <img src=\"{{ asset(imageUrl) }}\" 
                                         alt=\"Image de publication\" 
                                         class=\"publication-img\"
                                         onclick=\"openImageModal(this.src)\">
                                </div>
                            {% endfor %}
                            
                            {% if publication.imageUrls|length > maxDisplayImages %}
                                <div class=\"publication-image more-images\" onclick=\"openImageModal('{{ asset(publication.imageUrls[maxDisplayImages]) }}')\">
                                    <img src=\"{{ asset(publication.imageUrls[maxDisplayImages]) }}\" 
                                         alt=\"Image de publication\" 
                                         class=\"publication-img\">
                                    <div class=\"more-overlay\">
                                        <span>+{{ publication.imageUrls|length - maxDisplayImages }}</span>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"publication-footer\">
                    {% if is_granted('ROLE_USER') %}
                        <button class=\"like-btn like-publication-btn {{ app.user and publication.isLikedByUser(app.user.id) ? 'liked' }}\"
                                data-publication-id=\"{{ publication.id }}\">
                            <i class=\"{{ app.user and publication.isLikedByUser(app.user.id) ? 'fas' : 'far' }} fa-heart\"></i>
                            <span class=\"like-count\">{{ publication.getLikeCount() }}</span>
                        </button>
                    {% endif %}
                    <a href=\"{{ path('app_publication_show', {'id': publication.id}) }}\" class=\"btn btn-link\">
                        <i class=\"far fa-comment\"></i> Commenter ({{ publication.comments|length }})
                    </a>
                </div>
            </div>
        {% else %}
            <div class=\"no-publications\">
                <i class=\"far fa-comment-dots\"></i>
                <p>Aucune publication pour le moment.</p>
                <p>Soyez le premier à partager votre expérience !</p>
            </div>
        {% endfor %}
    </div>
</div>

<style>
.container {
    background-color: #f8f9fa;
    min-height: 100vh;
    padding-top: 2rem;
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
    color: #2d7a7a;
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
}

.form-control:focus {
    border-color: #2d7a7a;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
}

.file-input-label {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: #e0f3f8;
    border-radius: 4px;
    cursor: pointer;
    color: #2d7a7a;
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
    background: #2d7a7a;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider:before {
    transform: translateX(20px);
}

.toggle-label {
    color: #495057;
}

.btn-primary {
    background: #2d7a7a;
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
    color: #2d7a7a;
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
    background: #2d7a7a;
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
    margin: 1rem 0;
    white-space: pre-line;
}

.publication-images {
    display: grid;
    gap: 0.5rem;
    margin-top: 1rem;
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
    padding-top: 100%; /* 1:1 Aspect Ratio */
    overflow: hidden;
    border-radius: 12px;
}

.publication-img {
    position: absolute;
    top: 0;
    left: 0;
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
    border-top: 1px solid #eee;
    display: flex;
    gap: 1rem;
    align-items: center;
}

.like-btn {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px 10px;
    color: #666;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.like-btn:hover {
    color: #ff4b4b;
    transform: scale(1.1);
}

.like-btn.liked {
    color: #ff4b4b;
}

.like-count {
    font-size: 0.9em;
    font-weight: 500;
}

@keyframes likeAnimation {
    0% { transform: scale(1); }
    50% { transform: scale(1.3); }
    100% { transform: scale(1); }
}

.btn-link {
    color: #2d7a7a;
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
    color: #2d7a7a;
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
    max-width: 90%;
    max-height: 90vh;
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
function openImageModal(src) {
    var modal = document.createElement('div');
    modal.className = 'modal';
    modal.style.display = 'flex';
    modal.style.justifyContent = 'center';
    modal.style.alignItems = 'center';
    
    var img = document.createElement('img');
    img.src = src;
    img.className = 'modal-content';
    
    var closeBtn = document.createElement('span');
    closeBtn.className = 'close';
    closeBtn.innerHTML = '&times;';
    
    modal.appendChild(img);
    modal.appendChild(closeBtn);
    document.body.appendChild(modal);
    
    document.body.style.overflow = 'hidden';
    
    closeBtn.onclick = function() {
        document.body.removeChild(modal);
        document.body.style.overflow = 'auto';
    }
    
    modal.onclick = function(e) {
        if (e.target === modal) {
            document.body.removeChild(modal);
            document.body.style.overflow = 'auto';
        }
    }
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && document.contains(modal)) {
            document.body.removeChild(modal);
            document.body.style.overflow = 'auto';
        }
    });
}
</script>
{% endblock %}", "publication/index.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\publication\\index.html.twig");
    }
}
